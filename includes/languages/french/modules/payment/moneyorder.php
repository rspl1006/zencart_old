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
// $Id: moneyorder.php 1969 2005-09-13 06:57:21Z drbyte $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//


  define('MODULE_PAYMENT_MONEYORDER_TEXT_TITLE', 'Ch&egrave;que/Virement Bancaire');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_DESCRIPTION', 'Veuillez &eacute;tablir votre ch&egrave;que ou virement bancaire &agrave; l\'ordre de :<br />' . MODULE_PAYMENT_MONEYORDER_PAYTO . '<br /><br />Envoyez votre paiement &agrave; :<br />' . nl2br(STORE_NAME_ADDRESS) . '<br /><br />' . 'Votre commande ne sera envoy&eacute;e qu\'&agrave; r&eacute;ception du r&egrave;glement et de sa validation par notre banque.');
  define('MODULE_PAYMENT_MONEYORDER_TEXT_EMAIL_FOOTER', "Veuillez &eacute;tablir votre ch&egrave;que ou virement bancaire &agrave; l\'ordre de :" . "\n\n" . MODULE_PAYMENT_MONEYORDER_PAYTO . "\n\nEnvoyez votre paiement &agrave; :\n" . STORE_NAME_ADDRESS . "\n\n" . 'Votre commande ne sera envoy&eacute;e qu\'&agrave; r&eacute;ception du r&egrave;glement et de sa validation par notre banque.');
?>
