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
// $Id: email_extras.php 2081 2005-10-03 05:34:18Z ajeh $
//

// office use only
  define('OFFICE_FROM','От:');
  define('OFFICE_EMAIL','E-mail:');

  define('OFFICE_SENT_TO','Отправить:');
  define('OFFICE_EMAIL_TO','E-mail:');
  define('OFFICE_USE','Только для офиса:');
  define('OFFICE_LOGIN_NAME','Логин:');
  define('OFFICE_LOGIN_EMAIL','Логин e-mail:');
  define('OFFICE_LOGIN_PHONE','<strong>Телефон:</strong>');
  define('OFFICE_IP_ADDRESS','IP адрес:');
  define('OFFICE_HOST_ADDRESS','Хост адрес:');
  define('OFFICE_DATE_TIME','Дата и время:');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Данный email был дан нам вами или одним из наших клиентов. Если вы считаете данное сообщение ошибочным,свяжитесь с нами %s');
  define('EMAIL_SPAM_DISCLAIMER','Данный e-mail был определен как спам');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright &copy; 2006 <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
  define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[Дисконтная карточка]');
  define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[Дисконтные карточки]');
  define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[Статус заказа]');
  define('TEXT_UNSUBSCRIBE', "\n\nДля того что бы отписатся от рассылки новостей,кликните по ссылке: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Отключено');
?>