<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Zona de Reflexão' : 'Knowledge Zone';

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

        	<!-- BREADCRUMB -->
            <div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span><?php pten('<span class="underline">zona de reflexão</span>', 
                                     '<span class="underline">knowledge zone</span>');  ?></span>      
                </div>
        	</div>
            <!-- /BREADCRUMB -->


            <div class="row" >
                <a name="videoteca"></a><div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Videoteca', 'Video Library');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative">
                    <img src="img/zona/videoteca.png" id="img-id-1" class="img-responsive" style="max-width: 485px" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    <?php pten( 
                    ////Videoteca PT
                    '<p class="f" style="display: inline">
                    Uma interface amigável permite ao público consultar e acessar grande parte dos conteúdos digitalizados que integram os arquivos do Videobrasil. Entre outros, estarão disponíveis a Videobrasil Coleção de Autores, com documentários sobre artistas do Sul; obras premiadas em outras edições; mostras paralelas e programas de vídeo construídos a partir do acervo; e registros de performances que passaram pela programação do Festival.</p>',

                    //Videoteca EN
                    '<p class="f" style="display: inline">
                    A user-friendly interface enables the public to navigate and access most of the digitalized contents from the archives of Videobrasil. Available contents will include the Videobrasil Authors Collection, featuring documentaries on artists from the South; winning works from past editions; parallel exhibitions and video programs based on the collection; and recorded performances from past Festival editions.</p>');

                    ?>
                    
                    
                </div>

            </div>


            <div class="row" >
                <a name="canalvb"></a><div class="col-xs-12 titulo" style="float: left;" name="canalvb">
                <p style="margin-bottom:0">
                   <?php pten('Canal VB', 'VB Channel');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative">
                    <img src="img/zona/canalvb.png" id="img-id-1" class="img-responsive" style="max-width: 485px" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    <?php pten( 
                    ////Canal VB PT
                    '<p class="f" style="display: inline">
                    Alimentado ao longo do 19o Festival, o canal de programação on demand reúne documentações audiovisuais sobre o evento, testemunhos de artistas, jurados e curadores participantes, registros das performances que integram a programação e íntegras das mesas do seminário Lugares e sentidos da arte: debates a partir do Sul.</p>',

                    //Canal VB EN
                    '<p class="f" style="display: inline">
                    Fed throughout the 19th Festival, the channel features on-demand programming including audiovisual documentations of the event, statements from participating artists, jurors and curators, footage of featured performances and full footage of the panels from the seminar Places and meanings of art: debates from the South.</p>');

                    ?>
                    
                    
                </div>

            </div>

            <div class="row" >
                <a name="plataformavb"></a><div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Plataforma:VB', 'Platform:VB');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative">
                    <img src="img/zona/plataforma.png" id="img-id-1" class="img-responsive" style="max-width: 485px" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    <?php pten( 
                    ////Plataforma:VB PT
                    '<p class="f" style="display: inline">
                    A ferramenta on-line de pesquisa coletiva desenvolvida pela Associação Cultural Videobrasil oferece um cardápio de depoimentos, imagens, links, ensaios e outros conteúdos referenciais sobre os artistas e obras do 19o Festival.</p>',

                    //Plataforma:VB EN
                    '<p class="f" style="display: inline">
                    The collective online research tool developed by Associação Cultural Videobrasil offers a menu of statements, images, links, essays, and other referential contents about the artists and artworks featured in the 19th Festival.</p>');

                    ?>
                    
                    
                </div>

            </div>

            <div class="row" >
                <a name="publicacoes"></a><div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Publicações', 'Publications');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative">
                    <img src="img/zona/publicacoes.png" id="img-id-1" class="img-responsive" style="max-width: 485px" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    <?php pten( 
                    ////Publicações PT
                    '<p class="f" style="display: inline">
                    Além das publicações que serão lançadas ao longo do 19o Festival (ver p. 61), o público poderá conhecer exemplos de toda a produção editorial da parceria Sesc_Videobrasil, incluindo os catálogos das edições anteriores do Festival, livros de exposições como Joseph Beuys: a revolução somos nós e Isaac Julien – Geopoéticas, e a coleção da revista Caderno Sesc_Videobrasil.</p>',

                    //Publicações EN
                    '<p class="f" style="display: inline">
                    Besides the three publications that are part of the 19th Festival’s project (see p. xx), samples of the Sesc_Videobrasil partnership’s entire editorial production will be available to the public, including catalogs from past Festival editions, exhibition books such as Joseph Beuys: we are the revolution and Isaac Julien – Geopoetics, and the Caderno Sesc_Videobrasil magazine collection.</p>');

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

