<?php

$id_obra = '1801645';
$id_artista = '1799239';

include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

//api vb obras
$ch  = curl_init('http://acervo.videobrasil.org.br/api/obras/obra/'.$id_obra.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$obra = json_decode($result, true);
curl_close($ch);

//api vb artistas
$ch  = curl_init('http://acervo.videobrasil.org.br/api/artistas/artista/'.$id_artista.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$artista = json_decode($result, true);
curl_close($ch);

//nome do artista - registro principal no acervo vb
/*foreach ($artista['nomes'] as $nome=>$valor) {
    $nome_artista = $valor['principal'] == true ? $valor['nome'] : null;
}
*/
$nome_artista = 'Taus Makhacheva';

//id do video no vzaar
//$url_vzaar = $obra['canalvb'][0]['url'];
//$id_vzaar = preg_replace("/[^0-9]/", "", $url_vzaar);

$troca_acentos = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                          'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );

//retirar acentos do nome do artista
$nome_artista = strtr($nome_artista, $troca_acentos);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $nome_artista.' - ';pten('19º Festival de Arte Contemporânea Sesc_Videobrasil', '19th Contemporary Art Festival Sesc_Videobrasil');?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="../css/home.css">
    <link rel="stylesheet" type="text/css" href="../css/expos.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="../js/home.js"></script>
    <meta property="og:title" content="<?php echo $nome_artista.' - ';?><?php echo ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil');?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?=$url.ltrim($_SERVER['REQUEST_URI'], '/');?>"/>
    <meta property="og:image" content="<?=$url?>img/logo_fb.png"/>
    <meta property="og:site_name" content="19º Festival de Arte Contemporânea Sesc_Videobrasil"/>
    <meta property="og:description"
          content="<?php foreach($artista["biografia"] as $bio=>$valor) {echo($idioma == $valor['idioma'] ? $valor['biografia'] : null);}?>"/>
</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include($url.'elements/mapa.html'); ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container">

        <!-- HEADER -->
        <header><?php include($url.'elements/header.html'); ?></header>
        <!-- /HEADER -->


        <div style="height:36px; clear: both">&nbsp;</div>

            <div class="row">
                <div class="col-xs-12 breadcrumb">
                    <span><?=$bc_select_obras?></span>
                </div>
            </div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                <?php
                    titulo($nome_artista);
                ?>

                </p>
                </div>
            </div>

            <!-- SOBRE O ARTISTA -->
            <div class="row" style="clear: both;">
                <div class="col-xs-12 col-md-6" style="text-align: center; float: left; ">
                    <img src="../img/artistas/<?=strtolower(str_replace(' ', '', $nome_artista));?>.jpg" class="img-responsive  retrato-artista" style="margin-bottom: 15px; margin-left: auto; max-height: 273px;" />
                </div>
            <div class="col-sm-12 col-md-6" style="float: right;">
                <div><strong><?=$sobre_artista?></strong><br />
                    <?php foreach($artista["biografia"] as $bio=>$valor) {echo($idioma == $valor['idioma'] ? $valor['biografia'] : null);}?>

                </div>
             </div>
            </div>
            <!-- /SOBRE O ARTISTA -->

            <div style="margin-bottom: 30px"></div>

            <!-- SOBRE A OBRA -->
            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <!-- <iframe allowFullScreen allowTransparency="true" class="vzaar-video-player" frameborder="0"  id="vzvd-<?=$id_vzaar?>" mozallowfullscreen name="vzvd-<?=$id_vzaar?>" src="http://view.vzaar.com/<?=$id_vzaar?>/player" title="vzaar video player" type="text/html" webkitAllowFullScreen width="485" height="273" ></iframe> -->
                    <img src="../img/obras/obra_<?=strtolower(str_replace(' ', '', $nome_artista));?>.jpg" height="275" width="485" />
                </div>
                <div class="col-sm-12 col-md-6" style="float: right;">
                    <div style="margin-bottom: 0">
                        <strong><?php echo '<em>'; print_r($obra['titulos'][0]['titulo']); echo '</em> | '; print_r($obra['data_producao']); echo ', '; print_r ($idioma == 'pt' ? $obra['tipo_obra'] : $obra['tipo_obra_en']) ?></strong><br />
                        <?php foreach($obra["sinopse"] as $sinopse=>$valor) {echo($idioma == $valor['idioma'] ? $valor['sinopse'] : null);} ?>
                    </div>
                </div>
            </div>
            <!-- /SOBRE A OBRA -->

            <div style="margin-bottom: 30px"></div>

            <!-- PLATAFORMA -->
            <div class="row" style="clear: both;" id="plataforma"><?php include($url.'elements/artistas_plataforma.html'); ?></div>
            <!-- /PLATAFORMA -->

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include($url.'elements/footer.html') ?></footer>
    <!-- /RODAPE -->
</body>
</html>
