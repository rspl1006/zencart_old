<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: gv_send.php 3421 2006-04-12 04:16:14Z drbyte $
 */

define('HEADING_TITLE', 'Отправить' . TEXT_GV_NAME);
define('HEADING_TITLE_CONFIRM_SEND', 'Отправить ' . TEXT_GV_NAME . ' Подтверждение');
define('HEADING_TITLE_COMPLETED', TEXT_GV_NAME . ' Отправлено');
define('NAVBAR_TITLE', 'Отправить ' . TEXT_GV_NAME);
define('EMAIL_SUBJECT', 'Сообщение от ' . STORE_NAME);
define('HEADING_TEXT','Введите имя, email и количество ' . TEXT_GV_NAME . ' которое вы хотите отправить. Для более подробной информации смотрите <a href="' . zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL').'">' . GV_FAQ . '.</a>');
define('ENTRY_NAME', 'Имя получателя:');
define('ENTRY_EMAIL', 'Email получателя:');
define('ENTRY_MESSAGE', 'Ваше сообщение:');
define('ENTRY_AMOUNT', 'Количество к отправке:');
define('ERROR_ENTRY_TO_NAME_CHECK', 'Введите имя получателя');
define('ERROR_ENTRY_AMOUNT_CHECK', '' . TEXT_GV_NAME . ' количество не правильно');
define('ERROR_ENTRY_EMAIL_ADDRESS_CHECK', 'Правильный ли email?');
define('MAIN_MESSAGE', 'Вы отправляете ' . TEXT_GV_NAME . ' ценностью %s до %s, на email %s');
define('SECONDARY_MESSAGE', 'Ув %s,<br /><br />' . 'Вы отправили ' . TEXT_GV_NAME . ' ценностью %s до %s');
define('PERSONAL_MESSAGE', '%s говорит:');
define('TEXT_SUCCESS', 'Поздравляем, ваш ' . TEXT_GV_NAME . ' был отправлен');
define('TEXT_SEND_ANOTHER', 'Хотите отправить ешё ' . TEXT_GV_NAME . '?');
define('TEXT_AVAILABLE_BALANCE',  'Профиль дисконтной карточки');

define('EMAIL_GV_TEXT_SUBJECT', 'Дисконтная карточка от %s');
define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');
define('EMAIL_GV_TEXT_HEADER', 'Поздравляем, Вы отправили ' . TEXT_GV_NAME . ' ценностью %s');
define('EMAIL_GV_FROM', 'This ' . TEXT_GV_NAME . ' был отправлен вам от %s');
define('EMAIL_GV_MESSAGE', 'отвечая на сообщение: ');
define('EMAIL_GV_SEND_TO', 'Привет, %s');
define('EMAIL_GV_REDEEM', 'что бы получить это ' . TEXT_GV_NAME . ', кликните по ссылке ниже. Пожалуйста также запишите ' . TEXT_GV_REDEEM . ': %s  во избежании проблем');
define('EMAIL_GV_LINK', 'Для того что бы получить,нажмите здесь');
define('EMAIL_GV_VISIT', ' или посетите ');
define('EMAIL_GV_ENTER', ' и введите ' . TEXT_GV_REDEEM . ' ');
define('EMAIL_GV_FIXED_FOOTER', 'Если у вас возникли проблемы во время получения ' . TEXT_GV_NAME . ' используйте ссылку выше, ' . "\n" .
                                'вы можете также ввести ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' во время контроля заказа');
define('EMAIL_GV_SHOP_FOOTER', '');
?>