<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<script>
        $(document).ready(
            function(){
                paletaArtistas($('.titulo'));

                                
            }
        );
    </script>

<div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                    <?php pten('prêmio especial', 'special prize'); ?>

                </p>
                </div>
            </div>
            
            <div class="row" style="clear: both;">
                <div class="col-sm-12 col-md-6">
                    <img src="img/residencias/sparte.jpg" class="img-responsive retrato-artista" style="margin-bottom:15px" />
                </div>
            <div class="col-sm-12 col-md-6 h" style="float: right;">
                <?php pten(
                'Pela primeira vez, o Festival vai conceder o <span class="bold">Prêmio SP-Arte/Videobrasil</span>, com o objetivo de estimular e divulgar o trabalho de jovens artistas que abordam a discussão sobre o Sul Global em suas pesquisas. A iniciativa faz parte do programa de incentivo a artistas e desenvolvimento de novos talentos promovido pela SP-Arte, em parceria com o Videobrasil. O premiado terá uma exposição individual no Galpão VB, novo espaço da Associação Cultural Videobrasil,  com abertura prevista para o período da feira (7 a 10 de abril de 2016), momento em que São Paulo ganha visibilidade internacional graças ao mais relevante evento do mercado das artes no hemisfério sul.',

                'For the first time, the Festival is awarding the <span class="bold">SP-Arte/Videobrasil Prize</span>, designed to encourage and publicize the work of young artists whose lines of research focus on the debate surrounding the Global South. The initiative is part of SP-Arte’s program, in partnership with Videobrasil, to provide incentive to artists and foster up-and-coming talent. The winner will be featured in a solo exhibit at Galpão VB during the SP-Arte fair (April 7 to 10, 2016), a time when São Paulo takes to the global stage as it hosts the most relevant art market event in the Southern Hemisphere.');
                 ?>
             </div>
            </div>

            <br style="margin-bottom: 13px" />

          

            <div class="row link_rodape">
                <div class="col-md-12" style="padding-left: 0">
                    <span><?php pten('clique <a href="">aqui</a> e conheça os troféus das edições anteriores do festival', 'click here to learn more about the festival\'s past editions trophies');?></span>
                </div>
            </div>