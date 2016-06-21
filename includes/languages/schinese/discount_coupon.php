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
// $Id: discount_coupon.php 4591 2006-09-23 04:25:15Z ajeh $
//

define('NAVBAR_TITLE', '�Ż�ȯ');
define('HEADING_TITLE', '�Ż�ȯ');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span>������Ч���Ż�ȯ���ֺ��롣��������һ�Ρ�');

define('HEADING_COUPON_HELP', '�Ż�ȯ����');
define('TEXT_CLOSE_WINDOW', '�رմ��� [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">������Ż�ȯ���ִ�������');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">�Ż�ȯ����:</span> %s</p><p class="smallText">�������������ơ�ϸ��������档</p>');
define('TEXT_COUPON_HELP_DATE', '<p>���Ż�ȯ��Ч��Ϊ%s��%s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">�Ż�ȯ����</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">��������:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">��Ʒ����:</p>');
define('TEXT_ALLOW', '��Ч');
define('TEXT_DENY', '��Ч');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>���Ż�ȯ�������з��ࡣ</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>���Ż�ȯ����������Ʒ��</p>');
define('TEXT_CAT_ALLOWED', ' (���÷���)');
define('TEXT_CAT_DENIED', ' (�����÷���)');
define('TEXT_PROD_ALLOWED', ' (������Ʒ)');
define('TEXT_PROD_DENIED', ' (��������Ʒ)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">�Ż�ȯ�������ڹ���' . TEXT_GV_NAMES . '��ÿ������ֻ����һ���Ż�ȯ��</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', '�����Ż�ȯ ... ');
define('TEXT_DISCOUNT_COUPON_ID', '���ĺ���: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', '�ʵ���ַ�����ơ�');
?>