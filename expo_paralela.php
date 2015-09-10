<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Exposição Paralela' : 'Parallel exhibition';

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
                    <span><?php pten('exposições > <span class="underline">exposição paralela</span>', 
                                     'exhibitions > <span class="underline">Parallel exhibition</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="expo_convidados.php"><?php pten('artistas convidados', 'guest artists') ?></a> | 
                        <a href="expo_projetos.php"><?php pten('projetos comissionados', 'Comissioned projects') ?></a> | 
                        <a href="expo_obras.php"><?php pten('obras selecionadas', 'Selected works') ?></a> | 
                        <a href="expo_paralela.php"><span style="text-decoration: underline"><?php pten('exposição paralela', 'Parallel exhibition') ?></span></a> |
                        <a href="expo_locais.php"><?php pten('Locais', 'Venues') ?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <p class="titulo"><?php pten('<span style="letter-spacing: -0.04em">Quem nasce pra aventura não toma outro rumo - obras do acervo videobrasil</span>', 
                                         '<span style="letter-spacing: 0em">Those Born For Adventure Don’t Stray From The Path – Artworks from Videobrasil Collection</span>'); ?></p> 
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" >
                    <img src="img/expos/expo-paralela-<?php pten('pt','en');?>.png" class="img-responsive" style="max-width: 485px" />
                    <div id="lista">
                        <ol>
                                <li class="upper"><?php pten('Artistas Participantes', 'Participating Artists'); ?><br /><br /></li>
                                <li>Cao Guimarães | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Carlos Nader | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Claudia Aravena | <?php pten('Chile', 'Chile'); ?></li>
                                <li>Clive van den Berg | <?php pten('Zâmbia', 'Zambia'); ?></li>
                                <li>Cristiano Lenhardt | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Gabriel Acevedo Velarde | <?php pten('Peru', 'Peru'); ?></li>
                                <li>Geraldo Anhaia Mello | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>João Moreira Salles | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Karim Aïnouz | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Malek Bensmail | <?php pten('Argélia', 'Algeria'); ?></li>
                                <li>Marcellvs L. | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Marcelo Gomes | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Nurit Sharett | <?php pten('Israel', 'Israel'); ?></li>
                                <li>Rita Moreira | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>Sandra Kogut | <?php pten('Brasil', 'Brazil'); ?></li>
                                <li>The Otolith Group | <?php pten('Reino Unido', 'United Kingdom'); ?></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6  h" style="float: right;">

                    <?php pten( 
                    ////APRESENTAÇAO PT
                    '<p>A exposição paralela ao <span class="bold">19º Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul</span> reúne quinze obras do Acervo Videobrasil selecionadas pelo curador Diego Matos, coordenador de arquivo e pesquisa da Associação Cultural Videobrasil. Trabalhos de artistas-chave do vídeo nacional, como Cao Guimarães, Carlos Nader, Cristiano Lenhardt (que participa do 19º Festival com um projeto comissionado), João Moreira Salles, Karim Aïnouz e Marcelo Gomes, criam relações com as obras do peruano Gabriel Acevedo, da israelense Nurit Sharett (que integrou a mais recente edição da Bienal de São Paulo) e do argelino Malek Bensmaïl, entre outros. A exposição segue em cartaz até 10 de janeiro de 2016.</p>

                     <p><span class="bold"><em>Quem Nasce Pra Aventura Não Toma Outro Rumo – Obras do Acervo Videobrasil</em></span> aprofunda indiretamente as reflexões da 19ª edição do Festival, que coloca o Sul global e suas múltiplas questões no centro de toda a sua programação. Para Solange Farkas, diretora do Videobrasil e curadora geral do Festival, exposições como essa “promovem a constante atualização das obras do Acervo Videobrasil, colocando-as em contato com o público e à disposição de novos recortes críticos. Essas novas perspectivas ajudam a confirmar a relevância dessas produções dentro do cenário artístico atual”. Hoje com mais de 1.300 obras catalogadas, o Acervo Videobrasil tem nos projetos expositivos a partir da imersão de curadores uma de suas principais estratégias de ativação e recontextualização.</p>
                     
                     <p>A mostra é fruto de uma parceria iniciada em 2001, no 13º Festival, quando obras do Acervo Videobrasil foram exibidas pela primeira vez no Paço das Artes. “O novo encontro entre as instituições amplia as discussões dos últimos catorze anos de parceria ao tocar em pontos fundamentais para o Paço das Artes: as referências geopolíticas a partir da arte e a questão do acervo e da memória da arte contemporânea. Destacar a produção artística de países do Sul global também tem sido um de nossos pilares de atuação”, declara Priscila Arantes, diretora artística e curadora do Paço das Artes.</p>
                     
                     <p>Diego Matos explica que o título da exposição é emprestado da fala da artista Lygia Pape, proferida quando entrevistava o intelectual e crítico de arte Mário Pedrosa para O Pasquim em 1981. “Em um momento de crise, de um trauma já consolidado na sociedade brasileira e o fim das esperanças frustradas pelo regime militar, Pedrosa renovava a crença no papel do artista e do intelectual público, bem como na relação inerente entre arte e política”, revela o curador da mostra. No mesmo período, o vídeo se popularizava e se tornava crescentemente acessível no país. “A arte naquele momento histórico e no ambiente brasileiro parecia também resgatar o seu caráter de resistência de maneira mais imediata – e o vídeo teria então esse papel fundamental”, completa.</p>
                     
                     <p>Ao tomar a produção nacional como ponto de partida e levá-la ao encontro de obras vindas de seis países, datadas de 1978 a 2012, a curadoria torna evidentes as “histórias que se entrecruzam e refletem o campo irrestrito da arte”. A exposição tem três conjuntos agregadores, definidos pelas aproximações entre as obras participantes: Afeições, tempos e estradas; Democracia, documento e ficção; e Fala, escuta e dissenso.</p>
                     
                     <p>No primeiro dos conjuntos, o epicentro da exposição, vídeos dos brasileiros Karim Aïnouz e Marcelo Gomes, Marcellvs L., e Cao Guimarães e da israelense Nurit Sharett apresentam suas percepções pessoais de tempos e espaços afetivos. O segundo núcleo possibilita um mergulho no passado político-econômico de países como Brasil (na obra de Geraldo Anhaia Mello), Chile (sob a ótica de Cláudia Aravena) e Argélia (segundo o artista Malek Bensmaïl), bem como no futuro tenebroso imaginado pelo Otolith Group (Reino Unido). Já o terceiro se apoia no assombro que é resultado das divergências — a falha na comunicação ou a impossibilidade do consenso. São levantados assuntos tratados de forma mais ou menos velada, como o racismo (por Carlos Nader) e a homofobia (nas obras de Rita Moreira e do zambiano Clive van der Berg). O espaço de fala restituída é oferecido a anônimos no trabalho de Sandra Kogut.</p>
                     
                     <p>Quatro obras integram espacialmente esses conjuntos: são os trabalhos de Cristiano Lenhardt, João Moreira Salles, e Gabriel Acevedo as pontuações que propõem relações sobrepostas entre os núcleos e obras que compõem a exposição. A expografia, assinada pela arquiteta Claudia Afonso, prioriza a movimentação contínua, circular e integrada do público. O trânsito continuado pelo espaço expositivo leva em consideração também a peculiaridade arquitetônica do Paço das Artes.</p>
                     
                     <p>Conheça as atividades de <a class="link" href="/pp.php#encontros">Programas Públicos</a> do 19º Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul que compõem a programação da exposição Quem Nasce Pra Aventura Não Toma Outro Rumo – Obras do Acervo Videobrasil. </p>









                    </p>',

                    //APRESENTAÇAO EN
                    '<p>The exhibition running parallel to the <span class="bold">19th Contemporary Art Festival Sesc_Videobrasil | Southern Panoramas</span> features fifteen works culled from the Videobrasil Collection by curator Diego Matos, Associação Cultural Videobrasil’s archive and research coordinator. Works by key national video artists of the likes of Cao Guimarães, Carlos Nader, Cristiano Lenhardt (featured in the 19th Festival with a commissioned project), João Moreira Salles, Karim Aïnouz & Marcelo Gomes connect with pieces by Peru’s Gabriel Acevedo, Israel’s Nurit Sharett (featured in the latest edition of the São Paulo Art Biennial), and Algeria’s Malek Bensmaïl, among others. The exhibit will continue until January 10, 2016.</p>

                     <p><span class="bold"><em>Those Born For Adventure Don’t Stray From the Path – Artworks from the Videobrasil Collection</em></span> is an indirect exploration of the reflections elicited by the 19th edition of the Festival, whose entire program revolves around the global South and its myriad issues. For Solange Farkas, Videobrasil’s director and the Festival’s chief curator, shows like this one “enable a constant updating of Videobrasil Collection artworks, putting them in touch with the public and at the avail of new curatorial approaches. These new perspectives help confirm the relevance of these productions to today’s art scene." The Videobrasil Collection currently comprises over 1,300 catalogued works, and exhibition projects built through the immersion of curators are one of its key activation and re-contextualization strategies.</p>
                     
                     <p>The show is the outcome of a partnership that began in 2001, during the 13th Festival, when Videobrasil Collection pieces were shown for the first time at Paço das Artes. “This new encounter between our institutions broadens the discussions from the past fourteen years of partnership by touching on fundamental issues for Paço das Artes: geopolitical references in art and the issue of contemporary art collection and memory. Highlighting art from countries in the global South has also been one of the pillars of our work,” says Priscila Arantes, the art director and curator for Paço das Artes.</p>
                     
                     <p>Diego Matos explains that the exhibition title was borrowed from the artist Lygia Pape, who uttered the sentence as she interviewed the scholar and art critic Mário Pedrosa for Brazil’s now-defunct O Pasquim weekly, back in 1981. “At a time of crisis, when Brazilian society had already assimilated the trauma and all hope had been killed by the military regime, Pedrosa refreshed belief in the role of the artist and of the public intellectual, as well as in the inherent art-politics relationship,”  the show’s curator reveals. During that same period, video was gaining popularity and becoming increasingly widespread in the country. “At that historical scenario and in the Brazilian setting, art also seemed to be reclaiming its character of resistance in a more immediate way – and video would play this fundamental role,” he adds.</p>
                     
                     <p>By taking national production as a starting point and connecting it to artworks from six other countries, dating from 1978 to 2012, the curating evinces the “stories that intertwine and reflect the unrestricted field of art.” The exhibition features three broader sections, defined by the commonalities shared by the featured artworks: Affections, Times and Roads, Democracy, Document and Fiction, and Speech, Hearing and Dissent.</p>
                     
                     <p>In the first section, the show’s epicenter, videos by the Brazilians Karim Aïnouz & Marcelo Gomes, Marcellvs L., and Cao Guimarães and by the Israeli Nurit Sharett present their personal perceptions of times and affective spaces. The second set dives into the political-economic past of countries such as Brazil (in the piece by Geraldo Anhaia Mello), Chile (from the perspective of Cláudia Aravena) and Algeria (according to the artist Malek Bensmaïl), and into the gloomy future imagined by the Otolith Group (United Kingdom). The third one focuses on the bedazzlement that originates from divergences –flawed communication or the impossibility to reach consensus. Subjects that are dealt with in a more or less veiled way are raised here, like racism (by Carlos Nader) and homophobia (in the work of Rita Moreira and of Zambia’s Clive van der Berg). The space of reclaimed speech is offered to anonymous persons in the work of Sandra Kogut.</p>
                     
                     <p>Four pieces bridge these sections together spatially: they are the work of Cristiano Lenhardt, João Moreira Salles, and Gabriel Acevedo, which propose superimposed connections between the groupings and artworks that comprise the exhibition. The architect Claudia Afonso’s priority in designing the show was to allow the public to move around the venue in a continuous, circular, integrated way. The continued transit throughout the exhibition space also takes into consideration the architectural peculiarity of Paço das Artes.</p>
                     
                     <p>Learn more about the <a class="link" href="/pp.php#encontros">Public Programs</a> activities of the 19th Contemporary Art Festival Sesc_Videobrasil | Southern Panoramas integrated into the program of the show Those Born For Adventure Don’t Stray From the Path – Artworks from the Videobrasil Collection. </p>');

                    ?>
                    
                    

                    
                </div>

            </div>

            <br style="margin-bottom: 13px" />

            <div class="row">
                <div class="col-sm-12 col-md-6 a" style="margin-top: 0; padding-left: 15px">

                    <div class="row link_rodape" style="margin-top: 0; margin-bottom: 17px">                 
                        <div class="col-md-12" style="padding-left: 0">                     
                            <?php pten(
                            '<p><span class="upper a">Paço das Artes</span><br />
                            Av. da Universidade, 1 <br />
                            São Paulo, SP<br />
                            Tel.: +55 11 3814 4832 | 3815-4895<br /><a href="http://www.pacodasartes.org.br" target="_blank">www.pacodasartes.org.br</a></p>
                            <p><br /><span class="upper a">visitação</span><br />
                            de 9 de outubro de 2015 a 10 de janeiro de 2016<br />
                            quarta a sexta das 10h às 19h;<br />
                            sábados, domingos e feriados das 11h às 18h</p>',

                            '<p><span class="upper a">Paço das Artes</span><br />
                            Av. da Universidade, 1 <br />
                            São Paulo, SP, Brazil<br />
                            phone: +55 11 3814 4832 | 3815-4895<br /><a href="http://www.pacodasartes.org.br" target="_blank">www.pacodasartes.org.br</a></p>
                            <p><br /><span class="upper a">visiting hours</span><br />
                            october 9, 2015, to january 10, 2016<br />
                            wed-fri, from 10am to 7pm;<br />
                            sat, sun, holidays, from 11am to 6pm</p>'); ?>


                        </div>
                    </div>

                </div>
               <!-- <div class="col-sm-12 col-md-6 relative">
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

