<?php
/**
 * @author: TheOracle
 * @description: Additional customers fields (v3.01).
 * @date: May 13 2008
 * @Version: Tested on: Zen-Cart E-Commerce v1.3.8a
 * @copyright: 2008
 */

function edit_add_customers_fields_from_core_customers_page() {
    global $customersFields, $cInfo, $additional_customers_fields_form_input_title, $additional_customers_fields_form_input_length,
    $additional_customers_fields_form_textarea_title, $additional_customers_fields_form_textarea_length, $additional_customers_fields_form_pull_down_title, 
    $additional_customers_fields_form_pull_down_content, $additional_customers_fields_form_radio_title, $additional_customers_fields_form_radio_content;
      
	  $check = false;
      if (isset($additional_customers_fields_form_input_title) || isset($additional_customers_fields_form_textarea_title) || isset($additional_customers_fields_form_pull_down_title) || isset($additional_customers_fields_form_radio_title)) {
          $check = true;
      }
      
      if ($check == true) {
          $table_fields = $customersFields->getFieldsContent();	      
          if (isset($table_fields) && sizeof($table_fields) > 0) {
              $counter = 0;
              ?>          
              <tr>  
                <td class="main">&nbsp;</td>
                <td class="main">&nbsp;</td>
              </tr>
              <tr>
              <td class="formAreaTitle"><?php echo ADDITIONAL_CUSTOMERS_FIELDS_FORM_TITLE; ?></td>
              </tr>
              <tr>
              <td class="formArea">
              <table border="0" cellspacing="2" cellpadding="2">                    
              <?php          
                  while (list($key, $val) = each($table_fields)) {
                          $val = zen_output_string_protected($val);                      
                      
                      // Input fields.
                      if (isset($additional_customers_fields_form_input_title[$val]) && is_array($additional_customers_fields_form_input_title[$val]) && sizeof($additional_customers_fields_form_input_title[$val]) > 0) {
                          while (list($key1, $val1) = each($additional_customers_fields_form_input_title[$val])) {					  	  
                              if ($key1 == $val && $key2 == $key1) {                              
                                  ?>
                                  <tr>
                                  <td class="main"><?php echo $val1; ?></td>
                                  <?php
                                  if ($customersFields->isRequired($val)) {
                                      ?>
                                      <td class="main"><?php echo zen_draw_input_field($val, $cInfo->$val, zen_set_field_length(TABLE_CUSTOMERS, $val, $additional_customers_fields_form_input_length[$val][0]), true); ?></td>                                  
                                      <?php
                                  } else {
                                      ?>
                                      <td class="main"><?php echo zen_draw_input_field($val, $cInfo->$val, zen_set_field_length(TABLE_CUSTOMERS, $val, $additional_customers_fields_form_input_length[$val][0])); ?></td>                                  
                                      </tr>                                                                                                                                                                        
                                  <?php
                                  } // End of if statement.
                              } // End of if statement.                                         
                          } // End of while statement.                                    
                      } // End of if statement.
                      
                      // Textarea fields.
                      if (isset($additional_customers_fields_form_textarea_title[$val]) && is_array($additional_customers_fields_form_textarea_title[$val]) && sizeof($additional_customers_fields_form_textarea_title[$val]) > 0) {                  
                          while (list($key1, $val1) = each($additional_customers_fields_form_textarea_title[$val])) {                                                	
                              if ($key1 == $val && $key2 == $key1) {                                                            
                                  ?>
                                  <tr>
                                  <td class="main"><?php echo $val1; ?></td>
                                  <?php
                                  if ($customersFields->isRequired($val)) {
                                  ?>
                                  <td class="main"><textarea name="<?php echo zen_output_string_protected($val); ?>" wrap="<?php echo $additional_customers_fields_form_textarea_length[$val][0]; ?>" cols="<?php echo $additional_customers_fields_form_textarea_length[$val][1]; ?>" rows="<?php echo $additional_customers_fields_form_textarea_length[$val][2]; ?>"><?php echo zen_output_string_protected(nl2br($cInfo->$val)); ?></textarea></td>
                                  <td class="main"><?php echo TEXT_FIELD_REQUIRED; ?></td>
                                  <?php
                                  } else {                                      
                                  ?>
                                  <td class="main"><textarea name="<?php echo zen_output_string_protected($val); ?>" wrap="<?php echo $additional_customers_fields_form_textarea_length[$val][0]; ?>" cols="<?php echo $additional_customers_fields_form_textarea_length[$val][1]; ?>" rows="<?php echo $additional_customers_fields_form_textarea_length[$val][2]; ?>"><?php echo zen_output_string_protected(nl2br($cInfo->$val)); ?></textarea></td>                                  
                                  <?php
                                  } // End of if statement.
                                  ?>
                                  </tr>
                                  <?php
                              } // End of if statement.				       
                          } // End of while statement.                  
                      } // End of if statement.
                      
                      // Pull down menus.
                      if (isset($additional_customers_fields_form_pull_down_title[$val]) && is_array($additional_customers_fields_form_pull_down_title[$val]) && sizeof($additional_customers_fields_form_pull_down_title[$val]) > 0) {
                          while (list($key1, $val1) = each($additional_customers_fields_form_pull_down_title[$val])) {
                              if (isset($additional_customers_fields_form_pull_down_content[$val]) && is_array($additional_customers_fields_form_pull_down_content[$val]) && sizeof($additional_customers_fields_form_pull_down_content[$val]) > 0) {
                                  ?>
                                  <tr>
                                  <td class="main">
                                  <?php echo $val1; ?></td>
                                  <td class="main">
                                  <?php                      
                                  unset ($counter);
                                  ?>
                                  <select name="<?php echo $val; ?>">
                                  <?php                                
                                  while (list($key2, $val2) = each($additional_customers_fields_form_pull_down_content[$val])) {
                                      if ($key1 == $val) {                                                                                                                  
                                          $counter++;
                                          if ($counter == $cInfo->$val) {                                                  
                                              ?>                                              
                                              <option value="<?php echo $counter; ?>" SELECTED><?php echo $val2; ?></option>                                              
                                              <?php                                                                                        
                                          } else {                                              
                                              ?>                                          
                                              <option value="<?php echo $counter; ?>"><?php echo $val2; ?></option>                                          
                                              <?php                                                                                        
                                          } // End of if statement.                                          
                                      } // End of if statement.                                                                    
                                  } // End of while statement. 
                              } // End of if statement.                          
                          } // End of while statement.
                          ?>
                          </select>
                          </td>
                          <?php
                      } // End of if statement.
                      
                      // Radio buttons.
                      if (isset($additional_customers_fields_form_radio_title[$val]) && is_array($additional_customers_fields_form_radio_title[$val]) && sizeof($additional_customers_fields_form_radio_title[$val]) > 0) {
                          while (list($key1, $val1) = each($additional_customers_fields_form_radio_title[$val])) {
                              if (isset($additional_customers_fields_form_radio_content[$val]) && is_array($additional_customers_fields_form_radio_content[$val]) && sizeof($additional_customers_fields_form_radio_content[$val]) > 0) {                                                                                      
                                  ?>
                                  <tr>
                                  <td class="main"><?php echo $val1; ?></td>
                                  <td class="main">
                                  <?php
                                  unset ($counter);
                                  while (list($key2, $val2) = each($additional_customers_fields_form_radio_content[$val])) {
                                      if ($key1 == $val) {
                                          for ($i = $val2[0]; $i <= $customersFields->countFields(); $i++) {                                                                                    
                                              $counter++;
                                              if ($counter == $cInfo->$val) {
                                                  echo zen_draw_radio_field($val, $counter, $val2). $val2;                                                                                    
                                              } else {
                                                  ?> 
                                                  <input type="radio" name="<?php echo $val; ?>" value="<?php echo $counter; ?>"><?php echo $val2;
                                              } // End of if statement.                                          
                                              break;
                                          } // End of for statement.
                                      } // End of if statement.                                                                             
                                  } // End of while statement.                              
                              } // End of if statement.
                          } // End of while statement.                  
                          ?>
                          </td>
                          <?php
                          if ($customersFields->isRequired($val)) {
                              ?>
                              <td class="main"><?php echo TEXT_FIELD_REQUIRED; ?></td>                                              
                              <?php                      
                          } // End of if statement.
                      ?>
                      </tr>
                      <?php                  
                      } // End of if statement.
                  } // End of while statement.              
              ?>
              </table></td>
              </tr>
              <?php
          } // End of if statement.
         } // End of if statement.
     
} // End of function statement.
?>