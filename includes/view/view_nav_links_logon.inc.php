<?php
########################################
# © Copyright : All rights reserved 2019
# Created by : 		Galoga Industries
# Contact : 		hello@galoga.tech
# Created date : 	2019-12-21
# Update date :		
########################################

########################################
# LOADED IN "/view/view.inc"
########################################

########################################
# STANDARD NAVIGATION
########################################
?> 
	<div class="collapse navbar-collapse" id="navbar">
		<ul class="nav navbar-nav mr-auto"></ul>
		<ul class="nav navbar-nav navbar-right">
 			<li class="nav-item">
 				<a class="nav-link" href="#"><?php echo CON_NAV_LINK_RGT; ?><span class="text-nav">A link</span></a>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" href="#"><?php echo CON_NAV_LINK_RGT; ?><span class="text-nav">Another link</span></a>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link disabled" href="#"><?php echo CON_NAV_LINK_RGT; ?><span class="text-nav">Yet another link</span></a>
 			</li>
 			<li class="nav-item">
 				<a class="nav-link" href="pid=logon"><?php echo CON_NAV_LINK_LOGOUT; ?><span class="text-nav">Log Out</span></a>
 			</li>
 			 <li class="nav-item">
 				<a class="nav-link" href="pid=contact"><?php echo CON_NAV_LINK_CTC; ?><span class="text-nav">Contact Us</span></a>
 			</li>
			<li class="nav-item active">
				<a class="nav-link" href="pid=index"><?php echo CON_NAV_LINK_HOME; ?><span class="text-nav">Home</span><span class="sr-only">(current)</span></a>
			</li>
		</ul>
	</div>