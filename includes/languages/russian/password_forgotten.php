<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: password_forgotten.php 3086 2006-03-01 00:40:57Z drbyte $
 */

define('NAVBAR_TITLE_1', 'Вход');
define('NAVBAR_TITLE_2', 'Забытый пароль');

define('HEADING_TITLE', 'Забытый пароль');

define('TEXT_MAIN', 'Введите ваш email и мы вышлем вам ваш пароль');

define('TEXT_NO_EMAIL_ADDRESS_FOUND', 'Ошибка: Email который вы ввели, не найден в нашей базе данных');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - Новый пароль');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Новый пароль был затребован ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'ваш Новый пароль \'' . STORE_NAME . '\' :' . "\n\n" . '   %s' . "\n\nПосле входа в систему под новым паролем,вы можете изменить его в своем профиле");

define('SUCCESS_PASSWORD_SENT', 'Новый пароль был отправлен на указанный вами email');
?>