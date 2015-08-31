<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

?>

<script>
        $(document).ready(
            function(){
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
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">Videobrasil: Três Décadas De Vídeo, Arte, Encontros E Transformações</span>',

                             '<span class="titulo">VIDEOBRASIL: THREE DECADES OF VIDEO, ART, ENCOUNTERS, AND TRANSFORMATIONS</span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/publicacoes/vb30.png" class="img-responsive" style="margin-bottom: 15px" />

                    <p style="margin-top: 25px; margin-bottom: 25px;"><?php pten(
                    'Edições Sesc-SP e Associação Cultural Videobrasil<br />
                    2014-15, 352 páginas<br />
                    português/inglês<br />
                    ISBN 978-85-7995-180-0<br />
                    largura: 18,5cm, altura: 23,5cm, lombada: 23cm x 2,5cm</p>',

                    'Edições Sesc-SP and Associação Cultural Videobrasil<br />
                    2014-15, 352 pages<br />
                    Portuguese/English<br />
                    ISBN 978-85-7995-180-0<br />
                    width: 18.5cm, height: 23.5cm, spine: 23cm x 2.5cm</p>'); ?>

                    <p><input type="button" value="<?php pten('comprar', 'purchase'); ?>" /></p>

                    <!-- <p><?php pten('Disponível também nas lojas das unidades do Sesc São Paulo, Galpão_VB e livrarias', 
                                  'Also available in Sesc stores and ...'); ?></p> -->


                </div>     
                <div class="col-sm-12 col-md-6 publicacao g" style="float: right;">         
                <?php
                //Publicação 1 - PT
                pten('<p>A publicação revisita os conteúdos e mudanças que marcaram a trajetória de trinta anos do Videobrasil, transformando uma iniciativa local, voltada a fomentar e discutir o vídeo brasileiro dos anos 1980, em plataforma para a produção artística contemporânea do Sul geopolítico do mundo. Projetado desde o presente, esse olhar busca os artistas, as obras e as ideias que ajudaram a construir a identidade do Festival e ilumina os pontos de inflexão fundamentais de sua história, como a internacionalização e a abertura a todas as manifestações artísticas. Ao fazê-lo, acaba por alinhavar fragmentos de histórias maiores: a descoberta do vídeo como meio e matéria artística pelas vanguardas internacionais dos anos 1950-1960; as ideias que renovavam as produções audiovisual e artística brasileiras nos anos 1960 e 1970; a chegada dos formatos domésticos de vídeo ao Brasil, coincidindo com o desejo de renovação da linguagem e do espectro temático da televisão aberta, nos anos 1980; a absorção dos artistas que trabalham com vídeo pelo sistema da arte, dos anos 1990 em diante; e, mais recentemente, a descoberta da ferramenta por artistas não necessariamente associados a ela.</p>
                
                <br /><p style="display: inline"><span class="upper">ORGANIZAÇÃO</span> Teté Martinho e Solange O. Farkas</p><br />
                <p style="display: inline"><span class="upper">COLABORADORES</span> Eduardo de Jesus, Gabriel Priolli, Moacir dos Anjos, Paula Alzugaray</p><br />
                <p style="display: inline"><span class="upper">PROJETO GRÁFICO E DESIGN</span> Celso Longo + Daniel Trench</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Saiba+</p><br /> -->
                <br /><p><span class="bold upper">lançamento</span> | 08/OUT (quinta) | 19h30 | Galpão VB<br />*em ocasião da abertura do Galpão VB</p>',

                //Publicação 1 - EN
                '<p>This publication revisits the contents and changes in direction that marked Videobrasil’s thirty-year history, transforming a local initiative designed to foster and discuss 1980s Brazilian video into a platform for contemporary art production from the geopolitical South of the world. It looks back on the artists, artworks and ideas that helped build the Festival’s identity, shedding light on pivotal moments in its history, such as its internationalization and its embracing of all types of artistic expression. In doing so, it encompasses fragments from broader historical events: the discovery of video as an art material and medium by the international avant-gardes of the 1950s-1960s; the ideas that breathed new life into Brazilian audiovisual and art production of the 1960s and 1970s; the arrival of home video formats in Brazil, concurrent with the desire to renew the language and the thematic range of open television, in the 1980s; the incorporation of video artists by the art system, from the 1990s onward; and more recently, the discovery of video as a tool by artists not necessarily associated with it.</p>
                
                <br /><p style="display: inline"><span class="upper">ORGANIZED BY</span> Teté Martinho and Solange O. Farkas</p><br />
                <p style="display: inline"><span class="upper">COLLABORATORS</span> Eduardo de Jesus, Gabriel Priolli, Moacir dos Anjos, Paula Alzugaray</p><br />
                <p style="display: inline"><span class="upper">GRAPHIC CONCEPT AND DESIGN</span> Celso Longo + Daniel Trench</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Learn more</p><br /> -->
                <br /><p><span class="bold upper">Launch</span> | OCT/08 (thu) | 19h30 | Galpão VB<br />*on occasion of Galpão VB\'s opening</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /PUBLICAÇÃO 1 -->

            <!-- PUBLICAÇÃO 2 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0"> 
                        <a name="visita"></a><?php pten(
                            '<span class="titulo">CADERNO SESC_VIDEOBRASIL 11 | Alianças de Corpos Vulneráveis</span>',

                             '<span class="titulo">CADERNO SESC_VIDEOBRASIL 11 | Alliances of Vulnerable Bodies </span>'); ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/publicacoes/caderno11.png" class="img-responsive" style="margin-bottom: 15px" />    

                    <p style="margin-top: 25px; margin-bottom: 25px;"><?php pten(
                    'Edições Sesc-SP e Associação Cultural Videobrasil<br />
                    2015, 144 páginas<br />
                    português/inglês<br />
                    </p>',

                    'Edições Sesc-SP and Associação Cultural Videobrasil<br />
                    2015, 144 pages<br />
                    Portuguese/English<br />
                    </p>'); ?>

                    <p><input type="button" value="<?php pten('comprar', 'purchase'); ?>" /></p>

                    <!-- <p><?php pten('Disponível também nas lojas das unidades do Sesc São Paulo, Galpão_VB e livrarias', 
                                  'Also available in Sesc stores and ...'); ?></p> -->


                </div>     
                <div class="col-sm-12 col-md-6 publicacao g" style="float: right;">         
                <?php
                //Publicação 2 - PT
                pten('<p>Com curadoria do escritor e curador peruano Miguel Angel López, o 11ª Caderno Sesc_Videobrasil se propõe observar como o feminismo, o ativismo gay, a pós-pornografia e outras formas de resposta crítica a partir do corpo estão transformando os discursos da história da arte e a gramática da arte em si. A publicação mescla ensaios teóricos e propostas visuais que revisitam iniciativas queer na arte ou propõem novas visões da história da arte à luz dessas respostas críticas. Apresentado por Angel Lopez na 31a Bienal de São Paulo, o Museo Travesti del Perú, de Giuseppe Campuzano, ganha formato impresso na publicação.</p>
                
                <br /><p style="display: inline"><span class="upper">Curador</span> Miguel A. López</p><br />
                <p style="display: inline"><span class="upper">COLABORADORES</span> Fernanda Nogueira, Catherine Lord, Paul Preciado, Aimar Arriola, Las Serigrafistas Queer, CUDS, Julia Bryan-Wilson, Ming Wong</p><br />
                <p style="display: inline"><span class="upper">PROJETO GRÁFICO E DESIGN</span> Luciana Facchini</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Saiba+</p><br /> -->
                <br /><p><span class="bold upper">lançamento</span> | 25/NOV (quarta) | 20h | Sesc Pompeia | Teatro<br />
                *evento de lançamento inclui a performance <em>Fancy em Pyetà segundo ato</em>, de Fancy Violence (Rodolpho Parigi) e mesa de abertura com Miguel Lopez (curador da publicação), Julia Bryan-Wilson (colaboradora) e Teté Martinho (coordenadora editorial do Videobrasil)</p>',

                //Publicação 2 - EN
                '<p>Curated by the Peruvian writer and curator Miguel Angel López, the 11th Caderno Sesc_Videobrasil looks at how feminism, gay activism, post-pornography and other body-based critical reactions are transforming the discourses of art history and the grammar of art itself. The publication features theoretical essays and visual propositions that revisit queer art initiatives or put forth new views of art history in the light of these critical responses. Presented by Angel Lopez during the 31st São Paulo Art Biennial, Giuseppe Campuzano’s Museo Travesti del Perú is featured in printed format on this volume.</p>
                
                <br /><p style="display: inline"><span class="upper">curator</span> Miguel A. López</p><br />
                <p style="display: inline"><span class="upper">COLLABORATORS</span> Fernanda Nogueira, Catherine Lord, Paul Preciado, Aimar Arriola, Las Serigrafistas Queer, CUDS, Julia Bryan-Wilson, Ming Wong</p><br />
                <p style="display: inline"><span class="upper">GRAPHIC CONCEPT AND DESIGN</span> Luciana Facchini</p><br />
                <!-- <p style="text-align: right; font-size: 1.1em" class="bold upper">Learn more</p><br /> -->
                <br /><p><span class="bold upper">Launch</span> | NOV/25 (wed) | 20h | Sesc Pompeia | Theater<br />*the event includes the performance <em>Fancy em Pyetà segundo ato</em>, by Fancy Violence (Rodolpho Parigi), and a talk with Miguel Lopez (the publication\'s curator), Julia Bryan-Wilson (collaborator), and Teté Martinho (Videobrasil\'s editorial coordinator)</p>');  ?> 
                </div> 
            </div>

            
           

            <!-- /PUBLICAÇÃO 2 -->