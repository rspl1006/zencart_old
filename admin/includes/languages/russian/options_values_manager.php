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
//  $Id: options_values_manager.php 1148 2005-04-07 19:24:10Z drbyte $
//

define('HEADING_TITLE_OPT', 'Опции товаров');
define('HEADING_TITLE_VAL', 'Опциональные значения');
define('HEADING_TITLE_ATRIB', 'Аттрибуты товара');

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

define('TEXT_WARNING_OF_DELETE', '<span class="alert">В данной опции есть товары и значения которые прилинкованы к ней - будьте осторожны при удалении.<br />Внимание: Файлы для загрузки не будут удалены с сервера</span>');
define('TEXT_OK_TO_DELETE', 'К данной опции нет прилинкованных товаров - вы можете удалить её.');
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

  define('TEXT_PRODUCT_OPTIONS_INFO','<strong>Внимание: Отредактируйте опции товара для дополнительных настроек</strong>');

// Option Names/Values copier from one to another
  define('TEXT_OPTION_VALUE_COPY_ALL', '<strong>Копировать все товары где опциональное название и значение ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_ALL', 'Выберите опциональное название и значение которые были только что созданы для товара или товары от которых вы хотите скопировать другое опциональное название и значение всем товарам с этими созданными опциональными названиями и значениями');
  define('TEXT_SELECT_OPTION_FROM', 'Соответствие опционального названия:');
  define('TEXT_SELECT_OPTION_VALUES_FROM', 'Соответствие опционального значения:');
  define('TEXT_SELECT_OPTION_TO', 'Добавление опционального названия:');
  define('TEXT_SELECT_OPTION_VALUES_TO', 'Добавление опционального значения:');
  define('TEXT_SELECT_OPTION_VALUES_TO_CATEGORIES_ID', 'Оставьте пустым для всех товаров или<br />введите ID категории для товаров что бы обновить');

// Option Name/Value to Option Name for Category with Product defaults
  define('TEXT_OPTION_VALUE_COPY_OPTIONS_TO', '<strong>Копировать опциональное название/значение товарам с созданным опциональным названием ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_COPY_OPTIONS_TO', 'Выберите опциональное название или значение которое было создано для товара или товары добавить ко всем товарам или только к товарам в выбранной категории у которых есть выбранное опциональное название.
                                                   <br /><strong>Например:</strong> Добавить опциональное название: Опциональное значение цвета: Красный ко всем товарам с опциональным названием: Размер
                                                   <br /><strong>Например:</strong> Добавить опциональное название: Опциональное значение цвета: Зеленый с значением по умолчанию от товаров ID: 34 всем товарам с опциональным названием: Размер
                                                   <br /><strong>Например:</strong> Добавить опциональное название: Опциональное значение цвета: Зеленый с значением по умолчанию от товаров ID: 34 всем товарам с опциональным названием: Размер для категорий ID: 65
        ');
  define('TEXT_SELECT_OPTION_TO_ADD_TO', 'Добавить опциональное название:');
  define('TEXT_SELECT_OPTION_FROM_ADD', 'Добавить опциональное название:');
  define('TEXT_SELECT_OPTION_VALUES_FROM_ADD', 'Добавить опциональное значение:');
  define('TEXT_SELECT_OPTION_FROM_PRODUCTS_ID', 'Новый аттрибут значений по умолчанию от товара ID# или оставьте пустым для значений без умолчания:');
  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Как должен быть обработан созданный аттрибут товара?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Удалить</strong> сначала, потом копировать новые аттрибуты');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Обновить</strong> созданные аттрибуты с новыми настройками и ценами');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Пропустить</strong> созданные аттрибуты и добавить только новые аттрибуты');

  define('TEXT_INFO_FROM', ' от: ');
  define('TEXT_INFO_TO', ' в: ');
  define('ERROR_OPTION_VALUES_COPIED', 'Ошибка: Дубликат опционального названия и значения');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH', 'Ошибка: Несовпадение выбранных опциональных значений и названий');
  define('ERROR_OPTION_VALUES_NONE', 'Ошибка: Для копирования ничего не найдено');
  define('SUCCESS_OPTION_VALUES_COPIED', 'Копирование прошло успешно! ');
  define('ERROR_OPTION_VALUES_COPIED_MISMATCH_PRODUCTS_ID', 'Ошибка: Пропущено опциональное название и значение для товара ID#');

  define('TEXT_OPTION_VALUE_DELETE_ALL', '<strong>Удалить совпавшие аттрибуты из всех товаров где опциональное название и значение ...</strong>');
  define('TEXT_INFO_OPTION_VALUE_DELETE_ALL', 'Выберите опциональное название и значение которые созданы для товара или товар который вы хотите удалить из всех товаров или из всех товаров в пределах одной категории');
  define('TEXT_SELECT_DELETE_OPTION_FROM', 'Совпавшее опциональное название:');
  define('TEXT_SELECT_DELETE_OPTION_VALUES_FROM', 'Совпавшее опциональное значение:');

  define('ERROR_OPTION_VALUES_DELETE_MISMATCH', 'Ошибка: Несовпадение выбранных опциональных значений и названий');

  define('SUCCESS_OPTION_VALUES_DELETE', 'Успешно: Удаление: ');
?>