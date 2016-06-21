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
// $Id: usps.php 286 2004-09-13 21:16:45Z wilt $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//


define('MODULE_SHIPPING_USPS_TEXT_TITLE', 'USPS (United States Postal Service)');
define('MODULE_SHIPPING_USPS_TEXT_DESCRIPTION', 'United States Postal Service<br /><br />Vous devrez avoir enregistr&eacute; un compte d\'outils de Web avec USPS sur <a href="http://www.usps.com/webtools/" target="_blank">leur site web</a> pour utiliser ce module.<br /><br />USPS vous demande d\'<strong>utiliser les pounds comme mesure de poids</strong> pour vos produits.' . ((MODULE_SHIPPING_USPS_USERID == 'NONE' || MODULE_SHIPPING_USPS_USERID == '' || MODULE_SHIPPING_USPS_SERVER == 'test') ? '<br /><br /><strong>En cr&eacute;ant un client expliquer les citations en temps r&eacute;el d\'exp&eacute;dition d\'USPS</strong><br />
1. <a href="http://www.usps.com/webtools/rate.htm" target="_blank">Information sur USPS et citations de taux</a><br />
2. <a href="https://secure.shippingapis.com/registration/" target="_blank">Cr&eacute;er un compte d\'outils de Web d\'USPS</a><br />
3. Compl&eacute;ter vos d&eacute;tails de l\'information de client et cliquez soumettre<br />
4. Vous recevrez un email contenant votre USPS taux-citez l\'user-id d\'outils de Web<br />
5. Ins&eacute;rer l\'user-id d\'outils de Web dans le module d\'exp&eacute;dition  USPS de ZenCart.<br />
6. T&eacute;l&eacute;phoner &aacute; USPS 1-800-344-7779 et les demander de d&eacute;placer votre compte au serveur de production ou les envoyer un email &aacute; icustomercare@usps.com, citant votre user-id d\'outils de Web.<br />
7. Ils enverront un autre email de confirmation.Placer le module de ZenCart dans le mode de production (au lieu du mode d\'essai) pour finir l\'activation.': ''));
define('MODULE_SHIPPING_USPS_TEXT_OPT_PP', 'Colis postaux');
define('MODULE_SHIPPING_USPS_TEXT_OPT_PM', 'Envoi Prioritaire');
define('MODULE_SHIPPING_USPS_TEXT_OPT_EX', 'Envoi Express');
define('MODULE_SHIPPING_USPS_TEXT_ERROR', 'Une Erreur est survenue dans le calcul de votre livraison USPS.<br />Si vous souhaitez utiliser USPS, merci de bien vouloir nous contacter.');
define('MODULE_SHIPPING_USPS_TEXT_SERVER_ERROR', 'Une erreur s\'est produite en obtenant des citations d\'exp&eacute;dition d\'USPS.<br />Si vous pr&eacute;f&eacute;rez employer USPS en tant que votre m&eacute;thode d\'exp&eacute;dition, contacter svp le propri&eacute;taire de magasin.');
define('MODULE_SHIPPING_USPS_TEXT_DAY', 'Jour');
define('MODULE_SHIPPING_USPS_TEXT_DAYS', 'Jours');
define('MODULE_SHIPPING_USPS_TEXT_WEEKS', 'Semaines');
define('MODULE_SHIPPING_USPS_TEXT_TEST_MODE_NOTICE', '<br /><span class="alert">Votre compte est en mode TEST. Ne vous attendez a voir les taux normaux tant que votre compte n\'a pas ete mis en production (1-800-344-7779) et que vous avez mis le module en mode production dans l\'administration de la boutique.</span>');
?>
