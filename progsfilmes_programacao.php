<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/expos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/home.js"></script>
</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include "elements/mapa.html"; ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container">

        <!-- HEADER -->
        <header><?php include "elements/header.html"; ?></header>
        <!-- /HEADER -->

        	<div style="height:37px; clear: both">&nbsp;</div>

        <!-- 	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span>agenda</span>      
                </div>
        	</div> -->

                        
           <div class="row">
                <div class="col-xs-12 breadcrumb">
                    <?php pten('<span>programas de filmes > </span><span style="text-decoration: underline">programação</span>',
                     '<span>film programs > </span><span style="text-decoration: underline">schedule</span>');   ?>     
                </div>
            </div>     

            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px"><a href="progsfilmes.php#prog1">Programa #1</a> | <a href="progsfilmes.php#prog2">Programa #2</a> | <a href="progsfilmes.php#prog3">Programa #3</a> | <a href="progsfilmes_programacao.php">Programação</a></p>      
                </div>
            </div>    
                                        
                        
            <div class="row" style="clear: both;">
                <div class="col-xs-12">
                    <div class="titulo n"><span><?php pten('SEMANA DE ABERTURA | 8 A 10 DE OUTUBRO', 'OPENING WEEK | OCTOBER 8-10'); ?></span></div>
                    
                    <p class="bold f"><?php pten('PROGRAMA DE FILMES OBRAS SELECIONADAS', 'PROGRAMA DE FILMES OBRAS SELECIONADAS///'); ?></p>
                    
                    <p class="f"><span class="bold"><?php pten('08/OUT (QUINTA) | 14HS ÀS 17H30 | SESC POMPEIA| TEATRO', 
                                                               '08/OUT (QUINTA) | 14HS ÀS 17H30 | SESC POMPEIA| TEATRO'); ?></span><br />
                    <?php pten('14hs - Programa #1 ', 'XXXXXXX'); ?><br />
                    <?php pten('15hs - Programa #2 ', 'XXXXXXX'); ?><br />
                    <?php pten('16h15 - Programa #3', 'XXXXXXX'); ?></p>

                    <p class="f"><span class="bold"><?php pten('09/OUT (SEXTA) | 14HS ÀS 17H30 | SESC POMPEIA| TEATRO', 
                                                               '09/OUT (SEXTA) | 14HS ÀS 17H30 | SESC POMPEIA| TEATRO'); ?></span><br />
                    <?php pten('14hs - Programa #1 ', 'XXXXXXX'); ?><br />
                    <?php pten('15hs - Programa #2 ', 'XXXXXXX'); ?><br />
                    <?php pten('16h15 - Programa #3', 'XXXXXXX'); ?></p>

                    <p class="f"><span class="bold"><?php pten('10/OUT (SABADO) | 14HS ÀS 17H30 | SESC POMPEIA| TEATRO', 
                                                               '10/OUT (SABADO) | 14HS ÀS 17H30 | SESC POMPEIA| TEATRO'); ?></span><br />
                    <?php pten('16h15 - Programa #3', 'XXXXXXX'); ?></p>
 
                 </div>
            </div>

            <div class="row link_rodape" style="margin-top: 32px">
            <div ></div>
                <div class="col-md-6 informacoes" style="left: -15px;">
                    <?php 
                    pten('<p class="g bold">SESC POMPEIA</p>
                    <p style="clear: both" class="g">
                    Rua Clélia, 93<br>
                    São Paulo, SP<br>
                    Tel.: 11 3871 7700 | 0800 11 8220 <br>
                    www.sescp.org.br</p>

                    <p class="g">VISITACÃO<br>
                    de 6 de outubro a 6 de dezembro de 2015<br>
                    terça a sábado das 9h às 22h;<br>
                    domingos e feriados das 9h às 20h</p>',

                    '<p class="g bold">SESC POMPEIA</p>
                    <p style="clear: both" class="g">
                    Rua Clélia, 93<br>
                    São Paulo, SP, BRAZIL<br>
                    Tel.: 11 3871 7700 | 0800 11 8220 <br>
                    www.sescp.org.br</p>

                    <p class="g">VISITATION<br>
                    october 6 to december 6, 2015<br>
                    terça a sábado das 9h às 22h;<br>
                    domingos e feriados das 9h às 20h</p>');


                    ?>



                </div>
                <div class="col-md-6 informacoes" style="left: -15px;">
                    <?php
                    pten('<p class="l bold">Galpão VB</p>
                    <p class="l">Av. Imperatriz Leopoldina, 1150<br>
                    São Paulo, SP<br>
                    Tel.: 11 3645 0516<br>
                    www.videobrasil.org.br</p>

                    <p class="l">visitação<br>
                    de 8 de outubro a 6 de dezembro de 2015<br>
                    segundas, quartas, quintas e sextas das 13h às 19h; <br>
                    terças das 14h às 21h</p>',

                    '<p class="l bold">Galpão VB</p>
                    <p>Av. Imperatriz Leopoldina, 1150<br>
                    São Paulo, SP, Brazil<br>
                    Tel.: +55 11 3645 0516<br>
                    www.videobrasil.org.br</p>

                    <p>visitation<br>
                    xxxx<br>
                    segundas, quartas, quintas e sextas das 13h às 19h; <br>
                    terças das 14h às 21h</p>');
                    ?>

                </div>

            </div>

            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

