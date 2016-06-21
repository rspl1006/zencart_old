<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
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
//  $Id: product_types.php 1122 2005-04-05 04:37:58Z drbyte $
//

define('HEADING_TITLE', 'Типы товара');
define('HEADING_TITLE_LAYOUT', 'Типы товара :: ');

define('TABLE_HEADING_PRODUCT_TYPES', 'Типы товара');
define('TABLE_HEADING_PRODUCT_TYPES_ALLOW_ADD_TO_CART', 'Добавить<br />в корзину');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_CONFIGURATION_TITLE', 'Заголовок');
define('TABLE_HEADING_CONFIGURATION_VALUE', 'Значение');

define('TEXT_HEADING_NEW_PRODUCT_TYPE', 'Новый тип товара');
define('TEXT_HEADING_EDIT_PRODUCT_TYPE', 'Редактировать тип товара');
define('TEXT_HEADING_DELETE_PRODUCT_TYPE', 'Удалить тип товара');

define('TEXT_PRODUCT_TYPES', 'Типы товара:');
define('TEXT_PRODUCT_TYPES_HANDLER', 'Страница управления:');
define('TEXT_PRODUCT_TYPES_ALLOW_ADD_CART', 'Данный товар может быть добавлен в корзину:');
define('TEXT_DATE_ADDED', 'Дата добавления:');
define('TEXT_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_PRODUCTS', 'Товары:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Загрузить в папку:');
define('TEXT_IMAGE_NONEXISTENT', 'Изображение не создано');
define('TEXT_MASTER_TYPE', 'Данный тип товара нужно счесть подтипом ');

define('TEXT_NEW_INTRO', 'Введите информацию о новом производителе');
define('TEXT_EDIT_INTRO', 'Сделайте необходимые изменения');

define('TEXT_PRODUCT_TYPES_NAME', 'Название типа товара:');
define('TEXT_PRODUCT_TYPES_IMAGE', 'Изображение типа товара по умолчанию:');
define('TEXT_PRODUCT_TYPES_URL', 'URL производителя:');

define('TEXT_DELETE_INTRO', 'Вы точно хотите удалить данный тип товара?');
define('TEXT_DELETE_IMAGE', 'Удалить изображение типа товара?');
define('TEXT_DELETE_PRODUCTS', 'Удалить товар из типа товара? (включая отзывы,скидки, ожидаемые товары)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Внимание:</b> %s товары все ещё находятся в данном типе товаров!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Папка закрыта на запись,установите правильные права на: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Папка не создана: %s');

define('IMAGE_LAYOUT', 'Настройки изображения');
?>