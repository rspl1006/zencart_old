<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product_info.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('TEXT_PRODUCT_NOT_FOUND', 'Товар не найден');
define('TEXT_CURRENT_REVIEWS', 'Текущие отзывы:');
define('TEXT_MORE_INFORMATION', 'Для более подробной информации, посетите страницу <a href="%s" target="_blank">товара</a>.');
define('TEXT_DATE_ADDED', 'Данный товар был добавлен %s.');
define('TEXT_DATE_AVAILABLE', 'Данный товар будет в наличии %s.');
define('TEXT_ALSO_PURCHASED_PRODUCTS', 'Клиенты которые купили данный товар также купили ...');
define('TEXT_PRODUCT_OPTIONS', 'Выберите: ');
define('TEXT_PRODUCT_MANUFACTURER', 'Производитель: ');
define('TEXT_PRODUCT_WEIGHT', 'Вес товара: ');
define('TEXT_PRODUCT_QUANTITY', ' Количество в запасе');
define('TEXT_PRODUCT_MODEL', 'Модель: ');



// previous next product
define('PREV_NEXT_PRODUCT', 'Товар ');
define('PREV_NEXT_FROM', ' от ');
define('IMAGE_BUTTON_PREVIOUS','Предидущий');
define('IMAGE_BUTTON_NEXT','Следующий');
define('IMAGE_BUTTON_RETURN_TO_PRODUCT_LIST','Вернутся к списку товаров');

// missing products
//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

define('TEXT_ATTRIBUTES_PRICE_WAS',' [был: ');
define('TEXT_ATTRIBUTE_IS_FREE',' сейчас: Бесплатно]');
define('TEXT_ONETIME_CHARGE_SYMBOL', ' *');
define('TEXT_ONETIME_CHARGE_DESCRIPTION', ' Возможны изменения');
define('TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK','Количество доступных скидок');
define('ATTRIBUTES_QTY_PRICE_SYMBOL', zen_image(DIR_WS_TEMPLATE_ICONS . 'icon_status_green.gif', TEXT_ATTRIBUTES_QTY_PRICE_HELP_LINK, 10, 10) . '&nbsp;');
?>