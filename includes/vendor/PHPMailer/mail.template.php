<?php 
########################################
# PHP MAILER TEMPLATE
########################################
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
    $mail->setFrom('e-mail', 'name');                   // Optional name
    
    # -- REPLY-TO --
    $mail->addReplyTo('e-mail', 'name');                // Optional name
    
    # -- RECIPIENTS(S) --  
    $mail->addAddress('joe@example.net', 'Joe User');   // Optional name
    $mail->addAddress('ellen@example.com');              
    $mail->addCC('cc@example.com');
    $mail->addBCC('bcc@example.com');

    // Attachments
    $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
    $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

    # -- CONTENT --
    $mail->Subject = "Here is the subject";
    $mail->Body    = "This is the HTML message body";
    # $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
# -- PHP MAILER ABV --
?>

<div class="container<?= CON_DIV_STYLE; ?>">
    <?php # -- PHPMailer RESPONSE BLW --
    $mail->send();
    echo '<div class="text-center alert alert-success" role="alert">';
    echo 'MESSAGE HAS BEEN SENT';
    echo '</div>';
    } catch (Exception $e) {
    echo '<div class="text-center alert alert-danger" role="alert">';
    echo "MESSAGE HAS <b>NOT</b> BEEN SENT - {$mail->ErrorInfo}";
    echo '</div>';
    }
    # -- PHPMailer RESPONSE ABV -- ?> 
</div>
