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
// $Id: advanced_search_result.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE_1', 'Расширенный поиск');
define('NAVBAR_TITLE_2', 'Результаты поиска');

//define('HEADING_TITLE_1', 'Advanced Search');
define('HEADING_TITLE', 'Расширенный поиск');

define('HEADING_SEARCH_CRITERIA', 'Критерии поиска');

define('TEXT_SEARCH_IN_DESCRIPTION', 'Искать в описании товаров');
define('ENTRY_CATEGORIES', 'Категории:');
define('ENTRY_INCLUDE_SUBCATEGORIES', 'Включая подкатегории');
define('ENTRY_MANUFACTURERS', 'Производители:');
define('ENTRY_PRICE_FROM', 'Цена от:');
define('ENTRY_PRICE_TO', 'Цена до:');
define('ENTRY_DATE_FROM', 'Дата от:');
define('ENTRY_DATE_TO', 'Дата до:');

define('TEXT_SEARCH_HELP_LINK', 'Помощь [?]');

define('TEXT_ALL_CATEGORIES', 'Все категории');
define('TEXT_ALL_MANUFACTURERS', 'Все производители');

define('HEADING_SEARCH_HELP', 'Помощь в поиске');
define('TEXT_SEARCH_HELP', 'Ключевые слова могут разделятся операторами "и", "или" для лучшего результата поиска").');
define('TEXT_CLOSE_WINDOW', 'Закрыть [x]');

define('TABLE_HEADING_IMAGE', '');
define('TABLE_HEADING_MODEL', 'Модель');
define('TABLE_HEADING_PRODUCTS', 'Название товара');
define('TABLE_HEADING_MANUFACTURER', 'Производитель');
define('TABLE_HEADING_QUANTITY', 'Количество');
define('TABLE_HEADING_PRICE', 'Цена');
define('TABLE_HEADING_WEIGHT', 'Вес');
define('TABLE_HEADING_BUY_NOW', 'Купить сейчас');

define('TEXT_NO_PRODUCTS', 'Нет товаров которые бы отвечали вашему запросу');

define('ERROR_AT_LEAST_ONE_INPUT', 'Как минимум одно поле должно быть заполнено');
define('ERROR_INVALID_FROM_DATE', 'Неправильная дата');
define('ERROR_INVALID_TO_DATE', 'Неправильная дата');
define('ERROR_TO_DATE_LESS_THAN_FROM_DATE', 'Неправильная дата');
define('ERROR_PRICE_FROM_MUST_BE_NUM', 'Цена может содержать только цифры');
define('ERROR_PRICE_TO_MUST_BE_NUM', 'Цена может содержать только цифры');
define('ERROR_PRICE_TO_LESS_THAN_PRICE_FROM', 'Неправильная цена');
define('ERROR_INVALID_KEYWORDS', 'Неправильное ключевое слово');
?>