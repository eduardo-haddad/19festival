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
                    <span>saiba mais > imprensa</span>      
                </div>
        	</div>

            <div class="row" >
                <div class="col-md-6 informacoes" style="margin-top: 0">
                    <p>
                        <?php titulo('contato');?>
                    </p>
                    <p style="clear: both" class="h nomargin">
                        comunicacao@videobrasil.org.br<br /><br />
                        Coordenação de comunicação<br /> 
                        Ana Paula Vargas<br /><br />
                        Equipe de comunicação<br /> 
                        Deborah Moreira<br />
                        Eduardo Haddad<br />
                        Kátia König<br /><br />
                        Tel: 55 11 3645 0516
                    </p>
                </div>
                <div class="col-md-6 informacoes" style="margin-top: 0px; border-left: 1pt solid #8F6B55; min-height: 240px">
                    <p>
                        <?php titulo('downloads');?>
                    </p>
                <p style="clear: both" class="h nomargin">
                    Press Kit (português, english)<br /><br />
                    Imagens (download, flickr)    
                </p>
                    

                </div>

            </div>
            
            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-top: 37px" >
                       <p><!--
                    --><?php titulo('destaques');?><!-- 
                    --><span>&nbsp;</span>
                       </p><!-- 
                    --><p><!-- 
                    --><?php titulo('do');?><!-- 
                    --><span>&nbsp;</span><!--  
                    --></p><!-- 
                    --><p><!-- 
                    --><?php titulo('clipping');?></p>
                </div>
            </div>

            <div class="row" style="clear:both">
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

            </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

