<?php

/**
 * Modified login page which redirects users to the wiTECH portal site for authentication.
 */

  // This should be first line of the script:
  $zco_notifier->notify('NOTIFY_HEADER_START_LOGIN');

  // redirect the customer to a friendly cookie-must-be-enabled page if cookies are disabled (or the session has not started)
  if ($session_started == false) {
    zen_redirect(zen_href_link(FILENAME_COOKIE_USAGE));
  }

	// if the customer is logged in already, redirect them to the My account page
	// Disabled so the Help Desk doesn't accidently log in as a previous user.
	//  if (isset($_SESSION['customer_id']) and $_SESSION['customer_id'] != '') {
	//    zen_redirect(zen_href_link(FILENAME_ACCOUNT, '', 'SSL'));
	//}


  require(DIR_WS_MODULES . zen_get_module_directory('require_languages.php'));
  include(DIR_WS_MODULES . zen_get_module_directory(FILENAME_CREATE_ACCOUNT));


  $error = false;
  if (isset($_GET['action']) && ($_GET['action'] == 'process')) {



   
    $wiTECH_user_id = zen_db_prepare_input($_GET['user_id']);
    $password = zen_db_prepare_input($_GET['key']);


    // Check if email exists
    $check_customer_query = "SELECT customers_id, customers_firstname, customers_password,
                                    customers_email_address, customers_default_address_id,
                                    customers_authorization, customers_referral,customers_witech_pw
                             FROM " . TABLE_CUSTOMERS . "
                             WHERE customers_witech_id = :user_id";

    $check_customer_query  =$db->bindVars($check_customer_query, ':user_id', $wiTECH_user_id, 'integer');
    $check_customer = $db->Execute($check_customer_query);


    if (!$check_customer->RecordCount()) {
      $error = true;

    } else {

      // Check that password is good
      if ($password != $check_customer->fields['customers_witech_pw']) {
        $error = true;
      } else {

        if (SESSION_RECREATE == 'True') {
          zen_session_recreate();
        }

        $check_country_query = "SELECT entry_country_id, entry_zone_id
                                  FROM " . TABLE_ADDRESS_BOOK . "
                                 WHERE customers_id = :customersID
                                   AND address_book_id = :adressBookID";

        $check_country_query = $db->bindVars($check_country_query, ':customersID', $check_customer->fields['customers_id'], 'integer');
        $check_country_query = $db->bindVars($check_country_query, ':adressBookID', $check_customer->fields['customers_default_address_id'], 'integer');
        $check_country = $db->Execute($check_country_query);

        $_SESSION['customer_id'] = $check_customer->fields['customers_id'];
        $_SESSION['customer_default_address_id'] = $check_customer->fields['customers_default_address_id'];
        $_SESSION['customers_authorization'] = $check_customer->fields['customers_authorization'];
        $_SESSION['customer_first_name'] = $check_customer->fields['customers_firstname'];
        $_SESSION['customer_country_id'] = $check_country->fields['entry_country_id'];
        $_SESSION['customer_zone_id'] = $check_country->fields['entry_zone_id'];

        $sql = "UPDATE " . TABLE_CUSTOMERS_INFO . "
                   SET customers_info_date_of_last_logon = now(),
                       customers_info_number_of_logons = customers_info_number_of_logons+1
                 WHERE customers_info_id = :customersID";

        $sql = $db->bindVars($sql, ':customersID',  $_SESSION['customer_id'], 'integer');
        $db->Execute($sql);
        $zco_notifier->notify('NOTIFY_LOGIN_SUCCESS');

        // restore cart contents
        $_SESSION['cart']->restore_contents();

       zen_redirect(zen_href_link(FILENAME_DEFAULT, '', 'SSL'));
      }
    }
  }


  if ($error == true) {
    // Customer error page?
  }

  
  header("Location: " . WITECH_PORTAL_LOGIN_URL);

  //Exit before showing default page
  exit;

?>
