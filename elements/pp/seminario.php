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

                            case 'mesa1': $(window).scrollTo('#mesa1', 200); break;
                            case 'mesa2': $(window).scrollTo('#mesa2', 200); break;
                            case 'mesa3': $(window).scrollTo('#mesa3', 200); break;
                            case 'mesa4': $(window).scrollTo('#mesa4', 200); break;


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


<!-- SOBRE -->

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <a name="ppsobre"></a><img src="img/pp/seminario-sobre<?php pten('-pt.png','-en.jpg');?>" class="img-responsive" style="margin-bottom: 15px" />    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //SOBRE - PT
                pten('<p>O Seminário <em>Lugares e sentidos na arte: debates a partir do Sul</em>, com curadoria e mediação de Sabrina Moura, busca expandir questões centrais trazidas pelas exposições que compõem o 19º Festival de Arte Contemporânea Sesc_Videobrasil. Em diálogo com o programa de estudos Observatório do Sul, iniciado em maio de 2015 em parceria com o Goethe-Institut, o seminário discutirá a expansão da arte como campo produtor de conhecimento. Com a proposta de repensar suas tradições,  espaços de circulação, narrativas e histórias, dialogaremos com pensadores, escritores e artistas em quatro encontros ao longo do mês de outubro.</p>',

                //SOBRE - EN
                '<p>The Seminar <em>Places and meanings in art: debates from the South</em>, with curation and mediation from Sabrina Moura, looks to expand on key issues raised by the shows that make up the 19th Contemporary Art Festival Sesc_Videobrasil. In connection with the Southern Observatory study program, initiated in May 2015 in partnership with the Goethe-Institut, the seminar will discuss the expansion of art as a knowledge production field. Over the course of four meetings in October, we will engage in dialogue with thinkers, writers and artists to rethink their traditions, spaces of circulation, narratives, and histories.</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /SOBRE -->

            <!-- EVENTO 1 -->

            <div class="row" ><a id="mesa1"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp1"></a>
                        <?php pten('<span class="titulo">mesa 1 | repensar tradições: arte, gesto e contemporaneidade</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">07/out (quarta) | das 11h às 13h30 | sesc pompeia | teatro</span>',

                                   '<span class="titulo">panel 1 | RETHINKING TRADITIONS: ART, GESTURE AND CONTEMPORANEITY</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">oct/07 (wed) | 11-13h30 | sesc pompeia | theater</span>');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/seminario-mesa1_1.jpg" class="img-responsive" style="margin-bottom: 15px" />    

                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Abdoulaye Konaté </span><?php pten(
                        '(Mali) é artista visual. Premiado na Dak’Art Biennale de 1996, participou da documenta 12 (2007)  e expôs no Centre Georges Pompidou (Paris) e no Mori Art Museu (Tóquio). Há dez anos, dirige o Conservatoire des Arts et Métiers Multimédia em Bamako.',
                        '(Mali) visual artist. He is an award winner at the 1996 Dak’Art Biennale, took part in documenta 12 (2007), and has held shows at Centre Georges Pompidou (Paris) and Mori Art Museum (Tokyo). He has been director of the Conservatoire des Arts et Métiers Multimédia in Bamako for the last ten years.'); ?></p>
                    <p><span class="bold">Júlia Rebouças </span><?php pten(
                        '(Brasil) integra a comissão curadora do 19º Festival.',
                        '(Brasil) is a member of the 19th Festival curatorial committee.'); ?></p>
                    <p><span class="bold">N’Goné Fall </span><?php pten(
                        '(Senegal) é curadora e crítica. Foi curadora-convidada da Bienal de Dacar de 2002.',
                        '(Senegal) is a curator and a critic. She served as guest curator for the 2002 Dakar Biennale.'); ?></p>
                    <p><span class="bold">Roy Dib </span><?php pten(
                        '(Líbano) É artista visual e crítico de arte. Concluiu mestrado em estudos teatrais e performance pela Lebanese University, Beirute, Líbano, em 2004. Atua com filme, vídeo e videoinstalação.',
                        '(Lebanon) Visual artist and art critic. He completed a master’s degree in Theater and Performance Studies from the Lebanese University in Beirut, Lebanon, 2004. Dib works with film, video and video installation.'); ?></p>  
                    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 1 - PT
                pten('<p>A noção de arte contemporânea responde a um sistema específico, respaldado por práticas, atores e instituições determinados. Ao longo do século 20, com a “desmaterialização” da obra de arte, novas linguagens passam a coexistir com objetos artísticos de naturezas diversas, muitos associados a tradições do passado. Em meio às múltiplas temporalidades partilhadas pelo presente, qual o sentido de uma suposta ideia de superação? Se o contemporâneo abrange, sobretudo, o agora, como repensar e alargar as categorias da arte?
                    </p>
                    <p>Retirada de ingressos 1h antes no próprio local. <span class="bold">Vagas limitadas.</span></p>
                
                <span class="bold">Saiba mais</span><br />
                 - <a href="http://site.videobrasil.org.br/news/1906645" class="link" target="_blank">leia o texto de cobertura da mesa</a><br />
                 - <a href="https://www.flickr.com/photos/videobrasil/sets/72157657317956814" class="link" target="_blank">veja fotos do encontro</a>',

                //Evento 1 - EN
                '<p>The notion of contemporary art responds to a specific system, underpinned by certain practices, players, and institutions. As the 20th century progressed, with the “dematerialization” of the artwork, new languages began to coexist with art objects of various natures, many of them associated with past traditions. Amid the multiple temporalities shared by the present, what is the meaning of a supposed idea of transcendence? If the contemporary primarily encompasses the present moment, how does one rethink and broaden the categories of art?
                </p>

                <p>Collect your ticket 1h before the activity at Sesc Pompeia.<br /><span class="bold">Seats are limited</span>.</p>
                
                <span class="bold">Learn more:</span><br />
                 - <a href="http://site.videobrasil.org.br/en/news/1906645" class="link" target="_blank">read the panel\'s news coverage</a><br />
                 - <a href="https://www.flickr.com/photos/videobrasil/sets/72157657317956814" class="link" target="_blank">photo album</a>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 1 -->

            <!-- EVENTO 2 -->

            <div class="row" ><a id="mesa2"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp2"></a>
                        <?php pten('<span class="titulo">mesa 2 | Repensar espaços: Arte, usos e cotidiano</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">10/out (sábado) | das 14h às 16h30 | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">*com lançamento do livro <em>Panoramas do Sul | Leituras | Perspectivas para outras geografias do pensamento</em></span>',

                                   '<span class="titulo">panel 2 | RETHINKING SPACES: ART, USES AND DAILY LIFE</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">oct/10 (sat) | 14-16h30 | sesc pompeia | theater</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">*followed by the launch of the book <em>Southern Panoramas | Readings | Perspectives for other geographies of thought</em>.</span>');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/seminario-mesa2_1.jpg" class="img-responsive" style="margin-bottom: 15px" />    


                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Berhanu Ashagrie Deribew </span><?php pten(
                        '(Etiópia) é artista e diretor da Escola de Belas-Artes e Design da Universidade de Adis Abeba',
                        '(Ethiopia) is an artist and the director of the Fine Arts and Design School at Addis Abeba University.'); ?></p>
                    <p><span class="bold">Hoor Al-Qasimi </span><?php pten(
                        '(Sharjah) é artista e presidente da Sharjah Art Foundation, responsável pela Bienal de Sharjah.',
                        '(Sharjah) is an artist and chair of Sharjah Art Foundation, which is responsible for the Sharjah Biennial. '); ?></p>
                    <p><span class="bold">Keli Safia-Maksud </span><?php pten(
                        '(Quênia) é artista. Agencia objetos e emblemas comuns ao imaginário criado a partir das conturbadas relações históricas entre Europa e África, desvelando clichês subjacentes à concepção de africanidade.',
                        '(Kenya) is an artist. She agencies objects and emblems common to the imagery spawned by the tumultuous historical ties between Europe and Africa, unveiling clichés that underlie the conception of Africanity.'); ?></p> 
                        <p><span class="bold">Till Fellrath </span><?php pten(
                        '(Alemanha) é curador e cofundador, com Sam Bardaouil (Líbano), da plataforma curatorial multidisciplinar Art Reoriented.',
                        '(Germany) is a curator and has established, along with fellow curator Sam Bardaouil (Lebanon), the Art Reoriented multidisciplinar curatorial platform.'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 2 - PT
                pten('<p>Fora dos espaços institucionais, a arte adentra o cotidiano e interfere na forma de perceber o mundo. Para além de práticas educativas formatadas, a criação artística converte-se em um poderoso instrumento de produção de sentidos, conhecimento e pensamento crítico. Quais lugares a arte ocupa hoje? Quais usos a obra de arte nos sugere? Após o encontro, será lançado o livro <em>Panoramas do Sul | Leituras | Perspectivas para outras geografias do pensamento</em>.
                    </p>
                    <p>Retirada de ingressos 1h antes no próprio local. <span class="bold">Vagas limitadas</span>.</p>
                <span class="bold">Saiba mais</span><br />
                 - <a href="http://site.videobrasil.org.br/news/1906856" class="link" target="_blank">leia o texto de cobertura da mesa</a><br />
                 - <a href="https://www.flickr.com/photos/videobrasil/albums/72157659854955615" class="link" target="_blank">veja fotos do encontro</a>',

                //Evento 2 - EN
                '<p>Outside institutional spaces, art seeps into daily life and interferes with how people perceive the world. Artistic creation transcends formatted educational practices to become a powerful tool for production of meaning, knowledge, and critical thinking. What places does art occupy today? What uses does the artwork suggest to us? The meeting will be followed by the launch of the book <em>Southern Panoramas | Readings | Perspectives for other geographies of thought</em>.
                    </p>
                    <p>Collect your ticket 1h before the activity at Sesc Pompeia.<br /><span class="bold">Seats are limited</span>.</p>
                <span class="bold">Learn more:</span><br />
                 - <a href="http://site.videobrasil.org.br/en/news/1906856" class="link" target="_blank">read the panel\'s news coverage</a><br />
                 - <a href="https://www.flickr.com/photos/videobrasil/albums/72157659854955615" class="link" target="_blank">photo album');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 2 -->

            <!-- EVENTO 3 -->

            <div class="row" ><a id="mesa3"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp2"></a>
                        <?php pten('<span class="titulo">mesa 3 | Repensar Narrativas: Arte, Memória e Ficção</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">22/out (quinta) | das 14h às 16h | sesc pompeia | teatro</span>',

                                   '<span class="titulo">panel 3 | RETHINKING NARRATIVES: ART, MEMORY AND FICTION</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">oct/22 (thu) | 14-16h | sesc pompeia | theater</span>');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/seminario-narrativas<?php pten('-pt.png','-en.jpg');?>" class="img-responsive" style="margin-bottom: 15px" />    

                    
                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Andrea Giunta </span><?php pten(
                        '(Argentina) é curadora e professora de arte latino-americana na Universidade de Buenos Aires e na Universidade de Austin, no Texas.',
                        '(Argentina) is a curator and a Latin American art professor at the University of Buenos Aires and the University of Austin, Texas.'); ?></p>
                    <p><span class="bold">Júlio Pimentel </span><?php pten(
                        '(Brasil) é livre docente em história social pela Universidade de São Paulo.',
                        '(Brazil) is an associate professor of social history at the University of São Paulo.'); ?></p>
                    <p><span class="bold">Tânia Rivera </span><?php pten(
                        '(Brasil) é ensaísta, psicanalista e professora do Departamento de Arte da Universidade Federal Fluminense.',
                        '(Brazil) is an essayist, a psychoanalyst and a professor at the Art Department of the Fluminense Federal University. '); ?></p> 
                    <p><span class="bold">Ting-Ting Cheng </span><?php pten(
                        '(Taiwan) é artista. Trabalha com vídeo, fotografia e instalação. Sua obra discute as relações entre texto, imagem e língua, e de que forma configuram noções de identidade, pertencimento e cultura. ',
                        '(Taiwan) artist. She works with video, photography and installation. Her work discusses the intersections of text, image and language and how they configure notions of identity, belonging and culture.'); ?></p>
                    <p><span class="bold">Gabriel Abrantes </span><?php pten(
                        '(Portugal) é cineasta, artista visual e professor, atuante entre o cinema, a instalação e a pintura.',
                        '(Portugal) filmmaker, visual artist and professor active in filmmaking, installation and painting.'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 3 - PT
                pten('<p>Aberta a múltiplas interpretações e percepções, a ficção permite extrapolar a linearidade narrativa em direção a outras lógicas sensoriais. A dimensão ficcional da literatura libera o narrador para outras maneiras de contar histórias e elaborar trajetórias pessoais ou coletivas. A mesa discute a criação que, destituída de prova ou documento, busca cruzamentos de palavras e imagens que permitam escapar de um mundo reduzido ao visível e entrar no campo da imaginação.
                    </p>
                    <p>Retirada de ingressos 1h antes no próprio local. <span class="bold">Vagas limitadas</span>.</p>
                <!--<p><span class="bold">Saiba mais</span><br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>-->',

                //Evento 3 - EN
                '<p>Being open to multiple interpretations and perceptions, fiction enables narrative linearity to be replaced with other sensory logics. The fictional dimension of literature liberates the narrator for other forms of storytelling and to elaborate personal or collective trajectories. The panel discusses creative works which, devoid of any proof or documentation, look for word and image junctures that allow an escape from a world reduced to what is visible and into the realm of imagination.
                    </p>
                    <p>Collect your ticket 1h before the activity at Sesc Pompeia.<br /><span class="bold">Seats are limited</span>.</p>
                <!--<p><span class="bold">Learn more</span><br />
                 - statements<br />
                 - news<br />
                 - photos</p>-->');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 3 -->

            <!-- EVENTO 4 -->

            <div class="row" ><a id="mesa4"></a>
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp2"></a>
                        <?php pten('<span class="titulo">mesa 4 | Repensar O Tempo: Arte, Silêncios E Histórias</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">29/out (quinta) | das 14h às 16h | sesc pompeia | teatro</span>',

                                   '<span class="titulo">panel 4 | RETHINKING TIME: ART, SILENCES AND HISTORIES</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">oct/29 (thu) | 14-16h | sesc pompeia | theater</span>');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/seminario-tempo<?php pten('-pt.png','-en.jpg');?>" class="img-responsive" style="margin-bottom: 15px" />    

                    
                    <p><span style="text-transform: uppercase"><?php pten('Participantes', 'Participants'); ?></span></p>
                    <p><span class="bold">Gerardo Mosquera </span><?php pten(
                        '(Cuba) é crítico e curador. Foi cofundador da Bienal de Havana e curador do New Museum de Nova York.',
                        '(Cuba) is a critic and a curator. He was the co-founder of the Havana Biennial and the curator of New York’s New Museum. '); ?></p>
                    <p><span class="bold">Karol Radziszewski </span><?php pten(
                        '(Polônia) é artista, curador e publisher da revista DIK Fagazine.',
                        '(Poland) is an artist, curator and the publisher of magazine DIK Fagazine.'); ?></p>
                    <p><span class="bold">Ntone Edjabe </span><?php pten(
                        '(Camarões) é jornalista e DJ. Criou e edita a plataforma curatorial e editorial Chimurenga.',
                        '(Cameroon) is a journalist and a DJ. He is the creator and editor of curatorial/editorial platform Chimurenga.'); ?></p> 
                    <p><span class="bold">Dor Guez </span><?php pten(
                        '(Israel) é artista visual, diretor do departamento de fotografia da Bezalel Academy of Arts and Design, Jerusalém, Israel, professor e pesquisador associado à Tel Aviv University, Faculty of the Arts, no mesmo país.',
                        '(Israel) a visual artist, he is the director of the Photography Department at the Bezalel Academy of Arts and Design, Jerusalem, Israel, and an associate professor and researcher at the Faculty of the Arts of Tel Aviv University, in the same country.'); ?></p>
                    <p><span class="bold">Cristiano Lenhardt </span><?php pten(
                        '(Brasil) é artista. Seus trabalhos questionam os limites da realidade comumente aceitos, confrontando-os criticamente com outras possibilidades de existência.',
                        '(Brazil) is an artist. His work questions the commonly accepted boundaries of reality, critically confronting them with other possibilities of existence.'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 4 - PT
                pten('<p>Imersa em contexturas marcadas pelos dilemas da história, a esfera da arte exprime inevitavelmente as relações que formam o tecido social. Seus discursos, silêncios ou denúncias revelam as tensões entre aquilo que desejamos lembrar ou esquecer. O encontro debate práticas de pensadores e artistas que buscam desestabilizar (ou reiterar) as forças políticas limitadoras dos campos da história e da memória.
                    </p>
                    <p>Retirada de ingressos 1h antes no próprio local. <span class="bold">Vagas limitadas</span>.</p>
                <!--<p><span class="bold">Saiba mais</span><br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>-->',

                //Evento 4 - EN
                '<p>Immersed in contexts marked by history’s dilemmas, the art sphere inevitably expresses the relationships that inform the social fabric. Its discourses, silences, or denouncements reveal the tensions between what we wish to remember or to forget. The meeting will discuss the practices of thinkers and artists who look to destabilize (or reiterate) the limiting political forces of history and memory.
                    </p>
                    <p>Collect your ticket 1h before the activity at Sesc Pompeia.<br /><span class="bold">Seats are limited</span>.</p>
                <!--<p><span class="bold">Learn more</span><br />
                 - statements<br />
                 - news<br />
                 - photos</p>-->');  ?> 
                </div> 
            </div>

           

            <!-- /EVENTO 4 -->
            <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                  ga('create', 'UA-33383260-2', 'auto');
                  ga('send', 'pageview');
            </script>