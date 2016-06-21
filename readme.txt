
Zone & Item Flat Rate v.1.0
............................................

Counts Flat Rate depending by Zone and Items

Gives the ability to count shipping cost by formula:
  Shipping_Cost_Of_One_Item_In_Zone_N * Items_In_Order(excluding virtual items)_In_Zone_N + Shipping_Method_Fee_In_Zone_N = SHIPPING_COST_In_Zone_N;
  where "N" is the number from 1 to max number you like.
  
  The MAX number of ZONES can be changed to any number. Now it's 3. It could be changed in the module code on line 31.
  Also, you can rewrite line 31 with "$this->num_zones = $geozones->RecordCount();" and you'll get as much, as in your geo_zones table.
  
->> Installation ->>
....................................

  1. Just copy files. No core owerwrite, new only. The are:
  
    includes\modules\shipping\zoneflat.php
    includes\languages\ENGLISH\modules\shipping\zoneflat.php
    
  Important! If you use Zone Flat Rate v.1.0, BACKUP first! This contribution will and you NEED to OWERWRITE Zone Flat Rate, due to errors using both!
  Use it on your own risk.

  2. Under Admin:
    Modules -> Shipping -> Zones & Item Flat Rate -> Install

->> UNInstallation ->>  
....................................
  
  2. Under Admin:
    Modules -> Shipping -> Zones & Item Flat Rate -> UnInstall
  
  2. Delete files:
  
    includes\modules\shipping\zoneflat.php
    includes\languages\ENGLISH\modules\shipping\zoneflat.php

....................................
  Copyright (c) 1990-2008 Archelay & ESIT Group
  Copyright (c) surf7.net (this module is based on Zone Flat Rate v.1.0 Module)
  Copyright (c) ajeh (this module is based on Item Shipping module)
  Copyright (c) 2004 - 2008 The zen-cart developers 
  Portions Copyright (c) 2003 osCommerce