<?php

$email_message = '
<html>
        <head>
                <title>Supersonic Music - Contact Form</title>
        </head>
        <body>
                <h3>Nome: <span style="font-weight: normal;">' . $_POST['name'] . '</span></h3>
                <h3>Email: <span style="font-weight: normal;">' . $_POST['email'] . '</span></h3>
                <h3>País: <span style="font-weight: normal;">' . $_POST['pais'] . '</span></h3>

                <table style="border: 1px solid; width: 800px; font-family: Helvetica">
                <tr>
                        <th style="border: 1px solid; width: 50%; background-color: #5B777B; color: white">nome</th>
                        <th style="border: 1px solid; width: 30%; background-color: #5B777B; color: white">email</th>
                        <th style="border: 1px solid; background-color: #5B777B; color: white">pais</th>
                </tr>
                <tr>
                        <td style="border: 0px solid">'.$_POST['name'].'</td>
                        <td style="border: 0px solid">'.$_POST['email'].'</td>
                        <td style="border: 0px solid">'.$_POST['pais'].'</td>
                </tr>
        </table>
                
        </body>
</html>';


require_once('phpmailer/class.phpmailer.php');

$mail = new PHPMailer;


//$mail->SMTPDebug = 3;                               // Enable verbose debug output



$mail->CharSet = 'UTF-8';

$mail->From = '19festival.com';
$mail->FromName = '19º Festival';
$mail->addAddress('eduardo.torquemada@gmail.com');     // Add a recipient

$mail->Subject = 'Inscrição newsletter';
$mail->Body    = $email_message;
$mail->AltBody = strip_tags($email_message);





if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['pais'])) {
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $mail->send() or die('<span class="text-danger">Erro no envio / Error sending mail</span>');
            echo '<span class="text-success send-true">Email enviado! / Email was sent!</span>';
        }
} else {
        echo '<span class="text-danger">Todos os campos devem ser preenchidos / All fields must be filled</span>';
}


?>
