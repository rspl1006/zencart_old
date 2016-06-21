<?php
/**
 * Authorize.net SIM
 *
  * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet.php 5369 2006-12-23 10:55:52Z drbyte $
 *
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */


  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Carte de Cr&eacute;dit');  // Payment option title as displayed to the customer
  

  if (MODULE_PAYMENT_AUTHORIZENET_STATUS == 'True') {
    define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="https://account.authorize.net/">Authorize.net Identification marchands</a>' . (MODULE_PAYMENT_AUTHORIZENET_TESTMODE != 'Production' ? '<br /><br />Infos de test:<br /><b>Num&eacute;ros de carte bancaire autoris&eacute;s automatiquement:</b><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002<br /><br /><b>Note:</b> Ces num&eacute;ros de CB renverront une erreur en mode production, et seront approuv&eacute;s en mode test. N\'importe quelle date future peut &ecirc;tre utilis&eacute;e pour la date d\'expiration et tous les nombres &agrave; 3 ou 4 (AMEX) chiffres comme code CVV.<br /><br /><b>Cartes bancaires rejet&eacute;es automatiquement:</b><br /><br />Card #: 4222222222222<br /><br />Ce num&eacute;ro de CB peut &ecirc;tre utilis&eacute; pour recevoir les notifications d\'erreur en mode test.<br /><br />' : ''));
  } else { 
 define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', '<a target="_blank" href="http://reseller.authorize.net/application.asp?id=131345">Cliquez ici pour cr&eacute;er un compte</a><br /><br /><a target="_blank" href="https://account.authorize.net/">S\'identifier sur l\'espace marchands Authorize.net</a><br /><br /><strong>Requirements:</strong><br /><hr />*<strong>Authorize.net Account</strong> (see link above to signup)<br />*<strong>Authorize.net username and transaction key</strong> available from your Merchant ');
  }


  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', 'Infos test de la Carte de Cr&eacute;dit :<br /><br />CC#: 4111111111111111<br />Expiration : Aucune');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Type :');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Propri&eacute;taire de la Carte de Cr&eacute;dit :');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Num&eacute;ro de la Carte de Cr&eacute;dit :');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'Expiration la Carte :');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CVV', 'Num&eacute;ro CVV:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_POPUP_CVV_LINK', 'Qu\'est-ce que c\'est?');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Le Nom du Propri&eacute;taire de la Carte de Cr&eacute;dit doit comporter au moins  ' . CC_OWNER_MIN_LENGTH . ' caract&egrave;res.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Le num&eacute;ro de carte doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caract&egrave;res.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_CVV', '* Les 3 or 4 chiffres du num&eacute;ro CVV doivent &ecirc;tre recopi&eacute;s &agrave; partir du dos de la Carte bancaire.\n');  
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Une erreur est survenue lors du traitement de Votre Carte de cr&eacute;dit. Merci de recommencer.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Votre Carte de Cr&eacute;dit a &eacute;t&eacute; refus&eacute;e. Veuillez essayer une autre carte ou contacter votre banque pour plus d\'informations.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Erreur de Carte de Cr&eacute;dit !');
?>