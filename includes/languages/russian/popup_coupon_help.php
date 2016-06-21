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
// $Id: popup_coupon_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_COUPON_HELP', '������ - ���������� ��������');
define('TEXT_CLOSE_WINDOW', '�������[x]');
define('TEXT_COUPON_HELP_HEADER', '�����������,�� �������� ���������� ��������');
define('TEXT_COUPON_HELP_NAME', '<br /><br />�������� �������� : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />�������� ��������� %s');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />��� ���������� ��������� %s ��� ������������� ������ ��������');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />������ �������� ������������� ���������� ��������');
define('TEXT_COUPON_HELP_DESC', '<br /><br />�������� �������� : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />�������� ������������� � %s  � �� %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />�����/��������� (�����������)');
define('TEXT_COUPON_HELP_CATEGORIES', '���������');
define('TEXT_COUPON_HELP_PRODUCTS', '�����');
define('TEXT_ALLOW', '���������');
define('TEXT_DENY', '���������');

define('TEXT_ALLOWED', ' (���������)');
define('TEXT_DENIED', ' (���������)');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','���������� �������� �� ����� ���� ��������� � ������� ' . TEXT_GV_NAMES . '.');
define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Billing Address Restrictions apply.');
?>