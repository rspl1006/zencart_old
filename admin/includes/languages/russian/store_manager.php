<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2004 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: store_manager.php 2634 2005-12-20 06:56:04Z drbyte $
//
//
  define('HEADING_TITLE', 'Управление магазином');
  define('TABLE_CONFIGURATION_TABLE', 'Поиск констант');

  define('SUCCESS_PRODUCT_UPDATE_SORT_ALL', '<strong>Успешное</strong> обновление порядка сортировки аттрибутов');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Успешное</strong> обновление для порядка сортировки цен на товары');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_VIEWED', '<strong>Успешный</strong> сброс просмотров товара к 0');
  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_ORDERED', '<strong>Успешный</strong> сброс заказаных товаров к 0');
  define('SUCCESS_UPDATE_ALL_MASTER_CATEGORIES_ID', '<strong>Успешный</strong> сброс всех главных категорий fдля прилинкованых товаров');
  define('SUCCESS_UPDATE_COUNTER', '<strong>Успешное</strong> обновление счетчика к: ');
  define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>Успешное</strong> обновление лога активности админа');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Ошибка:</strong> Не найдено совпадение конфигурационных ключей ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Ошибка:</strong> Ничего не было введено для запроса');

  define('TEXT_INFO_COUNTER_UPDATE', '<strong>Обновить счетчик</strong><br />к новому значению: ');
  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Обновить сортировку цены всех товаров</strong>: ');
  define('TEXT_INFO_PRODUCTS_VIEWED_UPDATE', '<strong>Сбросить все просмотры товаров</strong>');
  define('TEXT_INFO_PRODUCTS_ORDERED_UPDATE', '<strong>Сбросить все заказы на товары</strong>');
  define('TEXT_INFO_MASTER_CATEGORIES_ID_UPDATE', '<strong>Сбросить все товары главной категории ID</strong>');
  define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>Очистить лог действий админа');

  define('TEXT_ORDERS_ID_UPDATE', '<strong>Сбросить текущий ID заказа</strong>');
  define('TEXT_INFO_ORDERS_ID_UPDATE', '');
  define('TEXT_OLD_ORDERS_ID', 'Старый ID заказа');
  define('TEXT_NEW_ORDERS_ID', 'Новый ID заказа');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Искать значения или строки в языковых файлах</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Ключ или название:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '');


  define('TEXT_CONFIGURATION_CONSTANT_FILES', '<strong>Искать в строках языковых файлов</strong>');
  define('TEXT_CONFIGURATION_KEY_FILES', 'Вы ищете текст:');
  define('TEXT_INFO_CONFIGURATION_UPDATE_FILES', '');

  define('TABLE_TITLE_KEY', '<strong>Ключ:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Название:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Описание:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Группа:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Значение:</strong>');

  define('TEXT_LANGUAGE_LOOKUPS', 'Поиск в языковых файлах:');
  define('TEXT_LANGUAGE_LOOKUP_NONE', 'ничего');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Все языковые файлы ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Все главные языковые файлы - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Все текущие выбранные языковые файлы - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Все главные языковые файлы - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Все текущие выбранные языковые файлы - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Все текущие выбранные языковые файлы - Catalog/Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','редактирование недоступно');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' или спрятано');
  define('TEXT_INFO_DATABASE_OPTIMIZE', '<strong>Optimize Database</strong> to remove wasted space from deleted records.<br />May be optionally run monthly or weekly on a busy database.<br />(Best to run during non-busy times.)');
  define('SUCCESS_DB_OPTIMIZE', 'Database Optimization - Tables Processed: ');
?>