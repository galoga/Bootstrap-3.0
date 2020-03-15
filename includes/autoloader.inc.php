<?php
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Air Message
# Contact : 		hello@galoga.tech
# Created date : 	2020-02-25
# Update date :  	2020-02-26
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
require_once 'vendor/PHPMailer/src/Exception.php';
require_once 'vendor/PHPMailer/src/PHPMailer.php';
require_once 'vendor/PHPMailer/src/SMTP.php';
# -- TCPDF -- 
require_once 'vendor/TCPDF/tcpdf.php';
# -- Parsedown -- 
require_once 'vendor/Parsedown/Parsedown.php';

# -- MAIN CONTROLLER FOR THE SITE --
include 'controller/controller.inc.php';

# --MAIN CLASSES HANDLER --
include 'class/class.inc.php';

# -- MAIN MODEL HANDLER -- DB CONNECTOR --
include 'model/model.inc.php';

# -- HTML PAGE TEMPLATE HANDLER --
include 'view/view.inc.php';

?>