<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
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
//  $Id: store_manager.php 4206 2006-08-22 10:00:01Z drbyte $
//
//
  define('HEADING_TITLE', '�̵����');
  define('TABLE_CONFIGURATION_TABLE', '��ѯ��������');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>�ɹ�</strong>������������');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>�ɹ�</strong>������Ʒ�۸񶨹�����');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>�ɹ�</strong>������Ʒ�鿴����Ϊ 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>�ɹ�</strong>������Ʒ��������Ϊ 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>�ɹ�</strong>����������Ʒ������������');
  define('SUCCESS_UPDATE_COUNTER', '<strong>�ɹ�</strong>���¼�����Ϊ: ');
  define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>�ɹ�</strong>���¹��������־');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>����:</strong> û���ҵ�ƥ������ùؼ��� ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>����:</strong> û������Ҫ���ҵ����ùؼ��ֻ����� ... �����ж�');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>���¼�����</strong><br />Ϊ��ֵ: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>����������Ʒ�۸�����</strong><br />�Ա��ڰ���ʾ�۸�����: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>����������Ʒ�鿴����</strong><br />������Ʒ�鿴����Ϊ 0: ');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>����������Ʒ��������</strong><br />������Ʒ��������Ϊ 0: ');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>����������Ʒ��������</strong><br />�Ա�����������Ʒ�ͼ۸�: ');
  define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>�����ݿ�����չ��������־<br />����: ִ�иò���ǰ�뱸�����ݿ�!</strong><br />���������־���ڼ�¼����ҳ����ִ�еĲ���������־�п���ռ�úܶ�ռ䣬��Ҫ��������<br />�ڳ���50,000����¼��60��󣬻�������档');

  define('TEXT_ORDERS_ID_UPDATE', '<strong>���õ�ǰ��������</strong>');
  define('TEXT_INFO_ORDERS_ID_UPDATE', '<strong>��ע: �ڸ��µ�ǰ��������ǰ ...</strong><br /><br />�Ƚ���һ�����Զ���. Ȼ��, �øò��Զ����������������Ϣ.<br />��һ��ʵ�ʶ������¶�������Ӧ��Ϊ��ϣ��ʹ�õĺ���� 1.<br /><strong>����:</strong> �����ϣ����һ��ʵ�ʶ�������Ϊ1225, ���� 1224<br /><br /><strong>����:</strong> ��ֻ�ܽ����������������, ������ǰ.<br />������趨��������Ϊ 25, ���Ÿ�Ϊ 20, ��һ���������뻹�� 26.');
  define('TEXT_OLD_ORDERS_ID', '�ɵĶ�������');
  define('TEXT_NEW_ORDERS_ID', '�µĶ�������');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>��ѯ�����������ļ�</strong>');
  define('TEXT_CONFIGURATION_KEY', '�ؼ��ֻ�����:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>ע��:</strong> ����Ϊ��д��ĸ.<br />�������ݿ�����Ҳ���ʱ, ���Բ�ѯ�����ļ�.');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>��ѯ�����ļ�</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', '��ѯ����:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '<strong>ע��:</strong> ��ѯ�����ļ������Ǵ�д��Сд');

  define('TABLE_TITLE_KEY', '<strong>�ؼ���:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>����:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>���:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>���:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>��ֵ:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', '�����ļ���ѯ:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', '��');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '���������ļ� ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', '������Ҫ�ļ� - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /schinese.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '���е�ǰѡ�������ļ� - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', '������Ҫ�����ļ� - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /schinese.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '���е�ǰѡ�������ļ� - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '���е�ǰѡ�������ļ� - Catalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','û�п��Ա༭��');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' ��, ����');

  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>�Ż����ݿ�</strong>������ɾ����¼��<br />��ÿ�ܻ�ÿ��ִ��һ�Ρ�<br />');
  define('SUCCESS_DB_OPTIMIZE', '���ݿ��Ż� - �������ݱ�: ');

?>