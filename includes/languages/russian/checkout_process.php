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
// $Id: checkout_process.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('EMAIL_TEXT_SUBJECT', 'Подтверждение заказа');
define('EMAIL_TEXT_HEADER', 'Подтверждение заказа');
define('EMAIL_TEXT_FROM',' от ');  //added to the EMAIL_TEXT_HEADER, above on text-only emails
define('EMAIL_THANKS_FOR_SHOPPING','Спасибо за покупку!');
define('EMAIL_DETAILS_FOLLOW','Информация о вашем заказе');
define('EMAIL_TEXT_ORDER_NUMBER', 'Номер заказа:');
define('EMAIL_TEXT_INVOICE_URL', 'Подробный счет:');
define('EMAIL_TEXT_INVOICE_URL_CLICK', 'Нажмите здесь для того что бы посмотреть подробный счет');
define('EMAIL_TEXT_DATE_ORDERED', 'Дата заказа:');
define('EMAIL_TEXT_PRODUCTS', 'Товары');
define('EMAIL_TEXT_SUBTOTAL', 'Всего:');
define('EMAIL_TEXT_TAX', 'Налог:        ');
define('EMAIL_TEXT_SHIPPING', 'Отгрузка: ');
define('EMAIL_TEXT_TOTAL', 'Всего:    ');
define('EMAIL_TEXT_DELIVERY_ADDRESS', 'Адрес доставки');
define('EMAIL_TEXT_BILLING_ADDRESS', 'Адрес для выставления счетов');
define('EMAIL_TEXT_PAYMENT_METHOD', 'Метод оплаты');
define('EMAIL_TEXT_SHIPPING_DDU', 'DDU - (Delivered Duty Unpaid) ALL INTERNATIONAL CUSTOMERS ARE RESPONSIBLE FOR PAYING DUTIES AND TAXES WHEN THE SHIPMENT ARRIVES IN COUNTRY.');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('TEXT_EMAIL_VIA', 'через');

// suggest not using # vs No as some spamm protection block emails with these subjects
define('EMAIL_ORDER_NUMBER_SUBJECT', ' Номер: ');
define('HEADING_ADDRESS_INFORMATION','Информация о адресе');
define('HEADING_SHIPPING_METHOD','Метод отгрузки');
?>