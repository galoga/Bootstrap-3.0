<?php 
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Galoga Tech 
# Created date : 	
# Update date :  		
########################################

########################################
# THIS PAGE IS WHERE YOU PLACE YOUR 
# CONTENT. ACCESS IT VIA :
# www.your-site-url.com/pid=<page-name>
# NB! YOU NEED TO SAVE THE FILE AS :
# <page-name>.inc
# AND IN THE "public/content/" FOLDER
########################################

########################################
# PAGE FUNCTIONS NON-LOCKED PAGES
# For pages with site wide access
########################################

# SITE WIDE ALERT FUNCTION FOR ALL PAGES - always leave on
FUNC_ALERT();

########################################
# PAGE FUNCTIONS LOCKED PAGES
# For pages with locked access
########################################

#LOCKED PAGE FUNCTION TESTER -- NB! MUST BE turned on if page is locked
# FUNC_LOCKED();

# ALERT FUNCTION FOR LOCKED PAGES -- NB MUST BE turned on if page is locked
# FUNC_ALERT_LOCKED();

########################################
# LOCAL PAGE FUNCTIONS
# Place local page functions below
########################################
?>

<section class="section">
<div class="container<?= CON_DIV_STYLE; ?>">
    <div class="row">
        <div class="col-md-12">
	        <h2>This is the general page template</h2>
	        <h5>Save this file as : XXX.inc.php</h5>
            <p>
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas in tellus posuere, faucibus mi ac, ullamcorper dolor. Donec ut ligula lacus. Quisque fringilla ante elementum sagittis sollicitudin. Praesent id erat velit. Nam nec ex sollicitudin, varius dolor pharetra, accumsan ex. Mauris imperdiet egestas malesuada. Mauris consequat odio in maximus tincidunt. Vivamus eget massa et odio dapibus sagittis sed vel nisl.
            </p>
        </div>
    </div>
</div>
</section>
