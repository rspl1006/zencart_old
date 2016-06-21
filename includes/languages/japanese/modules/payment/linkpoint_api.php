<?php
/**
 * @package linkpoint_api_payment_module
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions Copyright 2003 Jason LeBaron 
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: linkpoint_api.php 7341 2007-11-02 06:29:30Z drbyte $
 * Simplified Chinese version   http://www.zen-cart.cn
 */
 
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ADMIN_TITLE', 'Linkpoint/YourPay �ӿ�');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CATALOG_TITLE', '���ÿ�');

  if (defined('MODULE_PAYMENT_LINKPOINT_API_STATUS') && MODULE_PAYMENT_LINKPOINT_API_STATUS == 'True') {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">Linkpoint/YourPay �̻���¼</a>' . (MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_MODE_RESPONSE != 'LIVE: Production' ? '<br /><br /><strong>Linkpoint/YourPay API ���Կ���:</strong><br /><strong>Visa:</strong> 4111111111111111<br /><strong>MasterCard:</strong> 5419840000000003<br /><strong>Amex:</strong> 371111111111111<br /><strong>Discover:</strong> 6011111111111111' : '') . '<br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298">�Ŵ�/��װ˵��</a>');
  } else { 
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="http://www.zen-cart.com/index.php?main_page=infopages&pages_id=30">������￪��</a><br /><br /><a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">Linkpoint/YourPay �̻�ҳ��</a><br /><br /><a target="_blank" href="http://tutorials.zen-cart.com/index.php?article=298"><strong>��װ/�Ŵ�˵��</strong>������</a><br /><br /><strong>Requirements:</strong><br /><hr />*<strong>LinkPoint �� YourPay �˻�</strong> (�������ע������)<br />*<strong>��ҪcURL</strong>�ұ�����뵽PHP��<br />*<strong>Port 1129</strong>���ں����ؼ��˫��ͨѶ��������������·����/����ǽ�ϴ򿪡�<br />*<strong>PEM RSA Key File </strong>����֤��:<br />Ҫ��ò��ϴ�����֤��(.PEM) key:<br />- ��¼����LinkPoint/Yourpay �˻�<br />- ������˵��µ� "Support"��<br />- ����߿�˵����������� "Download Center" ��<br />- ��� "Store PEM File" ���ϵ� "download"<br />- ������Ӧ��Ϣ��ʼ���ء���Ҫ�ṩ�ṩע����ҵ�̺�ʱ�ύ�� SSN �� Tax ID��<br />- �ϴ����ļ��� includes/modules/payment/linkpoint_api/XXXXXX.pem (��LinkPoint�ṩ - xxxxxx �������̵���)');
  }
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_TYPE', '���ÿ�����:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_OWNER', '�ֿ���:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_NUMBER', '���ÿ���:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CVV', 'CVVУ����:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_EXPIRES', '���ÿ���Ч��:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_OWNER', '* �ֿ���������������' . CC_OWNER_MIN_LENGTH . '���ַ���\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_NUMBER', '* ���ÿ����벻������' . CC_NUMBER_MIN_LENGTH . '���ַ���\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_CVV', '* �����뿨�����3��4λ����');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR', '���ÿ�����!');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_MESSAGE', '�������ÿ����ܾ����������������ÿ����ϡ�������һ�ſ�������ϵ�̵����Ա��');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_AVS_MESSAGE', '�ʵ���ַ���ԡ�����д�������ÿ����ϡ�������һ�ſ�������ϵ�̵����Ա��');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_GENERAL_MESSAGE', '�������ÿ����ܾ����������������ÿ����ϡ�������һ�ſ�������ϵ�̵����Ա��');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_POPUP_CVV_LINK', '˵��');
  define('ALERT_LINKPOINT_API_PREAUTH_TRANS', '***AUTHORIZATION ONLY -- CHARGES WILL BE SETTLED LATER BY THE ADMINISTRATOR.***' . "\n");
  define('ALERT_LINKPOINT_API_TEST_FORCED_SUCCESSFUL', '˵��: ���ǲ��Խ���...ǿ�Ʒ��سɹ���Ӧ��');
  define('ALERT_LINKPOINT_API_TEST_FORCED_DECLINED', '˵��: ���ǲ��Խ���...ǿ�Ʒ��ؾܾ���Ӧ��');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(˵��: ģ��δ����)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_PEMFILE_MISSING', '<span class="alert">&nbsp;The xyzxyz.pem certificate file cannot be found.</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR_CURL_NOT_FOUND', 'û���ҵ�CURL���� - Linkpoint API֧��ģ��Ҫ��ù���');

  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_FAILURE_MESSAGE', 'We apologize for the inconvenience, but we are presently unable to contact the Credit Card company for authorization. Please contact the Store Owner for payment alternatives.');
  // note: the above error can occur as a result of:
     // - port 1129 not open for bidirectional communication 
     // - CURL is not installed or not functioning
     // - incorrect or invalid or "no" .PEM file found in modules/payment/linkpoint_api folder
     // - In general it means that there was no valid connection made to the gateway... it was stopped before it got outside your server
  
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_GENERAL_ERROR', 'We are sorry. There was a system error while processing your card. Your information is safe. Please notify the Store Owner to arrange alternate payment options.');
  // note: the above error is a general error message which is reported when serious and known error conditions occur. Further details are given immediately following the display of this message. If database storage is enabled, details can be found there too.
  
  
  // Admin definitions

  define('MODULE_PAYMENT_LINKPOINT_API_LINKPOINT_ORDER_ID', 'Linkpoint Order ID:');
  define('MODULE_PAYMENT_LINKPOINT_API_AVS_RESPONSE', 'AVS Response:');
  define('MODULE_PAYMENT_LINKPOINT_API_MESSAGE', 'Response Message:');
  define('MODULE_PAYMENT_LINKPOINT_API_APPROVAL_CODE', 'Approval Code:');
  define('MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_REFERENCE_NUMBER', 'Reference Number:');
  define('MODULE_PAYMENT_LINKPOINT_API_FRAUD_SCORE', 'Fraud Score:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TEST_MODE', '<span class="alert">&nbsp;(NOTE: Module is in testing mode)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ORDERTYPE', 'Order Type:');


// admin tools:
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NO_MATCHING_ORDER_FOUND', 'Error: Could not find transaction details for the record specified.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_BUTTON_TEXT', 'Do Refund');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_ERROR', 'Error: You requested to do a refund but did not check the Confirmation box.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_REFUND_AMOUNT', 'Error: You requested a refund but entered an invalid amount.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CC_NUM_REQUIRED_ERROR', 'Error: You requested a refund but didn\'t enter the last 4 digits of the Credit Card number.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_INITIATED', 'Refund Initiated. Transaction ID: %s - Order ID: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_ERROR', 'Error: You requested to do a capture but did not check the Confirmation box.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_BUTTON_TEXT', 'Do Capture');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_CAPTURE_AMOUNT', 'Error: You requested a capture but need to enter an amount.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TRANS_ID_REQUIRED_ERROR', 'Error: You need to specify a Transaction ID.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPT_INITIATED', 'Funds Capture initiated. Amount: %s.  Transaction ID: %s - AuthCode: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_BUTTON_TEXT', 'Do Void');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_ERROR', 'Error: You requested a Void but did not check the Confirmation box.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_INITIATED', 'Void Initiated. Transaction ID: %s - Order ID: %s ');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TITLE', '<strong>Refund Transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND', 'You may refund money to the customer\'s original credit card here.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_CHECK', 'Check this box to confirm your intent: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_AMOUNT_TEXT', 'Enter the amount you wish to refund');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_TEXT', 'enter Trans.ID');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_CC_NUM_TEXT', 'Enter the last 4 digits of the Credit Card you are refunding.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TRANS_ID', 'Enter the original Transaction ID <em>(which usually looks like this: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_MESSAGE', 'Refund Issued');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_SUFFIX', 'You may refund an order up to the amount already captured. You must supply the last 4 digits of the credit card number used on the initial order.<br />Refunds cannot be issued if the card has expired. To refund an expired card, issue a credit using the merchant terminal instead.');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TITLE', '<strong>Capture Transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE', 'You may capture previously-authorized funds here:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_AMOUNT_TEXT', 'Enter the amount to Capture: ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_CHECK', 'Check this box to confirm your intent: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TRANS_ID', 'Enter the original Order Number <em>(ie: <strong>5138-i4wcYM</strong>)</em> : ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_TEXT', 'enter Order Number');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Settled previously-authorized funds.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_SUFFIX', 'Captures must be performed within 2-10 days of the original authorization depending on your merchant bank requirement. You may  capture an order ONLY ONCE. <br />Please be sure the amount specified is correct.<br />If you leave the amount blank, the original amount will be used instead.');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TITLE', '<strong>Voiding Transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID', 'You may void a transaction (preauth/capture/refund) which has not yet been settled. Please enter the original Transaction ID <em>(usually looks like this: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_CHECK', 'Check this box to confirm your intent:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_TEXT', 'enter Trans.ID');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaction Canceled');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_SUFFIX', 'Voids must be completed before the original transaction is settled in the daily batch, which occurs at 7:00PM Pacific Time.');


?>