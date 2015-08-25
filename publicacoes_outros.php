<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Publicações' : 'Publications';

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
    <script>
        $(document).ready(
            function(){
                paletaArtistas($('.publicacao p:nth-child(1)'));
                paletaArtistas($('.publicacao p:nth-child(2)'));
                paletaArtistas($('.publicacao p:nth-child(3)'));
                paletaArtistas($('.publicacao p:nth-child(4)'));
                paletaArtistas($('.publicacao p:nth-child(5)'));
                paletaArtistas($('.publicacao p:nth-child(6)'));
                paletaArtistas($('.publicacao p:nth-child(7)'));
                paletaArtistas($('.publicacao p:nth-child(8)'));
                paletaArtistas($('.pp-participantes p:nth-child(1)'));
                paletaArtistas($('.pp-participantes p:nth-child(2)'));
                paletaArtistas($('.pp-participantes p:nth-child(3)'));
                paletaArtistas($('.pp-participantes p:nth-child(4)'));
                paletaArtistas($('.pp-participantes p:nth-child(5)'));
                paletaArtistas($('.pp-participantes p:nth-child(6)'));
                paletaArtistas($('.data-pp'));
        
            }
        );
    </script>
    <style type="text/css">

    input[type=button] {
        background:#AF7C57; 
        border:0 none;
        cursor:pointer;
        -webkit-border-radius: 0px;
        border-radius: 0px; 
        height: 30px;
        padding: 5px 0px 5px 0px;
        color: white;
        outline: none;
        font-size: 1em;
        width: 100px;
        margin-bottom: 17px;
    }

    </style>
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
                    <?php pten('publicações > <span class="underline">livros do festival</span>', 
                               'publications > <span class="underline">festival publications</span>'); ?>   
                </div>
        	</div>
            <!-- /BREADCRUMB -->

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="#visita"><?php pten('Leituras', 'Readings') ?></a> | 
                        <a href="#leitura"><?php pten('Artistas convidados', 'Invited artists') ?></a> | 
                        <a href="#encontro"><?php pten('Obras selecionadas e projetos comissionados', 'Selected works and comissioned projects') ?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->
            
            
            xxxxxxxxxxx

            <div class="row link_rodape">
                <div class="col-md-12" style="padding-left: 0">
                    <span><?php pten('clique <a href="">aqui</a> e conheça as demais publicações lançadas pelas edições sesc e associação cultural videobrasil', 
                                     'click <a href="">here</a> to learn more about the publications released by edições sesc and associação cultural videobrasil'); ?></span>
                </div>
            </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

