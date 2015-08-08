<?php

function get_bitly_short_url($address,$login,$appkey,$format='txt') {
	$connectURL = 'http://api.bit.ly/v3/shorten?login='.$login.'&apiKey='.$appkey.'&uri='.urlencode($address).'&format='.$format;
	return curl_get_result($connectURL);
}

/* returns expanded url */
function get_bitly_long_url($address,$login,$appkey,$format='txt') {
	$connectURL = 'http://api.bit.ly/v3/expand?login='.$login.'&apiKey='.$appkey.'&shortUrl='.urlencode($address).'&format='.$format;
	return curl_get_result($connectURL);
}

/* returns a result form url */
function curl_get_result($address) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch,CURLOPT_URL,$address);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
	curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,$timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}



$bitly_user = 'videobrasil';
$bitly_key = 'R_cc291fcd3bd5474eaefaeed69cc0f090';





///////////

if ($_GET['bitly']) {
	$bitly_short_url = get_bitly_short_url($_GET['bitly'],$bitly_user,$bitly_key);
	$bitly=$bitly_short_url;
	echo $bitly;
}


?>