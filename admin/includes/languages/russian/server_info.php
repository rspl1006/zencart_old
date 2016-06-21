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
//  $Id: server_info.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Информация о сервере');

define('TITLE_SERVER_HOST', 'Хост:');
define('TITLE_SERVER_OS', 'ОС:');
define('TITLE_SERVER_DATE', 'Дата:');
define('TITLE_SERVER_UP_TIME', 'Время работы:');
define('TITLE_HTTP_SERVER', 'HTTP:');
define('TITLE_PHP_VERSION', 'PHP:');
define('TITLE_ZEND_VERSION', 'Zend:');
define('TITLE_DATABASE_HOST', 'Хост БД:');
define('TITLE_DATABASE', 'БД:');
define('TITLE_DATABASE_DATE', 'Дата БД:');
define('PROJECT_DATABASE_LABEL','Уровень БД: ');
?>