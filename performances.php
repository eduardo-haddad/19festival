<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Performances' : 'Performances';

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
                paletaArtistas($('.performance-texto p:nth-child(1)'));
                paletaArtistas($('.performance-texto p:nth-child(2)'));
                paletaArtistas($('.performance-texto p:nth-child(3)'));
                paletaArtistas($('.performance-texto p:nth-child(4)'));
                paletaArtistas($('.informacoes p'));
                paletaArtistas($('.performance-servico p'));
        
            }
        );
    </script>
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

            <p class="titulo"><?php pten('performances', 
                                         'performances'); ?></p> 
            
            
            <!-- EVENTO 1 -->

            <div class="row" style="clear: both; margin-bottom: 31px">     
                <div class="col-sm-12 col-md-6 performance-servico" style="float: left ">
                    <img src="img/obras/obra_fancyviolence.jpg" class="img-responsive" style="margin-bottom: 15px" />    

                    <?php 
                    pten('<p><span class="bold upper">06/out</span> | terça<br />
                    21h<br />
                    Sesc Pompeia | Convivência<br /><br />
                    <span class="bold upper">25/nov</span> | quarta<br />
                    21h30<br />
                    Sesc Pompeia | Convivência<br />
                    *Com lançamento das publicações <em>Caderno Sesc_Videobrasil 11 | Aliança de corpos vulneráveis</em> e <em>Panoramas do Sul | Artistas selecionados – Obras e projetos</em></p>',

                    '<p><span class="bold upper">oct/06</span> | Tuesday<br />
                    21h<br />
                    Sesc Pompeia | Convivência<br /><br />
                    <span class="bold upper">nov/25</span> | Wednesday<br />
                    21h30<br />
                    Sesc Pompeia | Convivência<br />
                    *Followed by the launch of the publications <em>Caderno Sesc_Videobrasil 11 | Alliances of vulnerable bodies </em> e <em>Panoramas do Sul | Selected artists – Artworks and projects</em></p>'); ?>
                </div>     
                <div class="col-sm-12 col-md-6 performance-texto a" style="float: right;">         
                <?php
                //Evento 1 - PT
                pten('<p><span class="italic bold">Fancy em Pyetà segundo ato</span><br />performance de <a style="color:inherit" href="/fancyviolence">Fancy Violence</a> (Rodolpho Parigi)</p>

                      <p>Fancy Violence, insidioso alter ego do artista, é uma anti-heroína incansável em sua missão iconoclasta, destruidora de mitos, farsantes colecionadores e suas obras-primas. Aqui, Fancy apresenta sua própria versão da Pietà: uma performance estática na qual desempenha o papel de Virgem Maria, tomando nos braços um Jesus Cristo negro. Um tableau vivant que exala iconoclastia. A peça escultórica usada na ação permanece em exposição.</p>',

                //Evento 1 - EN
                '<p><span class="italic">Fancy em Pyetà segundo ato</span><br />performance by Fancy Violence (Rodolpho Parigi)</p>

                      <p>Fancy Violence, the insidious alter ego of artist Rodolpho Parigi, is a tireless anti-heroin on an iconoclastic mission, a destroyer of myths, of phony collectors and their masterpieces. Here, Fancy presents her own version of Pietà: a static performance where she plays Virgin Mary holding in her arms a black Jesus Christ. A tableau vivant that exudes iconoclasticism. The sculpture used in the action will stay in exhibition after the performance. </p>');  ?> 
                </div> 
            </div>

            <!-- /EVENTO 1 -->

            <!-- EVENTO 2 -->

            <div class="row" style="clear: both; margin-bottom: 31px">     
                <div class="col-sm-12 col-md-6 performance-servico" style="float: left ">
                    <img src="img/obras/obra_alinexegustavojardim.jpg" class="img-responsive" style="margin-bottom: 15px" />    

                    <?php 
                    pten('<p><span class="bold upper">06/out</span> | terça<br />
                    das 20h às 22h, com intervalos<br />
                    Sesc Pompeia | Convivência<br /><br />
                    <span class="bold upper">10/out</span> | sábado<br />
                    das 17h às 17h30<br />
                    Sesc Pompeia | Convivência<br />',

                    '<p><span class="bold upper">oct/06</span> | Tuesday<br />
                    20-22h<br />
                    Sesc Pompeia | Convivência<br /><br />
                    <span class="bold upper">oct/10</span> | Saturday<br />
                    17-17h30<br />
                    Sesc Pompeia | Convivência<br />'); ?>
                </div>     
                <div class="col-sm-12 col-md-6 performance-texto a" style="float: right;">         
                <?php
                //Evento 2 - PT
                pten('<p><span class="italic bold">Oiko-nomic Threads</span><br />performance de Marinos Koutsomichalis, Maria Varela, Afroditi Psarra</p>

                      <p>No ato performático, o grupo usa os elementos que compõem sua instalação, um computador e uma máquina de tricô, para cruzar dados do Serviço Nacional de Emprego Grego e motivos helênicos tradicionais na trama de um novo tecido.</p>',

                //Evento 2 - EN
                '<p><span class="italic">Oiko-nomic Threads</span><br />performance by Marinos Koutsomichalis, Maria Varela, Afroditi Psarra</p>

                      <p>In the performance, the group uses elements from their installation, a computer and a tricot machine, to cross-references data from Greece’s National Employment Service and traditional Hellenic motifs to weave a new fabric.</p>');  ?> 
                </div> 
            </div>

            <!-- /EVENTO 2 -->

            <!-- EVENTO 3 -->

            <div class="row" style="clear: both; margin-bottom: 31px">     
                <div class="col-sm-12 col-md-6 performance-servico" style="float: left ">
                    <img src="img/blank.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <?php 
                    pten('<p><span class="bold upper">07/out</span> | quarta<br />
                    21h<br />
                    Sesc Pompeia | Teatro',

                    '<p><span class="bold upper">oct/07</span> | Wednesday<br />
                    21h<br />
                    Sesc Pompeia | Theater'); ?>
                </div>     
                <div class="col-sm-12 col-md-6 performance-texto a" style="float: right;">         
                <?php
                //Evento 3 - PT
                pten('<p><span class="italic bold">VOSTOK cineperformance da série VOSTOK</span><br />performance de Leticia ramos</p>

                      <p>Uma orquestra executa, ao vivo, a trilha sonora de uma missão envolvendo um submarino que navega pelas profundezas de um lago outrora congelado da Antártica. A performance compõe o projeto <em>VOSTOK</em>, em que a artista trama elementos ficcionais como o vídeo <em>VOSTOK_Screening</em>, que também integra a exposição.</p>',

                //Evento 3 - EN
                '<p>A live orchestra plays the soundtrack to a mission involving a submarine that navigates the depths of a once-frozen lake in the Antarctic. The performance is part of the <em>VOSTOK</em> project, in which the artist interweaves fictional elements, such as the video <em>VOSTOK_Screening</em>, which also features in the exhibition. </p>');  ?> 
                </div> 
            </div>

            <!-- /EVENTO 3 -->

            <div class="row link_rodape" style="margin-top: 32px">

                <div class="col-md-6 informacoes" style="left: -15px;">
                    <?php 
                    pten('<p class="g">SESC POMPEIA<br>
                    Rua Clélia, 93<br>
                    São Paulo, SP<br>
                    Tel.: 11 3871 7700 | 0800 11 8220 <br>
                    www.sescp.org.br</p>

                    <p class="g">VISITACÃO<br>
                    de 6 de outubro a 6 de dezembro de 2015<br>
                    terça a sábado das 9h às 22h;<br>
                    domingos e feriados das 9h às 20h</p>',

                    '<p class="g">SESC POMPEIA<br />
                    Rua Clélia, 93<br>
                    São Paulo, SP, BRAZIL<br>
                    Tel.: 11 3871 7700 | 0800 11 8220 <br>
                    www.sescp.org.br</p>

                    <p class="g">VISITATION<br>
                    october 6 to december 6, 2015<br>
                    terça a sábado das 9h às 22h;<br>
                    domingos e feriados das 9h às 20h</p>');


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

