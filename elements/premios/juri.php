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
                    
                    <span class="bold">Hoor Al-Qasimi</span> (EAU), é artista e presidente da Sharjah Art Foundation, responsável pela Bienal de Charjah.</p>',

                    '<p style="margin-bottom: 0"><span class="bold">Hoor Al-Qasimi</span> (UAE), is an artist and chair of Sharjah Art Foundation, which is responsible for the Sharjah Biennial.</p>');
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
                    <span class="bold">N’Goné Fall</span> (Senegal), é curadora e crítica. Foi curadora-convidada da Bienal de Dacar de 2002.</p>', 

                    '<p style="margin-bottom: 0">
                    <span class="bold">N’Goné Fall</span> (Senegal), is a curator and a critic. She served as guest curator for the 2002 Dakar Biennale.</p>');
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
                    <span class="bold">Till Fellrath</span> (Suíça), é curador e cofundador, com Sam Bardaouil (Líbano), da plataforma curatorial multidisciplinar Art Reoriented.</p>',

                    '<p style="margin-bottom: 0">
                    <span class="bold">Till Fellrath</span> (Switzerland), is a curator and has established, along with fellow curator Sam Bardaouil (Lebanon), the Art Reoriented multidisciplinar curatorial platform.</p>');
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