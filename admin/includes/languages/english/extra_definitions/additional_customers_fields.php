<?php
/**
 * @author: TheOracle
 * @description: Additional customers fields (v3.01).
 * @date: May 13 2008
 * @Version: Tested on: Zen-Cart E-Commerce v1.3.8a
 * @copyright: 2008
 */

define('BOX_CUSTOMERS_ADDITIONAL_CUSTOMERS_FIELDS', 'Add Customers Fields');

// Additional Customers Fields - Form Type Table Title For Whole Additional Window.
define('ADDITIONAL_CUSTOMERS_FIELDS_FORM_TITLE', 'Additional Customers Fields');

//=========================================================================================================
// Additional Customers Fields - Form Type Table Structure (Input text fields)
//
// Note: EMPTY FIELDS ARE STILL BEING CONSIDERED AS AN ADDITIONAL CUSTOMERS FIELDS IN THE ADMIN'S
// CUSTOMERS PAGE 'AS LONG AS YOU CHOOSE AT LEAST ONE FIELD TYPE' FROM NOW ON !!!
//
// Take also note that if you switch from INPUT or TEXTAREA field into DROPDOWN or RADIO BUTTON,
// YOU WILL LOOSE ALL CONTENT INSIDE THE PREVIOUS FIELDS ONCE YOU UPDATE WITH THE NEW FIELD TYPE 
// SO MAKE SURE TO CHOOSE TO PLAY WITH THE FIELDS UNTIL YOU FIND WHAT YOU'RE LOOKING FOR 
// 'BEFORE' YOU ADD ANYTHING IMPORTANT IN IT !!!
//
// Here's out it works in HTML version for the input text: 
// - <input type="text" name="customers_hobbies" value="your content">
// - <input type="text" name="customers_age" value="your content">
// - <input type="text" name="customers_cellphone" value="your content">

// Imagine; almost four years has passed and all the pain we had to push ourselves into.
// This new way is a way for your freedom. All you need to do is to enter "one" title name for 
// each additional customers fields you have created from the MOD.

// Remember, a constance of 'two additional customers fields' is needed.
// You can see some example below. As you can see, for the input type, there are no content.
// Of course not, the content is being gathered from the database since no options are required
// in order to ask customers to fill their content. The title should suffice in this case (the same for the textarea type).

//-------------------------------------------------------------------------
// Here's a cheap preview:
//                                     Title      |      Content
// ------------------------------------------------------------------------

// From your admin/customers.php file, before this MOD was ever built, additional fields were needed to be
// added manually into the core file as expertise weas amended in order to accomplish the task without
// any damages involved.

// Try it in this file instead and save yourself from misery to see how fast you can implement new fields.

// Array functionality:
// As for the other fields type -
// The way arrays work, again, one title only. As for the content, you can add unlimited texts and values inside.
// Ex: ("test1", "test2", "test3") and so on. Remember to add your title first.

// In your admin/customers.php file, the results will output like this if you choose the pull down list type:

//                                     Title      |       test1
//                                                        test2
//                                                        test3

// Note: Only INT, TinyINT and SmallINT are recognized as values for this type of form.

// As for your radio title, it will output like this:

//                                     Title      |      <button> test1          <button> test2           <button> test3

// If you have read this text until here, then you should understand how it works. If not, you can always request support
// from the author for additional help.

// As you may already know so far, text and textarea does NOT need to be called with 'content' arrays since the information are
// outputed from the database on anyhow.

// 1st note: If you're worried about having your fields checked by default, don't worry - it is already implemented in the MOD.
// 2nd note: Do NOT add the additional customers name field twice on two different form types. Otherwise, you might alter
// your specific customer's options.
// 3rd note: There are no checkboxes options inside this MOD yet. Reason: Checkboxes are meant for specific actions.
// It cannot be determined on what exacly you'd like to do with these checkboxes (ex: delete, update, select, checked without validations ect ...).

// Below are few examples on how it works. You can customize these names into the fields name you created - the way you like them to be.

// Good luck !
//=========================================================================================================

// Additional Customers Fields - Form Type Table Structure (Input fields)
// Input Field with length (<input type="text" name="your_field" size="length_value">)

//$additional_customers_fields_form_input_title['test_field'] = array('Test field: ');
//$additional_customers_fields_form_input_length['test_field'] = array("30");

// Additional Customers Fields - Form Type Table Structure (Textarea fields)


$additional_customers_fields_form_textarea_title['dealercode'] = array('Dealer Code: ');
$additional_customers_fields_form_textarea_length['dealercode'] = array("10", "50", "1");

$additional_customers_fields_form_textarea_title['wagsn'] = array('Witech serial number: ');
$additional_customers_fields_form_textarea_length['wagsn'] = array("10", "50", "1");


// First row: Wrap
// Second row: Cols
// Third row: Rows
// (<TEXTAREA NAME="your_field" WRAP="wrap_value_from_array_below" COLS="cols_value_from_array_below" ROWS="rows_value_from_array_below">sql_content_you_added_from_admin_customers_page</TEXTAREA>)

//$additional_customers_fields_form_textarea_title['test_field'] = array('Test field: ');
//$additional_customers_fields_form_textarea_length['test_field'] = array("50", "60", "10");

// Additional Customers Fields - Form Type Table Structure (Select fields - title)
// drop_down_title_from_array_below <SELECT NAME="your_field"><OPTION VALUE="counter_value_from_extra_functions">drop_down_content_from_array_below</OPTION></SELECT>
// Note: There's no need for edit the count value from the extra functions as each values are being counted automatically with the
// quantity of fields you will add with the appropriate field type from this file.

//$additional_customers_fields_form_pull_down_title['test_field'] = array('Test field: ');
//$additional_customers_fields_form_pull_down_content['test_field'] = array("False", "True");

// Additional Customers Fields - Form Type Table Structure (Radio fields - title)
// radio_title_from_array_below <input type="radio" name="your_field" value="counter_value_from_extra_functions">radio_content_from_array_below
// Note: There's no need for edit the count value from the extra functions as each values are being counted automatically with the
// quantity of fields you will add with the appropriate field type from this file.

//$additional_customers_fields_form_radio_title['test_field'] = array("Test field: ");
//$additional_customers_fields_form_radio_content['test_field'] = array("Option1", "Option2");

// Definitions
define('ERROR_ADDITIONAL_CUSTOMERS_FIELDS_UPDATE', 'Error updating one of the additional customers fields');
define('ERROR_ADDITIONAL_CUSTOMERS_FIELDS_VALIDATION_POST', 'The following field has been set to "required" : - <b>{validation_post}</b> - and was sent to be updated with no content. Please make the proper corrections.');
?>
