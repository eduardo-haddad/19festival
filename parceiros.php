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
                    <span><?php pten('sobre o festival > <span class="underline">Parceiros</span>', 
                                     'about the festival > <span class="underline">Supporters</span>');  ?></span>      
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
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a>
                    </p>       
                </div>
            </div>
            <!-- SUBMENU -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Apoio institucional', 'Institutional Support');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12" >
                    <a href="http://electrica.com.br/home/" target="_blank"><img src="img/parceiros/parceiros-institucional.png" id="img-id-1" class="img-responsive" style="margin-bottom: 42px; width: 100px" /></a>

                </div>


            </div>

             <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Apoio cultural', 'Cultural Support');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6" >
                <img  class="img-responsive" style="margin-bottom: 15px; max-width: 485px" id="Image-Maps-Com-image-maps-2015-09-10-002026" src="img/parceiros/parceiros-cultural1.png" border="0" orgWidth="515" orgHeight="60" usemap="#image-maps-2015-09-10-002026" alt="" />
                <map name="image-maps-2015-09-10-002026" id="ImageMapsCom-image-maps-2015-09-10-002026">
                <area  alt="" title="" href="http://www.brasilturquia.com.br/" shape="rect" coords="8,3,89,54" style="outline:none;" target="_blank"     />
                <area  alt="" title="" href="http://saopaulo.ambafrance-br.org/" shape="rect" coords="113,0,206,59" style="outline:none;" target="_blank"     />
                <area  alt="" title="" href="https://br.mfa.lt/br/pt/" shape="rect" coords="230,0,356,59" style="outline:none;" target="_blank"     />
                <area  alt="" title="" href="http://www.mondriaanfonds.nl/en/" shape="rect" coords="387,0,432,57" style="outline:none;" target="_blank"     />
                <area  alt="" title="" href="http://consulmex.sre.gob.mx/saopaulo/" shape="rect" coords="460,0,513,59" style="outline:none;" target="_blank"     />
                <area shape="rect" coords="513,58,515,60" alt="Image Map" style="outline:none;" title="Image Map" href="http://www.image-maps.com/index.php?aff=mapped_users_0" />
                </map>
                    


<map id="imgmap201591013019" name="imgmap201591013019"><area shape="rect" alt="" title="" coords="1,3,98,48" href="http://csw.art.pl/index.php?action=air&lang=eng" target="_blank" /><area shape="rect" alt="" title="" coords="130,1,185,50" href="http://www.thechinaartfoundation.com/en/home/RQ" target="_blank" /><area shape="rect" alt="" title="" coords="208,3,296,49" href="http://www.goethe.de/ins/br/sab/ptindex.htm?wt_sc=salvador" target="_blank" /><area shape="rect" alt="" title="" coords="334,13,419,48" href="http://www.resartis.org/en/" target="_blank" /><area shape="rect" alt="" title="" coords="450,14,515,45" href="http://www.sp-arte.com/" target="_blank" /><!-- Created by Online Image Map Editor (http://www.maschek.hu/imagemap/index) --></map>


                    <map id="imgmap201591013019" name="imgmap201591013019"><area shape="rect" alt="" title="" coords="1,3,98,48" href="http://csw.art.pl/index.php?action=air&lang=eng" target="_blank" /><area shape="rect" alt="" title="" coords="130,1,185,50" href="http://www.thechinaartfoundation.com/en/home/RQ" target="_blank" /><area shape="rect" alt="" title="" coords="208,3,296,49" href="http://www.goethe.de/ins/br/sab/ptindex.htm?wt_sc=salvador" target="_blank" /><area shape="rect" alt="" title="" coords="334,13,419,48" href="http://www.resartis.org/en/" target="_blank" /><area shape="rect" alt="" title="" coords="450,14,515,45" href="http://www.sp-arte.com/" target="_blank" /><!-- Created by Online Image Map Editor (http://www.maschek.hu/imagemap/index) --></map>
                    <img id="imgmap201591013019" usemap="#imgmap201591013019" src="img/parceiros/parceiros-cultural2.png" id="img-id-1" class="img-responsive" style="margin-bottom: 42px;max-width: 485px" />
                </div>

            </div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Colaboração', 'Collaboration');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12" >
                    <img id="imgmap201591014531" usemap="#imgmap201591014531" src="img/parceiros/parceiros-colaboracao.png" id="img-id-1" class="img-responsive" style="margin-bottom: 42px;max-width: 485px" />
                    <map id="imgmap201591014531" name="imgmap201591014531"><area shape="rect" alt="" title="" coords="1,14,90,66" href="http://csw.art.pl/index.php?action=air&lang=eng" target="_blank" /><area shape="rect" alt="" title="" coords="106,5,178,64" href="http://www.arquetopia.org/" target="_blank" /><area shape="rect" alt="" title="" coords="192,15,302,53" href="http://delfinafoundation.com/" target="" /><area shape="rect" alt="" title="" coords="320,12,440,54" href="http://djerassi.org/" target="_blank" /><area shape="rect" alt="" title="" coords="455,3,513,58" href="http://kooshkresidency.com/" target="_blank" /><area shape="rect" alt="" title="" coords="3,79,93,130" href="http://www.kac.or.jp/eng/" target="" /><area shape="rect" alt="" title="" coords="120,91,277,121" href="http://www.redgategallery.com/" target="_blank" /><area shape="rect" alt="" title="" coords="308,93,406,121" href="http://wexarts.org/" target="_blank" /><!-- Created by Online Image Map Editor (http://www.maschek.hu/imagemap/index) --></map>

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

               



            </div>

    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

