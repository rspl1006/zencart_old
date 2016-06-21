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
// $Id: address_book.php,v 1.3 2006/01/09 22:49:49 gorkau Exp $
//

define('NAVBAR_TITLE_1', 'Mi cuenta');
define('NAVBAR_TITLE_2', 'Agenda de direcciones');

define('HEADING_TITLE', 'Mi agenda personal de direcciones');

define('PRIMARY_ADDRESS_TITLE', 'Direcci�n principal');
if (isset($zurlan))
{
	define('PRIMARY_ADDRESS_DESCRIPTION', 'Esta direcci�n se usa como la direcci�n preseleccionada para el env�o de los pedidos hechos en esta tienda.<br /><br />Tambi�n se usa como base para el c�lculo de los gastos de env�o.');
}
else
{
	define('PRIMARY_ADDRESS_DESCRIPTION', 'Esta direcci�n se usa como la direcci�n preseleccionada para el env�o y el pago de los pedidos hechos en esta tienda.<br /><br />Tambi�n se usa como base para el c�lculo de servicios e impuestos.');
}
define('ADDRESS_BOOK_TITLE', 'Direcciones de la agenda');

define('PRIMARY_ADDRESS', '(direcci�n principal)');

define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>NOTA:</strong></span> Est� permitido un m�ximo de %s direcciones en la agenda.');
?>
