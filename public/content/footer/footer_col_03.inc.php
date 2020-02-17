<?php 
########################################
# © Copyright : All rights reserved 2019
# Created by : Galoga Industries
# Contact : hello@galoga.tech
# Created date :	2019-06-29 	
# Update date : 	2020-01-06
########################################	

######################################## 
# INCLUDED IN '../../includes/view.inc'
########################################

######################################## 
# FOOTER TEXT HOLDER three-col
########################################
?>
<div class="container-fluid text-secondary footer-padding bg-<?= CON_FOOTER_COLOUR; ?>">
	<div class="container footer-padding bg-<?= CON_FOOTER_COLOUR; ?>">
		<div class="row">
			<div class="col-md-4">
				<span class="small" style="color: grey"><p><?php echo CON_SITE_FOOTER; ?></p></span>
			</div>
			<div class="col-md-4">
				Second of three columns
			</div>
			<div class="col-md-4 text-right">
				<span class="small" style="color: grey"><p><?php echo CON_SITE_COPYRIGHT ?> <?php echo CON_Y ?> Ver : <?php echo CON_VERSION ?></p></span>
			</div>
		</div>
	</div>
</div>

