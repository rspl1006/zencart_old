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
//  $Id: categories.php 4808 2006-10-22 18:48:53Z ajeh $
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
define('TEXT_SUBCATEGORIES', '����:');
define('TEXT_PRODUCTS', '��Ʒ:');
define('TEXT_PRODUCTS_PRICE_INFO', '�۸�:');
define('TEXT_PRODUCTS_TAX_CLASS', '˰��:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'ƽ������:');
define('TEXT_PRODUCTS_QUANTITY_INFO', '����:');
define('TEXT_DATE_ADDED', '��������:');
define('TEXT_DATE_AVAILABLE', '��������:');
define('TEXT_LAST_MODIFIED', '����޸�:');
define('TEXT_IMAGE_NONEXISTENT', 'û��ͼ��');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '���ڸü�����һ���µ�������Ʒ.');
define('TEXT_PRODUCT_MORE_INFORMATION', '��������ʸ���Ʒ <a href="http://%s" target="blank">��ҳ</a>.');
define('TEXT_PRODUCT_DATE_ADDED', '����Ʒ����Ŀ¼���� %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', '����ƷԤ�Ƶ������� %s.');

define('TEXT_EDIT_INTRO', '������Ҫ�޸�');
define('TEXT_EDIT_CATEGORIES_ID', '������:');
define('TEXT_EDIT_CATEGORIES_NAME', '��������:');
define('TEXT_EDIT_CATEGORIES_IMAGE', '����ͼ��:');
define('TEXT_EDIT_SORT_ORDER', '����:');

define('TEXT_INFO_COPY_TO_INTRO', '�������Ʒ����һ���·���');
define('TEXT_INFO_CURRENT_CATEGORIES', '��ǰ����: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', '�½�����');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '�༭����');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'ɾ������');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '�ƶ�����');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'ɾ����Ʒ');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '�ƶ���Ʒ');
define('TEXT_INFO_HEADING_COPY_TO', '���Ƶ�');

define('TEXT_DELETE_CATEGORY_INTRO', '��ȷ��Ҫɾ���÷�����?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>����:</strong> �������ű�ɾ����������Ʒ���޷���ȷ��ʾ�۸���ɾ������������Ʒ�ķ���ǰ����ȷ������������Ʒ���������ŵ������ķ�����');
define('TEXT_DELETE_PRODUCT_INTRO', '��ȷ��Ҫ����ɾ������Ʒ��?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>����:</b> ����%s��(��)���໹���ӵ��÷���!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>����:</b> ����%s��Ʒ�����ӵ��÷���!');

define('TEXT_MOVE_PRODUCTS_INTRO', '��ѡ��<b>%s</b>�ķ���');
define('TEXT_MOVE_CATEGORIES_INTRO', '��ѡ��<b>%s</b>�ķ���');
define('TEXT_MOVE', '�ƶ� <b>%s</b> ��:');

define('TEXT_NEW_CATEGORY_INTRO', '����д�����·�����Ϣ');
define('TEXT_CATEGORIES_NAME', '��������:');
define('TEXT_CATEGORIES_IMAGE', '����ͼ��:');
define('TEXT_SORT_ORDER', '����:');

define('TEXT_PRODUCTS_STATUS', '��Ʒ״̬:');
define('TEXT_PRODUCTS_VIRTUAL', '������Ʒ:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', '���˷�:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', '��Ʒ��������ʾ:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', '�ϼ�����:');
define('TEXT_PRODUCT_AVAILABLE', '�л�');
define('TEXT_PRODUCT_NOT_AVAILABLE', '�޻�');
define('TEXT_PRODUCT_IS_VIRTUAL', '��, ��Ҫ�ͻ���ַ');
define('TEXT_PRODUCT_NOT_VIRTUAL', '��, ��Ҫ�ͻ���ַ');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', '��');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', '��');

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

define('EMPTY_CATEGORY', '��Ŀ¼');

define('TEXT_HOW_TO_COPY', '���Ʒ���:');
define('TEXT_COPY_AS_LINK', '������Ʒ');
define('TEXT_COPY_AS_DUPLICATE', '�ظ���Ʒ');

define('TEXT_RESTRICT_PRODUCT_TYPE', '������Ʒ����');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', '�÷��������Щ��Ʒ����');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','����Ʒ���Ͳ��ܼӵ�������. �������ķ�������.');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','ֻ�������ظ���Ʒ ...');
  define('TEXT_COPY_ATTRIBUTES','������Ʒ����?');
  define('TEXT_COPY_ATTRIBUTES_YES','��');
  define('TEXT_COPY_ATTRIBUTES_NO','��');

  define('TEXT_INFO_CURRENT_PRODUCT', '��ǰ��Ʒ: ');
  define('TABLE_HEADING_MODEL', '�ͺ�');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','�޸ı����Ʒ���� ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','ɾ��<strong>����</strong>��Ʒ����:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','�������Ե���һ��Ʒ����һ����:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','�������Ե���һ<strong>��Ʒ</strong>:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','�������Ե���һ<strong>����</strong>:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>��δ������е���Ʒ����?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>ɾ��</strong>��Ȼ����������');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>����</strong>����/�۸�, Ȼ������µ�');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>����</strong>��������������');

  define('SUCCESS_ATTRIBUTES_DELETED','���Գɹ�ɾ��');
  define('SUCCESS_ATTRIBUTES_UPDATE','���Գɹ�����');

  define('ICON_ATTRIBUTES','����');

  define('TEXT_CATEGORIES_IMAGE_DIR','�ϴ�Ŀ¼:');
  define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>��ӷ�������ѡ������ͼ���ļ����ļ���:</strong>');

  define('TEXT_VIRTUAL_PREVIEW','��ʾ: ���˷��Ҳ�Ҫ�ͻ���ַ');
  define('TEXT_VIRTUAL_EDIT','��ʾ: ���˷��Ҳ�Ҫ�ͻ���ַ');
  define('TEXT_FREE_SHIPPING_PREVIEW','��ʾ: ���˷�, ����Ҫ�ͻ���ַ');
  define('TEXT_FREE_SHIPPING_EDIT','��ʾ: ���˷�, ����Ҫ�ͻ���ַ');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','��ʾ: ����ʾ��������, ȱʡ����Ϊ1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','��ʾ: ����ʾ��������, ȱʡ����Ϊ1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>��ѡ��:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','����:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','����: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','�����Զ���:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','��');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','��');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*��ʾ�۸��������������Լ۸�ͼ۸�');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*��ʾ�۸��������������Լ۸�ͼ۸�');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','���ٹ�������:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','����������λ:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','��๺������:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = ������, 1 = ��װ������ �� ��� ##');

  define('TEXT_PRODUCTS_MIXED','�������Ի��:');

  define('TEXT_PRODUCT_IS_FREE','�����Ʒ:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*����Ʒ���');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*����Ʒ���');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*����Ʒ���');

  define('TEXT_PRODUCT_IS_CALL','�۸�����:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*����Ʒ�۸�����');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*����Ʒ�۸�����');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>��Ҫ������ </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>������������ </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>���������� </strong>');

  define('TEXT_SHIPPING_INFO',
  '<strong>������Ʒ</strong>��Ҫ�˷�Ҳ��Ҫ�ͻ���ַ, ����, ' . TEXT_GV_NAMES . ', ��.<br />' .
  '<strong>�������</strong>��Ҫ�˷�, ����Ҫ�ͻ���ַ<br />' .
  '<strong>����</strong>�趨Ϊ������Ʒ - ����ѡ�����Ҫ���<br />'
  );

  define('TEXT_ANY_TYPE', 'Any Type');
  define('TABLE_HEADING_PRODUCT_TYPES', '��Ʒ����');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', '�ı����״̬��:');
define('TEXT_CATEGORIES_STATUS_INTRO', '�ı����״̬��: ');
define('TEXT_CATEGORIES_STATUS_OFF', '��');
define('TEXT_CATEGORIES_STATUS_ON', '��');
define('TEXT_PRODUCTS_STATUS_INFO', '�ı�������Ʒ״̬Ϊ: ');
define('TEXT_PRODUCTS_STATUS_OFF', '��');
define('TEXT_PRODUCTS_STATUS_ON', '��');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'û�ı�');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>���� ...</strong><br />��ע: �ر�һ�����ཫ�ر����и����е���Ʒ. �÷��������ӵ���Ʒ���������๲���Ҳ��ر�.');

define('TEXT_PRODUCTS_STATUS_ON_OF',' / ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' ���� ');

define('TEXT_CATEGORIES_DESCRIPTION', '������:');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', '��Ʒ�۸�����');

// Metatags
  define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', '����Ԫ��ǩ����');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', '�Զ���Ԫ��ǩ');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', '����:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', '�ؼ���:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', '����:');

  define('WARNING_PRODUCTS_IN_TOP_INFO', '����: ��������������Ʒ����ᵼ�¼۸���ʾ����ȷ�����ֵ���Ʒ: ');
?>