<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Programas de Filmes - 19º Festival de Arte Contemporânea Sesc_Videobrasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/home.js"></script>
    <meta property="og:title" content="<?php echo ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil');?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?=$url.ltrim($_SERVER['REQUEST_URI'], '/');?>"/>
    <meta property="og:image" content="<?=$url?>img/logo_fb.png"/>
    <meta property="og:site_name" content="<?php echo ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil');?>"/>
    <meta property="og:description"
          content="O 19º Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul, que acontece de 6 de outubro a 6 de dezembro de 2015, em São Paulo, transforma o Sul no grande direcionador de seus eixos curatoriais e de toda a sua programação, tendo como referência suas múltiplas questões que dizem respeito a diásporas, identidades híbridas, trânsito migratório e viagens, narrativas pessoais, memórias, isolamento, tecido social e insularidade."/>
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
                    <span> </span> 
                    <span><?php pten('programas de filmes > <span class="underline">obras selecionadas</span>', 
                                     'film programs > <span class="underline">knowledge zone</span>');  ?></span>       
                </div>
        	</div>
            <!-- /BREADCRUMB -->
            
            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px"><a href="#prog1"><?php pten('Programa #1', 'Program #1') ?></a> | <a href="#prog2"><?php pten('Programa #2', 'Program #2') ?></a> | <a href="#prog3"><?php pten('Programa #3', 'Program #3') ?></a> | <a href="progsfilmes_programacao.php"><?php pten('Programação', 'Schedule') ?></a></p>      
                </div>
            </div>
            <!-- SUBMENU -->


        <!-- PROGRAMA 1 -->
        <a name="prog1"></a><div class="row" >
             <div class="col-xs-12 titulo n" style="float: left;">
                <p style="margin-bottom:0">
                    <span><?php pten('PROGRAMA #1 | PAISAGENS E TERRITÓRIOS | 63’07”', 'PROGRAMA #1 | XXX | 63’07”'); ?></span>
                </p>
             </div>
        </div>

        <div class="row" style="clear: both;">
            <div class="col-sm-12 col-md-6" style="float: left ">
                <img src="img/obras/obra_robertosantaguida.jpg" class="img-responsive center-block" style="margin-bottom: 30px" />
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold">
                <?php pten('Roberto Santaguida (Canadá/Sérvia)', 'Roberto Santaguida (Canada/Serbia)'); ?><br />
                Goran, 2014, 10’38” </span><br />
                <?php pten('Sinopse Um projeto híbrido -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.',
                           'SXXXXXXXXXXXXXXXXX -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6" style="float: left ">
                <img src="img/obras/obra_robertosantaguida.jpg" class="img-responsive center-block" style="margin-bottom: 30px" />
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><?php pten('Roberto Santaguida (Canadá/Sérvia)', 'Roberto Santaguida (Canada/Serbia)'); ?><br />
                   Goran, 2014, 10’38” </span><br />
                   <?php pten('Sinopse Um projeto híbrido -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.',
                   'SXXXXXXXXXXXXXXXXX -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6" style="float: left ">
                <img src="img/obras/obra_robertosantaguida.jpg" class="img-responsive center-block" style="margin-bottom: 45px" />
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><?php pten('Roberto Santaguida (Canadá/Sérvia)', 'Roberto Santaguida (Canada/Serbia)'); ?><br />
                   Goran, 2014, 10’38” </span><br />
                   <?php pten('Sinopse Um projeto híbrido -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.',
                   'SXXXXXXXXXXXXXXXXX -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.'); ?></p>
            </div>
        </div>
        <!-- /PROGRAMA 1 -->



        <!-- PROGRAMA 2 -->
        <a name="prog2"></a><div class="row" >
             <div class="col-xs-12 titulo n" style="float: left;">
                <p style="margin-bottom:0">
                    <span><?php pten('Programa #2 | Real e surreal | 73’22”', 'Programa #2 | XXX | 73’22”'); ?></span>
                </p>
             </div>
        </div>

        <div class="row" style="clear: both;">
            <div class="col-sm-12 col-md-6" style="float: left ">
                <img src="img/obras/obra_tatianafuentessadowski.jpg" class="img-responsive center-block" style="margin-bottom: 30px" />
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><?php pten('Roberto Santaguida (Canadá/Sérvia)', 'Roberto Santaguida (Canada/Serbia)'); ?><br />
                   Goran, 2014, 10’38” </span><br />
                   <?php pten('Sinopse Um projeto híbrido -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.',
                   'SXXXXXXXXXXXXXXXXX -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6" style="float: left ">
                <img src="img/obras/obra_tatianafuentessadowski.jpg" class="img-responsive center-block" style="margin-bottom: 30px" />
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><?php pten('Roberto Santaguida (Canadá/Sérvia)', 'Roberto Santaguida (Canada/Serbia)'); ?><br />
                   Goran, 2014, 10’38” </span><br />
                   <?php pten('Sinopse Um projeto híbrido -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.',
                   'SXXXXXXXXXXXXXXXXX -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6" style="float: left ">
                <img src="img/obras/obra_tatianafuentessadowski.jpg" class="img-responsive center-block" style="margin-bottom: 45px" />
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><?php pten('Roberto Santaguida (Canadá/Sérvia)', 'Roberto Santaguida (Canada/Serbia)'); ?><br />
                   Goran, 2014, 10’38” </span><br />
                   <?php pten('Sinopse Um projeto híbrido -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.',
                   'SXXXXXXXXXXXXXXXXX -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.'); ?></p>
            </div>
        </div>
          
        <!-- /PROGRAMA 2 -->

        <!-- PROGRAMA 3 -->
        <a name="prog3"></a><div class="row" >
             <div class="col-xs-12 titulo n" style="float: left;">
                <p style="margin-bottom:0">
                    <span><?php pten('Programa #3 | Real e surreal | 73’22”', 'Programa #3 | XXX | 73’22”'); ?></span>
                </p>
             </div>
        </div>

        <div class="row" style="clear: both;">
            <div class="col-sm-12 col-md-6" style="float: left ">
                <img src="img/obras/obra_anavaz.jpg" class="img-responsive center-block" style="margin-bottom: 30px" />
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><?php pten('Roberto Santaguida (Canadá/Sérvia)', 'Roberto Santaguida (Canada/Serbia)'); ?><br />
                   Goran, 2014, 10’38” </span><br />
                   <?php pten('Sinopse Um projeto híbrido -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.',
                   'SXXXXXXXXXXXXXXXXX -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6" style="float: left ">
                <img src="img/obras/obra_anavaz.jpg" class="img-responsive center-block" style="margin-bottom: 30px" />
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><?php pten('Roberto Santaguida (Canadá/Sérvia)', 'Roberto Santaguida (Canada/Serbia)'); ?><br />
                   Goran, 2014, 10’38” </span><br />
                   <?php pten('Sinopse Um projeto híbrido -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.',
                   'SXXXXXXXXXXXXXXXXX -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6" style="float: left ">
                <img src="img/obras/obra_anavaz.jpg" class="img-responsive center-block" style="margin-bottom: 30px" />
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><?php pten('Roberto Santaguida (Canadá/Sérvia)', 'Roberto Santaguida (Canada/Serbia)'); ?><br />
                   Goran, 2014, 10’38” </span><br />
                   <?php pten('Sinopse Um projeto híbrido -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.',
                   'SXXXXXXXXXXXXXXXXX -- entre o livro de artista e a coletânea de ensaios -- realizado sob o signo do movimento sentido e vivido. Assim foi apresentado pela artista-pesquisadora Marie Ange Bordas Geografias em Movimento, o nono Caderno SESC_Videobrasil. Parte do quinto foco dos Programas Públicos do 18° festival, o encontro acerca da publicação, realizado em dezembro de 2013, discutiu temas caros ao Videobrasil, em um debate marcado pela profunda implicação prática de cada um dos convidados em suas temáticas de pesquisa.'); ?></p>
            </div>
        </div>
          
        <!-- /PROGRAMA 3 -->
            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

