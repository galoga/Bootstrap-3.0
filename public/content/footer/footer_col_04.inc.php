<?php 
########################################
# © Copyright : All rights reserved 2020
# Created by : Galoga Industries
# Contact : hello@galoga.tech
# Created date :	2019-06-29 	
# Update date : 	2020-02-15
########################################	

######################################## 
# INCLUDED IN '../../includes/view.inc'
########################################

######################################## 
# FOOTER TEXT HOLDER four-col
########################################
?>
<div class="container-fluid text-secondary footer-padding bg-<?= CON_FOOTER_COLOUR; ?>" style="height: 250px">
	<div class="container footer-padding bg-<?= CON_FOOTER_COLOUR; ?>">
		<div class="row">
			<div class="col-md-3">
				<span class="small" style="color: grey"><p><?php echo CON_SITE_FOOTER; ?></p></span>
			</div>
			<div class="col-md-3">
				Second of four columns
			</div>
			<div class="col-md-3">
				Third of fourcolumns
			</div>
			<div class="col-md-3 text-right">
				<span class="small" style="color: grey"><p><?php echo CON_SITE_COPYRIGHT ?> <?php echo CON_Y ?> Ver : <?php echo CON_VERSION ?></p></span>
			</div>
		</div>
	</div>
</div>

