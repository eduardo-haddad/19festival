<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Projetos Comissionados' : 'Comissioned Projects';

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
    <style type="text/css">

        #lista ol li a:link { text-decoration: none; color: inherit; }
        #lista ol li a:visited { text-decoration: none; color: inherit;}
        #lista ol li a:hover { text-decoration: none; color: inherit;}
        #lista ol li a:active { text-decoration: none; color: inherit;}

    </style>

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
                    <span><?php pten('exposições > <span class="underline">projetos comissionados</span>', 
                                     'exhibitions > <span class="underline">comissioned projects</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="expo_convidados.php"><?php pten('artistas convidados', 'guest artists') ?></a> | 
                        <a href="expo_projetos.php"><span style="text-decoration: underline"><?php pten('projetos comissionados', 'Comissioned projects') ?></span></a> | 
                        <a href="expo_obras.php"><?php pten('obras selecionadas', 'Selected artworks') ?></a> | 
                        <a href="expo_paralela.php"><?php pten('exposição paralela', 'Parallel exhibition') ?></a> |
                        <a href="expo_locais.php"><?php pten('Locais', 'Venues') ?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <p class="titulo"><?php pten('panoramas do sul | projetos comissionados', 
                                         'southern panoramas | comissioned projects'); ?></p> 
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" >
                    <img src="img/expos/expo-projetos-<?php pten('pt','en');?>.png" class="img-responsive" />
                    <div id="lista">
                        <ol>
                                <li class="upper"><?php pten('Artistas Participantes', 'Participating Artists'); ?><br /><br /></li>
                                <li>Carlos Monroy | <?php pten('Colômbia', 'Colombia'); ?></li>
                                <li>Cristiano Lenhardt | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Keli-Safia Maksud | <?php pten('Quênia', 'Kenya'); ?></li>
                                <li>Ting-Ting Cheng | <?php pten('Taiwan', 'Taiwan'); ?></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 sobre-expo h" style="float: right;">

                    <?php pten( 
                    ////APRESENTAÇAO PT
                    '<p style="display: inline">As obras que compõem a exposição são fruto de um edital para comissionamento de 
                    projetos de artistas do Sul lançado em 2014 pelo Videobrasil. O novo mecanismo reafirma a vocação do Festival
                    para descobrir e apostar em proposições artísticas relevantes nessas regiões. Realizadas com acompanhamento
                    dos curadores do Festival, as obras de Ting-Ting Cheng (Taiwan), Carlos Monroy (Colômbia), Keli-Safia Maksud
                    (Quênia) e Cristiano Lenhardt (Brasil) inauguram o Galpão VB, espaço
                    de exposições, pesquisa e outras atividades de ativação do Acervo Videobrasil.
                    </p>',

                    //APRESENTAÇAO EN
                    '<p style="display: inline">The artworks in the exhibit are the results of an open call Videobrasil released
                    in 2014 for artists from the South to enter projects for commissioning. Through this new initiative, the Festival
                    reaffirms its vocation for finding and betting on relevant artistic proposals in these regions. Created with
                    curatorial oversight from the Festival, the artworks by Ting-Ting Cheng (Taiwan), Carlos Monroy (Colombia),
                    Keli-Safia Maksud (Kenya) and Cristiano Lenhardt (Brazil) will inaugurate Galpão VB, a venue for exhibitions,
                    research, and other activities designed to activate the Videobrasil Collection.</p>');

                    ?>
                    
                    <!-- <p class="titulo" style="margin-top:37px"><?php pten('Statement da curadoria', 'Statement'); ?></p>

                    <?php pten( 
                    ////STATEMENT PT
                    '<p style="display: inline">
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Museum, em Pittsburgh, EUA.</p><br />                     
                    
                    <p>Em bronze e cera colorida, o troféu do 18º Festival é uma
                    escultura da artista paulistana Erika Verzutti em forma de romã. “A
                    fruta foi uma escolha natural quando procurava uma forma de meu
                    repertório conhecido e que fosse também celebratória”, diz. “É uma
                    forma preciosa, muito expressiva, meio fisionômica, e associada também
                    a sorte”</p>',

                    //STATEMENT EN
                    '<p style="display: inline">
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Museum, em Pittsburgh, EUA.</p><br />                     
                    
                    <p>Em bronze e cera colorida, o troféu do 18º Festival é uma
                    escultura da artista paulistana Erika Verzutti em forma de romã. “A
                    fruta foi uma escolha natural quando procurava uma forma de meu
                    repertório conhecido e que fosse também celebratória”, diz. “É uma
                    forma preciosa, muito expressiva, meio fisionômica, e associada também
                    a sorte”</p>');

                    ?> -->
                    
                </div>

            </div>

            <br style="margin-bottom: 13px" />

            <div class="row">
                <div class="col-sm-12 col-md-6 a" style="margin-top: 0; padding-left: 15px">

                    <div class="row link_rodape" style="margin-top: 0; margin-bottom: 17px">                 
                        <div class="col-md-12" style="padding-left: 0">                     
                            <?php pten(
                            '<p><span class="upper a">Galpão_VB</span><br />
                            Av. Imperatriz Leopoldina, 1150<br />
                            São Paulo, SP<br />
                            tel.: 11 3645 0516 | <a href="http://www.videobrasil.org.br" target="_blank">www.videobrasil.org.br</a></p>
                            <p><br /><span class="upper a">visitação</span><br />
                            de 8 de outubro a 6 de dezembro de 2015<br />
                            segundas, quartas, quintas e sextas das 13h às 19h; terças das 14h às 21h</p>',

                            '<p><span class="upper a">Galpão_VB</span><br />
                            Av. Imperatriz Leopoldina, 1150<br />
                            São Paulo, SP, Brazil<br />
                            phone: 11 3645 0516 | <a href="http://www.videobrasil.org.br" target="_blank">www.videobrasil.org.br</a></p>
                            <p><br /><span class="upper a">visiting hours</span><br />
                            october 8 to december 6, 2015<br />
                            mon, wed, thu, fri, from 1pm to 7pm;<br />
                            tue, from 2pm to 9pm</p>'); ?>


                        </div>
                    </div>

                </div>
               <!-- <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_02-temp.jpg" />
                </div> -->
            </div>

            <!-- <div class="row">
                <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_01-temp.jpg" />
                </div>
               <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_02-temp.jpg" />
                </div>
            </div> -->

            <div class="row link_rodape" style="clear:both">                 
                <div class="col-md-12" style="padding-left: 0">                     
                    <span><?php pten('clique <a href="fotos.php">aqui</a> e veja a galeria completa de imagens', 
                                     'click <a href="fotos.php">here</a> to see the complete photo gallery'); ?></span>
                </div>
            </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

