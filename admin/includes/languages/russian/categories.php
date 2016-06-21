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
//  $Id: categories.php 3396 2006-04-09 00:02:03Z ajeh $
//

define('HEADING_TITLE', 'Категории и товары');
define('HEADING_TITLE_GOTO', 'Перейти:');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_CATEGORIES_PRODUCTS', 'Категории и товары');
define('TABLE_HEADING_CATEGORIES_SORT_ORDER', 'Сортировка');

define('TABLE_HEADING_PRICE','Цена/Скидка/Продажа');
define('TABLE_HEADING_QUANTITY','Количество');

define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_STATUS', 'Статус');

define('TEXT_CATEGORIES', 'Категории:');
define('TEXT_SUBCATEGORIES', 'Подкатегории:');
define('TEXT_PRODUCTS', 'Товары:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Цена:');
define('TEXT_PRODUCTS_TAX_CLASS', 'Класс налога:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Средняя цена:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Количество:');
define('TEXT_DATE_ADDED', 'Дата добавления:');
define('TEXT_DATE_AVAILABLE', 'Дата наличия в магазине:');
define('TEXT_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_IMAGE_NONEXISTENT', 'Изображение не создано');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Вставьте категорию или товар в данный уровень');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Для более подробной инфомрации посетите страницу <a href="http://%s" target="blank">товаров</a>');
define('TEXT_PRODUCT_DATE_ADDED', 'Данный товар был добавлен %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Данный товар будет в наличии %s.');

define('TEXT_EDIT_INTRO', 'Сделайте необходимые изменения');
define('TEXT_EDIT_CATEGORIES_ID', 'ID категории:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Название категории:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Изображение категории:');
define('TEXT_EDIT_SORT_ORDER', 'Порядок сортировки:');

define('TEXT_INFO_COPY_TO_INTRO', 'Выберите новую категорию в которую вы хотите скопировать данный товар');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Текущие категории: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Новая категория');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Редактировать категорию');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Удалить категорию');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Переместить категорию');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Удалить товар');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Переместить товар');
define('TEXT_INFO_HEADING_COPY_TO', 'Копировать в');

define('TEXT_DELETE_CATEGORY_INTRO', 'Вы точно хотите удалить данную категорию?');
define('TEXT_DELETE_CATEGORY_INTRO_LINKED_PRODUCTS', '<strong>Внимание:</strong> Прилинкованные товары чьи ID главной категории были удалены, не были правильно оценены. Вы должны сначала утвердить их, потом когда удаляете категорию что содержит прилинкованные товары, что вы сбросили ID главной категории другой категории, перед тем как удалить её');
define('TEXT_DELETE_PRODUCT_INTRO', 'Вы точно хотите удалить данный товар?');

define('TEXT_DELETE_WARNING_CHILDS', '<b>Внимание:</b> %s (под-)категорий все ещё находятся в данной категории!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Внимание:</b> %s товаров находятся в данной категории!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Выберите категорию которую вы хотите <b>%s</b> перенести в');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Выберите категорию которую вы хотите <b>%s</b> перенести в');
define('TEXT_MOVE', 'Перенести <b>%s</b> в:');

define('TEXT_NEW_CATEGORY_INTRO', 'Введите информацию о новой категории');
define('TEXT_CATEGORIES_NAME', 'Название категории:');
define('TEXT_CATEGORIES_IMAGE', 'Изображение категории:');
define('TEXT_SORT_ORDER', 'Порядок сортировки:');

define('TEXT_PRODUCTS_STATUS', 'Статус товаров:');
define('TEXT_PRODUCTS_VIRTUAL', 'Виртуальный товар:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Всегда бесплатная отгрузка:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Показывать количество товара:');
define('TEXT_PRODUCTS_DATE_AVAILABLE', 'Дата наличия в магазине:');
define('TEXT_PRODUCT_AVAILABLE', 'В наличии');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Нет в наличии');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Да, пропустить адрес отгрузки');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Нет, адрес отгрузки необходим');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Да, всегда бесплатная отгрузка');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Нет, обычный процесс отгрузки');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Да, показывать бокс с количеством товара');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Нет, не показывать бокс с количеством товара');

define('TEXT_PRODUCTS_MANUFACTURER', 'Производитель:');
define('TEXT_PRODUCTS_NAME', 'Название товара:');
define('TEXT_PRODUCTS_DESCRIPTION', 'Описание:');
define('TEXT_PRODUCTS_QUANTITY', 'Количество товара:');
define('TEXT_PRODUCTS_MODEL', 'Модель товара:');
define('TEXT_PRODUCTS_IMAGE', 'Изображение товара:');
define('TEXT_PRODUCTS_IMAGE_DIR', 'Загрузитьв папку:');
define('TEXT_PRODUCTS_URL', 'URL товара:');
define('TEXT_PRODUCTS_URL_WITHOUT_HTTP', '<small>(без http://)</small>');
define('TEXT_PRODUCTS_PRICE_NET', 'Цена товара (нетто):');
define('TEXT_PRODUCTS_PRICE_GROSS', 'Цена товара (брутто):');
define('TEXT_PRODUCTS_WEIGHT', 'Вес отгружаемого товара:');

define('EMPTY_CATEGORY', 'Пустая категория');

define('TEXT_HOW_TO_COPY', 'Способ копирования:');
define('TEXT_COPY_AS_LINK', 'Ссылка на товар');
define('TEXT_COPY_AS_DUPLICATE', 'Дублировать товар');

define('TEXT_RESTRICT_PRODUCT_TYPE', 'Ограничить типом товара');
define('TEXT_CATEGORY_HAS_RESTRICTIONS', 'Данная категория ограничена данным типом товара');
define('ERROR_CANNOT_ADD_PRODUCT_TYPE','Данный товар не может быть добавлен в данную категорию. Проверьте ограничения категории');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Только для дублированных товаров ...');
  define('TEXT_COPY_ATTRIBUTES','Копировать аттрибуты товара дубликату?');
  define('TEXT_COPY_ATTRIBUTES_YES','Да');
  define('TEXT_COPY_ATTRIBUTES_NO','Нет');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Текущий товар: ');
  define('TABLE_HEADING_MODEL', 'Модель');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Аттрибуты изменены для товаров ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Удалить <strong>все</strong> аттрибуты товара для:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Копировать аттрибуты другому товару или категории от:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Копировать аттрибуты другому <strong>товару</strong> от:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Копировать аттрибуты другой <strong>категории</strong> от:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Как должны быть обработаны имеющиеся аттрибуты товара?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Удалить</strong> сначала, потом копировать новые аттрибуты');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Обновить</strong> с новыми настройками и ценой, потом добавить ещё');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Пропустить</strong> и добавить только новые аттрибуты');

  define('SUCCESS_ATTRIBUTES_DELETED','Аттрибуты успешно удалены');
  define('SUCCESS_ATTRIBUTES_UPDATE','Аттрибуты успешно обновлены');

  define('ICON_ATTRIBUTES','Возможности аттрибутов');

  define('TEXT_CATEGORIES_IMAGE_DIR','Загрузить в папку:');
  define('TEXT_CATEGORIES_IMAGE_MANUAL', '<strong>Or, select an existing image file from server, filename:</strong>');

  define('TEXT_VIRTUAL_PREVIEW','Внимание: Данный товар помечен - Бесплатная отгрузка и пропускать адрес отгрузки');
  define('TEXT_VIRTUAL_EDIT','Внимание: Данный товар помечен - Бесплатная отгрузка и пропускать адрес отгрузки');
  define('TEXT_FREE_SHIPPING_PREVIEW','Внимание: Данный товар помечен - Бесплатная отгрузка, адрес отгрузки необходим');
  define('TEXT_FREE_SHIPPING_EDIT','Внимание: Согласие сделает данный товар - Бесплатная отгрузка, адрес отгрузки необходим');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Внимание: Не показывать бокс с количеством товара, по умолчанию количество 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Внимание: Не показывать бокс с количеством товара, по умолчанию количество 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Выберите:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Возможности аттрибутов для:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Загрузок: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Цена товара по аттрибуту:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Да');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Нет');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Показывать цену с включенной пониженной группой ценовых аттрибутов плюс цену');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Показывать цену с включенной пониженной группой ценовых аттрибутов плюс цену');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Минимальное количество товара:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Количество единиц товара:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Максимальное количество товара:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = неограниченно, 1 = без бокса с количеством или максимум ##');

  define('TEXT_PRODUCTS_MIXED','Минимальное и максимальное количество товара:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Бесплатный товар');
  define('TEXT_PRODUCT_IS_FREE','Бесплатный товар:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Товар помечен как бесплатный');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Товар помечен как бесплатный');

  define('TEXT_PRODUCT_IS_CALL','Товар запрашивает цену:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Товар помечен как товар который запрашивает цену');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Товар помечен как товар который запрашивает цену');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Пропустить новый аттрибут </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Вставить новый аттрибут от </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Обновить от аттрибута </strong>');

  define('TEXT_SHIPPING_INFO',
  '<strong>Виртуальный товар</strong> не требует адрес отгрузки и прочих сервивос вроде, ' . TEXT_GV_NAMES . ', и т.д.<br />' .
  '<strong>Всегда бесплатная отгрузка</strong> требует адрес отгрузки<br />' .
  '<strong>Загрузки</strong> принятые как виртуальные товары - никаких настроек не требуется<br />'
  );

  define('TEXT_ANY_TYPE', 'Любой тип');
  define('TABLE_HEADING_PRODUCT_TYPES', 'Тип(ы) товара');

// categories status
define('TEXT_INFO_HEADING_STATUS_CATEGORY', 'Изменить статус категории на:');
define('TEXT_CATEGORIES_STATUS_INTRO', 'Изменить статус категории на: ');
define('TEXT_CATEGORIES_STATUS_OFF', 'Выкл');
define('TEXT_CATEGORIES_STATUS_ON', 'Вкл');
define('TEXT_PRODUCTS_STATUS_INFO', 'Изменить статус всех товаров на: ');
define('TEXT_PRODUCTS_STATUS_OFF', 'Выкл');
define('TEXT_PRODUCTS_STATUS_ON', 'Вкл');
define('TEXT_PRODUCTS_STATUS_NOCHANGE', 'Неизменно');
define('TEXT_CATEGORIES_STATUS_WARNING', '<strong>Внимание ...</strong><br />Заметка: Отключение категории отключит все товары в ней');

define('TEXT_PRODUCTS_STATUS_ON_OF',' из ');
define('TEXT_PRODUCTS_STATUS_ACTIVE',' активно ');

define('TEXT_CATEGORIES_DESCRIPTION', 'Описание категории:');
define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Товар запрашивает цену');

// Metatags
  define('TEXT_INFO_HEADING_EDIT_CATEGORY_META_TAGS', 'Мета теги описания категории');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_INTRO', 'Определить мета теги');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_TITLE', 'Заголовок:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_KEYWORDS', 'Ключевые слова:');
  define('TEXT_EDIT_CATEGORIES_META_TAGS_DESCRIPTION', 'Описание:');

define('WARNING_PRODUCTS_IN_TOP_INFO', 'Внимание: У вас есть товар в верхнем уровне категории. Это может привести к неправильной оценке товара. Найденные товары: ');


?>