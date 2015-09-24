<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Zona de Reflexão' : 'Reflection Zone';

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

        	<!-- BREADCRUMB -->
            <div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span><?php pten('<span class="underline">zona de reflexão</span>', 
                                     '<span class="underline">knowledge zone</span>');  ?></span>      
                </div>
        	</div>
            <!-- /BREADCRUMB -->

            <div class="row">
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?=$titulo ?>
                </p>
                </div>
            </div>

            <div class="row" style="margin-bottom: 45px">
                <div class="col-sm-12 col-md-6 relative">


                </div>
                <div class="col-sm-12 col-md-6 relative">
                    
                     <p><?php pten('Em todas as exposições do Festival, espaços dedicados oferecem ao público conteúdos e informações adicionais sobre os trabalhos, a programação do evento e o Acervo Videobrasil. Acessíveis ao longo de todo o horário de visitação, plataformas de pesquisa, canais de programação
                                  e publicações permitem explorar referências relacionadas às obras, depoimentos dos artistas e registros das atividades reflexivas.',
                                  
                                  'All of the Festival’s exhibitions feature areas designed to provide additional contents and information about the artworks, the event’s program, and the Videobrasil Collection to the public. Research platforms, programming channels, and publications available during all opening hours allow viewers to explore references relating to the artworks, artists’ statements, and records of reflective activities.');
                        ?>
                    </p>


                </div>
            </div>


            <div class="row" >
                <a name="videoteca"></a>
                <div class="col-xs-12 titulo" style="float: left;">
                    
                </div>
            </div>
           
            <div class="row" style="clear: both; margin-bottom: 13px">

                <div class="col-sm-12 col-md-6 relative">
                    <img src="img/zona/videoteca.png" id="img-id-1" class="img-responsive" style="max-width: 485px" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">
                    
                    <p style="margin-bottom:13px" class="titulo">
                       <?php pten('Videoteca', 'Video Library');  ?>
                    </p>
                    
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
               
                </div>
            </div>
           
            <div class="row" style="clear: both;margin-bottom: 13px">

                <div class="col-sm-12 col-md-6 relative">
                    <img src="img/zona/canalvb.jpg" id="img-id-1" class="img-responsive" style="max-width: 485px" />
                    <!-- <iframe allowFullScreen allowTransparency="true" class="vzaar-video-player" frameborder="0" height="268" id="vzvd-1282382" mozallowfullscreen name="vzvd-1282382" src="//view.vzaar.com/1282382/player?looping=true&amp;autoplay=true&amp;disableControls=true&amp;hideControls=true&amp;brandOverlayFS=false" title="vzaar video player" type="text/html" webkitAllowFullScreen width="485"></iframe> -->

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">
                    <p style="margin-bottom:13px" class="titulo">
                       <?php pten('Canal VB', 'Channel VB');  ?>
                    </p>
                    <?php pten( 
                    ////Canal VB PT
                    '<p class="f">
                    Alimentado ao longo do 19º Festival, o canal de programação <em>on demand</em> reúne documentações audiovisuais sobre o evento, testemunhos de artistas, jurados e curadores participantes, registros das performances que integram a programação e íntegras das mesas do seminário <em>Lugares e sentidos da arte: debates a partir do Sul</em>.</p>
                    <p class="f">Clique <a href="http://site.videobrasil.org.br/canalvb/todos" class="link" target="_blank">aqui</a> para acessar o Canal VB.</p>',

                    //Canal VB EN
                    '<p class="f">
                    Fed throughout the 19th Festival, the channel features on-demand programming including audiovisual documentations of the event, statements from participating artists, jurors and curators, footage of featured performances and full footage of the panels from the seminar <em>Places and meanings of art: debates from the South</em>.</p>
                    <p class="f">Click <a href="http://site.videobrasil.org.br/en/canalvb/todos" class="link" target="_blank">here</a> to visit Channel VB.</p>');

                    ?>
                    
                    
                </div>

            </div>

            <div class="row" >
                <a name="plataformavb"></a><div class="col-xs-12 titulo" style="float: left;">
                
                </div>
            </div>
           
            <div class="row" style="clear: both;margin-bottom: 13px">

                <div class="col-sm-12 col-md-6 relative">
                    <img src="img/zona/plataforma.png" id="img-id-1" class="img-responsive" style="max-width: 485px" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">
                    <p style="margin-bottom:13px" class="titulo">
                       <?php pten('Plataforma:VB', 'Platform:VB');  ?>
                    </p>
                    <?php pten( 
                    ////Plataforma:VB PT
                    '<p class="f">
                    A ferramenta on-line de pesquisa coletiva desenvolvida pela Associação Cultural Videobrasil oferece um cardápio de depoimentos, imagens, links, ensaios e outros conteúdos referenciais sobre os artistas e obras do 19º Festival.</p>
                    <p class="f">Clique <a href="http://site.videobrasil.org.br/canalvb/todos" class="link" target="_blank">aqui</a> para acessar a Plataforma:VB.</p>',

                    //Plataforma:VB EN
                    '<p class="f">
                    The collective online research tool developed by Associação Cultural Videobrasil offers a menu of statements, images, links, essays, and other referential contents about the artists and artworks featured in the 19th Festival.</p>
                    <p class="f">Click <a href="http://site.videobrasil.org.br/canalvb/todos" class="link" target="_blank">here</a> to visit Platform:VB.</p>');

                    ?>
                    
                    
                </div>

            </div>

            <div class="row" >
                <a name="publicacoes"></a><div class="col-xs-12 titulo" style="float: left;">
                
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative">
                    <img src="img/zona/publicacoes.png" id="img-id-1" class="img-responsive" style="max-width: 485px" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">
                    <p style="margin-bottom:13px" class="titulo">
                       <?php pten('Publicações', 'Publications');  ?>
                    </p>
                    <?php pten( 
                    ////Publicações PT
                    '<p class="f">
                    Além das publicações <a href="publicacoes.php#festival" class="link" target="_blank">que serão lançadas ao longo do 19º Festival</a>, o público poderá conhecer exemplos de toda a produção editorial da parceria Sesc_Videobrasil, incluindo os catálogos das edições anteriores do Festival, livros de exposições como <em>Joseph Beuys: a revolução somos nós</em> e <em>Isaac Julien – Geopoéticas</em>, e a coleção da revista Caderno Sesc_Videobrasil.</p>
                    <p class="f">Clique <a href="http://site.videobrasil.org.br/publicacoes" class="link" target="_blank">aqui</a> e conheça as demais publicações lançadas em parceria entre Edições Sesc São Paulo e Associação Cultural Videobrasil.</p>',

                    //Publicações EN
                    '<p class="f">
                    Besides the three publications <a href="publicacoes.php#festival" class="link" target="_blank">that are part of the 19th Festival’s project</a>, samples of the Sesc_Videobrasil partnership’s entire editorial production will be available to the public, including catalogs from past Festival editions, exhibition books such as <em>Joseph Beuys: we are the revolution</em> and <em>Isaac Julien – Geopoetics</em>, and the Caderno Sesc_Videobrasil magazine collection.</p>
                    <p class="f">Click <a href="http://site.videobrasil.org.br/en/publicacoes" class="link" target="_blank">here</a> to learn more about the publications released in partnership between Edições Sesc São Paulo and Associação Cultural Videobrasil.</p>');

                    ?>
                    
                    
                </div>

            </div>



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

