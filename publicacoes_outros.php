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
            
            
            <!-- PUBLICAÇÃO 1 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">Panoramas do sul | Leituras</span>',

                             '<span class="titulo">Panoramas do sul | Leituras</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/blank.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p style="margin-top: 25px; margin-bottom: 25px;"><?php pten(
                    'Edições Sesc-SP e Associação Cultural Videobrasil<br />
                    2014, 144 páginas<br />
                    português/inglês</p>',
                    'Edições Sesc-SP and Associação Cultural Videobrasil<br />
                    2014, 144 pages<br />
                    Portuguese/English</p>'); ?>

                    <p><input type="button" value="<?php pten('comprar', 'purchase'); ?>" /></p>

                    <p><?php pten('Disponível também nas lojas das unidades do Sesc São Paulo, Galpão_VB e livrarias', 
                                  'Also available in Sesc stores and ...'); ?></p>


                </div>     
                <div class="col-sm-12 col-md-6 publicacao g" style="float: right;">         
                <?php
                //Publicação 1 - PT
                pten('<p>Reúne ensaios e manifestos artísticos que apresentam, defendem ou questionam o conceito de Sul geopolítico, que aproxima regiões marcadas por backgrounds históricos, sociais e culturais assemelhados. Por meio do aporte de teóricos e de exemplos de práticas artísticas e culturais contemporâneas, põe em pauta as ideias que questionam representações e narrativas eurocêntricas. </p>
                <p style="display: inline">ORGANIZAÇÃO Sabrina Moura</p><br />
                <p style="display: inline">COLABORADORES Achille Mbembe, Ana Longoni, Anthony Gardner, Arjun Appadurai, Artur Barrio, Charles Green, Cildo Meireles, Geeta Kapur, Jean and John Comaroff, Joaquín Torres Garcia, José Rabasa, Milton Santos, Moacir dos Anjos, Nestor Garcia Canclini, Organization of African Unity, Rasheed Araeen, Rede Conceitualismos do Sul, Sasha Huber, Petri Saarikko e Maria Helena Machado</p><br />
                <p style="display: inline">PROJETO GRÁFICO Angela Detanico e Rafael Lain</p><br />
                <p>DESIGN Carla Castilho, Lia Assumpção | Janela Estúdio</p><br />
                <p style="text-align: right; font-size: 1.1em" class="bold upper">Saiba+</p><br />
                <p class="upper"><span class="bold">lançamento</span> | 10 de outubro, 14h, sesc pompeia/teatro</p>',

                //Publicação 1 - EN
                '<p>XXXReúne ensaios e manifestos artísticos que apresentam, defendem ou questionam o conceito de Sul geopolítico, que aproxima regiões marcadas por backgrounds históricos, sociais e culturais assemelhados. Por meio do aporte de teóricos e de exemplos de práticas artísticas e culturais contemporâneas, põe em pauta as ideias que questionam representações e narrativas eurocêntricas. </p>
                <p>ORGANIZAÇÃO Sabrina Moura</p>
                <p>COLABORADORES Achille Mbembe, Ana Longoni, Anthony Gardner, Arjun Appadurai, Artur Barrio, Charles Green, Cildo Meireles, Geeta Kapur, Jean and John Comaroff, Joaquín Torres Garcia, José Rabasa, Milton Santos, Moacir dos Anjos, Nestor Garcia Canclini, Organization of African Unity, Rasheed Araeen, Rede Conceitualismos do Sul, Sasha Huber, Petri Saarikko e Maria Helena Machado</p>
                <p>PROJETO GRÁFICO Angela Detanico e Rafael Lain</p>
                <p class="upper"><span class="bold">lançamento</span> | 10 de outubro, 14h, sesc pompeia/teatro</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /PUBLICAÇÃO 1 -->

            <!-- PUBLICAÇÃO 2 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">Panoramas do sul | Leituras</span>',

                             '<span class="titulo">Panoramas do sul | Leituras</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/blank.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p style="margin-top: 25px; margin-bottom: 25px;"><?php pten(
                    'Edições Sesc-SP e Associação Cultural Videobrasil<br />
                    2014, 144 páginas<br />
                    português/inglês</p>',
                    'Edições Sesc-SP and Associação Cultural Videobrasil<br />
                    2014, 144 pages<br />
                    Portuguese/English</p>'); ?>

                    <p><input type="button" value="<?php pten('comprar', 'purchase'); ?>" /></p>

                    <p><?php pten('Disponível também nas lojas das unidades do Sesc São Paulo, Galpão_VB e livrarias', 
                                  'Also available in Sesc stores and ...'); ?></p>


                </div>     
                <div class="col-sm-12 col-md-6 publicacao a" style="float: right;">         
                <?php
                //Publicação 2 - PT
                pten('<p>Reúne ensaios e manifestos artísticos que apresentam, defendem ou questionam o conceito de Sul geopolítico, que aproxima regiões marcadas por backgrounds históricos, sociais e culturais assemelhados. Por meio do aporte de teóricos e de exemplos de práticas artísticas e culturais contemporâneas, põe em pauta as ideias que questionam representações e narrativas eurocêntricas. </p>
                <p style="display: inline">ORGANIZAÇÃO Sabrina Moura</p><br />
                <p style="display: inline">COLABORADORES Achille Mbembe, Ana Longoni, Anthony Gardner, Arjun Appadurai, Artur Barrio, Charles Green, Cildo Meireles, Geeta Kapur, Jean and John Comaroff, Joaquín Torres Garcia, José Rabasa, Milton Santos, Moacir dos Anjos, Nestor Garcia Canclini, Organization of African Unity, Rasheed Araeen, Rede Conceitualismos do Sul, Sasha Huber, Petri Saarikko e Maria Helena Machado</p><br />
                <p style="display: inline">PROJETO GRÁFICO Angela Detanico e Rafael Lain</p><br />
                <p>DESIGN Carla Castilho, Lia Assumpção | Janela Estúdio</p><br />
                <p style="text-align: right; font-size: 1.1em" class="bold upper">Saiba+</p><br />
                <p class="upper"><span class="bold">lançamento</span> | 10 de outubro, 14h, sesc pompeia/teatro</p>',

                //Publicação 2 - EN
                '<p>XXXReúne ensaios e manifestos artísticos que apresentam, defendem ou questionam o conceito de Sul geopolítico, que aproxima regiões marcadas por backgrounds históricos, sociais e culturais assemelhados. Por meio do aporte de teóricos e de exemplos de práticas artísticas e culturais contemporâneas, põe em pauta as ideias que questionam representações e narrativas eurocêntricas. </p>
                <p>ORGANIZAÇÃO Sabrina Moura</p>
                <p>COLABORADORES Achille Mbembe, Ana Longoni, Anthony Gardner, Arjun Appadurai, Artur Barrio, Charles Green, Cildo Meireles, Geeta Kapur, Jean and John Comaroff, Joaquín Torres Garcia, José Rabasa, Milton Santos, Moacir dos Anjos, Nestor Garcia Canclini, Organization of African Unity, Rasheed Araeen, Rede Conceitualismos do Sul, Sasha Huber, Petri Saarikko e Maria Helena Machado</p>
                <p>PROJETO GRÁFICO Angela Detanico e Rafael Lain</p>
                <p class="upper"><span class="bold">lançamento</span> | 10 de outubro, 14h, sesc pompeia/teatro</p>');  ?> 
                </div> 
            </div>

           

            <!-- /PUBLICAÇÃO 2 -->

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

