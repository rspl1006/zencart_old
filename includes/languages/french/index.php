<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 6531 2007-06-26 00:55:30Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

  define('TEXT_MAIN','');

// Showcase vs Store
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Bienvenue <span class="greetUser">cher visiteur !</span> Voulez-vous <a href="%s">Vous Connecter</a> ?');
} else {
  define('TEXT_GREETING_GUEST', 'Bienvenue dans notre boutique en ligne.');
}

  define('TEXT_GREETING_PERSONAL', 'Bonjour <span class="greetUser">%s</span>! Voulez-vous prendre connaissance des derni&egrave;res <a href="%s">nouveaut&eacute;s</a> ?');

  define('TEXT_INFORMATION', '');

//moved to french
//  define('TABLE_HEADING_FEATURED_PRODUCTS','Produits Phares');

//  define('TABLE_HEADING_NEW_PRODUCTS', 'Nouveaut&eacute;s pour %s');
//  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Produits Attendus');
//  define('TABLE_HEADING_DATE_EXPECTED', 'Date estim&eacute;e');

if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  define('HEADING_TITLE', 'Produits disponibles');
  define('TABLE_HEADING_IMAGE', 'Image');
  define('TABLE_HEADING_MODEL', 'Mod&egrave;le');
  define('TABLE_HEADING_PRODUCTS', 'Classement par Nom');
  define('TABLE_HEADING_MANUFACTURER', 'Fabricant');
  define('TABLE_HEADING_QUANTITY', 'Quantit&eacute;');
  define('TABLE_HEADING_PRICE', 'Prix');
  define('TABLE_HEADING_WEIGHT', 'Poids');
  define('TABLE_HEADING_BUY_NOW', 'Acheter');
  define('TEXT_NO_PRODUCTS', 'Aucun Produit n\'est disponible dans cette cat&eacute;gorie.');
  define('TEXT_NO_PRODUCTS2', 'Aucun Produit n\'est disponible chez ce Fabricant.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Quantit&eacute; : ');
  define('TEXT_SHOW', '<strong>Classement par :</strong> ');
  define('TEXT_BUY', 'Acheter 1 \'');
  define('TEXT_NOW', '\' maintenant');
  define('TEXT_ALL_CATEGORIES', 'Toutes Cat&eacute;gories');
  define('TEXT_ALL_MANUFACTURERS', 'Tous Fabricants');
} elseif ($category_depth == 'top') {
  define('HEADING_TITLE', 'Bienvenue sur le site d\'achat des outils de diagnostic WiTech'); /*A remplacer avec une phrase du genre Bienvenue dans Ma Boutique...!*/
} elseif ($category_depth == 'nested') {
  // this will also be used on Top Level
  define('HEADING_TITLE', 'Bienvenue sur le site d\'achat des outils de diagnostic WiTech'); /*A remplacer avec une phrase du genre Bienvenue dans Ma Boutique...!*/
}
?>
