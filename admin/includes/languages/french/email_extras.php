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
//  $Id: email_extras.php 1329 2006-05-18 14:30:10J Mazouz Alaa $
// +----------------------------------------------------------------------+
// | Traduction fran�aise de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

// office use only
  define('OFFICE_FROM','De:');
  define('OFFICE_EMAIL','E-mail:');

  define('OFFICE_SENT_TO','A:');
  define('OFFICE_EMAIL_TO','E-mail:');
  define('OFFICE_USE','Infos Usage Bureau');
  define('OFFICE_LOGIN_NAME','Identifiant:');
  define('OFFICE_LOGIN_EMAIL','E-mail de Connexion:');
  define('OFFICE_LOGIN_PHONE','<strong>T&eacute;l&eacute;phone:</strong>');
  define('OFFICE_IP_ADDRESS','Adresse IP:');
  define('OFFICE_HOST_ADDRESS','Adresse H&ocirc;te:');
  define('OFFICE_DATE_TIME','Date et heure:');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Cette adresse E-mail a &eacute;t&eacute; indiqu&eacute;e par un de nos clients. Si vous recevez cet e-mail par erreur, merci de contacter: %s');
  define('EMAIL_SPAM_DISCLAIMER','Cet e-mail est adress&eacute; en accord avec la Loi US CAN-SPAM Law du 01/01/2004. Nous respectons Toute demande concernant la gestion de Vos Informations sur Notre Site.');
  define('EMAIL_FOOTER_COPYRIGHT','');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[ENVOIS CHEQUES CADEAUX]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[COUPONS DE REDUCTIONS]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[ETAT DES COMMANDES]');
  define('TEXT_UNSUBSCRIBE', "\n\nVous pouvez si vous le souhaitez vous d&eacute;sabonner de la future Newsletter et de nos mailings promotionnels en suivant ce lien: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'D&eacute;sactiv&eacute;');
?>