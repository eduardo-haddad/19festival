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
                $('#agenda p span:nth-child(1)').css('font-family', 'FedraMonoStdMedium');
                $('#agenda p span:nth-child(1)').addClass('a');

                $('#agenda p span:nth-child(n+2)').each(
                    function(){

                        if($(this).hasClass('agenda-abertura')){
                            $(this).css('color', 'red');
                        } 
                        else if($(this).hasClass('agenda-performance')){
                            $(this).css('color', 'blue');
                        } 
                        else if($(this).hasClass('agenda-filme')){
                            $(this).css('color', 'green');
                        } 
                        else if($(this).hasClass('agenda-publicacao')){
                            $(this).css('color', 'yellow');
                        } 
                        else if($(this).hasClass('agenda-encontro')){
                            $(this).css('color', 'purple');
                        } 
                        else if($(this).hasClass('agenda-seminario')){
                            $(this).css('color', 'navy');
                        } 
                        else if($(this).hasClass('agenda-oficina')){
                            $(this).css('color', 'gray');
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



                        </div></div></div> -->
            
            <div class="row" style="clear: both;">
                <div class="col-xs-12" id="agenda">

                    <div class="titulo titulo-agenda-g"><span>outubro</span></div>

                    <p>
                    <span>6 de outubro, terça-feira</span><br />
                    <span class="agenda-abertura">20h | Sesc Pompeia, Galpão | Abertura da exposição Panoramas do Sul | Artistas Convidados  </span><br />
                    <span class="agenda-abertura">20h | Sesc Pompeia, Convivência | Abertura da exposição Panoramas do Sul | Obras Selecionadas</span><br />
                    <span class="agenda-performance">20h | Sesc Pompeia, Convivência | Performance | Oiko-nomic Threads</span><br />
                    <span class="agenda-performance">21h | Sesc Pompeia, Convivência | Performance | Fancy em Pyetà segundo ato</span>
                    </p>
                    <p>
                    <span>7 de outubro, quarta-feira</span><br />
                    <span class="agenda-seminario">11h | Sesc Pompeia, Teatro | Programas Públicos | Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 1: Repensar tradições: arte, gesto e contemporaneidade</span><br />
                    <span class="agenda-encontro">13h45 | Sesc Pompeia, Galpão | Programas Públicos | Encontros e Conversas | Visita com o artista convidado Rodrigo Matheus</span><br />
                    <span class="agenda-filme">18h | Sesc Pompeia, Teatro | Abertura do Programa de Filmes | Obras Selecionadas </span><br />
                    <span class="agenda-filme">18h | Sesc Pompeia, Teatro | Abertura do Programa de Filmes | Obras Selecionadas | Programa #1</span><br />
                    <span class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2</span><br />
                    <span class="agenda-performance">21h | Sesc Pompeia, Teatro | Performance | VOSTOK cineperformance</span><br />
                    <span class="agenda-filme">21h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3</span>
                    </p>
                    <p>
                    <span>8 de outubro, quinta-feira</span><br />
                    <span class="agenda-oficina">10h30 | Sesc Pompeia, Oficinas de Criatividade | Programas Públicos | Oficinas | Memória tecida: monotipia vista do Mali com Abdoulaye Konaté</span><br />
                    <span class="agenda-encontro">11h | Sesc Pompeia, Teatro | Programas Públicos | Encontros e Conversas | Tilting Axis 1.5</span><br />
                    <span class="agenda-filme">14h | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1</span><br />
                    <span class="agenda-filme">15h | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2</span><br />
                    <span class="agenda-filme">16h15 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-abertura">19h | Galpão_VB | Abertura da exposição Panoramas do Sul | Projetos Comissionados</span><br />
                    <span class="agenda-publicacao">19h | Galpão_VB | Lançamento do livro Videobrasil: três décadas de vídeo, arte, encontros e transformações</span><br />
                    <span class="agenda-filme">19h | Galpão_VB | Abertura do Programa de Filmes | Gabriel Abrantes | Ὄρνιθες (Ornithes – Birds)</span>
                    </p>
                    <p>
                    <span>9 de outubro, sexta-feira</span><br />
                    <span class="agenda-oficina">11h | Galpão_VB | Programas Públicos | Oficinas | Vocabulário de um Sul existente: invenção de um mundo a partir de lugares inexistentes com Ting-Ting Cheng</span><br />
                    <span class="agenda-filme">14h | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes</span><br />
                    <span class="agenda-filme">15h40| Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">16h55 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2</span><br />
                    <span class="agenda-encontro">17h | Galpão_VB | Programas Públicos | Encontros e Conversas | Encontro com Rede de Residências</span><br />
                    <span class="agenda-filme">18h10 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1</span><br />
                    <span class="agenda-abertura">19h | Paço das Artes | Abertura da exposição paralela Quem Nasce Pra Aventura Não Toma Outro Rumo</span>
                    </p>
                    <p>
                    <span>10 de outubro, sábado</span><br />
                    <span class="agenda-oficina">10h30 | Sesc Pompeia, Oficinas de Criatividade | Programas Públicos | Oficinas | Memória tecida: monotipia vista do Mali com Abdoulaye Konaté</span><br />
                    <span class="agenda-filme">11h | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes</span><br />
                    <span class="agenda-seminario">14h | Sesc Pompeia, Teatro | Programas Públicos | Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 2: Repensar espaços: arte, usos e cotidiano</span><br />
                    <span class="agenda-publicacao">14h | Sesc Pompeia, Teatro | Lançamento do livro Panoramas do Sul | Leituras _ Perspectivas para outras geografias do pensamento</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span><br />
                    <span class="agenda-publicacao">16h30 | Sesc Pompeia, Teatro | Lançamento do livro Panoramas do Sul | Artistas Convidados</span><br />
                    <span class="agenda-performance">17h | Sesc Pompeia, Convivência | Performance | Oiko-nomic Threads</span><br />
                    <span class="abertura">18h | Sesc Pompeia, Teatro | Cerimônia de Premiação</span>
                    </p>
                    <p>
                    <span>11 de outubro, domingo</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>12 de outubro, segunda-feira</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>13 de outubro, terça-feira</span><br />
                    <span class="agenda-filme">16h30 | Galpão_VB | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">19h30 | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</span>
                    </p>
                    <p>
                    <span>15 de outubro, quinta-feira</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</span><br />
                    <span class="agenda-filme">19h | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</span>
                    </p>
                    <p>
                    <span>17 de outubro, sábado</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>18 de outubro, domingo</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>20 de outubro, terça-feira</span><br />
                    <span class="agenda-filme">16h30 | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</span><br />
                    <span class="agenda-filme">19h | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</span>
                    </p>
                    <p>
                    <span>22 de outubro, quinta-feira</span><br />
                    <span class="agenda-seminario">14h | Sesc Pompeia, Teatro | Programas Públicos | Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 3: Repensar narrativas: arte, memória e ficção</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</span>
                    </p>
                    <p>
                    <span>24 de outubro, sábado</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>25 de outubro, domingo</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>27 de outubro, terça-feira</span><br />
                    <span class="agenda-filme">16h30 | Galpão_VB | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">19h30 | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</span>
                    </p>
                    <p>
                    <span>29 de outubro, quinta-feira</span><br />
                    <span class="agenda-seminario">14h | Sesc Pompeia, Teatro | Programas Públicos | Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 4: Repensar o tempo: arte,  silêncios e histórias</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</span><br />
                    <span class="agenda-filme">19h | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</span>
                    
                    <p>
                    <span>31 de outubro, sábado</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>

                    <div class="titulo titulo-agenda-g"><span>novembro</span></div>

                    <p>
                    <span>1 de novembro, domingo</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>2 de novembro, segunda-feira</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>3 de novembro, terça-feira</span><br />
                    <span class="agenda-filme">16h30 | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</span><br />
                    <span class="agenda-filme">19h | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</span>
                    </p>
                    <p>
                    <span>4 de novembro, quarta-feira</span><br />
                    <span class="agenda-encontro">13h | Galpão_VB | Programas Públicos | Encontros e Conversas | Leituras de Portfólios</span>
                    </p>
                    <p>
                    <span>5 de novembro, quinta-feira</span><br />
                    <span class="agenda-encontro">13h | Galpão_VB | Programas Públicos | Encontros e Conversas | Leituras de Portfólios</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</span>
                    </p>
                    <p>
                    <span>7 de novembro, sábado</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>8 de novembro, domingo</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>10 de novembro, terça-feira</span><br />
                    <span class="agenda-filme">16h30 | Galpão_VB | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">19h30 | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</span>
                    </p>
                    <p>
                    <span>12 de novembro, quinta-feira</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</span><br />
                    <span class="agenda-filme">19h | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</span>
                    </p>
                    <p>
                    <span>14 de novembro, sábado</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span><br />
                    <span class="agenda-encontro">16h | Paço das Artes | Programas Públicos | Encontros e Conversas | Visita mediada à exposição paralela Quem Nasce Pra Aventura Não Toma Outro Rumo | Roteiro 1: Brasil, São Paulo – um lugar para a partida</span>
                    </p>
                    <p>
                    <span>15 de novembro, domingo</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span><br />
                    </p>
                    <p>
                    <span>17 de novembro, terça-feira</span><br />
                    <span class="agenda-filme">16h30 | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</span><br />
                    <span class="agenda-filme">19h | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</span>
                    </p>
                    <p>
                    <span>19 de novembro, quinta-feira</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</span>
                    </p>
                    <p>
                    <span>20 de novembro, sexta-feira</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span><br />
                    </p>
                    <p>
                    <span>21 de novembro, sábado</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>22 de novembro, domingo</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>24 de novembro, terça-feira</span><br />
                    <span class="agenda-filme">16h30 | Galpão_VB | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">19h30 | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</span>
                    </p>
                    <p>
                    <span>25 de novembro, quarta-feira</span><br />
                    <span class="agenda-publicacao">20h | Sesc Pompeia, Teatro | Lançamento do Caderno Sesc_Videobrasil 11_Aliança de corpos vulneráveis </span><br />
                    <span class="agenda-publicacao">20h | Sesc Pompeia, Teatro | Mesa de lançamento do Caderno Sesc_Videobrasil 11_Aliança de corpos vulneráveis </span><br />
                    <span class="agenda-publicacao">20h | Sesc Pompeia, Teatro | Lançamento do livro Panoramas do Sul | Obras Selecionadas e Projetos Comissionados</span><br />
                    <span class="agenda-performance">21h30 | Sesc Pompeia, Convivência | Performance | Fancy em Pyetà segundo ato</span>
                    </p>
                    <p>
                    <span>26 de novembro, quinta-feira</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</span><br />
                    <span class="agenda-filme">19h | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</span>
                    </p>
                    <p>
                    <span>28 de novembro, sábado</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>29 de novembro, domingo</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>

                    <div class="titulo titulo-agenda-g"><span>dezembro</span></div>
                    <p>
                    <span>1 de dezembro, terça-feira</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">16h30 | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</span><br />
                    <span class="agenda-filme">19h | Galpão_VB | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</span><br />
                    <span class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</span>
                    </p>
                    <p>
                    <span>2 de dezembro, quarta-feira</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #1 + Programa #2</span><br />
                    <span class="agenda-filme">19h | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #3 + Programa de Filmes | Gabriel Abrantes</span>
                    </p>
                    <p>
                    <span>3 de dezembro, quinta-feira</span><br />
                    <span class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | Gabriel Abrantes + Programa de Filmes | Obras Selecionadas | Programa #3</span><br />
                    <span class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | Obras Selecionadas | Programa #2 + Programa #1</span>
                    </p>
                    <p>
                    <span>5 de dezembro, sábado</span><br />
                    <span class="agenda-oficina">10h30 | Galpão_VB | Programas Públicos | Oficinas | Lambada e o Corpo Social: o corpo da memória e vivência com dança com Carlos Monroy</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>
                    <p>
                    <span>6 de dezembro, domingo</span><br />
                    <span class="agenda-oficina">15h | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | Oficinas com os educadores das exposições</span>
                    </p>

                    <div class="titulo titulo-agenda-g"><span>janeiro</span></div>
                    <p>
                    <span>9 de janeiro, sábado</span><br />
                    <span class="agenda-encontro">16h | Paço das Artes | Programas Públicos | Encontros e Conversas | Visita mediada à exposição paralela Quem Nasce Pra Aventura Não Toma Outro Rumo | Roteiro 2: O vídeo na arena política da arte</span>
                    </p>



                    <!-- <p class="titulo nomargin a">6 nov, quarta</p>
                    <span class="g">11h | Sesc Pompeia, Galpão | Curadores apresentam exposições e ações / Programas Públicos</span><br />
                    <span class="o">15h | Sesc Pompeia, Galpão | Pelo mundo: processos e sentidos da internacionalização na arte / Programas Públicos</span><br />
                    <span class="s">19h30 | CineSesc | Programa 1 / Panoramas do Sul / Programas de vídeo</span><br />
                    <span class="q">20h45 | CineSesc | Deserto azul, Eder Santos / Sessão especial</span>
                    
                    <p class="titulo nomargin a" style="margin-top: 22px">7 nov, quinta</p>
                    <span class="g">14h | CineSesc | Programas 2 e 3 / Panoramas do Sul / Programas de vídeo</span><br />
                    <span class="h">16h | CineSesc | Programas 4 e 5 / Panoramas do Sul / Programas de vídeo</span><br />
                    <span class="l">20h | Sesc Pompeia, Choperia | Sem título, Cão / Panoramas do Sul / Performance</span>

                    <p class="titulo nomargin k" style="margin-top: 22px">8 nov, sexta</p>
                    <span class="a">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                    <span class="m">15h | Sesc Pompeia, Galpão | Natureza mágica / Programas Públicos</span><br />
                    <span class="o">16h | CineSesc | Deserto azul, Eder Santos / Sessão especial</span><br />
                    <span class="p">20h30 | Sesc Pompeia, Galpão | O samba do crioulo doido, Luiz de Abreu (classificação: 16 anos) / Panoramas do Sul / Performance</span>

                    <p class="titulo nomargin n" style="margin-top: 22px">9 nov, sábado</p>
                    <span class="z">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                    <span class="y">15h | Sesc Pompeia, Galpão | Natureza mágica / Programas Públicos</span>
                  
                    <p class="titulo nomargin w" style="margin-top: 22px">10 nov, domingo</p>
                    <span class="v">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                
                    <p class="titulo nomargin n" style="margin-top: 22px">11 nov, segunda</p>
                    <span class="u">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span><br />
                    <span class="q">15h | Sesc Pompeia, Galpão | Natureza mágica / Programas Públicos</span>
                 
                    <p class="titulo nomargin o" style="margin-top: 22px">12 nov, terça</p>
                    <span class="m">11h | Sesc Pompeia, Galpão | Territórios do Sul: experiências, cidades e fronteiras / Programas Públicos</span>

                     -->




                 </div>
            </div>

            

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

