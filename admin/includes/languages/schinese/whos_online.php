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
// | Simplified Chinese version   http://www.zen-cart.cn                  |
// +----------------------------------------------------------------------+
//  $Id: whos_online.php 290 2004-09-15 19:48:26Z wilt $
//

define('HEADING_TITLE', '��������');

define('TABLE_HEADING_ONLINE', '����');
define('TABLE_HEADING_CUSTOMER_ID', '���');
define('TABLE_HEADING_FULL_NAME', '����');
define('TABLE_HEADING_IP_ADDRESS', 'IP ��ַ');
define('TABLE_HEADING_SESSION_ID', 'Session');
define('TABLE_HEADING_ENTRY_TIME', '��¼ʱ��');
define('TABLE_HEADING_LAST_CLICK', '�����ʱ��');
define('TIME_PASSED_LAST_CLICKED', '<strong>������ʱ��:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', '���鿴����ַ');
define('TABLE_HEADING_ACTION', '����');
define('TABLE_HEADING_SHOPPING_CART', '�û����ﳵ');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'С��');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Ŀǰ��%s���ͻ�����');

// Additional Definitions for whos_online.php
  define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'ˢ������');
  define('WHOS_ONLINE_LEGEND_TEXT','ͼʾ:');
  define('WHOS_ONLINE_ACTIVE_TEXT','���� �й��ﳵ');
  define('WHOS_ONLINE_INACTIVE_TEXT','�뿪 �й��ﳵ');
  define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','���� û�й��ﳵ');
  define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','�뿪 û�й��ﳵ');
  define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','�뿪ָ���ĵ��ʱ�� >=');
  define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','����뿪ʱ�� >');
  define('WHOS_ONLINE_REMOVED_TEXT','������ʾ');

// whos_online.php
  define('WHOIS_TIMER_REMOVE',1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
  define('WHOIS_TIMER_INACTIVE',180); // seconds when considered inactive - 180 default = 3 minutes
  define('WHOIS_TIMER_DEAD',540); // seconds when considered dead - 540 default = 9 minutes
  define('WHOIS_SHOW_HOST','1'); // show Last Clicked time and host name - 1 default
  define('WHOIS_REPEAT_LEGEND_BOTTOM','12'); // show legend on bottom when more than how many entries - 12 default
  define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

  define('TEXT_SESSION_ID', '<strong>Session ���:</strong> ');
  define('TEXT_HOST', '<strong>Host:</strong> ');
  define('TEXT_USER_AGENT', '<strong>User Agent:</strong> ');
  define('TEXT_EMPTY_CART', '<strong>Empty Cart</strong>');

?>