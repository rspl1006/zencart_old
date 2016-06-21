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
//  $Id: group_pricing.php 2770 2006-01-02 07:52:42Z drbyte $
//

define('HEADING_TITLE', 'Ценовая группа');

define('TABLE_HEADING_GROUP_ID', 'ID');
define('TABLE_HEADING_GROUP_NAME', 'Название группы');
define('TABLE_HEADING_GROUP_AMOUNT', '% дисконта');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_HEADING_NEW_PRICING_GROUP', 'Новая ценовая группа');
define('TEXT_HEADING_EDIT_PRICING_GROUP', 'Редактировать ценовую группу');
define('TEXT_HEADING_DELETE_PRICING_GROUP', 'Удалить ценовую группу');

define('TEXT_NEW_INTRO', 'Введите информацию о новой ценовой группе');
define('TEXT_EDIT_INTRO', 'Сделайте необходимые изменения');
define('TEXT_DELETE_INTRO', 'Вы точно хотите удалить данную группу?');
define('TEXT_DELETE_PRICING_GROUP', 'Удалить ценовую группу');
define('TEXT_DELETE_WARNING_GROUP_MEMBERS','<b>Внимание:</b> %s клиентов все ещё находятся в данной группе!');

define('TEXT_GROUP_PRICING_NAME', 'Название группы: ');
define('TEXT_GROUP_PRICING_AMOUNT', 'Процент дисконта: ');
define('TEXT_DATE_ADDED', 'Дата добавления:');
define('TEXT_LAST_MODIFIED', 'Дата изменения');
define('TEXT_CUSTOMERS', 'Клиенты в группе:');

define('ERROR_GROUP_PRICING_CUSTOMERS_EXIST','Ошибка: В данной группе есть клиенты. Подтвердите удаление всех клиентов из группы и удаление её самой');
define('ERROR_MODULE_NOT_CONFIGURED','Внимание: Вы определили ценовую группу,но вы не включили модуль ценовой группы(Дисконтная группа)');

?>