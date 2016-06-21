<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypaldp.php 7334 2007-10-31 11:58:58Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_WPP', 'Paiement Paypal sur site marchand Pro');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_TITLE_PRO20', 'Paiements sur site marchand Pro Edition (FR)');

  if (IS_ADMIN_FLAG === true) {
    define('MODULE_PAYMENT_PAYPALDP_TEXT_ADMIN_DESCRIPTION', '<strong>Paiement Paypal sur site marchand Pro</strong>%s<br />' . '<a href="http://www.zen-cart.com/partners/paypal" target="_blank">G&eacute;rer votre compte Paypal.</a>' . '<br /><br /><font color="green">Instructions de configuration:</font><br /><span class="alert">1. </span><a href="http://www.zen-cart.com/partners/paypal" target="_blank">Cr&eacute;er un compte Paypal - cliquez ici.</a><br />' . 
(defined('MODULE_PAYMENT_PAYPALDP_STATUS') ? '' : '... et cliquez sur "installer" ci-dessous pour activer les paiements Express par Paypal.</br>') . 
(!defined('MODULE_PAYMENT_PAYPALWPP_APISIGNATURE') || MODULE_PAYMENT_PAYPALWPP_APISIGNATURE == '' ? '<span class="alert">2. </span><strong>Acc&egrave;s &agrave; l\'API</strong> &agrave; partir de l\'option Acc&egrave;s &agrave; l\'API dans les pr&eacute;f&eacute;rences de votre compte Paypal. Ce module utilises l\'option <strong>API Signature</strong> -- vous aurez besoin d\'un nom d\'utilisateur, mot de passe et signature &agrave; entrer dans les champs ci-dessous.' : '<span class="alert">2. </span>Assurez-vous d\'avoir entr&eacute; les informations de s&eacute;curit&eacute; correctes nom d\'utilisateur / mot de passe, etc.') .
'<font color="green"><hr /><strong>El&eacute;ments requis:</strong></font><br /><hr />*<strong>Express Checkout</strong> doit &ecirc;tre install&eacute; et activ&eacute; pour utiliser le Paiement marchands Pro, comme indiqu&eacute; dans les conditions du service Paypal. <br /><hr />' );
  }

  define('MODULE_PAYMENT_PAYPALDP_TEXT_DESCRIPTION', 'Carte Bancaire');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TITLE', 'Carte Bancaire');
  define('MODULE_PAYMENT_PAYPALDP_DP_TEXT_TYPE', 'Carte Bancaire (WPP)');
  define('MODULE_PAYMENT_PAYPALDP_PF_TEXT_TYPE', 'Carte Bancaire (PF)');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_HEADING', 'Nous sommes d&eacute;sol&eacute;s, mais nous n\'avons pas pu proc&eacute;der &agrave; votre paiement par carte bancaire.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CARD_ERROR', 'Les informations de votre carte bancaire contiennent une erreur.  Veuillez v&eacute;rifier et r&eacute;essayer svp.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_FIRSTNAME', 'Pr&eacute;nom du propri&eacute;taire de la carte:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_LASTNAME', 'Nom du propri&eacute;taire de la carte:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_OWNER', 'Propri&eacute;taire de la carte:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_TYPE', 'Type de carte:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_NUMBER', 'Num&eacute;ro de la CB:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_EXPIRES', 'Date d\'expiration de la CB:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_ISSUE', 'Date d\'&eacute;mission de la CB:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_MAESTRO_ISSUENUMBER', 'Date d\'&eacute;mission Maestro :');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER', 'Num&eacute;ro CVV:');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CREDIT_CARD_CHECKNUMBER_LOCATION', '(3 derniers chiffres au dos de votre CB)');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_DECLINED', 'Votre carte bancaire a &eacute;t&eacute; refus&eacute;e. Veuillez essayer une autre carte ou contactez votre banque pour plus d\'informations.');
  define('MODULE_PAYMENT_PAYPALDP_CANNOT_BE_COMPLETED', 'Nous n\'avons pas pu valider votre commande. Veuillez s&eacute;lectionner un autre mode de paiement, ou nous contacter pour trouver une solution.');
  define('MODULE_PAYMENT_PAYPALDP_INVALID_RESPONSE', 'Nous n\'avons pas pu valider votre commande. Veuillez s&eacute;lectionner un autre mode de paiement, ou nous contacter pour trouver une solution.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_ERROR', 'Une erreur est survenue en contactant l\'organisme de paiement. Veuillez r&eacute;essayer, s&eacute;lectionner une autre mode de paiement, ou nous contacter.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_MESSAGE', 'Cher propri&eacute;taire de boutique,' . "\n" . 'Une erreur est survenue en essayant d\'initialiser une transaction de paiement WPP. Par courtoisie, un "num&eacute;ro" d\'erreur seulement a &eacute;t&eacute; affich&eacute; au client.  Vous trouverez les d&eacute;tails de cette erreur ci-dessous.' . "\n\n");
  define('MODULE_PAYMENT_PAYPALDP_TEXT_EMAIL_ERROR_SUBJECT', 'ALERT: Erreur de paiement PayPal Direct');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ADDR_ERROR', 'Les informations de votre adresse ne semblent pas valides. Veuillez s&eacute;lectionner ou ajouter une adresse diff&eacute;rente, et r&eacute;essayer.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INSUFFICIENT_FUNDS_ERROR', 'PayPal n\'a pas pu solder cette transaction correctement. Veuillez choisir une autre option de paiement ou changer les options de solde dans votre compte Paypal avant de proc&eacute;der au paiement.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_ERROR', 'Une erreur est survenue en essayant de traiter votre carte bancaire. Veuillez r&eacute;essayer, s&eacute;lectionner un autre mode de paiement, ou nous contacter.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_CARD', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e, mais nous n\'acceptons pas le type de carte bancaire que vous avez essay&eacute; d\'utiliser. Veuillez utiliser une autre carte bancaire ou v&eacute;rifier que les informations que vous avez entr&eacute;es sont correctes, ou contactez-nous.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_BAD_LOGIN', 'Il y a eu un probl&egrave;me &agrave; la v&eacute;rification de votre compte. Veuillez r&eacute;essayer.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_OWNER', '* Le nom du propri&eacute;taire de la CB doit contenir au moins ' . CC_OWNER_MIN_LENGTH . ' caract&egrave;res.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_NUMBER', '* Le num&eacute;ro de carte bancaire doit contenir au moins ' . CC_NUMBER_MIN_LENGTH . ' caract&egrave;res.\n');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_JS_CC_CVV', '* Le num&eacute;ro CVV &agrave; 3 ou 4 chiffres doit provenir du dos de la carte bancaire.\n');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVS_FAILURE_TEXT', 'ATTENTION: Echec de la v&eacute;rification d\'adresse. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_CVV_FAILURE_TEXT', 'ATTENTION: Echec de la v&eacute;rification du code CVV. ');
  define('MODULE_PAYMENT_PAYPALDP_ERROR_AVSCVV_PROBLEM_TEXT', ' Commande en attente d\'une validation par le propri&eacute;taire de la boutique.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_STATE_ERROR', 'L\'&eacute;tat renseign&eacute; dans votre compte est invalide.  Veuillez vous rendre dans les pr&eacute;f&eacute;rences de votre compte et le changer.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_WPP_ACCOUNT_ERROR', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e. Le paiement n\'a pas pu &ecirc;tre initialis&eacute; car le compte Paypal configur&eacute; par le propri&eacute;taire de la boutique n\'est pas un compte Marchand Pro ou il n\'a pas acc&egrave;s au service. Veuillez choisir un autre mode de paiement pour votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_US_WPP_ACCOUNT_ERROR', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e. Le paiement n\'a pas pu &ecirc;tre initialis&eacute; car le compte PayPal configur&eacute; par le propri&eacute;taire de la boutique n\'est pas un compte Marchand Pro US ou il n\'a pas acc&egrave;s au service. Veuillez choisir un autre mode de paiement pour votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_UKWPP_ACCOUNT_ERROR', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e. Le paiement n\'a pas pu &ecirc;tre initialis&eacute; car le compte PayPal configur&eacute; par le propri&eacute;taire de la boutique n\'est pas un compte Marchand Pro 2.0 (UK) ou il n\'a pas acc&egrave;s au service. Veuillez choisir un autre mode de paiement pour votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_SANDBOX_VS_LIVE_ERROR', 'Nous nous excusons pour la g&ecirc;ne occasionn&eacute;e. Les param&egrave;tres du compte Paypal ne sont pas encore configur&eacute;s, ou les informations de s&eacute;curit&eacute; des API sont incorrectes. Nous ne pouvons pas terminer votre transaction. Veuillez notifier le propri&eacute;taire afin qu\'il corrige ce probl&egrave;me.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_WPP_BAD_COUNTRY_ERROR', 'Nous sommes d&eacute;sol&eacute; -- le compte PayPal configur&eacute; par le propri&eacute;taire de la boutique est bas&eacute; dans un pays qui n\'est pas pris en charge par ce mode de paiement pour le moment. Veuillez choisir un autre mode de paiement pour finaliser votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_NOT_CONFIGURED', '<span class="alert">&nbsp;(NOTE: Le module n\'est pas encore configur&eacute;)</span>');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GETDETAILS_ERROR', 'Il y a eu un probl&egrave;me pour r&eacute;cuperer les d&eacute;tails de la transaction. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_TRANSSEARCH_ERROR', 'Il y a eu un probl&egrave;me pour retrouver la transaction avec les crit&egrave;res sp&eacute;cifi&eacute;s. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_ERROR', 'Il y a eu un probl&egrave;me pour vider pour la transaction. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_ERROR', 'Il y a eu un probl&egrave;me pour rembourser le montant de la transaction sp&eacute;cifi&eacute;e. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_ERROR', 'Il y a eu un probl&egrave;me &agrave; l\'autorisation la transaction. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_ERROR', 'Il y a eu un probl&egrave;me pour pr&eacute;lever la transaction. ');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUNDFULL_ERROR', 'Votre demande de remboursement a &eacute;t&eacute; rejet&eacute;e par PayPal.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_REFUND_AMOUNT', 'Vous avez demand&eacute; un remboursement partiel mais n\'avez pas sp&eacute;cifi&eacute; un montant.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_FULL_CONFIRM_ERROR', 'Vous avez demand&eacute; un reboursement complet mais vous n\'avez pas cocher la case de confirmation pour confirmer votre demande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_AUTH_AMOUNT', 'Vous avez demand&eacute; une autorisation mais vous n\'avez pas sp&eacute;cifi&eacute; de montant.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_CAPTURE_AMOUNT', 'Vous avez demand&eacute; un pr&eacute;l&egrave;vement mais n\'avez pas sp&eacute;cifi&eacute; de montant.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_VOID_CONFIRM_CHECK', 'Confirmer');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_CONFIRM_ERROR', 'Vous avez demand&eacute; de vider une transaction mais n\'avez pas confirm&eacute; votre intention en cochant la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_AUTH_FULL_CONFIRM_CHECK', 'Confirmer');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_CONFIRM_ERROR', 'Vous avez demand&eacute; une autorisation mais n\'avez pas confirm&eacute; votre intention en cochant la case de confirmation.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_ERROR', 'Vous avez demand&eacute; un pr&eacute;l&egrave;vement de fonds mais n\'avez pas confirm&eacute; votre intention en cochant la case de confirmation.');

  define('MODULE_PAYMENT_PAYPALDP_TEXT_REFUND_INITIATED', 'Remboursement PayPal initi&eacute; pour %s. ID Transaction: %s. Actualisez la page pour voir la confirmation des d&eacute;tails mis &agrave; jour dans la rubrique Historique des commandes / commentaires.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_AUTH_INITIATED', 'Autorisation PayPal initi&eacute;e pour %s. Actualisez la page pour voir la confirmation des d&eacute;tails mis &agrave; jour dans la rubrique Historique de commandes / Commentaires.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPT_INITIATED', 'Pr&eacute;l&egrave;vement Paypal initi&eacute; pour %s. ID du re&ccedil;u: %s. Actualisez la page pour voir la confirmation des d&eacute;tails mis &agrave; jour dans la rubrique Historique de commandes / Commentaires.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_VOID_INITIATED', 'Annulation PayPal initi&eacute;e. ID Transaction: %s. Actualisez la page pour voir la confirmation des d&eacute;tails mis &agrave; jour dans la rubrique Historique de commandes / Commentaires.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_GEN_API_ERROR', 'Il y a eu une erreur dans la tentative de transaction. Veuillez lire le guide de r&eacute;f&eacute;rence API ou les logs de transaction pour des informations d&eacute;taill&eacute;es.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_INVALID_ZONE_ERROR', 'Nous nous excusons de la g&ecirc;ne occasionn&eacute;e; pour le moment nous ne pouvons pas utiliser ce mode de paiement pour le lieu g&eacute;ographique que vous avez s&eacute;lectionn&eacute; comme adresse dans votre compte. Veuillez continuer en utilisant un mode de paiement diff&eacute;rent pour finaliser votre commande.');


  // These are used for displaying raw transaction details in the Admin area:
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Pr&eacute;nom:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Nom:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Soci&eacute;t&eacute;:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Addresse 1:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Addresse 2:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Ville:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Etat / d&eacute;partement:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Code postal:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Pays:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Email de l\'acheteur:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Identifiant Ebay:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Identifiant de l\'acheteur:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Statut de l\'acheteur:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Statut de l\'adresse:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Type de paiement:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Statut du paiement:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Raison de la mise en attente:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Facture:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Date de paiement:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Devise:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Montant brut:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Paiement des taxes:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Taux de change:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Articles du panier:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Trans. Type:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'Trans. ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Trans. ID parente:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TITLE', '<strong>Remboursement de la commande</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_FULL', 'Si vous voulez rembourser cette commande enti&egrave;rement, cliquez ici:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_FULL', 'Emettre un remboursement entier');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_BUTTON_TEXT_PARTIAL', 'Emettre un remboursement partiel');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_FULL_OR', '<br />... ou entrez le partiel ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PAYFLOW_TEXT', 'Entrez le ');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_PARTIAL_TEXT', 'montant du remboursement ici et cliquez sur Remboursement Partiel');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_SUFFIX', '*Un remboursement total ne doit pas &ecirc;tre fait apr&egrave;s un remboursement partiel.<br />*Plusieurs remboursements partiels sont autoris&eacute;s &agrave; hauteur du solde non rembours&eacute; restant.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note &agrave; afficher au client:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Rembours&eacute; par le propri&eacute;taire de la boutique.');
  define('MODULE_PAYMENT_PAYPALWPP_TEXT_REFUND_FULL_CONFIRM_CHECK','Confirmer: ');


  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_TITLE', '<strong>Autorisations de commande</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_PARTIAL_TEXT', 'Si vous voulez autoriser une partie de cette commande, entrez le montant ici:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_BUTTON_TEXT_PARTIAL', 'Lancer l\'Autorisation');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTH_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_TEXT_COMMENTS', '<strong>Note &agrave; afficher au client:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_REFUND_DEFAULT_MESSAGE', 'Rembours&eacute; par le propri&eacute;taire de la boutique.');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TITLE', '<strong>Autorisations de pr&eacute;l&egrave;vement</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FULL', 'Si vous voulez pr&eacute;lever tout ou une partie du montant autoris&eacute; pour cette commande, entrez le montant &agrave; pr&eacute;lever et s&eacute;lectionner s\'il s\'agit du pr&eacute;levement final pour cette commande. Cochez la case de confirmation avant de soumettre votre demande de pr&eacute;levement.<br />');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_BUTTON_TEXT_FULL', 'Faire un pr&eacute;l&egrave;vement');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_AMOUNT_TEXT', 'Montant &agrave; pr&eacute;lever:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_FINAL_TEXT', 'Est-ce le pr&eacute;l&egrave;vement final?');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_SUFFIX', '');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_TEXT_COMMENTS', '<strong>Note &agrave; afficher au client:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CAPTURE_DEFAULT_MESSAGE', 'Merci pour votre commande.');
  define('MODULE_PAYMENT_PAYPALDP_TEXT_CAPTURE_FULL_CONFIRM_CHECK','Confirmer: ');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TITLE', '<strong>Annuler Autorisations de commande</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID', 'Si vous voulez annuler une autorisation, entrez l\'Identifiant de l\'autorisation ici, et confirmez:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_TEXT_COMMENTS', '<strong>Note &agrave; afficher au client:</strong>');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_DEFAULT_MESSAGE', 'Merci de votre int&eacute;r&ecirc;t pour notre boutique en ligne.');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_BUTTON_TEXT_FULL', 'Faire une annulation');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_VOID_SUFFIX', '');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_TRANSSTATE', 'Trans. State:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AUTHCODE', 'Auth. Code:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSADDR', 'AVS Address match:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_AVSZIP', 'AVS ZIP match:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CVV2MATCH', 'CVV2 match:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_DAYSTOSETTLE', 'Days to Settle:');




?>