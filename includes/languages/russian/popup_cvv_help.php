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
// $Id: popup_cvv_help.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('HEADING_CVV', 'Что такое CVV?');
define('TEXT_CVV_HELP1', 'Visa, Mastercard, обнаруживают 3 числа Проверки Номера Карточки<br /><br />
                    Для вашей безопасности, мы предлагаем вам ввести подтверждение номера кредитной карточки.<br /><br />
                    Номер подтверждение это 3-числовой код нанесенный сзади на вашей кредитке.
                    Это необходимо для идентификации кредитной карточки<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2visa.gif'));

define('TEXT_CVV_HELP2', 'American Express 4 числа Проверки Номера Карточки<br /><br />
                    Для вашей безопасности, мы предлагаем вам ввести подтверждение номера кредитной карточки.<br /><br />
                    Номер подтверждение это 4-числовой код нанесенный спереди на вашей кредитке.
                    Это необходимо для идентификации кредитной карточки.<br />' .
                    zen_image(DIR_WS_TEMPLATE_ICONS . 'cvv2amex.gif'));

define('TEXT_CLOSE_CVV_WINDOW', 'Закрыть [x]');
?>