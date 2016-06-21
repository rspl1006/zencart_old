<?php
/**
 * Authorize.net AIM Payment Module V.1.0 created by Eric Stamper - 01/30/2004 Released under GPL
 *
  * @package languageDefines
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: authorizenet_aim.php 2667 2005-12-24 05:31:58Z drbyte $
 */


// Admin Configuration Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ADMIN_TITLE', 'Authorize.net (AIM)'); // Payment option title as displayed in the admin
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DESCRIPTION', '<b>Автоматическое одобрение номера кредитной карточки:</b><br /><br />Visa#: 4007000000027<br />MC#: 5424000000000015<br />Discover#: 6011000000000012<br />AMEX#: 370000000000002');

// Catalog Items
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CATALOG_TITLE', 'Кредитная карточка');  // Payment option title as displayed to the customer
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_TYPE', 'Тип:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_OWNER', 'Владелец:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_NUMBER', 'Номер:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CREDIT_CARD_EXPIRES', 'Срок истечения действия:');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_CVV', 'CVV номер (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . 'Подробнее' . '</a>)');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_POPUP_CVV_LINK', 'What\'s this?');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_OWNER', '* Имя владельца должно быть как минимум ' . CC_OWNER_MIN_LENGTH . ' символов\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_NUMBER', '* Номер должен быть как минимум ' . CC_NUMBER_MIN_LENGTH . ' символов\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_JS_CC_CVV', '* 3 или 4 цифры должны быть введены. Они на обороте вашей кредитной карточки\n');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_DECLINED_MESSAGE', 'Невозможно авторизовать вашу кредитную карточку');
  define('MODULE_PAYMENT_AUTHORIZENET_AIM_TEXT_ERROR', 'Ошибка кредитной карточки!');
?>