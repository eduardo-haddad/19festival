<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

?>

<script>
    
                paletaArtistas($('.titulo'));

</script>

<div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Sobre', 'About');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">

                <div class="col-sm-12 col-md-6 relative" id="id-imagem-top" >
                    <img src="img/pp/sobre-<?php pten('pt', 'en');?>.png" id="img-id-1" class="img-responsive" />

                </div>

                <div class="col-sm-12 col-md-6 h" style="float: right;">

                    <?php pten(                      ////SOBRE PT
                    '<p>Quatro conjuntos de atividades exploram o conteúdo das exposições do Festival: o Seminário Lugares e sentidos da arte: debates a partir do Sul, que reflete sobre as possibilidades de alargamento das categorias da arte na contemporaneidade, as Oficinas, sessões práticas de exercício de linguagens; os Encontros e conversas, oportunidades informais de troca; e as Ações de Mediação conduzidas pelos educadores do Festival. A programação envolve artistas participantes das exposições e convidados, entre curadores, pesquisadores, e representantes de instituições parceiras, além dos educadores.</p>',

                    //SOBRE EN                     
                    
                    '<p>Four different sets of activities will explore the contents of the Festival’s exhibitions: the Seminar Places and meanings of art: debates from the South, which reflects about the possibilities of broadening the artistic categories in contemporaneity; the Workshops, practical sessions for exercise on language; Meetings and conversations, informal opportunities for exchange; and Mediated Actions hosted by the Festival’s educators. The program involves artists featured in the exhibitions, as well as guest curators, researchers, and delegates from partner organizations, as well as educators. </p>');

                    ?>
                    
                    
                </div>


            </div>

