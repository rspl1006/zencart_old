<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: english.php 5454 2006-12-29 20:10:17Z drbyte $
 */

// FOLLOWING WERE moved to meta_tags.php
//define('TITLE', 'Цалаш дентал');
//define('SITE_TAGLINE', 'Стоматологические Материалы и Инструменты');
//define('CUSTOM_KEYWORDS', 'ecommerce, open source, shop, online shopping');
// END: moved to meta_tags.php

  define('FOOTER_TEXT_BODY', 'Copyright &copy; ' . date('Y') . ' <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat try 'en_US'
// on FreeBSD try 'en_US.ISO_8859-1'
// on Windows try 'en', or 'English'
  @setlocale(LC_TIME, 'ru.utf8');
  define('DATE_FORMAT_SHORT', '%m/%d/%Y');  // this is used for strftime()
  define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
  define('DATE_FORMAT', 'm/d/Y'); // this is used for date()
  define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

////
// Return date in raw format
// $date should be in format mm/dd/yyyy
// raw date is in format YYYYMMDD, or DDMMYYYY
  if (!function_exists('zen_date_raw')) {
    function zen_date_raw($date, $reverse = false) {
      if ($reverse) {
        return substr($date, 3, 2) . substr($date, 0, 2) . substr($date, 6, 4);
      } else {
        return substr($date, 6, 4) . substr($date, 0, 2) . substr($date, 3, 2);
      }
    }
  }

// if USE_DEFAULT_LANGUAGE_CURRENCY is true, use the following currency, instead of the applications default currency (used when changing language)
  define('LANGUAGE_CURRENCY', 'USD');

// Global entries for the <html> tag
  define('HTML_PARAMS','dir="ltr" lang="en"');

// charset for web pages and emails
  define('CHARSET', 'utf-8');

// footer text in includes/footer.php
  define('FOOTER_TEXT_REQUESTS_SINCE', 'запросы с');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','Дисконтные карточки');
  define('TEXT_GV_NAMES','Дисконтные карточки');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','Код подтверждения');

// used for redeem code sidebox
  define('BOX_HEADING_GV_REDEEM', TEXT_GV_NAME);
  define('BOX_GV_REDEEM_INFO', 'Redemption code: ');

// text for gender
  define('MALE', 'Уважаемый');
  define('FEMALE', 'Уважаемая');
  define('MALE_ADDRESS', 'Уважаемый');
  define('FEMALE_ADDRESS', 'Уважаемая');

// text for date of birth example
  define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

//text for sidebox heading links
  define('BOX_HEADING_LINKS', '&nbsp;&nbsp;[далее]');

// categories box text in sideboxes/categories.php
  define('BOX_HEADING_CATEGORIES', 'Категории');

// manufacturers box text in sideboxes/manufacturers.php
  define('BOX_HEADING_MANUFACTURERS', 'Производители');

// whats_new box text in sideboxes/whats_new.php
  define('BOX_HEADING_WHATS_NEW', 'Новые товары');
  define('CATEGORIES_BOX_HEADING_WHATS_NEW', 'Новые товары');

  define('BOX_HEADING_FEATURED_PRODUCTS', 'Ожидаются');
  define('CATEGORIES_BOX_HEADING_FEATURED_PRODUCTS', 'Ожидаемые товары');
  define('TEXT_NO_FEATURED_PRODUCTS', 'Скоро появятся новые товары,зайдите чуть позже');

  define('TEXT_NO_ALL_PRODUCTS', 'Скоро появятся новые товары,зайдите чуть позже');
  define('CATEGORIES_BOX_HEADING_PRODUCTS_ALL', 'Все товары');

// quick_find box text in sideboxes/quick_find.php
  define('BOX_HEADING_SEARCH', 'Поиск');
  define('BOX_SEARCH_ADVANCED_SEARCH', 'Расширенный поиск');

// specials box text in sideboxes/specials.php
  define('BOX_HEADING_SPECIALS', 'Скидки');
  define('CATEGORIES_BOX_HEADING_SPECIALS','Скидки');

// reviews box text in sideboxes/reviews.php
  define('BOX_HEADING_REVIEWS', 'Отзывы');
  define('BOX_REVIEWS_WRITE_REVIEW', 'Написать отзыв по данному товару');
  define('BOX_REVIEWS_NO_REVIEWS', 'Нет отзывов');
  define('BOX_REVIEWS_TEXT_OF_5_STARS', '%s из 5 звезд!');
  define('TITLE', 'Zen Cart!'); 
// shopping_cart box text in sideboxes/shopping_cart.php
  define('BOX_HEADING_SHOPPING_CART', 'Корзина');
  define('BOX_SHOPPING_CART_EMPTY', 'Корзина пуста');
  define('BOX_SHOPPING_CART_DIVIDER', ' единиц(ы) -&nbsp;');

// order_history box text in sideboxes/order_history.php
  define('BOX_HEADING_CUSTOMER_ORDERS', 'Недавние покупки');

// best_sellers box text in sideboxes/best_sellers.php
  define('BOX_HEADING_BESTSELLERS', 'Лучшие продажи');
  define('BOX_HEADING_BESTSELLERS_IN', 'Лучшие продажи в<br />&nbsp;&nbsp;');

// notifications box text in sideboxes/products_notifications.php
  define('BOX_HEADING_NOTIFICATIONS', 'Уведомления');
  define('BOX_NOTIFICATIONS_NOTIFY', 'Уведомлять меня о новых поступлениях <strong>%s</strong>');
  define('BOX_NOTIFICATIONS_NOTIFY_REMOVE', 'Не уведомлять меня о новых поступлениях <strong>%s</strong>');

// manufacturer box text
  define('BOX_HEADING_MANUFACTURER_INFO', 'Информация о производителе');
  define('BOX_MANUFACTURER_INFO_HOMEPAGE', '%s сайт');
  define('BOX_MANUFACTURER_INFO_OTHER_PRODUCTS', 'Другие товары');

// languages box text in sideboxes/languages.php
  define('BOX_HEADING_LANGUAGES', 'Языки');

// currencies box text in sideboxes/currencies.php
  define('BOX_HEADING_CURRENCIES', 'Валюты');

// information box text in sideboxes/information.php
  define('BOX_HEADING_INFORMATION', 'Информация');
  define('BOX_INFORMATION_PRIVACY', 'Уведомление о секретности');
  define('BOX_INFORMATION_CONDITIONS', 'Условия использования');
  define('BOX_INFORMATION_SHIPPING', 'Отгрузка и возврат товара');
  define('BOX_INFORMATION_CONTACT', 'Обратная связь');
  define('BOX_BBINDEX', 'Форум');
  define('BOX_INFORMATION_UNSUBSCRIBE', 'Отписатся от новостной рассылки');

  define('BOX_INFORMATION_SITE_MAP', 'Карта сайта');

// information box text in sideboxes/more_information.php - were TUTORIAL_
  define('BOX_HEADING_MORE_INFORMATION', 'Другая информация');
  define('BOX_INFORMATION_PAGE_2', 'Страница 2');
  define('BOX_INFORMATION_PAGE_3', 'Страница 3');
  define('BOX_INFORMATION_PAGE_4', 'Страница 4');

// tell a friend box text in sideboxes/tell_a_friend.php
  define('BOX_HEADING_TELL_A_FRIEND', 'Рассказать знакомому');
  define('BOX_TELL_A_FRIEND_TEXT', 'Рассказать знакомому о данном товаре');

// wishlist box text in includes/boxes/wishlist.php
  define('BOX_HEADING_CUSTOMER_WISHLIST', 'Мои пожелания');
  define('BOX_WISHLIST_EMPTY', 'У вас нет записей в списке пожеланий');
  define('IMAGE_BUTTON_ADD_WISHLIST', 'Добавить в список пожеланий');
  define('TEXT_WISHLIST_COUNT', 'Сейчас %s записей в вашем списке пожеланий');
  define('TEXT_DISPLAY_NUMBER_OF_WISHLIST', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> записей в списке пожеланий)');

//New billing address text
  define('SET_AS_PRIMARY' , 'Установить как основной адрес');
  define('NEW_ADDRESS_TITLE', 'Фактический адрес');

// javascript messages
  define('JS_ERROR', 'Найдены ошибки при обработке формы.\n\nСделайте следующие исправления:\n\n');

  define('JS_REVIEW_TEXT', '* Добавьте пару слов к комментарию. Отзыв должен быть как минимум ' . REVIEW_TEXT_MIN_LENGTH . ' символов');
  define('JS_REVIEW_RATING', '* Оцените данный пункт');

  define('JS_ERROR_NO_PAYMENT_MODULE_SELECTED', '* Выберите метод оплаты для вашего заказа');

  define('JS_ERROR_SUBMITTED', 'Данные из формы отправлены. Нажмите OK и подождите окончания процесса');

  define('ERROR_NO_PAYMENT_MODULE_SELECTED', 'Выберите метод оплаты для вашего заказа');
  define('ERROR_CONDITIONS_NOT_ACCEPTED', 'Подтвердите условия использования к данному заказу');
  define('ERROR_PRIVACY_STATEMENT_NOT_ACCEPTED', 'Подтвердите условия секретности');

  define('CATEGORY_COMPANY', 'Информация о компании');
  define('CATEGORY_PERSONAL', 'Ваша персональная информация');
  define('CATEGORY_ADDRESS', 'Ваш адрес');
  define('CATEGORY_CONTACT', 'Ваша контактная информация');
  define('CATEGORY_OPTIONS', 'Опции');
  define('CATEGORY_PASSWORD', 'Ваш пароль');
  define('CATEGORY_LOGIN', 'Логин');
  define('PULL_DOWN_DEFAULT', 'Выберите вашу страну');
  define('PLEASE_SELECT', 'Пожалуйста  выберите...');
  define('TYPE_BELOW', 'Напишите Ваш Выбор...');

  define('ENTRY_COMPANY', 'Компания:');
  define('ENTRY_COMPANY_ERROR', '');
  define('ENTRY_COMPANY_TEXT', '');
  define('ENTRY_GENDER', 'Обращение:');
  define('ENTRY_GENDER_ERROR', 'Выберите обращение');
  define('ENTRY_GENDER_TEXT', '*');
  define('ENTRY_FIRST_NAME', 'Имя:');
  define('ENTRY_FIRST_NAME_ERROR', 'Вы правильно написали имя? Система требует как минимум ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' символов');
  define('ENTRY_FIRST_NAME_TEXT', '*');
  define('ENTRY_LAST_NAME', 'Фамилия:');
  define('ENTRY_LAST_NAME_ERROR', 'Вы правильно написали фамилию? Система требует как минимум ' . ENTRY_LAST_NAME_MIN_LENGTH . ' символов');
  define('ENTRY_LAST_NAME_TEXT', '*');
  define('ENTRY_DATE_OF_BIRTH', 'Дата рождения:');
  define('ENTRY_DATE_OF_BIRTH_ERROR', 'Вы правильно написали дату рождения? Система требует её в формате: MM/DD/YYYY (например 05/21/1970)');
  define('ENTRY_DATE_OF_BIRTH_TEXT', '* (например 05/21/1970)');
  define('ENTRY_EMAIL_ADDRESS', 'Email:');
  define('ENTRY_EMAIL_ADDRESS_ERROR', 'Вы правильно написали email? Система требует как минимум ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' символов');
  define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', 'Система не опознала ваш email');
  define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', 'Данный email уже зарегистрирован - попробуйте войти используйя данный email');
  define('ENTRY_EMAIL_ADDRESS_TEXT', '*');
  define('ENTRY_NICK', 'Ник на форуме:');
  define('ENTRY_NICK_TEXT', ''); // note to display beside nickname input field
  define('ENTRY_NICK_DUPLICATE_ERROR', 'Данный ник уже используется');
  define('ENTRY_NICK_LENGTH_ERROR', 'Ник должен содержать как минимум ' . ENTRY_NICK_MIN_LENGTH . ' символов');
  define('ENTRY_STREET_ADDRESS', 'Адрес:');
  define('ENTRY_STREET_ADDRESS_ERROR', 'Адрес должен содержать как минимум ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' символов');
  define('ENTRY_STREET_ADDRESS_TEXT', '*');
  define('ENTRY_SUBURB', 'Адрес 2:');
  define('ENTRY_SUBURB_ERROR', '');
  define('ENTRY_SUBURB_TEXT', '');
  define('ENTRY_POST_CODE', 'Почтовый индекс:');
  define('ENTRY_POST_CODE_ERROR', 'Почтовый индекс должен содержать как минимум ' . ENTRY_POSTCODE_MIN_LENGTH . ' символов');
  define('ENTRY_POST_CODE_TEXT', '*');
  define('ENTRY_CITY', 'Город:');
  define('ENTRY_CUSTOMERS_REFERRAL', 'Код реферала:');

  define('ENTRY_CITY_ERROR', 'Город должен содержать как минимум ' . ENTRY_CITY_MIN_LENGTH . ' символов');
  define('ENTRY_CITY_TEXT', '*');
  define('ENTRY_STATE', 'Область:');
  define('ENTRY_STATE_ERROR', 'Область должна содержать ' . ENTRY_STATE_MIN_LENGTH . ' символов');
  define('ENTRY_STATE_ERROR_SELECT', 'Выберите область');
  define('ENTRY_STATE_TEXT', '*');
  define('JS_STATE_SELECT', '-- Пожалуйста  выберите --');
  define('ENTRY_COUNTRY', 'Страна:');
  define('ENTRY_COUNTRY_ERROR', 'Вы должны выбрать страну');
  define('ENTRY_COUNTRY_TEXT', '*');
  define('ENTRY_TELEPHONE_NUMBER', 'Телефон:');
  define('ENTRY_TELEPHONE_NUMBER_ERROR', 'Ваш телефонный номер должен содержать как минимум ' . ENTRY_TELEPHONE_MIN_LENGTH . ' символов');
  define('ENTRY_TELEPHONE_NUMBER_TEXT', '*');
  define('ENTRY_FAX_NUMBER', 'Факс:');
  define('ENTRY_FAX_NUMBER_ERROR', '');
  define('ENTRY_FAX_NUMBER_TEXT', '');
  define('ENTRY_NEWSLETTER', 'Подписатся на рассылку новостей');
  define('ENTRY_NEWSLETTER_TEXT', '');
  define('ENTRY_NEWSLETTER_YES', 'Подписатся');
  define('ENTRY_NEWSLETTER_NO', 'Отписатся');
  define('ENTRY_NEWSLETTER_ERROR', '');
  define('ENTRY_PASSWORD', 'Пароль:');
  define('ENTRY_PASSWORD_ERROR', 'Ваш пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов');
  define('ENTRY_PASSWORD_ERROR_NOT_MATCHING', 'Пароли должны совпадать');
  define('ENTRY_PASSWORD_TEXT', '* (как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов)');
  define('ENTRY_PASSWORD_CONFIRMATION', 'Подтверждение пароля:');
  define('ENTRY_PASSWORD_CONFIRMATION_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT', 'Текущий пароль:');
  define('ENTRY_PASSWORD_CURRENT_TEXT', '*');
  define('ENTRY_PASSWORD_CURRENT_ERROR', 'Ваш пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов');
  define('ENTRY_PASSWORD_NEW', 'Новый пароль:');
  define('ENTRY_PASSWORD_NEW_TEXT', '*');
  define('ENTRY_PASSWORD_NEW_ERROR', 'Ваш новый пароль должен содержать как минимум ' . ENTRY_PASSWORD_MIN_LENGTH . ' символов');
  define('ENTRY_PASSWORD_NEW_ERROR_NOT_MATCHING', 'Пароли должны совпадать');
  define('PASSWORD_HIDDEN', '--скрыто--');

  define('FORM_REQUIRED_INFORMATION', '* необходимая информация');
  define('ENTRY_REQUIRED_SYMBOL', '*');

  // constants for use in zen_prev_next_display function
  define('TEXT_RESULT_PAGE', '');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> товаров)');
  define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> заказов)');
  define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> отзывов)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_NEW', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> новых товаров)');
  define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> скидок)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_FEATURED_PRODUCTS', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> ожидаемых товаров)');
  define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_ALL', 'Показано <strong>%d</strong> до <strong>%d</strong> (из <strong>%d</strong> товаров)');

  define('PREVNEXT_TITLE_FIRST_PAGE', 'Первая страница');
  define('PREVNEXT_TITLE_PREVIOUS_PAGE', 'Предидущая страница');
  define('PREVNEXT_TITLE_NEXT_PAGE', 'Следующая страница');
  define('PREVNEXT_TITLE_LAST_PAGE', 'Последняя страница');
  define('PREVNEXT_TITLE_PAGE_NO', 'Страница %d');
  define('PREVNEXT_TITLE_PREV_SET_OF_NO_PAGE', 'Предидущих %d страниц');
  define('PREVNEXT_TITLE_NEXT_SET_OF_NO_PAGE', 'Следующих %d страниц');
  define('PREVNEXT_BUTTON_FIRST', '&lt;&lt;Первая');
  define('PREVNEXT_BUTTON_PREV', '[&lt;&lt;&nbsp;Пред]');
  define('PREVNEXT_BUTTON_NEXT', '[След&nbsp;&gt;&gt;]');
  define('PREVNEXT_BUTTON_LAST', 'Последняя&gt;&gt;');

  define('TEXT_BASE_PRICE','Актуально с: ');

  define('TEXT_CLICK_TO_ENLARGE', 'увеличить');

  define('TEXT_SORT_PRODUCTS', 'Сортировать товары ');
  define('TEXT_DESCENDINGLY', 'наростающей');
  define('TEXT_ASCENDINGLY', 'ниспадающей');
  define('TEXT_BY', ' от ');

  define('TEXT_REVIEW_BY', 'от %s');
  define('TEXT_REVIEW_WORD_COUNT', '%s слов');
  define('TEXT_REVIEW_RATING', 'Рейтинг: %s [%s]');
  define('TEXT_REVIEW_DATE_ADDED', 'Дата добавления: %s');
  define('TEXT_NO_REVIEWS', 'Нет отзывов');

  define('TEXT_NO_NEW_PRODUCTS', 'Скоро появятся новые товары,зайдите чуть позже');

  define('TEXT_UNKNOWN_TAX_RATE', 'Налог на продажи');

  define('TEXT_REQUIRED', '<span class="errorText">Необходимо</span>');

  $warn_path = (isset($_SERVER['SCRIPT_FILENAME']) ? @dirname($_SERVER['SCRIPT_FILENAME']) : '.....');
  define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Внимание: Обнаружена установочная папка : ' . $warn_path . '/zc_install. Удалите её из соображений безопасности');
  define('WARNING_CONFIG_FILE_WRITEABLE', 'Внимание: Открыта запись к файлу конфигурации системы: ' . $warn_path . '/includes/configure.php. Это большой риск - срочно установите права доступа (только чтение, CHMOD 644 или 444)');
  unset($warn_path);
  define('WARNING_SESSION_DIRECTORY_NON_EXISTENT', 'Внимание: Папка для сессий не создана: ' . zen_session_save_path() . '. Сессии не будут работать пока она не будет создана');
  define('WARNING_SESSION_DIRECTORY_NOT_WRITEABLE', 'Внимание: Закрыта запись на папку с сессими: ' . zen_session_save_path() . '. Сессии не будут работать пока вы не установите правильные права на нее (CHMOD 777)');
  define('WARNING_SESSION_AUTO_START', 'Внимание: session.auto_start включено - выключите данную функцию PHP в php.ini');
  define('WARNING_DOWNLOAD_DIRECTORY_NON_EXISTENT', 'Внимание: Папка с файлами для загрузки не создана: ' . DIR_FS_DOWNLOAD . '. Загрузки не будут работать пока она не создана');
  define('WARNING_SQL_CACHE_DIRECTORY_NON_EXISTENT', 'Внимание: SQL кэш папка не создана: ' . DIR_FS_SQL_CACHE . '. SQL кэширование не будет работать пока она не создана');
  define('WARNING_SQL_CACHE_DIRECTORY_NOT_WRITEABLE', 'Внимание: Закрыта запись на папку с SQL кэшом: ' . DIR_FS_SQL_CACHE . '. SQL кэширование не будет работать пока вы не установите на нее правильные права (CHMOD 777)');
  define('WARNING_DATABASE_VERSION_OUT_OF_DATE', 'Вашу базу данных необходимо пропатчить');


  define('TEXT_CCVAL_ERROR_INVALID_DATE', 'Срок действия кредитной карты неправильный');
  define('TEXT_CCVAL_ERROR_INVALID_NUMBER', 'Номер кредитной карты неправильный');
  define('TEXT_CCVAL_ERROR_UNKNOWN_CARD', 'Номер кредитной карты начинающийся с %s был неправильно введен, или мы не поддерживаем данный тип кредитной карты. Попробуйте ещё раз или другую кредитную карту');

  define('BOX_INFORMATION_DISCOUNT_COUPONS', 'Дисконтные карточки');
  define('BOX_INFORMATION_GV', TEXT_GV_NAME . '[Помощь]');
  define('VOUCHER_BALANCE', TEXT_GV_NAME . ' Баланс ');
  define('BOX_HEADING_GIFT_VOUCHER', TEXT_GV_NAME . ' Прфоиль');
  define('GV_FAQ', TEXT_GV_NAME . ' Вопрос-ответ');
  define('ERROR_REDEEMED_AMOUNT', 'Поздравляем, вы получили ');
  define('ERROR_NO_REDEEM_CODE', 'Вы не ввели ' . TEXT_GV_REDEEM . '.');
  define('ERROR_NO_INVALID_REDEEM_GV', 'Неправильное ' . TEXT_GV_NAME . ' ' . TEXT_GV_REDEEM);
  define('TABLE_HEADING_CREDIT', 'Доступные кредиты');
  define('GV_HAS_VOUCHERA', 'У вас есть накопления в ' . TEXT_GV_NAME . ' профиле. Если вы хотите <br />

                           вы можете отправить данные накопления на <a class="pageResults" href="');

  define('GV_HAS_VOUCHERB', '"><strong>email</strong></a> кому нибудь');
  define('ENTRY_AMOUNT_CHECK_ERROR', 'У вас нет такого количества накоплений');
  define('BOX_SEND_TO_FRIEND', 'Отправить ' . TEXT_GV_NAME . ' ');

  define('VOUCHER_REDEEMED',  TEXT_GV_NAME . ' Получен');
  define('CART_COUPON', 'Карточка :');
  define('CART_COUPON_INFO', 'подробнее');
  define('TEXT_SEND_OR_SPEND','У вас есть баланс в вашем ' . TEXT_GV_NAME . ' профиле. Вы можете потратить его или отправить кому нибудь. Для отправки нажмите кнопку ниже');
  define('TEXT_BALANCE_IS', 'Your ' . TEXT_GV_NAME . ' баланс: ');
  define('TEXT_AVAILABLE_BALANCE', 'Ваш ' . TEXT_GV_NAME . ' профиль');

// payment method is GV/Discount
  define('PAYMENT_METHOD_GV', 'Дисконтная карточка');
  define('PAYMENT_MODULE_GV', 'ДК');

  define('TABLE_HEADING_CREDIT_PAYMENT', 'Доступные кредиты');

  define('TEXT_INVALID_REDEEM_COUPON', 'Неправильный код карточки');
  define('TEXT_INVALID_REDEEM_COUPON_MINIMUM', 'Вы должны потратить минимум %s для получения данной карточки');
  define('TEXT_INVALID_STARTDATE_COUPON', 'Данная карточка недоступна');
  define('TEXT_INVALID_FINISDATE_COUPON', 'Данная карточка недействительна');
  define('TEXT_INVALID_USES_COUPON', 'Данная карточка может быть использована только ');
  define('TIMES', ' раз');
  define('TIME', ' раз');
  define('TEXT_INVALID_USES_USER_COUPON', 'Вы использовали код карточки: %s максимальное количество использований для одного клиента ');
  define('REDEEMED_COUPON', 'ценность карточки ');
  define('REDEEMED_MIN_ORDER', 'на заказы ');
  define('REDEEMED_RESTRICTIONS', ' [Ограничение Товар-Категория включено]');
  define('TEXT_ERROR', 'Ошибка');
  define('TEXT_INVALID_COUPON_PRODUCT', 'Данная карточка не может быть прменена к тем товарам,что находятся у вас в корзине');
  define('TEXT_VALID_COUPON', 'Вы получили дисконтную карточку');
  define('TEXT_REMOVE_REDEEM_COUPON_ZONE', 'The coupon code you entered is not valid for the address you have selected.');

// more info in place of buy now
  define('MORE_INFO_TEXT','... подробнее');

// IP Address
  define('TEXT_YOUR_IP_ADDRESS','Ваш IP: ');

//Generic Address Heading
  define('HEADING_ADDRESS_INFORMATION','Информация о адресе');

// cart contents
  define('PRODUCTS_ORDER_QTY_TEXT_IN_CART','Количество в корзине: ');
  define('PRODUCTS_ORDER_QTY_TEXT','Добавить в корзину: ');

// success messages for added to cart when display cart is off
// set to blank for no messages
// for all pages except where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCT', 'Successfully added Product to the cart ...');
// only for where multiple add to cart is used:
  define('SUCCESS_ADDED_TO_CART_PRODUCTS', 'Successfully added selected Product(s) to the cart ...');
  define('TEXT_PRODUCT_WEIGHT_UNIT','кг');

// Shipping
  define('TEXT_SHIPPING_WEIGHT','кг');
  define('TEXT_SHIPPING_BOXES', 'Коробки');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Сохранить:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% выкл');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;выкл');

// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Продажа:&nbsp;');

//universal symbols
  define('TEXT_NUMBER_SYMBOL', '# ');

// banner_box
  define('BOX_HEADING_BANNER_BOX','Спонсоры');
  define('TEXT_BANNER_BOX','Наши спонсоры');

// banner box 2
  define('BOX_HEADING_BANNER_BOX2','Знаете ли вы');
  define('TEXT_BANNER_BOX2','Знаете ли вы');

// banner_box - all
  define('BOX_HEADING_BANNER_BOX_ALL','Спонсоры');
  define('TEXT_BANNER_BOX_ALL','Спонсоры');

// boxes defines
  define('PULL_DOWN_ALL','Выберите');
  define('PULL_DOWN_MANUFACTURERS','- сброс -');
// shipping estimator
  define('PULL_DOWN_SHIPPING_ESTIMATOR_SELECT', 'Выберите');

// general Sort By
  define('TEXT_INFO_SORT_BY','Сортировать: ');

// close window image popups
  define('TEXT_CLOSE_WINDOW',' - закрыть');
// close popups
  define('TEXT_CURRENT_CLOSE_WINDOW','[ закрыть ]');

// iii 031104 added:  File upload error strings
  define('ERROR_FILETYPE_NOT_ALLOWED', 'Ошибка:  тип файла не поддерживается');
  define('WARNING_NO_FILE_UPLOADED', 'Внимание:  файл не загружен');
  define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Успешно:  файл сохранен');
  define('ERROR_FILE_NOT_SAVED', 'Ошибка:  файл не сохранен');
  define('ERROR_DESTINATION_NOT_WRITEABLE', 'Ошибка:  нет прав на запись для папки или файла');
  define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Ошибка: папка не создана');
  define('ERROR_FILE_TOO_BIG', 'Ошибка:Файл весить Больше чем положено!<br />Order can be placed but please contact the site for help with upload');
// End iii added

  define('TEXT_BEFORE_DOWN_FOR_MAINTENANCE', 'Внимание: Магазин будет выключен: ');
  define('TEXT_ADMIN_DOWN_FOR_MAINTENANCE', 'Внимание: Магазин выключен');

  define('PRODUCTS_PRICE_IS_FREE_TEXT','Бесплатно!');
  define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT','Запрос цены');
  define('TEXT_CALL_FOR_PRICE','Запрос цены');

  define('TEXT_INVALID_SELECTION',' Вы выбрали нерабочее значение: ');
  define('TEXT_ERROR_OPTION_FOR',' На выбор для: ');
  define('TEXT_INVALID_USER_INPUT', 'Клиенту необходимо войти<br />');

// product_listing
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','Мин:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','Единиц:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','В корзине:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','Добавить дополнительно:');

  define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING','Макс:');

  define('TEXT_PRODUCTS_MIX_OFF','*Смешивание выкл');
  define('TEXT_PRODUCTS_MIX_ON','*Смешивание вкл');

  define('TEXT_PRODUCTS_MIX_OFF_SHOPPING_CART','*Смешивание значений выкл<br />');
  define('TEXT_PRODUCTS_MIX_ON_SHOPPING_CART','*Смешивание значений вкл<br />');

  define('ERROR_MAXIMUM_QTY','Количество - максимальное количество добавлено в корзину ');
  define('ERROR_CORRECTIONS_HEADING','Исправьте следующее: <br />');

// Downloads Controller
  define('DOWNLOADS_CONTROLLER_ON_HOLD_MSG','Внимание: Загрузки не будут доступны,пока не отрегулированы методы оплаты');
  define('TEXT_FILESIZE_BYTES', ' бит');
  define('TEXT_FILESIZE_MEGS', ' мб');

// shopping cart errors
  define('ERROR_PRODUCT','Название товара: ');
  define('ERROR_PRODUCT_STATUS_SHOPPING_CART','<br />Извините, но даннй товар был удален из нашей базы<br />Данный товар был удален и из вашей корзины');
  define('ERROR_PRODUCT_QUANTITY_MIN',' ... ошибка минимального количества - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS',' ... ошибка количества единиц - ');
  define('ERROR_PRODUCT_OPTION_SELECTION','<br /> ... выбраные неправильные значения ');
  define('ERROR_PRODUCT_QUANTITY_ORDERED','<br /> Вы заказали всего: ');
  define('ERROR_PRODUCT_QUANTITY_MAX',' ... ошибка максимального количества - ');
  define('ERROR_PRODUCT_QUANTITY_MIN_SHOPPING_CART',' ... ошибка минимального количества - ');
  define('ERROR_PRODUCT_QUANTITY_UNITS_SHOPPING_CART',' ... ошибка количества единиц - ');
  define('ERROR_PRODUCT_QUANTITY_MAX_SHOPPING_CART',' ... ошибка максимального количества - ');

// error on checkout when $_SESSION['customers_id' does not exist in customers table
  define('ERROR_CUSTOMERS_ID_INVALID', 'Customer information cannot be validated!<br />Please login or recreate your account ...');
  define('TABLE_HEADING_FEATURED_PRODUCTS','Ожидаемые товары');

  define('TABLE_HEADING_NEW_PRODUCTS', 'Новые товары для %s');
  define('TABLE_HEADING_UPCOMING_PRODUCTS', 'Ожидаемые товары');
  define('TABLE_HEADING_DATE_EXPECTED', 'Дата поступления');
  define('TABLE_HEADING_SPECIALS_INDEX', 'Месячные скидки для %s');

// meta tags special defines
  define('META_TAG_PRODUCTS_PRICE_IS_FREE_TEXT','Бесплатно!');

// customer login
  define('TEXT_SHOWCASE_ONLY','Обратная связь');
// set for login for prices
  define('TEXT_LOGIN_FOR_PRICE_PRICE','Цена недоступна');
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE','Войдит для того,что бы увидеть цену');
// set for show room only
  define('TEXT_LOGIN_FOR_PRICE_PRICE_SHOWROOM', ''); // blank for prices or enter your own text
  define('TEXT_LOGIN_FOR_PRICE_BUTTON_REPLACE_SHOWROOM','Только ознакомление');

// authorization pending
  define('TEXT_AUTHORIZATION_PENDING_PRICE', 'Цена недоступна');
  define('TEXT_AUTHORIZATION_PENDING_BUTTON_REPLACE', 'Ожидание одобрения');
  define('TEXT_LOGIN_TO_SHOP_BUTTON_REPLACE','Войти в магазин');

// text pricing
  define('TEXT_CHARGES_WORD','Подсчитать стоимость:');
  define('TEXT_PER_WORD','<br />Цена за слово: ');
  define('TEXT_WORDS_FREE',' Бесплатное слово(а) ');
  define('TEXT_CHARGES_LETTERS','Подсчитать стоимость:');
  define('TEXT_PER_LETTER','<br />Цена за письмо: ');
  define('TEXT_LETTERS_FREE',' Бесплатное письмо(ма) ');
  define('TEXT_ONETIME_CHARGES','*разовая плата = ');
  define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*разовая плата = ');
  define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Количество дисконтов');
  define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','Количество');
  define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','Цена');
  define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Количество дисконтов при разовой плате');

// textarea attribute input fields
  define('TEXT_MAXIMUM_CHARACTERS_ALLOWED',' максимальное количество допустимых символов');
  define('TEXT_REMAINING','осталось');

// Shipping Estimator
  define('CART_SHIPPING_OPTIONS', 'Подсчитать стоимость отгрузки');
  define('CART_SHIPPING_OPTIONS_LOGIN', '<a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Войдите</span></a>, для показа вашей персональной стоимости отгрузки');
  define('CART_SHIPPING_METHOD_TEXT', 'Доступные методы отгрузки');
  define('CART_SHIPPING_METHOD_RATES', 'Ставки');
  define('CART_SHIPPING_METHOD_TO','Отгрузить: ');
  define('CART_SHIPPING_METHOD_TO_NOLOGIN', 'Отгрузить: <a href="' . zen_href_link(FILENAME_LOGIN, '', 'SSL') . '"><span class="pseudolink">Войти</span></a>');
  define('CART_SHIPPING_METHOD_FREE_TEXT','Бесплатная отгрузка');
  define('CART_SHIPPING_METHOD_ALL_DOWNLOADS','- загрузки');
  define('CART_SHIPPING_METHOD_RECALCULATE','Пересчитать');
  define('CART_SHIPPING_METHOD_ZIP_REQUIRED','true');
  define('CART_SHIPPING_METHOD_ADDRESS','Адрес:');
  define('CART_OT','Подсчитать общую стоимость:');
  define('CART_OT_SHOW','true'); // set to false if you don't want order totals
  define('CART_ITEMS','Товаров в корзине: ');
  define('CART_SELECT','Выберите');
  define('ERROR_CART_UPDATE', 'Обновите ваш заказ<br />');
  define('IMAGE_BUTTON_UPDATE_CART', 'Обновить');
  define('EMPTY_CART_TEXT_NO_QUOTE', 'Whoops! Your session has expired ... Please update your shopping cart for Shipping Quote ...');

// multiple product add to cart
  define('TEXT_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', 'Добавить: ');
  define('TEXT_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', 'Добавить: ');
  define('TEXT_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', 'Добавить: ');
  define('TEXT_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', 'Добавить: ');
  //moved SUBMIT_BUTTON_ADD_PRODUCTS_TO_CART to button_names.php as BUTTON_ADD_PRODUCTS_TO_CART_ALT

// discount qty table
  define('TEXT_HEADER_DISCOUNT_PRICES_PERCENTAGE', 'Количество дисконтов цены');
  define('TEXT_HEADER_DISCOUNT_PRICES_ACTUAL_PRICE', 'Количество дисконтов новой цены');
  define('TEXT_HEADER_DISCOUNT_PRICES_AMOUNT_OFF', 'Количество дисконтов цены выкл');
  define('TEXT_FOOTER_DISCOUNT_QUANTITIES', '* Скидки могут изменятся, основываясь на значениях выше');
  define('TEXT_HEADER_DISCOUNTS_OFF', 'Количество дисконтов недоступно...');

// sort order titles for dropdowns
  define('PULL_DOWN_ALL_RESET','- сброс - ');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME', 'Название товара');
  define('TEXT_INFO_SORT_BY_PRODUCTS_NAME_DESC', 'Название товара - убывание');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE', 'Цена - с низкой до высокой');
  define('TEXT_INFO_SORT_BY_PRODUCTS_PRICE_DESC', 'Цена - с высокой до низкой');
  define('TEXT_INFO_SORT_BY_PRODUCTS_MODEL', 'Модель');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE_DESC', 'Дата добавления - от новых к старым');
  define('TEXT_INFO_SORT_BY_PRODUCTS_DATE', 'Дата добавления - от старых к новым');
  define('TEXT_INFO_SORT_BY_PRODUCTS_SORT_ORDER', 'отображение по умолчанию');

// downloads module defines
  define('TABLE_HEADING_DOWNLOAD_DATE', 'Ссылка недействительна');
  define('TABLE_HEADING_DOWNLOAD_COUNT', 'Осталось');
  define('HEADING_DOWNLOAD', 'Для загрузки файла нажмите на кнопку Загрузить');
  define('TABLE_HEADING_DOWNLOAD_FILENAME','Имя файла');
  define('TABLE_HEADING_PRODUCT_NAME','Название товара');
  define('TABLE_HEADING_BYTE_SIZE','Размер файла');
  define('TEXT_DOWNLOADS_UNLIMITED', 'Неограничено');
  define('TEXT_DOWNLOADS_UNLIMITED_COUNT', '--- *** ---');

// misc
  define('COLON_SPACER', ':&nbsp;&nbsp;');

// table headings for cart display and upcoming products
  define('TABLE_HEADING_QUANTITY', 'Количество');
  define('TABLE_HEADING_PRODUCTS', 'Название товара');
  define('TABLE_HEADING_TOTAL', 'Всего');

// create account - login shared
  define('TABLE_HEADING_PRIVACY_CONDITIONS', 'Уведомление о секретности');
  define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', 'Подтвердите ваше согласие с нашим уведомлением о секретности поставив галочку в данном чекбоксе. Вы можете прочитать его <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">здесь</span></a>.');
  define('TEXT_PRIVACY_CONDITIONS_CONFIRM', 'Я прочитал и согласен');
  define('TABLE_HEADING_ADDRESS_DETAILS', 'Информация о адресе');
  define('TABLE_HEADING_PHONE_FAX_DETAILS', 'Информация о дополнительном адресе');
  define('TABLE_HEADING_DATE_OF_BIRTH', 'Проверьте ваш воразст');
  define('TABLE_HEADING_LOGIN_DETAILS', 'Информация о логине');
  define('TABLE_HEADING_REFERRAL_DETAILS', 'Откуда вы о нас узнали?');

  define('ENTRY_EMAIL_PREFERENCE','Информация о рассылке и email');
  define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
  define('ENTRY_EMAIL_TEXT_DISPLAY','Текст');
  define('EMAIL_SEND_FAILED','Ошибка: Невозможно отправить email: "%s" <%s> с темой: "%s"');

  define('DB_ERROR_NOT_CONNECTED', 'Ошибка - нет соединения с базой данных');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', 'Внимание: Заголовок EZ-страниц верх - Только для IP админа');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', 'Внимание: Заголовок EZ-страниц низ - Только для IP админа');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', 'Внимание: Заголовок EZ-страниц бок - Только для IP админа');

// extra product listing sorter
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER', '');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES', 'Items starting with ...');
  define('TEXT_PRODUCTS_LISTING_ALPHA_SORTER_NAMES_RESET', '-- Reset --');

///////////////////////////////////////////////////////////
// include email extras
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_EMAIL_EXTRAS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_EMAIL_EXTRAS);

// include template specific header defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_HEADER)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_HEADER);

// include template specific button name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_BUTTON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_BUTTON_NAMES);

// include template specific icon name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_ICON_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_ICON_NAMES);

// include template specific other image name defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_OTHER_IMAGES_NAMES)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_OTHER_IMAGES_NAMES);

// credit cards
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_CREDIT_CARDS)) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select. FILENAME_CREDIT_CARDS);

// include template specific whos_online sidebox defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/' . FILENAME_WHOS_ONLINE . '.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . FILENAME_WHOS_ONLINE . '.php');

// include template specific meta tags defines
  if (file_exists(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// END OF EXTERNAL LANGUAGE LINKS
?>