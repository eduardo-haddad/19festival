<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Agenda' : 'Agenda';

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

                <?php pten(
                    //AGENDA PT
                    '<p class="bold" id="legenda"><span>LEGENDA:</span><br />
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
                    <li class="agenda-abertura">20h00 | Sesc Pompeia, Galpão | <a href="expo_convidados.php" target="_blank" class="link">Abertura da exposição Panoramas do Sul | Artistas Convidados</a></li>
                    <li class="agenda-abertura">20h00 | Sesc Pompeia, Convivência | <a href="expo_obras.php" target="_blank" class="link">Abertura da exposição Panoramas do Sul | Obras Selecionadas</a></li>
                    <li class="agenda-performance">20h00 | Sesc Pompeia, Convivência | Performance | <a href="performances.php#oiko" target="_blank" class="link">Oiko-nomic Threads, de Marinos Koutsomichalis, Maria Varela, Afroditi Psarra</a></li>
                    <li class="agenda-performance">21h00 | Sesc Pompeia, Convivência | Performance | <a href="performances.php#fancy" target="_blank" class="link">Fancy em Pyetà segundo ato, de Rodolpho Parigi</a></li>
                    </ol>
                    <ol>
                    <li>7 de outubro, quarta-feira</li>
                    <li class="agenda-seminario">11h00 | Sesc Pompeia, Teatro | Programas Públicos | <a href="pp.php#seminario/mesa1" target="_blank" class="link">Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 1: Repensar tradições: arte, gesto e contemporaneidade</a></li>
                    <li class="agenda-filme">18h00 | Sesc Pompeia, Teatro | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Abertura do Programa de Filmes | Obras Selecionadas | Programa #1</a></li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog2" target="_blank" class="link">Obras Selecionadas | Programa #2</a></li>
                    <li class="agenda-performance">21h00 | Sesc Pompeia, Teatro | Performance | <a href="performances.php#vostok" target="_blank" class="link">VOSTOK cineperformance</a></li>
                    <li class="agenda-filme">21h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Programa #3</a></li>
                    </ol>
                    <ol>
                    <li>8 de outubro, quinta-feira</li>
                    <li class="agenda-oficina">10h30 | Sesc Pompeia, Oficinas de Criatividade | Programas Públicos | Oficinas | <a href="pp.php#oficinas/memoria" target="_blank" class="link">Memória tecida: monotipia vista do Mali com Abdoulaye Konaté</a></li>
                    <li class="agenda-encontro">11h00 | Sesc Pompeia, Teatro | Programas Públicos | Encontros e Conversas | <a href="pp.php#encontros/tilting" target="_blank" class="link">Tilting Axis 1.5</a></li>
                    <li class="agenda-filme">14h00 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1</a></li>
                    <li class="agenda-filme">15h00 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog2" target="_blank" class="link">Obras Selecionadas | Programa #2</a></li>
                    <li class="agenda-filme">16h15 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Programa #3</a></li>
                    <li class="agenda-abertura">19h00 | Galpão VB | <a href="expo_projetos.php" target="_blank" class="link">Abertura da exposição Panoramas do Sul | Projetos Comissionados</a></li>
                    <li class="agenda-filme">19h00 | Galpão VB | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Abertura do Programa de Filmes | Gabriel Abrantes | Olympia I & II</a></li>
                    <li class="agenda-publicacao">19h30 | Galpão VB | <a href="publicacoes.php#outros/vb" target="_blank" class="link">Lançamento do livro Videobrasil: três décadas de vídeo, arte, encontros e transformações</a></li>
                    
                    </ol>
                    <ol>
                    <li>9 de outubro, sexta-feira</li>
                    <li class="agenda-oficina">11h00 | Galpão VB | Programas Públicos | Oficinas | <a href="pp.php#oficinas/vocabulario" target="_blank" class="link">Vocabulário de um Sul existente: invenção de um mundo a partir de lugares inexistentes com Ting-Ting Cheng</a></li>
                    <li class="agenda-filme">14h00 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    <li class="agenda-filme">15h40 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Programa #3</a></li>
                    <li class="agenda-filme">16h55 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog2" target="_blank" class="link">Obras Selecionadas | Programa #2</a></li>
                    <li class="agenda-encontro">17h00 | Galpão VB | Programas Públicos | Encontros e Conversas | <a href="pp.php#encontros/rede" target="_blank" class="link">Encontro com Rede de Residências</a></li>
                    <li class="agenda-filme">18h10 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1</a></li>
                    <li class="agenda-abertura">19h00 | Paço das Artes | <a href="expo_paralela.php" target="_blank" class="link">Abertura da exposição paralela Quem Nasce Pra Aventura Não Toma Outro Rumo</a></li>
                    </ol>
                    <ol>
                    <li>10 de outubro, sábado</li>
                    <li class="agenda-oficina">10h30 | Sesc Pompeia, Oficinas de Criatividade | Programas Públicos | Oficinas | <a href="pp.php#oficinas/memoria" target="_blank" class="link">Memória tecida: monotipia vista do Mali com Abdoulaye Konaté</a></li>
                    <li class="agenda-filme">11h00 | Sesc Pompeia, Teatro | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Programa de Filmes | Gabriel Abrantes</a></li>
                    <li class="agenda-seminario">14h00 | Sesc Pompeia, Teatro | Programas Públicos | <a href="pp.php#seminario/mesa2" target="_blank" class="link">Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 2: Repensar espaços: arte, usos e cotidiano</a></li>
                    <li class="agenda-publicacao">14h00 | Sesc Pompeia, Teatro | <a href="publicacoes.php#festival/leituras" target="_blank" class="link">Lançamento do livro Panoramas do Sul | Leituras _ Perspectivas para outras geografias do pensamento</a></li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    <li class="agenda-publicacao">16h30 | Sesc Pompeia, Foyer do Teatro | <a href="publicacoes.php#festival/convidados" target="_blank" class="link">Lançamento do livro Panoramas do Sul | Artistas Convidados</a></li>
                    <li class="agenda-performance">17h00 | Sesc Pompeia, Convivência | Performance | <a href="performances.php#oiko" target="_blank" class="link">Oiko-nomic Threads</a></li>
                    <li class="agenda-abertura">18h00 | Sesc Pompeia, Teatro | <a href="premios_e_residencias.php#premios" target="_blank" class="link">Cerimônia de Premiação</a></li>
                    </ol>
                    <ol>
                    <li>12 de outubro, segunda-feira</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>13 de outubro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Programa de Filmes | Obras Selecionadas | Programa #3</a></li>
                    <li class="agenda-filme">19h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #2 + Programa #1</a></li>
                    </ol>
                    <ol>
                    <li>15 de outubro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1 + Programa #2</a></li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Programa #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Programa de Filmes | Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>17 de outubro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>18 de outubro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>20 de outubro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1 + Programa #2</a></li>
                    <li class="agenda-filme">19h00 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Obras Selecionadas Programa #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>22 de outubro, quinta-feira</li>
                    <li class="agenda-seminario">14h00 | Sesc Pompeia, Teatro | Programas Públicos | <a href="pp.php#seminario/mesa3" target="_blank" class="link">Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 3: Repensar narrativas: arte, memória e ficção</a></li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas Programa #3</a></li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #2 + Programa #1</a></li>
                    </ol>
                    <ol>
                    <li>24 de outubro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>25 de outubro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>27 de outubro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas Programa #3</a></li>
                    <li class="agenda-filme">19h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #2 + Programa #1</a></li>
                    </ol>
                    <!-- <ol>
                    <li>28 de outubro, quarta-feira</li>
                    <li>15h00 | Galpão VB | Sala de Vídeo | Artistas do 19º Festival no Acervo Videobrasil | Imagem e Autoimagem</li>
                    <li>18h00 | Galpão VB | Sala de Vídeo | Artistas do 19º Festival no Acervo Videobrasil | Imagem e Autoimagem</li>
                    </ol> -->
                    <ol>
                    <li>29 de outubro, quinta-feira</li>
                    <li class="agenda-seminario">14h00 | Sesc Pompeia, Teatro | Programas Públicos | <a href="pp.php#seminario/mesa4" target="_blank" class="link">Seminário Lugares e Sentidos na Arte: Debates a Partir do Sul | Mesa 4: Repensar o tempo: arte,  silêncios e histórias</a></li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1 + Programa #2</a></li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Obras Selecionadas Programa #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>31 de outubro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>

                    <div class="titulo titulo-agenda-g" style="margin-top: 30px"><span>novembro</span></div>

                    <ol>
                    <li>1 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>2 de novembro, segunda-feira</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>3 de novembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1 + Programa #2</a></li>
                    <li class="agenda-filme">19h00 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Obras Selecionadas Programa #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>4 de novembro, quarta-feira</li>
                    <li class="agenda-encontro">13h00 | Galpão VB | Programas Públicos | Encontros e Conversas | <a href="pp.php#encontros/portfolios" target="_blank" class="link">Leituras de Portfólios</a></li>
                    </ol>
                    <ol>
                    <li>5 de novembro, quinta-feira</li>
                    <li class="agenda-encontro">13h00 | Galpão VB | Programas Públicos | Encontros e Conversas | <a href="pp.php#encontros/portfolios" target="_blank" class="link">Leituras de Portfólios</a></li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas Programa #3</a></li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #2 + Programa #1</a></li>
                    </ol>
                    <ol>
                    <li>7 de novembro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>8 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>10 de novembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas Programa #3</a></li>
                    <li class="agenda-filme">19h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #2 + Programa #1</a></li>
                    </ol>
                    <ol>
                    <li>12 de novembro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1 + Programa #2</a></li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Obras Selecionadas Programa #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>14 de novembro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    <li class="agenda-encontro">16h00 | Paço das Artes | Programas Públicos | Encontros e Conversas | <a href="pp.php#encontros/paralela" target="_blank" class="link">Visita mediada à exposição paralela Quem Nasce Pra Aventura Não Toma Outro Rumo | Roteiro 1: Brasil, São Paulo – um lugar para a partida</a></li>
                    </ol>
                    <ol>
                    <li>15 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>17 de novembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1 + Programa #2</a></li>
                    <li class="agenda-filme">19h00 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Obras Selecionadas Programa #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>19 de novembro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas Programa #3</a></li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #2 + Programa #1</a></li>
                    </ol>
                    <ol>
                    <li>20 de novembro, sexta-feira</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>21 de novembro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>22 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>24 de novembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas Programa #3</a></li>
                    <li class="agenda-filme">19h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #2 + Programa #1</a></li>
                    </ol>
                    <ol>
                    <li>25 de novembro, quarta-feira</li>
                    <li class="agenda-publicacao">20h00 | Sesc Pompeia, Teatro | <a href="publicacoes.php#festival/selecionados" target="_blank" class="link">Lançamento do livro Panoramas do Sul | Obras Selecionadas e Projetos Comissionados</a></li>
                    <li class="agenda-performance">21h30 | Sesc Pompeia, Convivência | Performance | <a href="performances.php#fancy" target="_blank" class="link">Fancy em Pyetà terceiro ato</a></li>
                    </ol>
                    <ol>
                    <li>26 de novembro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1 + Programa #2</a></li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Obras Selecionadas Programa #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>28 de novembro, sábado</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>29 de novembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <div class="titulo titulo-agenda-g" style="margin-top: 30px"><span>dezembro</span></div>
                    <ol>
                    <li>1 de dezembro, terça-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas Programa #3</a></li>
                    <li class="agenda-filme">16h30 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1 + Programa #2</a></li>
                    <li class="agenda-filme">19h00 | Galpão VB | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Obras Selecionadas Programa #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #2 + Programa #1</a></li>
                    </ol>
                    <ol>
                    <li>2 de dezembro, quarta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #1 + Programa #2</a></li>
                    <li class="agenda-filme">19h00 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas | Obras Selecionadas Programa #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>3 de dezembro, quinta-feira</li>
                    <li class="agenda-filme">16h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Obras Selecionadas Programa #3</a></li>
                    <li class="agenda-filme">19h30 | Sesc Pompeia, Teatro | Programa de Filmes | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Obras Selecionadas | Programa #2 + Programa #1</a></li>
                    </ol>
                    <ol>
                    <li>5 de dezembro, sábado</li>
                    <li class="agenda-oficina">10h30 | Galpão VB | Programas Públicos | Oficinas | <a href="pp.php#oficinas/lambada" target="_blank" class="link">Lambada e o Corpo Social: o corpo da memória e vivência com dança com Carlos Monroy</a></li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>
                    <ol>
                    <li>6 de dezembro, domingo</li>
                    <li class="agenda-oficina">15h00 | Sesc Pompeia, Convivência | Programas Públicos | Oficinas | <a href="pp.php#mediacao" target="_blank" class="link">Oficinas com os educadores das exposições</a></li>
                    </ol>

                    <div class="titulo titulo-agenda-g" style="margin-top: 30px"><span>janeiro</span></div>
                    <ol>
                    <li>9 de janeiro, sábado</li>
                    <li class="agenda-encontro">16h00 | Paço das Artes | Programas Públicos | Encontros e Conversas | <a href="pp.php#encontros/paralela" target="_blank" class="link">Visita mediada à exposição paralela Quem Nasce Pra Aventura Não Toma Outro Rumo | Roteiro 2: O vídeo na arena política da arte</a></li>
                    </ol>',

                    //AGENDA EN
                    '<p class="bold" id="legenda"><span>CAPTIONS:</span><br />
                    <span class="agenda-abertura">EXHIBITION OPENINGS</span><br />
                    <span class="agenda-performance">PERFORMANCES</span><br />
                    <span class="agenda-filme">FILM PROGRAMS</span><br />
                    <span class="agenda-publicacao">PUBLICATION LAUNCHES</span><br />
                    <span class="agenda-encontro">PUBLIC PROGRAMS – MEETINGS AND CONVERSATIONS</span><br />
                    <span class="agenda-seminario">PUBLIC PROGRAMS – SEMINAR</span><br />
                    <span class="agenda-oficina">PUBLIC PROGRAMS – WORKSHOPS</span></p>
                    
                    <div class="titulo titulo-agenda-g"><span>october</span></div>
                    
                    <ol id="ol1">
                    <li>October 6, Tuesday</li>
                    <li class="agenda-abertura">08:00pm | Sesc Pompeia, Galpão | Exhibition opening | <a href="expo_convidados.php" target="_blank" class="link">Southern Panoramas | Guest Artists</a></li>
                    <li class="agenda-abertura">08:00pm | Sesc Pompeia, Convivência | Exhibition opening | <a href="expo_obras.php" target="_blank" class="link">Southern Panoramas | Selected  Works</a></li>
                    <li class="agenda-performance">08:00pm | Sesc Pompeia, Convivência | Performance | <a href="performances.php#oiko" target="_blank" class="link">Oiko-nomic Threads by de Marinos Koutsomichalis, Maria Varela, Afroditi Psarra</a></li>
                    <li class="agenda-performance">09:00pm | Sesc Pompeia, Convivência | Performance | <a href="performances.php#fancy" target="_blank" class="link">Fancy em Pyetà segundo ato by Rodolpho Parigi</a></li>
                    </ol>
                    <ol>
                    <li>October 7, Wednesday</li>
                    <li class="agenda-seminario">11:00am | Sesc Pompeia, Teatro | Public Programs | <a href="pp.php#seminario/mesa1" target="_blank" class="link">Seminar Places and meanings of art: debates from the South | Panel 1: Rethinking traditions: art, gesture and contemporaneity</a></li>
                    <li class="agenda-filme">06:00pm | Sesc Pompeia, Teatro | Opening |  Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1</a></li>
                    <li class="agenda-filme">07:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog2" target="_blank" class="link">Selected Works | Program #2</a></li>
                    <li class="agenda-performance">09:00pm | Sesc Pompeia, Teatro | Performance | <a href="performances.php#vostok" target="_blank" class="link">VOSTOK cineperformance by Leticia Ramos</a></li>
                    <li class="agenda-filme">09:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a></li>
                    </ol>
                    <ol>
                    <li>October 8, Thursday</li>
                    <li class="agenda-oficina">10:30am | Sesc Pompeia, Oficinas de Criatividade | Public Programs | Workshops | <a href="pp.php#oficinas/memoria" target="_blank" class="link">Woven memory: monotype seen from Mali with Abdoulaye Konaté</a></li>
                    <li class="agenda-encontro">11:00am | Sesc Pompeia, Teatro | Public Programs | Meetings and Conversations | <a href="pp.php#encontros/tilting" target="_blank" class="link">Tilting Axis 1.5</a></li>
                    <li class="agenda-filme">02:00pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1</a></li>
                    <li class="agenda-filme">03:00pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog2" target="_blank" class="link">Selected Works | Program #2</a></li>
                    <li class="agenda-filme">04:15pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a></li>
                    <li class="agenda-abertura">07:00pm | Galpão VB | Exhibition opening | <a href="expo_projetos.php" target="_blank" class="link">Southern Panoramas | Commissioned Projects</a></li>
                    <li class="agenda-filme">07:00pm | Galpão VB | Opening |  Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes | Olympia I & II</a></li>
                    <li class="agenda-publicacao">07:30pm | Galpão VB | Book launch | <a href="publicacoes.php#outros/vb" target="_blank" class="link">Videobrasil: three decades of video, art, encounters and transformations</a></li>
                    </ol>
                    <ol>
                    <li>October 9, Friday</li>
                    <li class="agenda-oficina">11:00am | Galpão VB | Public Programs | Workshops | <a href="pp.php#oficinas/vocabulario" target="_blank" class="link">Vocabulary of an existing South: the invention of a world from inexistent places with Ting-Ting Cheng</a></li>
                    <li class="agenda-filme">02:00pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    <li class="agenda-filme">03:40pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a></li>
                    <li class="agenda-filme">04:55pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog2" target="_blank" class="link">Selected Works | Program #2</a></li>
                    <li class="agenda-encontro">05:00pm | Galpão VB | Public Programs | <a href="pp.php#encontros/rede" target="_blank" class="link">Meetings and Conversations | Meeting the Residency Network</a></li>
                     <li class="agenda-filme">06:10pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1</a></li>
                    <li class="agenda-abertura">07:00pm | Paço das Artes | Parallel exhibition opening | <a href="expo_paralela.php" target="_blank" class="link">Those Born For Adventure Don’t Stray From the Path</a></li>
                    </ol>
                    <ol>
                    <li>October 10, Saturday</li>
                    <li class="agenda-oficina">10:30am | Sesc Pompeia, Oficinas de Criatividade | Public Programs | Workshops | <a href="pp.php#oficinas/memoria" target="_blank" class="link">Woven memory: monotype seen from Mali with Abdoulaye Konaté</a></li>
                    <li class="agenda-filme">11:00am | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    <li class="agenda-seminario">02:00pm | Sesc Pompeia, Teatro | Public Programs | <a href="pp.php#seminario/mesa2" target="_blank" class="link">Seminar Places and meanings of art: debates from the South | Panel 2: Rethinking spaces: art, uses and daily life</a></li>
                    <li class="agenda-publicacao">02:00pm | Sesc Pompeia, Teatro | Book launch | <a href="publicacoes.php#festival/leituras" target="_blank" class="link">Southern Panoramas | Readings | Perspectives for other geographies of thought</a></li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    <li class="agenda-publicacao">04:30pm | Sesc Pompeia, Teatro | Book launch | <a href="publicacoes.php#festival/convidados" target="_blank" class="link">Southern Panoramas | Guest Artists</a></li>
                    <li class="agenda-performance">05:00pm | Sesc Pompeia, Convivência | Performance | <a href="performances.php#oiko" target="_blank" class="link">Oiko-nomic Threads</a></li>
                    <li class="agenda-abertura">06:00pm | Sesc Pompeia, Teatro | <a href="premios_e_residencias.php#premios" target="_blank" class="link">Award Ceremony</a></li>
                    </ol>
                    <ol>
                    <li>October 12, Monday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>October 13, Tuesday</li>
                    <li class="agenda-filme">04:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a></li>
                    <li class="agenda-filme">07:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #2 + Program #1</a></li>
                    </ol>
                    <ol>
                    <li>October 15, Thursday</li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1 + Program #2</a></li>
                    <li class="agenda-filme">07:00pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a> + Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>October 17, Saturday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>October 18, Sunday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>October 20, Tuesday</li>
                    <li class="agenda-filme">4:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1 + Program #2</a></li>
                    <li class="agenda-filme">7:00pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3 + Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>October 22, Thursday</li>
                    <li class="agenda-seminario">02:00pm | Sesc Pompeia, Teatro | Public Programs | <a href="pp.php#seminario/mesa3" target="_blank" class="link">Seminar Places and meanings of art: debates from the South | Panel 3: Rethinking narratives: art, memory and fiction</a></li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a></li>
                    <li class="agenda-filme">07:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #2 + Program #1</a></li>
                    </ol>
                    <ol>
                    <li>October 24, Saturday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>October 25, Sunday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>October 27, Tuesday</li>
                    <li class="agenda-filme">04:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a></li>
                    <li class="agenda-filme">07:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #2 + Program #1</a></li>
                    </ol>
                    <ol>
                    <!-- <li>October 28, Wednesday</li>
                    <li>03:00pm | Video Room | 19th Festival Artists in the Videobrasil Collection | Image and Self-Image</li>
                    <li>06:00pm | Video Room | 19th Festival Artists in the Videobrasil Collection | Image and Self-Image</li>
                    </ol> -->
                    <ol>
                    <li>October 29, Thursday</li>
                    <li class="agenda-seminario">02:00pm | Sesc Pompeia, Teatro | Public Programs | <a href="pp.php#seminario/mesa4" target="_blank" class="link">Seminar Places and meanings of art: debates from the South | Panel 4: Rethinking time: art, silences and histories</a></li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1 + Program #2</a></li>
                    <li class="agenda-filme">07:00pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a> + Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>October 31, Saturday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    
                    <div class="titulo titulo-agenda-g" style="margin-top: 30px"><span>november</span></div>
                    
                    <ol>
                    <li>November 1, Sunday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>November 2, Monday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>November 3 de novembro, Tuesday</li>
                    <li class="agenda-filme">04:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1 + Program #2</a></li>
                    <li class="agenda-filme">07:00pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>November 4, Wednesday</li>
                    <li class="agenda-encontro">01:00pm | Galpão VB | Public Programs | Meetings and Conversations | <a href="pp.php#encontros/portfolios" target="_blank" class="link">Reading of Portfolios</a></li>
                    </ol>
                    <ol>
                    <li>November 5, Thursday</li>
                    <li class="agenda-encontro">01:00pm | Galpão VB | Public Programs | Meetings and Conversations | <a href="pp.php#encontros/portfolios" target="_blank" class="link">Reading of Portfolios</a></li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a></li>
                    <li class="agenda-filme">07:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #2 + Program #1</a></li>
                    </ol>
                    <ol>
                    <li>November 7, Saturday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>November 8, Sunday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>November 10, Tuesday</li>
                    <li class="agenda-filme">4:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a></li>
                    <li class="agenda-filme">7:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #2 + Program #1</a></li>
                    </ol>
                    <ol>
                    <li>November 12, Thursday</li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1 + Program #2</a></li>
                    <li class="agenda-filme">07:00pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a> + Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>November 14, Saturday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    <li class="agenda-encontro">04:00pm | Paço das Artes | Public Programs | Meetings and Conversations | <a href="pp.php#encontros/paralela" target="_blank" class="link">Those Born For Adventure Don’t Stray From the Path exhibition tour| Itinerary 1: Brazil, São Paulo – a place for departure</a></li>
                    </ol>
                    <ol>
                    <li>November 15, Sunday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>November 17, Tuesday</li>
                    <li class="agenda-filme">04:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1 + Program #2</a></li>
                    <li class="agenda-filme">07:00pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>November 19, Thursday</li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a></li>
                    <li class="agenda-filme">07:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #2 + Program #1</a></li>
                    </ol>
                    <ol>
                    <li>November 20, Friday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>November 21, Saturday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>November 22, Sunday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>November 24, Tuesday</li>
                    <li class="agenda-filme">04:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a></li>
                    <li class="agenda-filme">07:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #2 + Program #1</a></li>
                    </ol>
                    <ol>
                    <li>November 25, Wednesday</li>
                    <li class="agenda-publicacao">08:00pm | Sesc Pompeia, Teatro | Book launch |  <a href="publicacoes.php#festival/selecionados" target="_blank" class="link">Southern Panoramas | Selected Artworks and Commissioned Projects</a></li>
                    <li class="agenda-performance">09:30pm | Sesc Pompeia, Convivência | Performance | <a href="performances.php#fancy" target="_blank" class="link">Fancy em Pyetà terceiro ato</a></li>
                    </ol>
                    <ol>
                    <li>November 26, Thursday</li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1 + Program #2</a></li>
                    <li class="agenda-filme">07:00pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>November 28, Saturday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>November 29, Sunday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    
                    <div class="titulo titulo-agenda-g" style="margin-top: 30px"><span>december</span></div>
                    
                    <ol>
                    <li>December 1, Tuesday</li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a></li>
                    <li class="agenda-filme">04:30pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1 + Program #2</a></li>
                    <li class="agenda-filme">07:00pm | Galpão VB | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works | Program #3</a> + Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    <li class="agenda-filme">07:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #2 + Program #1</a></li>
                    </ol>
                    <ol>
                    <li>December 2, Wednesday</li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #1 + Program #2</a></li>
                    <li class="agenda-filme">07:00pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a> + <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a></li>
                    </ol>
                    <ol>
                    <li>December 3, Thursday</li>
                    <li class="agenda-filme">04:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#gabriel" target="_blank" class="link">Gabriel Abrantes</a> + <a href="progsfilmes.php#obras/prog3" target="_blank" class="link">Selected Works Program #3</a></li>
                    <li class="agenda-filme">07:30pm | Sesc Pompeia, Teatro | Film Programs | <a href="progsfilmes.php#obras/prog1" target="_blank" class="link">Selected Works | Program #2 + Program #1</a></li>
                    </ol>
                    <ol>
                    <li>December 5, Saturday</li>
                    <li class="agenda-oficina">010:30am | Galpão VB | Public Programs | Workshops | <a href="pp.php#oficinas/lambada" target="_blank" class="link">Lambada and the Social Body: the body of memory and dance experience with Carlos Monroy</a></li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    <ol>
                    <li>December 6, Sunday</li>
                    <li class="agenda-oficina">03:00pm | Sesc Pompeia, Convivência | Public Programs | Workshops | <a href="pp.php#mediacao" target="_blank" class="link">Workshops with the exhibitions’ educators</a></li>
                    </ol>
                    
                    <div class="titulo titulo-agenda-g" style="margin-top: 30px"><span>january</span></div>
                    
                    <ol>
                    <li>January 9, Saturday</li>
                    <li class="agenda-encontro">04:00pm | Paço das Artes | Public Programs | Meetings and Conversations | <a href="pp.php#mediacao" target="_blank" class="link">Those Born For Adventure Don’t Stray From the Path exhibition tour| Itinerary 2: Video in the political arena of art</a></li>
                    </ol>');
                    ?>

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

