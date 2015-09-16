<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!--[if lt IE 9]><script src="bower_components/html5shiv/dist/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" type="text/css" href="css/home.css">
    <link rel="stylesheet" type="text/css" href="css/expos.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="js/home.js"></script>
    <script>
        $(document).ready(
            function(){




                $('#agenda ol li:nth-child(1)').css({
                                                       'font-family': 'FedraMonoStdMedium'
                                                    });


                $('#agenda ol li:nth-child(1)').addClass('a upper');

                $('#agenda ol li:nth-child(n+2), #legenda span').each(
                    function(){

                        if($(this).hasClass('agenda-abertura')){
                            $(this).addClass('e');
                        } 
                        else if($(this).hasClass('agenda-performance')){
                            $(this).addClass('o');
                        } 
                        else if($(this).hasClass('agenda-filme')){
                            $(this).addClass('p');
                        } 
                        else if($(this).hasClass('agenda-publicacao')){
                            $(this).addClass('s');
                        } 
                        else if($(this).hasClass('agenda-encontro')){
                            $(this).addClass('y');
                        } 
                        else if($(this).hasClass('agenda-seminario')){
                            $(this).addClass('w');
                        } 
                        else if($(this).hasClass('agenda-oficina')){
                            $(this).addClass('u');
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

        	<div style="height:37px; clear: both">&nbsp;</div>

        <!-- 	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span>agenda</span>      
                </div>
        	</div> -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left; margin-bottom: 30px;">
                <p style="margin-bottom:0"> 
                    agenda
                </p>
                </div>
            </div>

            <!-- <div style="display: table;"><div style="display: table-cell; vertical-align: middle;"><div style="clear: both; height: 20px;" class="submenu">
                        <a id="agenda-todos"><?php pten('todos','All');?></a> | 
                        <a id="agenda-abertura"><?php pten('abertura','All');?></a> | 
                        <a id="agenda-performance"><?php pten('performance','Artworks');?></a> | 
                        <a id="agenda-filme"><?php pten('filme','Projects');?></a> | 
                        <a id="agenda-publicacao"><?php pten('publicacao','Guests');?></a> | 
                        <a id="agenda-encontro"><?php pten('encontro','Guests');?></a> | 
                        <a id="agenda-seminario"><?php pten('seminario','Guests');?></a> | 
                        <a id="agenda-oficina"><?php pten('oficina','Guests');?></a>



                        </div></div></div>  -->
            
            <div class="row" style="clear: both;">
                <div class="col-xs-12" id="agenda">

                    <p class="bold" id="legenda"><span>LEGENDA:</span><br />
                    <span class="agenda-abertura">ABERTURAS DE EXPOSIÇÕES</span><br />
                    <span class="agenda-performance">PERFORMANCES</span><br />
                    <span class="agenda-filme">PROGRAMAS DE FILMES</span><br />
                    <span class="agenda-publicacao">LANÇAMENTOS DE PUBLICAÇÕES</span><br />
                    <span class="agenda-encontro">PROGRAMAS PÚBLICOS – ENCONTROS E CONVERSAS</span><br />
                    <span class="agenda-seminario">PROGRAMAS PÚBLICOS – SEMINÁRIO “LUGARES E SENTIDOS NA ARTE: DEBATES A PARTIR DO SUL”</span><br />
                    <span class="agenda-oficina">PROGRAMAS PÚBLICOS – OFICINAS</span></p>


                    <div class="titulo titulo-agenda-g"><span>outubro</span></div>

                    <ol id="ol1">
                    <li>6 de outubro, terça-feira</li>
                    <li class="agenda-abertura">20h00 | Sesc Pompeia, Galpão | Abertura da exposição Panoramas do Sul | Artistas Convidados  </li>
                    <li class="agenda-abertura">20h00 | Sesc Pompeia, Convivência | Abertura da exposição Panoramas do Sul | Obras Selecionadas</li>
                    <li class="agenda-performance">20h00 | Sesc Pompeia, Convivência | Performance | Oiko-nomic Threads, de Marinos Koutsomichalis, Maria Varela, Afroditi Psarra</li>
                    <li class="agenda-performance">21h00 | Sesc Pompeia, Convivência | Performance | Fancy em Pyetà segundo ato, de Rodolpho Parigi</li>
                    </ol>
                    <ol>
                    <li>7 de outubro, quarta-feira</li>
                    <li class="agenda-seminario">11h00 | Sesc Pompeia, Teatro | Programas Públicos | Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 1: Repensar tradições: arte, gesto e contemporaneidade</li>
                    <li class="agenda-encontro">13h45 | Sesc Pompeia, Galpão | Programas Públicos | Encontros e Conversas | Visita com o artista convidado Rodrigo Matheus</li>
                    <li class="agenda-filme">18h00 | Sesc Pompeia, Teatro | Abertura do Programa de Filmes | Obras Selecionadas </li>
                    <li class="agenda-filme">18h00 | Sesc Pompeia, Teatro | Abertura do Programa de Filmes | Obras Selecionadas | Programa #1</li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2</li>
                    <li class="agenda-performance">21h00 | Sesc Pompeia, Teatro | Performance | VOSTOK cineperformance</li>
                    <li class="agenda-filme">21h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3</li>
                    </ol>
                    <ol>
                    <li>8 de outubro, quinta-feira</li>
                    <li class="agenda-oficina">10h30 | Sesc Pompeia, Oficinas de Criatividade | Programas Públicos | Oficinas | Memória tecida: monotipia vista do Mali com Abdoulaye Konaté</li>
                    <li class="agenda-encontro">11h00 | Sesc Pompeia, Teatro | Programas Públicos | Encontros e Conversas | Tilting Axis 1.5</li>
                    <li class="agenda-filme">14h00 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1</li>
                    <li class="agenda-filme">15h00 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2</li>
                    <li class="agenda-filme">16h15 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3</li>
                    <li class="agenda-abertura">19h00 | Galpão VB | Abertura da exposição Panoramas do Sul | Projetos Comissionados</li>
                    <li class="agenda-publicacao">19h30 | Galpão VB | Lançamento do livro Videobrasil: três décadas de vídeo, arte, encontros e transformações</li>
                    <li class="agenda-filme">19h00 | Galpão VB | Abertura do Programa de Filmes | Gabriel Abrantes | Olympia I & II</li>
                    </ol>
                    <ol>
                    <li>9 de outubro, sexta-feira</li>
                    <li class="agenda-oficina">11h00 | Galpão VB | Programas Públicos | Oficinas | Vocabulário de um Sul existente: invenção de um mundo a partir de lugares inexistentes com Ting-Ting Cheng</li>
                    <li class="agenda-filme">14h00 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes</li>
                    <li class="agenda-filme">15h40| Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3</li>
                    <li class="agenda-filme">16h55 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2</li>
                    <li class="agenda-encontro">17h00 | Galpão VB | Programas Públicos | Encontros e Conversas | Encontro com Rede de Residências</li>
                    <li class="agenda-filme">18h10 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1</li>
                    <li class="agenda-abertura">19h00 | Paço das Artes | Abertura da exposição paralela Quem Nasce Pra Aventura Não Toma Outro Rumo</li>
                    </ol>
                    <ol>
                    <li>10 de outubro, sábado</li>
                    <li class="agenda-oficina">10h30 | Sesc Pompeia, Oficinas de Criatividade | Programas Públicos | Oficinas | Memória tecida: monotipia vista do Mali com Abdoulaye Konaté</li>
                    <li class="agenda-filme">11h00 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes</li>
                    <li class="agenda-seminario">14h00 | Sesc Pompeia, Teatro | Programas Públicos | Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 2: Repensar espaços: arte, usos e cotidiano</li>
                    <li class="agenda-publicacao">14h00 | Sesc Pompeia, Teatro | Lançamento do livro Panoramas do Sul | Leituras _ Perspectivas para outras geografias do pensamento</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    <li class="agenda-publicacao">16h30 | Sesc Pompeia, Foyer do Teatro | Lançamento do livro Panoramas do Sul | Artistas Convidados</li>
                    <li class="agenda-performance">17h00 | Sesc Pompeia, Convivência | Performance | Oiko-nomic Threads</li>
                    <li class="agenda-abertura">18h00 | Sesc Pompeia, Teatro | Cerimônia de Premiação</li>
                    </ol>
                    <ol>
                    <li>11 de outubro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>12 de outubro, segunda-feira</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>13 de outubro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</li>
                    <li class="agenda-filme">19h30 | Galpão VB | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</li>
                    </ol>
                    <ol>
                    <li>15 de outubro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</li>
                    </ol>
                    <ol>
                    <li>17 de outubro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>18 de outubro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>20 de outubro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</li>
                    <li class="agenda-filme">19h00 | Galpão VB | Programa de Filmes | Obras Selecionadas | Obras Selecionadas Programa #3 + Gabriel Abrantes</li>
                    </ol>
                    <ol>
                    <li>22 de outubro, quinta-feira</li>
                    <li class="agenda-seminario">14h00 | Sesc Pompeia, Teatro | Programas Públicos | Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 3: Repensar narrativas: arte, memória e ficção</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Obras Selecionadas Programa #3</li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</li>
                    </ol>
                    <ol>
                    <li>24 de outubro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>25 de outubro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>27 de outubro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | Gabriel Abrantes + Obras Selecionadas Programa #3</li>
                    <li class="agenda-filme">19h30 | Galpão VB | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</li>
                    </ol>
                    <ol>
                    <li>29 de outubro, quinta-feira</li>
                    <li class="agenda-seminario">14h00 | Sesc Pompeia, Teatro | Programas Públicos | Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 4: Repensar o tempo: arte,  silêncios e histórias</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Obras Selecionadas Programa #3 + Gabriel Abrantes</li>
                    </ol>
                    <ol>
                    <li>31 de outubro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>

                    <div class="titulo titulo-agenda-g" style="margin-top: 30px"><span>novembro</span></div>

                    <ol>
                    <li>1 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>2 de novembro, segunda-feira</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>3 de novembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</li>
                    <li class="agenda-filme">19h00 | Galpão VB | Programa de Filmes | Obras Selecionadas | Obras Selecionadas Programa #3 + Gabriel Abrantes</li>
                    </ol>
                    <ol>
                    <li>4 de novembro, quarta-feira</li>
                    <li class="agenda-encontro">13h00 | Galpão VB | Programas Públicos | Encontros e Conversas | Leituras de Portfólios</li>
                    </ol>
                    <ol>
                    <li>5 de novembro, quinta-feira</li>
                    <li class="agenda-encontro">13h00 | Galpão VB | Programas Públicos | Encontros e Conversas | Leituras de Portfólios</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Obras Selecionadas Programa #3</li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</li>
                    </ol>
                    <ol>
                    <li>7 de novembro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>8 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>10 de novembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | Gabriel Abrantes + Obras Selecionadas Programa #3</li>
                    <li class="agenda-filme">19h30 | Galpão VB | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</li>
                    </ol>
                    <ol>
                    <li>12 de novembro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Obras Selecionadas Programa #3 + Gabriel Abrantes</li>
                    </ol>
                    <ol>
                    <li>14 de novembro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    <li class="agenda-encontro">16h00 | Paço das Artes | Programas Públicos | Encontros e Conversas | Visita mediada à exposição paralela Quem Nasce Pra Aventura Não Toma Outro Rumo | Roteiro 1: Brasil, São Paulo – um lugar para a partida</li>
                    </ol>
                    <ol>
                    <li>15 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>17 de novembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</li>
                    <li class="agenda-filme">19h00 | Galpão VB | Programa de Filmes | Obras Selecionadas | Obras Selecionadas Programa #3 + Gabriel Abrantes</li>
                    </ol>
                    <ol>
                    <li>19 de novembro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Obras Selecionadas Programa #3</li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</li>
                    </ol>
                    <ol>
                    <li>20 de novembro, sexta-feira</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>21 de novembro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>22 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>24 de novembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | Gabriel Abrantes + Obras Selecionadas Programa #3</li>
                    <li class="agenda-filme">19h30 | Galpão VB | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</li>
                    </ol>
                    <ol>
                    <li>25 de novembro, quarta-feira</li>
                    <li class="agenda-publicacao">20h00 | Sesc Pompeia, Teatro | Lançamento do Caderno SESC_VIDEOBRASIL 11_Aliança de corpos vulneráveis </li>
                    <li class="agenda-publicacao">20h00 | Sesc Pompeia, Teatro | Mesa de lançamento do Caderno SESC_VIDEOBRASIL 11_Aliança de corpos vulneráveis </li>
                    <li class="agenda-publicacao">20h00 | Sesc Pompeia, Teatro | Lançamento do livro Panoramas do Sul | Obras Selecionadas e Projetos Comissionados</li>
                    <li class="agenda-performance">21h30 | Sesc Pompeia, Convivência | Performance | Fancy em Pyetà segundo ato</li>
                    </ol>
                    <ol>
                    <li>26 de novembro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Obras Selecionadas Programa #3 + Gabriel Abrantes </li>
                    </ol>
                    <ol>
                    <li>28 de novembro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>29 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <div class="titulo titulo-agenda-g" style="margin-top: 30px"><span>dezembro</span></div>
                    <ol>
                    <li>1 de dezembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Obras Selecionadas Programa #3</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</li>
                    <li class="agenda-filme">19h00 | Galpão VB | Programa de Filmes | Obras Selecionadas | Obras Selecionadas Programa #3 + Gabriel Abrantes</li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</li>
                    </ol>
                    <ol>
                    <li>2 de dezembro, quarta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Obras Selecionadas Programa #3 + Gabriel Abrantes</li>
                    </ol>
                    <ol>
                    <li>3 de dezembro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Obras Selecionadas Programa #3</li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</li>
                    </ol>
                    <ol>
                    <li>5 de dezembro, sábado</li>
                    <li class="agenda-oficina">10h30 | Galpão VB | Programas Públicos | Oficinas | Lambada e o Corpo Social: o corpo da memória e vivência com dança com Carlos Monroy</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>
                    <ol>
                    <li>6 de dezembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</li>
                    </ol>

                    <div class="titulo titulo-agenda-g" style="margin-top: 30px"><span>janeiro</span></div>
                    <ol>
                    <li>9 de janeiro, sábado</li>
                    <li class="agenda-encontro">16h00 | Paço das Artes | Programas Públicos | Encontros e Conversas | Visita mediada à exposição paralela Quem Nasce Pra Aventura Não Toma Outro Rumo | Roteiro 2: O vídeo na arena política da arte</li>
                    </ol>



                    <!-- <p class="titulo nomargin a">6 nov, quarta</p>
                    <span class="g">11h00 | Sesc Pompeia, Galpão | Curadores apresentam exposições e ações / Programas Públicos</span><br />
                    <span class="o">15h00 | Sesc Pompeia, Galpão | Pelo mundo: processos e sentidos da internacionalização na arte / Programas Públicos</span><br />
                    <span class="s">19h30 | CineSesc | Programa 1 / Panoramas do Sul / Programas de vídeo</span><br />
                    <span class="q">20h45 | CineSesc | Deserto azul, Eder Santos / Sessão especial</span>
                    
                    <p class="titulo nomargin a" style="margin-top: 22px">7 nov, quinta</p>
                    <span class="g">14h00 | CineSesc | Programas 2 e 3 / Panoramas do Sul / Programas de vídeo</span><br />
                    <span class="h">16h00 | CineSesc | Programas 4 e 5 / Panoramas do Sul / Programas de vídeo</span><br />
                    <span class="l">20h00 | Sesc Pompeia, Choperia | Sem título, Cão / Panoramas do Sul / Performance</span>

                    <p class="titulo nomargin k" style="margin-top: 22px">8 nov, sexta</p>
                    <span class="a">11h00 | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                    <span class="m">15h00 | Sesc Pompeia, Galpão | Natureza mágica / Programas Públicos</span><br />
                    <span class="o">16h00 | CineSesc | Deserto azul, Eder Santos / Sessão especial</span><br />
                    <span class="p">20h30 | Sesc Pompeia, Galpão | O samba do crioulo doido, Luiz de Abreu (classificação: 16 anos) / Panoramas do Sul / Performance</span>

                    <p class="titulo nomargin n" style="margin-top: 22px">9 nov, sábado</p>
                    <span class="z">11h00 | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                    <span class="y">15h00 | Sesc Pompeia, Galpão | Natureza mágica / Programas Públicos</span>
                  
                    <p class="titulo nomargin w" style="margin-top: 22px">10 nov, domingo</p>
                    <span class="v">11h00 | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                
                    <p class="titulo nomargin n" style="margin-top: 22px">11 nov, segunda</p>
                    <span class="u">11h00 | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                    <span class="q">15h00 | Sesc Pompeia, Galpão | Natureza mágica / Programas Públicos</span>
                 
                    <p class="titulo nomargin o" style="margin-top: 22px">12 nov, terça</p>
                    <span class="m">11h00 | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span>

                     -->




                 </div>
            </div>

            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->
<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-33383260-2', 'auto');
      ga('send', 'pageview');
    </script>
</body>
</html>

