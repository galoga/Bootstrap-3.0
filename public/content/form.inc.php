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
# www.your-site-url.com/pid=start-<page-name>
# NB! YOU NEED TO SAVE THE FILE AS :
# start-<page-name>.inc
# AND IN THE "public/content" FOLDER
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
</section>
<section class="section">
<div class="container<?= CON_DIV_STYLE; ?>">
		
		<form>
			<div class="form-group">
				<label for="name" id="name">Full name: </label>
				<input class="form-control" type="text" name="name">
			</div>
			<div class="form-group">
				<label for="email" id="email">E-mail: </label>
				<input class="form-control" type="text" name="email">
			</div>
		</form>
		
</div>
</section>



<section class="section">
	<div class="container<?= CON_DIV_STYLE; ?>">
		<div class="row row-padding">
			<div class="col-md-2"></div>
			<div class="col-md-8">
				<form>
					<div class="form-group">
						<label for="name" id="name">Full name:</label>
						<input class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<label for="email" id="email">E-mail:</label>
						<input class="form-control" type="text" name="email">
					</div>
					
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							<span class="input-group-text">Username</span>
							</div>
						<input type="text" class="form-control" placeholder="Username">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Your Email">
							
							<div class="input-group-append">
							
							<span class="input-group-text">@example.com</span>
							</div>
						</div>
					</div>
					
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-prepend">
							<span class="input-group-text">Username</span>
							</div>
							
							<input type="text" class="form-control" placeholder="Your Email">
							
							<div class="input-group-prepend">
							<span class="input-group-text">@example.com</span>
							</div>
						</div>
					</div>
					
					<div class="form-group ">
						<label for="age" id="age">E-mail:</label>
						<select class="form-control">
							<option>10+</option>
							<option>20+</option>
							<option>40+</option>
						</select>
					</div>
					

					
<div class="input-group mb-3">
   
    <div class="input-group-prepend">
        <div class="input-group-text">
            <input  id="" name="" type="checkbox" aria-label="" >&nbsp;Username
         </div>
    </div>
    
    <input id="" name="" type="text" value="JKG" readonly class="form-control" aria-label="">
</div>
					
			
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text" id="" ><i class="fa fa-plane"></i>&nbsp;Flight</span>
  </div>
  <input id="flt" name="flt" type="text" value="" class="form-control text-uppercase">
  
<div class="input-group-prepend">
    <span class="input-group-text" id=""><i class="fa fa-plane"></i>&nbsp;Reg</span>
</div>
  <input id="reg" name="reg" type="text" class="form-control text-uppercase">
</div>
				
					
					<div class="form-group">
						<label for="Message" id="messsage">Message: </label>
						<textarea class="form-control"></textarea>
					</div>
					<button name="submit" type="submit" class="btn btn-block btn-outline-success">Submit</button>
				</form>
			</div>
			<div class="col-md-2"></div>
		</div>
	</div>
<section class="section">