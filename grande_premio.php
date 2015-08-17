<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Grande Prêmio' : 'Grand Prize';

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
       
            }
        );
    </script>
    <style>
        #premio-aviso {

            float: left; 
            display: table; 
            height: 280px; 
            width: 450px;
            overflow: hidden; 
            background-color: #e4dbdc;
            font-size: 1.5em;
            margin-bottom: 15px;
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
                    <?php pten('prêmios e residências > <span class="underline">grande prêmio</span>', 
                               'prizes and residencies > <span class="underline">grand prize</span>'); ?>   
                </div>
        	</div>
            <!-- BREADCRUMB -->

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="#visita"><?php pten('grande prêmio', 'grand prize') ?></a> | 
                        <a href="#leitura"><?php pten('prêmios de residência', 'residency prizes') ?></a> | 
                        <a href="#encontro"><?php pten('prêmio especial', 'special prize') ?></a> 
                        <a href="#mesa"><?php pten('júri', 'jury') ?></a> |
                        <a href="#curadoria"><?php pten('troféu', 'trophy') ?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->
            
            <div class="row" >
    <div class="col-xs-12 titulo" style="float: left;">
        <p style="margin-bottom:0"> 
            <?php pten('grande prêmio', 'grand prize'); ?>
        </p>
     </div>
</div>

<div class="row" style="clear: both;">   
    
        <div class="col-sm-12 col-md-6" id="premio-aviso">
            <div style="display: table-cell; vertical-align: middle;">
                <div class="titulo-aviso"><?php titulo('confira a lista dos premiados apos a cerimonia de premiacao dia 11 de outubro'); ?></div>
            </div>
        </div>       

    <div class="col-sm-12 col-md-6 premio-sobre" style="float: right;" >         
    <?php
    //Sobre - PT
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

    //Sobre - EN
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
           

            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

