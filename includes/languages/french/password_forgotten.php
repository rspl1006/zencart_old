<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 3086 2006-03-01 00:40:57Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

  define('NAVBAR_TITLE_1', 'Connexion');
  define('NAVBAR_TITLE_2', 'Mot de passe oubli&eacute;');

  define('HEADING_TITLE', 'Mot de passe oubli&eacute;');

  define('TEXT_MAIN', 'Veuillez saisir l\'adresse E-mail que vous avez utilis&eacute; pour votre compte Client et nous vous enverrons un message contenant votre nouveau mot de passe.');

  define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Erreur : adresse E-mail inconnue. Veuillez renouveler votre essai.');

  define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Nouveau mot de passe');
  define('EMAIL_PASSWORD_REMINDER_BODY', 'Un nouveau mot de passe a &eacute;t&eacute; demand&eacute; depuis ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Votre nouveau mot de passe pour vous connecter en tant que Client membre sur \'' . STORE_NAME . '\' est :' . "\n\n" . '   %s' . "\n\nLorsque vous serez identifi&eacute; sur votre compte, vous pouvez changer ce mot de passe &agrave; tout moment dans 'Mon compte'");

  define('SUCCESS_PASSWORD_SENT', '<p>Un nouveau mot de passe vous a &eacute;t&eacute; envoy&eacute; par email.</p>');

?>