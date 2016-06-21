<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: orders.php 6214 2007-04-17 02:24:25Z ajeh $
 */

define('HEADING_TITLE', '��������');
define('HEADING_TITLE_SEARCH', '��������:');
define('HEADING_TITLE_STATUS', '״̬:');
define('HEADING_TITLE_SEARCH_DETAIL_ORDERS_PRODUCTS', '����Ʒ����������<strong>ID:XX</strong>���ͺ�');
define('TEXT_INFO_SEARCH_DETAIL_FILTER_ORDERS_PRODUCTS', '����ѡ��: ');
define('TABLE_HEADING_PAYMENT_METHOD', '����<br />����');
define('TABLE_HEADING_ORDERS_ID','������');

define('TEXT_BILLING_SHIPPING_MISMATCH','�ʵ���ַ���ͻ���ַ��ͬ ');

define('TABLE_HEADING_COMMENTS', '��ע');
define('TABLE_HEADING_CUSTOMERS', '�ͻ�');
define('TABLE_HEADING_ORDER_TOTAL', '�����ܶ�');
define('TABLE_HEADING_DATE_PURCHASED', '��������');
define('TABLE_HEADING_STATUS', '״̬');
define('TABLE_HEADING_TYPE', '��������');
define('TABLE_HEADING_ACTION', '����');
define('TABLE_HEADING_QUANTITY', '����');
define('TABLE_HEADING_PRODUCTS_MODEL', '�ͺ�');
define('TABLE_HEADING_PRODUCTS', '��Ʒ');
define('TABLE_HEADING_TAX', '˰');
define('TABLE_HEADING_TOTAL', '�ܶ�');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', '���� (����˰)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', '���� (��˰)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', '�ܶ� (����˰)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', '�ܶ� (��˰)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', '�ͻ�֪ͨ');
define('TABLE_HEADING_DATE_ADDED', '��������');

define('ENTRY_CUSTOMER', '�ͻ�:');
define('ENTRY_SOLD_TO', '����:');
define('ENTRY_DELIVERY_TO', '����:');
define('ENTRY_SHIP_TO', '�˵�:');
define('ENTRY_SHIPPING_ADDRESS', '�ͻ���ַ:');
define('ENTRY_BILLING_ADDRESS', '�ʵ���ַ:');
define('ENTRY_PAYMENT_METHOD', '֧����ʽ:');
define('ENTRY_CREDIT_CARD_TYPE', '���ÿ�����:');
define('ENTRY_CREDIT_CARD_OWNER', '���ÿ���:');
define('ENTRY_CREDIT_CARD_NUMBER', '���ÿ�����:');
define('ENTRY_CREDIT_CARD_CVV', '���ÿ�CVVУ����:');
define('ENTRY_CREDIT_CARD_EXPIRES', '���ÿ���Ч��:');
define('ENTRY_SUB_TOTAL', 'С��:');
define('ENTRY_TAX', '˰:');
define('ENTRY_SHIPPING', '�˷�:');
define('ENTRY_TOTAL', '�ܶ�:');
define('ENTRY_DATE_PURCHASED', '��������:');
define('ENTRY_STATUS', '״̬:');
define('ENTRY_DATE_LAST_UPDATED', '����������:');
define('ENTRY_NOTIFY_CUSTOMER', '֪ͨ�ͻ�:');
define('ENTRY_NOTIFY_COMMENTS', '���ӱ�ע:');
define('ENTRY_PRINTABLE', '��ӡ��Ʊ');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'ɾ������');
define('TEXT_INFO_DELETE_INTRO', '��ȷ��Ҫɾ���ö�����?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', '�ָ���Ʒ����');
define('TEXT_DATE_ORDER_CREATED', '��������:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', '����޸�:');
define('TEXT_INFO_PAYMENT_METHOD', '֧����ʽ:');
define('TEXT_PAID', '�Ѹ�');
define('TEXT_UNPAID', 'δ��');

define('TEXT_ALL_ORDERS', '���ж���');
define('TEXT_NO_ORDER_HISTORY', 'û�ж�����ʷ');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', '��������');
define('EMAIL_TEXT_ORDER_NUMBER', '��������:');
define('EMAIL_TEXT_INVOICE_URL', '��ϸ��Ʊ:');
define('EMAIL_TEXT_DATE_ORDERED', '��������:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>�������ı�עΪ: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', '���Ķ���״̬����Ϊ:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>��״̬:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', '��������κ�����, ��ظ������ʼ�.' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', '����: ����������.');
define('SUCCESS_ORDER_UPDATED', '�ɹ�: �����ɹ�����.');
define('WARNING_ORDER_NOT_UPDATED', '����: û�б仯. �ö���û�и���.');

define('ENTRY_ORDER_ID','��Ʊ��. ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">���</span>');

define('TEXT_DOWNLOAD_TITLE', '��������״̬');
define('TEXT_DOWNLOAD_STATUS', '״̬');
define('TEXT_DOWNLOAD_FILENAME', '�ļ���');
define('TEXT_DOWNLOAD_MAX_DAYS', '����');
define('TEXT_DOWNLOAD_MAX_COUNT', '����');

define('TEXT_DOWNLOAD_AVAILABLE', '����');
define('TEXT_DOWNLOAD_EXPIRED', '����');
define('TEXT_DOWNLOAD_MISSING', '���ڷ�������');

define('IMAGE_ICON_STATUS_CURRENT', '״̬ - ����');
define('IMAGE_ICON_STATUS_EXPIRED', '״̬ - ����');
define('IMAGE_ICON_STATUS_MISSING', '״̬ - ȱ��');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', '�ɹ�������');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', '�ɹ��ر�����');
define('TEXT_MORE', '... ����');

define('TEXT_INFO_IP_ADDRESS', 'IP��ַ: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','�����ݿ���ɾ��CVVУ����');
define('TEXT_DELETE_CVV_REPLACEMENT','��ɾ��');
define('TEXT_MASK_CC_NUMBER','���ظ�У����');

define('TEXT_INFO_EXPIRED_DATE', '��Ч��:<br />');
define('TEXT_INFO_EXPIRED_COUNT', '������:<br />');

define('TABLE_HEADING_CUSTOMER_COMMENTS', '�ͻ�<br />��ע');
define('TEXT_COMMENTS_YES', '�ͻ���ע - ��');
define('TEXT_COMMENTS_NO', '�ͻ���ע - ��');
?>