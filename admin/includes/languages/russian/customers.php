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
//  $Id: customers.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', 'Клиенты');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', 'Имя');
define('TABLE_HEADING_LASTNAME', 'Фамилия');
define('TABLE_HEADING_ACCOUNT_CREATED', 'Профиль создан');
define('TABLE_HEADING_LOGIN', 'Последний вход');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_PRICING_GROUP', 'Ценовая группа');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', 'Авторизация');

define('TEXT_DATE_ACCOUNT_CREATED', 'Профиль создан:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_DATE_LAST_LOGON', 'Последний вход:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'Количество входов:');
define('TEXT_INFO_COUNTRY', 'Страна:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'Количество отзывов:');
define('TEXT_DELETE_INTRO', 'Вы точно хотите удалить данного клиента?');
define('TEXT_DELETE_REVIEWS', 'Удалить %s отзыв(ов)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', 'Удалить клиента');
define('TYPE_BELOW', 'Введите ниже');
define('PLEASE_SELECT', 'Выберите');
define('TEXT_INFO_NUMBER_OF_ORDERS', 'Количество заказов:');
define('TEXT_INFO_LAST_ORDER','Последний заказ:');
define('TEXT_INFO_ORDERS_TOTAL', 'всего:');
define('CUSTOMERS_REFERRAL', 'Рефералы клиента<br />1ая дисконтная карточка');

define('ENTRY_NONE', 'Ничего');

define('TABLE_HEADING_COMPANY','Компания');

define('CUSTOMERS_AUTHORIZATION', 'Статус авторизации клиента');
define('CUSTOMERS_AUTHORIZATION_0', 'Подтвердить');
define('CUSTOMERS_AUTHORIZATION_1', 'Ожидание подтверждения - должен войти в систему для просмотра');
define('CUSTOMERS_AUTHORIZATION_2', 'Ожидание подтверждения - просмотр без цен');
define('CUSTOMERS_AUTHORIZATION_3', 'Ожидание подтверждения - просмотр с ценами,но без возможности купить');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', 'Внимание: ваш магазин установлен на Подтверждение с функцией Без просмотра');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', 'Внимание: ваш магазин установлен на Подтверждение с функцией Просмотр без цен');
define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'Your customer status has been updated. Thank you for shopping with us. We look forward to your business.');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', 'Customer Status Updated');
?>