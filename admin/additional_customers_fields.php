<?php

/**
 * @author: TheOracle
 * @description: Additional customers fields (v3.01).
 * @date: May 13 2008
 * @Version: Tested on: Zen-Cart E-Commerce v1.3.8a
 * @copyright: 2008
 */
 
  require('includes/application_top.php');
  require(DIR_WS_CLASSES . 'addcustomersfields.php');
  $customersFields = new addCustomersFields();    
      
  //-------------------------------------------------------------------------------
  //--- Initializes each actions applied from this page. -------
  //-------------------------------------------------------------------------------
  if (isset($_GET['action']) || isset($_POST['action'])) {
      $action = (isset($_POST['action'])) ? zen_db_prepare_input($_POST['action']) : zen_db_prepare_input($_GET['action']);
      $action = preg_replace("/[^a-z0-9\-\_]+/i", "", $action);
  } else {
      $action = "";
  } // End of if statement.
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php echo HTML_PARAMS; ?>>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo CHARSET; ?>">
<title><?php echo TITLE; ?></title>
<script language="JavaScript" src="<?php echo DIR_WS_INCLUDES; ?>menu.js" type="text/JavaScript"></script>
<script language="Javascript" src="<?php echo DIR_WS_INCLUDES; ?>javascript/mods/<?php echo substr(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 0, -4); ?>/<?php echo $_SESSION['language']; ?>/chainedselects.js"></script>
<script language="Javascript" src="<?php echo DIR_WS_INCLUDES; ?>javascript/mods/<?php echo substr(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 0, -4); ?>/<?php echo $_SESSION['language']; ?>/config.js"></script>
<link href="<?php echo DIR_WS_INCLUDES; ?>stylesheet.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo DIR_WS_INCLUDES; ?>cssjsmenuhover.css" media="all" id="hoverJS" />
                                                    
<script type="text/javascript">
  <!--
  function init()
  {
    cssjsmenu('navbar');
    if (document.getElementById)
    {
      var kill = document.getElementById('hoverJS');
      kill.disabled = true;
    }
  }
  // -->
</script>

<SCRIPT LANGUAGE="JavaScript">
<!--
function onClick(object) {
    for (var Current=0;Current < object.selectName.options.length;Current++) {
        var text = eval('object.currentText' + Current);
        var value = eval('object.currentValue' + Current);
        if (object.selectName.options[Current].selected) {
            text.value = object.selectName.options[Current].text;
            value.value = object.selectName.options[Current].value;
        }
        else {
            text.value = '';
            value.value = '';
        }
    }
}
//-->
</SCRIPT>

<script LANGUAGE="JavaScript">
<!--
// Nannette Thacker http://www.shiningstar.net
function confirmSubmit()
{
var agree=confirm("<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_WARNING_RESET_POPUP_MESSAGE; ?>");
if (agree)
	return true ;
else
	return false ;
}
// -->
</script>

<script LANGUAGE="JavaScript">
<!--
// Nannette Thacker http://www.shiningstar.net
function confirmSubmit1()
{
var agree=confirm("<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_WARNING_BACKUP_POPUP_MESSAGE; ?>");
if (agree)
	return true ;
else
	return false ;
}
// -->
</script>
<script LANGUAGE="JavaScript">
<!--
// Nannette Thacker http://www.shiningstar.net
function confirmSubmit2()
{
var agree=confirm("<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_WARNING_DELETE_POPUP_MESSAGE; ?>");
if (agree)
	return true ;
else
	return false ;
}
// -->
</script>

<script>

if (window.name!="reloaded") doRefresh();

function doRefresh(){
window.name="reloaded";
location.reload();
}
</script>
</head>

<?php

//--------------------------------------------------------------------------------
//--- If no actions are being specified, we request for -------
//--- validations in order to verify if each files and ------------
//--- functions are being properly implemented by the -----
//--- webmaster. ---------------------------------------------------------
//--------------------------------------------------------------------------------
  if ($action == "") {
      $action = "validation_files";
  } // End of if statement.

//--------------------------------------------------------------------------------
//--- Header ----------------------------------------------------------------
//--------------------------------------------------------------------------------
if ($action == "create_additional_customers_fields") {
    ?>
<body onload="init(); initListGroup('mysql_fields', document.forms[0].fields_type, document.forms[0].fields_size, 'save')">
<?php                                                                                                                                                                                         
} else {
?>
<body onload="init();">
<?php
} // End of if statement.
?>
<!-- header //-->
<?php require(DIR_WS_INCLUDES . 'header.php'); ?>
<!-- header_eof //-->

<! -- Header table -- >
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="100%">
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr class="dataTableRow">
<td width="100%" class="dataTableContent">&nbsp;</td>
</tr>
<tr>
<td width="100%">&nbsp;</td>
</tr>                            
<tr>
<td width="100%" class="pageHeading">&nbsp;<?php echo HEADING_TITLE; ?></td>
</tr>
</table>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="100%" class="dataTableHeadingContent">&nbsp;</td>
</tr>                
<tr class="dataTableHeadingRow">
<td width="100%" class="dataTableHeadingContent" align="center">&nbsp;<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_MENU_TITLE; ?></td>
</tr>
</table>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr class="dataTableRow">
<td width="100%" class="dataTableContent">&nbsp;</td>
</tr>
</table>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr class="dataTableRow">
<td width="33%" class="dataTableContent" align="center"><?php echo '<a href=\''.zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL').'\'>' . ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_LINK_1 . '</a>'; ?></td>
<td width="33%" class="dataTableContent" align="center"><?php echo '<a href=\''.zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 'action=create_additional_customers_fields', 'NONSSL').'\'>' . ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_LINK_2 . '</a>'; ?></td>
<td width="33%" class="dataTableContent" align="center"><?php echo '<a href=\''.zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 'action=reset_additional_customers_fields', 'NONSSL').'\' onClick="return confirmSubmit()" />' . ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_LINK_4 . '</a>'; ?></td>
</tr>
</table>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr class="dataTableRow">
<td width="100%" class="dataTableContent">&nbsp;</td>
</tr>
</table>
<table border="0" width="100%" cellpadding="0" cellspacing="0">
<tr>
<td width="100%">&nbsp;</td>
</tr>
</table>
<! -- End of header table -- >

<?php
  
  //--------------------------------------------------------------------------------
  //--- Validations begins here. ----------------------------------------
  //--------------------------------------------------------------------------------  
  if ($action == "validation_files") {      
      if (method_exists($customersFields, 'check_additional_customers_fields_files')) {      
          $customersFields->check_additional_customers_fields_files();      
      } else {
          $messageStack->add_session(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FUNCTION_MISSING, 'error');          
      } // End of if statement.
      
      $action = "show_additional_customers_fields";
  } // End of action statement.
 
  //---------------------------------------------------------------------------------
  //--- Applys modifications from webmaster either the -------
  //--- field should be enabled or not. --------------------------------
  //--------------------------------------------------------------------------------  
  if ($action == "additional_customers_fields_status") {
      
      $field_id = (isset($_GET['field_id'])) ? zen_db_prepare_input($_GET['field_id']) : 0;
      $field_status = (isset($_GET['field_status'])) ? zen_db_prepare_input($_GET['field_status']) : 0;
      
      if (!zen_not_null($field_id) || !zen_not_null($field_status)) {
          $messageStack->add_session(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_SUBMISSION_FORM, 'error');
          echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL') . '\'</script>';
      } // End of if statement.
      
      if (zen_not_null($field_id) && zen_not_null($field_status)) {
          
          if ($field_status == 0) {
		     $sql_data_array = array('field_status' => '1');
          
          } elseif ($field_status == 1) {
		  	 $sql_data_array = array('field_status' => '0');
          } // End of if statement.
          
          if (is_array($sql_data_array) && sizeof($sql_data_array) > 0) {
              zen_db_perform(TABLE_ADDITIONAL_CUSTOMERS, $sql_data_array, 'update', "field_id = '" . (int)$field_id . "'");            
              $action = "show_additional_customers_fields";
          } else {
              $messageStack->add_session(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FAILED_UPDATE_FIELD, 'error');          
              echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL') . '\'</script>';
          } // End of if statement.
      } // End of if statement.
  } // End of action statement.
  
  //--------------------------------------------------------------------------------
  //--- Deletes a specific field on request. -------------------------
  //--------------------------------------------------------------------------------  
  if ($action == "delete_additional_customers_fields") {
      
      $field_id = (isset($_GET['field_id'])) ? zen_db_prepare_input($_GET['field_id']) : 0;
      $field_name = (isset($_GET['field_name'])) ? zen_db_prepare_input($_GET['field_name']) : '';
      
      if (!zen_not_null($field_id) || !zen_not_null($field_name)) {
          $messageStack->add_session(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_SUBMISSION_FORM, 'error');
          echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL') . '\'</script>';
      } // End of if statement.
      
      if (zen_not_null($field_id) && zen_not_null($field_name)) {
          
          $sql_delete_and_drop = array();
          
          $sql_delete_and_drop[] = "ALTER TABLE " . TABLE_CUSTOMERS . " DROP COLUMN " . $field_name;                    
          $sql_delete_and_drop[] = "DELETE FROM " . TABLE_ADDITIONAL_CUSTOMERS . " WHERE field_id = " . (int)$field_id;          
          
          if (is_array($sql_delete_and_drop) && zen_not_null($sql_delete_and_drop)) {
              while (list($key, $val) = each($sql_delete_and_drop)) {
                  $db->Execute($val);
              } // End of while statement.
          } else {
              $messageStack->add_session(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FAILED_DELETE_FIELD, 'error');              
          } // End of if statement.
          echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS) . '\'</script>';
      } // End of if statement.
  } // End of action statement
  
  //--------------------------------------------------------------------------------
  //--- Creates additional customers fields once we -----------
  //--- gathered all the necessary variables. ----------------------
  //--------------------------------------------------------------------------------  
  if ($action == "create_additional_customers_fields") {
      ?>      
      <table border="0" width="100%" cellpadding="0" cellspacing="0" class="main_title">
      <tr class="dataTableHeadingRow">
      <td width="100%" class="dataTableHeadingContent" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_CREATE_TABLE_TITLE; ?></td>
      </tr>                              
      </table>
      <table border="0" width="100%" cellpadding="0" cellspacing="0" class="main_title">
      <tr class="dataTableRow">
      <td width="100%" class="dataTableContent">&nbsp;</td>
      </tr>
      </table>
      <! -- End of main centered table -- >
      <table border="0" width="100%" cellpadding="0" cellspacing="0" class="main_title">
      <tr class="dataTableRow">
      <td width="100%" class="dataTableContent" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_CREATE_FIELD_NOTICE; ?></td>
      </tr>
      </table>
      <table border="0" width="100%" cellpadding="0" cellspacing="0" class="main_title">
      <tr class="dataTableRow">
      <td width="100%" class="dataTableContent">&nbsp;</td>
      </tr>
      </table>
      <! -- Content centered table -- >
      <table border="0" width="100%" cellpadding="0" cellspacing="1">
      <tr class="dataTableRow">
      <td width="20%" class="pageHeading" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NAME_TITLE; ?>&nbsp;&nbsp;</td>
      <td width="20%" class="pageHeading" align="center">&nbsp;&nbsp;<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_TYPE_TITLE; ?></td>
      <td width="20%" class="pageHeading" align="center">&nbsp;&nbsp;<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_SIZE_TITLE; ?></td>
      <td width="20%" class="pageHeading" align="center">&nbsp;&nbsp;<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_ATTRIBUTE_TITLE; ?></td>
      <td width="20%" class="pageHeading" align="center">&nbsp;&nbsp;<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_DEFAULT_TITLE; ?></td>
      </tr>
      </table>
      <! -- End of content centered table -->
      <table border="0" width="100%" cellpadding="0" cellspacing="0" class="main_title">
      <tr class="dataTableRow">
      <td width="100%" class="dataTableContent">&nbsp;</td>
      </tr>
      </table>
      <! -- Field type -- >            
      <?php
      echo zen_draw_form('', FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'post')."\n";
      echo zen_draw_hidden_field('action', 'prep_create_additional_customers_fields', '', $action)."\n";      
      ?>
      <table border="0" width="100%" cellpadding="0" cellspacing="0">      
      <tr class="dataTableRow">                  
      <td width="20%" class="pageHeading" align="center"><?php echo zen_draw_input_field('fields_name', ((isset($_POST['fields_name'])) ? stripslashes($_POST['fields_name']) : ''), 'size=12')."\n"; ?>&nbsp;&nbsp;</td>
      <td width="20%" class="pageHeading" align="center">&nbsp;&nbsp;<select name="fields_type"></select></td>      
      <td width="20%" class="pageHeading" align="center">&nbsp;&nbsp;<select name="fields_size"></select></td>
      <td width="20%" class="pageHeading" align="center">&nbsp;&nbsp;
      <select name="fields_attributes">
      <option value="<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NO_ENTRY_ATTRIBUTE; ?>"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NO_ENTRY_ATTRIBUTE; ?></option>
      <option value="<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_UNSIGNED_ATTRIBUTE; ?>"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_UNSIGNED_ATTRIBUTE; ?></option>
      <option value="<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_UNSIGNED_ZEROFIELD_ATTRIBUTE; ?>"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_UNSIGNED_ZEROFIELD_ATTRIBUTE; ?></option>     
      </select>
      </td>
      <td width="20%" class="pageHeading" align="center">&nbsp;&nbsp;
      <?php echo zen_draw_input_field('fields_default', ((isset($_POST['fields_default'])) ? stripslashes($_POST['fields_default']) : ''), 'size=12')."\n"; ?>
      </td>      
      </tr>
      </table>
      <table border="0" width="100%" cellpadding="0" cellspacing="0" class="main_title">
      <tr class="dataTableRow">
      <td width="100%" class="dataTableContent">&nbsp;</td>
      </tr>      
      <tr>      
      <td width="100%" class="pageHeading">&nbsp;</td>
      </tr>
      <tr>
      <td width="100%" class="pageHeading" align="center">
      <input type="submit" name="submit" value="<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_SUBMIT_PREP_CREATE_FIELDS_FORM; ?>" />&nbsp;&nbsp;<input type="reset" value="<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_RESET_FORM; ?>" onclick="resetListGroup('mysql_fields')">
      </form>
      </td>
      </tr>
      </table>
      <! -- End of field types -->
      <?php
  } // End of action statement.
  
  //--------------------------------------------------------------------------------------------
  //--- This is the center hart of the file. "ALL" variables must ---------
  //--- comply in order to be used further. This step MUST apply. ---
  //--------------------------------------------------------------------------------------------  
  if ($action == "prep_create_additional_customers_fields") {            
      
      $fields_name = (isset($_POST['fields_name'])) ? zen_db_prepare_input($_POST['fields_name']) : '';      
      $fields_type = (isset($_POST['fields_type'])) ? zen_db_prepare_input($_POST['fields_type']) : '';
      $fields_size = (isset($_POST['fields_size'])) ? zen_db_prepare_input($_POST['fields_size']) : 0;      
      $fields_status = (isset($_POST['field_status'])) ? zen_db_prepare_input($_POST['field_status']) : 0;
      if (isset($_POST['fields_attributes']) && zen_not_null($_POST['fields_attributes'])) {
      $fields_attributes = (isset($_POST['fields_attributes'])) ? zen_db_prepare_input($_POST['fields_attributes']) : '';
      } // End of if statement.
       if (isset($_POST['fields_default']) && zen_not_null($_POST['fields_default'])) {
      $fields_default = (isset($_POST['fields_default'])) ? zen_db_prepare_input($_POST['fields_default']) : '';
      } // End of if statement.
      
      $error = array();     
                       
      $table_fields = $customersFields->fieldType(TABLE_CUSTOMERS, $fields_name, 'name');
      if (isset($table_fields) && zen_not_null($table_fields)) {
          $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FIELD_ALREADY_EXISTS_BOTH_TABLES;
          unset ($fields_name);
          unset ($fields_type);         
      } // End of if statement.
      
      if (!zen_not_null($fields_name) || preg_match("/[^a-z0-9\-\_]/i", $fields_name) && !zen_not_null($fields_type) || preg_match("/[^a-z]/i", $fields_type)) {
      	
          $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_MARKED_SPACES_OR_EMPTY_FIELD_NAME_AND_TYPE;      
          unset ($fields_name);
          unset ($fields_type);
          unset ($fields_size);
      } // End of if statement.                      
            
      if (isset($fields_default) && zen_not_null($fields_default) && preg_match("/[^a-z0-9\-\_]/i", $fields_default)) {
          $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_INVALID_DEFAULT_FIELD_CHAR_TYPE;
          unset ($fields_name);
          unset ($fields_type);
          unset ($fields_default);
      } // End of if  statement.
      
        // Fields type: 'char' validations.
          if ($fields_type == 'char' && !zen_not_null($fields_size)) {
              $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_CHAR_FIELDS_SIZE;
              unset ($fields_name);
              unset ($fields_type);
              unset ($fields_size);
              
          } elseif ($fields_type == 'char' && zen_not_null($fields_size) && zen_not_null($fields_attributes)) {
              if ($fields_attributes != ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NO_ENTRY_ATTRIBUTE) {
              $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_CHAR_NO_FIELDS_ATTRIBUTE_ERROR;
              unset ($fields_name);
              unset ($fields_type);
              unset ($fields_size);
              unset ($fields_attributes);
              } // End of if statement.
          } // End of if statement.
          
          // Fields type: 'int' validations.
          if ($fields_type == 'int' && !zen_not_null($fields_size)) {
              $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_INT_FIELDS_SIZE;
          } elseif ($fields_type == 'int' && zen_not_null($fields_attributes) && $fields_attributes == ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NO_ENTRY_ATTRIBUTE) {
              unset ($fields_attributes);          
          } // End of if statement.
          
          // Fields type: 'smallint' validations.
          if ($fields_type == 'smallint' && !zen_not_null($fields_size)) {
              $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_SMALLINT_FIELDS_SIZE;
          } elseif ($fields_type == 'smallint' && zen_not_null($fields_attributes) && $fields_attributes == ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NO_ENTRY_ATTRIBUTE) {
              unset ($fields_attributes);          
          } // End of if statement.
          
          // Fields type: 'tinyint' validations.
          if ($fields_type == 'tinyint' && !zen_not_null($fields_size)) {
              $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_TINYINT_FIELDS_SIZE;
          } elseif ($fields_type == 'tinyint' && zen_not_null($fields_attributes) && $fields_attributes == ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NO_ENTRY_ATTRIBUTE) {
              unset ($fields_attributes);          
          } // End of if statement.
          
          // Fields type: 'varchar' validations.
          if ($fields_type == 'varchar' && !zen_not_null($fields_size)) {
              $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_EMPTY_VARCHAR_FIELDS_SIZE;
              unset ($fields_name);
              unset ($fields_type);
              unset ($fields_size);
              
          } elseif ($fields_type == 'varchar' && zen_not_null($fields_size) && zen_not_null($fields_attributes)) {
              if ($fields_attributes != ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NO_ENTRY_ATTRIBUTE) {
              $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_VARCHAR_NO_FIELDS_ATTRIBUTE_ERROR;
              unset ($fields_name);
              unset ($fields_type);
              unset ($fields_size);
              unset ($fields_attributes);
              } // End of if statement.
          } // End of if statement.
      
      if (zen_not_null($fields_name) && zen_not_null($fields_type)) {          
                  ?>
                  
                  <! -- Main centered table -- >
                  <table border="0" width="100%" cellpadding="0" cellspacing="0" class="main_title">
                  <tr class="dataTableHeadingRow">
                  <td width="100%" class="dataTableHeadingContent" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_PREP_TABLE_TITLE; ?></td>
                  </tr>                              
                  </table>
                  <! -- End of main centered table -- >
                  <table border="0" width="100%" cellpadding="0" cellspacing="0">
                  <tr class="dataTableRow">
                  <td width="100%" class="dataTableContent" align="center">&nbsp;</td>
                  </tr>
                  <tr class="dataTableRow">
                  <td width="100%" class="dataTableContent" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_BACKUP_TABLES_FIRST_NOTICE; ?></td>                  
                  </tr>
                  <tr class="dataTableRow">
                  <td width="100%" class="dataTableContent" align="center">&nbsp;</td>
                  </tr>
                  <tr class="dataTableRow">
                  <td width="100%" class="dataTableContent" align="center">                  
                  <?php
                  if (zen_not_null($fields_name) && zen_not_null($fields_type)) {
                            echo zen_draw_form('', FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'post')."\n";
                            echo zen_draw_hidden_field('action', 'exec_create_additional_customers_fields', '', $action)."\n";                            
                            echo zen_draw_hidden_field('fields_name', $fields_name, '')."\n";                            
                            echo zen_draw_hidden_field('fields_type', $fields_type, '')."\n";
                            if (zen_not_null($fields_size)) {
                            echo zen_draw_hidden_field('fields_size', $fields_size, '')."\n";                            
                            } // End of if statement.                            
                            echo zen_draw_hidden_field('fields_status', $fields_status, '')."\n";
                            if (zen_not_null($fields_attributes)) {
                            echo zen_draw_hidden_field('fields_attributes', $fields_attributes, '')."\n";
                            } // End of if statement.
                            if (zen_not_null($fields_default)) {
                            echo zen_draw_hidden_field('fields_default', $fields_default, '')."\n";
                            } // End of if statement.
                  } // End of if statement.
                            ?>
                  &nbsp;&nbsp;<input type="submit" name="submit" value="<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_SUBMIT_CREATE_FIELDS_FORM; ?>" onClick="return confirmSubmit1()" />                  
                  </form>
                  <?php
                  echo zen_draw_form('', FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'post')."\n";
                  ?>
                  <input type="submit" name="go_back" value="<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_GO_BACK_LINK; ?>">
                  </form>
                  </td>
                  </tr>
                  <tr class="dataTableRow">
                  <td width="100%" class="dataTableContent" align="center">&nbsp;</td>
                  </tr>
                  </table>
                  
                  <?php                        
      } // End of if statement.
      
      if (is_array($error) && zen_not_null($error)) {
          while (list($key, $val) = each($error)) {
              $val = zen_output_string_protected($val);
              $messageStack->add_session($val, 'error');              
          } // End of while statement.          
          echo '<script>window.location=\'' .zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL').'\'</script>';
      } // End of if statement.      
  } // End of action statement.
  
  //----------------------------------------------------------------------------------------------
  //--- Once the preparation point has passed successfully, -------------
  //--- we execute the routine where the fields are being officially ------
  //--- created (in this case - for creation). ---------------------------------------
  //----------------------------------------------------------------------------------------------  
  if ($action == "exec_create_additional_customers_fields") {            
      
      $fields_name = (isset($_POST['fields_name'])) ? zen_db_prepare_input($_POST['fields_name']) : '';      
      $fields_type = (isset($_POST['fields_type'])) ? zen_db_prepare_input($_POST['fields_type']) : '';
      $fields_size = (isset($_POST['fields_size'])) ? zen_db_prepare_input($_POST['fields_size']) : 0;
      
      $fields_status = (isset($_POST['fields_status'])) ? zen_db_prepare_input($_POST['fields_status']) : 0;
      if (isset($_POST['fields_attributes']) && zen_not_null($_POST['fields_attributes'])) {
      $fields_attributes = (isset($_POST['fields_attributes'])) ? zen_db_prepare_input($_POST['fields_attributes']) : '';
      } // End of if statement.
       if (isset($_POST['fields_default']) && zen_not_null($_POST['fields_default'])) {
      $fields_default = (isset($_POST['fields_default'])) ? zen_db_prepare_input($_POST['fields_default']) : '';
      } // End of if statement.
      
      $error = array();
      
      if (!zen_not_null($fields_name) || preg_match("/[^a-z0-9\-\_]/i", $fields_name) && !zen_not_null($fields_type) || preg_match("/[^a-z]/i", $fields_type)) {
      	
          $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_MARKED_SPACES_OR_EMPTY_FIELD_NAME_AND_TYPE;      
      } // End of if statement.
           
      if (zen_not_null($fields_name) && !preg_match("/[^a-z0-9\-\_]/i", $fields_name) && zen_not_null($fields_type) && !preg_match("/[^a-z]/i", $fields_type)) {
          
          $sql = array();          
                             
          // Fields type: 'char' - creation.
          if ($fields_type == 'char' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_default) && zen_not_null($fields_default)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";						 
              $sql[] = "ALTER TABLE " . TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type. "(" . $fields_size. ") DEFAULT " . $fields_default . " NOT NULL";
              } elseif ($fields_type == 'char' && isset($fields_size) && zen_not_null($fields_size)) {
              	
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";					 
              $sql[] = "ALTER TABLE " . TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size. ") NOT NULL";
          } // End of if statement.

          // Fields type: 'date' - creation.
          if ($fields_type == 'date') {
          	
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";						  
              $sql[] = "ALTER TABLE " . TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . " NOT NULL DEFAULT '0001-01-01'";
          } // End of if statement.

          // Fields type: 'datetime' - creation.
          if ($fields_type == 'datetime' && isset($fields_default) && zen_not_null($fields_default)) {          	
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE " . TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . " DEFAULT " . $fields_default;
          } elseif ($fields_type == 'datetime' && isset($fields_default) && !zen_not_null($fields_default)) {          	
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";						  
              $sql[] = "ALTER TABLE " . TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . " DEFAULT '0001-01-01 00:00:00'";
          } // End of if statement.

          // Fields type: 'int' - creation.
          if ($fields_type == 'int' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_attributes) && zen_not_null($fields_attributes) && isset($fields_default) && zen_not_null($fields_default)) {          	
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";					  
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") " . $fields_attributes . " DEFAULT " . $fields_default. " NOT NULL";
          } elseif ($fields_type == 'int' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_defautl) && zen_not_null($fields_default)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") DEFAULT " . $fields_default. " NOT NULL";
          } elseif ($fields_type == 'int' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_attributes) && zen_not_null($fields_attributes)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") " . $fields_attributes . " DEFAULT '0' NOT NULL";
          } elseif ($fields_type == 'int' && isset($fields_size) && zen_not_null($fields_size)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") DEFAULT '0' NOT NULL";
          } // End of if statement.

          // Fields type: 'longtext' validations.
          if ($fields_type == 'longtext') {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE " . TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . " NOT NULL";
          } // End of if statement.

          // Fields type: 'smallint' - creation.
          if ($fields_type == 'smallint' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_attributes) && zen_not_null($fields_attributes) && isset($fields_default) && zen_not_null($fields_default)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") " . $fields_attributes . " DEFAULT " . $fields_default. " NOT NULL";
          } elseif ($fields_type == 'smallint' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_default) && zen_not_null($fields_default)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") DEFAULT " . $fields_default. " NOT NULL";
          } elseif ($fields_type == 'smallint' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_attributes) && zen_not_null($fields_attributes)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") " . $fields_attributes . " DEFAULT '0' NOT NULL";
          } elseif ($fields_type == 'smallint' && isset($fields_size) && zen_not_null($fields_size)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") DEFAULT '0' NOT NULL";
          } // End of if statement.

          // Fields type: 'text' validations.
          if ($fields_type == 'text') {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE " . TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . " NOT NULL";
          } // End of if statement.

          // Fields type: 'tinyint' - creation.
          if ($fields_type == 'tinyint' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_attributes) && zen_not_null($fields_attributes) && isset($fields_default) && zen_not_null($fields_default)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") " . $fields_attributes . " DEFAULT " . $fields_default. " NOT NULL";
          } elseif ($fields_type == 'tinyint' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_default) && zen_not_null($fields_default)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") DEFAULT " . $fields_default. " NOT NULL";
          } elseif ($fields_type == 'tinyint' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_attributes) && zen_not_null($fields_attributes)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") " . $fields_attributes . " DEFAULT '0' NOT NULL";
          } elseif ($fields_type == 'tinyint' && isset($fields_size) && zen_not_null($fields_size)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE "  .TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size . ") DEFAULT '0' NOT NULL";
          } // End of if statement.

          // Fields type: 'varchar' - creation.
          if ($fields_type == 'varchar' && isset($fields_size) && zen_not_null($fields_size) && isset($fields_default) && zen_not_null($fields_default)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE " . TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type. "(" . $fields_size. ") DEFAULT " . $fields_default . " NOT NULL";
          } elseif ($fields_type == 'varchar' && isset($fields_size) && zen_not_null($fields_size)) {
              $sql[] = "INSERT INTO " . TABLE_ADDITIONAL_CUSTOMERS . " (field_id, field_name, field_date, field_required, use_url, field_url, field_status) VALUES (NULL, '" . $fields_name . "', '" . date("Y-m-d") . "', '0', '0', '', '0')";
              $sql[] = "ALTER TABLE " . TABLE_CUSTOMERS . " ADD " . $fields_name . " " . $fields_type . "(" . $fields_size. ") NOT NULL";
          } // End of if statement.          
          
          if (is_array($error) && zen_not_null($error)) {
              while (list($key, $val) = each($error)) {
                  $messageStack->add_session($val, 'error');
              } // End of while starement.
              echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL') . '\'</script>';
          } // End of if statement.
          
          if (is_array($sql) && zen_not_null($sql)) {          	  
              while (list($key, $val) = each($sql)) {
                  $db->Execute($val);                  
              } // End of while statement.			                
              $action = "show_additional_customers_fields";
          } else {
          $messageStack->add_session(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FAILED_ALTER_AND_INSERT_FIELD, 'error');          
          echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL') . '\'</script>';
          } // End of if statement.
          
          unset ($fields_name);
          unset ($fields_types);
          unset ($fields_size);
          unset ($fields_attributes);
          unset ($fields_default);
      } // End of if statement.
  } // End of action statement.
  
  //---------------------------------------------------------------------------------
  //--- Resets the whole additional customers table fields. --
  //--------------------------------------------------------------------------------- 
  
  if ($action == "reset_additional_customers_fields") {
      
      $sql = "TRUNCATE TABLE " . TABLE_ADDITIONAL_CUSTOMERS;
      $db->Execute($sql);
      
      $action = "show_additional_customers_fields";
  } // End of action statement.
  
  if ($action == "exec_edit_additional_customers_fields") {
      
      if (isset($_POST['fields_id'])) {
          $fields_id = (isset($_POST['fields_id'])) ? zen_db_prepare_input($_POST['fields_id']) : 0;
      } else {
          $fields_id = 0;
      }
      
      if (isset($_POST['use_url'])) {
          $use_url = (isset($_POST['use_url'])) ? zen_db_prepare_input($_POST['use_url']) : "";
      } else {
          $use_url = "";
      }
      
      if (isset($_POST['fields_url_name'])) {
          $fields_url_name = (isset($_POST['fields_url_name'])) ? zen_db_prepare_input($_POST['fields_url_name']) : "";
      } else {
          $fields_url_name = "";
      }
      
      if (isset($_POST['fields_url'])) {
          $fields_url = (isset($_POST['fields_url'])) ? zen_db_prepare_input($_POST['fields_url']) : "";
      } else {
          $fields_url = "";
      }
      
      if (isset($_POST['fields_required'])) {
          $fields_required = (isset($_POST['fields_required'])) ? zen_db_prepare_input($_POST['fields_required']) : "";
      } else {
          $fields_required = "";
      }
      
      if (!zen_not_null($fields_id) || !zen_not_null($use_url) || !zen_not_null($fields_required)) {
          $messageStack->add_session(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FAILED_UPDATE_FIELD, 'error');          
          echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL') . '\'</script>';      
      
      } elseif ($use_url == 2 && !zen_not_null($fields_url)) {
          $messageStack->add_session(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FAILED_UPDATE_FIELD, 'error');          
          echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 'edit_additional_customers_fields&field_id=' . $fields_id, 'NONSSL') . '\'</script>';
          
      } elseif ($use_url == 2 && !zen_not_null($fields_url_name)) {
          $messageStack->add_session(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FAILED_UPDATE_FIELD, 'error');          
          echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 'edit_additional_customers_fields&field_id=' . $fields_id, 'NONSSL') . '\'</script>';
      
      } elseif (zen_not_null($fields_id) && zen_not_null($use_url) && zen_not_null($fields_required)) {
          $db->Execute("UPDATE " . TABLE_ADDITIONAL_CUSTOMERS . " SET use_url = '" . $use_url . "', field_url_name = '" . $fields_url_name . "', field_url = '" . $fields_url . "', field_required = '" . $fields_required . "' WHERE field_id = '" . (int)$fields_id . "'");
          echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL') . '\'</script>';          
      }
  }
  
  if ($action == "edit_additional_customers_fields") {
	
	  if (isset($_GET['field_id'])) {
		  $field_id = (isset($_GET['field_id'])) ? zen_db_prepare_input($_GET['field_id']) : 0;
	  } else {
		  $field_id = 0;	
	  } // End of if statement.
	  
	  if (!zen_not_null($field_id) || !$sniffer->table_exists(TABLE_ADDITIONAL_CUSTOMERS)) {
		  echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS) . '\'</script>';
	  }
      
      if (zen_not_null($field_id)) {
          
          $sql = "
          
          SELECT field_name, use_url, field_url_name, field_url, field_required
          FROM " . TABLE_ADDITIONAL_CUSTOMERS . "
          WHERE field_id = " . $field_id;
          
          $getFields = $db->Execute($sql);
	  ?>
	  <table border="0" width="100%" cellpadding="0" cellspacing="0">
      <tr class="dataTableRow">
      <td width="100%" class="pageHeading">&nbsp;</td>
      </tr>
      </table>
      <table border="0" width="100%" cellpadding="0" cellspacing="1">
      <tr class="dataTableRow">
      <td width="20%" class="pageHeading" align="right"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_USE_URL_TITLE; ?>&nbsp;&nbsp;</td>
      <td width="20%" class="pageHeading" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_URL_NAME_TITLE; ?></td>
      <td width="20%" class="pageHeading" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_URL_TITLE; ?></td>            
      <td width="20%" class="pageHeading" align="left">&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_REQUIRED_TITLE; ?></td>      
      </tr>      
      <tr class="dataTableRow">
      <?php 
      echo zen_draw_form('', FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'post')."\n";
      echo zen_draw_hidden_field('action', 'exec_edit_additional_customers_fields', '', $action)."\n";
      echo zen_draw_hidden_field('fields_id', $field_id, '')."\n";                            
      ?>
      <td width="20%" class="pageHeading" align="right">
      <select name="use_url">
      <?php
      if ($getFields->fields['use_url'] == 1) {
      ?>
          <option value="1" SELECTED><?php echo TEXT_NO; ?></option>
          <option value="2"><?php echo TEXT_YES; ?></option>
      <?php
      } elseif ($getFields->fields['use_url'] == 2) {
      ?>
          <option value="2" SELECTED><?php echo TEXT_YES; ?></option>
          <option value="1"><?php echo TEXT_NO; ?></option>          
      <?php      
      } else {          
      ?>          
          <option value="1"><?php echo TEXT_NO; ?></option>          
          <option value="2"><?php echo TEXT_YES; ?></option>
      <?php
      }
      ?>
      </select>
      &nbsp;&nbsp;</td>
      <td width="20%" class="pageHeading" align="center"><?php echo zen_draw_input_field('fields_url_name', ((isset($_POST['fields_url_name'])) ? zen_db_prepare_input($_POST['fields_url_name']) : $getFields->fields['field_url_name']), 'size="12"')."\n"; ?></td>
      <td width="20%" class="pageHeading" align="center"><?php echo zen_draw_input_field('fields_url', ((isset($_POST['fields_url'])) ? zen_db_prepare_input($_POST['fields_url']) : $getFields->fields['field_url']), 'size="12"')."\n"; ?></td>            
      <td width="20%" class="pageHeading" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <select name="fields_required">
      <?php
      if ($getFields->fields['field_required'] == 1) {
      ?>
          <option value="1" SELECTED><?php echo TEXT_NO; ?></option>
          <option value="2"><?php echo TEXT_YES; ?></option>
      <?php
      } elseif ($getFields->fields['field_required'] == 2) {
      ?>
          <option value="2" SELECTED><?php echo TEXT_YES; ?></option>
          <option value="1"><?php echo TEXT_NO; ?></option>          
      <?php      
      } else {          
      ?>          
          <option value="1"><?php echo TEXT_NO; ?></option>          
          <option value="2"><?php echo TEXT_YES; ?></option>
      <?php
      }
      ?>      
      </select>      
      </tr>
      </table>      
      <table border="0" width="100%" cellpadding="0" cellspacing="0" class="main_title">
      <tr class="dataTableRow">
      <td width="100%" class="dataTableContent">&nbsp;</td>
      </tr>      
      <tr>      
      <td width="100%" class="pageHeading">&nbsp;</td>
      </tr>
      <tr>
      <td width="100%" class="pageHeading" align="center">
      <input type="submit" name="submit" value="<?php echo IMAGE_UPDATE; ?>" />&nbsp;&nbsp;<input type="reset" value="<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_RESET_FORM; ?>">
      </form>
      <?php
      }
  } // End of action statement.
                   
  if ($action == "show_additional_customers_fields") {      
      
      $customersFields->getFields();
	  $num_rows = $customersFields->countFields();
      $counter = 0;
      ?>
      
      <table border="0" width="100%" cellpadding="0" cellspacing="0">
      <tr>
      <td width="100%">
      <table border="0" width="100%" cellpadding="0" cellspacing="0">
      <tr class="dataTableHeadingRow">
      <td width="100%" class="dataTableHeadingContent" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_SHOW_ADDITIONAL_TABLE_TITLE; ?></td>
      </tr>
      </table>
      <?php
      
      if ($num_rows <= 0) {          
          ?>
          <table border="0" width="100%" cellpadding="0" cellspacing="0">
          <tr class="dataTableRow">          
          <td width="100%" class="dataTableContent">&nbsp;</td>
          </tr>
          <tr class="dataTableRow">          
          <td width="100%" class="dataTableContent"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_NO_CONTENT_MAIN_PAGE; ?></td>
          </tr>
          <tr class="dataTableRow">          
          <td width="100%" class="dataTableContent">&nbsp;</td>
          </tr>
          </table> 
          <table border="0" width="100%" cellpadding="0" cellspacing="0">          
          <?php   
          
      } elseif ($num_rows > 0) {
          ?>
          <table border="0" width="100%" cellpadding="0" cellspacing="0">
          <tr class="dataTableRow">
          <td width="100%" class="pageHeading">&nbsp;</td>
          </tr>
          </table>
          <table border="0" width="100%" cellpadding="0" cellspacing="1">
          <tr class="dataTableRow">
          <td width="22%" class="pageHeading" align="right"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_NAME_TITLE; ?>&nbsp;&nbsp;</td>
          <td width="5%" class="pageHeading" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_COUNT_TITLE; ?></td>
          <td width="5%" class="pageHeading" align="center"><?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_TYPE_TITLE; ?></td>
          <td width="22%" class="pageHeading" align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_CONTENT_OPTIONS_TABLE_TITLE; ?></td>
          </tr>                                                                                       
          </table>          
          <table border="0" width="100%" cellpadding="0" cellspacing="2">          
          <?php
		  $field_counter = 0;		  
		  $get_additionals = $customersFields->getAllFieldsContent();		  
          foreach ($get_additionals as $key => $val) {
              $counter++;              
              $get_field_id = $val['field_id'];
              $get_field_name = $val['field_name'];
              $get_field_required = $val['field_required'];
              $get_field_use_url = $val['use_url'];
              $get_field_url = $val['field_url'];
              $get_field_status = $val['field_status'];
          ?>
          <tr class="dataTableRow">          
          <td width="22%" class="dataTableContent" align="right"><?php echo $get_field_name; ?>&nbsp;&nbsp;</td>                              
          <td width="4%" class="dataTableContent" align="center"><?php echo $get_field_id; ?></td>
		  <td width="4%" class="pageHeading" align="center"><?php echo $customersFields->fieldType(TABLE_CUSTOMERS, $get_field_name,'type'); ?></td>          
          <td width="22%" class="dataTableContent" align="left">&nbsp;&nbsp;
          <?php 
                if ($get_field_name != "moderators_level") {
                
                if ($get_field_status == 0) {
                    echo '<a href="' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 'action=additional_customers_fields_status&field_id='.$get_field_id.'&field_status='.$get_field_status) . '">&nbsp;&nbsp;&nbsp;' . zen_image(DIR_WS_IMAGES . 'icon_red_on.gif', ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_STATUS_OFF_ALT) . '</a>';
                    
                } elseif ($get_field_status == 1) {
                    echo '<a href="' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 'action=additional_customers_fields_status&field_id='.$get_field_id.'&field_status='.$get_field_status) . '">&nbsp;&nbsp;&nbsp;' . zen_image(DIR_WS_IMAGES . 'icon_green_on.gif', ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_STATUS_ON_ALT) . '</a>';
                } // End of if statement.
                
                } else {
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                } // End of if statement.
                
                	echo '<a href="' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 'action=edit_additional_customers_fields&field_id='.$get_field_id).'">&nbsp;&nbsp;&nbsp;' . zen_image(DIR_WS_IMAGES . 'icon_edit.gif', ICON_EDIT) . '</a>';
                
                    echo '<a href="' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, 'action=delete_additional_customers_fields&field_id='.$get_field_id.'&field_name='.$get_field_name).'" onClick="return confirmSubmit2()">&nbsp;&nbsp;&nbsp;' . zen_image(DIR_WS_IMAGES . 'icon_delete.gif', ICON_DELETE) . '</a>';
                    ?>
          </td>                    
          </tr>          
          <?php          
          } // End of foreach statement.          
      } // End of if statement.            
      ?>      
      </table>
      <table border="0" width="100%" cellpadding="0" cellspacing="0">
	  <tr class="dataTableRow">          
      <td width="100%" class="dataTableContent">&nbsp;</td>
      </tr>      
      <tr class="dataTableRow">
      <td width="100%" class="dataTableContent" align="center"><?php echo sprintf(ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_TOTAL_COUNT_MAIN_PAGE, $counter); ?></td>
      </tr>
      <tr class="dataTableRow">
      <td width="100%" class="dataTableContent" align="center">&nbsp;</td>
      </tr>
      </table>
      </td>
      </tr>
      </table>
      <?php
} // End of action statement.
  ?>
  
  <!-- footer //-->
<?php 
//----------------------------------------------------------------------------------------------------
//--- Footer --------------------------------------------------------------------------------------
//----------------------------------------------------------------------------------------------------
require(DIR_WS_INCLUDES . 'footer.php'); 
?>
<!-- footer_eof //-->
<br />
</td>
</tr>
</table>
</body>
</html>

<?php  
  require(DIR_WS_INCLUDES . 'application_bottom.php');
  ?>