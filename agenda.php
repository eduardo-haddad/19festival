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

        	<div style="height:37px; clear: both">&nbsp;</div>

        <!-- 	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span>agenda</span>      
                </div>
        	</div> -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-bottom: 30px;">
                <p style="margin-bottom:0"><!-- 
                    --><span class="a">a</span><!-- 
                    --><span class="g">g</span><!-- 
                    --><span class="e">e</span><!-- 
                    --><span class="n">n</span><!-- 
                    --><span class="d">d</span><!-- 
                    --><span class="a">a</span>
                </p>
                </div>
            </div>
            
            <div class="row" style="clear: both;">
                <div class="col-xs-12">
                    <div class="titulo titulo-agenda-g"><span>outubro</span></div>
                    <p class="titulo nomargin a">6 nov, quarta</p>
                    <span class="g">11h | Sesc Pompeia, Galpão | Curadores apresentam exposições e ações / Programas Públicos</span><br />
                    <span class="o">15h | Sesc Pompeia, Galpão | Pelo mundo: processos e sentidos da internacionalização na arte / Programas Públicos</span><br />
                    <span class="s">19h30 | CineSesc | Programa 1 / Panoramas do Sul / Programas de vídeo</span><br />
                    <span class="q">20h45 | CineSesc | Deserto azul, Eder Santos / Sessão especial</span>
                    
                    <p class="titulo nomargin a" style="margin-top: 22px">7 nov, quinta</p>
                    <span class="g">14h | CineSesc | Programas 2 e 3 / Panoramas do Sul / Programas de vídeo</span><br />
                    <span class="h">16h | CineSesc | Programas 4 e 5 / Panoramas do Sul / Programas de vídeo</span><br />
                    <span class="l">20h | Sesc Pompeia, Choperia | Sem título, Cão / Panoramas do Sul / Performance</span>

                    <p class="titulo nomargin k" style="margin-top: 22px">8 nov, sexta</p>
                    <span class="a">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                    <span class="m">15h | Sesc Pompeia, Galpão | Natureza mágica / Programas Públicos</span><br />
                    <span class="o">16h | CineSesc | Deserto azul, Eder Santos / Sessão especial</span><br />
                    <span class="p">20h30 | Sesc Pompeia, Galpão | O samba do crioulo doido, Luiz de Abreu (classificação: 16 anos) / Panoramas do Sul / Performance</span>

                    <p class="titulo nomargin n" style="margin-top: 22px">9 nov, sábado</p>
                    <span class="z">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                    <span class="y">15h | Sesc Pompeia, Galpão | Natureza mágica / Programas Públicos</span>
                  
                    <p class="titulo nomargin w" style="margin-top: 22px">10 nov, domingo</p>
                    <span class="v">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                
                    <p class="titulo nomargin n" style="margin-top: 22px">11 nov, segunda</p>
                    <span class="u">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                    <span class="q">15h | Sesc Pompeia, Galpão | Natureza mágica / Programas Públicos</span>
                 
                    <p class="titulo nomargin o" style="margin-top: 22px">12 nov, terça</p>
                    <span class="m">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span>

                    <div class="titulo titulo-agenda-g" style="margin-top: 32px"><span>novembro</span></div>
                    <p class="titulo nomargin q">18 nov, segunda</p>
                    <span class="v">11h | Sesc Pompeia, Galpão | Curadores apresentam exposições e ações / Programas Públicos</span><br />
                    
                    <p class="titulo nomargin u" style="margin-top: 22px">19 nov, terça</p>
                    <span class="w">15h | Sesc Pompeia, Galpão | Pelo mundo: processos e sentidos da internacionalização na arte / Programas Públicos</span><br />
                    
                    <p class="titulo nomargin n" style="margin-top: 22px">20 nov, quarta</p>
                    <span class="r">19h30 | CineSesc | Programa 1 / Panoramas do Sul / Programas de vídeo</span><br />
                    
                    <p class="titulo nomargin z" style="margin-top: 22px">21 nov, quinta</p>
                    <span class="y">20h45 | CineSesc | Deserto azul, Eder Santos / Sessão especial</span>
                 </div>
            </div>

            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

