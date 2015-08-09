<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Realização' : 'Undertaking';

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
                    <span><?php pten('sobre o festival > <span class="underline">realização</span>', 
                                     'about the festival > <span class="underline">Undertaking</span>');  ?></span>      
                </div>
        	</div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Realização', 'Undertaking');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6" >
                    <img src="img/realizacao_sesc2.png" id="img-id-1" class="img-responsive retrato-artista" style="margin-bottom: 30px; margin-left:auto;" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;" id="id-texto">

                    <?php pten( 
                    ////SESC PT
                    '<p class="f" style="display: inline">
                    <span style="text-transform: uppercase">Sesc São Paulo</span><br>
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
                    tornaram-se verdadeiros objetos artísticos.</p>',

                    //SESC EN
                    '<p class="f" style="display: inline">
                    <span style="text-transform: uppercase">Sesc São Paulo</span><br>
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
                    sofreram transformações.</p>');

                    ?>
                    
                    
                </div>


            </div>
           
            <div class="row" style="clear: both;margin-top: 30px">

                <div class="col-sm-12 col-md-6" >
                    <img src="img/realizacao_vb2.png" id="img-id-1" class="img-responsive retrato-artista" style="margin-bottom: 30px;" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;" id="id-texto">

                    <?php pten( 
                    ////VB PT
                    '<p class="f" style="display: inline">
                    <span style="text-transform: uppercase">associação cultural videobrasil</span><br>
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
                    tornaram-se verdadeiros objetos artísticos.</p>',

                    //VB EN
                    '<p class="f" style="display: inline">
                    <span style="text-transform: uppercase">associação cultural videobrasil</span><br>
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
                    sofreram transformações.</p>');

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

