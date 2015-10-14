<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

?>

            <script>
                
                paletaArtistas($('.titulo'));
            
            </script>
            <style type="text/css">
               .image { 
                 position: relative; 
                 /*width: 100%;  for IE 6 */
                 max-height: 285px;
                 max-width: 485px;
                 margin-bottom: 15px;
              }

              .texto { 
                 position: absolute; 
                 bottom: 0px; 
                 left: 0px; 
                 width: 485px; 
                 color: white;
                 min-height: 70px;
                 background: rgb(0, 0, 0); /* fallback color */
                 background: rgba(0, 0, 0, 0.7);
                 padding: 10px;
              }

            </style>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('álbuns', 'albums');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

              
                <!-- 13 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659238932979" target="_blank">
                        <img src="img/fotos/13-repensar-espacos.jpg" alt="" width="485px" height="285px" />
                        <span class="texto"><?php pten(
                          '#19Festival | Programas Públicos | Seminário | Mesa 2 | "Repensar espaços: artes, usos e cotidiano"',
                          '#19Festival | Public Programs | Seminar | Panel 2 | "Rethinking spaces: art, uses and daily life"'
                          );?>
                          </span>
                       </a>
                    </div>
                </div>

                <!-- 12 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659238932979" target="_blank">
                        <img src="img/fotos/12-pp-vocabulario.jpg" alt="" width="485px" height="285px" />
                        <span class="texto"><?php pten(
                          '#19Festival | Programas Públicos | Oficina "Vocabulário de um Sul existente: invenção de um mundo a partir de lugares inexistentes" | Ting-Ting Cheng',
                          '#19Festival | Public Programs | Workshop "Vocabulary of an Existing South: The Invention of a World From Inexistent Places" | Ting-Ting Cheng'
                          );?>
                          </span>
                       </a>
                    </div>
                </div>

                <!-- 11 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659662324395" target="_blank">
                        <img src="img/fotos/11-abertura-galpao.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">
                          <?php pten(
                          '#19festival | Abertura do Galpão VB e da exposição Panoramas do Sul | Projetos Comissionados',
                          '#19Festival | Opening of Galpão VB and Southern Panoramas | Commissioned Projects exhibition'
                          );?>
                        </span>
                       </a>
                    </div>
                </div>

                <!-- 10 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/albums/72157659233653159" target="_blank">
                        <img src="img/fotos/10-pp-sem1.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">
                        <?php pten(
                          '#19Festival | Programas Públicos | Seminário | Mesa 1: Repensar tradições: arte gesto e contemporaneidade',
                          '#19Festival | Public Programs | Panel 1: Rethinking traditions: art, gesture and contemporaneity'
                          );?></span>
                       </a>
                    </div>
                </div>

                <!-- 09 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659659824285" target="_blank">
                        <img src="img/fotos/09-progsfilmes.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">
                        <?php pten(
                          '#19Festival | Abertura do Programa de Filmes | Obras Selecionadas',
                          '#19Festival | Opening Film Programs | Selected Works'
                          );?></span>
                       </a>
                    </div>
                </div>

                <!-- 08 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659656781331" target="_blank">
                        <img src="img/fotos/08-tilting.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">
                        <?php pten(
                          '#19Festival | Programas Públicos | Encontros e Conversas | Tilting Axis 1.5',
                          '#19Festival | Public Programs | Meetings and Conversations | Tilting Axis 1.5'
                          );?></span>
                       </a>
                    </div>
                </div>

                <!-- 07 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659233653159" target="_blank">
                        <img src="img/fotos/07-abertura-19f.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">
                          <?php pten(
                          'Abertura do 19º Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul',
                          'Opening of 19th Contemporary Art Festival Sesc_Videobrasil | Southern Panoramas'
                          );?>
                        </span>

                       </a>
                    </div>
                </div>

                <!-- 06 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659654292891" target="_blank">
                        <img src="img/fotos/06-vostok.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">
                        <?php pten(
                          '19º Festival | Performances | "Vostok" | Letícia Ramos',
                          '19th Festival | Performances | "Vostok" | Letícia Ramos'
                          );?></span>
                       </a>
                    </div>
                </div>

                <!-- 05 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659239809498" target="_blank">
                        <img src="img/fotos/05-pp-memoria.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">
                        <?php pten(
                          '19º Festival | Programas Públicos | Oficina: "Memória tecida: Monotipia vista do Mali" | Abdoulaye Konaté',
                          '19th Festival | Public Programs | Workshop: "Woven Memory: Monotype Seen From Mali" | Abdoulaye Konaté'
                          );?></span>
                       </a>
                    </div>
                </div>

                <!-- 04 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659324156156" target="_blank">
                        <img src="img/fotos/04-galpaovb.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">Galpão VB</span>
                       </a>
                    </div>
                </div>
                


            </div>
            <script>
                  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
                  ga('create', 'UA-33383260-2', 'auto');
                  ga('send', 'pageview');
            </script>

