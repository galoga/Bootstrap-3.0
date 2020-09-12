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

<section class="section">
<div class="container<?= CON_DIV_STYLE; ?>">
    <div class="row">   
        <div class="col-md-3"></div>
        <div class="col-md-6">
        <form name="" method="post" action="pid=" autocomplete="off" accept-charset="UTF-8" class="form-horizontal">
        <form name="" method="post" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>" accept-charset="utf-8" class="form-horizontal">
            <div class="row mb-2">
                <div class="col-md-6">
                    <label>First name</label><input type="text" name="fname" placeholder="First name" required class="form-control">
                </div>
                <div class="col-md-6">
                    <label>Last name</label><input type="text" name="lname" placeholder="Last name" required class="form-control">
                </div>
            </div>
    
            <div class="mb-2">
                <label>E-mail</label><input type="text" name="email" placeholder="E-mail" required class="form-control">
            </div>
            
            <div class="mb-2">
                <label>Telephone</label><input type="tel" name="tel" placeholder="+46..." required class="form-control">
            </div>
            
            <div class="mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">&nbsp;Checkbox Value 1</label>
                </div>
            </div>
            
            <div class="mb-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                    <label class="form-check-label" for="defaultCheck1">&nbsp;Checkbox Value 2</label>
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">&nbsp;Checkbox Value 3</label>
                    </div>                 
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">&nbsp;Checkbox Value 5</label>
                    </div>
                </div>               
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">&nbsp;Checkbox Value 6</label>
                    </div>           
                </div>
            </div>
            
            <div class="row mb-2">
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">&nbsp;Checkbox Value 7</label>
                    </div>                 
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">&nbsp;Checkbox Value 8</label>
                    </div>
                </div>               
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label" for="defaultCheck1">&nbsp;Checkbox Value 9</label>
                    </div>           
                </div>
            </div>

            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-plane"></i>&nbsp;Flight number</span>
                    </div>
                    <input type="text" id="flt" name="flt" value="" class="form-control text-uppercase">
                </div>            
            </div>
    
            <div class="mb-2">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fas fa-calendar"></i>&nbsp;Date</span>
                    </div>
                    <input type="text" id="flt" name="flt" value="2020-02-18" readonly class="form-control text-uppercase">
                </div>            
            </div>
            

            <div class="mb-2">
                    <!--  FORM CONTENT HERE  -->
            </div>
            
            <div class="row mb-2">
                <div class="col-md-6">
                    <!--  FORM CONTENT HERE  --><input type="text" name="user" placeholder="User" required class="form-control">
                </div>
                <div class="col-md-6">
                    <!--  FORM CONTENT HERE  --><input type="text" name="code" placeholder="Code" required class="form-control">
                </div>
            </div>

            <div class="row mb-2">
                <div class="col-md-4">
                    <!--  FORM CONTENT HERE  -->
                </div>
                <div class="col-md-4">
                    <!--  FORM CONTENT HERE  -->               
                </div>
                <div class="col-md-4">
                    <!--  FORM CONTENT HERE  -->
                </div>
            </div>
 
            <div class="mb-2">
                <button class="btn btn-success btn-block"><i class="fas fa-check"></i>&nbsp;SEND</button>
            </div> 
        </form>
        </div>
        <div class="col-md-3"></div>
        
    </div>
</div>
</section>

<div>&nbsp;</div>

<!--  
<section class="section">
<div class="container<?= CON_DIV_STYLE; ?>">
    <div class="row">
        <div class="col-md-12">  
        <form>
            <div class="row mb-2">
                <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-4"><input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                </div>
            </div>
            <div class="row mb-2">
                <label for="inputPassword" class="col-sm-2 col-form-label"><i class="fa fa-plane"></i>&nbsp;Password</label>
                <div class="col-sm-4"><input type="password" class="form-control" id="inputPassword" placeholder="Password"></div>
            </div>       
        </form>
        </div> 
    </div>
</div>
</section>

				
	<div class="form-group ">
						<label for="age" id="age">E-mail:</label>
						<select class="form-control">
							<option>10+</option>
							<option>20+</option>
							<option>40+</option>
						</select>
					</div>
-->
   
