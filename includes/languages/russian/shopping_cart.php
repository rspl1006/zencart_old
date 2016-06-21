<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shopping_cart.php 3183 2006-03-14 07:58:59Z birdbrain $
 */

define('NAVBAR_TITLE', 'Корзина');
define('HEADING_TITLE', 'Содержимое вашей корзины');
define('HEADING_TITLE_EMPTY', 'Ваша корзина');
define('TEXT_INFORMATION', '');
define('TABLE_HEADING_REMOVE', 'Удалить');
define('TABLE_HEADING_QUANTITY', 'Количество');
define('TABLE_HEADING_MODEL', 'Модель');
define('TABLE_HEADING_PRICE','Единица');
define('TEXT_CART_EMPTY', 'Ваша корзина пуста');

define('SUB_TITLE_TOTAL', 'Всего:');

define('SUB_TITLE_SUB_TOTAL', 'Sub-Total:'); 

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Товаров которые помеченные как ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' нет в наличии.<br />Измените количество в вашем заказе (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Спасибо');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Товаров которые помеченные как ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' нет в наличии');

define('TEXT_TOTAL_ITEMS', 'Всего пунктов: ');
define('TEXT_TOTAL_WEIGHT', '&nbsp;&nbsp;Вес: ');
define('TEXT_TOTAL_AMOUNT', '&nbsp;&nbsp;Количество: ');

define('TEXT_VISITORS_CART', '<a href="javascript:session_win();">[Помощь (?)]</a>');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
?>