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
                        '(São Paulo, Brasil, 1974) bacharel em artes pela Universidade de São Paulo (São Paulo) e mestre em escultura pelo Royal College of Art (Londres). Fez mostras individuais na Fundação Manuel Antônio da Mota (Porto, 2013), no Museu de Arte da Pampulha (Belo Horizonte, 2004) e no Cen- tro Cultural São Paulo (2004), entre outras.',
                        '(São Paulo, Brazil, 1974) holds a degree in art from the University of São Paulo (São Paulo) and a master’s degree in sculpture from the Royal College of Art (London). He has held solo exhibitions at the Fundação Manuel Antônio da Mota (Porto, 2013), Museu de Arte da Pampulha (Belo Horizonte, 2004), and Centro Cultural São Paulo (2004), among others.'); ?></p>
                    
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
                        <a name="leitura"></a><?php pten(
                            '<span class="titulo">LEITURA DE PORTFÓLIOS</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">07/out (quarta) | 11hs às 13h30 | sesc pompeia | teatro</span>',

                             '<span class="titulo">PORTFOLIO READING</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">07/out (quarta) | 11hs às 13h30 | sesc pompeia | teatro</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/blank.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Ana Maria Maia </span><?php pten(
                        '(Recife, Brasil, 1984) Jornalista e mestre em historia da arte. Curadora adjunta do Panorama de Arte Brasileira do Museu de Arte Moderna de São Paulo, foi assistente de curadoria da 29a Bienal de São Paulo (2009).',
                        '(XXXXXXX, Brasil, 1984) XXXXXX e mestre em historia da arte. Curadora adjunta do Panorama de Arte Brasileira do Museu de Arte Moderna de São Paulo, foi assistente de curadoria da 29a Bienal de São Paulo (2009).'); ?></p>
                    <p><span class="bold">Ana Pato </span><?php pten(
                        '(Recife, Brasil, 1984) Jornalista e mestre em historia da arte. Curadora adjunta do Panorama de Arte Brasileira do Museu de Arte Moderna de São Paulo, foi assistente de curadoria da 29a Bienal de São Paulo (2009).',
                        '(XXXXXXX, Brasil, 1984) XXXXXX e mestre em historia da arte. Curadora adjunta do Panorama de Arte Brasileira do Museu de Arte Moderna de São Paulo, foi assistente de curadoria da 29a Bienal de São Paulo (2009).'); ?></p>
                    <p><span class="bold">Daniela Labra </span><?php pten(
                        '(Recife, Brasil, 1984) Jornalista e mestre em historia da arte. Curadora adjunta do Panorama de Arte Brasileira do Museu de Arte Moderna de São Paulo, foi assistente de curadoria da 29a Bienal de São Paulo (2009).',
                        '(XXXXXXX, Brasil, 1984) XXXXXX e mestre em historia da arte. Curadora adjunta do Panorama de Arte Brasileira do Museu de Arte Moderna de São Paulo, foi assistente de curadoria da 29a Bienal de São Paulo (2009).'); ?></p> 
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 3 - PT
                pten('<p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                conet dolupti idit, nes doluptiis ipsam</p>
                <p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                conet dolupti idit, nes doluptiis ipsam</p>',

                //Evento 3 - EN
                '<p>XXX XXXXXXXXXX to qui odit dolorecab in re pre ercia nullandit escium re, quam
                eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                conet dolupti idit, nes doluptiis ipsam</p>
                <p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                conet dolupti idit, nes doluptiis ipsam</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 3 -->

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

