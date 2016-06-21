<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 5314 2006-12-21 02:23:06Z drbyte $
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'PayPal IPN');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'Paypal IPN');
  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal IPN</strong> (Basic PayPal service)<br /><a href="https://www.paypal.com/it/mrb/pal=E6C2D32DZ9ZMN" target="_blank">Gestisci il tuo conto PayPal.</a><br /><br /><font color="green">Istruzioni Configurazione:</font><br />1. <a href="https://www.paypal.com/it/mrb/pal=E6C2D32DZ9ZMN" target="_blank">Registra un account PayPal - click qui.</a>
<br />2. Nel tuo account PayPal, in "Profilo",<ul><li>setta nelle <strong>Preferenze di notifica istantanea dei pagamenti</strong> URL a:<br />'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '<br />
(Se altra URL &egrave; gi&agrave; utilizzata, lascia quella.)<br /><span class="alert">Assicurati che il Checkbox che abilita IPN sia flaggato!</span></li><li>in <strong>Preferenze di pagamento Sito</strong> setta <strong>indirizzo URL</strong> di ritorno automatico a:<br />'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</li>' . (defined('MODULE_PAYMENT_PAYPAL_STATUS') ? '' : '<li>... e click "install" sopra per permettere il supporto PayPal ... e "modifica" per trasmettere a Zen Cart i tuoi settaggi PayPal.</li>') . '</ul><font color="green"><hr /><strong>Requisiti:</strong></font><br /><hr />*<strong>Account PayPal </strong> (<a href="https://www.paypal.com/it/mrb/pal=E6C2D32DZ9ZMN" target="_blank">click per iscrizione</a>)<br />*<strong>*<strong>Porta 80</strong> utilizzata per comunicazioni bidirezionali con il gateway, deve essere aperta da parte del router/firewall o servizio di hosting<br />*<strong>PHP allow_url_fopen()</strong> deve essere abilitato<br />*<strong>Settaggi</strong> devono essere configurati come descritto.' );
  } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  }

  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'First Name:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Last Name:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Business Name:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Address Name:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Address Street:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Address City:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Address State:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Address Zip:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Address Country:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Payer Email:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Payer ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Payer Status:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Address Status:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Payment Type:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Payment Status:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Pending Reason:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Invoice:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Payment Date:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Currency:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Gross Amount:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Payment Fee:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Exchange Rate:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Cart items:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Trans. Type:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Trans. ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Parent Trans. ID:');


  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DECRIPTION_TITLE', STORE_NAME . ' Purchase');

?>