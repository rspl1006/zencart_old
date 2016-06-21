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
//  $Id: document_general.php 2830 2006-01-10 17:13:18Z birdbrain $
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
define('TEXT_PRODUCTS_TAX_CLASS', 'Класс налогов:');
define('TEXT_PRODUCTS_AVERAGE_RATING', 'Средняя цена:');
define('TEXT_PRODUCTS_QUANTITY_INFO', 'Количество:');
define('TEXT_DATE_ADDED', 'Дата добавления:');
define('TEXT_DATE_AVAILABLE', 'Дата наличия:');
define('TEXT_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_IMAGE_NONEXISTENT', 'Изображение не создано');
define('TEXT_NO_CHILD_CATEGORIES_OR_PRODUCTS', 'Вставьте новую категорию или товар в данный уровень');
define('TEXT_PRODUCT_MORE_INFORMATION', 'Для более подробной информации, посетите страницу <a href="http://%s" target="blank">товара</a>.');
define('TEXT_PRODUCT_DATE_ADDED', 'Данный товар был добавлен %s.');
define('TEXT_PRODUCT_DATE_AVAILABLE', 'Данный товар бдует в наличии %s.');

define('TEXT_EDIT_INTRO', 'Сделайте необходимые изменения');
define('TEXT_EDIT_CATEGORIES_ID', 'ID категории:');
define('TEXT_EDIT_CATEGORIES_NAME', 'Название категории:');
define('TEXT_EDIT_CATEGORIES_IMAGE', 'Изображение категории:');
define('TEXT_EDIT_SORT_ORDER', 'Порядок сортировки:');

define('TEXT_INFO_COPY_TO_INTRO', 'Выберите новую категорию в которую вы хотите скопировать товар');
define('TEXT_INFO_CURRENT_CATEGORIES', 'Текушие категории: ');

define('TEXT_INFO_HEADING_NEW_CATEGORY', 'Новая категория');
define('TEXT_INFO_HEADING_EDIT_CATEGORY', 'Редактировать категорию');
define('TEXT_INFO_HEADING_DELETE_CATEGORY', 'Удалить категорию');
define('TEXT_INFO_HEADING_MOVE_CATEGORY', 'Переместить категорию');
define('TEXT_INFO_HEADING_DELETE_PRODUCT', 'Удалить товар');
define('TEXT_INFO_HEADING_MOVE_PRODUCT', 'Переместить товар');
define('TEXT_INFO_HEADING_COPY_TO', 'Копировать в');

define('TEXT_DELETE_CATEGORY_INTRO', 'Вы точно хотите удалить данную категорию?');
define('TEXT_DELETE_PRODUCT_INTRO', 'Вы точно хотите удалить данный товар?<br /><br /><strong>Внимание:</strong> На прилинкованные товары<br />1 Убедитесь что главная категория была изменена если вы удаляете товар из нее<br />2 Проверьте категорию для удаления товара из нее');

define('TEXT_DELETE_WARNING_CHILDS', '<b>Внимание:</b> %s (под-)категории все ещё находятся в данной категории!');
define('TEXT_DELETE_WARNING_PRODUCTS', '<b>Внимание:</b> %s товары все ещё находятся в данной категории!');

define('TEXT_MOVE_PRODUCTS_INTRO', 'Выберите категорию которую вы хотите <b>%s</b> переместить');
define('TEXT_MOVE_CATEGORIES_INTRO', 'Выберите категорию которую вы хотите <b>%s</b> переместить');
define('TEXT_MOVE', 'Переместить <b>%s</b> в:');

define('TEXT_NEW_CATEGORY_INTRO', 'Введите информацию о новой категории');
define('TEXT_CATEGORIES_NAME', 'Название категории:');
define('TEXT_CATEGORIES_IMAGE', 'Изображение категории:');
define('TEXT_SORT_ORDER', 'Порядок сортировки:');

define('TEXT_DOCUMENT_STATUS', 'Статус документа:');
define('TEXT_PRODUCTS_VIRTUAL', 'Виртуальный товар:');
define('TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING', 'Всегда бесплатная отгрузка:');
define('TEXT_PRODUCTS_QTY_BOX_STATUS', 'Показывать количество товара:');
define('TEXT_DOCUMENT_DATE_AVAILABLE', 'Дата наличия:');
define('TEXT_DOCUMENT_AVAILABLE', 'Доступно');
define('TEXT_DOCUMENT_NOT_AVAILABLE', 'Недоступно');
define('TEXT_PRODUCT_IS_VIRTUAL', 'Да, пропустить адрес отгрузки');
define('TEXT_PRODUCT_NOT_VIRTUAL', 'Нет, адрес отгрузки необходим');
define('TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING', 'Да, всегда бесплатная отгрузка');
define('TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING', 'Нет, обычная отгрузка');
define('TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING', 'Специальное предложение, Товар/Загрузка комбинациям необходим адрес отгрузки');
define('TEXT_PRODUCTS_SORT_ORDER', 'Порядок сортировки:');

define('TEXT_PRODUCTS_QTY_BOX_STATUS_ON', 'Да, показывать количество товара');
define('TEXT_PRODUCTS_QTY_BOX_STATUS_OFF', 'Нет, не показывать количество товара');

define('TEXT_DOCUMENT_NAME', 'Название документа:');
define('TEXT_DOCUMENT_DETAILS', 'Содержимое документа:');
define('TEXT_DOCUMENT_IMAGE', 'Изображение документа:');
define('TEXT_DOCUMENT_IMAGE_DIR', 'Загрузить в папку:');
define('TEXT_DOCUMENT_URL', 'URL документа:');
define('TEXT_DOCUMENT_URL_WITHOUT_HTTP', '<small>(без http://)</small>');

define('EMPTY_CATEGORY', 'Пустая категория');

define('TEXT_HOW_TO_COPY', 'Метод копирования:');
define('TEXT_COPY_AS_LINK', 'Прилинкованный товар');
define('TEXT_COPY_AS_DUPLICATE', 'Дублировать товар');

// Products and Attribute Copy Options
  define('TEXT_COPY_ATTRIBUTES_ONLY','Только для продублированных товаров ...');
  define('TEXT_COPY_ATTRIBUTES','Копировать аттрибуты товара на дубликат?');
  define('TEXT_COPY_ATTRIBUTES_YES','Да');
  define('TEXT_COPY_ATTRIBUTES_NO','Нет');

  define('TEXT_INFO_CURRENT_PRODUCT', 'Текущий товар: ');
  define('TABLE_HEADING_MODEL', 'Модель');

  define('TEXT_INFO_HEADING_ATTRIBUTE_FEATURES','Аттрибуты изменены для товара ID# ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_DELETE','Удалить <strong>все</strong> аттрибуты товара для:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO','Копировать аттрибуты другому товару или в категорию от:<br />');

  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_PRODUCT','Копировать аттрибут другому <strong>товару</strong> от:<br />');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_COPY_TO_CATEGORY','Копировать аттрибут другой <strong>категории</strong> от:<br />');

  define('TEXT_COPY_ATTRIBUTES_CONDITIONS','<strong>Как должны быть обработаны существующие аттрибуты товара?</strong>');
  define('TEXT_COPY_ATTRIBUTES_DELETE','<strong>Удалить</strong> сначала, потом копировать новые аттрибуты');
  define('TEXT_COPY_ATTRIBUTES_UPDATE','<strong>Обновить</strong> с новыйми настройками и ценами, потом добавить ещё');
  define('TEXT_COPY_ATTRIBUTES_IGNORE','<strong>Пропустить</strong> и добавить только новые аттрибуты');

  define('SUCCESS_ATTRIBUTES_DELETED','Аттрибуты успешно удалены');
  define('SUCCESS_ATTRIBUTES_UPDATE','Аттрибуты успешно обновлены');

  define('ICON_ATTRIBUTES','Возможности аттрибутов');

  define('TEXT_CATEGORIES_IMAGE_DIR','Загрузить в папку:');

  define('TEXT_PRODUCTS_QTY_BOX_STATUS_PREVIEW','Внимание: Не показывать количество товара, умолчание 1');
  define('TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT','Внимание: Не показывать количество товара, умолчание 1');

  define('TEXT_PRODUCT_OPTIONS', '<strong>Выберите:</strong>');
  define('TEXT_PRODUCTS_ATTRIBUTES_INFO','Возможности аттрибутов для:');
  define('TEXT_PRODUCT_ATTRIBUTES_DOWNLOADS','Загрузки: ');

  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Цена товаров по аттрибутам:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Да');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Нет');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_PREVIEW','*Отображаемая цена будет показыватся с группой ценовых аттрибутов плюс цена');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','*Отображаемая цена будет показыватся с группой ценовых аттрибутов плюс цена');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Минимальное количество товара:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Количество единиц товара:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Максимальное количество товара:');

  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0 = неограниченно, 1 = без отображения количества');

  define('TEXT_PRODUCTS_MIXED','Количество/Единица товара:');

  define('PRODUCTS_PRICE_IS_FREE_TEXT', 'Бесплатный товар');
  define('TEXT_PRODUCT_IS_FREE','Бесплатный товар:');
  define('TEXT_PRODUCTS_IS_FREE_PREVIEW','*Товар помечен как бесплатный');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','*Товар помечен как бесплатный');

  define('TEXT_PRODUCT_IS_CALL','Товар запрашивает цену:');
  define('TEXT_PRODUCTS_IS_CALL_PREVIEW','*Товар запрашивает цену');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','*Товар запрашивает цену');

  define('TEXT_ATTRIBUTE_COPY_SKIPPING','<strong>Пропустить новый аттрибут </strong>');
  define('TEXT_ATTRIBUTE_COPY_INSERTING','<strong>Вставить новый аттрибут от </strong>');
  define('TEXT_ATTRIBUTE_COPY_UPDATING','<strong>Обновить аттрибут от </strong>');

// meta tags
  define('TEXT_META_TAG_TITLE_INCLUDES','<strong>Определите какой документ должен содержать мета теги:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRODUCTS_NAME_STATUS','<strong>Название документа:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_STATUS','<strong>Название:</strong>');
  define('TEXT_PRODUCTS_METATAGS_MODEL_STATUS','<strong>Модель:</strong>');
  define('TEXT_PRODUCTS_METATAGS_PRICE_STATUS','<strong>Цена:</strong>');
  define('TEXT_PRODUCTS_METATAGS_TITLE_TAGLINE_STATUS','<strong>Название/Тег:</strong>');
  define('TEXT_META_TAGS_TITLE','<strong>Название мета тега:</strong>');
  define('TEXT_META_TAGS_KEYWORDS','<strong>Ключевые слова мета тега:</strong>');
  define('TEXT_META_TAGS_DESCRIPTION','<strong>Описание мета тега:</strong>');
  define('TEXT_META_EXCLUDED', '<span class="alert">Исключения</span>');
?>