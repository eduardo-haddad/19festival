<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
?>

<div class="row" style="clear: both;">
                <div class="col-xs-12">
                    <div class="titulo n"><span><?php pten('SEMANA DE ABERTURA | 8 A 10 DE OUTUBRO', 'OPENING WEEK | OCTOBER 8-10'); ?></span></div>
                    
                    <p class="bold f"><?php pten('PROGRAMA DE FILMES OBRAS SELECIONADAS', 'FILM PROGRAM - SELECTED ARTWORKS'); ?></p>
                    
                    <p class="f"><span class="bold"><?php pten('08/OUT (QUINTA) | 14HS ÀS 17H30 | SESC POMPEIA | TEATRO', 
                                                               '08/OUT (THU) | 14HS-17H30 | SESC POMPEIA | THEATER'); ?></span><br />
                    <?php pten('14h - Programa #1', '14h - Program #1'); ?><br />
                    <?php pten('15h - Programa #2', '15h - Program #2'); ?><br />
                    <?php pten('16h15 - Programa #3', '16h15 - Program #3'); ?></p>

                    <p class="f"><span class="bold"><?php pten('09/OUT (SEXTA) | 14HS ÀS 19H10 | SESC POMPEIA | TEATRO', 
                                                               '09/OUT (FRI) | 14HS-19H10 | SESC POMPEIA | THEATER'); ?></span><br />
                    <?php pten('14h - Programa Gabriel Abrantes', '14h - Gabriel Abrantes film program'); ?><br />
                    <?php pten('15h40 - Programa #3 ', '15h40 - Program #3'); ?><br />
                    <?php pten('16h55 - Programa #2 ', '16h55 - Program #2'); ?><br />
                    <?php pten('18h10 - Programa #1', '18h10 - Program #1'); ?></p>

                    <p class="f"><span class="bold"><?php pten('10/OUT (SÁBADO) | 11H ÀS 12H40 | SESC POMPEIA | TEATRO', 
                                                               '10/OUT (SAT) | 11H-12H40 | SESC POMPEIA | THEATER'); ?></span><br />
                    <?php pten('11h - Programa Gabriel Abrantes', '11h - Gabriel Abrantes film program'); ?></p>
 
                 </div>
</div>

                <div class="row" style="clear: both; margin-top: 15px">
                <div class="col-xs-12">
                    <div class="titulo n"><span><?php pten('após a semana de abertura | 13 DE OUTUBRO A 3 DE DEZEMBRO', 'AFTER THE OPENING WEEK | OCTOBER 13 - DECEMBER 3'); ?></span></div>
                    
                    <p class="bold f"><?php pten('PROGRAMA DE FILMES OBRAS SELECIONADAS', 'FILM PROGRAM - SELECTED ARTWORKS'); ?></p>
                    
                    <p class="f"><span class="bold"><?php pten('Programa de Filmes - A', 
                                                               'Film program - A'); ?></span><br />
                    <?php pten('16h30 - Programa #1 + Programa #2', '16h30 - Program #1 + Program #2'); ?><br />
                    <?php pten('19h - Programa #3 + Programa Gabriel Abrantes', '19h - Program #3 + Gabriel Abrantes film program<br />'); ?>
                    <?php pten('<span class="bold">Sesc Pompéia | Teatro</span>:
                    15/OUT (quinta), 29/OUT (quinta), 12/NOV (quinta), 26/NOV (quinta) e 02/DEZ (quarta)<br />
                    <span class="bold">Galpão VB</span>: 20/OUT (terça), 03/NOV (terça), 17/NOV (terça) e 01/DEZ (terça)',
                    
                    '<span class="bold">Sesc Pompéia | Theater</span>:
                    OCT/15 (thu), OCT/29 (thu), NOV/12 (thu), NOV/26 (thu) e DEC/02 (wed)<br />
                    <span class="bold">Galpão VB</span>: OCT/20 (tue), NOV/03 (tue), NOV/17 (tue) e DEC/01 (tue)'); ?>



                    
 
 

                    </p>

                    
 
                 </div>
</div>

            <div class="row link_rodape" style="margin-top: 32px">
            <div ></div>
                <div class="col-md-6 informacoes" style="left: -15px;">
                    <?php 
                    pten('<p class="g bold">SESC POMPEIA</p>
                    <p style="clear: both" class="g">
                    Rua Clélia, 93<br>
                    São Paulo, SP<br>
                    Tel.: 11 3871 7700 | 0800 11 8220 <br>
                    www.sescp.org.br</p>

                    <p class="g">VISITACÃO<br>
                    de 6 de outubro a 6 de dezembro de 2015<br>
                    terça a sábado das 9h às 22h;<br>
                    domingos e feriados das 9h às 20h</p>',

                    '<p class="g bold">SESC POMPEIA</p>
                    <p style="clear: both" class="g">
                    Rua Clélia, 93<br>
                    São Paulo, SP, BRAZIL<br>
                    Tel.: 11 3871 7700 | 0800 11 8220 <br>
                    www.sescp.org.br</p>

                    <p class="g">VISITATION<br>
                    october 6 to december 6, 2015<br>
                    terça a sábado das 9h às 22h;<br>
                    domingos e feriados das 9h às 20h</p>');


                    ?>



                </div>
                <div class="col-md-6 informacoes" style="left: -15px;">
                    <?php
                    pten('<p class="l bold">Galpão VB</p>
                    <p class="l">Av. Imperatriz Leopoldina, 1150<br>
                    São Paulo, SP<br>
                    Tel.: 11 3645 0516<br>
                    www.videobrasil.org.br</p>

                    <p class="l">visitação<br>
                    de 8 de outubro a 6 de dezembro de 2015<br>
                    segundas, quartas, quintas e sextas das 13h às 19h; <br>
                    terças das 14h às 21h</p>',

                    '<p class="l bold">Galpão VB</p>
                    <p>Av. Imperatriz Leopoldina, 1150<br>
                    São Paulo, SP, Brazil<br>
                    Tel.: +55 11 3645 0516<br>
                    www.videobrasil.org.br</p>

                    <p>visitation<br>
                    xxxx<br>
                    segundas, quartas, quintas e sextas das 13h às 19h; <br>
                    terças das 14h às 21h</p>');
                    ?>

                </div>

            </div>