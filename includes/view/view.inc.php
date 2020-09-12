<?php 
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Galoga Tech
# Contact : 		hello@galoga.tech
# Created date : 	2019-12-14
# Update date :  	2020-04-15
########################################

########################################
# LOADED IN "autoloader.inc.php"
########################################

########################################
# THIS IS THE MAIN PAGE TEMPLATE 
########################################
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php # -- META -- ?>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
<?php # -- ROBOTS -- ?>
	<meta name="robots" content="noindex">
	<meta name="googlebot" content="noindex">
<?php # -- BS CSS -- ?>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
<?php # -- GALOGA CSS -- ?>
	<link rel="stylesheet" type="text/css" href="css/style.css">
<?php # -- CSS / JAVA SCRIPT TOGGLE CHK BOX -- ?>
	<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
<?php # -- FONTS -- ?>
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Courier+Prime&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Orbitron&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=B612+Mono|Covered+By+Your+Grace|Sedgwick+Ave+Display&display=swap" rel="stylesheet">
<?php # -- ICONS -- ?>
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	<link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/3.6.95/css/materialdesignicons.min.css">
	<!--  FA 4.X  -->
	<!-- <link rel="stylesheet" type="text/css"href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<!--  FA 5.X  -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/all.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.1/css/v4-shims.css">
	<script src="https://kit.fontawesome.com/1eee006928.js"></script>
<?php # --  FAV ICONS -- ?>
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="imges/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="150x150" href="images/favicon/mstile-150x150.png">
	<link rel="manifest" href="images/favicon/site.webmanifest">
	<link rel="mask-icon" href="images/favicon/safari-pinned-tab.svg" color="#337cf7">
	<link rel="shortcut icon" href="images/favicon/favicon.ico">
	<meta name="msapplication-TileColor" content="#2d89ef">
	<meta name="msapplication-config" content="images/favicon/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<title><?= CON_PAGE_TITLE; ?></title>
</head>
<body>	
<?php # -- NAVIGATION -- ?>
	<nav class="navbar navbar-expand-lg fixed-top navbar-<?= CON_NAV_COLOUR; ?> bg-<?= CON_NAV_COLOUR; ?> <?= CON_NAV_BORDER; ?>">
	<?php # -- nav class="navbar navbar-expand-lg navbar-light" style="background-color: #000000;" -- ?> 
		<a class="navbar-brand text-logo" href="index.php"><?= CON_SITE_NAME; ?></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
	    		<span class="navbar-toggler-icon"></span>
			</button>
    <?php include '../includes/view/view_navigation.inc.php'; # -- NAV LINKS FUNCTION --  ?>
    </nav>									
<main>
<?php # -- CONTENT SWITCH HANDLER BLW -- 
FUNC_MAIN_CONTENT_SWITCH();
# -- CONTENT SWITCH HANDLER ABV  -- ?>
</main>
<footer>
<?php # -- FOOTER BLW -- 
if(CON_FOOTER_TYPE == 'fixed'): 
	echo '<nav class="navbar fixed-bottom navbar-'.CON_FOOTER_COLOUR.' bg-'.CON_FOOTER_COLOUR.' '.CON_FOOTER_BORDER.'"><span class="small text"     style="color: grey">'.CON_SITE_COPYRIGHT.' '.CON_Y.' '.CON_SITE_FOOTER.' Version: '.CON_VERSION.' '.CON_HOMAGE_INFO.'</span></nav>';
elseif(CON_FOOTER_TYPE == 'two-col'):
	require_once 'content/footer/footer_col_02.inc.php';
elseif(CON_FOOTER_TYPE == 'three-col'):
	require_once 'content/footer/footer_col_03.inc.php';
elseif(CON_FOOTER_TYPE == 'four-col'):
	require_once 'content/footer/footer_col_04.inc.php';
elseif(CON_FOOTER_TYPE == 'basic'):
    echo '<br><div class="container border-top small" style="color: grey"><p>'.CON_SITE_COPYRIGHT.' '.CON_Y.' '.CON_SITE_FOOTER.' Ver : '.CON_VERSION.'</p></div>';
endif;
# -- FOOTER ABV -- ?>
</footer>
<?php require_once 'view_scripts.inc.php'; ?>
</body>
</html>


