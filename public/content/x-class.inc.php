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
	        <h2>This is the general page template</h2>
	        <h5>Save this file as : XXX.inc.php</h5>
            <p>
            <?php
            class Fruit {
              // Properties
              public $name;
              public $color;

              // Methods
              function set_name($name) {
                $this->name = $name;
              }
              function get_name() {
 
                return $this->name;
              }
              function set_color($color) {
                $this->color = $color;
              }
              function get_color() {
                return $this->color;
              }
            }

            $apple = new Fruit();
            $apple->set_name('Apple');
            $apple->set_color('Red');
            echo "Name: " . $apple->get_name();
            echo "<br>";
            echo "Color: " . $apple->get_color();
            ?>
            </p>
        </div>
    </div>
</div>
</section>
