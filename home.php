<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <title><?= ($idioma == 'pt' ? '19º Festival de Arte Contemporânea Sesc_Videobrasil' : '19th Contemporary Art Festival Sesc_Videobrasil')  ?></title>
    <meta name="viewport" content="width=device-width">
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


    //filtro de lista de nomes
$(document).ready(
    function filtroLista(){

        $listas = $('a[id^=sm-artistas]');
        $nomes = $('li[class^=sm-artistas]');

        $listas.eq(0).addClass('ativo'); //ativar primeiro item do menu

        $listas.on(
            'click', function(){
                $listas.removeClass('ativo');
                $(this).addClass('ativo'); //ativar item clicado

                if($(this).hasClass('ativo')){
                    $id = $(this).attr('id'); //recuperar id do item clicado

                    if($id == 'sm-artistas-todos'){ //mostrar todos nomes da lista
                        $nomes.each(    
                            function(){
                                $('.linhafina').hide();
                                $(this).show();
                            }
                        );
                    }else{

                        
                        $nomes.each(
                            function(){
                                if($id != $(this).attr('class')){ //se id do item != class de um nome
                                    $(this).hide(); //esconda nome
                                } else {
                                    $(this).show();


                                } 
                            }
                        );

                        switch($id) {

                            case 'sm-artistas-obras':
                                $('.linhafina').hide();
                                $('#lista ol').prepend('<li class="linhafina s"><?php pten('Artistas selecionados pelo edital de obras','Artists selected from the artworks<br>call for entries');?></li>'); break;
                            case 'sm-artistas-projetos':
                                $('.linhafina').hide();
                                $('#lista ol').prepend('<li class="linhafina s"><?php pten('Artistas selecionados pelo edital de<br>projetos comissionados','Artists selected from the comissioned<br>projects call for entries');?></li>'); break;
                            case 'sm-artistas-convidados':
                                $('.linhafina').hide();
                                $('#lista ol').prepend('<li class="linhafina s"><?php pten('Artistas convidados','Guest artists');?></li>'); break;
                            // case 'sm-artistas-todos':
                                // $('.linhafina').hide(); break;
                                
                        }

                    }
                }
            }
        );
    }
);


    $(document).ready(
        function random(){

            var random;
            
            random = (Math.floor(Math.random() * (65)) + 1);
        
            $('#random img').attr('src', 'img/home/random/obra' + random + '.jpg');

            switch(random){
                case 1: $('#random a').attr('href', '/abdoulayekonate'); break;
                case 2: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 3: $('#random a').attr('href', '/soniagomes'); break;
                case 4: $('#random a').attr('href', '/ytobarrada'); break;
                case 5: $('#random a').attr('href', '/robertosantaguida'); break;
                case 6: $('#random a').attr('href', '/slinko'); break;
                case 7: $('#random a').attr('href', '/karolinabregula'); break;
                case 8: $('#random a').attr('href', '/tatianafuentessadowski'); break;
                case 9: $('#random a').attr('href', '/alicherri'); break;
                case 10: $('#random a').attr('href', '/kushbadhwar'); break;
                case 11: $('#random a').attr('href', '/viktorijarybakova'); break;
                case 12: $('#random a').attr('href', '/anavaz'); break;
                case 13: $('#random a').attr('href', '/chulayarnnonsiriphol'); break;
                case 14: $('#random a').attr('href', '/distruktur'); break;
                case 15: $('#random a').attr('href', '/leticiaramos'); break;
                case 16: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 17: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 18: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 19: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 20: $('#random a').attr('href', '/gabrielabrantes'); break;
                case 21: $('#random a').attr('href', '/alinexegustavojardim'); break;
                case 22: $('#random a').attr('href', '/andresbedoya'); break;
                case 23: $('#random a').attr('href', '/armandoqueiroz'); break;
                case 24: $('#random a').attr('href', '/betoshwafaty'); break;
                case 25: $('#random a').attr('href', '/biancabaldi'); break;
                case 26: $('#random a').attr('href', '/carlosmelo'); break;
                case 27: $('#random a').attr('href', '/chameckilerner'); break;
                case 28: $('#random a').attr('href', '/claraianni'); break;
                case 29: $('#random a').attr('href', '/claraianni'); break;
                case 30: $('#random a').attr('href', '/danielfrota'); break;
                case 31: $('#random a').attr('href', '/danieljacoby'); break;
                case 32: $('#random a').attr('href', '/danielmonroycuevas'); break;
                case 33: $('#random a').attr('href', '/deborabolsoni'); break;
                case 34: $('#random a').attr('href', '/dorguez'); break;
                case 35: $('#random a').attr('href', '/enriqueramirez'); break;
                case 36: $('#random a').attr('href', '/rodolphoparigi'); break;
                case 37: $('#random a').attr('href', '/felipebittencourt'); break;
                case 38: $('#random a').attr('href', '/haroongunn-salie'); break;
                case 39: $('#random a').attr('href', '/huitao'); break;
                case 40: $('#random a').attr('href', '/iosuaramburu'); break;
                case 41: $('#random a').attr('href', '/joaocastilho'); break;
                case 42: $('#random a').attr('href', '/kokenergun'); break;
                case 43: $('#random a').attr('href', '/louisebotkay'); break;
                case 44: $('#random a').attr('href', '/lucianamagno'); break;
                case 45: $('#random a').attr('href', '/mariakramar'); break;
                case 46: $('#random a').attr('href', '/koutsomichalis-varela-psarra'); break;
                case 47: $('#random a').attr('href', '/mayawatanabe'); break;
                case 48: $('#random a').attr('href', '/michaelmacgarry'); break;
                case 49: $('#random a').attr('href', '/mihaigrecu'); break;
                case 50: $('#random a').attr('href', '/monicarodriguez'); break;
                case 51: $('#random a').attr('href', '/pablolobato'); break;
                case 52: $('#random a').attr('href', '/paulonazareth'); break;
                case 53: $('#random a').attr('href', '/paulonimerpjota'); break;
                case 54: $('#random a').attr('href', '/paulonimerpjota'); break;
                case 55: $('#random a').attr('href', '/pilarmatadupont'); break;
                case 56: $('#random a').attr('href', '/rafaelrg'); break;
                case 57: $('#random a').attr('href', '/rodrigocass'); break;
                case 58: $('#random a').attr('href', '/roydib'); break;
                case 59: $('#random a').attr('href', '/roydib'); break;
                case 60: $('#random a').attr('href', '/runolagomarsino'); break;
                case 61: $('#random a').attr('href', '/solonribeiro'); break;
                case 62: $('#random a').attr('href', '/tausmakhacheva'); break;
                case 63: $('#random a').attr('href', '/tiecourandaou'); break;
                case 64: $('#random a').attr('href', '/verachavesbarcellos'); break;
                case 65: $('#random a').attr('href', '/waleriaamerico'); break;

            }

        }
    );




        function hoverMenu($menu, $texto){

            var abertura = false; //valor para menu fechado
            var $todosMenus = $('[id^=menuprincipal]').not($menu); //todos os itens menos o atual
            var $todosTextos = $('[id^=texto]').not($texto); //todos os textos menos o atual

            function checaMenu(){

                if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/expos_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/expos_1.png">'); }  
                if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/progsfilmes_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/progsfilmes_1.png">'); }  
                if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/performances_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/performances_1.png">'); }  
                if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/pp_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/pp_1.png">'); }  
                if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/premios_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/premios_1.png">'); }  
                if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/publicacoes_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/publicacoes_1.png">'); }   
                if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/sobre_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/sobre_1.png">'); }  
           
            }


            function fechaMenu(){
                $texto.slideUp('easeInOutCubic',function(){
                    checaMenu();
                    abertura = false; 
                });
            }

            function abreMenu(){
                $texto.slideDown('easeInOutCubic', function(){
                abertura = true; 
                });
            }

                $menu.hover(         //toggle de abertura de menu com alteração de imagem onhover
                        function(){         // função para onmouseover
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/expos_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/expos_2.png">'); }  
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/progsfilmes_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/progsfilmes_2.png">'); }  
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/performances_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/performances_2.png">'); }  
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/pp_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/pp_2.png">'); }  
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/premios_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/premios_2.png">'); }  
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/publicacoes_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/publicacoes_2.png">'); }
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/sobre_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/sobre_2.png">'); }


                            $menu.on(
                                'click', function(){
                                    if(abertura == false){
                                        abreMenu();
                                        
                                       /*$todosTextos.each( //fechar todos itens menos o atual
                                        function(){
                                            $(this).slideUp('easeInOutCubic');
                                                                                
                                        });*/

                                    } else {
                                        fechaMenu();                            
                                        }
                                }
                            );
                        }, 
                        
                        function(){ //mouseleave
                            if($texto.is(':not(:visible)')){
                                checaMenu();
                            }  
                        }
                        
                );
        }

        $(document).ready(
            function inicioMenu(){
                <?php 
                    for($i=0; $i<=12; $i++) { ?>
                        hoverMenu($('#menuprincipal<?=$i?>'), $('#texto<?=$i?>a'));<?php
                } ?>
            }

        );


            function hoverSimples($menu){

                
                
                $menu.hover(         //toggle de abertura de menu com alteração de imagem onhover
                        function(){
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/agenda_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/agenda_2.png">'); }
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/fotosvideos_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/fotosvideos_2.png">'); }
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/noticias_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/noticias_2.png">'); }
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/imprensa_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/imprensa_2.png">'); }
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/zona_1.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/zona_2.png">'); }
                        },
                        function(){
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/agenda_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/agenda_1.png">'); }
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/fotosvideos_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/fotosvideos_1.png">'); }
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/noticias_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/noticias_1.png">'); }
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/imprensa_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/imprensa_1.png">'); }
                            if($menu.html() == '<img src="img/botoes/<?php pten('pt','en');?>/zona_2.png">'){ $menu.html('<img src="img/botoes/<?php pten('pt','en');?>/zona_1.png">'); }
                        }
                );

            $menu.on(
                'click', function(event){

                    if($menu.attr('id') == 'simples-agenda') { window.location.href='agenda.php'; }
                    if($menu.attr('id') == 'simples-fotos') { window.location.href='fotos.php'; }
                    if($menu.attr('id') == 'simples-noticias') { window.open('http://site.videobrasil.org.br/news/tag/1798210'); }
                    if($menu.attr('id') == 'simples-imprensa') { window.location.href='imprensa.php'; }
                    if($menu.attr('id') == 'simples-zona') { window.location.href='zona.php'; }
                }
                );

                
            }


         $(document).ready(
            function inicioHoverSimples(){
                hoverSimples($('#simples-agenda'));
                hoverSimples($('#simples-fotos'));
                hoverSimples($('#simples-noticias'));
                hoverSimples($('#simples-zona'));
                hoverSimples($('#simples-imprensa'));

            }

        );

         $(document).ready(
            function(){


                $('#participantes').hover(
                    function(){
                        if($('#participantes').attr('src') == 'img/home/participantes_<?php pten('pt', 'en');?>_1.png'){ $('#participantes').attr('src', 'img/home/participantes_<?php pten('pt', 'en');?>_2.png'); }
                    },

                    function(){
                        if($('#participantes').attr('src') == 'img/home/participantes_<?php pten('pt', 'en');?>_2.png'){ $('#participantes').attr('src', 'img/home/participantes_<?php pten('pt', 'en');?>_1.png'); }
                    }
                    );

            }
        );

        


    </script>

    <style type="text/css">

        

    </style>

</head>
<body>
    <!-- MAPA DO SITE -->
    <aside id="mapadosite"><?php include "elements/mapa.html"; ?></aside>
    <!-- /MAPA DO SITE -->

    <main class="container" id="container" style="min-height: 1200px">

        <!-- HEADER -->
        <header><?php include "elements/header.html"; ?></header>
        <!-- /HEADER --><div id="teste-link"></div>

        	<div style="height:36px; clear: both">&nbsp;</div>
        	<div class="row">
        		<div class="col-sm-12 col-md-6">
        			<table width="100%" border="0" cellspacing="0" cellpadding="0">
        			  <tr>
        			    <td id="random"><a><img style="max-width: 365px" src="" /></a></td>
        			  </tr>
        			  <tr>
        			    <td>
                            <div>
                                <img id="participantes" src="img/home/participantes_<?php pten('pt', 'en');?>_1.png" style="margin: 25px 0 22px 0">
                            </div>
                        </td>
        			  </tr>
        			  <tr >
        			    <td><div style="display: table;"><div style="display: table-cell; vertical-align: middle;"><div style="clear: both; height: 20px;" class="submenu">
                        <a id="sm-artistas-todos"><?php pten('Todos','All');?></a> | 
                        <a id="sm-artistas-obras"><?php pten('Obras','Works');?></a> | 
                        <a id="sm-artistas-projetos"><?php pten('Projetos','Projects');?></a> | 
                        <a id="sm-artistas-convidados"><?php pten('Convidados','Guests');?></a></div></div></div></td>

        			  </tr>
        			  <tr>
        			    <td>
        			    	<div id="lista">
                                <ol>
                                <li class="sm-artistas-convidados"><a href="/abdoulayekonate">Abdoulaye Konaté | <?php pten('Mali', 'Mali'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/alicherri">Ali Cherri | <?php pten('Líbano/França', 'Lebanon/France'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/alinexegustavojardim">Aline X e Gustavo Jardim | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/anavaz">Ana Vaz | <?php pten('Brasil/França', 'Brazil/France'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/andresbedoya">Andres Bedoya | <?php pten('Bolívia', 'Bolivia'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/armandoqueiroz">Armando Queiroz | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/betoshwafaty">Beto Shwafaty | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/biancabaldi">Bianca Baldi | <?php pten('África do Sul/Alemanha', 'South Africa/Germany'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/carlosmelo">Carlos Mélo | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-projetos"><a href="/carlosmonroy">Carlos Monroy | <?php pten('Colômbia', 'Colombia'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/chameckilerner">Chameckilerner | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/chulayarnnonsiriphol">Chulayarnnon Siriphol | <?php pten('Tailândia', 'Thailand'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/claraianni">Clara Ianni | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-projetos"><a href="/cristianolenhardt">Cristiano Lenhardt | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/danielfrota">Daniel Frota | <?php pten('Brasil/Países Baixos', 'Brazil/Netherlands'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/danieljacoby">Daniel Jacoby | <?php pten('Peru/Países Baixos', 'Peru/Netherlands'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/danielmonroycuevas">Daniel Monroy Cuevas | <?php pten('México', 'Mexico'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/deborabolsoni">Débora Bolsoni | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/distruktur">Distruktur | <?php pten('Brasil/Alemanha', 'Brazil/Germany'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/dorguez">Dor Guez | <?php pten('Israel', 'Israel'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/enriqueramirez">Enrique Ramírez | <?php pten('Chile/França', 'Chile/France'); ?></a></li>
                                <li class="sm-artistas-convidados"><a href="/gabrielabrantes">Gabriel Abrantes | <?php pten('Portugal', 'Portugal'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/felipebittencourt">Felipe Bittencourt | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/haroongunn-salie">Haroon Gunn-Salie | <?php pten('África do Sul', 'South Africa'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/huitao">Hui Tao | <?php pten('China', 'China'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/iosuaramburu">Iosu Aramburu | <?php pten('Peru', 'Peru'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/joaocastilho">João Castilho | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/karolinabregula">Karolina Bregula | <?php pten('Polônia', 'Poland'); ?></a></li>
                                <li class="sm-artistas-projetos"><a href="/keli-safiamaksud">Keli-Safia Maksud | <?php pten('Quênia', 'Kenya'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/kokenergun">Köken Ergun | <?php pten('Turquia', 'Turkey'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/kushbadhwar">Kush Badhwar | <?php pten('Índia/Austrália', 'India/Australia'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/leticiaramos">Leticia Ramos | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/louisebotkay">Louise Botkay | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/lucianamagno">Luciana Magno | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/mariakramar">Maria Kramar | <?php pten('Rússia', 'Russia'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/koutsomichalis-varela-psarra">Marinos Koutsomichalis, Maria Varela,<br>Afroditi Psarra | <?php pten('Grécia', 'Greece'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/mayawatanabe">Maya Watanabe | <?php pten('Peru/Países Baixos', 'Peru/Netherlands'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/michaelmacgarry">Michael MacGarry | <?php pten('África do Sul', 'South Africa'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/mihaigrecu">Mihai Grecu | <?php pten('Romênia/França', 'Romania/France'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/monicarodriguez">Monica Rodriguez | <?php pten('Porto Rico/EUA', 'Puerto Rico/USA'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/pablolobato">Pablo Lobato | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/paulonazareth">Paulo Nazareth | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/paulonimerpjota">Paulo Nimer Pjota | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/pilarmatadupont">Pilar Mata Dupont | <?php pten('Austrália', 'Australia'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/rafaelrg">Rafael RG | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/robertosantaguida">Roberto Santaguida | <?php pten('Canadá/Sérvia', 'Canada/Serbia'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/rodolphoparigi">Rodolpho Parigi | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/rodrigocass">Rodrigo Cass | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-convidados"><a href="/rodrigomatheus">Rodrigo Matheus | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/roydib">Roy Dib | <?php pten('Líbano', 'Lebanon'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/runolagomarsino">Runo Lagomarsino | <?php pten('Suécia/Brasil', 'Sweden/Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/slinko">Slinko | <?php pten('Ucrânia/EUA', 'Ukraine/USA'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/solonribeiro">Solon Ribeiro | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-convidados"><a href="/soniagomes">Sônia Gomes | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/tatianafuentessadowski">Tatiana Fuentes Sadowski | <?php pten('Peru/França', 'Peru/France'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/tausmakhacheva">Taus Makhacheva | <?php pten('Rússia', 'Russia'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/tiecourandaou">Tiécoura N'Daou | <?php pten('Mali', 'Mali'); ?></a></li>
                                <li class="sm-artistas-projetos"><a href="/ting-tingcheng">Ting-Ting Cheng | <?php pten('Taiwan', 'Taiwan'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/verachavesbarcellos">Vera Chaves Barcellos | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/viktorijarybakova">Viktorija Rybakova | <?php pten('Lituânia/México', 'Lithuania/Mexico'); ?></a></li>
                                <li class="sm-artistas-obras"><a href="/waleriaamerico">Waléria Américo | <?php pten('Brasil', 'Brazil'); ?></a></li>
                                <li class="sm-artistas-convidados"><a href="/ytobarrada">Yto Barrada | <?php pten('Marrocos/França', 'Morocco/France'); ?></a></li>
                                    			        
        				        </ol>
            				</div>
        			    </td>
        			  </tr>
        			</table>
        		</div>
        		<p></p>
        		<div class="col-sm-12 col-md-6" id="menuprincipal">

                    <!-- SOBRE -->
        			<div id="menuprincipal1" class="fonteMenu"><img src="img/botoes/<?php pten('pt','en');?>/sobre_1.png"></div>
                    <div id="texto1a" class="texto" style="display:none;">
                        <p class="submenu" style="margin-bottom: -6px;">
                            <a href="apresentacao.php"><?php pten('Apresentação','Introduction');?></a><br />
                            <a href="palavrasesc.php"><?php pten('Palavra do Sesc','Word from Sesc');?></a><br />
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a><br />
                            <a href="identidade.php"><?php pten('Identidade Visual','Visual Identity');?></a><br />
                            <a href="realizacao.php"><?php pten('Realização','Undertaking');?></a><br />
                            <a href="parceiros.php"><?php pten('Parceiros','Supporters');?></a><br />
                            <a href="fichatecnica.php"><?php pten('Ficha técnica','Staff');?></a><br />
                            <a href="convocatorias.php"><?php pten('Convocatórias 19º','Open calls');?></a><br />
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a>
                        </p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu"></p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>
                    <!-- /SOBRE -->


                    <!-- EXPOSIÇOES -->
                    <div id="menuprincipal2" class="fonteMenu"><img src="img/botoes/<?php pten('pt','en');?>/expos_1.png"></div>
        			<div id="texto2a" class="texto" style="display:none;">
        				<p class="submenu">
                            <a href="expo_convidados.php"><?php pten('Artistas convidados','Guest artists');?></a> | 
                            <a href="expo_projetos.php"><?php pten('Projetos comissionados','Comissioned projects');?></a> | 
                            <a href="expo_obras.php"><?php pten('Obras selecionadas','Selected works');?></a> | 
                            <a href="expo_paralela.php"><?php pten('Exposicão paralela','Parallel exhibition');?></a> | 
                            <a href="expo_locais.php"><?php pten('Locais','Venues');?></a>
                        </p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu f"><?php pten(
                            'A diversificada produção artística do Sul global se espalha por São Paulo durante o <span class="bold">19º Festival de
                            Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul</span>. Nesta edição, o Festival apresenta três exposições
                            (na Convivência e no Galpão do Sesc Pompeia, e no Galpão VB, nova sede da Associação Cultural Videobrasil).
                            Uma exposição paralela, com obras do Acervo Videobrasil, também faz parte da programação e acontece no Paço das Artes.'
                            ,
                            'The plural production of the global South takes São Paulo by storm during the <span class="bold">19th Contemporary Art Festival Sesc_Videobrasil | Southern Panoramas</span>. This edition of the Festival has three exhibits (at Sesc Pompeia’s Convivência and Galpão venues and at Galpão VB, the new headquarters of Associação Cultural Videobrasil). The program also includes a parallel show featuring Videobrasil Collection artworks at Paço das Artes.'); ?></p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>
                    <!-- /EXPOSIÇOES -->
        			
                    <!-- PROGRAMAS DE FILMES -->
        			<div id="menuprincipal3" class="fonteMenu"><img src="img/botoes/<?php pten('pt','en');?>/progsfilmes_1.png"></div>
                    <div id="texto3a" class="texto" style="display:none;">
                        <p class="submenu">
                            <a href="progsfilmes.php#obras"><?php pten('Obras selecionadas','Selected works');?></a> | 
                            <a href="progsfilmes.php#gabriel">Gabriel Abrantes</a> | 
                            <a href="progsfilmes.php#programacao"><?php pten('Programação','Schedule');?></a>
                        </p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu k"><?php pten('O Programa de Filmes do 19º Festival apresenta no Teatro do Sesc Pompeia e no Galpão VB obras selecionadas que exigem exibição em sala de cinema e uma performance, além de um programa especial, com uma reunião de trabalhos do artista convidado Gabriel Abrantes.', 
                                                                       'Sesc Pompeia’s Teatro and Galpão VB will host the 19th Festival\'s Film Program, featuring a series of selected works created for the big screen, one performance, and a selection of pieces by guest artist Gabriel Abrantes.');?> </p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>
                    <!-- /PROGRAMAS DE FILMES -->
        			
                    <!-- PERFORMANCES -->
        			<div id="menuprincipal4" class="fonteMenu"><img src="img/botoes/<?php pten('pt','en');?>/performances_1.png"></div>
                    <div id="texto4a" class="texto" style="display:none;">
                        <!-- <p class="submenu"><a href="">ARTISTAS CONVIDADOS</a> | <a href="">PROJETOS COMISSIONADOS</a> | <a href="">OBRAS SELECIONADAS</a> | <a href="">EXPOSICÃO PARALELA</a> | <a href="">LOCAIS</a></p> -->

                        <div style="display:inline">
                        <p class="nomargin texto-submenu k"><?php pten('Além dos vídeos, videoinstalações, fotografias, gravuras, pinturas e instalações que compõem a exposição <span class="bold">Panoramas do Sul | Obras Selecionadas</span>, o 19º Festival apresenta três performances de artistas e grupos selecionadas pelo edital de obras. Duas delas são apresentadas no espaço expositivo na área de Convivência do Sesc Pompeia. A terceira performance acontece no Teatro do Sesc Pompeia, onde também são exibidos os Programas de Filmes do 19º Festival.', 
                                                                       'Besides the videos, video installations, photographs, prints, paintings, and installations in the <span class="bold">Southern Panoramas | Selected Works</span> exhibit, the 19th Festival will feature three performances by artists and groups selected through the open call for artwork entries. Two of them will be enacted at Sesc Pompeia’s Convivência area. The third performance will be presented at Sesc Pompeia’s Teatro, where the 19th Festival’s Film Programs will also be on show.');?></p>
                            <p class="vejamais"><a href="performances.php"><?php pten('Saiba+','Learn more');?></a></p>
                        </div>

                        
                    </div>
                    <!-- /PERFORMANCES -->


        			<!-- PROGRAMAS PUBLICOS -->      			
        			<div id="menuprincipal5" class="fonteMenu"><img src="img/botoes/<?php pten('pt','en');?>/pp_1.png"></div>
                    <div id="texto5a" class="texto" style="display:none;">
                        <p class="submenu">
                            <a href="pp.php#sobre"><?php pten('Sobre','About');?></a> | 
                            <a href="pp.php#encontros"><?php pten('Encontros e Conversas','Meetings and conversations');?></a> | 
                            <a href="pp.php#seminario"><?php pten('Seminário','Seminar');?></a> | 
                            <a href="pp.php#oficinas"><?php pten('Oficinas','Workshops');?></a><br>
                            <a href="pp.php#mediacao"><?php pten('Ações de Mediação','Activation actions');?></a> 
                        </p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu l"><?php pten('Quatro conjuntos de atividades exploram o conteúdo das exposições do Festival: o Seminário Lugares e sentidos da arte: debates a partir do Sul, que reflete sobre as possibilidades de alargamento das categorias da arte na contemporaneidade, as Oficinas, sessões práticas de exercício de linguagens; os Encontros e conversas, oportunidades informais de troca; e as Ações de Mediação conduzidas pelos educadores do Festival. A programação envolve artistas participantes das exposições e convidados, entre curadores, pesquisadores, e representantes de instituições parceiras, além dos educadores.',
                                                                       'Four different sets of activities will explore the contents of the Festival’s exhibitions: the Seminar Places and meanings of art: debates from the South, which reflects about the possibilities of broadening the artistic categories in contemporaneity; the Workshops, practical sessions for exercise on language; Meetings and conversations, informal opportunities for exchange; and Mediated Actions hosted by the Festival’s educators. The program involves artists featured in the exhibitions, as well as guest curators, researchers, and delegates from partner organizations, as well as educators. ');?></p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>
                    <!-- /PROGRAMAS PUBLICOS --> 


                    <!-- ZONA DE REFLEXAO --> 
                    <div id="simples-zona" class="fonteMenu" style="height: 62px;"><img src="img/botoes/<?php pten('pt','en');?>/zona_1.png"></div>
                    <!-- /ZONA DE REFLEXAO --> 


        			<!-- PREMIOS E RESIDENCIAS --> 
        			<div id="menuprincipal7" class="fonteMenu"><img src="img/botoes/<?php pten('pt','en');?>/premios_1.png"></div>
                    <div id="texto7a" class="texto" style="display:none;">
                        <p class="submenu">
                            <a href="premios_e_residencias.php#grandepremio"><?php pten('Grande prêmio','Grand prize');?></a> | 
                            <a href="premios_e_residencias.php#premios"><?php pten('Prêmios de residência','Residency prizes');?></a> | 
                            <a href="premios_e_residencias.php#especial"><?php pten('Prêmio especial','Special prize');?></a><br />
                            <a href="premios_e_residencias.php#juri"><?php pten('Júri','Jury');?></a> | 
                            <a href="premios_e_residencias.php#trofeu"><?php pten('Troféu','Trophy');?></a> 
                        </p>
                        
                        <div style="display:inline">
                        <p class="nomargin texto-submenu r"><?php pten(
                            'O <span class="bold">19º Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul</span> amplia seu número de premiações. Além do Grande Prêmio em dinheiro, no valor bruto total de R$ 75 mil, e de nove prêmios de residência, o 19º Festival lança um prêmio especial: o Prêmio SP-Arte. Concorrem à premiação os 53 artistas selecionados pelo edital de obras que participam de exposição e programas de filmes no Sesc Pompeia e no Galpão VB, em São Paulo, Brasil, de 6 de outubro a 6 de dezembro de 2015. Os artistas premiados serão anunciados no dia <span class="bold">10 de outubro</span>, em cerimônia no Teatro do Sesc Pompeia, às 18h.',
                            'The <span class="bold">19th Contemporary Art Festival Sesc_Videobrasil | Southern Panoramas</span> will award a greater number of prizes. In addition to the Grand Prize worth BRL 75,000 in cash (gross) and its nine residency prizes, the 19th Festival will see the launch of a special prize: the SP-Arte Prize. Eligible artists include the 53 artists selected via a call for artworks participating in an exhibition and in film programs set to run at Sesc Pompeia and Galpão_VB. The winners will be announced on <span class="bold">October 10</span>, in a ceremony at Sesc Pompeia’s Teatro, at 6pm.');?></p>
                            
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>
                    <!-- /PREMIOS E RESIDENCIAS -->
        			

                    <!-- PUBLICACOES -->
        			<div id="menuprincipal8" class="fonteMenu"><img src="img/botoes/<?php pten('pt','en');?>/publicacoes_1.png"></div>
                    <div id="texto8a" class="texto" style="display:none;">
                        <p class="submenu">
                            <a href="publicacoes.php#festival"><?php pten('Livros do Festival', '19th festival books'); ?></a> | 
                            <a href="publicacoes.php#outros"><?php pten('Outros Lançamentos', 'Other releases'); ?></a>
                        </p>

                        <div style="display:inline">
                        <p class="nomargin texto-submenu o"><?php pten('Cinco publicações têm lançamento durante o <span class="bold">19ª Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul</span>. Três delas são vinculadas aos temas dessa edição: <em>Panoramas do Sul | Artistas Convidados</em>, <em>Panoramas do Sul | Obras Selecionadas</em> e <em>Projetos Comissionados</em> e a antologia <em>Panoramas do Sul | Leituras | Perspectivas para outras geografias do pensamento</em>. O livro <em>Videobrasil: Três décadas de vídeo, arte, encontros e transformações</em> celebra a história do Festival, mapeando as transformações do vídeo e suas aproximações com a arte a partir dos anos 1980. Fecha o conjunto <em>Aliança de Corpos Vulneráveis</em>, a 11ª edição da revista anual de arte contemporânea Caderno Sesc_Videobrasil, editada pelo curador Miguel Ángel López.',
                                                                       'Five publications will be launched during the <span class="bold">19th Contemporary Art Festival Sesc_Videobrasil | Southern Panoramas</span>, slated for October 6 to December 6, 2015 in São Paulo. Three of them are linked to the Festival’s themes: <em>Southern Panoramas | Guest Artists</em>, <em>Southern Panoramas | Selected Works and Commissioned Projects</em>  and the anthology <em>Southern Panoramas | Readings | Perspectives for other geographies of thought</em>. The book <em>Videobrasil: Three decades of video, art, encounters and transformations</em> celebrates the history of the Festival, mapping the transformations undergone by video and its convergence with art from the 1980s on. The final publication is <em>An Alliance of Vulnerable Bodies</em>, the 11th edition of the annual contemporary art magazine Caderno Sesc_Videobrasil, edited by curator Miguel Angel López.');?></p>
                            <p class="vejamais">&nbsp;</p>
                        </div>

                        
                    </div>
                    <!-- /PUBLICACOES -->


                    <!-- AGENDA -->
                    <div id="simples-agenda" class="fonteMenu" style="height: 62px;"><img src="img/botoes/<?php pten('pt','en');?>/agenda_1.png"></div>
                    
                    <!-- /AGENDA -->


                    <!-- FOTOS E VIDEOS -->
                    <div id="simples-fotos" class="fonteMenu" style="height: 62px;"><img src="img/botoes/<?php pten('pt','en');?>/fotosvideos_1.png"></div>
                    <!-- /FOTOS E VIDEOS -->

                    <!-- NOTICIAS -->
                    <div id="simples-noticias" class="fonteMenu" style="height: 62px;"><img src="img/botoes/<?php pten('pt','en');?>/noticias_1.png"></div>
                    <!-- /NOTICIAS -->

                    <!-- IMPRENSA -->
                    <div id="simples-imprensa" class="fonteMenu" style="height: 62px;"><img src="img/botoes/<?php pten('pt','en');?>/imprensa_1.png"></div>
                    <!-- /IMPRENSA -->

        		</div>
        		
        	</div>
    </main>

    <div id="altura">&nbsp;</div>
    

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->


    <div id="preload">
    <img src="img/botoes/<?php pten('pt','en');?>/expos_2.png" width="1" height="1" alt="Image 01" />
    <img src="img/botoes/<?php pten('pt','en');?>/progsfilmes_2.png" width="1" height="1" alt="Image 02" />
    <img src="img/botoes/<?php pten('pt','en');?>/performances_2.png" width="1" height="1" alt="Image 03" />
    <img src="img/botoes/<?php pten('pt','en');?>/zona_2.png" width="1" height="1" alt="Image 04" />
    <img src="img/botoes/<?php pten('pt','en');?>/pp_2.png" width="1" height="1" alt="Image 05" />
    <img src="img/botoes/<?php pten('pt','en');?>/premios_2.png" width="1" height="1" alt="Image 06" />
    <img src="img/botoes/<?php pten('pt','en');?>/publicacoes_2.png" width="1" height="1" alt="Image 07" />
    <img src="img/botoes/<?php pten('pt','en');?>/agenda_2.png" width="1" height="1" alt="Image 08" />
    <img src="img/botoes/<?php pten('pt','en');?>/fotosvideos_2.png" width="1" height="1" alt="Image 09" />
    <img src="img/botoes/<?php pten('pt','en');?>/sobre_2.png" width="1" height="1" alt="Image 10" />
    <img src="img/botoes/<?php pten('pt','en');?>/noticias_2.png" width="1" height="1" alt="Image 11" />
    <img src="img/botoes/<?php pten('pt','en');?>/imprensa_2.png" width="1" height="1" alt="Image 12" />

</div>
</body>
</html>

