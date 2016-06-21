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
//  $Id: featured.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Показанные товары');

define('TABLE_HEADING_PRODUCTS', 'Товары');
define('TABLE_HEADING_PRODUCTS_MODEL','Модель');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Цена/Скидка/Продажа');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Процент');
define('TABLE_HEADING_AVAILABLE_DATE', 'Будет в наличии');
define('TABLE_HEADING_EXPIRES_DATE','Когда не будет в наличии');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_FEATURED_PRODUCT', 'Товар:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Дата когда не будет в наличии:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Дата наличия:');

define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_NEW_PRICE', 'Новая цена:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Оригинальная цена:');
define('TEXT_INFO_PERCENTAGE', 'Процент:');
define('TEXT_INFO_AVAILABLE_DATE', 'Доступно с:');
define('TEXT_INFO_EXPIRES_DATE', 'Окончание с:');
define('TEXT_INFO_STATUS_CHANGE', 'Изменить статус:');
define('TEXT_IMAGE_NONEXISTENT', 'Изображение не создано');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Удалить показ');
define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить показанные товары?');
define('SUCCESS_FEATURED_PRE_ADD', 'Successful: Pre-Add of Featured ... please update the dates ...');
define('WARNING_FEATURED_PRE_ADD_EMPTY', 'Warning: No Product ID specified ... nothing was added ...');
define('WARNING_FEATURED_PRE_ADD_DUPLICATE', 'Warning: Product ID already on Special ... nothing was added ...');
define('WARNING_FEATURED_PRE_ADD_BAD_PRODUCTS_ID', 'Warning: Product ID is invalid ... nothing was added ...');
define('TEXT_INFO_HEADING_PRE_ADD_FEATURED', 'Manually add new Featured by Product ID');
define('TEXT_INFO_PRE_ADD_INTRO', 'On large databases, you may Manually Add a Featured by the Product ID<br /><br />This is best used when the page takes too long to render and trying to select a Product from the dropdown becomes difficult due to too many Products from which to choose.');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Please enter the Product ID to be Pre-Added: ');
define('TEXT_INFO_MANUAL', 'Product ID to be Manually Added as a Featured');
?>