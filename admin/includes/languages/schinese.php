<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: schinese.php 7440 2007-12-06 Jack $
 */

// added defines for header alt and text
define('HEADER_ALT_TEXT', 'Zen Cart ��������');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'zh_CN.GB2312');
define('DATE_FORMAT_SHORT', '%Y/%m/%d');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%Y��%m��%d��'); // this is used for strftime()
define('DATE_FORMAT', 'Y/m/d'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'Y/m/d H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'yyyy/MM/dd');  //Use only 'dd', 'MM' and 'yyyy' here in any order

////
// Return date in raw format
// $date should be in format yyyy/mm/dd
// raw date is in format YYYYMMDD, or DDMMYYYY
function zen_date_raw($date, $reverse = false) {
  if ($reverse) {
    return substr($date, 8, 2) . substr($date, 5, 2) . substr($date, 0, 4);
  } else {
    return substr($date, 0, 4) . substr($date, 5, 2) . substr($date, 8, 2);
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
define('ICON_METATAGS_ON', 'Meta��ǩ�Ѷ���');
define('ICON_METATAGS_OFF', 'Meta��ǩδ����');
define('TEXT_LEGEND_META_TAGS', 'Meta��ǩ�Ѷ���:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>��ʾ:</strong> ���ļ�meta_tags.php�е�Site/Tagline����������վ.');

// Global entries for the <html> tag
define('HTML_PARAMS','dir="ltr" lang="zh"');

// charset for web pages and emails
define('CHARSET', 'GB2312');

// header text in includes/header.php
define('HEADER_TITLE_TOP', '������ҳ');
define('HEADER_TITLE_SUPPORT_SITE', '֧����վ');
define('HEADER_TITLE_ONLINE_CATALOG', '�̵���ҳ');
define('HEADER_TITLE_VERSION', '�汾');
define('HEADER_TITLE_LOGOFF', '�˳�');
//define('HEADER_TITLE_ADMINISTRATION', '����');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME','��ȯ');
  define('TEXT_GV_NAMES','��ȯ');
  define('TEXT_DISCOUNT_COUPON', '�Ż�ȯ');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM','���ִ���');

// text for gender
define('MALE', '����');
define('FEMALE', 'Ůʿ');

// text for date of birth example
define('DOB_FORMAT_STRING', 'yyyy/mm/dd');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', '�̵�����');
define('BOX_CONFIGURATION_MYSTORE', '��������');
define('BOX_CONFIGURATION_LOGGING', '��־');
define('BOX_CONFIGURATION_CACHE', '����');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'ģ�����');
define('BOX_MODULES_PAYMENT', '֧��ģ��');
define('BOX_MODULES_SHIPPING', '����ģ��');
define('BOX_MODULES_ORDER_TOTAL', '�ܶ����');
define('BOX_MODULES_PRODUCT_TYPES', '��Ʒ����');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', '��Ʒ����');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', '��Ʒ����');
define('BOX_CATALOG_PRODUCT_TYPES', '��Ʒ����');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'ѡ������');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'ѡ������');
define('BOX_CATALOG_MANUFACTURERS', '���̹���');
define('BOX_CATALOG_REVIEWS', '���۹���');
define('BOX_CATALOG_SPECIALS', '�ؼ���Ʒ');
define('BOX_CATALOG_PRODUCTS_EXPECTED', '����������Ʒ');
define('BOX_CATALOG_SALEMAKER', '��������');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', '�۸����');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', '�ͻ�����');
define('BOX_CUSTOMERS_CUSTOMERS', '�ͻ�����');
define('BOX_CUSTOMERS_ORDERS', '��������');
define('BOX_CUSTOMERS_GROUP_PRICING', '����۸�');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal����֪ͨ');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', '����˰��');
define('BOX_TAXES_COUNTRIES', '���Ҵ���');
define('BOX_TAXES_ZONES', '��������');
define('BOX_TAXES_GEO_ZONES', '��������');
define('BOX_TAXES_TAX_CLASSES', '˰������');
define('BOX_TAXES_TAX_RATES', '˰�ʹ���');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', '����ϵͳ');
define('BOX_REPORTS_PRODUCTS_VIEWED', '����ͳ��');
define('BOX_REPORTS_PRODUCTS_PURCHASED', '����ͳ��');
define('BOX_REPORTS_ORDERS_TOTAL', '����ͳ��');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', '��Ʒ���');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', '�ͻ��Ƽ�');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', '����');
define('BOX_TOOLS_ADMIN', '��������');
define('BOX_TOOLS_TEMPLATE_SELECT', 'ģ��ѡ��');
define('BOX_TOOLS_BACKUP', '���ݿⱸ��');
define('BOX_TOOLS_BANNER_MANAGER', '������');
define('BOX_TOOLS_CACHE', '�������');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'ѡ������');
define('BOX_TOOLS_FILE_MANAGER', '�ļ�����');
define('BOX_TOOLS_MAIL', '�����ʼ�');
define('BOX_TOOLS_NEWSLETTER_MANAGER', '��������/��Ʒ֪ͨ');
define('BOX_TOOLS_SERVER_INFO', '������/�汾��Ϣ');
define('BOX_TOOLS_WHOS_ONLINE', '��������');
define('BOX_TOOLS_STORE_MANAGER', '�̵����');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', '��������');
define('BOX_TOOLS_SQLPATCH','��װSQL�ű�');
define('BOX_TOOLS_EZPAGES','����ҳ�����');

define('BOX_HEADING_EXTRAS', '����');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','ҳ��༭');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', '��ҳ');
define('BOX_TOOLS_DEFINE_CONTACT_US','��ϵ����');
define('BOX_TOOLS_DEFINE_PRIVACY','��˽����');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','��������');
define('BOX_TOOLS_DEFINE_CONDITIONS','�˿���֪');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','�������');
define('BOX_TOOLS_DEFINE_PAGE_2','��2ҳ');
define('BOX_TOOLS_DEFINE_PAGE_3','��3ҳ');
define('BOX_TOOLS_DEFINE_PAGE_4','��4ҳ');


// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', '�����趨');
define('BOX_LOCALIZATION_CURRENCIES', '���Ҵ���');
define('BOX_LOCALIZATION_LANGUAGES', '���Դ���');
define('BOX_LOCALIZATION_ORDERS_STATUS', '����״̬');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '�Ż�ȯ');
define('BOX_GV_ADMIN_QUEUE',  TEXT_GV_NAMES . '����');
define('BOX_GV_ADMIN_MAIL', '����' . TEXT_GV_NAME );
define('BOX_GV_ADMIN_SENT', '�ѷ�' . TEXT_GV_NAMES);
define('BOX_COUPON_ADMIN','�Ż�ȯ����');

define('IMAGE_RELEASE', '����' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', '�������ı��ʱ���ִ���!\n���������޸�:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* ����������Ʒ�۸�\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* ����������Ʒ���ҵ�λ\n');

define('JS_PRODUCTS_NAME', '* ����������Ʒ����\n');
define('JS_PRODUCTS_DESCRIPTION', '* ����������Ʒ���\n');
define('JS_PRODUCTS_PRICE', '* ����������Ʒ�۸�\n');
define('JS_PRODUCTS_WEIGHT', '* ����������Ʒ����\n');
define('JS_PRODUCTS_QUANTITY', '* ����������Ʒ����\n');
define('JS_PRODUCTS_MODEL', '* ����������Ʒ�ͺ�\n');
define('JS_PRODUCTS_IMAGE', '* ���ṩ����Ʒͼ��\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* ��������Ʒ���¼۸�\n');

define('JS_GENDER', '* ��ѡ�� \'�ƺ�\' .\n');
define('JS_FIRST_NAME', '* \'����\' һ������Ҫ�� ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' ���ַ���\n');
define('JS_LAST_NAME', '* \'����\' һ������Ҫ�� ' . ENTRY_LAST_NAME_MIN_LENGTH . ' ���ַ���\n');
define('JS_DOB', '* \'��������\' һ���ĸ�ʽ��: xx/xx/xxxx (��/��/��)��\n');
define('JS_EMAIL_ADDRESS', '* \'�����ʼ�\' һ������Ҫ�� ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ���ַ���\n');
define('JS_ADDRESS', '* \'��ַ\' һ������Ҫ�� ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ���ַ���\n');
define('JS_POST_CODE', '* \'�ʱ�\' һ������Ҫ�� ' . ENTRY_POSTCODE_MIN_LENGTH . ' ���ַ���\n');
define('JS_CITY', '* \'����\' һ������Ҫ�� ' . ENTRY_CITY_MIN_LENGTH . ' ���ַ���\n');
define('JS_STATE', '* \'ʡ��\' �Ǳ�ѡ��.\n');
define('JS_STATE_SELECT', '-- ѡ������ --');
define('JS_ZONE', '* \'ʡ��\' һ��Ҫ�Ӹù��ҵ��б���ѡȡ.');
define('JS_COUNTRY', '* \'����\' �Ǳ�ѡ��.\n');
define('JS_TELEPHONE', '* \'�绰����\' һ������Ҫ�� ' . ENTRY_TELEPHONE_MIN_LENGTH . ' ���ַ���\n');
define('JS_PASSWORD', '* \'����\' �� \'����ȷ��\' ������һ�¶��Ҳ����� ' . ENTRY_PASSWORD_MIN_LENGTH . ' ���ַ���\n');

define('JS_ORDER_DOES_NOT_EXIST', '������%s������!');

define('CATEGORY_PERSONAL', '��������');
define('CATEGORY_ADDRESS', '��ַ��Ϣ');
define('CATEGORY_CONTACT', '��ϵ��ʽ');
define('CATEGORY_COMPANY', '��˾����');
define('CATEGORY_OPTIONS', '����ѡ��');

define('ENTRY_GENDER', '�ƺ�:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">����</span>');
define('ENTRY_FIRST_NAME', '����:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">���� ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' ���ַ�</span>');
define('ENTRY_LAST_NAME', '����:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">���� ' . ENTRY_LAST_NAME_MIN_LENGTH . ' ���ַ�</span>');
define('ENTRY_DATE_OF_BIRTH', '��������:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(���磺 1970/05/21)</span>');
define('ENTRY_EMAIL_ADDRESS', '�����ʼ�:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">���� ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' ���ַ�</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">�����ʼ���ַ����!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">�õ����ʼ���ַ�Ѿ�ʹ��!</span>');
define('ENTRY_COMPANY', '��˾����:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', '�Ż�����');
define('ENTRY_STREET_ADDRESS', '��ϸ��ַ:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">���� ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' ���ַ�</span>');
define('ENTRY_SUBURB', '');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', '�ʱ�:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">���� ' . ENTRY_POSTCODE_MIN_LENGTH . ' ���ַ�</span>');
define('ENTRY_CITY', '����:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">���� ' . ENTRY_CITY_MIN_LENGTH . ' ���ַ�</span>');
define('ENTRY_STATE', 'ʡ��:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">��ѡ</span>');
define('ENTRY_COUNTRY', '����:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', '�绰����:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">���� ' . ENTRY_TELEPHONE_MIN_LENGTH . ' ���ַ�</span>');
define('ENTRY_FAX_NUMBER', '����:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', '��������:');
define('ENTRY_NEWSLETTER_YES', '����');
define('ENTRY_NEWSLETTER_NO', '�˶�');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
//define('IMAGE_ANI_SEND_EMAIL', '�����ʼ�');
define('IMAGE_BACK', '����');
define('IMAGE_BACKUP', '����');
define('IMAGE_CANCEL', 'ȡ��');
define('IMAGE_CONFIRM', 'ȷ��');
define('IMAGE_COPY', '����');
define('IMAGE_COPY_TO', '���Ƶ�');
define('IMAGE_DETAILS', '��ϸ����');
define('IMAGE_DELETE', 'ɾ��');
define('IMAGE_EDIT', '�༭');
define('IMAGE_EMAIL', '�����ʼ�');
define('IMAGE_FILE_MANAGER', '�ļ�����');
define('IMAGE_ICON_STATUS_GREEN', '����');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', '����');
define('IMAGE_ICON_STATUS_RED', '�ر�');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'ͣ��');
define('IMAGE_ICON_STATUS_RED_EZPAGES', '���� -- ����̫��URL/����');
define('IMAGE_ICON_STATUS_RED_ERROR', '����');
define('IMAGE_ICON_INFO', '��Ϣ');
define('IMAGE_INSERT', '����');
define('IMAGE_LOCK', '����');
define('IMAGE_MODULE_INSTALL', '��װģ��');
define('IMAGE_MODULE_REMOVE', 'ɾ��ģ��');
define('IMAGE_MOVE', '�ƶ�');
define('IMAGE_NEW_BANNER', '�¹��');
define('IMAGE_NEW_CATEGORY', '�·���');
define('IMAGE_NEW_COUNTRY', '�¹���');
define('IMAGE_NEW_CURRENCY', '�»���');
define('IMAGE_NEW_FILE', '���ļ�');
define('IMAGE_NEW_FOLDER', '��Ŀ¼');
define('IMAGE_NEW_LANGUAGE', '������');
define('IMAGE_NEW_NEWSLETTER', '�½���������');
define('IMAGE_NEW_PRODUCT', '����Ʒ');
define('IMAGE_NEW_SALE', '�´���');
define('IMAGE_NEW_TAX_CLASS', '��˰��');
define('IMAGE_NEW_TAX_RATE', '��˰��');
define('IMAGE_NEW_TAX_ZONE', '��˰��');
define('IMAGE_NEW_ZONE', '�µ���');
define('IMAGE_OPTION_NAMES', 'ѡ�����ƹ���');
define('IMAGE_OPTION_VALUES', 'ѡ�����ݹ���');
define('IMAGE_ORDERS', '����');
define('IMAGE_ORDERS_INVOICE', '��Ʊ');
define('IMAGE_ORDERS_PACKINGSLIP', 'װ���嵥');
define('IMAGE_PREVIEW', 'Ԥ��');
define('IMAGE_RESTORE', '�ָ�');
define('IMAGE_RESET', '����');
define('IMAGE_SAVE', '����');
define('IMAGE_SEARCH', '����');
define('IMAGE_SELECT', 'ѡ��');
define('IMAGE_SEND', '����');
define('IMAGE_SEND_EMAIL', '�����ʼ�');
define('IMAGE_UNLOCK', '����');
define('IMAGE_UPDATE', '����');
define('IMAGE_UPDATE_CURRENCIES', '���»���');
define('IMAGE_UPLOAD', '�ϴ�');
define('IMAGE_TAX_RATES','˰��');
define('IMAGE_DEFINE_ZONES','��������');
define('IMAGE_PRODUCTS_PRICE_MANAGER', '�۸����');
define('IMAGE_UPDATE_PRICE_CHANGES', '���¼۸�');
define('IMAGE_ADD_BLANK_DISCOUNTS','���� ' . DISCOUNT_QTY_ADD . ' �հ��Ż�����');
define('IMAGE_CHECK_VERSION', '���Zen Cart����');
define('IMAGE_PRODUCTS_TO_CATEGORIES', '����������ӹ���');

define('IMAGE_ICON_STATUS_ON', '״̬ - ����');
define('IMAGE_ICON_STATUS_OFF', '״̬ - �ر�');
define('IMAGE_ICON_LINKED', '��Ʒ������');

define('IMAGE_REMOVE_SPECIAL','ɾ���ؼ���Ϣ');
define('IMAGE_REMOVE_FEATURED','ɾ���Ƽ���Ʒ��Ϣ');
define('IMAGE_INSTALL_SPECIAL', '�����ؼ���Ϣ');
define('IMAGE_INSTALL_FEATURED', '�����Ƽ���Ʒ��Ϣ');

define('ICON_PRODUCTS_PRICE_MANAGER','�۸����');
define('ICON_COPY_TO', '���Ƶ�');
define('ICON_CROSS', '����');
define('ICON_CURRENT_FOLDER', '��ǰĿ¼');
define('ICON_DELETE', 'ɾ��');
define('ICON_EDIT', '�༭');
define('ICON_ERROR', '����');
define('ICON_FILE', '�ļ�');
define('ICON_FILE_DOWNLOAD', '����');
define('ICON_FOLDER', 'Ŀ¼');
//define('ICON_LOCKED', '����');
define('ICON_MOVE', '�ƶ�');
define('ICON_PREVIOUS_LEVEL', '��һ��');
define('ICON_PREVIEW', 'Ԥ��');
define('ICON_RESET', '����');
define('ICON_STATISTICS', 'ͳ��');
define('ICON_SUCCESS', '�ɹ�');
define('ICON_TICK', '��');
//define('ICON_UNLOCKED', '����');
define('ICON_WARNING', '����');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', '��%sҳ����%dҳ');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>������Ա)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>�����)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>������)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>������)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>���ͻ�)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>�ֻ���)');
define('TEXT_DISPLAY_NUMBER_OF_FEATURED', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>���Ƽ���Ʒ)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>������)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>������)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>ƪ��������)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>�ݶ���)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>������״̬)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>������۸�)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>����Ʒ)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>����Ʒ����)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>�ּ���������Ʒ)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>����Ʒ����)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>�ִ�����Ʒ)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>���ؼ���Ʒ)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>��˰��)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>�����ģ��)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>��˰��)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>��˰��)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>������)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'Ĭ��');
define('TEXT_SET_DEFAULT', '��ΪĬ��');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* ����</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', '����: û��Ĭ�ϻ��ҡ��뵽���²˵��趨: ������->�����趨->����');

define('TEXT_CACHE_CATEGORIES', '���෽��');
define('TEXT_CACHE_MANUFACTURERS', '���̷���');
define('TEXT_CACHE_ALSO_PURCHASED', 'ͬʱ����ģ��');

define('TEXT_NONE', '��');
define('TEXT_TOP', '��ҳ');

define('ERROR_DESTINATION_DOES_NOT_EXIST', '����: Ŀ�겻���� %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', '����: Ŀ�겻��д�� %s');
define('ERROR_FILE_NOT_SAVED', '����: �ϴ��ļ�û�б���.');
define('ERROR_FILETYPE_NOT_ALLOWED', '����: �ϴ��ļ����Ͳ�����  %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', '�ɹ�: �ϴ��ļ��ɹ����� %s');
define('WARNING_NO_FILE_UPLOADED', '����: û���ļ��ϴ�.');
define('WARNING_FILE_UPLOADS_DISABLED', '����: php.ini�ļ�������Ϊ�������ϴ��ļ�.');
define('ERROR_ADMIN_SECURITY_WARNING', '����: ���Ĺ���Ա�ʺŲ���ȫ ... ��δ�޸�ȱʡ���ʺ�: Admin/admin ���߻�δɾ�����޸��ʺ�: demo/demoonly<br />���ڰ�ȫ���ǣ��뾡���޸ĸ��ʺš�<br />�� ����->�������� ҳ���������û��������롣<br />����������ȫ���أ������/doc');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','�������ݿ���Ҫ��������[����->��������Ϣ]�²�ѯ��ǰ�汾��');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches
define('WARNING_ADMIN_DOWN_FOR_MAINTENANCE', '<strong>����:</strong> ��վĿǰ����ά��ģʽ ...<br />˵��: ��ά��ģʽ�²��ܲ��Զ���֧��ģ�������ģ��');
define('WARNING_BACKUP_CFG_FILES_TO_DELETE', '����: ��ɾ����Щ�ļ��Ա�֤��ȫy: ');
define('WARNING_INSTALL_DIRECTORY_EXISTS', '����: ���ڰ�װĿ¼: ' . DIR_FS_CATALOG . 'zc_install����ɾ����Ŀ¼�Ա�֤��ȫ��');
define('WARNING_CONFIG_FILE_WRITEABLE', '����: �����ļ�: %sincludes/configure.php������Ǳ�ڰ�ȫ���� - ������ֻ��Ȩ�� (CHMOD 644 �� 444)');
define('WARNING_COULD_NOT_LOCATE_LANG_FILE', '����: �Ҳ��������ļ�: ');
define('ERROR_MODULE_REMOVAL_PROHIBITED', '����: ��ֹɾ��ģ��: ');

define('_JANUARY', 'һ��');
define('_FEBRUARY', '����');
define('_MARCH', '����');
define('_APRIL', '����');
define('_MAY', '����');
define('_JUNE', '����');
define('_JULY', '����');
define('_AUGUST', '����');
define('_SEPTEMBER', '����');
define('_OCTOBER', 'ʮ��');
define('_NOVEMBER', 'ʮһ��');
define('_DECEMBER', 'ʮ����');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>����ȯ)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>���Ż�ȯ)');

define('TEXT_VALID_PRODUCTS_LIST', '��Ʒ�б�');
define('TEXT_VALID_PRODUCTS_ID', '��Ʒ���');
define('TEXT_VALID_PRODUCTS_NAME', '��Ʒ����');
define('TEXT_VALID_PRODUCTS_MODEL', '��Ʒ�ͺ�');

define('TEXT_VALID_CATEGORIES_LIST', '�����б�');
define('TEXT_VALID_CATEGORIES_ID', '������');
define('TEXT_VALID_CATEGORIES_NAME', '��������');

define('DEFINE_LANGUAGE','ѡ������:');

define('BOX_ENTRY_COUNTER_DATE','�����ʼ����:');
define('BOX_ENTRY_COUNTER','�������:');

// not installed
define('NOT_INSTALLED_TEXT','û�а�װ');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES','ѡ���������� ');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS','<strong>����ѡ������</strong>');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES','<strong>����������Ʒ����������</strong><br />Ϊȱʡ����:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME','ѡ����������');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','���Կ���');

// generic model
  define('TEXT_MODEL','�ͺ�:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER','��ۿ���');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE','%s����ȯ�ȴ����');
  define('IMAGE_GIFT_QUEUE', TEXT_GV_NAME . '����');
  define('IMAGE_ORDER','����');

  define('BOX_TOOLS_EMAIL_WELCOME','��ӭ�ʼ�');

  define('IMAGE_DISPLAY','��ʾ');
  define('IMAGE_UPDATE_SORT','��������');
  define('IMAGE_EDIT_PRODUCT','�༭��Ʒ');
  define('IMAGE_EDIT_ATTRIBUTES','�༭����');
  define('TEXT_NEW_PRODUCT', '��Ʒ�ķ���: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES','ѡ�����ƺ�ѡ������');
  define('TEXT_PRODUCTS_PRICE_MANAGER','�۸����');
  define('TEXT_PRODUCT_EDIT','�༭��Ʒ');
  define('TEXT_ATTRIBUTE_EDIT','�༭����');
  define('TEXT_PRODUCT_DETAILS','�鿴����');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', '���');
  define('DEDUCTION_TYPE_DROPDOWN_1', '�ٷֱ�');
  define('DEDUCTION_TYPE_DROPDOWN_2', '�¼۸�');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING','����:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING','��λ:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING','���ﳵ��:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING','����:');

  define('TEXT_PRODUCTS_MIX_OFF','*���ܻ��ѡ��');
  define('TEXT_PRODUCTS_MIX_ON','*���Ի��ѡ��');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','����ɸѡ: ');
  define('HEADING_TITLE_SEARCH_DETAIL','����: ');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS', '������Ʒ - �ö��ŷֿ�');
  define('HEADING_TITLE_SEARCH_DETAIL_REPORTS_NAME_MODEL', '������Ʒ����/�ͺ�');

  define('PREV_NEXT_PRODUCT', '��Ʒ: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*���಻����</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*��Ʒ������</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE','��������ʾģʽ��. ĳЩ���ò�����');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION','��������ʾģʽ��. ĳЩ���ò����� - <strong>��ע: ��ʾ���ÿ���</strong>');
  define('ERROR_ADMIN_DEMO','��������ʾģʽ�� ... ����ִ�еĲ�����ʱ�ر�');

// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','�°汾������ v');
  define('TEXT_VERSION_CHECK_NEW_PATCH','�²���������: v');
  define('TEXT_VERSION_CHECK_PATCH','����');
  define('TEXT_VERSION_CHECK_DOWNLOAD','����');
  define('TEXT_VERSION_CHECK_CURRENT','����Zen Cart&trade; �����°汾.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', '��ʾ<b>%d</b>��<b>%d</b> (��<b>%d</b>������)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', '���ع���');

define('BOX_CATALOG_FEATURED','�Ƽ���Ʒ');

define('ERROR_NOTHING_SELECTED', 'û��ѡ�� ... û���κ��޸�');
define('TEXT_STATUS_WARNING','<strong>��ע:</strong> �����趨��״̬���Զ�����/�ر�');

define('TEXT_LEGEND_LINKED', '������Ʒ');
define('TEXT_MASTER_CATEGORIES_ID','��Ʒ������:');
define('TEXT_LEGEND', 'ͼʾ: ');
define('TEXT_LEGEND_STATUS_OFF', '�ر�״̬');
define('TEXT_LEGEND_STATUS_ON', '����״̬');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>��ע: ���������ڶ��ۣ�����Ӱ��������Ʒ�ļ۸��������</strong>');
define('TEXT_YES', '��');
define('TEXT_NO', '��');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>���Ͳ������ô���!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>����:</strong> �̵��ʱ�δ���롣�� �̵����� | ���Ͳ��� ������.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>����:</strong> ��������Ʒ��Ϊ������䣬���������ģ��û�п���');
define('ERROR_USPS_STATUS', '<strong>����:</strong> USPS����ģ��û�������û��������������ڲ���ģʽ��<br />������޷�����USPS�˷ѱ���, ��ϵUSPS������������ҳ�����ʺš�1-800-344-7779 �� icustomercare@usps.com');

define('ERROR_SHIPPING_MODULES_NOT_DEFINED', '˵��: û����������ģ�顣���� ģ�����->����ģ�� �����á�');
define('ERROR_PAYMENT_MODULES_NOT_DEFINED', '˵��: û������֧��ģ�顣���� ģ�����->֧��ģ�� �����á�');

// text pricing
define('TEXT_CHARGES_WORD','�������:');
define('TEXT_PER_WORD','<br />ÿ�ʼ۸�: ');
define('TEXT_WORDS_FREE',' ��Ѵ� ');
define('TEXT_CHARGES_LETTERS','�������:');
define('TEXT_PER_LETTER','<br />ÿ��ĸ�۸�: ');
define('TEXT_LETTERS_FREE',' ����� ');
define('TEXT_ONETIME_CHARGES','*������ = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*������ = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'ѡ�������Ż�');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','����');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','�۸�');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', '�����Żݻ�����');
define('TEXT_CATEGORIES_PRODUCTS', 'ѡ����Ʒ���� ...��ѡ����Ʒ');
define('TEXT_PRODUCT_TO_VIEW', 'ѡ����ƷȻ�����ʾ ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', '����������Ч');
define('TEXT_INFO_ID', ' ���# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>����:</strong> ����Ʒ���ӵ�������࣬��û�ж���������!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', '�۸�����');
define('PRODUCTS_PRICE_IS_FREE_TEXT','�����Ʒ');

define('TEXT_PRODUCT_WEIGHT_UNIT','��');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', '���:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','��ʡ:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% �Ż�');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;�Ż�');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','����:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','�����û�ж���HTML�༭������JavaScript�ر���, �����ֹ�����ԭHTML�ı�.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">��ע: ����ʹ���ı���ʽ�ĵ����ʼ�. �����ϣ��ʹ��HTML��ʽ, ��Ҫ�ڵ����ʼ�ѡ���´� "ʹ�� MIME HTML" </span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">��ע: ����ʹ���ı���ʽ�ĵ����ʼ�. �����ϣ��ʹ��HTML��ʽ, ��Ҫ�ڵ����ʼ�ѡ���´� "ʹ�� MIME HTML" </span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"��������������Ϣ������Ϊ���Ƿ������ĵ����ʼ���HTML��ʽ�������ĵ����ʼ��Ķ������޷���ʾHTML��Ϣ.");
define('ENTRY_EMAIL_PREFERENCE','�����ʼ���ʽѡ��:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','ѡ�� "��" �� "�˳�" �ر������ʼ�, ������������');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','�ı���ʽ');
define('ENTRY_EMAIL_NONE_DISPLAY','�����ʼ�');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','�˶���������');
define('ENTRY_NOTHING_TO_SEND','����û�������κ�����');
 define('EMAIL_SEND_FAILED','����: �����ʼ���: "%s" <%s> ����: "%s"ʧ��');

  define('EDITOR_NONE', '���ı�');
  define('TEXT_EDITOR_INFO', '�ı��༭��');
  define('ERROR_EDITORS_FOLDER_NOT_FOUND', '����\'�̵�����\'��ѡ����HTML�༭�������޷��ҵ�\'/editors/\'Ŀ¼��������ѡ��򽫱༭���ļ��ƶ���\''.DIR_WS_CATALOG.'editors/\'Ŀ¼');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', '��ʾ˳��');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', '��Ʒ������Ʒ����');
  define('TEXT_SORT_PRODUCTS_NAME', '��Ʒ����');
  define('TEXT_SORT_PRODUCTS_MODEL', '��Ʒ�ͺ�');
  define('TEXT_SORT_PRODUCTS_QUANTITY', '��Ʒ����+, ��Ʒ����');
  define('TEXT_SORT_PRODUCTS_QUANTITY_DESC', '��Ʒ����-, ��Ʒ����');
  define('TEXT_SORT_PRODUCTS_PRICE', '��Ʒ�۸�+, ��Ʒ����');
  define('TEXT_SORT_PRODUCTS_PRICE_DESC', '��Ʒ�۸�-, ��Ʒ����');
  define('TEXT_SORT_CATEGORIES_SORT_ORDER_PRODUCTS_NAME', '��������, ��������');
  define('TEXT_SORT_CATEGORIES_NAME', '��������');

  define('TABLE_HEADING_YES','��');
  define('TABLE_HEADING_NO','��');
  define('TEXT_PRODUCTS_IMAGE_MANUAL', '<br /><strong>��ӷ�������ѡ������ͼ���ļ����ļ���:</strong>');
  define('TEXT_IMAGES_OVERWRITE', '<strong>����ԭ��ͼ����?</strong> ');
  define('TEXT_IMAGE_OVERWRITE_WARNING','����: �ļ��������˵�û�и��� ');
  define('TEXT_IMAGES_DELETE', '<strong>ɾ��ͼ����?</strong> ˵��: ����Ʒ��ɾ��������ɾ��ͼ���ļ�:');
  define('TEXT_IMAGE_CURRENT', 'ͼ������: ');

  define('ERROR_DEFINE_OPTION_NAMES', '����: û�ж���ѡ������');
  define('ERROR_DEFINE_OPTION_VALUES', '����: û�ж���ѡ������');
  define('ERROR_DEFINE_PRODUCTS', '����: û�ж�����Ʒ');
  define('ERROR_DEFINE_PRODUCTS_MASTER_CATEGORIES_ID', '����: ����Ʒû��������������');

  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','���� - �����ӷ���');
  define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','���� - �����ӷ���');

  define('BUTTON_PREVIOUS_ALT','ǰһ��');
  define('BUTTON_NEXT_ALT','��һ��');

  define('BUTTON_PRODUCTS_TO_CATEGORIES', '����������ӹ���');
  define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', '������Ʒ���������');

  define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'ȫ�ָ��ơ���Ӻ�ɾ���Ĺ����ѹر�');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', '��ʾȫ�ֹ��� - ��');
  define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', '��ʾȫ�ֹ��� - ��');

// moved from categories and all product type language files
  define('ERROR_CANNOT_LINK_TO_SAME_CATEGORY', '����: ������ͬһ������������Ʒ��');
  define('ERROR_CATALOG_IMAGE_DIRECTORY_NOT_WRITEABLE', '����: ����ͼ��Ŀ¼����д: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CATALOG_IMAGE_DIRECTORY_DOES_NOT_EXIST', '����: ����ͼ��Ŀ¼������: ' . DIR_FS_CATALOG_IMAGES);
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_PARENT', '����: ���಻���ƶ����ӷ����С�');
  define('ERROR_CANNOT_MOVE_PRODUCT_TO_CATEGORY_SELF', '����: �����ƶ���Ʒ����ͬ�����ԭ���ķ����С�');
  define('ERROR_CATEGORY_HAS_PRODUCTS', '����: ����������Ʒ!<br /><br />����ʱ������֯������; ... �����в���ͬʱ����Ʒ���ӷ���!');
  define('SUCCESS_CATEGORY_MOVED', '�ɹ�! �������ƶ� ...');
  define('ERROR_CANNOT_MOVE_CATEGORY_TO_CATEGORY_SELF', '����: �����ƶ����ൽ��ͬ�ķ���! ��� #');

// EZ-PAGES Alerts
  define('TEXT_EZPAGES_STATUS_HEADER_ADMIN', '����: ����ҳ��ҳü - On ���޹���ԱIP');
  define('TEXT_EZPAGES_STATUS_FOOTER_ADMIN', '����: ����ҳ��ҳ�� - On ���޹���ԱIP');
  define('TEXT_EZPAGES_STATUS_SIDEBOX_ADMIN', '����: ����ҳ��߿� - On ���޹���ԱIP');

// moved from product types
// warnings on Virtual and Always Free Shipping
  define('TEXT_VIRTUAL_PREVIEW','��ʾ: ���˷��Ҳ�Ҫ�ͻ���ַ<br />��������������Ʒ���Ƿ�ʵ����Ʒʱ������Ҫ�ͻ���');
  define('TEXT_VIRTUAL_EDIT','��ʾ: ���˷��Ҳ�Ҫ�ͻ���ַ<br />��������������Ʒ���Ƿ�ʵ����Ʒʱ������Ҫ�ͻ���');
  define('TEXT_FREE_SHIPPING_PREVIEW','��ʾ: ���˷�, ����Ҫ�ͻ���ַ<br />��������������Ʒ�����˷�ʱ����Ҫ�������ģ�顣');
  define('TEXT_FREE_SHIPPING_EDIT','��ʾ: ���˷�, ����Ҫ�ͻ���ַ<br />��������������Ʒ�����˷�ʱ����Ҫ�������ģ�顣');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', '��ʾ: ϵͳ������־���ݱ��еļ�¼�ѳ���2���£��뾡������ ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', '��ʾ: ϵͳ������־���ݱ��еļ�¼�ѳ���5������뾡������ ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', '���빤�ߣ��̵��������ϵͳ������־');

  define('CATEGORY_HAS_SUBCATEGORIES', '˵��: �������������ӷ��࣬���������Ʒ');

  define('WARNING_WELCOME_DISCOUNT_COUPON_EXPIRES_IN', '����! ע���Ż�ȯ����%s������');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));


?>