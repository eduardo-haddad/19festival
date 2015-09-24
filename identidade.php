<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Identidade' : 'Identity';

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
            $('.img-id-1').hover(
                function(){
                    $(this).attr('src', 'img/identidade/id1_b.jpg');
                },

                function(){
                    $(this).attr('src', 'img/identidade/id1_a.png');
                }
            );
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

        	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span><?php pten('<a href="index.php#sobre" class="link">sobre o festival</a> > <span class="underline">identidade visual</span>', 
                                     '<a href="index.php#sobre" class="link">about the festival</a> > <span class="underline">visual identity</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                            <a href="apresentacao.php"><?php pten('Apresentação','Introduction');?></a> | 
                            <a href="palavrasesc.php"><?php pten('Palavra do Sesc','Word from Sesc');?></a> | 
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a> | 
                            <a href="identidade.php"><span style="text-decoration: underline"><?php pten('Identidade Visual','Visual Identity');?></span></a> | 
                            <a href="realizacao.php"><?php pten('Realização','Undertaking');?></a> | 
                            <a href="parceiros.php"><?php pten('Parceiros','Supporters');?></a> | 
                            <a href="fichatecnica.php"><?php pten('Ficha Técnica','Staff');?></a> | 
                            <a href="convocatorias.php"><?php pten('Convocatórias 19º','Open calls');?></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a> | 
                            <a href="visite.php"><?php pten('Visite','Visit');?></a>
                    </p>       
                </div>
            </div>
            <!-- SUBMENU -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Identidade', 'Identity');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" id="id-imagem-top" >
                    <img src="img/identidade/id1_a.png" class="img-id-1" class="img-responsive" />

                    <img src="img/identidade/id2.png" class="img-id-2" class="img-responsive" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;" id="id-texto">

                    <?php pten(                      ////APRESENTAÇAO PT                     
                        '<p>Os artistas brasileiros radicados na França, <span class="bold">Angela Detanico</span> e <span class="bold">Rafael Lain</span>
                        trabalham juntos desde meados da década de 90, período de tempo quase tão antigo e profícuo quanto o da parceria que
                        estabeleceram com o Festival de Arte Contemporânea Sesc_Videobrasil. A dupla, que já apresentou trabalhos na Bienal de
                        Veneza (2007), na Bienal de São Paulo (2004, 2006 e 2008) e na Bienal de Havana (2009), foi responsável pela identidade
                        visual de cinco edições do Festival: do 13º ao 17º (de 2001 a 2011). Agora, os artistas voltam a assinar a direção de
                        arte na 19ª edição. Partindo de questões relacionadas à produção artística do Sul global exploradas pela curadoria, como
                        identidade, memória e iconografia, eles conceberam uma proposta visual para o Festival que remete a alfabetos
                        originários da África e ao mito sobre o nascimento da escrita.</p>

                        <p>A partir da nomeação do primeiro convidado do 19º Festival, um dos mais reverenciados artistas contemporâneos da África,
                        o malinês Abdoulaye Konaté, Detanico e Lain iniciaram uma pesquisa que se voltou aos inúmeros sistemas de escrita
                        originados no continente africano – de alfabetos e silabários ancestrais às mais recentes proposições de preservação da
                        tradição oral. Uma das referências iniciais dessa pesquisa foi a obra de Frédéric Bruly Bouabré (1923-2014), artista da
                        Costa do Marfim que integrou a 55ª Bienal de Veneza (2013), a 30ª Bienal de São Paulo (2012) e a Documenta 11 (2002). Na
                        década de 1950, Bruly Bouabré criou um extenso silabário pictográfico com mais de 400 caracteres na intenção de que a
                        história de seu povo, transmitida oralmente na língua bété, pudesse ser registrada. A partir desse trabalho, a dupla
                        inciou uma pesquisa sobre sistemas de escrita na África que nos levou a outros alfabetos criados recentemente para
                        línguas de tradição oral, como o kikakui, na Serra Leoa, e o mandombe, no Congo.  Para além dos jovens alfabetos
                        africanos, os antiquíssimos sistemas de escrita concebidos no norte da África também estão presentes na pesquisa da
                        dupla, como o alfabeto tifinagh, utilizado para escrever as línguas berberes do norte, e o ge’ez, que sobreviveu à
                        língua falada na Etiópia e na Eritreia.</p>

                        <p>O diálogo Fedro, de Platão, também serviu de base para a pesquisa de Detanico Lain. O filósofo grego aborda o  mito da
                        origem da escrita e afirma que os caracteres gráficos foram inventados pelo deus egípcio Tauthos, pai dos números, do
                        cálculo, da geometria e da astronomia. Sobre a escrita, Tauthos teria afirmado: “Eis uma arte que tornará os egípcios
                        mais sábios e os ajudará a fortalecer a memória, pois com a escrita descobri o remédio para a memória”.</p>

                        <p>Com essas referências, a dupla criou a tipografia Tautográfica a partir de elementos gráficos comuns aos alfabetos
                        estudados, propondo que os caracteres funcionem ao mesmo tempo como imagem e texto, criando uma espécie de estranhamento
                        com a linguagem. Desta forma, é oferecida aos leitores a possibilidade de redescoberta dos desenhos das letras – num
                        primeiro momento ilegível, a leitura se desvela para quem dedicar o tempo necessário a decifrá-la. Tautográfica será
                        aplicada junto à fonte Fedra, criada em 2001 pelo designer Peter Bilak. Desenvolvida também para os alfabetos árabe,
                        devanágari e armênio, o desenho dessa fonte tipográfica pretende humanizar a mensagem e proporcionar uma boa leitura
                        tanto em meio impresso quanto no computador. Com uma paleta em tons terrosos, que variam a partir das obras dos demais
                        artistas convidados do 19º Festival, a identidade visual criada pela dupla Detanico Lain será desdobrada na sinalização
                        do espaço expositivo, nas publicações, peças gráficas e no site do 19º Festival, aplicadas pelas designers Carla
                        Castilho e Lia Assumpção (Janela Estúdio) e Lila Botter (Videobrasil), e pelo artista Deco Farkas. </p>',

                    //APRESENTAÇAO EN                     
                    
                    '<p>The Brazilian-born, French-based artists <span class="bold">Angela Detanico</span> and <span class="bold">Rafael Lain</span> have worked together since the mid-90s, a period almost as long and prolific as their partnership with
                    the Contemporary Art Festival Sesc_Videobrasil. The duo, whose works have been shown at the Venice Biennale (2007), São
                    Paulo Art Biennial (2004, 2006 and 2008) and Havana Biennial (2009), took care of visual identity in five different
                    Festival editions, from the 13th through the 17th (from 2001 to 2011). Now, they will art direct again for the 19th
                    edition. Building on global South art production issues that the curating addresses, like identity, memory and
                    iconography, they devised a visual concept for the Festival that harks back to African alphabets and the myth of the
                    origin of writing.<p>
                    
                    <p>After the announcement of the 19th Festival’s first guest – one of the most revered contemporary artists from Africa,
                    Mali’s Abdoulaye Konaté –, Detanico and Lain started researching the numerous writing systems that originated in the
                    African continent, from ancestral alphabets and syllabaries to the latest proposals for preserving oral tradition. One
                    of the early references in their research was the work of Frédéric Bruly Bouabré (1923-2014), an Ivory Coast artist
                    featured in the 55th Venice Biennale (2013), the 30th São Paulo Art Biennial (2012) and the Documenta 11 (2002). In the
                    1950s, Bruly Bouabré designed an expansive pictorial syllabary of 400-plus characters to document the history of his
                    people, transmitted orally in the Bété language. From then on they set out researching African writing systems, which
                    led them to other alphabets created recently for oral tradition-based languages, like Sierra Lione’s Kikakui and Congo’s
                    Mandombe. Beyond the young African alphabets, the duo’s research also includes age-old scripts created in North Africa,
                    like the Tifinagh alphabet employed in the writing of northern Berber languages, and Ge’ez, which has outlived the
                    language spoken in Ethiopia and Eritrea.<p>
                    
                    <p>Plato’s dialogue Phaedrus also lays the groundwork for Detanico Lain’s research work. The Greek philosopher addresses
                    the myth of the origin of writing and states that graphic characters were invented by the Egyptian deity Thoth, the
                    creator of numbers, calculus, geometry and astronomy. Regarding script, Thoth allegedly said: “Here is an art that shall
                    make Egyptians wiser and help them strengthen their memory, for in writing I have discovered the remedy for memory.”<p>
                    
                    <p>Working with these references, the duo designed the Tautográfica [Thothgraphics or Tautographics] typography, using
                    graphic elements shared by the alphabets they researched. The idea is to have characters act as image and text at once,
                    creating a sort of defamiliarization with language. This affords readers the possibility to rediscover the designs of
                    letters – illegible at first, the reading unravels to those who put in the time to decipher it. Tautográfica will be
                    applied in tandem with the Fedra font created in 2001 by designer Peter Bilak. This typographic font was also created
                    for the Arab, Devanagari and Armenian alphabets, and its design is intended to humanize the message and enable good
                    reading both in print and on computers. Featuring a palette of earthy tones, with variations based on the works of other
                    19th Festival guest artists, the visual identity put together by the Detanico Lain duo will unfold into signs at the
                    exhibition spaces, publications, printed materials and the 19th Festival website, applied by designers Carla Castilho
                    and Lia Assumpção (Janela Estúdio) and Lila Botter (Videobrasil) and by the artist Deco Farkas.<p>
                    ');

                    ?>
                    
                    
                </div>

                <div class="col-sm-12 col-md-6 relative" id="id-imagem-bottom" style="margin-top: 15px">
                    <img src="img/identidade/id1_a.png" class="img-id-1" class="img-responsive" style="max-width: 485px" />

                    <img src="img/identidade/id2.png" class="img-id-2" class="img-responsive" style="max-width: 485px" />

                </div>

            </div>

           
            <div class="row" style="clear: both;margin-top: 30px">

                <div class="col-sm-12 col-md-6" >
                    <img src="img/identidade/detanicolain.png" class="img-responsive retrato-artista" style="margin-bottom: 15px; margin-left:auto;" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;" id="id-texto">

                <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Sobre os artistas', 'About the artists');  ?>
                </p>
                </div>
            </div>

                    <?php pten(                      ////SOBRE OS ARTISTAS -  PT                     
                        '<p><span class="bold">Angela Detanico</span> e <span class="bold">Rafael Lain</span> são, respectivamente, linguista e tipógrafo
                        de formação. Trabalhando em colaboração desde 1996, os dois começaram a desenvolver ideias de escrita, leitura e
                        tradução, seja de um meio para outro, seja de um código para outro, interessados nos limites da representação do tempo e
                        do espaço. A dupla desenvolve trabalhos que cruzam poesia, som e imagem, atuando tanto em design, quanto no cenário da
                        arte contemporânea. Tipografia, design gráfico, vídeo, arquitetura, internet e CD-ROM são alguns dos formatos já
                        contemplados pela dupla, que foi objeto do primeiro FF>>Dossier publicado pelo Videobrasil, com entrevistas e ensaios
                        feitos pelos pesquisadores Giselle Beiguelman e Eduardo de Jesus.</p>

                        <p>Além de terem sido responsáveis pela identidade visual do Festival de 2001 a 2011, também foram
                        membros do conselho de programação de duas edições (2001 e 2003). Eles ainda realizaram performances
                        que hoje têm registros no Acervo Videobrasil (Entre, Dobra 24.9.2003, Sound Waves for Selected
                        Landscapes). Angela Detanico e Rafael Lain foram convidados especiais dos Programas Públicos do 18º
                        Festival de Arte Contemporânea Sesc_Videobrasil (2013), que comemorou os 30 anos do Festival com uma
                        série de encontros ao longo da programação. Ao lado de outros artistas e designers que contribuíram
                        com a identidade do Festival, como Kiko Farkas, Bill Martinez, Daniel Trench e Celso Longo, a dupla
                        abordou, no encontro “Design, Conceito e Espaço”, o perfil diferenciado do Festival em relação à
                        criação de suas propostas gráficas, fruto da aproximação entre os designers e a curadoria – a
                        identidade visual do Festival reflete e reforça as questões que surgem a cada edição.</p>
    
                        <p>A dupla vencedora do Nam June Paik Award de 2004 – uma das mais importantes premiações de arte
                        eletrônica do mundo – já apresentou trabalhos na 52ª Bienal de Veneza (Itália, 2007), em três
                        edições da Bienal de São Paulo (2004, 2006 e 2008) e na 10ª Bienal de Havana (Cuba, 2009). Detanico
                        e Lain participaram da Media City Seoul (Coreia do Sul, 2004) e da Trienal de Echigo Tsumari (Japão,
                        2006). Exposições individuais recentes aconteceram na Fundação Iberê Camargo (Porto Alegre, Brasil,
                        2013), com curadoria de Solange Farkas, fundadora e diretora da Associação Cultural Videobrasil, no
                        Museu Coleção Berardo (Lisboa, Portugal, 2013) e no Kyoto Art Center (Quioto, Japão, 2013). Seus
                        trabalhos foram apresentados recentemente no Musée d\'Art Contemporain de Lyon (Lyon, França); no
                        Wexner Center for the Arts (Columbus, EUA); no Astrup Fearnley Museet (Oslo, Noruega).</p>


                    ',

                    //SOBRE OS ARTISTAS - EN                     
                    '<p><span class="bold">Angela Detanico</span> and <span class="bold">Rafael Lain</span> are respectively a linguist and a typographer by trade. Working in collaboration since 1996, they started out by
                    developing ideas on writing, reading and translation, either from one medium to another or from one code to another, in
                    an attempt to explore the boundaries of representation in time and space. The duo combines poetry, sound and image to
                    create both design and contemporary art pieces. Typography, graphic design, video, architecture, internet and CD-ROM are
                    some of the formats covered by the artists, who were featured in the first-ever edition of Videobrasil’s FF>>Dossier,
                    with interviews and essays by researchers Giselle Beiguelman and Eduardo de Jesus.</p>
                    
                    <p>Besides creating the visual identity for the Festival from 2001 to 2011, they were also members of the event’s
                    programming board (2001 and 2003). They also created performances whose footage is now part of the Videobrasil
                    Collection (Entre, Dobra 24.9.2003, Sound Waves for Selected Landscapes). Angela Detanico and Rafael Lain were special
                    Public Programs guests during the 18th Contemporary Art Festival Sesc_Videobrasil (2013), which marked the Festival’s
                    30th anniversary with several meetings as the event unfolded. Alongside other artists and designers who have contributed
                    to the Festival’s identity, including Kiko Farkas, Bill Martinez, Daniel Trench and Celso Longo, the duo participated in
                    the “Design, Concept and Space” meeting, where they discussed the unique character of the Festival’s graphic concepts,
                    spawned by a collaboration between designers and curators. The visual identity of the Festival reflects and highlights
                    the issues brought up by each new edition.</p>
                    
                    <p>Detanico Lain won the 2004 Nam June Paik Award – one of the world’s foremost electronic art prizes – and have shown
                    their work at the 52nd Venice Biennale (Italy, 2007), in three São Paulo Art Biennial editions (2004, 2006 and 2008) and
                    at the 10th Havana Biennial (Cuba, 2009). Detanico & Lain also participated in the Media City Seoul (South Korea, 2004)
                    and the Echigo Tsumari Art Triennale (Japan, 2006). They had recent solo exhibits at the Fundação Iberê Camargo (Porto
                    Alegre, Brazil, 2013), curated by Associação Cultural Videobrasil founder and director Solange Farkas, at the Museu
                    Coleção Berardo (Lisbon, Portugal, 2013) and at the Kyoto Art Center (Kyoto, Japan, 2013). Their work was shown recently
                    at the Musée d\'Art Contemporain de Lyon (Lyon, France); at the Wexner Center for the Arts (Columbus, USA); and at the
                    Astrup Fearnley Museet (Oslo, Norway). </p>');

                    ?>
                    
                    
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

