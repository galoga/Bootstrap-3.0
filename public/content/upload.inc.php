<?php 
########################################
# © Copyright : All rights reserved 2019
# Created by : 		Galoga Tech 
# Created date : 	2019-12-15
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
FUNC_LOCKED();

# ALERT FUNCTION FOR LOCKED PAGES -- NB MUST BE turned on if page is locked
FUNC_ALERT_LOCKED();

########################################
# LOCAL PAGE FUNCTIONS
# Place local page functions below
########################################
?>
<section class="section">
	<div class="container<?= CON_DIV_STYLE; ?>">
		<h2>Uploads</h2>
		<h5>&nbsp;</h5>
		<?= CON_SPACE[3]; ?>
		<?= CON_SPACE[3]; ?>
		<?php # -- UPLOAD FORM BLW ?>    
		<form class="input-group" id="uploadForm" action="files/uploads/upload-send.php" method="post">
			<input type="hidden" name="com" value="<?php echo $_GET['com']; ?>">
			<div class="custom-file">
				<input type="file" class="custom-file-input" name="userImage" id="userImage" autocomplete="off" required>
				<label class="custom-file-label" for="userImage">Choose file</label>
			</div>  
			<div class="input-group-append">
				<button class="btn btn-outline-success" type="submit" id="btnSubmit" value="Submit"><i class="fa fa-check"></i>&nbsp;UPLOAD</button>
			</div>
		</form>	    
		<br>
		<div class="progress" style="height: 18px;">
			<div class="progress-bar progress-bar-striped" id="progress-bar" style="width: 0"></div>
		</div>
		<br>	  
		<div id="targetLayer"></div>	  
		</div>  
		<?php # -- UPLOAD FORM ABV ?>
	</div>
</section>