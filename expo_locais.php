<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Locais' : 'Venues';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title><?= ($idioma == 'pt' ? $titulo . ' - 19º Festival de Arte Contemporânea Sesc_Videobrasil' : $titulo . ' - 19th Contemporary Art Festival Sesc_Videobrasil')  ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/home.js"></script>
    <script>
        $(document).ready(
            function(){
                paletaArtistas($('.sobre-expo p:nth-child(1)'));
                paletaArtistas($('.sobre-expo p:nth-child(2)'));
                paletaArtistas($('.sobre-expo p:nth-child(3)'));
                paletaArtistas($('.sobre-expo p:nth-child(4)'));
                paletaArtistas($('.sobre-expo p:nth-child(5)'));
                paletaArtistas($('.sobre-expo p:nth-child(6)'));
                paletaArtistas($('.sobre-expo p:nth-child(7)'));
                paletaArtistas($('.sobre-expo p:nth-child(8)'));
                paletaArtistas($('.sobre-expo p:nth-child(9)'));
        
            }
        );
    </script>

</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include "elements/mapa.html"; ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container">

        <!-- HEADER -->
        <header><?php include "elements/header.html"; ?></header>
        <!-- /HEADER -->

        	<div style="height:36px; clear: both">&nbsp;</div>

        	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span><?php pten('exposições > <span class="underline">obras selecionadas</span>', 
                                     'exhibitions > <span class="underline">selected artworks</span>');  ?></span>      
                </div>
        	</div>

             
            <!-- EXPO 1 -->
            <div class="row" style="clear: both; margin-bottom: 20px">

                <div class="col-sm-12 col-md-6 expo-mapa" >
                    <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1063.3060561082916!2d-46.6830522342262!3d-23.52564148682573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef809b81cc479%3A0xbf35620145c1e2cc!2sSesc+Pompeia!5e0!3m2!1spt-BR!2sbr!4v1439763126183" width="450" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                     -->
                </div>

                <div class="col-sm-12 col-md-6 sobre-expo h" style="float: right;">



                    <?php pten( 
                    ////EXPO 1 PT
                    '<p class="titulo">sesc pompeia</p>
                    <p style="display: inline"><span class="bold upper">galpão:</span> <span class="upper">exposição panoramas do sul | artistas convidados</span><br /> 
                    <span class="bold upper">convivência:</span> <span class="upper">exposição panoramas do sul | obras selecionadas + performances</span><br /> 
                    <span class="bold upper">teatro:</span> <span class="upper">programas de filmes | obras selecionadas e gabriel abrantes</span><br /> <br /> 

                    Rua Clélia, 93 <br /> 
                    São Paulo, SP<br /> 
                    tel.: 11 3871 7700 | 0800 11 8220 <br /> 
                    www.sescp.org.br <br /> <br /> 

                    Visitação <br /> 
                    de 6 de outubro a 6 de dezembro de 2015 <br /> 
                    terça a sábado das 9h às 22h; <br /> 
                    domingos e feriados das 9h às 20h</p>',

                    //EXPO 1 EN
                    '<p class="titulo">sesc pompeia</p>
                    <p style="display: inline"><span class="bold upper">galpão:</span> <span class="upper">southern panoramas | artistas convidados</span><br /> 
                    <span class="bold upper">convivência:</span> <span class="upper">exposição panoramas do sul | obras selecionadas + performances</span><br /> 
                    <span class="bold upper">teatro:</span> <span class="upper">programas de filmes | obras selecionadas e gabriel abrantes</span><br /> <br /> 

                    Rua Clélia, 93 <br /> 
                    São Paulo, SP<br /> 
                    tel.: 11 3871 7700 | 0800 11 8220 <br /> 
                    www.sescp.org.br <br /> <br /> 

                    Visitação <br /> 
                    de 6 de outubro a 6 de dezembro de 2015 <br /> 
                    terça a sábado das 9h às 22h; <br /> 
                    domingos e feriados das 9h às 20h</p>');

                    ?>
                    
                </div>

            </div>
            <!-- /EXPO 1 -->

            <!-- EXPO 2 -->
            <div class="row" style="clear: both; margin-bottom: 20px">

                <div class="col-sm-12 col-md-6 expo-mapa" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3658.012039038297!2d-46.73051!3d-23.5320694!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef8bd13c7e961%3A0x1924d04be6bbad85!2sAssocia%C3%A7%C3%A3o+Cultural+Videobarsil!5e0!3m2!1spt-BR!2sbr!4v1439766394742" width="450" height="281" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-sm-12 col-md-6 sobre-expo h" style="float: right;">



                    <?php pten( 
                    ////EXPO 2 PT
                    '<p class="titulo">galpão_vb </p>
                    <p style="display: inline"><span class="upper">exposição panoramas do sul | projetos comissionados<br /> 
                    programas de filmes | obras selecionadas e gabriel abrantes <br /><br /> 

                    av. imperatriz leopoldina, 1150 <br /> 
                    São Paulo, SP<br /> 
                    tel.: 11 3645 0516 <br /> 
                    www.videobrasil.org.br <br /> <br /> 

                    Visitação <br /> 
                    de 8 de outubro a 6 de dezembro de 2015 <br /> 
                    segundas, quartas, quintas e sextas das 13h às 19h; <br /> 
                    terças das 14h às 21h </p>',

                    //EXPO 2 EN
                    '<p class="titulo">sesc pompeia</p>
                    <p style="display: inline"><span class="bold upper">galpão:</span> <span class="upper">southern panoramas | artistas convidados</span><br /> 
                    <span class="bold upper">convivência:</span> <span class="upper">exposição panoramas do sul | obras selecionadas + performances</span><br /> 
                    <span class="bold upper">teatro:</span> <span class="upper">programas de filmes | obras selecionadas e gabriel abrantes</span><br /> <br /> 

                    Rua Clélia, 93 <br /> 
                    São Paulo, SP<br /> 
                    tel.: 11 3871 7700 | 0800 11 8220 <br /> 
                    www.sescp.org.br <br /> <br /> 

                    Visitação <br /> 
                    de 6 de outubro a 6 de dezembro de 2015 <br /> 
                    terça a sábado das 9h às 22h; <br /> 
                    domingos e feriados das 9h às 20h</p>');

                    ?>
                    
                </div>

            </div>
            <!-- /EXPO 2 -->

            <br style="margin-bottom: 13px" />



            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

