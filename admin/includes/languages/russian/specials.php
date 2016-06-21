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
//  $Id: specials.php 3788 2006-06-17 17:08:48Z ajeh $
//

define('HEADING_TITLE', 'Скидка');

define('TABLE_HEADING_PRODUCTS', 'Товары');
define('TABLE_HEADING_PRODUCTS_MODEL','Модель');
define('TABLE_HEADING_PRODUCTS_PRICE', 'Цена/Скидка/Продажа');
define('TABLE_HEADING_PRODUCTS_PERCENTAGE','Процент');
define('TABLE_HEADING_AVAILABLE_DATE', 'Доступно');
define('TABLE_HEADING_EXPIRES_DATE','Недоступно');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_SPECIALS_PRODUCT', 'Товар:');
define('TEXT_SPECIALS_SPECIAL_PRICE', 'Цена:');
define('TEXT_SPECIALS_EXPIRES_DATE', 'Дата окончания:');
define('TEXT_SPECIALS_AVAILABLE_DATE', 'Дата наличия:');
define('TEXT_SPECIALS_PRICE_TIP', '<b>Внимание:</b><ul><li>Вы можете вводить процент для вычитания в скидке, например: <b>20%</b></li><li>Если вы вводите новую цену, десятичный разделитель должен быть \'.\' (десятичная точка), например: <b>49.99</b></li></ul>');

define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_NEW_PRICE', 'Новая цена:');
define('TEXT_INFO_ORIGINAL_PRICE', 'Оригинальная цена:');
define('TEXT_INFO_DISPLAY_PRICE', 'Показать цену:<br />');
define('TEXT_INFO_AVAILABLE_DATE', 'Доступно:');
define('TEXT_INFO_EXPIRES_DATE', 'Не доступно:');
define('TEXT_INFO_STATUS_CHANGE', 'Изменение статуса:');
define('TEXT_IMAGE_NONEXISTENT', 'Изображение не создано');

define('TEXT_INFO_HEADING_DELETE_SPECIALS', 'Удалить скидку');
define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить скидку?');

define('SUCCESS_SPECIALS_PRE_ADD', 'Успешно: Обновите цену и дату');
define('WARNING_SPECIALS_PRE_ADD_EMPTY', 'Внимание: ID товара не найден');
define('WARNING_SPECIALS_PRE_ADD_DUPLICATE', 'Внимание: ID товара уже участвует в скидках');
define('WARNING_SPECIALS_PRE_ADD_BAD_PRODUCTS_ID', 'Warning: Product ID is invalid ... nothing was added ...');
define('TEXT_INFO_HEADING_PRE_ADD_SPECIALS', 'Добавление скидки по ID товара');
define('TEXT_INFO_PRE_ADD_INTRO', 'Вы можете вручную назначить скидку по ID товара');
define('TEXT_PRE_ADD_PRODUCTS_ID', 'Введите ID товара: ');
define('TEXT_INFO_MANUAL', 'Добавление товара по ID  в скидки');
?>