<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: geo_zones.php 4736 2006-10-13 07:11:44Z drbyte $
 */

define('HEADING_TITLE', 'Определение области - налоги,оплата и отгрузка');

define('TABLE_HEADING_COUNTRY', 'Страна');
define('TABLE_HEADING_COUNTRY_ZONE', 'Область');
define('TABLE_HEADING_TAX_ZONES', 'Налоговая область');
define('TABLE_HEADING_TAX_ZONES_DESCRIPTION', 'Zone Description');
define('TABLE_HEADING_STATUS', 'Status');
define('TABLE_HEADING_ACTION', 'Действие');
//define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_TAX_AND_ZONES', ': Taxes &amp; Zones Defined');
define('TEXT_LEGEND_ONLY_ZONES', ': Zones Defined but not Taxes ');
define('TEXT_LEGEND_NOT_CONF', ': Not Configured ');

define('TEXT_INFO_HEADING_NEW_ZONE', 'Новая область');
define('TEXT_INFO_NEW_ZONE_INTRO', 'Введите информацию о новой области');

define('TEXT_INFO_HEADING_EDIT_ZONE', 'Редактировать область');
define('TEXT_INFO_EDIT_ZONE_INTRO', 'Сделайте необходимые изменения');

define('TEXT_INFO_HEADING_DELETE_ZONE', 'Удалить область');
define('TEXT_INFO_DELETE_ZONE_INTRO', 'Вы точно хотите удалить данную область?');

define('TEXT_INFO_HEADING_NEW_SUB_ZONE', 'Новая под-область');
define('TEXT_INFO_NEW_SUB_ZONE_INTRO', 'Введите информацию о новой под-области');

define('TEXT_INFO_HEADING_EDIT_SUB_ZONE', 'Редактировать под-область');
define('TEXT_INFO_EDIT_SUB_ZONE_INTRO', 'Сделайте необходимые изменения');

define('TEXT_INFO_HEADING_DELETE_SUB_ZONE', 'Удалить под-область');
define('TEXT_INFO_DELETE_SUB_ZONE_INTRO', 'Вы точно хотите удалить под-область?');

define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_ZONE_NAME', 'Название области:');
define('TEXT_INFO_NUMBER_ZONES', 'Номер области:');
define('TEXT_INFO_ZONE_DESCRIPTION', 'Описание:');
define('TEXT_INFO_COUNTRY', 'Страна:');
define('TEXT_INFO_COUNTRY_ZONE', 'Область:');
define('TYPE_BELOW', 'Все области');
define('PLEASE_SELECT', 'Все области');
define('TEXT_ALL_COUNTRIES', 'Все страны');

define('TEXT_INFO_NUMBER_TAX_RATES','Количество налоговых ставок:');
define('ERROR_TAX_RATE_EXISTS','Внимание: Налоговая ставка определена для данной области. Удалите её перед удалением самой области');
?>