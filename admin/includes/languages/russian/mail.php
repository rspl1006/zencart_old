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
//  $Id: mail.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', 'Отправить Email клиентам');

define('TEXT_CUSTOMER', 'Клиент:');
define('TEXT_SUBJECT', 'Тема:');
define('TEXT_FROM', 'От:');
define('TEXT_MESSAGE', 'Только текст:');
define('TEXT_MESSAGE_HTML','RTF текст:');
define('TEXT_SELECT_CUSTOMER', 'Выбрать клиента');
define('TEXT_ALL_CUSTOMERS', 'Все клиенты');
define('TEXT_NEWSLETTER_CUSTOMERS', 'Всем подписчикам на рассылку');
define('TEXT_ATTACHMENTS_LIST','Выберите что надо приложить к письму: ');
define('TEXT_SELECT_ATTACHMENT','Приложение на сервере: ');
define('TEXT_SELECT_ATTACHMENT_TO_UPLOAD','Приложение<br />для загрузки<br />&amp;: ');
define('TEXT_ATTACHMENTS_DIR','Папка для загрузки: ');

define('NOTICE_EMAIL_SENT_TO', 'Внимание: Email отправлен: %s');
define('ERROR_NO_CUSTOMER_SELECTED', 'Ошибка: Не был выбран клиент');
define('ERROR_NO_SUBJECT', 'Ошибка: Не была введне тема');
define('ERROR_ATTACHMENTS', 'Ошибка: Вы не можете загружать и отправлять приложения одновременно');
?>