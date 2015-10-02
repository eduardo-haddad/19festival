<?php

include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
$titulo = $idioma == 'pt' ? 'Curadoria' : 'Curators';

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
                paletaArtistas($('.curador1 p'));
                paletaArtistas($('.curador2 p'));
                paletaArtistas($('.curador2'));
                paletaArtistas($('.curador3 p'));
                paletaArtistas($('.curador4 p'));
                paletaArtistas($('.curador5 p'));
        
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
                    
                        <span><?php pten('<a href="index.php#sobre" class="link">sobre o festival</a> > <span class="underline">curadoria</span>', 
                                     '<a href="index.php#sobre" class="link">about the festival</a> > <span class="underline">curatorship</span>');  ?></span>       
                    
        	   </div>
            </div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                            <a href="apresentacao.php"><?php pten('Apresentação','Introduction');?></a> | 
                            <a href="palavrasesc.php"><?php pten('Palavra do Sesc','Word from Sesc');?></a> | 
                            <a href="curadoria.php"><span style="text-decoration: underline"><?php pten('Curadoria','Curators');?></span></a> | 
                            <a href="identidade.php"><?php pten('Identidade Visual','Visual Identity');?></a> | 
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
                    <?= $titulo ?>
                </p>
                </div>
            </div>
            
            <div class="row" style="clear: both;margin-top: 13px">

                <div class="col-sm-12 col-md-6" >
                    <!-- <img src="img/sobre/solange.jpg" class="img-responsive retrato-artista" style="max-width: 485px; margin-bottom: 15px;" /> -->
                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    <p>
                    <?php pten('<span class="titulo o">Sutil sintonia</span><br />
                                <span class="submenu">por Solange O. Farkas</span>', 
                               '<span class="titulo o">Subtly in tune</span><br />
                               <span class="submenu">by Solange O. Farkas'); ?></p>

                    <?php pten(////SOLANGE PT                                              
                        '<p class="f">O viés
                        geopolítico que aproxima regiões de passado colonial em um heterogêneo conjunto de sotaques afins é uma ideia que guia o
                        Festival de Arte Contemporânea Sesc_Videobrasil desde os anos 1990. O 19º Festival dedica-se inteiramente a colocar em
                        diálogo vertentes diversas da produção recente desta região simbólica. Os Panoramas do Sul se estendem, assim, a três
                        exposições, que reúnem obras selecionadas a partir de convocatória aberta, projetos que o Festival escolheu para
                        comissionar e trabalhos de cinco artistas convidados: o malinês Abdoulaye Konaté, os brasileiros Sônia Gomes e Rodrigo
                        Matheus, o português Gabriel Abrantes e a marroquina Yto Barrada.</p>

                        <p class="f">A fina complementaridade deste conjunto de conteúdos resulta do trabalho dos curadores convidados Bernardo José de
                        Souza, Bitu Cassundé, João Laia e Júlia Rebouças, pela primeira vez responsáveis pelos três segmentos expositivos do
                        Festival. O edital para comissionamento de projetos, que amplia o espectro de ação do Videobrasil e dá novo sentido a
                        sua pesquisa curatorial, e o lançamento do primeiro livro da série Panoramas do Sul | Leituras, com ensaios dedicados à
                        ideia do Sul geopolítico na arte, são outras mudanças importantes na estrutura desta edição do Festival. O 19º
                        Videobrasil marca, ainda, a abertura do Galpão VB, espaço que passa a abrigar uma série de atividades permanentes de
                        pesquisa e ativação do Acervo Videobrasil. As exposições e programas de filme do Festival se dividem entre o Sesc
                        Pompeia e o Galpão VB, assim como as atividades, encontros e ferramentas que ativam e exploram suas exposições,
                        incluindo oficinas, conversas, visitas, programações on-line e o seminário Lugares e sentidos da arte: debates a partir
                        do Sul. A mostra paralela Quem nasce pra aventura não toma outro rumo, que ocupa o Paço das Artes no período do
                        Festival, reúne uma seleção de obras do Acervo Videobrasil que, de alguma forma, reverberam os temas dos Panoramas do
                        Sul. A curadoria de Diego Matos reafirma a política de reforçar o diálogo entre a coleção e a produção contemporânea.</p>

                        <p class="f">Para além de um conjunto coeso, o que resulta da experiência de dedicar o 19º Festival à produção do Sul é um panorama
                        instigante das estratégias, contranarrativas e indagações que, muitas vezes em sutil sintonia, artistas de trajetórias
                        mais e menos consolidadas mobilizam para confrontar a realidade contemporânea. </p>',

                    //SOLANGE EN                                                  
                        '<p class="f">
                         The geopolitical commonalities that unite regions with a colonial past into a heterogeneous set with shared accents is
                         an idea that has driven the Contemporary Art Festival Sesc_Videobrasil since the 1990s. The 19th Festival is entirely
                         devoted to establish dialogue among diverse subsets of recent productions from the South. To this end, Southern
                         Panoramas branches out into three exhibitions featuring artworks selected through an open call for entries, projects the
                         Festival chose to commission, and pieces created by five guest artists: Abdoulaye Konaté from Mali, Sônia Gomes and
                         Rodrigo Matheus from Brazil, Gabriel Abrantes from Portugal, and Yto Barrada from Morocco.
                         <p class="f">
                         The exquisite complementarity between this bevy of contents stems from the work of guest
                         curators Bernardo José de Souza, Bitu Cassundé, João Laia and Júlia Rebouças, who were
                         entrusted with all three Festival exhibitions for first time. The commissioning of art
                         projects, which broadens Videobrasil’s scope of action and endows its curatorial research with
                         new meaning, as well as the launch of the first book of the Southern Panoramas | Readings
                         series, featuring essays on the notion of art in the geopolitical South, are also relevant
                         modifications in the structure of this Festival edition.</p>
                         <p class="f">
                         Additionally, the 19th Videobrasil will mark the launch of Galpão VB, a venue that will house
                         several permanent Videobrasil Collection research and activation activities. The Festival’s
                         exhibitions and film programs will take place at Sesc Pompeia and Galpão VB, as will
                         activities, meetings and tools designed to activate and explore said exhibitions, including
                         workshops, conversations, tours, online programming, and the seminar Places and meanings in
                         art: debates from the South. The parallel show Those born for adventure don’t stray from the
                         path, which is set to take place at Paço das Artes during the Festival, will feature a
                         selection of Videobrasil Collection artworks that somehow reverberate the subjects at play in
                         Southern Panoramas. The curating by Diego Matos reaffirms our policy of fostering dialogue
                         between the collection and contemporary production.</p>
                         <p class="f">
                         In addition to a cohesive set of artworks, the outcome of the experiment of devoting the 19th
                         Festival entirely to Southern production is an exciting overview of the strategies, counter-
                         narratives and questions employed by artists – some with established careers and others less so
                         –, often in subtle synchronism, to confront contemporary reality.

                            </p>');

                    ?>
                    
                </div>

            </div>

            <div style="margin-bottom: 11px"></div>


            <div class="row">
                <div class="col-sm-12 col-md-6 titulo" style="float: left ">

                    <p style="margin-bottom:0">
                            <?php pten('sobre os curadores', 'about the curators'); ?>
                    </p>

                </div>
                
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <img src="img/sobre/solange.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;"  />
                </div>
                <div class="col-sm-12 col-md-6 s curador2" style="float: right;margin-bottom: 24px">

                <?php // SOLANGE PT 
                pten('<p style="margin-bottom: 0">
                    <span class="bold">Curadora geral<br />Solange Farkas</span> (vive e trabalha em São Paulo, Brasil)<br />
                    É curadora e diretora da Associação Cultural Videobrasil. Criou o Festival Internacional de Arte Contemporânea SESC_Videobrasil, evento de que é curadora-geral e que trouxe ao Brasil grandes nomes da arte contemporânea internacional. Foi responsável pelas exposições Sophie Calle – Cuide de Você (2009) e Joseph Beuys – A Revolução Somos Nós (2010). Em sua carreira como curadora, destacam-se a Mostra Africana de Arte Contemporânea (São Paulo, 2000); Mostra Pan-Africana de Arte Contemporânea (Salvador, 2005); La Mirada Discreta: Marcel Odenbach & Robert Cahen (Buenos Aires, 2006); Eder Santos – Roteiro Amarrado (Rio de Janeiro, 2010), Isaac Julien: Geopoéticas (São Paulo, 2012) e Alfabeto Infinito | Angela Detanico e Rafael Lain (Porto Alegre, 2013) e Videobrasil 30 anos (2013/2014), que teve itinerâncias em Varsóvia, Polônia; Atlanta, EUA; Joanesburgo e Cidade do Cabo, África do Sul e Beijing, China. Foi curadora convidada pelo 5º Videozone: International Video Art Biennial (Israel, 2010), pela 16ª Bienal de Cerveira (Portugal, 2011), pela 10ª Bienal de Charjah (Emirados Árabes Unidos, 2011), pelo 3º Festival de Videoarte de Macau (China, 2012) e pelo Screen from Barcelona Festival (Espanha, 2012). Foi diretora e curadora-chefe do Museu de Arte Moderna da Bahia (Salvador, 2007 a 2010). Participou de programação em homenagem ao Videobrasil no Festival de la Imagen (Manizales, Colômbia, 2013). No mesmo ano, o 6th Jakarta International Video Festival teve mostra com curadoria de Solange Farkas, bem como a FUSO, anual de videoarte em Lisboa que repetiu a parceria com a curadora e com a Associação Cultural Videobrasil em 2014.
                    </p>', 
                    // SOLANGE EN
                    '<p style="margin-bottom: 0">
                    <span class="bold">Chief curator<br />Solange Farkas</span><br />(lives and works out of São Paulo, Brazil)<br />
                    Curator and director of Associação Cultural Videobrasil. She was the founder and is the general curator of the International Contemporary Art Festival Sesc_Videobrasil, an event which has brought leading international contemporary artists to Brazil. She was responsible for the exhibitions Sophie Calle – Take care of yourself (2009) and Joseph Beuys – We Are the Revolution (2010). The highlights of her curating career include the African Contemporary Art Exhibition (São Paulo, 2000); Pan African Contemporary Art Exhibition (Salvador, 2005); La Mirada Discreta: Marcel Odenbach & Robert Cahen (Buenos Aires, 2006); Eder Santos – Roteiro Amarrado (Rio de Janeiro, 2010), Isaac Julien: Geopoetics (São Paulo, 2012), Alfabeto Infinito | Angela Detanico e Rafael Lain (Porto Alegre, 2013) and Videobrasil 30 years (2013/2014), which spun off touring shows in Warsaw, Poland; Atlanta, USA; Johannesburg and Cape Town, South Africa, and Beijing, China. She served as a guest curator at the 5th Videozone: International Video Art Biennial (Israel, 2010), the 16th Cerveira Biennial (Portugal, 2011), the 10th Sharjah Biennial (United Arab Emirates, 2011), the 3rd Macao Video Art Festival (China, 2012) and Screen from Barcelona Festival (Spain, 2012). She is a former director and chief curator of the Bahia Modern Art Museum (Salvador, 2007 to 2010). She participated in a program in honor of Videobrasil at the Festival de la Imagen (Manizales, Colombia, 2013). In that same year, the 6th Jakarta International Video Festival featured a program curated by Solange Farkas, as did FUSO, the annual video art exhibit in Lisbon, which partnered up with the curator and Associação Cultural Videobrasil again in 2014.</p>');                     
                    ?>                 
                    </div>
            </div>

            <div style="margin-bottom: 11px"></div>


            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <img src="img/sobre/bernardo.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;"  />
                </div>
                <div class="col-sm-12 col-md-6 s curador2" style="float: right;margin-bottom: 24px">

                <?php // BERNARDO PT 
                pten('<p style="margin-bottom: 0">
                    <span class="bold">Curadores convidados<br />Bernardo José de Souza</span> (vive e trabalha no Rio de Janeiro, Brasil)<br />
                    É curador de arte, professor universitário e escreve para publicações sobre cultura visual. Bacharel em Comunicação Social pela Pontifícia Universidade Católica do Rio Grande do Sul (PUC-RS) e especialista em Fotografia e Moda pela London College of Fashion - University of the Arts, Reino Unido. É membro dos conselhos curadores do Museu de Arte Contemporânea do Rio Grande do Sul (MACRS), Porto Alegre, Brasil;  e da Fundação Vera Chaves Barcellos (FVCB), na mesma cidade.  Sua atividade no campo das artes visuais inclui a organização de exposições, festivais de cinema, seminários, publicações e programas educativos. Foi curador da 9ª Bienal do Mercosul, 2013, Porto Alegre, e coordenador de Cinema, Vídeo e Fotografia da Secretaria de Cultura da Prefeitura da capital gaúcha. Escreve para publicações sobre cultura visual, colaborando para revistas como Vogue, URBE, VOX e para o jornal Folha de São Paulo. É professor da Escola Superior de Propaganda e Marketing (ESPM), tendo lecionado na Pontifícia Universidade Católica do Rio Grande do Sul (PUC-RS), na Universidade do Vale do Rio dos Sinos (Unisinos), e no SENAC - São Paulo.  Vive e trabalha no Rio de Janeiro.
                    </p>', 
                    // BERNARDO EN
                    '<p style="margin-bottom: 0">
                    <span class="bold">Guest curators<br />Bernardo José de Souza</span><br />(lives and works out of Rio de Janeiro, Brazil)<br />
                    Art curator, university professor and writer for publications on visual culture. Holds a baccalaureate degree in Social Communication from the Pontifical Catholic University in Rio Grande do Sul (PUC-RS) and a specialization in Photography and Fashion from the London College of Fashion - University of the Arts, United Kingdom. Member of the boards of curators of the Museum of Contemporary Art of Grande do Sul (MACRS), Porto Alegre, Brazil; and of Fundação Vera Chaves Barcellos (FVCB), in the same city.  His work in the visual arts field includes organizing exhibitions, film festivals, seminars, publications and educational programs. Served as curator for the 9th Mercosul Biennial, 2013, Porto Alegre, and as coordinator for Cinema, Video and Photography at the Secretariat for Culture of the Porto Alegre City Hall. Writes for visual culture publications, collaborating with magazines like Vogue, URBE, VOX and the Folha de São Paulo newspaper. He is a professor at Escola Superior de Propaganda e Marketing (ESPM), and was formerly a professor at the Pontifical Catholic University of Rio Grande do Sul (PUC-RS), Universidade do Vale do Rio dos Sinos (Unisinos), and SENAC - São Paulo.  He lives and works in Rio de Janeiro.</p>');                     
                    ?>                 
                    </div>
                    </div>

            <div style="margin-bottom: 11px"></div>

            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <img src="img/sobre/bitu.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;" />
                </div>                 
                <div class="col-sm-12 col-md-6 e curador3" style="float: right;margin-bottom: 24px">
                <?php // BITU PT                    
                pten('<p style="margin-bottom: 0">                     
                    <span class="bold">Bitu Cassundé</span> (vive e trabalha em Fortaleza, Brasil)<br />
                    É curador e pesquisador. Concluiu mestrado pela Escola de Belas Artes da Universidade Federal de Minas Gerais (UFMG), Belo Horizonte, Brasil. É curador do Museu de Arte Contemporânea do Ceará - Centro Cultural Dragão do Mar (MAC-CE), Fortaleza, Brasil, onde foi curador assistente e coordenador de pesquisa entre 1998 e 2007. Coordena o Laboratório de Artes Visuais do Porto Iracema das Artes, na mesma cidade. Integrou a equipe curatorial do Programa Rumos Artes Visuais, em São Paulo, entre 2008 e 2009. Entre 2009 e 2011, dirigiu o Museu Murillo La Greca, em Recife. Integrou diversos júris, entre os quais o da 4ª edição do prêmio Marcantonio Vilaça. Junto com Clarissa Diniz, formou a coleção contemporânea do Centro Cultural Banco do Nordeste, vinculado ao projeto Metrô de Superfície. Vive e trabalha em Fortaleza.</p>',

                    //BITU EN
                    '<p style="margin-bottom: 0"><span class="bold">Bitu Cassundé</span> (lives and works out of Fortaleza, Brazil)<br />
                    Curator and researcher. Completed a master’s degree at the School of Fine Arts of the Federal University of Minas Gerais (UFMG), Belo Horizonte, Brazil. He is a curator at the Contemporary Art Museum of Ceará - Centro Cultural Dragão do Mar (MAC-CE), Fortaleza, Brazil, where he served as assistant curator and research coordinator from 1998 to 2007. Coordinates the Visual Arts Laboratory at the Porto Iracema das Artes school, in the same city. He was a member of the team of curators for the Programa Rumos Artes Visuais visual arts program, in São Paulo, in 2008 and 2009. Between 2009 and 2011, he was the director of Museu Murillo La Greca, in Recife. He also served as a juror on several occasions, including the 4th edition of the Marcantonio Vilaça prize. Alongside Clarissa Diniz, he started the contemporary art collection of Centro Cultural Banco do Nordeste, in connection with the Metrô de Superfície light rail project. Cassundé lives and works in Fortaleza.</p>');                     
                    ?>
                    </div>             
                </div>

                <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <img src="img/sobre/joao.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;" />
                </div>                 
                <div class="col-sm-12 col-md-6 e curador4" style="float: right;margin-bottom: 24px">
                <?php   // JOAO LAIA PT                  
                pten('<p style="margin-bottom: 0">                      
                    <span class="bold">João Laia</span> (vive e trabalha em Londres, Reino Unido)<br />
                    É escritor e curador. Concluiu dois mestrados, em Curadoria e Cinema. Em 2014, foi residente na Fondazione Sandretto Re Rebaudengo, em Turim, Itália, instituição dedicada à promoção da arte contemporânea. Organizou as mostras de imagem em movimento no Festival IndieLisboa. Realizou curadorias no Centre de Cultura Contemporània de Barcelona (CCCB), Espanha; no Museu de Arte Contemporânea do Chiado, Lisboa; e na Whitechapel Gallery, Londres. Colabora para as revistas Frieze e Mousse, e para o jornal Público. É cofundador do The Green Parrot, espaço sem fins lucrativos para projetos de arte em Barcelona, Espanha. Vive e trabalha em Londres.</p>',
                    // JOAO LAIA EN  
                    '<p style="margin-bottom: 0"><span class="bold">João Laia</span> (lives and works out of London, United Kingdom)<br />
                    Writer and curator. Completed two master’s degrees, in Curating and Film. In 2014, he undertook a residency at Fondazione Sandretto Re Rebaudengo, in Turin, Italy, an organization devoted to sponsoring contemporary art. He organized the image in motion sections of Festival IndieLisboa. He has curated shows at Centre de Cultura Contemporània de Barcelona (CCCB), Spain; Museu de Arte Contemporânea do Chiado, Lisbon; and the Whitechapel Gallery, London. Collaborator for Frieze and Mousse magazines and the Público newspaper. Co-founder of The Green Parrot, a non-profit art projects facility in Barcelona, Spain. He lives and works in London.</p>');                     
                    ?>
                    </div>             
                </div>

                <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <img src="img/sobre/julia.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;" />
                </div>                 
                <div class="col-sm-12 col-md-6 e curador5" style="float: right;margin-bottom: 24px">
                <?php   // JULIA PT                  
                pten('<p style="margin-bottom: 0">                      
                    <span class="bold">Júlia Rebouças</span><br />(vive e trabalha entre Belo Horizonte e Brumadinho, Brasil) <br />
                    É curadora, pesquisadora e crítica de arte. É co-curadora da 32a Bienal de São Paulo, a se realizar em 2016. De 2007 a 2015, trabalhou na curadoria do Instituto Inhotim. Desde 2012 colabora com a Associação Cultural Videobrasil, integrando a comissão curadora dos 18º e 19º Festivais Internacionais de Arte Contemporânea SESC_Videobrasil, em São Paulo. Foi curadora adjunta da 9a Bienal do Mercosul, em Porto Alegre, mostra intitulada Se o clima for favorável, em 2013. Integrou o corpo de jurados do concurso que selecionou o projeto arquitetônico e curatorial do Pavilhão do Brasil na Expo Milano 2015, concurso realizado em janeiro de 2014, em Brasília. Escreve textos para catálogos de exposições, livros de artista e colabora com revistas de arte. Em 2014, participou da comissão curatorial do livro Outras fotografias na Arte Brasileira Séc. XXI, editora Cobogó. Atualmente, trabalha na edição de livro sobre a obra de Sônia Gomes. É mestre pelo Programa de Pós-Graduação em Arte Visuais da Universidade Federal de Minas Gerais, e doutoranda no mesmo programa. Graduou-se em Comunicação Social/Jornalismo pela Universidade Federal de Pernambuco (2006).</p>',
                    // JULIA EN  
                    '<p style="margin-bottom: 0"><span class="bold">Júlia Rebouças</span><br />(lives and works between Belo Horizonte and Brumadinho, Brazil)<br />
                    Curator, art critic and researcher. She is the co-curator of the 32nd São Paulo Biennial. She worked as curator at the Inhotim Institute (Brumadinho, Brazil) from 2007 to 2015. Holds a master’s degree and is pursuing a doctorate under the Postgraduate Visual Arts Program of the Federal University of Minas Gerais. She served as joint curator for the 9th Mercosur Biennial (Porto Alegre, 2013) and was a member of the Curatorial Committee for the 18th International Contemporary Art Festival Sesc_Videobrasil (São Paulo, 2013). Independent curating projects include Zona de Instabilidade – Lais Myrrha at Caixa Cultural Sé (São Paulo, 2013) and A céu aberto, with Suely Rolnik, which competed in the 30th São Paulo Biennial (São Paulo, 2011).</p>');                     
                    ?>
                    </div>             
                </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->     <footer><?php include "elements/footer.html"; ?></footer>     <!-- /RODAPE -->
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

