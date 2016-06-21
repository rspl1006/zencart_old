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
define('ICON_METATAGS_ON', '���� ���� ����������');
define('ICON_METATAGS_OFF', '���� ���� ������������');
define('TEXT_LEGEND_META_TAGS', '���� ���� ����������:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>��������:</strong> ���� ���� �������� ���������� � ����� meta_tags.php file.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="en"');

// charset for web pages and emails
define('CHARSET', 'windows-1251');

// header text in includes/header.php
define('HEADER_TITLE_TOP', '�������');
define('HEADER_TITLE_SUPPORT_SITE', '���� ���������');
define('HEADER_TITLE_ONLINE_CATALOG', '�������');
define('HEADER_TITLE_VERSION', '������');
define('HEADER_TITLE_LOGOFF', '�����');
//define('HEADER_TITLE_ADMINISTRATION', 'Administration');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','�������');
  define('TEXT_GV_NAMES','������������ ���������');
  define('TEXT_DISCOUNT_COUPON', '���������� ��������');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','��� ��������');

// text for gender
define('MALE', '�������');
define('FEMALE', '�������');

// text for date of birth example
define('DOB_FORMAT_STRING', 'mm/dd/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', '���������');
define('BOX_CONFIGURATION_MYSTORE', '�������');
define('BOX_CONFIGURATION_LOGGING', '����');
define('BOX_CONFIGURATION_CACHE', '���');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', '������');
define('BOX_MODULES_PAYMENT', '������');
define('BOX_MODULES_SHIPPING', '��������');
define('BOX_MODULES_ORDER_TOTAL', '�����');
define('BOX_MODULES_PRODUCT_TYPES', '���� �������');


// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', '�������');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', '���������/������');
define('BOX_CATALOG_PRODUCT_TYPES', '���� �������');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', '������������ ��������');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', '������������ ��������');
define('BOX_CATALOG_MANUFACTURERS', '�������������');
define('BOX_CATALOG_REVIEWS', '������');
define('BOX_CATALOG_SPECIALS', '������');
define('BOX_CATALOG_PRODUCTS_EXPECTED', '��������� ������');
define('BOX_CATALOG_SALEMAKER', '�������');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', '����');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', '�������');
define('BOX_CUSTOMERS_CUSTOMERS', '�������');
define('BOX_CUSTOMERS_ORDERS', '������');
define('BOX_CUSTOMERS_GROUP_PRICING', '������');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', '������� / ������');
define('BOX_TAXES_COUNTRIES', '������');
define('BOX_TAXES_ZONES', '�������');
define('BOX_TAXES_GEO_ZONES', '�������� �������');
define('BOX_TAXES_TAX_CLASSES', '������ �������');
define('BOX_TAXES_TAX_RATES', '��������� ������');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', '������');
define('BOX_REPORTS_PRODUCTS_VIEWED', '������������� ������');
define('BOX_REPORTS_PRODUCTS_PURCHASED', '��������� ������');
define('BOX_REPORTS_ORDERS_TOTAL', '���������� ��������');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', '����� �������');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', '���������� ��������');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', '�����������');
define('BOX_TOOLS_ADMIN', '��������� ������');
define('BOX_TOOLS_TEMPLATE_SELECT', '�������');
define('BOX_TOOLS_BACKUP', '��������� ����� ��');
define('BOX_TOOLS_BANNER_MANAGER', '�������');
define('BOX_TOOLS_CACHE', '�������� ����');
define('BOX_TOOLS_DEFINE_LANGUAGE', '�����');
define('BOX_TOOLS_FILE_MANAGER', '�����');
define('BOX_TOOLS_MAIL', '��������� Email');
define('BOX_TOOLS_NEWSLETTER_MANAGER', '��������� ��������');
define('BOX_TOOLS_SERVER_INFO', '���������� � �������');
define('BOX_TOOLS_WHOS_ONLINE', '��� � ��-�����');
define('BOX_TOOLS_STORE_MANAGER', '���������� ���������');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', '��� �������������');
define('BOX_TOOLS_SQLPATCH','���������� SQL �����');
define('BOX_TOOLS_EZPAGES','EZ-��������');

define('BOX_HEADING_EXTRAS', '������ ������');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','�������� �������');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', '�������');
define('BOX_TOOLS_DEFINE_CONTACT_US','�������� �����');
define('BOX_TOOLS_DEFINE_PRIVACY','�����������');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','�������� � ������� ������');
define('BOX_TOOLS_DEFINE_CONDITIONS','������� �������������');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','�������� ��������');
define('BOX_TOOLS_DEFINE_PAGE_2','�������� 2');
define('BOX_TOOLS_DEFINE_PAGE_3','�������� 3');
define('BOX_TOOLS_DEFINE_PAGE_4','�������� 4');


// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', '�����������');
define('BOX_LOCALIZATION_CURRENCIES', '������');
define('BOX_LOCALIZATION_LANGUAGES', '�����');
define('BOX_LOCALIZATION_ORDERS_STATUS', '������ �������');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . '');
define('BOX_GV_ADMIN_MAIL', '�������� ���������');
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . '');
define('BOX_COUPON_ADMIN','����������');

define('IMAGE_RELEASE', '��������� ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', '������ ��� ��������� ����� �����,�������� ��������� ����������:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* ����� ���������� ������ ���������� ����\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* ����� ���������� ������ ��������� ������� ����\n');

define('JS_PRODUCTS_NAME', '* ������ ������ ����� ��������\n');
define('JS_PRODUCTS_DESCRIPTION', '* ������ ������ ����� ��������\n');
define('JS_PRODUCTS_PRICE', '* ������ ������ ����� ����\n');
define('JS_PRODUCTS_WEIGHT', '* ������ ������ ����� ���������� ���\n');
define('JS_PRODUCTS_QUANTITY', '* ������ ������ ����� ���������� ����������\n');
define('JS_PRODUCTS_MODEL', '* ������ ������ ����� ���������� ������\n');
define('JS_PRODUCTS_IMAGE', '* ������ ������ ����� ���������� �����������\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* �� ����� ����� ���������� ���������� ����\n');

define('JS_GENDER', '* ���������� ���������� �������� ���\n');
define('JS_FIRST_NAME', '* ��� ������ ��������� ��� ������� ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' ��������\n');
define('JS_LAST_NAME', '* ������� ������ ��������� ��� ������� ' . ENTRY_LAST_NAME_MIN_LENGTH . ' ��������\n');
define('JS_DOB', '* ���� �������� ������ ���� � �������: xx/xx/xxxx (�����/����/���)\n');
define('JS_EMAIL_ADDRESS', '* E-Mail ������ ���� ��� ������� ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ��������\n');
define('JS_ADDRESS', '* ����� ������ ��������� ��� ������� ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ��������\n');
define('JS_POST_CODE', '* �������� ������ ������ ���� ��� ������� ' . ENTRY_POSTCODE_MIN_LENGTH . ' ��������\n');
define('JS_CITY', '* ����� ������ ���� ��� ������� ' . ENTRY_CITY_MIN_LENGTH . ' ��������\n');
define('JS_STATE', '* ������� ������ ���� ����������\n');
define('JS_STATE_SELECT', '-- �������� --');
define('JS_ZONE', '* The \'State\' entry must be selected from the list for this country.');
define('JS_COUNTRY', '* The \'Country\' value must be chosen.\n');
define('JS_TELEPHONE', '* The \'Telephone Number\' entry must have at least ' . ENTRY_TELEPHONE_MIN_LENGTH . ' characters.\n');
define('JS_PASSWORD', '* ���� ������ � ������������� ������ ������ ���� ��������� � ���� ��� ������� ' . ENTRY_PASSWORD_MIN_LENGTH . ' ��������\n');

define('JS_ORDER_DOES_NOT_EXIST', '����� ������ %s �� ������!');

define('CATEGORY_PERSONAL', '������');
define('CATEGORY_ADDRESS', '�����');
define('CATEGORY_CONTACT', '��������');
define('CATEGORY_COMPANY', '��������');
define('CATEGORY_OPTIONS', '�����');

define('ENTRY_GENDER', '���:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">����������</span>');
define('ENTRY_FIRST_NAME', '���:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' ��������</span>');
define('ENTRY_LAST_NAME', '�������:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_LAST_NAME_MIN_LENGTH . ' ��������</span>');
define('ENTRY_DATE_OF_BIRTH', '���� ��������:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(�������� 05/21/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ��������</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">Email ������������!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">Email ��� ���� � ���� ������</span>');
define('ENTRY_COMPANY', '��������:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', '���������� ������');
define('ENTRY_STREET_ADDRESS', '�����:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ��������</span>');
define('ENTRY_SUBURB', '��������:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', '�������� ������:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_POSTCODE_MIN_LENGTH . ' ��������</span>');
define('ENTRY_CITY', '�����:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_CITY_MIN_LENGTH . ' ��������</span>');
define('ENTRY_STATE', '�������:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">����������</span>');
define('ENTRY_COUNTRY', '������:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', '����� ��������:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">������� ' . ENTRY_TELEPHONE_MIN_LENGTH . ' ��������</span>');
define('ENTRY_FAX_NUMBER', '����:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', '�������� ��������:');
define('ENTRY_NEWSLETTER_YES', '��������');
define('ENTRY_NEWSLETTER_NO', '�������');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
define('IMAGE_ANI_SEND_EMAIL', '��������� E-Mail');
define('IMAGE_BACK', '�����');
define('IMAGE_BACKUP', '��������� �����');
define('IMAGE_CANCEL', '�����');
define('IMAGE_CONFIRM', '����������');
define('IMAGE_COPY', '����������');
define('IMAGE_COPY_TO', '���������� �');
define('IMAGE_DETAILS', '������');
define('IMAGE_DELETE', '�������');
define('IMAGE_EDIT', '�������������');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_FILE_MANAGER', '�������� ������');
define('IMAGE_ICON_STATUS_GREEN', '�������');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', '������� ��������');
define('IMAGE_ICON_STATUS_RED', '���������');
define('IMAGE_ICON_STATUS_RED_LIGHT', '������� ����������');
define('IMAGE_ICON_STATUS_RED_EZPAGES', 'Error -- too many URL/content types entered');
define('IMAGE_ICON_STATUS_RED_ERROR', 'Error');
define('IMAGE_ICON_INFO', '����');
define('IMAGE_INSERT', '��������');
define('IMAGE_LOCK', '�������������');
define('IMAGE_MODULE_INSTALL', '����������');
define('IMAGE_MODULE_REMOVE', '�������');
define('IMAGE_MOVE', '�����������');
define('IMAGE_NEW_BANNER', '����� ������');
define('IMAGE_NEW_CATEGORY', '����� ���������');
define('IMAGE_NEW_COUNTRY', '����� ������');
define('IMAGE_NEW_CURRENCY', '����� ������');
define('IMAGE_NEW_FILE', '����� ����');
define('IMAGE_NEW_FOLDER', '����� �����');
define('IMAGE_NEW_LANGUAGE', '����� ����');
define('IMAGE_NEW_NEWSLETTER', '����� ��������');
define('IMAGE_NEW_PRODUCT', '����� �����');
define('IMAGE_NEW_SALE', '����� �������');
define('IMAGE_NEW_TAX_CLASS', '����� ����� �������');
define('IMAGE_NEW_TAX_RATE', '����� ��������� ������');
define('IMAGE_NEW_TAX_ZONE', '����� ��������� �������');
define('IMAGE_NEW_ZONE', '����� �������');
define('IMAGE_OPTION_NAMES', '������������ �����');
define('IMAGE_OPTION_VALUES', '������������ ��������');
define('IMAGE_ORDERS', '������');
define('IMAGE_ORDERS_INVOICE', '����');
define('IMAGE_ORDERS_PACKINGSLIP', '��������');
define('IMAGE_PREVIEW', '������������');
define('IMAGE_RESTORE', '������������');
define('IMAGE_RESET', '�����');
define('IMAGE_SAVE', '���������');
define('IMAGE_SEARCH', '�����');
define('IMAGE_SELECT', '�����');
define('IMAGE_SEND', '���������');
define('IMAGE_SEND_EMAIL', '��������� Email');
define('IMAGE_UNLOCK', '��������������');
define('IMAGE_UPDATE', '��������');
define('IMAGE_UPDATE_CURRENCIES', '�������� �������� ����');
define('IMAGE_UPLOAD', '���������');
define('IMAGE_TAX_RATES','��������� ������');
define('IMAGE_DEFINE_ZONES','���������� �������');
define('IMAGE_PRODUCTS_PRICE_MANAGER', '����');
define('IMAGE_UPDATE_PRICE_CHANGES', '�������� ����');
define('IMAGE_ADD_BLANK_DISCOUNTS','�������� ' . DISCOUNT_QTY_ADD . ' ���������� ���������');
define('IMAGE_CHECK_VERSION', '��������� ���������� ��� �������');
define('IMAGE_PRODUCTS_TO_CATEGORIES', '�������������� ���������');

define('IMAGE_ICON_STATUS_ON', '������ - ��������');
define('IMAGE_ICON_STATUS_OFF', '������ - ���������');
define('IMAGE_ICON_LINKED', '����� �����������');

define('IMAGE_REMOVE_SPECIAL','������� ���� � ������');
define('IMAGE_REMOVE_FEATURED','������� ���� � ������������ ������');
define('IMAGE_INSTALL_SPECIAL', '�������� ���� � ������');
define('IMAGE_INSTALL_FEATURED', '�������� ���� � ������������ ������');

define('ICON_PRODUCTS_PRICE_MANAGER','����');
define('ICON_COPY_TO', '���������� �');
define('ICON_CROSS', '������');
define('ICON_CURRENT_FOLDER', '������� �����');
define('ICON_DELETE', '�������');
define('ICON_EDIT', '�������������');
define('ICON_ERROR', '������');
define('ICON_FILE', '����');
define('ICON_FILE_DOWNLOAD', '��������');
define('ICON_FOLDER', '�����');
define('ICON_LOCKED', '�������������');
define('ICON_MOVE', '�����������');
define('ICON_PREVIOUS_LEVEL', '���������� �������');
define('ICON_PREVIEW', '������������');
define('ICON_RESET', '�����');
define('ICON_STATISTICS', '����������');
define('ICON_SUCCESS', '�������');
define('ICON_TICK', '������');
define('ICON_UNLOCKED', '��������������');
define('ICON_WARNING', '��������');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', '�������� %s �� %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ���������)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> �����)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> �����)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ������)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������������)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> �������� ������)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ������� �����)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> �������)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ����� ������)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������� �������)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Displaying <b>%d</b> to <b>%d</b> (of <b>%d</b> products expected)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ������� � �������)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ������)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ������� �� ��������)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ������� �������)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������� ��������)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������� ������)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', '���������');
define('TEXT_SET_DEFAULT', '���������� ��� ���������');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* ����������</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', '������: ��� ������ ������������� �� ���������. ���������� � �: �����������->�����������->������');

define('TEXT_CACHE_CATEGORIES', '���������');
define('TEXT_CACHE_MANUFACTURERS', '�������������');
define('TEXT_CACHE_ALSO_PURCHASED', '��� ��������� ������');

define('TEXT_NONE', '--������--');
define('TEXT_TOP', '����');

define('ERROR_DESTINATION_DOES_NOT_EXIST', '������: ���������� �� ������� %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', '������: ���������� �� ����� ���� �� ������ %s');
define('ERROR_FILE_NOT_SAVED', '������: ����������� ���� �� ��������');
define('ERROR_FILETYPE_NOT_ALLOWED', '������: ��� ������������ ���� ����������  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '�������: ���� ������� �������� %s');
define('WARNING_NO_FILE_UPLOADED', '��������: ���� �� ��������');
define('WARNING_FILE_UPLOADS_DISABLED', '��������: �������� ������ ��������� � php.ini');
define('ERROR_ADMIN_SECURITY_WARNING', '��������: ��� ����� � ������ �������������� �� ���������,������� ���');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','���� ���� ������ ������ ���� ����������');
define('WARN_DATABASE_VERSION_PROBLEM','������'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>��������:</strong> ������� ������ �� ����������� ������ ...<br />��������: �� �� ������ ����������� ������ ������/�������� � ������ ������');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', 'WARNING: These files should be deleted to prevent security vulnerability: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', 'Warning: Installation directory exists at: ' . DIR_FS_CATALOG . 'zc_install. Please remove this directory for security reasons.');
define('WARNING_CONFIG_FILE_WRITEABLE', 'Warning: Your configuration file: %sincludes/configure.php. This is a potential security risk - please set the right user permissions on this file (read-only, CHMOD 644 or 444 are typical).');

define('_JANUARY', '������');
define('_FEBRUARY', '�������');
define('_MARCH', '����');
define('_APRIL', '������');
define('_MAY', '���');
define('_JUNE', '����');
define('_JULY', '����');
define('_AUGUST', '������');
define('_SEPTEMBER', '��������');
define('_OCTOBER', '�������');
define('_NOVEMBER', '������');
define('_DECEMBER', '�������');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ���������)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ���������)');

define('TEXT_VALID_PRODUCTS_LIST', '������ �������');
define('TEXT_VALID_PRODUCTS_ID', 'ID ������');
define('TEXT_VALID_PRODUCTS_NAME', '�������� ������');
define('TEXT_VALID_PRODUCTS_MODEL', '������ ������');

define('TEXT_VALID_CATEGORIES_LIST', '������ ���������');
define('TEXT_VALID_CATEGORIES_ID', 'ID ���������');
define('TEXT_VALID_CATEGORIES_NAME', '�������� ���������');

define('DEFINE_LANGUAGE','���������� ����:');

define('BOX_ENTRY_COUNTER_DATE','������� ����� ���������:');
define('BOX_ENTRY_COUNTER','������� �����:');

// not installed
define('NOT_INSTALLED_TEXT','�� ����������');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','���������� ������������ �������� ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>�������� ���������� ���������� �� ��������� ������������� ��������</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>�������� ���������� ������� � ����������</strong><br />��� ������������ � ���������� ���������� ������������ ��������:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','���������� ������������ ��������');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','���������� ����������');

// generic model
  define('TEXT_MODEL','������:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','���������� ������');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s ������� ��������� ');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . ' �������');
  define('IMAGE_ORDER','�����');

  define('BOX_TOOLS_EMAIL_WELCOME','Email');

  define('IMAGE_DISPLAY','��������');
  define('IMAGE_UPDATE_SORT','�������� ������� ����������');
  define('IMAGE_EDIT_PRODUCT','������������� �����');
  define('IMAGE_EDIT_ATTRIBUTES','������������� ���������');
  define('TEXT_NEW_PRODUCT', '����� � ���������: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','������������ �������� � ��������');
  define('TEXT_PRODUCTS_PRICE_MANAGER','����');
  define('TEXT_PRODUCT_EDIT','������������� �����');
  define('TEXT_ATTRIBUTE_EDIT','������������� ���������');
  define('TEXT_PRODUCT_DETAILS','�������� �������');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', '��������� ����������');
  define('DEDUCTION_TYPE_DROPDOWN_1', '�������');
  define('DEDUCTION_TYPE_DROPDOWN_2', '����� ����');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','�������:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','�������:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','� �������:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','�������� ����������:');

  define('TEXT_PRODUCTS_MIX_OFF','*��� ��������� �����');
  define('TEXT_PRODUCTS_MIX_ON','*���� ��������� �����');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','������ ������: ');
  define('HEADING_TITLE_SEARCH_DETAIL','�����: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', 'Search for Product(s) - Delimited by commas');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', 'Search for Products Name/Model');

  define('PREV_NEXT_PRODUCT', '������: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*��������� ���������</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*������ ���������</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','���� ������� �������. ��������� ��������� ���������');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','���� ������� �������. ��������� ��������� ��������� - <strong>��������: ���������� ������ �������</strong>');
  define('ERROR_ADMIN_DEMO','���� ������� �������. ��������� ��������� ���������');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','�������� ����� ������ v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','�������� ����� ����: v');
  define('TEXT_VERSION_CHECK_PATCH','����');
  define('TEXT_VERSION_CHECK_DOWNLOAD','��������� �����');
  define('TEXT_VERSION_CHECK_CURRENT','������ ����� ������� �� ������� ����������');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', '�������� <b>%d</b> �� <b>%d</b> (�� <b>%d</b> ��������)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', '��������');

define('BOX_CATALOG_FEATURED','���������� ������');

define('ERROR_NOTHING_SELECTED', '������ �� �������,��������� �� ����');
define('TEXT_STATUS_WARNING','<strong>��������:</strong> ������ ���/���� ������������ ������������� ��� ����������� ����');

define('TEXT_LEGEND_LINKED', '�������������� �����');
define('TEXT_MASTER_CATEGORIES_ID','������� ��������� �������:');
define('TEXT_LEGEND', 'LEGEND: ');
define('TEXT_LEGEND_STATUS_OFF', '������ ���� ');
define('TEXT_LEGEND_STATUS_ON', '������ ��� ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>��������: ������� ��������� ������������ ��� ������� ����������� ���<br />��������� � ������� ����������� ���� �� �������������� ������, ��������: �������</strong>');
define('TEXT_YES', '��');
define('TEXT_NO', '���');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>������ � ������������ ��������!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>��������:</strong> �������� ������ �������� �����������. ���������� ��� � ������� ���������-��������/��������');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>��������:</strong> ������� ��� ������ ��� ���������� �������� � ������ ���������� �������� �� �������');
define('ERROR_USPS_STATUS', '<strong>��������:</strong> USPS �������� ��� ������������ ��� ������, ��� ��� ���������� ����� ������������ ��� ����� ��������� ������ ������<br />���� � ��� ��� ��� ���� ��������, ��������� � USPS � ����������� ���� �������');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', 'NOTE: You have no shipping modules activated. Please go to Modules->Shipping to configure.');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', 'NOTE: You have no payment modules activated. Please go to Modules->Payment to configure.');

// text pricing
define('TEXT_CHARGES_WORD','������:');
define('TEXT_PER_WORD','<br />����� �� �����: ');
define('TEXT_WORDS_FREE',' ���������� �����(�) ');
define('TEXT_CHARGES_LETTERS','������:');
define('TEXT_PER_LETTER','<br />���� �� ������: ');
define('TEXT_LETTERS_FREE',' ���������� ������(�) ');
define('TEXT_ONETIME_CHARGES','*������������� ������� = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*������������� ������� = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', '���������� ������');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','����������');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','����');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', '���������� ��������� �� ���� ���');
define('TEXT_CATEGORIES_PRODUCTS', '�������� ��������� � ��������');
define('TEXT_PRODUCT_TO_VIEW', '�������� ����� ��� ��������� � ������� ���������� ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', '������������ ID ������� ���������');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>��������:</strong> ������ ����� ����������� � �������������� ��������� �� ������� ��������� �� �����������!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', '������ ���������� ����');
define('PRODUCTS_PRICE_IS_FREE_TEXT','����� ���������');

define('TEXT_PRODUCT_WEIGHT_UNIT','��� ����� ������� ������');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', '��������:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','���������:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% ����');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;����');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','�������:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','���� � ��� ��� ��������� HTML ��� JavaScript ��������, �� ������ ������ HTML ����� �������');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">��������: �� ����������� ����� ��� �������� email. ���� �� ������ ��������� ��� � ������� HTML ��� ����� �������� "������������ MIME HTML" ��� Email �������</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">��������: ��������: �� ����������� ����� ��� �������� email. ���� �� ������ ��������� ��� � ������� HTML ��� ����� �������� "������������ MIME HTML" ��� Email �������</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"�� ������ ������ ����� ������, ��� �� ��������� ��� email � HTML ������� �� ��� email �� ����� ���������� HTML ���������");
define('ENTRY_EMAIL_PREFERENCE','Email ��������������:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','�������� "������" ��� ���������� ���� �����');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','TEXT');
define('ENTRY_EMAIL_NONE_DISPLAY','�������');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','������������ �� ��������');
define('ENTRY_NOTHING_TO_SEND','�� �� ��������� ���������');
 define('EMAIL_SEND_FAILED','������: ���������� ��������� �����: "%s" <%s> � �����: "%s"');

  define('EDITOR_NONE', 'Plain Text');
  define('TEXT_EDITOR_INFO', '��������� ��������');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', 'You have an HTML editor selected in \'My Store\' but the \'/editors/\' folder cannot be located. Please disable your selection or move your editor files into the \''.DIR_WS_CATALOG.'editors/\' folder');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', '���������� ����������� ��������� � �������: ');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', '���������� ������� � �� ��������');
  define('TEXT_SORT_PRODUCTS_NAME', '�������� ������');
  define('TEXT_SORT_PRODUCTS_MODEL', '������ ������');
  define('TEXT_SORT_PRODUCTS_QUANTITY', '���������� + � �������� ������');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', '���������� - � �������� ������');
  define('TEXT_SORT_PRODUCTS_PRICE', '���� + � �������� ������');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', '���� - � �������� ������');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', '���������� ��������� � �� ��������');
  define('TEXT_SORT_CATEGORIES_NAME', '�������� ���������');



  define('TABLE_HEADING_YES','��');
  define('TABLE_HEADING_NO','���');
  define('TEXT_IMAGES_OVERWRITE', '���������� ��� ��������� �����������?');
  define('TEXT_IMAGE_OVERWRITE_WARNING','��������: ��� ����� ���������,�� �� ��� �� ������� ');
  define('TEXT_IMAGE_OVERWRITE_WARNING','WARNING: FILENAME was updated but not overwritten ');
  define('TEXT_IMAGES_DELETE', '<strong>Delete Image?</strong> NOTE: Removes Image from Product, Image is NOT removed from server:');
  define('TEXT_IMAGE_CURRENT', 'Image Name: ');

  define('ERROR_DEFINE_OPTION_NAMES', '��������: �� ��������� �� ���� ������������ ��������');
  define('ERROR_DEFINE_OPTION_VALUES', '��������: �� ���������� �� ���� ������������ ��������');
  define('ERROR_DEFINE_PRODUCTS', '��������: �� ���� ����� �� �� ���������');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', '��������: ��� ID ������� ��������� ������� ��� �� ��������� ��� ������� ������');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','�������� ������� ������������');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','�������� �� ������� ������������');

  define('BUTTON_PREVIOUS_ALT','���������� �����');
  define('BUTTON_NEXT_ALT','��������� �����');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', '�������������� ���������');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', '����������� ����� � ��������������� ���������');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', '��� ������� ����������, �������� � ������� - ���������');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', '���������� ���������� ������� - ���');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', '���������� ���������� ������� - ����');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', '������: ���������� ������������ ����� � �� �� ���������');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', '������: ����� � ������������� �� ����� ���� �� ������: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', '������: ����� � ������������� �� �������: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', '������: ��������� �� ����� ���� ���������� � ������������');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', '������: ���������� ����������� ����� � �� �� ��������� ��� � ��������� � ������� �� ������ ��� ������');
  define('ERROR_CATEGORY_HAS_PRODUCTS', '������: � ��������� ���� ������');
  define('SUCCESS_CATEGORY_MOVED', '�������! ��������� ���� ������� ���������� ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', '������: ���������� ����������� ��������� � �� �� ���������! ID#');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', '��������: ��������� ������� EZ - ������ ��� IP ������');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', '��������: ��� ������� EZ - ������ ��� IP ������');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', '��������: ��� ������� EZ - ������ ��� IP ������');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','��������: ������ ����� ������� ��� - ���������� �������� � ���������� ����� ��������');
  define('TEXT_VIRTUAL_EDIT','��������: ������ ����� ������� ��� - ���������� �������� � ���������� ����� ��������');
  define('TEXT_FREE_SHIPPING_PREVIEW','��������: ������ ����� ������� ��� - ���������� �������� � ��������� ����� ��������');
  define('TEXT_FREE_SHIPPING_EDIT','��������: �������� ������� ������ ����� - ���������� �������� � ��������� ����� ��������');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', '��������: ������� �������� ������ �������� ����� ��� �� 2 ������ � ������ ���� �������... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', '��������: ������� �������� ������ ����� ����� 50 000 ������� � ������ ���� ������� ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', '��������� � ��������� �������� ��� ������ ������� �������� ������');

  define('CATEGORY_HAS_SUBCATEGORIES', '��������: � ��������� ���� ������������<br />����� �� ����� ���� ��������');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


?>