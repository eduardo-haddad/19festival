<?php 

$ch  = curl_init('http://acervo.videobrasil.org.br/api/artistas/artista/'.$id_artista.'');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$result = curl_exec($ch);
$artista = json_decode($result, true);
curl_close($ch);

if ($_GET['artista_bio']) {
	foreach($artista["biografia"] as $bio=>$valor) {echo($idioma == $valor['idioma'] ? $valor['biografia'] : null);}
}


?>