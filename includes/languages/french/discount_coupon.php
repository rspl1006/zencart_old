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
// $Id: discount_coupon.php 3253 2006-03-25 17:26:14Z birdbrain $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('NAVBAR_TITLE', 'Coupon de r&eacute;duction');
define('HEADING_TITLE', 'Coupon de r&eacute;duction');

define('TEXT_INFORMATION', '');
define('TEXT_COUPON_FAILED', '<span class="alert important">%s</span> apparait comme n\'&eacute;tant pas un coupon valide. Essayez de le retaper.');

define('HEADING_COUPON_HELP', 'Aide sur les Coupons de r&eacute;ductions');
define('TEXT_CLOSE_WINDOW', 'Fermer la fen&ecirc;tre [x]');
define('TEXT_COUPON_HELP_HEADER', '<p class="bold">le code pour le coupon de r&eacute;duction que vous avez entr&eacute; est pour ');
define('TEXT_COUPON_HELP_NAME', '\'%s\'. </p>');
define('TEXT_COUPON_HELP_FIXED', '');
define('TEXT_COUPON_HELP_MINORDER', '');
define('TEXT_COUPON_HELP_FREESHIP', '');
define('TEXT_COUPON_HELP_DESC', '<p><span class="bold">Offre de r&eacute;duction:</span> %s</p><p class="smallText">D\'autres restrictions peuvent s\'appliquer, v&eacute;rifiez ci-dessous les d&eacute;tails.</p>');
define('TEXT_COUPON_HELP_DATE', '<p>Ce coupon est valide entre %s et %s</p>');
define('TEXT_COUPON_HELP_RESTRICT', '<p class="biggerText bold">Restrictions du coupon de r&eacute;duction</p>');
define('TEXT_COUPON_HELP_CATEGORIES', '<p class="bold">Restriction sur les cat&eacute;gories:</p>');
define('TEXT_COUPON_HELP_PRODUCTS', '<p class="bold">Restrictions sur les produits:</p>');
define('TEXT_ALLOW', 'Autoriser');
define('TEXT_DENY', 'Interdit');
define('TEXT_NO_CAT_RESTRICTIONS', '<p>Ce coupon est valable pour toutes les cat&eacute;gories d\'article.</p>');
define('TEXT_NO_PROD_RESTRICTIONS', '<p>Ce coupon est valable pour tous les produits.</p>');
define('TEXT_CAT_ALLOWED', ' (Valable pour cette cat&eacute;gorie)');
define('TEXT_CAT_DENIED', ' (Interdit pour cette catg&eacute;orie)');
define('TEXT_PROD_ALLOWED', ' (Valable pour ce produit)');
define('TEXT_PROD_DENIED', ' (Interdit pour ce produit)');
// gift certificates cannot be purchased with Discount Coupons
define('TEXT_COUPON_GV_RESTRICTION','<p class="smallText">Les Coupons de r&eacute;duction ne peuvent &ecirc;tre appliqu&eacute; en dessous de ' . TEXT_GV_NAMES . '. Limitation &agrave; 1 coupon par commande.</p>');

define('TEXT_DISCOUNT_COUPON_ID_INFO', 'V&eacute;rification du coupon de r&eacute;duction ... ');
define('TEXT_DISCOUNT_COUPON_ID', 'Votre code: ');

define('TEXT_COUPON_GV_RESTRICTION_ZONES', 'Application de restriction sur l\'adresse de facturation.');
?>