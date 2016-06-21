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
//  $Id: cache.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Контроль кэша');

define('TABLE_HEADING_CACHE', 'Кэш блоки');
define('TABLE_HEADING_DATE_CREATED', 'Дата создания');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_FILE_DOES_NOT_EXIST', 'Файл не создан');
define('TEXT_CACHE_DIRECTORY', 'Директория кэша:');

define('ERROR_CACHE_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Директория кэша не создана. Установите её в Настройка->Кэш');
define('ERROR_CACHE_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Директория кэша не имеет прав на запись');
?>