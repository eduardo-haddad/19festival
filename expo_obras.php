<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Obras selecionadas' : 'Selected works';

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
                    <span><?php pten('exposições > <span class="underline">obras selecionadas</span>', 
                                     'exhibitions > <span class="underline">selected works</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                        <a href="expo_convidados.php"><?php pten('artistas convidados', 'guest artists') ?></a> | 
                        <a href="expo_projetos.php"><?php pten('projetos comissionados', 'Comissioned projects') ?></a> | 
                        <a href="expo_obras.php"><span style="text-decoration: underline"><?php pten('obras selecionadas', 'Selected works') ?></span></a> | 
                        <a href="expo_paralela.php"><?php pten('exposição paralela', 'Parallel exhibition') ?></a> 
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <p class="titulo"><?php pten('panoramas do sul | obras selecionadas', 
                                         'southern panoramas | selected works'); ?></p> 
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" >
                    <img src="img/expos/expo-obras-<?php pten('pt','en');?>.png" class="img-responsive" style="max-width: 485px" />
                    <div id="lista">
                        <ol>
                                <li class="upper"><?php pten('Artistas selecionados pelo edital de obras',
                                                             'Artists selected from the<br />artworks call for entries'); ?><br /><br /></li>
                                <li><a href="/alicherri">Ali Cherri | <?php pten('Líbano/França', 'Lebanon/France'); ?></a></li>
                                <li><a href="/alinexegustavojardim">Aline X e Gustavo Jardim | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/anavaz">Ana Vaz | <?php pten('Brasil/França', 'Brazil/France'); ?></a></li>
                                <li><a href="/andresbedoya">Andres Bedoya | <?php pten('Bolívia', 'Bolivia'); ?></a></li>
                                <li><a href="/armandoqueiroz">Armando Queiroz | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/betoshwafaty">Beto Shwafaty | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/biancabaldi">Bianca Baldi | <?php pten('África do Sul/Alemanha', 'South Africa/Germany'); ?></a></li>
                                <li><a href="/carlosmelo">Carlos Mélo | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/chameckilerner">Chameckilerner | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/chulayarnnonsiriphol">Chulayarnnon Siriphol | <?php pten('Tailândia', 'Thailand'); ?></a></li>
                                <li><a href="/claraianni">Clara Ianni | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/danielfrota">Daniel Frota | <?php pten('Brasil/Países Baixos', 'Brazil/Netherlands'); ?></a></li>
                                <li><a href="/danieljacoby">Daniel Jacoby | <?php pten('Peru/Países Baixos', 'Peru/Netherlands'); ?></a></li>
                                <li><a href="/danielmonroycuevas">Daniel Monroy Cuevas | <?php pten('México', 'Mexico'); ?></a></li>
                                <li><a href="/deborabolsoni">Débora Bolsoni | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/distruktur">Distruktur | <?php pten('Brasil/Alemanha', 'Brazil/Germany'); ?></a></li>
                                <li><a href="/dorguez">Dor Guez | <?php pten('Israel', 'Israel'); ?></a></li>
                                <li><a href="/enriqueramirez">Enrique Ramírez | <?php pten('Chile/França', 'Chile/France'); ?></a></li>
                                <li><a href="/felipebittencourt">Felipe Bittencourt | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/haroongunn-salie">Haroon Gunn-Salie | <?php pten('África do Sul', 'South Africa'); ?></a></li>
                                <li><a href="/huitao">Hui Tao | <?php pten('China', 'China'); ?></a></li>
                                <li><a href="/iosuaramburu">Iosu Aramburu | <?php pten('Peru', 'Peru'); ?></a></li>
                                <li><a href="/joaocastilho">João Castilho | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/karolinabregula">Karolina Bregula | <?php pten('Polônia', 'Poland'); ?></a></li>
                                <li><a href="/kokenergun">Köken Ergun | <?php pten('Turquia', 'Turkey'); ?></a></li>
                                <li><a href="/kushbadhwar">Kush Badhwar | <?php pten('Índia/Austrália', 'India/Australia'); ?></a></li>
                                <li><a href="/leticiaramos">Leticia Ramos | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/louisebotkay">Louise Botkay | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/lucianamagno">Luciana Magno | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/mariakramar">Maria Kramar | <?php pten('Rússia', 'Russia'); ?></a></li>
                                <li><a href="/koutsomichalis-varela-psarra">Koutsomichalis, Varela, Psarra | <?php pten('Grécia', 'Greece'); ?></a></li>
                                <li><a href="/mayawatanabe">Maya Watanabe | <?php pten('Peru/Países Baixos', 'Peru/Netherlands'); ?></a></li>
                                <li><a href="/michaelmacgarry">Michael MacGarry | <?php pten('África do Sul', 'South Africa'); ?></a></li>
                                <li><a href="/mihaigrecu">Mihai Grecu | <?php pten('Romênia/França', 'Romania/France'); ?></a></li>
                                <li><a href="/monicarodriguez">Monica Rodriguez | <?php pten('Porto Rico/EUA', 'Puerto Rico/USA'); ?></a></li>
                                <li><a href="/pablolobato">Pablo Lobato | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/paulonazareth">Paulo Nazareth | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/paulonimerpjota">Paulo Nimer Pjota | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/pilarmatadupont">Pilar Mata Dupont | <?php pten('Austrália', 'Australia'); ?></a></li>
                                <li><a href="/rafaelrg">Rafael RG | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/robertosantaguida">Roberto Santaguida | <?php pten('Canadá/Sérvia', 'Canada/Serbia'); ?></a></li>
                                <li><a href="/rodolphoparigi">Rodolpho Parigi | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/rodrigocass">Rodrigo Cass | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/roydib">Roy Dib | <?php pten('Líbano', 'Lebanon'); ?></a></li>
                                <li><a href="/runolagomarsino">Runo Lagomarsino | <?php pten('Suécia/Brasil', 'Sweden/Brazil'); ?></a></li>
                                <li><a href="/slinko">Slinko | <?php pten('Ucrânia/EUA', 'Ukraine/USA'); ?></a></li>
                                <li><a href="/solonribeiro">Solon Ribeiro | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/tatianafuentessadowski">Tatiana Fuentes Sadowski | <?php pten('Peru/França', 'Peru/France'); ?></a></li>
                                <li><a href="/tausmakhacheva">Taus Makhacheva | <?php pten('Rússia', 'Russia'); ?></a></li>
                                <li><a href="/tiecourandaou">Tiécoura N'Daou | <?php pten('Mali', 'Mali'); ?></a></li>
                                <li><a href="/verachavesbarcellos">Vera Chaves Barcellos | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li><a href="/viktorijarybakova">Viktorija Rybakova | <?php pten('Lituânia/México', 'Lithuania/Mexico'); ?></a></li>
                                <li><a href="/waleriaamerico">Waléria Américo | <?php pten('Brasil', 'Brazil'); ?></a></li>
                        </ol>
                    </div>
                </div>

                <div class="col-sm-12 col-md-6 sobre-expo h" style="float: right;">

                    <?php pten(                      ////APRESENTAÇAO PT                     
                    '<p style="display:inline">Vídeos, instalações, performances, fotografias, obras sonoras e esculturas compõem um
                    panorama das visões de mundo e das questões que mobilizam, hoje, artistas de diferentes regiões do Sul geopolítico.
                    Selecionadas a partir das respostas a uma convocatória aberta, elas desenham ora um cenário de crise, no qual se mostra
                    urgente enfrentar questões políticas e sociais, ora um ambiente pós-utópico, para além da presença humana, ora as
                    possibilidades de um novo engajamento do sujeito no mundo.</p>',

                    //APRESENTAÇAO EN                     
                    '<p style="display: inline">
                    Videos, installations, performances, photographs, sound pieces, and sculptures provide a panorama of 
                    the worldviews and issues that currently mobilize artists from various parts of the geopolitical South. 
                    Selected through an open call for entries, they outline either a crisis scenario where pressing political 
                    and social issues require addressing, a post-utopian environment beyond human presence, or the 
                    possibilities for a new engagement of the subject in the world.</p>');

                    ?>
                    
                     <p class="titulo" style="margin-top:37px"><?php pten('Statement da curadoria', 'Statement'); ?></p>

                    <?php pten( 
                    ////STATEMENT PT
                    '<p>
                    Diante de grandes mudanças globais que indicam uma dinâmica de transferência de poder de norte para sul e de oeste para leste, com países ditos periféricos amealhando poder político, e o colapso econômico ameaçando regiões tradicionalmente hegemônicas, em que medida ainda faz sentido falarmos em um Sul geopolítico?</p>

                    <p>Sem corresponder a uma série facilmente identificável de situações políticas, sociais, históricas e econômicas, o Sul global se reafirma como território imaginado, a partir do qual se tenta criar outra forma de produzir discursos sobre nosso mundo, que não passe pelas modalidades hegemônicas identificadas com o ocidente. </p>
                    
                    <p>No contexto da arte contemporânea, os países desse eixo simbólico estão habitualmente ausentes das grandes narrativas consideradas fundadoras das práticas artísticas atuais. A circulação das contranarrativas que produzem enfrenta uma resistência histórica. </p>
                    
                    <p>A seleção reunida aqui aponta questões que animam e movem, hoje, a produção artística do Sul. As obras selecionadas desenham três grandes cenários. O primeiro poderia ser definido pelo acirramento da ideia de crise. Enfrentar questões políticas e sociais – manifestas, sobretudo, na condição do sujeito e em sua relação com o outro – torna-se urgente.</p> 
                    
                    <p>Outras obras investigam um ambiente pós-utópico, para além da presença humana. O sujeito está ausente ou tornado objeto, as paisagens são desoladoras, e a relação com o tempo é ambígua. Narrativas históricas sobrepõem-se em camadas muitas vezes indistintas.</p> 
                    
                    <p>Um terceiro movimento anuncia possibilidades para um novo engajamento do sujeito no mundo. São diversas as obras que tratam da conexão do homem e da natureza, ou da natureza como um grande sistema de poder. O artista, aqui, atua de maneira performativa, colocando-se como agente desse entrelaçamento.</p> 
                    
                    <p>Entre obras em diferentes suportes e mídias, o vídeo e o filme aparecem como dispositivos relevantes em número e qualidade de proposições. Produzir imagem, em movimento ou não, instalada no espaço expositivo ou como proposta imersiva de cinema, segue sendo uma estratégia-chave para nosso tempo e nossa região.</p> 



                    </p>',

                    //STATEMENT EN
                    '<p>In view of significant global changes that point to a shift in power dynamics from North to South and West to East, as purportedly outlying countries amass political power, and economic collapse threatens traditionally hegemonic areas, to what extent does it still make sense to speak of a geopolitical South?</p> 

                    <p>Without corresponding to an easily identifiable set of political, social, historical, and economic situations, the global South reaffirms itself as an imagined territory, where attempts are being made to produce discourses about our world that do not involve the hegemonic modalities associated with the West.</p> 
                    
                    <p>Within the contemporary art context, countries in this symbolic axis are habitually absent from the encompassing narratives that are considered to underlie current art practices. The circulation of the counter-narratives they produce is met with historical resistance.</p> 
                    
                    <p>The selection featured here points to questions that animate and fuel art production in the South today. The selected works outline three broad scenarios. The first one could be defined through the growing idea of crisis. Addressing political and social issues—predominantly manifested in the subject’s condition and his or her relationship with the other—becomes a pressing need.</p>
                    
                    <p>Other pieces explore a post-utopian environment that lies beyond human presence. The subject is absent or objectified, the landscapes are bleak, and the relationship with time is ambiguous. Historical narratives juxtapose into oft-indistinct layers.</p> 
                    
                    <p>A third set heralds the possibilities for a new engagement of the subject in the world. Several pieces address the man-nature connection or nature as a big system of power. Here, the artist operates performatively, presenting him or herself as an agent of this interweaving.</p> 
                    
                    <p>Amid artworks in different materials and media, video and film appear as relevant devices in number and quality of propositions. Producing image, in motion or otherwise, installed in the exhibition venue or presented as an immersive cinematic experience, remains a key strategy in our time and region.</p>');

                    ?>
                     
                </div>

            </div>

            <br style="margin-bottom: 13px" />

            <div class="row">
                <div class="col-sm-12 col-md-6 a" style="margin-top: 0; padding-left: 15px">

                    <div class="row link_rodape" style="margin-top: 0; margin-bottom: 17px">                 
                        <div class="col-md-12" style="padding-left: 0">                     
                            <?php pten(
                            '<p><span class="upper a">sesc pompeia | convivência</span><br />
                            Rua Clélia, 93<br />
                            São Paulo, SP<br />
                            tel.: +55 11 3871 7700 | 0800 11 8220<br /><a href="http://www.sescsp.org.br" target="_blank">www.sescsp.org.br</a></p>
                            <p><br /><span class="upper a">visitação</span><br />
                            de 6 de outubro a 6 de dezembro de 2015<br />
                            terça a sábado das 10h às 21h;<br />
                            domingos e feriados das 10h às 19h</p>',

                            '<p><span class="upper a">sesc pompeia | convivência</span><br />
                            Rua Clélia, 93<br />
                            São Paulo, SP, Brazil<br />
                            phone: +55 11 3871 7700<br /><a href="http://www.sescsp.org.br" target="_blank">www.sescsp.org.br</a></p>
                            <p><br /><span class="upper a">visiting hours</span><br />
                            october 6 to december 6, 2015<br />
                            tue-sat, from 10am to 9pm;<br />
                            sun, holidays, from 10am to 7pm</p>'); ?>





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

