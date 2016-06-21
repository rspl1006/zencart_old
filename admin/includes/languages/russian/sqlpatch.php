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
//  $Id: sqlpatch.php 3093 2006-03-02 19:50:40Z drbyte $
//
  define('HEADING_TITLE','Выполнение SQL запроса');
  define('HEADING_WARNING','Сделайте резервную копию базы данных');
  define('HEADING_WARNING2','Если вы выполняли запросы на БД раннее для использования дополнительных возможностей системы,обязательно сделайте резервную копию БД!');
  define('TEXT_QUERY_RESULTS','Результаты запроса:');
  define('TEXT_ENTER_QUERY_STRING','Введите запрос <br />для выполнения:&nbsp;&nbsp;<br /><br />Убедитесь что<br />он заканчивается на ;');
  define('TEXT_ENTER_QUERY_STRING','Enter the query <br />to be executed:&nbsp;&nbsp;<br /><br />Be sure to<br />end with ;');
  define('TEXT_QUERY_FILENAME','Загрузить файл:');
  define('ERROR_NOTHING_TO_DO','Ошибка: Не найден файл запроса');
  define('TEXT_CLOSE_WINDOW', '[ закрыть]');
  define('SQLPATCH_HELP_TEXT','Инструменты SQL патча помогает вам обновлять систему просто вставив код запроса в текстовое поле '.
                              'здесь, или загрузив файл с запросом (.SQL).<br />' .
                              'Не добавляйте префикс в файл запроса, так как инструмент сам ' .
                              'автоматически вставит нужный префикс для активной базы данных, основываясь на настройках магазина ' .
                              'admin/includes/configure.php файл (DB_PREFIX определение).<br /><br />' .
                              'Введенные команды или загрузка можно начинать только со следующих утверждений, и должны быть с больших букв:'.
                              '<br /><ul><li>DROP TABLE IF EXISTS</li><li>CREATE TABLE</li><li>INSERT INTO</li><li>INSERT IGNORE INTO</li><li>ALTER TABLE</li>' .
                              '<li>UPDATE (только одну таблицу)</li><li>UPDATE IGNORE (только одну таблицу)</li><li>DELETE FROM</li><li>DROP INDEX</li><li>CREATE INDEX</li>' .
                              '<br /><li>SELECT </li></ul>');
  define('REASON_TABLE_ALREADY_EXISTS','Невозможно создать таблицу %s потому что она уже создана');
  define('REASON_TABLE_DOESNT_EXIST','Невозможно удалить таблицу %s потому что она не создана');
  define('REASON_TABLE_NOT_FOUND','Невозможно выполнить таблицу %s потому что она не создана');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','Невозможно вставить configuration_key "%s" потому что он уже существует');
  define('REASON_COLUMN_ALREADY_EXISTS','Невозможно добавить колонку %s потому что она уже создана');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','Невозможно удалить колонку %s потому что она не создана');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','Невозможно изменить колонку %s потому что она не создана');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','Невозможно вставить configuration_key "%s" потому что он уже существует');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','Невозможно удалить индекс %s в таблице %s потому что не создан');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','Невозможно удалить primary key в таблице %s потому что он не создан');
  define('REASON_INDEX_ALREADY_EXISTS','Невозможно добавить индекс %s в таблицу %s потому что он уже создан');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','Невозможно добавить primary key в таблицу %s потому что он уже создан');
  define('REASON_NO_PRIVILEGES','Пользователь '.DB_SERVER_USERNAME.'@'.DB_SERVER.' не имеет %s прав к базе данных '.DB_DATABASE.'.');

?>