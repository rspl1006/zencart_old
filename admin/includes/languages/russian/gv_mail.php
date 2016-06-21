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
//  $Id: gv_mail.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Отправить ' . TEXT_GV_NAME . ' клиентам');

define('TEXT_CUSTOMER', 'Клиент:');
define('TEXT_SUBJECT', 'Тема:');
define('TEXT_FROM', 'От:');
define('TEXT_TO', 'Email:');
define('TEXT_AMOUNT', 'Количество');
define('TEXT_MESSAGE', 'Только текст:');
define('TEXT_RICH_TEXT_MESSAGE', 'RTF текст:');
define('TEXT_SINGLE_EMAIL', '<span class="smallText">Используйте это для отправки одного email, в других случаях используйте меню ниже</span>');
define('TEXT_SELECT_CUSTOMER', 'Выберите клиента');
define('TEXT_ALL_CUSTOMERS', 'Все клиенты');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Всем подписчикам на рассылку');

define('NOTICE_EMAIL_SENT_TO', 'Внимание: Email отправлен: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Ошибка: Не был выбран клиент');
define('ERROR_NO_AMOUNT_SELECTED', 'Ошибка: не было выбрано количество');
define('ERROR_NO_SUBJECT', 'Ошибка: не была введена тема');
define('ERROR_GV_AMOUNT', 'Введите количество без символов. Например: 25.00');

define('TEXT_GV_ANNOUNCE','<font color="#0000ff">Мы рады предложить вам ' . TEXT_GV_NAME . '</font>');
define('TEXT_GV_WORTH', '' . TEXT_GV_NAME . ' ценностью ');
define('TEXT_TO_REDEEM', 'Для его получения ' . TEXT_GV_NAME . ', перейдите по ссылке ниже. Напишите ниже ' . TEXT_GV_REDEEM);
define('TEXT_WHICH_IS', ' который');
define('TEXT_IN_CASE', ' в случае если увас проблемы');
define('TEXT_OR_VISIT', 'или посетите ');
define('TEXT_ENTER_CODE', ' и введите код в процессе контроля заказа');
define('TEXT_CLICK_TO_REDEEM','Нажмите здесь для получения');

define ('TEXT_REDEEM_COUPON_MESSAGE_HEADER', 'Вы получили  ' . TEXT_GV_NAME . ' от нашего магазина, из соображений безопасности, количество  ' . TEXT_GV_NAME . ' не было кредитовано дял вас. Владелец магазина сейчас определит количество кредитов');
define ('TEXT_REDEEM_COUPON_MESSAGE_AMOUNT', "\n\n" . 'Значение  ' . TEXT_GV_NAME . ' было %s');
define ('TEXT_REDEEM_COUPON_MESSAGE_BODY', "\n\n" . 'Вы можете постетить наш магазин, войдите и отправьте  ' . TEXT_GV_NAME . ' с количеством которое вам необходимо');
define ('TEXT_REDEEM_COUPON_MESSAGE_FOOTER', "\n\n");

?>