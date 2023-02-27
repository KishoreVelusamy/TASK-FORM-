<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;




require 'vendor/autoload.php';




$mail = new PHPMailer(true);



try {
    
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                    
    $mail->isSMTP();                                          
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                 
    $mail->Username   = 'internbatch0123@gmail.com';         
    $mail->Password   = 'wvgbelvipdikpubf';                   
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;          
    $mail->Port       = 465;    
    
    

    //Recipients
    $mail->setFrom('internbatch0123@gmail.com', $_POST['name']);

    $mail->addAddress($_POST['email']); 

    $mail->isHTML(true);   

    $mail->Subject = $_POST['subject'];
    
    $mail->Body    = $_POST['message'];



    if($mail->send()){
        echo "Message has been sent successfully....!!!!";
        echo "<script>
        location.href = 'formpage.php'
        </script>";
    }
    
} 


catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
} 
    ?>
   