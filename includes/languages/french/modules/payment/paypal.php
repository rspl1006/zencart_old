<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 5314 2006-12-21 02:23:06Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */


  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'Paypal IPN');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'Paypal IPN');
  if (IS_ADMIN_FLAG === true) {
  define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal IPN</strong> (Paiements paypal standards)<br /><font color="green">Instructions de configuration :</font><br />sur www.paypal.com, sous "Profile",<ul><li>configurer votre <strong>Pr&eacute;f&eacute;rences instantan&eacute;es d\'avis de paiement</strong> sur l\'URL :<br />'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . ' </li><li>dans <strong>Pr&eacute;f&eacute;rences de paiements de site Web</strong> placer votre <strong>URL automatique de retour</strong> &aacute;:<br />'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</li>' . (defined('MODULE_PAYMENT_PAYPAL_STATUS') ? '' : '<li>...et  cliquez « installer » en haut pour activer le module PayPal... et « &eacute;diter » pour changer votre configuration de PayPal.</li>') . '</ul><font color="green"><hr /></font>' );
  } else {  
  define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', 'Paypal');
}
  // to show the PayPal logo as the payment option name, use this:  https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif
  // to show CC icons with PayPal, use this instead:  https://www.paypal.com/en_US/i/bnr/horizontal_solution_PPeCheck.gif
  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_IMG', 'https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif');
  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_ALT', 'Commander avec PayPal');
  define('MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT', 'Payez en toute s&eacute;curit&eacute;. <br />Payez sans d&eacute;voiler vos informations financi&egrave;res.');

  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_LOGO', '<img src="' . MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_IMG . '" alt="' . MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_ALT . '" title="' . MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_ALT . '" /> &nbsp;' .  '<span class="smallText">' . MODULE_PAYMENT_PAYPAL_ACCEPTANCE_MARK_TEXT . '</span>');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Pr&eacute;nom :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nom :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Raison Sociale :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adresse Nom :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Rue :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Ville :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Adresse Etat/D&eacute;p/Prov/ :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Code Postal :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Pays :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email du Payeur :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', ' ID Ebay :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'ID du Payeur :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Statut du Payeur :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Statut de l\'Adresse :');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Type de Paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Statut du Paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Motif de Mise en Attente :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Facture :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Date de Paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Devise :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Montant Global :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Paiement des Commissions :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Taux de Change :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Produits du Panier :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Type de Trans. :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID de Trans. :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'ID de Trans. Parent :');

  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_TITLE', 'Achat sur ' . STORE_NAME);
  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DESCRIPTION_ITEMNUM', 'Re&ccedil;u de la boutique');  
  ?>