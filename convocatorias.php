<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Convocatórias' : 'Open Calls';

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
    <style type="text/css">
  
  a#linkartista {
    color: inherit;
    text-decoration: underline;
    
  }

  a#linkartista:hover {
    color: inherit;
    
  }

</style>

</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include "elements/mapa.html"; ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container" style="min-height: auto">

        <!-- HEADER -->
        <header><?php include "elements/header.html"; ?></header>
        <!-- /HEADER -->

        	<div style="height:36px; clear: both">&nbsp;</div>

        	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span><?php pten('sobre o festival > <span class="underline">Convocatórias</span>', 
                                     'about the festival > <span class="underline">Open Calls</span>');  ?></span>      
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
                            <a href="parceiros.php"><?php pten('Parceiros','Supporters');?></a> | 
                            <a href="fichatecnica.php"><?php pten('Ficha Técnica','Staff');?></a> | 
                            <a href="convocatorias.php"><span style="text-decoration: underline"><?php pten('Convocatórias 19º','Open calls');?></span></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a> | 
                            <a href="visite.php"><?php pten('Visite','Visit');?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                    <?= $titulo ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

              

                <div class="col-sm-12 col-md-6 h relative" style="float: left;">
                     <!-- <img src="img/sobre/apresentacao.png" class="img-responsive" style="max-width: 485px" /> -->
                    
                    </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                   

                    <?php pten(                      ////APRESENTAÇAO PT                     
                        '<p class="f">O Festival de Arte Contemporânea Sesc_Videobrasil acredita na necessidade de atuar em prol de um campo artístico e cultural de regiões e países que ainda precisam inventar novas formas de circulação e visibilidade. </p>

                         <p class="f">A seleção de artistas realizada por uma comissão curadora a partir de convocatória aberta configura-se como estratégia democrática vital para o Festival, possibilitando a construção de um espaço de visibilidade, diálogo e produção de conhecimento sobre a arte produzida nesses países.</p>
                         
                         <p class="f">Na 19ª edição do Festival, a convocatória para inscrições foi composta, pela primeira vez, por dois editais distintos: um para obras e outro, este inédito, para o comissionamento de projetos a serem produzidos com o acompanhamento dos curadores e apoio do Festival. </p>
                         
                         <p class="f">Acesse <a href="http://site.videobrasil.org.br/inscricao" id="linkartista" target="_blank">aqui</a> as convocatórias do 19º Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul.</p>',

                    //APRESENTAÇAO EN                     
                        '<p class="f">The Contemporary Art Festival Sesc_Videobrasil believes in the need to work on behalf of art and culture in regions and countries that are yet to invent new forms of circulation and visibility. </p>

                         <p class="f">The open call-based selection of artists by a curatorial committee is a key democratic strategy to the Festival, enabling the construction of a space to showcase, discuss and produce knowledge about art made in the featured countries.</p>
                         
                         <p class="f">In the Festival’s 19th edition, the call for submissions comprised, for the first time ever,  two separate open calls: one for artworks and another for the commissioning of projects to be developed under the oversight of curators and with backing from the Festival.</p>
                         
                         <p class="f"><a href="http://site.videobrasil.org.br/en/inscricao" id="linkartista" target="_blank">Have access</a> to the 19th Contemporary Art Festival Sesc_Videobrasil | Southern Panoramas.</p>






                        </p>');

                    ?>
                </div>
            </div>

           
                
                

            <br style="margin-bottom: 13px" />

            <!-- <div class="row">
                <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_01-temp.jpg" />
                </div>
               <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_02-temp.jpg" />
                </div>
            </div> -->

            <div id="altura">&nbsp;</div>
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

