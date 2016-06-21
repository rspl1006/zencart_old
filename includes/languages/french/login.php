<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: login.php 5458 2006-12-29 22:00:08Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

  define('NAVBAR_TITLE', 'Se connecter');
  define('HEADING_TITLE', 'Bienvenue, veuillez vous identifier');

  define('HEADING_NEW_CUSTOMER', 'Pourquoi cr&eacute;er mon compte ?');
  define('HEADING_NEW_CUSTOMER_SPLIT', 'Nouveaux clients');
  define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'En cr&eacute;ant votre compte sur ' . STORE_NAME . ', vous conserverez la trace des commandes que vous avez r&eacute;alis&eacute;es et b&eacute;n&eacute;ficierez de services personnalis&eacute;s.');
  define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Vous avez un compte Paypal? Vous souhaitez payer rapidement avec une carte de cr&eacute;dit ? Utilisez le bouton Paypal ci-dessous pour utiliser le Paiement Express par Paypal.');
  define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">Ou</span><br />');
  define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Cr&eacute;er un compte client sur <strong>' . STORE_NAME . '</strong> qui vous permettra que faire vos achats plus vite, suivre l\'&eacute;tat de vos commandes et lire les avis des autres clients sur nos produits.');

  define('HEADING_RETURNING_CUSTOMER', 'Je suis d&eacute;j&agrave; client');
  define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Client existant');
  define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Pour continuer, veuillez vous identifier &agrave; votre compte <strong>' . STORE_NAME . '</strong>.');

  define('TEXT_PASSWORD_FORGOTTEN', 'Vous avez perdu votre mot de passe ?');

  define('TEXT_LOGIN_ERROR', 'Erreur : cette adresse E-mail et ce mot de passe ne correspondent pas.');
  define('TEXT_VISITORS_CART', '<strong>Info :</strong> le contenu de votre panier en tant que Visiteur sera ajout&eacute; automatiquement &agrave; celui de votre compte client lorsque vous serez connect&eacute; &agrave; votre compte <a href="javascript:session_win();">[En savoir plus]</a>');

  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Vie Priv&eacute;e');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Vous d&eacute;clarez avoir pris connaissnce de nos dispositions concernant la confidentialit&eacute; de vos informations personnelles, dans le respect de la Vie Priv&eacute;e et y adh&eacute;rer : <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>cliquez ici</u></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Je d&eacute;clare avoir pris connaissance de vos dispositions concernant la confidentialit&eacute; de mes informations personnelles et je les accepte.');
  
  define('ERROR_SECURITY_ERROR', 'Il y a eu une erreur de s&eacute;curit&eacute; en essayant de vous identifier.');
  define('TEXT_LOGIN_BANNED', 'Erreur: Acc&egrave;s non autoris&eacute;.');

?>