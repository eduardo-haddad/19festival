<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>

</body>
</html>

<?php

// Init do cURL + endpoint
$ch = curl_init('http://acervo.videobrasil.org.br/api/obras/obra/86839');

// Opções do cURL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Obtém o resultado 
$result = curl_exec($ch);
$json = json_decode($result);

// Fecha a conexão
curl_close($ch);

print $json->sinopse[0]->idioma;

