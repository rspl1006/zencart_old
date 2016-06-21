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
//  $Id: attributes_controller.php 2830 2006-01-10 17:13:18Z birdbrain $
//

define('HEADING_TITLE', '���������: ');

define('HEADING_TITLE_OPT', '����� ������');
define('HEADING_TITLE_VAL', '������������ ��������');
define('HEADING_TITLE_ATRIB', '���������� ����������');
define('HEADING_TITLE_ATRIB_SELECT','�������� ��������� ��� ����������� ���������� ������ ...');

define('TEXT_PRICES_AND_WEIGHTS', '���� � ���');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', '������� ������: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', '���������: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', '������� �����:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', '������� ������: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', '���������: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', '������ �� ����������:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', '������� ������ �� ����������:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', '���� �� �����:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- ���������� �����:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', '���� �� ������:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- ���������� ������:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', '�������� ������');
define('TABLE_HEADING_OPT_NAME', '������������ ��������');
define('TABLE_HEADING_OPT_VALUE', '������������ ��������');
define('TABLE_HEADING_OPT_PRICE', '����');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '�������');
define('TABLE_HEADING_ACTION', '��������');
define('TABLE_HEADING_DOWNLOAD', '����������� ������:');
define('TABLE_TEXT_FILENAME', '��� �����:');
define('TABLE_TEXT_MAX_DAYS', '����� ����� ������: (0 = ������������)');
define('TABLE_TEXT_MAX_COUNT', '������������ ���������� ��������:');
define('TABLE_HEADING_OPT_DISCOUNTED','�������');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','������');
define('TABLE_HEADING_PRICE_TOTAL','����� ��������: ������:');
define('TEXT_WARNING_OF_DELETE', '� ������ ����� ������������ ������ � �������� - �� ������������� ������� �');
define('TEXT_OK_TO_DELETE', '� ������ ����� �� ������������ ������ � �������� - � ����� �������');
define('TEXT_OPTION_ID', 'ID �����');
define('TEXT_OPTION_NAME', '������������ ��������');

define('ATTRIBUTE_WARNING_DUPLICATE','������������ ��������� - �������� �� ��� ��������'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','�������� ��������� ������ - �������� �� ��� �������'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','����� ��������� � ������������ �������� ��������� �� ������� - �������� �� ��� ��������'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','����� ��������� � ������������ �������� ��������� �� ������� - �������� �� ��� �������'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','������������ �������� ��������� ���������'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','������������ �������� ��������� ���������'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','��������������'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','��������'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','���������� ������ ���������'); // title
define('TEXT_DOWNLOADS_DISABLED','��������: �������� ���������');

define('TABLE_TEXT_MAX_DAYS_SHORT', '���:');
define('TABLE_TEXT_MAX_COUNT_SHORT', '��������:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','������� ����������');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','������� �� ���������');
  define('TEXT_SORT',' �������: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','�������');
  define('TABLE_HEADING_OPT_WEIGHT','���');
  define('TABLE_HEADING_OPT_SORT_ORDER','�������');
  define('TABLE_HEADING_OPT_DEFAULT','���������');

  define('TABLE_HEADING_OPT_TYPE', '������������ ���'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','������');
  define('TABLE_HEADING_OPTION_VALUE_MAX','��������');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','����');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','�����������');

  define('TEXT_OPTION_VALUE_COMMENTS','�����������: ');
  define('TEXT_OPTION_VALUE_SIZE','���������� ������: ');
  define('TEXT_OPTION_VALUE_MAX','������������ �����: ');

  define('TEXT_ATTRIBUTES_IMAGE','����������� ���������:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','����� � ������������� ����������:');

  define('TEXT_ATTRIBUTES_FLAGS','�����<br />����������:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '������������ ������<br />��� ����������� ����:');
  define('TEXT_ATTRIBUTES_IS_FREE', '�������� ���������<br />����� ����� ����������:');
  define('TEXT_ATTRIBUTES_DEFAULT', '�������� �� ���������<br />�������:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', '��������� ������������� ��������<br />��� ������� �� �������:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','�������� � �������� ����<br />����� ���� ��������');
  define('TEXT_ATTRIBUTES_REQUIRED','�������� ���������<br />��� ������:');

  define('LEGEND_BOX','�������:');
  define('LEGEND_KEYS','����/���');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', '������ ����������');
  define('LEGEND_ATTRIBUTES_IS_FREE', '���������');
  define('LEGEND_ATTRIBUTES_DEFAULT', '���������');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', '�������');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','�������� ����');
  define('LEGEND_ATTRIBUTES_REQUIRED','����������');
  define('LEGEND_ATTRIBUTES_IMAGES','�����������');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','����������/������������<br />��� �����');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','������� �� ���������');
  define('TEXT_PRODUCTS_LISTING','������ ������� ���: ');
  define('TEXT_NO_PRODUCTS_SELECTED','����� �� ������');
  define('TEXT_NO_ATTRIBUTES_DEFINED','��������� �� ���������� ���� ������ ID#');

  define('TEXT_PRODUCTS_ID','������ ID#');
  define('TEXT_ATTRIBUTES_DELETE','������� ���');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','���������� � �����');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','���������� � ���������');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','��������� �������� ��� ������� ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','������� <strong>���</strong> ��������� ��� ������:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','���������� ��������� � ������ ����� ��� � ��������� ��:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','�����');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','���������� ��������� � ������ <strong>�����</strong> �� ID#');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','�������� ����� ��� ����������� ���� ���������� �:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','���������');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','�������� ��������� ��� ����������� ���� ���������� �:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','���������� ��������� ��� ���� ������� � <strong>���������</strong> �� ������ ID#');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>��� ������ ���� ���������� ��������� ��������� ������?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>�������</strong> �������, ����� ���������� ����� ���������');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>��������</strong> � ������ ����������� � ������, ����� �������� ���');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>������������</strong> � �������� ������ ����� ���������');

  define('SUCCESS_PRODUCT_UPDATE_SORT','���������� ������� ���������� ���������� ������ ������� ��� ID# ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','��� ���������� ��� ���������� ������� ���������� ��� ID# ');
  define('SUCCESS_ATTRIBUTES_DELETED','��������� ���� ������� �������');
  define('SUCCESS_ATTRIBUTES_UPDATE','��������� ���� ������� ���������');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','�� ������� ��������� ��� �����������');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - � ���������: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','�� ����� ������ ������� ��� ��������� ��� ID# ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>���������� ����� �������� </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>�������� ����� �������� �� </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>�������� �� ��������� </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','������������ ����������');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','������������ ���������� ��� ID#');
  define('TEXT_PRODUCT_OPTIONS', '<strong>��������:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>���������� ��������� ���������� ����� ������� �������� ��� ����������</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', '���� �� ���������');
  define('TEXT_PRODUCTS_PRICE', '���� �������: ');
  define('TEXT_SPECIAL_PRICE', '����������� ����: ');
  define('TEXT_SALE_PRICE', '���� �������: ');
  define('TEXT_FREE', '���������');
  define('TEXT_CALL_FOR_PRICE', '���������� ����');
  define('TEXT_SAVE_CHANGES','�������� � ��������� ���������:');

  define('TEXT_INFO_ID', 'ID#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', '� ������� ������ �� ���������');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', '����������� �������� ���� ������������ �������� ��� ������ ��� ������������� �������� ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>�������� ������: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>������������ ��������: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', '�������� �������� ���� ������������ �������� ��� ������������� ��������: ');
?>