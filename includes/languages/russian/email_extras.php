<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: email_extras.php 3166 2006-03-11 02:45:51Z drbyte $
 */

// office use only
  define('OFFICE_FROM','<strong>От:</strong>');
  define('OFFICE_EMAIL','<strong>Email:</strong>');

  define('OFFICE_SENT_TO','<strong>Отправить:</strong>');
  define('OFFICE_EMAIL_TO','<strong>Email:</strong>');

  define('OFFICE_USE','<strong>Только для офиса:</strong>');
  define('OFFICE_LOGIN_NAME','<strong>Логин:</strong>');
  define('OFFICE_LOGIN_EMAIL','<strong>Email:</strong>');
  define('OFFICE_LOGIN_PHONE','<strong>Телефон:</strong>');
  define('OFFICE_IP_ADDRESS','<strong>IP:</strong>');
  define('OFFICE_HOST_ADDRESS','<strong>Хост:</strong>');
  define('OFFICE_DATE_TIME','<strong>Дата и время:</strong>');
//  define('OFFICE_IP_TO_HOST_ADDRESS', 'OFF');

// email disclaimer
  define('EMAIL_DISCLAIMER', 'Данный почтовый адрес был послан нам одним из наши клиентов, если вы считаете это ошибкой, напишит нам %s ');
  define('EMAIL_SPAM_DISCLAIMER','Данное письмо было определено как спам');
  define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) 2006 <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// email advisory for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>Важно:</strong> Если вы считаете что данное письмо пришло к вам по ошибке, напишите нам ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");

// email advisory included warning for all emails customer generate - tell-a-friend and GV send
  define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Это сообщение включает все адреса отосланные с данного сайта:</strong>');


// Admin additional email subjects
  define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT','[Создать профиль]');
  define('SEND_EXTRA_TELL_A_FRIEND_EMAILS_TO_SUBJECT','[Посоветовать знакомому]');
  define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT','[Дисконтная карточка]');
  define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT','[Новый заказ]');
  define('SEND_EXTRA_CC_EMAILS_TO_SUBJECT','[Информация о заказе] #');

// Low Stock Emails
  define('EMAIL_TEXT_SUBJECT_LOWSTOCK','Внимание: запасы на исходе');
  define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE','Отчет о запасах: ');

// for when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Неактивно');
?>