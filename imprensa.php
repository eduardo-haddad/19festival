<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/expos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/19festival.js"></script>
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

        	<!-- BREADCRUMB -->
            <div class="row">
                <div class="col-xs-12 breadcrumb">
                    <span><?php pten('<span class="underline">imprensa</span>', 
                                     '<span class="underline">press</span>');  ?></span>      
                </div>
            </div>
            <!-- /BREADCRUMB -->



            <div class="row" >
                <div class="col-md-6" style="margin-top: 0">
                    
                        <p class="titulo">
                           <?php pten('CONTATO', 'CONTACT');  ?>
                        </p>
                    
                    
                        <?php pten(
                        '<p class="f"><span class="bold">A4 Comunicação | Assessoria de Imprensa</span><br />
                         Direção: Neila Carvalho | neilacarvalho@a4com.com.br<br />
                         Coordenação: Danilo Thomaz | danilothomaz@a4com.com.br<br /> 
                         Tel: +55 11 3897-4122</p>
                         
                         <p class="f"><span class="bold">Comunicação | Associação Cultural Videobrasil</span><br />
                         Coordenação: Ana Paula Vargas | paula@videobrasil.org.br<br />
                         Redação: Deborah Moreira | deborah@videobrasil.org.br<br />
                         Desenvolvimento web: Eduardo Haddad | eduardo@videobrasil.org.br<br />
                         Mídias Sociais: Kátia Kônig | katia@videobrasil.org.br <br />
                         Tel: +55 11 3465 0516<br />
                         comunicacao@videobrasil.org.br</p>

                         <p class="f"><span class="bold">Assessoria de Imprensa | Sesc Pompeia</span><br />
                         Coordenação: Roberta Della Noce <br />
                         (11) 3871-7740<br />
                         Assessores: Igor Cruz e Fernanda Porta Nova<br />
                         (11) 3871-7776 e 7720<br />
                         imprensa@pompeia.sescsp.org.br</p>', 

                        '<p class="f"><span class="bold">Press relations | A4 Comunicação</span><br />
                         Director: Neila Carvalho | neilacarvalho@a4com.com.br<br />
                         Coordinator: Danilo Thomaz | danilothomaz@a4com.com.br<br /> 
                         phone: +55 11 3897-4122</p>
                         
                         <p class="f"><span class="bold">Communications | Associação Cultural Videobrasil</span><br />
                         Coordinator: Ana Paula Vargas | paula@videobrasil.org.br<br />
                         Staff writer: Deborah Moreira | deborah@videobrasil.org.br<br />
                         Web development: Eduardo Haddad | eduardo@videobrasil.org.br<br />
                         Social media: Kátia Kônig | katia@videobrasil.org.br <br />
                         phone: +55 11 3465 0516<br />
                         comunicacao@videobrasil.org.br</p>

                         <p class="f"><span class="bold">Communications | Sesc Pompeia</span><br />
                         Coordinator: Roberta Della Noce <br />
                         phone: +55 11 3871 7740<br />
                         Press relations: Igor Cruz, Fernanda Porta Nova<br />
                         phone: +55 11 3871 7776 / 55 11 3871 7720<br />
                         imprensa@pompeia.sescsp.org.br</p>'); 

                        ?>
                    
                </div>
                <div class="col-md-6 " style="margin-top: 0px; border-left: 1pt solid #8F6B55; min-height: 240px">
                    <p class="titulo">
                        <?php pten('Texto', 'Text'); ?>
                    </p>
                    <p style="clear: both" class="f nomargin">
                    <?php pten('<span class="bold">Press Kit</span> (<a class="link" href="arquivos/19festival_presskit_pt.docx">português</a>, <a class="link" href="arquivos/19festival_presskit_en.docx">inglês</a>)<!-- <br /><br />
                                Imagens (download, flickr)-->',
                               '<span class="bold">Press Kit</span> (<a class="link" href="arquivos/19festival_presskit_pt.docx">Portuguese</a>, <a class="link" href="arquivos/19festival_presskit_en.docx">English</a>)<!-- <br /><br />
                                Images (download, flickr)-->'); ?>
                    </p>

                    <p class="titulo" style="margin-top: 30px">
                        <?php pten('Imagens', 'Images'); ?>
                    </p>
                    <p style="clear: both" class="f nomargin">
                    <?php pten('<span class="bold">Panoramas do Sul | Artistas convidados</span><br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_guestartists_artworks.zip" class="link">todas as obras</a> (arquivo zip)<br />
                                - <a href="https://www.flickr.com/photos/videobrasil/sets/72157656722312673" class="link" target="_blank">destaques</a> (flickr - alta resolução)<br /><br />
                                <span class="bold">Panoramas do Sul | Obras selecionadas</span><br />
                                - <a href="https://www.flickr.com/photos/videobrasil/albums/72157658378379360" class="link" target="_blank">todas as obras</a> (flickr - alta resolução)<br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_artworks_selectedartworks.zip" class="link">destaques</a> (arquivo zip)<br /><br />
                                <span class="bold">Panoramas do Sul | Projetos comissionados</span><br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_projects_sketches.zip" class="link">esboços</a> (arquivo zip)<br /><br />
                                <span class="bold">Quem nasce pra aventura não toma outro<br />rumo – obras do Acervo Videobrasil</span><br />
                                - <a href="https://www.flickr.com/photos/videobrasil/albums/72157659096547555" class="link" target="_blank">destaques</a> (flickr - alta resolução)
                                ',
                               '<span class="bold">Southern Panoramas | Guest artists</span><br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_guestartists_artworks.zip" class="link">all works</a> (zip file)<br />
                                - <a href="https://www.flickr.com/photos/videobrasil/sets/72157656722312673" class="link" target="_blank">highlights</a> (flickr - high resolution)<br /><br />
                                <span class="bold">Southern Panoramas | Selected works</span><br />
                                - <a href="https://www.flickr.com/photos/videobrasil/albums/72157658378379360" class="link" target="_blank">all works</a> (flickr - high resolution)<br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_artworks_selectedartworks.zip" class="link">highlights</a> (zip file)<br /><br />
                                <span class="bold">Southern Panoramas | C
ommissioned projects</span><br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_projects_sketches.zip" class="link">sketches</a> (zip file)<br /><br />
                                <span class="bold">Those born for adventure don’t stray from<br />the path – artworks from Videobrasil Collection</span><br />
                                - <a href="https://www.flickr.com/photos/videobrasil/albums/72157659096547555" class="link" target="_blank">highlights</a> (flickr - high resolution)'); ?>
                    </p>
                    

                </div>

            </div>
            
            <!--  <div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-top: 37px" >
                       <p>
                       <?php pten('Destaques do clipping', 'Clipping highlights');  ?>
                       </p>
                </div>
            </div>  -->

            <!-- <div class="row" style="clear:both">
                <div class="col-xs-12">

                    <div class="bloco">
                        <img src="img/imprensa/temp_clipping.png" /><br />
                        <div><span>nome do veículo<br />dd/mm/aaaa</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/imprensa/temp_clipping.png" /><br />
                        <div><span>nome do veículo<br />dd/mm/aaaa</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/imprensa/temp_clipping.png" /><br />
                        <div><span>nome do veículo<br />dd/mm/aaaa</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/imprensa/temp_clipping.png" /><br />
                        <div><span>nome do veículo<br />dd/mm/aaaa</span></div>

                    </div>

                    <div class="bloco">
                        <img src="img/imprensa/temp_clipping.png" /><br />
                        <div><span>nome do veículo<br />dd/mm/aaaa</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/imprensa/temp_clipping.png" /><br />
                        <div><span>nome do veículo<br />dd/mm/aaaa</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/imprensa/temp_clipping.png" /><br />
                        <div><span>nome do veículo<br />dd/mm/aaaa</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/imprensa/temp_clipping.png" /><br />
                        <div><span>nome do veículo<br />dd/mm/aaaa</span></div>

                    </div>
                   
                </div>

            </div>  -->

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

