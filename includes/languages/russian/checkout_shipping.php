<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_shipping.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Контроль');
define('NAVBAR_TITLE_2', 'Метод доставки');

define('HEADING_TITLE', 'Этап 1 из 3 - информация о доставке');

define('TABLE_HEADING_SHIPPING_ADDRESS', 'Адрес доставки');
define('TEXT_CHOOSE_SHIPPING_DESTINATION', 'Ваш заказ будет доставлен по указанному вами адресу, вы можете изменить его нажав на <em>Изменить адрес</em>');
define('TITLE_SHIPPING_ADDRESS', 'Информация о доставке:');

define('TABLE_HEADING_SHIPPING_METHOD', 'Метод доставки:');
define('TEXT_CHOOSE_SHIPPING_METHOD', 'Выберите метод доставки для данного заказа');
define('TITLE_PLEASE_SELECT', 'Выберите');
define('TEXT_ENTER_SHIPPING_INFORMATION', 'Доступен только один метод доставки для данного заказа');
define('TITLE_NO_SHIPPING_AVAILABLE', 'Not Available At This Time');
define('TEXT_NO_SHIPPING_AVAILABLE','<span class="alert">Sorry, we are not shipping to your region at this time.</span><br />Please contact us for alternate arrangements.');

define('TABLE_HEADING_COMMENTS', 'Комментарии к заказу');

define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Перейти к этапу 2');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- выберите метод оплаты');

// when free shipping for orders over $XX.00 is active
  define('FREE_SHIPPING_TITLE', 'Бесплатная доставка');
  define('FREE_SHIPPING_DESCRIPTION', 'Бесплатная доставка для заказов %s');
?>