<?php
/**
 * default_filter.php  for index filters
 *
 * index filter for the default product type
 * show the products of a specified manufacturer
 *
 * @package productTypes
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @todo Need to add/fine-tune ability to override or insert entry-points on a per-product-type basis
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: default_filter.php 6912 2007-09-02 02:23:45Z drbyte $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}

	$noimage_where = '';
	$sql = "select customers_group_pricing, ALLOW_SPECIALTY_ITEMS, ALLOW_ADMIN_PRODUCTS, ACCOUNT_TYPE_ID, d.widext_eligible WITECH_DIAG_EXTENDER_ELIGIBLE,wiadvisor_eligible, d.COUNTRY_ID ". 
               " from " . TABLE_CUSTOMERS . ",witech_dp_user u, account_type a, dealer d".
		   " where customers_id = '" . (int)$_SESSION['customer_id'] . "' ".
		   " AND customers_witech_id = u.id AND u.ACCOUNT_TYPE_ID = a.id  AND u.DEALER_ID = d.id";

	$cdgroup = $db->Execute($sql); 
	$cgroup = $cdgroup->fields['customers_group_pricing'];
	$allowSpecialtyItems = $cdgroup->fields['ALLOW_SPECIALTY_ITEMS'];
      $allowAdminProducts = $cdgroup->fields['ALLOW_ADMIN_PRODUCTS'];
	$accountTypeId = $cdgroup->fields['ACCOUNT_TYPE_ID'];
	$isWiTECHDiagExtenderEligible = $cdgroup->fields['WITECH_DIAG_EXTENDER_ELIGIBLE'];
      $isWiadvisorEligible = $cdgroup->fields['wiadvisor_eligible'];
      $countryId = $cdgroup->fields['COUNTRY_ID'];

       /*PRINT "----isWiadvisorEligible ----". $isWiadvisorEligible ; */
	
	$product_filter = 1;
	$specialty_items_filter = 6;
       $wiadvisor_eligible=15;
	$dealer_and_corporate_filter = 8;
	$corparate_filter = 9;
	$witech_diag_extender_filter = 14;
	$lite_filter = 10;
        $corp_and_fiat_mexico = 11;
        $aft_and_fleet_filter = 12;
        $admin_products_filter = 17;

	$products_model_excludes_clause = " and p.products_model NOT IN ('PLACEHOLDER' ";     

	// Add default product type
    if ($product_filter <> '') {
        $noimage_where = " and p.products_type in ( " . $product_filter . " ";
    }
	
    if ($isWiTECHDiagExtenderEligible  == 1) { //Adding support for wiTECH Diagnostic Extender at account level.
        $noimage_where = $noimage_where ."," . $witech_diag_extender_filter;
    }

    if ($isWiadvisorEligible == 1) { //Adding support for isWiadvisorEligible  at dealer level.
        $noimage_where = $noimage_where ."," . $wiadvisor_eligible;
    }
    // Add filters for user preferences
    if ($allowSpecialtyItems) {
        $noimage_where = $noimage_where . "," . $specialty_items_filter;
    }
    if ($allowAdminProducts) {
        $noimage_where = $noimage_where . "," . $admin_products_filter;
    }
	
    // Add filters for witech account types	

        $usdealer = 1;
        $intdealer = 2;
        $aftermarket = 3;
        $administrator = 6;
        $account_type_corporate = 7;
        $helpdesk = 8;
        $customerspecialist = 9;
        $translator = 10;
        $superadministrator = 11;
        $canadiandealer = 12;
        $canadianaftermarket = 13;
        $mexicandealer = 14;
        $developer = 15;
        $chryslerfga = 16;
        $fleet = 17;
        $internationalfiat = 18;
        $fiatus = 19;
        $account_type_fiat_mexico = 20;
        $aftermarketlite = 21;
        $fleetlite = 22;
        $canadianaftermarketlite = 23;
        $canadianfleetlite = 24;



    if ($accountTypeId == $account_type_corporate) {
        $noimage_where = $noimage_where . "," . $corparate_filter;
    }
    

    if ($accountTypeId == $fleet || $accountTypeId == $aftermarket || $accountTypeId == $canadianaftermarket) {
        $noimage_where = $noimage_where . "," . $aft_and_fleet_filter;
    }
    
    if ($accountTypeId == $account_type_corporate || $accountTypeId == $account_type_fiat_mexico ) {
        $noimage_where = $noimage_where . "," . $corp_and_fiat_mexico;
    }
    
    // TSP-296 Restricting visibility of INT wiDEXT Kit and INT microPod 
    // TSP-421 Restricting visibility of INT wiTECH microPod System
    // (product models 800 and 467i and 880) to INT dealers only except Puerto-Rico and USVI
    $puerto_rico = 179;
    $us_virgin_islands = 241;
    if ($accountTypeId == $intdealer && $countryId != $puerto_rico && $countryId != $us_virgin_islands) {
        $products_model_excludes_clause = $products_model_excludes_clause . ",'465','467'";
    } else {
        $products_model_excludes_clause = $products_model_excludes_clause . ",'800','467i','880'";
    }
	 
    // TSP-302 Restricting visibility of 8-port POE Injector 
    // (product models 520) to NAFTA dealers only
    $usa = 1;
    $canada = 40;
    $mexico = 143;
    if (!($countryId == $usa || $countryId == $canada || $countryId == $mexico || $countryId == $puerto_rico || $countryId == $us_virgin_islands)) {
        $products_model_excludes_clause = $products_model_excludes_clause . ",'520'";
    }   
    	 
    // TSP-303,TSP-310 Restricting visibility of wiTECH microPod System 
    // (product models 600) to NAFTA dealers only
    if (!($countryId == $usa || $countryId == $canada || $countryId == $mexico || $countryId == $puerto_rico || $countryId == $us_virgin_islands)) {
        $products_model_excludes_clause = $products_model_excludes_clause . ",'600'";
    }   

	  // Add filters for group pricing types
    if ($cgroup == 12 || $cgroup == 14) {
        $noimage_where = $noimage_where . "," . $dealer_and_corporate_filter;
    }
    if ($cgroup == 15 || $cgroup == 16) {
        $noimage_where = $noimage_where . "," . $lite_filter;
        $products_model_excludes_clause = $products_model_excludes_clause . ",'403','400','133','134'";
    }

    // Add filters by country

    // TSP-148 Excluding wiTECH VCI System (product model 403) for NAFTA Dealers (not Aftermarket)
    if ($accountTypeId == $usdealer || $accountTypeId == $canadiandealer || $accountTypeId == $mexicandealer 
            || $accountTypeId == $intdealer && ($countryId == $puerto_rico || $countryId == $us_virgin_islands)) {
        $products_model_excludes_clause = $products_model_excludes_clause . ",'403'";
    }

    $noimage_where =   $noimage_where . ")";
    $products_model_excludes_clause = $products_model_excludes_clause . " ) ";

  if (isset($_GET['alpha_filter_id']) && (int)$_GET['alpha_filter_id'] > 0) {
    $alpha_sort = " and pd.products_name LIKE '" . chr((int)$_GET['alpha_filter_id']) . "%' ";
  } else {
    $alpha_sort = '';
  }
  if (!isset($select_column_list)) $select_column_list = "";
   // show the products of a specified manufacturer
  if (isset($_GET['manufacturers_id']) && $_GET['manufacturers_id'] != '' ) {
    if (isset($_GET['filter_id']) && zen_not_null($_GET['filter_id'])) {
// We are asked to show only a specific category
      $listing_sql = "select " . $select_column_list . " p.products_id, p.products_type, p.master_categories_id, p.manufacturers_id, p.products_price, p.products_tax_class_id, pd.products_description, if(s.status = 1, s.specials_new_products_price, NULL) AS specials_new_products_price, IF(s.status = 1, s.specials_new_products_price, p.products_price) as final_price, p.products_sort_order, p.product_is_call, p.product_is_always_free_shipping, p.products_qty_box_status
       from " . TABLE_PRODUCTS . " p left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id , " .
       TABLE_PRODUCTS_DESCRIPTION . " pd, " .
       TABLE_MANUFACTURERS . " m, " .
       TABLE_PRODUCTS_TO_CATEGORIES . " p2c
       where p.products_status = 1
         and p.manufacturers_id = m.manufacturers_id
         and m.manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "'
         and p.products_id = p2c.products_id
         and pd.products_id = p2c.products_id
         and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'
         and p2c.categories_id = '" . (int)$_GET['filter_id'] . "'" . $noimage_where . $products_model_excludes_clause . 
         $alpha_sort;
    } else {
// We show them all
      $listing_sql = "select " . $select_column_list . " p.products_id, p.products_type, p.master_categories_id, p.manufacturers_id, p.products_price, p.products_tax_class_id, pd.products_description, IF(s.status = 1, s.specials_new_products_price, NULL) as specials_new_products_price, IF(s.status = 1, s.specials_new_products_price, p.products_price) as final_price, p.products_sort_order, p.product_is_call, p.product_is_always_free_shipping, p.products_qty_box_status
      from " . TABLE_PRODUCTS . " p left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id, " .
      TABLE_PRODUCTS_DESCRIPTION . " pd, " .
      TABLE_MANUFACTURERS . " m
      where p.products_status = 1
        and pd.products_id = p.products_id
        and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'
        and p.manufacturers_id = m.manufacturers_id
        and m.manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "'" . $noimage_where . $products_model_excludes_clause . 
        $alpha_sort;
    }
  } else {
// show the products in a given category
    if (isset($_GET['filter_id']) && zen_not_null($_GET['filter_id'])) {
// We are asked to show only specific category
      $listing_sql = "select " . $select_column_list . " p.products_id, p.products_type, p.master_categories_id, p.manufacturers_id, p.products_price, p.products_tax_class_id, pd.products_description, IF(s.status = 1, s.specials_new_products_price, NULL) as specials_new_products_price, IF(s.status = 1, s.specials_new_products_price, p.products_price) as final_price, p.products_sort_order, p.product_is_call, p.product_is_always_free_shipping, p.products_qty_box_status
      from " . TABLE_PRODUCTS . " p left join " . TABLE_SPECIALS . " s on p.products_id = s.products_id, " .
      TABLE_PRODUCTS_DESCRIPTION . " pd, " .
      TABLE_MANUFACTURERS . " m, " .
      TABLE_PRODUCTS_TO_CATEGORIES . " p2c
      where p.products_status = 1
        and p.manufacturers_id = m.manufacturers_id
        and m.manufacturers_id = '" . (int)$_GET['filter_id'] . "'
        and p.products_id = p2c.products_id
        and pd.products_id = p2c.products_id
        and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'
        and p2c.categories_id = '" . (int)$current_category_id . "'" . $noimage_where . $products_model_excludes_clause . 
        $alpha_sort;
    } else {
// We show them all
      $listing_sql = "select " . $select_column_list . " p.products_id, p.products_type, p.master_categories_id, p.manufacturers_id, p.products_price, p.products_tax_class_id, pd.products_description, IF(s.status = 1, s.specials_new_products_price, NULL) as specials_new_products_price, IF(s.status =1, s.specials_new_products_price, p.products_price) as final_price, p.products_sort_order, p.product_is_call, p.product_is_always_free_shipping, p.products_qty_box_status
       from " . TABLE_PRODUCTS_DESCRIPTION . " pd, " .
       TABLE_PRODUCTS . " p left join " . TABLE_MANUFACTURERS . " m on p.manufacturers_id = m.manufacturers_id, " .
       TABLE_PRODUCTS_TO_CATEGORIES . " p2c left join " . TABLE_SPECIALS . " s on p2c.products_id = s.products_id
       where p.products_status = 1
         and p.products_id = p2c.products_id
         and pd.products_id = p2c.products_id
         and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'
         and p2c.categories_id = '" . (int)$current_category_id . "'" . $noimage_where . $products_model_excludes_clause .
         $alpha_sort;
    }
  }

// set the default sort order setting from the Admin when not defined by customer
  if (!isset($_GET['sort']) and PRODUCT_LISTING_DEFAULT_SORT_ORDER != '') {
    $_GET['sort'] = PRODUCT_LISTING_DEFAULT_SORT_ORDER;
  }

  if (isset($column_list)) {
    if ((!isset($_GET['sort'])) || (isset($_GET['sort']) && !ereg('[1-8][ad]', $_GET['sort'])) || (substr($_GET['sort'], 0, 1) > sizeof($column_list)) ) {
      for ($i=0, $n=sizeof($column_list); $i<$n; $i++) {
        if (isset($column_list[$i]) && $column_list[$i] == 'PRODUCT_LIST_NAME') {
          $_GET['sort'] = $i+1 . 'a';
          $listing_sql .= " order by p.products_sort_order, pd.products_name";
          break;
        } else {
// sort by products_sort_order when PRODUCT_LISTING_DEFAULT_SORT_ORDER is left blank
// for reverse, descending order use:
//       $listing_sql .= " order by p.products_sort_order desc, pd.products_name";
          $listing_sql .= " order by p.products_sort_order, pd.products_name";
          break;
        }
      }
// if set to nothing use products_sort_order and PRODUCTS_LIST_NAME is off
      if (PRODUCT_LISTING_DEFAULT_SORT_ORDER == '') {
        $_GET['sort'] = '20a';
      }
    } else {
      $sort_col = substr($_GET['sort'], 0 , 1);
      $sort_order = substr($_GET['sort'], 1);
      $listing_sql .= ' order by ';
      switch ($column_list[$sort_col-1]) {
        case 'PRODUCT_LIST_MODEL':
          $listing_sql .= "p.products_model " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
        case 'PRODUCT_LIST_NAME':
          $listing_sql .= "pd.products_name " . ($sort_order == 'd' ? 'desc' : '');
          break;
        case 'PRODUCT_LIST_MANUFACTURER':
          $listing_sql .= "m.manufacturers_name " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
        case 'PRODUCT_LIST_QUANTITY':
          $listing_sql .= "p.products_quantity " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
        case 'PRODUCT_LIST_IMAGE':
          $listing_sql .= "pd.products_name";
          break;
        case 'PRODUCT_LIST_WEIGHT':
          $listing_sql .= "p.products_weight " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
        case 'PRODUCT_LIST_PRICE':
//          $listing_sql .= "final_price " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          $listing_sql .= "p.products_price_sorter " . ($sort_order == 'd' ? 'desc' : '') . ", pd.products_name";
          break;
      }
    }
  }
// optional Product List Filter
  if (PRODUCT_LIST_FILTER > 0) {
    if (isset($_GET['manufacturers_id']) && $_GET['manufacturers_id'] != '') {
      $filterlist_sql = "select distinct c.categories_id as id, cd.categories_name as name
      from " . TABLE_PRODUCTS . " p, " .
      TABLE_PRODUCTS_TO_CATEGORIES . " p2c, " .
      TABLE_CATEGORIES . " c, " .
      TABLE_CATEGORIES_DESCRIPTION . " cd
      where p.products_status = 1
        and p.products_id = p2c.products_id
        and p2c.categories_id = c.categories_id
        and p2c.categories_id = cd.categories_id
        and cd.language_id = '" . (int)$_SESSION['languages_id'] . "'
        and p.manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "' $noimage_where 
      order by cd.categories_name";
    } else {
      $filterlist_sql= "select distinct m.manufacturers_id as id, m.manufacturers_name as name
      from " . TABLE_PRODUCTS . " p, " .
      TABLE_PRODUCTS_TO_CATEGORIES . " p2c, " .
      TABLE_MANUFACTURERS . " m
      where p.products_status = 1
        and p.manufacturers_id = m.manufacturers_id
        and p.products_id = p2c.products_id
        and p2c.categories_id = '" . (int)$current_category_id . "' $noimage_where 
      order by m.manufacturers_name";
    }
    $do_filter_list = false;
    $filterlist = $db->Execute($filterlist_sql);
    if ($filterlist->RecordCount() > 1) {
        $do_filter_list = true;
      if (isset($_GET['manufacturers_id'])) {
        $getoption_set =  true;
        $get_option_variable = 'manufacturers_id';
        $options = array(array('id' => '', 'text' => TEXT_ALL_CATEGORIES));
      } else {
        $options = array(array('id' => '', 'text' => TEXT_ALL_MANUFACTURERS));
      }
      while (!$filterlist->EOF) {
        $options[] = array('id' => $filterlist->fields['id'], 'text' => $filterlist->fields['name']);
        $filterlist->MoveNext();
      }
    }
  }

// Get the right image for the top-right
  $image = DIR_WS_TEMPLATE_IMAGES . 'table_background_list.gif';
  if (isset($_GET['manufacturers_id'])) {
    $sql = "select manufacturers_image
              from   " . TABLE_MANUFACTURERS . "
              where      manufacturers_id = '" . (int)$_GET['manufacturers_id'] . "'";

    $image_name = $db->Execute($sql);
    $image = $image_name->fields['manufacturers_image'];

  } elseif ($current_category_id) {

    $sql = "select categories_image from " . TABLE_CATEGORIES . "
            where  categories_id = '" . (int)$current_category_id . "'";

    $image_name = $db->Execute($sql);
    $image = $image_name->fields['categories_image'];
  }
?>
