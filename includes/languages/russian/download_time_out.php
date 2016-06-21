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
// $Id: download_time_out.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', 'Ваша загрузка ...');
define('HEADING_TITLE', 'Ваша загрузка ...');

define('TEXT_INFORMATION', 'Период действия ссылки окончен<br /><br />
  Если у вас есть другие загрузки и вы хотите восстановить их,
  перейдите в <a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">Мой профиль</a> для просмотра ваших заказрв<br /><br />
 или если вы считаете что это ошибка системы, напишите <a href="' . zen_href_link(FILENAME_CONTACT_US) . '">нам</a> <br /><br />
  Спасибо!
  ');
?>