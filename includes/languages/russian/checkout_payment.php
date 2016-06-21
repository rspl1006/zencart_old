<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_payment.php 3206 2006-03-19 04:04:09Z birdbrain $
 */

define('NAVBAR_TITLE_1', 'Контроль - этап 1');
define('NAVBAR_TITLE_2', 'Метод оплаты - этап 2');

define('HEADING_TITLE', 'Этап 2 из 3 - информация об оплате');

define('TABLE_HEADING_BILLING_ADDRESS', 'Адрес для составления счета');
define('TEXT_SELECTED_BILLING_DESTINATION', 'Введите ваш адрес для составления счетов. Вы можете изменить его нажав на <em>Изменить адрес</em>');
define('TITLE_BILLING_ADDRESS', 'Адрес для составления счетов:');

define('TABLE_HEADING_PAYMENT_METHOD', 'Метод оплаты');
define('TEXT_SELECT_PAYMENT_METHOD', 'Выберите метод оплаты для данного заказа');
define('TITLE_PLEASE_SELECT', 'Выберите');
define('TEXT_ENTER_PAYMENT_INFORMATION', 'Доступен только один метод оплаты для данного заказа');
define('TABLE_HEADING_COMMENTS', 'Комментарии к заказу');

define('TITLE_NO_PAYMENT_OPTIONS_AVAILABLE', 'Not Available At This Time');
define('TEXT_NO_PAYMENT_OPTIONS_AVAILABLE','<span class="alert">Sorry, we are not accepting payments from your region at this time.</span><br />Please contact us for alternate arrangements.');
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', '<strong>Перейти к этапу 3</strong>');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- подтвердите ваш заказ');

define('COD_TAX_WARNING', '* Estimate duties and taxes required for shipping. Other local taxes may be due upon delivery.'); 


define('TABLE_HEADING_CONDITIONS', '<span class="termsconditions">Сроки и условия</span>');
define('TEXT_CONDITIONS_DESCRIPTION', '<span class="termsdescription">Вы можете узнать о сроках доставки и условиях кликнув <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '"><span class="pseudolink">здест</span></a>');
define('TEXT_CONDITIONS_CONFIRM', '<span class="termsiagree">Я согласен с сроком доставки и условиями по данному заказу</span>');

define('TEXT_CHECKOUT_AMOUNT_DUE', 'Общая сумма заказа: ');
define('TEXT_YOUR_TOTAL','Общая сумма');
?>