<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: shopping_cart.php 3183 2006-03-14 07:58:59Z birdbrain $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

define('NAVBAR_TITLE', 'Panier');
define('HEADING_TITLE', 'Le contenu de votre panier');
define('HEADING_TITLE_EMPTY', 'Votre panier');
define('TEXT_INFORMATION', '');
define('TABLE_HEADING_REMOVE', 'Suppr');
define('TABLE_HEADING_QUANTITY', 'Qt&eacute;.');
define('TABLE_HEADING_MODEL', 'Mod&egrave;le');
define('TABLE_HEADING_PRICE','Unit&eacute;');
define('TEXT_CART_EMPTY', 'Votre panier est vide.');
define('SUB_TITLE_SUB_TOTAL', 'Sous-total:');
define('SUB_TITLE_TOTAL', 'Total:');

define('OUT_OF_STOCK_CANT_CHECKOUT', 'Les produits marqu&eacute;s avec ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ne sont pas en stock ou la quantit&eacute; en stock est insuffisante pour honorer votre commande.<br />Changez s\'il vous plait la quantit&eacute; des produits marqu&eacute; avec (' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . '). Merci');
define('OUT_OF_STOCK_CAN_CHECKOUT', 'Les produits marqu&eacute;s avec ' . STOCK_MARK_PRODUCT_OUT_OF_STOCK . ' ne sont pas en stock.<br />Les objets non disponibles seront plac&eacute;s en attente.');

define('TEXT_TOTAL_ITEMS', 'Total Objets: ');
define('TEXT_TOTAL_WEIGHT', '&nbsp;&nbsp;Poids: ');
define('TEXT_TOTAL_AMOUNT', '&nbsp;&nbsp;Montant: ');

define('TEXT_VISITORS_CART', '<a href="javascript:session_win();">[Aide (?)]</a>');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
?>