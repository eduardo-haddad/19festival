<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Oficinas' : 'Workshops';

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
                             <span class="upper bold data-pp" style="font-size: 1.1em">07/out (quarta) | 11hs às 13h30 | sesc pompeia | teatro</span>',

                             '<span class="titulo">TOUR WITH RODRIGO MATHEUS</span><br />
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
                //Evento 1 - PT
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

                //Evento 1 - EN
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
           

            <!-- /EVENTO 1 -->

            <!-- EVENTO 2 -->

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
                //Evento 2 - PT
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

                //Evento 2 - EN
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
           

            <!-- /EVENTO 1 -->

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

