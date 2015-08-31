<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

?>

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
                    <a name="ppsobre"></a><img src="img/pp/seminario-sobre2.png" class="img-responsive" style="margin-bottom: 15px" />    
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //SOBRE - PT
                pten('<p>Em quatro encontros ao longo de outubro, o seminário discute a arte como campo produtor de conhecimento, a partir de questões trazidas pelas exposições do Festival. Pensadores, escritores e artistas repensam tradições, espaços de circulação, narrativas e histórias.</p>',

                //SOBRE - EN
                '<p>In four meetings in October, the seminar will discuss art as a knowledge production field, based on issues raised by the Festival’s exhibitions. Scholars, writers, and artists will rethink traditions, sharing spaces, narratives, and stories.</p>');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /SOBRE -->

            <!-- EVENTO 1 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp1"></a>
                        <?php pten('<span class="titulo">mesa 1 | repensar tradições: arte, gesto e contemporaneidade</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">07/out (quarta) | das 11h às 13h30 | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span>',

                                   '<span class="titulo">panel 1 | RETHINKING TRADITIONS: ART, GESTURE AND CONTEMPORANEITY</span><br />
                                    <span class="upper bold data-pp" style="font-size: 1.1em">oct/07 (wed) | 11-13h30 | sesc pompeia | theater</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[simultaneous translation]</span>');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/seminario-artegesto.png" class="img-responsive" style="margin-bottom: 15px" />    

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
                    <p><span class="bold">Yto Barrada </span><?php pten(
                        '(França) estudou história e ciências políticas na Sorbonne (Paris) e fotografia no International Center of Photography (Nova York). Sua produção já foi exibida na Tate Modern (Londres), no MoMA (Nova York) e em duas edições da Bienal de Veneza.',
                        '(France) studied history and political science at the Sorbonne (Paris) and photography at the International Center of Photography (New York). She has exhibited at the Tate Modern (London), MoMA (New York),  and at two editions of the Venice Biennale.'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 1 - PT
                pten('<p>A noção de arte contemporânea responde a um sistema específico, respaldado por práticas, atores e instituições determinados. Ao longo do século 20, com a “desmaterialização” da obra de arte, novas linguagens passam a coexistir com objetos artísticos de naturezas diversas, muitos associados a tradições do passado. Em meio às múltiplas temporalidades partilhadas pelo presente, qual o sentido de uma suposta ideia de superação? Se o contemporâneo abrange, sobretudo, o agora, como repensar e alargar as categorias da arte?
                    </p>
                    <p><span class="bold">Para participar</span> envie nome, e-mail e ocupação para o e-mail seminario@19festival.org.br até o dia 4.10. <span class="bold">Vagas limitadas.</span></p>
                
                <!--<span class="bold">Saiba mais</span><br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>-->',

                //Evento 1 - EN
                '<p>The notion of contemporary art responds to a specific system, underpinned by certain practices, players, and institutions. As the 20th century progressed, with the “dematerialization” of the artwork, new languages began to coexist with art objects of various natures, many of them associated with past traditions. Amid the multiple temporalities shared by the present, what is the meaning of a supposed idea of transcendence? If the contemporary primarily encompasses the present moment, how does one rethink and broaden the categories of art?
                </p>

                <p><span class="bold">How to participate</span> send your name, email address and occupation to seminario@19festival.org.br by Oct 4. <span class="bold">Seats are limited</span>.</p>
                
                <!--<span class="bold">Learn more</span><br />
                 - statements<br />
                 - news<br />
                 - photos</p>-->');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 1 -->

            <!-- EVENTO 2 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp2"></a>
                        <?php pten('<span class="titulo">mesa 2 | Repensar espaços: Arte, usos e cotidiano</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">10/out (sábado) | das 14h às 16h30 | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">*com lançamento do livro <em>Panoramas do Sul | Leituras | Perspectivas para outras geografias do pensamento</em></span>',

                                   '<span class="titulo">panel 2 | RETHINKING SPACES: ART, USES AND DAILY LIFE</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">oct/10 (sat) | 14-16h30 | sesc pompeia | theater</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[simultaneous translation]</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">*followed by the launch of the book <em>Southern Panoramas | Readings | Perspectives for other geographies of thought</em>.</span>');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/seminario-repensar.png" class="img-responsive" style="margin-bottom: 15px" />    


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
                        <p><span class="bold">Sam Bardaouil </span><?php pten(
                        '(Líbano) é curador. Junto a Till Fellrath (Suíça) fundou a plataforma curatorial multidisciplinar Art Reoriented.',
                        '(Lebanon) is a curator. Alongside Till Fellrath (Switzerland) established the Art Reoriented multidisciplinary curatorial platform.'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 2 - PT
                pten('<p>Fora dos espaços institucionais, a arte adentra o cotidiano e interfere na forma de perceber o mundo. Para além de práticas educativas formatadas, a criação artística converte-se em um poderoso instrumento de produção de sentidos, conhecimento e pensamento crítico. Quais lugares a arte ocupa hoje? Quais usos a obra de arte nos sugere? Após o encontro, será lançado o livro <em>Panoramas do Sul | Leituras | Perspectivas para outras geografias do pensamento</em>.
                    </p>
                    <p><span class="bold">Para participar</span> envie nome, e-mail e ocupação para o e-mail seminario@19festival.org.br até o dia 6.10. <span class="bold">Vagas limitadas</span>.</p>
                <!--<p><span class="bold">Saiba mais</span><br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>-->',

                //Evento 2 - EN
                '<p>Outside institutional spaces, art seeps into daily life and interferes with how people perceive the world. Artistic creation transcends formatted educational practices to become a powerful tool for production of meaning, knowledge, and critical thinking. What places does art occupy today? What uses does the artwork suggest to us? The meeting will be followed by the launch of the book <em>Southern Panoramas | Readings | Perspectives for other geographies of thought</em>.
                    </p>
                    <p><span class="bold">How to participate</span> send your name, email address and occupation to seminario@19festival.org.br by Oct 6. <span class="bold">Seats are limited</span>.</p>
                <!--<p><span class="bold">Learn more</span><br />
                 - statements<br />
                 - news<br />
                 - photos</p>-->');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 2 -->

            <!-- EVENTO 3 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp2"></a>
                        <?php pten('<span class="titulo">mesa 3 | Repensar Narrativas: Arte, Memória e Ficção</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">22/out (quinta) | das 14h às 16h | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span>',

                                   '<span class="titulo">panel 3 | RETHINKING NARRATIVES: ART, MEMORY AND FICTION</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">oct/22 (thu) | 14-16h | sesc pompeia | theater</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[simultaneous translation]</span>');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/seminario-narrativas.png" class="img-responsive" style="margin-bottom: 15px" />    

                    
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
                pten('<p>Aberta a múltiplas interpretações e percepções, a ficção permite extrapolar a linearidade narrativa em direção a outras lógicas. A dimensão ficcional da literatura libera o narrador para outras maneiras de contar histórias. A mesa discute a criação que, destituída de prova ou documento, busca cruzamentos de palavras e imagens que permitam escapar de um mundo reduzido ao visível.
                    </p>
                    <p><span class="bold">Para participar</span> envie nome, e-mail e ocupação para o e-mail seminario@19festival.org.br até o dia 19.10. <span class="bold">Vagas limitadas</span>.</p>
                <!--<p><span class="bold">Saiba mais</span><br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>-->',

                //Evento 3 - EN
                '<p>Being open to multiple interpretations and perceptions, fiction allows the extrapolation of narrative linearity to other logics. The fictional dimension of literature allows the narrator to explore other forms of storytelling. The panel will discuss creations which, devoid of proof or document, seek to cross-reference words and images that allow an escape from a world reduced only to what’s visible.
                    </p>
                    <p><span class="bold">How to participate</span> send your name, email address and occupation to seminario@19festival.org.br by Oct 19. <span class="bold">Seats are limited</span>.</p>
                <!--<p><span class="bold">Learn more</span><br />
                 - statements<br />
                 - news<br />
                 - photos</p>-->');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 3 -->

            <!-- EVENTO 4 -->

            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 28px">
                    <p style="margin-bottom:0" class="titulo-pp"> 
                        <a name="pp2"></a>
                        <?php pten('<span class="titulo">mesa 4 | Repensar O Tempo: Arte, Silêncios E Histórias</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">29/out (quinta) | das 14h às 16h | sesc pompeia | teatro</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[tradução simultânea]</span>',

                                   '<span class="titulo">panel 4 | RETHINKING TIME: ART, SILENCES AND HISTORIES</span><br />
                                    <span class="upper data-pp bold" style="font-size: 1.1em">oct/29 (thu) | 14-16h | sesc pompeia | theater</span><br />
                                    <span class="upper data-pp" style="font-size: 1.1em">[simultaneous translation]</span>');?>

                    </p>
                </div>

            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6 pp-participantes" style="float: left ">
                    <img src="img/pp/seminario-tempo.png" class="img-responsive" style="margin-bottom: 15px" />    

                    
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
                        '(Portugal) artist. His work questions the commonly accepted boundaries of reality, critically confronting them with other possibilities of existence.'); ?></p>
                </div>     
                <div class="col-sm-12 col-md-6 pp-encontro a" style="float: right;">         
                <?php
                //Evento 4 - PT
                pten('<p>Imersa em contexturas marcadas pelos dilemas da história, a esfera da arte exprime inevitavelmente as relações que formam o tecido social. Seus discursos, silêncios ou denúncias revelam as tensões entre aquilo que desejamos lembrar ou esquecer. O encontro debate práticas de pensadores e artistas que buscam desestabilizar (ou reiterar) as forças políticas limitadoras dos campos da história e da memória.
                    </p>
                    <p><span class="bold">Para participar</span> envie nome, e-mail e ocupação para o e-mail seminario@19festival.org.br até o dia 26.10. <span class="bold">Vagas limitadas</span>.</p>
                <!--<p><span class="bold">Saiba mais</span><br />
                 - relatos<br />
                 - notícias<br />
                 - fotos</p>-->',

                //Evento 4 - EN
                '<p>Immersed in contexts marked by history’s dilemmas, the art sphere inevitably expresses the relationships that inform the social fabric. Its discourses, silences, or denouncements reveal the tensions between what we wish to remember or to forget. The meeting will discuss the practices of thinkers and artists who look to destabilize (or reiterate) the limiting political forces of history and memory.
                    </p>
                    <p><span class="bold">How to participate</span> send your name, email address and occupation to seminario@19festival.org.br by Oct 26. <span class="bold">Seats are limited</span>.</p>
                <!--<p><span class="bold">Learn more</span><br />
                 - statements<br />
                 - news<br />
                 - photos</p>-->');  ?> 
                </div> 
            </div>

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           

            <!-- /EVENTO 4 -->