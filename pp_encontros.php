<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Encontros e conversas' : 'Meetings and talks';

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
                paletaArtistas($('.pp-encontro p:nth-child(1)'));
                paletaArtistas($('.pp-encontro p:nth-child(2)'));
                paletaArtistas($('.pp-encontro p:nth-child(3)'));
                paletaArtistas($('.pp-encontro p:nth-child(4)'));
                paletaArtistas($('.pp-participantes p:nth-child(1)'));
                paletaArtistas($('.pp-participantes p:nth-child(2)'));
                paletaArtistas($('.pp-participantes p:nth-child(3)'));
                paletaArtistas($('.pp-participantes p:nth-child(4)'));
                paletaArtistas($('.pp-participantes p:nth-child(5)'));
                paletaArtistas($('.pp-participantes p:nth-child(6)'));
                paletaArtistas($('.pp-participantes p:nth-child(7)'));
                paletaArtistas($('.pp-participantes p:nth-child(8)'));
                paletaArtistas($('.pp-participantes p:nth-child(9)'));
                paletaArtistas($('.pp-participantes p:nth-child(10)'));
                paletaArtistas($('.pp-participantes p:nth-child(11)'));
                paletaArtistas($('.data-pp'));
        
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

        	
            <!-- BREADCRUMB -->
            <div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <?php pten('programas públicos > <span class="underline">encontros e conversas</span>', 
                               'public programs > <span class="underline">meetings and talks</span>'); ?>   
                </div>
        	</div>
            <!-- /BREADCRUMB -->

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="#visita"><?php pten('VISITA GUIADA COM O ARTISTA', 'TOUR WITH THE ARTIST') ?></a> | 
                        <a href="#leitura"><?php pten('LEITURA DE PORTFÓLIOS', 'PORTFOLIO READING') ?></a> | 
                        <a href="#encontro"><?php pten('ENCONTRO COM REDE DE RESIDÊNCIAS', 'MEETING WITH RESIDENCY NETWORK') ?></a><br /> 
                        <a href="#mesa"><?php pten('MESA DE ABERTURA', 'OPENING LECTURE') ?></a> |
                        <a href="#curadoria"><?php pten('VISITA GUIADA COM CURADORIA', 'GUIDED TOUR WITH CURATORS') ?></a> |
                        <a href="#tilting"><?php pten('TILTING AXIS 1.5', 'TILTING AXIS 1.5') ?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->
            
            
            <!-- EVENTO 1 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">VISITA COM RODRIGO MATHEUS</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">07/out (quarta) | 13h45 | sesc pompeia | galpão</span><br />
                             <span class="upper data-pp" style="font-size: 1.1em">[tradução consecutiva]</span>',

                             '<span class="titulo">TOUR WITH RODRIGO MATHEUS</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">oct/07 (wed) | 13h45 | sesc pompeia | galpão</span><br />
                             <span class="upper data-pp" style="font-size: 1.1em">[Consecutive translation]</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-rodrigo.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Rodrigo Matheus </span><?php pten(
                        '(Brasil) bacharel em artes pela Universidade de São Paulo (São Paulo) e mestre em escultura pelo Royal College of Art (Londres). Fez mostras individuais na Fundação Manuel Antônio da Mota (Porto, 2013), no Museu de Arte da Pampulha (Belo Horizonte, 2004) e no Cen- tro Cultural São Paulo (2004), entre outras.',
                        '(Brazil) holds a degree in art from the University of São Paulo (São Paulo) and a master’s degree in sculpture from the Royal College of Art (London). He has held solo exhibitions at the Fundação Manuel Antônio da Mota (Porto, 2013), Museu de Arte da Pampulha (Belo Horizonte, 2004), and Centro Cultural São Paulo (2004), among others.'); ?></p>
                    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 1 - PT
                pten('<p>Rodrigo Matheus, um dos artistas convidados do 19º Festival, apresenta seu trabalho Mauser & Cia, única obra site-specific realizada para o evento.</p>',

                //Evento 1 - EN
                '<p>Rodrigo Matheus, one of the 19th Festival guest artists, presents his work Mauser & Cia, the only site-specific piece created for the event.</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 1 -->


            <!-- EVENTO 2 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">Tilting Axis 1.5</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">08/out (quinta) | das 11h às 12h30 | sesc pompeia | teatro</span><br />
                             <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span>',

                             '<span class="titulo">Tilting Axis 1.5</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">oct/08 (thu) | 11-12h30 | sesc pompeia | theater</span><br />
                             <span class="upper data-pp" style="font-size: 1.1em">[Simultaneous translation]</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-tilting.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Annalee Davis </span><?php pten(
                        '(Barbados) é artista e codiretora da plataforma de arte contemporânea Fresh Milk.',
                        '(Barbados) is an artist and a co-director of the Fresh Milk contemporary art platform.'); ?>
                    </p>
                    <p><span class="bold">Holly Bynoe </span><?php pten(
                        '(São Vicente e Granadinas) é ensaísta e curadora-chefe da National Art Gallery das Bahamas.',
                        '(Saint Vincent and the Grenadines) is an essayist and the chief curator of the Bahamas National Art Gallery.'); ?>
                    </p>
                    <p><span class="bold">Mario Caro </span><?php pten(
                        '(Colômbia) é pesquisador, curador e crítico de arte contemporânea. Preside a rede de residências artísticas Res Artis.',
                        '(Colombia) is a contemporary art researcher, curator and critic. He chairs the Res Artis artist residency network.'); ?>
                    </p>
                    <p><span class="bold">María Elena Ortiz </span><?php pten(
                        '(Porto Rico) é curadora-assistente no Pérez Art Museum de Miami.',
                        '(Puerto Rico) is an assistant curator at the Pérez Art Museum in Miami.'); ?>
                    </p>
                    <p><span class="bold">N’Goné Fall </span><?php pten(
                        '(Senegal) é curadora e crítica. Foi curadora-convidada da Bienal de Dacar de 2002.',
                        '(Senegal) is a curator and a critic. She served as guest curator for the 2002 Dakar Biennale.'); ?>
                    </p>
                    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 2 - PT
                pten('<p>
                O 19o Videobrasil recebe a plataforma de discussão Tilting Axis, voltada a promover maior proximidade e articulação entre profissionais que trabalham em iniciativas e instituições geridas por artistas na região caribenha, além de construir e redefinir relações históricas com o Norte e estabelecer diálogo com redes fortes que emergem no Sul global. Recém-fundada, em Barbados, a plataforma apresenta suas propostas e metodologia.</p>',

                //Evento 2 - EN
                '<p>The 19th Videobrasil will feature Tilting Axis, a discussion platform for professionals from artist-managed initiatives and institutions in the Caribbean to promote contact and network, as well as build and redefine their historical ties with the North, and converse with strong up-and-coming networks from the global South. The proposals and methodology of the platform, which was recently established in Barbados, will be outlined.</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 2 -->

            <!-- EVENTO 3 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">Encontro com Rede de Residências</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">09/out (sexta) | das 17h às 18h30 | galpão vb</span>',

                             '<span class="titulo">MEETING WITH RESIDENCY NETWORK PARTNERS</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">oct/09 (fri) | 17-18h30 | galpão vb</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-rede.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">A-I-R Laboratory </span><?php pten('(Barbados)','(Poland)'); ?></p>
                    <p><span class="bold">Arquetopia </span><?php pten('(México)','(Mexico)'); ?></p>
                    <p><span class="bold">Delfina Foundation </span><?php pten('(Reino Unido)','(United Kingdom)'); ?></p>
                    <p><span class="bold">Djerassi Resident Artists Program </span><?php pten('(EUA)','(USA)'); ?></p>
                    <p><span class="bold">FLORA ars+natura </span><?php pten('(Colômbia)','(Colombia)'); ?></p>
                    <p><span class="bold">Kooshk Residency </span><?php pten('(Irã)','(Iran)'); ?></p>
                    <p><span class="bold">Kyoto Art Center </span><?php pten('(Japão)','(Japan)'); ?></p>
                    <p><span class="bold">Red Gate Residency </span><?php pten('(China)','(China)'); ?></p>
                    <p><span class="bold"><?php pten('Residência Vila Sul','Residence Vila Sul - Goethe-Institut'); ?> </span><?php pten('(Brasil)','(Brazil)'); ?></p>
                    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 3 - PT
                pten('<p>Representantes das instituições parceiras do 19º Festival que oferecem residências artísticas conversam com o público sobre seus programas.</p>',

                //Evento 3 - EN
                '<p>Delegates from 19th Festival partner organizations offering artist residencies will discuss their programs with the public. </p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 3 -->

            <!-- EVENTO 4 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="leitura"></a><?php pten(
                            '<span class="titulo">LEITURAS DE PORTFÓLIOS</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">04/nov (quarta) e 05/nov (quinta) | das 13h às 16h | galpão vb</span>',

                             '<span class="titulo">READING OF PORTFOLIOS</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">nov/04 (wed) and nov/05 (thu) | 13h-16h | galpão vb</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-portfolios.png" class="img-responsive" style="margin-bottom: 15px" />    


                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Clara Ianni </span><?php pten(
                        '(Brasil) é artista visual, bacharel em artes visuais pela Universidade de São Paulo, 2010, e mestre em Visual and Media Anthropology pela Freie Universität, Berlim, Alemanha, 2013.',
                        '(Brazil) a visual artist. She completed a baccalaureate degree in Visual Arts from the University of São Paulo in 2010, and a master’s degree in Visual and Media Anthropology from Freie Universität in Berlin, 2013.'); ?></p>
                    <p><span class="bold">Débora Bolsoni </span><?php pten(
                        '(Brasil) é artista visual, mestre em poéticas visuais pela Escola de Comunicação e Artes da Universidade de São Paulo, 2014.',
                        '(Brazil) a visual artist, she holds a master’s degree in Visual Poetics from the School of Communication and Arts of the University of São Paulo, 2014.'); ?></p>
                    <p><span class="bold">Felipe Bittencourt </span><?php pten(
                        '(Brasil) é ator e artista visual, bacharel em Artes Visuais pelo Centro Universitário Belas Artes de São Paulo, 2007, com especialização em Fotografia pela Escola Panamericana de Arte e Design, 2010.',
                        '(Brazil) an actor and visual artist, he holds a baccalaureate degree in Visual Arts from Centro Universitário Belas Artes in São Paulo, 2007, with a major in Photography from Escola Panamericana de Arte e Design, 2010.'); ?></p> 
                    <p><span class="bold">Rodolpho Parigi </span><?php pten(
                        '(Brasil) é artista visual, bacharel em artes plásticas pela FAAP, São Paulo. Desenvolve trabalhos com desenho, pintura, instalação e performance.',
                        '(Brazil) visual artist, he completed a baccalaureate in Fine Arts from FAAP, São Paulo. Produces works with drawing, painting, installation, and performance.'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 4 - PT
                pten('<p>Artistas selecionados para o 19º Festival compartilham sua pesquisa e trajetória e leem os portfólios de participantes inscritos previamente.</p>
                        <p><span class="bold">Para participar:</span> artistas interessados devem enviar portfólio (em pdf), entre os dias 6.10 e 23.10, para o e-mail portfolio@zebra5.com.br.<br /> 
                        <span class="bold">Para assistir:</span> retirar ingresso 1h antes da atividade, na bilheteria do Teatro Sesc Pompeia.</p>
                        <p><span class="bold">Vagas limitadas.</span></p>',

                //Evento 4 - EN
                       '<p>Artists selected for the 19th Festival will share their research and career stories, and read portfolios from previous entrants.</p>
                        <p><span class="bold">How to participate:</span> interested artists must email a portfolio (in PDF), between October 6 and 23, to portfolio@zebra5.com.br.<br /> 
                        <span class="bold">How to attend:</span> collect your ticket one hour before the activity from the Sesc Pompeia Theater box office.</p>
                        <p><span class="bold">Seats are limited.</span></p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 4 -->

            <!-- EVENTO 5 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="leitura"></a><?php pten(
                            '<span class="titulo">visita à exposição <em>quem nasce pra aventura não toma outro rumo</em></span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">14/nov (sáb) e 09/jan (sáb) | 16h | paço das artes</span>',

                             '<span class="titulo"><em>those born for adventure don’t stray from the path</em> exhibition tour</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">nov/14 (sat) and jan/09 (sat) | 16h | paço das artes</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-curadoria.png" class="img-responsive" style="margin-bottom: 15px" />    


                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Diego Matos </span><?php pten(
                        '(Brasil) é coordenador de Arquivo e Pesquisa do Videobrasil e curador da exposição <em>Quem nasce pra aventura não toma outro rumo</em>.',
                        '(Brazil) Videobrasil\'s archive and research coordinator and curator of the parallel exhibition <em>Those born for adventure don’t stray from the path</em>'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 5 - PT
                pten('<p><span class="bold">14/nov, 16h, Paço das Artes</span><br />Roteiro 1: Brasil, São Paulo – um lugar para a partida.</p>
                      <p><span class="bold">09/jan, 16h, Paço das Artes</span><br />Roteiro 2: O vídeo na arena política da arte.</p>',

                //Evento 5 - EN
                       '<p><span class="bold">Nov/14, 16h, Paço das Artes</span><br />Itinerary 1: Brazil, São Paulo – a place for departure.</p>
                      <p><span class="bold">Jan/09, 16h, Paço das Artes</span><br />Itinerary 2: Video in the political arena of art.</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 5 -->

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

