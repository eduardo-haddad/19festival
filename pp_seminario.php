<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Seminário' : 'Seminário';

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
                    <?php pten('programas públicos > <span class="underline">SEMINÁRIO LUGARES E SENTIDOS DA ARTE</span>', 
                               'public programs > <span class="underline">XXXXX SEMINÁRIO LUGARES E SENTIDOS DA ARTE</span>'); ?>   
                </div>
        	</div>
            <!-- /BREADCRUMB -->

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:24px">
                        <a href="#ppsobre"><?php pten('SOBRE', 'ABOUT') ?></a> | 
                        <a href="#pp1"><?php pten('REPENSAR TRADIÇÕES', 'XXXREPENSAR TRADIÇÕES') ?></a> | 
                        <a href="#pp2"><?php pten('REPENSAR ESPAÇOS', 'XXXREPENSAR ESPAÇOS') ?></a> | 
                        <a href="#pp3"><?php pten('REPENSAR NARRATIVAS', 'XXXREPENSAR NARRATIVAS') ?></a> |
                        <a href="#pp4"><?php pten('REPENSAR O TEMPO', 'XXXREPENSAR O TEMPO') ?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->
            
            
            <!-- SOBRE -->

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <a name="ppsobre"></a><img src="img/blank.png" class="img-responsive" style="margin-bottom: 15px" />    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //SOBRE - PT
                pten('<p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                conet dolupti idit, nes doluptiis ipsam. 
                Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                conet dolupti idit, nes doluptiis ipsam</p>',

                //SOBRE - EN
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
           

            <!-- /SOBRE -->

            <!-- EVENTO 1 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp1"></a>
                        <?php pten('<span class="titulo">mesa 1 | repensar tradições: arte, gesto e contemporaneidade</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">07/out (quarta) | 11hs às 13h30 | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span>',

                                   '<span class="titulo">mesa 1 | repensar tradições: arte, gesto e contemporaneidade</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">xxx07/out (quarta) | 11hs às 13h30 | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[xxxtradução simultânea]</span>');?>

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
                conet dolupti idit, nes doluptiis ipsam</p><br />
                <p>Com Abdoulaye Konate, Julia Rebouças, N’Gone Fall e Yto Barrada<br /><br />
                Saiba mais:<br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>',

                //Evento 1 - EN
                '<p>XXX XXXXXXXXXX to qui odit dolorecab in re pre ercia nullandit escium re, quam
                eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                conet dolupti idit, nes doluptiis ipsam</p><br />
                <p>Feat. Abdoulaye Konate, Julia Rebouças, N’Gone Fall e Yto Barrada<br /><br />
                Learn more:<br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 1 -->

            <!-- EVENTO 2 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp2"></a>
                        <?php pten('<span class="titulo">mesa 2 | repensar espaços: arte, usos e cotidiano</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">07/out (quarta) | 11hs às 13h30 | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">*com lançamento do livro panoramas do sul | leituras</span>',

                                   '<span class="titulo">mesa 2 | repensar espaços: arte, usos e cotidiano</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">XXX 07/out (quarta) | 11hs às 13h30 | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">*com lançamento do livro panoramas do sul | leituras</span>');?>

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
                conet dolupti idit, nes doluptiis ipsam</p><br />
                <p>Com Abdoulaye Konate, Julia Rebouças, N’Gone Fall e Yto Barrada<br /><br />
                Saiba mais:<br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>',

                //Evento 2 - EN
                '<p>XXX XXXXXXXXXX to qui odit dolorecab in re pre ercia nullandit escium re, quam
                eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                conet dolupti idit, nes doluptiis ipsam</p><br />
                <p>Feat. Abdoulaye Konate, Julia Rebouças, N’Gone Fall e Yto Barrada<br /><br />
                Learn more:<br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 2 -->

            <!-- EVENTO 3 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp3"></a>
                        <?php pten('<span class="titulo">mesa 3 | repensar espaços: arte, usos e cotidiano</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">07/out (quarta) | 11hs às 13h30 | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span>',

                                   '<span class="titulo">mesa 3 | repensar espaços: arte, usos e cotidiano</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">XXX 07/out (quarta) | 11hs às 13h30 | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span>');?>

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
                conet dolupti idit, nes doluptiis ipsam</p><br />
                <p>Com Abdoulaye Konate, Julia Rebouças, N’Gone Fall e Yto Barrada<br /><br />
                Saiba mais:<br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>',

                //Evento 3 - EN
                '<p>XXX XXXXXXXXXX to qui odit dolorecab in re pre ercia nullandit escium re, quam
                eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                conet dolupti idit, nes doluptiis ipsam</p><br />
                <p>Feat. Abdoulaye Konate, Julia Rebouças, N’Gone Fall e Yto Barrada<br /><br />
                Learn more:<br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>');  ?> 
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

