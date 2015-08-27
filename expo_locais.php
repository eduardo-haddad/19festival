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
                    <span><?php pten('exposições > <span class="underline">locais</span>', 
                                     'exhibitions > <span class="underline">venues</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="expo_convidados.php"><?php pten('artistas convidados', 'guest artists') ?></a> | 
                        <a href="expo_projetos.php"><?php pten('projetos comissionados', 'Comissioned projects') ?></a> | 
                        <a href="expo_obras.php"><?php pten('obras selecionadas', 'Selected artworks') ?></a> | 
                        <a href="expo_paralela.php"><?php pten('exposição paralela', 'Parallel exhibition') ?></a> |
                        <a href="expo_locais.php"><span style="text-decoration: underline"><?php pten('Locais', 'Venues') ?></span></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

             
            <!-- EXPO 1 -->
            <div class="row" style="clear: both; margin-bottom: 20px">

                <div class="col-sm-12 col-md-6 expo-mapa" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1063.3060561082916!2d-46.6830522342262!3d-23.52564148682573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef809b81cc479%3A0xbf35620145c1e2cc!2sSesc+Pompeia!5e0!3m2!1spt-BR!2sbr!4v1439763126183" width="450" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
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
                    Tel.: 11 3871 7700 | 0800 11 8220 <br /> 
                    <a href="http://www.sescsp.org.br" target="_blank" style="color: inherit;">www.sescsp.org.br</a> <br /> <br /> 

                    Visitação <br /> 
                    de 6 de outubro a 6 de dezembro de 2015 <br /> 
                    terça a sábado das 9h às 22h; <br /> 
                    domingos e feriados das 9h às 20h<br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Sesc+Pompeia/@-23.5256693,-46.6832229,17z/data=!4m7!1m4!3m3!1s0x94cef809b81cc479:0xbf35620145c1e2cc!2sSesc+Pompeia!3b1!3m1!1s0x94cef809b81cc479:0xbf35620145c1e2cc" target="_blank" style="color: inherit;">Como chegar</a>
                    </p>',

                    //EXPO 1 EN
                    '<p class="titulo">sesc pompeia</p>
                    <p style="display: inline"><span class="bold upper">galpão:</span> <span class="upper">southern panoramas | artistas convidados</span><br /> 
                    <span class="bold upper">convivência:</span> <span class="upper">exposição panoramas do sul | obras selecionadas + performances</span><br /> 
                    <span class="bold upper">teatro:</span> <span class="upper">programas de filmes | obras selecionadas e gabriel abrantes</span><br /> <br /> 

                    Rua Clélia, 93 <br /> 
                    São Paulo, SP<br /> 
                    Tel.: 11 3871 7700 | 0800 11 8220 <br /> 
                    <a href="http://www.sescsp.org.br" target="_blank" style="color: inherit;">www.sescsp.org.br</a> <br /> <br /> 

                    Visitação <br /> 
                    de 6 de outubro a 6 de dezembro de 2015 <br /> 
                    terça a sábado das 9h às 22h; <br /> 
                    domingos e feriados das 9h às 20h<br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Sesc+Pompeia/@-23.5256693,-46.6832229,17z/data=!4m7!1m4!3m3!1s0x94cef809b81cc479:0xbf35620145c1e2cc!2sSesc+Pompeia!3b1!3m1!1s0x94cef809b81cc479:0xbf35620145c1e2cc" target="_blank" style="color: inherit;">Como chegar</a>
                    </p>');

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
                    programas de filmes | obras selecionadas e gabriel abrantes</span><br /><br /> 

                    Av. Imperatriz Leopoldina, 1150 <br /> 
                    São Paulo, SP<br /> 
                    Tel.: 11 3645 0516 <br /> 
                    <a href="http://www.videobrasil.org.br" target="_blank" style="color: inherit;">www.videobrasil.org.br</a><br /> <br /> 

                    Visitação <br /> 
                    de 8 de outubro a 6 de dezembro de 2015 <br /> 
                    segundas, quartas, quintas e sextas das 13h às 19h;<br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Associa%C3%A7%C3%A3o+Cultural+Videobarsil/@-23.5320694,-46.73051,17z/data=!3m1!4b1!4m7!1m4!3m3!1s0x94cef8bd1bb00695:0x9779d4bc60b1b706!2sAv.+Imperatriz+Leopoldina,+1150+-+Vila+Leopoldina,+S%C3%A3o+Paulo+-+SP!3b1!3m1!1s0x94cef8bd13c7e961:0x1924d04be6bbad85" target="_blank" style="color: inherit;">Como chegar</a>
                    </p>',

                    //EXPO 2 EN
                    '<p class="titulo">galpão_vb </p>
                    <p style="display: inline"><span class="upper">southern panoramas | projetos comissionados<br /> 
                    programas de filmes | obras selecionadas e gabriel abrantes</span><br /><br /> 

                    Av. Imperatriz Leopoldina, 1150 <br /> 
                    São Paulo, SP<br /> 
                    Tel.: 11 3645 0516 <br /> 
                    <a href="http://www.videobrasil.org.br" target="_blank" style="color: inherit;">www.videobrasil.org.br</a><br /> <br /> 

                    Visitação <br /> 
                    de 8 de outubro a 6 de dezembro de 2015 <br /> 
                    segundas, quartas, quintas e sextas das 13h às 19h;<br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Associa%C3%A7%C3%A3o+Cultural+Videobarsil/@-23.5320694,-46.73051,17z/data=!3m1!4b1!4m7!1m4!3m3!1s0x94cef8bd1bb00695:0x9779d4bc60b1b706!2sAv.+Imperatriz+Leopoldina,+1150+-+Vila+Leopoldina,+S%C3%A3o+Paulo+-+SP!3b1!3m1!1s0x94cef8bd13c7e961:0x1924d04be6bbad85" target="_blank" style="color: inherit;">Como chegar</a>
                    </p>');

                    ?>
                    
                </div>

            </div>
            <!-- /EXPO 2 -->

            <!-- EXPO 3 -->
            <div class="row" style="clear: both; margin-bottom: 20px">

                <div class="col-sm-12 col-md-6 expo-mapa" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.108875189945!2d-46.715538199999955!3d-23.564532899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce564ddd8bf503%3A0x54e382f737fb5484!2sPa%C3%A7o+das+Artes!5e0!3m2!1spt-BR!2sbr!4v1439768334431" width="450" height="279" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>

                <div class="col-sm-12 col-md-6 sobre-expo h" style="float: right;">



                    <?php pten( 
                    ////EXPO 3 PT
                    '<p class="titulo">paço das artes</p>
                    <p style="display: inline"><span class="upper">exposição paralela | quem nasce pra aventura não toma outro rumo</span><br /><br /> 

                    Av. Universidade, 1 <br /> 
                    São Paulo, sp <br /> 
                    Tel.: 11 3814 4832 | 3815-4895 <br /> 
                    <a href="http://www.pacodasartes.org.br" target="_blank" style="color: inherit;">www.pacodasartes.org.br</a><br /><br /> 

                    Visitação 
                    de 9 de outubro de 2015 a 10 de janeiro de 2016 <br /> 
                    quarta a sexta das 10h às 19h; <br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Pa%C3%A7o+das+Artes/@-23.5645329,-46.7155382,17z/data=!3m1!4b1!4m2!3m1!1s0x94ce564ddd8bf503:0x54e382f737fb5484" target="_blank" style="color: inherit;">Como chegar</a>
                    </p>',

                    //EXPO 3 EN
                    '<p class="titulo">paço das artes</p>
                    <p style="display: inline"><span class="upper">exposição paralela | quem nasce pra aventura não toma outro rumo</span><br /><br /> 

                    Av. Universidade, 1 <br /> 
                    São Paulo, sp <br /> 
                    Tel.: 11 3814 4832 | 3815-4895 <br /> 
                    <a href="http://www.pacodasartes.org.br" target="_blank" style="color: inherit;">www.pacodasartes.org.br</a><br /><br /> 

                    Visitação 
                    de 9 de outubro de 2015 a 10 de janeiro de 2016 <br /> 
                    quarta a sexta das 10h às 19h; <br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Pa%C3%A7o+das+Artes/@-23.5645329,-46.7155382,17z/data=!3m1!4b1!4m2!3m1!1s0x94ce564ddd8bf503:0x54e382f737fb5484" target="_blank" style="color: inherit;">Como chegar</a>
                    </p>');

                    ?>
                    
                </div>

            </div>
            <!-- /EXPO 3 -->

            <br style="margin-bottom: 13px" />



            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

