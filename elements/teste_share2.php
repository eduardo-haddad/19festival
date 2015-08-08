<?php
$url = "http://" . $_SERVER['SERVER_NAME'] . "/";
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script>

	var url_atual = "<?php echo $url.ltrim($_SERVER['REQUEST_URI'], '/') ?>";


	$(document).ready(function(){

		$('#searchip').on('click', function(){
			$.ajax({
				type: 'GET',
				url: 'share.php',
				data: 'bitly=' + url_atual,
				success: function(msg){
					alert(msg);
				}
	});
	});
	});
	

	</script>
</head>
<body>

	<button id="searchip" value="click" />
	<div id="resultip"></div>



</body>
</html>