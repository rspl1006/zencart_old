<?php
/**
 * @package admin
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 4804 2006-10-21 16:19:59Z ajeh $
 */

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Admin Powered by Zen Cart :: The Art of E-Commerce');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'ru_RU.WIN-125');
define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'm/d/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'MM/dd/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
  } else {
    return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
  }
}

// removed for meta tags
// page title
//define('TITLE', 'Zen Cart');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');
//die(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Мета теги определены');
define('ICON_METATAGS_OFF', 'Мета теги неопределены');
define('TEXT_LEGEND_META_TAGS', 'Мета теги определены:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>Внимание:</strong> Мета теги магазина содержатся в файле meta_tags.php file.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="en"');

// charset for web pages and emails
define('CHARSET', 'windows-1251');

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Главная');
define('HEADER_TITLE_SUPPORT_SITE', 'Сайт поддержки');
define('HEADER_TITLE_ONLINE_CATALOG', 'Магазин');
define('HEADER_TITLE_VERSION', 'Версия');
define('HEADER_TITLE_LOGOFF', 'Выход');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Дисконт');
  define('TEXT_GV_NAMES','Отправленные дисконтки');
  define('TEXT_DISCOUNT_COUPON', 'Дисконтная карточка');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Код карточки');

// text for gender
define('MALE', 'Мужской');
define('FEMALE', 'Женский');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Настройка');
define('BOX_CONFIGURATION_MYSTORE', 'Магазин');
define('BOX_CONFIGURATION_LOGGING', 'Вход');
define('BOX_CONFIGURATION_CACHE', 'Кэш');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'Модули');
define('BOX_MODULES_PAYMENT', 'Оплата');
define('BOX_MODULES_SHIPPING', 'Отгрузка');
define('BOX_MODULES_ORDER_TOTAL', 'Итоги');
define('BOX_MODULES_PRODUCT_TYPES', 'Типы товаров');


// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Магазин');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Категории/Товары');
define('BOX_CATALOG_PRODUCT_TYPES', 'Типы товаров');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Опциональные названия');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Опциональные значения');
define('BOX_CATALOG_MANUFACTURERS', 'Производители');
define('BOX_CATALOG_REVIEWS', 'Отзывы');
define('BOX_CATALOG_SPECIALS', 'Скидки');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Ожидаемые товары');
define('BOX_CATALOG_SALEMAKER', 'Продажи');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Цены');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Клиенты');
define('BOX_CUSTOMERS_CUSTOMERS', 'Клиенты');
define('BOX_CUSTOMERS_ORDERS', 'Заказы');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Скидки');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Локация / Налоги');
define('BOX_TAXES_COUNTRIES', 'Страны');
define('BOX_TAXES_ZONES', 'Области');
define('BOX_TAXES_GEO_ZONES', 'Создание области');
define('BOX_TAXES_TAX_CLASSES', 'Классы налогов');
define('BOX_TAXES_TAX_RATES', 'Налоговые ставки');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Отчеты');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Просмотренные товары');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Купленные товары');
define('BOX_REPORTS_ORDERS_TOTAL', 'Заказанное клиентом');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Запас товаров');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Клиентские рефералы');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Инструменты');
define('BOX_TOOLS_ADMIN', 'Настройки админа');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Шаблоны');
define('BOX_TOOLS_BACKUP', 'Резервная копия БД');
define('BOX_TOOLS_BANNER_MANAGER', 'Баннеры');
define('BOX_TOOLS_CACHE', 'Контроль кэша');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Языки');
define('BOX_TOOLS_FILE_MANAGER', 'Файлв');
define('BOX_TOOLS_MAIL', 'Отправить Email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Новостная рассылка');
define('BOX_TOOLS_SERVER_INFO', 'Информация о сервере');
define('BOX_TOOLS_WHOS_ONLINE', 'Кто в он-лайне');
define('BOX_TOOLS_STORE_MANAGER', 'Управление магазином');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Для разработчиков');
define('BOX_TOOLS_SQLPATCH','Установить SQL патчи');
define('BOX_TOOLS_EZPAGES','EZ-страницы');

define('BOX_HEADING_EXTRAS', 'Другие товары');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Редактор страниц');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'Главная');
define('BOX_TOOLS_DEFINE_CONTACT_US','Обратная связь');
define('BOX_TOOLS_DEFINE_PRIVACY','Секретность');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Отгрузка и возврат товара');
define('BOX_TOOLS_DEFINE_CONDITIONS','Условия использования');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Успешный контроль');
define('BOX_TOOLS_DEFINE_PAGE_2','Страница 2');
define('BOX_TOOLS_DEFINE_PAGE_3','Страница 3');
define('BOX_TOOLS_DEFINE_PAGE_4','Страница 4');


// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Локализация');
define('BOX_LOCALIZATION_CURRENCIES', 'Валюты');
define('BOX_LOCALIZATION_LANGUAGES', 'Языки');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Статус заказов');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . '');
define('BOX_GV_ADMIN_MAIL', 'Отправка дисконтки');
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . '');
define('BOX_COUPON_ADMIN','Управление');

define('IMAGE_RELEASE', 'Дисконтка ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', 'Ошибка при обработке вашей формы,сделайте следующие коррективы:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* Новым аттрибутам товара необходима цена\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* Новым аттрибутам товара необходим префикс цены\n');

define('JS_PRODUCTS_NAME', '* Новому товару нужно название\n');
define('JS_PRODUCTS_DESCRIPTION', '* Новому товару нужно описание\n');
define('JS_PRODUCTS_PRICE', '* Новому товару нужна цена\n');
define('JS_PRODUCTS_WEIGHT', '* Новому товару нужно определить вес\n');
define('JS_PRODUCTS_QUANTITY', '* Новому товару нужно определить количество\n');
define('JS_PRODUCTS_MODEL', '* Новому товару нужно определить модель\n');
define('JS_PRODUCTS_IMAGE', '* Новому товару нужно определить изображение\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* На новый товар необходимо установить цену\n');

define('JS_GENDER', '* Необходимо определить значение Пол\n');
define('JS_FIRST_NAME', '* Имя должно содержать как минимум ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символов\n');
define('JS_LAST_NAME', '* Фамилия должна содержать как минимум ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символов\n');
define('JS_DOB', '* Дата рождения должна быть в формате: xx/xx/xxxx (месяц/день/год)\n');
define('JS_EMAIL_ADDRESS', '* E-Mail должен быть как минимум ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символов\n');
define('JS_ADDRESS', '* Улица должна содержать как минимум ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символов\n');
define('JS_POST_CODE', '* Почтовый индекс должен быть как минимум ' . ENTRY_POSTCODE_MIN_LENGTH . ' символов\n');
define('JS_CITY', '* Город должен быть как минимум ' . ENTRY_CITY_MIN_LENGTH . ' символов\n');
define('JS_STATE', '* Область должна быть определена\n');
define('JS_STATE_SELECT', '-- Выберите --');
define('JS_ZONE', '* The \'State\' entry must be selected from the list for this country.');
define('JS_COUNTRY', '* The \'Country\' value must be chosen.\n');
define('JS_TELEPHONE', '* The \'Telephone Number\' entry must have at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.\n');
define('JS_PASSWORD', '* Поля пароль и Подтверждение пароля должны быть заполнены и быть как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов\n');

define('JS_ORDER_DOES_NOT_EXIST', 'Номер заказа %s не создан!');

define('CATEGORY_PERSONAL', 'Личное');
define('CATEGORY_ADDRESS', 'Адрес');
define('CATEGORY_CONTACT', 'контакты');
define('CATEGORY_COMPANY', 'Компания');
define('CATEGORY_OPTIONS', 'Опции');

define('ENTRY_GENDER', 'Пол:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">необходимо</span>');
define('ENTRY_FIRST_NAME', 'Имя:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символов</span>');
define('ENTRY_LAST_NAME', 'Фамилия:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символов</span>');
define('ENTRY_DATE_OF_BIRTH', 'Дата рождения:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(например 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символов</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Email неправильный!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Email уже есть в базе данных</span>');
define('ENTRY_COMPANY', 'Компания:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Дисконтная группа');
define('ENTRY_STREET_ADDRESS', 'Адрес:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символов</span>');
define('ENTRY_SUBURB', 'Пригород:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'Почтовый индекс:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_POSTCODE_MIN_LENGTH . ' символов</span>');
define('ENTRY_CITY', 'Город:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_CITY_MIN_LENGTH . ' символов</span>');
define('ENTRY_STATE', 'Область:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">необходимо</span>');
define('ENTRY_COUNTRY', 'Страна:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Номер телефона:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">минимум ' . ENTRY_TELEPHONE_MIN_LENGTH . ' символов</span>');
define('ENTRY_FAX_NUMBER', 'Факс:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Рассылка новостей:');
define('ENTRY_NEWSLETTER_YES', 'Подписан');
define('ENTRY_NEWSLETTER_NO', 'Отписан');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Отправить E-Mail');
define('IMAGE_BACK', 'Назад');
define('IMAGE_BACKUP', 'Резервная копия');
define('IMAGE_CANCEL', 'Сброс');
define('IMAGE_CONFIRM', 'Продолжить');
define('IMAGE_COPY', 'Копировать');
define('IMAGE_COPY_TO', 'Копировать в');
define('IMAGE_DETAILS', 'Детали');
define('IMAGE_DELETE', 'Удалить');
define('IMAGE_EDIT', 'Редактировать');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_FILE_MANAGER', 'Менеджер файлов');
define('IMAGE_ICON_STATUS_GREEN', 'Активно');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Сделать активным');
define('IMAGE_ICON_STATUS_RED', 'Неактивно');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Сделать неактивным');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Error -- too many URL/content types entered');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Error');
define('IMAGE_ICON_INFO', 'Инфо');
define('IMAGE_INSERT', 'Вставить');
define('IMAGE_LOCK', 'Заблокировать');
define('IMAGE_MODULE_INSTALL', 'Установить');
define('IMAGE_MODULE_REMOVE', 'Удалить');
define('IMAGE_MOVE', 'Переместить');
define('IMAGE_NEW_BANNER', 'Новый баннер');
define('IMAGE_NEW_CATEGORY', 'Новая категория');
define('IMAGE_NEW_COUNTRY', 'Новая страна');
define('IMAGE_NEW_CURRENCY', 'Новая валюта');
define('IMAGE_NEW_FILE', 'Новый файл');
define('IMAGE_NEW_FOLDER', 'Новая папка');
define('IMAGE_NEW_LANGUAGE', 'Новый язык');
define('IMAGE_NEW_NEWSLETTER', 'Новая рассылка');
define('IMAGE_NEW_PRODUCT', 'Новый товар');
define('IMAGE_NEW_SALE', 'Новая продажа');
define('IMAGE_NEW_TAX_CLASS', 'Новый класс налогов');
define('IMAGE_NEW_TAX_RATE', 'Новая налоговая ставка');
define('IMAGE_NEW_TAX_ZONE', 'Новая налоговая область');
define('IMAGE_NEW_ZONE', 'Новая область');
define('IMAGE_OPTION_NAMES', 'Опциональные имена');
define('IMAGE_OPTION_VALUES', 'Опциональные значения');
define('IMAGE_ORDERS', 'Заказы');
define('IMAGE_ORDERS_INVOICE', 'Счет');
define('IMAGE_ORDERS_PACKINGSLIP', 'Упаковка');
define('IMAGE_PREVIEW', 'Предпросмотр');
define('IMAGE_RESTORE', 'Восстановить');
define('IMAGE_RESET', 'Сброс');
define('IMAGE_SAVE', 'Сохранить');
define('IMAGE_SEARCH', 'Поиск');
define('IMAGE_SELECT', 'Выбор');
define('IMAGE_SEND', 'Отправить');
define('IMAGE_SEND_EMAIL', 'Отправить Email');
define('IMAGE_UNLOCK', 'Разблокировать');
define('IMAGE_UPDATE', 'Обновить');
define('IMAGE_UPDATE_CURRENCIES', 'Обновить обменный курс');
define('IMAGE_UPLOAD', 'Загрузить');
define('IMAGE_TAX_RATES','Налоговая ставка');
define('IMAGE_DEFINE_ZONES','Определить область');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Цены');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Обновить цены');
define('IMAGE_ADD_BLANK_DISCOUNTS','Добавить ' . DISCOUNT_QTY_ADD . ' количество дисконток');
define('IMAGE_CHECK_VERSION', 'Проверить обновления для системы');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Многоуровневые категории');

define('IMAGE_ICON_STATUS_ON', 'Статус - Включено');
define('IMAGE_ICON_STATUS_OFF', 'Статус - Выключено');
define('IMAGE_ICON_LINKED', 'Товар прилинкован');

define('IMAGE_REMOVE_SPECIAL','Удалить инфо о скидке');
define('IMAGE_REMOVE_FEATURED','Удалить инфо о выставленном товаре');
define('IMAGE_INSTALL_SPECIAL', 'Добавить инфо о скидке');
define('IMAGE_INSTALL_FEATURED', 'Добавить инфо о выставленном товаре');

define('ICON_PRODUCTS_PRICE_MANAGER','Цены');
define('ICON_COPY_TO', 'Копировать в');
define('ICON_CROSS', 'Ложный');
define('ICON_CURRENT_FOLDER', 'Текущая папка');
define('ICON_DELETE', 'Удалить');
define('ICON_EDIT', 'Редактировать');
define('ICON_ERROR', 'Ошибка');
define('ICON_FILE', 'Файл');
define('ICON_FILE_DOWNLOAD', 'Загрузка');
define('ICON_FOLDER', 'Папка');
define('ICON_LOCKED', 'Заблокировано');
define('ICON_MOVE', 'Переместить');
define('ICON_PREVIOUS_LEVEL', 'Предидущий уровень');
define('ICON_PREVIEW', 'Предпросмотр');
define('ICON_RESET', 'Сброс');
define('ICON_STATISTICS', 'Статистика');
define('ICON_SUCCESS', 'Успешно');
define('ICON_TICK', 'Верный');
define('ICON_UNLOCKED', 'Разблокировано');
define('ICON_WARNING', 'Внимание');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'Страница %s из %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> админов)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> баннеров)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> категорий)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> стран)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> клиентов)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> валют)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> языков)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> производителей)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> рассылок)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> заказов)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> статусов заказа)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> ценовых групп)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> товаров)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> типов товара)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> ожидаемых товаров)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products expected)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> отзывов о товарах)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> продаж)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> товаров со скидками)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> классов налогов)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> шаблонов)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> налоговых областей)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> налоговых ставок)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> областей)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'умолчание');
define('TEXT_SET_DEFAULT', 'Установить как умолчание');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Необходимо</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Ошибка: Нет валюты установленной по умолчанию. Установите её в: Инструменты->Локализации->Валюты');

define('TEXT_CACHE_CATEGORIES', 'Категории');
define('TEXT_CACHE_MANUFACTURERS', 'Производители');
define('TEXT_CACHE_ALSO_PURCHASED', 'Уже выбранные модули');

define('TEXT_NONE', '--ничего--');
define('TEXT_TOP', 'Верх');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Ошибка: Директория не создана %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Ошибка: Директория не имеет прав на запись %s');
define('ERROR_FILE_NOT_SAVED', 'Ошибка: Загруженный файл не сохранен');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Ошибка: Тип загружаемого файл недопустим  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Успешно: Файл успешно загружен %s');
define('WARNING_NO_FILE_UPLOADED', 'Внимание: Файл не загружен');
define('WARNING_FILE_UPLOADS_DISABLED', 'Внимание: Загрузка файлов отключена в php.ini');
define('ERROR_ADMIN_SECURITY_WARNING', 'Внимание: Ваш логин и пароль администратора не секретный,смените его');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Ваша база данных должна быть пропатчена');
define('WARN_DATABASE_VERSION_PROBLEM','Верный'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>Внимание:</strong> Магазин закрыт на технические работы ...<br />Внимание: Вы не можете тестировать модули Оплаты/Доставки в данном режиме');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'WARNING: These files should be deleted to prevent security vulnerability: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Warning: Installation directory exists at: ' . DIR_FS_CATALOG . 'zc_install. Please remove this directory for security reasons.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: Your configuration file: %sincludes/configure.php. This is a potential security risk - please set the right user permissions on this file (read-only, CHMOD 644 or 444 are typical).');

define('_JANUARY', 'Январь');
define('_FEBRUARY', 'Февраль');
define('_MARCH', 'Март');
define('_APRIL', 'Апрель');
define('_MAY', 'Май');
define('_JUNE', 'Июнь');
define('_JULY', 'Июль');
define('_AUGUST', 'Август');
define('_SEPTEMBER', 'Сентябрь');
define('_OCTOBER', 'Октябрь');
define('_NOVEMBER', 'Ноябрь');
define('_DECEMBER', 'Декабрь');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> дисконток)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> дисконток)');

define('TEXT_VALID_PRODUCTS_LIST', 'Список товаров');
define('TEXT_VALID_PRODUCTS_ID', 'ID товара');
define('TEXT_VALID_PRODUCTS_NAME', 'Название товара');
define('TEXT_VALID_PRODUCTS_MODEL', 'Модель товара');

define('TEXT_VALID_CATEGORIES_LIST', 'Список категорий');
define('TEXT_VALID_CATEGORIES_ID', 'ID категорий');
define('TEXT_VALID_CATEGORIES_NAME', 'Название категории');

define('DEFINE_LANGUAGE','Определите язык:');

define('BOX_ENTRY_COUNTER_DATE','Счетчик хитов стартовал:');
define('BOX_ENTRY_COUNTER','Счетчик хитов:');

// not installed
define('NOT_INSTALLED_TEXT','Не установлен');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','Сортировка опциональных значений ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>Обновить сортировку аттрибутов от умолчания опционального значения</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>Обновить сортировку товаров и аттрибутов</strong><br />для соответствия с умолчанием сортировки опциональных значений:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','Сортировка опциональных названий');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Контроллер аттрибутов');

// generic model
  define('TEXT_MODEL','Модель:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','Контроллер боксов');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s ожидает одобрения ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' Очередь');
  define('IMAGE_ORDER','Заказ');

  define('BOX_TOOLS_EMAIL_WELCOME','Email');

  define('IMAGE_DISPLAY','Показать');
  define('IMAGE_UPDATE_SORT','Обновить порядок сортировки');
  define('IMAGE_EDIT_PRODUCT','Редактировать товар');
  define('IMAGE_EDIT_ATTRIBUTES','Редактировать аттрибуты');
  define('TEXT_NEW_PRODUCT', 'Товар в категории: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','Опциональные названия и значения');
  define('TEXT_PRODUCTS_PRICE_MANAGER','Цены');
  define('TEXT_PRODUCT_EDIT','Редактировать товар');
  define('TEXT_ATTRIBUTE_EDIT','Редактировать аттрибуты');
  define('TEXT_PRODUCT_DETAILS','Просмотр деталей');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Вычитание количества');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Процент');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Новая цена');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Минимум:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Единицы:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','В корзине:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Добавить дополнение:');

  define('TEXT_PRODUCTS_MIX_OFF','*Нет смешанных опций');
  define('TEXT_PRODUCTS_MIX_ON','*Есть смешанные опции');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Фильтр поиска: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Поиск: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Search for Product(s) - Delimited by commas');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Search for Products Name/Model');

  define('PREV_NEXT_PRODUCT', 'Товары: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Категории отключена</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Товары отключены</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','Демо админки активно. Некоторые настройки отключены');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','Демо админки активно. Некоторые настройки отключены - <strong>Внимание: Отключение админа активно</strong>');
  define('ERROR_ADMIN_DEMO','Демо админки активно. Некоторые настройки отключены');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Доступна новая версия v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Доступен новый патч: v');
  define('TEXT_VERSION_CHECK_PATCH','патч');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Загрузить здесь');
  define('TEXT_VERSION_CHECK_CURRENT','Версия вашей системы не требует обновления');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Показано <b>%d</b> до <b>%d</b> (из <b>%d</b> загрузок)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Загрузки');

define('BOX_CATALOG_FEATURED','Показанные товары');

define('ERROR_NOTHING_SELECTED', 'Ничего не выбрано,изменений не было');
define('TEXT_STATUS_WARNING','<strong>Внимание:</strong> статус вкл/выкл выставляется автоматически при выставлении даты');

define('TEXT_LEGEND_LINKED', 'Прилинкованный товар');
define('TEXT_MASTER_CATEGORIES_ID','Главная категория товаров:');
define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_STATUS_OFF', 'Статус Выкл ');
define('TEXT_LEGEND_STATUS_ON', 'Статус Вкл ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>Внимание: Главная категория используется для ценовых предложений где<br />категория с товаром затрагивает цену на прилинкованные товары, например: Продажи</strong>');
define('TEXT_YES', 'Да');
define('TEXT_NO', 'Нет');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>Ошибка в конфигурации отгрузки!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Внимание:</strong> Почтовый индекс магазина неопределен. Установите его в разделе Настройка-Отгрузка/упаковка');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Внимание:</strong> Нулевой вес создан для Бесплатной отгрузки и модуль Бесплатной отгрузки не включен');
define('ERROR_USPS_STATUS', '<strong>Внимание:</strong> USPS пропущно имя пользователя или пароль, или был установлен режим Тестирования уже после включения режима Работа<br />Если у вас все ещё есть проблемы, свяжитесь с USPS и активируйте свой профиль');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTE: You have no shipping modules activated. Please go to Modules->Shipping to configure.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTE: You have no payment modules activated. Please go to Modules->Payment to configure.');

// text pricing
define('TEXT_CHARGES_WORD','Расчет:');
define('TEXT_PER_WORD','<br />Плата за слово: ');
define('TEXT_WORDS_FREE',' Бесплатное слово(а) ');
define('TEXT_CHARGES_LETTERS','Расчет:');
define('TEXT_PER_LETTER','<br />Цена за письмо: ');
define('TEXT_LETTERS_FREE',' Бесплатное письмо(а) ');
define('TEXT_ONETIME_CHARGES','*одновременные расчеты = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*одновременные расчеты = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Количество скидок');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Количество');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','Цена');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Количество дисконток за один раз');
define('TEXT_CATEGORIES_PRODUCTS', 'Выберите категория с товарами');
define('TEXT_PRODUCT_TO_VIEW', 'Выберите товар для просмотра и нажмите Отобразить ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Неправильный ID главной категории');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>Внимание:</strong> Данный товар прилинкован к многоуровневой категории но главная категория не установлена!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'Товару необходима цена');
define('PRODUCTS_PRICE_IS_FREE_TEXT','Товар бесплатен');

define('TEXT_PRODUCT_WEIGHT_UNIT','вес одной единицы товара');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Максимум:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Сохранить:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% выкл');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;выкл');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Продажа:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Если у вас нет редактора HTML или JavaScript отключен, вы можете ввести HTML текст вручную');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Внимание: вы используете текст для отправки email. Если вы хотите отправить его в формате HTML вам нужно включить "использовать MIME HTML" под Email опциями</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Внимание: Внимание: вы используете текст для отправки email. Если вы хотите отправить его в формате HTML вам нужно включить "использовать MIME HTML" под Email опциями</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Вы видите данный текст потому, что мы отправили вам email в HTML формате но ваш email не может отображать HTML сообщения");
define('ENTRY_EMAIL_PREFERENCE','Email форматирование:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Выберите "ничего" для отключения всей почты');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT');
define('ENTRY_EMAIL_NONE_DISPLAY','Никогда');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Отказавшиеся от рассылки');
define('ENTRY_NOTHING_TO_SEND','Вы не составили сообщение');
 define('EMAIL_SEND_FAILED','Ошибка: Невозможно отправить почту: "%s" <%s> с темой: "%s"');

  define('EDITOR_NONE', 'Plain Text');
  define('TEXT_EDITOR_INFO', 'Текстовый редактор');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'You have an HTML editor selected in \'My Store\' but the \'/editors/\' folder cannot be located. Please disable your selection or move your editor files into the \''.DIR_WS_CATALOG.'editors/\' folder');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Сортировка отображения категорий и товаров: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Сортировка товаров и их названий');
  define('TEXT_SORT_PRODUCTS_NAME', 'Название товара');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Модель товара');
  define('TEXT_SORT_PRODUCTS_QUANTITY', 'Количество + и название товара');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', 'Количество - и название товара');
  define('TEXT_SORT_PRODUCTS_PRICE', 'Цена + и название товара');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', 'Цена - и название товара');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', 'Сортировка категорий и их названий');
  define('TEXT_SORT_CATEGORIES_NAME', 'Название категории');



  define('TABLE_HEADING_YES','Да');
  define('TABLE_HEADING_NO','Нет');
  define('TEXT_IMAGES_OVERWRITE', 'Переписать уже созданное изображение?');
  define('TEXT_IMAGE_OVERWRITE_WARNING','Внимание: Имя файла обновлено,но он сам не изменен ');
  define('TEXT_IMAGE_OVERWRITE_WARNING','WARNING: FILENAME was updated but not overwritten ');
  define('TEXT_IMAGES_DELETE', '<strong>Delete Image?</strong> NOTE: Removes Image from Product, Image is NOT removed from server:');
  define('TEXT_IMAGE_CURRENT', 'Image Name: ');

  define('ERROR_DEFINE_OPTION_NAMES', 'Внимание: Не определно ни одно опциональное название');
  define('ERROR_DEFINE_OPTION_VALUES', 'Внимание: Не определено ни одно опциональное значение');
  define('ERROR_DEFINE_PRODUCTS', 'Внимание: Ни один товар не бы определен');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', 'Внимание: Нет ID главной категории который был бы определен для данного товара');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','Добавить включая подкатегории');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','Добавить не включая подкатегории');

  define('BUTTON_PREVIOUS_ALT','Предидущий товар');
  define('BUTTON_NEXT_ALT','Следующий товар');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Многоуровневые категории');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Скопировать товар в многоуровненвые категории');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'Все функции Копировать, Добавить и Удалить - отключены');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Показывать глобальные функции - Вкл');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Показывать глобальные функции - Выкл');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', 'Ошибка: Невозможно прилинковать товар в ту же категорию');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', 'Ошибка: Папка с изображениями не имеет прав на запись: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', 'Ошибка: Папка с изображениями не создана: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', 'Ошибка: Категория не может быть перемещена в подкатегорию');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', 'Ошибка: Невозможно переместить товар в ту же категория или в категорию в которой он только что создан');
  define('ERROR_CATEGORY_HAS_PRODUCTS', 'Ошибка: В категории есть товары');
  define('SUCCESS_CATEGORY_MOVED', 'Успешно! Категория была успешно перемещена ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', 'Ошибка: Невозможно переместить категорию в ту же категорию! ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'Внимание: Заголовок страниц EZ - Только для IP админа');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'Внимание: Низ страниц EZ - Только для IP админа');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'Внимание: Бок страниц EZ - Только для IP админа');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','Внимание: Данный товар отмечен как - Бесплатная отгрузка и пропускает Адрес отгрузки');
  define('TEXT_VIRTUAL_EDIT','Внимание: Данный товар отмечен как - Бесплатная отгрузка и пропускает Адрес отгрузки');
  define('TEXT_FREE_SHIPPING_PREVIEW','Внимание: Данный товар отмечен как - Бесплатная отгрузка и необходим Адрес отгрузки');
  define('TEXT_FREE_SHIPPING_EDIT','Внимание: Согласие сделает данный товар - Бесплатная отгрузка и необходим Адрес отгрузки');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'Внимание: история действия админа устарела более чем на 2 месяца и должна быть очищена... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'Внимание: история действий админа имеет более 50 000 записец и должна быть очищена ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Перейдите в настройки магазина для сброса истории действий админа');

  define('CATEGORY_HAS_SUBCATEGORIES', 'Внимание: В категории есть подкатегории<br />Товар не может быть добавлен');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


?>