<?php

//set idioma
session_start();

if (isset($_GET['idioma'])) {
    $_SESSION['idioma'] = $_GET['idioma'];
} elseif (!isset($_SESSION['idioma'])) {
	$_SESSION['idioma'] = 'pt';
}

$idioma = $_SESSION['idioma'];

//criar url a partir do dominio
$url = "http://" . $_SERVER['SERVER_NAME'] . "/";

//separar caracteres de string em classes
function titulo($str){

	$troca_acentos = array(    'Š'=>'S', 'š'=>'s', 'Ž'=>'Z', 'ž'=>'z', 'À'=>'A', 'Á'=>'A', 'Â'=>'A', 'Ã'=>'A', 'Ä'=>'A', 'Å'=>'A', 'Æ'=>'A', 'Ç'=>'C', 'È'=>'E', 'É'=>'E',
                            'Ê'=>'E', 'Ë'=>'E', 'Ì'=>'I', 'Í'=>'I', 'Î'=>'I', 'Ï'=>'I', 'Ñ'=>'N', 'Ò'=>'O', 'Ó'=>'O', 'Ô'=>'O', 'Õ'=>'O', 'Ö'=>'O', 'Ø'=>'O', 'Ù'=>'U',
                          'Ú'=>'U', 'Û'=>'U', 'Ü'=>'U', 'Ý'=>'Y', 'Þ'=>'B', 'ß'=>'Ss', 'à'=>'a', 'á'=>'a', 'â'=>'a', 'ã'=>'a', 'ä'=>'a', 'å'=>'a', 'æ'=>'a', 'ç'=>'c',
                            'è'=>'e', 'é'=>'e', 'ê'=>'e', 'ë'=>'e', 'ì'=>'i', 'í'=>'i', 'î'=>'i', 'ï'=>'i', 'ð'=>'o', 'ñ'=>'n', 'ò'=>'o', 'ó'=>'o', 'ô'=>'o', 'õ'=>'o',
                            'ö'=>'o', 'ø'=>'o', 'ù'=>'u', 'ú'=>'u', 'û'=>'u', 'ý'=>'y', 'þ'=>'b', 'ÿ'=>'y' );
	$str_clean = strtr($str, $troca_acentos);

	for ($i = 0, $len = strlen($str); $i < $len; $i++) {

		if($i == 0){
			echo '<span class="'.strtolower($str_clean[$i]).'">'.$str[$i].'</span><!--';
				echo "\n";
		} elseif($i < $len-1){
			echo '--><span class="'.strtolower($str_clean[$i]).'">'.$str[$i].'</span><!--';
				echo "\n";
      } elseif ($i == $len-1){
  		 	echo '--><span class="'.strtolower($str_clean[$i]).'">'.$str[$i].'</span>';
  		 }

	}
}

//traduzir de acordo com idioma da sessao
function pten($pt, $en){
	echo ($_SESSION['idioma'] == 'pt' ? $pt : $en);
}


function funcPten($pt, $en){
	return ($_SESSION['idioma'] == 'pt' ? $pt : $en);
}


//variaveis para paginas de artistas
$bc_select_obras =  $idioma == 'pt' ? 
'artistas participantes > <span style="text-decoration: underline">selecionados com obras</span>' : 
'participating artists > <span style="text-decoration: underline">selected with artworks</span>';

$bc_select_projetos =  $idioma == 'pt' ? 
'artistas participantes > <span style="text-decoration: underline">selecionados com projetos</span>' : 
'participating artists > <span style="text-decoration: underline">selected with projects</span>';

$bc_convidados =  $idioma == 'pt' ? 
'artistas participantes > <span style="text-decoration: underline">artistas convidados</span>' : 
'participating artists > <span style="text-decoration: underline">guest artists</span>';

$sobre_artista = $idioma == 'pt' ? 
'Sobre o artista' : 
'About the artist';


?>