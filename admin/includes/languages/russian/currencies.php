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
//  $Id: currencies.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('HEADING_TITLE', 'Валюты');

define('TABLE_HEADING_CURRENCY_NAME', 'Валюта');
define('TABLE_HEADING_CURRENCY_CODES', 'Код');
define('TABLE_HEADING_CURRENCY_VALUE', 'Значение');
define('TABLE_HEADING_ACTION', 'Действие');

define('TEXT_INFO_EDIT_INTRO', 'Сделайте необходимые изменения');
define('TEXT_INFO_CURRENCY_TITLE', 'Название:');
define('TEXT_INFO_CURRENCY_CODE', 'Код:');
define('TEXT_INFO_CURRENCY_SYMBOL_LEFT', 'Символ слева:');
define('TEXT_INFO_CURRENCY_SYMBOL_RIGHT', 'Символ справа:');
define('TEXT_INFO_CURRENCY_DECIMAL_POINT', 'Десятичный разделитель:');
define('TEXT_INFO_CURRENCY_THOUSANDS_POINT', 'Тысячный разделитель:');
define('TEXT_INFO_CURRENCY_DECIMAL_PLACES', 'Десятичные места:');
define('TEXT_INFO_CURRENCY_LAST_UPDATED', 'Последнее обновление:');
define('TEXT_INFO_CURRENCY_VALUE', 'Значение:');
define('TEXT_INFO_CURRENCY_EXAMPLE', 'Пример:');
define('TEXT_INFO_INSERT_INTRO', 'Введите новую валюту на основде данной информации');
define('TEXT_INFO_DELETE_INTRO', 'Вы точно хотите удалить данную валюту?');
define('TEXT_INFO_HEADING_NEW_CURRENCY', 'Новая валюта');
define('TEXT_INFO_HEADING_EDIT_CURRENCY', 'Редактировать валюту');
define('TEXT_INFO_HEADING_DELETE_CURRENCY', 'Удалить валюту');
define('TEXT_INFO_SET_AS_DEFAULT', TEXT_SET_DEFAULT . ' (необходимо обновление значений валюты)');
define('TEXT_INFO_CURRENCY_UPDATED', 'Обменный курс для %s (%s) был успешно обновлен через %s.');

define('ERROR_REMOVE_DEFAULT_CURRENCY', 'Ошибка: Валюта установленная по умолчанию не может быть удалена');
define('ERROR_CURRENCY_INVALID', 'Ошибка: Обменный курс для %s (%s) не был обновлен через %s. Правильный ли код валюты?');
define('WARNING_PRIMARY_SERVER_FAILED', 'Внимание: Главный сервер обмена валют (%s) выдал ошибку для %s (%s) - попытка использовать другой сервер');
?>