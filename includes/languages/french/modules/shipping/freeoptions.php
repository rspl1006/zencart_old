<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: freeoptions.php 3027 2006-02-13 17:15:51Z drbyte $
 * 
 * Traduction française de Zen Cart 1.3.8a par Damien. 
 * Auteur : Zen Cart France : http://www.zencart-france.com 
 * Package : zen-cart-v1.3.8a-FR
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Options de livraison gratuite');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
Free Options est utilis&eacute; pour afficher une option de livraison gratuite lorsque les autres modules de livraison sont affich&eacute;s.
Il peut etre bas&eacute; sur: Toujours afficher, Total commande, Poids commande, nombre d\'articles command&eacute;s.
Le module Free Options ne s\'affiche pas quand Free Shipper est actif.<br /><br />
Mettre un total a >= 0.00 et <= 0.00 activera le module pour qu\'il s\'affiche avec les autres modules, sauf pour Free Shipping - freeshipper.<br /><br />
NOTE: Le fait de laisser tous les r&eacute;glages vides pour Total, Poids et nombre d\'Articles d&eacute;sactivera ce module.<br /><br />
NOTE: les Options de livraison gratuit ne s\'afficheront pas si Free Shipping est utilis&eacute; avec un poids de 0.
Voir: freeshipper
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Livraison gratuite');

?>