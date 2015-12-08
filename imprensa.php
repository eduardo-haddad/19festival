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
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_vistas/obras-19festival-fotografo_Everton_Ballardin.zip" class="link">vistas da exposição</a> (arquivo zip) - fotógrafo: Everton Ballardin<br />
                                - <a href="https://www.flickr.com/photos/videobrasil/albums/72157658378379360" class="link" target="_blank">todas as obras</a> (flickr - alta resolução)<br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_artworks_selectedartworks.zip" class="link">destaques</a> (arquivo zip)<br /><br />
                                <span class="bold">Panoramas do Sul | Projetos comissionados</span><br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_vistas/projetos-19festival-fotografo_Everton_Ballardin.zip" class="link">vistas da exposição</a> (arquivo zip) - fotógrafo: Everton Ballardin<br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_projects_sketches.zip" class="link">esboços</a> (arquivo zip)<br /><br />
                                <span class="bold">Quem nasce pra aventura não toma outro<br />rumo – obras do Acervo Videobrasil</span><br />
                                - <a href="https://www.flickr.com/photos/videobrasil/albums/72157659096547555" class="link" target="_blank">destaques</a> (flickr - alta resolução)
                                ',
                               '<span class="bold">Southern Panoramas | Guest artists</span><br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_guestartists_artworks.zip" class="link">all works</a> (zip file)<br />
                                - <a href="https://www.flickr.com/photos/videobrasil/sets/72157656722312673" class="link" target="_blank">highlights</a> (flickr - high resolution)<br /><br />
                                <span class="bold">Southern Panoramas | Selected works</span><br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_vistas/obras-19festival-fotografo_Everton_Ballardin.zip" class="link">exhibition views</a> (zip file) - photos: Everton Ballardin<br />
                                - <a href="https://www.flickr.com/photos/videobrasil/albums/72157658378379360" class="link" target="_blank">all works</a> (flickr - high resolution)<br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_artworks_selectedartworks.zip" class="link">highlights</a> (zip file)<br /><br />
                                <span class="bold">Southern Panoramas | Commissioned projects</span><br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_vistas/projetos-19festival-fotografo_Everton_Ballardin.zip" class="link">exhibition views</a> (zip file) - photos: Everton Ballardin<br />
                                - <a href="http://www.videobrasil.org.br/press/19festival/19festival_projects_sketches.zip" class="link">sketches</a> (zip file)<br /><br />
                                <span class="bold">Those born for adventure don’t stray from<br />the path – artworks from Videobrasil Collection</span><br />
                                - <a href="https://www.flickr.com/photos/videobrasil/albums/72157659096547555" class="link" target="_blank">highlights</a> (flickr - high resolution)'); ?>
                    </p>
                    

                </div>

            </div>
            
            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-top: 37px" >
                       <p>
                       <?php pten('Destaques do clipping', 'Clipping highlights');  ?>
                       </p>
                </div>
            </div> 

            <div class="row" style="clear:both">
                <div class="col-xs-12">

                    
                    <!-- 47 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_7-BOOK_REVIEWS_AA_DEC.pdf" 
                        target="_blank">
                            <img src="img/imprensa/artafrica/ArtAfrica_7-BOOK_REVIEWS_AA_DEC.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_7-BOOK_REVIEWS_AA_DEC.pdf" 
                            target="_blank">
                            <span><?php pten('Art Africa (Resenhas de livros)', 'Art Africa (Book reviews)'); ?><br />
                            <?php pten('01/12/2015', '2015/DEC/01'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 47 -->

                    <!-- 46 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_6-Entrevista_Sabrina_Moura.pdf" 
                        target="_blank">
                            <img src="img/imprensa/artafrica/ArtAfrica_6-Entrevista_Sabrina_Moura.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_6-Entrevista_Sabrina_Moura.pdf" 
                            target="_blank">
                            <span><?php pten('Art Africa (Entrevista com Sabrina Moura)', 'Art Africa (Interview with Sabrina Moura)'); ?><br />
                            <?php pten('01/12/2015', '2015/DEC/01'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 46 -->

                    <!-- 45 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_5-Entrevista_Abdoulaye_Konate.pdf" 
                        target="_blank">
                            <img src="img/imprensa/artafrica/ArtAfrica_5-Entrevista_Abdoulaye_Konate.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_5-Entrevista_Abdoulaye_Konate.pdf" 
                            target="_blank">
                            <span><?php pten('Art Africa (Entrevista com Abdoulaye Konaté)', 'Art Africa (Interview with Abdoulaye Konaté)'); ?><br />
                            <?php pten('01/12/2015', '2015/DEC/01'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 45 -->

                    <!-- 44 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_4-Entrevistas_Keli_Safia_Maksud_e_Joao_Laia.pdf" 
                        target="_blank">
                            <img src="img/imprensa/artafrica/ArtAfrica_4-Entrevistas_Keli_Safia_Maksud_e_Joao_Laia.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_4-Entrevistas_Keli_Safia_Maksud_e_Joao_Laia.pdf" 
                            target="_blank">
                            <span><?php pten('Art Africa (Entrevista com Keli Safia Maksud e João Laia)', 'Art Africa (Interview with Keli Safia Maksud & João Laia)'); ?><br />
                            <?php pten('01/12/2015', '2015/DEC/01'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 44 -->

                    <!-- 43 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_3-Entrevista_NGone_Fall.pdf" 
                        target="_blank">
                            <img src="img/imprensa/artafrica/ArtAfrica_3-Entrevista_NGone_Fall.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_3-Entrevista_NGone_Fall.pdf" 
                            target="_blank">
                            <span><?php pten('Art Africa (Entrevista com  N\'Gone Fall)', 'Art Africa (Interview with N\'Gone Fall)'); ?><br />
                            <?php pten('01/12/2015', '2015/DEC/01'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 43 -->

                    <!-- 42 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_2-Entrevista_Solange_Farkas.pdf" 
                        target="_blank">
                            <img src="img/imprensa/artafrica/ArtAfrica_2-Entrevista_Solange_Farkas.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_2-Entrevista_Solange_Farkas.pdf" 
                            target="_blank">
                            <span><?php pten('Art Africa (Entrevista com Solange Farkas)', 'Art Africa (Interview with Solange Farkas)'); ?><br />
                            <?php pten('01/12/2015', '2015/DEC/01'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 42 -->

                    <!-- 41 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_1-Apresentacao.pdf" 
                        target="_blank">
                            <img src="img/imprensa/artafrica/ArtAfrica_1-Apresentacao.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/artafrica/ArtAfrica_1-Apresentacao.pdf" 
                            target="_blank">
                            <span><?php pten('Art Africa (Apresentação)', 'Art Africa (Introduction)'); ?><br />
                            <?php pten('01/12/2015', '2015/DEC/01'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 41 -->

                    <!-- 40 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151130_Ocula.png" 
                        target="_blank">
                            <img src="img/imprensa/20151130_Ocula.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151130_Ocula.png" 
                            target="_blank">
                            <span>Ocula<br />
                            <?php pten('30/11/2015', '2015/NOV/30'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 40 -->

                    <!-- 39 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151112_Arshake(1).png" 
                        target="_blank">
                            <img src="img/imprensa/20151112_Arshake(1).jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151112_Arshake(1).png" 
                            target="_blank">
                            <span>Arshake<br />
                            <?php pten('12/11/2015', '2015/NOV/12'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 39 -->

                    <!-- 38 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151104_Veja_SP_Expos.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20151104_Veja_SP_Expos.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151104_Veja_SP_Expos.jpg" 
                            target="_blank">
                            <span>Veja São Paulo<br />
                            <?php pten('04/11/2015', '2015/NOV/04'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 38 -->

                    <!-- 37 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151104_Mousse.png" 
                        target="_blank">
                            <img src="img/imprensa/20151104_Mousse.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151104_Mousse.png" 
                            target="_blank">
                            <span>Mousse<br />
                            <?php pten('04/11/2015', '2015/NOV/04'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 37 -->

                    <!-- 36 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151029_Exit_Express.png" 
                        target="_blank">
                            <img src="img/imprensa/20151029_Exit_Express.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151029_Exit_Express.png" 
                            target="_blank">
                            <span>Exit Express<br />
                            <?php pten('29/10/2015', '2015/OCT/29'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 36 -->

                    <!-- 35 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151029_ArteCapital.png" 
                        target="_blank">
                            <img src="img/imprensa/20151029_ArteCapital.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151029_ArteCapital.png" 
                            target="_blank">
                            <span>Arte Capital<br />
                            <?php pten('29/10/2015', '2015/OCT/29'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 35 -->

                    <!-- 34 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151029_ArteCapital_.png" 
                        target="_blank">
                            <img src="img/imprensa/20151029_ArteCapital_.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151029_ArteCapital_.png" 
                            target="_blank">
                            <span>Arte Capital<br />
                            <?php pten('29/10/2015', '2015/OCT/29'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 34 -->

                    <!-- 33 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151028_Terremoto_MX.png" 
                        target="_blank">
                            <img src="img/imprensa/20151028_Terremoto_MX.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151028_Terremoto_MX.png" 
                            target="_blank">
                            <span>Terremoto MX<br />
                            <?php pten('28/10/2015', '2015/OCT/28'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 33 -->

                    <!-- 32 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151021_El Pais.png" 
                        target="_blank">
                            <img src="img/imprensa/20151021_El Pais.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151021_El Pais.png" 
                            target="_blank">
                            <span>El Pais<br />
                            <?php pten('21/10/2015', '2015/OCT/21'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 32 -->                    

                    <!-- 29 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151016_Canal_Curta.mp4" 
                        target="_blank">
                            <img src="img/imprensa/20151016_Canal_Curta.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151016_Canal_Curta.mp4" 
                            target="_blank">
                            <span>Canal Curta<br />
                            <?php pten('16/10/2015', '2015/OCT/16'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 29 -->

                    <!-- 31 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151009_PIPA.png" 
                        target="_blank">
                            <img src="img/imprensa/20151009_PIPA.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151009_PIPA.png" 
                            target="_blank">
                            <span>PIPA<br />
                            <?php pten('09/10/2015', '2015/OCT/09'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 31 -->

                    <!-- 28 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151009_O_Estado_de_S._Paulo_Caderno_2_pg_C3.JPG" 
                        target="_blank">
                            <img src="img/imprensa/20151009_O_Estado_de_S._Paulo_Caderno_2_pg_C3.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151009_O_Estado_de_S._Paulo_Caderno_2_pg_C3.JPG" 
                            target="_blank">
                            <span>O Estado de S.Paulo<br />
                            <?php pten('09/10/2015', '2015/OCT/09'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 28 -->

                    <!-- 27 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151009_Divirta-se_O_Guia_do_Estadao_Exposicoes_pg_76.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20151009_Divirta-se_O_Guia_do_Estadao_Exposicoes_pg_76.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151009_Divirta-se_O_Guia_do_Estadao_Exposicoes_pg_76.jpg" 
                            target="_blank">
                            <span>Divirta-se - O Guia do Estado<br />
                            <?php pten('09/10/2015', '2015/OCT/09'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 27 -->

                    <!-- 26 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151008_O_Globo.png" 
                        target="_blank">
                            <img src="img/imprensa/20151008_O_Globo.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151008_O_Globo.png" 
                            target="_blank">
                            <span>O Estado de S.Paulo<br />
                            <?php pten('09/10/2015', '2015/OCT/09'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 26 -->
                    
                    <!-- 25 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151008_O_Estado_de_S._Paulo_Sonia_Racy_pg_C2.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20151008_O_Estado_de_S._Paulo_Sonia_Racy_pg_C2.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151008_O_Estado_de_S._Paulo_Sonia_Racy_pg_C2.jpg" 
                            target="_blank">
                            <span>O Estado de S.Paulo<br />
                            <?php pten('08/10/2015', '2015/OCT/08'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 25 -->

                    <!-- 24 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151007_Metropolis.mp4" 
                        target="_blank">
                            <img src="img/imprensa/20151007_Metropolis.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151007_Metropolis.mp4" 
                            target="_blank">
                            <span>Metropolis<br />
                            <?php pten('07/10/2015', '2015/OCT/07'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 24 -->

                    <!-- 23 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151007_Cultura_FM.png" 
                        target="_blank">
                            <img src="img/imprensa/20151007_Cultura_FM.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151007_Cultura_FM.png" 
                            target="_blank">
                            <span>Cultura FM<br />
                            <?php pten('07/10/2015', '2015/OCT/07'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 23 -->

                    <!-- 22 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151006_Brasileiros.png" 
                        target="_blank">
                            <img src="img/imprensa/20151006_Brasileiros.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151006_Brasileiros.png" 
                            target="_blank">
                            <span>Brasileiros<br />
                            <?php pten('06/10/2015', '2015/OCT/06'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 22 -->

                    <!-- 21 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151005_Das_Artes.png" 
                        target="_blank">
                            <img src="img/imprensa/20151005_Das_Artes.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151005_Das_Artes.png" 
                            target="_blank">
                            <span>Das Artes<br />
                            <?php pten('05/10/2015', '2015/OCT/05'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 21 -->

                    <!-- 20 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151005_Catraca_Livre.png" 
                        target="_blank">
                            <img src="img/imprensa/20151005_Catraca_Livre.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151005_Catraca_Livre.png" 
                            target="_blank">
                            <span>Catraca Livre<br />
                            <?php pten('05/10/2015', '2015/OCT/05'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 20 -->

                    <!-- 19 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151004_Folha_de_Sao_Paulo.png" 
                        target="_blank">
                            <img src="img/imprensa/20151004_Folha_de_Sao_Paulo.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151004_Folha_de_Sao_Paulo.png" 
                            target="_blank">
                            <span>Folha de S.Paulo<br />
                            <?php pten('04/10/2015', '2015/OCT/04'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 19 -->

                    <!-- 18 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151002_Divirta-se_O_Guia_do_Estadao_Exposicoes_pg_74.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20151002_Divirta-se_O_Guia_do_Estadao_Exposicoes_pg_74.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151002_Divirta-se_O_Guia_do_Estadao_Exposicoes_pg_74.jpg" 
                            target="_blank">
                            <span>Divirta-se - O Guia do Estado<br />
                            <?php pten('02/10/2015', '2015/OCT/02'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 18 -->

                    <!-- 17 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20151001_Revista_Bamboo.pdf" 
                        target="_blank">
                            <img src="img/imprensa/20151001_Revista_Bamboo.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20151001_Revista_Bamboo.pdf" 
                            target="_blank">
                            <span>Revista Bamboo<br />
                            <?php pten('01/10/2015', '2015/OCT/01'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 17 -->

                    <!-- 16 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/201509_ArteBrasileiros.pdf" 
                        target="_blank">
                            <img src="img/imprensa/201509_ArteBrasileiros.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/201509_ArteBrasileiros.pdf" 
                            target="_blank">
                            <span>Arte!Brasileiros<br />
                            <?php pten('09/2015', '2015/SEP'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 16 -->

                    <!-- 15 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150929_Catraca_Livre.png" 
                        target="_blank">
                            <img src="img/imprensa/20150929_Catraca_Livre.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150929_Catraca_Livre.png" 
                            target="_blank">
                            <span>Catraca Livre<br />
                            <?php pten('29/09/2015', '2015/SEP/29'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 15 -->

                    <!-- 14 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150924_La_Tempestad.png" 
                        target="_blank">
                            <img src="img/imprensa/20150924_La_Tempestad.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150924_La_Tempestad.png" 
                            target="_blank">
                            <span>La Tempestad<br />
                            <?php pten('24/09/2015', '2015/SEP/24'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 14 -->

                    <!-- 13 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150921_Arte_Brasileiros.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20150921_Arte_Brasileiros.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150921_Arte_Brasileiros.jpg" 
                            target="_blank">
                            <span>Arte!Brasileiros<br />
                            <?php pten('21/09/2015', '2015/SEP/21'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 13 -->

                    <!-- 12 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150917_Das_Artes.png" 
                        target="_blank">
                            <img src="img/imprensa/20150917_Das_Artes.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150917_Das_Artes.png" 
                            target="_blank">
                            <span>Das Artes<br />
                            <?php pten('17/09/2015', '2015/SEP/17'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 12 -->

                    <!-- 30 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150901_Artforum.pdf" 
                        target="_blank">
                            <img src="img/imprensa/20150901_Artforum.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150901_Artforum.pdf" 
                            target="_blank">
                            <span>Canal Curta<br />
                            <?php pten('01/09/2015', '2015/SEP/01'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 30 -->

                    <!-- 11 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150830_Folha_de_Sao_Paulo.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20150830_Folha_de_Sao_Paulo.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150830_Folha_de_Sao_Paulo.jpg" 
                            target="_blank">
                            <span>Folha de S.Paulo<br />
                            <?php pten('30/08/2015', '2015/AUG/30'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 11 -->

                    <!-- 10 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150830_Folha_de_S._Paulo_Ilustrada_pg_C8.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20150830_Folha_de_S._Paulo_Ilustrada_pg_C8.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150830_Folha_de_S._Paulo_Ilustrada_pg_C8.jpg" 
                            target="_blank">
                            <span>Folha de S.Paulo - Ilustrada<br />
                            <?php pten('30/08/2015', '2015/AUG/30'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 10 -->

                    <!-- 09 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/201507_ArteBrasileiros_PT.pdf" 
                        target="_blank">
                            <img src="img/imprensa/201507_ArteBrasileiros_PT.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/201507_ArteBrasileiros_PT.pdf" 
                            target="_blank">
                            <span>Arte!Brasileiros (Português)<br />
                            <?php pten('07/2015', '2015/JUL'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 09 -->

                    <!-- 08 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/201507_ArteBrasileiros_ENG.pdf" 
                        target="_blank">
                            <img src="img/imprensa/201507_ArteBrasileiros_ENG.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/201507_ArteBrasileiros_ENG.pdf" 
                            target="_blank">
                            <span>Arte!Brasileiros (English)<br />
                            <?php pten('07/2015', '2015/JUL'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 08 -->

                    <!-- 07 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150526_Folha_de_Sao_Paulo.pdf" 
                        target="_blank">
                            <img src="img/imprensa/20150526_Folha_de_Sao_Paulo.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150526_Folha_de_Sao_Paulo.pdf" 
                            target="_blank">
                            <span>Folha de S.Paulo<br />
                            <?php pten('26/05/2015', '2015/MAY/26'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 07 -->

                    <!-- 06 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150508_Select.png" 
                        target="_blank">
                            <img src="img/imprensa/20150508_Select.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150508_Select.png" 
                            target="_blank">
                            <span>Select<br />
                            <?php pten('08/05/2015', '2015/MAY/08'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 06 -->

                    <!-- 05 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150503_ARC.png" 
                        target="_blank">
                            <img src="img/imprensa/20150503_ARC.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150503_ARC.png" 
                            target="_blank">
                            <span>ARC Magazine<br />
                            <?php pten('03/05/2015', '2015/MAY/03'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 05 -->

                    <!-- 04 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150502_Folha_de_Sao_Paulo.pdf" 
                        target="_blank">
                            <img src="img/imprensa/20150502_Folha_de_Sao_Paulo.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150502_Folha_de_Sao_Paulo.pdf" 
                            target="_blank">
                            <span>Folha de S.Paulo<br />
                            <?php pten('02/05/2015', '2015/MAY/02'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 04 -->

                    <!-- 03 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150312_Arc.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20150312_Arc.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150312_Arc.jpg" 
                            target="_blank">
                            <span>ARC Magazine<br />
                            <?php pten('12/03/2015', '2015/MAR/12'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 03 -->

                    <!-- 02 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20150104_Valor.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20150104_Valor.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20150104_Valor.jpg" 
                            target="_blank">
                            <span>Valor<br />
                            <?php pten('04/01/2015', '2015/JAN/04'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 02 -->

                    <!-- 01 -->
                    <div class="bloco">
                        <a href="http://videobrasil.org.br/19/imprensa/20141222_O_Estado_de_Sao_Paulo.jpg" 
                        target="_blank">
                            <img src="img/imprensa/20141222_O_Estado_de_Sao_Paulo.jpg" />
                        </a><br />
                        <div>
                            <a href="http://videobrasil.org.br/19/imprensa/20141222_O_Estado_de_Sao_Paulo.jpg" 
                            target="_blank">
                            <span>O Estado de S.Paulo<br />
                            <?php pten('22/12/2014', '2014/DEC/22'); ?></span>
                            </a>
                        </div>
                    </div>
                    <!-- 01 -->

                   
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

