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

                      case 'prog1': $(window).scrollTo('#prog1', 200); break;
                      case 'prog2': $(window).scrollTo('#prog2', 200); break;
                      case 'prog3': $(window).scrollTo('#prog3', 200); break;

                  }
              }




            }
          }, 10); 
                    
                    
        }
    );

    </script>

<!-- PROGRAMA 1 -->
        <div class="row" ><a id="prog1"></a>
             <div class="col-xs-12 titulo n" style="float: left;">
                <p style="margin-bottom:0">
                    <span><?php pten('PROGRAMA #1 | PAISAGENS E TERRITÓRIOS | 62’27”', 'PROGRAM #1 | Landscapes and territories  | 62’27”'); ?></span>
                </p>
             </div>
        </div>

        <div class="row" style="clear: both;">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/robertosantaguida"><img src="img/obras/obra_robertosantaguida.jpg" class="img-responsive center-block" style="margin-bottom: 30px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold">
                <a href="/robertosantaguida" id="linkartista"><?php pten('Roberto Santaguida</a> (Canadá/Sérvia)', 'Roberto Santaguida</a> (Canada/Serbia)'); ?><br />
                Goran, 2014, 10’38” </span><br />
                <?php pten('Em <em>Goran</em>, Santaguida trabalha em colaboração com Goran Gostojić, morador de Novi Sad, no norte da Sérvia, e portador de síndrome de Down. Conversando com o diretor, Goran revela um pouco de seu cotidiano e de suas reações a situações de medo e alegria. De forma sutil, as imagens acompanham as escolhas de Goran e seu olhar sobre a realidade. Ao mesmo tempo, a presença do diretor levanta questões sobre o lugar do autor e as possibilidades da autorrepresentação.',
                           'In <em>Goran</em>, Santaguida works in collaboration with Goran Gostojić, a resident of Novi Sad, in northern Serbia, who has Down Syndrome. Speaking with the director, Gostojić talks about his daily life and his reactions to situations of fear and joy. In a subtle way, the images portray Gostojić’s choices and his views of reality. At the same time, the director’s presence raises issues about the place of the author and the possibilities of self-representation.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/slinko" id="linkartista"><img src="img/obras/obra_slinko.jpg" class="img-responsive center-block" style="margin-bottom: 30px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/slinko" id="linkartista"><?php pten('Slinko</a> (Ucrânia/EUA)', 'Slinko</a> (Ukraine/USA)'); ?><br />
                   Ghost Looking for its Spirit, 2012, 3’43” </span><br />
                   <?php pten('O monólogo que sustenta a obra é uma carta destinada a Marx, na qual se misturam referências à infância da artista sob o regime soviético e a seu cotidiano atual nos Estados Unidos. As questões existenciais que a artista enuncia produzem uma confrontação entre o comunismo e o modelo neoliberal. O vídeo torna-se retrato do contexto esquizofrênico contemporâneo, no qual o ideário político de esquerda se vê perdido entre referências a um passado utópico que parece ter resultado em um fracasso.',
                   'The monologue on which this piece is based is a letter to Marx, combining references to the artist’s childhood under the Soviet regime, and her current life in the United States. The existential issues that the author enunciates produce a confrontation of communism and the neoliberal model. The video portrays the schizophrenic contemporary context in which the leftist political ideals find themselves stranded amid references to a utopian past that seems to have proved a failure.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/karolinabregula" id="linkartista"><img src="img/obras/obra_karolinabregula.jpg" class="img-responsive center-block" style="margin-bottom: 45px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/karolinabregula" id="linkartista"><?php pten('Karolina Bregula</a> (Polônia)', 'Karolina Bregula</a> (Poland)'); ?><br />
                   Fire-Followers, 2013, 48’46”</span><br />
                   <?php pten('Os sistemas de poder que agenciam as relações sociais são tema frequente dos vídeos, instalações, fotografias, happenings e performances de Karolina Breguła. Em tom de paródia, <em>Fire-Followers</em> fala de uma cidadezinha no norte da Europa atingida por incêndios que destroem, inclusive, seus acervos de arte. Assustada pelo boato de que a queima de arte seria deliberada, além de necessária para renovar o pensamento criativo, a população passa a evitar museus, galerias e coleções, e a tentar se livrar de suas obras.',
                   'The systems of power that agency social relationships are a frequent theme of Karolina Bregula’s videos, installations, photographs, happenings, and performances. With overtones of parody, <em>Fire Followers</em> is about a small town in northern Europe where fires destroy even its art collections. Scared by rumors that the burning of artworks was deliberate and necessary to rekindle creative thinking, the population starts avoiding museums, galleries, and collections, and trying to get rid of the art pieces they own.'); ?></p>
            </div>
        </div>
        <!-- /PROGRAMA 1 -->



        <!-- PROGRAMA 2 -->
        <div class="row" ><a id="prog2"></a>
             <div class="col-xs-12 titulo n" style="float: left;">
                <p style="margin-bottom:0">
                    <span><?php pten('Programa #2 | Desdobramentos do Real | 73’22”', 'Program #2 | Unfolding the real | 73’22”'); ?></span>
                </p>
             </div>
        </div>

        <div class="row" style="clear: both;">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/tatianafuentessadowski" id="linkartista"><img src="img/obras/obra_tatianafuentessadowski.jpg" class="img-responsive center-block" style="margin-bottom: 30px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/tatianafuentessadowski" id="linkartista"><?php pten('Tatiana Fuentes Sadowski</a> (Peru/França)', 'Tatiana Fuentes Sadowski</a> (Peru/France)'); ?><br />
                   La Huella, 2012, 18’ </span><br />
                   <?php pten('<em>La Huella</em> [A Pegada] apresenta uma coleção de fotografias perturbadoras, associadas numa sucessão onírica que sublinha o aspecto ficcional inerente à memória. Produzidas durante o conflito ocorrido no Peru entre 1980 e 2000, as imagens foram reunidas pela comissão da verdade e reconciliação, que investigou o período de guerra civil no país. A obra analisa as marcas que o período de conflito armado deixou na população peruana; são traços silenciados e, por vezes, invisíveis, mas inapagáveis.',
                   '<em>La Huella</em> (The Footstep) features a collection of disturbing photographs, associated in a dreamlike sequence that underscores the fictional aspect inherent to memory. Produced during the conflict that took place in Peru between 1980 and 2000, the pictures were gathered by the Truth and Reconciliation Commission, which investigated the civil war in the country. The piece explores the marks that the armed conflict left on the Peruvian population: silenced, at times invisible, but indelible traces. '); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/alicherri" id="linkartista"><img src="img/obras/obra_alicherri.jpg" class="img-responsive center-block" style="margin-bottom: 30px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/alicherri" id="linkartista"><?php pten('Ali Cherri</a> (Líbano)', 'Ali Cherri</a> (Lebanon)'); ?><br />
                   The Disquiet, 2013, 20’</span><br />
                   <?php pten('As quatro falhas geológicas que atravessam o território do Líbano geram instabilidade só comparável, em tempos modernos, aos intermitentes reveses bélicos e políticos experimentados pelo povo do país – que, de resto, fica no Oriente Médio, uma das regiões mais conturbadas por conflitos do globo. O artista usa uma poderosa analogia para comentar situações cujo impacto sobre o tecido social só se compara à incomensurável (e incontrolável) sanha destruidora da natureza.',
                   'The four geological fault lines that run across Lebanon create an instability that can only be likened, in modern times, to the repeated political and war-related setbacks experienced by residents of the country – located, by the way, in the Middle East, one of the world’s most conflict-ridden regions. The artist employs a powerful analogy to comment on situations whose impact on the social fabric is comparable only to the immeasurable (and uncontrollable) destructive rage of nature.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/kushbadhwar" id="linkartista"><img src="img/obras/obra_kushbadhwar.jpg" class="img-responsive center-block" style="margin-bottom: 45px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/kushbadhwar" id="linkartista"><?php pten('Kush Badhwar</a> (Índia/Austrália)', 'Kush Badhwar</a> (India/Australia)'); ?><br />
                   Blood Earth, 2013, 35’22”</span><br />
                   <?php pten('A região de Kucheipadar, vilarejo no estado de Odisha, Índia, é rica em bauxita. Desde as reformas liberais dos anos 1990, é objeto de um violento conflito entre uma empresa mineradora e os Adivasis, grupo étnico considerado o ocupante original do território indiano. <em>Blood Earth</em> intercala o registro da tradição musical da região com o dia a dia no vilarejo e a luta política de seus moradores, criando um poderoso retrato dos conflitos na Índia contemporânea.',
                   'Kucheipadar, a village in India’s Odisha state, is rich in bauxite. Since the liberal reforms of the 1990s, the locality has witnessed violent clashes between a mining company and the Adivasis, an ethnic group considered to be the original dwellers of the Indian territory. <em>Blood Earth</em> alternates between footage of local musical tradition, of daily life in the village, and of the political struggle of its residents, delivering a powerful depiction of conflicts in modern-day India.'); ?></p>
            </div>
        </div>
          
        <!-- /PROGRAMA 2 -->

        <!-- PROGRAMA 3 -->
        </a><div class="row" ><a id="prog3"></a>
             <div class="col-xs-12 titulo n" style="float: left;">
                <p style="margin-bottom:0">
                    <span><?php pten('Programa #3 | Fricções | 75’30”', 'Program #3 | Frictions | 75’30”'); ?></span>
                </p>
             </div>
        </div>

        <div class="row" style="clear: both;">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/viktorijarybakova" id="linkartista"><img src="img/obras/obra_viktorijarybakova.jpg" class="img-responsive center-block" style="margin-bottom: 30px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/viktorijarybakova" id="linkartista"><?php pten('Viktorija Rybakova</a> (Lituânia/México)', 'Viktorija Rybakova</a> (Lithuania/Mexico)'); ?><br />
                   Oo, a preview, 2013, 3’30” </span><br />
                   <?php pten('A voz hipnótica do narrador nos faz mergulhar nas páginas de um livro – aqui, um objeto bidimensional expandido para o universo da linguagem verbal. Ecos da psicanálise promovem uma deriva mental tão afetiva e orgânica quanto controlada, reforçada pela natureza híbrida das imagens. A força onírica que nos arrasta para dentro do livro parece redundar em seu próprio estratagema semântico, devolvendo-nos a própria arquitetura forjada pela linguagem. A obra também pode ser vista no espaço expositivo (Convivência Sesc Pompeia).',
                   'The hypnotic voiceover compels us to dive into the pages of a book – here, a two-dimensional object expanded into the realm of verbal language, which articulates itself visually. Echoes from psychoanalysis cause the mind to wander in a way as affective and organic as it is controlled, and further underscored by the hybrid nature of the images. The dreamlike strength that drags us into the book appears to cycle back into its own semantic stratagem, giving us the very architecture forged by language. The piece can also be seen at the exhibition venue (Sesc Pompeia’s Convivência area).'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/anavaz" id="linkartista"><img src="img/obras/obra_anavaz.jpg" class="img-responsive center-block" style="margin-bottom: 30px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/anavaz" id="linkartista"><?php pten('Ana Vaz</a> (Brasil/França)', 'Ana Vaz</a> (Brasil/France)'); ?><br />
                   A Idade da Pedra, 2013, 29’</span><br />
                   <?php pten('A obra assinala uma crença na interdependência natural entre as coisas: animais, astros, plantas, ser humano e formações rochosas, todos pertencem a uma mesma ordem. Espaços e personagens são retratados de forma poética, como esboços de algo por construir. Há, na obra, um fantasma de Brasília, dos sonhos utópicos que a cidade encerra; e, ao mesmo tempo, uma possibilidade de outros sonhos, nos quais vida social e natureza se relacionam de uma forma mais próxima e fluida.',
                   '<em>A Idade da Pedra</em> highlights a belief in the natural interdependence of things: animals, celestial bodies, plants, humans, and rocky formations all belong in the same order. Spaces and characters are portrayed in a poetic way, like sketches of something that’s yet to be built. The video carries the ghost of Brasília, of the utopian dreams contained in the city; and at the same time a possibility of other dreams, in which social living and nature relate in a closer, more fluid way.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/chulayarnnonsiriphol" id="linkartista"><img src="img/obras/obra_chulayarnnonsiriphol.jpg" class="img-responsive center-block" style="margin-bottom: 30px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/chulayarnnonsiriphol" id="linkartista"><?php pten('Chulayarnnon Siriphol</a> (Tailândia)', 'Chulayarnnon Siriphol</a> (Thailand)'); ?><br />
                   Myth of Modernity, 2014, 16’</span><br /> 
                   <?php pten('Situado entre o documentário e a ficção, o filme começa investigando o impacto do modernismo na cultura tailandesa, em especial em sua arquitetura, e transforma-se em uma ficção científica em que a população do país é hipnotizada por uma figura piramidal de luz. Siriphol promove uma análise das estruturas de poder que se perpetuam ao longo da história, por meio, inclusive, de uma arquitetura do poder, seja de ordem divina ou terrena.',
                   'Halfway between documentary and fiction, the film begins as an inquiry into the impact of modernism in Thai culture, particularly its architecture, and becomes a sci-fi piece where the country’s population is hypnotized by a pyramid-shaped figure of light. Siriphol offers an interesting insight into the power structures that perpetuate themselves throughout history, including through an architecture of power, from an either divine or earthly order.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/distruktur" id="linkartista"><img src="img/obras/obra_distruktur.jpg" class="img-responsive center-block" style="margin-bottom: 30px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/distruktur" id="linkartista"><?php pten('Distruktur</a> (Brasil/Alemanha)', 'Distruktur</a> (Brazil/Germany)'); ?><br />
                   In the Traveler's Heart, 2013, 19’</span><br />
                   <?php pten('A maior parte da obra do Distruktur constitui-se em filmes em Super-8 e 16 mm, definidos pela dupla de artistas como filmes-performances, num trânsito constante entre os campos do cinema e das artes visuais. <em>In the Traveler’s Heart</em> fala do trajeto de um sujeito solitário, duplo de homem e mulher, que caminha entre a neve e o mar. O barulho de seus passos é interrompido quando o canto do viajante faz ecoar Cuitelinho, música do cancioneiro popular brasileiro que fala de uma saudade cortante como aço de navalha.',
                   'The majority of Distruktur’s output consists of Super 8 and 16 mm films, defined by the artist duo as performance-films, and shifting back and forth constantly between cinema and the visual arts. <em>In the Traveler’s Heart</em> is about the trajectory of a lonely subject, a mixture of man and woman, who walks between the snow and the ocean. The sound of its footsteps is interrupted when he starts singing Cuitelinho, a Brazilian folk song that speaks of a longing that cuts like a steel razor.'); ?></p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-6 relative" style="float: left ">
                <a href="/leticiaramos" id="linkartista"><img src="img/obras/obra_leticiaramos.jpg" class="img-responsive center-block" style="margin-bottom: 30px" /></a>
            </div>
            <div class="col-sm-12 col-md-6 f" style="float: right;">
                <p><span class="bold"><a href="/leticiaramos" id="linkartista"><?php pten('Letícia Ramos</a> (Brasil)', 'Letícia Ramos</a> (Brazil)'); ?><br />
                   VOSTOK_screening, 2014, 8’</span><br />
                   <?php pten('Perdido abaixo da crosta glacial, um submarino navega pelas profundezas de um lago outrora congelado da Antártica, enquanto uma voz soturna alerta sobre a missão e seu curso. Letícia Ramos recorre ao universo da ficção para desvelar realidades paralelas; ao engendrar seu próprio aparato de pesquisa e laboratório, desafia a ciência por meio do humor e da tecnologia. A série <em>VOSTOK</em>, à qual o vídeo pertence, envolve uma performance.',
                   'Lost beneath the glacial crust, a submarine navigates the depths of a formerly frozen Antarctic lake, as a voice warns of the mission and its course. Letícia Ramos resorts to the world of fiction to unveil parallel realities; by concocting her own research and laboratory apparatus, she defies science through humor and technology. The <em>VOSTOK</em> series, to which the video belongs, includes a performance.'); ?></p>
            </div>
        </div>
          
        <!-- /PROGRAMA 3 -->
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
          ga('create', 'UA-33383260-2', 'auto');
          ga('send', 'pageview');
        </script> 