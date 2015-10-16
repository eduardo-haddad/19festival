<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Programas Públicos' : 'Public Programs';


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
            function menuPP(){
              

                var hash = window.location.hash.split('#')[1];

                    


                $menuPP = $('a[id^=pp]');

                if (hash) {

                    if(hash.substring(0, 5) == "sobre"){ 

                              criaUrlIdioma('#sobre');
                               $('#pp-conteudo').load('elements/pp/sobre.php', function(){
                                  $menuPP.eq(0).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('sobre', 'about');?>');
                                  $('#container').css('min-height', 'auto');
                               });
                               
                            }else if(hash.substring(0, 9) == 'encontros'){ 

                               criaUrlIdioma('#encontros');
                               $('#pp-conteudo').load('elements/pp/encontros.php', function(){
                                  $menuPP.eq(1).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('encontros e conversas', 'Meetings and conversations');?>');
                               });
                               
                            } else if(hash.substring(0, 9) == 'seminario'){ 

                               criaUrlIdioma('#seminario');
                               $('#pp-conteudo').load('elements/pp/seminario.php', function(){
                                  $menuPP.eq(2).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('seminário - lugares e sentidos na arte: debates a partir do Sul', 
                                                                  'seminar - Places and meanings in art: debates from the South');?>');
                               });
                               
                            } else if(hash.substring(0, 8) == 'oficinas'){ 

                               criaUrlIdioma('#oficinas');
                               $('#pp-conteudo').load('elements/pp/oficinas.php', function(){
                                  $menuPP.eq(3).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('oficinas', 'workshops');?>');
                               });
                               
                            } else if(hash.substring(0, 8) == 'mediacao'){ 

                               criaUrlIdioma('#mediacao');
                               $('#pp-conteudo').load('elements/pp/mediacao.php', function(){
                                  $menuPP.eq(4).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('ações de mediação', 'activation actions');?>');
                               });
                               
                            } else { 
                              
                              criaUrlIdioma('#sobre');
                               $('#pp-conteudo').load('elements/pp/sobre.php', function(){
                                  $menuPP.eq(0).addClass('ativo'); 
                                  $('.bc-atual').html('<?php pten('sobre', 'about');?>');
                                  $('#container').css('min-height', 'auto');
                               });

                            }

                } else {

                    
                    $('#pp-conteudo').load('elements/pp/sobre.php', function(){
                                  $menuPP.eq(0).addClass('ativo');  //ativar primeiro item do menu
                                  $('.bc-atual').html('<?php pten('sobre', 'about');?>');
                    });
                    
                }

                $menuPP.on(
                 'click', function(){
                        $menuPP.removeClass('ativo');
                        $(this).addClass('ativo'); //ativar item clicado

                        if($(this).hasClass('ativo')){
                            $id = $(this).attr('id'); //recuperar id do item clicado

                           if($id == 'pp-sobre'){ 
                                
                               criaUrlIdioma('#sobre');  
                               $('#pp-conteudo').load('elements/pp/sobre.php', function(){
                                    $('.bc-atual').html('<?php pten('sobre', 'about');?>');
                                    $('#container').css('min-height', 'auto');
                               });
                               
                            }else if($id == 'pp-encontros'){ 
                                
                               criaUrlIdioma('#encontros');       
                               $('#pp-conteudo').load('elements/pp/encontros.php', function(){
                                    $('.bc-atual').html('<?php pten('encontros e conversas', 'Meetings and conversations');?>');
                               });
                               
                            } else if($id == 'pp-seminario'){ 
                                
                               criaUrlIdioma('#seminario'); 
                               $('#pp-conteudo').load('elements/pp/seminario.php', function(){
                                    $('.bc-atual').html('<?php pten('seminário', 'seminar');?>');


                               });
                               
                            } else if($id == 'pp-oficinas'){ 
                                
                               criaUrlIdioma('#oficinas');   
                               $('#pp-conteudo').load('elements/pp/oficinas.php', function(){
                                    $('.bc-atual').html('<?php pten('oficinas', 'workshops');?>');
                               });
                               
                            } else if($id == 'pp-mediacao'){ 
                                
                               criaUrlIdioma('#mediacao');
                               $('#pp-conteudo').load('elements/pp/mediacao.php', function(){
                                    $('.bc-atual').html('<?php pten('ações de mediação', 'activation actions');?>');
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
                    <?php pten('<a href="index.php#pp" class="link">programas públicos</a> > <span class="underline bc-atual">encontros e conversas</span>', 
                               '<a href="index.php#pp" class="link">public programs</a> > <span class="underline bc-atual">meetings and conversations</span>'); ?>   
                </div>
        	</div>
            <!-- /BREADCRUMB -->

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu">
                            <a onclick="location.hash='sobre';" id="pp-sobre"><?php pten('Sobre','About');?></a> | 
                            <a onclick="location.hash='encontros';" id="pp-encontros"><?php pten('Encontros e Conversas','Meetings and conversations');?></a> | 
                            <a onclick="location.hash='seminario';" id="pp-seminario"><?php pten('Seminário','Seminar');?></a> | 
                            <a onclick="location.hash='oficinas';" id="pp-oficinas"><?php pten('Oficinas','Workshops');?></a> | 
                            <a onclick="location.hash='mediacao';" id="pp-mediacao"><?php pten('Ações de Mediação','Activation actions');?></a>
                    </p>     
                </div>
            </div>
            <!-- SUBMENU -->

            <div id="pp-conteudo"></div>
            
            
            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

