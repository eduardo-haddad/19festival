<?php 
include("../elements/config.php"); 
$ch  = curl_init('http://acervo.videobrasil.org.br/api/obras/obra/1687671');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$obra = json_decode($result);
curl_close($ch);

$id_artista = $obra->autores[0]->autor_id;

$ch  = curl_init('http://acervo.videobrasil.org.br/api/artistas/artista/308997');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$artista = json_decode($result);
curl_close($ch);

$url_vzaar = $obra->canalvb[0]->url;
$id_vzaar = preg_replace("/[^0-9]/", "", $url_vzaar);

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/expos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="../js/19festival.js"></script>
</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include ($url . 'elements/mapa.html'); ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container">

        <!-- HEADER -->
        <header><?php include ($url . 'elements/header.html'); ?></header>
        <!-- /HEADER -->

        	<div style="height:36px; clear: both">&nbsp;</div>

        	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span>artistas participantes > selecionados com obras</span>      
                </div>
        	</div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0"><!-- 
                    --><span class="g">g</span><!-- 
                    --><span class="a">a</span><!-- 
                    --><span class="b">b</span><!-- 
                    --><span class="r">r</span><!-- 
                    --><span class="i">i</span><!-- 
                    --><span class="e">e</span><!--
                    --><span class="l">l</span><!--
                    --><span class="o">&nbsp;</span><!--
                    --><span class="m">m</span><!--
                    --><span class="a">a</span><!--
                    --><span class="s">s</span><!--
                    --><span class="c">c</span><!--
                    --><span class="a">a</span><!--
                    --><span class="r">r</span><!--
                    --><span class="o">o</span>
                </p>
                </div>
            </div>
            
            <div class="row" style="clear: both;">
                <div class="col-xs-12 col-md-6" style="text-align: center; float: left; ">
                    <img src="../img/artistas/temp_mascaro.jpg" class="img-responsive  retrato-artista" style="margin-bottom: 15px; margin-left: auto; max-height: 273px;" />
                </div>
            <div class="col-sm-12 col-md-6" style="float: right;">
                <div><strong>Sobre o artista</strong><br />
                    <?=$artista->biografia->texto?>
                </div>
             </div>
            </div>

            <div style="margin-bottom: 11px"></div>

            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <iframe allowFullScreen allowTransparency="true" class="vzaar-video-player" frameborder="0"  id="vzvd-<?=$id_vzaar?>" mozallowfullscreen name="vzvd-<?=$id_vzaar?>" src="http://view.vzaar.com/<?=$id_vzaar?>/player" title="vzaar video player" type="text/html" webkitAllowFullScreen width="485" height="273" ></iframe>
                </div>
                <div class="col-sm-12 col-md-6" style="float: right;">
                    <div style="margin-bottom: 0">
                        <strong><?=$obra->titulos[0]->titulo?> | <?=$obra->data_producao?>, <?=$obra->tipo_obra?></strong><br />
                        <?=$obra->sinopse[1]->sinopse?>
                    </div>
                </div>
            </div>

            <div style="margin-bottom: 11px"></div>

            <div style="margin-bottom: 11px"></div>

            <div class="row" style="clear: both;">
                <div class="col-xs-12 col-md-6" style="text-align: center; float: left; ">
                    <img src="../img/plataforma/temp_plataforma.png" class="img-responsive" style="margin-bottom: 15px; margin-left: auto; max-height: 273px; border: 2px solid #8F6B55;" />
                </div>
            <div class="col-sm-12 col-md-6" style="float: right;">
                <div><strong>Plataforma:VB</strong><br />
                    <p>“Em Doméstica, eu me preocupei em adentrar na complexa relação de afeto e trabalho que permeia o cotidiano dos jovens brasileiros e suas empregadas domésticas. Para a realização do filme, os jovens tinham a missão de filmar suas empregadas e me entregar as imagens brutas para que, a partir disso, eu pudesse trabalhar. Era a intimidade...</p>
                </div>
             </div>
            </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include ($url . 'elements/footer.html'); ?></footer>
    <!-- /RODAPE -->

</body>
</html>

