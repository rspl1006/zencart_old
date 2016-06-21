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
//  $Id: whos_online.php 2663 2005-12-24 02:28:51Z ajeh $
//

define('HEADING_TITLE', 'Кто он-лайн');

define('TABLE_HEADING_ONLINE', 'Он-лайн');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Имя');
define('TABLE_HEADING_IP_ADDRESS', 'IP адрес');
define('TABLE_HEADING_SESSION_ID', 'Сессия');
define('TABLE_HEADING_ENTRY_TIME', 'Время входа');
define('TABLE_HEADING_LAST_CLICK', 'Последний клик');
define('TIME_PASSED_LAST_CLICKED', '<strong>Времени после клика:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Последний просмотренный URL');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_SHOPPING_CART', 'Клиентов в корзине');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Подитог');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Сейчас %s клиентов в он-лайне');

// Additional Definitions for whos_online.php
  define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'Обновить список');
  define('WHOS_ONLINE_LEGEND_TEXT','Легенда:');
  define('WHOS_ONLINE_ACTIVE_TEXT','Активная корзина');
  define('WHOS_ONLINE_INACTIVE_TEXT','Неактивная корзина');
  define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Нет активных корзин');
  define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Нет неактивных корзин');
  define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Неактивно >=');
  define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Неактивно с >');
  define('WHOS_ONLINE_REMOVED_TEXT','будут удалены');

// whos_online.php
  define('WHOIS_TIMER_REMOVE',1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
  define('WHOIS_TIMER_INACTIVE',180); // seconds when considered inactive - 180 default = 3 minutes
  define('WHOIS_TIMER_DEAD',540); // seconds when considered dead - 540 default = 9 minutes
  define('WHOIS_SHOW_HOST','1'); // show Last Clicked time and host name - 1 default
  define('WHOIS_REPEAT_LEGEND_BOTTOM','12'); // show legend on bottom when more than how many entries - 12 default
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Выкл');

  define('TEXT_SESSION_ID', '<strong>ID сессиии:</strong> ');
  define('TEXT_HOST', '<strong>Хост:</strong> ');
  define('TEXT_USER_AGENT', '<strong>Клиентский агент:</strong> ');
  define('TEXT_EMPTY_CART', '<strong>Пустая корзина</strong>');
?>