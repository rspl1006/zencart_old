<?php
/**
 * Authorize.net SIM
 *
  * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet.php 5369 2006-12-23 10:55:52Z drbyte $
 */

  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ADMIN_TITLE', 'Authorize.net');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CATALOG_TITLE', 'Кредитная карточка');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DESCRIPTION', 'Тестовая информация о кредитной карточке:<br /><br />CC#: 4111111111111111<br />Срок истечения действия: Любой');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_TYPE', 'Тип:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_OWNER', 'Владелец:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_NUMBER', 'Номер:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_CREDIT_CARD_EXPIRES', 'Срок истечения действия:');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_OWNER', '* Имя владельца должно быть как минимум ' . CC_OWNER_MIN_LENGTH . ' символов\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_JS_CC_NUMBER', '* Номер должен быть как минимум ' . CC_NUMBER_MIN_LENGTH . ' символов\n');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR_MESSAGE', 'Ошибка при обработке вашей кредитной карточки,попробуйте ещё раз');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_DECLINED_MESSAGE', 'Ваша кредитная карточка неактивна');
  define('MODULE_PAYMENT_AUTHORIZENET_TEXT_ERROR', 'Ошибка кредитной карточки!');
?>