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
// |                                                                      |
// |   DevosC, Developing open source Code                                |
// |   Copyright (c) 2004 DevosC.com                                      |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// | Simplified Chinese version   http://www.zen-cart.cn                  |
// +----------------------------------------------------------------------+
//  $Id: paypal.php 995 2005-02-11 08:35:07Z drbyte $
//

  // sort orders
  define('TEXT_PAYPAL_IPN_SORT_ORDER_INFO', '��ʾ˳��: ');
  define('TEXT_SORT_PAYPAL_ID_DESC', '���յ���PayPal���� (�� - ��)');
  define('TEXT_SORT_PAYPAL_ID', '���յ���PayPal���� (�� - ��)');
  define('TEXT_SORT_ZEN_ORDER_ID_DESC', '������� (�� - ��), ���յ���PayPal����');
  define('TEXT_SORT_ZEN_ORDER_ID', '������� (�� - ��), ���յ���PayPal����');
  define('TEXT_PAYMENT_AMOUNT_DESC', '������� (�� - ��)');
  define('TEXT_PAYMENT_AMOUNT', '������� (�� - ��)');

  //begin ADMIN text
  define('HEADING_ADMIN_TITLE', 'PayPal��ʱ����֪ͨ');
  define('HEADING_PAYMENT_STATUS', '����״̬');
  define('TEXT_ALL_IPNS', '����');

  define('TABLE_HEADING_ORDER_NUMBER', '���� #');
  define('TABLE_HEADING_PAYPAL_ID', 'PayPal #');
  define('TABLE_HEADING_TXN_TYPE', '��������');
  define('TABLE_HEADING_PAYMENT_STATUS', '����״̬');
  define('TABLE_HEADING_PAYMENT_AMOUNT', '���');
  define('TABLE_HEADING_ACTION', '����');
  define('TABLE_HEADING_DATE_ADDED', '��������');
  define('TABLE_HEADING_NUM_HISTORY_ENTRIES', '״̬��ʷ�е���Ŀ��');
  define('TABLE_HEADING_ENTRY_NUM', '��Ŀ����');
  define('TABLE_HEADING_TRANS_ID', '���ױ��');



  define('TEXT_INFO_PAYPAL_IPN_HEADING', 'PayPal��ʱ����֪ͨ');
  define('TEXT_DISPLAY_NUMBER_OF_TRANSACTIONS', '��ʾ<strong>%d</strong>��<strong>%d</strong> (��<strong>%d</strong>����ʱ����֪ͨ\'s)');

  //Details section
  define('HEADING_DEATILS_CUSTOMER_REGISTRATION_TITLE', 'PayPal �ͻ�ע������');
  define('HEADING_DETAILS_REGISTRATION_TITLE', 'PayPal ����ʱ����֪ͨ');
  define('TEXT_INFO_ENTRY_ADDRESS', '��ַ');
  define('TEXT_INFO_ORDER_NUMBER', '������');
  define('TEXT_INFO_TXN_TYPE', '��������');
  define('TEXT_INFO_PAYMENT_STATUS', '����״̬');
  define('TEXT_INFO_PAYMENT_AMOUNT', '���');
  define('ENTRY_FIRST_NAME', '����');
  define('ENTRY_LAST_NAME', '����');
  define('ENTRY_BUSINESS_NAME', '��˾��');
  define('ENTRY_ADDRESS', '��ַ');
  //EMAIL ALREADY DEFINED IN ORDERS
  define('ENTRY_PAYER_ID', '�����˱��');
  define('ENTRY_PAYER_STATUS', '������״̬');
  define('ENTRY_ADDRESS_STATUS', '��ַ״̬');
  define('ENTRY_PAYMENT_TYPE', '��������');
  define('TABLE_HEADING_ENTRY_PAYMENT_STATUS', '����״̬');
  define('TABLE_HEADING_PENDING_REASON', '�ȴ�ԭ��');
  define('TABLE_HEADING_IPN_DATE', 'IPN����');
  define('ENTRY_INVOICE', '��Ʊ');
  define('ENTRY_PAYPAL_IPN_TXN', '���ױ��');
  define('ENTRY_PAYMENT_DATE', '��������');
  define('ENTRY_PAYMENT_LAST_MODIFIED', '����޸�');
  define('ENTRY_MC_CURRENCY', 'MC ����');
  define('ENTRY_MC_GROSS', 'MC �ܶ�');
  define('ENTRY_MC_FEE', 'MC ����');
  define('ENTRY_PAYMENT_GROSS', '�����ܶ�');
  define('ENTRY_PAYMENT_FEE', '�������');
  define('ENTRY_SETTLE_AMOUNT', '�����');
  define('ENTRY_SETTLE_CURRENCY', 'ѡ������');
  define('ENTRY_EXCHANGE_RATE', '����');
  define('ENTRY_CART_ITEMS', '���ﳵ��Ʒ����');
  define('ENTRY_CUSTOMER_COMMENTS', '�˿�����');
  define('TEXT_NO_IPN_HISTORY', 'û��IPN��ʷ��¼');
  define('TEXT_TXN_SIGNATURE', '����ǩ��');
  //end ADMIN text
?>
