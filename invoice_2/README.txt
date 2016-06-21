Invoice Payment Module for ZenCart 1.3
--------------------------------------------------
Released under the GNU General Public License
--------------------------------------------------
Author: Scott Wilson, 8 July 2006
www.thatsoftwareguy.com 
Zen Forum PM swguy

Based on work by Alan Duncan
www.workingit.co.uk
Zen Forum PM duncanad

Change History: 
2.0 04/04/2007 Change to fix bug in select statement.
1.3 08/07/2006 Original version


(Based on Cash on Delivery Payment Module)
--------------------------------------------------
This mod permits a shop to grant credit either on a customer by customer
basis or globally.   The option "Invoice" is selected as a payment method
at checkout.  (This can, of course, be changed to "Bill me later,"
"Store Credit," or whatever you prefer.)  No database schema changes
are required. 

The mechanism this mod uses is the "Group Pricing" capability, wherein
customers are assigned to discount groups.  This mod allows discount 
groups to be flagged as also permitting customer payment by invoice. 
This version of the mod also provides the ability to provide different 
levels of discounting to customers who are permitted to invoice.

Please back up your database and shop prior to installing this mod,
and test it carefully before installing it on a live shop.  No warranty
is given or implied; use at your own risk.


Installation
============

1. Copy the contents of the invoice folder to the root directory of your
shop.  There are two new files in this mod; no existing files are 
overwritten. 

2. Login to admin and in Modules->Payment you will see 'Invoice' listed along with all the other payment modules available.

3. Click on 'Invoice' to highlight the module and click on 'Install'

4. Go to Customers/Group Pricing and press "insert".  Add a group called 
"invoice" with whatever discount you want to grant.  You may add
additional groups with the prefix "invoice" at different discount levels
if so desired; all of them will be able to invoice. 

5. If any of the "Percentage Discount" fields for the Pricing Group(s) you
just added were non-zero, you must enable the Group Pricing Order Total
module.  Go to Modules->Order Total and install "Group Discount."

New Files
=========

includes/modules/payment/invoice.php
includes/languages/english/modules/payment/invoice.php

