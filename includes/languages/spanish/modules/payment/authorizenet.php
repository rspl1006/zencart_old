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
// $Id: authorizenet.php,v 1.1 2005/12/22 22:31:38 gorkau Exp $
//

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TITLE', 'Authorize.net');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', 'Info del Test de Tarjeta de Cr�dito:<br /><br />TC#: 4111111111111111<br />Expira: Cualquier d�a');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Tipo:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Due�o de la Tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'N�mero de la Tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Fecha de Expiraci�n de la Tarjeta:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* El nombre del due�o de la tarjeta debe tener al menos ' . CC_OWNER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* El n�mero de la tarjeta de cr�dito debe tener al menos ' . CC_NUMBER_MIN_LENGTH . ' caracteres.\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Hubo un error al procesar su tarjeta de cr�dito. Por favor, int�ntelo nuevamente.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Su tarjeta de cr�dito fue rechazada. Por favor, int�ntelo con otra tarjeta o contacte a su banco para m�s informaci�n.');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', '�Error en la Tarjeta de Cr�dito!');
define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', '�Error en la tarjeta de cr�dito!');
?>
