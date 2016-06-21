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
//  $Id: tax_classes.php 1329 2006-05-18 14:30:10J Mazouz Alaa $
// +----------------------------------------------------------------------+
// | Traduction fran�aise de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//
define('TABLE_HEADING_TAX_CLASS_ID', 'ID');
define('HEADING_TITLE', 'Classes de Taxes');

define('TABLE_HEADING_TAX_CLASSES', 'Classes de Taxes');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_INFO_EDIT_INTRO', 'Veuillez effectuer les changements n&eacute;cessaires');
define('TEXT_INFO_CLASS_TITLE', 'Titre de la Classe de Taxe:');
define('TEXT_INFO_CLASS_DESCRIPTION', 'Description:');
define('TEXT_INFO_DATE_ADDED', 'Date d\'Ajout:');
define('TEXT_INFO_LAST_MODIFIED', 'Derni&egrave;re Modification:');
define('TEXT_INFO_INSERT_INTRO', 'Veuillez entrer la Nouvelle Classe de Taxe et les Informations relatives');
define('TEXT_INFO_DELETE_INTRO', 'Etes-vous certain de vouloir effacer cette Classe de Taxe ?');
define('TEXT_INFO_HEADING_NEW_TAX_CLASS', 'Nouvelle Classe de Taxe');
define('TEXT_INFO_HEADING_EDIT_TAX_CLASS', 'Edition de la Classe de Taxe');
define('TEXT_INFO_HEADING_DELETE_TAX_CLASS', 'Effacement de la Classe de Taxe');
define('ERROR_TAX_RATE_EXISTS_FOR_CLASS', 'ERREUR: Impossible de supprimer cette classe de Taxes -- des taux de taxes sont li&eacute;s &agrave; cette classe.');
define('ERROR_TAX_RATE_EXISTS_FOR_PRODUCTS', 'ERREUR: Impossible de supprimer cette classe de Taxes -- Il y a %s produits qui utilisent cette classe de taxe.');
?>