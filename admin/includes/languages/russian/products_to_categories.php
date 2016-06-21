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
//  $Id: products_to_categories.php 2909 2006-01-29 21:29:35Z ajeh $
//

define('HEADING_TITLE','Товары в многоуровневых категориях');
define('HEADING_TITLE2','Категории и товары');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_AVAILABLE', 'Категории с товарами которые доступны для прилинкования ...');

define('TABLE_HEADING_PRODUCTS_ID', 'ID товара');
define('TABLE_HEADING_PRODUCT', 'Название товара');
define('TABLE_HEADING_MODEL', 'Модель');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_INFO_HEADING_EDIT_PRODUCTS_TO_CATEGORIES', 'Редактирвоание товара на основе информации о категории');
define('TEXT_PRODUCTS_ID', 'Товар ID# ');
define('TEXT_PRODUCTS_NAME', 'Товар: ');
define('TEXT_PRODUCTS_MODEL', 'Модель: ');
define('TEXT_PRODUCTS_PRICE', 'Цена: ');
define('BUTTON_UPDATE_CATEGORY_LINKS', 'Обновить ссылки категории');
define('BUTTON_NEW_PRODUCTS_TO_CATEGORIES', 'Выберите товар для прилинкования');
define('TEXT_SET_PRODUCTS_TO_CATEGORIES_LINKS', 'Выберите продукт для установления его связи с категориями: ');
define('TEXT_INFO_LINKED_TO_COUNT', '&nbsp;&nbsp;Текущий номер прилинкованых категоирй: ');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER_INTRO',
'Прилинкование товара к категориям создано для быстрого перемещения товара в одну или более категорий');

define('TEXT_INFO_PRODUCTS_TO_CATEGORIES_LINKER',
'Для предложения особенной цены, каждому товару необходима главная категория к которой будут прилинкованы уже другие под/категории'
);

define('HEADER_CATEGORIES_GLOBAL_CHANGES', 'Ссылка глобальной категории изменена и ID главной категории сброшен');

define('TEXT_SET_MASTER_CATEGORIES_ID', '<strong>Внимание:</strong> Вы должны установить ID главной категории перед изменением прилинкованых категорий');

// copy category to category linked
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Копировать все товары в категорию как прилинкованые товары в другую категорию ...</strong>');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Выбрать все товары в категории: ');
define('TEXT_INFO_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Прилинковать к категории: ');
define('BUTTON_COPY_CATEGORY_LINKED', 'Копировать товары как прилинкованые ');

define('WARNING_PRODUCTS_LINK_TO_CATEGORY_REMOVED', 'Внимание: Товары были сброшены и больше не являются частью категории ...');
define('WARNING_COPY_LINKED', 'Внимание: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Неправильная категория для прилинкования товара от: ');
define('WARNING_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Неправильная категория для прилинкования товара в: ');
define('WARNING_NO_CATEGORIES_ID', 'Внимание: категории не быыли выбраны');
define('SUCCESS_COPY_LINKED', 'Успешно обновление ... ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Правильная категория для прилинкования товара от: ');
define('SUCCESS_COPY_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Правильная категория для прилинкования товара в: ');

define('WARNING_COPY_FROM_IN_TO_LINKED', '<strong>Внимание: Нет изменений в только что прилинкованых товарах</strong>');

// remove category to category linked
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_LINKED', '<strong>Удалить все товары в категории который являются прилинкованными в другую категорию');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Выбрать все товары в категории: ');
define('TEXT_INFO_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Удалите чтобы прилинковать в категорию: ');
define('BUTTON_REMOVE_CATEGORY_LINKED', 'Удалить прилинкованые товары ');

define('WARNING_REMOVE_LINKED', 'Внимание: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Неправильная категория для удаления прилинкованых товаров от: ');
define('WARNING_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Неправильная категория для удаления прилинкованых товаров в: ');
define('SUCCESS_REMOVE_LINKED', 'Успешно удаление ... ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_FROM_LINKED', 'Правильная категория для удаления прилинкованых товаров от: ');
define('SUCCESS_REMOVE_ALL_PRODUCTS_TO_CATEGORY_TO_LINKED', 'Правильная категория для удаления прилинкованых товаров в: ');

define('WARNING_REMOVE_FROM_IN_TO_LINKED', '<strong>Внимание: Не произведено ни одного изменения ... </strong>');

define('WARNING_MASTER_CATEGORIES_ID_CONFLICT', '<strong>Внимание: Конфликт ID главной категории</strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_CONFLICT', '<strong>ID главной категории: </strong>');
define('TEXT_INFO_MASTER_CATEGORIES_ID_PURPOSE', 'Внимание: Главная категория используется для специальных цен где категория с товарами затрагивает цены на прилинкованые товары');
define('WARNING_MASTER_CATEGORIES_ID_CONFLICT_FIX', 'Для решения данной проблемы, вы будете перенаправлены к первому конфликтному товару. Назначте повторно ID главной категории');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_FROM', ' Конфликт от категории: ');
define('TEXT_MASTER_CATEGORIES_ID_CONFLICT_TO', ' Конфликт в категории: ');
define('SUCCESS_MASTER_CATEGORIES_ID', 'Успешно обновлено ...');
define('WARNING_MASTER_CATEGORIES_ID', 'Внимание: Главная категория не установлена!');

define('TEXT_PRODUCTS_ID_INVALID', 'Внимание: Неправильный ID товара или товар не выбран');
define('TEXT_PRODUCTS_ID_NOT_REQUIRED', 'Внимание: ID товара не нужен для установки использования всех прилинкованых товаров от одной категории в другую');

// reset all products to new master_categories_id
// copy category to category linked
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_MASTER', '<strong>Сбросить все товары в выбранной категории что бы использовать её как новую главную категорию ID');
define('TEXT_INFO_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Сбросить ID главной категории для всех товаров в категории: ');
define('BUTTON_RESET_CATEGORY_MASTER', 'Сбросить ID главной категории');

define('WARNING_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Внимание: Выбрана неправильная категория ...');
define('SUCCESS_RESET_ALL_PRODUCTS_TO_CATEGORY_FROM_MASTER', 'Успешное обнолвение всех товаров в новой главной категории ID для категории: ');

?>