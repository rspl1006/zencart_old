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
// $Id: popup_coupon_help.php 4591 2006-09-23 04:25:15Z ajeh $
//

define('HEADING_COUPON_HELP', '优惠券帮助');
define('TEXT_CLOSE_WINDOW', '关闭窗口 [x]');
define('TEXT_COUPON_HELP_HEADER', '恭喜, 您已经兑现了一张优惠券.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />优惠券名称 : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />当您购物时, 该优惠券值优惠%s');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />购物满%s时, 可以使用该优惠券');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />该优惠券可以免费购物');
define('TEXT_COUPON_HELP_DESC', '<br /><br />优惠券简介 : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />该优惠券有效期在%s和%s之间');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />商品/分类限制');
define('TEXT_COUPON_HELP_CATEGORIES', '分类');
define('TEXT_COUPON_HELP_PRODUCTS', '商品');
define('TEXT_ALLOW', '允许');
define('TEXT_DENY', '禁止');

define('TEXT_ALLOWED', ' (允许)');
define('TEXT_DENIED', ' (禁止)');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','优惠券不能用在购买 ' . TEXT_GV_NAMES . '.');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', '帐单地址有限制。');
?>