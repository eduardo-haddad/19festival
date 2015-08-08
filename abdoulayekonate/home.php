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

    <meta property="og:title" content="19º Festival de Arte Contemporânea Sesc_Videobrasil"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="http://www.videobrasil.org.br/comunicacao/preview19/home.html"/>
    <meta property="og:image" content="<?=$url?>img/logo_fb.png"/>
    <meta property="og:site_name" content="19º Festival de Arte Contemporânea Sesc_Videobrasil"/>
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
        <!-- /HEADER -->

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
        			    <td><div style="display: table;"><div style="display: table-cell; vertical-align: middle;"><div style="clear: both; height: 20px;" class="submenu"><a id="sm-artistas-todos">Todos</a> | <a id="sm-artistas-obras">Obras</a> | <a id="sm-artistas-projetos">Projetos</a> | <a id="sm-artistas-convidados">Convidados</a> | <a id="sm-artistas-premiados">Premiados</a></div></div></div></td>

        			  </tr>
        			  <tr>
        			    <td>
        			    	<div id="lista">
                              <ol>
        				        <li class="sm-artistas-convidados">Abdoulaye Konaté</li>
        				        <li class="sm-artistas-obras">Ali Cherri  | Líbano/França</li>
        				        <li class="sm-artistas-obras">Aline X e Gustavo Jardim | Brasil</li>
        				        <li class="sm-artistas-obras">Ana Vaz | Brasil/França</li>
        				        <li class="sm-artistas-obras">Andres Bedoya | Bolívia</li>
        				        <li class="sm-artistas-obras">Armando Queiroz | Brasil</li>
        				        <li class="sm-artistas-obras">Beto Shwafaty | Brasil</li>
        				        <li class="sm-artistas-obras">Bianca Baldi | África do Sul/Alemanha</li>
        				        <li class="sm-artistas-obras">Carlos Mélo | Brasil</li>
        				        <li class="sm-artistas-projetos">Carlos Monroy</li>
        				        <li class="sm-artistas-obras">Chameckilerner | Brasil</li>
        				        <li class="sm-artistas-obras">Chulayarnnon Siriphol | Tailândia</li>
        				        <li class="sm-artistas-obras">Clara Ianni | Brasil</li>
        				        <li class="sm-artistas-projetos">Cristiano Lenhardt</li>
        				        <li class="sm-artistas-obras">Daniel Frota | Brasil/Países Baixos</li>
        				        <li class="sm-artistas-obras">Daniel Jacoby | Peru/Países Baixos</li>
        				        <li class="sm-artistas-obras">Daniel Monroy Cuevas | México</li>
        				        <li class="sm-artistas-obras">Débora Bolsoni | Brasil</li>
        				        <li class="sm-artistas-obras">Distruktur | Brasil/Alemanha</li>
        				        <li class="sm-artistas-obras">Dor Guez | Israel</li>
        				        <li class="sm-artistas-obras">Enrique Ramírez | Chile/França</li>
        				        <li class="sm-artistas-obras">Fancy Violence | Brasil</li>
        				        <li class="sm-artistas-obras">Felipe Bittencourt | Brasil</li>
        				        <li class="sm-artistas-convidados">Gabriel Abrantes</li>
        				        <li class="sm-artistas-obras">Haroon Gunn-Salie | África do Sul</li>
        				        <li class="sm-artistas-obras">Hui Tao | China</li>
        				        <li class="sm-artistas-obras">Iosu Aramburu | Peru</li>
        				        <li class="sm-artistas-obras">João Castilho | Brasil</li>
        				        <li class="sm-artistas-obras">Karolina Bregula | Polônia</li>
        				        <li class="sm-artistas-convidados">Kcho</li>
        				        <li class="sm-artistas-projetos">Keli-Safia Maksud</li>
        				        <li class="sm-artistas-obras">Köken Ergun | Turquia</li>
        				        <li class="sm-artistas-obras">Kush Badhwar | Índia/ Austrália</li>
        				        <li class="sm-artistas-obras">Leticia Ramos | Brasil</li>
        				        <li class="sm-artistas-obras">Louise Botkay | Brasil</li>
        				        <li class="sm-artistas-obras">Luciana Magno | Brasil</li>
        				        <li class="sm-artistas-obras">Maria Kramar | Rússia</li>
        				        <li class="sm-artistas-obras">Marinos Koutsomichalis, Maria Varela,  Afroditi Psarra | Grécia</li>
        				        <li class="sm-artistas-obras">Maya Watanabe | Peru/Países Baixos</li>
        				        <li class="sm-artistas-obras">Michael MacGarry | África do Sul</li>
        				        <li class="sm-artistas-obras">Mihai Grecu | Romênia/França</li>
        				        <li class="sm-artistas-obras">Monica Rodriguez | Porto Rico/EUA</li>
        				        <li class="sm-artistas-obras">Pablo Lobato | Brasil</li>
        				        <li class="sm-artistas-obras">Paulo Nazareth | Brasil</li>
        				        <li class="sm-artistas-obras">Paulo Nimer Pjota | Brasil</li>
        				        <li class="sm-artistas-obras">Pilar Mata Dupont | Austrália</li>
        				        <li class="sm-artistas-obras">Rafael RG | Brasil</li>
        				        <li class="sm-artistas-obras">Roberto Santaguida | Canadá/Sérvia</li>
        				        <li class="sm-artistas-obras">Rodrigo Cass | Brasil</li>
        				        <li class="sm-artistas-convidados">Rodrigo Matheus</li>
        				        <li class="sm-artistas-obras">Roy Dib | Líbano</li>
        				        <li class="sm-artistas-obras">Runo Lagomarsino | Suécia/Brasil</li>
        				        <li class="sm-artistas-obras">Slinko | Ucrânia/EUA</li>
        				        <li class="sm-artistas-obras">Solon Ribeiro | Brasil</li>
        				        <li class="sm-artistas-convidados">Sônia Gomes</li>
        				        <li class="sm-artistas-obras">Tatiana Fuentes Sadowski | Peru/França</li>
        				        <li class="sm-artistas-obras">Taus Makhacheva | Rússia</li>
        				        <li class="sm-artistas-obras">Tiécoura N'Daou | Mali</li>
        				        <li class="sm-artistas-projetos">Ting-Ting Cheng</li>
        				        <li class="sm-artistas-obras">Vera Chaves Barcellos | Brasil</li>
        				        <li class="sm-artistas-obras">Viktorija Rybakova | Lituânia/México</li>
        				        <li class="sm-artistas-obras">Waléria Américo | Brasil</li>
        				        <li class="sm-artistas-convidados">Yto Barrada</li>
        				       </ol>
            				</div>
        			    </td>
        			  </tr>
        			</table>
        		</div>
        		<p></p>
        		<div class="col-sm-12 col-md-6" id="menuprincipal">
        			<div id="menuprincipal1" class="fonteMenu"><img src="img/botoes/expos_1.png"></div>
        			<div id="texto1a" class="texto" style="display:none;">
        				<p class="submenu" id="" style=""><a id="sm-expo-sesc">sesc pompeia</a> | <a id="sm-expo-paco">paço das artes</a> | <a id="sm-expo-galpao">galpão vb</a> | <a id="sm-expo-comochegar">como chegar</a></p>

                        <div style="display:inline" id="sm-expo-sesc">
                            <p class="texto-submenu"><strong>TITULO EXPO SESC POMPEIA</strong><br>A debis aut
                            et aut prem venderfero everum expliquam rem vellautem faccus   et aut lam
                            incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest
                            optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do
                            outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata
                            da relação entre arte e sustentabilidade, abordando os impactos da crescente
                            mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel
                            Hora examina o impacto das residências em seu entorno; Grant H. Kester, da
                            Universidade da califórnia em san Diego, analisa a colaboração da arte com
                            subculturas sociais e políticas;</p>
                            <p>----</p>
                            <p class="nomargin servico">de 6 de outubro a 6 de dezembro de 2015<br />
                            Sesc Pompeia | Rua Clélia, 93, Pompeia<br />
                            Visitação: ter-sáb: das 9h às 22h | dom/feriados: das 9h às 20h</p>
                            <p class="vejamais"><a href="expo_sesc.html">Veja+</a></p>
                        </div>

                        <div id="sm-expo-paco" style="display:none">
                            <p class="texto-submenu"><strong>TITULO EXPO PAÇO</strong><br>A debis aut
                            et aut prem venderfero everum expliquam rem vellautem faccus   et aut lam
                            incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest
                            optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do
                            outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata
                            da relação entre arte e sustentabilidade, abordando os impactos da crescente
                            mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel
                            Hora examina o impacto das residências em seu entorno; Grant H. Kester, da
                            Universidade da califórnia em san Diego, analisa a colaboração da arte com
                            subculturas sociais e políticas;
                            et aut prem venderfero everum expliquam rem vellautem faccus   et aut lam
                            incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest
                            optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do
                            outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata
                            da relação entre arte e sustentabilidade, abordando os impactos da crescente
                            mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel
                            Hora examina o impacto das residências em seu entorno; Grant H. Kester, da
                            Universidade da califórnia em san Diego, analisa a colaboração da arte com
                            subculturas sociais e políticas;</p>
                            <p>----</p>
                            <p class="nomargin servico">de 6 de outubro a 6 de dezembro de 2015<br />
                            Sesc Pompeia | Rua Clélia, 93, Pompeia<br />
                            Visitação: ter-sáb: das 9h às 22h | dom/feriados: das 9h às 20h</p>
                            <p class="vejamais"><a href="expo_sesc.html">Veja+</a></p>
                        </div>

                        <div id="sm-expo-galpao" style="display:none">
                            <p class="texto-submenu"><strong>TITULO EXPO GALPÃO</strong><br>A debis aut
                            et aut prem venderfero everum expliquam rem vellautem faccus   et aut lam
                            incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest
                            optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do
                            outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata
                            da relação entre arte e sustentabilidade, abordando os impactos da crescente
                            mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel
                            Hora examina o impacto das residências em seu entorno; Grant H. Kester, da
                            Universidade da califórnia em san Diego, analisa a colaboração da arte com
                            subculturas sociais e políticas;</p>
                            <p>----</p>
                            <p class="nomargin servico">de 6 de outubro a 6 de dezembro de 2015<br />
                            Sesc Pompeia | Rua Clélia, 93, Pompeia<br />
                            Visitação: ter-sáb: das 9h às 22h | dom/feriados: das 9h às 20h</p>
                            <p class="vejamais"><a href="expo_sesc.html">Veja+</a></p>
                        </div>

                        <div id="sm-expo-comochegar" style="display:none">
                            <p class="texto-submenu"><strong>COMO CHEGAR</strong><br>A debis aut
                            et aut prem venderfero everum expliquam rem vellautem faccus   et aut lam
                            incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest
                            optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do
                            outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata
                            da relação entre arte e sustentabilidade, abordando os impactos da crescente
                            mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel
                            Hora examina o impacto das residências em seu entorno; Grant H. Kester, da
                            Universidade da califórnia em san Diego, analisa a colaboração da arte com
                            subculturas sociais e políticas;</p>
                            <p>----</p>
                            <p class="nomargin servico">de 6 de outubro a 6 de dezembro de 2015<br />
                            Sesc Pompeia | Rua Clélia, 93, Pompeia<br />
                            Visitação: ter-sáb: das 9h às 22h | dom/feriados: das 9h às 20h</p>
                            <p class="vejamais"><a href="expo_sesc.html">Veja+</a></p>                        
                        </div>
                    </div>
        			
        			<div id="menuprincipal2" class="fonteMenu"><img src="img/botoes/zona_1.png"></div> 
        			<div id="texto2a" class="texto" style="display:none; margin:10px;"><p style="padding-right: 50px">
        					
        					A debis aut et aut prem venderfero everum expliquam rem vellautem faccus
        					et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata da relação entre arte e sustentabilidade, abordando os impactos da crescente mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel Hora examina o impacto das residências em seu entorno; Grant H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo modis corum vit, sunt et laborro iur reperibusa dollesto blab et aut prem venderfero everum expliquam rem vellautem faccus et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, ad
        					H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração
        					da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo.<span>Veja+</span>
        				</p></div>
        			
        			<div id="menuprincipal3" class="fonteMenu"><img src="img/botoes/premios_1.png"></div> 
        			<div id="texto3a" class="texto" style="display:none; margin:10px;"><p style="padding-right: 50px">
        					
        					A debis aut et aut prem venderfero everum expliquam rem vellautem faccus
        					et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata da relação entre arte e sustentabilidade, abordando os impactos da crescente mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel Hora examina o impacto das residências em seu entorno; Grant H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo modis corum vit, sunt et laborro iur reperibusa dollesto blab et aut prem venderfero everum expliquam rem vellautem faccus et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, ad
        					H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração
        					da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo.
        				</p></div>
        			
        			<div id="menuprincipal4" class="fonteMenu"><img src="img/botoes/publicacoes_1.png"></div> 
        			<div id="texto4a" class="texto" style="display:none; margin:10px;"><p style="padding-right: 50px">
        					
        					A debis aut et aut prem venderfero everum expliquam rem vellautem faccus
        					et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata da relação entre arte e sustentabilidade, abordando os impactos da crescente mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel Hora examina o impacto das residências em seu entorno; Grant H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo modis corum vit, sunt et laborro iur reperibusa dollesto blab et aut prem venderfero everum expliquam rem vellautem faccus et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, ad
        					H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração
        					da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo.
        				</p></div>
        			
        			<div id="menuprincipal5" class="fonteMenu"><img src="img/botoes/agenda_1.png"></div> 
        			<div id="texto5a" class="texto" style="display:none; margin:10px;"><p style="padding-right: 50px">
        					
        					A debis aut et aut prem venderfero everum expliquam rem vellautem faccus
        					et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata da relação entre arte e sustentabilidade, abordando os impactos da crescente mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel Hora examina o impacto das residências em seu entorno; Grant H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo modis corum vit, sunt et laborro iur reperibusa dollesto blab et aut prem venderfero everum expliquam rem vellautem faccus et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, ad
        					H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração
        					da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo.
        				</p></div>
        			
        			<div id="menuprincipal6" class="fonteMenu"><img src="img/botoes/sobre_1.png"></div> 
        			<div id="texto6a" class="texto" style="display:none; margin:10px;"><p style="padding-right: 50px">
        					
        					A debis aut et aut prem venderfero everum expliquam rem vellautem faccus
        					et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata da relação entre arte e sustentabilidade, abordando os impactos da crescente mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel Hora examina o impacto das residências em seu entorno; Grant H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo modis corum vit, sunt et laborro iur reperibusa dollesto blab et aut prem venderfero everum expliquam rem vellautem faccus et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, ad
        					H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração
        					da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo.
        				</p></div>
        			
        			<div id="menuprincipal7" class="fonteMenu"><img src="img/botoes/saibamais_1.png"></div> 
        			<div id="texto7a" class="texto" style="display:none; margin:10px;"><p style="padding-right: 50px">
        					
        					A debis aut et aut prem venderfero everum expliquam rem vellautem faccus
        					et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, adcias e intercâmbios, as trocas com o entorno, a percepção do outro, improvisos e gambiarras. A publicação com curadoria de Helio Hara trata da relação entre arte e sustentabilidade, abordando os impactos da crescente mobilidade no cenário artístico atual. Entre os destaques, o jornalista Daniel Hora examina o impacto das residências em seu entorno; Grant H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo modis corum vit, sunt et laborro iur reperibusa dollesto blab et aut prem venderfero everum expliquam rem vellautem faccus et aut lam incieni mposant, totaquam aut aut harupti delescia intis int, nonsed elest optaectur, ad
        					H. Kester, da Universidade da califórnia em san Diego, analisa a colaboração
        					da arte com subculturas sociais e políticas; e Hans Dieleman, da Universidade Erasmus, em Roterdã, mostra que, apesar de nem sempre reconhecida, a sustentabilidade está presente há décadas em práticas artísticas.Aborestia iur, tet arionsequiscor magnim velliquo.
        				</p></div>
        		</div>
        		
        	</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

