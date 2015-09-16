
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Júri' : 'Jury';

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
                paletaArtistas($('.juri1 p'));
                paletaArtistas($('.juri2 p'));

       
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
                    
                        <span><?php pten('prêmios e residências > <span class="underline">júri</span>', 
                                     'prizes and residencies > <span class="underline">jury</span>');  ?></span>       
                    
        	   </div>
            </div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                    <?= $titulo ?>
                </p>
                </div>
            </div>
            
            <div class="row">
                    <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                        <img src="img/artistas/anavaz.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;"  />
                    </div>                 
                <div class="col-sm-12 col-md-6 juri1" style="float: right; margin-bottom: 24px">                     
                    <?php
                        pten('<p style="margin-bottom: 0">
                    <span class="bold">Curadora geral</span><br />
                    <span class="bold">Solange Farkas</span> (vive e trabalha em São Paulo, Brasil) É curadora e diretora da
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

                    '<p style="margin-bottom: 0">
                    <span class="bold">Curadora geral</span><br />
                    <span class="bold">Solange Farkas</span> (XXXXXXXXXX, Brazil) É curadora e diretora da
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
                    anual de videoarte em Lisboa que repetiu a parceria com a curadora e com a Associação Cultural Videobrasil em 2014.</p>');
                    ?>
                </div>
            </div>

            <div style="margin-bottom: 11px"></div>

            <div class="row">
                    <div class="col-sm-12 col-md-6" style="text-align: center; float: left "></div>                 
                <div class="col-sm-12 col-md-6 bold juri2" style="float: right; margin-bottom: 24px;">                     
                    <p style="display: inline"><?php

                        pten('Curadores convidados', 'Guest curators');
                        
                    ?></p>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <img src="img/artistas/anavaz.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;"  />
                </div>
                <div class="col-sm-12 col-md-6 juri2" style="float: right;margin-bottom: 24px">

                <?php
                pten('<p style="margin-bottom: 0;">
                    <span class="bold">Bernardo José de Souza</span> (vive e trabalha no Rio de Janeiro, Brasil) É curador
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

                    '<p style="margin-bottom: 0">
                    <span class="bold">Bernardo José de Souza</span> (XXXXXXXXXX, Brazil) É curador
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
                    </p>');
                    ?>
                </div>             
            </div>

            <div style="margin-bottom: 11px"></div>

            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <img src="img/artistas/anavaz.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;" />
                </div>
                <div class="col-sm-12 col-md-6 juri2" style="float: right;margin-bottom: 24px">                     
                <?php
                    pten('<p style="margin-bottom: 0">
                    <span class="bold">Bitu Cassundé</span> (vive e trabalha em Fortaleza, Brasil) Carlos Eduardo Bitu Cassundé é curador do Museu
                    de Arte Contemporânea do Ceará (Fortaleza, Brasil) e coordenador do Laboratório de Artes Visuais do Porto Iracema das
                    Artes (Fortaleza, Brasil). Mestre pela Escola de Belas Artes da Universidade Federal de Minas Gerais, foi curador
                    assistente e coordenador de pesquisa no Museu de Arte Contemporânea do Ceará (Fortaleza, 1998 a 2007), integrou a equipe
                    curatorial do Programa Rumos Artes Visuais do Itaú Cultural (São Paulo, 2008 a 2009) e dirigiu o Museu Murillo La Greca
                    (Recife, 2009 a 2011). Seus últimos projetos curatoriais foram: Leonilson – Sob o peso dos meus amores no Itaú Cultural
                    (São Paulo, 2011) e na Fundação Iberê Camargo (Porto Alegre, 2012), Metrô de Superfície no Paço das Artes (São Paulo,
                    2012), Metrô de Superfície II no Centro Cultural São Paulo (São Paulo, 2013), Rotas: desvios e outros ciclos e Leonilson
                    Inflamável, ambas no Museu de Arte Contemporânea do Ceará (Fortaleza, 2013). Integrou diversos júris pelo país, dentre
                    eles o de premiação CNI SESI Marcantonio Vilaça (2011/2012). Com Clarissa Diniz formou a coleção contemporânea do Centro
                    Cultural Banco do Nordeste, vinculado ao projeto Metrô de Superfície. Atualmente </p>',

                    '<p style="margin-bottom: 0">
                    <span class="bold">Bitu Cassundé</span> (XXXXXXXXXX Brazil) Carlos Eduardo Bitu Cassundé é curador do Museu
                    de Arte Contemporânea do Ceará (Fortaleza, Brasil) e coordenador do Laboratório de Artes Visuais do Porto Iracema das
                    Artes (Fortaleza, Brasil). Mestre pela Escola de Belas Artes da Universidade Federal de Minas Gerais, foi curador
                    assistente e coordenador de pesquisa no Museu de Arte Contemporânea do Ceará (Fortaleza, 1998 a 2007), integrou a equipe
                    curatorial do Programa Rumos Artes Visuais do Itaú Cultural (São Paulo, 2008 a 2009) e dirigiu o Museu Murillo La Greca
                    (Recife, 2009 a 2011). Seus últimos projetos curatoriais foram: Leonilson – Sob o peso dos meus amores no Itaú Cultural
                    (São Paulo, 2011) e na Fundação Iberê Camargo (Porto Alegre, 2012), Metrô de Superfície no Paço das Artes (São Paulo,
                    2012), Metrô de Superfície II no Centro Cultural São Paulo (São Paulo, 2013), Rotas: desvios e outros ciclos e Leonilson
                    Inflamável, ambas no Museu de Arte Contemporânea do Ceará (Fortaleza, 2013). Integrou diversos júris pelo país, dentre
                    eles o de premiação CNI SESI Marcantonio Vilaça (2011/2012). Com Clarissa Diniz formou a coleção contemporânea do Centro
                    Cultural Banco do Nordeste, vinculado ao projeto Metrô de Superfície. Atualmente </p>');
                    ?>                
                </div>
            </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->     <footer><?php include "elements/footer.html";?></footer>     <!-- /RODAPE -->
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

