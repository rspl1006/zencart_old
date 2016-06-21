<?php
/**
 * @author: TheOracle
 * @description: Additional customers fields (v3.01).
 * @date: May 13 2008
 * @Version: Tested on: Zen-Cart E-Commerce v1.3.8a
 * @copyright: 2008
 */

// Additional Customers Fields - Title
define('HEADING_TITLE', 'Additional Customers fields');

// Diagnostic results text.
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FILE_MISSING', 'This file is currently missing: ');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FILE_MISSING_INSTRUCTIONS', 'Make sure to upload all the files before using the Additional Customers Fields feature.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FUNCTIONS_MISSING_INSTRUCTIONS', 'One or some methods are missing from your includes/classes/db/mysql/query_factory.php file which this feature requires to output the results properly.<br />Please follow the installation instructions again and make sure all methods has been implemented in the file.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FUNCTION_MISSING', 'It would seem this feature cannot verify for any existent files, since the verification module could not be found. Perhaps you forgot to upload the class file that goes into the includes/classes directory ?');

// Additional Customers Fields - Global features
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_MENU_TITLE', 'Main menu');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NAME_TITLE', 'Name');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_TYPE_TITLE', 'Type');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_COUNT_TITLE', 'Index');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_TYPE_TITLE', 'Type');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_CONTENT_OPTIONS_TABLE_TITLE', 'Options');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_USE_URL_TITLE', 'Use URL');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_URL_NAME_TITLE', 'URL Name');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_URL_TITLE', 'Enter URL');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_REQUIRED_TITLE', 'Required');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_SIZE_TITLE', 'Size');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_ATTRIBUTE_TITLE', 'Attribute (if applicable)');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_DEFAULT_TITLE', 'Default (if applicable)');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_SHOW_ADDITIONAL_TABLE_TITLE', 'Additional Customers Fields - Created additional fields');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_CREATE_TABLE_TITLE', 'Additional Customers Fields - Create fields');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_PREP_TABLE_TITLE', 'Additional Customers Fields - Preparations');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_STATUS_OFF_ALT', 'Field\'s status: off');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_STATUS_ON_ALT', 'Field\'s status: on');
define('ENTRY_ADDITIONAL_CUSTOMERS_NO_CONTENT_MAIN_PAGE', 'There are currently no new additional customers fields created into the listing table. If you do have some additional customers fields to add, try-out the: <b>Create new additional customers fields</b> link above.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_TOTAL_COUNT_MAIN_PAGE', 'Number of additional customers fields found: <b>%s</b>');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_WARNING_RESET_POPUP_MESSAGE', 'Warning: This will reset ALL your listed entries of all the fields you have added to this page (but will not affect the ' . TABLE_CUSTOMERS . ' table). Are you sure you\'d like to continue ?');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_WARNING_DELETE_POPUP_MESSAGE', 'Warning: By deleting this field, it will also delete ALL of your customers entries related to this field as well. Are you sure you wish to continue ?');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_WARNING_BACKUP_POPUP_MESSAGE', 'Please confirm this step to assure that you did backuped both mySQL tables as suggested.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_CREATE_FIELD_NOTICE', 'Note: Do <b>NOT</b> re-create the same field name twice. Otherwise, a duplication error message will be returned.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_GO_BACK_LINK', 'Go back');

// Additional Customers Fields - Forms
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_SUBMIT_CREATE_FIELDS_FORM', 'Create');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NO_ENTRY_ATTRIBUTE', '-----------------');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_UNSIGNED_ATTRIBUTE', 'UNSIGNED');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_UNSIGNED_ZEROFIELD_ATTRIBUTE', 'UNSIGNED ZEROFILL');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_SUBMIT_PREP_CREATE_FIELDS_FORM', 'Go to next step');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_RESET_FORM', 'Reset');

// Additional Customers Fields - URLs
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_LINK_1', '[ Main menu ]');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_LINK_2', '[ Create new additional customers fields ]');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_LINK_4', '[ Reset additional customers table ]');

// Additional Customers Fields - SQL events text error / success
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_CHAR_FIELDS_SIZE', 'It appears that you have selected "char" as the field type but you did not selected any field sizes along with it. Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_INT_FIELDS_SIZE', 'It appears that you have selected "int" as the field type but you did selected any field sizes along with it. Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_SMALLINT_FIELDS_SIZE', 'It appears that you have selected "smallint" as the field type but you did selected any field sizes along with it. Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_TINYINT_FIELDS_SIZE', 'It appears that you have selected "tinyint" as the field type but you did selected any field sizes along with it. Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_VARCHAR_FIELDS_SIZE', 'It appears that you have selected "varchar" as the field type but you did selected any field sizes along with it. Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_INVALID_DEFAULT_FIELD_CHAR_TYPE', 'Invalid default field characters. Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_SUBMISSION_FORM', 'You cannot view this page without submitting your results from the previous form (or URL). Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FAILED_UPDATE_FIELD', 'Failed to update field. Please try again');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FAILED_ALTER_AND_INSERT_FIELD', 'Failed to either alter or insert queries into the database. If you see this message, please report it to the author.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FAILED_DELETE_FIELD', 'Failed to delete field. Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_UNAUTHORIZED_ACCESS', 'You are not authorized to view this page.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_MARKED_SPACES_OR_EMPTY_FIELD_NAME_AND_TYPE', 'Either your field, or field type, are empty or they do not contain valid characters. Please try again. You can also use "-" or "_" for your field name in this case (no obligations).');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FIELD_ALREADY_EXISTS_BOTH_TABLES', 'Error: This field name already exists on both tables: <b>' . TABLE_CUSTOMERS . '</b> and <b>' . TABLE_ADDITIONAL_CUSTOMERS . '</b> table. It cannot be created more than once. Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_CHAR_NO_FIELDS_ATTRIBUTE_ERROR', 'Sorry. You cannot use fields attributes with "char". Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_VARCHAR_NO_FIELDS_ATTRIBUTE_ERROR', 'Sorry. You cannot use fields attributes with "varchar". Please try again.');
define('ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_BACKUP_TABLES_FIRST_NOTICE', 'Note: Since this process is about making physical modifications to tables within a database structure, it would be <b>highly recommended</b> to backup <b>both</b> tables: <b>' . TABLE_CUSTOMERS . '</b> and <b>' . TABLE_ADDITIONAL_CUSTOMERS . '</b> table before proceeding to the next step. Once the recommendation has been followed, click on the <b>create</b> button below to continue.');
?>