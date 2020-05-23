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
    <div ="row">
        <div class="col-md-12">
	        <h2>Snippets</h2>
	        <h5>&nbsp;</h5>

<?php 
	$items = 3; 
	printf("There are %d items in your basket", $items);
	echo "<br>";
	echo "There are $items items in your basket";
	echo "<br>";
	
	# -- Constant som Array - med ändrad start numrerering --
	const CON_TEST = [10 =>'ola@airleap.se, ola@strangeways.org, security@airleap.se','46708587578'];
	echo "<br>";
	echo CON_TEST[10];
	echo "<br>";
	echo CON_TEST[11];
	echo "<br>";
	
	# Array 
	$tlx_ARN = ['ARNKP' => 'ARNKPXH@airmsg.net', 'ARNKR' => 'ARNKRXH@airmsg.net', 'ARNKO' => 'ARNKOLPA@airmsg.net'];
	ksort($tlx_ARN);
	echo "ARNKP e-post: ".$tlx_ARN['ARNKP'];
	echo "<br>";
	echo $tlx_ARN['ARNKR'];
	echo "<br>";
	echo "<br>";		
?>

<? # Array Foreach ?>
<?php foreach($tlx_ARN as $dep => $adr): ?>
	<?php echo $dep; ?> - <a href="mailto:<?php echo $adr; ?>"><?php echo $adr; ?></a></br>
<?php endforeach; ?>

<br>

<?php
# Skapa ARRAY
$tel_leap = [
'LEAP OCC' => '46-8-6396520', 
'LEAP MCC' => '46-8-6396519', 
'LEAP CCC' => '46-8-6396538',
'LEAP DGO' => '46-8-6396529',
'LEAP STN ARN' => '46-8-6396520'
];

# Addera till en Array 
$tel_leap['LEAP KEN '] = '46-70-8587578';

#  Sortera Array 
ksort($tel_leap);
?> 
<br>
<?php foreach($tel_leap as $dep => $tel): ?>
	<?= $dep; ?> <a href="tel:<?= $tel; ?>"><?= $tel; ?></a></br>
<?php endforeach; ?>	
<br>
<?php 	
	$func = 'Globe';	
	
	function func_echoText($test = 'World'){
	echo 'Hello '.$test;	
	}

	func_echoText();
?>
<br>
<br>

<?php
$name = 'Marvin';
$day = 'Thursday';

if ($name == 'Arthur Dent' && $day == 'Thursday') :
    echo 'I could never get the hang of Thursdays.';
elseif ($name == 'Marvin' || $day == 'Wednesday') :
    echo "I've got this terrible pain in all the diodes down my left-hand side.";
else :
    echo 'Is that really a piece of fairy cake?';
endif;
?>

<br>
<br>

<?php 
# $b = 0;
# $b ? print 'TRUE' : print "FALSE";
?>



<?php
$valid = 10;
echo ($valid >= 10) ? $x = 'yes' : $x = 'no';
?>

<br>
<br>
<?php
$airlines = [
'SAS, SK' => 			'sas.se', 
'Air LEAP, LPA' => 		'airleap.se', 
'Air Canada, CA' => 	'aircanada.ca'
];

$airlines['British Airways, BA'] = 'ba.com';

ksort($airlines);

# echo "<pre>";
var_dump($airlines);
# echo "</pre>";

?> 
<?php foreach($airlines as $key => $value): ?>  
<?= $key; ?> - <a href="http://www.<?php echo $value; ?>" target="_blank"><?= $value; ?></a></br>
<?php endforeach; ?>
<br>

<?php foreach($airlines as $value): ?>  
<?= $value; ?></br>
<?php endforeach; ?>
<br>



<?php 
$fields_string = '
{"fields":
   {"customers":[{"name":"john","id":"d1"},
                 {"name":"mike","id":"d2"},
                 {"name":"andrew","id":"d3"},
                 {"name":"peter","id":"d4"}]
   }
}';

$obj = json_decode($fields_string);
$fields_detail = $obj->{"fields"}->{"customers"};

foreach ($fields_detail as $customer) {
  echo $customer->name.' ';
  echo $customer->id.'<br>';
}

?>

<br>

<?php 
$string = ' 12      WD  20      39  ';
//Remove all spaces from the string
//using str_replace.
$string = str_replace(' ', '', $string);
 
//var_dump the new string.
# var_dump($string);
echo $string;
?>

<br>
 

<?php
# function FUNC_msg($func1, $func2) {
#    echo 'Hello '.$func1.''.$func2.' <br>';
# }

# FUNC_msg('World', '!'); // call the function
?>

<br>

<?php
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
<br>
<br>
<?php
# ----- Init the Function -----
function FUNC_helloWorld($func1, $func2) {
    echo "Hello $func1$func2 <br>";
}
# ----- Call the Function -----
FUNC_helloWorld('World', '!'); 
?>
<br>
<br>
<?php
function printOnBoardingPass($time) {
    echo "Boarding gate close $time min before departure";
}
printOnBoardingPass(15); 
?>
<br>
<br>
<?php
$si = 'If var isset, echo $si';
echo isset($si) ? $si : 'NULL';  # Would return 'If var isset, echo $si'
?>
<br>
<br>
<?php 
$time = 1900;
echo 'UTC '.gmdate("H:i", strtotime($time)).'<br>';
echo 'LT  '.date("H:i", strtotime($time));
?> 

<br>
<br>
<h2>Time</h2>
<?php 
$localtime = localtime();
$localtime_assoc = localtime(time(), true);
print_r($localtime);
print_r($localtime_assoc);
?>
 
<br>
<br>



<input type="checkbox" checked data-toggle="toggle" data-size="lg">
<input type="checkbox" checked data-toggle="toggle">
<input type="checkbox" checked data-toggle="toggle" data-size="sm">
<input type="checkbox" checked data-toggle="toggle" data-size="xs">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="primary">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="secondary">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="success">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="danger">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="warning">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="info">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="light">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="dark">

<br>
<br>

<?php 
$pax_tot = 10; 
$flts_tot = 2;
echo $load_percent = ($pax_tot)/($flts_tot*33)*100 . " %";
?>


        </div>
    </div>
</div>
</section>
