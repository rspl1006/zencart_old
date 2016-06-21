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
//  $Id: products_price_manager.php 543 2004-11-13 19:19:29Z wilt $
//

define('HEADING_TITLE', 'Цены на товары');
define('HEADING_TITLE_PRODUCT_SELECT','Выберите категорию с товарами для отображения цены по ...');

define('TABLE_HEADING_PRODUCTS', 'Товары');
define('TABLE_HEADING_PRODUCTS_MODEL','Модель');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Цена/Скидка/Продажа');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Процент');
define('TABLE_HEADING_AVAILABLE_DATE', 'Доступно');
define('TABLE_HEADING_EXPIRES_DATE','Недоступно');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_PRODUCT_INFO', 'Информация о товаре:');
define('TEXT_PRODUCTS_PRICE_INFO', 'Информация о цене товара:');
define('TEXT_PRODUCTS_MODEL','Модель:');
define('TEXT_PRICE', 'Цена');
define('TEXT_PRODUCT_AVAILABLE_DATE', 'Дата наличия:');
define('TEXT_PRODUCTS_STATUS', 'Статус товара:');
define('TEXT_PRODUCT_AVAILABLE', 'В наличии');
define('TEXT_PRODUCT_NOT_AVAILABLE', 'Нет в наличии');

define('TEXT_PRODUCT_INFO_NONE', 'Выберите товар ниже ...');
  define('TEXT_PRODUCT_IS_FREE','Бесплатный товар:');
  define('TEXT_PRODUCTS_IS_FREE_EDIT','<br />*Товар помечен как бесплатный');
  define('TEXT_PRODUCT_IS_CALL','Запрос цены:');
  define('TEXT_PRODUCTS_IS_CALL_EDIT','<br />*Товар помечен для запроса цены');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES','Цена по аттрибутам:');
  define('TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE','Да');
  define('TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE','Нет');
  define('TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT','<br />*Показывать цену включая пониженную ценовую группу аттрибутов плюс цену');
  define('TEXT_PRODUCTS_MIXED','Минимум количество/единица:');
  define('TEXT_PRODUCTS_MIXED_DISCOUNT_QUANTITY', 'Дисконт количества применяется к смешанным аттрибутам');

  define('TEXT_PRODUCTS_QUANTITY_MIN_RETAIL','Минимальное количество:');
  define('TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL','Количество единиц:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL','Максимальное количество:');
  define('TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT','0= неограниченно<br />1= Не показывать количество и максимальное значение');

define('TEXT_FEATURED_PRODUCT_INFO', 'Информация о ожидаемых товарах:');
define('TEXT_FEATURED_PRODUCT', 'Товар:');
define('TEXT_FEATURED_EXPIRES_DATE', 'Дата окончания:');
define('TEXT_FEATURED_AVAILABLE_DATE', 'Дата наличия:');
define('TEXT_FEATURED_PRODUCTS_STATUS', 'Статус показанных товаров:');
define('TEXT_FEATURED_PRODUCT_AVAILABLE', 'Активно');
define('TEXT_FEATURED_PRODUCT_NOT_AVAILABLE', 'Не активно');
define('TEXT_FEATURED_DISABLED', '<strong>Внимание: Информация о показаных товарах отключена, истекла или не активна</strong>');

define('TEXT_SPECIALS_PRODUCT', 'Товар:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Специальная ценаe:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Дата окончания:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Дата наличия:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Внимание:</b><ul><li>Вы можете ввести процент для вычислений в специальной цене, например: <b>20%</b></li><li>Если вы ввели новую цену, разделитель десятков должен быть \'.\' (десятичная точка), например: <b>49.99</b></li><li>Оставьте дату окончания пустой,для неограниченного действия</li></ul>');
define('TEXT_SPECIALS_PRODUCT_INFO', 'Информация о специальной цене:');
define('TEXT_SPECIALS_PRODUCTS_STATUS', 'Статус скидки:');
define('TEXT_SPECIALS_PRODUCT_AVAILABLE', 'Активно');
define('TEXT_SPECIALS_PRODUCT_NOT_AVAILABLE', 'Не активно');
define('TEXT_SPECIALS_NO_GIFTS','Нет скидок на ДК');
define('TEXT_SPECIAL_DISABLED', '<strong>Внимание: Информация о специальном товаре отключена, истекла или не активна</strong>');

define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_NEW_PRICE', 'Новая цена:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Оригинальная цена:');
define('TEXT_INFO_PERCENTAGE', 'Процент:');
define('TEXT_INFO_AVAILABLE_DATE', 'Доступно:');
define('TEXT_INFO_EXPIRES_DATE', 'Заканчивается:');
define('TEXT_INFO_STATUS_CHANGE', 'Изменение статуса:');
define('TEXT_IMAGE_NONEXISTENT', 'Изображение не создано');

define('TEXT_INFO_HEADING_DELETE_FEATURED', 'Удалить показанный товар');
define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить показанный товар?');

  define('TEXT_ATTRIBUTES_INSERT_INFO', '<strong>Определите настройки аттрибута потом нажмите Вставить для применения</strong>');
  define('TEXT_PRICED_BY_ATTRIBUTES', 'Цена по аттрибуту');
  define('TEXT_PRODUCTS_PRICE', 'Цена на товар: ');
  define('TEXT_SPECIAL_PRICE', 'Специальная цена: ');
  define('TEXT_SALE_PRICE', 'Цена продажи: ');
  define('TEXT_FREE', 'Бесплатно');
  define('TEXT_CALL_FOR_PRICE', 'Запрос цены');

define('TEXT_ADD_ADDITIONAL_DISCOUNT', 'Добавить ' . DISCOUNT_QTY_ADD . ' дисконт на количество:');
define('TEXT_BLANKS_INFO','Все дисконты с количеством 0 будут удалены после обновления');
define('TEXT_INFO_NO_DISCOUNTS', 'Не обнаружен дисконт на количество');
define('TEXT_PRODUCTS_DISCOUNT_QTY_TITLE', 'Уровень дисконта');
define('TEXT_PRODUCTS_DISCOUNT','Дисконт');
define('TEXT_PRODUCTS_DISCOUNT_QTY','Минимальное количество');
define('TEXT_PRODUCTS_DISCOUNT_PRICE','Значение дисконта');
define('TEXT_PRODUCTS_DISCOUNT_TYPE','Тип');

define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH','Подсчитать цену:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED','Расширенная цена:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EACH_TAX','Вычислить<br />цену: &nbsp; Обложенный налогом:');
define('TEXT_PRODUCTS_DISCOUNT_PRICE_EXTENDED_TAX','Расширенная<br />цена: &nbsp; Обложенный налогом:');

define('TEXT_EACH','каждый');
define('TEXT_EXTENDED','всего');

define('TEXT_DISCOUNT_TYPE_INFO', 'Информация о дисконте на товары');
define('TEXT_DISCOUNT_TYPE','Тип дисконта:');
define('TEXT_DISCOUNT_TYPE_FROM', 'Дисконт цены от:');

define('DISCOUNT_TYPE_DROPDOWN_0','ничего');
define('DISCOUNT_TYPE_DROPDOWN_1','Процент');
define('DISCOUNT_TYPE_DROPDOWN_2','Актуальная цена');
define('DISCOUNT_TYPE_DROPDOWN_3','Выключить количество');

define('DISCOUNT_TYPE_FROM_DROPDOWN_0','Цена');
define('DISCOUNT_TYPE_FROM_DROPDOWN_1','Скидка');

define('TEXT_UPDATE_COMMIT','Обновить и передать все изменения из текущего отображения');

define('TEXT_PRODUCTS_TAX_CLASS', 'Класс налогов:');

define('TEXT_INFO_MASTER_CATEGORIES_ID_WARNING', '<strong>Внимание:</strong> Главная категория товаров ID# %s не совпадает с текущей категоирей ID# %s и товар не прилинкован!');
define('TEXT_INFO_MASTER_CATEGORIES_CURRENT', ' Текущая категория ID# %s совпадает с главной категорией ID# %s');
define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE_TO_CURRENT', 'Обновить главную категорию ID# %s для совпадения с текущей категорией ID# %s');

define('PRODUCT_WARNING_UPDATE', 'Сделайте необходимые изменения');
define('PRODUCT_UPDATE_SUCCESS', 'Успешное обновление!');
define('PRODUCT_WARNING_UPDATE_CANCEL', 'Изменения были сброшены и не сохранены ...');
define('TEXT_INFO_EDIT_CAUTION', '<strong>Нажмите для редактирования ...</strong>');
define('TEXT_INFO_PREVIEW_ONLY', 'Только предпросмотр ... Текущее состояние цены ... Только предпросмотр');
define('TEXT_INFO_UPDATE_REMINDER', '<strong>Отредактируйте информацию о товаре</strong>');
?>