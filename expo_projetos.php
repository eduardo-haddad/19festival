<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Projetos Comissionados' : 'C
ommissioned Projects';

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
                                     '<a href="index.php#exposicoes" class="link">exhibitions</a> > <span class="underline">c
ommissioned projects</span>');  ?></span>      
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
                                         'southern panoramas | c
ommissioned projects'); ?></p> 
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" >
                    <img src="img/expos/expo-projetos-img.jpg" class="img-responsive" style="max-width: 485px" />
                    <div id="lista">
                        <ol>
                                <li class="upper"><?php pten('Artistas selecionados pelo<br />edital de projetos comissionados', 
                                                             'Artists selected from the<br />c
ommissioned projects call for entries'); ?><br /><br /></li>
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
                    '<p>Consolidando seu perfil de experimentação e inovação, o <span class="bold">Festival de Arte Contemporânea Sesc_Videobrasil</span> abriu, pela primeira vez, uma convocatória pública para inscrição de projetos a serem comissionados para apresentação em sua 19ª edição. Foram selecionados os seguintes artistas entre as 446 inscrições de projetos feitas por artistas de 71 países: <span class="bold">Carlos Monroy</span> (Colômbia), <span class="bold">Cristiano Lenhardt</span> (Brasil), <span class="bold">Keli-Safia Maksud</span> (Quênia) e <span class="bold">Ting-Ting Cheng</span> (Taiwan).</p>

                     <p>O desenvolvimento dos projetos dos artistas selecionados foi acompanhado pela comissão responsável pela seleção, formada pelos curadores Bernardo José de Souza (Rio Grande do Sul, Brasil/vive e trabalha no Rio de Janeiro), Bitu Cassundé (Ceará, Brasil/vive e trabalha em Fortaleza), João Laia (Lisboa, Portugal/vive e trabalha em Londres) e Júlia Rebouças (Sergipe, Brasil/vive e trabalha em Belo Horizonte), que trabalham sob a curadoria geral de Solange Farkas. Esta iniciativa efetiva o envolvimento dos curadores para além da seleção, promovendo um diálogo direto e contínuo com os artistas no decorrer de seus processos criativos, em uma relação de tempo estendida.</p>
                     
                     <p>O texto curatorial da exposição Panoramas do Sul | Projetos Comissionados será disponibilizado em breve.</p>
                     
                     <p><br /><span class="bold">Sobre os projetos selecionados</span><br />
                     Carlos Monroy participa com <em>Llorando se foi. O museu da lambada</em>. In memoriam de Francisco "Chico" Oliveira, que relaciona dois fenômenos dos anos 1980 no Brasil: a consagração da lambada e sua incidência na construção da identidade nacional, e o início e exponencial crescimento da imigração boliviana em São Paulo. Superquadra-Sací, filme de Cristiano Lenhardt, cria um encontro entre as origens indígenas nacionais e a “cidade-paisagem”, o cenário urbano, com remissões ao modernismo brasileiro. Mitumba, de Keli-Safia Maksud, pesquisa a relação entre a história do sabão na Inglaterra e a dos tecidos africanos nos Países Baixos na era vitoriana. A artista discute a imagem de higiene racial e a identidade africana a partir dos tecidos percebidos mundialmente como autêntica expressão da África. O projeto The Atlas of Places do not exist , de Ting-Ting Cheng, trata-se de uma biblioteca contendo centenas de livros sobre lugares que não existem, questionando as fronteiras e as definições de realidade.
                     </p>',

                    //APRESENTAÇAO EN
                    '<p>In keeping with its experimental, innovation-oriented profile, for the first time ever the <span class="bold">Contemporary Art Festival Sesc_Videobrasil</span> has issued an open call for projects to be commissioned and featured in its 19th edition. The following artists were selected from among 446 project entries by artists from 71 countries: <span class="bold">Carlos Monroy</span> (Colombia), <span class="bold">Cristiano Lenhardt</span> (Brazil), <span class="bold">Keli-Safia Maksud</span> (Kenya) and <span class="bold">Ting-Ting Cheng</span> (Taiwan).</p>

                     <p>The selected artists work on their projects with oversight from the committee, which is comprised of the curators Bernardo de Souza (Rio Grande do Sul, Brazil/lives and works in Rio de Janeiro), Bitu Cassundé (Ceará, Brazil/lives and works in Fortaleza), João Laia (Lisbon, Portugal/lives and works in London) and Júlia Rebouças (Sergipe, Brazil/lives and works in Belo Horizonte) – working under the guidance of the Festival’s general curator Solange Farkas. This initiative extends the curators’ involvement beyond the actual selection, engaging them in direct, continuous dialogue with the artists in developing their creative processes, in an extended time relationship.</p>
                     
                     <p>The curatorial statement for the exhibition Southern Panoramas | Commissioned Projects will soon be available.</p>
                     
                     <p><br /><span class="bold">About the selected projects</span><br />
                     Carlos Monroy will participate with <em>Llorando se foi. O museu da lambada</em>. In memoriam de Francisco "Chico" Oliveira, which connects two phenomena from 1980s Brazil:  the rise of the lambada dance and music style, as well as its effects upon the building of national identity, and the advent and exponential growth of Bolivian immigration to São Paulo. In Superquadra-Sací, a film by the Cristiano Lenhardt, national Indigenous roots converge with the “cityscape,” the urban scenery, with throwbacks to Brazilian modernism. Mitumba, by Keli-Safia Maksud, explores the ties between the history of soap in the United Kingdom and African fabrics in Victorian-era Netherlands. The artist discusses the image of racial hygiene and African identity through textiles viewed globally as an authentic expression of Africa. The Atlas of Places do not exist, a project by Ting-Ting Cheng, is about a library containing hundreds of books on non-existent places, a questioning of borders and definitions of reality.
                     </p>');

                    ?>
                    
                    <!-- <p class="titulo" style="margin-top:37px"><?php pten('Statement da curadoria', 'Statement'); ?></p>

                    <?php pten( 
                    ////STATEMENT PT
                    '<p style="display: inline">
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Museum, em Pittsburgh, EUA.</p><br />                     
                    
                    <p>Em bronze e cera colorida, o troféu do 18º Festival é uma
                    escultura da artista paulistana Erika Verzutti em forma de romã. “A
                    fruta foi uma escolha natural quando procurava uma forma de meu
                    repertório conhecido e que fosse também celebratória”, diz. “É uma
                    forma preciosa, muito expressiva, meio fisionômica, e associada também
                    a sorte”</p>',

                    //STATEMENT EN
                    '<p style="display: inline">
                    Ao longo dos anos, os troféus criados para a mostra Panoramas do Sul também
                    sofreram transformações. De peças simplesmente destinadas à premiação,
                    tornaram-se verdadeiros objetos artísticos. No Galpão do Sesc, centro
                    do eixo histórico do Festival, o público vai poder conhecer os troféus
                    criados por artistas como Kiko Farkas, Guto Lacaz, Kimi Nii, Tunga,
                    Carmela Gross, Luiz Zerbini, Raquel Garbelotti, Rosângela Rennó, entre
                    outros, incluindo o troféu assinado pela artista Erika Verzutti para
                    esta 18ª edição. Erika foi recentemente selecionada para a mostra
                    Carnegie International, que reúne artistas de 19 países no Carnegie
                    Museum, em Pittsburgh, EUA.</p><br />                     
                    
                    <p>Em bronze e cera colorida, o troféu do 18º Festival é uma
                    escultura da artista paulistana Erika Verzutti em forma de romã. “A
                    fruta foi uma escolha natural quando procurava uma forma de meu
                    repertório conhecido e que fosse também celebratória”, diz. “É uma
                    forma preciosa, muito expressiva, meio fisionômica, e associada também
                    a sorte”</p>');

                    ?> -->
                    
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

