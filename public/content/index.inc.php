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
    <div class="row">
        <div class="col-md-12">      
        <?php FUNC_HELLO_WORLD(); # -- READ INFO BELOW
        ########################################
        # THE FUNCTION ABOVE SHOWS THE WELCOME
        # MESSAGES - DELETE IT TO GET STARTED
        # 
        # PAGE TEMPLATES ARE FOUND IN:
        # '/public/content/templates'
        # 
        # ALL CONTENT PAGES TO BE SAVED IN:
        # '/public/content/' to work properly
        # 
        ######################################## 
        ?>
        </div>
    </div>          
</div>  	
</section>


