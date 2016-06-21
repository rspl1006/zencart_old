<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 4087 2006-08-07 04:46:08Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

  define('NAVBAR_TITLE_1', 'Commande - Etape 1');
  define('NAVBAR_TITLE_2', 'Mode de Paiement - Etape 2');

  define('HEADING_TITLE', 'Etape 2 sur 3 - Information de Paiement');

  define('TABLE_HEADING_BILLING_ADDRESS', 'Adresse de Facturation');
  define('TEXT_SELECTED_BILLING_DESTINATION', 'Voici votre Adresse de facturation sur la gauche. Vous pouvez la modifier en cliquant sur le bouton <em>changer l\'adresse</em>.');
  define('TITLE_BILLING_ADDRESS', 'Adresse de facturation :');

  define('TABLE_HEADING_PAYMENT_METHOD', 'Mode de Paiement');
  define('TEXT_SELECT_PAYMENT_METHOD', 'Veuillez choisir un mode de paiement pour votre commande.');
  define('TITLE_PLEASE_SELECT', 'Veuillez S&eacute;lectionner');
  define('TEXT_ENTER_PAYMENT_INFORMATION', '');
  define('TABLE_HEADING_COMMENTS', 'Instructions sp&eacute;ciales ou Commentaires');
  
  define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Non disponible actuellement');
  define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">D&eacute;sol&eacute;s, nous n\'acceptons pas de paiements de votre pays actuellement.</span><br />Veuillez nous contacter pour des solutions alternatives.');

  define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Continuer vers l\'Etape 3</strong>');
  define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- pour confirmer votre commande.');

  define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Conditions G&eacute;n&eacute;rales</span>');
  define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">En cochant la case suivante, vous d&eacute;clarez accepter nos Conditions G&eacute;n&eacute;rales qui s\'appliquent pour cette commande. Veuillez prendre connaissance de celles-ci <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><u>ici</u></a>.');
  define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Je d&eacute;clare avoir pris connaissance et accept&eacuter les Conditions G&eacute;n&eacute;rales qui s\'appliquent pour cette commande.</span>');

  define('TEXT_CHECKOUT_AMOUNT_DUE', 'Montant Total D&ucirc; : ');
  define('TEXT_YOUR_TOTAL','Votre total');
?>