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
//  $Id: ezpages.php 2827 2006-01-08 19:46:40Z ajeh $
//
define('HEADING_TITLE', 'EZ страницы');
define('TABLE_HEADING_PAGES', 'Заголовок страницы');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_VSORT_ORDER', 'Порядок сортировки боксов сбоку');
define('TABLE_HEADING_HSORT_ORDER', 'Порядок сортировки раздела снизу');
define('TEXT_PAGES_TITLE', 'Заголовк страницы:');
define('TEXT_PAGES_HTML_TEXT', 'HTML содержимое:');
define('TABLE_HEADING_DATE_ADDED', 'Дата добавления:');
define('TEXT_PAGES_STATUS_CHANGE', 'Изменение статуса: %s');
define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить данную страницу?');
define('SUCCESS_PAGE_INSERTED', 'Успешно: Страница была создана');
define('SUCCESS_PAGE_UPDATED', 'Успешно: Страница была обновлена');
define('SUCCESS_PAGE_REMOVED', 'Успешно: Страница была удалена');
define('SUCCESS_PAGE_STATUS_UPDATED', 'Успешно: Статус страницы был обновлен');
define('ERROR_PAGE_TITLE_REQUIRED', 'Ошибка: Необходим заголовок страницы');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Ошибка: Неизвестный флаг статуса');
define('ERROR_MULTIPLE_HTML_URL', 'Ошибка: вы пытаетесь создать страницу с несколькими настройками содержимого');

define('TABLE_HEADING_ID', 'ID');
define('TABLE_HEADING_STATUS_HEADER', 'Заголовок:');
define('TABLE_HEADING_STATUS_SIDEBOX', 'Боковой бокс:');
define('TABLE_HEADING_STATUS_FOOTER', 'Низ:');
define('TABLE_HEADING_STATUS_TOC', 'ТД:');
define('TABLE_HEADING_CHAPTER', 'Раздел:');

define('TABLE_HEADING_PAGE_OPEN_NEW_WINDOW', 'Открыть в новом окне:');
define('TABLE_HEADING_PAGE_IS_SSL', 'Страница SSL:');

define('TEXT_DISPLAY_NUMBER_OF_PAGES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> страниц)');
define('IMAGE_NEW_PAGE', 'Новая страница');
define('TEXT_INFO_PAGE_IMAGE', 'Изображение');
define('TEXT_INFO_CURRENT_IMAGE', 'Текущее изображение:');
define('TEXT_INFO_PAGES_ID', 'ID: ');
define('TEXT_INFO_PAGES_ID_SELECT', 'Выберите страницу ...');

define('TEXT_HEADER_SORT_ORDER', 'Порядок:');
define('TEXT_SIDEBOX_SORT_ORDER', 'Порядок:');
define('TEXT_FOOTER_SORT_ORDER', 'Порядок:');
define('TEXT_TOC_SORT_ORDER', 'Порядок:');
define('TEXT_CHAPTER', 'Раздел След/Пред:');
define('TABLE_HEADING_CHAPTER_PREV_NEXT', 'Раздел:&nbsp;<br />');

define('TEXT_HEADER_SORT_ORDER_EXPLAIN', '<b>Заголовок</b></br>Порядок сортировки страницы в строке при создании списка страниц');
define('TEXT_SIDEBOX_ORDER_EXPLAIN', '<b>Боковой бокс</b></br>Порядок сортировки страницы в строке при создании вертикального списка страниц');
define('TEXT_FOOTER_ORDER_EXPLAIN', '<b>Низ</b></br>Порядок сортировки страницы в строке при создании списка страниц снизу');
define('TEXT_TOC_SORT_ORDER_EXPLAIN', '<b>ТД (таблица с данными)</b></br> Порядок сортировки страницы в строке при создании списка страниц на странице у которой есть свои настройки');
define('TEXT_CHAPTER_EXPLAIN', 'Разделы используются в таблице данных при создании навигации След/Пред страница');

define('TEXT_ALT_URL', 'Локальная ссылка:');
define('TEXT_ALT_URL_EXPLAIN', 'Если определена ссылка,то содержимое страницы будет игнорироватся и отображатся содержимое страницы на которую идет ссылка');

define('TEXT_ALT_URL_EXTERNAL', 'Глобальная ссылка:');
define('TEXT_ALT_URL_EXTERNAL_EXPLAIN', 'Если определена ссылка,то содержимое страницы будет игнорироватся и отображатся содержимое страницы на которую идет ссылка');

define('TEXT_SORT_CHAPTER_TOC_TITLE_INFO', 'Показать порядок: ');
define('TEXT_SORT_CHAPTER_TOC_TITLE', 'Раздел/ТД');
define('TEXT_SORT_HEADER_TITLE', 'Заголовок');
define('TEXT_SORT_SIDEBOX_TITLE', 'Боковой бокс');
define('TEXT_SORT_FOOTER_TITLE', 'Низ');
define('TEXT_SORT_PAGE_TITLE', 'Заголовок страницы');
define('TEXT_SORT_PAGE_ID_TITLE', 'ID и заголовок страницы');

define('TEXT_PAGE_TITLE', 'Заголовок:');
define('TEXT_WARNING_MULTIPLE_SETTINGS', '<strong>Внимание: Определено несколько ссылок</strong>');
?>