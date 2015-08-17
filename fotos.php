<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Fotos e Vídeos' : 'Photos and Videos';

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
    <script src="js/galleria/galleria-1.4.2.min.js"></script>
    <script src="js/galleria/plugins/flickr/galleria.flickr.js"></script>
    <script src="js/jquery.hoverIntent.js"></script>
    <style>
        .galleria {width: 100%; padding-bottom: 56.25%;}
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

            <div class="row">
                <div class="col-xs-12 breadcrumb">
                    <span><?php pten('fotos e vídeos</span>', 
                                     'photos and vídeos');  ?></span>      
                </div>
            </div>
            
             <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom: 30px"><a id="">Galeria 1</a> | <a id="">Galeria 2</a> | <a id="">Galeria 3</a></p>      
                </div>
            </div> 

            <!-- GALERIA -->
            <div class="galleria"></div>
             <script>
                Galleria.loadTheme('js/galleria/themes/classic/galleria.classic.js');
                Galleria.run('.galleria', {
                    flickr: 'set:72157639977971153',
                    flickrOptions: {
                        sort: 'date-posted-asc',
                        imageSize: 'big',
                        thumbSize: 'medium',
                        description: 'true'
                    }

                });
            </script> 
            <!-- /GALERIA -->

            <span class="titulo"><?php pten('Em breve','Coming soon'); ?></span>
          

            

            </div><div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

