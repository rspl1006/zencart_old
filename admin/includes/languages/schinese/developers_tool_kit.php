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
//  $Id: developers_tool_kit.php 6082 2007-03-31 04:26:08Z ajeh $
//
  define('HEADING_TITLE', '�������߼�');
  define('TABLE_CONFIGURATION_TABLE', '��ѯ��������');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>�ɹ�</strong>������Ʒ�۸�����ֵ');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>����:</strong> û���ҵ�ƥ������ùؼ��� ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>����:</strong> û������Ҫ���ҵ����ùؼ��ֻ����� ... �����ж�');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>����������Ʒ�۸�����</strong><br />�Ա��ܰ���ʾ�۸�����: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>��ѯ�����������ļ�����</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Key or Name:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>ע��:</strong> �����Ǵ�д��ĸ.<br />ѡ��������, ��������ݿ����û���ҵ�, �Ͳ�ѯ�����ļ�, ����, ��, ��. ');

  define('TABLE_TITLE_KEY', '<strong>�ؼ���:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>����:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>���:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>���:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>��ֵ:</strong>');

  define('TEXT_LOOKUP_NONE', '��');
  define('TEXT_INFO_SEARCHING', '���� ');
  define('TEXT_INFO_FILES_FOR', ' �ļ� ... ����: ');
  define('TEXT_INFO_MATCHES_FOUND', 'û���ҵ�ƥ����: ');

  define('TEXT_LANGUAGE_LOOKUPS', '�����ļ�����:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', ' ' . strtoupper($_SESSION['language']) . '�����������ļ� - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', '������Ҫ�����ļ� - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /schinese.php ��)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '���е�ǰѡ�������ļ� - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', '������Ҫ�����ļ� - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /schinese.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '���е�ǰѡ�������ļ� - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '���е�ǰѡ�������ļ� - Catalog/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>�ں����ļ��в���</strong>');
  define('TEXT_FUNCTION_LOOKUPS', '�����ļ�����:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', '���к����ļ� - Catalog/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', '���к����ļ� - Catalog');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', '���к����ļ� - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>�����ļ��в���</strong>');
  define('TEXT_CLASS_LOOKUPS', '���ļ�����:');
  define('TEXT_CLASS_LOOKUP_CURRENT', '�������ļ� - Catalog/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', '�������ļ� - Catalog');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', '�������ļ� - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>��ģ���ļ��в���</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'ģ���ļ�����:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', '����ģ���ļ� - /templates sideboxes /pages ��');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', '����ģ���ļ� - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', '����ģ���ļ� - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', '����ģ���ļ� - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>�������ļ��в���</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', '�����ļ�����:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', '�����ļ� - Catalog/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', '�����ļ� - Catalog');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', '�����ļ� - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','û�п��Ա༭��');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' ��, ����');

  define('TEXT_SEARCH_ALL_FILES', '���������ļ�: ');
  define('TEXT_SEARCH_DATABASE_TABLES', '�������ݿ��configuration��: ');
?>