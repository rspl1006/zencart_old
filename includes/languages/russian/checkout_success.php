<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: checkout_success.php 3198 2006-03-18 00:36:08Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Контроль');
define('NAVBAR_TITLE_2', 'Успешно заврешено - спасибо');

define('HEADING_TITLE', 'Спасибо!');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', 'Уведомлять меня о новинках по данному товару');
define('TEXT_SEE_ORDERS', 'Вы можете посмотреть историю своих заказов перейдя в <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Мой профиль</a> и кликнув на "Просмотреть все заказы".');
define('TEXT_CONTACT_STORE_OWNER', 'Ваши вопросы вы можете задать в разделе <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">обслуживания клиентов</a>');
define('TEXT_THANKS_FOR_SHOPPING', 'Спасибо за заказ!');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', 'Вы можете скачать ваш товар позднее тут \'%s\'');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>Номер вашего заказа:</strong> ');
define('TEXT_CHECKOUT_LOGOFF_GUEST', 'NOTE: To complete your order, a temporary account was created. You may close this account by clicking Log Off. Clicking Log Off also ensures that your receipt and purchase information is not visible to the next person using this computer. If you wish to continue shopping, feel free! You may log off at anytime using the link at the top of the page.');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'Thank you for shopping. Please click the Log Off link to ensure that your receipt and purchase information is not visible to the next person using this computer.');
?>