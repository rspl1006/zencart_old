<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 5454 2006-12-29 20:10:17Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

// office use only
  define('OFFICE_FROM','<strong>De :</strong>');
  define('OFFICE_EMAIL','<strong>E-mail :</strong>');

  define('OFFICE_SENT_TO','<strong>A :</strong>');
  define('OFFICE_EMAIL_TO','<strong>E-mail :</strong>');

  define('OFFICE_USE','<strong>Infos utilisation Bureau</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Identifiant :</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>E-mail de Connexion :</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>T&eacute;l&eacute;phone :</strong>');
  define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>Adresse IP :</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Adresse H&ocirc;te :</strong>');
  define('OFFICE_DATE_TIME','<strong>Date et heure :</strong>');
  if (!defined('OFFICE_IP_TO_HOST_ADDRESS')) define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Cette adresse E-mail nous a &eacute;t&eacute; indiqu&eacute;e par un de nos clients. Si vous pensez que vous recevez cet e-mail par erreur, merci de contacter : %s');
  define('EMAIL_SPAM_DISCLAIMER','Cet e-mail est adress&eacute; en accord avec la Loi US CAN-SPAM du 01/01/2004. Nous respectons toute demande concernant la gestion de vos informations sur notre site.');
  define('EMAIL_FOOTER_COPYRIGHT','');
  define('TEXT_UNSUBSCRIBE', "\n\nPour vous d&eacute;sabonner de nos futures newsletters et email promotionnels, cliquez simplement sur le lien suivant: \n");

// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>IMPORTANT:</strong> pour votre protection et pour lutter contre toute usage illicite, le serveur du site stocke les E-mails de la Boutique. Si vous estimez que vous recevez cet E-mail par erreur, veuillez contacter ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Ce message figure dans tous les E-Mails provenant de ce site :</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[CREER UN COMPTE]');
  define('SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_SUBJECT','[INFORMER UN AMI]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[CHEQUE CADEAU CLIENT ENVOYE]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[NOUVELLE COMMANDE]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[INFO DE COMMANDE EXTRA CC] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Attention : Stock bas');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Rapport de stock bas : ');
  
// for when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'D&eacute;sactiv&eacute;');  
?>