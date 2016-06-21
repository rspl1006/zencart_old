<?php
/**
 * @package shippingMethod
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: ups.php 5849 2007-02-20 01:28:43Z drbyte $
 */
/**
 * UPS Shipping Module class
 * 
 */
class ups extends base {
  
  /**
   * Declare shipping module alias code
   *
   * @var string
   */
  var $code;
  
  /**
   * Shipping module display name
   *
   * @var string
   */
  var $title;
  
  /**
   * Shipping module display description
   *
   * @var string
   */
  var $description;
  
  /**
   * Shipping module icon filename/path
   *
   * @var string
   */
  var $icon;
  
  /**
   * Shipping module status
   *
   * @var boolean
   */
  var $enabled;
  
  /**
   * Shipping module list of supported countries (unique to USPS/UPS)
   *
   * @var array
   */
  var $types;
  
  /**
   * Constructor
   *
   * @return ups
   */
  function ups() {
    global $order, $db, $template;

    $this->code = 'ups';
    $this->title = MODULE_SHIPPING_UPS_TEXT_TITLE;
    $this->description = MODULE_SHIPPING_UPS_TEXT_DESCRIPTION;
    $this->sort_order = MODULE_SHIPPING_UPS_SORT_ORDER;
    $this->icon = $template->get_template_dir('shipping_ups.gif', DIR_WS_TEMPLATE, $current_page_base,'images/icons'). '/' . 'shipping_ups.gif';
    $this->tax_class = MODULE_SHIPPING_UPS_TAX_CLASS;
    $this->tax_basis = MODULE_SHIPPING_UPS_TAX_BASIS;

    // disable only when entire cart is free shipping
    if (zen_get_shipping_enabled($this->code)) {
      $this->enabled = ((MODULE_SHIPPING_UPS_STATUS == 'True') ? true : false);
    }

    if ( ($this->enabled == true) && ((int)MODULE_SHIPPING_UPS_ZONE > 0) ) {
      $check_flag = false;
      $check = $db->Execute("select zone_id from " . TABLE_ZONES_TO_GEO_ZONES . " where geo_zone_id = '" . MODULE_SHIPPING_UPS_ZONE . "' and zone_country_id = '" . $order->delivery['country']['id'] . "' order by zone_id");
      while (!$check->EOF) {
        if ($check->fields['zone_id'] < 1) {
          $check_flag = true;
          break;
        } elseif ($check->fields['zone_id'] == $order->delivery['zone_id']) {
          $check_flag = true;
          break;
        }
        $check->MoveNext();
      }

      if ($check_flag == false) {
        $this->enabled = false;
      }
    }

    $this->types = array('1DM' => 'Next Day Air Early AM',
                         '1DML' => 'Next Day Air Early AM Letter',
                         '1DA' => 'Next Day Air',
                         '1DAL' => 'Next Day Air Letter',
                         '1DAPI' => 'Next Day Air Intra (Puerto Rico)',
                         '1DP' => 'Next Day Air Saver',
                         '1DPL' => 'Next Day Air Saver Letter',
                         '2DM' => '2nd Day Air AM',
                         '2DML' => '2nd Day Air AM Letter',
                         '2DA' => '2nd Day Air',
                         '2DAL' => '2nd Day Air Letter',
                         '3DS' => '3 Day Select',
                         'GND' => 'Ground',
                         'GNDCOM' => 'Ground Commercial',
                         'GNDRES' => 'Ground Residential',
                         'STD' => 'Standard',
                         'XPR' => 'Worldwide Express',
                         'XPRL' => 'worldwide Express Letter',
                         'XDM' => 'Worldwide Express Plus',
                         'XDML' => 'Worldwide Express Plus Letter',
                         'XPD' => 'Worldwide Expedited',
                         'WXS' => 'Worldwide Saver');
						 

    $this->service_types = array('1DM' => '14',
                         '1DML' => '',
                         '1DA' => '01',
                         '1DAL' => '',
                         '1DAPI' => '',
                         '1DP' => '13',
                         '1DPL' => '',
                         '2DM' => '59',
                         '2DML' => '',
                         '2DA' => '02',
                         '2DAL' => '',
                         '3DS' => '12',
                         'GND' =>'03',
                         'GNDCOM' => '',
                         'GNDRES' => '',
                         'STD' => '11',
                         'XPR' => '07',
                         'XPRL' => '',
                         'XDM' => '54',
                         'XDML' => '',
                         'XPD' => '08',
                         'WXS' => '65');
						 
  }

	function get_service_code_for_method($method) {
	   return $this->service_types[$method];
	}

	function get_method_service_code($service_code) {
	  
	  foreach($this->service_types as $method => $service) {
			if($service == $service_code){
				return $method;
			}
	   }
	   return null;
	}
  
  function convert_to_USD($amount,$currency_code){
  
		$request = curl_init('http://www.google.com/ig/calculator?hl=en&q=' .$amount . $currency_code . '=?USD');  
		
		curl_setopt($request, CURLOPT_HEADER, 1);  
		curl_setopt($request, CURLOPT_POST, 1);  
		curl_setopt($request, CURLOPT_TIMEOUT, 60);  
		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);  
		curl_setopt($request, CURLOPT_SSL_VERIFYPEER, 0);  
		curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 0);  
		
		$response=curl_exec ($request);  
		$json_data = strstr($response, '{lhs:'); 
		$start = strpos($json_data,'rhs: "') + 6;
		$end = strpos($json_data,'U.S. dollars')-1;
		$usd = round(substr($json_data,$start,($end-$start)),2);
		curl_close($request); 
		return $usd;
  }
  /**
   * Get quote from the new UPS XML based APIs:
   */
	function get_ups_rate($package_origin_zip,$package_origin_iso, $package_destination_zip, $package_destination_iso, $package_weight,$method) {  

		$AccessLicenseNumber = '8C5908AC04CFD8F4'; 
		$UserId = 'ptibbert'; 
		$Password = 'ceaser';  
		
		//$package_origin_zip = '2132';
		//$package_origin_iso = 'NL';
		
		//$package_origin_zip = '';
		//$package_origin_iso = 'HK';
		
		if ($method == null || $method == '') {
			$request_option = 'Shop';
			$service = '';
		} else {
			$service_code = $this->get_service_code_for_method($method);
			$request_option = 'Rate';
			$service = "<Service><Code>$service_code</Code></Service>";
			print $service;
		}
		
		if ($package_origin_iso == 'NL' || $package_origin_iso == 'HK' ) {
			$weight_uom = "<Code>KGS</Code>";
			$package_weight = $package_weight * 0.45359237;
		} else {
			$weight_uom = "<Code>LBS</Code>";
		}
		
		$data ="<?xml version=\"1.0\"?>  
		<AccessRequest xml:lang=\"en-US\">  
			<AccessLicenseNumber>$AccessLicenseNumber</AccessLicenseNumber>  
			<UserId>$UserId</UserId>  
			<Password>$Password</Password>  
		</AccessRequest>  
		<?xml version=\"1.0\"?>  
		<RatingServiceSelectionRequest xml:lang=\"en-US\">  
			<Request>  
				<TransactionReference>  
					<CustomerContext>Test Request</CustomerContext>  
					<XpciVersion>1.0001</XpciVersion>  
				</TransactionReference>  
				<RequestAction>Rate</RequestAction>  
				<RequestOption>$request_option</RequestOption>  
			</Request>  
		<PickupType>  
			<Code>01</Code>  
		</PickupType>  
		<Shipment>  
			<Shipper>  
				<Address>  
					<PostalCode>48462</PostalCode>  
					<CountryCode>US</CountryCode>  
				</Address>  
			</Shipper>  
			<ShipTo>  
				<Address>  
					<PostalCode>$package_destination_zip</PostalCode>  
					<CountryCode>$package_destination_iso</CountryCode>  
				<CommercialAddressIndicator/>  
				</Address>  
			</ShipTo>  
			<ShipFrom>  
				<Address>  
					<PostalCode>$package_origin_zip</PostalCode>  
					<CountryCode>$package_origin_iso</CountryCode>  
				</Address>  
			</ShipFrom>  
			$service  
			<Package>  
				<PackagingType>  
					<Code>02</Code>  
				</PackagingType> 
				<PackageWeight>  
					<UnitOfMeasurement>  
						$weight_uom  
					</UnitOfMeasurement>  
					<Weight>$package_weight</Weight>  
				</PackageWeight>  
			</Package>  
		</Shipment>  
		</RatingServiceSelectionRequest>";  
		
		$request = curl_init("https://www.ups.com/ups.app/xml/Rate");  
		
		curl_setopt($request, CURLOPT_HEADER, 1);  
		curl_setopt($request, CURLOPT_POST, 1);  
		curl_setopt($request, CURLOPT_TIMEOUT, 60);  
		curl_setopt($request, CURLOPT_RETURNTRANSFER, 1);  
		curl_setopt($request, CURLOPT_SSL_VERIFYPEER, 0);  
		curl_setopt($request, CURLOPT_SSL_VERIFYHOST, 0);  
		curl_setopt($request, CURLOPT_POSTFIELDS,$data);  
		
		$response=curl_exec ($request);  
		$xml_data = strstr($response, '<?');  
		curl_close($request); 

		$result = new SimpleXMLElement($xml_data);
		$upsQuote = array();

		//print 'Data: ' .  $package_origin_zip . ' - ' . $package_origin_iso . ' - ' . $package_destination_zip . ' - ' . $package_destination_iso . ' - ' . $package_weight . ' - ' . $prod . '<br/>';
		//print '<!-- '. $response. ' -->';
		//print 'Result : ' . $result->Response->ResponseStatusDescription . '<br/>';
		//print 'Error  : ' . $result->Response->Error->ErrorCode . '<br/>';
		//print 'Error  : ' . $result->Response->Error->ErrorDescription . '<br/>';
		//print 'XML    : <pre>' . $xml_data . '</pre><br/>';
		
		//An error occured so return an empty quote array;
		if($result->Response->ResponseStatusCode != '1'){
			return $upsQuote;
		}
		
		//Build a quote array for the successfull quotes
		foreach($result->children() as $name => $element ) {
			if($name == 'RatedShipment' ){
				$quoted_method = $this->get_method_service_code($element->Service->Code);
				$currency_code = $element->TotalCharges->CurrencyCode;
				
				$native_amount = $element->TotalCharges->MonetaryValue;
				if($currency_code == "USD"){
					$amount = $native_amount;
				} else if ($currency_code == "EUR" || $currency_code == "HKD"){
					$amount = $this->convert_to_USD($native_amount,$currency_code);
				} else {
					//Could not convert currency so don't quote;
					return $upsQuote;
				}
				
				if($quoted_method != null && $quoted_method != ''){
					$upsQuote[] = array($quoted_method => $amount);
				}
				//print 'Service: ' . $quoted_method . '<br/>';
				//print 'Quote  : ' .  $native_amount . '<br/>';
				//print 'Currency  : ' .  $currency_code . '<br/>';
				//print 'USD    : ' .  $amount . '<br/>';
			}
		}
		return $upsQuote;	
   }  
	
  /**
   * Get quote from shipping provider's API:
   *
   * @param string $method
   * @return array of quotation results
   */
  function quote($method = '') {
    global $_POST, $order,  $shipping_num_boxes, $db, $shipping_packages,$shipping_domestic_weight, $shipping_international_weight;

  
    $shipping_destination_country_id = $order->delivery['country']['id'];

    $origin_query = "select shipping_origin_country_id, shipping_origin_zip from zen_shipping_origin where destination_country_id = " . (int)$shipping_destination_country_id . "";
    $shipping_origin = $db->Execute($origin_query);

    $shipping_origin_country = $shipping_origin->fields['shipping_origin_country_id'];
    $shipping_origin_zip = $shipping_origin->fields['shipping_origin_zip'];

	if($shipping_origin_country == null || $shipping_origin_country == ''){
		$shipping_origin_country = 223;
		$shipping_origin_zip = '01801';
		
		$_SESSION['cart']->add_review_reason('SHIPPING_ORIGIN');
	}
	
	$package_origin_zip = $shipping_origin_zip;
	$country_name = zen_get_countries($shipping_origin_country, true);
	$package_origin_iso =  $country_name['countries_iso_code_2'];
	$package_destination_zip =   $order->delivery['postcode'];
	$package_destination_iso = $order->delivery['country']['iso_code_2'];
	
	if($package_origin_iso == $package_destination_iso) {
		$shipping_weight = $shipping_domestic_weight;
	} else {
		$shipping_weight = $shipping_international_weight;
	}
    $ups_shipping_weight = ($shipping_weight < 0.1 ? 0.1 : $shipping_weight);
	
	if($ups_shipping_weight <= 150) {
		$upsQuote = $this->get_ups_rate($package_origin_zip, $package_origin_iso, $package_destination_zip, $package_destination_iso, $ups_shipping_weight,$method);
	} else {
	
	    $max_package_weight = 150;
	    $remainder_shipping_weight = $ups_shipping_weight % $max_package_weight;
		$max_weight_package_count = floor($ups_shipping_weight / $max_package_weight);
	
		for ($i = 0; $i < $max_weight_package_count; $i++){
			$all_ups_quotes = $this->get_ups_rate($package_origin_zip, $package_origin_iso, $package_destination_zip, $package_destination_iso, $max_package_weight,$method);
				
			foreach($all_ups_quotes as $product_quote) {
				foreach($product_quote as $product => $amount) {
					$product_quote_totals[$product] += $amount;
				}
			}	
		}
		if($remainder_shipping_weight > 0) {
			$all_ups_quotes = $this->get_package_quote($package_origin_zip, $package_origin_iso, $package_destination_zip, $package_destination_iso, $remainder_shipping_weight);
			foreach($all_ups_quotes as $product_quote) {
				foreach($product_quote as $product => $amount) {
						$product_quote_totals[$product] += $amount;
				}
			}	
		}
		//Convert the totals to the expected UPS QUote
		foreach($product_quote_totals as $product => $amount) {
			$upsQuote[] = array($product => $amount);
		}
	}		
	
	//Calculate each packed box as a seperate shipment
	//foreach($shipping_packages as $package) {
///		
//			if($package_origin_iso == $package_destination_iso) {
///				$package_weight = $package['domestic'];
//			} else {
//				$package_weight = $package['international'];
//			}
//			
//			if ($package_weight != 0) {
//				$all_ups_quotes = $this->get_package_quote($package_origin_zip, $package_origin_iso, $package_destination_zip, $package_destination_iso, $package_weight);
//			
//				foreach($all_ups_quotes as $product_quote) {
//					foreach($product_quote as $product => $amount) {
//						//print "$product: $amount<br>";
//						$product_quote_totals[$product] += $amount;
//					}
//				}	
//				//print '----<br/>';
//			}
//		}
//		foreach($product_quote_totals as $product => $amount) {
			//print "$product: $amount<br>";
//			$upsQuote[] = array($product => $amount);
//		}
	
//	$reason_string = '';
//	$reasons = $_SESSION['cart']->get_review_reasons();
//	foreach($reasons as $reason){
//		$reason_string = $reason_string . ' - ' . $reason;
//	}
//	$reason_string = $reason_string . '  -  ';
	
    if ( (is_array($upsQuote)) && (sizeof($upsQuote) > 0) ) {
      switch (SHIPPING_BOX_WEIGHT_DISPLAY) {
        case (0):
        $show_box_weight = '';
        break;
        case (1):
        $show_box_weight = ' (' . $shipping_num_boxes . ' ' . TEXT_SHIPPING_BOXES . ')';
        break;
        case (2):
        $show_box_weight = ' (' . number_format($ups_shipping_weight * $shipping_num_boxes,2) . TEXT_SHIPPING_WEIGHT . ')';
        break;
        default:
        $show_box_weight = ' (' .   number_format($ups_shipping_weight,2) . TEXT_SHIPPING_WEIGHT . ' - ' . count($shipping_packages) . ' ' . TEXT_SHIPPING_BOXES .  ')';
        break;
      }
      $this->quotes = array('id' => $this->code,
                            'module' => $this->title . $show_box_weight);

      $methods = array();
      $allowed_methods = explode(", ", MODULE_SHIPPING_UPS_TYPES);
      $std_rcd = false;
      $qsize = sizeof($upsQuote);
      for ($i=0; $i<$qsize; $i++) {
        list($type, $cost) = each($upsQuote[$i]);
		
        if ($type=='STD') {
          if ($std_rcd) continue;
          else $std_rcd = true;
        }
        if (!in_array($type, $allowed_methods)) continue;
        
        $methods[] = array('id' => $type,
                           'title' => $this->types[$type],
                           'cost' => ($cost + MODULE_SHIPPING_UPS_HANDLING) );
      }

      $this->quotes['methods'] = $methods;

      if ($this->tax_class > 0) {
        $this->quotes['tax'] = zen_get_tax_rate($this->tax_class, $order->delivery['country']['id'], $order->delivery['zone_id']);
      }
    } else {
      $this->quotes = array('module' => $this->title,
                            'error' => 'We are unable to obtain a rate quote for UPS shipping.<br />Please contact the store if no other alternative is shown.');
    }

    if (zen_not_null($this->icon)) $this->quotes['icon'] = zen_image($this->icon, $this->title);

    return $this->quotes;
  }
  
  /**
   * check status of module
   *
   * @return boolean
   */
  function check() {
    global $db;
    if (!isset($this->_check)) {
      $check_query = $db->Execute("select configuration_value from " . TABLE_CONFIGURATION . " where configuration_key = 'MODULE_SHIPPING_UPS_STATUS'");
      $this->_check = $check_query->RecordCount();
    }
    return $this->_check;
  }
  
  /**
   * Install this module
   *
   */
  function install() {
    global $db;
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Enable UPS Shipping', 'MODULE_SHIPPING_UPS_STATUS', 'True', 'Do you want to offer UPS shipping?', '6', '0', 'zen_cfg_select_option(array(\'True\', \'False\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('UPS Pickup Method', 'MODULE_SHIPPING_UPS_PICKUP', 'CC', 'How do you give packages to UPS? CC - Customer Counter, RDP - Daily Pickup, OTP - One Time Pickup, LC - Letter Center, OCA - On Call Air', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('UPS Packaging?', 'MODULE_SHIPPING_UPS_PACKAGE', 'CP', 'CP - Your Packaging, ULE - UPS Letter, UT - UPS Tube, UBE - UPS Express Box', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Residential Delivery?', 'MODULE_SHIPPING_UPS_RES', 'RES', 'Quote for Residential (RES) or Commercial Delivery (COM)', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Handling Fee', 'MODULE_SHIPPING_UPS_HANDLING', '0', 'Handling fee for this shipping method.', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Tax Class', 'MODULE_SHIPPING_UPS_TAX_CLASS', '0', 'Use the following tax class on the shipping fee.', '6', '0', 'zen_get_tax_class_title', 'zen_cfg_pull_down_tax_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ('Tax Basis', 'MODULE_SHIPPING_UPS_TAX_BASIS', 'Shipping', 'On what basis is Shipping Tax calculated. Options are<br />Shipping - Based on customers Shipping Address<br />Billing Based on customers Billing address<br />Store - Based on Store address if Billing/Shipping Zone equals Store zone', '6', '0', 'zen_cfg_select_option(array(\'Shipping\', \'Billing\', \'Store\'), ', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, use_function, set_function, date_added) values ('Shipping Zone', 'MODULE_SHIPPING_UPS_ZONE', '0', 'If a zone is selected, only enable this shipping method for that zone.', '6', '0', 'zen_get_zone_class_title', 'zen_cfg_pull_down_zone_classes(', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, date_added) values ('Sort order of display.', 'MODULE_SHIPPING_UPS_SORT_ORDER', '0', 'Sort order of display. Lowest is displayed first.', '6', '0', now())");
    $db->Execute("insert into " . TABLE_CONFIGURATION . " (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) values ( 'Shipping Methods: <br />Nxt AM, Nxt AM Ltr, Nxt, Nxt Ltr, Nxt PR, Nxt Save, Nxt Save Ltr, 2nd AM, 2nd AM Ltr, 2nd, 2nd Ltr, 3 Day Select, Ground, Canada,World Xp, World Xp Ltr, World Xp Plus, World Xp Plus Ltr, World Expedite, WorldWideSaver', 'MODULE_SHIPPING_UPS_TYPES', '1DM, 1DML, 1DA, 1DAL, 1DAPI, 1DP, 1DPL, 2DM, 2DML, 2DA, 2DAL, 3DS, GND, STD, XPR, XPRL, XDM, XDML, XPD, WXS', 'Select the UPS services to be offered.', '6', '13', 'zen_cfg_select_multioption(array(\'1DM\',\'1DML\', \'1DA\', \'1DAL\', \'1DAPI\', \'1DP\', \'1DPL\', \'2DM\', \'2DML\', \'2DA\', \'2DAL\', \'3DS\',\'GND\', \'STD\', \'XPR\', \'XPRL\', \'XDM\', \'XDML\', \'XPD\', \'WXS\'), ', now() )");

  }
  
  /**
   * Remove this module
   *
   */
  function remove() {
    global $db;
    $db->Execute("delete from " . TABLE_CONFIGURATION . " where configuration_key like 'MODULE_SHIPPING_UPS_%' ");
  }
  
  /**
   * Build array of keys used for installing/managing this module
   *
   * @return array
   */
  function keys() {
    return array('MODULE_SHIPPING_UPS_STATUS', 'MODULE_SHIPPING_UPS_PICKUP', 'MODULE_SHIPPING_UPS_PACKAGE', 'MODULE_SHIPPING_UPS_RES', 'MODULE_SHIPPING_UPS_HANDLING', 'MODULE_SHIPPING_UPS_TAX_CLASS', 'MODULE_SHIPPING_UPS_TAX_BASIS', 'MODULE_SHIPPING_UPS_ZONE', 'MODULE_SHIPPING_UPS_SORT_ORDER', 'MODULE_SHIPPING_UPS_TYPES');
  }
  
}
?>