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
	        <h2>QR-Code</h2>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <br>
        <!--  
        <img src="https://qrcode.tec-it.com/API/QRCode?data=C<?= $_GET['to']; ?>;<?= $_GET['SEK']; ?>;<?= $_GET['msg']; ?>;7&color=%23b51a00&size=small"/>
        Andreas Swish C1235138359  -->
        <!--  <img src="https://api.qrserver.com/v1/create-qr-code/?data=HelloWorld&amp;size=100x100" alt="" title="" />  -->
        </div>     
        <div class="col-md-3"></div>
    </div>
    
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <br>
         <?php echo '<img src="services/qr.php?qr='.$_GET['qr'].'&qrsize='.$_GET['qrsize'].'" />'; ?> 
       <!--  <img src="https://qrickit.com/api/qr.php?d=SMSTO:46708587578:TEST&qrsize=300" />  --> 
        </div>     
        <div class="col-md-3"></div>
    </div>
</div>
</section>