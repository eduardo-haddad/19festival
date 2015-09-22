<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

?>
<script src="../js/jquery.scrollTo.min.js"></script>
<script>
    
                paletaArtistas($('.titulo'));
                paletaArtistas($('.pp-sobre p'));
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


<!-- SOBRE -->

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <a name="ppsobre"></a><img src="img/pp/mediacao-sobre<?php pten('-pt.png','-en.png');?>" class="img-responsive" style="margin-bottom: 15px" />    
                </div>     
                <div class="col-sm-12 col-md-6 pp-sobre a" style="float: right;">         
                <?php
                //SOBRE - PT
                pten('<p>As Ações de Mediação do 19º Festival, realizadas pelo coletivo Zebra5 Jogo e Arte, são pautadas no estímulo à autonomia criativa dos visitantes, na valorização da voz do público e, principalmente, na construção coletiva de conhecimento. Ao público espontâneo os educadores destinam atendimento individual ou em grupo, visitas temáticas pelas exposições, conversas e ações criativas, além de oficinas aos finais de semana.</p>

                      <p>No Sesc Pompeia, os educadores recebem grupos de visitantes (mediante agendamento) para roteiros de cerca de 1h30, definidos a partir do perfil específico do grupo e de seus interesses, contextos e questionamentos. O período de visitação para grupos é de terça a sábado. O agendamento de visitas para grupos pode ser feito de terça a sexta-feira, das 10h às 18h, na Central de Atendimento (tel.: 55 11 3871 7780) ou pelo e-mail agendamento@pompeia.sescsp.org.br.</p>
                      
                      <p>No Galpão VB, visitas podem ser agendadas de 13 de outubro a 4 de Dezembro, de segunda a sexta-feira, pelo e-mail agendamento@videobrasil.org.br.</p>
                      
                      <p>No Paço das Artes, as visitas podem ser agendadas por e-mail (educativo@pacodasartes.org.br) ou telefone (55 11 3814 4832).</p>',

                //SOBRE - EN
                     '<p>The 19th Festival’s Mediation Actions, performed by the Zebra5 Jogo e Arte collective, are geared towards encouraging creative autonomy in visitors, empowering the voice of the public and, most of all, building knowledge collectively. The educators will welcome walk-in visitors one-on-one or in groups, guiding them on themed tours of the exhibitions, conversations and creative actions, as well as weekend workshops.</p>

                      <p>The educators will take visitor groups on tours (upon prior scheduling) lasting approximately an hour and a half, tailored after each group’s specific profile and interests, contexts and inquiries. Group visits are available from Tuesdays to Saturdays, and may be scheduled from Tuesdays to Fridays from 10am to 6pm with Customer Service (tel.: 55 11 3871 7780) or by email: agendamento@pompeia.sescsp.org.br</p>
                       
                      <p>Visits to Galpão VB may be scheduled from October 13 to December 4, from Mondays to Fridays, by email at agendamento@videobrasil.org.br.</p>
                       
                      <p>Visits to Paço das Artes may be scheduled by email (educativo@pacodasartes.org.br) or telephone (55 11 3814 4832).</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /SOBRE -->

            <!-- EVENTO 4 -->

           <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp4"></a>
                        <?php pten('<span class="titulo">construção compartilhada de vocabulário</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">de 10/out a 06/dez (sábados, domingos e feriados) | 15h | Sesc Pompeia | Convivência</span>',

                                   '<span class="titulo">SHARED VOCABULARY BUILDING</span><br />
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
                '<p>Through playful interaction, a list is made of a few structural concepts for the artwork sets featured in the shows, and the participants come up with definitions for them. The meetings work with the sample audience’s speech to collect ideas, definitions and questions regarding the Festival’s major sections, and these will provide the raw material for building a repertoire of vocabulary that’s based on the encounter with the artworks and prompts reflection about them. 
                    </p>
                    <p><span class="bold">How to participate</span> registration is free and will be available onsite at 2:30pm with the exhibition’s educators. <span class="bold">Seats are limited</span>.</p>');  ?> 
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

           

            <!-- /EVENTO 5 -->
            <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                  ga('create', 'UA-33383260-2', 'auto');
                  ga('send', 'pageview');
            </script>