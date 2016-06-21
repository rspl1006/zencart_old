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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//

define('HEADING_TITLE_OPT', '����� �������');
define('HEADING_TITLE_VAL', '������������ ��������');
define('HEADING_TITLE_ATRIB', '��������� �������');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', '�������� ������');
define('TABLE_HEADING_OPT_NAME', '������������ ��������');
define('TABLE_HEADING_OPT_VALUE', '������������ ��������');
define('TABLE_HEADING_OPT_PRICE', '����');
define('TABLE_HEADING_OPT_PRICE_PREFIX', '�������');
define('TABLE_HEADING_ACTION', '��������');
define('TABLE_HEADING_DOWNLOAD', '����������� ������:');
define('TABLE_TEXT_FILENAME', '��� �����:');
define('TABLE_TEXT_MAX_DAYS', '����� �������� ������(���):');
define('TABLE_TEXT_MAX_COUNT', '������������ ���������� ��������:');

define('TEXT_WARNING_OF_DELETE', '� ������ ����� ���� ������ � �������� ������� ������������ � ��� - ������ ��������� ��� ��������');
define('TEXT_OK_TO_DELETE', '� ������ ����� ��� �������������� ������� - �� ������ ������� �.<br />��������: ��� ������������ �������� ��� ������� ������������� �������� ����� �������');
define('TEXT_OPTION_ID', 'ID �����');
define('TEXT_OPTION_NAME', '������������ ��������');
define('TABLE_HEADING_OPT_DISCOUNTED','������������');

define('ATTRIBUTE_WARNING_DUPLICATE','����������� �������� - �������� �� ��� ��������'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','�������� ��������� ������ - �������� �� ��� �������'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','����� ��������� � ������������ �������� �� ������� - �������� �� ��� ��������'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','����� ��������� � ������������ �������� �� ������� - �������� �� ��� �������'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','��������� �������� ������������� �������� ��������'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','��������� �������� ������������� �������� ��������'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','��������������'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','��������'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','���������� ����� ����������'); // title
define('TEXT_DOWNLOADS_DISABLED','��������: �������� ���������');

define('TABLE_TEXT_MAX_DAYS_SHORT', '���:');
define('TABLE_TEXT_MAX_COUNT_SHORT', '��������:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','������� ����������');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','���������� �� ���������');
  define('TEXT_SORT',' ����������: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','�������');
  define('TABLE_HEADING_OPT_WEIGHT','���');
  define('TABLE_HEADING_OPT_SORT_ORDER','������� ����������');
  define('TABLE_HEADING_OPT_DEFAULT','���������');

  define('TABLE_HEADING_YES','��');
  define('TABLE_HEADING_NO','���');

  define('TABLE_HEADING_OPT_TYPE', '������������ ���'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','������');
  define('TABLE_HEADING_OPTION_VALUE_MAX','��������');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','������');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','�����������');

  define('TEXT_OPTION_VALUE_COMMENTS','�����������: ');
  define('TEXT_OPTION_VALUE_ROWS', '������: ');
  define('TEXT_OPTION_VALUE_SIZE','���������� ������: ');
  define('TEXT_OPTION_VALUE_MAX','������������ �����: ');

  define('TEXT_ATTRIBUTES_IMAGE','��������� �����������:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','����� � �������������:');

  define('TEXT_ATTRIBUTES_FLAGS','�����<br />���������:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '������������ ������<br />����������� �����:');
  define('TEXT_ATTRIBUTES_IS_FREE', '�������� ���������<br />����� ����� ����������:');
  define('TEXT_ATTRIBUTES_DEFAULT', '�������� �� ���������<br />������� � ������:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', '��������� �� �� ����� ��������<br />������������ �������:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','�������� � �������� ����<br />����� ����������� �� ���������');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>��������: �������������� ������������ �������� ������ ��� �������������� ��������</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', '��������: ����� �� ������ ... ������ �� ���������');

define('TEXT_SELECT_PRODUCT', ' �������� �����');
define('TEXT_SELECT_CATEGORY', ' �������� ���������');
define('TEXT_SELECT_OPTION', '�������� ������������ ��������');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>�������� ��� ������������ �������� �� ���� ������� ��� ������������� ��������</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', '�������� ��� ������������ ������ � ������� ���� ���� �� ���� ������������ �������� � �������� ��� ������������ �������� � ������������ ��������');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', '�������� ���������� ����� ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>�������� ��� ������������ �������� ������ ������ ��� ������������� ��������</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', '�������� ���� ����� � �������� ���� ���� �� ���� ������������ �������� � �������� ��� ������������ �������� � ������������ ��������');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>�������� ��� ������������ �������� � ���� ��������� ������� ��� ������������� ��������</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', '�������� ���� ��������� �������, ����� � ������ ���� ���� �� ���� ������������ �������� � �������� ��� ������������ �������� � ������������ ��������');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>��������:</strong> ������� ���������� ����� ���������� �� ��������� ��� ������������ �������� �������');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>������� ��� ������������ �������� ���� ������� ��� ������������� ��������</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', '�������� ��� ������������ ������ � ������� ���� ���� �� ���� ������������ �������� � ������� ��� ������������ �������� � ������������ ��������');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>������� ��� ������������ �������� ������ ������ ��� ������������� ��������</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', '�������� ���� ����� � �������� ���� ���� �� ���� ������������ �������� � ������� ��� ������������ �������� � ������������ ��������');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>������� ��� ������������ �������� ����� ��������� ������� ��� ������������� ��������</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', '�������� ���� ��������� �������, ����� � ������ ���� ���� �� ���� ������������ �������� � ������� ��� ������������ �������� ��� ������������� ��������');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>��������:</strong> ��� ������������ �������� ������������ �������� ����� ������� ��� ��������� �������. ��� �� ������ ��������� ������������ ��������');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>���������� ��� ������������ �������� � ������ ������������ ��������</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', '��� ������������ �������� ����� ����������� �� ������ ������������� �������� � ������� ������������� ��������');
define('TEXT_SELECT_OPTION_FROM', '���������� �� ������������� ��������: ');
define('TEXT_SELECT_OPTION_TO', '���������� ��� ������������ �������� ������������� ��������: ');
define('SUCCESS_OPTION_VALUES_COPIED', '������� �����������! ');
define('ERROR_OPTION_VALUES_COPIED', '������ - ������ ���������� ������������ �������� � ���� ����� ������������ ��������! ');
define('ERROR_OPTION_VALUES_NONE', '������ - � ������������ �������� ��� �������� ��� �����������! ');
define('TEXT_WARNING_BACKUP', '��������: ������ ������� ��������� ����� ����� ���� ������ ����� ����������� �����������');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', '����������� ���������� �� ������: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', '����� ����������: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>��������: ������, ����������� ������� � ������������ ����� ������ ��� ��������� ����������:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>����� �����������:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= ����������� ��� ������������ ���������');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= �������, ����������� � ������������ ��������');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= �������, ����������� � ������������ �������� ����');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= ������������ �������� ��� ��������� � ������������');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= ������� ��� ������������ � ������������ ���������');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= ������� ��� ������������ � ������������ ���������');
?>