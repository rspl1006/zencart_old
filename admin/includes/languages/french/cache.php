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
//  $Id: cache.php 1105 2005-04-04 22:05:35Z birdbrain $
// +----------------------------------------------------------------------+
// | Traduction fran�aise de Zen Cart 1.3.8a par Damien.                  |
// | Auteur : Zen Cart France : http://www.zencart-france.com             |
// | Package : zen-cart-v1.3.8a-FR                                        |
// +----------------------------------------------------------------------+
//

define('HEADING_TITLE', 'Contr&ocirc;le du Cache');

define('TABLE_HEADING_CACHE', 'Cache des Blocs');
define('TABLE_HEADING_DATE_CREATED', 'Date de Cr&eacute;ation');
define('TABLE_HEADING_ACTION', 'Action');

define('TEXT_FILE_DOES_NOT_EXIST', 'Le Fichier n\'existe pas');
define('TEXT_CACHE_DIRECTORY', 'R&eacute;pertoire du Cache:');

define('ERROR_CACHE_DIRECTORY_DOES_NOT_EXIST', 'Erreur: le r&eacute;pertoire du Cache n\'existe pas. Veuillez le r&eacute;gler dans Configuration->Cache.');
define('ERROR_CACHE_DIRECTORY_NOT_WRITEABLE', 'Erreur: le r&eacute;pertoire du Cache n\'est pas inscriptible.');
?>