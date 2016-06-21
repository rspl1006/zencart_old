<?php

  class checks {
    var $code, $title, $description, $enabled;

// class constructor
    function checks() {
      global $order;

      $this->code = 'checks';
      $this->title = MODULE_PAYMENT_CHECKS_TEXT_TITLE;
      $this->description = MODULE_PAYMENT_CHECKS_TEXT_DESCRIPTION;
      $this->sort_order = MODULE_PAYMENT_CHECKS_SORT_ORDER;
      $this->enabled = ((MODULE_PAYMENT_CHECKS_STATUS == 'True') ? true : false);

      if ((int)MODULE_PAYMENT_CHECKS_ORDER_STATUS_ID > 0) {
        $this->order_status = MODULE_PAYMENT_CHECKS_ORDER_STATUS_ID;
      }

      if (is_object($order)) $this->update_status();
    }

// class methods
    function update_status() {
      global $order, $db;

	// disable the module if the order only contains virtual products
      if ($this->enabled == true) {
        if ($order->content_type != 'physical') {
          $this->enabled = false;
        }
      }
    }

    function javascript_validation() {
      return false;
    }

    function selection() {
      return array('id' => $this->code,
                   'module' => $this->title,
				   'description' => "- " . MODULE_PAYMENT_CHECKS_DESCRIPTION);
	 
    }

    function pre_confirmation_check() {
      return false;
    }

    function confirmation() {
		return $this->get_invoice_note();
    }
	
	function get_invoice_note(){
		return array('title' => MODULE_PAYMENT_CHECKS_INVOICE_NOTE);
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
        $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_PAYMENT_CHECKS_STATUS'");
        $this->_check = $check_query->RecordCount();
      }
      return $this->_check;
    }

    function install() {
      global $db;
	  echo "BOOOm!";
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable Money Order Module', 'MODULE_PAYMENT_CHECKS_STATUS', 'True', 'Do you want to accept Money Order payments?', '6', '1', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort order of display.', 'MODULE_PAYMENT_CHECKS_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
      $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, use_function, date_added) values ('Set Order Status', 'MODULE_PAYMENT_CHECKS_ORDER_STATUS_ID', '0', 'Set the status of orders made with this payment module to this value', '6', '0', 'zen_cfg_pull_down_order_statuses(', 'zen_get_order_status_name', now())");
   }

    function remove() {
      global $db;
      $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key in ('" . implode("', '", $this->keys()) . "')");
    }

    function keys() {
      return array('MODULE_PAYMENT_CHECKS_STATUS',  'MODULE_PAYMENT_CHECKS_ORDER_STATUS_ID', 'MODULE_PAYMENT_CHECKS_SORT_ORDER');
    }
  }
?>