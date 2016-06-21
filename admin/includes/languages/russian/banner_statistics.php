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
//  $Id: banner_statistics.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Статистика баннера');

define('TABLE_HEADING_SOURCE', 'Источник');
define('TABLE_HEADING_VIEWS', 'Просмотров');
define('TABLE_HEADING_CLICKS', 'Кликов');

define('TEXT_BANNERS_DATA', 'Т<br>Е<br>К<br>С<br>Т');
define('TEXT_BANNERS_DAILY_STATISTICS', '%s Статистика по дням для %s %s');
define('TEXT_BANNERS_MONTHLY_STATISTICS', '%s Статистика по месяцам для %s');
define('TEXT_BANNERS_YEARLY_STATISTICS', '%s Статистика за год');

define('STATISTICS_TYPE_DAILY', 'День');
define('STATISTICS_TYPE_MONTHLY', 'Месяц');
define('STATISTICS_TYPE_YEARLY', 'Год');

define('TITLE_TYPE', 'Тип:');
define('TITLE_YEAR', 'Год:');
define('TITLE_MONTH', 'Месяц:');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Директория с изображениями не создана,создайте её например: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Директория с изображениями не имеет прав на запись. Она расположена: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
?>