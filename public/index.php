<?php
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Air Message
# Contact : 		hello@galoga.tech
# Created date : 	2019-12-14
# Update date :  	2020-02-15
########################################

# -- EXTERNAL VENDOR HANDLERS  --
# -- PHPMAiler --
require '../includes/vendor/PHPMailer/src/Exception.php';
require '../includes/vendor/PHPMailer/src/PHPMailer.php';
require '../includes/vendor/PHPMailer/src/SMTP.php';

# -- USER SETTINGS --
include 'settings/settings.inc.php';

# -- MAIN CONTROLLER FOR THE SITE --
include '../includes/controller/controller.inc.php';

# --MAIN CLASSES HANDLER --
include '../includes/class/class.inc.php';

# -- MAIN MODEL HANDLER -- DB CONNECTOR --
include '../includes/model/model.inc.php';

# -- HTML PAGE TEMPLATE HANDLER --
include '../includes/view/view.inc.php';
?>