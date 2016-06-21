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

define('HEADING_COUPON_HELP', 'Помощь - дисконтная карточка');
define('TEXT_CLOSE_WINDOW', 'Закрыть[x]');
define('TEXT_COUPON_HELP_HEADER', 'Поздравляем,вы получили дисконтную карточку');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Название карточки : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Карточка ценностью %s');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />вам необходимо потратить %s для использования данной карточки');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Данная карточка предоставляет бесплатную доставку');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Описание карточки : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Карточка действительна с %s  и до %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Товар/Категория (ограничения)');
define('TEXT_COUPON_HELP_CATEGORIES', 'Категория');
define('TEXT_COUPON_HELP_PRODUCTS', 'Товар');
define('TEXT_ALLOW', 'Разрешено');
define('TEXT_DENY', 'Запрещено');

define('TEXT_ALLOWED', ' (Разрешено)');
define('TEXT_DENIED', ' (Запрещено)');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Дисконтные карточки не могут быть применены к закупке ' . TEXT_GV_NAMES . '.');
define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Billing Address Restrictions apply.');
?>