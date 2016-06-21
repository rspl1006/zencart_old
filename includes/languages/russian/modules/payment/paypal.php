<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 2644 2005-12-21 16:56:32Z drbyte $
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'Paypal IPN');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'Paypal');
  if (function_exists('zen_catalog_href_link')) {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal IPN</strong><br /><font color=green>���������� �� ���������:</font><br />�� www.paypal.com, ��� "�������",<ul><li>���������� ���� <strong>Instant Payment Notification ���������</strong> URL ��:<br />'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . ' </li><li>� <strong>Website Payments ����������</strong> ���������� ��� <strong>Automatic Return URL</strong> ��:<br />'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</li>' . (defined('MODULE_PAYMENT_PAYPAL_STATUS') ? '' : '<li>... � ������� "����������" ��� �� �������� PayPal ���������... � "�������������" ��� �� �������� Zen Cart ���� PayPal ���������</li>') . '</ul><font color=green><hr /></font>' );
  } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal IPN</strong>');
  }
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', '���:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', '�������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', '������ ���:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', '�������� ���:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', '�����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', '�����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', '�������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', '�������� ������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', '������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Payer Email:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Payer ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Payer ������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', '������ ������:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', '��� ������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', '������ ������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', '������� ��������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', '����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', '���� ������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', '������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', '���������� ������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', '������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', '�������� ����:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', '������ ��������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', '��� ����������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID ����������:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', '������������ ID ���������� :');

  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DECRIPTION_TITLE', STORE_NAME . ' Purchase');
?>