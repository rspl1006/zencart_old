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
// $Id: popup_coupon_help.php 4591 2006-09-23 04:25:15Z ajeh $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('HEADING_COUPON_HELP', 'Aide concernant les Coupons de R&eacute;ductions');
define('TEXT_CLOSE_WINDOW', '[ Fermer [x] ]');
define('TEXT_COUPON_HELP_HEADER', 'F&eacute;licitations, vous avez re&ccedil;u un Coupon de R&eacute;duction.');
define('TEXT_COUPON_HELP_NAME', '<br /><br />Nom du Coupon : %s');
define('TEXT_COUPON_HELP_FIXED', '<br /><br />Ce Coupon vous donne droit &agrave; %s de remise sur votre commande');
define('TEXT_COUPON_HELP_MINORDER', '<br /><br />Vous devez d&eacute;penser %s pour utiliser ce coupon');
define('TEXT_COUPON_HELP_FREESHIP', '<br /><br />Ce Coupon vous donne droit &agrave; une livraison gratuite de votre commande');
define('TEXT_COUPON_HELP_DESC', '<br /><br />Description du Coupon : %s');
define('TEXT_COUPON_HELP_DATE', '<br /><br />Ce Coupon est valable du %s au %s');
define('TEXT_COUPON_HELP_RESTRICT', '<br /><br />Restriction sur les Produits et/ou Cat&eacute;gories');
define('TEXT_COUPON_HELP_CATEGORIES', 'Cat&eacute;gories');
define('TEXT_COUPON_HELP_PRODUCTS', 'Produits');
define('TEXT_ALLOW', 'Autoris&eacute;');
define('TEXT_DENY', 'Refus&eacute;');

define('TEXT_ALLOWED', ' (Autoris&eacute;)');
define('TEXT_DENIED', ' (Refus&eacute;)');

// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','Les Coupons de R&eacute;ductions ne peuvent &ecirc;tre utilis&eacute;s pour l\'Achat de ' . TEXT_GV_NAMES . '.');
define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Des restrictions en rapport &agrave; l\'adresse de facturation s\'appliquent.');
?>