<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: product_free_shipping.php 1091 2005-03-29 06:48:38Z ajeh $
//

define('HEADING_TITLE', '��Ʒ����');
define('HEADING_TITLE_GOTO', 'ת��:');

define('TABLE_HEADING_ID', '���');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', '��Ʒ����');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', '����');

define('TABLE_HEADING_PRICE','�۸�/�ؼ�/����');
define('TABLE_HEADING_QUANTITY','����');

define('TABLE_HEADING_ACTION', '����');
define('TABLE_HEADING_STATUS', '״̬');

define('TEXT_CATEGORIES', '����:');
define('TEXT_SUBCATEGORIES', '�ӷ���:');
define('TEXT_PRODUCTS', '��Ʒ:');
define('TEXT_PRODUCTS_PRICE_INFO', '�۸�:');
define('TEXT_PRODUCTS_TAX_CLASS', '˰��:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'ƽ������:');
define('TEXT_PRODUCTS_QUANTITY_INFO', '����:');
define('TEXT_DATE_ADDED', '��������:');
define('TEXT_DATE_AVAILABLE', '��������:');
define('TEXT_LAST_MODIFIED', '����޸�:');
define('TEXT_IMAGE_NONEXISTENT', 'û��ͼ��');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '���ڸü������·������Ʒ.');
define('TEXT_PRODUCT_MORE_INFORMATION', '��������ʸ���Ʒ <a href="http://%s" target="blank">��ҳ</a>.');
define('TEXT_PRODUCT_DATE_ADDED', '����Ʒ����������� %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', '����Ʒ�������� %s.');

define('TEXT_EDIT_INTRO', '�����ʵ��޸�');
define('TEXT_EDIT_CATEGORIES_ID', '������:');
define('TEXT_EDIT_CATEGORIES_NAME', '��������:');
define('TEXT_EDIT_CATEGORIES_IMAGE', '����ͼ��:');
define('TEXT_EDIT_SORT_ORDER', '����:');

define('TEXT_INFO_COPY_TO_INTRO', '��ѡ��һ���·����Ը��Ƹ���Ʒ��');
define('TEXT_INFO_CURRENT_CATEGORIES', '��ǰ����: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', '�½�����');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '�޸ķ���');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'ɾ������');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '�ƶ�����');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'ɾ����Ʒ');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '�ƶ���Ʒ');
define('TEXT_INFO_HEADING_COPY_TO', '���Ƶ�');

define('TEXT_DELETE_CATEGORY_INTRO', '��ȷ��Ҫɾ���÷�����?');
define('TEXT_DELETE_PRODUCT_INTRO', '��ȷ��Ҫ����ɾ������Ʒ��?<br /><br /><strong>����:</strong> ��������Ʒ<br />1. ���������������ɾ����Ʒ����ȷ���������Ѿ��޸�<br />2. ���Ҫɾ������Ʒ����ķ���');

define('TEXT_DELETE_WARNING_CHILDS', '<b>����:</b> ����%s��(��)�����ڸ÷�����!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>����:</b> ����%s����Ʒ�ڸ÷�����!');

define('TEXT_MOVE_PRODUCTS_INTRO', '��ѡ��<b>%s</b>�ķ���');
define('TEXT_MOVE_CATEGORIES_INTRO', '��ѡ��<b>%s</b>�ķ���');
define('TEXT_MOVE', '�ƶ�<b>%s</b>��:');

define('TEXT_NEW_CATEGORY_INTRO', '��Ϊ�·�����д������Ϣ');
define('TEXT_CATEGORIES_NAME', '��������:');
define('TEXT_CATEGORIES_IMAGE', '����ͼ��:');
define('TEXT_SORT_ORDER', '����:');

define('TEXT_PRODUCTS_STATUS', '��Ʒ״̬:');
define('TEXT_PRODUCTS_VIRTUAL', '������Ʒ:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', '���˷�:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', '��ʾ��������:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', '��������:');
define('TEXT_PRODUCT_AVAILABLE', '�л�');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'ȱ��');
define('TEXT_PRODUCT_IS_VIRTUAL', '��, ��Ҫ�ͻ���ַ');
define('TEXT_PRODUCT_NOT_VIRTUAL', '��, ��Ҫ�ͻ���ַ');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', '��');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', '��');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', '�ض�, ��������Ʒ��Ҫ���͵�ַ');
define('TEXT_PRODUCTS_SORT_ORDER', '����:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', '��');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', '��');

define('TEXT_PRODUCTS_MANUFACTURER', '��Ʒ����:');
define('TEXT_PRODUCTS_NAME', '��Ʒ����:');
define('TEXT_PRODUCTS_DESCRIPTION', '��Ʒ���:');
define('TEXT_PRODUCTS_QUANTITY', '��Ʒ����:');
define('TEXT_PRODUCTS_MODEL', '��Ʒ�ͺ�:');
define('TEXT_PRODUCTS_IMAGE', '��Ʒͼ��:');
define('TEXT_PRODUCTS_IMAGE_DIR', '�ϴ�Ŀ¼:');
define('TEXT_PRODUCTS_URL', '��Ʒ��ַ:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(��Ҫ http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', '�۸�(������):');
define('TEXT_PRODUCTS_PRICE_GROSS', '�۸�(��˰��):');
define('TEXT_PRODUCTS_WEIGHT', '��Ʒ����:');

define('EMPTY_CATEGORY', '��շ���');

define('TEXT_HOW_TO_COPY', '���Ʒ���:');
define('TEXT_COPY_AS_LINK', '������Ʒ');
define('TEXT_COPY_AS_DUPLICATE', '������Ʒ');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','�����ڸ�����Ʒ ...');
  define('TEXT_COPY_ATTRIBUTES','������Ʒ������?');
  define('TEXT_COPY_ATTRIBUTES_YES','��');
  define('TEXT_COPY_ATTRIBUTES_NO','��');

  define('TEXT_INFO_CURRENT_PRODUCT', '��ǰ��Ʒ: ');
  define('TABLE_HEADING_MODEL', '�ͺ�');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','���Ա仯����Ʒ��� ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','ɾ��<strong>����</strong>��Ʒ����:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','�������Ե���һ��Ʒ�����:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','�������Ե���һ<strong>��Ʒ</strong>:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','�������Ե���һ<strong>����</strong>:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>��δ������е���Ʒ����?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>ɾ��</strong>��Ȼ����������');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>����</strong>����/�۸�, Ȼ������µ�');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>����</strong>��������������');

  define('SUCCESS_ATTRIBUTES_DELETED','�ɹ�ɾ������');
  define('SUCCESS_ATTRIBUTES_UPDATE','�ɹ���������');

  define('ICON_ATTRIBUTES','�����ص�');

  define('TEXT_CATEGORIES_IMAGE_DIR','�ϴ�Ŀ¼:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','��ʾ: ����ʾ��������, ȱʡ����Ϊ1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','��ʾ: ����ʾ��������, ȱʡ����Ϊ1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>��ѡ��:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','�����ص�:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','����: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','�����Զ���:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','��');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','��');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*��ʾ�۸��������������Լ۸�ͼ۸�');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*��ʾ�۸��������������Լ۸�ͼ۸�');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','���ٹ�������:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','����������λ:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','��๺������:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = ������, 1 = ��װ������');

  define('TEXT_PRODUCTS_MIXED','�������Ի��:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', '�����Ʒ');
  define('TEXT_PRODUCT_IS_FREE','�����Ʒ:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*����Ʒ���');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*����Ʒ���');

  define('TEXT_PRODUCT_IS_CALL','�۸�����:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*����Ʒ�۸�����');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*����Ʒ�۸�����');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>��Ҫ������ </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>������������ </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>���������� </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>��Ʒ��Meta��ǩ����Ӧ����:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>��Ʒ����:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>����:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>�ͺ�:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>�۸�:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>����/��ǩ��:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Meta ��ǩ����:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Meta ��ǩ�ؼ���:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Meta ��ǩ����:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">����</span>');
?>