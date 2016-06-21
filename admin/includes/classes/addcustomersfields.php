<?php

/**
 * @author: TheOracle
 * @description: Additional customers fields class file (v3.01).
 * @date: May 13 2008
 * @Donations and support: scoutch@gmail.com
 * @Version: Tested on: Zen-Cart E-Commerce v1.3.8a
 * @copyright: 2008
 */ 
 
 class addCustomersFields extends base {
	var $addFieldsContent, $addAllFieldsContent, $fieldRequired, $fieldStatus, $useURL, $fieldURLName, $fieldURL;
	
	function addCustomersFields() {
		$this->addFieldsContent = array();
		$this->addAllFieldsContent = array();		
		$this->fieldRequired = array();
		$this->fieldStatus = array();
		$this->useURL = array();
        $this->fieldURLName = array();
		$this->fieldURL = array();		        
		
		$this->installAddCustomersFields();		
	}
			
	function getFields() {
		global $db, $sniffer;
		
		$sql = "
			
		SELECT field_id, field_name, field_required, field_status, use_url, field_url
		FROM " . TABLE_ADDITIONAL_CUSTOMERS;
			
		$getFields = $db->Execute($sql);	
			
		if ($getFields->RecordCount() > 0) {            
			while (!$getFields->EOF) {				                								
				if ($sniffer->field_exists(TABLE_CUSTOMERS, $this->fieldType(TABLE_CUSTOMERS, $getFields->fields['field_name'], 'name')) 
				    && !in_array($this->fieldType(TABLE_CUSTOMERS, $getFields->fields['field_name'], 'name'), $this->coreFields())) {
					
					$this->addFieldsContent[] = $getFields->fields['field_name'];
					$this->addAllFieldsContent[] = $getFields->fields;						
					$this->fieldRequired[] = $getFields->fields['field_required'];
					$this->fieldStatus[] = $getFields->fields['field_status'];
					$this->useURL[] = $getFields->fields['use_url'];
					$this->fieldURL[] = $getFields->fields['field_url'];					
					
				}					
				$getFields->MoveNext();
			}
            @mysql_free_result($getFields);
			
		} else {
			@mysql_free_result($getFields);
			return;			
		}													
	}
    
    function showFields($field_prefix = '') {
        if (sizeof($this->getFieldsContent()) > 0) {
            return ", " . implode(", ", $this->getFieldsContent());
        }
    }
	
	function countFields() {
		return sizeof($this->addFieldsContent);
	}
	
	function countAllFields() {
		return sizeof($this->addAllFieldsContent);
	}
	
	function getFieldsContent() {		
		return $this->addFieldsContent;
	}
	
	function getAllFieldsContent() {
		return $this->addAllFieldsContent;		
	}
    
    function isURLName($field_name = '') {
        if (in_array($field_name, $this->fieldURLName) && in_array(2, $this->useURL)) {
            return true;
        }        
    }
	
	function validatePostContent() {
        global $messageStack;
        
		$table_fields = $this->getFieldsContent();
        foreach ($table_fields as $key => $val) {
            if (isset($_POST[$val]) && sizeof($_POST[$val]) > 0) {
               if ($this->isRequired($val) && strlen(trim(zen_db_prepare_input($_POST[$val]))) > 0) {
                   return true;
               
               } elseif (!$this->isRequired($val)) {
                   return true;
               
               } else {
                   ereg("(.+)\_(.+)", $val, $regs);
                   $val = $regs[1] . " " . $regs[2];                  
                   $messageStack->add_session(str_replace(array("{validation_post}"), array(ucfirst(zen_output_string_protected($val))), ERROR_ADDITIONAL_CUSTOMERS_FIELDS_VALIDATION_POST), 'caution');
                   return false;
               }
            }
        }      
	}
	
	function updatePostContent() {
        if ($this->countFields() > 0) {
            $additional_sql = array();
            $table_fields = $this->getFieldsContent();
            foreach ($table_fields as $key => $val) {
                if (isset($_POST[$val]) && sizeof($_POST[$val]) > 0) {                  
                        
                   if ($this->fieldType(TABLE_CUSTOMERS, $val, 'type') == 'smalltext' 
                    || $this->fieldType(TABLE_CUSTOMERS, $val, 'type') == 'mediumtext' 
                    || $this->fieldType(TABLE_CUSTOMERS, $val, 'type') == 'text' 
                    || $this->fieldType(TABLE_CUSTOMERS, $val, 'type') == 'blob') {
                          
                        $additional_sql[] = "$val = '".zen_db_prepare_input(strip_tags($_POST[$val])) . "'";
                        
                    } elseif (zen_validate_email($_POST[$val])) {
                        $additional_sql[] = "$val = '".zen_db_prepare_input($_POST[$val]) . "'";
                    
                    } else {
                        $additional_sql[] = "$val = '".zen_db_prepare_input($_POST[$val]) . "'";
                    }
                }
            }       
                
            if (sizeof($additional_sql) > 0) {
                return implode(", ", $additional_sql);
            }
        }
	}	

	function isActive($field_name = '') {
		if ($this->countFields() > 0) {
            foreach ($this->getFieldsContent() as $key => $val) {
                foreach ($this->getFieldsStatus() as $key1 => $val1) {
                    if ($key == $key1 && $val == $field_name && $val1 == 1) {
                        return true;
                    }
                }
            }
        }                
	}
	
	function isRequired($field_name = '') {
		if ($field_name != '' && in_array($field_name, $this->addFieldsContent)) {			
			foreach ($this->addFieldsContent as $key => $val) {
				if ($val == $field_name) {
					foreach ($this->fieldRequired as $key1 => $val1) {
						if ($key == $key1) {
							if ($val1 == 2) {													
								return true;							
							}					
						}
					}
				}
			}			
		} 
	}
	
	function isRemoteURL($field_url = '') {
		if ($this->countFields() > 0) {
            foreach ($this->getFieldsContent() as $key => $val) {
                foreach ($this->useURL as $key1 => $val1) {
                    foreach ($this->fieldURL as $key2 => $val2) {
                        if ($key == $key1 && $key1 == $key2 && $key2 == $key) {
                            if ($val1 == 2) {
                                if ($this->is_remote($val2)) {
                                    return true;                                
                                }  
                            }
                        }
                    }
                }
            }
        }       
	}
    
    function isLocalURL($field_url = '') {
		if ($this->countFields() > 0) {
            foreach ($this->getFieldsContent() as $key => $val) {
                foreach ($this->useURL as $key1 => $val1) {
                    foreach ($this->fieldURL as $key2 => $val2) {
                        if ($key == $key1 && $key1 == $key2 && $key2 == $key) {
                            if ($val1 == 2) {
                                if ($this->is_local($val2)) {
                                    return true;                                
                                }  
                            }
                        }
                    }
                }
            }
        }       
	}
    
    function isFieldMinLength($field_name = '') {
        if (in_array($field_name, $this->getFieldsContent())) {
            if (sizeof($this->fieldMinLength) == 0 && !$this->isCheckEmpty($val)) {
                return 0;
            
            } elseif (sizeof($this->fieldMinLength) > 0) {
                foreach ($this->getFieldsContent() as $key => $val) {
                    foreach ($this->getFieldMinLength as $key1 => $val1) {
                        if ($key == $key1) {
                            return (int)$val1;
                        }
                    }
                }
            }
        }
    }
    
    function isCheckEmpty($field_name = '') {
        if (in_array($field_name, $this->getFieldsContent()) && sizeof($this->fieldCheckEmpty) > 0) {
            foreach ($this->getFieldsContent() as $key => $val) {
                foreach ($this->fieldCheckEmpty as $key1 => $val1) {
                    if ($key == $key1) {
                        if ($val1 == 2) {
                            return true;
                        }
                    }
                }
            }
        }
    }
	
	function is_remote($field_url = '') {
        if (!preg_match("/^https?:\/\//i", $field_url)) {
           return (preg_match("/http?:\/\//i", $field_url));
        } else {
           return (preg_match("/https?:\/\//i", $field_url));
        }
	}
    
    function is_local($field_url = '') {
        return (preg_match("/FILENAME?\_/i", $field_url));        
	}
	
	function fieldType($table_name = '', $field_name = '', $type = '') {
		global $db;
		
		if ($field_name != '' && $table_name != '' && $type != '') {		    
			$field_type = $db->Execute("SHOW FIELDS FROM " . $table_name);			
			while (!$field_type->EOF) {
				if ($field_type->fields['Field'] == $field_name) {
					if ($type == 'type') {
						if (ereg("(.*)\((.*)\)", $field_type->fields['Type'], $regs)) {						
							return zen_output_string_protected(strtolower($regs[1]));
						} else {
							return zen_output_string_protected(strtolower($field_type->fields['Type']));
						}
					} elseif ($type == 'name') {
						return zen_output_string_protected(strtolower($field_type->fields['Field']));
					}
				}								
			    $field_type->MoveNext();
			}					    			    	    
		}
    }
    
    function check_additional_customers_fields_files() {
        global $messageStack;
        
        $error = array();     
        
        if (!@file_exists(DIR_WS_BOXES . 'extra_boxes/additional_customers_fields_customers_dhtml.php')) {        
            $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FILE_MISSING . DIR_WS_ADMIN. DIR_WS_BOXES . 'extra_boxes/additional_customers_fields_customers_dhtml.php';                    
                      
        } elseif (!@file_exists(DIR_WS_LANGUAGES. $_SESSION['language'] . '/'.FILENAME_ADDITIONAL_CUSTOMERS_FIELDS)) {        
            $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FILE_MISSING . DIR_WS_ADMIN. DIR_WS_LANGUAGES . $_SESSION['language'] . '/additional_customers_fields.php';
                       
        } elseif (!@file_exists(DIR_WS_LANGUAGES. $_SESSION['language'] . '/'.FILENAME_ADDITIONAL_CUSTOMERS_FIELDS)) {        
            $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FILE_MISSING . DIR_WS_ADMIN. DIR_WS_LANGUAGES . $_SESSION['language'] . '/extra_definitions/additional_customers_fields.php';
            
        } elseif (!@file_exists(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS)) {        
            $error[] = ENTRY_ADDITIONAL_CUSTOMERS_FIELDS_FILE_MISSING . DIR_WS_ADMIN . FILENAME_ADDITIONAL_CUSTOMERS_FIELDS;                
        } // End of if statement.    
            
        if (isset($error) && is_array($error) && sizeof($error) > 0) {        
            foreach ($error as $key => $val) {
                $val = zen_output_string_protected($val);
                $messageStack->add_session($val, 'error');
            } // End of foreach statement.
            echo '<script>window.location=\'' . zen_href_link(FILENAME_ADDITIONAL_CUSTOMERS_FIELDS, '', 'NONSSL') . '\'</script>';
        } // End of if statement.
    } // End of function statement.
	
	function coreFields() {
		
		$customers_table_fields = array(
  		'customers_id' => 'customers_id',
  		'customers_gender' => 'customers_gender',
  		'customers_firstname' => 'customers_firstname',
  		'customers_lastname' => 'customers_lastname',
  		'customers_dob' => 'customers_dob',
  		'customers_email_address' => 'customers_email_address',
  		'customers_nick' => 'customers_nick',
  		'customers_default_address_id' => 'customers_default_address_id',
  		'customers_telephone' => 'customers_telephone',
  		'customers_fax' => 'customers_fax',
  		'customers_password' => 'customers_password',
  		'customers_newsletter' => 'customers_newsletter',
  		'customers_group_pricing' => 'customers_group_pricing',
  		'customers_email_format' => 'customers_email_format',
  		'customers_authorization' => 'customers_authorization',
  		'customers_referral' => 'customers_referral',
  		'customers_paypal_payerid' => 'customers_paypal_payerid',
  		'customers_paypal_ec' => 'customers_paypal_ec',  		
  		);
	    
		return $customers_table_fields;		
	}	
	
	function installAddCustomersFields() {
		global $db;		
				
		$sql = array();
				
		$sql[] = "
			
		CREATE TABLE IF NOT EXISTS " . TABLE_ADDITIONAL_CUSTOMERS . " (
		field_id INT(11) unsigned NOT NULL AUTO_INCREMENT,
		field_name VARCHAR(64) NOT NULL DEFAULT '',		
		field_date DATE NOT NULL DEFAULT '0001-01-01',
		field_required INT(1) NOT NULL DEFAULT '0',
		use_url INT(1) NOT NULL DEFAULT '0',
        field_url_name VARCHAR(255) NOT NULL DEFAULT '',
		field_url VARCHAR(255) NOT NULL DEFAULT '',		
		field_status INT(1) NOT NULL DEFAULT '0',
		PRIMARY KEY(field_id)
		) ENGINE=MyISAM; 
			
		";
			
		foreach ($sql as $key => $val) {
			return $db->Execute($val);
		}
	}
	
	function uninstallAddCustomersFields() {
		global $db, $sniffer;
		
		$drop_column = array();
		foreach ($this->getFieldsContent() as $key => $val) {
			if ($sniffer->field_exists(TABLE_CUSTOMERS, $val)) {
				$drop_column[] = "DROP COLUMN " . $val;				
			}
		}		
		return $db->Execute("ALTER TABLE " . TABLE_CUSTOMERS . implode(", ", $drop_column));		
        return $db->Execute("DROP TABLE " . TABLE_ADDITIONAL_CUSTOMERS);        
	}
}

?>