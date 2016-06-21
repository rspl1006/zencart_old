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
//  $Id: banner_manager.php 3131 2006-03-07 22:53:04Z ajeh $
//

define('HEADING_TITLE', 'Менеджер баннеров');

define('TABLE_HEADING_BANNERS', 'Баннеры');
define('TABLE_HEADING_GROUPS', 'Группы');
define('TABLE_HEADING_STATISTICS', 'Показывать клики');
define('TABLE_HEADING_STATUS', 'Статус');
define('TABLE_HEADING_BANNER_OPEN_NEW_WINDOWS','Новое окно');
define('TABLE_HEADING_BANNER_ON_SSL', 'Показывать SSL');
define('TABLE_HEADING_ACTION', 'Действие');
define('TABLE_HEADING_BANNER_SORT_ORDER', 'Порядок<br />сортировки');

define('TEXT_BANNERS_TITLE', 'Название баннера:');
define('TEXT_BANNERS_URL', 'URL баннера:');
define('TEXT_BANNERS_GROUP', 'Группа баннера:');
define('TEXT_BANNERS_NEW_GROUP', ', или создайте новую группу ниже');
define('TEXT_BANNERS_IMAGE', 'Изображение:');
define('TEXT_BANNERS_IMAGE_LOCAL', ', или определите локальный файл ниже');
define('TEXT_BANNERS_IMAGE_TARGET', 'Папка с изображением:');
define('TEXT_BANNER_IMAGE_TARGET_INFO', '<strong>Папка в системе для баннеров:</strong> ' . DIR_FS_CATALOG_IMAGES . 'banners/');
define('TEXT_BANNERS_HTML_TEXT_INFO', '<strong>Внимание: HTML не поддерживают подсчет кликов</strong>');
define('TEXT_BANNERS_HTML_TEXT', 'HTML текст:');
define('TEXT_BANNERS_ALL_SORT_ORDER', 'Порядок сортировки - banner_box_all');
define('TEXT_BANNERS_ALL_SORT_ORDER_INFO', '<strong>Внимание: banners_box_all sidebox будет отображать баннеры в ихнем определенном порядке сортировки</strong>');
define('TEXT_BANNERS_EXPIRES_ON', 'Дата окончания показа:');
define('TEXT_BANNERS_OR_AT', ', или по/до');
define('TEXT_BANNERS_IMPRESSIONS', 'просмотров');
define('TEXT_BANNERS_SCHEDULED_AT', 'Начало показа:');
define('TEXT_BANNERS_BANNER_NOTE', '<b>Замечания к баннерам:</b><ul><li>Используйте изображение или HTML текст для баннера - но не оба вместе.</li><li>HTML текст имеет преимущество над изображением</li><li>HTML не регистрирует клики,но регистрирует показы</li><li>Баннеры с абсолютным URLs изображения не будут отображатся на зашифрованных страницах</li></ul>');
define('TEXT_BANNERS_INSERT_NOTE', '<b>Замечания к изображениям:</b><ul><li>Директории с баннерами должны иметь правильные права на запись и доступ!</li><li>Не заполняйте \'Папка с изображением\' если вы не загружаете изображение на сервер');
define('TEXT_BANNERS_EXPIRCY_NOTE', '<b>Замечания по показам:</b><ul><li>Только одно из двух полей должно быть заполнено</li><li>Если баннер не должен отключатся автоматически,оставьте поля пустыми</li></ul>');
define('TEXT_BANNERS_SCHEDULE_NOTE', '<b>Замечания к расписанию:</b><ul><li>Если начало показа определено,баннер стартует по указанной вами дате показа.</li><li>Все баннеры которые стартуют по расписани помечены неактивными,после старта показа они автоматически будут помечены как активные.</li></ul>');
define('TEXT_BANNERS_STATUS', 'Статус баннера:');
define('TEXT_BANNERS_ACTIVE', 'Активный');
define('TEXT_BANNERS_NOT_ACTIVE', 'Не активный');
define('TEXT_INFO_BANNER_STATUS', '<strong>Внимание:</strong> Статус баннера может быть обновлен по результатам расписания или окончания показа');
define('TEXT_BANNERS_OPEN_NEW_WINDOWS', 'Баннер в новом окне');
define('TEXT_INFO_BANNER_OPEN_NEW_WINDOWS', '<strong>Внимание:</strong> Баннер будет открыт в новом окне');
define('TEXT_BANNERS_ON_SSL', 'Баннер на SSL');
define('TEXT_INFO_BANNER_ON_SSL', '<strong>Внимание:</strong> Баннер может отображатся на зашифрованных страницах без ошибок');

define('TEXT_BANNERS_DATE_ADDED', 'Дата добавления:');
define('TEXT_BANNERS_SCHEDULED_AT_DATE', 'Начало показа: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_DATE', 'Окончание показа: <b>%s</b>');
define('TEXT_BANNERS_EXPIRES_AT_IMPRESSIONS', 'Окончание показа после: <b>%s</b> показов');
define('TEXT_BANNERS_STATUS_CHANGE', 'Изменить статус: %s');

define('TEXT_BANNERS_DATA', 'Т<br>Е<br>К<br>С<br>Т');
define('TEXT_BANNERS_LAST_3_DAYS', 'Последние 3 дня');
define('TEXT_BANNERS_BANNER_VIEWS', 'Просмотров баннера');
define('TEXT_BANNERS_BANNER_CLICKS', 'Кликов по баннеру');

define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить данный баннер?');
define('TEXT_INFO_DELETE_IMAGE', 'Удалить изображение баннера');

define('SUCCESS_BANNER_INSERTED', 'Успешно: Баннер был создан');
define('SUCCESS_BANNER_UPDATED', 'Успешно: Баннер был обновлен');
define('SUCCESS_BANNER_REMOVED', 'Успешно: Баннер был удален');
define('SUCCESS_BANNER_STATUS_UPDATED', 'Успешно: Статус баннера был обновлен');

define('ERROR_BANNER_TITLE_REQUIRED', 'Ошибка: Необходимо название баннера');
define('ERROR_BANNER_GROUP_REQUIRED', 'Ошибка: Необходима группа баннера');
define('ERROR_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Папка с изображениями не создана: %s');
define('ERROR_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Папка с изображениями не имеет прав на запись: %s');
define('ERROR_IMAGE_DOES_NOT_EXIST', 'Ошибка: Изображение не создано');
define('ERROR_IMAGE_IS_NOT_WRITEABLE', 'Ошибка: Изображение не может быть удалено');
define('ERROR_UNKNOWN_STATUS_FLAG', 'Ошибка: Неизвестный флаг статуса');
define('ERROR_BANNER_IMAGE_REQUIRED', 'Ошибка: Необходимо изображение баннера');

define('ERROR_GRAPHS_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Директория с изображениями не создана,создайте её например: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');
define('ERROR_GRAPHS_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Директория с изображениями не имеет прав на запись. Она расположена: <strong>' . DIR_WS_ADMIN . 'images/graphs</strong>');

define('TEXT_LEGEND_BANNER_ON_SSL', 'Показать SSL');
define('TEXT_LEGEND_BANNER_OPEN_NEW_WINDOWS', 'Новое окно');

// Tooltip Text for images in Banner Manager
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_ON','Открыть новое окно - Включено');
define('IMAGE_ICON_BANNER_OPEN_NEW_WINDOWS_OFF','Открыть новое окно - Отключено');
define('IMAGE_ICON_BANNER_ON_SSL_ON','Показывать на зашифрованных страницах - Включено');
define('IMAGE_ICON_BANNER_ON_SSL_OFF','Показывать на зашифрованных страницах - Отключено');

define('SUCCESS_BANNER_OPEN_NEW_WINDOW_UPDATED', 'Успешно: Статус баннера для открытия в новом окне обновлен');
define('SUCCESS_BANNER_ON_SSL_UPDATED', 'Успешно: Статус баннера для показа на зашифрованных страницах обновлен');
?>