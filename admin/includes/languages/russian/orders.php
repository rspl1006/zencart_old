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
//  $Id: orders.php 2652 2005-12-22 18:30:59Z drbyte $
//

define('HEADING_TITLE', 'Заказы');
define('HEADING_TITLE_SEARCH', 'ID заказа:');
define('HEADING_TITLE_STATUS', 'Статус:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Оплата<br />Отгрузка');
define('TABLE_HEADING_ORDERS_ID','ID');

define('TEXT_BILLING_SHIPPING_MISMATCH','Адрес отгрузки и выставления счета не совпали ');

define('TABLE_HEADING_COMMENTS', 'Комментарии');
define('TABLE_HEADING_CUSTOMERS', 'Клиенты');
define('TABLE_HEADING_ORDER_TOTAL', 'Итог заказа');
define('TABLE_HEADING_DATE_PURCHASED', 'Дата покупки');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_TYPE', 'Тип заказа');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_QUANTITY', 'Количество');
define('TABLE_HEADING_PRODUCTS_MODEL', 'Модель');
define('TABLE_HEADING_PRODUCTS', 'Товары');
define('TABLE_HEADING_TAX', 'Налог');
define('TABLE_HEADING_TOTAL', 'Всего');
define('TABLE_HEADING_PRICE_EXCLUDING_TAX', 'Цена (исключая)');
define('TABLE_HEADING_PRICE_INCLUDING_TAX', 'Цена (включая)');
define('TABLE_HEADING_TOTAL_EXCLUDING_TAX', 'Всего (исключая)');
define('TABLE_HEADING_TOTAL_INCLUDING_TAX', 'Всего (включая)');

define('TABLE_HEADING_CUSTOMER_NOTIFIED', 'Уведомления клиента');
define('TABLE_HEADING_DATE_ADDED', 'Дата добавления');

define('ENTRY_CUSTOMER', 'Клиент:');
define('ENTRY_SOLD_TO', 'Продано:');
define('ENTRY_DELIVERY_TO', 'Доставлено:');
define('ENTRY_SHIP_TO', 'Отгружено:');
define('ENTRY_SHIPPING_ADDRESS', 'Адрес отгрузки:');
define('ENTRY_BILLING_ADDRESS', 'Адрес для выставления счетов:');
define('ENTRY_PAYMENT_METHOD', 'Метод оплаты:');
define('ENTRY_CREDIT_CARD_TYPE', 'Тип кредитной карточки:');
define('ENTRY_CREDIT_CARD_OWNER', 'Владелец кредитной карточки:');
define('ENTRY_CREDIT_CARD_NUMBER', 'Номер кредитной карточки:');
define('ENTRY_CREDIT_CARD_CVV', 'CVV номер кредитной карточки:');
define('ENTRY_CREDIT_CARD_EXPIRES', 'Срок действия кредитной карточки истекает:');
define('ENTRY_SUB_TOTAL', 'Под-итог:');
define('ENTRY_TAX', 'Налог:');
define('ENTRY_SHIPPING', 'Отгрузка:');
define('ENTRY_TOTAL', 'Итог:');
define('ENTRY_DATE_PURCHASED', 'Дата покупки:');
define('ENTRY_STATUS', 'Статус:');
define('ENTRY_DATE_LAST_UPDATED', 'Дата последнего обновления:');
define('ENTRY_NOTIFY_CUSTOMER', 'Уведомить клиента:');
define('ENTRY_NOTIFY_COMMENTS', 'Приложить комментарии:');
define('ENTRY_PRINTABLE', 'Напечатать счет');

define('TEXT_INFO_HEADING_DELETE_ORDER', 'Удалить заказ');
define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить данный заказ?');
define('TEXT_INFO_RESTOCK_PRODUCT_QUANTITY', 'Пополнить количество товара в наличии');
define('TEXT_DATE_ORDER_CREATED', 'Дата создания:');
define('TEXT_DATE_ORDER_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_PAYMENT_METHOD', 'Метод оплаты:');
define('TEXT_PAID', 'Заплачено');
define('TEXT_UNPAID', 'Не заплачено');

define('TEXT_ALL_ORDERS', 'Все заказы');
define('TEXT_NO_ORDER_HISTORY', 'История заказов недоступна');

define('EMAIL_SEPARATOR', '------------------------------------------------------');
define('EMAIL_TEXT_SUBJECT', 'Обновить заказ');
define('EMAIL_TEXT_ORDER_NUMBER', 'Номер заказа:');
define('EMAIL_TEXT_INVOICE_URL', 'Детальный счет:');
define('EMAIL_TEXT_DATE_ORDERED', 'Дата заказа:');
define('EMAIL_TEXT_COMMENTS_UPDATE', '<em>Комментарии к заказу: </em>');
define('EMAIL_TEXT_STATUS_UPDATED', 'Ваш заказ был обновлен со следующим статусом:' . "\n");
define('EMAIL_TEXT_STATUS_LABEL', '<strong>Новый статус:</strong> %s' . "\n\n");
define('EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Ответьте на данный email если у вас есть какие то проблемы' . "\n");

define('ERROR_ORDER_DOES_NOT_EXIST', 'Ошибка: Заказ не создан');
define('SUCCESS_ORDER_UPDATED', 'Успешно: Заказ был обновлен');
define('WARNING_ORDER_NOT_UPDATED', 'Внимание: Изменения не было. Обновление не произведено');

define('ENTRY_ORDER_ID','Счет номер ');
define('TEXT_INFO_ATTRIBUTE_FREE', '&nbsp;-&nbsp;<span class="alert">Бесплатно</span>');

define('TEXT_DOWNLOAD_TITLE', 'Статус загрузки заказа');
define('TEXT_DOWNLOAD_STATUS', 'Статус');
define('TEXT_DOWNLOAD_FILENAME', 'Имя файла');
define('TEXT_DOWNLOAD_MAX_DAYS', 'Дни');
define('TEXT_DOWNLOAD_MAX_COUNT', 'Счет');

define('TEXT_DOWNLOAD_AVAILABLE', 'Доступно');
define('TEXT_DOWNLOAD_EXPIRED', 'Не доступно');
define('TEXT_DOWNLOAD_MISSING', 'Нет на сервере');

define('IMAGE_ICON_STATUS_CURRENT', 'Статус - Доступно');
define('IMAGE_ICON_STATUS_EXPIRED', 'Статус - Не доступно');
define('IMAGE_ICON_STATUS_MISSING', 'Статус - Пропущено');

define('SUCCESS_ORDER_UPDATED_DOWNLOAD_ON', 'Загрузка была успешно включена');
define('SUCCESS_ORDER_UPDATED_DOWNLOAD_OFF', 'Загрузка была успешно отключена');
define('TEXT_MORE', '... далее');

define('TEXT_INFO_IP_ADDRESS', 'IP адрес: ');
define('TEXT_DELETE_CVV_FROM_DATABASE','Удалить CVV из базы данных');
define('TEXT_DELETE_CVV_REPLACEMENT','Удалить');
define('TEXT_MASK_CC_NUMBER','Спрятать данный номер');
?>