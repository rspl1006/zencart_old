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
//  $Id: attributes_controller.php 2830 2006-01-10 17:13:18Z birdbrain $
//

define('HEADING_TITLE', '����: ');

define('HEADING_TITLE_OPT', '��Ʒѡ��');
define('HEADING_TITLE_VAL', 'ѡ������');
define('HEADING_TITLE_ATRIB', '���Կ���');
define('HEADING_TITLE_ATRIB_SELECT','��ѡ��һ��������ʾ��Ʒ���� ...');

define('TEXT_PRICES_AND_WEIGHTS', '�۸������');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', '�۸�����: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', '����: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', '����:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', '��������: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', '����: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', '���������Ż�:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', '���������Żݻ���:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'ÿ�ʼ۸�:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- ��Ѵ���:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'ÿ�ּ۸�:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- �������:');

define('TABLE_HEADING_ID', '���');
define('TABLE_HEADING_PRODUCT', '��Ʒ����');
define('TABLE_HEADING_OPT_NAME', 'ѡ������');
define('TABLE_HEADING_OPT_VALUE', 'ѡ������');
define('TABLE_HEADING_OPT_PRICE', '�۸�');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'ǰ׺');
define('TABLE_HEADING_ACTION', '����');
define('TABLE_HEADING_DOWNLOAD', '��������Ʒ:');
define('TABLE_TEXT_FILENAME', '�ļ���:');
define('TABLE_TEXT_MAX_DAYS', '��Ч��: (0 = ������Ч)');
define('TABLE_TEXT_MAX_COUNT', '������ش���:');
define('TABLE_HEADING_OPT_DISCOUNTED','���Ż�');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','����');
define('TABLE_HEADING_PRICE_TOTAL','�ܶ�|�Ż�: ����:');
define('TEXT_WARNING_OF_DELETE', '��ѡ������Ʒ���������� - ɾ��������ȫ.');
define('TEXT_OK_TO_DELETE', '��ѡ��û����Ʒ���������� - ���԰�ȫɾ��.');
define('TEXT_OPTION_ID', 'ѡ����');
define('TEXT_OPTION_NAME', 'ѡ������');

define('ATTRIBUTE_WARNING_DUPLICATE','�ظ����� - ����û�м���'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','�����ظ����� - ����û�иı�'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','����ѡ���ѡ�����ݲ�ƥ�� - ����û�м���'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','����ѡ���ѡ�����ݲ�ƥ�� - ����û�иı�'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','�����ѡ�����ƿ����ظ�'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','�����ѡ�����ݿ����ظ�'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','�༭��'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','ɾ����'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','���������'); // title
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

  define('TABLE_HEADING_OPT_TYPE', 'ѡ������'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','���');
  define('TABLE_HEADING_OPTION_VALUE_MAX','���');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','��');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','ע��');

  define('TEXT_OPTION_VALUE_COMMENTS','ע��: ');
  define('TEXT_OPTION_VALUE_SIZE','��ʾ���: ');
  define('TEXT_OPTION_VALUE_MAX','��󳤶�: ');

  define('TEXT_ATTRIBUTES_IMAGE','����ͼ��:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','����ͼ��Ŀ¼:');

  define('TEXT_ATTRIBUTES_FLAGS','����<br />ѡ��');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', '��������ʾ:');
  define('TEXT_ATTRIBUTES_IS_FREE', '��Ʒ���ʱ<br />����Ҳ���:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'ȱʡ����:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Ӧ���Ż���<br />�ؼ�/����');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','�����ڻ�����<br />(�������Զ���)');
  define('TEXT_ATTRIBUTES_REQUIRED','��������<br />�ı�:');

  define('LEGEND_BOX','ͼʾ:');
  define('LEGEND_KEYS','��/��');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', '����ʾ');
  define('LEGEND_ATTRIBUTES_IS_FREE', '���');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'ȱʡ');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', '�Ż�');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','����');
  define('LEGEND_ATTRIBUTES_REQUIRED','����');
  define('LEGEND_ATTRIBUTES_IMAGES','ͼ��');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','��Ч/��Ч<br />�ļ���');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','��Ϊȱʡ˳��');
  define('TEXT_PRODUCTS_LISTING','��Ʒ�б�: ');
  define('TEXT_NO_PRODUCTS_SELECTED','û��ѡ����Ʒ');
  define('TEXT_NO_ATTRIBUTES_DEFINED','û�ж������Ե���Ʒ���');

  define('TEXT_PRODUCTS_ID','��Ʒ���');
  define('TEXT_ATTRIBUTES_DELETE','ȫ��ɾ��');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','���Ƶ���Ʒ');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','���Ƶ�����');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','�����޸ĵ���Ʒ��� ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','ɾ��<strong>����</strong>��Ʒ����:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','�������Ե���һ��Ʒ��������:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','��Ʒ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','�������Ե���һ<strong>��Ʒ</strong>');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','ѡ�����Ʒ�����������Ե�:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','����');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','ѡ������Ը����������Ե�:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','�������Ե�<strong>����</strong>�е�������Ʒ, ��Ʒ���');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>��δ������е���Ʒ����?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>ɾ��</strong>��Ȼ����������');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>����</strong>����/�۸�Ȼ������µ�');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>����</strong>��������������');

  define('SUCCESS_PRODUCT_UPDATE_SORT','�ɹ�������������ı�� ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','û�п��Ը�����������Ա�� ');
  define('SUCCESS_ATTRIBUTES_DELETED','���Գɹ�ɾ��');
  define('SUCCESS_ATTRIBUTES_UPDATE','���Գɹ�����');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','û���������Ƶķ���ѡ��');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - ����: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','��ȷ��Ҫɾ�����и�ID�������� ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>��Ҫ������ </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>������������ </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>�����Ը��� </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','Ԥ������');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','Ԥ��������ʾ�ı��');
  define('TEXT_PRODUCT_OPTIONS', '<strong>��ѡ��:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>������ѡ����������Բ����󣬵�����Ӱ�ť</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', '�����Զ���');
  define('TEXT_PRODUCTS_PRICE', '�۸�: ');
  define('TEXT_SPECIAL_PRICE', '�ؼ�: ');
  define('TEXT_SALE_PRICE', '����: ');
  define('TEXT_FREE', '���');
  define('TEXT_CALL_FOR_PRICE', '�۸�����');
  define('TEXT_SAVE_CHANGES','���²�����:');

  define('TEXT_INFO_ID', '���');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'û�м��빺�ﳵ');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'ȷ��ɾ�����и�ѡ�����Ƶ�ѡ������ ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>��Ʒ����: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>ѡ������: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>���#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', '�ɹ�ɾ����ѡ�����Ƶ�ѡ������: ');
?>