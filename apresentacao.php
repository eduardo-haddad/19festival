<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Apresentação' : 'Introduction';

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
                    <span><?php pten('sobre o festival > <span class="underline">apresentacão</span>', 
                                     'about the festival > <span class="underline">introduction</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                            <a href="apresentacao.php"><span style="text-decoration: underline"><?php pten('Apresentação','Introduction');?></span></a> | 
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a> | 
                            <a href="identidade.php"><?php pten('Identidade Visual','Visual Identity');?></a> | 
                            <a href="realizacao.php"><?php pten('Realização','Undertaking');?></a> | 
                            <a href="parceiros.php"><?php pten('Parceiros','Supporters');?></a> | 
                            <a href="fichatecnica.php"><?php pten('Ficha Técnica','Staff');?></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/inscricao', 'http://site.videobrasil.org.br/en/inscricao');?>" target="_blank"><?php pten('Convocatórias 19º','Open calls');?></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" >
                    <img src="img/sobre/apresentacao.png" class="img-responsive" style="max-width: 485px" />
                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    <p class="titulo"><?= $titulo ?></p> 

                    <?php pten(                      ////APRESENTAÇAO PT                     
                        '<p class="f">O <span class="bold">Festival de
                        Arte Contemporânea Sesc_Videobrasil</span> se consolidou ao longo dos anos como uma plataforma diversificada e múltipla voltada
                        para a difusão, o fomento e a reflexão em torno da produção artística do Sul global, que compreende América Latina,
                        Caribe, África, Oriente Médio, Oceania e alguns países da Europa e da Ásia. Mudanças geopolíticas significativas vêm
                        acontecendo, redimensionando intensamente as noções de Norte e Sul. Mesmo assim, é possível identificar a necessidade de
                        atuar em prol de um campo artístico e cultural de regiões que ainda precisam inventar novas formas de circulação e
                        visibilidade.</p>
                        
                        <p class="f">Em sua 19ª edição, que acontece de <span class="bold">6 de outubro a 6 de dezembro de 2015</span>, em São Paulo, Brasil, o Festival de Arte
                        Contemporânea Sesc_Videobrasil radicaliza sua proposta e transforma Panoramas do Sul no corpo central de toda a sua
                        programação. O Sul global e suas múltiplas questões – que dizem respeito a diásporas, identidades híbridas, trânsito
                        migratório e viagens, narrativas pessoais, memórias, isolamento, tecido social e insularidade – foram inspirações e
                        parâmetros da Comissão Curadora para a seleção de obras e projetos, passando a direcionar também os eixos curatoriais de
                        todas as exposições, programas públicos e publicações do Festival.</p>
                        
                        <p class="f">Os curadores Bernardo José de Souza (Rio Grande do Sul, Brasil/ vive e trabalha no Rio de Janeiro), Bitu Cassundé
                        (Ceará, Brasil/ vive e trabalha em Fortaleza), João Laia (Lisboa, Portugal/ vive e trabalha em Londres) e Júlia Rebouças
                        (Sergipe, Brasil/ vive e trabalha em Belo Horizonte), trabalham nesta edição sob a orientação de Solange Farkas (Bahia,
                        Brasil/  vive e trabalha em São Paulo), curadora geral do Festival e diretora da Associação Cultural Videobrasil, que
                        assina com o Sesc São Paulo a correalização do Festival.</p>
                        
                        <p class="f">Ao todo, 62 artistas e grupos de 27 países participam das <span class="bold">três exposições do 19º Festival de Arte Contemporânea
                        Sesc_Videobrasil | Panoramas do Sul</span>, cinco deles como artistas convidados e 57 selecionados por meio de duas
                        convocatórias públicas (uma de obras e outra de projetos comissionados pelo Festival, novidade desta edição). As
                        exposições dos artistas convidados e selecionados pelo edital de obras acontecem no Sesc Pompeia, principal sede das
                        últimas edições do Festival.  Já o Galpão_VB, novo espaço da Associação Cultural Videobrasil, recebe a exposição de
                        projetos comissionados.  Além dessas mostras, a programação do Festival é composta por programas de filmes,
                        performances, cerimônia de premiação, atividades dos programas públicos (encontros e conversas, seminários e oficinas),
                        ações educativas e lançamento de publicações.</p>
                        
                        <p class="f">No mesmo período, é inaugurada a <span class="bold">exposição paralela <em>Quem Nasce Pra Aventura Não Toma Outro Rumo</em></span>, com curadoria de Diego
                        Matos, coordenador de arquivo e pesquisa do Videobrasil, reunindo uma seleção de obras do Acervo Videobrasil que ecoa
                        reflexões levantadas pelo 19º Festival.</p>',

                    //APRESENTAÇAO EN                     
                        '<p class="f">The <span class="bold">Contemporary Art Festival Sesc_Videobrasil</span>
                        became established over the years as a diverse, multiple platform devoted to spreading, fostering and reflecting about
                        art productions from the global South, an area comprising Latin America, the Caribbean, Africa, the Middle East, Oceania
                        and some countries in Europe and Asia. Significant geopolitical changes are taking place, radically redefining the
                        notions of North and South. Nevertheless, one can sense the need to work on behalf of the field of art and culture in
                        regions that have yet to invent new forms of circulation and visibility.</p>
                        
                        <p class="f">In its 19th edition, set to take place from <span class="bold">October 6 to December 6, 2015</span> in São Paulo, Brazil, the Contemporary Art
                        Festival Sesc_Videobrasil takes it proposal to the extreme by making Southern Panoramas the core of its entire
                        programming. The global South and its myriad issues – concerning diasporas, hybrid identities, migration flows and
                        travels, personal accounts, memories, isolation, the social fabric, and insularity – have inspired and set the
                        parameters for the Curatorial Committee to select artworks and art projects, as well as oriented the curating of all of
                        the Festival’s exhibitions, public programs, and publications.</p>
                        
                        <p class="f">The curators Bernardo José de Souza (Rio Grande do Sul, Brazil/ lives and works in Rio de Janeiro), Bitu Cassundé
                        (Ceará, Brazil/lives and works in Fortaleza), João Laia (Lisbon, Portugal/ lives and works in London) and Júlia Rebouças
                        (Sergipe, Brazil/ lives and works in Belo Horizonte) work in this edition under the guidance of Solange Farkas (Bahia,
                        Brazil/ lives and works in Sao Paulo), general curator of the Festival and director of Associação Cultural Videobrasil,
                        which co-produces the event alongside Sesc São Paulo.</p>
                        
                        <p class="f">A total of 62 artists and groups from 27 countries are featured in the <span class="bold">three exhibitions of the 19th Contemporary Art
                        Festival Sesc_Videobrasil | Southern Panoramas</span>; five of them are guest artists and 57 were selected via two open calls
                        (for artworks and for projects to be commissioned by the Festival, a new feature of this edition). The guest artists and
                        selected artworks exhibitions happen at Sesc Pompeia, the primary venue of the 19th Festival and of the event’s past few
                        editions. The Galpão_VB, Videobrasil’s new venue, presents the commissioned projects show. Besides the exhibitions, the
                        Festival will include film programs, performances, awards ceremony, public programs activities (such as meetings and
                        conversations, a seminar, workshops and mediated actions) and publication launches.</p>
                        
                        <p class="f">During the same period, the <span class="bold">parallel show <em>Those Born For Adventure Don’t Stray From The Path</em></span>, curated by Videobrasil’s
                        archive and research coordinator Diego Matos, will open. It features a selection of artworks from Videobrasil Collection
                        that echoes the reflections the 19th Festival elicits.  </p>');

                    ?>
                </div>
            </div>

            <div class="row" style="clear: both; margin-top: 13px">

                <div class="col-sm-12 col-md-6 " >
                    <img src="img/sobre/danilo.jpg" class="img-responsive retrato-artista" style="max-width: 485px; margin-bottom: 15px;" />
                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    <p>
                    <?php pten('<span class="titulo o">Arte que instiga e exaspera</span><br />
                                <span class="submenu">por Danilo Santos de Miranda<br />
                                Diretor Regional do Sesc São Paulo</span>', 
                               '<span class="titulo o">ART THAT INSTIGATES AND EXASPERATES</span><br />
                               <span class="submenu">by Danilo Santos de Miranda<br />
                               Regional Director, Sesc São Paulo'); ?></p>

                    <?php pten(////DANILO PT                     
                        '<p class="f">Indiferença e conformismo tendem a ocultar certo mal-estar provocado pelas múltiplas demandas da vida contemporânea. Uma forma de chacoalhar esse estado de coisas é promover momentos de suspensão e estranhamento, capazes de cultivar outras possibilidades de ser e estar no mundo. Esses momentos de suspensão podem ser alcançados de diversas maneiras, em especial pelas artes.</p>

                            <p class="f">Nesse cenário, a liberdade de expressão adquire contornos relevantes ao colocar em xeque um modelo civilizacional afetado por frequentes crises. Essa ideia traz em seu bojo matrizes de superação pela busca de novos campos e oportunidades, por meio da criatividade, da experimentação, da crítica e da reflexão. Nesse terreno não polarizado, indefinido a priori, sobressaem ligações eletivas e afetivas associadas à convivência humana, à noção de transitoriedade e certa tendência para improvisação e tolerância ao erro.</p>

                            <p class="f">As criações simbólicas nos instigam a convocar outras interfaces e conexões, ao lidar com as subjetividades, abrigar elementos de dúvida e agregar um lugar para novas perguntas e investigações. Desse modo, combinações improváveis podem sugerir aberturas para diálogos horizontais e possibilitar outras ações em rede.</p>

                            <p class="f">Desde 1992, a parceria do Sesc com a Associação Cultural Videobrasil atua na promoção e difusão dessa singularidade de expressões, e conta com o engajamento de curadores, artistas e pesquisadores de diferentes territórios e culturas identificados com um Sul global. Tal iniciativa visa, ainda, fomentar o encontro de diferentes públicos para debates, trocas de saberes e a fruição cultural como pressupostos para desencadear um processo reflexivo, em deliberada oposição ao conformismo e à indiferença que podem anestesiar os movimentos de transformação social. </p>

                            <p class="f">Nesse contexto, o Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul, atualmente em sua décima nona edição, fortalece uma abordagem educativa em torno de questões centrais do mundo contemporâneo, valorizando as perspectivas da arte como elementos fundamentais para a construção de um pensamento crítico.</p>',

                    //DANILO EN                     
                            '<p class="f" style="display: inline">Indifference and conformism tend to conceal a certain uneasiness caused by the multiple demands of contemporary life. One way to shake up the status quo is to promote moments of suspension and uncanniness capable of cultivating other possible forms of being in the world. These moments of suspension can be achieved in many ways, especially through the arts. </p>       

                            <p class="f">In this context, freedom of expression becomes all the more relevant insofar as it jeopardizes an entire civilizing model that is fraught with frequent crises. This idea carries, in its core, templates for an overcoming through the pursuit of new fields and opportunities, through creativity, experimentation, criticism, and reflection. On this non-polarized terrain, where nothing is predefined, what prevail are chosen and emotional bonds associated with human interaction, with the notion of transitoriness, and with a certain tendency towards improvisation and tolerance regarding error.</p>

                            <p class="f">In dealing with subjectivities, symbolic creations coax us to draft in other interfaces and connections, harbor elements of doubt, and open a space for new questions and lines of investigation. This allows unlikely combinations to throw open doors onto horizontal dialogues and enable other network-based actions.</p>

                            <p class="f">Since 1992, Sesc’s partnership with Associação Cultural Videobrasil has worked to promote and spread this singularity of expressions, and in so doing it has been able to count on curators, artists and researchers from different territories and cultures identified with the global South. It is an initiative that also aims to engage various publics in debates, knowledge sharing, and cultural fruition as preconditions for triggering a reflexive process in deliberate opposition to the conformism and indifference that can numb movements for social transformation.</p>

                            <p class="f">In this context, the Contemporary Art Festival Sesc_Videobrasil | Southern Panoramas, now in its nineteenth edition, strengthens its educational take on issues that are central to the contemporary world, valuing the perspectives of art as key elements in building critical thinking.</p>');

                    ?>
                    </div>
                </div>

                <div class="row" style="clear: both;margin-top: 13px">

                <div class="col-sm-12 col-md-6" >
                    <img src="img/sobre/solange.png" class="img-responsive retrato-artista" style="max-width: 485px; margin-bottom: 15px;" />
                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    <p>
                    <?php pten('<span class="titulo o">Sutil sintonia</span><br />
                                <span class="submenu">por Solange O. Farkas<br />
                                Curadora-geral</span>', 
                               '<span class="titulo o">Subtly in tune</span><br />
                               <span class="submenu">by Solange O. Farkas<br />
                               Chief curator</span>'); ?></p>

                    <?php pten(////SOLANGE PT                                              
                        '<p class="f">O viés
                        geopolítico que aproxima regiões de passado colonial em um heterogêneo conjunto de sotaques afins é uma ideia que guia o
                        Festival de Arte Contemporânea Sesc_Videobrasil desde os anos 1990. O 19o Festival dedica-se inteiramente a colocar em
                        diálogo vertentes diversas da produção recente desta região simbólica. Os Panoramas do Sul se estendem, assim, a três
                        exposições, que reúnem obras selecionadas a partir de convocatória aberta, projetos que o Festival escolheu para
                        comissionar e trabalhos de cinco artistas convidados: o malinês Abdoulaye Konaté, os brasileiros Sônia Gomes e Rodrigo
                        Matheus, o português Gabriel Abrantes e a marroquina Yto Barrada.</p>

                        <p class="f">A fina complementaridade deste conjunto de conteúdos resulta do trabalho dos curadores convidados Bernardo José de
                        Souza, Bitu Cassundé, João Laia e Júlia Rebouças, pela primeira vez responsáveis pelos três segmentos expositivos do
                        Festival. O edital para comissionamento de projetos, que amplia o espectro de ação do Videobrasil e dá novo sentido a
                        sua pesquisa curatorial, e o lançamento do primeiro livro da série Panoramas do Sul | Leituras, com ensaios dedicados à
                        ideia do Sul geopolítico na arte, são outras mudanças importantes na estrutura desta edição do Festival. O 19o
                        Videobrasil marca, ainda, a abertura do Galpão VB, espaço que passa a abrigar uma série de atividades permanentes de
                        pesquisa e ativação do Acervo Videobrasil. As exposições e programas de filme do Festival se dividem entre o Sesc
                        Pompeia e o Galpão VB, assim como as atividades, encontros e ferramentas que ativam e exploram suas exposições,
                        incluindo oficinas, conversas, visitas, programações on-line e o seminário Lugares e sentidos da arte: debates a partir
                        do Sul. A mostra paralela Quem nasce pra aventura não toma outro rumo, que ocupa o Paço das Artes no período do
                        Festival, reúne uma seleção de obras do Acervo Videobrasil que, de alguma forma, reverberam os temas dos Panoramas do
                        Sul. A curadoria de Diego Matos reafirma a política de reforçar o diálogo entre a coleção e a produção contemporânea.</p>

                        <p class="f">Para além de um conjunto coeso, o que resulta da experiência de dedicar o 19o Festival à produção do Sul é um panorama
                        instigante das estratégias, contranarrativas e indagações que, muitas vezes em sutil sintonia, artistas de trajetórias
                        mais e menos consolidadas mobilizam para confrontar a realidade contemporânea. </p>',

                    //SOLANGE EN                     
                            '<p class="f" style="display: inline">Indifference and conformism tend to conceal a certain uneasiness caused by the multiple demands of contemporary life. One way to shake up
                            the status quo is to promote moments of suspension and uncanniness capable of cultivating other possible forms of being
                            in the world. These moments of suspension can be achieved in many ways, especially through the arts.</p>       

                            <p class="f">In this context, freedom of expression becomes all the more relevant insofar as it jeopardizes an entire civilizing model that
                            is fraught with frequent crises. This idea carries, in its core, templates for an overcoming through the pursuit of new
                            fields and opportunities, through creativity, experimentation, criticism, and reflection. On this non-polarized terrain,
                            where nothing is predefined, what prevail are chosen and emotional bonds associated with human interaction, with the
                            notion of transitoriness, and with a certain tendency towards improvisation and tolerance regarding error.</p> 

                            <p class="f">In dealing with subjectivities, symbolic creations coax us to draft in other interfaces and connections, harbor elements of doubt,
                            and open a space for new questions and lines of investigation. This allows unlikely combinations to throw open doors
                            onto horizontal dialogues and enable other network-based actions.</p>

                            <p class="f">Since 1992, Sesc’s partnership with Associação Cultural Videobrasil has worked to promote and spread this singularity of
                            expressions, and in so doing it has been able to count on curators, artists and researchers from different territories
                            and cultures identified with the global South. It is an initiative that also aims to engage various publics in debates,
                            knowledge sharing, and cultural fruition as preconditions for triggering a reflexive process in deliberate opposition to
                            the conformism and indifference that can numb movements for social transformation.</p> 

                            <p class="f">In this context, the Contemporary Art Festival Sesc_Videobrasil │ Southern Panoramas, now in its nineteenth edition, reaffirms and broadens its commitment to
                            autonomous thought, expanding its scope to include guest artists, preexisting works, and projects from across a
                            triangulation that spans Africa, the Caribbean, and South America. This edition strengthens its educational and
                            instructional actions around the critical issues that enable it to parallel aesthetic approximations to dissonances
                            between such different realities. </p>');

                    ?>
                    
                </div>

            </div>

            <br style="margin-bottom: 13px" />

            <!-- <div class="row">
                <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_01-temp.jpg" />
                </div>
               <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_02-temp.jpg" />
                </div>
            </div> -->

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

