<?php

//bit.ly 
function get_bitly_short_url($url,$login,$appkey,$format='txt') {
	$connectURL = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($url).'&format='.$format;
	return curl_get_result($connectURL);
}

$short_url = get_bitly_short_url($_SERVER["REQUEST_URI"],'videobrasil','R_cc291fcd3bd5474eaefaeed69cc0f090');

return $short_url;

?>
