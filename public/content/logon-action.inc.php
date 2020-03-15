<?php 
########################################
# © Copyright : All rights reserved 2019
# Created by : 		Galoga Tech 
# Created date : 	22019-12-21
# Update date :  		
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
# FUNC_LOCKED();

# ALERT FUNCTION FOR LOCKED PAGES -- NB MUST BE turned on if page is locked
# 'FUNC_ALERT_LOCKED();
?>
<section class="section">
	<div class="container<?= CON_DIV_STYLE; ?>">
		<?= CON_SPACE[4]; ?> 
		<div class="row row-padding">
			<div class="col-md-4"></div>
			<div class="col-md-4">
		        <?php 
		        $puid = $_POST['puid']; # PERSONAL USER ID
                $puco = $_POST['puco']; # PERSONAL USER CODE 
                FUNC_LOGON($puid , $puco);	        
		        ?> 
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</section>



