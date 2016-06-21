<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: paypal.php 2644 2005-12-21 16:56:32Z drbyte $
 */

  define('MODULE_PAYMENT_PAYPAL_TEXT_ADMIN_TITLE', 'Paypal IPN');
  define('MODULE_PAYMENT_PAYPAL_TEXT_CATALOG_TITLE', 'Paypal');
  if (function_exists('zen_catalog_href_link')) {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal IPN</strong><br /><font color=green>Инструкции по настройке:</font><br />На www.paypal.com, под "Профиль",<ul><li>установите ваши <strong>Instant Payment Notification Настройки</strong> URL на:<br />'.str_replace('index.php?main_page=index','ipn_main_handler.php',zen_catalog_href_link(FILENAME_DEFAULT, '', 'SSL')) . ' </li><li>в <strong>Website Payments Настройках</strong> установите ваш <strong>Automatic Return URL</strong> на:<br />'.zen_catalog_href_link(FILENAME_CHECKOUT_PROCESS, '', 'SSL',false).'</li>' . (defined('MODULE_PAYMENT_PAYPAL_STATUS') ? '' : '<li>... и нажмите "установить" что бы включить PayPal поддержку... и "редактировать" что бы сообщить Zen Cart ваши PayPal настройки</li>') . '</ul><font color=green><hr /></font>' );
  } else {
    define('MODULE_PAYMENT_PAYPAL_TEXT_DESCRIPTION', '<strong>PayPal IPN</strong>');
  }
  define('MODULE_PAYMENT_PAYPAL_ENTRY_FIRST_NAME', 'Имя:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_LAST_NAME', 'Фамилия:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_BUSINESS_NAME', 'Бизнес имя:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_NAME', 'Адресное имя:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STREET', 'Улица:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_CITY', 'Город:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATE', 'Область:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_ZIP', 'Почтовый индекс:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_COUNTRY', 'Страна:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EMAIL_ADDRESS', 'Payer Email:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EBAY_ID', 'Ebay ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_ID', 'Payer ID:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYER_STATUS', 'Payer статус:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_ADDRESS_STATUS', 'Статус адреса:');

  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_TYPE', 'Тип оплаты:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_STATUS', 'Статус оплаты:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PENDING_REASON', 'Причина ожидания:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_INVOICE', 'Счет:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_DATE', 'Дата оплаты:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CURRENCY', 'Валюта:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_GROSS_AMOUNT', 'Количество брутто:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PAYMENT_FEE', 'Оплата:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_EXCHANGE_RATE', 'Обменный курс:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_CART_ITEMS', 'Пункты карточки:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_TYPE', 'Тип транзакции:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_TXN_ID', 'ID транзакции:');
  define('MODULE_PAYMENT_PAYPAL_ENTRY_PARENT_TXN_ID', 'Родительский ID транзакции :');

  define('MODULE_PAYMENT_PAYPAL_PURCHASE_DECRIPTION_TITLE', STORE_NAME . ' Purchase');
?>