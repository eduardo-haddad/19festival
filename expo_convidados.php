<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Artistas Convidados' : 'Guest Artists';

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
                paletaArtistas($('.sobre-expo p:nth-child(1)'));
                paletaArtistas($('.sobre-expo p:nth-child(2)'));
                paletaArtistas($('.sobre-expo p:nth-child(3)'));
                paletaArtistas($('.sobre-expo p:nth-child(4)'));
                paletaArtistas($('.sobre-expo p:nth-child(5)'));
                paletaArtistas($('.sobre-expo p:nth-child(6)'));
                paletaArtistas($('.sobre-expo p:nth-child(7)'));
                paletaArtistas($('.sobre-expo p:nth-child(8)'));
                paletaArtistas($('.sobre-expo p:nth-child(9)'));
        
            }
        );
    </script>
    <style type="text/css">

        #lista ol li a:link { text-decoration: none; color: inherit; }
        #lista ol li a:visited { text-decoration: none; color: inherit;}
        #lista ol li a:hover { text-decoration: none; color: inherit;}
        #lista ol li a:active { text-decoration: none; color: inherit;}

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
                    <span><?php pten('exposições > <span class="underline">artistas convidados</span>', 
                                     'exhibitions > <span class="underline">guest artists</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="expo_convidados.php"><span style="text-decoration: underline"><?php pten('artistas convidados', 'guest artists') ?></span></a> | 
                        <a href="expo_projetos.php"><?php pten('projetos comissionados', 'Comissioned projects') ?></a> | 
                        <a href="expo_obras.php"><?php pten('obras selecionadas', 'Selected works') ?></a> | 
                        <a href="expo_paralela.php"><?php pten('exposição paralela', 'Parallel exhibition') ?></a> 
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <p class="titulo"><?php pten('panoramas do sul | artistas convidados ', 
                                         'southern panoramas | guest artists'); ?></p> 
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" >
                    <img src="img/expos/expo-convidados-<?php pten('pt','en');?>.png" class="img-responsive" style="max-width: 485px" />
                    <div id="lista" style="margin-bottom: 19px">
                        <ol>
                            <li class="upper"><?php pten('Artistas Participantes', 'Participating Artists'); ?><br /><br /></li>
                            <li><a href="/abdoulayekonate">Abdoulaye Konaté | <?php pten('Mali', 'Mali'); ?></a></li>
                            <li><a href="/gabrielabrantes">Gabriel Abrantes | <?php pten('Portugal', 'Portugal'); ?></a></li>
                            <li><a href="/rodrigomatheus">Rodrigo Matheus | <?php pten('Brasil', 'Brazil'); ?></a></li>
                            <li><a href="/soniagomes">Sônia Gomes | <?php pten('Brasil', 'Brazil'); ?></a></li>
                            <li><a href="/ytobarrada">Yto Barrada | <?php pten('Marrocos/França', 'Morocco/France'); ?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 sobre-expo h" style="float: right;">

                    <?php pten(                      ////APRESENTAÇAO PT                     
                    '<p style="display:inline">Com uma miríade de estratégias, que vão do resgate de tradições culturais ancestrais à iconoclastia, de
                    reflexões sobre os significados de imagens de grande circulação à construção de ruínas, os cinco artistas convidados
                    para o Festival atestam a potência das vozes que falam do Sul e desde o Sul. De formas diversas, os brasileiros Sônia
                    Gomes e Rodrigo Matheus, o artista português Gabriel Abrantes, o malinês Abdoulaye Konaté e a marroquina Yto Barrada
                    tratam do tecido social esgarçado que compõe o cenário político contemporâneo.</p>',

                    //APRESENTAÇAO EN
                    '<p>Through myriad strategies, ranging from the revival of ancestral cultural traditions to iconoclasm, 
                    from reflections about the meaning of widely circulated images to the building of ruins, the Festival’s
                    five guest artists attest to the power of voices that speak of and from the South. In different ways,
                    the Brazilians Sônia Gomes and Rodrigo Matheus, the Portuguese Gabriel Abrantes, Mali’s Abdoulaye Konaté,
                    and Morocco’s Yto Barrada deal with the frayed social fabric that composes the contemporary political scenario.</p>');

                    ?>
                    
                    <p class="titulo" style="margin-top:37px"><?php pten('Statement da curadoria', 'Statement'); ?></p>

                    <?php pten( 
                    ////STATEMENT PT
                    '<p>Cinco artistas e uma miríade de estratégias contemporâneas atestam, aqui, a potência da produção que emerge do Sul e fala ao mundo. O malinês Abdoulaye Konaté transpõe o ambiente da pintura para gerar uma nova linguagem, articulando sua rigorosa formação artística a elementos da cultura tradicional de seu país, notadamente a tapeçaria. O uso extraordinário da cor e o rigor das composições não se desvinculam de um discurso politizado, que expõe questões não só africanas, mas também universais. Inspiradas no encontro que teve, em 2014, com uma tribo guarani de Ubatuba-SP, suas tapeçarias falam de culturas ameaçadas.</p> 

                    <p>Partilhando a escolha dos têxteis como universo expressivo, a brasileira Sônia Gomes nasceu em Caetanópolis-MG, que abriga uma das primeiras fábricas de tecidos do Brasil. Ainda criança, num arroubo de inconformidade, decidiu fugir de casa; para tanto, enrolou e amarrou pedaços de tecido, formando uma trouxa. Mais tarde, a trouxa se tornaria a forma seminal do pensamento que conforma toda sua produção artística. Aqui, ela experimenta uma escala que desafia a intimidade do corpo. Cada curva ou reentrância, tecido ou pele, fala de um sujeito singular, ou de um coletivo que compartilha história e cultura. </p>
                    
                    <p>A contrastar com essa organicidade, a obra do paulistano Rodrigo Matheus demanda engenharia pesada para suspender tambores e criar uma estrutura de balanços, pesos e contrapesos que lançam o público numa zona de instabilidade com paralelos na provisoriedade das relações econômicas e sociais contemporâneas. O trabalho deriva da observação da história do Sesc Pompeia, e pretende devolver a ele parte do que o artista chama de “arruinamento” da cidade nos últimos cem anos.</p> 
                    
                    <p>As dinâmicas da representação e o impacto da circulação de imagens na construção de identidades são os temas da artista francesa de ascendência marroquina Yto Barrada. Sua Wallpaper é paradigmática. O contato diário com esse tipo de representação – papéis de parede com paisagens longínquas são comuns em lojas e cafés do Marrocos – sublinha a fricção entre a vida real e o desejo de pertencer a outra realidade, entre o real e a ficção de uma vida de facilidades à espera do outro lado. </p>
                    
                    <p>Os filmes de Gabriel Abrantes – que nasceu nos Estados Unidos de pais africanos, vive em Lisboa e se considera um artista português – expõem o atrito, também sutil, entre eixos de poder tradicionais e emergentes. Com uma visão iconoclasta da história, da arte e do cinema, suas narrativas analisam a forma como a cultura global está sendo transformada pela ascensão de novos atores e os impactos das identidades emergentes em culturas antes hegemônicas. Interessado em “lugares onde formas contemporâneas de vida estão a ser inventadas”, filmou em Angola, Haiti, Sri Lanka e no Brasil.</p> 
                    
                    <p>A trama do tecido social rugoso e esgarçado que compõe o cenário político em princípios do século 21 constitui uma malha crítica de fibras orgânicas e industriais, pondo à prova as relações temporais e tecnológicas que articulam a poética coletiva destes artistas e estabelecendo diálogos entre vozes que falam desde o Sul. </p>
',

                    //STATEMENT EN
                    '<p>Five artists draw upon manifold strategies to demonstrate Southern artistic production’s capacity to speak to the wider world. Abdoulaye Konaté, from Mali, overreaches the bounds of painting to engender a new language that blends his rigorous artistic training with elements of traditional Malian culture, especially textiles. His extraordinary use of color and strict compositions maintain a clearly politicized vim, which exposes African issues, as well as universal ones. Inspired by his 2014 encounter with a Guarani Indian tribe in Ubatuba, on the São Paulo State coast, his tapestries speak of threatened cultures.</p> 

                    <p>Sharing Konaté’s choice of textiles as an expressive domain is the Brazilian Sônia Gomes, born in Caetanópolis, Minas Gerais State, home to one of the country’s oldest textile companies. As a child, in a flash of revolt, she decided to run away from home; she gathered snippets of textiles into a truss. That truss would return to her years later in seminal form as an artistic procedure. Here, she experiments with a scale that challenges the intimacy of the body. Each bend or cavity, each fabric or skin seems to speak of a subject in its singularity or a collective with a shared history and culture.</p>    
                    
                    <p>Contrasting with this organicity, Rodrigo Matheus requires the support of heavy engineering to hang barrels and create structures out of scales, weights, and counterweights that lure the public into a zone of instability that echoes the provisional nature of contemporary economic and social relations. The work stems from the artist’s observation of the venue’s history and attempts to restore, physically, some of the legacy of “ruin” the city has endured over the last hundred years.</p>  
                    
                    <p>The dynamics of representation and the impact the circulation of images has on identity building are the themes of choice of Yto Barrada, a French artist of Moroccan descent. Her Wallpaper is paradigmatic. Daily contact with this sort of representation—wallpaper featuring far-off views is common in Moroccan stores and coffee shops—underlines the friction between real life and the desire to belong to another reality, between the reality and fiction of a comfortable life waiting to cross over to the other side.</p> 
                    
                    <p>The films of Gabriel Abrantes—who was born in the US to African parents yet lives in Lisbon and considers himself a Portuguese artist— explore the no less subtle conflict between traditional and emerging axes of power. With an iconoclastic vision of history, art, and cinema, his narrative speculations analyze the ways global culture is being transformed by the rise of new players, and the impacts emerging identities are having on cultures that were once hegemonic. Interested in “places where contemporary forms of life are being invented,” Abrantes has filmed in Angola, Haiti, Sri Lanka, and Brazil.</p> 
                    
                    <p>The weft of the crumpled, torn social fabric that makes up the political scene in these first years of the 21st century constitutes a critical mass of organic and industrial fibers, stress-testing the temporal and technological relations that articulate the collective poetics of these artists, and establishing a range of dialogues between voices speaking from the South.</p>

                    ');

                    ?> 
                    
                </div>

            </div>

            <br style="margin-bottom: 13px" />

            <div class="row">
                <div class="col-sm-12 col-md-6 a" style="margin-top: 0; padding-left: 15px">

                    <div class="row link_rodape" style="margin-top: 0; margin-bottom: 17px">                 
                        <div class="col-md-12" style="padding-left: 0">                     
                            <?php pten(
                            '<p><span class="upper a">sesc pompeia | galpão</span><br />
                            Rua Clélia, 93<br />
                            São Paulo, SP<br />
                            tel.: +55 11 3871 7700 | 0800 11 8220<br /><a href="http://www.sescsp.org.br" target="_blank">www.sescsp.org.br</a></p>
                            <p><br /><span class="upper a">visitação</span><br />
                            de 6 de outubro a 6 de dezembro de 2015<br />
                            terça a sábado das 10h às 21h;<br />
                            domingos e feriados das 10h às 19h</p>',

                            '<p><span class="upper a">sesc pompeia | galpão</span><br />
                            Rua Clélia, 93<br />
                            São Paulo, SP, Brazil<br />
                            phone: +55 11 3871 7700<br /><a href="http://www.sescsp.org.br" target="_blank">www.sescsp.org.br</a></p>
                            <p><br /><span class="upper a">visiting hours</span><br />
                            october 6 to december 6, 2015<br />
                            tue-sat, from 10am to 9pm;<br />
                            sun, holidays, from 10am to 7pm</p>'); ?>
                        </div>
                    </div>

                </div>
              <!--  <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_02-temp.jpg" />
                </div> -->
            </div>

            <!-- <div class="row">
                <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_01-temp.jpg" />
                </div>
               <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_02-temp.jpg" />
                </div>
            </div> -->

            <div class="row link_rodape" style="clear:both">                 
                <div class="col-md-12" style="padding-left: 0">                     
                    <span><?php pten('clique <a href="fotos.php">aqui</a> e veja a galeria completa de imagens', 
                                     'click <a href="fotos.php">here</a> to see the complete photo gallery'); ?></span>
                </div>
            </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

