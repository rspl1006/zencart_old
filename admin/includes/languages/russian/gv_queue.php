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
//  $Id: gv_queue.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', TEXT_GV_NAME . ' Очередь релиза');

define('TABLE_HEADING_CUSTOMERS', 'Клиенты');
define('TABLE_HEADING_ORDERS_ID', 'Номер заказа');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Значение');
define('TABLE_HEADING_DATE_PURCHASED', 'Дата приобретения');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Вы получили ' . TEXT_GV_NAME . ' от нашего магазина');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Из соображений безопасности он ещё не доступен. ' .
                                          'На данный момент он активируется. Вы можете посетить наш магазин и отправить значение ' . TEXT_GV_NAME . ' через email кому нибудь, или использовать его самому' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', '' . TEXT_GV_NAME . 'который вы получили имеет ценность %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Спасибо за то,что остаетесь с нами');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Приобрести');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Заказ #');

define('TEXT_EDIT_ORDER','Редактировать заказ ID# ');
define('TEXT_GV_NONE','Нет ' . TEXT_GV_NAME . ' к релизу');
?>