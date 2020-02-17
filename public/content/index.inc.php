<?php 
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Air Message
# Created date : 	2019-12-15
# Update date :  	2020-01-25s	
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
?>
<section class="section">
	<div class="container<?= CON_DIV_STYLE; ?>">	
	<h2><i class="fas fa-globe-americas"></i>&nbsp;Hello World!</h2>
	<h5>Welcome to the Galoga Technologies™ Bootstrap Boilerplate</h5>
	<?php  FUNC_HELLO_WORLD(); # -- READ INFO BELOW ?>
	    
	 <?php 
        ########################################
        # THE FUNCTION ABOVE SHOWS THE WELCOME
        # MESSAGES - DELETE IT TO GET STARTED
        # 
        # PAGE TEMPLATES ARE FOUND IN:
        # '/public/content_templates'
        # 
        # ALL CONTENT PAGES TO BE SAVED IN:
        # '/public/content/' to work properly
        # 
        ######################################## 
        ?>
   </div>  	
</section>


