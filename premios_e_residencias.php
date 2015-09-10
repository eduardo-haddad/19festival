<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Prêmios de Residência' : 'Residency Prizes';

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?= ($idioma == 'pt' ? $titulo . ' - 19º Festival de Arte Contemporânea Sesc_Videobrasil' : $titulo . ' - 19th Contemporary Art Festival Sesc_Videobrasil')  ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/home.js"></script>
    <script>
        $(document).ready(
            function(){
                paletaArtistas($('.premio-sobre p:nth-child(1)'));
                paletaArtistas($('.premio-sobre p:nth-child(2)'));
                paletaArtistas($('.premio-sobre p:nth-child(3)'));
                paletaArtistas($('.premio-sobre p:nth-child(4)'));
                paletaArtistas($('.premio-local'));
                paletaArtistas($('.premio-nome'));
            }
        );
    </script>
    <script>

    function criaUrlIdioma(hash){
        $urlidiomapt = '<?php echo strtok($_SERVER["REQUEST_URI"],"?");echo "?idioma=pt" ?>';
        $urlidiomaen = '<?php echo strtok($_SERVER["REQUEST_URI"],"?");echo "?idioma=en" ?>';

        $('a.urlidiomapt').attr('href', $urlidiomapt + hash); 
        $('a.urlidiomaen').attr('href', $urlidiomaen + hash);
    }


        $(document).ready(
            function menuPR(){
              

                var hash = window.location.hash.split('#')[1];
                    


                $menuPR = $('a[id^=pr], a[class=link]');

                if (hash) {

                    if(hash == 'grandepremio'){ 

                              criaUrlIdioma('#grandepremio');
                               $('#pr-conteudo').load('elements/premios/grandepremio.php', function(){
                                  $menuPR.eq(0).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('grande prêmio', 'grand prize');?>');
                               });
                               
                            }else if(hash == 'premios'){ 

                               criaUrlIdioma('#premios');
                               $('#pr-conteudo').load('elements/premios/premios_residencia.php', function(){
                                  $menuPR.eq(1).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('Prêmios de residência','Residency prizes');?>');
                               });
                               
                            } else if(hash == 'juri'){ 

                               criaUrlIdioma('#juri');
                               $('#pr-conteudo').load('elements/premios/juri.php', function(){
                                  $menuPR.eq(3).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('Júri','Jury');?>');
                               });
                               
                            } else if(hash == 'trofeu'){ 

                               criaUrlIdioma('#trofeu');
                               $('#pr-conteudo').load('elements/premios/trofeu.php', function(){
                                  $menuPR.eq(4).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('Troféu','Trophy');?>');
                               });
                               
                            } else if(hash == 'especial'){ 

                               criaUrlIdioma('#especial');
                               $('#pr-conteudo').load('elements/premios/premio_especial.php', function(){
                                  $menuPR.eq(2).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('Prêmio especial','Special prize');?>');
                               });
                               
                            } 

                } else {

                    
                    criaUrlIdioma('#grandepremio');
                               $('#pr-conteudo').load('elements/premios/grandepremio.php', function(){
                                  $menuPR.eq(0).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('grande prêmio', 'grand prize');?>');
                               });
                    
                }

                $menuPR.on(
                 'click', function(){
                        $menuPR.removeClass('ativo');
                        $(this).addClass('ativo'); //ativar item clicado

                        if($(this).hasClass('ativo')){
                            $id = $(this).attr('id'); //recuperar id do item clicado

                           if($id == 'pr-grandepremio'){ 
                                
                               criaUrlIdioma('#grandepremio');  
                               $('#pr-conteudo').load('elements/premios/grandepremio.php', function(){
                                    $('.bc-atual').html('<?php pten('grande prêmio', 'grand prize');?>');
                               });
                               
                            }else if($id == 'pr-premios'){ 
                                
                               criaUrlIdioma('#premios');       
                               $('#pr-conteudo').load('elements/premios/premios_residencia.php', function(){
                                    $('.bc-atual').html('<?php pten('Prêmios de residência','Residency prizes');?>');
                               });
                               
                            } else if($id == 'pr-premioespecial'){ 
                                
                               criaUrlIdioma('#premioespecial'); 
                               $('#pr-conteudo').load('elements/premios/premioespecial.php', function(){
                                    $('.bc-atual').html('<?php pten('Prêmio especial', 'Special prize');?>');


                               });
                               
                            } else if($id == 'pr-juri'){ 
                                
                               criaUrlIdioma('#juri');   
                               $('#pr-conteudo').load('elements/premios/juri.php', function(){
                                    $('.bc-atual').html('<?php pten('Júri','Jury');?>');
                               });
                               
                            } else if($id == 'pr-trofeu'){ 
                                
                               criaUrlIdioma('#trofeu');
                               $('#pr-conteudo').load('elements/premios/trofeu.php', function(){
                                    $('.bc-atual').html('<?php pten('Troféu','Trophy');?>');
                               });
                               
                            } else if($id == 'pr-especial'){ 
                                
                               criaUrlIdioma('#especial');
                               $('#pr-conteudo').load('elements/premios/premio_especial.php', function(){
                                    $('.bc-atual').html('<?php pten('Prêmio especial','Special prize');?>');
                               });
                               
                            }
                        }
                }
                );
     
            }
        );
    </script>

</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include "elements/mapa.html"; ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container">

        <!-- HEADER -->
        <header><?php include "elements/header.html"; ?></header>
        <!-- /HEADER -->

        	<div style="height:36px; clear: both">&nbsp;</div>

            <!-- BREADCRUMB -->
        	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <?php pten('prêmios e residências > <span class="underline bc-atual">Prêmios de Residência</span>', 
                               'prizes and residencies > <span class="underline bc-atual">Residency Prizes</span>'); ?>   
                </div>
        	</div>
            <!-- BREADCRUMB -->

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu">
                            <a id="pr-grandepremio" href="#grandepremio"><?php pten('Grande prêmio','Grand prize');?></a> | 
                            <a id="pr-premios" href="#premios"><?php pten('Prêmios de residência','Residency prizes');?></a> | 
                            <a id="pr-especial" href="#especial"><?php pten('Prêmio especial','Special prize');?></a> |  
                            <a id="pr-juri" href="#juri"><?php pten('Júri','Jury');?></a> | 
                            <a id="pr-trofeu" href="#trofeu"><?php pten('Troféu','Trophy');?></a> 
                        </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <div id="pr-conteudo"></div>


           
            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

