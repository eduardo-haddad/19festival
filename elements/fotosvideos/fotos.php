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

              
                <!-- 12 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659238932979" target="_blank">
                        <img src="img/fotos/12-pp-vocabulario.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">#19Festival | Programas Públicos | Oficina "Vocabulário de um Sul existente: invenção de um mundo a partir de lugares inexistentes" | Ting-Ting Cheng</span>
                       </a>
                    </div>
                </div>

                <!-- 11 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659662324395" target="_blank">
                        <img src="img/fotos/11-abertura-galpao.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">#19festival I Abertura do Galpão VB e da exposição Panoramas do Sul I Projetos Comissionados</span>
                       </a>
                    </div>
                </div>

                <!-- 10 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/albums/72157659233653159" target="_blank">
                        <img src="img/fotos/10-pp-sem1.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">#19Festival | Programas Públicos | Seminário I Mesa 1: Repensar tradições: arte gesto e contemporaneidade</span>
                       </a>
                    </div>
                </div>

                <!-- 09 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659659824285" target="_blank">
                        <img src="img/fotos/09-progsfilmes.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">#19Festival | Abertura do Programa de Filmes | Obras Selecionadas</span>
                       </a>
                    </div>
                </div>

                <!-- 08 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659656781331" target="_blank">
                        <img src="img/fotos/08-tilting.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">#19Festival | Programas Públicos | Encontros e Conversas | Tilting Axis 1.5</span>
                       </a>
                    </div>
                </div>

                <!-- 07 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659233653159" target="_blank">
                        <img src="img/fotos/07-abertura-19f.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">Abertura do 19º Festival de Arte Contemporânea Sesc_Videobrasil I Panoramas do Sul</span>
                       </a>
                    </div>
                </div>

                <!-- 06 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659654292891" target="_blank">
                        <img src="img/fotos/06-vostok.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">19º Festival I Performances I  "Vostok" I Letícia Ramos</span>
                       </a>
                    </div>
                </div>

                <!-- 05 -->
                <div class="col-xs-12 col-md-6 h" style="float: left;">
                     <div class="image">

                       <a href="https://www.flickr.com/photos/videobrasil/sets/72157659239809498" target="_blank">
                        <img src="img/fotos/05-pp-memoria.jpg" alt="" width="485px" height="285px" />
                        <span class="texto">19º Festival I Programas Públicos I Oficina: "Memória tecida: Monotipia vista do Mali" I Abdoulaye Konaté</span>
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

