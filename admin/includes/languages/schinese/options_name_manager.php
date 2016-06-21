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
//  $Id: options_name_manager.php 963 2005-02-03 00:41:31Z drbyte $
//

define('HEADING_TITLE_OPT', '��Ʒѡ��');
define('HEADING_TITLE_VAL', 'ѡ������');
define('HEADING_TITLE_ATRIB', '��Ʒ����');

define('TABLE_HEADING_ID', '���');
define('TABLE_HEADING_PRODUCT', '��Ʒ����');
define('TABLE_HEADING_OPT_NAME', 'ѡ������');
define('TABLE_HEADING_OPT_VALUE', 'ѡ������');
define('TABLE_HEADING_OPT_PRICE', '�۸�');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'ǰ׺');
define('TABLE_HEADING_ACTION', '����');
define('TABLE_HEADING_DOWNLOAD', '��������:');
define('TABLE_TEXT_FILENAME', '�ļ���:');
define('TABLE_TEXT_MAX_DAYS', '��Ч��:');
define('TABLE_TEXT_MAX_COUNT', '������ؼ���:');

define('TEXT_WARNING_OF_DELETE', '��ѡ������Ʒ���������� - ���ܰ�ȫɾ��');
define('TEXT_OK_TO_DELETE', '��ѡ��û����Ʒ���������� - ���԰�ȫɾ��.<br />����: ��ѡ�����µ�����ѡ��ֵҲ����ɾ��');
define('TEXT_OPTION_ID', 'ѡ����');
define('TEXT_OPTION_NAME', 'ѡ������');
define('TABLE_HEADING_OPT_DISCOUNTED','���Ż�');

define('ATTRIBUTE_WARNING_DUPLICATE','�ظ����� - ����û�м���'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','�����ظ����� - ����û�иı�'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','����ѡ���ѡ�����ݲ�ƥ�� - ����û�м���'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','����ѡ���ѡ�����ݲ�ƥ�� - ����û�иı�'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','�����ѡ�����ƿ����ظ�'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','�����ѡ�����ݿ����ظ�'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','�༭��'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','ɾ����'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','������������'); // title
define('TEXT_DOWNLOADS_DISABLED','��ʾ: ���عر�');

define('TABLE_TEXT_MAX_DAYS_SHORT', '����:');
define('TABLE_TEXT_MAX_COUNT_SHORT', '���:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','����');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','ȱʡ����');
  define('TEXT_SORT',' ����: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','ǰ׺');
  define('TABLE_HEADING_OPT_WEIGHT','����');
  define('TABLE_HEADING_OPT_SORT_ORDER','����');
  define('TABLE_HEADING_OPT_DEFAULT','ȱʡ');

  define('TABLE_HEADING_YES','��');
  define('TABLE_HEADING_NO','��');

  define('TABLE_HEADING_OPT_TYPE', '����'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','���');
  define('TABLE_HEADING_OPTION_VALUE_MAX','���');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','��');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','ע��');

  define('TEXT_OPTION_VALUE_COMMENTS','ע��: ');
  define('TEXT_OPTION_VALUE_ROWS', '����: ');
  define('TEXT_OPTION_VALUE_SIZE','���: ');
  define('TEXT_OPTION_VALUE_MAX','����: ');

  define('TEXT_ATTRIBUTES_IMAGE','����ͼ������:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','����ͼ��Ŀ¼:');

  define('TEXT_ATTRIBUTES_FLAGS','����<br />���:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'ֻ����<br />��ʾ��;:');
  define('TEXT_ATTRIBUTES_IS_FREE', '��������ѵ�<br />����Ʒ���ʱ:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'ȱʡ����<br />���Ϊ��ѡ��:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Ӧ����ͬ�Ż� <br />(����Ʒ)');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','�����ڻ���<br />(��������Զ���)');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>˵��: �༭��Ʒѡ�����Ƶ���������</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', '����: û���ҵ���Ʒ ... û�и���');

define('TEXT_SELECT_PRODUCT', ' ѡ��һ����Ʒ');
define('TEXT_SELECT_CATEGORY', ' ѡ��һ������');
define('TEXT_SELECT_OPTION', 'ѡ������');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>��Ӹ�ѡ�������ѡ�����ݵ�������Ʒ</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', '����������һ��ѡ�����ݵĵ������ִ���Ʒ��ɾ����һ��ѡ�������µ�����ѡ������');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', '����ѡ��ɹ�');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>��Ӹ�ѡ�������ѡ�����ݵ�һ����Ʒ</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', '����������һ��ѡ�����ݵ�һ����Ʒ ������һ��ѡ���������������ѡ������');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>��Ӹ�ѡ�������ѡ�����ݵ�һ������</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', '������Ʒ��һ������, Ҫ�����Ʒ������һ��ѡ������������ѡ��������һ��ѡ��������');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>��ע:</strong> ��Щ��Ʒ�����򽫰���ȱʡ��ѡ�����������趨');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>ɾ��������Ʒ�и�ѡ�������ѡ������</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', '���������ִ��������һ��ѡ�����ݵ���Ʒ��ɾ��������һ��ѡ���������ѡ������');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>ɾ��һ����Ʒ�и�ѡ�������ѡ������</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', '����������һ��ѡ�����ݵ�һ����Ʒ��ɾ������ѡ��������ѡ������');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>ɾ��һ�������и�ѡ�������ѡ������</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', '����һ����Ʒ����, Ҫ�����Ʒ������һ��ѡ��������ɾ��������һ��ѡ���������ѡ������');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>��ע:</strong> ѡ����Ʒ������ѡ������ѡ�����ݶ���ɾ��. �ⲻ��ɾ��ѡ����������.');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>��������ѡ�����ݵ���һ��ѡ��������</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', '����ѡ�����ݽ���һ��ѡ�������¸��Ƶ���һѡ��������');
define('TEXT_SELECT_OPTION_FROM', '�Ӹ�ѡ���: ');
define('TEXT_SELECT_OPTION_TO', '��������ѡ�����ݵ�: ');
define('SUCCESS_OPTION_VALUES_COPIED', '�ɹ�����! ');
define('ERROR_OPTION_VALUES_COPIED', '���� - ���ܸ���ѡ�����ݵ���ͬ��ѡ��������! ');
define('ERROR_OPTION_VALUES_NONE', '���� - Ҫ���Ƶ�ѡ��������û�ж�������. û�и����κζ���! ');
define('TEXT_WARNING_BACKUP', '����: ����ȫ���޸�ʱ, �뱸�ݺ��������ݿ�');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'ÿ������ͼ��: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', '��ѡ��ť/У��ť ���Է��: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>�ı����Ե���������ʾ��Ⱥ���󳤶�:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>ͼ����:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= ͼ����ѡ����������');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Ԫ��, ͼ�� �� ѡ������');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Ԫ��, ͼ�� �� ѡ������');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= ѡ��������Ԫ�غ�ͼ������');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Ԫ����ͼ���ѡ����������');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Ԫ����ͼ���ѡ����������');
?>