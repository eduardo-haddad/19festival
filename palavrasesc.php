<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Palavra do Sesc' : 'Word from Sesc';

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
                    <span><?php pten('sobre o festival > <span class="underline">Palavra do Sesc</span>', 
                                     'about the festival > <span class="underline">Word from Sesc</span>');  ?></span>      
                </div>
        	</div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                            <a href="apresentacao.php"><?php pten('Apresentação','Introduction');?></a> | 
                            <a href="palavrasesc.php"><span style="text-decoration: underline"><?php pten('Palavra do Sesc','Word from Sesc');?></span></a> | 
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a> | 
                            <a href="identidade.php"><?php pten('Identidade Visual','Visual Identity');?></a> | 
                            <a href="realizacao.php"><?php pten('Realização','Undertaking');?></a> | 
                            <a href="parceiros.php"><?php pten('Parceiros','Supporters');?></a> | 
                            <a href="fichatecnica.php"><?php pten('Ficha Técnica','Staff');?></a> | 
                            <a href="convocatorias.php"><?php pten('Convocatórias 19º','Open calls');?></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a>
                    </p>      
                </div>
            </div>
            <!-- SUBMENU -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                    <?= $titulo ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both; margin-bottom: 15px">

              

                <div class="col-sm-12 col-md-6 h relative" style="float: left;">
                     <!-- <img src="img/sobre/apresentacao.png" class="img-responsive" style="max-width: 485px" /> -->
                 
                </div>

                <div class="col-sm-12 col-md-6 h relative" style="float: left;">
                     
                    <p>
                    <?php pten('<span class="titulo o">Arte que instiga e exaspera</span><br />
                                <span class="submenu" style="cursor: text">por Danilo Santos de Miranda<br />
                                Diretor Regional do Sesc São Paulo</span>', 
                               '<span class="titulo o">ART THAT INSTIGATES AND EXASPERATES</span><br />
                               <span class="submenu" style="cursor: text">by Danilo Santos de Miranda<br />
                               Regional Director, Sesc São Paulo'); ?></p>

                    <?php pten(////DANILO PT                     
                        '<p class="f">Indiferença e conformismo tendem a ocultar certo mal-estar provocado pelas múltiplas demandas da vida contemporânea. Uma forma de chacoalhar esse estado de coisas é promover momentos de suspensão e estranhamento, capazes de cultivar outras possibilidades de ser e estar no mundo. Esses momentos de suspensão podem ser alcançados de diversas maneiras, em especial pelas artes.</p>

                            <p class="f">Nesse cenário, a liberdade de expressão adquire contornos relevantes ao colocar em xeque um modelo civilizacional afetado por frequentes crises. Essa ideia traz em seu bojo matrizes de superação pela busca de novos campos e oportunidades, por meio da criatividade, da experimentação, da crítica e da reflexão. Nesse terreno não polarizado, indefinido a priori, sobressaem ligações eletivas e afetivas associadas à convivência humana, à noção de transitoriedade e certa tendência para improvisação e tolerância ao erro.</p>

                            <p class="f">As criações simbólicas nos instigam a convocar outras interfaces e conexões, ao lidar com as subjetividades, abrigar elementos de dúvida e agregar um lugar para novas perguntas e investigações. Desse modo, combinações improváveis podem sugerir aberturas para diálogos horizontais e possibilitar outras ações em rede.</p>

                            <p class="f">Desde 1992, a parceria do Sesc com a Associação Cultural Videobrasil atua na promoção e difusão dessa singularidade de expressões, e conta com o engajamento de curadores, artistas e pesquisadores de diferentes territórios e culturas identificados com um Sul global. Tal iniciativa visa, ainda, fomentar o encontro de diferentes públicos para debates, trocas de saberes e a fruição cultural como pressupostos para desencadear um processo reflexivo, em deliberada oposição ao conformismo e à indiferença que podem anestesiar os movimentos de transformação social. </p>

                            <p class="f">Nesse contexto, o Festival de Arte Contemporânea Sesc_Videobrasil | Panoramas do Sul, atualmente em sua décima nona edição, fortalece uma abordagem educativa em torno de questões centrais do mundo contemporâneo, valorizando as perspectivas da arte como elementos fundamentais para a construção de um pensamento crítico.</p>',

                    //DANILO EN                     
                            '<p class="f">Indifference and conformism tend to conceal a certain uneasiness caused by the multiple demands of contemporary life. One way to shake up the status quo is to promote moments of suspension and uncanniness capable of cultivating other possible forms of being in the world. These moments of suspension can be achieved in many ways, especially through the arts. </p>       

                            <p class="f">In this context, freedom of expression becomes all the more relevant insofar as it jeopardizes an entire civilizing model that is fraught with frequent crises. This idea carries, in its core, templates for an overcoming through the pursuit of new fields and opportunities, through creativity, experimentation, criticism, and reflection. On this non-polarized terrain, where nothing is predefined, what prevail are chosen and emotional bonds associated with human interaction, with the notion of transitoriness, and with a certain tendency towards improvisation and tolerance regarding error.</p>

                            <p class="f">In dealing with subjectivities, symbolic creations coax us to draft in other interfaces and connections, harbor elements of doubt, and open a space for new questions and lines of investigation. This allows unlikely combinations to throw open doors onto horizontal dialogues and enable other network-based actions.</p>

                            <p class="f">Since 1992, Sesc’s partnership with Associação Cultural Videobrasil has worked to promote and spread this singularity of expressions, and in so doing it has been able to count on curators, artists and researchers from different territories and cultures identified with the global South. It is an initiative that also aims to engage various publics in debates, knowledge sharing, and cultural fruition as preconditions for triggering a reflexive process in deliberate opposition to the conformism and indifference that can numb movements for social transformation.</p>

                            <p class="f">In this context, the Contemporary Art Festival Sesc_Videobrasil | Southern Panoramas, now in its nineteenth edition, strengthens its educational take on issues that are central to the contemporary world, valuing the perspectives of art as key elements in building critical thinking.</p>');

                    ?>
                    </div>

           
                
                

            <br style="margin-bottom: 28px" />

            <!-- <div class="row">
                <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_01-temp.jpg" />
                </div>
               <div class="col-sm-12 col-md-6 relative">
                        <img src="img/expos/preview_sesc_02-temp.jpg" />
                </div>
            </div> -->

            
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

