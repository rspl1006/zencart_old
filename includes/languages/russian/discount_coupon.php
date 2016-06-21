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
// $Id: discount_coupon.php 3253 2006-03-25 17:26:14Z birdbrain $
//

define('NAVBAR_TITLE', '���������� ��������');
define('HEADING_TITLE', '���������� ��������');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> ������������ ��� ��������,����������� ��� ���');

define('HEADING_COUPON_HELP', '������');
define('TEXT_CLOSE_WINDOW', '������� [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">��� �������� ������� �� ����� ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">���������� �����������:</span> %s</p><p class="smallText">��� ����� ��������� ���������� �������� ������ �����������</p>');
define('TEXT_COUPON_HELP_DATE', '<p>�������� ������������� � %s � �� %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">����������� ���������� ��������</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">����������� � ����������:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">����������� � �������:</p>');
define('TEXT_ALLOW', '���������');
define('TEXT_DENY', '���������');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>������ �������� ��������� �� ���� ����������</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>������ �������� ��������� ��� ���� �������</p>');
define('TEXT_CAT_ALLOWED', ' (��������� ��� ������ ���������)');
define('TEXT_CAT_DENIED', ' (��������� ��� ������ ���������)');
define('TEXT_PROD_ALLOWED', ' (��������� ��� ������� ������)');
define('TEXT_PROD_DENIED', ' (�� ��������� ��� ������� ������)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">���������� �������� �� ����� ���� ������������ � ' . TEXT_GV_NAMES . '. ���� �������� ��� ������ ������</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', '����� ���������� �������� ... ');
define('TEXT_DISCOUNT_COUPON_ID', '��� ���: ');
define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Billing Address Restrictions apply.');
?>