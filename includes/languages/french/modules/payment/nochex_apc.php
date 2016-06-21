<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 4834 2006-10-25 03:24:31Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

  define('MODULE_PAYMENT_NOCHEX_TEXT_ADMIN_TITLE', 'Nochex APC');
  define('MODULE_PAYMENT_NOCHEX_TEXT_CATALOG_TITLE', 'Carte bancaire ou carte de cr&eacute;dit (Nochex)');
  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_NOCHEX_TEXT_DESCRIPTION', '<strong>Nochex APC</strong><br /><br />Ce module est fait pour les vendeurs Nochex Sellers et marchands Nochex, et utilise la derni&egrave;re page de paiement fournise par Nochex pour apporter &agrave; vos clients un paiement simple et rapide. Tr&egrave;s peu de configuration requise, mais veuillez lire la documentation avant de l\'utiliser.' );
  } else {
    define('MODULE_PAYMENT_NOCHEX_TEXT_DESCRIPTION', '<strong>Nochex</strong>');
  }
  define('MODULE_PAYMENT_NOCHEX_ENTRY_TRANSACTION_ID', 'Transaction ID');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_TRANSACTION_DATE', 'Transaction Date');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_TO_EMAIL', 'Paiement &agrave;');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_FROM_EMAIL', 'Paiement de');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_ORDER_ID', 'ID commande');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_CUSTOM', 'Champ(s) perso');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_AMOUNT', 'Montant pay&eacute;');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_SECURITY_KEY', 'Cl&eacute; de s&eacute;curit&eacute;');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_STATUS', 'Etat de paiement');
  define('MODULE_PAYMENT_NOCHEX_ENTRY_NOCHEX_RESPONSE', 'R&eacute;ponse Nochex');
  define('MODULE_PAYMENT_NOCHEX_PURCHASE_DECRIPTION_TITLE', 'Achat sur ' . STORE_NAME );

  define('MODULE_PAYMENT_NOCHEX_NOT_CONFIGURED_MERCHANT_ID', ' <span class="alert"> (non configur&eacute; - ID marchand requis)</span>');
?>