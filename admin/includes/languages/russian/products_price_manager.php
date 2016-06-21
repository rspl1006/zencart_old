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
//  $Id: products_price_manager.php 543 2004-11-13 19:19:29Z wilt $
//

define('HEADING_TITLE', '���� �� ������');
define('HEADING_TITLE_PRODUCT_SELECT','�������� ��������� � �������� ��� ����������� ���� �� ...');

define('TABLE_HEADING_PRODUCTS', '������');
define('TABLE_HEADING_PRODUCTS_MODEL','������');
define('TABLE_HEADING_PRODUCTS_PRICE', '����/������/�������');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','�������');
define('TABLE_HEADING_AVAILABLE_DATE', '��������');
define('TABLE_HEADING_EXPIRES_DATE','����������');
define('TABLE_HEADING_STATUS', '������');
define('TABLE_HEADING_ACTION', '��������');

define('TEXT_PRODUCT_INFO', '���������� � ������:');
define('TEXT_PRODUCTS_PRICE_INFO', '���������� � ���� ������:');
define('TEXT_PRODUCTS_MODEL','������:');
define('TEXT_PRICE', '����');
define('TEXT_PRODUCT_AVAILABLE_DATE', '���� �������:');
define('TEXT_PRODUCTS_STATUS', '������ ������:');
define('TEXT_PRODUCT_AVAILABLE', '� �������');
define('TEXT_PRODUCT_NOT_AVAILABLE', '��� � �������');

define('TEXT_PRODUCT_INFO_NONE', '�������� ����� ���� ...');
  define('TEXT_PRODUCT_IS_FREE','���������� �����:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*����� ������� ��� ����������');
  define('TEXT_PRODUCT_IS_CALL','������ ����:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*����� ������� ��� ������� ����');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','���� �� ����������:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','��');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','���');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*���������� ���� ������� ���������� ������� ������ ���������� ���� ����');
  define('TEXT_PRODUCTS_MIXED','������� ����������/�������:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', '������� ���������� ����������� � ��������� ����������');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','����������� ����������:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','���������� ������:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','������������ ����������:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= �������������<br />1= �� ���������� ���������� � ������������ ��������');

define('TEXT_FEATURED_PRODUCT_INFO', '���������� � ��������� �������:');
define('TEXT_FEATURED_PRODUCT', '�����:');
define('TEXT_FEATURED_EXPIRES_DATE', '���� ���������:');
define('TEXT_FEATURED_AVAILABLE_DATE', '���� �������:');
define('TEXT_FEATURED_PRODUCTS_STATUS', '������ ���������� �������:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', '�������');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', '�� �������');
define('TEXT_FEATURED_DISABLED', '<strong>��������: ���������� � ��������� ������� ���������, ������� ��� �� �������</strong>');

define('TEXT_SPECIALS_PRODUCT', '�����:');
define('TEXT_SPECIALS_SPECIAL_PRICE', '����������� ����e:');
define('TEXT_SPECIALS_EXPIRES_DATE', '���� ���������:');
define('TEXT_SPECIALS_AVAILABLE_DATE', '���� �������:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>��������:</b><ul><li>�� ������ ������ ������� ��� ���������� � ����������� ����, ��������: <b>20%</b></li><li>���� �� ����� ����� ����, ����������� �������� ������ ���� \'.\' (���������� �����), ��������: <b>49.99</b></li><li>�������� ���� ��������� ������,��� ��������������� ��������</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', '���������� � ����������� ����:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', '������ ������:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', '�������');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', '�� �������');
define('TEXT_SPECIALS_NO_GIFTS','��� ������ �� ��');
define('TEXT_SPECIAL_DISABLED', '<strong>��������: ���������� � ����������� ������ ���������, ������� ��� �� �������</strong>');

define('TEXT_INFO_DATE_ADDED', '���� ����������:');
define('TEXT_INFO_LAST_MODIFIED', '��������� ���������:');
define('TEXT_INFO_NEW_PRICE', '����� ����:');
define('TEXT_INFO_ORIGINAL_PRICE', '������������ ����:');
define('TEXT_INFO_PERCENTAGE', '�������:');
define('TEXT_INFO_AVAILABLE_DATE', '��������:');
define('TEXT_INFO_EXPIRES_DATE', '�������������:');
define('TEXT_INFO_STATUS_CHANGE', '��������� �������:');
define('TEXT_IMAGE_NONEXISTENT', '����������� �� �������');

define('TEXT_INFO_HEADING_DELETE_FEATURED', '������� ���������� �����');
define('TEXT_INFO_DELETE_INTRO', '�� ����� ������ ������� ���������� �����?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>���������� ��������� ��������� ����� ������� �������� ��� ����������</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', '���� �� ���������');
  define('TEXT_PRODUCTS_PRICE', '���� �� �����: ');
  define('TEXT_SPECIAL_PRICE', '����������� ����: ');
  define('TEXT_SALE_PRICE', '���� �������: ');
  define('TEXT_FREE', '���������');
  define('TEXT_CALL_FOR_PRICE', '������ ����');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', '�������� ' . DISCOUNT_QTY_ADD . ' ������� �� ����������:');
define('TEXT_BLANKS_INFO','��� �������� � ����������� 0 ����� ������� ����� ����������');
define('TEXT_INFO_NO_DISCOUNTS', '�� ��������� ������� �� ����������');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', '������� ��������');
define('TEXT_PRODUCTS_DISCOUNT','�������');
define('TEXT_PRODUCTS_DISCOUNT_QTY','����������� ����������');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','�������� ��������');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','���');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','���������� ����:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','����������� ����:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','���������<br />����: &nbsp; ���������� �������:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','�����������<br />����: &nbsp; ���������� �������:');

define('TEXT_EACH','������');
define('TEXT_EXTENDED','�����');

define('TEXT_DISCOUNT_TYPE_INFO', '���������� � �������� �� ������');
define('TEXT_DISCOUNT_TYPE','��� ��������:');
define('TEXT_DISCOUNT_TYPE_FROM', '������� ���� ��:');

define('DISCOUNT_TYPE_DROPDOWN_0','������');
define('DISCOUNT_TYPE_DROPDOWN_1','�������');
define('DISCOUNT_TYPE_DROPDOWN_2','���������� ����');
define('DISCOUNT_TYPE_DROPDOWN_3','��������� ����������');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','����');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','������');

define('TEXT_UPDATE_COMMIT','�������� � �������� ��� ��������� �� �������� �����������');

define('TEXT_PRODUCTS_TAX_CLASS', '����� �������:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>��������:</strong> ������� ��������� ������� ID# %s �� ��������� � ������� ���������� ID# %s � ����� �� �����������!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' ������� ��������� ID# %s ��������� � ������� ���������� ID# %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', '�������� ������� ��������� ID# %s ��� ���������� � ������� ���������� ID# %s');

define('PRODUCT_WARNING_UPDATE', '�������� ����������� ���������');
define('PRODUCT_UPDATE_SUCCESS', '�������� ����������!');
define('PRODUCT_WARNING_UPDATE_CANCEL', '��������� ���� �������� � �� ��������� ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>������� ��� �������������� ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', '������ ������������ ... ������� ��������� ���� ... ������ ������������');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>�������������� ���������� � ������</strong>');
?>