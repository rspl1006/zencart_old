<?php

  class chrysler_po {
    var $code, $title, $description, $enabled;

// class constructor
    function chrysler_po() {
      global $order;

      $this->code = 'chrysler_po';
      $this->title = MODULE_PAYMENT_CHRYSLER_PO_TEXT_TITLE;
      $this->description = MODULE_PAYMENT_CHRYSLER_PO_TEXT_DESCRIPTION;
      $this->sort_order = MODULE_PAYMENT_CHRYSLER_PO_SORT_ORDER;
      $this->enabled = ((MODULE_PAYMENT_CHRYSLER_PO_STATUS == 'True') ? true : false);

      if ((int)MODULE_PAYMENT_CHRYSLER_PO_ORDER_STATUS_ID > 0) {
        $this->order_status = MODULE_PAYMENT_CHRYSLER_PO_ORDER_STATUS_ID;
      }

      if (is_object($order)) $this->update_status();
    }

// class methods
    function update_status() {
      global $order, $db;
      $po_query = $db->Execute("SELECT d.predefined_po FROM dealer d, witech_dp_user u, zen_customers c WHERE d.id = u.DEALER_ID AND c.customers_witech_id = u.id AND c.customers_id = '" . (int)$_SESSION['customer_id'] . "'");
      if ($po_query->fields['predefined_po'] == '' || $po_query->fields['predefined_po'] == null) {
          $this->enabled = false;
      } else {
	      $this->enabled = true;
      }
    }

    function javascript_validation() {
      return false;
    }

    function selection() {
      return array('id' => $this->code,
                   'module' => $this->title,
				   'description' => "- " . MODULE_PAYMENT_CHRYSLER_PO_DESCRIPTION);
	 
    }

    function pre_confirmation_check() {
      return false;
    }


    function confirmation() {
		return $this->get_invoice_note();
    }
	
	function get_invoice_note(){
		return array('title' => MODULE_PAYMENT_CHRYSLER_PO_INVOICE_NOTE);
	}

    function process_button() {
      return false;
    }

    function before_process() {
      return false;
    }

    function after_process() {
      return false;
    }

    function get_error() {
      return false;
    }

    function check() {
      global $db;
      if (!isset($this->_check)) {
        $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_PAYMENT_CHRYSLER_PO_STATUS'");
        $this->_check = $check_query->RecordCount();
      }
      return $this->_check;
    }

    function install() {
      global $db;
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Purchase Order Module', 'MODULE_PAYMENT_CHRYSLER_PO_STATUS', 'True', 'Do you want to accept Purchase Order payments?', '6', '1', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort order of display.', 'MODULE_PAYMENT_CHRYSLER_PO_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, use_function, date_added) values ('Set Order Status', 'MODULE_PAYMENT_CHRYSLER_PO_ORDER_STATUS_ID', '0', 'Set the status of orders made with this payment module to this value', '6', '0', 'zen_cfg_pull_down_order_statuses(', 'zen_get_order_status_name', now())");
   }

    function remove() {
      global $db;
      $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_PAYMENT_CHRYSLER_PO_STATUS',  'MODULE_PAYMENT_CHRYSLER_PO_ORDER_STATUS_ID', 'MODULE_PAYMENT_CHRYSLER_PO_SORT_ORDER');
    }
  }
?>