<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Residências' : 'Residencies';

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
                    <?php pten('prêmios e residências > <span class="underline">programas de residência</span>', 
                               'prizes and residencies > <span class="underline">residency program</span>'); ?>   
                </div>
        	</div>
            
            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                    <p style="margin-bottom:0"> 
                        <?php pten('arquetopia | puebla | méxico', 'arquetopia | puebla | mexico'); ?>
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

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

