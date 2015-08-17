<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Prêmios de Residência' : 'Residency Prizes';

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
                paletaArtistas($('.premio-sobre p:nth-child(1)'));
                paletaArtistas($('.premio-sobre p:nth-child(2)'));
                paletaArtistas($('.premio-sobre p:nth-child(3)'));
                paletaArtistas($('.premio-sobre p:nth-child(4)'));
                paletaArtistas($('.premio-local'));
                paletaArtistas($('.premio-nome'));
            }
        );
    </script>
    <style>
        #premio-aviso {

            float: left; 
            display: table; 
            height: 250px; 
            width: 450px;
            overflow: hidden; 
            background-color: #e4dbdc;
            font-size: 1.3em;
            margin-bottom: 42px;
            margin-top: 18px;
            left: 15px;

        }

        .titulo-aviso {
            text-transform: uppercase;
            word-wrap: break-word;
            font-size: 2em;
            /*letter-spacing: 0.1em;*/
            line-height: 1.2em;
            margin-bottom: 22px;
        }


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

            <!-- BREADCRUMB -->
        	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <?php pten('prêmios e residências > <span class="underline">Prêmios de Residência</span>', 
                               'prizes and residencies > <span class="underline">Residency Prizes</span>'); ?>   
                </div>
        	</div>
            <!-- BREADCRUMB -->

            <!-- SUBMENU -->
            <!-- <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="#visita"><?php pten('grande prêmio', 'grand prize') ?></a> | 
                        <a href="#leitura"><?php pten('prêmios de residência', 'residency prizes') ?></a> | 
                        <a href="#encontro"><?php pten('prêmio especial', 'special prize') ?></a> 
                        <a href="#mesa"><?php pten('júri', 'jury') ?></a> |
                        <a href="#curadoria"><?php pten('troféu', 'trophy') ?></a>
                    </p>      
                </div>
            </div> -->
            <!-- SUBMENU -->


            <div class="row" style="clear: both;">   
                
                    <div class="col-sm-12 col-md-6" id="premio-aviso">
                        <div style="display: table-cell; vertical-align: middle;">
                            <div class="titulo-aviso">  
                                <?php
                                ob_start(); titulo('confira a lista dos premiados apos a cerimonia de premiacao dia 11 de outubro'); $titulo_pt = ob_get_clean();
                                ob_start(); titulo('XXX a lista dos premiados apos a cerimonia de premiacao dia 11 de outubro'); $titulo_en = ob_get_clean();
                                pten($titulo_pt, $titulo_en); 
                                ?>
                            </div>
                        </div>
                    </div>       

                <div class="col-sm-12 col-md-6 premio-sobre" style="float: right;" >&nbsp;</div> 
            </div>

            <!-- RESIDENCIA 1 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">prêmio de residência china art foundation</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">na red gate gallery – beijing, china</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">china art foundation residency prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at red gate gallery – beijing, china</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/temp_air.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
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

                //Sobre residencia - EN
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
            <!-- /RESIDENCIA 1 -->

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           
            <!-- RESIDENCIA 2 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">prêmio de residência china art foundation</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">na red gate gallery – beijing, china</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">china art foundation residency prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at red gate gallery – beijing, china</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/temp_air.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
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

                //Sobre residencia - EN
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
            <!-- /RESIDENCIA 2 -->
            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

