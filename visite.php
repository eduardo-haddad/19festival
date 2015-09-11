<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Visite' : 'Visit';

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
                    <span><?php pten('sobre > <span class="underline">visite</span>', 
                                     'about > <span class="underline">visit</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                            <a href="apresentacao.php"><?php pten('Apresentação','Introduction');?></a> | 
                            <a href="palavrasesc.php"><?php pten('Palavra do Sesc','Word from Sesc');?></a> | 
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a> | 
                            <a href="identidade.php"><?php pten('Identidade Visual','Visual Identity');?></a> | 
                            <a href="realizacao.php"><?php pten('Realização','Undertaking');?></a> | 
                            <a href="parceiros.php"><?php pten('Parceiros','Supporters');?></a> | 
                            <a href="fichatecnica.php"><?php pten('Ficha Técnica','Staff');?></a> | 
                            <a href="convocatorias.php"><?php pten('Convocatórias 19º','Open calls');?></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a> | 
                            <a href="visite.php"><span style="text-decoration: underline"><?php pten('Visite','Visit');?></span></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                    <?= $titulo ?>
                </p>
                </div>
            </div>

             
            <!-- EXPO 1 -->
            <div class="row" style="clear: both; margin-bottom: 20px">

                <div class="col-xs-12 col-md-6 expo-mapa" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1063.3060561082916!2d-46.6830522342262!3d-23.52564148682573!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94cef809b81cc479%3A0xbf35620145c1e2cc!2sSesc+Pompeia!5e0!3m2!1spt-BR!2sbr!4v1439763126183" width="450" height="280" frameborder="0" style="border:0" allowfullscreen></iframe>
                    
                </div>

                <div class="col-xs-12 col-md-6 sobre-expo h" style="float: right;">



                    <?php pten( 
                    ////EXPO 1 PT
                    '<p class="titulo">sesc pompeia</p>
                    <p style="display: inline"><span class="bold upper">galpão:</span> <span class="upper">exposição panoramas do sul | artistas convidados</span><br /> 
                    <span class="bold upper">convivência:</span> <span class="upper">exposição panoramas do sul | obras selecionadas + performances</span><br /> 
                    <span class="bold upper">teatro:</span> <span class="upper">programas de filmes | GABRIEL ABRANTES E OBRAS SELECIONADAS + PERFORMANCE</span><br /> <br /> 

                    
                            Rua Clélia, 93<br />
                            São Paulo, SP<br />
                            tel.: +55 11 3871 7700 | 0800 11 8220<br /><a style="color:inherit" href="http://www.sescsp.org.br" target="_blank">www.sescsp.org.br</a><br /> 
                            <br /><span>Visitação</span><br />
                            de 6 de outubro a 6 de dezembro de 2015<br />
                            terça a sábado das 10h ás 21h;<br />
                            domingos e feriados das 10h às 19h<br /> <br /> 

                    <a class="upper" href="https://www.google.com.br/maps/place/Sesc+Pompeia/@-23.5256693,-46.6832229,17z/data=!4m7!1m4!3m3!1s0x94cef809b81cc479:0xbf35620145c1e2cc!2sSesc+Pompeia!3b1!3m1!1s0x94cef809b81cc479:0xbf35620145c1e2cc" target="_blank" style="color: inherit;">Como chegar</a>
                    </p>',

                    //EXPO 1 EN
                    '<p class="titulo">sesc pompeia</p>
                    <p style="display: inline"><span class="bold upper">galpão:</span> <span class="upper">southern panoramas | guest artists</span><br /> 
                    <span class="bold upper">convivência:</span> <span class="upper">SOUTHERN PANORAMAS | SELECTED WORKS + PERFORMANCES</span><br /> 
                    <span class="bold upper">theater:</span> <span class="upper">FILM PROGRAMS | GABRIEL ABRANTES & SELECTED WORKS + PERFORMANCE</span><br /> <br /> 

                    
                            Rua Clélia, 93<br />
                            São Paulo, SP, Brazil<br />
                            phone: +55 11 3871 7700<br /><a style="color:inherit" href="http://www.sescsp.org.br" target="_blank">www.sescsp.org.br</a><br />
                            <br /><span>Visiting hours</span><br />
                            october 6 to december 6, 2015<br />
                            tue-sat, from 10am to 9pm;<br />
                            sun, holidays, from 10am to 7pm<br /> <br /> 

                    <a class="upper" href="https://www.google.com.br/maps/place/Sesc+Pompeia/@-23.5256693,-46.6832229,17z/data=!4m7!1m4!3m3!1s0x94cef809b81cc479:0xbf35620145c1e2cc!2sSesc+Pompeia!3b1!3m1!1s0x94cef809b81cc479:0xbf35620145c1e2cc" target="_blank" style="color: inherit;">directions</a>
                    </p>');

                    ?>
                    
                </div>

            </div>
            <!-- /EXPO 1 -->

            <!-- EXPO 2 -->
            <div class="row" style="clear: both; margin-bottom: 20px">

                <div class="col-xs-12 col-md-6 relative" >
                    <img src="img/sobre/galpao.jpg" class="img-responsive" />
                </div>

                <div class="col-xs-12 col-md-6 sobre-expo h" style="float: right;">



                    <?php pten( 
                    ////EXPO 2 PT
                    '<p class="titulo">Galpão VB </p>
                    <p style="display: inline"><span class="upper">exposição panoramas do sul | projetos comissionados<br /> 
                    programas de filmes | obras selecionadas e gabriel abrantes</span><br /><br /> 

                    Av. Imperatriz Leopoldina, 1150 <br /> 
                    São Paulo, SP<br /> 
                    Tel.: +55 11 3645 0516 <br /> 
                    <a href="http://www.videobrasil.org.br" target="_blank" style="color: inherit;">www.videobrasil.org.br</a><br /> <br /> 

                    Visitação <br /> 
                    de 8 de outubro a 6 de dezembro de 2015<br />
                    segundas, quartas, quintas e sextas das 13h às 19h;<br />terças das 14h às 21h<br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Associa%C3%A7%C3%A3o+Cultural+Videobarsil/@-23.5320694,-46.73051,17z/data=!3m1!4b1!4m7!1m4!3m3!1s0x94cef8bd1bb00695:0x9779d4bc60b1b706!2sAv.+Imperatriz+Leopoldina,+1150+-+Vila+Leopoldina,+S%C3%A3o+Paulo+-+SP!3b1!3m1!1s0x94cef8bd13c7e961:0x1924d04be6bbad85" target="_blank" style="color: inherit;">Como chegar</a>
                    </p>',

                    //EXPO 2 EN
                    '<p class="titulo">Galpão VB </p>
                    <p style="display: inline"><span class="upper">southern panoramas | comissioned projects<br /> 
                    film programs | selected works & gabriel abrantes</span><br /><br /> 

                    Av. Imperatriz Leopoldina, 1150 <br /> 
                    São Paulo, SP, Brazil<br /> 
                    phone: +55 11 3645 0516 <br /> 
                    <a href="http://www.videobrasil.org.br" target="_blank" style="color: inherit;">www.videobrasil.org.br</a><br /> <br /> 

                    Visiting hours<br /> 
                    october 8 to december 6, 2015<br />
                    mon, wed, thu, fri, from 1pm to 7pm;<br />
                    tue, from 2pm to 9pm<br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Associa%C3%A7%C3%A3o+Cultural+Videobarsil/@-23.5320694,-46.73051,17z/data=!3m1!4b1!4m7!1m4!3m3!1s0x94cef8bd1bb00695:0x9779d4bc60b1b706!2sAv.+Imperatriz+Leopoldina,+1150+-+Vila+Leopoldina,+S%C3%A3o+Paulo+-+SP!3b1!3m1!1s0x94cef8bd13c7e961:0x1924d04be6bbad85" target="_blank" style="color: inherit;">directions</a>
                    </p>');

                    ?>
                    
                </div>

            </div>
            <!-- /EXPO 2 -->

            <!-- EXPO 3 -->
            <div class="row" style="clear: both; margin-bottom: 20px">

                <div class="col-xs-12 col-md-6 relative" >
                <img src="img/sobre/paco.jpg" class="img-responsive" />
                </div>

                <div class="col-xs-12 col-md-6 sobre-expo h" style="float: right;">



                    <?php pten( 
                    ////EXPO 3 PT
                    '<p class="titulo">paço das artes</p>
                    <p style="display: inline"><span class="upper">exposição paralela | quem nasce pra aventura não toma outro rumo</span><br /><br /> 

                    Av. da Universidade, 1 <br />
                            São Paulo, SP<br />
                            Tel.: +55 11 3814 4832 | 3815-4895<br /><a style="color: inherit" href="http://www.pacodasartes.org.br" target="_blank">www.pacodasartes.org.br</a><br />
                            <br /><span>Visitação</span><br />
                            de 9 de outubro de 2015 a 10 de janeiro de 2016<br />
                            quarta a sexta das 10h às 19h;<br />
                            sábados, domingos e feriados das 11h às 18h<br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Pa%C3%A7o+das+Artes/@-23.5645329,-46.7155382,17z/data=!3m1!4b1!4m2!3m1!1s0x94ce564ddd8bf503:0x54e382f737fb5484" target="_blank" style="color: inherit;">Como chegar</a>
                    </p>',

                    //EXPO 3 EN
                    '<p class="titulo">paço das artes</p>
                    <p style="display: inline"><span class="upper">Parallel exhibition<br />Those Born For Adventure Don’t Stray From The Path – Artworks from Videobrasil Collection</span><br /><br /> 

                    Av. da Universidade, 1 <br />
                            São Paulo, SP, Brazil<br />
                            phone: +55 11 3814 4832 | 3815-4895<br /><a style="color: inherit" href="http://www.pacodasartes.org.br" target="_blank">www.pacodasartes.org.br</a><br />
                            <br /><span>Visiting hours</span><br />
                            october 9, 2015, to january 10, 2016<br />
                            wed-fri, from 10am to 7pm;<br />
                            sat, sun, holidays, from 11am to 6pm<br /><br />

                    <a class="upper" href="https://www.google.com.br/maps/place/Pa%C3%A7o+das+Artes/@-23.5645329,-46.7155382,17z/data=!3m1!4b1!4m2!3m1!1s0x94ce564ddd8bf503:0x54e382f737fb5484" target="_blank" style="color: inherit;">directions</a>
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

