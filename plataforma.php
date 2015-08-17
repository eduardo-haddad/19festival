<?phpinclude_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");
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

        	<div class="row">
        		<div class="col-xs-12 breadcrumb">
                    <span>saiba mais > plataforma:vb</span>      
                </div>
        	</div>

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0"><!-- 
                --><?php titulo('plataforma:vb');?>
                </p>
                </div>
            </div>
            
            <div class="row" style="clear: both;">
                <div class="col-sm-12 col-md-6" style="text-align: center; float: left ">
                    <img src="http://site.videobrasil.org.br/uploads/201310/20131031_172517_plataformavb_01.png" height="289" width="485" />
                </div>
            <div class="col-sm-12 col-md-6" style="float: right;">
                <p class="h">A PLATAFORMA:VB é uma ferramenta online para pesquisa e experimentação em arte.
Como um laboratório de interações, seus pontos e vetores promovem um cruzamento
de vozes de artistas, curadores, educadores e público, desenhando uma trama de
conexões estabelecidas a partir de investigações multidisciplinares e
polifônicas.</p>

<p class="o">A plataforma explora e expande as relações entre os conteúdos
gerados pelas ações do Videobrasil, como as obras que integram suas exposições e
os trabalhos reunidos em seu acervo – uma das mais completas coleções de vídeo e
registro de performance do Sul geopolítico, com cerca de 3000 títulos
colecionados em 30 anos. A partir de contribuições de autores diversos e em
formatos múltiplos – textos, imagens, obras, links –, a PLATAFORMA:VB revela o
universo dos processos, contextos e referências em torno das obras e conteúdos
do Videobrasil, evidenciando suas conexões com disciplinas para além das artes
visuais, como política, história e sociologia.</p>

<p class="s">Ainda que heterogêneas, as ações do Videobrasil se alinham na mesma direção: criar um acervo de arte
contemporânea relevante, vivo e em constante diálogo com as questões atuais da
arte e do mundo. A PLATAFORMA:VB opera conectando essas ações e gerando novas
formas de explorar os conteúdos que elas criam e/ou agregam. Ela pode ser usada
como dispositivo para pesquisa e curadoria e para fins educacionais,
contribuindo com a criação de novas estruturas de mediação dedicadas à produção
artística contemporânea. Rede de acesso coletivo, esta plataforma convida ainda
à navegação despretensiosa e está aberta a experimentações que deem novos
sentidos a seus conteúdos.</p>
             </div>
            </div>

            <br style="margin-bottom: 14px" />

            <div class="row">
                <div class="col-xs-12">

                    <div class="bloco">
                        <img src="img/plataforma/temp_plataforma.png" /><br />
                        <div><span>título<br />legenda</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/plataforma/temp_plataforma.png" /><br />
                        <div><span>título<br />legenda</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/plataforma/temp_plataforma.png" /><br />
                        <div><span>título<br />legenda</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/plataforma/temp_plataforma.png" /><br />
                        <div><span>título<br />legenda</span></div>

                    </div>

                    <div class="bloco">
                        <img src="img/plataforma/temp_plataforma.png" /><br />
                        <div><span>título<br />legenda</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/plataforma/temp_plataforma.png" /><br />
                        <div><span>título<br />legenda</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/plataforma/temp_plataforma.png" /><br />
                        <div><span>título<br />legenda</span></div>

                    </div>
                    <div class="bloco">
                        <img src="img/plataforma/temp_plataforma.png" /><br />
                        <div><span>título<br />legenda</span></div>

                    </div>
                   
                </div>

            </div>

            <div class="row link_rodape" style="clear:both">                 <div class="col-
md-12" style="padding-left: 0">                     <span>clique <a
href="">aqui</a> e conheça os troféus das edições anteriores do
festival</span>                 </div>             </div>

            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

