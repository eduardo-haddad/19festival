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
                paletaArtistas($('.premio-sobre p:nth-child(5)'));
                paletaArtistas($('.artista-premiado, .obra-premiada'));


                $('a.link').on(
                 'click', function(){
                        
                        window.location.href = "http://19festival.com/premios_e_residencias.php#juri";
                        window.location.reload(true);
                               
                               
                            } 
                    
            );

            });


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
    
        <div class="col-sm-12 col-md-6">
                   <img src="img/premiados/huitao.jpg" />
        </div>       

    <div class="col-sm-12 col-md-6 premio-sobre" style="float: right;" >  

    <p style="display: inline" class="artista-premiado"><span class="upper">
    <a href="/huitao" target="_blank" class="link">Hui Tao</a></span> | China</p> <br />     
    <span class="obra-premiada"><em>Talk about body</em> | 2013, <?php pten('vídeo', 'video');?><br /></span>
    <div style="margin-bottom: 15px"></div>
    
    <?php
    //Sobre - PT

    pten('<p>O 19º Festival de Arte Contemporânea Sesc_Videobrasil oferece um Grande Prêmio, no valor bruto de R$ 75 mil (setenta e cinco mil reais), a um dos artistas selecionados pelo edital de obras desta edição, escolhido pelo <a class="link" style="cursor: pointer">Júri de Premiação</a>. </p>',

    //Sobre - EN
    '<p>The 19th Contemporary Art Festival Sesc_Videobrasil offers a Grand Prize worth BRL 75,000 (gross) to one of the artists selected from this edition’s artworks call for entries, chosen by the <a class="link" style="cursor: pointer;">Award Jury</a>.</p>');  ?> 
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
