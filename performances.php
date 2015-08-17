<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Performances' : 'Performances';

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
                paletaArtistas($('.performance-texto p:nth-child(1)'));
                paletaArtistas($('.performance-texto p:nth-child(2)'));
                paletaArtistas($('.performance-texto p:nth-child(3)'));
                paletaArtistas($('.performance-texto p:nth-child(4)'));
                paletaArtistas($('.informacoes p'));
                paletaArtistas($('.performance-servico p'));
        
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

            <p class="titulo"><?php pten('performances', 
                                         'performances'); ?></p> 
            
            
            <!-- EVENTO 1 -->

            <div class="row" style="clear: both; margin-bottom: 31px">     
                <div class="col-sm-12 col-md-6 performance-servico" style="float: left ">
                    <img src="img/blank.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <?php 
                    pten('<p><span class="bold upper">06/out</span> | terça<br />
                    21h<br />
                    Sesc Pompeia | Convivência<br /><br />
                    <span class="bold upper">25/nov</span> | quarta<br />
                    21h30<br />
                    Sesc Pompeia | Convivência<br />
                    *Com lançamento das publicações Caderno Sesc_Videobrasil 11 aliança de corpos vulneráveis e panoramas do sul | obras selecionadas e projetos comissionados</p>',

                    '<p><span class="bold upper">oct/6</span> | Tuesday<br />
                    9pm<br />
                    Sesc Pompeia | Convivência<br /><br />
                    <span class="bold upper">nov/25v</span> | Wednesday<br />
                    9:30pm<br />
                    Sesc Pompeia | Convivência<br />
                    *Com lançamento das publicações Caderno Sesc_Videobrasil 11 aliança de corpos vulneráveis e panoramas do sul | obras selecionadas e projetos comissionados</p>'); ?>
                </div>     
                <div class="col-sm-12 col-md-6 performance-texto a" style="float: right;">         
                <?php
                //Evento 1 - PT
                pten('<p><span class="italic">Fancy em Pyetà segundo ato</span><br />performance de Fancy Violence (Rodolpho Parigi)</p>

                      <p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                      eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                      natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                      dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                      magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                      experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                      conet dolupti idit, nes doluptiis ipsam</p>',

                //Evento 1 - EN
                '<p><span class="italic">Fancy em Pyetà segundo ato</span><br />performance by Fancy Violence (Rodolpho Parigi)</p>

                      <p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                      eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                      natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                      dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                      magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                      experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                      conet dolupti idit, nes doluptiis ipsam</p>');  ?> 
                </div> 
            </div>

            <!-- /EVENTO 1 -->

            <!-- EVENTO 2 -->

            <div class="row" style="clear: both; margin-bottom: 31px">     
                <div class="col-sm-12 col-md-6 performance-servico" style="float: left ">
                    <img src="img/blank.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <?php 
                    pten('<p><span class="bold upper">06/out</span> | terça<br />
                    das 20h às 22h, com intervalos<br />
                    Sesc Pompeia | Convivência<br /><br />
                    <span class="bold upper">10/out</span> | sábado<br />
                    das 17h às 17h30<br />
                    Sesc Pompeia | Convivência<br />',

                    '<p><span class="bold upper">oct/6</span> | Tuesday<br />
                    8pm-10pm<br />
                    Sesc Pompeia | Convivência<br /><br />
                    <span class="bold upper">oct/10</span> | Saturday<br />
                    5pm-5:30pm<br />
                    Sesc Pompeia | Convivência<br />'); ?>
                </div>     
                <div class="col-sm-12 col-md-6 performance-texto a" style="float: right;">         
                <?php
                //Evento 2 - PT
                pten('<p><span class="italic">Oiko-nomic Threads</span><br />performance de Marinos Koutsomichalis, Maria Varela, Afroditi Psarra</p>

                      <p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                      eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                      natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                      dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                      magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                      experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                      conet dolupti idit, nes doluptiis ipsam</p>',

                //Evento 2 - EN
                '<p><span class="italic">Oiko-nomic Threads</span><br />performance by Marinos Koutsomichalis, Maria Varela, Afroditi Psarra</p>

                      <p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                      eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                      natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                      dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                      magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                      experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                      conet dolupti idit, nes doluptiis ipsam</p>');  ?> 
                </div> 
            </div>

            <!-- /EVENTO 2 -->

            <!-- EVENTO 3 -->

            <div class="row" style="clear: both; margin-bottom: 31px">     
                <div class="col-sm-12 col-md-6 performance-servico" style="float: left ">
                    <img src="img/blank.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <?php 
                    pten('<p><span class="bold upper">07/out</span> | quarta<br />
                    21h<br />
                    Sesc Pompeia | Teatro',

                    '<p><span class="bold upper">oct/7</span> | Wednesday<br />
                    9pm<br />
                    Sesc Pompeia | Theater'); ?>
                </div>     
                <div class="col-sm-12 col-md-6 performance-texto a" style="float: right;">         
                <?php
                //Evento 3 - PT
                pten('<p><span class="italic">VOSTOK cineperformance da série VOSTOK</span><br />performance de Leticia ramos</p>

                      <p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                      eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                      natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                      dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                      magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                      experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                      conet dolupti idit, nes doluptiis ipsam</p>',

                //Evento 3 - EN
                '<p><span class="italic">VOSTOK cineperformance of the series VOSTOK</span><br />performance by Leticia ramos</p>

                      <p>Te porecumqui ut eaquaspic to qui odit dolorecab in re pre ercia nullandit escium re, quam
                      eum volore officim experci mporeici doloribus, aut auta qui cumquas pererspid quid quame nosti rem
                      natur, omnimpo remodis renim re volorestio tectotatus etur? Nullestibus res rerum diorunt otaqui cus
                      dolorio et unt, quis et aut porerib usaped et quae. Nem as dolores torrovit quiaspe litaque mos vel
                      magnis earcil id que cuptate ndenima sequo qui ut pore re incimol uptatus ut hilis enime quis ipiet
                      experest, cor si ut quasperuptae omnim quam laccus magnis eum fugia sendiam ut vollisimente con
                      conet dolupti idit, nes doluptiis ipsam</p>');  ?> 
                </div> 
            </div>

            <!-- /EVENTO 3 -->

            <div class="row link_rodape" style="margin-top: 32px">

                <div class="col-md-6 informacoes" style="left: -15px;">
                    <?php 
                    pten('<p class="g">SESC POMPEIA<br>
                    Rua Clélia, 93<br>
                    São Paulo, SP<br>
                    Tel.: 11 3871 7700 | 0800 11 8220 <br>
                    www.sescp.org.br</p>

                    <p class="g">VISITACÃO<br>
                    de 6 de outubro a 6 de dezembro de 2015<br>
                    terça a sábado das 9h às 22h;<br>
                    domingos e feriados das 9h às 20h</p>',

                    '<p class="g">SESC POMPEIA<br />
                    Rua Clélia, 93<br>
                    São Paulo, SP, BRAZIL<br>
                    Tel.: 11 3871 7700 | 0800 11 8220 <br>
                    www.sescp.org.br</p>

                    <p class="g">VISITATION<br>
                    october 6 to december 6, 2015<br>
                    terça a sábado das 9h às 22h;<br>
                    domingos e feriados das 9h às 20h</p>');


                    ?>



                </div>

            </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

