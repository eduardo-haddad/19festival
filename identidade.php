<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Identidade' : 'Identity';

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
                    <span><?php pten('sobre o festival > <span class="underline">identidade visual</span>', 
                                     'about the festival > <span class="underline">visual identity</span>');  ?></span>      
                </div>
        	</div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Identidade', 'Identity');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" id="id-imagem-top" >
                    <img src="img/identidade/id1.png" id="img-id-1" class="img-responsive" />

                    <img src="img/identidade/id2.png" id="img-id-2" class="img-responsive" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;" id="id-texto">

                    <?php pten( 
                    ////APRESENTAÇAO PT
                    '<p class="f" style="display: inline">
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Museum, em Pittsburgh, EUA.</p><br />                     
                    <p class="k" style="display: inline">
                    18o Festival | 2013<br />
                    Troféu: Troféu 18o de Arte Contemporânea SESC_Videobrasil (Panoramas
                    do Sul)<br />
                    Artista: Erika Verzutti</p><br />
                    <p class="s">
                    Em bronze e cera colorida, o troféu do 18º Festival é uma
                    escultura da artista paulistana Erika Verzutti em forma de romã. “A
                    fruta foi uma escolha natural quando procurava uma forma de meu
                    repertório conhecido e que fosse também celebratória”, diz. “É uma
                    forma preciosa, muito expressiva, meio fisionômica, e associada também
                    a sorte”</p>',

                    //APRESENTAÇAO EN
                    '<p class="f" style="display: inline">
                    XXXXXXXXXXXXXX, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Museum, em Pittsburgh, EUA.</p><br />                     
                    <p class="k" style="display: inline">
                    18o Festival | 2013<br />
                    Troféu: Troféu 18o de Arte Contemporânea SESC_Videobrasil (Panoramas
                    do Sul)<br />
                    Artista: Erika Verzutti</p><br />
                    <p class="s">
                    Em bronze e cera colorida, o troféu do 18º Festival é uma
                    escultura da artista paulistana Erika Verzutti em forma de romã. “A
                    fruta foi uma escolha natural quando procurava uma forma de meu
                    repertório conhecido e que fosse também celebratória”, diz. “É uma
                    forma preciosa, muito expressiva, meio fisionômica, e associada também
                    a sorte”</p>');

                    ?>
                    
                    
                </div>

                <div class="col-sm-12 col-md-6 relative" id="id-imagem-bottom" style="margin-top: 15px">
                    <img src="img/identidade/id1.png" id="img-id-1" class="img-responsive" />

                    <img src="img/identidade/id2.png" id="img-id-2" class="img-responsive" />

                </div>

            </div><div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-top: 15px">
                <p style="margin-bottom:0">
                   <?php pten('Sobre os artistas', 'About the artists');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6" >
                    <img src="img/artistas/anavaz.jpg" id="img-id-1" class="img-responsive retrato-artista" style="margin-bottom: 15px; margin-left:auto;" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;" id="id-texto">

                    <?php pten( 
                    ////SOBRE OS ARTISTAS -  PT
                    '<p class="f" style="display: inline">
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Museum, em Pittsburgh, EUA.</p><br />                     
                    <p class="k" style="display: inline">
                    18o Festival | 2013<br />
                    Troféu: Troféu 18o de Arte Contemporânea SESC_Videobrasil (Panoramas
                    do Sul)<br />
                    Artista: Erika Verzutti</p><br />
                    <p class="s">
                    Em bronze e cera colorida, o troféu do 18º Festival é uma
                    escultura da artista paulistana Erika Verzutti em forma de romã. “A
                    fruta foi uma escolha natural quando procurava uma forma de meu
                    repertório conhecido e que fosse também celebratória”, diz. “É uma
                    forma preciosa, muito expressiva, meio fisionômica, e associada também
                    a sorte”</p>',

                    //SOBRE OS ARTISTAS - EN
                    '<p class="f" style="display: inline">
                    XXXXXXXXXXXXXX, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Museum, em Pittsburgh, EUA.</p><br />                     
                    <p class="k" style="display: inline">
                    18o Festival | 2013<br />
                    Troféu: Troféu 18o de Arte Contemporânea SESC_Videobrasil (Panoramas
                    do Sul)<br />
                    Artista: Erika Verzutti</p><br />
                    <p class="s">
                    Em bronze e cera colorida, o troféu do 18º Festival é uma
                    escultura da artista paulistana Erika Verzutti em forma de romã. “A
                    fruta foi uma escolha natural quando procurava uma forma de meu
                    repertório conhecido e que fosse também celebratória”, diz. “É uma
                    forma preciosa, muito expressiva, meio fisionômica, e associada também
                    a sorte”</p>');

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

