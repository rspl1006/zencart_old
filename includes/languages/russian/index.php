<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('TEXT_MAIN','Данный текст отображается когда не выбран ни один шаблон. Данный файл находится и называется: <strong>/includes/languages/english/index.php</strong>');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Добро пожаловать <span class="greetUser">Гость!</span> Хотите ли вы <a href="%s">войти в систему</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Добро пожаловать в наш магазин');
}

define('TEXT_GREETING_PERSONAL', 'Здравствуйте <span class="greetUser">%s</span>! Хотите ли вы посмотреть наши <a href="%s">новые предложения</a>?');

define('TEXT_INFORMATION', 'Ваша копия главной страницы здесь');

//moved to english
//define('TABLE_HEADING_FEATURED_PRODUCTS','Featured Products');

//define('TABLE_HEADING_NEW_PRODUCTS', 'New Products For %s');
//define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Upcoming Products');
//define('TABLE_HEADING_DATE_EXPECTED', 'Date Expected');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // This section deals with product-listing page contents
  define('HEADING_TITLE', 'Доступные товары');
  define('TABLE_HEADING_IMAGE', 'Изображение товара');
  define('TABLE_HEADING_MODEL', 'Модель');
  define('TABLE_HEADING_PRODUCTS', 'Название товара');
  define('TABLE_HEADING_MANUFACTURER', 'Производитель');
  define('TABLE_HEADING_QUANTITY', 'Количество');
  define('TABLE_HEADING_PRICE', 'Цена');
  define('TABLE_HEADING_WEIGHT', 'Вес');
  define('TABLE_HEADING_BUY_NOW', 'Купить сейчас');
  define('TEXT_NO_PRODUCTS', 'Нет товаров в данной категории');
  define('TEXT_NO_PRODUCTS2', 'Нет товаров от данного производителя');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Количество товаров: ');
  define('TEXT_SHOW', 'Результаты фильтрации по:');
  define('TEXT_BUY', 'Купить 1 \'');
  define('TEXT_NOW', '\' сейчас');
  define('TEXT_ALL_CATEGORIES', 'Все категории');
  define('TEXT_ALL_MANUFACTURERS', 'Все производители');
} elseif ($category_depth == 'top') {
  // This section deals with the "home" page at the top level with no options/products selected
  /*Replace this text with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Добро пожаловать на сайт Witech где можно приобрести диагностические инструменты.');
} elseif ($category_depth == 'nested') {
  // This section deals with displaying a subcategory
  /*Replace this line with the headline you would like for your shop. For example: 'Welcome to My SHOP!'*/
  define('HEADING_TITLE', 'Добро пожаловать на сайт Witech где можно приобрести диагностические инструменты.');
}
?>