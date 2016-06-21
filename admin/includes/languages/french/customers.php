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
//  $Id: customers.php 4133 2006-08-14 00:37:30Z drbyte $
// +----------------------------------------------------------------------+
// | Traduction fran�aise de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('HEADING_TITLE', 'Clients');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Pr&eacute;nom');
define('TABLE_HEADING_LASTNAME', 'Nom');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Compte Cr&eacute;&eacute;');
define('TABLE_HEADING_LOGIN', 'Derni&egrave;re Connexion');
define('TABLE_HEADING_ACTION', 'Action');
define('TABLE_HEADING_PRICING_GROUP', 'Groupe de Prix');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Autoris&eacute;');
define('TABLE_HEADING_GV_AMOUNT', 'Solde ch&egrave;ques cadeaux');

define('TEXT_DATE_ACCOUNT_CREATED', 'Compte Cr&eacute;&eacute;:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Derni&egrave;re Modification:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Derni&egrave;re Connexion:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Nombre de Connexions:');
define('TEXT_INFO_COUNTRY', 'Pays:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Nombre d\'Avis:');
define('TEXT_DELETE_INTRO', 'Etes-vous certain de vouloir effacer ce Client ?');
define('TEXT_DELETE_REVIEWS', 'Effacer %s avi(s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Effacer le Client');
define('TYPE_BELOW', 'Indiquez ci-dessous');
define('PLEASE_SELECT', 'S&eacute;lectionnez Un');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Nombre de Commandes:');
define('TEXT_INFO_LAST_ORDER','Derni&egrave;re Commande:');
define('TEXT_INFO_ORDERS_TOTAL', 'Total:');
define('CUSTOMERS_REFERRAL', 'Gratification Client<br />1er Coupon de R&eacute;duction');
define('TEXT_INFO_GV_AMOUNT', 'Solde ch&egrave;que cadeau');

define('ENTRY_NONE', 'Aucune');

define('TABLE_HEADING_COMPANY','Soci&eacute;t&eacute;');

define('CUSTOMERS_AUTHORIZATION', 'Statut d\'Autorisation du Client');
  define('CUSTOMERS_AUTHORIZATION_0', 'Approuv&eacute;');
  define('CUSTOMERS_AUTHORIZATION_1', 'Attend Autorisation pour Naviguer');
  define('CUSTOMERS_AUTHORIZATION_2', 'Navigue Sans Prix Affich&eacute;');
  define('CUSTOMERS_AUTHORIZATION_3', 'Navigue avec Prix Sans Pouvoir Acheter');
  define('CUSTOMERS_AUTHORIZATION_4', 'Banni - Non autoris&eacute; &agrave; vous identifier et acheter');  
  define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Attention: votre Boutique est configur&eacute;e en Mode Approbation Sans Navigation. Le Client est en Attente, et il NE PEUT PAS Naviguer');
  define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Attention: votre Boutique est configur&eacute;e en Mode Approbation Sans prix. Le Client est en Attente, et il peut Naviguer MAIS NE VOIT PAS LES PRIX');
  define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Votre statut de client a &eacute;t&eacute; mis &aacute; jour. Merci de faire vos achats chez nous. Nous suivrons vos commandes avec le plus grand int&eacute;r&ecirc;t.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Le statut client a &eacutet&eacute mis &aacute; jour');

define('ADDRESS_BOOK_TITLE', 'Entr&eacute;es du carnet d\'adresse');
define('PRIMARY_ADDRESS', '(adresse principale)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTE:</strong></span> %s entr&eacute;es sont autoris&eacute;es au maximum dans le carnet d\'adresses.');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', ' | 1 sur  ');
?>