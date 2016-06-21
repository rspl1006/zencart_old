<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: time_out.php 3027 2006-02-13 17:15:51Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */


  define('NAVBAR_TITLE', 'D&eacute;connexion Automatique');
  define('HEADING_TITLE', 'Votre session a expir&eacute;');
  define('HEADING_TITLE_LOGGED_IN', 'Whoops! D&eacute;sol&eacute;, mais vous n\'&ecirc;tes pas autoris&eacute; &agrave; effectuer l\'action demand&eacute;. ');

  define('TEXT_INFORMATION', 'Nous vous prions de bien vouloir nous excuser, mais compte tenu de la dur&eacute;e de votre connexion sur une Page S&eacute;curis&eacute;e, le temps maximum de votre session est &eacute;puis&eacute;. 
  Si vous &ecirc;tiez sur le point de passer commande, veuillez <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '">Vous Connecter</a>
  et votre panier sera restaur&eacute; tel que vous l\'avez laiss&eacute; au moment de la d&eacute;connexion. Vous pourrez alors reprendre le cours de vos achats.<br /><br />
  Si vous venez de passer commande et que vous souhaitez visualiser ' .
  (DOWNLOAD_ENABLED == 'true' ? ', ou si vous devez reprendre un t&eacute;l&eacute;chargement' : '') . ', merci de vous rendre sur la page <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Mon Compte</a>.
  ');
  
  define('TEXT_INFORMATION_LOGGED_IN', 'Vous &ecirc;tes toujours connect&eacute; &agrave; votre compte et pouvez continuer vos achats. Veuillez choisir o&ugrave; vous souhaitez vous rendre &agrave; partir d\'un des menus.');

  define('HEADING_RETURNING_CUSTOMER', 'Se connecter');
  define('TEXT_PASSWORD_FORGOTTEN', 'Mot de passe oubli&eacute;?');
?>