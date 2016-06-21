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
//  $Id: spanish.php,v 1.1 2005/12/22 22:31:18 gorkau Exp $
//
require(DIR_FS_CATALOG . 'includes/languages/spanish/extra_data.php');
// look in your $PATH_LOCALE/locale directory for available locales..
// on RedHat6.0 I used 'en_US'
// on FreeBSD 4.0 I use 'en_US.ISO_8859-1'
// this may not work under win32 environments..
setlocale(LC_TIME, 'es_ES.ISO-8859-15');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y'); // this is used for date()
define('PHP_DATE_TIME_FORMAT', 'd/m/Y H:i:s'); // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');
define('DATE_FORMAT_SPIFFYCAL', 'dd/MM/yyyy');  //Use only 'dd', 'MM' and 'yyyy' here in any order

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

// Global entries for the <html> tag
define('HTML_PARAMS', 'dir="ltr" lang="es"');

// charset for web pages and emails
define('CHARSET', 'iso-8859-1');

// include template specific meta tags defines
  if (file_exists(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir . '/meta_tags.php')) {
    $template_dir_select = $template_dir . '/';
  } else {
    $template_dir_select = '';
  }
  require(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');
//die(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/' . $template_dir_select . 'meta_tags.php');

// meta tags
define('ICON_METATAGS_ON', 'Meta Tags Definidas');
define('ICON_METATAGS_OFF', 'Meta Tags no definidas');
define('TEXT_LEGEND_META_TAGS', 'Meta Tags definidas:');
define('TEXT_INFO_META_TAGS_USAGE', '<strong>NOTA:</strong> La tagline de tu p�gina es tu definici�n de la p�gina en el archivo meta_tags.php.');

// removed for meta tags
// page title
define('TITLE', STORE_NAME);

// header text in includes/header.php
define('HEADER_TITLE_TOP', 'Administraci�n');
define('HEADER_TITLE_SUPPORT_SITE', 'Sitio de Soporte');
define('HEADER_TITLE_VERSION', 'Info del servidor');
define('HEADER_TITLE_ONLINE_CATALOG', 'Cat�logo');
define('HEADER_TITLE_LOGOFF', 'Salir');
//define('HEADER_TITLE_ADMINISTRATION', 'Administraci�n');

// added defines for header alt and text
define('HEADER_ALT_TEXT', '');
define('HEADER_LOGO_WIDTH', '200px');
define('HEADER_LOGO_HEIGHT', '70px');
define('HEADER_LOGO_IMAGE', 'logo.gif');

// Define the name of your Gift Certificate as Gift Voucher, Gift Certificate, Zen Cart Dollars, etc. here for use through out the shop
  define('TEXT_GV_NAME', 'Vale de Compra');
  define('TEXT_GV_NAMES', 'Vales de Compra');

// used for redeem code, redemption code, or redemption id
  define('TEXT_GV_REDEEM', 'C�digo de Canje');

// text for gender
define('MALE', 'Masculino');
define('FEMALE', 'Femenino');

// text for date of birth example
define('DOB_FORMAT_STRING', 'dd/mm/yyyy');

// configuration box text in includes/boxes/configuration.php
define('BOX_HEADING_CONFIGURATION', 'Configuraci�n');
define('BOX_CONFIGURATION_MYSTORE', 'Mi Tienda');
define('BOX_CONFIGURATION_LOGGING', 'Logging');
define('BOX_CONFIGURATION_CACHE', 'Cach�');

// modules box text in includes/boxes/modules.php
define('BOX_HEADING_MODULES', 'M�dulos');
define('BOX_MODULES_PAYMENT', 'Pago');
define('BOX_MODULES_SHIPPING', 'Env�o');
define('BOX_MODULES_ORDER_TOTAL', 'Total de Pedido');
define('BOX_MODULES_PRODUCT_TYPES', 'Tipos de producto');

// categories box text in includes/boxes/catalog.php
define('BOX_HEADING_CATALOG', 'Cat�logo');
define('BOX_CATALOG_CATEGORIES_PRODUCTS', 'Categor�as/Productos');
define('BOX_CATALOG_PRODUCT_TYPES', 'Tipos de productos');
define('BOX_CATALOG_MANUFACTURERS', 'Fabricantes');
define('BOX_CATALOG_REVIEWS', 'Comentarios');
define('BOX_CATALOG_SPECIALS', 'Ofertas');
define('BOX_CATALOG_PRODUCTS_EXPECTED', 'Productos por Venir');
define('BOX_CATALOG_CATEGORIES_OPTIONS_NAME_MANAGER', 'Adm. de nombres de opci�n');
define('BOX_CATALOG_CATEGORIES_OPTIONS_VALUES_MANAGER', 'Adm. de valores de opci�n');
define('BOX_CATALOG_SALEMAKER', 'Rebajas');
define('BOX_CATALOG_PRODUCTS_PRICE_MANAGER', 'Administrador de precios de productos');

// customers box text in includes/boxes/customers.php
define('BOX_HEADING_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_CUSTOMERS', 'Clientes');
define('BOX_CUSTOMERS_ORDERS', 'Pedidos');
define('BOX_CUSTOMERS_GROUP_PRICING', 'Precios por grupo');
define('BOX_CUSTOMERS_PAYPAL', 'PayPal IPN');

// taxes box text in includes/boxes/taxes.php
define('BOX_HEADING_LOCATION_AND_TAXES', 'Ubicaciones/Impuestos');
define('BOX_TAXES_COUNTRIES', 'Pa�ses');
define('BOX_TAXES_ZONES', 'Zonas');
define('BOX_TAXES_GEO_ZONES', 'Descripci�n de Zonas');
define('BOX_TAXES_TAX_CLASSES', 'Impuesto por Clase');
define('BOX_TAXES_TAX_RATES', 'Tasa de Impuesto');

// reports box text in includes/boxes/reports.php
define('BOX_HEADING_REPORTS', 'Informes');
define('BOX_REPORTS_PRODUCTS_VIEWED', 'Vista de Productos');
define('BOX_REPORTS_PRODUCTS_PURCHASED', 'Productos Comprados');
define('BOX_REPORTS_ORDERS_TOTAL', 'Total de Pedidos por Cliente');
define('BOX_REPORTS_PRODUCTS_LOWSTOCK', 'Productos con stock bajo');
define('BOX_REPORTS_CUSTOMERS_REFERRALS', 'Or�gen de clientes');

// tools text in includes/boxes/tools.php
define('BOX_HEADING_TOOLS', 'Herramientas');
define('BOX_TOOLS_ADMIN', 'Gesti�n de Administradores');
define('BOX_TOOLS_TEMPLATE_SELECT', 'Selecci�n de Plantillas');
define('BOX_TOOLS_BACKUP', 'Copia de Seguridad de la BD');
define('BOX_TOOLS_BANNER_MANAGER', 'Gestor de Banners');
define('BOX_TOOLS_CACHE', 'Control del Cach�');
define('BOX_TOOLS_DEFINE_LANGUAGE', 'Definir Idiomas');
define('BOX_TOOLS_FILE_MANAGER', 'Administrador de Ficheros');
define('BOX_TOOLS_MAIL', 'Enviar Correo');
define('BOX_TOOLS_NEWSLETTER_MANAGER', 'Bolet�n de Noticias');
define('BOX_TOOLS_SERVER_INFO', 'Info del Servidor');
define('BOX_TOOLS_WHOS_ONLINE', 'Qui�n Est� Online');
define('BOX_TOOLS_STORE_MANAGER', 'Administraci�n de la tienda');
define('BOX_TOOLS_DEVELOPERS_TOOL_KIT', 'Herramientas para desarrolladores');
define('BOX_TOOLS_EZPAGES','P�ginas din�micas (EZ-Pages)');

define('BOX_HEADING_EXTRAS', 'Extras');

// define pages editor files
define('BOX_TOOLS_DEFINE_PAGES_EDITOR','Editor de p�ginas est�ticas');
define('BOX_TOOLS_DEFINE_MAIN_PAGE', 'P�gina principal');
define('BOX_TOOLS_DEFINE_CONTACT_US','Contacto');
define('BOX_TOOLS_DEFINE_PRIVACY','Privacidad');
define('BOX_TOOLS_DEFINE_SHIPPINGINFO','Env�os y devoluciones');
define('BOX_TOOLS_DEFINE_CONDITIONS','Condiciones de uso');
define('BOX_TOOLS_DEFINE_CHECKOUT_SUCCESS','Compra exitosa');
define('BOX_TOOLS_DEFINE_PAGE_2','P�gina 2');
define('BOX_TOOLS_DEFINE_PAGE_3','P�gina 3');
define('BOX_TOOLS_DEFINE_PAGE_4','P�gina 4');

// localizaion box text in includes/boxes/localization.php
define('BOX_HEADING_LOCALIZATION', 'Localizaci�n');
define('BOX_LOCALIZATION_CURRENCIES', 'Monedas');
define('BOX_LOCALIZATION_LANGUAGES', 'Idiomas');
define('BOX_LOCALIZATION_ORDERS_STATUS', 'Estado del Pedido');

// gift vouchers box text in includes/boxes/gv_admin.php
define('BOX_HEADING_GV_ADMIN', TEXT_GV_NAME . '/Cupones');
define('BOX_GV_ADMIN_QUEUE', 'Lista de ' . TEXT_GV_NAMES);
define('BOX_GV_ADMIN_MAIL', 'Enviar por correo ' . TEXT_GV_NAME);
define('BOX_GV_ADMIN_SENT', TEXT_GV_NAMES . ' enviados');
define('BOX_COUPON_ADMIN', 'Administrar Cupones');
define('IMAGE_RELEASE', 'Canjear ' . TEXT_GV_NAME);

// javascript messages
define('JS_ERROR', '�Hubo errores en el procesamiento de su formulario!\nPor favor, haga las siguientes correcciones:\n\n');

define('JS_OPTIONS_VALUE_PRICE', '* El nuevo atributo de producto necesita un valor de precio\n');
define('JS_OPTIONS_VALUE_PRICE_PREFIX', '* El nuevo atribulo de producto necesita un prefijo de precio\n');

define('JS_PRODUCTS_NAME', '* El nuevo producto necesita un nombre\n');
define('JS_PRODUCTS_DESCRIPTION', '* El nuevo producto necesita una descripci�n\n');
define('JS_PRODUCTS_PRICE', '* El nuevo producto necesita un precio\n');
define('JS_PRODUCTS_WEIGHT', '* El nuevo producto necesita un peso\n');
define('JS_PRODUCTS_QUANTITY', '* El nuevo producto necesita una cantidad\n');
define('JS_PRODUCTS_MODEL', '* El nuevo producto necesita un modelo\n');
define('JS_PRODUCTS_IMAGE', '* El nuevo producto necesita una imagen\n');

define('JS_SPECIALS_PRODUCTS_PRICE', '* Se necesita establecer un nuevo precio para este producto\n');

define('JS_GENDER', '* Se debe elegir el \'Sexo\'.\n');
define('JS_FIRST_NAME', '* El \'Nombre\' debe tener al menos ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_LAST_NAME', '* El \'Apellido\' debe tener al menos ' . ENTRY_LAST_NAME_MIN_LENGTH . ' caracteres.\n');
define('JS_DOB', '* La \'Fecha de Nacimiento\' debe estar en la forma: xx/xx/xxxx (mes/d�a/a�o).\n');
define('JS_EMAIL_ADDRESS', '* El \'E-Mail\' debe tener al menos ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_ADDRESS', '* La \'Direcci�n\' debe tener al menos ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' caracteres.\n');
define('JS_POST_CODE', '* El \'C�digo Postal\' debe tener al menos ' . ENTRY_POSTCODE_MIN_LENGTH . ' caracteres.\n');
define('JS_CITY', '* La \'localidad\' debe tener al menos ' . ENTRY_CITY_MIN_LENGTH . ' caracteres.\n');
define('JS_STATE', '* Se debe elegir la \'Provincia\'.\n');
define('JS_STATE_SELECT', '-- Elija Arriba --');
define('JS_ZONE', '* La \'Provincia\' debe seleccionarse de la lista para este pa�s.');
define('JS_COUNTRY', '* Se debe elegir el \'Pa�s\'.\n');
define('JS_TELEPHONE', '* El \'Tel�fono\' debe tener al menos ' . ENTRY_TELEPHONE_MIN_LENGTH . ' caracteres.\n');
define('JS_PASSWORD', '* La \'Contrase�a\' y la \'Confirmaci�n\' deben coincidir y tener al menos ' . ENTRY_PASSWORD_MIN_LENGTH . ' caracteres.\n');

define('JS_ORDER_DOES_NOT_EXIST', '�El N�mero de Pedido %s no existe!');

define('CATEGORY_PERSONAL', 'Personal');
define('CATEGORY_ADDRESS', 'Direcci�n');
define('CATEGORY_CONTACT', 'Contacto');
define('CATEGORY_COMPANY', 'Empresa');
define('CATEGORY_OPTIONS', 'Opciones');
define('CATEGORY_TAXID', 'CIF/NIF');

define('ENTRY_GENDER', 'Sexo:');
define('ENTRY_GENDER_ERROR', '&nbsp;<span class="errorText">obligatorio</span>');
define('ENTRY_FIRST_NAME', 'Nombre:');
define('ENTRY_FIRST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_FIRST_NAME_MIN_LENGTH . ' letras</span>');
define('ENTRY_LAST_NAME', 'Apellido:');
define('ENTRY_LAST_NAME_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_LAST_NAME_MIN_LENGTH . ' letras</span>');
define('ENTRY_DATE_OF_BIRTH', 'Fecha de Nacimiento:');
define('ENTRY_DATE_OF_BIRTH_ERROR', '&nbsp;<span class="errorText">(ej. 21/05/1970)</span>');
define('ENTRY_EMAIL_ADDRESS', 'E-Mail:');
define('ENTRY_EMAIL_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_EMAIL_ADDRESS_MIN_LENGTH . ' letras</span>');
define('ENTRY_EMAIL_ADDRESS_CHECK_ERROR', '&nbsp;<span class="errorText">�El email parece no ser v�lido!</span>');
define('ENTRY_EMAIL_ADDRESS_ERROR_EXISTS', '&nbsp;<span class="errorText">�El email ya existe!</span>');
define('ENTRY_COMPANY', 'Nombre de la Empresa:');
define('ENTRY_COMPANY_ERROR', '');
define('ENTRY_PRICING_GROUP', 'Descuento por grupo');
define('ENTRY_STREET_ADDRESS', 'Calle:');
define('ENTRY_STREET_ADDRESS_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_STREET_ADDRESS_MIN_LENGTH . ' letras</span>');
define('ENTRY_SUBURB', 'Barrio:');
define('ENTRY_SUBURB_ERROR', '');
define('ENTRY_POST_CODE', 'C�digo Postal:');
define('ENTRY_POST_CODE_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_POSTCODE_MIN_LENGTH . ' letras</span>');
define('ENTRY_CITY', 'Ciudad:');
define('ENTRY_CITY_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_CITY_MIN_LENGTH . ' letras</span>');
define('ENTRY_STATE', 'Provincia:');
define('ENTRY_STATE_ERROR', '&nbsp;<span class="errorText">requerido</span>');
define('ENTRY_COUNTRY', 'Pa�s:');
define('ENTRY_COUNTRY_ERROR', '');
define('ENTRY_TELEPHONE_NUMBER', 'Tel�fono:');
define('ENTRY_TELEPHONE_NUMBER_ERROR', '&nbsp;<span class="errorText">min ' . ENTRY_TELEPHONE_MIN_LENGTH . ' num</span>');
define('ENTRY_FAX_NUMBER', 'Fax:');
define('ENTRY_FAX_NUMBER_ERROR', '');
define('ENTRY_NEWSLETTER', 'Bolet�n de Noticias:');
define('ENTRY_NEWSLETTER_YES', 'Suscrito');
define('ENTRY_NEWSLETTER_NO', 'No Suscrito');
define('ENTRY_NEWSLETTER_ERROR', '');

// images
define('IMAGE_ANI_SEND_EMAIL', 'Enviando el E-Mail');
define('IMAGE_BACK', 'Volver');
define('IMAGE_BACKUP', 'Copia de Seguridad');
define('IMAGE_CANCEL', 'Cancelar');
define('IMAGE_CONFIRM', 'Confirmar');
define('IMAGE_COPY', 'Copiar');
define('IMAGE_COPY_TO', 'Copiar A');
define('IMAGE_DETAILS', 'Detalles');
define('IMAGE_DELETE', 'Eliminar');
define('IMAGE_EDIT', 'Editar');
define('IMAGE_EMAIL', 'Email');
define('IMAGE_FILE_MANAGER', 'Administrador de Ficheros');
define('IMAGE_ICON_STATUS_GREEN', 'Activo');
define('IMAGE_ICON_STATUS_GREEN_LIGHT', 'Establecer Activo');
define('IMAGE_ICON_STATUS_RED', 'Inactivo');
define('IMAGE_ICON_STATUS_RED_LIGHT', 'Establecer Inactivo');
define('IMAGE_ICON_INFO', 'Info');
define('IMAGE_INSERT', 'Insertar');
define('IMAGE_LOCK', 'Cerrar');
define('IMAGE_MODULE_INSTALL', 'Instalar M�dulo');
define('IMAGE_MODULE_REMOVE', 'Quitar M�dulo');
define('IMAGE_MOVE', 'Mover');
define('IMAGE_NEW_BANNER', 'Nuevo Banner');
define('IMAGE_NEW_CATEGORY', 'Nueva Categor�a');
define('IMAGE_NEW_COUNTRY', 'Nuevo Pa�s');
define('IMAGE_NEW_CURRENCY', 'Nueva Moneda');
define('IMAGE_NEW_FILE', 'Nuevo Fichero');
define('IMAGE_NEW_FOLDER', 'Nueva Carpeta');
define('IMAGE_NEW_LANGUAGE', 'Nuevo Idioma');
define('IMAGE_NEW_NEWSLETTER', 'Nuevo Bolet�n');
define('IMAGE_NEW_PRODUCT', 'Nuevo Producto *');
define('IMAGE_NEW_SALE', 'Nueva Venta');
define('IMAGE_NEW_TAX_CLASS', 'Nueva Clase de Impuesto');
define('IMAGE_NEW_TAX_RATE', 'Nueva Tasa de Impuesto');
define('IMAGE_NEW_TAX_ZONE', 'Nueva Zona de Impuesto');
define('IMAGE_NEW_ZONE', 'Nueva Zona');
define('IMAGE_OPTION_NAMES', 'Administrador de nombres de opciones');
define('IMAGE_OPTION_VALUES', 'Administrador de valores de opciones');
define('IMAGE_ORDERS', 'Pedidos');
define('IMAGE_ORDERS_INVOICE', 'Albar�n');
define('IMAGE_ORDERS_PACKINGSLIP', 'Hoja de Embalaje');
define('IMAGE_PREVIEW', 'Vista Previa');
define('IMAGE_RESTORE', 'Restaurar');
define('IMAGE_RESET', 'Restablecer');
define('IMAGE_SAVE', 'Guardar');
define('IMAGE_SEARCH', 'Buscar');
define('IMAGE_SELECT', 'Seleccionar');
define('IMAGE_SEND', 'Enviar');
define('IMAGE_SEND_EMAIL', 'Enviar Email');
define('IMAGE_UNLOCK', 'Abrir');
define('IMAGE_UPDATE', 'Actualizar');
define('IMAGE_UPDATE_CURRENCIES', 'Actualizar Tasa de Cambio');
define('IMAGE_UPLOAD', 'Subir');
define('IMAGE_TAX_RATES','Tasa de Impuestos');
define('IMAGE_DEFINE_ZONES','Definir Zonas');
define('IMAGE_PRODUCTS_PRICE_MANAGER', 'Administrador de precios de producto');
define('IMAGE_UPDATE_PRICE_CHANGES', 'Actualizar cambos de precio');
define('IMAGE_ADD_BLANK_DISCOUNTS','A�adir ' . DISCOUNT_QTY_ADD . ' Cdad de descuento en blanco');
define('IMAGE_CHECK_VERSION', 'Comprobar actualizaciones de la tienda');
define('IMAGE_PRODUCTS_TO_CATEGORIES', 'Administrador de enlaces de multiples categor�as');

define('IMAGE_ICON_STATUS_ON', 'Estado - Activado');
define('IMAGE_ICON_STATUS_OFF', 'Estado - Desactivado');
define('IMAGE_ICON_LINKED', 'El producto est� enlazado');

define('IMAGE_REMOVE_SPECIAL','Quitar informaci�n de precio especial');
define('IMAGE_REMOVE_FEATURED','Quitar informaci�n de producto destacado');
define('IMAGE_INSTALL_SPECIAL', 'A�adir informaci�n de precio especial');
define('IMAGE_INSTALL_FEATURED', 'A�adir informaci�n de producto destacado');

define('ICON_PRODUCTS_PRICE_MANAGER','Administrador de precios de productos');
define('ICON_COPY_TO', 'Copiar a');
define('ICON_CROSS', 'Falso');
define('ICON_CURRENT_FOLDER', 'Carpeta actual');
define('ICON_DELETE', 'Borrar');
define('ICON_EDIT', 'Editar');
define('ICON_ERROR', 'Error');
define('ICON_FILE', 'Fichero');
define('ICON_FILE_DOWNLOAD', 'Descargar');
define('ICON_FOLDER', 'Carpeta');
define('ICON_LOCKED', 'Cerrado');
define('ICON_MOVE', 'Mover');
define('ICON_PREVIOUS_LEVEL', 'Nivel Anterior');
define('ICON_PREVIEW', 'Vista Previa');
define('ICON_RESET', 'Restablecer');
define('ICON_STATISTICS', 'Estad�sticas');
define('ICON_SUCCESS', 'Listo');
define('ICON_TICK', 'Cierto');
define('ICON_UNLOCKED', 'Abierto');
define('ICON_WARNING', 'Advertencia');

// constants for use in zen_prev_next_display function
define('TEXT_RESULT_PAGE', 'P�gina %s de %d');
define('TEXT_DISPLAY_NUMBER_OF_ADMINS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> administradores)');
define('TEXT_DISPLAY_NUMBER_OF_BANNERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> banners)');
define('TEXT_DISPLAY_NUMBER_OF_CATEGORIES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> categor�as)');
define('TEXT_DISPLAY_NUMBER_OF_COUNTRIES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> pa�ses)');
define('TEXT_DISPLAY_NUMBER_OF_CUSTOMERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> clientes)');
define('TEXT_DISPLAY_NUMBER_OF_CURRENCIES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> monedas)');
define('TEXT_DISPLAY_NUMBER_OF_LANGUAGES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> idiomas)');
define('TEXT_DISPLAY_NUMBER_OF_MANUFACTURERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> fabricantes)');
define('TEXT_DISPLAY_NUMBER_OF_NEWSLETTERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> boletines)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_ORDERS_STATUS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> estados de pedidos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_EXPECTED', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos por venir)');
define('TEXT_DISPLAY_NUMBER_OF_REVIEWS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos comentados)');
define('TEXT_DISPLAY_NUMBER_OF_SALES', 'Mostrando de la <b>%d</b> a la <b>%d</b> (de <b>%d</b> rebajas)');
define('TEXT_DISPLAY_NUMBER_OF_SPECIALS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> productos en oferta)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_CLASSES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> clases de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_TEMPLATES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> asociaciones de plantillas)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_ZONES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> zonas de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_TAX_RATES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> tasas de impuesto)');
define('TEXT_DISPLAY_NUMBER_OF_ZONES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> zonas)');
define('TEXT_DISPLAY_NUMBER_OF_PRICING_GROUPS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> precios de grupo)');
define('TEXT_DISPLAY_NUMBER_OF_PRODUCT_TYPES', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> tipos de producto)');

define('PREVNEXT_BUTTON_PREV', '&lt;&lt;');
define('PREVNEXT_BUTTON_NEXT', '&gt;&gt;');


define('TEXT_DEFAULT', 'por defecto');
define('TEXT_SET_DEFAULT', 'Establecer por defecto');
define('TEXT_FIELD_REQUIRED', '&nbsp;<span class="fieldRequired">* Obligatorio</span>');

define('ERROR_NO_DEFAULT_CURRENCY_DEFINED', 'Error: Actualmente no hay una moneda establecida por defecto. Por favor, establezca una en: Administraci�n->Localizati�n->Monedas');

define('TEXT_CACHE_CATEGORIES', 'Cuadro de Categor�as');
define('TEXT_CACHE_MANUFACTURERS', 'Cuadro de Frabricantes');
define('TEXT_CACHE_ALSO_PURCHASED', 'M�dulo de Tambi�n Compraron');

define('TEXT_NONE', '--ninguno--');
define('TEXT_TOP', 'Arriba');

define('ERROR_DESTINATION_DOES_NOT_EXIST', 'Error: El destino no existe %s');
define('ERROR_DESTINATION_NOT_WRITEABLE', 'Error: El destino no puede escribirse %s');
define('ERROR_FILE_NOT_SAVED', 'Error: El fichero subido no se guard�.');
define('ERROR_FILETYPE_NOT_ALLOWED', 'Error: El tipo de fichero subido no est� permitido %s');
define('SUCCESS_FILE_SAVED_SUCCESSFULLY', 'Listo: El fichero subido se guard� correctamente %s');
define('WARNING_NO_FILE_UPLOADED', 'Advertencia: No se subi� el fichero.');
define('WARNING_FILE_UPLOADS_DISABLED', 'Advertencia: Subir ficheros est� desabilitado en el fichero de configuraci�n php.ini.');
define('ERROR_ADMIN_SECURITY_WARNING', 'Atenci�n: Su nombre de usuario de administraci�n no es seguro ... o tiene todav�a el login por defecto, "Admin adim", o no ha borrado o cambiado: demo demoonly<br />Esta informaci�n de login ha de ser cambiada lo antes posible por la seguridad de su tienda.<br />Para seguridad adicional para el administrador, por favor, revise el directorio /docs');
define('WARNING_DATABASE_VERSION_OUT_OF_DATE','Su base de datos parece necesitar ser parcheada a una versi�n superior. Mire Herramientas->Informaci�n del Servidor para revisar el nivel de parche.');
define('WARN_DATABASE_VERSION_PROBLEM','true'); //set to false to turn off warnings about database version mismatches

define('_JANUARY', 'Enero');
define('_FEBRUARY', 'Febrero');
define('_MARCH', 'Marzo');
define('_APRIL', 'Abril');
define('_MAY', 'Mayo');
define('_JUNE', 'Junio');
define('_JULY', 'Julio');
define('_AUGUST', 'Agosto');
define('_SEPTEMBER', 'Septiembre');
define('_OCTOBER', 'Octubre');
define('_NOVEMBER', 'Noviembre');
define('_DECEMBER', 'Diciembre');

define('TEXT_DISPLAY_NUMBER_OF_GIFT_VOUCHERS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> vales de compra)');
define('TEXT_DISPLAY_NUMBER_OF_COUPONS', 'Mostrando del <b>%d</b> al <b>%d</b> (de <b>%d</b> cupones)');

define('TEXT_VALID_PRODUCTS_LIST', 'Lista de Productos');
define('TEXT_VALID_PRODUCTS_ID', 'ID de Productos');
define('TEXT_VALID_PRODUCTS_NAME', 'Nombre de Productos');
define('TEXT_VALID_PRODUCTS_MODEL', 'Modelo de Productos');

define('TEXT_VALID_CATEGORIES_LIST', 'Lista de Categor�as');
define('TEXT_VALID_CATEGORIES_ID', 'ID de Categor�as');
define('TEXT_VALID_CATEGORIES_NAME', 'Nombre Categor�as');

define('DEFINE_LANGUAGE', 'Definir Idioma:');

define('BOX_ENTRY_COUNTER_DATE', 'Contador de Hits Inicializado:');
define('BOX_ENTRY_COUNTER', 'Contador de Hits:');

// not installed
define('NOT_INSTALLED_TEXT', 'No Instalado');

// Product Options Values Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_VALUES', 'Ordenar valores de opciones');

  define('TEXT_UPDATE_SORT_ORDERS_OPTIONS', '<strong>Actualizar el Orden de los Atributos desde la Opci�n de Valores por Defecto</strong> ');
  define('TEXT_INFO_ATTRIBUTES_FEATURES_UPDATES', '<strong>Actualizar el Orden de los Atributos de Todos los Productos</strong><br />para que coincidan con en Orden por Defecto del Valor de Opciones:<br />');

// Product Options Name Sort Order - option_values.php
  define('BOX_CATALOG_PRODUCT_OPTIONS_NAME', 'Ordenar nombres de opciones');

// Attributes only
  define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_CONTROLLER','Controlador de atributos');

// generic model
  define('TEXT_MODEL', 'Modelo:');

// column controller
  define('BOX_TOOLS_LAYOUT_CONTROLLER', 'Disposici�n de los Cuadros');

// check GV release queue and alert store owner
  define('SHOW_GV_QUEUE',true);
  define('TEXT_SHOW_GV_QUEUE', '%s esperando aprovaci�n ');
  define('IMAGE_GIFT_QUEUE', 'Lista de ' . TEXT_GV_NAME);
  define('IMAGE_ORDER', 'Pedido');

  define('BOX_TOOLS_EMAIL_WELCOME', 'Email de Bienvenida');

  define('IMAGE_DISPLAY', 'Mostrar');
  define('IMAGE_UPDATE_SORT', 'Actualizar Orden');
  define('IMAGE_EDIT_PRODUCT', 'Editar Producto');
  define('IMAGE_EDIT_ATTRIBUTES', 'Editar Atributos');
  
  define('TEXT_NEW_PRODUCT', 'Producto en Categor�a: &quot;%s&quot;');
  define('IMAGE_OPTIONS_VALUES', 'Nombres de Opci�n y Valores de Opci�n');
  define('TEXT_PRODUCTS_PRICE_MANAGER','ADM. PRECIOS DE PRODUCTOS');
define('TEXT_PRODUCT_EDIT', 'EDITAR PRODUCTO');
  define('TEXT_ATTRIBUTE_EDIT','EDITAR ATRIBUTOS');
  define('TEXT_PRODUCT_DETAILS','VER DETALLES');

// sale maker
  define('DEDUCTION_TYPE_DROPDOWN_0', 'Deducir cantidad');
  define('DEDUCTION_TYPE_DROPDOWN_1', 'Porcentaje');
  define('DEDUCTION_TYPE_DROPDOWN_2', 'Nuevo Precio');

// Min and Units
  define('PRODUCTS_QUANTITY_MIN_TEXT_LISTING', 'Min:');
  define('PRODUCTS_QUANTITY_UNIT_TEXT_LISTING', 'Unidades:');
  define('PRODUCTS_QUANTITY_IN_CART_LISTING', 'En el carro:');
  define('PRODUCTS_QUANTITY_ADD_ADDITIONAL_LISTING', 'Sumar Adicional:');

  define('TEXT_PRODUCTS_MIX_OFF', '*Sin Opciones Mezcladas');
  define('TEXT_PRODUCTS_MIX_ON', '*Con Opciones Mezcladas');

// search filters
  define('TEXT_INFO_SEARCH_DETAIL_FILTER','Filtro de b�squeda: ');
  define('HEADING_TITLE_SEARCH_DETAIL','Buscar: ');

  define('PREV_NEXT_PRODUCT', 'Productos: ');
  define('TEXT_CATEGORIES_STATUS_INFO_OFF', '<span class="alert">*Categor�a desactivada</span>');
  define('TEXT_PRODUCTS_STATUS_INFO_OFF', '<span class="alert">*Producto desactivado</span>');

// admin demo
  define('ADMIN_DEMO_ACTIVE', 'La Demo de Administraci�n se encuentra Activo. Algunas configuraciones ser�n deshabilitadas');
  define('ADMIN_DEMO_ACTIVE_EXCLUSION', 'La Demo de Administraci�n se encuentra Activo. Algunas configuraciones ser�n deshabilitadas - <strong>NOTA: Sustituci�n de Administraci�n Habilitada</strong>');
  define('ERROR_ADMIN_DEMO', 'La Demo de Administraci�n se encuentra Activo... la(s) caracter�stica(s) que est� tratando de usar ha(n) sido deshabilitada(s)');
// Version Check notices
  define('TEXT_VERSION_CHECK_NEW_VER','Nueva versi�n disponible V');
  define('TEXT_VERSION_CHECK_NEW_PATCH','Nuevo PARCHE disponible: V');
  define('TEXT_VERSION_CHECK_PATCH','parche');
  define('TEXT_VERSION_CHECK_DOWNLOAD','Descargar aqu�');
  define('TEXT_VERSION_CHECK_CURRENT','Su versi�n de la tienda parece ser la m�s actual.');

// downloads manager
define('TEXT_DISPLAY_NUMBER_OF_PRODUCTS_DOWNLOADS_MANAGER', 'Mostrando del <b>%d</b> a <b>%d</b> (de <b>%d</b> descargas)');
define('BOX_CATALOG_CATEGORIES_ATTRIBUTES_DOWNLOADS_MANAGER', 'Adm. de descargas');

define('BOX_CATALOG_FEATURED','Productos destacados');

define('ERROR_NOTHING_SELECTED', 'No se seleccion� nada ... no se efectu� ning�n cambio');
define('TEXT_STATUS_WARNING','<strong>NOTA:</strong> el estado se auto activa/desactiva cuando se configuran las fechas');

define('TEXT_LEGEND_LINKED', 'Producto enlazado');
define('TEXT_MASTER_CATEGORIES_ID','Categor�a principal del producto:');
define('TEXT_LEGEND', 'LEYENDA: ');
define('TEXT_LEGEND_STATUS_OFF', 'Estado OFF ');
define('TEXT_LEGEND_STATUS_ON', 'Estado ON ');

define('TEXT_INFO_MASTER_CATEGORIES_ID', '<strong>NOTA: La categor�a principal se usa para calcular el precio donde la<br />categor�a del producto afecta al precio en los productos enlazados, ejemplo: Rebajas</strong>');
define('TEXT_YES', 'S�');
define('TEXT_NO', 'No');

// shipping error messages
define('ERROR_SHIPPING_CONFIGURATION', '<strong>�Errores en la configuraci�n de env�os!</strong>');
define('ERROR_SHIPPING_ORIGIN_ZIP', '<strong>Atenci�n:</strong> El c�digo postal de la tienda no est� definido. Vea Configuraci�n | Env�os/Empaquetado para configurarla.');
define('ERROR_ORDER_WEIGHT_ZERO_STATUS', '<strong>Atenci�n:</strong> Peso 0 est� configurado para env�o gratu�to y el m�dulo de env�o gratu�to no est� activado');
define('ERROR_USPS_STATUS', '<strong>Atenci�n:</strong> No se encuentra el nombre de usuario y/o contrase�a para USPS, o ... est� configurado en TEST en lugar de en PRODUCCI�N y no funcionar�<br />Si todav�a no puede obtener presupuestos, contacte con USPS y active su cuenta live.');

// text pricing
define('TEXT_CHARGES_WORD','Cobro calculado:');
define('TEXT_PER_WORD','<br />Precio por palabra: ');
define('TEXT_WORDS_FREE',' Palabra(s) gratis ');
define('TEXT_CHARGES_LETTERS','Cobro calculado:');
define('TEXT_PER_LETTER','<br />Precio por carta: ');
define('TEXT_LETTERS_FREE',' Carta(s) gratis ');
define('TEXT_ONETIME_CHARGES','*cobros �nicos = ');
define('TEXT_ONETIME_CHARGES_EMAIL',"\t" . '*cobros �nicos = ');
define('TEXT_ATTRIBUTES_QTY_PRICES_HELP', 'Descuentos por cdad. de opciones');
define('TABLE_ATTRIBUTES_QTY_PRICE_QTY','CDAD.');
define('TABLE_ATTRIBUTES_QTY_PRICE_PRICE','PRECIO');
define('TEXT_ATTRIBUTES_QTY_PRICES_ONETIME_HELP', 'Cobros �nicos por descuentos por cdad. de opciones');
define('TEXT_CATEGORIES_PRODUCTS', 'Seleccione una categor�a con productos ... O mu�vase entre los productos');
define('TEXT_PRODUCT_TO_VIEW', 'Seleccione un producto para ver y presione mostrar ...');

define('TEXT_INFO_SET_MASTER_CATEGORIES_ID', 'Identificador de categor�a principal inv�lido');
define('TEXT_INFO_ID', ' ID# ');
define('TEXT_INFO_SET_MASTER_CATEGORIES_ID_WARNING', '<strong>ATENCI�N:</strong> Este producto est� enlazado a varias categor�as, pero no se ha definido una categor�a principal!');

define('PRODUCTS_PRICE_IS_CALL_FOR_PRICE_TEXT', 'El producto es Llamar para Precio');
define('PRODUCTS_PRICE_IS_FREE_TEXT','El producto es gratis');

// min, max, units
define('PRODUCTS_QUANTITY_MAX_TEXT_LISTING', 'Max:');

// Discount Savings
  define('PRODUCT_PRICE_DISCOUNT_PREFIX','Ahorra:&nbsp;');
  define('PRODUCT_PRICE_DISCOUNT_PERCENTAGE','% de descuento');
  define('PRODUCT_PRICE_DISCOUNT_AMOUNT','&nbsp;de descuento');
// Sale Maker Sale Price
  define('PRODUCT_PRICE_SALE','Oferta:&nbsp;');

// Rich Text / HTML resources
define('TEXT_HTML_EDITOR_NOT_DEFINED','Si no tiene definido un editor HTML o el JavaScript activado. puede introducir texto con HTML puro aqu� manualmente.');
define('TEXT_WARNING_HTML_DISABLED','<span class = "main">Nota: Est� usando correo de s�lo TEXTO. Si desea enviar HTML debe activar "usar MIME HTML" en las opciones de Email</span>');
define('TEXT_WARNING_CANT_DISPLAY_HTML','<span class = "main">Nota: Est� utilizando correo de s�lo TEXTO. Si desea enviar HTML debe activar "usar MIME HTML" en las opciones de correo</span>');
define('TEXT_EMAIL_CLIENT_CANT_DISPLAY_HTML',"Est� viendo este texto porque le enviamos un correo en formato HTML, pero su cliente de email no puede mostrar mensajes HTML.");
define('ENTRY_EMAIL_PREFERENCE','Prefs. de formato de correo:');
define('ENTRY_EMAIL_FORMAT_COMMENTS','Seleccionar "nunguno" o "optout" desactivar� TODO el correo, incluyendo los detalles de pedido');
define('ENTRY_EMAIL_HTML_DISPLAY','HTML');
define('ENTRY_EMAIL_TEXT_DISPLAY','S�lo-TEXTO');
define('ENTRY_EMAIL_NONE_DISPLAY','Nunca');
define('ENTRY_EMAIL_OPTOUT_DISPLAY','Eligi� no obtener el bolet�n de noticias');
define('ENTRY_NOTHING_TO_SEND','No ha introducido ning�n contenido para su mensaje');
 define('EMAIL_SEND_FAILED','ERROR: Fallo al enviar email a: "%s" <%s> con asunto: "%s"');

// toggle on/off
  define('TEXT_HTML_AREA', 'HTML Area');
  define('TEXT_EDITOR_INFO', 'Editor de texto');
  define('TEXT_CATEGORIES_PRODUCTS_SORT_ORDER_INFO', 'Ordenaci�n de producto');
  define('TEXT_SORT_PRODUCTS_SORT_ORDER_PRODUCTS_NAME', 'Orden de ordenaci�n, nombre de productos');
  define('TEXT_SORT_PRODUCTS_NAME', 'Nombre de productos');
  define('TEXT_SORT_PRODUCTS_MODEL', 'Modelo de productos');

  define('TABLE_HEADING_YES','S�');
  define('TABLE_HEADING_NO','No');
  define('TEXT_IMAGES_OVERWRITE', '�Sobreescribir imagen existente? Seleccione No para nombres introducidos manualmente');
  define('TEXT_IMAGE_OVERWRITE_WARNING','ATENCI�N: NOMBRE DE FICHERO fue actualizado pero no sobreescrito ');

  define('ERROR_DEFINE_OPTION_NAMES', 'ATENCI�N: No se han definido nombres de opci�n');
  define('ERROR_DEFINE_OPTION_VALUES', 'ATENCI�N: No se han definido valores de opci�n');
  define('ERROR_DEFINE_PRODUCTS', 'ATENCI�N: No se ha definido ning�n producto');

define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_ON','A�adir incluir subcategor�as');
define('BUTTON_ADD_PRODUCT_TYPES_SUBCATEGORIES_OFF','A�adir sin subcategor�as');

define('BUTTON_PREVIOUS_ALT','Producto anterior');
define('BUTTON_NEXT_ALT','Producto siguiente');

define('BUTTON_PRODUCTS_TO_CATEGORIES', 'Administrador de enlaces de categor�as m�ltiples');
define('BUTTON_PRODUCTS_TO_CATEGORIES_ALT', 'Copiar producto a categor�as m�ltiples');

define('TEXT_INFO_OPTION_NAMES_VALUES_COPIER_STATUS', 'El estado de Copia global, A�adir y borrar caracter�sticas es actualmente OFF');
define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_ON', 'Mostrar caracter�sticas globales - ON');
define('TEXT_SHOW_OPTION_NAMES_VALUES_COPIER_OFF', 'Mostrar caracter�sticas gobales - OFF');

// Tax Id Number
define('JS_TAXID', '* El CIF/NIF debe tener al menos '. ENTRY_TAXID_MIN_LENGTH . ' caracteres. \n');
define('ENTRY_TAXID', 'CIF/NIF:');
define('ENTRY_TAXID_ERROR','Por favor, introduzca su CIF/NIF - M�nimo '. ENTRY_TAXID_MIN_LENGTH . ' caracteres.');
define('ENTRY_TAXID_TEXT', '* Necesario para el IVA');
define('ENTRY_COMPANY', 'Nombre de la empresa:');
define('TEXT_TAXID_HELP_LINK', 'Ayuda [?]');

// admin activity log warnings
  define('WARNING_ADMIN_ACTIVITY_LOG_DATE', 'ATENCI�N: el registro de actividades del admin no se ha vaciado desde hace 2 meses, deber�a vaciarse ... ');
  define('WARNING_ADMIN_ACTIVITY_LOG_RECORDS', 'ATENCI�N: eL registro de actividades del admin tiene m�s de 50.000 registros, deber�a vaciarse ... ');
  define('RESET_ADMIN_ACTIVITY_LOG', 'Vaya al "administrador de la tienda" en herramientas y vac�e el registro de activades del admin');

  define('CATEGORY_HAS_SUBCATEGORIES', 'AVISO: Esta categor�a tiene subcategor�as.<br/> No pueden a�adirse productos.');

///////////////////////////////////////////////////////////
// include additional files:
  require(DIR_WS_LANGUAGES . $_SESSION['language'] . '/' . FILENAME_EMAIL_EXTRAS);
  include(zen_get_file_directory(DIR_FS_CATALOG_LANGUAGES . $_SESSION['language'] . '/', FILENAME_OTHER_IMAGES_NAMES, 'false'));
?>
