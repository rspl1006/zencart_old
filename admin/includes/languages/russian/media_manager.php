<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2006 The zen-cart developers                           |
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
//  $Id: media_manager.php 3092 2006-03-02 19:41:04Z drbyte $
//

define('HEADING_TITLE_MEDIA_MANAGER', 'Медиа менеджер');

define('TABLE_HEADING_MEDIA', 'Название коллекции');
define('TABLE_HEADING_ACTION', 'Действие');
define('TEXT_HEADING_NEW_MEDIA_COLLECTION', 'Новая медиа коллекция');
define('TEXT_NEW_INTRO', 'Введите информацию о новой медиа коллекции ниже');
define('TEXT_MEDIA_COLLECTION_NAME', 'Название медиа коллекции');
define('TEXT_MEDIA_EDIT_INSTRUCTIONS', 'Используйте секцию ниже для изменеия названия медиа коллекции<br /><br />
                                        Используйте секцию ниже для добавления или удаления медиа файлов в медиа колекции.');
define('TEXT_DATE_ADDED', 'Дата добавления:');
define('TEXT_LAST_MODIFIED', 'Дата изменения:');
define('TEXT_PRODUCTS', 'Прилинкованные товары:');
define('TEXT_CLIPS', 'Прилинкованные медиа файлы:');
define('TEXT_NO_PRODUCTS', 'Нет товаров в данной категории');
define('TEXT_HEADING_EDIT_MEDIA_COLLECTION', 'Редактировать медиа коллекцию');
define('TEXT_EDIT_INTRO', 'Введите информацию о новой медиа коллекции ниже');
define('TEXT_HEADING_DELETE_MEDIA_COLLECTION', 'Удалить медиа коллекцию');
define('TEXT_DELETE_INTRO', 'Вы хотите удалить данную медиа коллекцию?');
  define('TEXT_DISPLAY_NUMBER_OF_MEDIA', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> медиа коллекций)');
define('TEXT_ADD_MEDIA_CLIP', 'Добавить медиа файл');
define('TEXT_MEDIA_CLIP_DIR', 'Загрузить в медиа папка');
define('TEXT_MEDIA_CLIP_TYPE', 'Тип медиа файла');
define('TEXT_HEADING_ASSIGN_MEDIA_COLLECTION', 'Пометить медиа коллекцию как товар');
define('TEXT_PRODUCTS_INTRO', 'Вы можете пометить и снять помеченную медиа коллекцию из списка товаров');
define('IMAGE_PRODUCTS', 'Пометить как товар');
define('TEXT_DELETE_PRODUCTS', 'Удалить медиа коллекцию и все что к ней присоединено?');
define('TEXT_DELETE_WARNING_PRODUCTS', '<strong>Внимание:</strong> %s пунктов все ещё находятся в медиа коллекции!');
define('TEXT_WARNING_FOLDER_UNWRITABLE', 'NOTE: media folder ' . DIR_FS_CATALOG_MEDIA . ' is not writable. Cannot upload files.');

define('ERROR_UNKNOWN_DATA', 'Ошибка: Незивестный формат ... прерываю операцию');
define('TEXT_ADD','Добавить');

?>