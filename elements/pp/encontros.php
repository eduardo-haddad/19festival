<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

?>
<script src="../js/jquery.scrollTo.min.js"></script>
<script>
    $(document).ready(
        function(){


            var readyStateCheckInterval = setInterval(function() {
          if (document.readyState === "complete") {
            clearInterval(readyStateCheckInterval);
            

                var hash = window.location.hash.split('#')[1];
                var slash = hash.split('/')[1];

                if(hash) {

                    switch(slash) {

                        case 'rodrigo': $(window).scrollTo('#rodrigo', 200); break;
                        case 'tilting': $(window).scrollTo('#tilting', 200); break;
                        case 'rede': $(window).scrollTo('#rede', 200); break;
                        case 'portfolios': $(window).scrollTo('#portfolios', 200); break;
                        case 'paralela': $(window).scrollTo('#paralela', 200); break;
                        case 'cad11': $(window).scrollTo('#cad11', 200); break;

                    }
                }




            }
          }, 10); 
                  
                    
        }
    );

</script>


<script>
    
                paletaArtistas($('.titulo'));
                paletaArtistas($('.pp-encontro p:nth-child(1)'));
                paletaArtistas($('.pp-encontro p:nth-child(2)'));
                paletaArtistas($('.pp-encontro p:nth-child(3)'));
                paletaArtistas($('.pp-encontro p:nth-child(4)'));
                paletaArtistas($('.pp-participantes p:nth-child(1)'));
                paletaArtistas($('.pp-participantes p:nth-child(2)'));
                paletaArtistas($('.pp-participantes p:nth-child(3)'));
                paletaArtistas($('.pp-participantes p:nth-child(4)'));
                paletaArtistas($('.pp-participantes p:nth-child(5)'));
                paletaArtistas($('.pp-participantes p:nth-child(6)'));
                paletaArtistas($('.pp-participantes p:nth-child(7)'));
                paletaArtistas($('.pp-participantes p:nth-child(8)'));
                paletaArtistas($('.pp-participantes p:nth-child(9)'));
                paletaArtistas($('.pp-participantes p:nth-child(10)'));
                paletaArtistas($('.pp-participantes p:nth-child(11)'));
                paletaArtistas($('.data-pp'));



            
</script>

<!-- EVENTO 1 -->
<!--
            <div class="row" ><a id="rodrigo"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">VISITA COM RODRIGO MATHEUS</span>&nbsp;<span class="highlight upper bold">&nbsp;ação&nbsp;educativa&nbsp;</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">07/out (quarta) | 13h45 | sesc pompeia | galpão</span>',

                             '<span class="titulo">TOUR WITH RODRIGO MATHEUS</span>&nbsp;<span class="highlight upper bold">&nbsp;educational&nbsp;action&nbsp;</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">oct/07 (wed) | 13h45 | sesc pompeia | galpão</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-rodrigo<?php pten('-pt.png','-en.jpg');?>" class="img-responsive" style="margin-bottom: 15px" />    

                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Rodrigo Matheus </span><?php pten(
                        '(Brasil) bacharel em artes pela Universidade de São Paulo (São Paulo) e mestre em escultura pelo Royal College of Art (Londres). Fez mostras individuais na Fundação Manuel Antônio da Mota (Porto, 2013), no Museu de Arte da Pampulha (Belo Horizonte, 2004) e no Cen- tro Cultural São Paulo (2004), entre outras.',
                        '(Brazil) holds a degree in art from the University of São Paulo (São Paulo) and a master’s degree in sculpture from the Royal College of Art (London). He has held solo exhibitions at the Fundação Manuel Antônio da Mota (Porto, 2013), Museu de Arte da Pampulha (Belo Horizonte, 2004), and Centro Cultural São Paulo (2004), among others.'); ?></p>
                    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 1 - PT
                pten('<p>Rodrigo Matheus, um dos artistas convidados do 19º Festival, apresenta seu trabalho <em>Mauser & Cia</em>, única obra <em>site-specific</em> realizada para o evento.</p>',

                //Evento 1 - EN
                '<p>Rodrigo Matheus, one of the 19th Festival guest artists, presents his work <em>Mauser & Cia</em>, the only site-specific piece created for the event.</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           -->

            <!-- /EVENTO 1 -->


            <!-- EVENTO 2 -->

            <div class="row"><a id="tilting"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">Tilting Axis 1.5</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">08/out (quinta) | das 11h às 12h30 | sesc pompeia | teatro</span>',

                             '<span class="titulo">Tilting Axis 1.5</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">oct/08 (thu) | 11am-12:30pm | sesc pompeia | theater</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-tilting_1.jpg" class="img-responsive" style="margin-bottom: 15px" />    

                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Annalee Davis </span><?php pten(
                        '(Barbados) é artista e codiretora da plataforma de arte contemporânea Fresh Milk.',
                        '(Barbados) is an artist and a co-director of the Fresh Milk contemporary art platform.'); ?>
                    </p>
                    <p><span class="bold">Holly Bynoe </span><?php pten(
                        '(São Vicente e Granadinas) é ensaísta e curadora-chefe da National Art Gallery das Bahamas.',
                        '(Saint Vincent and the Grenadines) is an essayist and the chief curator of the Bahamas National Art Gallery.'); ?>
                    </p>
                    <p><span class="bold">Mario Caro </span><?php pten(
                        '(Colômbia) é pesquisador, curador e crítico de arte contemporânea. Preside a rede de residências artísticas Res Artis.',
                        '(Colombia) is a contemporary art researcher, curator and critic. He chairs the Res Artis artist residency network.'); ?>
                    </p>
                    <p><span class="bold">María Elena Ortiz </span><?php pten(
                        '(Porto Rico) é curadora-assistente no Pérez Art Museum de Miami.',
                        '(Puerto Rico) is an assistant curator at the Pérez Art Museum in Miami.'); ?>
                    </p>
                    <p><span class="bold">N’Goné Fall </span><?php pten(
                        '(Senegal) é curadora e crítica. Foi curadora-convidada da Bienal de Dacar de 2002.',
                        '(Senegal) is a curator and a critic. She served as guest curator for the 2002 Dakar Biennale.'); ?>
                    </p>
                    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 2 - PT
                pten('<p>
                O 19º Festival recebe a plataforma de discussão Tilting Axis, voltada a promover maior proximidade e articulação entre profissionais que trabalham em iniciativas e instituições geridas por artistas na região caribenha, além de construir e redefinir relações históricas com o Norte e estabelecer diálogo com redes fortes que emergem no Sul global. Recém-fundada, em Barbados, a plataforma apresenta suas propostas e metodologia.
                </p>
                <span class="bold">Saiba mais</span><br />
                 - <a href="http://site.videobrasil.org.br/news/1906700" class="link" target="_blank">leia o texto de cobertura do encontro</a><br />
                 - <a href="https://www.flickr.com/photos/videobrasil/albums/72157659656781331" class="link" target="_blank">veja fotos do encontro</a>',

                //Evento 2 - EN
                '<p>The 19th Festival will feature Tilting Axis, a discussion platform for professionals from artist-managed initiatives and institutions in the Caribbean to promote contact and network, as well as build and redefine their historical ties with the North, and converse with strong up-and-coming networks from the global South. The proposals and methodology of the platform, which was recently established in Barbados, will be outlined.
                </p>
                <span class="bold">Learn more:</span><br />
                 - <a href="http://site.videobrasil.org.br/news/1906700" class="link" target="_blank">read the event\'s news coverage</a><br />
                 - <a href="https://www.flickr.com/photos/videobrasil/albums/72157659656781331" class="link" target="_blank">photo album</a>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 2 -->

            <!-- EVENTO 3 -->

            <div class="row" ><a id="rede"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">Encontro com Rede de Residências</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">09/out (sexta) | das 17h às 18h30 | galpão vb</span>',

                             '<span class="titulo">MEETING WITH RESIDENCY NETWORK PARTNERS</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">oct/09 (fri) | 5pm-6:30pm | galpão vb</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/fotos/17-residencias.jpg" class="img-responsive" style="margin-bottom: 15px" />    

                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">A-I-R Laboratory </span><?php pten('(Polônia)','(Poland)'); ?></p>
                    <p><span class="bold">Arquetopia </span><?php pten('(México)','(Mexico)'); ?></p>
                    <p><span class="bold">Delfina Foundation </span><?php pten('(Reino Unido)','(United Kingdom)'); ?></p>
                    <p><span class="bold">Djerassi Resident Artists Program </span><?php pten('(EUA)','(USA)'); ?></p>
                    <p><span class="bold">Kooshk Residency </span><?php pten('(Irã)','(Iran)'); ?></p>
                    <p><span class="bold">Kyoto Art Center </span><?php pten('(Japão)','(Japan)'); ?></p>
                    <p><span class="bold">Red Gate Residency </span><?php pten('(China)','(China)'); ?></p>
                    <p><span class="bold"><?php pten('Residência Vila Sul','Residence Vila Sul - Goethe-Institut'); ?> </span><?php pten('(Brasil)','(Brazil)'); ?></p>
                    <p><span class="bold">Wexner Center for the Arts </span><?php pten('(EUA)','(USA)'); ?></p>
                    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 3 - PT
                pten('<p>Representantes das residências artísticas parceiras do 19º Festival se colocam à disposição para conversar com o público sobre seus programas.</p>',

                //Evento 3 - EN
                '<p>Delegates from partner artist residencies of the 19th Festival will be available to talk to the public about their programs.</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 3 -->

            <!-- EVENTO 4 -->

            <div class="row" ><a id="portfolios"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="leitura"></a><?php pten(
                            '<span class="titulo">LEITURAS DE PORTFÓLIOS</span>&nbsp;<span class="highlight upper bold">&nbsp;ação&nbsp;educativa&nbsp;</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">04/nov (quarta) e 05/nov (quinta) | das 13h às 16h | galpão vb</span>',

                             '<span class="titulo">READING OF PORTFOLIOS</span>&nbsp;<span class="highlight upper bold">&nbsp;educational&nbsp;action&nbsp;</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">nov/04 (wed) and nov/05 (thu) | 1pm-4pm | galpão vb</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-portfolios<?php pten('-pt.png','-en.jpg');?>" class="img-responsive" style="margin-bottom: 15px" />    


                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Clara Ianni </span><?php pten(
                        '(Brasil) é artista visual, bacharel em artes visuais pela Universidade de São Paulo, 2010, e mestre em Visual and Media Anthropology pela Freie Universität, Berlim, Alemanha, 2013.',
                        '(Brazil) is a visual artist. She completed a baccalaureate degree in Visual Arts from the University of São Paulo in 2010, and a master’s degree in Visual and Media Anthropology from Freie Universität in Berlin, 2013.'); ?></p>
                    <p><span class="bold">Débora Bolsoni </span><?php pten(
                        '(Brasil) é artista visual, mestre em poéticas visuais pela Escola de Comunicação e Artes da Universidade de São Paulo, 2014.',
                        '(Brazil) a visual artist, she holds a master’s degree in Visual Poetics from the School of Communication and Arts of the University of São Paulo, 2014.'); ?></p>
                    <p><span class="bold">Felipe Bittencourt </span><?php pten(
                        '(Brasil) é ator e artista visual, bacharel em Artes Visuais pelo Centro Universitário Belas Artes de São Paulo, 2007, com especialização em Fotografia pela Escola Panamericana de Arte e Design, 2010.',
                        '(Brazil) an actor and visual artist, he holds a baccalaureate degree in Visual Arts from Centro Universitário Belas Artes in São Paulo, 2007, with a major in Photography from Escola Panamericana de Arte e Design, 2010.'); ?></p> 
                    <p><span class="bold">Rodolpho Parigi </span><?php pten(
                        '(Brasil) é artista visual, bacharel em artes plásticas pela FAAP, São Paulo. Desenvolve trabalhos com desenho, pintura, instalação e performance.',
                        '(Brazil) visual artist, he completed a baccalaureate in Fine Arts from FAAP, São Paulo. Produces works with drawing, painting, installation, and performance.'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 4 - PT
                pten('<p>Alguns dos artistas selecionados para o Festival recebem artistas previamente inscritos para compartilhar sua própria pesquisa e trajetória. Em grupo, os convidados refletem sobre o processo, linguagem e pesquisas dos artistas inscritos.</p>
                        <p><span class="bold">Para participar:</span> artistas interessados devem enviar portfólio (em pdf), entre os dias 6/OUT e 23/OUT, para o e-mail portfolio@zebra5.com.br.<br /> 
                        <span class="bold">Para assistir:</span> Retirada de senha 1h antes no próprio local.<span class="bold"> Vagas limitadas.</span></p>',

                //Evento 4 - EN
                       '<p>Artists selected for the 19th Festival will share their research and career stories, and read portfolios from previous entrants.</p>
                        <p><span class="bold">How to participate:</span> interested artists must email a portfolio (in PDF), between October 6 and 23, to portfolio@zebra5.com.br.<br /> 
                        <span class="bold">How to attend:</span> collect your ticket one hour before the activity at Galpão VB</p>
                        <p><span class="bold">Seats are limited.</span></p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 4 -->

            <!-- EVENTO 5 -->

            <div class="row" ><a id="paralela"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="leitura"></a><?php pten(
                            '<span class="titulo">visitas à exposição <em>quem nasce pra aventura não toma outro rumo – obras do acervo videobrasil</em></span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">14/nov (sáb) e 09/jan (sáb) | 16h | paço das artes</span>',

                             '<span class="titulo"><em>those born for adventure don’t stray from the path</em> exhibition tours</span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">nov/14 (sat) and jan/09 (sat) | 4pm | paço das artes</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-curadoria<?php pten('-pt.png','-en.jpg');?>" class="img-responsive" style="margin-bottom: 15px" />    


                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Diego Matos </span><?php pten(
                        '(Brasil) é coordenador de Arquivo e Pesquisa do Videobrasil e curador da exposição <em>Quem Nasce Pra Aventura Não Toma Outro Rumo – Obras Do Acervo Videobrasil</em>.',
                        '(Brazil) is Videobrasil\'s archive and research coordinator and curator of the parallel exhibition <em>Those Born For Adventure Don’t Stray From The Path – Artworks from Videobrasil Collection</em>'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 5 - PT
                pten('<p><span class="bold">Roteiro 1: Brasil, São Paulo – um lugar para a partida</span><br><span>14/nov, 16h, Paço das Artes</span><br /></p>
                      <p><span class="bold">Roteiro 2: O vídeo na arena política da arte</span><br />09/jan, 16h, Paço das Artes</p>
                      <p><span class="bold">Para participar:</span> Inscrições pelo email educativo@pacodasartes.org.br ou pelo telefone 11 3814-4832<span class="bold"> Vagas limitadas.</span></p>',

                //Evento 5 - EN
                      '<p><span class="bold">Itinerary 1: Brazil, São Paulo – a place for departure.</span><br />Nov/14, 16h, Paço das Artes</p>
                      <p><span class="bold">Itinerary 2: Video in the political arena of art</span><br />Jan/09, 16h, Paço das Artes</p>
                      <p><span class="bold">How to participate:</span> send an email to educativo@pacodasartes.org.br or call 11 3814-4832<span class="bold"> Vagas limitadas.</span></p>');  ?> 
                </div> 
            </div>

            <!-- <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div> -->
           

            <!-- /EVENTO 5 -->

            <!-- EVENTO 6 -->

            <!-- <div class="row" ><a id="cad11"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="leitura"></a><?php pten(
                            '<span class="titulo">Mesa de lançamento do <em>Caderno SESC_VIDEOBRASIL 11: Aliança de corpos vulneráveis</em></span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">25/nov (quarta) | 20h | sesc pompeia | teatro</span>',

                             '<span class="titulo">Launch of <em>Caderno SESC_VIDEOBRASIL 11: an alliance of vulnerable bodies</em></span><br />
                             <span class="upper bold data-pp" style="font-size: 1.1em">nov/25 (wed) | 20h | sesc pompeia | theater</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/encontros-caderno11<?php pten('-pt.png','-en.png');?>" class="img-responsive" style="margin-bottom: 15px" />    


                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Miguel Angel Lopez  </span><?php pten(
                    '(Peru) é curador e diretor artístico do Teor/éti- ca, espaço de arte contemporânea em San José, Costa Rica.',
                    '(Peru) is the curator and art director of Teor/ética, a contemporary art facility in San José, Costa Rica.'); ?></p>
                    <p><span class="bold">Julia Bryan-Wilson   </span><?php pten(
                    '(EUA) é professora associada de Arte Moderna e Contemporânea na Universidade da Califórnia (Berkeley). Crítica de arte, publicou amplamente sobre feminismo e questões queer.',
                    '(USA) is associate professor of modern and contemporary art at the University of California (Berkeley). She has published widely on feminist and queer issues.'); ?></p>
                    <p><span class="bold">Teté Martinho   </span><?php pten(
                    '(Brasil) é jornalista e coordenadora de publicações da Associação Cultural Videobrasil.',
                    '(Brazil) is a journalist and the publications coordinator for Associação Cultural Videobrasil.'); ?></p>
                    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 6 - PT
                pten('<p>Com edição do curador peruano Miguel Angel Lopez, o novo número da revista anual de arte contemporânea Caderno Sesc_Videobrasil observa como o feminismo e o ativismo queer, entre outras formas de contestação crítica fundadas no corpo, estão transformando os discursos tradicionais da história da arte. Na mesa de lançamento, o editor e a pesquisadora norte-americana Julia Bryan-Wilson discutem a relação entre arte e teoria do feminismo. </p>',

                //Evento 6 - EN
                       '<p>Edited by the Peruvian curator Miguel Angel López, the new edition of the annual contemporary art magazine Caderno Sesc_Videobrasil will look into how feminism and queer activism, among other forms of body-orient- ed critical contestation, are transforming traditional art history discourses. During the launch panel, the editor and the American researcher Julia Bry- an-Wilson will discuss the relationship between art and feminist theory. </p>');  ?> 
                </div> 
            </div>            -->

            <!-- /EVENTO 6 -->
            <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                  ga('create', 'UA-33383260-2', 'auto');
                  ga('send', 'pageview');
            </script>