<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

?>


    <script>
        $(document).ready(
            function(){
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
                paletaArtistas($('.data-pp'));

        
            }
        );
    </script>




<!-- EVENTO 1 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp1"></a>
                        <?php pten('<span class="titulo">Memória Tecida: Monotipia Vista do Mali</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">08/out (quinta) e 10/out (sábado) | das 10h30 às 13h | sesc pompeia | Oficinas de Criatividade</span>',

                                   '<span class="titulo">WOVEN MEMORY: MONOTYPE SEEN FROM MALI</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">oct/08 (thu) and oct/10 (sat)| 10h30-13h | sesc pompeia | Oficinas de Criatividade</span><br />');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/oficinas-memoria-<?php pten('pt.png', 'en.png'); ?>" class="img-responsive" style="margin-bottom: 15px" />    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 1 - PT
                pten('<p>O artista malinês Abdoulaye Konaté conduz uma oficina de monotipia. A partir da prática do ateliê coletivo, o artista aproxima o público de sua poética e de linguagens artísticas tradicionais do Mali, seu local de origem.
                    </p>
                    <p><span class="bold">Para participar</span> é preciso ter mais de 12 anos. Inscrições gratuitas, no local, a partir do dia 3.10. <span class="bold">Vagas limitadas.</span>
                    </p>',

                //Evento 1 - EN
                '<p>The Malian artist Abdoulaye Konaté will lead a workshop on monotypes. Employing a collective studio practice, Konaté will introduce the public to his poetics and to traditional art languages from Mali, his native country.
                </p>

                <p><span class="bold">How to participate</span> participants must be 12 or older. Registration is free and will be available onsite from Oct 3. <span class="bold">Seats are limited</span>.</p>
                ');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 1 -->

            <!-- EVENTO 2 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp2"></a>
                        <?php pten('<span class="titulo">Vocabulário De Um Sul Existente: Invenção De Um Mundo A Partir De Lugares Inexistentes</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">09/out (sexta) | das 11h às 13h30 | Galpão VB</span>',

                                   '<span class="titulo">VOCABULARY OF AN EXISTING SOUTH: THE INVENTION OF A WORLD FROM INEXISTENT PLACES</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">oct/09 (fri) | 11-13h30 | Galpão VB</span><br />');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/oficinas-vocabularios-<?php pten('pt.png', 'en.png'); ?>" class="img-responsive" style="margin-bottom: 15px" />    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 2 - PT
                pten('<p>A partir do trabalho da artista Ting-Ting Cheng, que apresenta uma biblioteca sobre lugares inexistentes na exposição Panoramas do Sul | Projetos comissionados, o público explora livros, histórias e imagens para construir, coletivamente, um repertório conceitual e imagético em torno da ideia de um lugar do Sul. 
                    </p>
                    <p><span class="bold">Para participar</span> é preciso ter mais de 16 anos e inglês avançado. Inscrições gratuitas, a partir de 3.10, na Convivência Sesc Pompeia, com os mediadores da exposição. <span class="bold">Vagas limitadas.</span>
                    </p>',

                //Evento 2 - EN
                '<p>Through the work of the artist Ting-Ting Cheng, who will present a library of non-existent places in the Southern Panoramas | Commissioned projects exhibition, the public will explore books, stories, and images to build together a conceptual, imagistic repertoire about the place of the South.
                </p>

                <p><span class="bold">How to participate</span> participants must be 16 or older; advanced English skills required. Registration is free and begins on Oct 3 at Sesc Pompeia’s Convivência area, with the exhibition’s mediators. <span class="bold">Seats are limited</span>.</p>
                ');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 2 -->

            <!-- EVENTO 3 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp3"></a>
                        <?php pten('<span class="titulo">Lambada E O Corpo Social: O Corpo DA Memória E Vivência Com Dança</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">05/dez (sábado) | das 10h30 às 13h30 | Galpão VB</span>',

                                   '<span class="titulo">LAMBADA AND THE SOCIAL BODY: THE BODY OF MEMORY AND DANCE EXPERIENCE</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">dec/05 (sat) | 10h30-13h30 | Galpão VB</span><br />');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/oficinas-lambada-<?php pten('pt.png', 'en.png'); ?>" class="img-responsive" style="margin-bottom: 15px" />    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 3 - PT
                pten('<p>O artista Carlos Monroy propõe uma vivência que evoca elementos de memória e construção familiar a partir do corpo. A oficina gera reflexões sobre origem, mestiçagem cultural e construção folclórica, e termina em uma prática de dança.  
                    </p>
                    <p><span class="bold">Para participar</span> é preciso ter mais de 16 anos. Inscrições gratuitas, a partir do dia 3.11, no local ou na Convivência Sesc Pompeia, com os mediadores da exposição <span class="bold">Vagas limitadas.</span>
                    </p>',

                //Evento 3 - EN
                '<p>The artist Carlos Monroy proposes an experience that evokes elements of memory and family construction centered on the body. The workshop elicits reflections about origin, cultural miscegenation, and the building of folklore, and ends with a dance practice. 
                </p>

                <p><span class="bold">How to participate</span> participants must be 16 or older. Registration is free and will be available from Nov 3, onsite or at Sesc Pompeia’s Convivência area, with the exhibition’s mediators. <span class="bold">Seats are limited</span>.</p>
                ');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 3 -->

            <!-- EVENTO 4 -->

           <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp4"></a>
                        <?php pten('<span class="titulo">construção compartilhada de vocabulário</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">de 10/out a 06/dez (sábados, domingos e feriados) | 15h | Sesc Pompeia | Convivência</span>',

                                   '<span class="titulo">WORKSHOPS WITH THE EXHIBITIONS’ EDUCATORS</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">from Oct/10 to Dec/06 (Saturdays, Sundays and holidays) | 15h | Sesc Pompeia | Convivência</span><br />');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/oficinas-construcao-<?php pten('pt.png', 'en.png'); ?>" class="img-responsive" style="margin-bottom: 15px" />    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 4 - PT
                pten('<p>A partir de dinâmica lúdica, é feito um levantamento de alguns conceitos estruturais para o conjunto de obras da exposição e os participantes criam definições sobre estes. Os encontros buscam recolher, a partir da fala da amostra de público, ideias, definições e perguntas a respeito dos eixos centrais do festival, que servirão de matéria prima para a construção de um repertório de vocabulário que parta de e proponha reflexões a partir do encontro com as obras. 
                    </p>
                    <p><span class="bold">Para participar</span> inscrições gratuitas no local, às 14h30, com os educadores da exposição. <span class="bold">Vagas limitadas.</span>
                    </p>',

                //Evento 4 - EN
                '<p>The exhibitions’ mediators will coordinate workshops for children and adults, introducing dynamics that will explore the issues brought up by the 19th Festival. 
                </p>

                <p><span class="bold">How to participate</span> registration is free and will be available onsite at 2:30pm with the exhibition’s educators. <span class="bold">Seats are limited</span>.</p>
                ');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
            

            <!-- /EVENTO 4 -->

            <!-- EVENTO 5 -->

           <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp4"></a>
                        <?php pten('<span class="titulo">Oficinas Com OS Educadores das Exposições</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">de 10/out a 06/dez (sábados, domingos e feriados) | 15h | Sesc Pompeia | Convivência</span>',

                                   '<span class="titulo">WORKSHOPS WITH THE EXHIBITIONS’ EDUCATORS</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">from Oct/10 to Dec/06 (Saturdays, Sundays and holidays) | 15h | Sesc Pompeia | Convivência</span><br />');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/oficinas-educadores-<?php pten('pt.png', 'en.png'); ?>" class="img-responsive" style="margin-bottom: 15px" />    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 5 - PT
                pten('<p>Os mediadores das exposições coordenam oficinas para público infantil e adulto, trabalhando dinâmicas que aprofundam os assuntos tratados no 19º Festival.
                    </p>
                    <p><span class="bold">Para participar</span> inscrições gratuitas no local, às 14h30, com os educadores da exposição. <span class="bold">Vagas limitadas.</span>
                    </p>',

                //Evento 5 - EN
                '<p>The exhibitions’ mediators will coordinate workshops for children and adults, introducing dynamics that will explore the issues brought up by the 19th Festival. 
                </p>

                <p><span class="bold">How to participate</span> registration is free and will be available onsite at 2:30pm with the exhibition’s educators. <span class="bold">Seats are limited</span>.</p>
                ');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
            

            <!-- /EVENTO 5 -->