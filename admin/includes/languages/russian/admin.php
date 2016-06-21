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
//  $Id: admin.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Настройки админа');

define('TABLE_HEADING_ADMINS_NAME', 'Имя админа');
define('TABLE_HEADING_ADMINS_ID', 'ID');
define('TABLE_HEADING_ADMINS_EMAIL', 'Email');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_HEADING_NEW_ADMIN', 'Новый');
define('TEXT_HEADING_EDIT_ADMIN', 'Редактировать');
define('TEXT_HEADING_DELETE_ADMIN', 'Удалить');
define('TEXT_HEADING_RESET_PASSWORD', 'Сбросить пароль');

define('TEXT_ADMINS', 'Админы:');
define('TEXT_ADMINS_EMAIL', 'Email:');

define('TEXT_NEW_INTRO', 'Введите информацию о новом админе');
define('TEXT_EDIT_INTRO', 'Сделайте необходимые изменения');

define('TEXT_ADMINS_NAME', 'Имя админа:');
define('TEXT_ADMINS_PASSWORD', 'Пароль:');
define('TEXT_ADMINS_CONFIRM_PASSWORD', 'Подтверждение пароля:');

define('TEXT_DELETE_INTRO', 'Вы точно хотите удалить данного админа?');
define('TEXT_DELETE_IMAGE', 'Удалить изображение админа?');


define('ENTRY_PASSWORD_NEW_ERROR', 'Ваш новый пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов');
define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Подтверждение пароля должно соответствовать паролю');

define('TEXT_ADMINS_LEVEL','Уровень админа для данного логина:');
define('TEXT_ADMIN_LEVEL_INSTRUCTIONS','При установке уровня админа к 1, будет работать демо-админка');
define('TEXT_ADMIN_DEMO','В демо-админке отключены некоторые функции');
define('TEXT_DEMO_STATUS','Текущая демо-админка установлена:');
define('TEXT_DEMO_OFF','Выкл');
define('TEXT_DEMO_ON','Вкл');
?>