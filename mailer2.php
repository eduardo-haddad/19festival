<?php

$email_message = '
<html>
        <head></head>
        <body>
                <table style="border: 1px solid; width: 800px; font-family: Helvetica">
                <tr>
                        <th style="border: 1px solid; width: 50%; background-color: #5B777B; color: white">nome</th>
                        <th style="border: 1px solid; width: 30%; background-color: #5B777B; color: white">email</th>
                        <th style="border: 1px solid; background-color: #5B777B; color: white">pais</th>
                </tr>
                <tr>
                        <td style="border: 0px solid">'.$_POST['nome'].'</td>
                        <td style="border: 0px solid">'.$_POST['email'].'</td>
                        <td style="border: 0px solid">'.$_POST['listaPaises'].'</td>
                </tr>
        </table>
                
        </body>
</html>';


require_once('phpmailer/class.phpmailer.php');
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$mail = new PHPMailer;


//$mail->SMTPDebug = 3;                               // Enable verbose debug output



$mail->CharSet = 'UTF-8';

$mail->From = '19festival.com';
$mail->FromName = '19º Festival';
$mail->addAddress('eduardo.torquemada@gmail.com');     // Add a recipient

$mail->Subject = 'Inscrição newsletter';
$mail->Body    = $email_message;
$mail->AltBody = strip_tags($email_message);





if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['listaPaises'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $mail->send() or die('<span class="text-danger">Erro no envio / Error sending mail</span>');
            echo '<span class="text-success send-true">'; pten(
                'Inscrição efetuada com sucesso!',
                'You have been successfully subscribed'); echo '</span>';
        }
} else {
        echo '<span class="text-danger">'; pten(
                'Erro:<br>Todos os campos devem ser preenchidos',
                'Error<br>All fields must be filled'); echo '</span>';
}



?>
