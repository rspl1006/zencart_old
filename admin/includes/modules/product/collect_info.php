<?php
/**
 * @package admin
 * @copyright Copyright 2003-2007 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: collect_info.php 6131 2007-04-08 06:56:51Z drbyte $
 */
if (!defined('IS_ADMIN_FLAG')) {
  die('Illegal Access');
}
    $parameters = array('products_name' => '',
                       'products_description' => '',
                       'products_url' => '',
                       'products_id' => '',
                       'products_quantity' => '',
                       'products_model' => '',
                       'products_image' => '',
                       'products_type' => '',
                       'products_declared_value' => '',
                       'products_price' => '',
                       'products_group_a_price' => '',
                       'products_group_b_price' => '',
                       'products_group_c_price' => '',
                       'products_group_d_price' => '',
                       'products_group_e_price' => '',
                       'products_group_f_price' => '',
                       'products_group_g_price' => '',
                       'products_group_h_price' => '',
                       'products_group_i_price' => '',
                       'products_group_j_price' => '',
                       'products_group_k_price' => '',
                       'products_group_l_price' => '',
                       'products_group_m_price' => '',
                       'products_group_n_price' => '',
                       'products_group_o_price' => '',
                       'products_group_p_price' => '',
                       'products_group_q_price' => '',
                       'products_group_r_price' => '',
                       'products_group_s_price' => '',
                       'products_group_t_price' => '',
                       'products_virtual' => DEFAULT_PRODUCT_PRODUCTS_VIRTUAL,
                       'products_weight' => '',
                       'products_date_added' => '',
                       'products_last_modified' => '',
                       'products_date_available' => '',
                       'products_status' => '',
                       'products_tax_class_id' => DEFAULT_PRODUCT_TAX_CLASS_ID,
                       'manufacturers_id' => '',
                       'products_quantity_order_min' => '',
                       'products_quantity_order_units' => '',
                       'products_priced_by_attribute' => '',
                       'product_is_free' => '',
                       'product_is_call' => '',
                       'products_quantity_mixed' => '',
                       'product_is_always_free_shipping' => DEFAULT_PRODUCT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING,
                       'products_qty_box_status' => PRODUCTS_QTY_BOX_STATUS,
                       'products_quantity_order_max' => '0',
                       'products_sort_order' => '0',
                       'products_discount_type' => '0',
                       'products_discount_type_from' => '0',
                       'products_price_sorter' => '0',
                       'master_categories_id' => '',
					   'package_as_accessory' => '0',
					   'package_one_length' => '0',
					   'package_one_width' => '0',
					   'package_one_height' => '0',
					   'package_two_length' => '0',
					   'package_two_width' => '0',
					   'package_two_height' => '0',
					   'require_witech_system' => '0'
                       );

    $pInfo = new objectInfo($parameters);

    if (isset($_GET['pID']) && empty($_POST)) {
      $product = $db->Execute("select pd.products_name, pd.products_description, pd.products_url,
                                      p.products_id, p.products_quantity, p.products_model,
                                      p.products_image, p.products_type, p.products_declared_value,p.products_price, p.products_virtual, p.products_weight,
                                      p.products_group_a_price,
                                      p.products_group_b_price, 
                                      p.products_group_c_price,
                                      p.products_group_d_price,
                                      p.products_group_e_price,
                                      p.products_group_f_price,
                                      p.products_group_g_price,
                                      p.products_group_h_price,
                                      p.products_group_i_price,
                                      p.products_group_j_price,
                                      p.products_group_k_price,
                                      p.products_group_l_price,
                                      p.products_group_m_price,
                                      p.products_group_n_price,
                                      p.products_group_o_price,
                                      p.products_group_p_price,
                                      p.products_group_q_price,
                                      p.products_group_r_price,
                                      p.products_group_s_price,
                                      p.products_group_t_price,
                                      p.products_date_added, p.products_last_modified,
                                      date_format(p.products_date_available, '%Y-%m-%d') as
                                      products_date_available, p.products_status, p.products_tax_class_id,
                                      p.manufacturers_id,
                                      p.products_quantity_order_min, p.products_quantity_order_units, p.products_priced_by_attribute,
                                      p.product_is_free, p.product_is_call, p.products_quantity_mixed,
                                      p.product_is_always_free_shipping, p.products_qty_box_status, p.products_quantity_order_max,
                                      p.products_sort_order,
                                      p.products_discount_type, p.products_discount_type_from,
                                      p.products_price_sorter, p.master_categories_id, p.package_as_accessory,
									  p.package_one_length, p.package_one_width, p.package_one_height,
									  p.package_two_length, p.package_two_width, p.package_two_height,
									  p.require_witech_system
									  
                              from " . TABLE_PRODUCTS . " p, " . TABLE_PRODUCTS_DESCRIPTION . " pd
                              where p.products_id = '" . (int)$_GET['pID'] . "'
                              and p.products_id = pd.products_id
                              and pd.language_id = '" . (int)$_SESSION['languages_id'] . "'");

      $pInfo->objectInfo($product->fields);
    } elseif (zen_not_null($_POST)) {
      $pInfo->objectInfo($_POST);
      $products_name = $_POST['products_name'];
      $products_description = $_POST['products_description'];
      $products_url = $_POST['products_url'];
    }
    $group_pricing = $db->Execute("select group_name from " . TABLE_GROUP_PRICING . " group_pricing");
    while (!$group_pricing->EOF) {
      $group_pricing_array[] = $group_pricing->fields['group_name'];
      $group_pricing->MoveNext();
    }
    $manufacturers_array = array(array('id' => '', 'text' => TEXT_NONE));
    $manufacturers = $db->Execute("select manufacturers_id, manufacturers_name
                                   from " . TABLE_MANUFACTURERS . " order by manufacturers_name");
    while (!$manufacturers->EOF) {
      $manufacturers_array[] = array('id' => $manufacturers->fields['manufacturers_id'],
                                     'text' => $manufacturers->fields['manufacturers_name']);
      $manufacturers->MoveNext();
    }

    $tax_class_array = array(array('id' => '0', 'text' => TEXT_NONE));
    $tax_class = $db->Execute("select tax_class_id, tax_class_title
                                     from " . TABLE_TAX_CLASS . " order by tax_class_title");
    while (!$tax_class->EOF) {
      $tax_class_array[] = array('id' => $tax_class->fields['tax_class_id'],
                                 'text' => $tax_class->fields['tax_class_title']);
      $tax_class->MoveNext();
    }

    $languages = zen_get_languages();

    if (!isset($pInfo->products_status)) $pInfo->products_status = '1';
    switch ($pInfo->products_status) {
      case '0': $in_status = false; $out_status = true; break;
      case '1':
      default: $in_status = true; $out_status = false;
        break;
    }
// set to out of stock if categories_status is off and new product or existing products_status is off
    if (zen_get_categories_status($current_category_id) == '0' and $pInfo->products_status != '1') {
      $pInfo->products_status = 0;
      $in_status = false;
      $out_status = true;
    }

// Virtual Products
    if (!isset($pInfo->products_virtual)) $pInfo->products_virtual = PRODUCTS_VIRTUAL_DEFAULT;
    switch ($pInfo->products_virtual) {
      case '0': $is_virtual = false; $not_virtual = true; break;
      case '1': $is_virtual = true; $not_virtual = false; break;
      default: $is_virtual = false; $not_virtual = true;
    }
// Always Free Shipping
    if (!isset($pInfo->product_is_always_free_shipping)) $pInfo->product_is_always_free_shipping = DEFAULT_PRODUCT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING;
    switch ($pInfo->product_is_always_free_shipping) {
      case '0': $is_product_is_always_free_shipping = false; $not_product_is_always_free_shipping = true; $special_product_is_always_free_shipping = false; break;
      case '1': $is_product_is_always_free_shipping = true; $not_product_is_always_free_shipping = false; $special_product_is_always_free_shipping = false; break;
      case '2': $is_product_is_always_free_shipping = false; $not_product_is_always_free_shipping = false; $special_product_is_always_free_shipping = true; break;
      default: $is_product_is_always_free_shipping = false; $not_product_is_always_free_shipping = true; $special_product_is_always_free_shipping = false;
    }
// products_qty_box_status shows
    if (!isset($pInfo->products_qty_box_status)) $pInfo->products_qty_box_status = PRODUCTS_QTY_BOX_STATUS;
    switch ($pInfo->products_qty_box_status) {
      case '0': $is_products_qty_box_status = false; $not_products_qty_box_status = true; break;
      case '1': $is_products_qty_box_status = true; $not_products_qty_box_status = false; break;
      default: $is_products_qty_box_status = true; $not_products_qty_box_status = false;
    }
// Product is Priced by Attributes
    if (!isset($pInfo->products_priced_by_attribute)) $pInfo->products_priced_by_attribute = '0';
    switch ($pInfo->products_priced_by_attribute) {
      case '0': $is_products_priced_by_attribute = false; $not_products_priced_by_attribute = true; break;
      case '1': $is_products_priced_by_attribute = true; $not_products_priced_by_attribute = false; break;
      default: $is_products_priced_by_attribute = false; $not_products_priced_by_attribute = true;
    }
// Product is Free
    if (!isset($pInfo->product_is_free)) $pInfo->product_is_free = '0';
    switch ($pInfo->product_is_free) {
      case '0': $in_product_is_free = false; $out_product_is_free = true; break;
      case '1': $in_product_is_free = true; $out_product_is_free = false; break;
      default: $in_product_is_free = false; $out_product_is_free = true;
    }
// Product is Call for price
    if (!isset($pInfo->product_is_call)) $pInfo->product_is_call = '0';
    switch ($pInfo->product_is_call) {
      case '0': $in_product_is_call = false; $out_product_is_call = true; break;
      case '1': $in_product_is_call = true; $out_product_is_call = false; break;
      default: $in_product_is_call = false; $out_product_is_call = true;
    }
// Products can be purchased with mixed attributes retail
    if (!isset($pInfo->products_quantity_mixed)) $pInfo->products_quantity_mixed = '0';
    switch ($pInfo->products_quantity_mixed) {
      case '0': $in_products_quantity_mixed = false; $out_products_quantity_mixed = true; break;
      case '1': $in_products_quantity_mixed = true; $out_products_quantity_mixed = false; break;
      default: $in_products_quantity_mixed = true; $out_products_quantity_mixed = false;
    }

// set image overwrite
  $on_overwrite = true;
  $off_overwrite = false;
// set image delete
  $on_image_delete = false;
  $off_image_delete = true;
?>
<link rel="stylesheet" type="text/css" href="includes/javascript/spiffyCal/spiffyCal_v2_1.css">
<script language="JavaScript" src="includes/javascript/spiffyCal/spiffyCal_v2_1.js"></script>
<script language="javascript"><!--
  var dateAvailable = new ctlSpiffyCalendarBox("dateAvailable", "new_product", "products_date_available","btnDate1","<?php echo $pInfo->products_date_available; ?>",scBTNMODE_CUSTOMBLUE);
//--></script>
<script language="javascript"><!--
var tax_rates = new Array();
<?php
    for ($i=0, $n=sizeof($tax_class_array); $i<$n; $i++) {
      if ($tax_class_array[$i]['id'] > 0) {
        echo 'tax_rates["' . $tax_class_array[$i]['id'] . '"] = ' . zen_get_tax_rate_value($tax_class_array[$i]['id']) . ';' . "\n";
      }
    }
?>

function doRound(x, places) {
  return Math.round(x * Math.pow(10, places)) / Math.pow(10, places);
}

function getTaxRate() {
  var selected_value = document.forms["new_product"].products_tax_class_id.selectedIndex;
  var parameterVal = document.forms["new_product"].products_tax_class_id[selected_value].value;

  if ( (parameterVal > 0) && (tax_rates[parameterVal] > 0) ) {
    return tax_rates[parameterVal];
  } else {
    return 0;
  }
}

function updateGross() {
  var taxRate = getTaxRate();

  updateGrossPrices("products_price", "products_price_gross", taxRate);

  <?php
     foreach ($group_pricing_array as $group) {
       if ($group == GROUP_PRICE_PER_ITEM1) {
               ?>updateGrossPrices("products_group_a_price", "products_group_a_price_gross", taxRate);<?php
       }
       if ($group == GROUP_PRICE_PER_ITEM2) {
               ?>updateGrossPrices("products_group_b_price", "products_group_b_price_gross", taxRate);<?php
       }
       if ($group == GROUP_PRICE_PER_ITEM3) {
                ?>updateGrossPrices("products_group_c_price", "products_group_c_price_gross", taxRate);<?php
       }
       if ($group == GROUP_PRICE_PER_ITEM4) {
                ?>updateGrossPrices("products_group_d_price", "products_group_d_price_gross", taxRate);<?php
       }
       if ($group == GROUP_PRICE_PER_ITEM5) {
                ?>updateGrossPrices("products_group_e_price", "products_group_e_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM6) {
                ?>updateGrossPrices("products_group_f_price", "products_group_f_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM7) {
                ?>updateGrossPrices("products_group_g_price", "products_group_g_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM8) {
                ?>updateGrossPrices("products_group_h_price", "products_group_h_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM9) {
                ?>updateGrossPrices("products_group_i_price", "products_group_i_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM10) {
                ?>updateGrossPrices("products_group_j_price", "products_group_j_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM11) {
                ?>updateGrossPrices("products_group_k_price", "products_group_k_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM12) {
                ?>updateGrossPrices("products_group_l_price", "products_group_l_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM13) {
                ?>updateGrossPrices("products_group_m_price", "products_group_m_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM14) {
                ?>updateGrossPrices("products_group_n_price", "products_group_n_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM15) {
                ?>updateGrossPrices("products_group_o_price", "products_group_o_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM16) {
                ?>updateGrossPrices("products_group_p_price", "products_group_p_price_gross", taxRate);<?php
       }

       if ($group == GROUP_PRICE_PER_ITEM17) {
                ?>updateGrossPrices("products_group_q_price", "products_group_q_price_gross", taxRate);<?php
       }
       if ($group == GROUP_PRICE_PER_ITEM18) {
                ?>updateGrossPrices("products_group_r_price", "products_group_r_price_gross", taxRate);<?php
       }
       if ($group == GROUP_PRICE_PER_ITEM19) {
                ?>updateGrossPrices("products_group_s_price", "products_group_s_price_gross", taxRate);<?php
       }
       if ($group == GROUP_PRICE_PER_ITEM20) {
                ?>updateGrossPrices("products_group_t_price", "products_group_t_price_gross", taxRate);<?php
       }
     }
  ?>
}

function updateNet() {
  var taxRate = getTaxRate();

  updateNetPrices("products_price_gross", "products_price", taxRate);
  
    <?php
      foreach ($group_pricing_array as $group) {
        if ($group == GROUP_PRICE_PER_ITEM1) {
               ?>updateNetPrices("products_group_a_price_gross", "products_group_a_price", taxRate);<?php
        }
        if ($group == GROUP_PRICE_PER_ITEM2) {
               ?>updateNetPrices("products_group_b_price_gross", "products_group_b_price", taxRate);<?php
        }
        if ($group == GROUP_PRICE_PER_ITEM3) {
               ?>updateNetPrices("products_group_c_price_gross", "products_group_c_price", taxRate);<?php
        }
        if ($group == GROUP_PRICE_PER_ITEM4) {
               ?>updateNetPrices("products_group_d_price_gross", "products_group_d_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM5) {
               ?>updateNetPrices("products_group_e_price_gross", "products_group_e_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM6) {
               ?>updateNetPrices("products_group_f_price_gross", "products_group_f_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM7) {
               ?>updateNetPrices("products_group_g_price_gross", "products_group_g_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM8) {
               ?>updateNetPrices("products_group_h_price_gross", "products_group_h_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM9) {
               ?>updateNetPrices("products_group_i_price_gross", "products_group_i_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM10) {
               ?>updateNetPrices("products_group_j_price_gross", "products_group_j_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM11) {
               ?>updateNetPrices("products_group_k_price_gross", "products_group_k_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM12) {
               ?>updateNetPrices("products_group_l_price_gross", "products_group_l_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM13) {
               ?>updateNetPrices("products_group_m_price_gross", "products_group_m_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM14) {
               ?>updateNetPrices("products_group_n_price_gross", "products_group_n_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM15) {
               ?>updateNetPrices("products_group_o_price_gross", "products_group_o_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM16) {
               ?>updateNetPrices("products_group_p_price_gross", "products_group_p_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM17) {
               ?>updateNetPrices("products_group_q_price_gross", "products_group_q_price", taxRate);<?php
        }
        if ($group == GROUP_PRICE_PER_ITEM18) {
               ?>updateNetPrices("products_group_r_price_gross", "products_group_r_price", taxRate);<?php
        }

        if ($group == GROUP_PRICE_PER_ITEM19) {
               ?>updateNetPrices("products_group_s_price_gross", "products_group_s_price", taxRate);<?php
        }       
       
        if ($group == GROUP_PRICE_PER_ITEM20) {
               ?>updateNetPrices("products_group_t_price_gross", "products_group_t_price", taxRate);<?php
        }

      }   
  ?>
}

function updateGrossPrices(field, field2, taxRate) {
	
   var grossValue = eval('document.forms["new_product"].' + field + '.value;');
   if (taxRate > 0) {
       grossValue = grossValue * ((taxRate / 100) + 1);
   }

   eval('document.forms["new_product"].' + field2 + '.value = doRound(grossValue, 4);');
}

function updateNetPrices(field, field2, taxRate) {

   var netValue = eval('document.forms["new_product"].' + field + '.value;');
    if (taxRate > 0) {
       netValue = netValue / ((taxRate / 100) + 1);
    }

    eval('document.forms["new_product"].' + field2 + '.value = doRound(netValue, 4);');
}

//--></script>
    <?php
//  echo $type_admin_handler;
echo zen_draw_form('new_product', $type_admin_handler , 'cPath=' . $cPath . (isset($_GET['product_type']) ? '&product_type=' . $_GET['product_type'] : '') . (isset($_GET['pID']) ? '&pID=' . $_GET['pID'] : '') . '&action=new_product_preview' . (isset($_GET['page']) ? '&page=' . $_GET['page'] : ''), 'post', 'enctype="multipart/form-data"'); ?>

    <table border="0" width="100%" cellspacing="0" cellpadding="2">
      <tr>
        <td><table border="0" width="100%" cellspacing="0" cellpadding="0">
          <tr>
            <td class="pageHeading"><?php echo sprintf(TEXT_NEW_PRODUCT, zen_output_generated_category_path($current_category_id)); ?></td>
            <td class="pageHeading" align="right"><?php echo zen_draw_separator('pixel_trans.gif', HEADING_IMAGE_WIDTH, HEADING_IMAGE_HEIGHT); ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
      </tr>
      <tr>
        <td class="main" align="right"><?php echo zen_draw_hidden_field('products_date_added', (zen_not_null($pInfo->products_date_added) ? $pInfo->products_date_added : date('Y-m-d'))) . zen_image_submit('button_preview.gif', IMAGE_PREVIEW) . '&nbsp;&nbsp;<a href="' . zen_href_link(FILENAME_CATEGORIES, 'cPath=' . $cPath . (isset($_GET['pID']) ? '&pID=' . $_GET['pID'] : '') . (isset($_GET['page']) ? '&page=' . $_GET['page'] : '')) . '">' . zen_image_button('button_cancel.gif', IMAGE_CANCEL) . '</a>'; ?></td>
      </tr>
      <tr>
        <td><table border="0" cellspacing="0" cellpadding="2">
<?php
// show when product is linked
if (zen_get_product_is_linked($_GET['pID']) == 'true' and $_GET['pID'] > 0) {
?>
          <tr>
            <td class="main"><?php echo TEXT_MASTER_CATEGORIES_ID; ?></td>
            <td class="main">
              <?php
                // echo zen_draw_pull_down_menu('products_tax_class_id', $tax_class_array, $pInfo->products_tax_class_id);
                echo zen_image(DIR_WS_IMAGES . 'icon_yellow_on.gif', IMAGE_ICON_LINKED) . '&nbsp;&nbsp;';
                echo zen_draw_pull_down_menu('master_category', zen_get_master_categories_pulldown($_GET['pID']), $pInfo->master_categories_id); ?>
            </td>
          </tr>
<?php } else { ?>
          <tr>
            <td class="main"><?php echo TEXT_MASTER_CATEGORIES_ID; ?></td>
            <td class="main"><?php echo TEXT_INFO_ID . ($_GET['pID'] > 0 ? $pInfo->master_categories_id  . ' ' . zen_get_category_name($pInfo->master_categories_id, $_SESSION['languages_id']) : $current_category_id  . ' ' . zen_get_category_name($current_category_id, $_SESSION['languages_id'])); ?>
          </tr>
<?php } ?>
          <tr>
            <td colspan="2" class="main"><?php echo TEXT_INFO_MASTER_CATEGORIES_ID; ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '100%', '2'); ?></td>
          </tr>
<?php
// hidden fields not changeable on products page
echo zen_draw_hidden_field('master_categories_id', $pInfo->master_categories_id);
echo zen_draw_hidden_field('products_discount_type', $pInfo->products_discount_type);
echo zen_draw_hidden_field('products_discount_type_from', $pInfo->products_discount_type_from);
echo zen_draw_hidden_field('products_price_sorter', $pInfo->products_price_sorter);
?>
          <tr>
            <td colspan="2" class="main" align="center"><?php echo (zen_get_categories_status($current_category_id) == '0' ? TEXT_CATEGORIES_STATUS_INFO_OFF : '') . ($out_status == true ? ' ' . TEXT_PRODUCTS_STATUS_INFO_OFF : ''); ?></td>
          <tr>
          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_MODEL; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_model', $pInfo->products_model, zen_set_field_length(TABLE_PRODUCTS, 'products_model')); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo 'Products Type:'; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_type', $pInfo->products_type, zen_set_field_length(TABLE_PRODUCTS, 'products_type')); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_STATUS; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('products_status', '1', $in_status) . '&nbsp;' . TEXT_PRODUCT_AVAILABLE . '&nbsp;' . zen_draw_radio_field('products_status', '0', $out_status) . '&nbsp;' . TEXT_PRODUCT_NOT_AVAILABLE; ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_DATE_AVAILABLE; ?><br /><small>(YYYY-MM-DD)</small></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;'; ?><script language="javascript">dateAvailable.writeControl(); dateAvailable.dateFormat="yyyy-MM-dd";</script></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_MANUFACTURER; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_pull_down_menu('manufacturers_id', $manufacturers_array, $pInfo->manufacturers_id); ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
<?php
    for ($i=0, $n=sizeof($languages); $i<$n; $i++) {
?>
          <tr>
            <td class="main"><?php if ($i == 0) echo TEXT_PRODUCTS_NAME; ?></td>
            <td class="main"><?php echo zen_image(DIR_WS_CATALOG_LANGUAGES . $languages[$i]['directory'] . '/images/' . $languages[$i]['image'], $languages[$i]['name']) . '&nbsp;' . zen_draw_input_field('products_name[' . $languages[$i]['id'] . ']', (isset($products_name[$languages[$i]['id']]) ? stripslashes($products_name[$languages[$i]['id']]) : zen_get_products_name($pInfo->products_id, $languages[$i]['id'])), zen_set_field_length(TABLE_PRODUCTS_DESCRIPTION, 'products_name')); ?></td>
          </tr>
<?php
    }
?>

          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>

          <tr>
            <td class="main"><?php echo TEXT_PRODUCT_IS_FREE; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('product_is_free', '1', ($in_product_is_free==1)) . '&nbsp;' . TEXT_YES . '&nbsp;&nbsp;' . zen_draw_radio_field('product_is_free', '0', ($in_product_is_free==0)) . '&nbsp;' . TEXT_NO . ' ' . ($pInfo->product_is_free == 1 ? '<span class="errorText">' . TEXT_PRODUCTS_IS_FREE_EDIT . '</span>' : ''); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo TEXT_PRODUCT_IS_CALL; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('product_is_call', '1', ($in_product_is_call==1)) . '&nbsp;' . TEXT_YES . '&nbsp;&nbsp;' . zen_draw_radio_field('product_is_call', '0', ($in_product_is_call==0)) . '&nbsp;' . TEXT_NO . ' ' . ($pInfo->product_is_call == 1 ? '<span class="errorText">' . TEXT_PRODUCTS_IS_CALL_EDIT . '</span>' : ''); ?></td>
          </tr>

          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('products_priced_by_attribute', '1', $is_products_priced_by_attribute) . '&nbsp;' . TEXT_PRODUCT_IS_PRICED_BY_ATTRIBUTE . '&nbsp;&nbsp;' . zen_draw_radio_field('products_priced_by_attribute', '0', $not_products_priced_by_attribute) . '&nbsp;' . TEXT_PRODUCT_NOT_PRICED_BY_ATTRIBUTE . ' ' . ($pInfo->products_priced_by_attribute == 1 ? '<span class="errorText">' . TEXT_PRODUCTS_PRICED_BY_ATTRIBUTES_EDIT . '</span>' : ''); ?></td>
          </tr>

          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr bgcolor="#ebebff">
            <td class="main"><?php echo 'Item requires wiTECH system:'; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('require_witech_system', '1', ($pInfo->require_witech_system == 1)) . '&nbsp;' . 'Yes, an existing wiTECH system is required.' . '&nbsp;&nbsp;' . zen_draw_radio_field('require_witech_system', '0',  ($pInfo->require_witech_system == 0)) . '&nbsp;' . 'No.' . ' ' . ($pInfo->require_witech_system == 1 ? '<span class="errorText"></span>' : ''); ?></td>
          </tr>
          <tr bgcolor="#ebebff">
            <td class="main"><?php echo 'Package as Accessory:'; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('package_as_accessory', '1', ($pInfo->package_as_accessory == 1)) . '&nbsp;' . 'Yes, package in the same box as other accessories.' . '&nbsp;&nbsp;' . zen_draw_radio_field('package_as_accessory', '0',  ($pInfo->package_as_accessory == 0)) . '&nbsp;' . 'No, package in a unique box.' . ' ' . ($pInfo->package_as_accessory == 1 ? '<span class="errorText"></span>' : ''); ?></td>
          </tr>
	      <tr bgcolor="#ebebff">
            <td class="main"><?php echo "Package One - Length:" ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('package_one_length', $pInfo->package_one_length); ?></td>
          </tr>
	      <tr bgcolor="#ebebff">
            <td class="main"><?php echo "Package One - Width:" ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('package_one_width', $pInfo->package_one_width); ?></td>
          </tr>
	      <tr bgcolor="#ebebff">
            <td class="main"><?php echo "Package One - Height:" ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('package_one_height', $pInfo->package_one_height); ?></td>
          </tr>
	      <tr bgcolor="#ebebff">
            <td class="main"><?php echo "Package Two - Length:" ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('package_two_length', $pInfo->package_two_length); ?></td>
          </tr>
	      <tr bgcolor="#ebebff">
            <td class="main"><?php echo "Package Two - Width:" ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('package_two_width', $pInfo->package_two_width); ?></td>
          </tr>
	      <tr bgcolor="#ebebff">
            <td class="main"><?php echo "Package Two - Height:" ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('package_two_height', $pInfo->package_two_height); ?></td>
          </tr>
          <tr bgcolor="#ebebff">
            <td class="main"><?php echo TEXT_PRODUCTS_WEIGHT; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_weight', $pInfo->products_weight); ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr bgcolor="#ebebff">
            <td class="main"><?php echo TEXT_PRODUCTS_TAX_CLASS; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_pull_down_menu('products_tax_class_id', $tax_class_array, $pInfo->products_tax_class_id, 'onchange="updateGross()"'); ?></td>
          </tr>
	      <tr bgcolor="#ebebff">
            <td class="main"><?php echo "Declared Value:" ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_declared_value', $pInfo->products_declared_value); ?></td>
          </tr>
          <tr bgcolor="#ebebff">
            <td class="main"><?php echo TEXT_PRODUCTS_PRICE_NET; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_price', $pInfo->products_price, 'onKeyUp="updateGross()"'); ?></td>
          </tr>
          <tr bgcolor="#ebebff">
            <td class="main"><?php echo TEXT_PRODUCTS_PRICE_GROSS; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_price_gross', $pInfo->products_price, 'OnKeyUp="updateNet()"'); ?></td>
          </tr>
		  
   		    <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
         <?php
           foreach ($group_pricing_array as $group) {
              if ($group == GROUP_PRICE_PER_ITEM1) {
               ?>
                 <tr bgcolor="#ebebff">
                   <td class="main"><?php echo TEXT_PRODUCTS_GROUP_A_PRICE_NET; ?></td>
                   <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_a_price', $pInfo->products_group_a_price, 'onKeyUp="updateGross()"'); ?></td>
                 </tr>
                 <tr bgcolor="#ebebff">
                   <td class="main"><?php echo TEXT_PRODUCTS_GROUP_A_PRICE_GROSS; ?></td>
                   <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_a_price_gross', $pInfo->products_group_a_price, 'OnKeyUp="updateNet()"'); ?></td>
                 </tr>
               <?php
              }
             if ($group == GROUP_PRICE_PER_ITEM2) {
                ?>
                 <tr bgcolor="#ebebff">
                   <td class="main"><?php echo TEXT_PRODUCTS_GROUP_B_PRICE_NET; ?></td>
                   <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_b_price', $pInfo->products_group_b_price, 'onKeyUp="updateGross()"'); ?></td>
                 </tr>
                  <tr bgcolor="#ebebff">
                   <td class="main"><?php echo TEXT_PRODUCTS_GROUP_B_PRICE_GROSS; ?></td>
                   <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_b_price_gross', $pInfo->products_group_b_price, 'OnKeyUp="updateNet()"'); ?></td>
                 </tr>
               <?php
             }
             if ($group == GROUP_PRICE_PER_ITEM3) {
                ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_C_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_c_price', $pInfo->products_group_c_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_C_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_c_price_gross', $pInfo->products_group_c_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
                <?php
            }
            if ($group == GROUP_PRICE_PER_ITEM4) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_D_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_d_price', $pInfo->products_group_d_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_D_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_d_price_gross', $pInfo->products_group_d_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }
            if ($group == GROUP_PRICE_PER_ITEM5) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_E_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_e_price', $pInfo->products_group_e_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_E_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_e_price_gross', $pInfo->products_group_e_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM6) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_F_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_f_price', $pInfo->products_group_f_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_F_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_f_price_gross', $pInfo->products_group_f_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM7) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_G_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_g_price', $pInfo->products_group_g_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_G_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_g_price_gross', $pInfo->products_group_g_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM8) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_H_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_h_price', $pInfo->products_group_h_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_H_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_h_price_gross', $pInfo->products_group_h_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM9) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_I_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_i_price', $pInfo->products_group_i_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_I_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_i_price_gross', $pInfo->products_group_i_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM10) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_J_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_j_price', $pInfo->products_group_j_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_J_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_j_price_gross', $pInfo->products_group_j_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM11) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_K_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_k_price', $pInfo->products_group_k_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_K_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_k_price_gross', $pInfo->products_group_k_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM12) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_L_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_l_price', $pInfo->products_group_l_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_L_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_l_price_gross', $pInfo->products_group_l_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM13) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_M_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_m_price', $pInfo->products_group_m_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_M_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_m_price_gross', $pInfo->products_group_m_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM14) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_N_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_n_price', $pInfo->products_group_n_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_N_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_n_price_gross', $pInfo->products_group_n_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM15) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_O_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_o_price', $pInfo->products_group_o_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_O_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_o_price_gross', $pInfo->products_group_o_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM16) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_P_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_p_price', $pInfo->products_group_p_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_P_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_p_price_gross', $pInfo->products_group_p_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM17) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_Q_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_q_price', $pInfo->products_group_q_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_Q_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_q_price_gross', $pInfo->products_group_q_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM18) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_R_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_r_price', $pInfo->products_group_r_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_R_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_r_price_gross', $pInfo->products_group_r_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM19) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_S_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_s_price', $pInfo->products_group_s_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_S_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_s_price_gross', $pInfo->products_group_s_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

            if ($group == GROUP_PRICE_PER_ITEM20) {
              ?>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_T_PRICE_NET; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_t_price', $pInfo->products_group_t_price, 'onKeyUp="updateGross()"'); ?></td>
                  </tr>
                  <tr bgcolor="#ebebff">
                    <td class="main"><?php echo TEXT_PRODUCTS_GROUP_T_PRICE_GROSS; ?></td>
                    <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . 
zen_draw_input_field('products_group_t_price_gross', $pInfo->products_group_t_price, 'OnKeyUp="updateNet()"'); ?></td>
                  </tr>
              <?php
           }

      }
     ?>

		  
		  
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_VIRTUAL; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('products_virtual', '1', $is_virtual) . '&nbsp;' . TEXT_PRODUCT_IS_VIRTUAL . '&nbsp;' . zen_draw_radio_field('products_virtual', '0', $not_virtual) . '&nbsp;' . TEXT_PRODUCT_NOT_VIRTUAL . ' ' . ($pInfo->products_virtual == 1 ? '<br /><span class="errorText">' . TEXT_VIRTUAL_EDIT . '</span>' : ''); ?></td>
          </tr>

          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main" valign="top"><?php echo TEXT_PRODUCTS_IS_ALWAYS_FREE_SHIPPING; ?></td>
            <td class="main" valign="top"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('product_is_always_free_shipping', '1', $is_product_is_always_free_shipping) . '&nbsp;' . TEXT_PRODUCT_IS_ALWAYS_FREE_SHIPPING . '&nbsp;' . zen_draw_radio_field('product_is_always_free_shipping', '0', $not_product_is_always_free_shipping) . '&nbsp;' . TEXT_PRODUCT_NOT_ALWAYS_FREE_SHIPPING  . '<br />' . zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('product_is_always_free_shipping', '2', $special_product_is_always_free_shipping) . '&nbsp;' . TEXT_PRODUCT_SPECIAL_ALWAYS_FREE_SHIPPING . ' ' . ($pInfo->product_is_always_free_shipping == 1 ? '<br /><span class="errorText">' . TEXT_FREE_SHIPPING_EDIT . '</span>' : ''); ?></td>
          </tr>

          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_QTY_BOX_STATUS; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('products_qty_box_status', '1', $is_products_qty_box_status) . '&nbsp;' . TEXT_PRODUCTS_QTY_BOX_STATUS_ON . '&nbsp;' . zen_draw_radio_field('products_qty_box_status', '0', $not_products_qty_box_status) . '&nbsp;' . TEXT_PRODUCTS_QTY_BOX_STATUS_OFF . ' ' . ($pInfo->products_qty_box_status == 0 ? '<br /><span class="errorText">' . TEXT_PRODUCTS_QTY_BOX_STATUS_EDIT . '</span>' : ''); ?></td>
          </tr>

          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>

          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_QUANTITY_MIN_RETAIL; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_quantity_order_min', ($pInfo->products_quantity_order_min == 0 ? 1 : $pInfo->products_quantity_order_min)); ?></td>
          </tr>

          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_QUANTITY_MAX_RETAIL; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_quantity_order_max', $pInfo->products_quantity_order_max); ?>&nbsp;&nbsp;<?php echo TEXT_PRODUCTS_QUANTITY_MAX_RETAIL_EDIT; ?></td>
          </tr>

          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_QUANTITY_UNITS_RETAIL; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_quantity_order_units', ($pInfo->products_quantity_order_units == 0 ? 1 : $pInfo->products_quantity_order_units)); ?></td>
          </tr>

          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_MIXED; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_radio_field('products_quantity_mixed', '1', $in_products_quantity_mixed) . '&nbsp;' . TEXT_YES . '&nbsp;&nbsp;' . zen_draw_radio_field('products_quantity_mixed', '0', $out_products_quantity_mixed) . '&nbsp;' . TEXT_NO; ?></td>
          </tr>

          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>

<script language="javascript"><!--
updateGross();
//--></script>
<?php
    for ($i=0, $n=sizeof($languages); $i<$n; $i++) {
?>
          <tr>
            <td class="main" valign="top"><?php if ($i == 0) echo TEXT_PRODUCTS_DESCRIPTION; ?></td>
            <td colspan="2"><table border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="main" width="25" valign="top"><?php echo zen_image(DIR_WS_CATALOG_LANGUAGES . $languages[$i]['directory'] . '/images/' . $languages[$i]['image'], $languages[$i]['name']); ?>&nbsp;</td>
                <td class="main" width="100%">
        <?php if ($_SESSION['html_editor_preference_status']=="FCKEDITOR") {
                $oFCKeditor = new FCKeditor('products_description[' . $languages[$i]['id'] . ']') ;
                $oFCKeditor->Value = (isset($products_description[$languages[$i]['id']])) ? stripslashes($products_description[$languages[$i]['id']]) : zen_get_products_description($pInfo->products_id, $languages[$i]['id']) ;
                $oFCKeditor->Width  = '99%' ;
                $oFCKeditor->Height = '350' ;
//                $oFCKeditor->Config['ToolbarLocation'] = 'Out:xToolbar' ;
//                $oFCKeditor->Create() ;
                $output = $oFCKeditor->CreateHtml() ;  echo $output;
          } else { // using HTMLAREA or just raw "source"

          echo zen_draw_textarea_field('products_description[' . $languages[$i]['id'] . ']', 'soft', '100%', '30', (isset($products_description[$languages[$i]['id']])) ? stripslashes($products_description[$languages[$i]['id']]) : zen_get_products_description($pInfo->products_id, $languages[$i]['id'])); //,'id="'.'products_description' . $languages[$i]['id'] . '"');
          } ?>
        </td>
              </tr>
            </table></td>
          </tr>
<?php
    }
?>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_QUANTITY; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_quantity', $pInfo->products_quantity); ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
<?php
  $dir = @dir(DIR_FS_CATALOG_IMAGES);
  $dir_info[] = array('id' => '', 'text' => "Main Directory");
  while ($file = $dir->read()) {
    if (is_dir(DIR_FS_CATALOG_IMAGES . $file) && strtoupper($file) != 'CVS' && $file != "." && $file != "..") {
      $dir_info[] = array('id' => $file . '/', 'text' => $file);
    }
  }
  $dir->close();
  sort($dir_info);

  $default_directory = substr( $pInfo->products_image, 0,strpos( $pInfo->products_image, '/')+1);
?>

          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_black.gif', '100%', '3'); ?></td>
          </tr>

          <tr>
            <td class="main" colspan="2"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="main"><?php echo TEXT_PRODUCTS_IMAGE; ?></td>
                <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_file_field('products_image') . '&nbsp;' . ($pInfo->products_image !='' ? TEXT_IMAGE_CURRENT . $pInfo->products_image : TEXT_IMAGE_CURRENT . '&nbsp;' . NONE) . zen_draw_hidden_field('products_previous_image', $pInfo->products_image); ?></td>
                <td valign = "center" class="main"><?php echo TEXT_PRODUCTS_IMAGE_DIR; ?>&nbsp;<?php echo zen_draw_pull_down_menu('img_dir', $dir_info, $default_directory); ?></td>
						  </tr>
              <tr>
                <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15'); ?></td>
                <td class="main" valign="top"><?php echo TEXT_IMAGES_DELETE . ' ' . zen_draw_radio_field('image_delete', '0', $off_image_delete) . '&nbsp;' . TABLE_HEADING_NO . ' ' . zen_draw_radio_field('image_delete', '1', $on_image_delete) . '&nbsp;' . TABLE_HEADING_YES; ?></td>
	  	    	  </tr>

              <tr>
                <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15'); ?></td>
                <td colspan="3" class="main" valign="top"><?php echo TEXT_IMAGES_OVERWRITE  . ' ' . zen_draw_radio_field('overwrite', '0', $off_overwrite) . '&nbsp;' . TABLE_HEADING_NO . ' ' . zen_draw_radio_field('overwrite', '1', $on_overwrite) . '&nbsp;' . TABLE_HEADING_YES; ?>
                  <?php echo '<br />' . TEXT_PRODUCTS_IMAGE_MANUAL . '&nbsp;' . zen_draw_input_field('products_image_manual'); ?></td>
              </tr>
            </table></td>
          </tr>

          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_black.gif', '100%', '3'); ?></td>
          </tr>

<?php
    for ($i=0, $n=sizeof($languages); $i<$n; $i++) {
?>
          <tr>
            <td class="main"><?php if ($i == 0) echo TEXT_PRODUCTS_URL . '<br /><small>' . TEXT_PRODUCTS_URL_WITHOUT_HTTP . '</small>'; ?></td>
            <td class="main"><?php echo zen_image(DIR_WS_CATALOG_LANGUAGES . $languages[$i]['directory'] . '/images/' . $languages[$i]['image'], $languages[$i]['name']) . '&nbsp;' . zen_draw_input_field('products_url[' . $languages[$i]['id'] . ']', (isset($products_url[$languages[$i]['id']]) ? $products_url[$languages[$i]['id']] : zen_get_products_url($pInfo->products_id, $languages[$i]['id'])), zen_set_field_length(TABLE_PRODUCTS_DESCRIPTION, 'products_url')); ?></td>
          </tr>
<?php
    }
?>
          <tr>
            <td colspan="2"><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
          </tr>
          <tr>
            <td class="main"><?php echo TEXT_PRODUCTS_SORT_ORDER; ?></td>
            <td class="main"><?php echo zen_draw_separator('pixel_trans.gif', '24', '15') . '&nbsp;' . zen_draw_input_field('products_sort_order', $pInfo->products_sort_order); ?></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><?php echo zen_draw_separator('pixel_trans.gif', '1', '10'); ?></td>
      </tr>
      <tr>
        <td class="main" align="right"><?php echo zen_draw_hidden_field('products_date_added', (zen_not_null($pInfo->products_date_added) ? $pInfo->products_date_added : date('Y-m-d'))) . zen_image_submit('button_preview.gif', IMAGE_PREVIEW) . '&nbsp;&nbsp;<a href="' . zen_href_link(FILENAME_CATEGORIES, 'cPath=' . $cPath . (isset($_GET['pID']) ? '&pID=' . $_GET['pID'] : '') . (isset($_GET['page']) ? '&page=' . $_GET['page'] : '')) . '">' . zen_image_button('button_cancel.gif', IMAGE_CANCEL) . '</a>'; ?></td>
      </tr>
    </table></form>
