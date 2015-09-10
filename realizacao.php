<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Realização' : 'Undertaking';

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
                    <span><?php pten('sobre o festival > <span class="underline">realização</span>', 
                                     'about the festival > <span class="underline">Undertaking</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                            <a href="apresentacao.php"><?php pten('Apresentação','Introduction');?></a> | 
                            <a href="palavrasesc.php"><?php pten('Palavra do Sesc','Word from Sesc');?></a> | 
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a> | 
                            <a href="identidade.php"><?php pten('Identidade Visual','Visual Identity');?></a> | 
                            <a href="realizacao.php"><span style="text-decoration: underline"><?php pten('Realização','Undertaking');?></span></a> | 
                            <a href="parceiros.php"><?php pten('Parceiros','Supporters');?></a> | 
                            <a href="fichatecnica.php"><?php pten('Ficha Técnica','Staff');?></a> | 
                            <a href="convocatorias.php"><?php pten('Convocatórias 19º','Open calls');?></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a>
                    </p>       
                </div>
            </div>
            <!-- SUBMENU -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Realização', 'Undertaking');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6" >
                    <a href="http://sescsp.org.br" target="_blank"><img src="img/realizacao_sesc2.png" id="img-id-1" class="img-responsive retrato-artista" style="margin-bottom: 30px; margin-left:auto;" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;" id="id-texto">

                    <?php pten(                      ////SESC PT                                          
                        '<p class="f"><span class="bold" style="text-transform: uppercase">Sesc São Paulo</span><br>                     
                         Criado por empresários do comércio de bens e serviços em 1946, o Sesc – Serviço Social do Comércio, tem entre suas prioridades a promoção da educação, da cultura, do lazer, da saúde e da cidadania. É uma instituição sem fins lucrativos, que promove o bem-estar social e a melhoria da qualidade de vida dos associados e também da população em geral.</p>

                         <p class="f">A ação do Sesc é fruto de um sólido projeto cultural e educativo que trouxe a marca da inovação e da transformação social. Ao longo dos anos, o Sesc inovou ao introduzir novos modelos de ação cultural e sublinhou, na década de 1980, a educação como pressuposto para a transformação social. A concretização desse propósito se deu por uma intensa atuação no campo da cultura e suas diferentes manifestações, destinadas a todos os públicos, em diversas faixas etárias e estratos sociais. Isso não significa apenas oferecer uma grande diversidade de eventos, mas efetivamente contribuir para experiências mais duradouras e significativas. No Estado de São Paulo, o Sesc conta com uma rede de 36 unidades, em sua maioria centros culturais e desportivos. Além disso, a instituição conta com o Portal SescSP, o SescTV, as Edições Sesc São Paulo e o Selo Sesc, e diversas revistas - Em Cartaz, Mais 60, Problemas Brasileiros e Revista E - para registrar e divulgar suas ações, ampliando assim o acesso de suas programações e aos bens culturais que produz.</p>  
                         
                         <p class="f">Sesc é o principal parceiro do Videobrasil há mais de 20 anos, realizando, além do festival bianual de arte contemporânea que leva sua assinatura, exposições anuais de artistas consagrados ou do Sul global – foco da Associação. Itinerâncias do Festival e de exposições pelo interior de São Paulo e outras cidades do país e do exterior; produções audiovisuais; e publicações sobre arte e culturas contemporâneas são outras das ações em parceria.</p>
                         </p>',

                    //SESC EN                     
                    '<p class="f"><span class="bold" style="text-transform:uppercase">Sesc São Paulo</span><br>
                    Established by entrepreneurs of trade in goods and services in 1946, Social Service of Commerce – Sesc, has among its priorities the promotion of education, culture, leisure, health and citizenship. It is a nonprofit organization that promotes the welfare and improvement of life quality of members and also the general population. </p>
                    
                    <p class="f">The actions offered by Sesc are an outcome of a solid cultural and educational project that brings, since its creation by the commerce, services and tourism sector in 1946, the mark of innovation and social transformation. Over the years, Sesc has been innovative by introducing new models of cultural actions and highlighted, in the decade of 1980, education as a project for social transformation. Accomplishing this purpose has come to fruition by an intense action on the field of culture and its different demonstrations, destined to all audiences, of diverse age groups and social strata. This does not mean only offering a great diversity of events, but effectively contributing for more lasting and meaningful experiences. In the State of São Paulo, Sesc has thirty-six cultural centers, most of them being also sports centers, as well as a TV station (SescTV), a website (Portal SescSP), a publishing house (Edições Sesc São Paulo), a record label that produces DVDs and CDs (Selo Sesc) and a Research and Training Center.</p>

                    <p class="f">Sesc has been the main partner of Videobrasil for over 20 years, undertaking the biennial festival of contemporary art which bears its signature; annual exhibitions of established artists or from the geopolitical South, focus of the Association; on tour projects with the Festival and exhibitions at other cities from Brazil and abroad; audiovisual productions and publications on contemporary art and culture.</p>
                    ');
                    ?>
                    
                    
                </div>


            </div>
           
            <div class="row" style="clear: both;margin-top: 30px">

                <div class="col-sm-12 col-md-6" >
                    <a href="http://site.videobrasil.org.br" target="_blank"><img src="img/realizacao_vb2.png" id="img-id-1" class="img-responsive retrato-artista" style="margin-bottom: 30px;width: 180px; height: auto" /></a>

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;" id="id-texto">

                    <?php pten(                      ////VB PT                     
                    '<p class="f"><span class="bold" style="text-transform: uppercase">associação cultural videobrasil</span><br />Fundada por Solange Farkas em 1991, a Associação Cultural Videobrasil é fruto do desejo de acolher institucionalmente um acervo crescente de obras e publicações, que vem sendo reunido desde a primeira edição do Festival Videobrasil, em 1983. Desde então, a Associação trabalha sistematicamente no sentido de ativar essa coleção, que reúne obras do Sul geopolítico do mundo – América Latina, África, Leste Europeu, Ásia e Oriente Médio –, clássicos da videoarte, produções próprias e uma vasta coleção de publicações sobre arte.</p>

                    <p class="f">Além do Festival de Arte Contemporânea Sesc_Videobrasil, que ocorre a cada dois anos, a Associação também realiza uma série de ações de pesquisa, difusão e mapeamento de sua coleção: exposições internacionais; mostras itinerantes; publicações sobre arte e cultura contemporânea; programas de TV e os documentários da Videobrasil Coleção de Autores; seminários, oficinas e encontros com artistas e pesquisadores, em diálogo constante com diversas áreas do conhecimento; e programas de residência artística, em conexão com uma ampla rede de colaboração internacional.</p>

                    <p class="f">Em 2015, o Videobrasil abre sua nova sede em São Paulo: o Galpão VB, voltado à ativação permanente das obras do acervo. Servindo de casa para as ações da Associação, o Galpão VB terá exposições, programas de filmes, seminários, oficinas, residências artísticas e laboratórios de criação e reflexão. Assim, vem tornar mais constante a relação de encontro e troca com a comunidade de artistas, curadores e pesquisadores, tão valorizada pelo Festival, além de colocar o acervo em contato permanente com o público, que terá acesso à Videoteca, com mais de 1.300 itens, e a uma sala de leitura, onde estão disponíveis mais de 3.200 títulos. Com 800m2, o Galpão VB será o primeiro espaço dedicado à programação de artes visuais na região da Vila Leopoldina, contando ainda com espaço de serviços, café e loja abertos ao público. </p>',

                    //VB EN                     
                    '<p class="f"><span class="bold" style="text-transform: uppercase">associação cultural videobrasil</span><br />Established by Solange Farkas in 1991, Associação Cultural Videobrasil was born of the desire for an institution to house a growing body of artworks and publications amassed since the first edition of Festival Videobrasil, in 1983. Ever since, Associação has been working systematically to activate this collection, comprising artworks from the world’s Geopolitical South – Latin America, Africa, Eastern Europe, Asia and the Middle East –, video art classics, own productions, and a vast collection of art publications. </p>

                     <p class="f">Apart from the Contemporary Art Festival Sesc_Videobrasil, held every two years, Associação carries out several actions geared at researching, publicizing and mapping out its collection: international art shows; travelling exhibitions; publications about contemporary art and culture; TV shows and the Videobrasil Authors Collection documentaries; seminars, workshops and meetings with artists and researchers, in constant interaction with various fields of knowledge; and artist residency programs, in connection with a wide-ranging network of international collaborators.</p>

                     <p class="f">2015 will see the launch of Videobrasil’s new headquarters in São Paulo: Galpão VB, a facility designed to permanently activate the collection’s artworks. A new home for the actions of Associação, Galpão VB will house exhibitions, film programs, seminars, workshops, artist residencies, and laboratories for creation and reflection. It will enable more consistent meeting and sharing with the community of artists, curators and researchers that the Festival values so much, as well as allow the public constant contact with the collection, through access to the Video Library, featuring 1,300-plus items, and a reading room with over 3,200 titles. Covering an 800m2 area, Galpão VB will be the first space devoted to the visual arts in São Paulo’s Vila Leopoldina district, including a services area, a café and a store, all open to the public. </p>');

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

