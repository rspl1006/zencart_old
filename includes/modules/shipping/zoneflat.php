<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: zoneflat.php 2008-08-12 15:57:21Z Archelay $
//

class zoneflat {
	var $code, $title, $description, $icon, $enabled, $num_zones, $dest_zone;

// class constructor
	function zoneflat() {
		global $order, $db, $total_count;

		$geozones = $db->Execute("SELECT * FROM " . TABLE_GEO_ZONES);
		$this->num_zones = 6;//nafig stolko nado //$geozones->RecordCount();

		$this->code = 'zoneflat';
		$this->title = MODULE_SHIPPING_ZONEFLAT_TEXT_TITLE;
		$this->description = MODULE_SHIPPING_ZONEFLAT_TEXT_DESCRIPTION;
		$this->sort_order = MODULE_SHIPPING_ZONEFLAT_SORT_ORDER;
		$this->icon = '';
		$this->tax_class = MODULE_SHIPPING_ZONEFLAT_TAX_CLASS;
		$this->tax_basis = MODULE_SHIPPING_ZONEFLAT_TAX_BASIS;

		// disable only when entire cart is free shipping
		if (zen_get_shipping_enabled($this->code)) {
			$this->enabled = ((MODULE_SHIPPING_ZONEFLAT_STATUS == 'True') ? true : false);
		}

		if ($this->enabled == true) {
			$this->dest_zone = 0;
			for ($i=1; $i<=$this->num_zones; $i++) {
				if ((int)constant('MODULE_SHIPPING_ZONEFLAT_ZONE_' . $i) > 0) {
					$check = $db->Execute("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . constant('MODULE_SHIPPING_ZONEFLAT_ZONE_' . $i) . "' and zone_country_id = '" . $order->delivery['country']['id'] . "' order by zone_id");
					while (!$check->EOF) {
						if ($check->fields['zone_id'] < 1) {
							$this->dest_zone = $i;
							break;
						} elseif ($check->fields['zone_id'] == $order->delivery['zone_id']) {
							$this->dest_zone = $i;
							break;
						}
						$check->MoveNext();
					}
				} // END if ((int)constant('MODULE_SHIPPING_ZONEFLAT_ZONE_' . $i) > 0)
			} // END for ($i=1; $i<=$this->num_zones; $i++)
			if ($this->dest_zone < 1) {
				$this->enabled = false;
			}
		} // END if ($this->enabled == true)
	} // END function zoneflat()

// class methods
    function quote($method = '') {
		global $order, $db, $total_count;

    $item_total_count = $_SESSION['cart']->count_contents();
		$this->quotes = array('id' => $this->code,
                              'module' => MODULE_SHIPPING_ZONEFLAT_TEXT_TITLE,
                              'methods' => array(array('id' => $this->code,
                                                       'title' => MODULE_SHIPPING_ZONEFLAT_TEXT_WAY,
                                                       'cost' => (constant('MODULE_SHIPPING_ZONEFLAT_COST_' . $this->dest_zone) * $item_total_count) + constant('MODULE_SHIPPING_ZONEFLAT_HANDLING_' . $this->dest_zone))));
                                                       //'cost' => constant('MODULE_SHIPPING_ZONEFLAT_COST_' . $this->dest_zone))));
		if ($this->tax_class > 0) {
			$this->quotes['tax'] = zen_get_tax_rate($this->tax_class, $order->delivery['country']['id'], $order->delivery['zone_id']);
		}

		if (zen_not_null($this->icon)) $this->quotes['icon'] = zen_image($this->icon, $this->title);

		return $this->quotes;
	}

	function check() {
		global $db;
		if (!isset($this->_check)) {
			$check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_ZONEFLAT_STATUS'");
			$this->_check = $check_query->RecordCount();
		}
		return $this->_check;
	}

	function install() {
		global $db;
		$db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Flat Shipping', 'MODULE_SHIPPING_ZONEFLAT_STATUS', 'True', 'Do you want to offer flat rate shipping?', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
		$db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Tax Class', 'MODULE_SHIPPING_ZONEFLAT_TAX_CLASS', '0', 'Use the following tax class on the shipping fee.', '6', '0', 'zen_get_tax_class_title', 'zen_cfg_pull_down_tax_classes(', now())");
		$db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Tax Basis', 'MODULE_SHIPPING_ZONEFLAT_TAX_BASIS', 'Shipping', 'On what basis is Shipping Tax calculated. Options are<br />Shipping - Based on customers Shipping Address<br />Billing Based on customers Billing address<br />Store - Based on Store address if Billing/Shipping Zone equals Store zone', '6', '0', 'zen_cfg_select_option(array(\'Shipping\', \'Billing\', \'Store\'), ', now())");
		$db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort Order', 'MODULE_SHIPPING_ZONEFLAT_SORT_ORDER', '0', 'Sort order of display.', '6', '0', now())");

		for ($i = 1; $i <= $this->num_zones; $i++) {
			$db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Shipping Zone " . $i . "', 'MODULE_SHIPPING_ZONEFLAT_ZONE_" . $i . "', '0', 'If a zone is selected, only enable this shipping method for that zone.', '6', '0', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");
			$db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Zone " . $i . " Item Shipping Cost', 'MODULE_SHIPPING_ZONEFLAT_COST_" . $i . "', '5.00', 'The shipping cost will be multiplied by the number of items in an order that uses this shipping method.', '6', '0', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Zone " . $i . " Shipping Fee', 'MODULE_SHIPPING_ZONEFLAT_HANDLING_" . $i . "', '0.00', 'Handling fee for this shipping method.', '6', '0', now())");
		}
	}

	function remove() {
		global $db;
		$db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
	}

	function keys() {
		$keys = array('MODULE_SHIPPING_ZONEFLAT_STATUS', 'MODULE_SHIPPING_ZONEFLAT_TAX_CLASS', 'MODULE_SHIPPING_ZONEFLAT_TAX_BASIS', 'MODULE_SHIPPING_ZONEFLAT_SORT_ORDER');
		for ($i=1; $i<=$this->num_zones; $i++) {
			$keys[] = 'MODULE_SHIPPING_ZONEFLAT_ZONE_' . $i;
			$keys[] = 'MODULE_SHIPPING_ZONEFLAT_COST_' . $i;
      $keys[] = 'MODULE_SHIPPING_ZONEFLAT_HANDLING_' . $i;
		}
		return $keys;
	}
}
?>