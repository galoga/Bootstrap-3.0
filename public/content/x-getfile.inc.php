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
?>

<section class="section">
<div class="container<?= CON_DIV_STYLE; ?>">
    <div class="row">
        <div class="col-md-12">
	        <h2>Get File</h2>
	        <!--  <h5>Save this file as : XXX.inc.php</h5>  -->
            <?php
            echo nl2br(file_get_contents('content/x-getfile.txt')); // get the contents, and echo it out with Line Breaks
            #echo file_get_contents('content/x-getfile.txt'); // get the contents, and echo it out without Line Breaks
            #echo  file_get_contents('https://docs.google.com/document/d/15hqyCUryYqXhg4GmHKY1IOA6I6gdy-yXDiATUW6I1g4/edit?usp=sharing'); // get the contents, and echo it out.
            ?>
        </div>
    </div>
    
</div>
</section>