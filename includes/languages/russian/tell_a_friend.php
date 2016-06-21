<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tell_a_friend.php 3159 2006-03-11 01:35:04Z drbyte $
 */

define('NAVBAR_TITLE', 'Рассказать знакомому');

define('HEADING_TITLE', 'Рассказать знакомому о \'%s\'');

define('FORM_TITLE_CUSTOMER_DETAILS', 'Ваши детали');
define('FORM_TITLE_FRIEND_DETAILS', 'Детали о вашем знакомом');
define('FORM_TITLE_FRIEND_MESSAGE', 'ваше сообщение:');

define('FORM_FIELD_CUSTOMER_NAME', 'Ваше имя:');
define('FORM_FIELD_CUSTOMER_EMAIL', 'Ваш Email:');
define('FORM_FIELD_FRIEND_NAME', 'Имя знакомого');
define('FORM_FIELD_FRIEND_EMAIL', 'Email знакомого:');

define('EMAIL_SEPARATOR', '----------------------------------------------------------------------------------------');

define('TEXT_EMAIL_SUCCESSFUL_SENT', 'Ваш email о <strong>%s</strong> был успешно отправлен <strong>%s</strong>.');

define('EMAIL_TEXT_HEADER','Важно!');

define('EMAIL_TEXT_SUBJECT', 'Ваш знакомый %s советует вам товар из %s');
define('EMAIL_TEXT_GREET', 'Привет %s!' . "\n\n");
define('EMAIL_TEXT_INTRO', 'Ваш знакомый, %s, думает что вам было бы инересно знать о %s от %s.');

define('EMAIL_TELL_A_FRIEND_MESSAGE','%s отправлено сообщение:');

define('EMAIL_TEXT_LINK', 'Для просмотра товара, скопируйте ссылку ниже в адресную строку вашего браузера:' . "\n\n" . '%s');
define('EMAIL_TEXT_SIGNATURE', 'С уважением,' . "\n\n" . '%s');

define('ERROR_TO_NAME', 'Ошибка: Не заполнено имя знакомого');
define('ERROR_TO_ADDRESS', 'Ошибка: Email вашего знакомого неправильный');
define('ERROR_FROM_NAME', 'Ошибка: Не заполнено ваше имя');
define('ERROR_FROM_ADDRESS', 'Ошибка: Ваш email неправильный');
?>