<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Programas de Filmes - 19º Festival de Arte Contemporânea Sesc_Videobrasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/home.js"></script>
    <meta property="og:title" content="<?php echo ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil');?>"/>
    <meta property="og:type" content="website"/>
    <meta property="og:url" content="<?=$url.ltrim($_SERVER['REQUEST_URI'], '/');?>"/>
    <meta property="og:image" content="<?=$url?>img/logo_fb.png"/>
    <meta property="og:site_name" content="<?php echo ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil');?>"/>
    <meta property="og:description"
          content="O 19º Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul, que acontece de 6 de outubro a 6 de dezembro de 2015, em São Paulo, transforma o Sul no grande direcionador de seus eixos curatoriais e de toda a sua programação, tendo como referência suas múltiplas questões que dizem respeito a diásporas, identidades híbridas, trânsito migratório e viagens, narrativas pessoais, memórias, isolamento, tecido social e insularidade."/>
    <script>
        $(document).ready(
            function menuFilmes(){

                var hash = window.location.hash.split('#')[1],
                    
                    
                $menuFilmes = $('a[id^=prog]');

                if (hash) {

                    if(hash == 'obras'){ 
                               
                               $('#progs-conteudo').load('elements/progsfilmes/obras.php');
                               $menuFilmes.eq(0).addClass('ativo'); 
                               $('.bc-atual').html('obras');
                            }else if(hash == 'gabriel'){ 
                               
                               $('#progs-conteudo').load('elements/progsfilmes/gabriel.php');
                               $menuFilmes.eq(1).addClass('ativo'); 
                               $('.bc-atual').html('gabriel abrantes');
                            } else if(hash == 'programacao'){ 
                               
                               $('#progs-conteudo').load('elements/progsfilmes/programacao.php');
                               $menuFilmes.eq(2).addClass('ativo'); 
                               $('.bc-atual').html('programação');
                            }

                } else {

                    $('#progs-conteudo').load('elements/progsfilmes/obras.php');
                    $menuFilmes.eq(0).addClass('ativo'); //ativar primeiro item do menu
                }

                $menuFilmes.on(
                 'click', function(){
                        $menuFilmes.removeClass('ativo');
                        $(this).addClass('ativo'); //ativar item clicado

                        if($(this).hasClass('ativo')){
                            $id = $(this).attr('id'); //recuperar id do item clicado

                           if($id == 'prog1'){ 
                               
                               $('#progs-conteudo').load('elements/progsfilmes/obras.php');
                               $('.bc-atual').html('obras');
                            }else if($id == 'prog2'){ 
                               
                               $('#progs-conteudo').load('elements/progsfilmes/gabriel.php');
                               $('.bc-atual').html('gabriel abrantes');
                            } else if($id == 'prog3'){ 
                               
                               $('#progs-conteudo').load('elements/progsfilmes/programacao.php');
                               $('.bc-atual').html('programação');
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
                    <span> </span> 
                    <span><?php pten('programas de filmes > <span class="underline bc-atual">obras selecionadas</span>', 
                                     'film programs > <span class="underline bc-atual">knowledge zone</span>');  ?></span>       
                </div>
        	</div>
            <!-- /BREADCRUMB -->
            
            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                    <a id="prog1" name="prog1"><?php pten('Obras selecionadas', 'Selected Artworks') ?></a> | 
                    <a id="prog2" name="prog2"><?php pten('Gabriel Abrantes', 'Gabriel Abrantes') ?></a> | 
                    <a id="prog3" name="prog3"><?php pten('Programação', 'Schedule') ?></a></p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <div id="progs-conteudo"></div>
        
            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

