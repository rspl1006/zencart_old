<?php

/**
 * @author: TheOracle
 * @description: Additional customers fields (v3.01).
 * @date: May 13 2008
 * @Version: Tested on: Zen-Cart E-Commerce v1.3.8a
 * @copyright: 2008
 */

$autoLoadConfig[0][] = array('autoType'=>'class',
	                            'loadFile'=>'addcustomersfields.php');
$autoLoadConfig[0][] = array('autoType'=>'init_script',
                                 'loadFile'=> 'init_addcustomersfields.php');
?>