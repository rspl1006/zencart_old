<?php

//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
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
// | Authorize.net AIM Payment Module V.1.0                               |
// | includes/languages/modules/payment/authorizenet_aim.php              |
// | Module created by Eric Stamper - 01/30/2004                          |
// | Released under GPL                                                   |
// +----------------------------------------------------------------------+
// $Id: authorizenet_aim.php 277 2004-09-10 23:03:52Z wilt $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//


// Admin Configuration Items

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin
  
    if (MODULE_PAYMENT_AUTHORIZENET_AIM_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Login</a>' . (MODULE_PAYMENT_AUTHORIZENET_AIM_TESTMODE != 'Production' ? '<br /><br />Testing Info:<br /><b>Automatic Approval Credit Card Numbers:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Note:</b> These credit card numbers will return a decline in live mode, and an approval in test mode.  Any future date can be used for the expiration date and any 3 or 4 (AMEX) digit number can be used for the CVV Code.<br /><br /><b>Automatic Decline Credit Card Number:</b><br /><br />Card #: 4222222222222<br /><br />This card number can be used to receive decline notices for testing purposes.<br /><br />' : ''));
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Click Here to Sign Up for an Account</a><br /><br /><a target="_blank" href="https://account.authorize.net/">Authorize.net Merchant Area</a><br /><br /><strong>Requirements:</strong><br /><hr />*<strong>Authorize.net Account</strong> (see link above to signup)<br />*<strong>CURL is required </strong>and MUST be compiled with SSL support into PHP by your hosting company<br />*<strong>Authorize.net username and transaction key</strong> available from your Merchant Area');
  }
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR_CURL_NOT_FOUND', 'CURL functions not found - required for Authorize.net AIM payment module');


  // Catalog Items

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Carte de Cr&eacute;dit');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Type de Carte de Cr&eacute;dit :');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Propri&eacute;taire de la Carte de Cr&eacute;dit :');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Num&eacute;ro de la Carte de Cr&eacute;dit :');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'Expiration de la Carte :');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'CVV Number (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . 'En Savoir Plus' . '</a>)');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* Le Nom du Propri&eacute;taire de la Carte de Cr&eacute;dit doit comporter au moins  ' . CC_OWNER_MIN_LENGTH . ' caract&egrave;res.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Le num&eacute;ro de Carte doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caract&egrave;res.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* Les 3 ou 4 derniers chiffres du num&eacute;ro de V&eacute;rification qui figurent g&eacute;n&eacute;ralement au dos de la Carte de Cr&eacute;dit.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Votre Carte de Cr&eacute;dit a &eacute;t&eacute; refus&eacute;e. Veuillez essayer une autre Carte ou nous contacter pour plus d\'Information.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Erreur de Carte de Cr&eacute;dit !');
  
// admin tools:
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_BUTTON_TEXT', 'Do Refund');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_ERROR', 'Error: You requested to do a refund but did not check the Confirmation box.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_REFUND_AMOUNT', 'Error: You requested a refund but entered an invalid amount.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CC_NUM_REQUIRED_ERROR', 'Error: You requested a refund but didn\'t enter the last 4 digits of the Credit Card number.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_INITIATED', 'Refund Initiated. Transaction ID: %s - Auth Code: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_ERROR', 'Error: You requested to do a capture but did not check the Confirmation box.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_BUTTON_TEXT', 'Do Capture');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_INVALID_CAPTURE_AMOUNT', 'Error: You requested a capture but need to enter an amount.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_TRANS_ID_REQUIRED_ERROR', 'Error: You need to specify a Transaction ID.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPT_INITIATED', 'Funds Capture initiated. Amount: %s.  Transaction ID: %s - Auth Code: %s');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_BUTTON_TEXT', 'Do Void');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_ERROR', 'Error: You requested a Void but did not check the Confirmation box.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_INITIATED', 'Void Initiated. Transaction ID: %s - Auth Code: %s ');


  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TITLE', '<strong>Refund Transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND', 'You may refund money to the customer\'s credit card here:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_REFUND_CONFIRM_CHECK', 'Check this box to confirm your intent: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_AMOUNT_TEXT', 'Enter the amount you wish to refund');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_CC_NUM_TEXT', 'Enter the last 4 digits of the Credit Card you are refunding.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TRANS_ID', 'Enter the original Transaction ID:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_DEFAULT_MESSAGE', 'Refund Issued');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_REFUND_SUFFIX', 'You may refund an order up to the amount already captured. You must supply the last 4 digits of the credit card number used on the initial order.<br />Refunds must be issued within 120 days of the original transaction date.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TITLE', '<strong>Capture Transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE', 'You may capture previously-authorized funds here:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_AMOUNT_TEXT', 'Enter the amount to Capture: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CAPTURE_CONFIRM_CHECK', 'Check this box to confirm your intent: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TRANS_ID', 'Enter the original Transaction ID: ');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Settled previously-authorized funds.');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_CAPTURE_SUFFIX', 'Captures must be performed within 30 days of the original authorization. You may only capture an order ONCE. <br />Please be sure the amount specified is correct.<br />If you leave the amount blank, the original amount will be used instead.');

  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TITLE', '<strong>Voiding Transactions</strong>');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID', 'You may void a transaction which has not yet been settled:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_VOID_CONFIRM_CHECK', 'Check this box to confirm your intent:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaction Cancelled');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_ENTRY_VOID_SUFFIX', 'Voids must be completed before the original transaction is settled in the daily batch.');
  
?>