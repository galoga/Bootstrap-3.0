<?php 
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Galoga Tech
# Contact : 		hello@galoga.tech
# Created date : 	2019-12-14
# Update date :  	2020-02-16
########################################

# SESSION START 
session_start();

########################################
# FUNCTIONS are all in CAPITALS and 
# start with "FUNC_" to make it easy 
########################################

# -- LOGON FORM FUNCTION --
function FUNC_LOGON($puid, $puco){
$locked = CON_UUID;
if ($puid === 'upload' && $puco === 'upload'):
	$url = 'pid=upload&u='.$locked;
elseif($puid === 'test' && $puco === 'test'):
	$url = 'pid=upload&u='.$locked;
elseif($puid === 'files' && $puco === 'files'):
	$url = 'pid=files&u='.$locked;
elseif($puid === 'table' && $puco === 'table'):
	$url = 'pid=table&u='.$locked;
else:
	$url  = 'pid=logon&err=wuc';
endif;

echo "<script type='text/javascript'>document.location.href='{$url}';</script>";
echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $url . '">';
}

# -- LOCKED PAGE FUNCTION TESTER --
function FUNC_LOCKED() {
$locked = CON_UUID;
if($_GET['u'] === $locked): 
	echo '';	
else:
 	$url  = 'pid=logon&err=log'; # -- 
	echo "<script type='text/javascript'>document.location.href='{$url}';</script>";
	echo '<META HTTP-EQUIV="refresh" content="0;URL=' . $url . '">';
endif;
}

function FUNC_ERROR() {
if($_GET['err'] == 'wuc'): # -- ERROR MESSAGE WRONG CODE SEE FUNC_LOGON -- 
    echo '<div class="text-center alert alert-danger" role="alert"><i class="fa fa-warning">&nbsp;</i>WRONG USER / CODE</div>';
endif;
			 	
if($_GET['err'] == 'log'): # -- ERROR MESSAGE ILLEGAL ACCESS SEE FUNC_LOCKED  -- 
	echo '<div class="text-center alert alert-danger" role="alert"><i class="fa fa-warning">&nbsp;</i>PLEASE LOG ON</div>';
endif;
}

# -- FILE ICON CHOOSER -- 
function FUNC_FILE_ICON($fileicon) {
if($fileicon == 'word'): 
	echo '<i style="color: blue" class="fas fa-file-word"></i>&nbsp;&nbsp;' ;
elseif($fileicon == 'excel'): 
	echo '<i style="color: green" class="fas fa-file-excel"></i>&nbsp;&nbsp;' ;
elseif($fileicon == 'powerpoint'): 
	echo '<i style="color: darkorange" class="fas fa-file-powerpoint"></i>&nbsp;&nbsp;' ; 
elseif($fileicon == 'pdf'): 
	echo '<i style="color: red" class="fas fa-file-pdf"></i>&nbsp;&nbsp;' ; 
elseif($fileicon == 'file'):
	echo '<i style="color: dodgerblue" class="fas fa-file-alt"></i>&nbsp;&nbsp;' ;
else:
    NULL;
endif;
}

# -- FILE DOWNLOAD URL -- 
function FUNC_FILE_DOWNLOAD_NAME($f) {
    echo 'http://'.CON_SITE_URL.'/content/download.php?f='.$f;
}

########################################
# SITE ALERT MESSAGE FUNCTIONS 
# Turn on and off in 'contants.inc.php'
########################################

function FUNC_ALERT() {
if(CON_ALERT_STATE == 'on'):
	echo '<div class="container alert alert-'.CON_ALERT_MESSAGE_STYLE.'" role="alert">'.CON_ALERT_MESSAGE_TEXT.'</div>';
endif;
}

function FUNC_ALERT_LOCKED() {
if(CON_ALERT_STATE_LOCKED == 'on'):
	echo '<div class="container alert alert-'.CON_ALERT_MESSAGE_STYLE_LOCKED.'" role="alert">'.CON_ALERT_MESSAGE_TEXT_LOCKED.'</div>';
endif;
}

########################################
# NAVIGATION LINKS MENU CHOOSER
# Turn on and off in 'contants.inc.php'
########################################

function FUNC_NAV_LINKS() {
if(isset($_GET['u'])): 
 	require_once '../includes/view/view_nav_links_logon.inc.php';
else:
 	require_once '../includes/view/view_nav_links_default.inc.php';
endif;
}

########################################
# CONSTANTS are all in CAPITALS and 
# start with "CON_" to make it easy 
########################################

const CON_VERSION_DATE  = '2020-02-16';
const CON_VERSION_DEV   = '269';                    # Added PDO connection in model handler
const CON_VERSION       = '3.20.2';
const CON_HOMAGE_INFO   = 'Powered by Galoga Technologies';

# -- PASSWORD FOR PHP MAILER --
const CON_PHPMAILER_HOST = '';                      # Add mail host for PHPMailer
const CON_PHPMAILER_USER = '';                      # Add mail user for PHPMailer
const CON_PHPMAILER_PASS = '';                      # Add mail password for PHPMailer
 
$CON_FILE       = $_SERVER['SCRIPT_FILENAME'];
$CON_USER       = $_SERVER['HTTP_USER_AGENT'];
$CON_SERVER     = $_SERVER['SERVER_SOFTWARE'];

define('CON_Y', date("Y"));
define('CON_M', date("m"));
define('CON_D', date("d"));
define('CON_YMD', date("Ydm"));
define('CON_Y-M-D', date("Y-d-m"));

define('CON_UUID', md5(date('mYdAM')));            # Change order in date

########################################
# DEFAULT WELOCOME TEXT in 
# public/content/index.inc.php
########################################

function FUNC_HELLO_WORLD(){
echo <<<EOT
		<p><i class="fab fa-bootstrap" style="font-size:84px; color: #513f78"></i></p>
		<p>You need a basic knowledge of HTML, CSS & PHP to get this baby up and running!<br> This Boilerplate is built around a <a href="https://en.wikipedia.org/wiki/Model–view–controller">MODEL-VIEW-CONTROLLER</a> design pattern.</p>
		<a href="http://galoga.github.io" class="btn btn-primary btn-lg"><i class="fas fa-tools">&nbsp;</i>Configure the site - <i class="fab fa-github">&nbsp;</i>GitHub</a>
		</p>
EOT;

echo '<p>';
echo '<span><strong>Boilerplate information</strong></span>';
echo '<br>';
echo 'Version: <span class="text-grey">'.CON_VERSION.' Build: '.CON_VERSION_DEV;
echo '<br>'; 
echo '</p>';
}
?>