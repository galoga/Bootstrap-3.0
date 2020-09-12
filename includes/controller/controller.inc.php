<?php 
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Galoga Tech
# Contact : 		hello@galoga.tech
# Created date : 	2019-12-14
# Update date :  	2020-05-10
########################################

########################################
# LOADED IN "autoloader.inc.php"
########################################

# -- SESSION START -- 
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
elseif($puid === 'files' && $puco === 'files'):
	$url = 'pid=files&u='.$locked;
# -- LPOGON TEMPLATE --
# elseif($puid === '<XXX>' && $puco === '<XXX>'):
# 	$url = 'pid=<XXX>&u='.$locked;
else:
	$url  = 'pid=logon&err=wuc'; # SEE FUNC_ERROR
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
 	$url  = 'pid=logon&err=log'; # SEE FUNC_ERROR
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
function FUNC_FILE_DOWNLOAD_NAME($filename) {
    echo 'http://'.CON_SITE_URL.'/content/download.php?f='.$filename;
}

# -- MARKDOWN CALL FUNCTION -- 
function FUNC_MARKDOWN($markdown_filename){ # Example syntax : 'folder/filename.md'
$contents =  file_get_contents($markdown_filename);
$Parsedown = new Parsedown();
echo $Parsedown->text($contents);
}

# -- MAIN CONTENT SITCH FUNCTION - handles 'index.php/pid=' + 'index.php/pid=mid&mid=xyz' calls 
function FUNC_MAIN_CONTENT_SWITCH(){
if(isset($_GET['pid'])):   
    if(isset($_GET['mid'])):
	    echo '<section class="section">';
        echo '<div class="container'.CON_DIV_STYLE.'">';
        echo '<div class="row">';
        echo '<div class="col-md-12">';
        $contents = file_get_contents("content/markdown/".$_GET['mid'].".md");
        $Parsedown = new Parsedown();
        echo $Parsedown->text($contents);
        echo '</p>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        echo '</section>';
    # -- OPTIONAL 'start-' + sid SYNTAX  -- 
    # elseif(isset($_GET['sid'])):
    #     include 'content/start-'.$_GET['sid'].'.inc.php';
    elseif(empty($_GET['pid'])): 
	    include 'content/index.inc.php';
    else:
	   include 'content/'.$_GET['pid'].'.inc.php'; 
    endif;    
else:
    include 'content/index.inc.php';
endif;
}

########################################
# SITE ALERT MESSAGE FUNCTIONS 
# Turn on and off in 'contants.inc.php'
########################################

function FUNC_ALERT(){
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
# CONSTANTS are all in CAPITALS and 
# start with "CON_" to make it easy 
########################################

# -- PASSWORD FOR PHP MAILER --
const CON_PHPMAILER_HOST = ''; # Add mail host for PHPMailer
const CON_PHPMAILER_USER = ''; # Add mail user for PHPMailer
const CON_PHPMAILER_PASS = ''; # Add mail password for PHPMailer
 
$CON_FILE       = $_SERVER['SCRIPT_FILENAME'];
$CON_USER       = $_SERVER['HTTP_USER_AGENT'];
$CON_SERVER     = $_SERVER['SERVER_SOFTWARE'];

define('CON_Y', date("Y"));
define('CON_M', date("m"));
define('CON_D', date("d"));
define('CON_YMD', date("Ydm"));
define('CON_Y-M-D', date("Y-d-m"));
define('CON_H', date("Y-d-m"));

$salt_1			= '';
$salt_2         = '';
$hash           = md5(date('g-G-h-H-W-Y')); # CHANGE ORDER
$uuid      		= strtoupper($salt_1.$hash.$salt_2);

define('CON_UUID', $uuid); 

// Sanitize functions
// Make sanitizing easy and you will do it often

// Sanitize for HTML output 
function h($string) {
	return htmlspecialchars($string);
}

// Sanitize for JavaScript output
function j($string) {
	return json_encode($string);
}

// Sanitize for use in a URL
function u($string) {
	return urlencode($string);
}

// Usage examples, leave commented out
// echo h("<h1>Test string</h1><br />");
// echo j("'}; alert('Gotcha!'); //");
// echo u("?title=Working? Or not?");

########################################
# DEFAULT WELOCOME TEXT in 
# public/content/index.inc.php
########################################

function FUNC_HELLO_WORLD(){
FUNC_MARKDOWN('content/markdown/helloworld.md'); 

echo '<strong>Boilerplate information:</strong><br>';
echo 'Version: <span class="text-grey">'.CON_VERSION.' Build: '.CON_VERSION_BUILD.'</span>';
echo '<br><strong>Release Notes:&nbsp;</strong><a href="pid=mid&mid=release">Click here</a>';
}



