<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title>19º Festival de Arte Contemporânea Sesc_Videobrasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
 	<script src="js/home.js"></script>
    <meta property="og:title" content="<?php echo ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil');?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?=$url.ltrim($_SERVER['REQUEST_URI'], '/');?>"/>
    <meta property="og:image" content="<?=$url?>img/logo_fb.png"/>
    <meta property="og:site_name" content="<?php echo ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil');?>"/>
    <meta property="og:description"
          content="O 19º Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul, que acontece de 6 de outubro a 6 de dezembro de 2015, em São Paulo, transforma o Sul no grande direcionador de seus eixos curatoriais e de toda a sua programação, tendo como referência suas múltiplas questões que dizem respeito a diásporas, identidades híbridas, trânsito migratório e viagens, narrativas pessoais, memórias, isolamento, tecido social e insularidade."/>
</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include "elements/mapa.html"; ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container">

        <!-- HEADER -->
        <header><?php include "elements/header.html"; ?></header>
        <!-- /HEADER --><div id="teste-link"></div>

        	<div style="height:36px; clear: both">&nbsp;</div>
        	<div class="row">
        		<div class="col-sm-12 col-md-6">
        			<table width="100%" border="0" cellspacing="0" cellpadding="0">
        			  <tr>
        			    <td><img src="img/imagem_temp.jpg" /></td>
        			  </tr>
        			  <tr>
        			    <td>
                            <div class="artistasParticipantes">
                                <p>
                                    <?php
                                    if($idioma == 'pt'){
                                        titulo('artistas');
                                        echo'<br />';
                                        titulo('participantes');
                                    } else {
                                        titulo('participating'); 
                                        echo'<br />';
                                        titulo('artists');
                                    }?>
                                </p>
                            </div>
                        </td>
        			  </tr>
        			  <tr >
        			    <td><div style="display: table;"><div style="display: table-cell; vertical-align: middle;"><div style="clear: both; height: 20px;" class="submenu"><a id="sm-artistas-todos">Todos</a> | <a id="sm-artistas-obras">Obras</a> | <a id="sm-artistas-projetos">Projetos</a> | <a id="sm-artistas-convidados">Convidados</a></div></div></div></td>

        			  </tr>
        			  <tr>
        			    <td>
        			    	<div id="lista">
                                <ol>
                                    <li class="sm-artistas-convidados">Abdoulaye Konaté | <?php pten('Mali', 'Mali'); ?></li>
                                    <li class="sm-artistas-obras">Ali Cherri | <?php pten('Líbano/França', 'Lebanon/France'); ?></li>
                                    <li class="sm-artistas-obras">Aline X e Gustavo Jardim | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Ana Vaz | <?php pten('Brasil/França', 'Brazil/France'); ?></li>
                                    <li class="sm-artistas-obras">Andres Bedoya | <?php pten('Bolívia', 'Bolivia'); ?></li>
                                    <li class="sm-artistas-obras">Armando Queiroz | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Beto Shwafaty | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Bianca Baldi | <?php pten('África do Sul/Alemanha', 'South Africa/Germany'); ?></li>
                                    <li class="sm-artistas-obras">Carlos Mélo | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-projetos">Carlos Monroy | <?php pten('Colômbia', 'Colombia'); ?></li>
                                    <li class="sm-artistas-obras">Chameckilerner | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Chulayarnnon Siriphol | <?php pten('Tailândia', 'Thailand'); ?></li>
                                    <li class="sm-artistas-obras">Clara Ianni | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-projetos">Cristiano Lenhardt | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Daniel Frota | <?php pten('Brasil/Países Baixos', 'Brazil/Netherlands'); ?></li>
                                    <li class="sm-artistas-obras">Daniel Jacoby | <?php pten('Peru/Países Baixos', 'Peru/Netherlands'); ?></li>
                                    <li class="sm-artistas-obras">Daniel Monroy Cuevas | <?php pten('México', 'Mexico'); ?></li>
                                    <li class="sm-artistas-obras">Débora Bolsoni | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Distruktur | <?php pten('Brasil/Alemanha', 'Brazil/Germany'); ?></li>
                                    <li class="sm-artistas-obras">Dor Guez | <?php pten('Israel', 'Israel'); ?></li>
                                    <li class="sm-artistas-obras">Enrique Ramírez | <?php pten('Chile/França', 'Chile/France'); ?></li>
                                    <li class="sm-artistas-obras">Fancy Violence | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Felipe Bittencourt | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-convidados">Gabriel Abrantes | <?php pten('Portugal', 'Portugal'); ?></li>
                                    <li class="sm-artistas-obras">Haroon Gunn-Salie | <?php pten('África do Sul', 'South Africa'); ?></li>
                                    <li class="sm-artistas-obras">Hui Tao | <?php pten('China', 'China'); ?></li>
                                    <li class="sm-artistas-obras">Iosu Aramburu | <?php pten('Peru', 'Peru'); ?></li>
                                    <li class="sm-artistas-obras">João Castilho | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Karolina Bregula | <?php pten('Polônia', 'Poland'); ?></li>
                                    <li class="sm-artistas-projetos">Keli-Safia Maksud | <?php pten('Quênia', 'Kenya'); ?></li>
                                    <li class="sm-artistas-obras">Köken Ergun | <?php pten('Turquia', 'Turkey'); ?></li>
                                    <li class="sm-artistas-obras">Kush Badhwar | <?php pten('Índia/Austrália', 'India/Australia'); ?></li>
                                    <li class="sm-artistas-obras">Leticia Ramos | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Louise Botkay | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Luciana Magno | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Maria Kramar | <?php pten('Rússia', 'Russia'); ?></li>
                                    <li class="sm-artistas-obras">Marinos Koutsomichalis, Maria Varela,  Afroditi Psarra | <?php pten('Grécia', 'Greece'); ?></li>
                                    <li class="sm-artistas-obras">Maya Watanabe | <?php pten('Peru/Países Baixos', 'Peru/Netherlands'); ?></li>
                                    <li class="sm-artistas-obras">Michael MacGarry | <?php pten('África do Sul', 'South Africa'); ?></li>
                                    <li class="sm-artistas-obras">Mihai Grecu | <?php pten('Romênia/França', 'Romania/France'); ?></li>
                                    <li class="sm-artistas-obras">Monica Rodriguez | <?php pten('Porto Rico/EUA', 'Puerto Rico/USA'); ?></li>
                                    <li class="sm-artistas-obras">Pablo Lobato | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Paulo Nazareth | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Paulo Nimer Pjota | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Pilar Mata Dupont | <?php pten('Austrália', 'Australia'); ?></li>
                                    <li class="sm-artistas-obras">Rafael RG | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Roberto Santaguida | <?php pten('Canadá/Sérvia', 'Canada/Serbia'); ?></li>
                                    <li class="sm-artistas-obras">Rodrigo Cass | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-convidados">Rodrigo Matheus | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Roy Dib | <?php pten('Líbano', 'Lebanon'); ?></li>
                                    <li class="sm-artistas-obras">Runo Lagomarsino | <?php pten('Suécia/Brasil', 'Sweden/Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Slinko | <?php pten('Ucrânia/EUA', 'Ukraine/USA'); ?></li>
                                    <li class="sm-artistas-obras">Solon Ribeiro | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-convidados">Sônia Gomes | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Tatiana Fuentes Sadowski | <?php pten('Peru/França', 'Peru/France'); ?></li>
                                    <li class="sm-artistas-obras">Taus Makhacheva | <?php pten('Rússia', 'Russia'); ?></li>
                                    <li class="sm-artistas-obras">Tiécoura N'Daou | <?php pten('Mali', 'Mali'); ?></li>
                                    <li class="sm-artistas-projetos">Ting-Ting Cheng | <?php pten('Taiwan', 'Taiwan'); ?></li>
                                    <li class="sm-artistas-obras">Vera Chaves Barcellos | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-obras">Viktorija Rybakova | <?php pten('Lituânia/México', 'Lithuania/Mexico'); ?></li>
                                    <li class="sm-artistas-obras">Waléria Américo | <?php pten('Brasil', 'Brazil'); ?></li>
                                    <li class="sm-artistas-convidados">Yto Barrada | <?php pten('Marrocos/França', 'Morocco/France'); ?></li>    				        
        				        </ol>
            				</div>
        			    </td>
        			  </tr>
        			</table>
        		</div>
        		<p></p>
        		<div class="col-sm-12 col-md-6" id="menuprincipal">

        			<div id="menuprincipal1" class="fonteMenu"><img src="img/botoes/sobre_1.png"></div>
                    <div id="texto1a" class="texto" style="display:none;">
                        <p class="submenu" style="margin-bottom: -3px;"><a href="apresentacao.php">Apresentação 19ª Festival</a><br /><a href="curadoria.php">Statement da curadoria</a><br /><a href="identidade.php">Identidade Visual</a><br /><a href="parceiros.php">Parceiros</a><br /><a href="">Convocatórias 19º</a><br /><a href="">Histórico do Festival</a></p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu"></p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>

                    <div id="menuprincipal2" class="fonteMenu"><img src="img/botoes/expos_1.png"></div>
        			<div id="texto2a" class="texto" style="display:none;">
        				<p class="submenu"><a href="">ARTISTAS CONVIDADOS</a> | <a href="">PROJETOS COMISSIONADOS</a> | <a href="">OBRAS SELECIONADAS</a> | <a href="">EXPOSICÃO PARALELA</a> | <a href="">LOCAIS</a></p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu f">A produção plural do Sul Global se espalha por São Paulo durante o 19º Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul. Nesta edição, o Festival apresenta três exposições com obras de 62 artistas e grupos de 27 países no Sesc Pompeia e no Galpão_VB, nova sede da Associação Cultural Videobrasil. As obras selecionadas que exigem exibição em sala de cinema são apresentadas no Teatro do Sesc Pompeia, como parte do Programa de Filmes do 19º Festival, ao lado de um programa especial com filmes de Gabriel Abrantes, um dos artistas convidados. Uma exposição paralela, com 17 obras de 15 artistas do Acervo Videobrasil também faz parte da programação e acontece no Paço das Artes.</p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>
        			
        			<div id="menuprincipal3" class="fonteMenu"><img src="img/botoes/progsfilmes_1.png"></div>
                    <div id="texto3a" class="texto" style="display:none;">
                        <p class="submenu"><a href="">Obras selecionadas</a> | <a href="">Gabriel Abrantes</a> | <a href="">Programação</a></p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu k">O Programa de Filmes do 19º Festival apresenta no Teatro do Sesc Pompeia obras selecionadas que exigem exibição em sala de cinema e uma performance, além de um programa especial, com uma reunião de trabalhos do artista convidado Gabriel Abrantes. </p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>
        			
        			<div id="menuprincipal4" class="fonteMenu"><img src="img/botoes/performances_1.png"></div>
                    <div id="texto4a" class="texto" style="display:none;">
                        <!-- <p class="submenu"><a href="">ARTISTAS CONVIDADOS</a> | <a href="">PROJETOS COMISSIONADOS</a> | <a href="">OBRAS SELECIONADAS</a> | <a href="">EXPOSICÃO PARALELA</a> | <a href="">LOCAIS</a></p> -->

                        <div style="display:inline">
                        <p class="nomargin texto-submenu k">Além dos vídeos, videoinstalações, fotografias, gravuras, pinturas e instalações que compõem a exposição Panoramas do Sul | Obras Selecionadas, O 19º Festival apresenta três performances de artistas e grupos selecionadas pelo edital de obras. Duas delas,  são apresentadas na Convivência do Sesc Pompeia, ao lado dos vídeos, videoinstalações, fotografias, gravuras, pinturas, performances e instalações que compõem a exposição “Panoramas do Sul | Obras Selecionadas”. A terceira exposição será apresentada no Teatro do Sesc Pompeia, onde também acontece a exibição dos Programas de Filmes do 19º Festival.</p>
                            
                            <p class="vejamais"><a href="">Saiba+</a></p>
                        </div>

                        
                    </div>
        			      			
        			<div id="menuprincipal5" class="fonteMenu"><img src="img/botoes/pp_1.png"></div>
                    <div id="texto5a" class="texto" style="display:none;">
                        <p class="submenu"><a href="">Sobre</a> | <a href="">Seminário</a> | <a href="">Encontros e Conversas</a> | <a href="">Oficinas</a> | <a href="">Ações de Mediação</a></p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu l">Os Programas Públicos reafirmam a  ambiente de diálogo do Festival, possibilitando que as pesquisa curatorial se desdobre em ações de contato com o público. Este canal direto com seu espectador se desdobra em um Seminário, Encontros e conversas, Oficinas e Ações de mediação. Multidisciplinares, essas ações transformam os espaços expositivos em locais de pensamento e troca que extrapolam o campo da arte e dialogam transversalmente com outras áreas do conhecimento. Neles, a Zona de Reflexão disponibiliza publicações editadas em parceria pelo Videobrasil e Edições Sesc São Paulo e plataformas digitais como o Canal VB, PLATAFORMA:VB e a Videoteca.</p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>

                    <div id="menuprincipal6" class="fonteMenu"><img src="img/botoes/zona_1.png"></div>
                    <div id="texto6a" class="texto" style="display:none;">
                        
                        <div style="display:inline">
                        <p class="nomargin texto-submenu l">Os Programas Públicos reafirmam a  ambiente de diálogo do Festival, possibilitando que as pesquisa curatorial se desdobre em ações de contato com o público. Este canal direto com seu espectador se desdobra em um Seminário, Encontros e conversas, Oficinas e Ações de mediação. Multidisciplinares, essas ações transformam os espaços expositivos em locais de pensamento e troca que extrapolam o campo da arte e dialogam transversalmente com outras áreas do conhecimento. Neles, a Zona de Reflexão disponibiliza publicações editadas em parceria pelo Videobrasil e Edições Sesc São Paulo e plataformas digitais como o Canal VB, PLATAFORMA:VB e a Videoteca.</p>
                            
                            <p class="vejamais"><a href="">Saiba+</a></p>
                        </div>

                        
                    </div>
        			
        			<div id="menuprincipal7" class="fonteMenu"><img src="img/botoes/premios_1.png"></div>
                    <div id="texto7a" class="texto" style="display:none;">
                        <p class="submenu"><a href="">Artistas Premiados</a> | <a href="">Júri</a> | <a href="">Troféu</a> | <a href="">Parceiros e Apoiadores</a></p>
                        
                        <div style="display:inline">
                        <p class="nomargin texto-submenu r">O Festival de Arte Contemporânea Sesc_Videobrasil tem atuação pioneira na promoção de intercâmbios artísticos internacionais. A cada edição, o Festival concede aos  artistas premiados - escolhidos pelo Júri de Premiação entre os selecionados por meio do edital de obras - um Grande Prêmio em dinheiro, no valor de R$ 75.000,000 e a nove Prêmios de Residência em instituições parceiras do Programa de Residências Videobrasil ao redor do mundo. Os Prêmios de Residência do Festival integram o Programa de Residências Videobrasil, que promove conexões e intercâmbios entre artistas, instituições e comunidades no Brasil e no exterior.</p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>
        			
        			<div id="menuprincipal8" class="fonteMenu"><img src="img/botoes/publicacoes_1.png"></div>
                    <div id="texto8a" class="texto" style="display:none;">
                        <p class="submenu"><a href="">Livros do Festival</a> | <a href="">Outros Lançamentos</a></p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu o">Cinco publicações editadas têm lançamento durante o 19ª Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul. Três delas são vinculadas aos temas dessa edição: Panoramas do Sul | Artistas Convidados, Panoramas do Sul | Obras Selecionadas e Projetos Comissionados e a antologia Panoramas do Sul | Leituras — Perspectivas para outras geografias do pensamento. O livro Videobrasil: Três décadas de vídeo, arte, encontros e transformações celebra a história do Festival, mapeando as transformações do vídeo e suas aproximações com a arte a partir dos anos 1980. Fecha o conjunto Aliança de Corpos Vulneráveis, a 11ª edição da revista anual de arte contemporânea Caderno Sesc_Videobrasil, edição do curador Miguel Ángel López.</p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>

                    <div id="menuprincipal9" class="fonteMenu"><img src="img/botoes/agenda_1.png"></div>
                    <div id="texto9a" class="texto" style="display:none; height: 0"></div>

                    <div id="menuprincipal10" class="fonteMenu"><img src="img/botoes/fotosvideos_1.png"></div>
                    <div id="texto10a" class="texto" style="display:none;"></div>

                    <div id="menuprincipal11" class="fonteMenu"><img src="img/botoes/noticias_1.png"></div>
                    <div id="texto11a" class="texto" style="display:none;"></div>

                    <div id="menuprincipal12" class="fonteMenu"><img src="img/botoes/imprensa_1.png"></div>
                    <div id="texto12a" class="texto" style="display:none;"></div>
        		</div>
        		
        	</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->


    <div id="preload">
    <img src="img/botoes/expos_2.png" width="1" height="1" alt="Image 01" />
    <img src="img/botoes/progsfilmes_2.png" width="1" height="1" alt="Image 02" />
    <img src="img/botoes/performances_2.png" width="1" height="1" alt="Image 03" />
    <img src="img/botoes/curadoria_2.png" width="1" height="1" alt="Image 04" />
    <img src="img/botoes/pp_2.png" width="1" height="1" alt="Image 05" />
    <img src="img/botoes/premios_2.png" width="1" height="1" alt="Image 06" />
    <img src="img/botoes/publicacoes_2.png" width="1" height="1" alt="Image 07" />
    <img src="img/botoes/agenda_2.png" width="1" height="1" alt="Image 08" />
    <img src="img/botoes/fotosvideos_2.png" width="1" height="1" alt="Image 09" />
    <img src="img/botoes/sobre_2.png" width="1" height="1" alt="Image 10" />
    <img src="img/botoes/noticias_2.png" width="1" height="1" alt="Image 11" />
    <img src="img/botoes/imprensa_2.png" width="1" height="1" alt="Image 12" />

</div>
</body>
</html>

