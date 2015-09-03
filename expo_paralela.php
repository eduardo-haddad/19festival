<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Exposição Paralela' : 'Parallel exhibition';

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
                    <span><?php pten('exposições > <span class="underline">exposição paralela</span>', 
                                     'exhibitions > <span class="underline">Parallel exhibition</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="expo_convidados.php"><?php pten('artistas convidados', 'guest artists') ?></a> | 
                        <a href="expo_projetos.php"><?php pten('projetos comissionados', 'Comissioned projects') ?></a> | 
                        <a href="expo_obras.php"><?php pten('obras selecionadas', 'Selected artworks') ?></a> | 
                        <a href="expo_paralela.php"><span style="text-decoration: underline"><?php pten('exposição paralela', 'Parallel exhibition') ?></span></a> |
                        <a href="expo_locais.php"><?php pten('Locais', 'Venues') ?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <p class="titulo"><?php pten('<span style="letter-spacing: -0.04em">Quem nasce pra aventura não toma outro rumo - obras do acervo videobrasil</span>', 
                                         '<span style="letter-spacing: 0em">Those born for adventure don’t stray from the path - works from videobrasil collection</span>'); ?></p> 
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" >
                    <img src="img/expos/expo-paralela-<?php pten('pt','en');?>.png" class="img-responsive" style="max-width: 485px" />
                    <div id="lista">
                        <ol>
                                <li class="upper"><?php pten('Artistas Participantes', 'Participating Artists'); ?><br /><br /></li>
                                <li>Cao Guimarães | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Carlos Nader | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Claudia Aravena | <?php pten('Chile', 'Chile'); ?></li>
                                <li>Clive van den Berg | <?php pten('Zâmbia', 'Zambia'); ?></li>
                                <li>Cristiano Lenhardt | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Gabriel Acevedo Velarde | <?php pten('Peru', 'Peru'); ?></li>
                                <li>Geraldo Anhaia Mello | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>João Moreira Salles | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Karim Aïnouz | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Malek Bensmail | <?php pten('Argélia', 'Algeria'); ?></li>
                                <li>Marcellvs L. | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Marcelo Gomes | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Nurit Sharett | <?php pten('Israel', 'Israel'); ?></li>
                                <li>Rita Moreira | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Sandra Kogut | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>The Otolith Group | <?php pten('Reino Unido', 'United Kingdom'); ?></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 sobre-expo h" style="float: right;">

                    <?php pten( 
                    ////APRESENTAÇAO PT
                    '<p>Releitura, à luz do contemporâneo, da produção resguardada pelo Acervo Videobrasil, reúne dezesseis
                    obras realizadas entre 1978 e 2012 por artistas do Sul global. Os trabalhos e o contexto brasileiros inspiram os três eixos
                    da curadoria – Afeições, tempos e estradas; Democracia, documento e ficção; e Fala, escuta e dissenso –, que dialogam com o
                    universo das obras do Festival. O título cita frase da artista Lygia Pape, ao interpelar o crítico Mário Pedrosa em entrevista
                    ao jornal o Pasquim em 1981.</p>

                    <p><br />Clique <a style="text-decoration: underline; color: inherit" href="http://site.videobrasil.org.br/acervo/sobre" target="_blank">aqui</a> para saber mais sobre o Acervo Videobrasil.</p>',

                    //APRESENTAÇAO EN
                    '<p style="display: inline">A contemporary take on productions from the Videobrasil Collection, featuring 15 pieces created between
                    1978 and 2012 by artists from global South. The program is divided into three sections, inspired by the selected Brazilian
                    artworks – Affections, times and roads; Democracy, document and fiction; and Speech, hearing and dissent – which converse
                    with the universe outlined by the artworks featured in the Festival. The title is a quote from a 1981 interview by the
                    critic Mário Pedrosa to artist Lygia Pape, for newspaper O Pasquim.</p>

                    <p><br />Click <a style="text-decoration: underline; color: inherit" href="http://site.videobrasil.org.br/acervo/sobre" target="_blank">here</a> to learn more about Videobrasil Collection.</p>');

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
                            '<p><span class="upper a">Paço das Artes</span><br />
                            Av. da Universidade, 1 <br />
                            São Paulo, SP<br />
                            Tel.: 11 3814 4832 | 3815-4895<br /><a href="http://www.pacodasartes.org.br" target="_blank">www.pacodasartes.org.br</a></p>
                            <p><br /><span class="upper a">visitação</span><br />
                            de 9 de outubro de 2015 a 10 de janeiro de 2016<br />
                            quarta a sexta das 10h às 19h;<br />
                            sábados, domingos e feriados das 11h às 18h</p>',

                            '<p><span class="upper a">Paço das Artes</span><br />
                            Av. da Universidade, 1 <br />
                            São Paulo, SP, Brazil<br />
                            phone: 11 3814 4832 | 3815-4895<br /><a href="http://www.pacodasartes.org.br" target="_blank">www.pacodasartes.org.br</a></p>
                            <p><br /><span class="upper a">visiting hours</span><br />
                            october 9, 2015, to january 10, 2016<br />
                            wed-fri, from 10am to 7pm;<br />
                            sat, sun, holidays, from 11am to 6pm</p>'); ?>


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

