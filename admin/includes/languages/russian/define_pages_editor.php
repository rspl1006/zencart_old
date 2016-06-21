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
// $Id: define_pages_editor.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_TITLE', 'Редактор страниц: ');
define('NAVBAR_TITLE', 'Редактор страниц');

define('TEXT_INFO_EDIT_PAGE', 'Выберите страницу для редактирования:');

define('TEXT_INFO_MAIN_PAGE', 'Главная');

define('TEXT_INFO_SHIPPINGINFO', 'Отгрузка и возврат товара');
define('TEXT_INFO_PRIVACY', 'Секретность');
define('TEXT_INFO_CONDITIONS', 'Условия использования');
define('TEXT_INFO_CONTACT_US', 'Обратная связь');
define('TEXT_INFO_CHECKOUT_SUCCESS', 'Успешный контроль заказа');

define('TEXT_INFO_PAGE_2', 'Страница 2');
define('TEXT_INFO_PAGE_3', 'Страница 3');
define('TEXT_INFO_PAGE_4', 'PСтраница 4');

define('TEXT_FILE_DOES_NOT_EXIST', 'Файл не создан: %s');

define('ERROR_FILE_NOT_WRITEABLE', 'Ошибка: Невозможно внести изменения в файл,установите правльные права доступа на: %s');

define('TEXT_INFO_SELECT_FILE', 'Выберите файл для редактирования ...');
define('TEXT_INFO_EDITING', 'Редактирование файла:');

define('TEXT_INFO_CAUTION','Внимание: вы должны редактировать файл в той директории шаблона,который сейчас используется, Например: /languages/' . $_SESSION['language'] . '/html_includes/' . $template_dir . '<br />');
?>