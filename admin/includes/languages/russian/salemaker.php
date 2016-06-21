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
//  $Id: salemaker.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Продажи');
define('TABLE_HEADING_SALE_NAME', 'Название продажи');
define('TABLE_HEADING_SALE_DEDUCTION', 'Вычитание');
define('TABLE_HEADING_SALE_DATE_START', 'Начало');
define('TABLE_HEADING_SALE_DATE_END', 'Конец');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действие');
define('TEXT_SALEMAKER_NAME', 'Название продажи:');
define('TEXT_SALEMAKER_DEDUCTION', 'Вычитание:');
define('TEXT_SALEMAKER_DEDUCTION_TYPE', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Тип:&nbsp;&nbsp;');
define('TEXT_SALEMAKER_PRICERANGE_FROM', 'Процент товара:');
define('TEXT_SALEMAKER_PRICERANGE_TO', '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;В&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
define('TEXT_SALEMAKER_SPECIALS_CONDITION', 'Если продукт специальный:');
define('TEXT_SALEMAKER_DATE_START', 'Начало:');
define('TEXT_SALEMAKER_DATE_END', 'Конец:');
define('TEXT_SALEMAKER_CATEGORIES', '<b>Or</b> проверьте категории к которым будет относится продажа:');
define('TEXT_SALEMAKER_POPUP', '<a href="javascript:session_win();"><span class="errorText"><b>Подсказки по использованию продаж</b></span></a>');
define('TEXT_SALEMAKER_POPUP1', '<a href="javascript:session_win1();"><span class="errorText"><b>(More Info)</b></span></a>');
define('TEXT_SALEMAKER_IMMEDIATELY', 'Немедленно');
define('TEXT_SALEMAKER_NEVER', 'Никогда');
define('TEXT_SALEMAKER_ENTIRE_CATALOG', 'Проверьте данный бокс если вы хотите что бы продажа была применена <b>ко всем товарам</b>:');
define('TEXT_SALEMAKER_TOP', 'Весь каталог');
define('TEXT_INFO_DATE_ADDED', 'Дата добавления');
define('TEXT_INFO_DATE_MODIFIED', 'Последнее изменение:');
define('TEXT_INFO_DATE_STATUS_CHANGE', 'Последнее изменение статуса:');
define('TEXT_INFO_SPECIALS_CONDITION', 'Специальные условия:');
define('TEXT_INFO_DEDUCTION', 'Вычитание:');
define('TEXT_INFO_PRICERANGE_FROM', 'Средняя цена:');
define('TEXT_INFO_PRICERANGE_TO', ' в ');
define('TEXT_INFO_DATE_START', 'Начало:');
define('TEXT_INFO_DATE_END', 'Конец:');
define('SPECIALS_CONDITION_DROPDOWN_0', 'Пропустить специальную цену - применить к цене товара и переместить специальную');
define('SPECIALS_CONDITION_DROPDOWN_1', 'Пропустить условие продажи - продажа не применяется когда создана скидка');
define('SPECIALS_CONDITION_DROPDOWN_2', 'Применить вычитание цены в специальной продаже - иначе применить к цене');
// moved to english.php
/*
define('DEDUCTION_TYPE_DROPDOWN_0', 'Deduct amount');
define('DEDUCTION_TYPE_DROPDOWN_1', 'Percent');
define('DEDUCTION_TYPE_DROPDOWN_2', 'New Price');
*/
define('TEXT_INFO_HEADING_COPY_SALE', 'Копировать продажу');
define('TEXT_INFO_COPY_INTRO', 'Введите название для копирования<br>&nbsp;&nbsp;"%s"');
define('TEXT_INFO_HEADING_DELETE_SALE', 'Удалить продажу');
define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить данную продажу?');
?>