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
// $Id: cc.php 4027 2006-07-26 05:27:41Z drbyte $
//

  define('MODULE_PAYMENT_CC_TEXT_CATALOG_TITLE', 'Кредитная карточка');
  define('MODULE_PAYMENT_CC_TEXT_TITLE', 'Кредитная карточка');
  define('MODULE_PAYMENT_CC_TEXT_DESCRIPTION', 'Тестовая информация о кредитной карточке:<br /><br />CC#: 4111111111111111<br />Срок истечения действия: Любой');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_TYPE', 'Тип:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_OWNER', 'Владелец:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_NUMBER', 'Номер:');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_CVV', 'CVV номер (<a href="javascript:popupWindow(\'' . zen_href_link(FILENAME_POPUP_CVV_HELP) . '\')">' . 'Подробнее' . '</a>)');
  define('MODULE_PAYMENT_CC_TEXT_CREDIT_CARD_EXPIRES', 'Срок истечения действия:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_OWNER', '* Имя владельца должно быть как минимум ' . CC_OWNER_MIN_LENGTH . ' символов\n');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_NUMBER', '* Номер должен быть как минимум ' . CC_NUMBER_MIN_LENGTH . ' символов\n');
  define('MODULE_PAYMENT_CC_TEXT_ERROR', 'Ошибка кредитной карточки:');
  define('MODULE_PAYMENT_CC_TEXT_JS_CC_CVV', '* CVV должен быть как минимум ' . CC_CVV_MIN_LENGTH . ' символов\n');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_ERROR','Внимание-ошибка конфигурации: ');
  define('MODULE_PAYMENT_CC_TEXT_EMAIL_WARNING','WARNING: Вы включили CC модуль оплаты но не настроили его для отправки CC информации на ваш email. Как следствие этого, вы не сможете знать номер CC для заказов,которые будут оплачиватся данным методом.  Перейдите в Администратор->Модули->Оплата->CC->Редактировать и установить email адрес для отправки CC данных' . "\n\n\n\n");
  define('MODULE_PAYMENT_CC_TEXT_MIDDLE_DIGITS_MESSAGE', 'Please direct this email to the Accounting department so that it may be filed along with the online order it relates to: ' . "\n\n" . 'Order: %s' . "\n\n" . 'Middle Digits: %s' . "\n\n");
?>