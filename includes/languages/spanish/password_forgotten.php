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
// $Id: password_forgotten.php,v 1.2 2006/01/10 18:23:43 gorkau Exp $
//

define('NAVBAR_TITLE_1', 'Ingresar');
define('NAVBAR_TITLE_2', 'Contrase�a olvidada');

define('HEADING_TITLE', 'Contrase�a olvidada');

define('TEXT_MAIN', 'Introduzca su email y le enviaremos un mensaje por correo electr�nico con su nueva contrase�a.');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Error: No hay ninguna cuenta con ese email, por favor, pruebe con otro.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' : Nueva contrase�a');
define('EMAIL_PASSWORD_REMINDER_BODY', '\nSu nueva contrase�a para \'' . STORE_NAME . '\' es:' . "\n\n" . '   %s' . "\n\n");


define('SUCCESS_PASSWORD_SENT', 'Contrase�a cambiada. Acabamos de enviar a su email una nueva contrase�a.');
?>
