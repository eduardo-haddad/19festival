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
                    '<p>Os Programas Públicos configuram o ambiente de diálogo do 19º Festival,
                    possibilitando que a pesquisa curatorial se desenvolva por meio de ações de
                    contato com o público. Esse canal direto com o espectador se desdobra em
                    encontros e conversas com artistas, curadores e convidados, seminário, e
                    oficinas e ações de mediação. Multidisciplinares, essas ações reconfiguram os
                    espaços expositivos em ambientes de pensamento e troca que extrapolam o campo
                    da arte e dialogam transversalmente com outras áreas do conhecimento. Sob
                    coordenação de Thereza Farkas, diretora de programação do Videobrasil, os
                    Programas Públicos desta edição do Festival se organizam em Encontros e
                    Conversas, Seminário e Oficinas. </p>',

                    //SOBRE EN                     
                    
                    '<p>The Public Programs provide an environment for debate
                    within the 19th Festival, allowing curatorial inquiries
                    to develop through audience interaction. This direct
                    channel with viewers will branch out into meetings and
                    conversations with artists, curators and guests, a
                    seminar, workshops, and mediated actions. These
                    multidisciplinary actions will rearrange the exhibition
                    spaces as places for reflection and exchange that go
                    beyond the art field to converse transversally with
                    other fields of knowledge. Coordinated by Thereza
                    Farkas, Videobrasil’s programming director, the Public
                    Programs are divided into Meetings and Conversations, a
                    Seminar and Workshops. </p>');

                    ?>
                    
                    
                </div>


            </div>

