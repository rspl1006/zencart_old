<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypalwpp.php 6528 2007-06-25 23:25:27Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_EC', 'Paiement Express par Paypal');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_WPP', 'Paiement Express par Paypal (WPP)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PRO20', 'Paiement express par paypal (Payflow Edition UK)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_EC', 'Passerelle PayPal Payflow Pro');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_TITLE_PF_GATEWAY', 'PayPal Payflow Pro + Paiement Express');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADMIN_DESCRIPTION', '<strong>Paiement Express par Paypal</strong>%s<br />' . (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' ? '<a href="https://manager.paypal.com/loginPage.do?partner=ZenCart" target="_blank">G&eacute;rer votre compte Paypal.</a>' : '<a href="http://www.zen-cart.com/partners/paypal" target="_blank">G&eacute;rer votre compte Paypal.</a>') . '<br /><br /><font color="green">Instructions de Configuration :</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal" target="_blank">Cr&eacute;er un compte Paypal - cliquez ici.</a><br />' . 
(defined('MODULE_PAYMENT_PAYPALWPP_STATUS') ? '' : '... et cliquez sur "install" ci-dessous pour activer le Paiement express par PayPal.</br>') . 
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' && (!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '') ? '<span class="alert">2. </span>Aller dans <strong>Acc&egrave;s &agrave; l\'API</strong> dans vos pr&eacute;f&eacute;rences paypal. Ce module utilise l\'option <strong>Signature API</strong> -- vous aurez donc besoin d\'un nom d\'utilisateur, mot de passe et signature &agrave; entrer dans les champs ci-dessous.' : (substr(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE,0,7) == 'Payflow' && (!defined('MODULE_PAYMENT_PAYPALWPP_PFUSER') || MODULE_PAYMENT_PAYPALWPP_PFUSER == '') ? '<span class="alert">2. </span><strong>Acc&egrave;s &agrave; PAYFLOW</strong> Ce module n&eacute;cessite d\'entrer vos param&egrave;tres <strong>PAYFLOW Partenaire+Vendeur+Utilisateur+Mot de passe</strong> dans les 4 champs ci-dessous. Cela sera utilis&eacute; pour communiquer avec le syst&egrave;me Payflow et autoriser les transactions sur votre compte.' : '<span class="alert">2. </span>Assurez-vous d\'avoir entr&eacute; les donn&eacute;es de s&eacute;curit&eacute; n&eacute;cessaires pour le nom d\'utilisateur / mot de passe, etc. ci-dessous.') ) . 
(MODULE_PAYMENT_PAYPALWPP_MODULE_MODE == 'PayPal' ? '<br /><span class="alert">3. </span>Dans votre compte Paypal, activez la <strong>Notification instantan&eacute;e de paiement</strong>:<br />dans vos "Pr&eacute;f&eacute;rences", choisissez <em>Pr&eacute;f&eacute;rences de Notification instantan&eacute;e de paiement</em><ul style="margin-top: 0.5;"><li>cliquez sur la case activer IPN</li><li>S\'il n\'y a pas d&eacute;j&agrave; une URL specifi&eacute;e, entrez l\'url suivante:<br />'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . '</li></ul>' : '') . 
'<font color="green"><hr /><strong>Configuration requise:</strong></font><br /><hr />*<strong>CURL</strong> est utilis&eacute; pour communiquer dans les deux sens avec la passerelle, il doit donc &ecirc;tre activ&eacute; sur votre serveur d\'h&eacute;bergement (si vous avez besoin d\'utiliser un proxy avec CURL, r&eacute;glez le dans les param&egrave;tres CURL sous Admin->Configuration->Ma boutique.)<br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DESCRIPTION', '<strong>PayPal</strong>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_TITLE', 'Carte bancaire');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TITLE', 'PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_EC_TEXT_TYPE', 'Proc&eacute;dure Rapide PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_DP_TEXT_TYPE', 'Paiement Direct PayPal');
  define('MODULE_PAYMENT_PAYPALWPP_ERROR_HEADING', 'Nous sommes d&eacute;sol&eacute;, votre carte bancaire n\'a pas pu &ecirc;tre utilis&eacute;e.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CARD_ERROR', 'Les informations concernant votre carte bancaire contiennent une erreur. Merci de r&eacute;essayer apr&egrave;s v&eacute;rification.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_FIRSTNAME', 'Pr&eacute;nom :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_LASTNAME', 'Nom :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_OWNER', 'Nom du propri&eacute;taire de la carte :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_TYPE', 'Type de carte :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_NUMBER', 'Num&eacute;ro :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_ISSUE', 'Date d\'&eacute:mission de la carte :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Num&eacute;ro CVV :');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(au dos de la carte bancaire)');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_DECLINED', 'Votre carte bancaire a &eacute;t&eacute; refus&eacute;e. Merci d\'essayer avec une autre carte ou de contacter votre banque pour plus d\'information.');
  define('MODULE_PAYMENT_PAYPALWPP_INVALID_RESPONSE', 'Nous n\'avons pas pu traiter votre commande. Merci de r&eacute;essayer, de s&eacute;lectionner un autre mode de paiement, ou contactez-nous pour de l\'aide.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_ERROR', 'Une erreur s\'est produite lors du contact avec le processus de traitement des paiements. Merci de r&eacute;essayer, de s&eacute;lectionner un autre mode de paiement, ou contacter-nous pour de l\'aide.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ADDR_ERROR', 'L\'adresse que vous avez indiqu&eacute;e ne semble pas &ecirc;tre valide ou n\'a pu &ecirc;tre confondue. Merci de s&eacute;lectionner ou d\'ajouter une adresse diff&eacute;rente et de r&eacute;essayer.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CONFIRMEDADDR_ERROR', 'The address you selected at PayPal is not a Confirmed address. Please return to PayPal and select or add a confirmed address and try again.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ERROR', 'Une erreur s\'est produite lors du traitement de votre carte de cr&eacute;dit. Merci de r&eacute;essayer, de s&eacute;lectionner un autre mode de paiement, ou contacter-nous pour de l\'aide.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_CARD', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e, mais la carte de cr&eacute;dit que vous voulez utiliser n\'est pas du type que nous acceptons. Merci d\'utiliser une autre carte de cr&eacute;dit.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BAD_LOGIN', 'Un probl&eacute;me est apparu lors de la validation de votre compte. Merci de r&eacute;essayer.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_OWNER', '* Le nom du propri&eacute;taire de la carte de cr&eacute;dit doit comporter au moins ' . CC_OWNER_MIN_LENGTH . ' charact&egrave;res.\n'); //popup
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_JS_CC_NUMBER', '* Le num&eacute;ro de carte de cr&dit doit comporter au moins ' . CC_NUMBER_MIN_LENGTH . ' charact&egrave;res.\n'); //popup
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_EC_HEADER', 'Paiement rapide est s&eacute;curis&eacute; avec PayPal:');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_STATE_ERROR', 'L\'&Eacute;tat associ&eacute; &agrave; votre compte n\'est pas valide. Merci de vous rendre dans la configuration de votre compte et de le modifier.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e. La proc&eacute;dure de paiement n\'a pu &ecirc;tre lanc&eacute;e car le compte PayPal du commer&ccedil;ant n\'est pas du type "Paiements Web Pro PayPal" ou les services de la passerelle PayPal n\'ont pas &eacute;t&eacute; acquis. Merci de s&eacute;lectionner un autre mode de paiement pour votre commande.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e. Les informations d\'authentification du compte PayPal ne sont pas encore configur&eacute;s, ou les informations de s&eacute;curit&eacute; de l\'API ne sont pas correctes. Votre transaction n\'a pu &ecirc;tre compl&eacute;t&eacute;e. Merci de nous contacter pour corriger le probl&egrave;me.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_WPP_BAD_COUNTRY_ERROR', 'D&eacute;sol&eacute; -- le compte PayPal configur&eacute; par le commercant se base sur un pays qui n\'est actuellement pas support&eacute; par le Paiement Web Pro. Merci de s&eacute;lectionner un autre mode de paiement pour compl&eacute;ter votre commande.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTE : le module n\'est pas encore configur&eacute;)</span>');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GETDETAILS_ERROR', 'Un probl&egrave;me est apparue lors de la r&eacute;cup&eacute;ration des d&eacute;tails de la transaction. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_ERROR', 'Un probl&eacute;me est apparue lors de l\'annulation de la transaction. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_ERROR', 'Un probl&eacute;me est apparue lors du remboursement du montant de la transaction sp&eacute;cifi&eacute;. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_ERROR', 'Un probl&eacute;me est apparue lors de l\'autorisation de la transaction. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_ERROR', 'Un probl&eacute;me est apparue lors de l\'enregistrement de la transaction. ');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUNDFULL_ERROR', 'Votre demande de remboursement a &eacute;t&eacute; refus&eacute;e par PayPal.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_REFUND_AMOUNT', 'Vous avez demand&eacute; un remboursement partiel mais vous n\'avez pas pr&eacute;cis&eacute; le montant.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Vous avez demand&eacute; un remboursement total mais vous avez oubli&eacute; de cocher la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_AUTH_AMOUNT', 'Vous avez demand&eacute; une autorisation sans pr&eacute;ciser le montant.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_CAPTURE_AMOUNT', 'Vous avez demand&eacute; un enregistrement sans pr&eacute;ciser le montant.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmer');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_ERROR', 'Vous avez demand&eacute; &agrave; annuler une transaction mais vous n\'avez pas coch&eacute; la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmer');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_CONFIRM_ERROR', 'Vous avez demand&eacute; une autorisation mais vous n\'avez pas coch&eacute; la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Vous avez demand&eacute; un enregistrement total mais vous n\'avez pas coch&eacute; la case de confirmation.');

  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_INITIATED', 'Remboursement PayPal pour %s en cours. Num&eacute;ro de transaction : %s. Rafra&icirc;chissez la page pour voir les mises &agrave; jour dans la section Historique/commentaires des commandes.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_INITIATED', 'Autorisation PayPal pour %s en cours. Rafra&icirc;chissez la page pour voir les mises &agrave; jour dans la section Historique/commentaires des commandes.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPT_INITIATED', 'Enregistrement PayPal pour %s en cours. Num&eacute;ro de re&ccedil;u : %s. Rafra&icirc;chissez la page pour voir les mises &agrave; jour dans la section Historique/commentaires des commandes.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_INITIATED', 'Demande d\'annulation PayPal en cours. Num&eacute;ro de transaction : %s. Rafra&icirc;chissez la page pour voir les mises &agrave; jour dans la section Historique/commentaires des commandes.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_GEN_API_ERROR', 'Une erreur est survenue lors de la transaction. Merci de consulter le guide de r&eacute;f&eacute;rence de l\'API ou les logs de la transaction pour plus de d&eacute;tails.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_INVALID_ZONE_ERROR', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e ; cependant, &agrave; l\'heure actuelle PayPal ne peut &ecirc;tre utilis&eacute; depuis la zone g&eacute;ographique indiqu&eacute;e dans les informations de votre compte PayPal. Merci de s&eacute;lectionner un mode de paiement disponible pour compl&eacute;ter votre commande.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_ORDER_ALREADY_PLACED_ERROR', 'Il semblerait que votre commande est &eacte;t&eacute; valid&eacute;e deux fois. Merci de v&eacute;rifier dans Votre Compte les d&eacute;tails de votre commande. Merci de nous contacter si votre commande n\'appara&icirc;t pas mais que celle-ci ait d&eacute;j&agrave; &eacute;t&eacute; pay&eacute;e depuis votre compte PayPal. Ainsi, nous pourrons v&eacute;rifier nos enregistrements et corriger l\'erreur.');

  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_TXT', 'R&eacute;gler avec PayPal. Le plus s&ucirc;r et le plus simple moyen de paiement.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_BUTTON_ALTTEXT', 'Cliquer ici pour payer par proc&eacute;dure rapide PayPal');

// EC buttons -- Do not change these values:
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_IMG', 'https://www.paypal.com/fr_FR/i/btn/btn_xpressCheckout.gif');
  define('MODULE_PAYMENT_PAYPALWPP_EC_BUTTON_SM_IMG', 'https://www.paypal.com/fr_FR/i/btn/btn_xpressCheckoutsm.gif');
  define('MODULE_PAYMENT_PAYPALWPP_MARK_BUTTON_IMG', 'https://www.paypal.com/fr_FR/i/logo/PayPal_mark_37x23.gif');

////////////////////////////////////////
// Styling of the PayPal Payment Page. Uncomment to customize.  Otherwise, simply create a Custom Page Style at PayPal and mark it as Primary or name it in your Zen Cart PayPal WPP settings.
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_IMAGE', '');  // this should be an HTTPS URL to the image file
  //define('MODULE_PAYMENT_PAYPALWPP_PAGECOLOR', '');  // 6-digit hex value
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_BORDER_COLOR', '');  // 6-digit hex value
  //define('MODULE_PAYMENT_PAYPALWPP_HEADER_BACK_COLOR', ''); // 6-digit hex value
////////////////////////////////////////


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Pr&eacute;nom :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nom :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Organisation :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Adresse :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Rue :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Ville :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', '&Eacute;tat :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Code postal :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Pays :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'E-mail :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Identifiant Ebay :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Identifiant du payeur :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Statut du payeur :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Statut de l\'adresse :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Type de paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Statut du paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Mise en attente pour la raison:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Facture:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Date de paiement :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Devise :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'paiement Global:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Comissions de paiement:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Taux de change:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Articles du panier :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Type de transaction :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Num&eacute;ro de transaction :');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Parent Trans. ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Remboursement de commande</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Si vous souhaitez rembourser ce paiement enti&egrave;rement, cliquez ici:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Rembourser totalement');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Rembourser Partiellement');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', '<br />... ou entrez le montant du remboursement partiel ici et cliquez sur Rembourser Partiellement');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*Un remboursement complet ne doit pas &ecirc;tre effectu&eacute; apr&egrave;s un remboursement partiel.<br />*Plusieurs remboursements partiels sont autoris&eacute;s jusqu\'&agrave; hauteur du solde restant.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Remarque &agrave; afficher au client:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Rembours&eacute; par le propri&eacute;taire de la boutique.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','Confirmer: ');


  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorisations de paiement</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si vous voulez autoriser une partie de ce paiement, entrez le montant ici:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Valider l\'Autorisation');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note &agrave; afficher au client:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Rembours&eacute; par le propri&eacute;taire de la boutique.');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Autorisations de pr&eacute;l&egrave;vement</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si vous voulez pr&eacute;lever tout ou une partie du montant autoris&eacute; pour cette commande, entrez le montant du pr&eacute;l&egrave;vement et choisissez s\'il s\'agit du dernier pr&eacute;levement pour cette commande ou non.  Cochez la case de confirmation avant de valider votre demande de pr&eacute;l&egrave;vement.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Faire le pr&eacute;l&egrave;vement');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Montant &agrave; pr&eacute;lever:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'Est-ce le dernier pr&eacute;l&egrave;vement?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Note &agrave; afficher au client:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Nous vous remercions pour votre achat.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmer : ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Annuler les autorisations de paiement</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Sivous souhaitez annuler une autorisation, entrez l\'IDentifiant de l\'autorisation ici, et confirmez:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Note &agrave; afficher au client:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Merci de votre confiance. A bient&ocirc;t.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Annuler');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');



// this text is used to announce the username/password when the module creates the customer account and emails data to them:
  define('EMAIL_EC_ACCOUNT_INFORMATION', 'Les informations d\'identification de votre compte, qui pourront &ecirc;tre utilis&eacute;es pour suivre vos commandes, sont les suivantes:');



?>