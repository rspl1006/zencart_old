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
//  $Id: whos_online.php 1329 2006-05-18 14:30:10J Mazouz Alaa $
// +----------------------------------------------------------------------+
// | Traduction fran�aise de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('HEADING_TITLE', 'Qui est En Ligne ?');

define('TABLE_HEADING_ONLINE', 'En Ligne');
define('TABLE_HEADING_CUSTOMER_ID', 'ID');
define('TABLE_HEADING_FULL_NAME', 'Nom Complet');
define('TABLE_HEADING_IP_ADDRESS', 'Adresse IP');
define('TABLE_HEADING_SESSION_ID', 'Session');
define('TABLE_HEADING_ENTRY_TIME', 'Heure d\'Entr&eacute;e');
define('TABLE_HEADING_LAST_CLICK', 'Dernier Clic');
define('TIME_PASSED_LAST_CLICKED', '<strong>Temps pass&eacute;/derni&egrave;re fois clique:</strong> ');
define('TABLE_HEADING_LAST_PAGE_URL', 'Derni&egrave;re URL');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_SHOPPING_CART', 'Utilisateurs du Panier');
define('TEXT_SHOPPING_CART_SUBTOTAL', 'Sous-total');
define('TEXT_NUMBER_OF_CUSTOMERS', 'Il y a actuellement %s client En Ligne');

// Additional Definitions for whos_online.php
  define('WHOS_ONLINE_REFRESH_LIST_TEXT', 'REACTUALISER LA LISTE');
  define('WHOS_ONLINE_LEGEND_TEXT','L&eacute;gende:');
  define('WHOS_ONLINE_ACTIVE_TEXT','Panier Actif');
  define('WHOS_ONLINE_INACTIVE_TEXT','Panier Inactif');
  define('WHOS_ONLINE_ACTIVE_NO_CART_TEXT','Aucun Panier Actif');
  define('WHOS_ONLINE_INACTIVE_NO_CART_TEXT','Aucun Panier Inactif');
  define('WHOS_ONLINE_INACTIVE_LAST_CLICK_TEXT','Dernier Clic Actif >=');
  define('WHOS_ONLINE_INACTIVE_ARRIVAL_TEXT','Inactif depuis leur Arriv&eacute;e >');
  define('WHOS_ONLINE_REMOVED_TEXT','sera effac&eacute;');

// whos_online.php
  define('WHOIS_TIMER_REMOVE',1200); // seconds when removed from whos_online table - 1200 default = 20 minutes
  define('WHOIS_TIMER_INACTIVE',180); // seconds when considered inactive - 180 default = 3 minutes
  define('WHOIS_TIMER_DEAD',540); // seconds when considered dead - 540 default = 9 minutes
  define('WHOIS_SHOW_HOST','1'); // show Last Clicked time and host name - 1 default
  define('WHOIS_REPEAT_LEGEND_BOTTOM','12'); // show legend on bottom when more than how many entries - 12 default
  define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

  define('TEXT_SESSION_ID', '<strong>Session ID:</strong> ');
  define('TEXT_HOST', '<strong>Host:</strong> ');
  define('TEXT_USER_AGENT', '<strong>User Agent:</strong> ');
  define('TEXT_EMPTY_CART', '<strong>Empty Cart</strong>');
?>