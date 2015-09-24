<?php

$id_obra = '1801030';
$id_artista = '1799708';

include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$pais_artista = $idioma == 'pt' ?  'Bolívia' : 'Bolivia';

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
foreach ($artista['nomes'] as $nome=>$valor) {
    $nome_artista = $valor['principal'] == true ? $valor['nome'] : null;
}

//$nome_artista = 'Ali Cherri';

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
    <script src="../js/19festival.js"></script>
    <meta property="og:title" content="<?php echo $nome_artista.' - ';?><?php echo ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil');?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?=$url.ltrim($_SERVER['REQUEST_URI'], '/');?>"/>
    <meta property="og:image" content="<?=$url?>img/logo_fb.png"/>
    <meta property="og:site_name" content="19º Festival de Arte Contemporânea Sesc_Videobrasil"/>
    <meta property="og:description"
          content="<?php foreach($artista["biografia"] as $bio=>$valor) {echo($idioma == $valor['idioma'] ? $valor['biografia'] : null);}?>"/>
    <script>
        
        $(document).ready(
            function(){
                paletaArtistas($('#obra-sinopse, #obra-titulo, .link-plataforma'));
                paletaArtistas($('#artista-bio'));
                paletaArtistas($('#nome-artista'));
                
            }
        );
    </script>

</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include('../elements/mapa.html'); ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container">

        <!-- HEADER -->
        <header><?php include('../elements/header.html'); ?></header>
        <!-- /HEADER -->


        <div style="height:36px; clear: both">&nbsp;</div>

            <div class="row">
                <div class="col-xs-12 breadcrumb">
                    <span><?=$bc_select_obras?></span>
                </div>
            </div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0" id="nome-artista">
                    <?php echo $nome_artista.' | '.$pais_artista ?>
                </p>
                </div>
            </div>

            <!-- SOBRE O ARTISTA -->
            <div class="row" style="clear: both;" id="artista">
                <div class="col-xs-12 col-md-6" style="text-align: center; float: left; ">
                    <img src="../img/artistas/<?=strtolower(str_replace(' ', '', $nome_artista));?>.jpg" class="img-responsive  retrato-artista" style="margin-bottom: 15px; max-height: 273px;" />
                </div>
            <div class="col-sm-12 col-md-6" style="float: right;">
                <div><!-- <span class="bold"><?=$sobre_artista?></span><br /><br /> -->
                    <span id="artista-bio"><?php foreach($artista["biografia"] as $bio=>$valor) {echo($idioma == $valor['idioma'] ? $valor['biografia'] : null);}?></span>

                </div>
             </div>
            </div>
            <!-- /SOBRE O ARTISTA -->

            <div style="margin-bottom: 30px"></div>

            <!-- SOBRE A OBRA -->
            <div class="row" id="obra">
                <div class="col-sm-12 col-md-6" style="text-align: center;" id="obra-img">
                    <!-- <iframe allowFullScreen allowTransparency="true" class="vzaar-video-player" frameborder="0"  id="vzvd-<?=$id_vzaar?>" mozallowfullscreen name="vzvd-<?=$id_vzaar?>" src="http://view.vzaar.com/<?=$id_vzaar?>/player" title="vzaar video player" type="text/html" webkitAllowFullScreen width="485" height="273" ></iframe> -->
                    <img src="../img/obras/obra_<?=strtolower(str_replace(' ', '', $nome_artista));?>.jpg" class="img-responsive" style="margin-bottom: 15px;" />
                </div>
                <div class="col-sm-12 col-md-6" id="obra-texto">
                    <div style="margin-bottom: 0" >
                        <span id="obra-titulo"><?php echo '<em>'; print_r($obra['titulos'][0]['titulo']); echo '</em> | '; print_r($obra['data_producao']); echo ', '; print_r ($idioma == 'pt' ? $obra['tipo_obra'] : $obra['tipo_obra_en']) ?><br /></span>
                        <span id="obra-sinopse"><?php foreach($obra["sinopse"] as $sinopse=>$valor) {echo($idioma == $valor['idioma'] ? $valor['sinopse'] : null);} ?></span>
                            <!-- LINK PLATAFORMA -->
                            <div class="link-plataforma">
                                <!--<?php include('../elements/artistas_plataforma.html'); ?>-->
                            </div>
                            <!-- /LINK PLATAFORMA -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- /SOBRE A OBRA -->

            <div style="margin-bottom: 30px" style="clear: both"></div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

            <!-- LISTA ARTISTAS -->
            <div class="row" style="clear: both;" id=""><?php include('../elements/lista_selecionados.html'); ?></div>
            <!-- /LISTA ARTISTAS -->

            <!-- LINK RODAPE -->
            <div class="row link_rodape" style="margin-top: 30px"><?php include('../elements/artistas_rodape.html'); ?></div>
            <!-- /LINK RODAPE -->

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include('../elements/footer.html') ?></footer>
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
