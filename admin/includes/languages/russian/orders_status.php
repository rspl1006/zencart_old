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
//  $Id: orders_status.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Статус заказов');

define('TABLE_HEADING_ORDERS_STATUS', 'Статус заказов');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_INFO_EDIT_INTRO', 'Сделайте необходимые изменения');
define('TEXT_INFO_ORDERS_STATUS_NAME', 'Статус заказов:');
define('TEXT_INFO_INSERT_INTRO', 'Введите новый статус заказов на основе данной информации');
define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить данный статус заказа?');
define('TEXT_INFO_HEADING_NEW_ORDERS_STATUS', 'Новый статус заказа');
define('TEXT_INFO_HEADING_EDIT_ORDERS_STATUS', 'Редактировать статус заказа');
define('TEXT_INFO_HEADING_DELETE_ORDERS_STATUS', 'Удалить статус заказа');

define('ERROR_REMOVE_DEFAULT_ORDER_STATUS', 'Ошибка: Статус заказа по умолчанию не может быть удален');
define('ERROR_STATUS_USED_IN_ORDERS', 'Ошибка: Данный статус заказа используется');
define('ERROR_STATUS_USED_IN_HISTORY', 'Ошибка: Данный статус заказа используется в истории статусов заказа');
?>