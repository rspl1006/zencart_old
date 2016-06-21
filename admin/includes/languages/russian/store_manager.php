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
//  $Id: store_manager.php 2634 2005-12-20 06:56:04Z drbyte $
//
//
  define('HEADING_TITLE', '���������� ���������');
  define('TABLE_CONFIGURATION_TABLE', '����� ��������');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>��������</strong> ���������� ������� ���������� ����������');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>��������</strong> ���������� ��� ������� ���������� ��� �� ������');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>��������</strong> ����� ���������� ������ � 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>��������</strong> ����� ��������� ������� � 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>��������</strong> ����� ���� ������� ��������� f��� ������������� �������');
  define('SUCCESS_UPDATE_COUNTER', '<strong>��������</strong> ���������� �������� �: ');
  define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>��������</strong> ���������� ���� ���������� ������');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>������:</strong> �� ������� ���������� ���������������� ������ ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>������:</strong> ������ �� ���� ������� ��� �������');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>�������� �������</strong><br />� ������ ��������: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>�������� ���������� ���� ���� �������</strong>: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>�������� ��� ��������� �������</strong>');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>�������� ��� ������ �� ������</strong>');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>�������� ��� ������ ������� ��������� ID</strong>');
  define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>�������� ��� �������� ������');

  define('TEXT_ORDERS_ID_UPDATE', '<strong>�������� ������� ID ������</strong>');
  define('TEXT_INFO_ORDERS_ID_UPDATE', '');
  define('TEXT_OLD_ORDERS_ID', '������ ID ������');
  define('TEXT_NEW_ORDERS_ID', '����� ID ������');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>������ �������� ��� ������ � �������� ������</strong>');
  define('TEXT_CONFIGURATION_KEY', '���� ��� ��������:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>������ � ������� �������� ������</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', '�� ����� �����:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '');

  define('TABLE_TITLE_KEY', '<strong>����:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>��������:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>��������:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>������:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>��������:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', '����� � �������� ������:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', '������');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '��� �������� ����� ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', '��� ������� �������� ����� - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '��� ������� ��������� �������� ����� - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', '��� ������� �������� ����� - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '��� ������� ��������� �������� ����� - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '��� ������� ��������� �������� ����� - Catalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','�������������� ����������');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' ��� ��������');
  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimize Database</strong> to remove wasted space from deleted records.<br />May be optionally run monthly or weekly on a busy database.<br />(Best to run during non-busy times.)');
  define('SUCCESS_DB_OPTIMIZE', 'Database Optimization - Tables Processed: ');
?>