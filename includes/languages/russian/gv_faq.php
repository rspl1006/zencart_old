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
// $Id: gv_faq.php 1969 2005-09-13 06:57:21Z drbyte $
//

define('NAVBAR_TITLE', TEXT_GV_NAME . ' Вопрос-ответ');
define('HEADING_TITLE', TEXT_GV_NAME . ' Вопрос-ответ');

define('TEXT_INFORMATION', '<a name="Top"></a>
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=1','NONSSL').'">Покупка с ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=2','NONSSL').'">Отправка ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=3','NONSSL').'">Накопление ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=4','NONSSL').'">Получение ' . TEXT_GV_NAMES . '</a><br />
  <a href="'.zen_href_link(FILENAME_GV_FAQ,'faq_item=5','NONSSL').'">Проблемы</a><br />
');
switch ($_GET['faq_item']) {
  case '1':
define('SUB_HEADING_TITLE','Покупка с ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT', TEXT_GV_NAMES . ' покупка проиходит обычным способом.
  При покупке товара ' . TEXT_GV_NAME . ' будет добавлено в ваш
   ' . TEXT_GV_NAME . ' профиль. Если у вас есть накопления в вашем ' . TEXT_GV_NAME . ' профиле, вы будете уведомлены об этом, и будет предложена ссылка на страницу с которой вы можете отправить ' . TEXT_GV_NAME . ' на какой либо email');
  break;
  case '2':
define('SUB_HEADING_TITLE','Отправка ' . TEXT_GV_NAMES);
define('SUB_HEADING_TEXT','Что бы отправить ' . TEXT_GV_NAME . ' вам надо перейти на страницу Отправки ' . TEXT_GV_NAME . '. Вы можете найти ссылку на нее в правой колонке,находясь в вашей Корзине.
  Когда вы отправляете ' . TEXT_GV_NAME . ', вам нужно определить следующее:
  <br>Имя получателя ' . TEXT_GV_NAME . '
  <br>Email адрес получателя ' . TEXT_GV_NAME . '
  <br>Количество отправляемых скидок
  <br>Короткое сообщение получателю');
  break;
  case '3':
  define('SUB_HEADING_TITLE','Накопление ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Если у вас есть накопления в вашем ' . TEXT_GV_NAME . ' профиле, вы можете накапливать их для покупки других товаров в нашем магазине. Вы можете отложить накопления используя форму,которая появится в процессе контроля заказа');
  break;
  case '4':
  define('SUB_HEADING_TITLE','Получение ' . TEXT_GV_NAMES);
  define('SUB_HEADING_TEXT','Если вы получили ' . TEXT_GV_NAME . ' там должна содержатся информация о отправителе ' . TEXT_GV_NAME . ', и короткое сообщение от него. Сообщение содержит ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM . '. Вы можете использовать ' . TEXT_GV_NAME . ' в два способа.<br /><br />
  1. Кликнув на ссылку в письме.
  В перейдете на страницу с получением ' . TEXT_GV_NAME . '. Вам предложат создать свой профиль ' . TEXT_GV_NAME . ' после чего он будет утвержден и помещен в ваш профиль
   ' . TEXT_GV_NAME . '<br /><br />
  2. В процессе контроля заказа и выбора метода оплаты будет форма для ввода ' . TEXT_GV_REDEEM . '. Введите ' . TEXT_GV_REDEEM . ' здесь, и нажмите на кнопку получения. После подтверждения кода, это будет передано в ваш ' . TEXT_GV_NAME . ' профиль');
  break;
  case '5':
  define('SUB_HEADING_TITLE','Проблемы');
  define('SUB_HEADING_TEXT','При возникновении проблем ' . TEXT_GV_NAME . ' пожалуйста, свяжитесь с нами '. STORE_OWNER_EMAIL_ADDRESS . '');
  break;
  default:
  define('SUB_HEADING_TITLE','');
  define('SUB_HEADING_TEXT','Пожалуйста выберите один из вопросов выше');

  }
  define('TEXT_GV_REDEEM_INFO', 'Please enter your ' . TEXT_GV_NAME . ' redemption code: ');
  define('TEXT_GV_REDEEM_ID', 'Redemption Code:');
?>