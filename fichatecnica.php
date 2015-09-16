<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/elements/config.php");

$titulo = $idioma == 'pt' ? 'Ficha técnica' : 'Staff';

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
                    <span><?php pten('sobre o festival > <span class="underline">ficha técnica</span>', 
                                     'about the festival > <span class="underline">staff</span>');  ?></span>      
                </div>
            </div>

            <!-- SUBMENU -->
            <div class="row">
                <div class="col-xs-12">
                    <p class="submenu" style="margin-bottom:21px">
                            <a href="apresentacao.php"><?php pten('Apresentação','Introduction');?></a> | 
                            <a href="palavrasesc.php"><?php pten('Palavra do Sesc','Word from Sesc');?></a> | 
                            <a href="curadoria.php"><?php pten('Curadoria','Curators');?></a> | 
                            <a href="identidade.php"><?php pten('Identidade Visual','Visual Identity');?></a> | 
                            <a href="realizacao.php"><?php pten('Realização','Undertaking');?></a> | 
                            <a href="parceiros.php"><?php pten('Parceiros','Supporters');?></a> | 
                            <a href="fichatecnica.php"><span style="text-decoration: underline"><?php pten('Ficha Técnica','Staff');?></span></a> | 
                            <a href="convocatorias.php"><?php pten('Convocatórias 19º','Open calls');?></a> | 
                            <a href="<?php pten('http://site.videobrasil.org.br/festival/festivais', 'http://site.videobrasil.org.br/en/festival/festivais');?>" target="_blank"><?php pten('Histórico do Festival','History');?></a> | 
                            <a href="visite.php"><?php pten('Visite','Visit');?></a>
                    </p>       
                </div>
            </div>
            <!-- SUBMENU -->

            <div class="row" >
                <div class="col-xs-12 titulo" style="float: left;">
                <p style="margin-bottom:0">
                   <?php pten('Ficha técnica', 'Staff');  ?>
                </p>
                </div>
            </div>
           
            <div class="row" style="clear: both;">



                <div class="col-xs-12 col-md-6 f">
                    <?php pten(                                         
                    //ESQUERDA
                    '<p><span class="bold upper">DIREÇÃO E CURADORIA GERAL</span><br />
                     Solange O. Farkas</p>
                     
                     <p><span class="bold upper">ASSISTENTE DA DIREÇÃO</span><br />
                     Camila Schmidt Veiga</p>
                     
                     <p><span class="bold upper">DIREÇÃO DE PROGRAMAÇÃO</span><br />
                     Thereza Farkas</p>
                     
                     <p><span class="bold upper">ASSISTENTE DA PROGRAMAÇÃO</span><br />
                     Luiza Brenner, Naiade Margonar</p>
                     
                     <p><span class="bold upper">CURADORES CONVIDADOS</span><br />
                     Bernardo José de Souza, Bitu Cassundé, João Laia, Júlia Rebouças</p>
                     
                     <p><span class="bold upper">CURADORIA EXPOSIÇÃO PARALELA</span><br />
                     Diego Matos</p>
                     
                     <p><span class="bold upper">CURADORIA DO SEMINÁRIO </span><br />
                     Sabrina Moura</p>
                     
                     <p><span class="bold upper">JÚRI DE PREMIAÇÃO</span><br />
                     Hoor-Qasimi, N’Goné Fall, Priscila Arantes, Sofia Hernandez Chong Cuy, Till Fellrath/Sam Bardaouil</p>
                     
                     <p><span class="bold upper">PRÊMIOS DE RESIDÊNCIA</span><br />
                     A-I-R Laboratory, Prêmio de Residência A-I-R Laboratory Arquetopia, <br />
                     Prêmio de Residência Arquetopia_Videobrasil<br />
                     Delfina Foundation, Prêmio de Residência Delfina_Videobrasil <br />
                     Djerassi Resident Artists Program, Prêmio de Residência Res Artis <br />
                     Kyoto Art Center, Prêmio de Residência Res Artis<br />
                     Kooshk Residency, Prêmio de Residência Res Artis<br />
                     Red Gate Residency, Prêmio de Residência China Art Foundation <br />
                     Residência Vila Sul, Prêmio de Residência Vila Sul – Goethe-Institut <br />
                     Wexner Center for the Arts , Prêmio de Residência Wexner Center for the Arts</p>
                     
                     <p><span class="bold upper">PRÊMIO ESPECIAL</span><br />
                     Prêmio SP-Arte/Videobrasil</p>
                     
                     <p><span class="bold upper">TROFÉU</span><br />
                     Efrain Almeida</p>
                     
                     <p><span class="bold upper">COORDENAÇÃO DE PRODUÇÃO</span><br />
                     Adriano Alves Pinto, Rafael Moretti</p>
                     
                     <p><span class="bold upper">COORDENAÇÃO DAS EXPOSIÇÕES</span><br />
                     Marcos Farinha</p>
                     
                     <p><span class="bold upper">COORDENADORA ASSISTENTE</span><br />
                     Cassia Rossini</p>
                     
                     <p><span class="bold upper">PRODUTORAS</span><br />
                     Carolina Câmara (acervo), Márcia Vaz (projetos comissionados),<br />
                     Maria Chiaretti (artistas convidados)</p>
                     
                     <p><span class="bold upper">ASSISTENTES DE PRODUÇÃO</span><br />
                     Elton de Almeida, Paulo Menezes</p>
                     
                     <p><span class="bold upper">LOGÍSTICA</span><br />
                     Sylvia Monasterios</p>
                     
                     <p><span class="bold upper">IDENTIDADE VISUAL E PROJETO GRÁFICO</span><br />
                     Angela Detanico, Rafael Lain</p>
                     
                     <p><span class="bold upper">DIREÇÃO DE ARTE E DIAGRAMAÇÃO</span><br />
                     Carla Castilho, Lia Assumpção | Janela Estúdio<br />
                     Maria Mello (Arte)<br />
                     Lívia Giuliane da Silva (Assistente)</p>
                     
                     <p><span class="bold upper">COORDENAÇÃO EDITORIAL</span><br />
                     Teté Martinho</p>
                     
                     <p><span class="bold upper">EDITOR-ASSISTENTE</span><br />
                     Gabriel Bogossian</p>
                     
                     <p><span class="bold upper">REVISÃO</span><br />
                     Regina Stocklen</p>',


                     /////////////////////             
                    '<p><span class="bold upper">DIRECTOR AND CHIEF CURATOR</span><br />
                     Solange O. Farkas</p>
                     
                     <p><span class="bold upper">ASSISTANT TO THE DIRECTOR</span><br />
                     Camila Schmidt Veiga</p>
                     
                     <p><span class="bold upper">PROGRAMME DIRECTOR</span><br />
                     Thereza Farkas</p>
                     
                     <p><span class="bold upper">PROGRAMME ASSISTANT</span><br />
                     Luiza Brenner, Naiade Margonar</p>
                     
                     <p><span class="bold upper">GUEST CURATORS</span><br />
                     Bernardo José de Souza, Bitu Cassundé, João Laia, Júlia Rebouças</p>
                     
                     <p><span class="bold upper">PARALLEL EXHIBITION CURATOR</span><br />
                     Diego Matos</p>
                     
                     <p><span class="bold upper">SEMINAR CURATOR</span><br />
                     Sabrina Moura</p>
                     
                     <p><span class="bold upper">AWARD JURY</span><br />
                     Hoor-Qasimi, N’Goné Fall, Priscila Arantes, Sofia Hernandez Chong Cuy, Till Fellrath/Sam Bardaouil</p>
                     
                     <p><span class="bold upper">RESIDENCY PRIZES</span><br />
                     A-I-R Laboratory, A-I-R Laboratory Residency Prize<br />
                     Arquetopia, Arquetopia_Videobrasil Residency Prize<br />
                     Delfina Foundation, Delfina_ Videobrasil Residency Prize <br />
                     Djerassi Resident Artists Program, Res Artis Residency Prize<br />
                     Kooshk Residency, Res Artis Residency Prize<br />
                     Kyoto Art Center, Res Artis Residency Prize<br />
                     Red Gate Residency, China Art Foundation Residency Prize Residence <br />
                     Vila Sul, Residence Vila Sul – Goethe Institut Residency Prize <br />
                     Wexner Center for the Arts, Wexner Center for the Arts Residency Prize
                     </p>
                     
                     <p><span class="bold upper">SPECIAL PRIZE</span><br />
                     SP-Arte/Videobrasil Prize</p>
                     
                     <p><span class="bold upper">TROPHY</span><br />
                     Efrain Almeida</p>
                     
                     <p><span class="bold upper">PRODUCTION COORDINATORS</span><br />
                     Adriano Alves Pinto, Rafael Moretti</p>
                     
                     <p><span class="bold upper">EXHIBITIONS COORDINATOR</span><br />
                     Marcos Farinha</p>
                     
                     <p><span class="bold upper">ASSISTANT COORDINATOR</span><br />
                     Cassia Rossini</p>
                     
                     <p><span class="bold upper">PRODUCERS</span><br />
                     Carolina Câmara (archive), Márcia Vaz (comissioned projects),<br />
                     Maria Chiaretti (guest artists)</p>
                     
                     <p><span class="bold upper">ASSISTANT PRODUCERS</span><br />
                     Elton de Almeida, Paulo Menezes</p>
                     
                     <p><span class="bold upper">LOGISTICS</span><br />
                     Sylvia Monasterios</p>
                     
                     <p><span class="bold upper">VISUAL IDENTITY AND GRAPHIC DESIGN</span><br />
                     Angela Detanico, Rafael Lain</p>
                     
                     <p><span class="bold upper">ART DIRECTION AND DESIGN</span><br />
                     Carla Castilho, Lia Assumpção | Janela Estúdio<br />
                     Maria Mello (Design)<br />
                     Lívia Giuliane da Silva (Assistant)</p>
                     
                     <p><span class="bold upper">EDITORIAL COORDINATOR</span><br />
                     Teté Martinho</p>
                     
                     <p><span class="bold upper">ASSISTANT EDITOR</span><br />
                     Gabriel Bogossian</p>
                     
                     <p><span class="bold upper">COPY PROOFREADING</span><br />
                     Regina Stocklen</p>');

                    ?>

                </div>

                <div class="col-xs-12 col-md-6 f" style="float: right;" id="id-texto">

                    <?php pten(  
                    //DIREITA                                         
                    '<p><span class="bold upper">PRODUÇÃO EDITORIAL</span><br />
                     Maria Teresa Tavares</p>
                     
                     <p><span class="bold upper">ASSISTENTE EDITORIAL</span><br />
                     Juliana Caffé</p>
                     
                     <p><span class="bold upper">COORDENAÇÃO DE ARQUIVO E PESQUISA</span><br />
                     Diego Matos</p>
                     
                     <p><span class="bold upper">PESQUISADOR</span><br />
                     Ruy Luduvice</p>
                     
                     <p><span class="bold upper">ASSISTENTES DE PESQUISA</span><br />
                     Juliana Costa, Régis Alves</p>
                     
                     <p><span class="bold upper">AUDIOVISUAL</span><br />
                     Leonardo Zerino, Samuel de Castro</p>
                     
                     <p><span class="bold upper">PROGRAMAÇÃO VIDEOTECA</span><br />
                     Andrei Thomaz</p>
                     
                     <p><span class="bold upper">CONSULTOR TÉCNICO</span><br />
                     Marcos Santos</p>
                     
                     <p><span class="bold upper">PRODUTOR TÉCNICO</span><br />
                     Anderson Araújo</p>
                     
                     <p><span class="bold upper">COORDENAÇÃO DE COMUNICAÇÃO</span><br />
                     Ana Paula Vargas</p>
                     
                     <p><span class="bold upper">REDAÇÃO</span><br />
                     Deborah Moreira</p>
                     
                     <p><span class="bold upper">DESENVOLVIMENTO WEB</span><br />
                     Eduardo Haddad</p>
                     
                     <p><span class="bold upper">MÍDIAS SOCIAIS</span><br />
                     Kátia König</p>
                     
                     <p><span class="bold upper">DESIGN</span><br />
                     Lila Botter</p>
                     
                     <p><span class="bold upper">ASSISTENTE</span><br />
                     Cecília Ungaretti</p>
                     
                     <p><span class="bold upper">PRODUÇÃO DE COMUNICAÇÃO</span><br />
                     Isolda Libório</p>
                     
                     <p><span class="bold upper">ESTAGIÁRIA</span><br />
                     Mariana Tessitore</p>
                     
                     <p><span class="bold upper">ASSESSORIA DE IMPRENSA</span><br />
                     A4 Comunicação</p>
                     
                     <p><span class="bold upper">PROJETO ARQUITETÔNICO E CENOGRAFIA</span><br />
                     André Vainer Arquitetos | Tiago Wright, Thais Marcussi, Fernanda Jozsef</p>
                     
                     <p><span class="bold upper">PROJETO DE ILUMINAÇÃO</span><br />
                     Design da Luz Estúdio | Fernanda Carvalho</p>
                     
                     <p><span class="bold upper">ASSISTENTE</span><br />
                     Charly Ho, Renata Fongaro</p>
                     
                     <p><span class="bold upper">PROJETO DE ELÉTRICA E SEGURANÇA</span><br />
                     Hit Engenharia</p>
                     
                     <p><span class="bold upper">PROJETO DE ESTRUTURA</span><br />
                     Arquimedes Costa Engenharia Estrutural</p>
                     
                     <p><span class="bold upper">PESQUISA PLATAFORMA:VB</span><br />
                     Isabella Lenzi, Régis Alves, Ruy Luduvice</p>
                     
                     <p><span class="bold upper">AÇÃO EDUCATIVA</span><br />
                     Zebra 5</p>
                     
                     <p><span class="bold upper">COORDENAÇÃO ADMINISTRATIVA</span><br />
                     Jô Lacerda</p>
                     
                     <p><span class="bold upper">ASSISTENTE ADMINISTRATIVA</span><br />
                     Divy Cristina, Marcella G. Mello</p>
                     
                     <p><span class="bold upper">ASSESSORIA JURÍDICA</span><br />
                     Olivieri Associados</p>
                     ',

                    /////////////////////                
                    '<p><span class="bold upper">EDITORIAL PRODUCER</span><br />
                     Maria Teresa Tavares</p>
                     
                     <p><span class="bold upper">EDITORIAL ASSISTANT</span><br />
                     Juliana Caffé</p>
                     
                     <p><span class="bold upper">ARCHIVE AND RESEARCH COORDINATOR</span><br />
                     Diego Matos</p>
                     
                     <p><span class="bold upper">RESEARCHER</span><br />
                     Ruy Luduvice</p>
                     
                     <p><span class="bold upper">RESEARCH ASSISTANTS</span><br />
                     Juliana Costa, Régis Alves</p>
                     
                     <p><span class="bold upper">AUDIOVISUAL</span><br />
                     Leonardo Zerino, Samuel de Castro</p>
                     
                     <p><span class="bold upper">VIDEO LIBRARY PROGRAMMER</span><br />
                     Andrei Thomaz</p>
                     
                     <p><span class="bold upper">TECHNICAL CONSULTANT</span><br />
                     Marcos Santos</p>
                     
                     <p><span class="bold upper">TECHNICAL PRODUCER</span><br />
                     Anderson Araújo</p>
                     
                     <p><span class="bold upper">COMMUNICATIONS COORDINATOR</span><br />
                     Ana Paula Vargas</p>
                     
                     <p><span class="bold upper">STAFF WRITER</span><br />
                     Deborah Moreira</p>
                     
                     <p><span class="bold upper">WEB DEVELOPMENT</span><br />
                     Eduardo Haddad</p>
                     
                     <p><span class="bold upper">SOCIAL MEDIA</span><br />
                     Kátia König</p>
                     
                     <p><span class="bold upper">DESIGN</span><br />
                     Lila Botter</p>
                     
                     <p><span class="bold upper">ASSISTANT</span><br />
                     Cecília Ungaretti</p>
                     
                     <p><span class="bold upper">COMMUNICATIONS PRODUCER</span><br />
                     Isolda Libório</p>
                     
                     <p><span class="bold upper">INTERN</span><br />
                     Mariana Tessitore</p>
                     
                     <p><span class="bold upper">PRESS RELATIONS</span><br />
                     A4 Comunicação</p>
                     
                     <p><span class="bold upper">ARCHITECTONIC AND SCENOGRAPHIC DESIGN</span><br />
                     André Vainer Arquitetos | Tiago Wright, Thais Marcussi, Fernanda Jozsef</p>
                     
                     <p><span class="bold upper">LIGHTING DESIGN</span><br />
                     Design da Luz Estúdio | Fernanda Carvalho</p>
                     
                     <p><span class="bold upper">ASSISTANT</span><br />
                     Charly Ho, Renata Fongaro</p>
                     
                     <p><span class="bold upper">ELECTRICS AND SAFETY</span><br />
                     Hit Engenharia</p>
                     
                     <p><span class="bold upper">STRUCTURAL PROJECT</span><br />
                     Arquimedes Costa Engenharia Estrutural</p>
                     
                     <p><span class="bold upper">PLATAFORMA:VB RESEARCHERS</span><br />
                     Isabella Lenzi, Régis Alves, Ruy Luduvice</p>
                     
                     <p><span class="bold upper">EDUCATIONAL ACTIONS</span><br />
                     Zebra 5</p>
                     
                     <p><span class="bold upper">MANAGEMENT COORDINATOR</span><br />
                     Jô Lacerda</p>
                     
                     <p><span class="bold upper">MANAGEMENT ASSISTANTS</span><br />
                     Divy Cristina, Marcella G. Mello</p>
                     
                     <p><span class="bold upper">LEGAL ADVISOR</span><br />
                     Olivieri Associados</p>
                     ');

                    ?>
                    
                    
                </div>


            </div>
           
        



            <div id="altura">&nbsp;</div>
    </main>

    <!-- RODAPE -->
    <footer><?php include "elements/footer.html"; ?></footer>
    <!-- /RODAPE -->

</body>
</html>

