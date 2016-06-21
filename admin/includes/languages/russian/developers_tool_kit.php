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
//  $Id: developers_tool_kit.php 1105 2005-04-04 22:05:35Z birdbrain $
//
  define('HEADING_TITLE', '��� �������������');
  define('TABLE_CONFIGURATION_TABLE', '����� ��������');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>��������</strong> ���������� ��� ������� ���������� ���� �������');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>������:</strong> �� ������� ���������� � ���������������� ������ ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>������:</strong> �� ��� ������ ������');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>�������� ��� ���������� ���� ������</strong>: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>������ ��������� ��� ������ � �������� �����</strong>');
  define('TEXT_CONFIGURATION_KEY', '���� ��� ��������:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '������� ������ � �������� �������� �� ����������� ����');

  define('TABLE_TITLE_KEY', '<strong>����:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>��������:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>��������:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>������:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>��������:</strong>');

  define('TEXT_LOOKUP_NONE', '������');
  define('TEXT_INFO_SEARCHING', '����� ');
  define('TEXT_INFO_FILES_FOR', ' ������ ... ���: ');
  define('TEXT_INFO_MATCHES_FOUND', '������� �������� ������: ');

  define('TEXT_LANGUAGE_LOOKUPS', '����� � �������� ������:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '��� �������� ����� ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', '��� ������� �������� ����� - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '��� ������� ��������� ����� - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', '��� ������� �������� ����� - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '��� ������� ��������� ����� - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '��� ������� ��������� �����s - Catalog/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>����� �������</strong>');
  define('TEXT_FUNCTION_LOOKUPS', '����� � ������ �������:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', '��� ����� ������� - Catalog/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', '��� ����� ������� - Catalog');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', '��� ����� ������� - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>����� �������</strong>');
  define('TEXT_CLASS_LOOKUPS', '����� � ������ �������:');
  define('TEXT_CLASS_LOOKUP_CURRENT', '��� ����� ������� - Catalog/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', '��� ����� ������� - Catalog');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', '��� ����� ������� - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>����� � ��������</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', '����� � ������ �������:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', '��� ����� �������� - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', '��� ����� �������� - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', '��� ����� �������� - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', '��� ����� �������� - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>����� �� ���� ������</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', '����� �� ���� ������:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', '��� ����� - Catalog/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', '��� ����� - Catalog');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', '��� ����� - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','�������������� ����������');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' ���, ������');
?>