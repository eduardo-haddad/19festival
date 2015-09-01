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
    <script src="js/home.js"></script>
    <script>
        $(document).ready(
            function(){
                paletaArtistas($('.curador1 p'));
                paletaArtistas($('.curador2 p'));
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
                    
                        <span><?php pten('sobre o festival > <span class="underline">curadoria</span>', 
                                     'about the festival > <span class="underline">curatorship</span>');  ?></span>       
                    
        	   </div>
            </div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                            <a href="apresentacao.php"><?php pten('Apresentação','Introduction');?></a> | 
                            <a href="curadoria.php"><span style="text-decoration: underline"><?php pten('Curadoria','Curators');?></span></a> | 
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

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                    <?= $titulo ?>
                </p>
                </div>
            </div>
            
            <div class="row">
                    <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                        <img src="img/sobre/solange.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;"  />
                    </div>                 
                <div class="col-sm-12 col-md-6 u curador1" style="float: right; margin-bottom: 24px">                     
                    <?php // SOLANGE PT
                        pten('<p style="margin-bottom: 0">
                    <span class="bold">Solange Farkas</span> (vive e trabalha em São Paulo, Brasil)<br />É curadora e diretora da
                    Associação Cultural Videobrasil. Criou o Festival Internacional de Arte Contemporânea SESC_Videobrasil, evento de que é
                    curadora-geral e que trouxe ao Brasil grandes nomes da arte contemporânea internacional. Foi responsável pelas
                    exposições Sophie Calle – Cuide de Você (2009) e Joseph Beuys – A Revolução Somos Nós (2010). Em sua carreira como
                    curadora, destacam-se a Mostra Africana de Arte Contemporânea (São Paulo, 2000); Mostra Pan-Africana de Arte
                    Contemporânea (Salvador, 2005); La Mirada Discreta: Marcel Odenbach & Robert Cahen (Buenos Aires, 2006); Eder Santos –
                    Roteiro Amarrado (Rio de Janeiro, 2010), Isaac Julien: Geopoéticas (São Paulo, 2012) e Alfabeto Infinito | Angela
                    Detanico e Rafael Lain (Porto Alegre, 2013) e Videobrasil 30 anos (2013/2014), que teve itinerâncias em Varsóvia,
                    Polônia; Atlanta, EUA; Joanesburgo e Cidade do Cabo, África do Sul e Beijing, China. Foi curadora convidada pelo 5º
                    Videozone: International Video Art Biennial (Israel, 2010), pela 16ª Bienal de Cerveira (Portugal, 2011), pela 10ª
                    Bienal de Charjah (Emirados Árabes Unidos, 2011), pelo 3º Festival de Videoarte de Macau (China, 2012) e pelo Screen
                    from Barcelona Festival (Espanha, 2012). Foi diretora e curadora-chefe do Museu de Arte Moderna da Bahia (Salvador, 2007
                    a 2010). Participou de programação em homenagem ao Videobrasil no Festival de la Imagen (Manizales, Colômbia, 2013). No
                    mesmo ano, o 6th Jakarta International Video Festival teve mostra com curadoria de Solange Farkas, bem como a FUSO,
                    anual de videoarte em Lisboa que repetiu a parceria com a curadora e com a Associação Cultural Videobrasil em 2014.</p>',
                    // SOLANGE EN
                    '<p style="margin-bottom: 0"><span class="bold">Solange Farkas</span> (lives and works out of São Paulo, Brazil)<br />
                    Curator and director of Associação Cultural Videobrasil. She was the founder and is
                    the general curator of the International Contemporary Art Festival Sesc_Videobrasil, an event which has brought leading
                    international contemporary artists to Brazil. She was responsible for the exhibitions Sophie Calle – Take care of
                    yourself (2009) and Joseph Beuys – We Are the Revolution (2010). The highlights of her curating career include the
                    African Contemporary Art Exhibition (São Paulo, 2000); Pan African Contemporary Art Exhibition (Salvador, 2005); La
                    Mirada Discreta: Marcel Odenbach & Robert Cahen (Buenos Aires, 2006); Eder Santos – Roteiro Amarrado (Rio de Janeiro,
                    2010), Isaac Julien: Geopoetics (São Paulo, 2012), Alfabeto Infinito | Angela Detanico e Rafael Lain (Porto Alegre,
                    2013) and Videobrasil 30 years (2013/2014), which spun off touring shows in Warsaw, Poland; Atlanta, USA; Johannesburg
                    and Cape Town, South Africa, and Beijing, China. She served as a guest curator at the 5th Videozone: International Video
                    Art Biennial (Israel, 2010), the 16th Cerveira Biennial (Portugal, 2011), the 10th Sharjah Biennial (United Arab
                    Emirates, 2011), the 3rd Macao Video Art Festival (China, 2012) and Screen from Barcelona Festival (Spain, 2012). She is
                    a former director and chief curator of the Bahia Modern Art Museum (Salvador, 2007 to 2010). She participated in a
                    program in honor of Videobrasil at the Festival de la Imagen (Manizales, Colombia, 2013). In that same year, the 6th
                    Jakarta International Video Festival featured a program curated by Solange Farkas, as did FUSO, the annual video art
                    exhibit in Lisbon, which partnered up with the curator and Associação Cultural Videobrasil again in 2014.</p>');
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
                    <span class="bold">Bernardo José de Souza</span> (vive e trabalha no Rio de Janeiro, Brasil)<br />
                    É curador
                    independente, professor universitário e colaborador de publicações sobre cultura visual. Foi curador do Espaço na 9ª
                    Bienal do Mercosul (Porto Alegre, 2013), coordenador de Cinema, Vídeo e Fotografia da Secretaria de Cultura da
                    Prefeitura de Porto Alegre (2005 a 2009) e colaborador da revista Vogue e do jornal Folha de S.Paulo. Bacharel em
                    Comunicação Social pela Pontifícia Universidade Católica do Rio Grande do Sul e especialista em Fotografia e Moda pelo
                    London College of Fashion, é membro do conselho curador do Museu de Arte Contemporânea do Rio Grande do Sul. Nos últimos
                    dez anos, vem desenvolvendo uma série de projetos em parceria com instituições como o KW Institute for Contemporary Art
                    (Berlim, Alemanha), o Instituto Goethe (Porto Alegre, Brasil) e o Instituto Inhotim (Brumadinho, Brasil). Foi curador de
                    cinco edições do projeto Videoarte nos Jardins do DMAE. Como curador independente, realizou as exposições Ponto de Fuga
                    na Galeria de Arte da Fundação Ecarta (Porto Alegre, 2011), Guy Bourdin (2011) e Mutatis Mutandis (2013), ambas no Largo
                    das Artes (Rio de Janeiro), entre outras. Organizou o seminário RODA – Rodadas de Debates Sobre Arte (Porto Alegre,
                    2012).
                    </p>', 
                    // BERNARDO EN
                    '<p style="margin-bottom: 0"><span class="bold">Bernardo José de Souza</span><br />(lives and works out of Rio de Janeiro, Brazil)<br />
                    Independent curator, university professor and collaborator with publications on visual culture. He
                    curated Espaço at the 9th Mercosur Biennial (Porto Alegre, 2013), served as coordinator of Film, Video and Photography
                    at the Secretariat for Culture of the Porto Alegre City Hall (2005 to 2009) and collaborated for Vogue magazine and
                    newspaper Folha de S.Paulo. The holder of a baccalaureate in Social Communication from the Pontifical Catholic
                    University of Rio Grande do Sul and a specialization in Photography and Fashion from the London College of Fashion, and
                    is a member of the board of curators of the Contemporary Art Museum of Rio Grande do Sul. For the past ten years, he has
                    been working on several projects in partnership with organizations like the KW Institute for Contemporary Art (Berlin,
                    Germany), Goethe Institut (Porto Alegre, Brazil) and the Inhotim Institute (Brumadinho, Brazil). He curated five
                    editions of the Videoarte nos Jardins do DMAE (Video Art on the DMAE Gardens) project. As independent curator, he
                    curated the shows Ponto de Fuga at Fundação Ecarta’s Art Gallery (Porto Alegre, 2011), Guy Bourdin (2011) and Mutatis
                    Mutandis (2013), both at Largo das Artes (Rio de Janeiro), among others. He organized the art seminar RODA – Rodadas de
                    Debates Sobre Arte (Porto Alegre, 2012).</p>');                     
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
                    Carlos Eduardo Bitu Cassundé é curador do Museu de Arte Contemporânea do Ceará
                    (Fortaleza, Brasil) e coordenador do Laboratório de Artes Visuais do Porto Iracema das Artes (Fortaleza, Brasil). Mestre
                    pela Escola de Belas Artes da Universidade Federal de Minas Gerais, foi curador assistente e coordenador de pesquisa no
                    Museu de Arte Contemporânea do Ceará (Fortaleza, 1998 a 2007), integrou a equipe curatorial do Programa Rumos Artes
                    Visuais do Itaú Cultural (São Paulo, 2008 a 2009) e dirigiu o Museu Murillo La Greca (Recife, 2009 a 2011). Seus últimos
                    projetos curatoriais foram: Leonilson – Sob o peso dos meus amores no Itaú Cultural (São Paulo, 2011) e na Fundação
                    Iberê Camargo (Porto Alegre, 2012), Metrô de Superfície no Paço das Artes (São Paulo, 2012), Metrô de Superfície II no
                    Centro Cultural São Paulo (São Paulo, 2013), Rotas: desvios e outros ciclos e Leonilson Inflamável, ambas no Museu de
                    Arte Contemporânea do Ceará (Fortaleza, 2013). Integrou diversos júris pelo país, dentre eles o de premiação CNI SESI
                    Marcantonio Vilaça (2011/2012). Com Clarissa Diniz formou a coleção contemporânea do Centro Cultural Banco do Nordeste,
                    vinculado ao projeto Metrô de Superfície. Atualmente participa da equipe curatorial da 5º edição do Prêmio CNI SESI
                    SENAI Marcantonio Vilaça.</p>',

                    //BITU EN
                    '<p style="margin-bottom: 0"><span class="bold">Bitu Cassundé</span> (lives and works out of Fortaleza, Brazil)<br />
                    Carlos Eduardo Bitu Cassundé is the curator
                    of the Contemporary Art Museum of Ceará (Fortaleza, Brazil) and coordinator of
                    Porto Iracema das Artes’ Visual Arts Laboratory (Fortaleza, Brazil). The
                    holder of a master’s degree from the School of Fine Arts of the Federal
                    University of Minas Gerais, he served as assistant curator and research
                    assistant at the Contemporary Art Museum of Ceará (Fortaleza, 1998 to 2007),
                    was a member of the curating team for Itaú Cultural’s visual arts program
                    Programa Rumos Artes Visuais (São Paulo, 2008 to 2009) and the director of
                    Museu Murillo La Greca (Recife, 2009 to 2011). Recent curating projects
                    include: Leonilson – Sob o peso dos meus amores at Itaú Cultural (São Paulo,
                    2011) and at the Iberê Camargo Foundation (Porto Alegre, 2012), Metrô de
                    Superfície at Paço das Artes (São Paulo, 2012), Metrô de Superfície II at the
                    São Paulo Cultural Center (São Paulo, 2013), Rotas: desvios e outros ciclos
                    and Leonilson Inflamável, both at the Contemporary Art Museum of Ceará
                    (Fortaleza, 2013). He was a member of the juries for several festivals across
                    the country, including the CNI SESI Marcantonio Vilaça award jury (2011/2012).
                    Alongside Clarissa Diniz, he formed the contemporary art collection of
                    Cultural Center Banco do Nordeste, under the project Metrô de Superfície. He
                    is currently a member of the curating team for the 5th edition of the CNI SESI
                    SENAI Marcantonio Vilaça Prize.</p>');                     
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
                    Escritor e curador com interesse nas áreas de ciências sociais, teoria cinematográfica e arte contemporânea. Publica 
                    regularmente nas revistas Frieze e MOUSSE e no jornal Público. É curador da seção de imagem em movimento do Festival 
                    IndieLisboa (Lisboa, Portugal). Colaborou com a galeria BES Arte e Finança (Lisbo, Portugal), o Centre de Cultura 
                    Contemporània de Barcelona (Barcelona, Espanha), o Waterpieces Festival (Riga, Letônia), o Moderna Museet (Estocolmo, Suécia),
                    e The Mews Project Space, Cell Project Space e Whitechapel Gallery, todos em Londres, Reino Unido. Em 2014 foi residente na
                    Fundazione Sandretto Re Rebaudengo (Turim, Itália). É cofundador do The Green Parrot, espaço sem fins lucrativos dedicado
                    a práticas contemporâneas em Barcelona.</p>',
                    // JOAO LAIA EN  
                    '<p style="margin-bottom: 0"><span class="bold">João Laia</span> (lives and works out of London, United Kingdom)<br />
                    Writer and curator interested in the social sciences, film theory and contemporary art. He is a regular contributor for 
                    magazines Frieze and MOUSSE and newspaper Público. He is the curator of the image in motion section of the IndieLisboa 
                    Festival (Lisbon, Portugal). Former collaborator with the BES Art and Finance gallery (Lisbon, Portugal), Centre de Cultura 
                    Contemporània de Barcelona (Barcelona, Spain), Waterpieces Festival (Riga, Latvia), Moderna Museet (Stockholm, Sweden), 
                    and The Mews Project Space, Cell Project Space and Whitechapel Gallery, in London, United Kingdom. In 2014 he undertook 
                    a residency at the Fundazione Sandretto Re Rebaudengo (Turin, Italy). He was a co-founder of the The Green Parrot, a 
                    non-profit facility dedicated to contemporary practices in Barcelona.</p>');                     
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
                    É curadora, crítica e pesquisadora de arte. Cocuradora da 32ª Bienal de São Paulo e colaboradora na curadoria do
                    Instituto Inhotim (Brumadinho, Brasil) desde 2007. É mestre e doutoranda pelo Programa de Pós-Graduação em Artes
                    Visuais da Universidade Federal de Minas Gerais. Foi curadora adjunta da 9ª Bienal do Mercosul (Porto Alegre, 2013)
                    e integrou a Comissão Curadora do 18º Festival Internacional de Arte Contemporânea Sesc_Videobrasil (São Paulo, 2013).
                    Seus projetos curatoriais independentes incluem Zona de Instabilidade – Lais Myrrha na Caixa Cultural Sé (São Paulo, 2013)
                    e A céu aberto, com Suely Rolnik, que concorreu à 30ª Bienal de São Paulo (São Paulo, 2011).</p>',
                    // JULIA EN  
                    '<p style="margin-bottom: 0"><span class="bold">Júlia Rebouças</span><br />(lives and works between Belo Horizonte and Brumadinho, Brazil)<br />
                    Curator, art critic and researcher. She is the co-curator of the 32nd São Paulo Biennial and a collaborator as curator at the
                    Inhotim Institute (Brumadinho, Brazil) since 2007. Holds a master’s degree and is pursuing a doctorate under the Postgraduate
                    Visual Arts Program of the Federal University of Minas Gerais. She served as joint curator for the 9th Mercosur Biennial
                    (Porto Alegre, 2013) and was a member of the Curatorial Committee for the 18th International Contemporary Art Festival
                    Sesc_Videobrasil (São Paulo, 2013). Independent curating projects include Zona de Instabilidade – Lais Myrrha at Caixa
                    Cultural Sé (São Paulo, 2013) and A céu aberto, with Suely Rolnik, which competed in the 30th São Paulo Biennial
                    (São Paulo, 2011).</p>');                     
                    ?>
                    </div>             
                </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->     <footer><?php include "elements/footer.html"; ?></footer>     <!-- /RODAPE -->

</body>
</html>

