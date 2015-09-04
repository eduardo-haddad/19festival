<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<script>
        $(document).ready(
            function(){
                paletaArtistas($('.titulo'));
                
                <?php
                    for($i=1; $i<=5; $i++){ ?>
                       paletaArtistas($('.juri<?=$i;?> p')); 
                <?php } ?>

                
            }
        );
    </script>


<div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                    <?php pten('Júri','Jury'); ?>
                </p>
                </div>
            </div>
            
            <!-- JURI 1 -->
            <div class="row">
                    <div class="col-sm-12 col-md-6" style="text-align: center; float: right ">
                        <!-- <img src="img/artistas/anavaz.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;"  /> -->
                    </div>                 
                <div class="col-sm-12 col-md-6 juri1" style="float: left; margin-bottom: 24px">                     
                    <?php
                        pten('<p style="margin-bottom: 0">
                    
                    <span class="bold">Hoor Al-Qasimi</span> (Emirados Árabes Unidos), curadora e presidente da Sharjah Art Foundation, responsável pela Bienal de Sharjah.</p>',

                    '<p style="margin-bottom: 0"><span class="bold">Hoor Al-Qasimi</span> (United Arab Emirates), curator and president of the Sharjah Art Foundation, which holds the Sharjah Biennial</p>');
                    ?>
                </div>
            </div>
            <!-- /JURI 1 -->

            <div style="margin-bottom: 0px"></div>

           
            <!-- JURI 2 -->
            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: right ">
                    <!-- <img src="img/artistas/anavaz.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;"  /> -->
                </div>
                <div class="col-sm-12 col-md-6 juri2" style="float: left; margin-bottom: 24px">

                <?php
                pten('<p style="margin-bottom: 0;">
                    <span class="bold">N’Goné Fall</span> (Senegal), curadora de fotografia da Bienal de Bamako (2001) e da Bienal de Dakar (2002), crítica e ex-diretora editorial da Revue Noir.</p>', 

                    '<p style="margin-bottom: 0">
                    <span class="bold">N’Goné Fall</span> (Senegal), the photography curator for the Bamako Biennale (2001) and the Dakar Biennale (2002), art critic, and former Revue Noir editorial director.</p>');
                    ?>
                </div>             
            </div>
            <!-- /JURI 2 -->

            <div style="margin-bottom: 0px"></div>

            <!-- JURI 3 -->
            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: right ">
                    <!-- <img src="img/artistas/anavaz.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;" /> -->
                </div>
                <div class="col-sm-12 col-md-6 juri3" style="float: left; margin-bottom: 24px">                   
                <?php
                    pten('<p style="margin-bottom: 0">
                    <span class="bold">Priscila Arantes</span> (Brasil), curadora, crítica e diretora do Paço das Artes (São Paulo).</p>',

                    '<p style="margin-bottom: 0">
                    <span class="bold">Priscila Arantes</span> (Brazil), curator, art critic and the director of Paço das Artes (São Paulo).</p>');
                    ?>                
                </div>
            </div>
            <!-- /JURI 3 -->

            <!-- JURI 4 -->
            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: right ">
                    <!-- <img src="img/artistas/anavaz.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;" /> -->
                </div>
                <div class="col-sm-12 col-md-6 juri4" style="float: left; margin-bottom: 24px">                   
                <?php
                    pten('<p style="margin-bottom: 0">
                    <span class="bold">Till Fellrath</span> (Alemanha), curador e fundador ao lado de Sam Bardaouil (do Líbano) da plataforma curatorial multidisciplinar Art Reoriented.</p>',

                    '<p style="margin-bottom: 0">
                    <span class="bold">Till Fellrath</span> (Germany), curator, founding partners alongside with Sam Bardaouil (Lebanon), of the Art Reoriented multidisciplinary curatorial platform.</p>');
                    ?>                
                </div>
            </div>
            <!-- /JURI 4 -->

            <!-- JURI 5 -->
            <div class="row">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: right ">
                    <!-- <img src="img/artistas/anavaz.jpg" class="img-responsive retrato-artista" style=" margin-bottom: 25px;" /> -->
                </div>
                <div class="col-sm-12 col-md-6 juri5" style="float: left; margin-bottom: 24px">                    
                <?php
                    pten('<p style="margin-bottom: 0">
                    <span class="bold">Sofía Hernández Chong Cuy</span> (México), editora e curadora de arte contemporânea da Colección Patricia Phelps de Cisneros.</p>',

                    '<p style="margin-bottom: 0">
                    <span class="bold">Sofía Hernández Chong Cuy</span> (Mexico), editor and curator of contemporary art for Colección Patricia Phelps de Cisneros.</p>');
                    ?>                
                </div>
            </div>
            <!-- /JURI 5 -->