<?php 
########################################
# © Copyright : All rights reserved 2019
# Created by : 	Air Message
# Created date : 	2019-12-15
# Update date :  	2019-12-28	
########################################

########################################
# PAGE INCLUDED IN  "/includes/view.php"
########################################

########################################
# PAGE FUNCTIONS NON-LOCKED PAGES
# For pages with site wide access
########################################

# -- SITE WIDE ALERT FUNCTION FOR ALL PAGES -- 
FUNC_ALERT();

########################################
# PAGE FUNCTIONS LOCKED PAGES
# For pages with locked access
########################################

# -- LOCKED PAGE FUNCTION TESTER -- NB! MUST BE turned on if page is locked -- 
# FUNC_LOCKED();

# -- ALERT FUNCTION FOR LOCKED PAGES -- NB MUST BE turned on if page is locked -- 
#FUNC_ALERT_LOCKED();
?>
 
<div class="container<?= CON_DIV_STYLE; ?> container-padding">
<?php # -- CONTENTS BLW --

# -- ROUTES TO "/public/start-XXX.inc" VIA "pid" AND "sid" -- 
if(isset($_GET['sid'])):
   include 'content/start-'.$_GET['sid'].'.inc.php';
else:
   include 'content/index.inc.php';
endif;

# -- CONTENTS ABV -- ?> 
</div>
