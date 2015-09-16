<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

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


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
        <title><?= ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil')  ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/home.js"></script>

</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include "elements/mapa.html"; ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container" style="min-height:500px">

        <!-- HEADER -->
        <header><?php include "elements/header.html"; ?></header>
        <!-- /HEADER -->

        	<div style="height:36px; clear: both">&nbsp;</div>


            
           
            <div class="row" style="clear: both;">

              

                <div class="col-sm-12 col-md-6 h relative" style="float: left;">
                    <?php

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
                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    
                </div>
            </div>

           
                
                

            <br style="margin-bottom: 13px" />

   

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-33383260-2', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>

