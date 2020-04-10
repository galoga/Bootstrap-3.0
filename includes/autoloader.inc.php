<?php
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Air Message
# Contact : 		hello@galoga.tech
# Created date : 	2020-02-25
# Update date :  	2020-03-16
########################################

########################################
# LOADED IN "/public/index.php"
########################################

########################################
# THIS FILE AUTOLOADS ALL NECESSARY 
# FILES FOR GENERATION OF THE SITE
########################################
  
# -- VERSION CONTROLLER --
include 'version.inc.php';

# -- EXTERNAL VENDOR HANDLERS  --
# -- PHPMAiler --
include 'vendor/PHPMailer/src/Exception.php';
include 'vendor/PHPMailer/src/PHPMailer.php';
include 'vendor/PHPMailer/src/SMTP.php';
# -- TCPDF -- 
#include 'vendor/TCPDF/tcpdf.php';
# -- Parsedown -- 
include 'vendor/Parsedown/Parsedown.php';

# -- MAIN CONTROLLER FOR THE SITE --
include 'controller/controller.inc.php';

# --MAIN CLASSES HANDLER --
include 'class/class.inc.php';

# -- MAIN MODEL HANDLER -- DB CONNECTOR --
include 'model/model.inc.php';

# -- HTML PAGE TEMPLATE HANDLER --
include 'view/view.inc.php';
