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
//  $Id: manufacturers.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Производители');

define('TABLE_HEADING_MANUFACTURERS', 'Производители');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_HEADING_NEW_MANUFACTURER', 'Новый производитель');
define('TEXT_HEADING_EDIT_MANUFACTURER', 'Редактировать производителя');
define('TEXT_HEADING_DELETE_MANUFACTURER', 'Удалить производителя');

define('TEXT_MANUFACTURERS', 'Производители:');
define('TEXT_DATE_ADDED', 'Дата добавления:');
define('TEXT_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_PRODUCTS', 'Товары:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Загрузить в папку:');
define('TEXT_IMAGE_NONEXISTENT', 'Изображение не создано');
define('TEXT_MANUFACTURERS_IMAGE_MANUAL', '<strong>Or, select an existing image file from server, filename:</strong>');

define('TEXT_NEW_INTRO', 'Введите необходимую информацию о новом производителе');
define('TEXT_EDIT_INTRO', 'Сделайте необходимые изменения');

define('TEXT_MANUFACTURERS_NAME', 'Название производителя:');
define('TEXT_MANUFACTURERS_IMAGE', 'Изображение производителя:');
define('TEXT_MANUFACTURERS_URL', 'URL производителя:');

define('TEXT_DELETE_INTRO', 'Вы точно хотите удалить данного производителя?');
define('TEXT_DELETE_IMAGE', 'Удалить изображение производителя?');
define('TEXT_DELETE_PRODUCTS', 'Удалить товары данного произвродителя? (включая отзывы о товарах, скидки, ожидаемые товары)');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Внимание:</b> %s товаров все ещё относятся к данному производителю!');

define('ERROR_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Ошибка записи в папку,установите правильные права на: %s');
define('ERROR_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Папка не созданаt: %s');
?>