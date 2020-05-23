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

#LOCKED PAGE FUNCTION TESTER -- NB MUST BE turned on if page is locked
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
		<h2>Log On</h2>
		<h5>&nbsp;</h5>
		<?= CON_SPACE[3]; ?>
		<?= CON_SPACE[3]; ?>
		<div class="row row-padding">
			<div class="col-md-4"></div>
			<div class="col-md-4">
			    <?php FUNC_ERROR($_GET['err']); # -- ERROR MESSAGE FUNCTION ?>
				<?php # -- LOGON FORM BLW --; ?>
				<form name="form" method="post" action="pid=logon-action" accept-charset="iso-8859-1" class="form-horizontal">
				<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend"><label class="input-group-text"><i class="fa fa-address-card"></i>&nbsp;User</label></div>
							<input id="puid" name="puid" type="text" required class="form-control" maxlength="10" pattern="[A-Za-z0-9]{3,10}" wrap="physical" autocomplete="off" onblur="this.value=removeSpaces(this.value);" autofocus>
						</div>
				</div>
				<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend"><label class="input-group-text"><i class="fa fa-user-secret"></i>&nbsp;Code</label></div>
							<input id="puco" name="puco" type="password" required class="form-control" maxlength="10" pattern="[A-Za-z0-9]{3,10}" wrap="physical" autocomplete="off" onblur="this.value=removeSpaces(this.value);" autofocus>
						</div>
				</div>
				<button name="submit" type="submit" name="submit" class="btn btn-block btn-outline-success"><i class="fa fa-check"></i>&nbsp;LOG ON</button>
				</form>
				<?php # -- LOGON FORM ABV--; ?>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</section>
