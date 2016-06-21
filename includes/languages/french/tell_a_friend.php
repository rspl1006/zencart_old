<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tell_a_friend.php 3159 2006-03-11 01:35:04Z drbyte $
 * 
 * Traduction fran�aise de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

  define('NAVBAR_TITLE', 'Informer Un(e) Ami(e)');

  define('HEADING_TITLE', 'Informer Un(e) Ami(e) concernant \'%s\'');

  define('FORM_TITLE_CUSTOMER_DETAILS', 'Vous');
  define('FORM_TITLE_FRIEND_DETAILS', 'Votre Ami(e) :');
  define('FORM_TITLE_FRIEND_MESSAGE', 'Votre Message');

  define('FORM_FIELD_CUSTOMER_NAME', 'Votre Nom :');
  define('FORM_FIELD_CUSTOMER_EMAIL', 'Votre Adresse E-mail :');
  define('FORM_FIELD_FRIEND_NAME', 'Nom de votre ami(e) :');
  define('FORM_FIELD_FRIEND_EMAIL', 'Adresse E-mail de votre ami(e) :');

  define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');

  define('TEXT_EMAIL_SUCCESSFUL_SENT', 'Votre E-mail concernant <strong>%s</strong> a &eacute;t&eacute; envoy&eacute; avec succ&egrave;s &agrave; <strong>%s</strong>.');

  define('EMAIL_TEXT_HEADER','Une Info Importante !');

  define('EMAIL_TEXT_SUBJECT', '%s vous recommande ce produit du site %s');
  define('EMAIL_TEXT_GREET', 'Bonjour %s!' . "\n\n");
  define('EMAIL_TEXT_INTRO', '%s pense que vous souhaiteriez en savoir davantage au sujet de %s de %s.');

  define('EMAIL_TELL_A_FRIEND_MESSAGE','%s vous informe :');

  define('EMAIL_TEXT_LINK', 'Pour visualiser ce produit, cliquez sur ce lien ou copiez/coller ce lien dans votre navigateur Internet :' . "\n\n" . '%s');
  define('EMAIL_TEXT_SIGNATURE', 'Cordialement,' . "\n\n" . '%s');

  define('ERROR_TO_NAME', 'Erreur : veuillez indiquer le nom de votre ami.');
  define('ERROR_TO_ADDRESS', 'Erreur : format incorrect de l\'adresse E-mail de votre ami. Veuillez recommencer.');
  define('ERROR_FROM_NAME', 'Erreur : veuillez indiquer votre nom.');
  define('ERROR_FROM_ADDRESS', 'Erreur : format incorrect de votre adresse E-mail. Veuillez recommencer.');
?>