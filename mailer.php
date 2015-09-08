<?php
include_once('phpmailer/class.phpmailer.php');

if(isset($_POST['submit'])){

    $mail             = new PHPMailer(); // defaults to using php "mail()"



    $mail->SetFrom('comunicacao@videobrasil.org.br', 'Videobrasil');


    $address = "eduardo.torquemada@gmail.com";
    $mail->AddAddress($address, "Eduardo Haddad");

    $mail->Subject    = "PHPMailer Test Subject via mail(), basic";
    $body = "<i>Mail body in HTML</i>";
    $mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

    $mail->MsgHTML($body);


    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message sent!";
    }

}
