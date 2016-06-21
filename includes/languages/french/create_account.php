<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 3027 2006-02-13 17:15:51Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */


  define('NAVBAR_TITLE', 'Cr&eacute;ation de Compte');

  define('HEADING_TITLE', 'Mes informations de compte');

  define('TEXT_ORIGIN_LOGIN', '<strong class="note">NOTE :</strong> si vous avez d&eacute;j&agrave; un compte, veuillez vous identifier sur la <a href="%s">page de Connexion</a>.');

// greeting salutation
  define('EMAIL_SUBJECT', 'Bienvenue chez ' . STORE_NAME);
  define('EMAIL_GREET_MR', 'Cher Mr. %s,' . "\n\n");
  define('EMAIL_GREET_MS', 'Ch&egrave;re Mme. %s,' . "\n\n");
  define('EMAIL_GREET_NONE', 'Cher %s' . "\n\n");

// First line of the greeting
  define('EMAIL_WELCOME', 'Nous sommes heureux de vous accueillir chez <strong>' . STORE_NAME . '</strong>.' . "\n\n");
  define('EMAIL_SEPARATOR', '--------------------');
  define('EMAIL_COUPON_INCENTIVE_HEADER', 'F&eacute;licitations ! Pour vous remercier de votre passage dans notre boutique, nous vous adressons par E-mail un Coupon de R&eacute;duction pour votre prochaine commande !' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
  define('EMAIL_COUPON_REDEEM', 'Pour utiliser ce coupon, entrez son Code correspondant lors de la validation de votre commande :  <strong>%s</strong>' . "\n\n");
  define('TEXT_COUPON_HELP_DATE', '<p>Le coupon est valide entre %s et %s</p>');

  define('EMAIL_GV_INCENTIVE_HEADER', 'Pour vous remercier de votre passage, nous vous adressons un ' . TEXT_GV_NAME . ' d\une valeur de %s !' . "\n");
  define('EMAIL_GV_REDEEM', 'La valeur de ce ' . TEXT_GV_NAME . ' est : %s ' . "\n\n" . '. Vous pourrez vous en servir lors de votre commande, en tant que mode de paiement. ');
  define('EMAIL_GV_LINK', ' Vous pouvez aussi suivre ce lien pour l\'utiliser : ' . "\n");
// GV link will automatically be included before this line

  define('EMAIL_GV_LINK_OTHER','Lorsque vous ajoutez un ' . TEXT_GV_NAME . ' &agrave; votre compte, vous pouvez utiliser ce ' . TEXT_GV_NAME . ' pour vous, ou pour en faire profiter la personne de votre choix !' . "\n\n");

  define('EMAIL_TEXT', 'Votre compte sur notre site vous offre de nombreux <strong>services</strong>, parmi lesquels figurent entre autres :' . "\n\n" . '<li><strong>Un Panier permanent</strong> - Ajoutez ou supprimer les Produits comme vous le voulez.' . "\n\n" . '<li><strong>Un Carnet d\'adresses</strong> - Une livraison selon votre convenance (pour un cadeau...) ! ' . "\n\n" . '<li><strong>Votre Historique</strong> - Consultation de l\'historique de vos commandes et suivi.' . "\n\n" . '<li><strong>Des avis de clients</strong> - Pour savoir ce que nos clients aiment et choisissent.' . "\n\n");
  define('EMAIL_CONTACT', 'Pour de plus amples informations concernant nos services, merci de nous contacter par E-mail : <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
  define('EMAIL_GV_CLOSURE','Cordialement,' . "\n\n" . STORE_OWNER . "\nLa Direction\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER ."</a>\n\n");

// email disclaimer - this disclaimer is seperate from all other email disclaimers
  define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Cette adresse E-mail nous a &eacute;t&eacute; communiqu&eacute;e par vous ou un de nos clients. Si vous ne vous &ecirc;tes pas inscrit en tant que Client Membre sur le site, veuillez contacter : %s ');

  // definitions d&eacute;plac&eacute;e vers french.php
  //define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Vie Priv&eacute;e');
  //define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'En cochant la case suivante, vous d&eacute;clarez avoir pris connaissnce de nos dispositions concernant la d&eacute;claration de confidentialit&eacute; et de Vie Priv&eacute;e. Veuillez prendre connaissance de la d&eacute;claration de confidentialit&eacute; et de Vie Priv&eacute;e <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><u>ici</u></a>.');  //define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Je d&eacute;clare avoir pris connaissance et accept&eacuter vos dispositions concernant la d&eacute;claration de confidentialit&eacute; et de Vie Priv&eacute;e.');
?>
