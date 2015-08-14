<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Obras selecionadas' : 'Selected artworks';

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

            <p class="titulo"><?php pten('panoramas do sul | obras selecionadas', 
                                         'southern panoramas | selected artworks'); ?></p> 
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" >
                    <img src="img/blank.png" class="img-responsive" />
                    <div id="lista">
                        <ol>
                                <li class="upper"><?php pten('Artistas Participantes', 'Participating Artists'); ?><br /><br /></li>
                                <li>Ali Cherri | <?php pten('Líbano/França', 'Lebanon/France'); ?></li>
                                <li>Aline X e Gustavo Jardim | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Ana Vaz | <?php pten('Brasil/França', 'Brazil/France'); ?></li>
                                <li>Andres Bedoya | <?php pten('Bolívia', 'Bolivia'); ?></li>
                                <li>Armando Queiroz | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Beto Shwafaty | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Bianca Baldi | <?php pten('África do Sul/Alemanha', 'South Africa/Germany'); ?></li>
                                <li>Carlos Mélo | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Chameckilerner | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Chulayarnnon Siriphol | <?php pten('Tailândia', 'Thailand'); ?></li>
                                <li>Clara Ianni | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Daniel Frota | <?php pten('Brasil/Países Baixos', 'Brazil/Netherlands'); ?></li>
                                <li>Daniel Jacoby | <?php pten('Peru/Países Baixos', 'Peru/Netherlands'); ?></li>
                                <li>Daniel Monroy Cuevas | <?php pten('México', 'Mexico'); ?></li>
                                <li>Débora Bolsoni | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Distruktur | <?php pten('Brasil/Alemanha', 'Brazil/Germany'); ?></li>
                                <li>Dor Guez | <?php pten('Israel', 'Israel'); ?></li>
                                <li>Enrique Ramírez | <?php pten('Chile/França', 'Chile/France'); ?></li>
                                <li>Fancy Violence | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Felipe Bittencourt | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Haroon Gunn-Salie | <?php pten('África do Sul', 'South Africa'); ?></li>
                                <li>Hui Tao | <?php pten('China', 'China'); ?></li>
                                <li>Iosu Aramburu | <?php pten('Peru', 'Peru'); ?></li>
                                <li>João Castilho | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Karolina Bregula | <?php pten('Polônia', 'Poland'); ?></li>
                                <li>Köken Ergun | <?php pten('Turquia', 'Turkey'); ?></li>
                                <li>Kush Badhwar | <?php pten('Índia/Austrália', 'India/Australia'); ?></li>
                                <li>Leticia Ramos | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Louise Botkay | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Luciana Magno | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Maria Kramar | <?php pten('Rússia', 'Russia'); ?></li>
                                <li>Koutsomichalis, Varela, Psarra | <?php pten('Grécia', 'Greece'); ?></li>
                                <li>Maya Watanabe | <?php pten('Peru/Países Baixos', 'Peru/Netherlands'); ?></li>
                                <li>Michael MacGarry | <?php pten('África do Sul', 'South Africa'); ?></li>
                                <li>Mihai Grecu | <?php pten('Romênia/França', 'Romania/France'); ?></li>
                                <li>Monica Rodriguez | <?php pten('Porto Rico/EUA', 'Puerto Rico/USA'); ?></li>
                                <li>Pablo Lobato | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Paulo Nazareth | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Paulo Nimer Pjota | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Pilar Mata Dupont | <?php pten('Austrália', 'Australia'); ?></li>
                                <li>Rafael RG | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Roberto Santaguida | <?php pten('Canadá/Sérvia', 'Canada/Serbia'); ?></li>
                                <li>Rodrigo Cass | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Roy Dib | <?php pten('Líbano', 'Lebanon'); ?></li>
                                <li>Runo Lagomarsino | <?php pten('Suécia/Brasil', 'Sweden/Brazil'); ?></li>
                                <li>Slinko | <?php pten('Ucrânia/EUA', 'Ukraine/USA'); ?></li>
                                <li>Solon Ribeiro | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Tatiana Fuentes Sadowski | <?php pten('Peru/França', 'Peru/France'); ?></li>
                                <li>Taus Makhacheva | <?php pten('Rússia', 'Russia'); ?></li>
                                <li>Tiécoura N'Daou | <?php pten('Mali', 'Mali'); ?></li>
                                <li>Vera Chaves Barcellos | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Viktorija Rybakova | <?php pten('Lituânia/México', 'Lithuania/Mexico'); ?></li>
                                <li>Waléria Américo | <?php pten('Brasil', 'Brazil'); ?></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 sobre-expo h" style="float: right;">

                    <?php pten( 
                    ////APRESENTAÇAO PT
                    '<p style="display: inline">Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
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

                    //APRESENTAÇAO EN
                    '<p style="display: inline">Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
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

                    ?>
                    
                    <p class="titulo" style="margin-top:37px"><?php pten('Statement da curadoria', 'Statement'); ?></p>

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

                    ?>
                    
                </div>

            </div>

            <br style="margin-bottom: 13px" />

            <div class="row">
                <div class="col-sm-12 col-md-6 a" style="margin-top: 0; padding-left: 15px">

                    <div class="row link_rodape" style="margin-top: 0; margin-bottom: 17px">                 
                        <div class="col-md-12" style="padding-left: 0">                     
                            <?php pten(
                            '<p><span class="upper a">sesc pompeia | convivência</span><br />
                            Rua Clélia, 93<br />
                            São Paulo, SP<br />
                            tel.: 11 3871 7700 | 0800 11 8220 www.sescp.org.br</p>
                            <p><br /><span class="upper a">visitação</span><br />
                            de 6 de outubro a 6 de dezembro de 2015<br />
                            terça a sábado das 9h ás 22h;<br />
                            domingos e feriados das 9h às 20h</p>',

                            '<p><span class="upper a">sesc pompeia | convivência</span><br />
                            Rua Clélia, 93<br />
                            São Paulo, SP, Brazil<br />
                            phone: 11 3871 7700 | www.sescp.org.br</p>
                            <p><br /><span class="upper a">visiting hours</span><br />
                            october 6 to november 6, 2015<br />
                            tue-sat, from 9am to 10pm;<br />
                            sun, holidays, from 9am to 8pm</p>'); ?>





                        </div>
                    </div>

                </div>
               <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_02-temp.jpg" />
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_01-temp.jpg" />
                </div>
               <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_02-temp.jpg" />
                </div>
            </div>

            <div class="row link_rodape" style="clear:both">                 
                <div class="col-md-12" style="padding-left: 0">                     
                    <span><?php pten('clique <a href="">aqui</a> e veja a galeria completa de imagens', 
                                     'click <a href="">here</a> to see the complete photo gallery'); ?></span>
                </div>
            </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

