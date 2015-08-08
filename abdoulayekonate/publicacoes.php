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
    <style type="text/css">

    input[type=button] {
        background:#6C543F; 
        border:0 none;
        cursor:pointer;
        -webkit-border-radius: 0px;
        border-radius: 0px; 
        height: 30px;
        padding: 5px 0px 5px 0px;
        color: #e6e1da;
        outline: none;
        font-size: 1em;
        width: 100px;
        margin-bottom: 17px;
    }

</style>
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

        	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span>publicações</span>      
                </div>
        	</div>

            <div class="row" style="">
                <div class="col-xs-12 titulo" style="float: left;">
                        <p><!-- 
                        --><?php titulo('panoramas');?></p><!-- 
                        --><span>&nbsp;</span><!-- 
                        --><p><!-- 
                        --><?php titulo('do');?><!-- 
                        --><span>&nbsp;</span></p><!-- 
                        --><p><!-- 
                        --><!-- 
                        --><?php titulo('sul');?><!-- 
                        --><span>&nbsp;</span><!-- 
                        --><?php titulo('|');?></p><!-- 
                        --><span>&nbsp;</span><!-- 
                        --><p><!-- 
                        --><?php titulo('artistas');?><!-- 
                        --><span>&nbsp;</span></p><!--
                        --><p><!-- 
                        --><?php titulo('convidados');?></p>
                </div>



            </div>
            
            <div class="row" style="clear: both;">
                <div class="col-xs-12 col-md-6" style="float: left ">
                    <img src="img/blank.png" class="img-responsive" height="250" width="485" /><br />
                    <p style="margin-top: 25px; margin-bottom: 25px;">Edições Sesc-SP e Associação Cultural Videobrasil, 2014<br />
                    144 páginas<br />
                    português/inglês</p>

                    <p><input type="button" value="comprar" /></p>
                </div>
                <div class="col-sm-12 col-md-6" style="float: right;">
                    <p>Editado pela espanhola-guineense Elvira Dyangani Ose, primeira curadora estrangeira convidada a assinar a edição da revista, o Caderno 10 reúne ensaios e proposições artísticas por colaboradores que tratam de arquivo, memória e história em tentativas de ampliar, problematizar ou lançar novos significados sobre representações históricas hegemônicas. São artistas e pesquisadores de países africanos ou da diáspora que refletem sobre os arquivos como tema da arte e sobre a relação desta com a construção ou o resgate da memória, tendo como foco o contexto da descolonização da África entre as décadas de 1950 e 1970.</p>

                    <p>EDIÇÃO Elvira Dyangani Ose<br />
                    COLABORADORES<br />
                    Elvira Dyangani Ose Usos da memória<br />
                    Yaiza Hernández Velázquez Arquivando para o esquecimento<br />
                    Chimurenga FESTAC ’77 Um projeto de pesquisa<br />
                    Theo Eshetu Sangue. da luz e semelhança<br />
                    Maryam Jafri Getty vs Ghana / Corbis vs Mozambique / Getty vs Kenya vs Corbis<br />
                    The Otolith Group Narciso de uniforme<br />
                    Emma Wolukau-Wanambwa Um tempo bom<br />
                    Premesh Lalu entrevistado por Tracy Murinik Uma direção diferente: escrevendo a história com a engenhosidade de uma obra de arte</p>
                </div>
            </div>

            <div style="margin: 18px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                    <p><!-- 
                        --><?php titulo('panoramas');?></p><!-- 
                        --><span>&nbsp;</span><!-- 
                        --><p><!-- 
                        --><?php titulo('do');?><!-- 
                        --><span>&nbsp;</span></p><!-- 
                        --><p><!-- 
                        --><!-- 
                        --><?php titulo('sul');?><!-- 
                        --><span>&nbsp;</span><!-- 
                        --><?php titulo('|');?></p><!-- 
                        --><span>&nbsp;</span><!-- 
                        --><p><!-- 
                        --><?php titulo('obras e');?><!-- 
                        --><span>&nbsp;</span></p><!--
                        --><p><!-- 
                        --><?php titulo('projetos');?></p>
                </div>



            </div>
            
            <div class="row" style="clear: both;">
                <div class="col-xs-12 col-md-6" style="float: left ">
                    <img src="img/blank.png" class="img-responsive" /><br />
                    <p style="margin-top: 25px; margin-bottom: 25px;">Edições Sesc-SP e Associação Cultural Videobrasil, 2014<br />
                    144 páginas<br />
                    português/inglês</p>

                    <p><input type="button" value="comprar" /></p>
                </div>
                <div class="col-sm-12 col-md-6" style="float: right;">
                    <p>Editado pela espanhola-guineense Elvira Dyangani Ose, primeira curadora estrangeira convidada a assinar a edição da revista, o Caderno 10 reúne ensaios e proposições artísticas por colaboradores que tratam de arquivo, memória e história em tentativas de ampliar, problematizar ou lançar novos significados sobre representações históricas hegemônicas. São artistas e pesquisadores de países africanos ou da diáspora que refletem sobre os arquivos como tema da arte e sobre a relação desta com a construção ou o resgate da memória, tendo como foco o contexto da descolonização da África entre as décadas de 1950 e 1970.</p>

                    <p>EDIÇÃO Elvira Dyangani Ose<br />
                    COLABORADORES<br />
                    Elvira Dyangani Ose Usos da memória<br />
                    Yaiza Hernández Velázquez Arquivando para o esquecimento<br />
                    Chimurenga FESTAC ’77 Um projeto de pesquisa<br />
                    Theo Eshetu Sangue. da luz e semelhança<br />
                    Maryam Jafri Getty vs Ghana / Corbis vs Mozambique / Getty vs Kenya vs Corbis<br />
                    The Otolith Group Narciso de uniforme<br />
                    Emma Wolukau-Wanambwa Um tempo bom<br />
                    Premesh Lalu entrevistado por Tracy Murinik Uma direção diferente: escrevendo a história com a engenhosidade de uma obra de arte</p>
                </div>
            </div>

            

            <div class="row link_rodape">
                <div class="col-md-12" style="padding-left: 0">
                    <span>clique <a href="">aqui</a> e conheça as demais publicações lançadas pelas edições sesc e associação cultural videobrasil</span>
                </div>
            </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

