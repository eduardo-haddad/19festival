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
                            <a href="palavrasesc.php"><?php pten('Palavra do Sesc','Word from Sesc');?></a> | 
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a> | 
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
           
            <div class="row" style="clear: both;">

              

                <div class="col-sm-12 col-md-6 h relative" style="float: left;">
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

                        <p class="f">Criado em 1983 por Solange Farkas, sua curadora geral desde então, o Festival passou a ser
                        realizado em parceria com o Sesc São Paulo em 1992, o que possibilitou a sua expansão e
                        internacionalização. Foi nesse momento que a curadoria do Festival definiu seu foco em torno do
                        Sul Geopolítico, assumindo esse recorte como condição para a seleção de artistas e passando a
                        tratar seus contextos diversos e complexos.</p>
                        
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
                        últimas edições do Festival.  Já o Galpão VB, novo espaço da Associação Cultural Videobrasil, recebe a exposição de
                        projetos comissionados.  Além dessas mostras, a programação do Festival é composta por programas de filmes,
                        performances, cerimônia de premiação, atividades dos programas públicos (encontros e conversas, seminários e oficinas),
                        ações educativas e lançamento de publicações.</p>
                        
                        <p class="f">No mesmo período, é inaugurada a <span class="bold">exposição paralela <em>Quem Nasce Pra Aventura Não Toma Outro Rumo – Obras do Acervo Videobrasil</em></span>, com curadoria de Diego
                        Matos, coordenador de arquivo e pesquisa do Videobrasil, reunindo uma seleção de obras do Acervo Videobrasil que ecoa
                        reflexões levantadas pelo 19º Festival.</p>',

                    //APRESENTAÇAO EN                     
                        '<p class="f">The <span class="bold">Contemporary Art Festival Sesc_Videobrasil</span>
                        became established over the years as a diverse, multiple platform devoted to spreading, fostering and reflecting about
                        art productions from the global South, an area comprising Latin America, the Caribbean, Africa, the Middle East, Oceania
                        and some countries in Europe and Asia. Significant geopolitical changes are taking place, radically redefining the
                        notions of North and South. Nevertheless, one can sense the need to work on behalf of the field of art and culture in
                        regions that have yet to invent new forms of circulation and visibility.</p>


                        <p class="f">Established in 1983 by Solange Farkas, its chief curator ever since, the Festival became a
                        partnership with Sesc São Paulo in 1992, which enabled its expansion and internationalization.
                        At that point, the Festival’s curating decided to focus on the Geopolitical South, selecting
                        artists from this geopolitical perspective and dealing with its myriad, complex contexts.</p>
                        
                        <p class="f">In its 19th edition, set to take place from <span class="bold">October 6 to December 6, 2015</span> in São Paulo, Brazil, the Contemporary Art
                        Festival Sesc_Videobrasil takes it proposal to the extreme by making Southern Panoramas the core of its entire
                        programming. The global South and its myriad issues – concerning diasporas, hybrid identities, migration flows and
                        travels, personal accounts, memories, isolation, the social fabric, and insularity – have inspired and set the
                        parameters for the Curatorial Committee to select artworks and art projects, as well as oriented the curating of all of
                        the Festival’s exhibitions, public programs, and publications.</p>
                        
                        <p class="f">The curators Bernardo José de Souza (Rio Grande do Sul, Brazil/ lives and works in Rio de Janeiro), Bitu Cassundé
                        (Ceará, Brazil/lives and works in Fortaleza), João Laia (Lisbon, Portugal/ lives and works in London) and Júlia Rebouças
                        (Sergipe, Brazil/ lives and works in Belo Horizonte) work in this edition under the guidance of Solange Farkas (Bahia,
                        Brazil/ lives and works in São Paulo), general curator of the Festival and director of Associação Cultural Videobrasil,
                        which co-produces the event alongside Sesc São Paulo.</p>
                        
                        <p class="f">A total of 62 artists and groups from 27 countries are featured in the <span class="bold">three exhibitions of the 19th Contemporary Art
                        Festival Sesc_Videobrasil | Southern Panoramas</span>; five of them are guest artists and 57 were selected via two open calls
                        (for artworks and for projects to be commissioned by the Festival, a new feature of this edition). The guest artists and
                        selected artworks exhibitions happen at Sesc Pompeia, the primary venue of the 19th Festival and of the event’s past few
                        editions. The Galpão VB, Videobrasil’s new venue, presents the commissioned projects show. Besides the exhibitions, the
                        Festival will include film programs, performances, awards ceremony, public programs activities (such as meetings and
                        conversations, a seminar, workshops and mediated actions) and publication launches.</p>
                        
                        <p class="f">During the same period, the <span class="bold">parallel show <em>Those Born For Adventure Don’t Stray From The Path – Artworks from Videobrasil Collection</em></span>, curated by Videobrasil’s
                        archive and research coordinator Diego Matos, will open. It features a selection of artworks from Videobrasil Collection
                        that echoes the reflections the 19th Festival elicits.  </p>');

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

