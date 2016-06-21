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
//  $Id: categories.php 3396 2006-04-09 00:02:03Z ajeh $
//

define('HEADING_TITLE', '��������� � ������');
define('HEADING_TITLE_GOTO', '�������:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', '��������� � ������');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', '����������');

define('TABLE_HEADING_PRICE','����/������/�������');
define('TABLE_HEADING_QUANTITY','����������');

define('TABLE_HEADING_ACTION', '��������');
define('TABLE_HEADING_STATUS', '������');

define('TEXT_CATEGORIES', '���������:');
define('TEXT_SUBCATEGORIES', '������������:');
define('TEXT_PRODUCTS', '������:');
define('TEXT_PRODUCTS_PRICE_INFO', '����:');
define('TEXT_PRODUCTS_TAX_CLASS', '����� ������:');
define('TEXT_PRODUCTS_AVERAGE_RATING', '������� ����:');
define('TEXT_PRODUCTS_QUANTITY_INFO', '����������:');
define('TEXT_DATE_ADDED', '���� ����������:');
define('TEXT_DATE_AVAILABLE', '���� ������� � ��������:');
define('TEXT_LAST_MODIFIED', '��������� ���������:');
define('TEXT_IMAGE_NONEXISTENT', '����������� �� �������');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', '�������� ��������� ��� ����� � ������ �������');
define('TEXT_PRODUCT_MORE_INFORMATION', '��� ����� ��������� ���������� �������� �������� <a href="http://%s" target="blank">�������</a>');
define('TEXT_PRODUCT_DATE_ADDED', '������ ����� ��� �������� %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', '������ ����� ����� � ������� %s.');

define('TEXT_EDIT_INTRO', '�������� ����������� ���������');
define('TEXT_EDIT_CATEGORIES_ID', 'ID ���������:');
define('TEXT_EDIT_CATEGORIES_NAME', '�������� ���������:');
define('TEXT_EDIT_CATEGORIES_IMAGE', '����������� ���������:');
define('TEXT_EDIT_SORT_ORDER', '������� ����������:');

define('TEXT_INFO_COPY_TO_INTRO', '�������� ����� ��������� � ������� �� ������ ����������� ������ �����');
define('TEXT_INFO_CURRENT_CATEGORIES', '������� ���������: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', '����� ���������');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', '������������� ���������');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', '������� ���������');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', '����������� ���������');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', '������� �����');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', '����������� �����');
define('TEXT_INFO_HEADING_COPY_TO', '���������� �');

define('TEXT_DELETE_CATEGORY_INTRO', '�� ����� ������ ������� ������ ���������?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>��������:</strong> �������������� ������ ��� ID ������� ��������� ���� �������, �� ���� ��������� �������. �� ������ ������� ��������� ��, ����� ����� �������� ��������� ��� �������� �������������� ������, ��� �� �������� ID ������� ��������� ������ ���������, ����� ��� ��� ������� �');
define('TEXT_DELETE_PRODUCT_INTRO', '�� ����� ������ ������� ������ �����?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>��������:</b> %s (���-)��������� ��� ��� ��������� � ������ ���������!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>��������:</b> %s ������� ��������� � ������ ���������!');

define('TEXT_MOVE_PRODUCTS_INTRO', '�������� ��������� ������� �� ������ <b>%s</b> ��������� �');
define('TEXT_MOVE_CATEGORIES_INTRO', '�������� ��������� ������� �� ������ <b>%s</b> ��������� �');
define('TEXT_MOVE', '��������� <b>%s</b> �:');

define('TEXT_NEW_CATEGORY_INTRO', '������� ���������� � ����� ���������');
define('TEXT_CATEGORIES_NAME', '�������� ���������:');
define('TEXT_CATEGORIES_IMAGE', '����������� ���������:');
define('TEXT_SORT_ORDER', '������� ����������:');

define('TEXT_PRODUCTS_STATUS', '������ �������:');
define('TEXT_PRODUCTS_VIRTUAL', '����������� �����:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', '������ ���������� ��������:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', '���������� ���������� ������:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', '���� ������� � ��������:');
define('TEXT_PRODUCT_AVAILABLE', '� �������');
define('TEXT_PRODUCT_NOT_AVAILABLE', '��� � �������');
define('TEXT_PRODUCT_IS_VIRTUAL', '��, ���������� ����� ��������');
define('TEXT_PRODUCT_NOT_VIRTUAL', '���, ����� �������� ���������');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', '��, ������ ���������� ��������');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', '���, ������� ������� ��������');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', '��, ���������� ���� � ����������� ������');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', '���, �� ���������� ���� � ����������� ������');

define('TEXT_PRODUCTS_MANUFACTURER', '�������������:');
define('TEXT_PRODUCTS_NAME', '�������� ������:');
define('TEXT_PRODUCTS_DESCRIPTION', '��������:');
define('TEXT_PRODUCTS_QUANTITY', '���������� ������:');
define('TEXT_PRODUCTS_MODEL', '������ ������:');
define('TEXT_PRODUCTS_IMAGE', '����������� ������:');
define('TEXT_PRODUCTS_IMAGE_DIR', '���������� �����:');
define('TEXT_PRODUCTS_URL', 'URL ������:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(��� http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', '���� ������ (�����):');
define('TEXT_PRODUCTS_PRICE_GROSS', '���� ������ (������):');
define('TEXT_PRODUCTS_WEIGHT', '��� ������������ ������:');

define('EMPTY_CATEGORY', '������ ���������');

define('TEXT_HOW_TO_COPY', '������ �����������:');
define('TEXT_COPY_AS_LINK', '������ �� �����');
define('TEXT_COPY_AS_DUPLICATE', '����������� �����');

define('TEXT_RESTRICT_PRODUCT_TYPE', '���������� ����� ������');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', '������ ��������� ���������� ������ ����� ������');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','������ ����� �� ����� ���� �������� � ������ ���������. ��������� ����������� ���������');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','������ ��� ������������� ������� ...');
  define('TEXT_COPY_ATTRIBUTES','���������� ��������� ������ ���������?');
  define('TEXT_COPY_ATTRIBUTES_YES','��');
  define('TEXT_COPY_ATTRIBUTES_NO','���');

  define('TEXT_INFO_CURRENT_PRODUCT', '������� �����: ');
  define('TABLE_HEADING_MODEL', '������');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','��������� �������� ��� ������� ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','������� <strong>���</strong> ��������� ������ ���:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','���������� ��������� ������� ������ ��� ��������� ��:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','���������� ��������� ������� <strong>������</strong> ��:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','���������� ��������� ������ <strong>���������</strong> ��:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>��� ������ ���� ���������� ��������� ��������� ������?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>�������</strong> �������, ����� ���������� ����� ���������');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>��������</strong> � ������ ����������� � �����, ����� �������� ���');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>����������</strong> � �������� ������ ����� ���������');

  define('SUCCESS_ATTRIBUTES_DELETED','��������� ������� �������');
  define('SUCCESS_ATTRIBUTES_UPDATE','��������� ������� ���������');

  define('ICON_ATTRIBUTES','����������� ����������');

  define('TEXT_CATEGORIES_IMAGE_DIR','��������� � �����:');
  define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>Or, select an existing image file from server, filename:</strong>');

  define('TEXT_VIRTUAL_PREVIEW','��������: ������ ����� ������� - ���������� �������� � ���������� ����� ��������');
  define('TEXT_VIRTUAL_EDIT','��������: ������ ����� ������� - ���������� �������� � ���������� ����� ��������');
  define('TEXT_FREE_SHIPPING_PREVIEW','��������: ������ ����� ������� - ���������� ��������, ����� �������� ���������');
  define('TEXT_FREE_SHIPPING_EDIT','��������: �������� ������� ������ ����� - ���������� ��������, ����� �������� ���������');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','��������: �� ���������� ���� � ����������� ������, �� ��������� ���������� 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','��������: �� ���������� ���� � ����������� ������, �� ��������� ���������� 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>��������:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','����������� ���������� ���:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','��������: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','���� ������ �� ���������:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','��');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','���');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*���������� ���� � ���������� ���������� ������� ������� ���������� ���� ����');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*���������� ���� � ���������� ���������� ������� ������� ���������� ���� ����');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','����������� ���������� ������:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','���������� ������ ������:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','������������ ���������� ������:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = �������������, 1 = ��� ����� � ����������� ��� �������� ##');

  define('TEXT_PRODUCTS_MIXED','����������� � ������������ ���������� ������:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', '���������� �����');
  define('TEXT_PRODUCT_IS_FREE','���������� �����:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*����� ������� ��� ����������');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*����� ������� ��� ����������');

  define('TEXT_PRODUCT_IS_CALL','����� ����������� ����:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*����� ������� ��� ����� ������� ����������� ����');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*����� ������� ��� ����� ������� ����������� ����');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>���������� ����� �������� </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>�������� ����� �������� �� </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>�������� �� ��������� </strong>');

  define('TEXT_SHIPPING_INFO',
  '<strong>����������� �����</strong> �� ������� ����� �������� � ������ �������� �����, ' . TEXT_GV_NAMES . ', � �.�.<br />' .
  '<strong>������ ���������� ��������</strong> ������� ����� ��������<br />' .
  '<strong>��������</strong> �������� ��� ����������� ������ - ������� �������� �� ���������<br />'
  );

  define('TEXT_ANY_TYPE', '����� ���');
  define('TABLE_HEADING_PRODUCT_TYPES', '���(�) ������');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', '�������� ������ ��������� ��:');
define('TEXT_CATEGORIES_STATUS_INTRO', '�������� ������ ��������� ��: ');
define('TEXT_CATEGORIES_STATUS_OFF', '����');
define('TEXT_CATEGORIES_STATUS_ON', '���');
define('TEXT_PRODUCTS_STATUS_INFO', '�������� ������ ���� ������� ��: ');
define('TEXT_PRODUCTS_STATUS_OFF', '����');
define('TEXT_PRODUCTS_STATUS_ON', '���');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', '���������');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>�������� ...</strong><br />�������: ���������� ��������� �������� ��� ������ � ���');

define('TEXT_PRODUCTS_STATUS_ON_OF',' �� ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' ������� ');

define('TEXT_CATEGORIES_DESCRIPTION', '�������� ���������:');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', '����� ����������� ����');

// Metatags
  define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', '���� ���� �������� ���������');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', '���������� ���� ����');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', '���������:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', '�������� �����:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', '��������:');

define('WARNING_PRODUCTS_IN_TOP_INFO', '��������: � ��� ���� ����� � ������� ������ ���������. ��� ����� �������� � ������������ ������ ������. ��������� ������: ');


?>