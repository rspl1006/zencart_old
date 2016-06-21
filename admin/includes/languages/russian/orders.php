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
//  $Id: orders.php 2652 2005-12-22 18:30:59Z drbyte $
//

define('HEADING_TITLE', '������');
define('HEADING_TITLE_SEARCH', 'ID ������:');
define('HEADING_TITLE_STATUS', '������:');

define('TABLE_HEADING_PAYMENT_METHOD', '������<br />��������');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','����� �������� � ����������� ����� �� ������� ');

define('TABLE_HEADING_COMMENTS', '�����������');
define('TABLE_HEADING_CUSTOMERS', '�������');
define('TABLE_HEADING_ORDER_TOTAL', '���� ������');
define('TABLE_HEADING_DATE_PURCHASED', '���� �������');
define('TABLE_HEADING_STATUS', '������');
define('TABLE_HEADING_TYPE', '��� ������');
define('TABLE_HEADING_ACTION', '��������');
define('TABLE_HEADING_QUANTITY', '����������');
define('TABLE_HEADING_PRODUCTS_MODEL', '������');
define('TABLE_HEADING_PRODUCTS', '������');
define('TABLE_HEADING_TAX', '�����');
define('TABLE_HEADING_TOTAL', '�����');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', '���� (��������)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', '���� (�������)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', '����� (��������)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', '����� (�������)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', '����������� �������');
define('TABLE_HEADING_DATE_ADDED', '���� ����������');

define('ENTRY_CUSTOMER', '������:');
define('ENTRY_SOLD_TO', '�������:');
define('ENTRY_DELIVERY_TO', '����������:');
define('ENTRY_SHIP_TO', '���������:');
define('ENTRY_SHIPPING_ADDRESS', '����� ��������:');
define('ENTRY_BILLING_ADDRESS', '����� ��� ����������� ������:');
define('ENTRY_PAYMENT_METHOD', '����� ������:');
define('ENTRY_CREDIT_CARD_TYPE', '��� ��������� ��������:');
define('ENTRY_CREDIT_CARD_OWNER', '�������� ��������� ��������:');
define('ENTRY_CREDIT_CARD_NUMBER', '����� ��������� ��������:');
define('ENTRY_CREDIT_CARD_CVV', 'CVV ����� ��������� ��������:');
define('ENTRY_CREDIT_CARD_EXPIRES', '���� �������� ��������� �������� ��������:');
define('ENTRY_SUB_TOTAL', '���-����:');
define('ENTRY_TAX', '�����:');
define('ENTRY_SHIPPING', '��������:');
define('ENTRY_TOTAL', '����:');
define('ENTRY_DATE_PURCHASED', '���� �������:');
define('ENTRY_STATUS', '������:');
define('ENTRY_DATE_LAST_UPDATED', '���� ���������� ����������:');
define('ENTRY_NOTIFY_CUSTOMER', '��������� �������:');
define('ENTRY_NOTIFY_COMMENTS', '��������� �����������:');
define('ENTRY_PRINTABLE', '���������� ����');

define('TEXT_INFO_HEADING_DELETE_ORDER', '������� �����');
define('TEXT_INFO_DELETE_INTRO', '�� ����� ������ ������� ������ �����?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', '��������� ���������� ������ � �������');
define('TEXT_DATE_ORDER_CREATED', '���� ��������:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '��������� ���������:');
define('TEXT_INFO_PAYMENT_METHOD', '����� ������:');
define('TEXT_PAID', '���������');
define('TEXT_UNPAID', '�� ���������');

define('TEXT_ALL_ORDERS', '��� ������');
define('TEXT_NO_ORDER_HISTORY', '������� ������� ����������');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', '�������� �����');
define('EMAIL_TEXT_ORDER_NUMBER', '����� ������:');
define('EMAIL_TEXT_INVOICE_URL', '��������� ����:');
define('EMAIL_TEXT_DATE_ORDERED', '���� ������:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>����������� � ������: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', '��� ����� ��� �������� �� ��������� ��������:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>����� ������:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', '�������� �� ������ email ���� � ��� ���� ����� �� ��������' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', '������: ����� �� ������');
define('SUCCESS_ORDER_UPDATED', '�������: ����� ��� ��������');
define('WARNING_ORDER_NOT_UPDATED', '��������: ��������� �� ����. ���������� �� �����������');

define('ENTRY_ORDER_ID','���� ����� ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">���������</span>');

define('TEXT_DOWNLOAD_TITLE', '������ �������� ������');
define('TEXT_DOWNLOAD_STATUS', '������');
define('TEXT_DOWNLOAD_FILENAME', '��� �����');
define('TEXT_DOWNLOAD_MAX_DAYS', '���');
define('TEXT_DOWNLOAD_MAX_COUNT', '����');

define('TEXT_DOWNLOAD_AVAILABLE', '��������');
define('TEXT_DOWNLOAD_EXPIRED', '�� ��������');
define('TEXT_DOWNLOAD_MISSING', '��� �� �������');

define('IMAGE_ICON_STATUS_CURRENT', '������ - ��������');
define('IMAGE_ICON_STATUS_EXPIRED', '������ - �� ��������');
define('IMAGE_ICON_STATUS_MISSING', '������ - ���������');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', '�������� ���� ������� ��������');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', '�������� ���� ������� ���������');
define('TEXT_MORE', '... �����');

define('TEXT_INFO_IP_ADDRESS', 'IP �����: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','������� CVV �� ���� ������');
define('TEXT_DELETE_CVV_REPLACEMENT','�������');
define('TEXT_MASK_CC_NUMBER','�������� ������ �����');
?>