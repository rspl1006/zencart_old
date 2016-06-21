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
// | Simplified Chinese version   http://www.zen-cart.cn                  |
// +----------------------------------------------------------------------+
//  $Id: products_price_manager.php 504 2004-11-08 01:11:06Z ajeh $
//

define('HEADING_TITLE', '�۸����');
define('HEADING_TITLE_PRODUCT_SELECT','��ѡ��������Ʒ����ʾ�۸���Ϣ ...');

define('TABLE_HEADING_PRODUCTS', '��Ʒ');
define('TABLE_HEADING_PRODUCTS_MODEL','�ͺ�');
define('TABLE_HEADING_PRODUCTS_PRICE', '�۸�/�ؼ�/����');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','�ٷֱ�');
define('TABLE_HEADING_AVAILABLE_DATE', '����');
define('TABLE_HEADING_EXPIRES_DATE','��Ч��');
define('TABLE_HEADING_STATUS', '״̬');
define('TABLE_HEADING_ACTION', '����');

define('TEXT_PRODUCT_INFO', '��Ʒ��Ϣ:');
define('TEXT_PRODUCTS_PRICE_INFO', '��Ʒ�۸���Ϣ:');
define('TEXT_PRODUCTS_MODEL','�ͺ�:');
define('TEXT_PRICE', '�۸�');
define('TEXT_PRODUCT_AVAILABLE_DATE', '��������:');
define('TEXT_PRODUCTS_STATUS', '��Ʒ״̬:');
define('TEXT_PRODUCT_AVAILABLE', '�л�');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'ȱ��');

define('TEXT_PRODUCT_INFO_NONE', '�������ѡ��һ����Ʒ ...');
  define('TEXT_PRODUCT_IS_FREE','�����Ʒ:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*����Ʒ���');
  define('TEXT_PRODUCT_IS_CALL','�۸�����:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*����Ʒ�۸�����');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','�����Զ���:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','��');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','��');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*��ʾ�۸��������������Լ۸�ͼ۸�');
  define('TEXT_PRODUCTS_MIXED','�������Ի��:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', '�Ż������������Ի��');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','���ٹ�������:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','����������λ:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','��๺������:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= ������<br />1= ��װ������/�����');

define('TEXT_FEATURED_PRODUCT_INFO', '�Ƽ���Ʒ��Ϣ:');
define('TEXT_FEATURED_PRODUCT', '��Ʒ:');
define('TEXT_FEATURED_EXPIRES_DATE', '��Ч��:');
define('TEXT_FEATURED_AVAILABLE_DATE', '��������:');
define('TEXT_FEATURED_PRODUCTS_STATUS', '��ɫ״̬:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', '����');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'δ����');
define('TEXT_FEATURED_DISABLED', '<strong>ע��: �Ƽ���Ʒ��ϢĿǰ�ر�, ���ڻ���û�м���</strong>');

define('TEXT_SPECIALS_PRODUCT', '��Ʒ:');
define('TEXT_SPECIALS_SPECIAL_PRICE', '�ؼ�:');
define('TEXT_SPECIALS_EXPIRES_DATE', '��Ч��:');
define('TEXT_SPECIALS_AVAILABLE_DATE', '��������:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>�ر���ʾ:</b><ul><li>���������ؼ��ֶ�������۵İٷֱ�, ����: <b>20%</b></li><li>��������µļ۸�, ��ʹ��С���� \'.\' , ����: <b>49.99</b></li><li>��Ч��Ϊ�ձ�ʾ������Ч</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', '�ؼ���Ϣ:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', '�ؼ�״̬:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', '����');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'δ����');
define('TEXT_SPECIALS_NO_GIFTS','GVû���ؼ�');
define('TEXT_SPECIAL_DISABLED', '<strong>��ע: �ؼ���Ʒ��Ϣ�ѹر�, ��û�м���</strong>');

define('TEXT_INFO_DATE_ADDED', '��������:');
define('TEXT_INFO_LAST_MODIFIED', '����޸�:');
define('TEXT_INFO_NEW_PRICE', '�¼۸�:');
define('TEXT_INFO_ORIGINAL_PRICE', 'ԭ�۸�:');
define('TEXT_INFO_PERCENTAGE', '�ٷֱ�:');
define('TEXT_INFO_AVAILABLE_DATE', '��������:');
define('TEXT_INFO_EXPIRES_DATE', '��Ч��:');
define('TEXT_INFO_STATUS_CHANGE', '״̬�ı�:');
define('TEXT_IMAGE_NONEXISTENT', 'ͼ�񲻴���');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'ɾ����ɫ');
define('TEXT_INFO_DELETE_INTRO', '��ȷ��Ҫɾ�����Ƽ���Ʒ��?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>������������Ȼ��ѡ ����</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', '�����Լ۸�');
  define('TEXT_PRODUCTS_PRICE', '��Ʒ�۸�: ');
  define('TEXT_SPECIAL_PRICE', '�ؼ�: ');
  define('TEXT_SALE_PRICE', '�����۸�: ');
  define('TEXT_FREE', '���');
  define('TEXT_CALL_FOR_PRICE', '�۸�����');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', '����' . DISCOUNT_QTY_ADD . '�пհ������Ż�:');
define('TEXT_BLANKS_INFO','������ʱ, ��ɾ����������Ϊ0�������Ż�');
define('TEXT_INFO_NO_DISCOUNTS', 'û�ж��������Ż�');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', '�Żݼ���');
define('TEXT_PRODUCTS_DISCOUNT','�Ż�');
define('TEXT_PRODUCTS_DISCOUNT_QTY','��������');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','�Ż�ֵ');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','����');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','�Żݵ���:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','�Ż��ܼ�:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','�Ż�<br />����: &nbsp; ˰��:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','�Ż�<br />�ܼ�: &nbsp; ˰��:');

define('TEXT_EACH','ÿ.');
define('TEXT_EXTENDED','�ܶ�');

define('TEXT_DISCOUNT_TYPE_INFO', '��Ʒ�Ż���Ϣ');
define('TEXT_DISCOUNT_TYPE','�Ż�����:');
define('TEXT_DISCOUNT_TYPE_FROM', '�Żݼ۵Ļ�׼:');

define('DISCOUNT_TYPE_DROPDOWN_0','��');
define('DISCOUNT_TYPE_DROPDOWN_1','�ٷֱ�');
define('DISCOUNT_TYPE_DROPDOWN_2','ʵ�ʼ۸�');
define('DISCOUNT_TYPE_DROPDOWN_3','���');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','�۸�');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','�ؼ�');

define('TEXT_UPDATE_COMMIT','�ӵ�ǰ��Ļ��ʾ���²��ύ�����޸�');

define('TEXT_PRODUCTS_TAX_CLASS', '˰��:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>����:</strong> ����Ʒ��������%s�뵱ǰ������ # %s ��ƥ������Ʒû������!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' ��ǰ������ %s ƥ����������� %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', '������������ %s ��ƥ�䵱ǰ������ %s');

define('PRODUCT_WARNING_UPDATE', '���޸ĺ�ѡ ���� �Ա���');
define('PRODUCT_UPDATE_SUCCESS', '�ɹ�������Ʒ�޸�!');
define('PRODUCT_WARNING_UPDATE_CANCEL', '�޸�ȡ��, û�б��� ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>�����ʼ�༭ ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', '������Ԥ�� ... ��ǰ�۸�״̬ ... ������Ԥ��');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>�༭��Ʒ��ϢȻ��[����]����</strong>');
?>