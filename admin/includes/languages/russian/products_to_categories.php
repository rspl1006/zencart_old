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
//  $Id: products_to_categories.php 2909 2006-01-29 21:29:35Z ajeh $
//

define('HEADING_TITLE','������ � �������������� ����������');
define('HEADING_TITLE2','��������� � ������');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', '��������� � �������� ������� �������� ��� ������������� ...');

define('TABLE_HEADING_PRODUCTS_ID', 'ID ������');
define('TABLE_HEADING_PRODUCT', '�������� ������');
define('TABLE_HEADING_MODEL', '������');
define('TABLE_HEADING_ACTION', '��������');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', '�������������� ������ �� ������ ���������� � ���������');
define('TEXT_PRODUCTS_ID', '����� ID# ');
define('TEXT_PRODUCTS_NAME', '�����: ');
define('TEXT_PRODUCTS_MODEL', '������: ');
define('TEXT_PRODUCTS_PRICE', '����: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', '�������� ������ ���������');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', '�������� ����� ��� �������������');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', '�������� ������� ��� ������������ ��� ����� � �����������: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;������� ����� ������������� ���������: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'������������� ������ � ���������� ������� ��� �������� ����������� ������ � ���� ��� ����� ���������');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'��� ����������� ��������� ����, ������� ������ ���������� ������� ��������� � ������� ����� ������������ ��� ������ ���/���������'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', '������ ���������� ��������� �������� � ID ������� ��������� �������');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>��������:</strong> �� ������ ���������� ID ������� ��������� ����� ���������� ������������� ���������');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>���������� ��� ������ � ��������� ��� ������������� ������ � ������ ��������� ...</strong>');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '������� ��� ������ � ���������: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '������������ � ���������: ');
define('BUTTON_COPY_CATEGORY_LINKED', '���������� ������ ��� ������������� ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', '��������: ������ ���� �������� � ������ �� �������� ������ ��������� ...');
define('WARNING_COPY_LINKED', '��������: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '������������ ��������� ��� ������������� ������ ��: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '������������ ��������� ��� ������������� ������ �: ');
define('WARNING_NO_CATEGORIES_ID', '��������: ��������� �� ����� �������');
define('SUCCESS_COPY_LINKED', '������� ���������� ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '���������� ��������� ��� ������������� ������ ��: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '���������� ��������� ��� ������������� ������ �: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>��������: ��� ��������� � ������ ��� ������������� �������</strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>������� ��� ������ � ��������� ������� �������� ��������������� � ������ ���������');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '������� ��� ������ � ���������: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '������� ����� ������������ � ���������: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', '������� ������������� ������ ');

define('WARNING_REMOVE_LINKED', '��������: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '������������ ��������� ��� �������� ������������� ������� ��: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '������������ ��������� ��� �������� ������������� ������� �: ');
define('SUCCESS_REMOVE_LINKED', '������� �������� ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', '���������� ��������� ��� �������� ������������� ������� ��: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', '���������� ��������� ��� �������� ������������� ������� �: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>��������: �� ����������� �� ������ ��������� ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>��������: �������� ID ������� ���������</strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ID ������� ���������: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', '��������: ������� ��������� ������������ ��� ����������� ��� ��� ��������� � �������� ����������� ���� �� ������������� ������');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', '��� ������� ������ ��������, �� ������ �������������� � ������� ������������ ������. �������� �������� ID ������� ���������');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' �������� �� ���������: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' �������� � ���������: ');
define('SUCCESS_MASTER_CATEGORIES_ID', '������� ��������� ...');
define('WARNING_MASTER_CATEGORIES_ID', '��������: ������� ��������� �� �����������!');

define('TEXT_PRODUCTS_ID_INVALID', '��������: ������������ ID ������ ��� ����� �� ������');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', '��������: ID ������ �� ����� ��� ��������� ������������� ���� ������������� ������� �� ����� ��������� � ������');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>�������� ��� ������ � ��������� ��������� ��� �� ������������ � ��� ����� ������� ��������� ID');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '�������� ID ������� ��������� ��� ���� ������� � ���������: ');
define('BUTTON_RESET_CATEGORY_MASTER', '�������� ID ������� ���������');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '��������: ������� ������������ ��������� ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', '�������� ���������� ���� ������� � ����� ������� ��������� ID ��� ���������: ');

?>