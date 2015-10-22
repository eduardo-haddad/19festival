<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Projetos Comissionados' : 'Commissioned Projects';

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
	<script src="js/19festival.js"></script>
    <script>
        $(document).ready(
            function(){
                paletaArtistas($('.sobre-expo p'));
                paletaArtistas($('.sobre-expo p:nth-child(n+2)'));

        
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
                    <span><?php pten('<a href="index.php#exposicoes" class="link">exposições</a> > <span class="underline">projetos comissionados</span>', 
                                     '<a href="index.php#exposicoes" class="link">exhibitions</a> > <span class="underline">commissioned projects</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="expo_convidados.php"><?php pten('artistas convidados', 'guest artists') ?></a> | 
                        <a href="expo_projetos.php"><span style="text-decoration: underline"><?php pten('projetos comissionados', 'Commissioned projects') ?></span></a> | 
                        <a href="expo_obras.php"><?php pten('obras selecionadas', 'Selected works') ?></a> | 
                        <a href="expo_paralela.php"><?php pten('exposição paralela', 'Parallel exhibition') ?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <p class="titulo"><?php pten('panoramas do sul | projetos comissionados', 
                                         'southern panoramas | commissioned projects'); ?></p> 
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" >
                    <img src="img/expos/expo-projetos-img.jpg" class="img-responsive" style="max-width: 485px" />
                    <div id="lista">
                        <ol>
                                <li class="upper"><?php pten('Artistas selecionados pelo<br />edital de projetos comissionados', 
                                                             'Artists selected from the<br />commissioned projects call for entries'); ?><br /><br /></li>
                                <li><a href="/carlosmonroy">Carlos Monroy | <?php pten('Colômbia', 'Colombia'); ?></a></li>
                                <li><a href="/cristianolenhardt">Cristiano Lenhardt | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/keli-safiamaksud">Keli-Safia Maksud | <?php pten('Quênia', 'Kenya'); ?></a></li>
                                <li><a href="/ting-tingcheng">Ting-Ting Cheng | <?php pten('Taiwan', 'Taiwan'); ?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 sobre-expo h" style="float: right;">

                    <?php pten( 
                    ////APRESENTAÇAO PT
                    '<p>As obras que compõem a exposição são fruto de um edital para comissionamento de projetos de artistas do Sul lançado em 2014 pelo Festival. O novo mecanismo reafirma a vocação do Videobrasil para descobrir e apostar em proposições artísticas relevantes nessas regiões. Realizadas com acompanhamento dos curadores do Festival, as obras de Ting-Ting Cheng (Taiwan), Cristiano Lenhardt (Brasil), Carlos Monroy (Colômbia) e Keli-Safia Maksud (Quênia) inauguram o Galpão VB, espaço de exposições, pesquisa e outras atividades de ativação do Acervo Videobrasil.</p>
                     ',

                    //APRESENTAÇAO EN
                    '<p>The artworks in the exhibit are the results of an open call released by the Festival in 2014 for artists from the South to enter projects for commissioning. Through this new initiative, Videobrasil reaffirms its vocation for finding and betting on relevant artistic proposals in these regions. Created with curatorial oversight from the Festival, the artworks by Ting-Ting Cheng (Taiwan), Carlos Monroy (Colombia), Keli-Safia Maksud (Kenya) and Cristiano Lenhardt (Brazil) will inaugurate Galpão VB, a venue for exhibitions, research, and other activities designed to activate the Videobrasil Collection.</p>');

                    ?>
                    
                    <p class="titulo" style="margin-top:37px"><?php pten('Statement da curadoria', 'Statement'); ?></p>

                    <?php pten( 
                    ////STATEMENT PT
                    '<p>A partir de estratégias distintas, os quatro projetos aqui apresentados abordam as tensões existentes entre a produção simbólica de diferentes regiões do mundo. Ao investigar a natureza das múltiplas identidades forjadas no contexto do Sul geopolítico, e como a cultura produzida nessa ampla região é construída, ganha circulação e se legitima, eles sublinham as nuances, lacunas e os desvios de percepção que constituem a pluralidade dos olhares que lançamos sobre o mundo. </p>
                     <p>Nesse sentido, o colombiano Carlos Monroy toma como objeto de pesquisa o fenômeno da lambada, ritmo que ganha força no Brasil dos anos de 1990. A partir da apropriação brasileira de uma canção boliviana posteriormente plagiada por produtores franceses, a lambada representa um dos maiores sucessos comerciais da indústria fonográfica nacional. Suas repercussões mais recentes surgem em uma série de novas e controversas manifestações culturais hipersexualizadas, como certas modalidades do pagode e do funk carioca, que desconhecem faixas etárias ou estratos sociais, tal sua capilaridade nos meios de comunicação. Na construção da sua pesquisa, Monroy incorpora a questão dos direitos autorais como um elemento estruturante, tornando a apropriação de imagens preexistentes em vídeos da internet seu principal recurso para a elaboração de uma narrativa que mescla ficção e pesquisa documental e apresenta um potente painel da cultura latino-americana na contemporaneidade. </p>
                     <p>As mesmas tensões entre expressões culturais locais e elementos estrangeiros estão presentes na obra da queniana Keli-Safia Maksud. A artista investiga a disseminação de dois produtos europeus no continente africano: o sabão e os tecidos estampados. Abordando os discursos associados a eles, Keli discute os elementos que formam sua identidade e os reinscreve a partir de uma visada crítica. Sua obra parte de uma trouxa feita com os tradicionais tecidos com padronagens “africanas”, que vão sendo embranquecidos por alvejantes. As narrativas que derivam dessa ação central reelaboram, poética e politicamente, os temas centrais de sua produção. </p>
                     <p>A interseção entre representação e simbologia é um dos temas que atravessa toda a prática da taiwanesa Ting-Ting Cheng. Seu The Atlas of Places Do Not Exist, uma extensa coleção de livros sobre lugares que não existem, olha para o mundo como um conjunto de territórios imateriais e levanta questões que remetem ao universo do próprio Videobrasil – afinal, o Sul global é também um lugar que não existe, carregado de símbolos aqui colocados em diálogo. Ecoando temas do Festival, a biblioteca criada por Cheng constitui um mapeamento de diversas questões que marcam nosso universo simbólico. </p>
                     <p>Superquadra-saci, de Cristiano Lenhardt, explora em sentido análogo a existência e a inexistência dos lugares. Nesse vídeo, o artista atravessa diferentes camadas de enfrentamentos ficcionais para construir exercícios de uma política da liberdade e do pensamento utópico. Ao mesclar o cotidiano ao sobrenatural e ao monstruoso, Lenhardt faz de personagens esquecidos moradia e refúgio, como se lembrasse que, atrás de cada coluna modernista, há um “Saci-Pererê” – um “Ser-Índio” – escondido, como uma espécie de assombração. </p>
                     <p>Entre o universo fantástico e a biblioteca, a indústria cultural e a publicidade, o que temos é um vislumbre da instabilidade que constitui as identidades e os lugares de fora do centro. É essa a paisagem de disputas, às vezes radicais, que vemos, ao lançar o olhar para um panorama do sul. </p>
                     ',

                    //STATEMENT EN
                    '<p>The four projects featured here take distinct approaches to dealing with the existing tensions between symbolic production from different parts of the world. Investigating the presence and materiality of identities forged in the context of the geopolitical South and the way culture produced in this vast region —made up of “non-Western” areas—is built, circulated, and legitimized, they underscore the gaps and deviations in perception that have by now become a natural part of our gaze upon the world. </p>
                     <p>In this sense, the object of research of Colombia’s Carlos Monroy is the 1990s lambada craze. Spawned by the Brazilian appropriation of a Bolivian song that was later plagiarized by French music producers, it was one of the biggest commercial successes of the national music industry. Its more recent repercussions involve a series of other hypersexualized cultural manifestations, such as certain modalities of pagode and funk carioca. In building his research, Monroy incorporates the issue of copyrights as a structuring element, appropriating preexisting footage from Internet videos as his primary tool to weave a narrative that combines fiction and documental research, drawing a compelling portrait of Latin American culture in contemporary times. </p>
                     <p>The same tensions between local cultural expressions and foreign elements are featured in the work of Keli-Safia Maksud from Kenya. The artist explores the dissemination of two European products in the African continent: soap and print fabrics. Dealing with the discourses these items bring in their wake, Maksud discusses the elements that inform her identity and rearranges them from a critical perspective. Her work features a bundle of traditional textiles with “African” print patterns that are gradually whitened with bleach. The narratives deriving from the central action poetically and politically re-elaborate key topics from her output. </p>
                     <p>The intersection of representation and symbology is one of the subjects featured throughout the entire practice of Taiwan’s Ting-Ting Cheng. Her The Atlas of Places Do Not Exist, a vast collection of books about inexistent localities, looks out on the world as a group of immaterial territories and raises issues that hark back to Videobrasil’s own universe—after all, the global South is also a place that doesn’t exist, one that’s charged with symbols and representations that are made to converse here. Echoing themes from the Festival, Cheng’s library constitutes a mapping of different issues that mark our symbolic universe. </p>
                     <p>Cristiano Lenhardt’s Superquadra-saci analogously explores the existence and inexistence of places. In this video, the artist cuts through different layers of fictional confrontations to build exercises that relate to a politics of freedom and utopian thinking. Combining everyday life with the supernatural and the monstrous, Lenhardt makes forgotten characters his dwelling and refuge, as if remembering that behind every modernist column there lurks a “Saci-Pererê”—an “Indian-Being”—hidden like some ghost. </p>
                     <p>Between the fantastic universe and the library, the culture industry and advertising, what we get is a glimpse of the instability that constitutes off-center identities and places. This landscape of disputes, at times radical, is what we see on directing our gaze to a southern panorama.</p>
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
                            '<p><span class="upper a">Galpão VB</span><br />
                            Av. Imperatriz Leopoldina, 1150<br />
                            São Paulo, SP<br />
                            tel.: +55 11 3645 0516 | <a href="http://www.videobrasil.org.br" target="_blank">www.videobrasil.org.br</a></p>
                            

                            <p><br /><span class="upper a">abertura</span><br />
                            8 de outubro de 2015, às 19h</p>

                            <p><span class="upper a">visitação</span><br />
                            de 9 de outubro a 6 de dezembro de 2015<br />
                            segundas, quartas, quintas e sextas das 13h às 19h; terças das 14h às 21h</p>',

                            '<p><span class="upper a">Galpão VB</span><br />
                            Av. Imperatriz Leopoldina, 1150<br />
                            São Paulo, SP, Brazil<br />
                            phone: +55 11 3645 0516 | <a href="http://www.videobrasil.org.br" target="_blank">www.videobrasil.org.br</a></p>
                            

                            <p><br /><span class="upper a">opening</span><br />
                            October 8, 2015<br>7pm</p>

                            <p><br /><span class="upper a">visiting hours</span><br />
                            October 9 to December 6, 2015<br />
                            mon, wed, thu, fri, from 1pm to 7pm;<br />
                            tue, from 2pm to 9pm</p>'); ?>


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

