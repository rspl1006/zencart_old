<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: create_account.php 3027 2006-02-13 17:15:51Z drbyte $
 */

define('NAVBAR_TITLE', 'Создание профиля');

define('HEADING_TITLE', 'Моя информация');

define('TEXT_ORIGIN_LOGIN', '<strong class="note">Внимание:</strong> Если вы уже зарегистрировались, перейдите на страницу <a href="%s">входа в систему</a>.');

// greeting salutation
define('EMAIL_SUBJECT', 'Добро пожаловать в ' . STORE_NAME);
define('EMAIL_GREET_MR', 'Уважаемый %s,' . "\n\n");
define('EMAIL_GREET_MS', 'Уважаемая %s,' . "\n\n");
define('EMAIL_GREET_NONE', 'Ув. %s' . "\n\n");

// First line of the greeting
define('EMAIL_WELCOME', 'мы рады видеть вас в <strong>' . STORE_NAME . '</strong>.');
define('EMAIL_SEPARATOR', '--------------------');
define('EMAIL_COUPON_INCENTIVE_HEADER', 'Поздравляем! Вы получили дисконтную карточку в нашем магазине!' . "\n\n");
// your Discount Coupon Description will be inserted before this next define
define('EMAIL_COUPON_REDEEM', 'Для использования дисконтноц карточки введите ' . TEXT_GV_REDEEM . ' её код в процессе контроля заказа:  <strong>%s</strong>' . "\n\n");

define('EMAIL_GV_INCENTIVE_HEADER', 'Дисконтная карточка для вас ' . TEXT_GV_NAME . ' для %s!' . "\n");
define('EMAIL_GV_REDEEM', 'Код дисконтной карточки' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . ' это: %s ' . "\n\n" . 'Вы можете ввести его ' . TEXT_GV_REDEEM . ' в процессе контроля заказа');
define('EMAIL_GV_LINK', ' вы можете использовать его перейдя по ссылке: ' . "\n");
// GV link will automatically be included before this line

define('EMAIL_GV_LINK_OTHER','Посе добавления ' . TEXT_GV_NAME . ' в ваш профиль, вы можете использовать ' . TEXT_GV_NAME . ' для себя, или отправить другу!' . "\n\n");

define('EMAIL_TEXT', 'Когда у вас есть профиль, вы можете пользоватся <strong>различными услугами</strong> которые мы вам предлагаем. Вот некоторые из них:' . "\n\n" . '<li><strong>Постоянная корзина</strong> - любой добавленный товар хранится в ней пока вы не удалите или не купите его.' . "\n\n" . '<li><strong>Адресная книга</strong> - несколько адресов доставки товара из нашего мгазазина вы можете хранить здесь.' . "\n\n" . '<li><strong>История заказов</strong> - история всех ваших заказов хранится здесь.' . "\n\n" . '<li><strong>Отзывы о товарах</strong> - оставляйте отзывы о товарах в нашем магазине.' . "\n\n");
define('EMAIL_CONTACT', 'Если у вас возникли вопросы, вы можете написать нам: <a href="mailto:' . STORE_OWNER_EMAIL_ADDRESS . '">'. STORE_OWNER_EMAIL_ADDRESS ." </a>\n\n");
define('EMAIL_GV_CLOSURE','С уважением,' . "\n\n" . STORE_OWNER . "\nStore Owner\n\n". '<a href="' . HTTP_SERVER . DIR_WS_CATALOG . '">'.HTTP_SERVER . DIR_WS_CATALOG ."</a>\n\n");

// email disclaimer - this disclaimer is separate from all other email disclaimers
define('EMAIL_DISCLAIMER_NEW_CUSTOMER', 'Данный адрес был введен при регистрации профиля в нашем магазине. Если вы не создавали профиля в нашем магазине, напишите нам на %s ');

//moved definitions to english.php
//define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Privacy Statement');
//define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Please acknowledge you agree with our privacy statement by ticking the following box. The privacy statement can be read <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">here</span></a>.');
//define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'I have read and agreed to your privacy statement.');
//define('TABLE_HEADING_ADDRESS_DETAILS', 'Address Details');
//define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Additional Contact Details');
//define('TABLE_HEADING_DATE_OF_BIRTH', 'Verify Your Age');
//define('TABLE_HEADING_LOGIN_DETAILS', 'Login Details');
//define('TABLE_HEADING_REFERRAL_DETAILS', 'Were You Referred to Us?');
?>