<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: gv_faq.php 4155 2006-08-16 17:14:52Z ajeh $
// +----------------------------------------------------------------------+
// | Traduction française de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

  define('NAVBAR_TITLE', TEXT_GV_NAME . ' FAQ');
  define('HEADING_TITLE', TEXT_GV_NAME . ' FAQ');

  define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Acheter des ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Comment envoyer des ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Comment acheter avec des ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Encaisser des ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">En cas de probl&egrave;mes</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
  define('SUB_HEADING_TITLE','Acheter des ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT', 'Les ' . TEXT_GV_NAMES . ' s\'ach&egrave;tent comme tout autre produit, en utilisant les modes de paiement en vigueur sur le Site. Lorsque vous avez pay&eacute; le montant de votre ' . TEXT_GV_NAME . ', sa valeur est ajout&eacute;e &agrave; votre Compte ' . TEXT_GV_NAME . '. Si vous avez d&eacute;j&agrave; des fonds disponibles sur votre compte de ' . TEXT_GV_NAME . ', vous noterez que le montant s\'affiche alors dans le bloc du Panier, avec un lien vers la page depuis laquelle vous pouvez envoyer votre ' . TEXT_GV_NAME . ' par E-mail &agrave; la personne de votre choix.');
  break;
  case '2':
  define('SUB_HEADING_TITLE','Comment envoyer des ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Pour envoyer un ' . TEXT_GV_NAME . ', vous devez vous rendre sur la page des envois de ' . TEXT_GV_NAME . '. Le lien vers cette page est disponible depuis votre Panier dans la colonne de droite de chaque page, lorsque vous &ecirc;tes connect&eacute; &agrave; Votre Compte, et si vous avez des fonds disponibles. Lorsque vous envoyez un ' . TEXT_GV_NAME . ', vous devez fournir les informations suivantes : <br />- le Nom de la personne &agrave; laquelle vous adressez un ' . TEXT_GV_NAME . '. <br />- Son adresse E-mail. <br />- le Montant que vous souhaitez envoyer. (Vous n\'&ecirc;tes pas tenu de tout envoyer le montant total de votre compte ' . TEXT_GV_NAME . '.
  <br />- Un court message qui apparaitra dans l\'E-mail.
  <br /><br />Veuillez vous assurer que vous avez entr&eacute; toutes les informations correctement, bien que vous pourrez encore les changer comme vous voulez avant que l\'E-mail soit envoy&eacute;.');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Comment acheter avec des ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Si vous disposez de fonds sur votre compte de ' . TEXT_GV_NAME . ', vous pouvez les utiliser lors de la validation de la commande : vous devrez alors entrer le montant que vous souhaitez pr&eacute;lever. Vous devrez compl&eacute;ter avec un autre moyen de paiement si le montant disponible sur votre compte ' . TEXT_GV_NAME . ' est insuffisant pour assurer le r&egrave;glement total de votre commande.
  Si vous disposez de plus de fonds sur votre compte ' . TEXT_GV_NAME . ' que le montant total de votre commande, le solde sera affect&eacute; &agrave; votre compte ' . TEXT_GV_NAME . ' pour vos futurs achats.');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Comment encaisser des ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Si vous recevez un ' . TEXT_GV_NAME . ' par E-mail, il contient les informations concernant l\'Exp&eacute;diteur du ' . TEXT_GV_NAME . ', ainsi qu\'un court message de sa part. Cet E-mail indiquera aussi le ' . TEXT_GV_REDEEM . ' du ' . TEXT_GV_NAME . '. Nous vous invitons &agrave; l\'imprimer. Vous pourrez alors Encaisser ce ' . TEXT_GV_NAME . ' de deux mani&egrave;res.<br /><br />
  1. En cliquant sur le lien contenu dans l\'E-mail et pr&eacute;vu &agrave; cet effet. Vous serez alors redirig&eacute; vers la page de Validation. Nous vous demanderons de cr&eacute;er un compte si vous n\'&ecirc;tes pas encore client, et vous pourrez alors utiliser votre ' . TEXT_GV_NAME . ' dans la Boutique.<br /><br />
  1. En cliquant sur le lien contenu dans l\'E-mail et pr&eacute;vu &agrave; cet effet. Vous serez alors redirig&eacute; vers la page de Validation. Nous vous demanderons de cr&eacute;er un compte si vous n\'&ecirc;tes pas encore client, et vous pourrez alors utiliser votre ' . TEXT_GV_NAME . ' dans la Boutique.<br /><br />
  2. Lors de la validation de votre commande, vous verrez appara&icirc;tre une case &agrave; cocher <strong> ' . TEXT_GV_REDEEM . '. </strong> assortie de la mention \'Entrez votre ' . TEXT_GV_REDEEM . ' ici\'. Entrez le code, il sera valid&eacute; et ajout&eacute; &agrave; votre compte de ' . TEXT_GV_NAME . '. Vous pourrez alors utiliser le montant pour acheter dans notre boutique.');
  break;
  case '5':
  define('SUB_HEADING_TITLE','En cas de probl&egrave;mes.');
  define('SUB_HEADING_TEXT','Pour tout renseignement concernant notre syst&egrave;me de ' . TEXT_GV_NAME . ', veuillez prendre contact par E-mail avec '. STORE_OWNER_EMAIL_ADDRESS . '. Veuillez par ailleurs vous assurer de nous fournir le maximum d\'informations. ');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Veuillez choisir l\'une des questions ci-dessus.');

  }
  define('TEXT_GV_REDEEM_INFO', 'Veuillez entrer le code de votre ' . TEXT_GV_NAME . ' : ');
  define('TEXT_GV_REDEEM_ID', 'code de reduction :');
?>