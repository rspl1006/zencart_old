<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 7219 2007-10-08 04:54:42Z drbyte $
 * @Simplified Chinese version   http://www.zen-cart.cn
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'PayPal IPN - Website Payments Standard');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'PayPal');
  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal IPN</strong> (PayPal������ʽ)<br /><a href="https://www.paypal.com/mrb/mrb=R-6C7952342H795591R&pal=9E82WJBKKGPLQ" target="_blank">����PayPal�ʺš�</a><br /><br /><font color="green">��װ˵��:</font><br />1. <a href="http://www.zen-cart.com/partners/paypal" target="_blank">ע��PayPal�ʺ� - �����</a><br />2. ��PayPal�˺��У�ѡ��"Profile",<ul><li>����<strong>Instant Payment Notification Preferences</strong>��URLΪ:<br />'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '<br /><span class="alert">IPNҪѡ��!</span></li><li>��<strong>Website Payments Preferences</strong>������<strong>Automatic Return URL</strong>Ϊ:<br />'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</li>' . (defined('MODULE_PAYMENT_PAYPAL_STATUS') ? '' : '<li>... �����"install"��PayPalģ��... ѡ��"edit"����PayPal��</li>') . '</ul><font color="green"><hr /><strong>Ҫ��:</strong></font><br /><hr />*<strong>PayPal Account</strong> (<a href="http://www.zen-cart.com/partners/paypal" target="_blank">���ע��</a>)<br />*<strong>*<strong>�˿� 80</strong>�������ؼ�˫��ͨѶ��������������·����/����ǽ�ϴ�<br />*��Ҫ֧��<strong>PHP allow_url_fopen</strong><br />*�밴�������˵��<strong>����</strong>��' );
  } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }
  // to show the PayPal logo as the payment option name, use this:  https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif
  // to show CC icons with PayPal, use this instead:  https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif
  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_IMG', 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_ALT', 'Checkout with PayPal');
  define('MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT', '��ʡʱ�䣬��ȫ���ʡ�<br />�����ṩ˽���˻���Ϣ���');

  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_IMG . '" alt="' . MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_ALT . '" /> &nbsp;' .  '<span class="smallText">' . MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT . '</span>');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', '����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', '����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', '��˾����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', '��ϸ��ַ:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', '����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'ʡ��:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', '�ʱ�:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', '���һ����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', '�����˵����ʼ�:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ���:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', '������ ���:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', '������״̬:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', '��ַ״̬:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', '��������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', '����״̬:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', '�ȴ���ԭ��:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', '��Ʊ:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', '��������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', '����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', '�ܽ��:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', '����������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', '����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', '��Ʒ����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', '��������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', '���ױ��:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', '�����ױ��:');


  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE', STORE_NAME . ' ����');
  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM', '�̵��վ�');

?>