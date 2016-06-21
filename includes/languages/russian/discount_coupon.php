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

define('NAVBAR_TITLE', 'Дисконтная карточка');
define('HEADING_TITLE', 'Дисконтная карточка');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> нерпавильный код карточки,пропробуйте ещё раз');

define('HEADING_COUPON_HELP', 'Помощь');
define('TEXT_CLOSE_WINDOW', 'Закрыть [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">Код карточки который вы ввели ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Дисконтное предложение:</span> %s</p><p class="smallText">Для более подробной информации смотрите детали предложения</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Карточка действительна с %s и до %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Ограничения дисконтной карточки</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Ограничения в категориях:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Ограничения в товарах:</p>');
define('TEXT_ALLOW', 'Разрешено');
define('TEXT_DENY', 'Запрещено');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Данная карточка разрешена во всех категориях</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Данная карточка разрешена для всех товаров</p>');
define('TEXT_CAT_ALLOWED', ' (разрешено для данной категории)');
define('TEXT_CAT_DENIED', ' (запрещено для данной категории)');
define('TEXT_PROD_ALLOWED', ' (разрешено для данного товара)');
define('TEXT_PROD_DENIED', ' (не разрешено для данного товара)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Дисконтная карточка не может быть использована к ' . TEXT_GV_NAMES . '. Одна карточка для одного заказа</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'Поиск дисконтной карточки ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Ваш код: ');
define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Billing Address Restrictions apply.');
?>