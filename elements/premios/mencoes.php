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

;

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
            <?php pten('menções honrosas', 'honorable mentions'); ?>
        </p>
     </div>
</div>

<!-- 1 -->
<div class="row" style="clear: both;">   
    
        <div class="col-sm-12 col-md-6">
                   <img src="img/premiados/alicherri.jpg" />
        </div>       

    <div class="col-sm-12 col-md-6 premio-sobre" style="float: right;" >  

    <p style="display: inline" class="artista-premiado"><span class="upper">
    <a href="/alicherri" target="_blank" class="link">Ali Cherri</a></span> | <?php pten('Líbano', 'Lebanon');?></p> <br />     
    <span class="obra-premiada"><em>The Disquiet</em> | 2013, <?php pten('vídeo', 'video');?><br /></span>
    <div style="margin-bottom: 15px"></div>
    
    
    </div> 
</div>  
<!-- 1 -->

<div style="margin: 45px 0 19px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

<!-- 2 -->
<div class="row" style="clear: both;">   
    
        <div class="col-sm-12 col-md-6">
                   <img src="img/premiados/michaelmacgarry.jpg" />
        </div>       

    <div class="col-sm-12 col-md-6 premio-sobre" style="float: right;" >  

    <p style="display: inline" class="artista-premiado"><span class="upper">
    <a href="/michaelmacgarry" target="_blank" class="link">Michael MacGarry</a></span> | <?php pten('África do Sul', 'South Africa');?></p> <br />     
    <span class="obra-premiada"><em>Excuse me, while I disappear</em> | 2014, <?php pten('vídeo', 'video');?><br /></span>
    <div style="margin-bottom: 15px"></div>
    
    
    </div> 
</div>  
<!-- 2 -->

<div style="margin: 45px 0 19px 0; padding-top: 25px; padding-left: 0; border-top: 1pt solid #8F6B55; border-top-width: 100%;"></div>

<!-- 3 -->
<div class="row" style="clear: both;">   
    
        <div class="col-sm-12 col-md-6">
                   <img src="img/premiados/tausmakhacheva.jpg" />
        </div>       

    <div class="col-sm-12 col-md-6 premio-sobre" style="float: right;" >  

    <p style="display: inline" class="artista-premiado"><span class="upper">
    <a href="/tausmakhacheva" target="_blank" class="link">Taus Makhacheva</a></span> | <?php pten('Rússia', 'Russia');?></p> <br />     
    <span class="obra-premiada"><em>Gamsutl</em> | 2012, <?php pten('vídeo', 'video');?><br /></span>
    <div style="margin-bottom: 15px"></div>
    
    
    </div> 
</div>  
<!-- 3 -->





    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-33383260-2', 'auto');
        ga('send', 'pageview');
    </script>  
