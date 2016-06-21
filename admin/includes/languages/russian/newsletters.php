<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: newsletters.php 4385 2006-09-04 04:10:48Z drbyte $
 */

define('HEADING_TITLE', 'Менеджер рассылок и уведомлений');

define('TABLE_HEADING_NEWSLETTERS', 'Рассылка новостей');
define('TABLE_HEADING_SIZE', 'Размер');
define('TABLE_HEADING_MODULE', 'Модуль');
define('TABLE_HEADING_SENT', 'Отправить');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_NEWSLETTER_MODULE', 'Модуль:');
define('TEXT_NEWSLETTER_TITLE', 'Тема:');
define('TEXT_NEWSLETTER_CONTENT', 'Только текст:');
define('TEXT_NEWSLETTER_CONTENT_HTML', 'RTF текст:');

define('TEXT_NEWSLETTER_DATE_ADDED', 'Дата добавления:');
define('TEXT_NEWSLETTER_DATE_SENT', 'Дата отправки:');

define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить данную рассылку?');

define('TEXT_PLEASE_WAIT', 'Подождите .. отправка ..<br /><br />Не прерывайте данный процесс!');
define('TEXT_FINISHED_SENDING_EMAILS', 'Успешно отправлено!');

define('TEXT_AFTER_EMAIL_INSTRUCTIONS','%s emails в процессе. <br /><br />Посмотрите ваш почтвоый ящик ('.EMAIL_FROM.') для:<UL><LI>a) вернувшихся сообщений</LI><LI>b) email которые недействительны</LI><LI>c) запросы на удаление</LI></UL>Удаление возможно через редактирование записей клиентов');

define('ERROR_NEWSLETTER_TITLE', 'Ошибка: Необходимо название рассылки');
define('ERROR_NEWSLETTER_MODULE', 'Ошибка: Необходим модуль рассылки');
define('ERROR_PLEASE_SELECT_AUDIENCE','Ошибка: Выберите получателей рассылки');
?>