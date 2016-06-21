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
//  $Id: gv_queue.php 1329 2006-05-18 14:30:10J Mazouz Alaa $
// +----------------------------------------------------------------------+
// | Traduction fran�aise de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('HEADING_TITLE', TEXT_GV_NAME . ' En Queue');

define('TABLE_HEADING_CUSTOMERS', 'Clients');
define('TABLE_HEADING_ORDERS_ID', 'Order-No.');
define('TABLE_HEADING_VOUCHER_VALUE', TEXT_GV_NAME . ' Valeur');
define('TABLE_HEADING_DATE_PURCHASED', 'Date d\'Achat');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_REDEEM_GV_MESSAGE_HEADER', 'Vous avez fait il y a peu de temps un achat de  ' . TEXT_GV_NAME . ' sur Notre Site.');
define('TEXT_REDEEM_GV_MESSAGE_RELEASED', 'Pour des questions de s&eacute;curit&eacute;, le montant de cet achat ne vous est pas cr&eacute;dit&eacute; automatiquement. ' .
                                          'Il est maintenant disponible, et vous pouvez vous rendre sur Notre Site, vous identifier, et adresser la Valeur de Votre ' . TEXT_GV_NAME . ' &agrave; la Personne de Votre Choix via un E-mail depuis Notre Site, ou tout simplement utiliser ce montant pour Vous-M&ecirc;me !.' . "\n\n"
                                          );

define('TEXT_REDEEM_GV_MESSAGE_AMOUNT', 'Le ' . TEXT_GV_NAME . ' que vous avez choisi est d\'une Valeur de %s');
define('TEXT_REDEEM_GV_MESSAGE_THANKS', 'Nous vous remercions pour Votre Confiance !');

define('TEXT_REDEEM_GV_MESSAGE_BODY', '');
define('TEXT_REDEEM_GV_MESSAGE_FOOTER', '');
define('TEXT_REDEEM_GV_SUBJECT', TEXT_GV_NAME . ' Achat');
define('TEXT_REDEEM_GV_SUBJECT_ORDER',' Commande #');

define('TEXT_EDIT_ORDER','Edition de la Commande ID# ');
define('TEXT_GV_NONE','Aucun ' . TEXT_GV_NAME . ' en Attente');
?>