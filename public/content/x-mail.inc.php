<?php 
########################################
# © Copyright : All rights reserved 2020
# Created by : 		Galoga Tech 
# Created date : 	2020-02-10
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

########################################
# PHP MAILER 
# 
########################################

# -- PHP MAILER BLW --
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    $mail = new PHPMailer(true);

    try {
    # -- DEBUG --
    #$mail->SMTPDebug = SMTP::DEBUG_SERVER;                     
    #$mail->SMTPDebug = SMTP::DEBUG_CONNECTION;     

    # -- HOST --          
    $mail->isSMTP(); 
    $mail->Host = CON_PHPMAILER_HOST; 
    $mail->SMTPAuth = true; 
    $mail->Username = CON_PHPMAILER_USER; 
    $mail->Password = CON_PHPMAILER_PASS; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Port       = 587;                                   
    $mail->CharSet    = 'UTF-8';
           
    # -- SENDER --
    $mail->setFrom('ola@strangeways.org');
    $mail->addAddress('ola@sways.se', 'Ola Strangeways');               // Name is optional
    $mail->addReplyTo('ola@strangeways.org', 'Ola Strangeways');

    # -- CONTENT --
    $mail->Subject = "Subject";
    $mail->Body    = "Body\r
    Line 1\r
    Line 2\r
    ";
    # $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    # -- PHP MAILER ABV --
?>
<section class="section">
<div class="container<?= CON_DIV_STYLE; ?>">
	<h2>This is the sub-start page template</h2>
	<h5>Save this file as : file.inc.php</h5>
</div>
<div class="container<?= CON_DIV_STYLE; ?>">
    <?php 
    $mail->send();
    echo '<div class="text-center alert alert-success" role="alert">';
    echo 'MESSAGE HAS BEEN SENT';
    echo '</div>';
    } catch (Exception $e) {
    echo '<div class="text-center alert alert-danger" role="alert">';
    echo "MESSAGE HAS <b>NOT</b> BEEN SENT - {$mail->ErrorInfo}";
    echo '</div>';
    }
    ?> 
</div>
</section>
