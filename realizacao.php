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
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a> | 
                            <a href="identidade.php"><?php pten('Identidade Visual','Visual Identity');?></a> | 
                            <a href="realizacao.php"><span style="text-decoration: underline"><?php pten('Realização','Undertaking');?></span></a> | 
                            <a href="parceiros.php"><?php pten('Parceiros','Supporters');?></a> | 
                            <a href="fichatecnica.php"><?php pten('Ficha Técnica','Staff');?></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/inscricao', 'http://site.videobrasil.org.br/en/inscricao');?>" target="_blank"><?php pten('Convocatórias 19º','Open calls');?></a> | 
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
                        '<p
                         class="f"><span class="bold" style="text-transform: uppercase">Sesc São Paulo</span><br>                     Criado por
                         empresários do comércio de bens e serviços em 1946, o SESC – Serviço Social do Comércio, tem entre suas prioridades a
                         promoção da educação, da cultura, do lazer, da saúde e da cidadania. É uma instituição sem fins lucrativos, que promove
                         o bem-estar social e a melhoria da qualidade de vida dos associados e também da população em geral.</p>
                    
                    <p class="f">A ação do Sesc é fruto de um sólido projeto cultural e educativo que trouxe a marca da inovação e da transformação social. Ao longo dos anos, o Sesc inovou ao introduzir novos modelos de ação cultural e sublinhou, na década de 1980, a educação como pressuposto para a transformação social. A concretização desse propósito se deu por uma intensa atuação no campo da cultura e suas diferentes manifestações, destinadas a todos os públicos, em diversas faixas etárias e estratos sociais. Isso não significa apenas oferecer uma grande diversidade de eventos, mas efetivamente contribuir para experiências mais duradouras e significativas. No Estado de São Paulo, o Sesc conta com uma rede de 36 unidades, em sua maioria centros culturais e desportivos. Além disso, a instituição conta com o Portal SescSP, o SescTV, as Edições Sesc São Paulo e o Selo Sesc, e diversas revistas - Em Cartaz, Mais 60, Problemas Brasileiros e Revista E - para registrar e divulgar suas ações, ampliando assim o acesso de suas programações e aos bens culturais que produz.</p>  

                    <p class="f">Sesc é o principal parceiro do Videobrasil há mais de 20 anos, realizando, além do festival bianual de arte contemporânea que leva sua assinatura, exposições anuais de artistas consagrados ou do Sul global - foco da Associação. Itinerâncias do Festival e de exposições pelo interior de São Paulo e outras cidades do país e do exterior; produções audiovisuais; e publicações sobre arte e culturas contemporâneas são outras das ações em parceria. 
                    </p>',

                    //SESC EN                     
                    '<p class="f"><span class="bold" style="text-transform:uppercase">Sesc São Paulo</span><br>
                    Established by entrepreneurs of trade in goods and services in 1946, Social Service of Commerce - Sesc, has among its priorities the promotion of education, culture, leisure, health and citizenship. It is a nonprofit organization that promotes the welfare and improvement of life quality of members and also the general population. </p>
                    
                    <p class="f">The actions offered by Sesc are an outcome of a solid cultural and educational project that brings, since its creation by the commerce, services and tourism sector in 1946, the mark of innovation and social transformation. Over the years, Sesc has been innovative by introducing new models of cultural actions and highlighted, in the decade of 1980, education as a project for social transformation. Accomplishing this purpose has come to fruition by an intense action on the field of culture and its different demonstrations, destined to all audiences, of diverse age groups and social strata. This does not mean only offering a great diversity of events, but effectively contributing for more lasting and meaningful experiences. In the State of São Paulo, Sesc has thirty six cultural centers, most of them being also sports centers, among a TV station (SescTV), an website (Portal SescSP), a publishing house (Edições Sesc São Paulo), a record label that produces DVDs and CDs (Selo Sesc) and a Research and Training Center.</p>

                    <p class="f">Sesc has been the main partner of Videobrasil for over 20 years, undertaking the biennial festival of contemporary art which bears its signature; annual exhibitions of established artists or from the geopolitical south, focus of the Association; on tour projects with the Festival and exhibitions at other cities from Brazil and abroad; audiovisual productions and publications on contemporary art and culture.</p>
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
                    '<p class="f"><span class="bold" style="text-transform: uppercase">associação cultural videobrasil</span><br>
                    A Associação Cultural Videobrasil dedica-se ao fomento, difusão e mapeamento da arte contemporânea, bem como à formação
                    de público e ao intercâmbio entre artistas, curadores e pesquisadores. Independente e comprometida com o papel
                    questionador da arte, tem se voltado, com crescente ênfase, para ações públicas e de ativação de seu Acervo - uma
                    representativa coleção de vídeo e performance do Sul geopolítico global. Neste sentido, destina especial atenção à
                    produção de América Latina, Caribe, África, Oriente Médio, Oceania e alguns países da Europa e Ásia, promovendo e
                    articulando uma rede de cooperação internacional.  </p>

                    <p class="f">Além do festival internacional de periodicidade bienal fundado em
                    1983 e, desde 1992, realizado em parceria com o Sesc São Paulo, o Videobrasil realiza ainda exposições internacionais,
                    mostras itinerantes, publicações sobre arte contemporânea e cultura (como livros de exposições, monografias de artistas,
                    uma revista anual sobre arte contemporânea), produtos audiovisuais como os programas da série Videobrasil na TV e os
                    filmes e documentários da Videobrasil Coleção de Autores, atividades de programas públicos como encontros e conversas,
                    seminários, e oficinas, ações de mediação e programas de residência artística. </p>

                    <p class="f">Em 2015, o Videobrasil abre sua nova sede
                    em São Paulo: o Galpão VB, voltado à ativação permanente das obras do Acervo Videobrasil e ao desenvolvimento de
                    processos criativos e de reflexão. O Galpão VB promove exposições, programas de filmes, seminários, oficinas e
                    encontros, residências artísticas e laboratórios de criação. No espaço, o público terá acesso também à Videoteca (que
                    disponibiliza mais de 1.300 obras do Acervo Videobrasil, além de depoimentos de artistas e curadores e demais produções
                    audiovisuais da Associação) e a uma sala de leitura especializada em publicações de artes visuais e media art,
                    atualmente com mais de 3.200 títulos. Com 800m2, o Galpão VB será  o primeiro espaço dedicado à programação cultural na
                    região da Vila Leopoldina, contando ainda com espaço de serviços, com café e loja abertos ao público.</p>',

                    //VB EN                     
                    '<p class="f"><span class="bold" style="text-transform: uppercase">associação cultural videobrasil</span><br>
                    Associação Cultural Videobrasil is dedicated to the fostering,
                    dissemination and mapping of contemporary art as well as the public cultural promotion and the exchange between artists,
                    curators and researchers. Independent and committed to the questioning role of art, it has increasing emphasis on public
                    activities and the activation of its collection, which puts together an important estate of video and performance art
                    pieces from the geopolitical South. In this sense, it devotes special attention to the production from Latin America,
                    the Caribbean, Africa, the Middle East, Oceania, and some countries in Europe and Asia, promoting and articulating an
                    active network of international cooperation.</p>

                    <p class="f">In addition to a biennial international festival founded in 1983 and, since 1992, promoted in partnership with Sesc São Paulo, Videobrasil also holds international exhibitions and touring shows, issues publications on contemporary art and culture (such as exhibition books, artist books, an annual magazine on contemporary art), and audiovisual products like the programs from the series Videobrasil on TV and the films and documentaries from Videobrasil Authors Collection, hosts public program activities such as meetings and conversations, seminars, workshops, mediation actions and sponsors artist residency programs.</p>

                    <p class="f">In 2015, Videobrasil opens its new headquarters in São Paulo: Galpão VB, designed to house permanent Videobrasil Collection activation actions and to developing new creative and reflective processes. Galpão VB houses exhibitions, film programs, seminars, workshops and meetings, artist residencies and creative labs. The audience will also gain access to the Video Library (of nearly 1,300 Videobrasil Collection pieces, including statements from artists and curators and other audiovisual productions by the Associação) and to a reading room specializing in visual arts and media art, currently spanning 3,200 publications. With 800m2, Galpão VB will be the first space dedicated to cultural programming in the Vila Leopoldina district, also comprising services such as a café and a shop open to the public. </p>');

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

