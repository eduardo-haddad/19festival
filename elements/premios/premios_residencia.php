<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<script>
        $(document).ready(
            function(){
                paletaArtistas($('.titulo'));
                paletaArtistas($('.premio-local'));
                paletaArtistas($('.premio-nome'));
                paletaArtistas($('.premio-sobre'));

                $('#residencias a').attr('target', '_blank');
                $('#residencias a').css({
                                           'text-decoration' : 'underline',
                                           'color' : 'inherit'
                                        });

            }
        );
    </script>
    <style>
        #premio-aviso {

            float: left; 
            display: table; 
            height: 250px; 
            width: 450px;
            overflow: hidden; 
            background-color: #e4dbdc;
            font-size: 1.3em;
            margin-bottom: 42px;
            /*margin-top: 18px;*/
            left: 15px;

        }

        .titulo-aviso {
            text-transform: uppercase;
            word-wrap: break-word;
            font-size: 2em;
            /*letter-spacing: 0.1em;*/
            line-height: 1.2em;
            margin-bottom: 22px;
        }


    </style>


<div class="row" >
    <div class="col-xs-12 titulo" style="float: left;">
        <p style="margin-bottom:0"> 
            <?php pten('prêmios de residência', 'residency prizes'); ?>
        </p>
     </div>
</div>

<div class="row" style="clear: both;">   
                
                    <div class="col-sm-12 col-md-6" id="premio-aviso">
                        <div style="display: table-cell; vertical-align: middle;">
                            <div class="titulo-aviso">  
                                <?php
                                ob_start(); titulo('confira a lista de artistas premiados depois de 11 de outubro'); $titulo_pt = ob_get_clean();
                                ob_start(); titulo('check the list of awarded artists after october 11'); $titulo_en = ob_get_clean();
                                pten($titulo_pt, $titulo_en); 
                                ?>
                            </div>
                        </div>
                    </div>       

                <div class="col-sm-12 col-md-6 premio-sobre" style="float: right;" >
                <p class="premio-sobre">
                    <?php 
                        pten('Os Prêmios de Residência, instituídos desde 1990, contribuem para o desenvolvimento de uma nova cartografia artística e cultural. Os artistas premiados realizam residências de dois meses em instituições parceiras do Programa de Residências Videobrasil ao redor do mundo. Graças à inserção do Videobrasil em uma extensa rede de colaborações, a atuação do programa já se estendeu pelos cinco continentes e, no 19º Festival, desenvolve-se pela América Latina, América do Norte, Europa, Oriente Médio e Ásia, aproximando os eixos Sul-Sul e Sul-Norte.',

                             'The Residency Prizes, first awarded in 1990, help usher in a new artistic and cultural cartography. The selected artists undertake two-month residencies at Videobrasil Residency Program partner organizations around the world. Thanks to Videobrasil’s becoming a part of a vast network of collaborators, the program already spanned all five continents, and for the 19th Festival it will cover Latin America, North America, Europe, the Middle East and Asia, bringing together the South-South and South-North axes.');


                    ?>



                </p>




                </div> 
</div>


        <div id="residencias">

            <!-- RESIDENCIA 1 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">Prêmio de Residência A-I-R Laboratory</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">no A-I-R Laboratory (Varsóvia, Polônia)</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">A-I-R Laboratory Residency Prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at A-I-R Laboratory (Warsaw, Poland)</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/air.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
                pten('<p>O <a href="http://csw.art.pl/index.php?action=air&lang=eng">A-I-R Laboratory</a> é programa de residências artísticas do Centre for Contemporary Art Ujazdowski Castle dedicado a projetos que envolvam o mapeamento da cidade e o engajamento da comunidade local. Incentiva os artistas a apresentarem suas obras para além do espaço expositivo, encorajando-os a trabalhar nos espaços públicos e incluindo sua produção em eventos como screenings, performances, palestras e debates abertos ao público. O A-I-R volta sua atenção às regiões que considera pouco representadas em programas de residência como o Leste Europeu, Oriente Médio e Ásia.</p>',

                //Sobre residencia - EN
                '<p><a href="http://csw.art.pl/index.php?action=air&lang=eng">A-I-R Laboratory</a> is the artist residency program of the Centre for Contemporary Art Ujazdowski Castle, devoted to projects that involve the mapping of the city and engage the local community. It encourages the artists to show their work beyond the bounds of exhibition spaces, urging them to work in public settings and featuring their productions in events such as screenings, performances, lectures and debates open to the public. The A-I-R turns its attention to the regions it considers to be underrepresented in residency programs, such as Eastern Europe, the Middle East and Asia. </p>');  ?> 
                </div> 
            </div>
            <!-- /RESIDENCIA 1 -->

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>
           
            <!-- RESIDENCIA 2 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">Prêmio de Residência Arquetopia_Videobrasil</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">na Arquetopia (Puebla, México)</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">Arquetopia_Videobrasil Residency Prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at Arquetopia (Puebla, Mexico)</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/arquetopia.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
                pten('<p>A <a href="http://www.arquetopia.org/">Arquetopia</a> é responsável por um dos mais importantes programas de residência da América Latina, com extensa rede de colaboração. Oferece oportunidades a artistas emergentes e em ascensão de todo o mundo. Os residentes são convidados a conhecer a história pré-colombiana do México, seu passado colonial e sua atualidade, sendo incentivados a ressignificar práticas artísticas tradicionais no contexto contemporâneo. A Arquetopia oferece auxílio a este processo com encontros e conversas semanais, discussões, críticas e bibliografia adaptados às necessidades de cada artista.</p>',

                //Sobre residencia - EN
                '<p><a href="http://www.arquetopia.org/">Arquetopia</a> is responsible for one of Latin America’s leading residency programs, boasting a lengthy network of collaborators. It offers opportunities to emerging and up-and-coming artists from around the world. Residents are invited to learn about Mexico’s pre-Colombian history, its colonial past and current scenario, and are encouraged to re-signify traditional art practices within the contemporary context. Arquetopia coaxes this process along with weekly meetings and conversations, discussions, critique and bibliographies to match the needs of each artist. </p>');  ?> 
                </div> 
            </div>
            <!-- /RESIDENCIA 2 -->

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

            <!-- RESIDENCIA 3 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">Prêmio de Residência China Art Foundation</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">na Red Gate Residency (Beijing, China)</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">China Art Foundation Residency Prize </span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at Red Gate Residency (Beijing, China)</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/redgate.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
                pten('<p>O <a href="http://www.redgategallery.com/">Red Gate Residency</a> é um programa internacional de residências voltado a artistas, curadores, escritores e acadêmicos. Comprometido com a promoção de diálogos multiculturais em ambiente de imersão, a Red Gate Residency fornece instalações ideais para que os artistas deem início a novos projetos e os coloca em contato com a comunidade e com a cena, materiais e técnicas artísticas locais.</p>',

                //Sobre residencia - EN
                '<p>The <a href="http://www.redgategallery.com/">Red Gate Residency</a> is an international residency program targeting artists, curators, writers and academicians. Committed to promoting multicultural dialogue in immersive settings, the Red Gate Residency provides ideal facilities for artists to embark on new projects, and puts them in touch with the local community and scene, as well as different materials and art techniques. </p>');  ?> 
                </div> 
                
            </div>

                <!-- APOIADOR -->
                <div class="row" style="clear: both; margin-bottom: 25px;"> 
                            <div class="col-sm-12 col-md-6" style="float: left; "><img class="img-responsive retrato-artista" src="img/residencias/china.png" style="margin-bottom: 0px" /></div>
                            <div class="col-sm-12 col-md-6" style="float: right; text-align: left">
                            <p><span class="bold">China Art Foundation</span><br />
                            <?php pten(
                                'A <a href="http://www.thechinaartfoundation.com/en/home/" target="_blank">China Art Foundation</a> tem como objetivos ajudar a garantir que o intenso interesse global na arte contemporânea e na cultura da China tenham um futuro sustentável, e ajudar a aumentar o conhecimento e a compreensão, nos campos da arte e da cultura, entre a China e o resto do mundo. O impulso por trás da criação da fundação foi o reconhecimento comum de que a transformação sem precedentes pela qual a China está passando levanta questões culturais para o país e para o resto do mundo.',
                                '<a href="http://www.thechinaartfoundation.com/en/home/" target="_blank">China Art Foundation</a>’s aims are to help ensure that the intense global interest in contemporary Chinese art and culture has a sustainable future, and to help increase two–way knowledge and understanding between China and the rest of the world, in the arena of art and culture. The impulse behind the setting up of the Foundation was the common recognition that the unprecedented transformation through which China is passing raises cultural issues for said country and for the rest of the world.');
                                ?>
                            </p>
                            </div>
                </div>
                <!-- APOIADOR -->

            <!-- /RESIDENCIA 3 -->

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

            <!-- RESIDENCIA 4 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">Prêmio de Residência Delfina_Videobrasil</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">na Delfina Foundation (Londres, Reino Unido)</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">Delfina_Videobrasil Residency Prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at Delfina Foundation (London, United Kingdom)</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/delfina.jpg" class="img-responsive" style="margin-bottom: 15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
                pten('<p>A <a href="http://delfinafoundation.com/">Delfina Foundation</a> apoia e facilita o desenvolvimento profissional de agentes culturais em todos os níveis de carreira, oferecendo aos residentes uma plataforma incubadora de ideias a serem apresentadas aos seus pares internacionais e ao público. A fundação cria oportunidades para que artistas emergentes e consagrados posicionem sua prática num discurso global, desenvolvam pesquisas relevantes para suas carreiras e criem conexões com colegas. A fundação estabeleceu relações estreitas com o Oriente Médio, Norte da África e Sul da Ásia, e continua investindo na ampliação destes laços.</p>',

                //Sobre residencia - EN
                '<p>The <a href="http://delfinafoundation.com/">Delfina Foundation</a> supports and facilitates the professional development of cultural agents from all career levels, offering residents a platform in which to incubate ideas before presenting them to their international peers and the public.    The foundation creates opportunities for emerging and established artists to associate their practices with a global discourse, develop lines of research relevant to their careers, and connect with fellow artists. The foundation has established close ties with the Middle East, North Africa and South Asia, and keeps working to build them further. </p>');  ?> 
                </div> 
            </div>
            <!-- /RESIDENCIA 4 -->

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

            <!-- RESIDENCIA 5 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">Prêmio de Residência Vila Sul – Goethe-Institut</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">na Residence Vila Sul (Salvador, Brasil)</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">Goethe-Institut Residency Prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at Residence Vila Sul (Salvador, Brazil)</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/vilasul.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
                pten('<p>A <a href="http://www.goethe.de/ins/br/lp/prj/eps/pt14367503.htm">Residência Vila Sul</a>, do <a href="http://www.goethe.de/ins/br/sab/ptindex.htm?wt_sc=salvador">Goethe-Institut Salvador</a>, tem como traço essencial a intenção de troca entre os artistas residentes e destes com a população local, tendo como focos temáticos a conexão entre a América do Sul e  a África , além da conceituação do Sul global. Um dos traços essenciais da Residência Vila Sul é o intercâmbio, não apenas entre os artistas, mas também com a população local. Com teatro-estúdio, galerias, pátio e biblioteca, oferece condições ideais para encontros em diversos formatos, que promovem reflexões e impulsionam a produção cultural.</p>',

                //Sobre residencia - EN
                '<p>The defining feature of <a href="http://www.goethe.de/ins/br/sab/ptindex.htm?wt_sc=salvador">Goethe-Institut Salvador</a>’s <a href="http://www.goethe.de/ins/br/lp/prj/eps/pt14367503.htm">Residência Vila Sul</a> is its encouraging of resident artists to bounce ideas off each other and the local population, focusing on the South America—Africa connection and the conceptualization of the global South. One of the essential features of Residência Vila Sul is the exchange not only among artists, but also with the local population. Comprising a theater-studio, galleries, a patio and a library, it provides ideal conditions for encounters in various formats, fostering reflection and fueling culture production.</p>');  ?> 
                </div> 
            </div>
            <!-- /RESIDENCIA 5 -->

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

            <!-- RESIDENCIA 6 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">Prêmio de Residência Res Artis</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">no Djerassi Resident Artists Program (Woodside, EUA)</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">Res Artis Residency Prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at Djerassi Resident Artists Program (Woodside, USA)</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/djerassi.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
                pten('<p>O <a href="http://djerassi.org/">Djerassi Resident Artists Program</a> tem como missão apoiar a produção artística oferecendo aos residentes tempo ininterrupto de trabalho, reflexão e interação com os demais artistas em um ambiente de reconhecida beleza natural. Maior programa de residência artística no oeste dos EUA, recebeu mais de 2.300 artistas em residência vindos de 51 países desde sua fundação, em 1979. </p>',

                //Sobre residencia - EN
                '<p>The mission of the <a href="http://djerassi.org/">Djerassi Resident Artists Program</a> is to support art production by offering residents uninterrupted time to work, reflect and interact with other artists in a setting known for its scenic natural beauty. The leading artist residency program in the Western USA, it welcomed over 2,300 artists from 51 countries since its establishment, in 1979. </p>');  ?> 
                </div> 
            </div>

                <!-- APOIADOR -->
                <div class="row" style="clear: both; margin-bottom: 25px;"> 
                            <div class="col-sm-12 col-md-6" style="float: left; "><img class="img-responsive retrato-artista" src="img/residencias/resartis.png" style="margin-bottom: 0px" /></div>
                            <div class="col-sm-12 col-md-6" style="float: right; text-align: left">
                                <?php
                                    pten('<span class="bold">Res Artis</span><br />
                                          A <a href="http://www.resartis.org/">Res Artis</a> é uma associação composta por mais de 500 instituições, organizações e pessoas em mais de 70 países. Cada um dos seus membros se dedicada a oferecer a artistas, curadores e toda sorte de pessoas criativas o tempo necessário e o lugar distante das pressões e hábitos do dia a dia, uma experiência inserida dentro de um contexto geográfico e cultural único. Através da Res Artis, as organizações passam a fazer parte de uma comunidade global e se envolver em um diálogo que se realiza por meio de encontros presenciais ou virtuais.', 
                                         '<span class="bold">Res Artis</span><br />
                                          <a href="http://www.resartis.org/">Res Artis</a> is an association of over 500 centers, organisations, and individuals in over 70 countries. Each of its members is dedicated to offering artists, curators, and all manner of creative people the essential time and place away from the pressures and habits of every-day life, an experience framed within a unique geographic and cultural context. Through Res Artis, organisations will become part of a global community of colleagues engaged in dialogue through face-to-face meetings and virtually through online presence.'
                                         );
                                ?>

                            </div>
                </div>
                <!-- APOIADOR -->

            <!-- /RESIDENCIA 6 -->

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

            <!-- RESIDENCIA 7 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">Prêmio de Residência Res Artis</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">no Kooshk Residency (Teerã, Irã)</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">Res Artis Residency Prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at Kooshk Residency (Tehran, Iran)</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/kooshk.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
                pten('<p><a href="http://kooshkresidency.com/">Kooshk Residency</a> é um espaço incentivador da criação artística e dos diálogos interculturais entre artistas, curadores, pesquisadores, escritores e cineastas, que contribui para o desenvolvimento artístico e cultural iraniano. Conta com programas de intercâmbio de artistas, que resultam e trocas culturais, provocam a criatividade e criam conexões com instituições ao redor do mundo. A Koosh Residency articula ainda colaboradores locais na organização de conversas com os artistas residentes, exposições e apresentações.</p>',

                //Sobre residencia - EN
                '<p><a href="http://kooshkresidency.com/">Kooshk Residency</a> is a space designed to encourage art creation and intercultural dialogue among artists, curators, researchers, writers and filmmakers, contributing to the development of art and culture in Iran. It offers artist exchange programs that lead to culture sharing, spur creativity, and connect with organizations around the world. The Koosh Residency also involves local collaborators in conversations with its resident artists, as well as exhibits and presentations. </p>');  ?> 
                </div> 
            </div>

                <!-- APOIADOR -->
                <div class="row" style="clear: both; margin-bottom: 25px;"> 
                            <div class="col-sm-12 col-md-6" style="float: left; "><img class="img-responsive retrato-artista" src="img/residencias/resartis.png" style="margin-bottom: 0px" /></div>
                            <div class="col-sm-12 col-md-6" style="float: right; text-align: left">
                                <?php
                                    pten('<span class="bold">Res Artis</span><br />
                                          A <a href="http://www.resartis.org/">Res Artis</a> é uma associação composta por mais de 500 instituições, organizações e pessoas em mais de 70 países. Cada um dos seus membros se dedicada a oferecer a artistas, curadores e toda sorte de pessoas criativas o tempo necessário e o lugar distante das pressões e hábitos do dia a dia, uma experiência inserida dentro de um contexto geográfico e cultural único. Através da Res Artis, as organizações passam a fazer parte de uma comunidade global e se envolver em um diálogo que se realiza por meio de encontros presenciais ou virtuais.', 
                                         '<span class="bold">Res Artis</span><br />
                                          <a href="http://www.resartis.org/">Res Artis</a> is an association of over 500 centers, organisations, and individuals in over 70 countries. Each of its members is dedicated to offering artists, curators, and all manner of creative people the essential time and place away from the pressures and habits of every-day life, an experience framed within a unique geographic and cultural context. Through Res Artis, organisations will become part of a global community of colleagues engaged in dialogue through face-to-face meetings and virtually through online presence.'
                                         );
                                ?>

                            </div>
                </div>
                <!-- APOIADOR -->

            <!-- /RESIDENCIA 7 -->

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

            <!-- RESIDENCIA 8 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">Prêmio de Residência Res Artis</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">no Kyoto Art Center (Quioto, Japão)</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">Res Artis Residency Prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at Kyoto Art Center (Kyoto, Japan)</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/kyoto.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
                pten('<p>O <a href="http://www.kac.or.jp/eng/">Kyoto Art Center</a> é um centro cultural dedicado à promover intercâmbios entre a cena artística global e a de Quioto. O seu programa de residências oferece apoio a artistas e pesquisadores emergentes que pretendam exercer atividades criativas nesta cidade. O Kyoto Art Center foi concebido como um lugar de encontro dos vários gêneros da arte, bem como para a criação de novas culturas através da revitalização da tradição da cidade, que se conecta com a tecnologia, a indústria e a vida cotidiana de seus cidadãos.</p>',

                //Sobre residencia - EN
                '<p>The <a href="http://www.kac.or.jp/eng/">Kyoto Art Center</a> is a cultural center dedicated to promoting exchanges between the global art scene and Kyoto. Its residency program offers support to emerging artists and researchers who wish to pursue creative activities in this city. The Kyoto Art Center was conceived as a meeting place of various genres of art as well as for creating new cultures through the revitalization of the city\'s tradition, which is connected with technology, industry, and everyday life of its citizens.</p>');  ?> 
                </div> 
            </div>

                <!-- APOIADOR -->
                <div class="row" style="clear: both; margin-bottom: 25px;"> 
                            <div class="col-sm-12 col-md-6" style="float: left; "><img class="img-responsive retrato-artista" src="img/residencias/resartis.png" style="margin-bottom: 0px" /></div>
                            <div class="col-sm-12 col-md-6" style="float: right; text-align: left">
                                <?php
                                    pten('<span class="bold">Res Artis</span><br />
                                          A <a href="http://www.resartis.org/">Res Artis</a> é uma associação composta por mais de 500 instituições, organizações e pessoas em mais de 70 países. Cada um dos seus membros se dedicada a oferecer a artistas, curadores e toda sorte de pessoas criativas o tempo necessário e o lugar distante das pressões e hábitos do dia a dia, uma experiência inserida dentro de um contexto geográfico e cultural único. Através da Res Artis, as organizações passam a fazer parte de uma comunidade global e se envolver em um diálogo que se realiza por meio de encontros presenciais ou virtuais.', 
                                         '<span class="bold">Res Artis</span><br />
                                          <a href="http://www.resartis.org/">Res Artis</a> is an association of over 500 centers, organisations, and individuals in over 70 countries. Each of its members is dedicated to offering artists, curators, and all manner of creative people the essential time and place away from the pressures and habits of every-day life, an experience framed within a unique geographic and cultural context. Through Res Artis, organisations will become part of a global community of colleagues engaged in dialogue through face-to-face meetings and virtually through online presence.'
                                         );
                                ?>

                            </div>
                </div>
                <!-- APOIADOR -->

            <!-- /RESIDENCIA 8 -->

            <div style="margin: 31px 0 16px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

            <!-- RESIDENCIA 9 -->
            <div class="row" >
                <div class="col-xs-12" style="float: left; margin-bottom: 10px">
                    <p style="margin-bottom:0"> 
                        <?php pten( //Titulo prêmio - PT
                                    '<span class="titulo premio-nome">Prêmio de Residência Wexner Center for the Arts</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">no Wexner Center for the Arts (Columbus, EUA)</span>', 
                                    //Titulo prêmio - EN
                                    '<span class="titulo premio-nome">Wexner Center for the Arts Residency Prize</span><br />
                                    <span class="premio-local" style="text-transform: uppercase;font-size: 1.1em;">at Wexner Center for the Arts (Columbus, USA)</span>'); 
                        ?>
                    </p>
                </div>
            </div>

            <div class="row" style="clear: both;">     
                <div class="col-sm-12 col-md-6" style="float: left ">
                    <img src="img/residencias/wexner2.jpg" class="img-responsive" style="margin-bottom:
                15px" />     
                </div>     
                <div class="col-sm-12 col-md-6 a" style="float: right;" >         
                <?php
                //Sobre residencia - PT
                pten('<p>O <a href="http://wexarts.org/">Wexner Center for the Arts</a>, vinculada a Ohio State University, é um laboratório internacional multidisciplinar voltado à pesquisa e acompanhamento da arte contemporânea. As residências frisam um de seus compromissos em alimentar a expressão criativa e as trocas culturais entre artistas, a comunidade universitária e o público geral. Obras resultantes da residência são frequentemente exibidas no Wexner Center e, posteriormente, viajam pelo mundo.</p>',

                //Sobre residencia - EN
                '<p>The <a href="http://wexarts.org/">Wexner Center for the Arts</a> is the Ohio State University’s multidisciplinary international laboratory dedicated to the research and monitoring of contemporary art. The residences emphasize on one of its core commitments, which is to nurture the creative expression and cultural exchanges between artists, the university community and the general public. Works resulting from the residence are often displayed in the Wexner Center and then travel the world.</p>');  ?> 
                </div> 
            </div>

                <!-- APOIADOR -->
                <div class="row" style="clear: both; margin-bottom: 25px;"> 
                            <div class="col-sm-12 col-md-6" style="float: left; "></div>
                            <div class="col-sm-12 col-md-6" style="float: right; text-align: left">
                                

                            </div>
                </div>
                <!-- APOIADOR -->

            <!-- /RESIDENCIA 9 -->

        </div>
           