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
//  $Id: options_values_manager.php 1133 2005-04-06 04:29:15Z ajeh $
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
define('TABLE_HEADING_DOWNLOAD', '��������Ʒ:');
define('TABLE_TEXT_FILENAME', '�ļ���:');
define('TABLE_TEXT_MAX_DAYS', '��Ч��:');
define('TABLE_TEXT_MAX_COUNT', '������ؼ���:');

define('TEXT_WARNING_OF_DELETE', '<span class="alert">��ѡ������Ʒ���������� - ���ܰ�ȫɾ��<br />˵��: ���ѡ��ֵ��ص������ļ�����ӷ�������ɾ��</span>');
define('TEXT_OK_TO_DELETE', '��ѡ��û����Ʒ���������� - ���԰�ȫɾ��.');
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
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','ȱʡ˳��');
  define('TEXT_SORT',' ˳��: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','ǰ׺');
  define('TABLE_HEADING_OPT_WEIGHT','����');
  define('TABLE_HEADING_OPT_SORT_ORDER','����');
  define('TABLE_HEADING_OPT_DEFAULT','ȱʡ');

  define('TABLE_HEADING_YES','��');
  define('TABLE_HEADING_NO','��');

  define('TABLE_HEADING_OPT_TYPE', 'ѡ������'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','���');
  define('TABLE_HEADING_OPTION_VALUE_MAX','���');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','��');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','ע��');

  define('TEXT_OPTION_VALUE_COMMENTS','ע��: ');
  define('TEXT_OPTION_VALUE_SIZE','��ʾ���: ');
  define('TEXT_OPTION_VALUE_MAX','��󳤶�: ');

  define('TEXT_ATTRIBUTES_IMAGE','����ͼ������:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','����ͼ��Ŀ¼:');

  define('TEXT_ATTRIBUTES_FLAGS','����<br />���:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'ֻ����<br />��ʾ��;:');
  define('TEXT_ATTRIBUTES_IS_FREE', '��������ѵ�<br />����Ʒ���ʱ:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'ȱʡ����<br />���Ϊ��ѡ��:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Ӧ����ͬ�Ż� <br />(����Ʒ)');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','�����ڻ���<br />(��������Զ���)');

  define('TEXT_PRODUCT_OPTIONS_INFO','�༭��Ʒѡ�����������');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>��ĳ��ѡ�����ƺ����ݸ��Ƶ�������Ʒ ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'ѡ�����е���Ʒ��ѡ�����ƺ����ݣ�Ȼ���������һ��ѡ�����ƺ������滻���е�������Ʒ�ĸ�ѡ�����ƺ�����');
  define('TEXT_SELECT_OPTION_FROM', 'ƥ���ѡ������:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'ƥ���ѡ������:');
  define('TEXT_SELECT_OPTION_TO', '���ѡ������:');
  define('TEXT_SELECT_OPTION_VALUES_TO', '���ѡ������:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', '�������������Ʒ ����<br />������Ҫ������Ʒ�ķ�����');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>��������ѡ�����µ�ѡ������/���ݵ���Ʒ ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'ѡ��������Ʒ��ѡ�����ƺ����ݣ���ӵ�������Ʒ������ѡ��������ָ��ѡ�����Ƶ���Ʒ.
                                                   <br /><strong>����:</strong> ��� ѡ������: ��ɫ ѡ��ֵ: Red ��������Ʒ��ָ��ѡ������: ��С
                                                   <br /><strong>����:</strong> ��� ѡ������: ��ɫ ѡ��ֵ: Green ȱʡֵ������Ʒ���: 34 ��������Ʒ��ָ��ѡ������: ��С
                                                   <br /><strong>����:</strong> ��� ѡ������: ��ɫ ѡ��ֵ: Green ȱʡֵ������Ʒ���: 34 ��������Ʒ��ָ��ѡ������: ��С��������Ϊ: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', '���ѡ�����Ƶ�:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Ҫ��ӵ�ѡ������:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Ҫ��ӵ�ѡ������:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', '�����Ե�ȱʡֵ������Ʒ���# �����ղ���ȱʡֵ:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>��δ���������Ʒ����?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','��<strong>ɾ��</strong>, Ȼ����������');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','��������/�۸�<strong>����</strong>��������');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>����</strong>�������ԣ�ֻ���������');

  define('TEXT_INFO_FROM', ' ��: ');
  define('TEXT_INFO_TO', ' ��: ');
  define('ERROR_OPTION_VALUES_COPIED', '����: ѡ�����ƺ�ѡ�������ظ�');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', '����: ѡ���ѡ�����ƺ����ݲ�ƥ��');
  define('ERROR_OPTION_VALUES_NONE', '����: û�пɸ��Ƶ�����');
  define('SUCCESS_OPTION_VALUES_COPIED', '���Ƴɹ�! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', '����: ȱ��ѡ������/���ݵ���Ʒ���#');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>��������Ʒ��ѡ�����ƺ�������ɾ��ƥ������� ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'ѡ�����е���Ʒ��ѡ�����ƺ����ݣ�Ȼ����Դ�������Ʒ�л�һ�������µ�������Ʒ��ɾ��');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'ƥ���ѡ������:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'ƥ���ѡ������:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', '����: ѡ���ѡ�����ƺ����ݲ�ƥ��');

  define('SUCCESS_OPTION_VALUES_DELETE', '�ɹ�ɾ��: ');
?>