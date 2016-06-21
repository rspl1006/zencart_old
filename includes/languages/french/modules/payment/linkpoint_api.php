<?php
/**
 * @package linkpoint_api_payment_module
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @copyright Portions Copyright 2003 Jason LeBaron 
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: linkpoint_api.php 4657 2006-10-02 01:46:39Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */
 
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ADMIN_TITLE', 'Linkpoint/YourPay API');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CATALOG_TITLE', 'Carte de Credit');

  if (MODULE_PAYMENT_LINKPOINT_API_STATUS == 'True') {
    define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">Linkpoint/YourPay Login commercants</a>' . (MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_MODE_RESPONSE != 'En direct : Production' ? '<br /><br /><strong>Linkpoint/Le test du num&eacute;ro de votre YourPay API:</strong><br /><strong>Visa:</strong> 4111111111111111<br /><strong>MasterCard:</strong> 5419840000000003<br /><strong>Amex:</strong> 371111111111111<br /><strong>	
D&eacute;couvrir:</strong> 6011111111111111' : ''));
  } else { 
 define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DESCRIPTION', '<a target="_blank" href="http://www.zen-cart.com/index.php?main_page=infopages&pages_id=30">Cliquez ici pour creer un compte</a><br /><br /><a target="_blank" href="https://secure.linkpt.net/lpcentral/servlet/LPCLogin">Linkpoint/YourPay API Merchant Area</a><br /><br /><strong>Conditions:</strong><br /><hr />*<strong>LinkPoint ou votre compte YourPay</strong> (	
voir le lien ci-dessus pour s\'inscrire)<br />*<strong>cURL 	
est requis </strong>et doit &ecirc;tre compil&eacute; dans PHP par votre hebergeur<br />*<strong>Port 1129</strong>est utilis&eacute; pour la communication bidirectionnelle avec le passage, ainsi doit &ecirc;tre ouvert sur le routeur/par-feu de votre centre serveur<br />*<strong>la cl&eacute; du fichier PEM RSA </strong>Certificat Digital:<br />Pour obtenir et t&eacute;l&eacute;charger votre certificat Digital (.PEM) cl&eacute;:<br />- connexion &aacute; votre LinkPoint/votre Compte de Yourpay sur leur site Web<br />-Clic sur  « Support » dans la barre de menu principale.<br />-Clic sur le mot « centre de t&eacute;l&eacute;chargement » sous des t&eacute;l&eacute;chargements dans la bo&icirc;te lat&eacute;rale de menu.<br />-Clic sur le mot « t&eacute;l&eacute;chargement » pr&eacute;s de la section « de dossier de PEM de magasin » du c&ocirc;t&eacute; droit de la page.<br />- Clef dans l\'information n&eacute;cessaire pour commencer le t&eacute;l&eacute;chargement. 	
Vous devrez fournir votre SSN ou identification r&eacute;el d\'imp&ocirc;ts que vous avez soumis pendant le processus embarquant de compte marchand.<br />- Upload this file to includes/modules/payment/linkpoint_api/XXXXXX.pem (provided by LinkPoint - xxxxxx is your store id)');	
  }
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_TYPE', 'Type de carte de cr&eacute;dit :');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_OWNER', 'Propri&eacute;taire de la carte de cr&eacute;dit :');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_NUMBER', 'Num&eacute;ro de la carte de cr&eacute;dit :');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CVV', 'Num&eacute;ro CVV :');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration de la carte de cr&eacute;dit :');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_OWNER', '* Le nom du proprietaire de la carte de credit doit comporter au moins ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_NUMBER', '* Le numero de la carte de credit doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_JS_CC_CVV', '* Vous devez entrer le nombre de 3 ou 4 chiffres qui se trouve au dos de votre carte de credit');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR', 'Erreur de carte de credit!');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_MESSAGE', 'Votre carte a &eacute;t&eacute; refus&eacute;. Veuillez recommencer, essayer une autre carte, ou nous contacter pour plus d\'informations.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_AVS_MESSAGE', 'Adresse de facturation invalide. Veuillez recommencer, essayer une autre carte, ou nous contacter pour plus d\'informations.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_DECLINED_GENERAL_MESSAGE', 'Votre carte a &eacute;t&eacute; refus&eacute;. Veuillez recommencer, essayer une autre carte, ou nous contacter pour plus d\'informations.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_POPUP_CVV_LINK', 'En savoir plus');
  define('ALERT_LINKPOINT_API_PREAUTH_TRANS', '***AUTORISATION SEULEMENT -- LE DEBIT SERA EFFECTUE PLUS TARD PAR L\'ADMINISTRATEUR.***');
  define('ALERT_LINKPOINT_API_TEST_FORCED_SUCCESSFUL', 'NOTE: ceci etait une transaction TEST...forc&eacute;e a renvoyer une reponse ACCEPTE.');
  define('ALERT_LINKPOINT_API_TEST_FORCED_DECLINED', 'NOTE: ceci etait une transaction TEST...forc&eacute;e a renvoyer une reponse REFUSE.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTE: le module n\'est pas encore configur&eacute;)</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_PEMFILE_MISSING', '<span class="alert">&nbsp;Le certificat xyzxyz.pem n\'a pas &eacute;t&eacute; trouv&eacute;.</span>');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ERROR_CURL_NOT_FOUND', 'La librairie CURL n\'a pas &eacute;t&eacute; trouv&eacute;e - elle est requise pour le module de paiement Linkpoint API');

  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_FAILURE_MESSAGE', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e, mais nous ne pouvons pas contacter la soci&eacute;t&eacute; de la carte de cr&eacute;dit pour l\'autorisation. Veuillez contacter le propri&eacute;taire de la boutique pour un mode de paiement alternatif.');
  // note: the above error can occur as a result of:
     // - port 1129 not open for bidirectional communication 
     // - CURL is not installed or not functioning
     // - incorrect or invalid or "no" .PEM file found in modules/payment/linkpoint_api folder
     // - In general it means that there was no valid connection made to the gateway... it was stopped before it got outside your server
  
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_GENERAL_ERROR', 'Nous sommes d&eacute;sol&eacute;s. Il y a eu une erreur systeme lors du traitement de votre carte. Vos informations sont s&eacute;curis&eacute;es. Veuillez notifier le propri&eacute;taire de la boutique de ce probleme afin de trouver une solution de paiement alternative.');
  // note: the above error is a general error message which is reported when serious and known error conditions occur. Further details are given immediately following the display of this message. If database storage is enabled, details can be found there too.
  
  
  // Admin definitions

  define('MODULE_PAYMENT_LINKPOINT_API_LINKPOINT_ORDER_ID', 'N° de commande Linkpoint :');
  define('MODULE_PAYMENT_LINKPOINT_API_AVS_RESPONSE', 'R&eacute;ponse AVS :');
  define('MODULE_PAYMENT_LINKPOINT_API_MESSAGE', 'Message de r&eacute;ponse :');
  define('MODULE_PAYMENT_LINKPOINT_API_APPROVAL_CODE', 'Code d\'autorisation :');
  define('MODULE_PAYMENT_LINKPOINT_API_TRANSACTION_REFERENCE_NUMBER', 'Reference :');
  define('MODULE_PAYMENT_LINKPOINT_API_FRAUD_SCORE', 'Fraud Score:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TEST_MODE', '<span class="alert">&nbsp;(NOTE: Le module est en mode TEST)</span>');
  
 define('MODULE_PAYMENT_LINKPOINT_API_TEXT_ORDERTYPE', 'Order Type:');


// admin tools:
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_NO_MATCHING_ORDER_FOUND', 'Error: Could not find transaction details for the record specified.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_BUTTON_TEXT', 'Do Refund');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_ERROR', 'Error: You requested to do a refund but did not check the Confirmation box.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_REFUND_AMOUNT', 'Error: You requested a refund but entered an invalid amount.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CC_NUM_REQUIRED_ERROR', 'Error: You requested a refund but didn\'t enter the last 4 digits of the Credit Card number.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_INITIATED', 'Refund Initiated. Transaction ID: %s - Order ID: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_ERROR', 'Error: You requested to do a capture but did not check the Confirmation box.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_BUTTON_TEXT', 'Do Capture');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_INVALID_CAPTURE_AMOUNT', 'Error: You requested a capture but need to enter an amount.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_TRANS_ID_REQUIRED_ERROR', 'Error: You need to specify a Transaction ID.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPT_INITIATED', 'Funds Capture initiated. Amount: %s.  Transaction ID: %s - AuthCode: %s');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_BUTTON_TEXT', 'Do Void');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_ERROR', 'Error: You requested a Void but did not check the Confirmation box.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_INITIATED', 'Void Initiated. Transaction ID: %s - Order ID: %s ');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TITLE', '<strong>Refund Transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND', 'You may refund money to the customer\'s original credit card here.');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_REFUND_CONFIRM_CHECK', 'Check this box to confirm your intent: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_AMOUNT_TEXT', 'Enter the amount you wish to refund');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_TEXT', 'enter Trans.ID');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_CC_NUM_TEXT', 'Enter the last 4 digits of the Credit Card you are refunding.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TRANS_ID', 'Enter the original Transaction ID <em>(which usually looks like this: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_DEFAULT_MESSAGE', 'Refund Issued');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_REFUND_SUFFIX', 'You may refund an order up to the amount already captured. You must supply the last 4 digits of the credit card number used on the initial order.<br />Refunds cannot be issued if the card has expired. To refund an expired card, issue a credit using the merchant terminal instead.');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TITLE', '<strong>Capture Transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE', 'You may capture previously-authorized funds here:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_AMOUNT_TEXT', 'Enter the amount to Capture: ');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_CAPTURE_CONFIRM_CHECK', 'Check this box to confirm your intent: ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TRANS_ID', 'Enter the original Order Number <em>(ie: <strong>5138-i4wcYM</strong>)</em> : ');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_TEXT', 'enter Order Number');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Settled previously-authorized funds.');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_CAPTURE_SUFFIX', 'Captures must be performed within 2-10 days of the original authorization depending on your merchant bank requirement. You may  capture an order ONLY ONCE. <br />Please be sure the amount specified is correct.<br />If you leave the amount blank, the original amount will be used instead.');

  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TITLE', '<strong>Voiding Transactions</strong>');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID', 'You may void a transaction (preauth/capture/refund) which has not yet been settled. Please enter the original Transaction ID <em>(usually looks like this: <strong>1193684363</strong>)</em>:');
  define('MODULE_PAYMENT_LINKPOINT_API_TEXT_VOID_CONFIRM_CHECK', 'Check this box to confirm your intent:');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_TEXT', 'enter Trans.ID');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_TEXT_COMMENTS', 'Notes (will show on Order History):');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_DEFAULT_MESSAGE', 'Transaction Canceled');
  define('MODULE_PAYMENT_LINKPOINT_API_ENTRY_VOID_SUFFIX', 'Voids must be completed before the original transaction is settled in the daily batch, which occurs at 7:00PM Pacific Time.');

?>