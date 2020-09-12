<?php
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Air Message
# Contact : 		hello@galoga.tech
# Created date : 	2020-02-20
# Update date :  	2020-06-19
########################################

########################################
# LOADED IN "/public/index.php"
########################################

########################################
# THIS FILE AUTOLOADS ALL NECESSARY 
# FILES FOR GENERATION OF THE SITE
########################################

########################################
# LOCAL PAGE FUNCTIONS
# Place local page functions below
########################################

function autoLoader($folder , $file){
    $path         = $folder."/";
    $extension    = ".inc.php";
    $fullFilePath = $path.$file.$extension;
    include_once $fullFilePath;
}

########################################
# USER AUTOLOADS 
########################################

#autoLoader('<folder>', '<file>');

########################################
# SYSTEM AUTOLOADS - DON'T TOUCH
# USER AUTOLOADS - BELOW
########################################

# -- EXTERNAL VENDOR HANDLERS  --
# -- PHPMAiler --
include 'vendor/PHPMailer/src/Exception.php';
include 'vendor/PHPMailer/src/PHPMailer.php';
include 'vendor/PHPMailer/src/SMTP.php';

# -- TCPDF -- SEE /public/pdf/pdf.php
#include 'vendor/TCPDF/tcpdf.php';

# -- phpqrcode
#include 'vendor/phpqrcode/qrlib.php';

# -- Parsedown -- 
include 'vendor/Parsedown/Parsedown.php';

# -- VERSION CONTROLLER --
include 'version.inc.php';

# -- MAIN CONTROLLERS FOR THE SITE --
autoLoader('controller', 'controller');

# --MAIN CLASSES HANDLER --
autoLoader('class', 'class');

# -- MAIN MODEL HANDLER -- DB CONNECTOR --
autoLoader('model', 'model');

# -- HTML PAGE TEMPLATE HANDLER --
autoLoader('view', 'view');
