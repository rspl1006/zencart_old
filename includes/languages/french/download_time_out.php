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
// $Id: download_time_out.php 1969 2005-09-13 06:57:21Z drbyte $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('NAVBAR_TITLE', 'Votre t&eacute;l&eacute;chargement ...');
define('HEADING_TITLE', 'Votre t&eacute;l&eacute;chargement ...');

define('TEXT_INFORMATION', 'Nous sommes d&eacute;sol&eacute;s mais votre t&eacute;l&eacute;chargement a expir&eacute;.<br /><br />
  Si vous aviez d\'autres t&eacute;l&eacute;chargements et que vous voulez les r&eacute;cup&eacute;rer,
  veuillez vous rendre sur la page de <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">votre Compte</a> pour voir vos commandes.<br /><br />
  Ou, si vous pensez qu\'il y a un probl&egrave;me avec votre commande, veuillez <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">nous contacter</a> <br /><br />
  Merci !
  ');
?>