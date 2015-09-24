<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Parceiros' : 'Supporters';

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
	<script src="js/19festival.js"></script>
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
                    <span><?php pten('<a href="index.php#sobre" class="link">sobre o festival</a> > <span class="underline">Parceiros</span>', 
                                     '<a href="index.php#sobre" class="link">about the festival</a> > <span class="underline">Supporters</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                            <a href="apresentacao.php"><?php pten('Apresentação','Introduction');?></a> | 
                            <a href="palavrasesc.php"><?php pten('Palavra do Sesc','Word from Sesc');?></a> | 
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a> | 
                            <a href="identidade.php"><?php pten('Identidade Visual','Visual Identity');?></a> | 
                            <a href="realizacao.php"><?php pten('Realização','Undertaking');?></a> | 
                            <a href="parceiros.php"><span style="text-decoration: underline"><?php pten('Parceiros','Supporters');?></span></a> | 
                            <a href="fichatecnica.php"><?php pten('Ficha Técnica','Staff');?></a> | 
                            <a href="convocatorias.php"><?php pten('Convocatórias 19º','Open calls');?></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a> | 
                            <a href="visite.php"><?php pten('Visite','Visit');?></a>
                    </p>       
                </div>
            </div>
            <!-- SUBMENU -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-top: 30px;">
                <p style="margin-bottom:0">
                   <?php pten('Apoio institucional', 'Institutional Support');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12" >
                    <a href="http://electrica.com.br/home/" target="_blank"><img src="img/parceiros/parceiros-institucional.png" id="img-id-1" style="margin-bottom: 42px; width: 100px" /></a>

                </div>


            </div>

             <div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-top: 30px;">
                <p style="margin-bottom:0">
                   <?php pten('Apoio cultural', 'Cultural Support');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12" >
                
                <img src="img/parceiros/parceiros-cultural1.png" usemap="#Map1" border="0">
                <map name="Map1" id="Map1">
                    <area shape="rect" coords="7,56,112,122" href="http://www.brasilturquia.com.br/" target="_blank" />
                    <area shape="rect" coords="170,54,293,132" href="http://saopaulo.ambafrance-br.org/" target="_blank" />
                    <area shape="rect" coords="348,51,506,124" href="https://br.mfa.lt/br/pt/" target="_blank" />
                    <area shape="rect" coords="571,25,663,131" href="http://consulmex.sre.gob.mx/saopaulo/" target="_blank" />
                    <area shape="rect" coords="735,41,800,129" href="http://www.mondriaanfonds.nl/en/" target="_blank" />
                </map>
                <br />
                <img src="img/parceiros/parceiros-cultural2.png" usemap="#Map2" border="0">
                <map name="Map2" id="Map2">
                    <area shape="rect" coords="3,58,150,126" href="http://csw.art.pl/index.php?action=air&amp;lang=eng" target="_blank" />
                    <area shape="rect" coords="203,46,285,129" href="http://www.thechinaartfoundation.com/en/home/RQ" target="_blank" />
                    <area shape="rect" coords="366,66,486,127" href="http://www.goethe.de/ins/br/lp/ptindex.htm" target="_blank" />
                    <area shape="rect" coords="586,76,707,129" href="http://www.resartis.org/en/" target="_blank" />
                    <area shape="rect" coords="793,76,883,125" href="http://www.sp-arte.com/" target="_blank" />
                </map>

                </div>

            </div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-top: 30px;">
                <p style="margin-bottom:0">
                   <?php pten('Colaboração', 'Collaboration');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12" >
                   <img src="img/parceiros/parceiros-colaboracao1.png" usemap="#Map3" border="0">
                   <map name="Map3" id="Map3">
                        <area shape="rect" coords="2,51,144,128" href="http://csw.art.pl/index.php?action=air&amp;lang=eng" target="_blank" />
                        <area shape="rect" coords="197,29,324,127" href="http://www.arquetopia.org/" target="_blank" />
                        <area shape="rect" coords="373,88,517,130" href="http://delfinafoundation.com/" target="_blank" />
                        <area shape="rect" coords="568,37,828,127" href="http://djerassi.org/" target="_blank" />
                   </map>
                   <br />
                   <img src="img/parceiros/parceiros-colaboracao2.png" usemap="#Map4" border="0">
                   <map name="Map4" id="Map4">
                        <area shape="rect" coords="3,38,84,129" href="http://kooshkresidency.com/" target="_blank" />
                        <area shape="rect" coords="163,55,278,128" href="http://www.kac.or.jp/eng/" target="_blank" />
                        <area shape="rect" coords="349,87,551,125" href="http://www.redgategallery.com/" target="_blank" />
                        <area shape="rect" coords="629,92,754,126" href="http://wexarts.org/" target="_blank" />
                   </map>
                </div>

            </div>

            <!-- <div class="row">
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Restaurantes parceiros', 'Supporting restaurants');  ?>
                </p>
                </div>
            </div> 
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6" >
                    <img src="img/blank.png" id="img-id-1" class="img-responsive" style="margin-bottom: 42px;" />

                </div>-->

               

                <div id="altura"></div>

            </div>

    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-33383260-2', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>

