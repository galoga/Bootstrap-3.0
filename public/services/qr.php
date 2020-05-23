<?php 
# -- AUTOLOADER -- 
include '../../includes/vendor/phpqrcode/qrlib.php';

$value = $_GET['qr'];
$size  = $_GET['qrsize'];  
// we need to be sure ours script does not output anything!!! 
// otherwise it will break up PNG binary! 
     
ob_start("callback"); 
     
# here DB request or some processing 
# $codeText = $param; 
# end of processing here 
    
$debugLog = ob_get_contents(); 
ob_end_clean(); 
     
// outputs image directly into browser, as PNG stream 
QRcode::png($value, false, 'L', $size, 2);

###########################################
# -- TO CALL SERVICE --
# echo '<img src="services/qr.php?qr='.$_GET['qr'].'&qrsize='.$_GET['qrsize'].'" />'   
###########################################
