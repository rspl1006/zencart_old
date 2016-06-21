<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                                 |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: layout_controller.php 3197 2006-03-17 21:40:58Z drbyte $
//

define('HEADING_TITLE', 'Боксы в колонке');

define('TABLE_HEADING_LAYOUT_BOX_NAME', 'Имя файла бокса');
define('TABLE_HEADING_LAYOUT_BOX_STATUS', 'Статус правой и левой колонок');
define('TABLE_HEADING_LAYOUT_BOX_STATUS_SINGLE', 'Статус одной колонки');
define('TABLE_HEADING_LAYOUT_BOX_LOCATION', 'Правая и левая колонки');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER', 'Порядок сортировки левой и правой колонок');
define('TABLE_HEADING_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Порядок сортировки одной колонки');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_INFO_EDIT_INTRO', 'Сделайте необходимые изменения');
define('TEXT_INFO_LAYOUT_BOX','Выбранные боксы: ');
define('TEXT_INFO_LAYOUT_BOX_NAME', 'Название бокса:');
define('TEXT_INFO_LAYOUT_BOX_LOCATION','Расположение: (одна колонка игнорирует данную настройку)');
define('TEXT_INFO_LAYOUT_BOX_STATUS', 'Статус правой и левой колонок: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_SINGLE', 'Статус одной колонки: ');
define('TEXT_INFO_LAYOUT_BOX_STATUS_INFO','Вкл= 1 выкл=0');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER', 'Порядок сортировки левой и правой колонок:');
define('TEXT_INFO_LAYOUT_BOX_SORT_ORDER_SINGLE', 'Порядок сортировки одной колонки:');
define('TEXT_INFO_INSERT_INTRO', 'Введите информацию о новом боксе на основе данной информации');
define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить данный бокс?');
define('TEXT_INFO_HEADING_NEW_BOX', 'Новый бокс');
define('TEXT_INFO_HEADING_EDIT_BOX', 'Редактировать бокс');
define('TEXT_INFO_HEADING_DELETE_BOX', 'Удалить бокс');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX','Удалить пропущенный бокс из списка шаблона: ');
define('TEXT_INFO_DELETE_MISSING_LAYOUT_BOX_NOTE','Внимание: Это не удаляет файл и вы можете добавить бокс в любое время.<br /><br /><strong>Удалить бокс с названием: </strong>');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER','Сбросить все порядки сортировки: ');
define('TEXT_INFO_RESET_TEMPLATE_SORT_ORDER_NOTE','Это не удаляет боксы,это только сбрасывает порядок их сортировки');
define('TEXT_INFO_BOX_DETAILS','Детали бокса: ');

////////////////

define('HEADING_TITLE_LAYOUT_TEMPLATE', 'Расположение слоев шаблона');

define('TABLE_HEADING_LAYOUT_TITLE', 'Название');
define('TABLE_HEADING_LAYOUT_VALUE', 'Значение');
define('TABLE_HEADING_ACTION', 'Действие');


define('TEXT_MODULE_DIRECTORY', 'Папка с слоями шаблона:');
define('TEXT_INFO_DATE_ADDED', 'Дата добавления:');
define('TEXT_INFO_LAST_MODIFIED', 'Последнее изменение:');

// layout box text in includes/boxes/layout.php
define('BOX_HEADING_LAYOUT', 'Слой');
define('BOX_LAYOUT_COLUMNS', 'Контроллер колонок');

// file exists
define('TEXT_GOOD_BOX',' ');
define('TEXT_BAD_BOX','<font color="ff0000"><b>Пропущено</b></font><br />');


// Success message
define('SUCCESS_BOX_DELETED','Бокс успешно удален: ');
define('SUCCESS_BOX_RESET','Настройки всех боксов успешно сброшены: ');
define('SUCCESS_BOX_UPDATED','Настройки всех боксов успешно обновлены: ');

define('TEXT_ON',' Вкл ');
define('TEXT_OFF',' Выкл ');
define('TEXT_LEFT',' Лево ');
define('TEXT_RIGHT',' Право ');

?>