<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

?>

            <script>
                
                paletaArtistas($('.titulo'));
            
            </script>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Videorelease', 'Videorelease');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12">
                    <iframe src="https://player.vimeo.com/video/<?php pten('141268445','141268225');?>?color=ffffff&title=0&byline=0&portrait=0" width="485" height="273" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    

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
