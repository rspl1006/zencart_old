<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: product_reviews_write.php 3159 2006-03-11 01:35:04Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

  define('NAVBAR_TITLE', 'Avis');

  define('SUB_TITLE_FROM', 'Ecrit par : ');
  define('SUB_TITLE_REVIEW', 'Dites nous ce que vous pensez du produit et partager votre avis avec nos autres clients. : ');
  define('SUB_TITLE_RATING', 'Choisissez une note pour cet article, de 1 &eacute;toile (plus mauvaise) &agrave; 5 &eacute;toile (meilleure note) : ');

  define('TEXT_NO_HTML', '<span class="coming"><strong>NOTE :</strong></span>&nbsp;les tags HTML ne sont pas permis.');
  define('TEXT_BAD', '<span class="coming"><strong>MAUVAIS</strong></span>');
  define('TEXT_GOOD', '<span class="coming"><strong>BON</strong></span>');
  define('TEXT_PRODUCT_INFO', '<strong>Information Produit</strong>');

  define('TEXT_APPROVAL_REQUIRED', '<span class="coming"><strong>NOTE :</strong></span>&nbsp;Les Avis doivent &ecirc;tre valid&eacute;s avant d\'&ecirc;tre publi&eacute;s.');

  define('EMAIL_REVIEW_PENDING_SUBJECT','Avis sur le produit en attente de validation : %s');
  define('EMAIL_PRODUCT_REVIEW_CONTENT_INTRO','Un avis sur le produit %s a &eacute;t&eacute; envoy&eacute; et n&eacute;cessite votre validation pour &ecirc;tre affich&eacute;.'."\n\n");
  define('EMAIL_PRODUCT_REVIEW_CONTENT_DETAILS','Details de l\'avis: %s');
?>
