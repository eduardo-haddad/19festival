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
                    <div class="col-xs-12 titulo" style="float: left;margin-left: -16px;">
                        <p style="margin-bottom:0">
                           <?php pten('CONTATO', 'CONTACT');  ?>
                        </p>
                    </div>
                    
                        <?php pten(
                        '<p class="f"><span class="bold">Assessoria de Imprensa | Sesc Pompeia</span><br />
                         Coordenação: Roberta Della Noce <br />
                         (11) 3871-7740<br />
                         Assessores: Igor Cruz e Fernanda Porta Nova<br />
                         (11) 3871-7776 e 7720<br />
                         imprensa@pompeia.sescsp.org.br</p>
                         
                         
                         <p class="f"><span class="bold">Comunicação | Associação Cultural Videobrasil</span><br />
                         Coordenação: Ana Paula Vargas | paula@videobrasil.org.br<br />
                         Redação: Deborah Moreira | deborah@videobrasil.org.br<br />
                         Desenvolvimento web: Eduardo Haddad | eduardo@videobrasil.org.br<br />
                         Mídias Sociais: Kátia Kônig | katia@videobrasil.org.br 
                         comunicacao@videobrasil.org.br<br />
                         Tel: +55 11 3465 0516</p>
                         
                         
                         <p style="margin-bottom: 30px" class="f"><span class="bold">A4 Comunicação | Assessoria de Imprensa</span><br />
                         Direção: Neila Carvalho | neilacarvalho@a4com.com.br<br />
                         Coordenação: Danilo Thomaz | danilothomaz@a4com.com.br<br /> 
                         Tel: +55 11 3897-4122</p>', 

                        '<p class="f"><span class="bold">Assessoria de Imprensa | Sesc Pompeia</span><br />
                         Coordenação: Roberta Della Noce <br />
                         (11) 3871-7740<br />
                         Assessores: Igor Cruz e Fernanda Porta Nova<br />
                         (11) 3871-7776 e 7720<br />
                         imprensa@pompeia.sescsp.org.br</p>
                         
                         
                         <p class="f"><span class="bold">Comunicação | Associação Cultural Videobrasil</span><br />
                         Coordenação: Ana Paula Vargas | paula@videobrasil.org.br<br />
                         Redação: Deborah Moreira | deborah@videobrasil.org.br<br />
                         Desenvolvimento web: Eduardo Haddad | eduardo@videobrasil.org.br<br />
                         Mídias Sociais: Kátia Kônig | katia@videobrasil.org.br 
                         comunicacao@videobrasil.org.br<br />
                         Tel: +55 11 3465 0516</p>
                         
                         
                         <p style="margin-bottom: 30px" class="f"><span class="bold">A4 Comunicação | Assessoria de Imprensa</span><br />
                         Direção: Neila Carvalho | neilacarvalho@a4com.com.br<br />
                         Coordenação: Danilo Thomaz | danilothomaz@a4com.com.br<br /> 
                         Tel: +55 11 3897-4122</p>'); 

                        ?>
                    
                </div>
                <div class="col-md-6 " style="margin-top: 0px; border-left: 1pt solid #8F6B55; min-height: 240px">
                    <p class="titulo">
                        Downloads
                    </p>
                <p style="clear: both" class="f nomargin">
                    Press Kit (português, english)<br /><br />
                    Imagens (download, flickr)    
                </p>
                    

                </div>

            </div>
            
            <!-- <div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-top: 37px" >
                       <p>
                       <?php pten('Destaques do clipping', 'Clipping highlights');  ?>
                       </p>
                </div>
            </div> -->

            <!-- <div class="row" style="clear:both">
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

            </div> -->

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

