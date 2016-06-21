<?php
/**
 * @package Configuration Settings circa 1.3.8
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 */

// ********************************************************
// *******            wiTECH Settings              ********
// *******  Change these for your local config     ********
// ********************************************************
define('DIR_FS_CATALOG', 'D:/xampp/htdocs/zencart_client/');
define('DIR_FS_SQL_CACHE', 'D:/xampp/htdocs/zencart_client/cache/');
//Indicates the url to use when redirecting to the wiTECH portal for authentication.
define('WITECH_PORTAL_LOGIN_URL', 'http://witechportal.dcctools.com');
define('WITECH_ADMIN_URL', 'http://10.16.240.24:8080');

  
// Define the webserver and path parameters
  define('HTTP_SERVER', 'http://localhost/zencart_client/');
  define('HTTPS_SERVER', 'https://localhost/zencart_client/');

  // Use secure webserver for checkout procedure?
  define('ENABLE_SSL', 'true');

// NOTE: be sure to leave the trailing '/' at the end of these lines if you make changes!
// * DIR_WS_* = Webserver directories (virtual/URL)
  // these paths are relative to top of your webspace ... (ie: under the public_html or httpdocs folder)
  define('DIR_WS_CATALOG', '/');
  define('DIR_WS_HTTPS_CATALOG', '/');

  define('DIR_WS_IMAGES', 'images/');
  define('DIR_WS_INCLUDES', 'includes/');
  define('DIR_WS_FUNCTIONS', DIR_WS_INCLUDES . 'functions/');
  define('DIR_WS_CLASSES', DIR_WS_INCLUDES . 'classes/');
  define('DIR_WS_MODULES', DIR_WS_INCLUDES . 'modules/');
  define('DIR_WS_LANGUAGES', DIR_WS_INCLUDES . 'languages/');
  define('DIR_WS_DOWNLOAD_PUBLIC', DIR_WS_CATALOG . 'pub/');
  define('DIR_WS_TEMPLATES', DIR_WS_INCLUDES . 'templates/');

  define('DIR_WS_PHPBB', '/');

// * DIR_FS_* = Filesystem directories (local/physical)
  define('DIR_FS_DOWNLOAD', DIR_FS_CATALOG . 'download/');
  define('DIR_FS_DOWNLOAD_PUBLIC', DIR_FS_CATALOG . 'pub/');
  define('DIR_WS_UPLOADS', DIR_WS_IMAGES . 'uploads/');
  define('DIR_FS_UPLOADS', DIR_FS_CATALOG . DIR_WS_UPLOADS);
  define('DIR_FS_EMAIL_TEMPLATES', DIR_FS_CATALOG . 'email/');

// define our database connection
  define('DB_TYPE', 'mysql');
  define('DB_PREFIX', 'zen_');
  define('DB_SERVER', '10.16.240.30');
  define('DB_SERVER_USERNAME', 'witechuser');
  define('DB_SERVER_PASSWORD', 'witechuser');
  define('DB_DATABASE', 'witechdp');
  define('USE_PCONNECT', 'false');
  define('STORE_SESSIONS', 'db');
  // for STORE_SESSIONS, use 'db' for best support, or '' for file-based storage

  // The next 2 "defines" are for SQL cache support.
  // For SQL_CACHE_METHOD, you can select from:  none, database, or file
  // If you choose "file", then you need to set the DIR_FS_SQL_CACHE to a directory where your apache 
  // or webserver user has write privileges (chmod 666 or 777). We recommend using the "cache" folder inside the Zen Cart folder
  // ie: /path/to/your/webspace/public_html/zen/cache   -- leave no trailing slash  
  define('SQL_CACHE_METHOD', 'file'); 

// EOF