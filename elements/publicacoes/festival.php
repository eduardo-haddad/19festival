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

                            case 'leituras': $(window).scrollTo('#leituras', 500); break;
                            case 'convidados': $(window).scrollTo('#convidados', 500); break;
                            case 'selecionados': $(window).scrollTo('#selecionados', 500); break;

                        }
                    }




                    }
              }, 10); 
                    
                    
        }
    );

    </script>
<script>
        $(document).ready(
            function(){

                $('input[type="button"]').hide();

                paletaArtistas($('.titulo'));
                paletaArtistas($('.publicacao p:nth-child(1)'));
                paletaArtistas($('.publicacao p:nth-child(2)'));
                paletaArtistas($('.publicacao p:nth-child(3)'));
                paletaArtistas($('.publicacao p:nth-child(4)'));
                paletaArtistas($('.publicacao p:nth-child(5)'));
                paletaArtistas($('.publicacao p:nth-child(6)'));
                paletaArtistas($('.publicacao p:nth-child(7)'));
                paletaArtistas($('.publicacao p:nth-child(8)'));
                paletaArtistas($('.pp-participantes p:nth-child(1)'));
                paletaArtistas($('.pp-participantes p:nth-child(2)'));
                paletaArtistas($('.pp-participantes p:nth-child(3)'));
                paletaArtistas($('.pp-participantes p:nth-child(4)'));
                paletaArtistas($('.pp-participantes p:nth-child(5)'));
                paletaArtistas($('.pp-participantes p:nth-child(6)'));
                paletaArtistas($('.data-pp'));
        
            }
        );
    </script>

            <!-- PUBLICAÇÃO 1 -->

            <div class="row" ><a id="leituras"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">PANORAMAS DO SUL | LEITURAS | PERSPECTIVAS PARA OUTRAS GEOGRAFIAS DO PENSAMENTO </span>',

                            '<span class="titulo">SOUTHERN PANORAMAS | READINGS | PERSPECTIVES FOR OTHER GEOGRAPHIES OF THOUGHT </span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/publicacoes/leituras.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p style="margin-top: 25px; margin-bottom: 25px;"><?php pten(
                    'Edições Sesc São Paulo e Associação Cultural Videobrasil<br />
                    2015, 288 páginas<br />
                    português/inglês<br />
                    largura: 15,5cm, altura: 21cm</p>',

                    'Edições Sesc São Paulo and Associação Cultural Videobrasil<br />
                    2015, 288 pages<br />
                    Portuguese/English<br />
                    width: 15.5cm, height: 21cm</p>'); ?>

                    <p><input type="button" value="<?php pten('comprar', 'purchase'); ?>" /></p>

                    <p><?php pten('Em breve disponível em livrarias, nas unidades do Sesc SP, no Galpão VB | Associação Cultural Videobrasil e pela internet em <a href="http://sescsp.org.br/livraria" class="link">www.sescsp.org.br/livraria</a>.', 
                                  'Soon available in bookstores, at Sesc SP units, at Galpão VB | Associação Cultural Videobrasil and online at <a href="http://sescsp.org.br/livraria" class="link">www.sescsp.org.br/livraria</a>.'); ?>
                    </p>


                </div>     
                <div class="col-sm-12 col-md-6 publicacao g" style="float: right;">         
                <?php
                //Publicação 1 - PT
                pten('<p>Reúne ensaios e manifestos artísticos que apresentam, defendem ou questionam o conceito de Sul geopolítico, que aproxima regiões marcadas por contextos históricos, sociais e culturais assemelhados. Por meio do aporte de teóricos e de exemplos de práticas artísticas e culturais contemporâneas, põe em pauta as ideias que questionam representações e narrativas eurocêntricas. </p>
                
                <br /><p style="display: inline"><span class="upper">ORGANIZAÇÃO</span> Sabrina Moura</p><br />
                <p style="display: inline"><span class="upper">COLABORADORES</span> Milton Santos, José Rabasa, Arjun Appadurai, Jean e John Comaroff, Joaquín Torres García, Organization of African Unity, Artur Barrio, Cildo Meireles, Rasheed Araeen, Rede Conceitualismos do Sul, Moacir dos Anjos, Anthony Gardner, Charles Green, Geeta Kapur, Néstor García Canclini, Achille Mbembe, Sasha Huber, Petri Saarikko e Maria Helena Machado, Ana Longoni</p><br />
                <p style="display: inline"><span class="upper">PROJETO GRÁFICO</span> Ângela Detânico e Rafael Lain</p><br />
                <p style="display: inline"><span class="upper">DESIGN</span> Carla Castilho, Lia Assumpção | Janela Estúdio</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Saiba+</p><br /> -->
                <br /><p><span class="bold upper">lançamento</span> | 10/OUT (sábado) | 16h30 | Sesc <br>Pompeia | Teatro<br />
                *em ocasião da 2ª mesa do seminário <em><a href="/pp.php#seminario" class="link">LUGARES E SENTIDOS DA ARTE: Tradições, Espaços, Tempos e Narrativas ao Sul</a></em></p>',

                //Publicação 1 - EN
                '<p>This volume features essays and art manifestos that introduce, champion or challenge the notion of a geopolitical South, comprising regions with shared historical, social, and cultural backgrounds. With input from theoreticians and examples of contemporary artistic and cultural practices, it discusses ideas that question Eurocentric representations and narratives. </p>
                
                <br /><p style="display: inline"><span class="upper">ORGANIZED BY</span> Sabrina Moura</p><br />
                <p style="display: inline"><span class="upper">COLLABORATORS</span> Milton Santos, José Rabasa, Arjun Appadurai, Jean and John Comaroff, Joaquín Torres García, Organization of African Unity, Artur Barrio, Cildo Meireles, Rasheed Araeen, Rede Conceitualismos do Sul, Moacir dos Anjos, Anthony Gardner, Charles Green, Geeta Kapur, Néstor García Canclini, Achille Mbembe, Sasha Huber, Petri Saariko and Maria Helena Machado, Ana Longoni</p><br />
                <p style="display: inline"><span class="upper">GRAPHIC CONCEPT</span> Ângela Detânico & Rafael Lain</p><br />
                <p style="display: inline"><span class="upper">DESIGN</span> Carla Castilho, Lia Assumpção | Janela Estúdio</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Learn more</p><br /> -->
                <br /><p><span class="bold upper">Launch</span> | OCT/10 (sat) | 16h30 | Sesc Pompeia | Theater<br />
                *on occasion of the 2nd panel of the seminar <em><a href="/pp.php#seminario" class="link">PLACES AND MEANINGS IN ART: Debates from the South</a></em></p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /PUBLICAÇÃO 1 -->

            <!-- PUBLICAÇÃO 2 -->

            <div class="row" ><a id="convidados"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">PANORAMAS DO SUL | ARTISTAS CONVIDADOS</span>',

                            '<span class="titulo">SOUTHERN PANORAMAS | GUEST ARTISTS</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/publicacoes/convidados.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p style="margin-top: 25px; margin-bottom: 25px;"><?php pten(
                    'Edições Sesc São Paulo e Associação Cultural Videobrasil<br />
                    2015, 144 páginas<br />
                    português/inglês<br />
                    largura: 24cm, altura: 33cm</p>',

                    'Edições Sesc São Paulo and Associação Cultural Videobrasil<br />
                    2015, 144 pages<br />
                    Portuguese/English<br />
                    width: 24cm, height: 33cm</p>'); ?>

                    <p><input type="button" value="<?php pten('comprar', 'purchase'); ?>" /></p>

                    <p><?php pten('Em breve disponível em livrarias, nas unidades do Sesc SP, no Galpão VB | Associação Cultural Videobrasil e pela internet em <a href="http://sescsp.org.br/livraria" class="link">www.sescsp.org.br/livraria</a>.', 
                                  'Soon available in bookstores, at Sesc SP units, at Galpão VB | Associação Cultural Videobrasil and online at <a href="http://sescsp.org.br/livraria" class="link">www.sescsp.org.br/livraria</a>.'); ?>
                    </p>


                </div>     
                <div class="col-sm-12 col-md-6 publicacao g" style="float: right;">         
                <?php
                //Publicação 2 - PT
                pten('<p>Reúne referências sobre a obra e o pensamento de Abdoulaye Konaté (Mali), Gabriel Abrantes (Portugal), Rodrigo Matheus (Brasil), Sônia Gomes (Brasil) e Yto Barrada (Marrocos/França), os artistas reunidos pela mostra <span class="bold">Panoramas do Sul | Artistas Convidados</span>, que integra a programação do 19ª Festival de Arte Contemporânea Sesc_Videobrasil. Por meio de conversas entre os artistas e os curadores da exposição, apresenta a pesquisa de cada participante, as ideias por trás delas, a relação de cada um com o conceito de Sul geopolítico e os temas curatoriais que perpassam a exposição. Imagens de trabalhos significativos e informações biográficas iluminam a trajetória e o universo de cada um dos artistas convidados.</p>
                
                <br /><!-- <p style="display: inline"><span class="upper">ORGANIZAÇÃO</span> Sabrina Moura</p><br /> -->
                <p style="display: inline"><span class="upper">COLABORADORES</span> Solange O. Farkas, Bernardo de Souza, Bitu Cassundé, Julia Rebouças, João Laia</p><br />
                <p style="display: inline"><span class="upper">PROJETO GRÁFICO</span> Ângela Detânico e Rafael Lain</p><br />
                <p style="display: inline"><span class="upper">DESIGN</span> Carla Castilho, Lia Assumpção | Janela Estúdio</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Saiba+</p><br /> -->
                <br /><p><span class="bold upper">lançamento</span> | 10/OUT (sábado) | 16h30 | Sesc Pompeia | Foyer do Teatro</p>',

                //Publicação 2 - EN
                '<p>This publication contains references about the work and thoughts of Abdoulaye Konaté (Mali), Gabriel Abrantes (Portugal), Rodrigo Matheus (Brazil), Sônia Gomes (Brazil) and Yto Barrada (Morocco/France), the artists featured in the Southern Panoramas | Guest Artists exhibition, a part of the program of the 19th Contemporary Art Festival Sesc_Videobrasil. Conversations with the exhibition’s artists and curators outline the lines of inquiry of each of the participants, their underlying ideas, how each relates to the concept of a geopolitical South, and the curatorial themes at play in the show. Pictures from relevant artworks and biographical information shed light on the careers and universes of each of the guest artists. </p>
                
                <br /><!-- <p style="display: inline"><span class="upper">ORGANIZED BY</span> Sabrina Moura</p><br />-->
                <p style="display: inline"><span class="upper">COLLABORATORS</span> Solange O. Farkas, Bernardo de Souza, Bitu Cassundé, Julia Rebouças, João Laia</p><br />
                <p style="display: inline"><span class="upper">GRAPHIC CONCEPT</span> Ângela Detânico e Rafael Lain</p><br />
                <p style="display: inline"><span class="upper">DESIGN</span> Carla Castilho, Lia Assumpção | Janela Estúdio</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Learn more</p><br /> -->
                <br /><p><span class="bold upper">Launch</span> | OCT/10 (sat) | 16h30 | Sesc Pompeia | Theater\'s foyer</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /PUBLICAÇÃO 2 -->

            <!-- PUBLICAÇÃO 3 -->

            <div class="row" ><a id="selecionados"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">PANORAMAS DO SUL | ARTISTAS SELECIONADOS – OBRAS E PROJETOS comissionados</span>',

                            '<span class="titulo">SOUTHERN PANORAMAS | SELECTED ARTISTS – ARTWORKS AND comissioned PROJECTS</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/publicacoes/obras_projetos.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p style="margin-top: 25px; margin-bottom: 25px;"><?php pten(
                    'Edições Sesc São Paulo e Associação Cultural Videobrasil<br />
                    2015, 320 páginas<br />
                    português/inglês<br />
                    largura: 18cm, altura: 23cm</p>',

                    'Edições Sesc São Paulo and Associação Cultural Videobrasil<br />
                    2015, 320 pages<br />
                    Portuguese/English<br />
                    width: 18cm, height: 23cm</p>'); ?>

                    <p><input type="button" value="<?php pten('comprar', 'purchase'); ?>" /></p>

                    <p><?php pten('Em breve disponível em livrarias, nas unidades do Sesc SP, no Galpão VB | Associação Cultural Videobrasil e pela internet em <a href="http://sescsp.org.br/livraria" class="link">www.sescsp.org.br/livraria</a>.', 
                                  'Soon available in bookstores, at Sesc SP units, at Galpão VB | Associação Cultural Videobrasil and online at <a href="http://sescsp.org.br/livraria" class="link">www.sescsp.org.br/livraria</a>.'); ?>
                    </p>


                </div>     
                <div class="col-sm-12 col-md-6 publicacao g" style="float: right;">         
                <?php
                //Publicação 3 - PT
                pten('<p>A publicação cataloga as 60 obras e projetos que integram as exposições <span class="bold">Panoramas do Sul | Obras Selecionadas</span> e <span class="bold">Panoramas do Sul | Projetos Comissionados</span>, ambas parte do 19º Festival de Arte Contemporânea Sesc_Videobrasil. Os trabalhos foram escolhidos a partir de um conjunto de cerca de duas mil inscrições. Os curadores das exposições assinam resenhas-sinopses de cada obra e breves ensaios sobre os projetos, representadas também por imagens e croquis. Um caderno especial reúne vistas das duas exposições instaladas no Sesc Pompeia e no Galpão VB.</p>
                
                <br /><!-- <p style="display: inline"><span class="upper">ORGANIZAÇÃO</span> Sabrina Moura</p><br /> -->
                <p style="display: inline"><span class="upper">COLABORADORES</span> Solange O. Farkas, Bernardo de Souza, Bitu Cassundé, Julia Rebouças, João Laia</p><br />
                <p style="display: inline"><span class="upper">PROJETO GRÁFICO</span> Ângela Detânico e Rafael Lain</p><br />
                <p style="display: inline"><span class="upper">DESIGN</span> Carla Castilho, Lia Assumpção | Janela Estúdio</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Saiba+</p><br /> -->
                <br /><p><span class="bold upper">lançamento</span> | 25/NOV (quarta) | 20h | Sesc Pompeia | Teatro<br />*evento de lançamento inclui a performance <em>Fancy em Pyetà segundo ato</em>, de Rodolpho Parigi</p>',
                //Publicação 3 - EN
                '<p>This publication catalogs the 60 artworks and art projects featured in the Southern Panoramas | Selected Works and Southern Panoramas | Selected Projects exhibitions of the 19th Contemporary Art Festival Sesc_Videobrasil. The items were selected from a pool of roughly 2,000 entries. The show’s curators contribute reviews-summaries of each of the pieces, as well as short essays on the projects, interspersed with pictures and sketches. Includes a special insert containing views of the exhibitions at Sesc Pompeia and Galpão VB.</p>
                
                <br /><!-- <p style="display: inline"><span class="upper">ORGANIZED BY</span> Sabrina Moura</p><br />-->
                <p style="display: inline"><span class="upper">COLLABORATORS</span> Solange O. Farkas, Bernardo de Souza, Bitu Cassundé, Julia Rebouças, João Laia</p><br />
                <p style="display: inline"><span class="upper">GRAPHIC CONCEPT</span> Ângela Detânico e Rafael Lain</p><br />
                <p style="display: inline"><span class="upper">DESIGN</span> Carla Castilho, Lia Assumpção | Janela Estúdio</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Learn more</p><br /> -->
                <br /><p><span class="bold upper">Launch</span> | NOV/25 (wed) | 20h | Sesc Pompeia | Theater<br />*the event includes the performance <em>Fancy em Pyetà segundo ato</em>, by Rodolpho Parigi</p>');  ?> 
                </div> 
            </div>

            
           

            <!-- /PUBLICAÇÃO 3 -->
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
              ga('create', 'UA-33383260-2', 'auto');
              ga('send', 'pageview');
            </script> 