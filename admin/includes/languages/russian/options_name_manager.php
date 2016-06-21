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
//  $Id: options_name_manager.php 2181 2005-10-20 18:37:16Z ajeh $
//

define('HEADING_TITLE_OPT', 'Опции товаров');
define('HEADING_TITLE_VAL', 'Опциональные значения');
define('HEADING_TITLE_ATRIB', 'Аттрибуты товаров');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Название товара');
define('TABLE_HEADING_OPT_NAME', 'Опциональное название');
define('TABLE_HEADING_OPT_VALUE', 'Опциональное значение');
define('TABLE_HEADING_OPT_PRICE', 'Цена');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Префикс');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_DOWNLOAD', 'Загружаемые товары:');
define('TABLE_TEXT_FILENAME', 'Имя файла:');
define('TABLE_TEXT_MAX_DAYS', 'Время действия ссылки(дни):');
define('TABLE_TEXT_MAX_COUNT', 'Максимальное количество загрузок:');

define('TEXT_WARNING_OF_DELETE', 'В данной опции есть товары и значения которые прилинкованы к ней - будьте осторожны при удалении');
define('TEXT_OK_TO_DELETE', 'К данной опции нет прилинкованных товаров - вы можете удалить её.<br />Внимание: Все опциональные значения для данного опционального названия будут удалены');
define('TEXT_OPTION_ID', 'ID опции');
define('TEXT_OPTION_NAME', 'Опциональное название');
define('TABLE_HEADING_OPT_DISCOUNTED','Обесцененный');

define('ATTRIBUTE_WARNING_DUPLICATE','Дублировать аттрибут - аттрибут не был добавлен'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Дубликат аттрибута создан - аттрибут не был изменен'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Опция аттрибута и опциональное значение не совпали - аттрибут не был добавлен'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Опция аттрибута и опциональное значение не совпали - аттрибут не ыбл изменен'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Возможный дубликат опционального названия добавлен'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Возможный дубликат опционального значения добавлен'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','Редактирование'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','Удаление'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','Добавление новых аттрибутов'); // title
define('TEXT_DOWNLOADS_DISABLED','Внимание: Загрузки отключены');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Дни:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Максимум:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Порядок сортировки');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Сортировка по умолчанию');
  define('TEXT_SORT',' Сортировка: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Префикс');
  define('TABLE_HEADING_OPT_WEIGHT','Вес');
  define('TABLE_HEADING_OPT_SORT_ORDER','Порядок сортировки');
  define('TABLE_HEADING_OPT_DEFAULT','Умолчание');

  define('TABLE_HEADING_YES','Да');
  define('TABLE_HEADING_NO','Нет');

  define('TABLE_HEADING_OPT_TYPE', 'Опциональный тип'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Размер');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Максимум');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Строки');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Комментарии');

  define('TEXT_OPTION_VALUE_COMMENTS','Комментарии: ');
  define('TEXT_OPTION_VALUE_ROWS', 'Строки: ');
  define('TEXT_OPTION_VALUE_SIZE','Показывать размер: ');
  define('TEXT_OPTION_VALUE_MAX','Максимальная длина: ');

  define('TEXT_ATTRIBUTES_IMAGE','Аттрибуты изображения:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Папка с изображениями:');

  define('TEXT_ATTRIBUTES_FLAGS','Флаги<br />аттрибута:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Используется только<br />отображения целей:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Аттрибут бесплатен<br />когда товар бесплатный:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Аттрибут по умолчанию<br />помечен и выбран:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Применить те же самые дисконты<br />используемые товаром:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Включать в основную цену<br />когда оценивается по аттрибуту');

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Внимание: Отредактируйте опциональное название товара для дополнительных настроек</strong>');

// updates
define('ERROR_PRODUCTS_OPTIONS_VALUES', 'Внимание: Товар не найден ... Ничего не обновлено');

define('TEXT_SELECT_PRODUCT', ' Выберите товар');
define('TEXT_SELECT_CATEGORY', ' Выберите категорию');
define('TEXT_SELECT_OPTION', 'Выберите опциональное название');

// add
define('TEXT_OPTION_VALUE_ADD_ALL', '<br /><strong>Добавить все опциональные значения ко всем товарам для опционального названия</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_ALL', 'Обновить все существующие товары у которых есть хотя бы одно опциональное значение и добавить все опциональные значения в опциональное название');
define('SUCCESS_PRODUCTS_OPTIONS_VALUES', 'Успешное обновление опций ');

define('TEXT_OPTION_VALUE_ADD_PRODUCT', '<br /><strong>Добавить все опциональные значения одному товару для опционального названия</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_PRODUCT', 'Обновить один товар у которого есть хотя бы одно опциональное значение и добавить все опциональные значения в опциональное название');

define('TEXT_OPTION_VALUE_ADD_CATEGORY', '<br /><strong>Добавить все опциональные значения в одну категорию товаров для опционального названия</strong>');
define('TEXT_INFO_OPTION_VALUE_ADD_CATEGORY', 'Обновить одну категорию товаров, когда у товара есть хотя бы одно опциональное значение и добавить все опциональные значения в опциональное название');

define('TEXT_COMMENT_OPTION_VALUE_ADD_ALL', '<strong>Внимание:</strong> Порядок сортировки будет установлен по умолчанию для опциональных значений товаров');

// delete
define('TEXT_OPTION_VALUE_DELETE_ALL', '<br /><strong>Удалить все опциональные значения всех товаров для опционального названия</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Обновить все существующие товары у которых есть хотя бы одно опциональное значение и удалить все опциональные значения в опциональном названии');

define('TEXT_OPTION_VALUE_DELETE_PRODUCT', '<br /><strong>Удалить все опциональные значения одного товара для опционального названия</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_PRODUCT', 'Обновить один товар у которого есть хотя бы одно опциональное значение и удалить все опциональные значения в опциональном названии');

define('TEXT_OPTION_VALUE_DELETE_CATEGORY', '<br /><strong>Удалить все опциональные значения одной категории товаров для опционального названия</strong>');
define('TEXT_INFO_OPTION_VALUE_DELETE_CATEGORY', 'Обновить одну категорию товаров, когда у товара есть хотя бы одно опциональное значение и удалить все опциональные значения для опционального названия');

define('TEXT_COMMENT_OPTION_VALUE_DELETE_ALL', '<strong>Внимание:</strong> Все опциональные названия опциональных значений будут удалены для выбранных товаров. Это не удалит настройки опциональных значений');

define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Копировать все опциональные значения в другое опциональное название</strong>');
define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Все опциональные значения будут скопированы от одного опционального названия к другому опциональному названию');
define('TEXT_SELECT_OPTION_FROM', 'Копировать от опционального названия: ');
define('TEXT_SELECT_OPTION_TO', 'Копировать все опциональные значения опциональному значению: ');
define('SUCCESS_OPTION_VALUES_COPIED', 'Успешно скопировано! ');
define('ERROR_OPTION_VALUES_COPIED', 'Ошибка - Нельзя копировать опциональные значения в тоже самое опциональное название! ');
define('ERROR_OPTION_VALUES_NONE', 'Ошибка - В опциональном названии нет значений для копирования! ');
define('TEXT_WARNING_BACKUP', 'Внимание: Всегда делайте резервную копию вашей базы данных перед глобальными изменениями');

define('TEXT_OPTION_ATTRIBUTE_IMAGES_PER_ROW', 'Изображения аттрибутов на строку: ');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE', 'Стиль аттрибутов: ');
define('TEXT_OPTION_ATTIBUTE_MAX_LENGTH', '<strong>Внимание: Строки, отображение размера и максимальная длина только для текстовых аттрибутов:</strong><br />');
define('TEXT_OPTION_IMAGE_STYLE', '<strong>Стили изображения:</strong>');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_0', '0= изображение под опциональным названием');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_1', '1= Элемент, изображение и опциональное значение');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_2', '2= Элемент, изображение и опциональное название ниже');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_3', '3= Опциональное название под элементом и изображением');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_4', '4= Элемент под изображением и опциональным названием');
define('TEXT_OPTION_ATTRIBUTE_IMAGES_STYLE_5', '5= Элемент над изображением и опциональным названием');
?>