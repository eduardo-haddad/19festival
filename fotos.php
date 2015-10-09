<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Encontros e conversas' : 'Meetings and conversations';


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
    <script src="js/19festival.js"></script>
    <!-- <script src="js/jquery.scrollTo.min.js"></script> -->


    

    <script>

    function criaUrlIdioma(hash){
        $urlidiomapt = '<?php echo strtok($_SERVER["REQUEST_URI"],"?");echo "?idioma=pt" ?>';
        $urlidiomaen = '<?php echo strtok($_SERVER["REQUEST_URI"],"?");echo "?idioma=en" ?>';

        $('a.urlidiomapt').attr('href', $urlidiomapt + hash); 
        $('a.urlidiomaen').attr('href', $urlidiomaen + hash);
    }


        $(document).ready(
            function menuFotos(){
              

                var hash = window.location.hash.split('#')[1];

                    


                $menuFotos = $('a[id^=menu]');

                if (hash) {

                    if(hash.substring(0, 5) == "fotos"){ 

                              criaUrlIdioma('#fotos');
                               $('#conteudo').load('elements/fotosvideos/fotos.php', function(){
                                  $menuFotos.eq(0).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('fotos', 'photos');?>');
                                  $('#container').css('min-height', 'auto');
                               });
                               
                            }else if(hash.substring(0, 6) == 'videos'){ 

                               criaUrlIdioma('#videos');
                               $('#conteudo').load('elements/fotosvideos/videos.php', function(){
                                  $menuFotos.eq(1).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('vídeos', 'videos');?>');
                               });
                               
                            } else { 

                              criaUrlIdioma('#fotos');
                               $('#conteudo').load('elements/fotosvideos/fotos.php', function(){
                                  $menuFotos.eq(0).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('fotos', 'photos');?>');
                                  $('#container').css('min-height', 'auto');
                               });
                               
                            }

                } else {

                    
                    $('#conteudo').load('elements/fotosvideos/fotos.php', function(){
                                  $menuFotos.eq(0).addClass('ativo');  //ativar primeiro item do menu
                                  $('.bc-atual').html('<?php pten('fotos', 'photos');?>');
                    });
                    
                }

                $menuFotos.on(
                 'click', function(){
                        $menuFotos.removeClass('ativo');
                        $(this).addClass('ativo'); //ativar item clicado

                        if($(this).hasClass('ativo')){
                            $id = $(this).attr('id'); //recuperar id do item clicado

                           if($id == 'menu-fotos'){ 
                                
                               criaUrlIdioma('#fotos');  
                               $('#conteudo').load('elements/fotosvideos/fotos.php', function(){
                                    $('.bc-atual').html('<?php pten('fotos', 'photos');?>');
                                    $('#container').css('min-height', 'auto');
                               });
                               
                            }else if($id == 'menu-videos'){ 
                                
                               criaUrlIdioma('#videos');       
                               $('#conteudo').load('elements/fotosvideos/videos.php', function(){
                                    $('.bc-atual').html('<?php pten('vídeos', 'videos');?>');
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

    <main class="container" id="container" >

        <!-- HEADER -->
        <header><?php include "elements/header.html"; ?></header>
        <!-- /HEADER -->

            <div style="height:36px; clear: both">&nbsp;</div>

            
            <!-- BREADCRUMB -->
            <div class="row">
                <div class="col-xs-12 breadcrumb">
                    <span><a href="index.php#fotosvideos" class="link"><?php pten('fotos e videos', 'photos and videos');?></a></span>      
                </div>
            </div>
            <!-- /BREADCRUMB -->

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu">
                            <a onclick="location.hash='fotos';" id="menu-fotos"><?php pten('fotos', 'photos');?></a> | 
                            <a onclick="location.hash='videos';" id="menu-videos"><?php pten('vídeos', 'videos');?></a> 
                    </p>     
                </div>
            </div>
            <!-- SUBMENU -->

            <div id="conteudo"></div>
            
            
            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

