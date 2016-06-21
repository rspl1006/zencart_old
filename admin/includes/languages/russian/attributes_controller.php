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
//  $Id: attributes_controller.php 2830 2006-01-10 17:13:18Z birdbrain $
//

define('HEADING_TITLE', 'Категории: ');

define('HEADING_TITLE_OPT', 'Опции товара');
define('HEADING_TITLE_VAL', 'Опциональные значения');
define('HEADING_TITLE_ATRIB', 'Контроллер аттрибутов');
define('HEADING_TITLE_ATRIB_SELECT','Выберите категорию для отображения аттрибутов товара ...');

define('TEXT_PRICES_AND_WEIGHTS', 'Цены и вес');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR', 'Ценовой фактор: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET', 'Погашение: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_ONETIME', 'Разовая плата:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_ONETIME', 'Разовый фактор: ');
define('TABLE_HEADING_ATTRIBUTES_PRICE_FACTOR_OFFSET_ONETIME', 'Погашение: ');

define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES', 'Скидка на количество:');
define('TABLE_HEADING_ATTRIBUTES_QTY_PRICES_ONETIME', 'Разовая скидка на количество:');

define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS', 'Цена за слово:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_WORDS_FREE', '- бесплатные слова:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS', 'Цена за письмо:');
define('TABLE_HEADING_ATTRIBUTES_PRICE_LETTERS_FREE', '- бесплатные письма:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_PRODUCT', 'Название товара');
define('TABLE_HEADING_OPT_NAME', 'Опциональное название');
define('TABLE_HEADING_OPT_VALUE', 'Опциональное значение');
define('TABLE_HEADING_OPT_PRICE', 'Цена');
define('TABLE_HEADING_OPT_PRICE_PREFIX', 'Префикс');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_DOWNLOAD', 'Загружаемые товары:');
define('TABLE_TEXT_FILENAME', 'Имя файла:');
define('TABLE_TEXT_MAX_DAYS', 'Время жизни ссылки: (0 = неограничено)');
define('TABLE_TEXT_MAX_COUNT', 'Максимальное количество загрузок:');
define('TABLE_HEADING_OPT_DISCOUNTED','Дисконт');
define('TABLE_HEADING_PRICE_BASE_INCLUDED','Основа');
define('TABLE_HEADING_PRICE_TOTAL','Всего дисконта: Разово:');
define('TEXT_WARNING_OF_DELETE', 'К данной опции прилинкованы товары и значения - не рекомендуется удалять её');
define('TEXT_OK_TO_DELETE', 'К данной опции не прилинкованы товары и значения - её можно удалить');
define('TEXT_OPTION_ID', 'ID опции');
define('TEXT_OPTION_NAME', 'Опциональное название');

define('ATTRIBUTE_WARNING_DUPLICATE','Дублирование аттрибута - аттрибут не был добавлен'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_DUPLICATE_UPDATE','Дубликат аттрибута создан - аттрибут не был изменен'); // attributes duplicate warning
define('ATTRIBUTE_WARNING_INVALID_MATCH','Опция аттрибута и опциональное значение аттрибута не совпали - аттрибут не был добавлен'); // miss matched option and options value
define('ATTRIBUTE_WARNING_INVALID_MATCH_UPDATE','Опция аттрибута и опциональное значение аттрибута не совпали - аттрибут не был изменен'); // miss matched option and options value
define('ATTRIBUTE_POSSIBLE_OPTIONS_NAME_WARNING_DUPLICATE','Опциональное название дубликата добавлено'); // Options Name Duplicate warning
define('ATTRIBUTE_POSSIBLE_OPTIONS_VALUE_WARNING_DUPLICATE','Опциональное значение дубликата добавлено'); // Options Value Duplicate warning

define('PRODUCTS_ATTRIBUTES_EDITING','Редактирование'); // title
define('PRODUCTS_ATTRIBUTES_DELETE','Удаление'); // title
define('PRODUCTS_ATTRIBUTES_ADDING','Добавление нового аттрибута'); // title
define('TEXT_DOWNLOADS_DISABLED','Внимание: Загрузки отключены');

define('TABLE_TEXT_MAX_DAYS_SHORT', 'Дни:');
define('TABLE_TEXT_MAX_COUNT_SHORT', 'Максимум:');

  define('TABLE_HEADING_OPTION_SORT_ORDER','Порядок сортировки');
  define('TABLE_HEADING_OPTION_VALUE_SORT_ORDER','Порядок по умолчанию');
  define('TEXT_SORT',' Порядок: ');

  define('TABLE_HEADING_OPT_WEIGHT_PREFIX','Префикс');
  define('TABLE_HEADING_OPT_WEIGHT','Вес');
  define('TABLE_HEADING_OPT_SORT_ORDER','Порядок');
  define('TABLE_HEADING_OPT_DEFAULT','Умолчание');

  define('TABLE_HEADING_OPT_TYPE', 'Опциональный тип'); //CLR 031203 add option type column
  define('TABLE_HEADING_OPTION_VALUE_SIZE','Размер');
  define('TABLE_HEADING_OPTION_VALUE_MAX','Максимум');
  define('TABLE_HEADING_OPTION_VALUE_ROWS','Ряды');
  define('TABLE_HEADING_OPTION_VALUE_COMMENTS','Комментарии');

  define('TEXT_OPTION_VALUE_COMMENTS','Комментарии: ');
  define('TEXT_OPTION_VALUE_SIZE','Показывать размер: ');
  define('TEXT_OPTION_VALUE_MAX','Максимальная длина: ');

  define('TEXT_ATTRIBUTES_IMAGE','Изображение аттрибута:');
  define('TEXT_ATTRIBUTES_IMAGE_DIR','Папка с изображениями аттрибутов:');

  define('TEXT_ATTRIBUTES_FLAGS','Флаги<br />аттрибутов:');
  define('TEXT_ATTRIBUTES_DISPLAY_ONLY', 'Используется только<br />для отображения цели:');
  define('TEXT_ATTRIBUTES_IS_FREE', 'Аттрибут бесплатен<br />когда товар бесплатный:');
  define('TEXT_ATTRIBUTES_DEFAULT', 'Аттрибут по умолчанию<br />отмечен:');
  define('TEXT_ATTRIBUTE_IS_DISCOUNTED', 'Применить использование дисконта<br />для товаров со скидкой:');
  define('TEXT_ATTRIBUTE_PRICE_BASE_INCLUDED','Включено в основную цену<br />когда цена аттрибут');
  define('TEXT_ATTRIBUTES_REQUIRED','Аттрибут необходим<br />для текста:');

  define('LEGEND_BOX','Историч:');
  define('LEGEND_KEYS','Выкл/Вкл');
  define('LEGEND_ATTRIBUTES_DISPLAY_ONLY', 'Только показывать');
  define('LEGEND_ATTRIBUTES_IS_FREE', 'Бесплатно');
  define('LEGEND_ATTRIBUTES_DEFAULT', 'Умолчание');
  define('LEGEND_ATTRIBUTE_IS_DISCOUNTED', 'Дисконт');
  define('LEGEND_ATTRIBUTE_PRICE_BASE_INCLUDED','Основная цена');
  define('LEGEND_ATTRIBUTES_REQUIRED','Необходимо');
  define('LEGEND_ATTRIBUTES_IMAGES','Изображения');
  define('LEGEND_ATTRIBUTES_DOWNLOAD','Правильное/Неправильное<br />имя файла');

  define('TEXT_ATTRIBUTES_UPDATE_SORT_ORDER','Порядок по умолчанию');
  define('TEXT_PRODUCTS_LISTING','Список товаров для: ');
  define('TEXT_NO_PRODUCTS_SELECTED','Товар не выбран');
  define('TEXT_NO_ATTRIBUTES_DEFINED','Аттрибуты не определены длдя товара ID#');

  define('TEXT_PRODUCTS_ID','Товары ID#');
  define('TEXT_ATTRIBUTES_DELETE','Удалить все');
  define('TEXT_ATTRIBUTES_COPY_PRODUCTS','Копировать в товар');
  define('TEXT_ATTRIBUTES_COPY_CATEGORY','Копировать в категорию');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Аттрибуты изменены для товаров ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Удалить <strong>все</strong> аттрибуты для товара:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Копировать аттрибуты в другой товар или в категорию от:<br />');

  define('TEXT_ATTRIBUTES_COPY_TO_PRODUCTS','Товар');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Копировать аттрибуты в другой <strong>товар</strong> от ID#');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_COPY_TO','Выберите товар для копирования всех аттрибутов в:');

  define('TEXT_ATTRIBUTES_COPY_TO_CATEGORY','Категория');
  define('TEXT_INFO_ATTRIBUTES_FEATURE_CATEGORIES_COPY_TO','Выберите категорию для копирования всех аттрибутов в:');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Копировать аттрибуты для всех товаров в <strong>категорию</strong> от товара ID#');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Как должны быть обработаны имеющиеся аттрибуты товара?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Удалить</strong> сначала, потом копировать новые аттрибуты');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Обновить</strong> с новыми настройками и ценами, потом добавить ещё');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Игнорировать</strong> и добавить только новые аттрибуты');

  define('SUCCESS_PRODUCT_UPDATE_SORT','Обновление порядка сортировки аттрибутов прошло успешно для ID# ');
  define('SUCCESS_PRODUCT_UPDATE_SORT_NONE','Нет аттрибутов для обновления порядка сортировки для ID# ');
  define('SUCCESS_ATTRIBUTES_DELETED','Аттрибуты были успешно удалены');
  define('SUCCESS_ATTRIBUTES_UPDATE','Аттрибуты были успешно обновлены');

  define('WARNING_PRODUCT_COPY_TO_CATEGORY_NONE','Не выбрана категория для копирования');
  define('TEXT_PRODUCT_IN_CATEGORY_NAME',' - в категорию: ');

  define('TEXT_DELETE_ALL_ATTRIBUTES','Вы точно хотите удалить все аттрибуты для ID# ');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Пропустить новый аттрибут </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Вставить новый аттрибут от </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Обновить от аттрибута </strong>');

// preview
  define('TEXT_ATTRIBUTES_PREVIEW','Предпросмотр аттрибутов');
  define('TEXT_ATTRIBUTES_PREVIEW_DISPLAY','Предпросмотр аттрибутов для ID#');
  define('TEXT_PRODUCT_OPTIONS', '<strong>Выберите:</strong>');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Определите настройки аттрибутов потом нажмите Вставить для применения</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Цена по аттрибуту');
  define('TEXT_PRODUCTS_PRICE', 'Цена товаров: ');
  define('TEXT_SPECIAL_PRICE', 'Специальная цена: ');
  define('TEXT_SALE_PRICE', 'Цена продажи: ');
  define('TEXT_FREE', 'Бесплатно');
  define('TEXT_CALL_FOR_PRICE', 'Требование цены');
  define('TEXT_SAVE_CHANGES','Обновить и сохранить изменения:');

  define('TEXT_INFO_ID', 'ID#');
  define('TEXT_INFO_ALLOW_ADD_TO_CART_NO', 'В корзину ничего не добавлять');

  define('TEXT_DELETE_ATTRIBUTES_OPTION_NAME_VALUES', 'Подтвердите удаление всех опциональных значений для товара для опционального названия ...');
  define('TEXT_INFO_PRODUCT_NAME', '<strong>Название товара: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_NAME', '<strong>Опциональное названия: </strong>');
  define('TEXT_INFO_PRODUCTS_OPTION_ID', '<strong>ID#</strong>');
  define('SUCCESS_ATTRIBUTES_DELETED_OPTION_NAME_VALUES', 'Успешное удаление всех опциональных значений для опционального названия: ');
?>