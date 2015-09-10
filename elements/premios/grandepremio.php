<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

   <script>
        $(document).ready(
            function(){
                paletaArtistas($('.titulo'));
                paletaArtistas($('.premio-sobre p:nth-child(1)'));
                paletaArtistas($('.premio-sobre p:nth-child(2)'));
                paletaArtistas($('.premio-sobre p:nth-child(3)'));
                paletaArtistas($('.premio-sobre p:nth-child(4)'));
       
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
            <?php pten('grande prêmio', 'grand prize'); ?>
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
    <?php
    //Sobre - PT
    pten('<p>O 19º Festival de Arte Contemporânea Sesc_Videobrasil oferece um Grande Prêmio a um dos artistas selecionados pelo edital de obras desta edição, escolhido pelo <a href="#juri" class="link">Júri de Premiação</a>. </p>',

    //Sobre - EN
    '<p>The 19th Contemporary Art Festival Sesc_Videobrasil offers a Grand Prize to one of the artists selected from this edition’s artworks call for entries, chosen by the <a href="#juri" class="link">Award Jury</a>.</p>');  ?> 
    </div> 
</div>         
