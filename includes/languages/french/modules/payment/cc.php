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
// $Id: cc.php 290 2004-09-15 19:48:26Z wilt $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//


  define('MODULE_PAYMENT_CC_TEXT_ADMIN_TITLE', 'Carte bancaire - paiement Hors ligne');
  define('MODULE_PAYMENT_CC_TEXT_CATALOG_TITLE', 'Carte bancaire');
  define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', 'No Test de Carte de Cr&eacute;dit<br><br>CC# : 4111111111111111<br>Date d\'expiration : Aucune');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', 'Type de la Carte :');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', 'Propri&eacute;taire de la Carte :');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', 'Num&eacute;ro de la Carte :');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', 'Num&eacute;ro CVV (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . 'Plus d\'infos' . '</a>)');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration de la Carte :');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* Le Nom du Propri&eacute;taire de la Carte doit comporter au moins ' . CC_OWNER_MIN_LENGTH . ' caract&eacute;res.\n');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* Le Num&eacute;ro de la Carte de Cr&eacute;dit doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caract&eacute;res.\n');
  define('MODULE_PAYMENT_CC_TEXT_ERROR', 'Erreur Carte de Cr&eacute;dit !');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '* Le Num&eacute;ro CVV doit comporter au moins ' . CC_CVV_MIN_LENGTH . '  caract&eacute;res.\n');
    define('MODULE_PAYMENT_CC_TEXT_EMAIL_ERROR','Avertissement - erreur de configuration : ');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_WARNING','AVERTISSEMENT : Vous avez activ&eacute; le module de paiement par CC mais ne l\'avez pas correctement configur&eacute; pour envoyer l\'information de cc par email. En cons&eacute;quence, vous ne pourrez pas traiter le nombre de cc pour des commandes pass&eacute;es en utilisant cette m&eacute;thode. Allez dans Admin->Modules->Paiement->CC->Editer et entrez l\'adresse email  pr&eacute;f&eacute;r&eacute; pour envoyer l\'information de cc.' . "\n\n\n\n");
  define('MODULE_PAYMENT_CC_TEXT_MIDDLE_DIGITS_MESSAGE', 'Please direct this email to the Accounting department so that it may be filed along with the online order it relates to: ' . "\n\n" . 'Order: %s' . "\n\n" . 'Middle Digits: %s' . "\n\n");
?>