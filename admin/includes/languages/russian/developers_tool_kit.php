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
//  $Id: developers_tool_kit.php 1105 2005-04-04 22:05:35Z birdbrain $
//
  define('HEADING_TITLE', 'Для разработчиков');
  define('TABLE_CONFIGURATION_TABLE', 'Поиск констант');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>Успешное</strong> обновление для порядка сортировки цены товаров');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>Ошибка:</strong> Не найдено совпадений в конфигурационных ключах ...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>Ошибка:</strong> Не был введен запрос');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>Обновить всю сортировку цены товара</strong>: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>Искать константу или строку в языковом файле</strong>');
  define('TEXT_CONFIGURATION_KEY', 'Ключ или название:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', 'Введите запрос и выберите значение из выпадающего меню');

  define('TABLE_TITLE_KEY', '<strong>Ключ:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>Название:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>Описание:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>Группа:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>Значение:</strong>');

  define('TEXT_LOOKUP_NONE', 'ничего');
  define('TEXT_INFO_SEARCHING', 'Поиск ');
  define('TEXT_INFO_FILES_FOR', ' файлов ... для: ');
  define('TEXT_INFO_MATCHES_FOUND', 'Найдены совпашие строки: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'Поиск в языковых файлах:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', 'Все языковые файлы ' . strtoupper($_SESSION['language']) . ' - Catalog/Admin');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'Все главные языковые файлы - Catalog (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', 'Все текущие выбранные файлы - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'Все главные языковые файлы - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', 'Все текущие выбранные файлы - Admin (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', 'Все текущие выбранные файлыs - Catalog/Admin');

  define('TEXT_FUNCTION_CONSTANT', '<strong>Поиск функций</strong>');
  define('TEXT_FUNCTION_LOOKUPS', 'Поиск в файлах функций:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', 'Все файлы функций - Catalog/Admin');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', 'Все файлы функций - Catalog');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', 'Все файлы функций - Admin');

  define('TEXT_CLASS_CONSTANT', '<strong>Поиск классов</strong>');
  define('TEXT_CLASS_LOOKUPS', 'Поиск в файлах классов:');
  define('TEXT_CLASS_LOOKUP_CURRENT', 'Все файлы классов - Catalog/Admin');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', 'Все файлы классов - Catalog');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', 'Все файлы классов - Admin');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>Поиск в шаблонах</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'Поиск в файлах шаблона:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', 'Все файлы шаблонов - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', 'Все файлы шаблонов - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', 'Все файлы шаблонов - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', 'Все файлы шаблонов - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>Поиск во всех файлах</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', 'Поиск во всех файлах:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', 'Все файлы - Catalog/Admin');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', 'Все файлы - Catalog');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', 'Все файлы - Admin');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','Редактирование недоступно');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' или, Скрыто');
?>