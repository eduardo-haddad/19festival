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
                        <a href="expo_paralela.php"><span style="text-decoration: underline"><?php pten('exposição paralela', 'Parallel exhibition') ?></span></a> 
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
                                <li class="upper"><?php pten('Exposição paralela', 'Parallel exhibition'); ?><br /><br /></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/39686">Cao Guimarães | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/21102">Carlos Nader | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/39115">Claudia Aravena | <?php pten('Chile', 'Chile'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/39124">Clive van den Berg | <?php pten('Zâmbia', 'Zambia'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/238258">Cristiano Lenhardt | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="#">Gabriel Acevedo | <?php pten('Peru', 'Peru'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/21243">Geraldo Anhaia Mello | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/56880">João Moreira Salles | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="#">Karim Aïnouz | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/39394">Malek Bensmail | <?php pten('Argélia', 'Algeria'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/75819">Marcellvs L. | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/240526">Marcelo Gomes | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/394092">Nurit Sharett | <?php pten('Israel', 'Israel'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/21430">Rita Moreira | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/21444">Sandra Kogut | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="http://site.videobrasil.org.br/acervo/artistas/artista/242653">The Otolith Group | <?php pten('Reino Unido', 'United Kingdom'); ?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6  h" style="float: right;">


                     <?php pten(                      ////APRESENTAÇAO PT                     
                    '<p style="display:inline">Releitura, à luz do contemporâneo, da produção resguardada pelo Acervo Videobrasil, reúne dezesseis obras realizadas entre 1978 e 2012 por artistas do Sul global. Os trabalhos e o contexto brasileiros inspiram os três eixos da curadoria - Afeições, tempos e estradas; Democracia, documento e ficção; e Fala, escuta e dissenso –, que dialogam com o universo das obras do Festival. O título cita frase da artista Lygia Pape, ao interpelar o crítico Mário Pedrosa em entrevista ao jornal O Pasquim em 1981. A exposição paralela do 19º Festival tem curadoria de Diego Matos, coordenador de Arquivo e Pesquisa da Associação Cultural Videobrasil.</p>',

                    //APRESENTAÇAO EN                     
                    '<p style="display: inline">
                    A contemporary take on productions from the Videobrasil Collection, featuring 16 pieces created between 1978 and 2012 by artists from the global South. The program is divided into three sections, inspired by the selected Brazilian artworks—Affections, Times and Roads; Democracy, Document and Fiction; and Speech, Hearing and Dissent—which converse with the universe outlined by the artworks featured in the Festival. The title is a quote from a 1981 interview by the critic Mário pedrosa to artist Lygia pape, for the newspaper O Pasquim. The parallel show of the 19th Festival is curated by Diego Matos, Associação Cultural Videobrasil, Archive and Research coordinator. </p>');

                    ?>
                    
                     <p class="titulo" style="margin-top:37px"><?php pten('Statement da curadoria', 'Statement'); ?></p>

                    <?php pten( 
                    ////STATEMENT PT
                    '<p>Em 1981, em entrevista concedida ao Pasquim por intermédio de uma série de intelectuais, artistas ou formadores de opinião, Mário Pedrosa ouviria a sentença: “Quem nasce pra aventura não toma outro rumo”, proferida pela Pape, que o interpolara logo no início da entrevista. Na virada para os anos 1980, em um momento de crise com o fim das esperanças, frustradas pelo regime militar, e escancaramento, portanto, de um trauma na sociedade brasileira, que até hoje reverbera, o intelectual — provocador, professor e crítico — renovava a crença no papel do artista e do intelectual público, bem como na relação inerente entre arte e política. Com essa perspectiva, a arte, naquele momento histórico e naquele ambiente brasileiro, parecia também resgatar o seu caráter de resistência de maneira mais imediata — e o vídeo, em toda a sua natureza proteiforme, teria, então, esse papel fundamental. </p>

                     <p>É essa aventura e seu lugar de partida, o Brasil e toda a sua ambivalência, que a mostra busca apresentar. Trata-se de um olhar que se impõe do sul ao norte por meio de razões poéticas, de outras histórias e ficções, dos dissensos  frente ao campo social normativo, como também de outros lugares — mapeados geograficamente, mas excluídos da cultura hegemônica. São histórias que se entrecruzam e refletem o campo irrestrito da arte e de sua atualidade. O dispositivo para esse exercício de tradução, por ora, é a exposição que torna visível um lugar de fala; ela é, por si só, uma aventura com lastro histórico. </p>
                     
                     <p>Demarcar esse lugar, fincar discursos e estabelecer ritmos e tempos são os papéis que determinadas obras pontuais — aos modos de interlúdios —, de artistas como Cristiano Lenhardt e João Moreira Salles, exercem na aberta narrativa desta curadoria. O primeiro nos situa no âmbito do lugar geográfico, e o segundo, no lugar sensível da arte. Em um arco temporal que vai de 1978 a 2012, 16 obras representam 16 artistas de lugares e vivências distintas, o que não impede, no entanto, de evidenciar o Brasil como lugar de partida de um ciclo que não se fecha. </p>
                     
                     <p>O contexto brasileiro, tomado como eixo norteador, vai ao encontro de outras referências geopolíticas, criando para a exposição três conjuntos, cada um com seu campo temático. Os núcleos foram nomeados em consonância com os aportes trazidos pelos artistas e trabalhos selecionados para esta edição do Festival, ao mesmo tempo em que nomeiam o lugar de partida das produções brasileiras e de como elas dialogam com contextos externos tão dissonantes e, ao mesmo tempo, tão próximos. São eles os rumos desta aventura construída e de muitas outras que serão estabelecidas pelo público. <em>Democracia, documento e ficção</em> conta com os olhares de Geraldo Anhaia Mello, Malek Bensmaïl, The Otolith Group e Claudia Aravena. <em>Afeições, tempos e estradas</em>, o segundo agrupamento e epicentro da exposição, é composto pela dupla Karim Aïnouz e Marcelo Gomes, os brasileiros Marcellvs L. e Cao Guimarães, e a israelense Nurit Sharett. Em <em>Fala, escuta e dissenso</em>, Sandra Kogut, Rita Moreira, Carlos Nader e Clive van den Berg evidenciam a arena política de diversos debates públicos que afloram nos processos cotidianos da vivência democrática. Incide também naquilo que Jacques Rancière denuncia como a ideia de um “ódio” à própria democracia que parece não ascender à plenitude. </p>
                     
                     <p>Complementam os interlúdios a obra de Gabriel Acevedo e um segundo trabalho de Lenhardt, também da série “Ao Vivo” — mais uma vez, representando a veracidade dos eventos cotidianos, evidenciando a falsa perspectiva de um sentimento de transformação pragmática e técnica. Aos modos de uma <em>sinédoque</em> (a personificação das obras e de seus lugares), são os trabalhos que aqui se movimentam pelo próprio caminhar do espectador, criando relações que se sobrepõem. Para cada conjunto ou vizinhança e tempos aqui contidos, são construídos cheios e vazios, conflitos e aproximações, reclusões e espraiamentos. </p>
                     
                     <p>Ao final desta jornada, tomamos permissão para usar as palavras atemporais de Mário Pedrosa ao descrever, no princípio dos anos 1980, os seus objetivos enquanto realizador de exposições e pensador. Como lição, evocamos, então, duas condicionantes fundamentais para os percursos expositivos fundados na memória crítica de um acervo: “mostrar que a arte não é uma coisa artificial, que ela vem do homem, qualquer que seja a tecnologia em que viva. A tecnologia prepara, mas não cria nada, nem ontem nem hoje”.</p>',

                    //STATEMENT EN
                    '<p>In 1981, while granting an interview for the Pasquim daily, speaking to several intellectuals, artists and opinion-makers, Mário Pedrosa would hear the sentence: “Those born for adventure don’t stray from the path,” uttered by Lygia Pape, who had questioned him right at the outset. As the 1980s began, it was a time of crisis; all hope had been killed by the military regime; a trauma that reverberates until this day was made clear in Brazilian society; and the intellectual – a provocateur, professor and critic – rekindled belief in the role of the artist and public intellectual, and in the inherent connection between art and politics. From this perspective, at that historical juncture and environment in Brazil, art also seemed to revive its character of resistance in a more immediate way — and video, in all of its protean nature, was poised to play that fundamental role. </p>

                     <p>This adventure and its starting point, Brazil, in all its ambivalence, is what this show sets out to portray. It is about a gaze that imposes itself from south to north through poetical reasons, through other stories and fictions, through dissent from the normative social field, and through other places — geographically mapped, but excluded from hegemonic culture. These are stories that intertwine and reflect the boundless field of art and its currency. The device for this exercise in translation, for the time being, is the exhibition that renders visible a place of speech; it is, in itself, an adventure with historical bearings. </p>
                     
                     <p>To demarcate this place, to lay down discourses and to dictate rhythms and tempos are the roles that specific works — akin to interludes —, by artists like Cristiano Lenhardt and João Moreira Salles, play in the open-ended narrative of this curatorship. The former situates us in a geographical place; the latter, within the sensitive place of art. Spanning the period from 1978 to 2012, 16 pieces represent 16 artists from different places and backgrounds, but this doesn’t stop them from evincing Brazil as the starting point in a cycle that doesn’t come full circle. </p>
                     
                     <p>The Brazilian context, taken as driving axis, converges with other geopolitical references, giving rise to three exhibition sections, each with its own thematic field. The sections were named in consonance with input from the artists and artworks selected for this Festival edition, and at the same time they name the starting points of the Brazilian productions they contain, as well as the way in which they interact with such dissonant, yet closely related external contexts. They provide the direction for this constructed adventure and for many others that the public will establish. <em>Democracy, document and fiction</em> delivers the perspectives of Geraldo Anhaia Mello, Malek Bensmaïl, The Otolith Group and Claudia Aravena. <em>Affections, times and roads</em>, the second section and the show’s epicenter, features the duo Karim Aïnouz and Marcelo Gomes, Brazil’s Marcellvs L. and Cao Guimarães, and Israel’s Nurit Sharett. In <em>Speech, hearing and dissent</em>, Sandra Kogut, Rita Moreira, Carlos Nader and Clive van den Berg evince the political arena of various public debates that arise in the daily processes of democratic experience. This section is also concerned with what Jacques Rancière denounces as the idea of a “hate” of democracy as it seems to fail to rise to plenitude. </p>
                     
                     <p>The interludes are complemented by work by Gabriel Acevedo and a second piece by Lenhardt, also from the “Ao Vivo” series — once again, representing the veracity of everyday events, evidencing the false perspective of a sense of pragmatic and technical transformation. In the way of a <em>synecdoche</em> (the personification of the artworks and their places), here, the artworks move as the spectator walks, creating superimposed relationships. Each of the sets or neighborhoods and times contained herein builds fulls and empties, conflicts and rapprochements, reclusions and expansions. </p>
                     
                     <p>At the end of this journey, we take permission to use Mário Pedrosa’s timeless words as he described his goals as a maker of exhibitions and a thinker in the early 1980s. As a lesson, we thus evoke two fundamental conditions for the exhibition routes founded upon the critical memory of a collection: “to show that art is not an artificial thing; that it comes from man, whatever technology it lives in. Technology prepares, but it doesn’t create anything, it didn’t yesterday and it doesn’t today.” </p>');

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

