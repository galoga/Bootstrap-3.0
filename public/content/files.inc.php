<?php 
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Galoga Tech 
# Created date : 	2020-01-10
# Update date :  		
########################################

########################################
# THIS PAGE IS WHERE YOU PLACE YOUR 
# CONTENT. ACCESS IT VIA :
# www.your-site-url.com/pid=start-<page-name>
# NB! YOU NEED TO SAVE THE FILE AS :
# start-<page-name>.inc
# AND IN THE "public/content" FOLDER
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
FUNC_LOCKED();

# ALERT FUNCTION FOR LOCKED PAGES -- NB MUST BE turned on if page is locked
FUNC_ALERT_LOCKED();
?>
<section class="section">
	<div class="container<?= CON_DIV_STYLE; ?>">
		<h2>Files</h2>
		<h5>All files below</h5>
		<p>

		</p>
	</div>
</section>