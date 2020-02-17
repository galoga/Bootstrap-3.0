<?php 
########################################
# © Copyright : All rights reserved 2019
# Created by : 		Galoga Tech 
# Created date : 	2019-12-15
# Update date :  	2020-01-26	
########################################

########################################
# THIS PAGE IS WHERE YOU PLACE YOUR 
# CONTENT. ACCESS IT VIA :
# www.your-site-url.com/pid=<page-name>
# NB! YOU NEED TO SAVE THE FILE AS :
# <page-name>.inc
# AND IN THE "public" FOLDER
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
#  	FUNC_LOCKED();

# ALERT FUNCTION FOR LOCKED PAGES -- NB MUST BE turned on if page is locked
#  	FUNC_ALERT_LOCKED();
?>
<section class="section">
	<div class="container<?= CON_DIV_STYLE; ?>">
		<h2>Contact Us</h2>
		<h5>We are here to help</h5>
		<p>
		<i class="fas fa-phone-square"></i>&nbsp;Telephone: <a href="tel:+15551111">+1-555-1111</a><br>
		<i class="fas fa-envelope-square"></i>&nbsp;E-mail: <a href="mailto:hello@<?= CON_SITE_URL ?>">hello@<?= CON_SITE_URL ?></a>
		</p>  
	</div>
</section>
