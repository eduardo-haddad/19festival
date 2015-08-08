<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

		
		


		<?php
			$str = "ali cherri";
			function type($str){
				for ($i = 0, $len = strlen($str); $i < $len; $i++) {
 					
					if($i == 0){
						echo '<span class="'.$str[$i].'">'.$str[$i].'</span><!--';
 						echo "\n";
					} elseif($i < $len-1){
						echo '--><span class="'.$str[$i].'">'.$str[$i].'</span><!--';
 						echo "\n";
					} else {
						echo '--><span class="'.$str[$i].'">'.$str[$i].'</span>';
					}
 					
				}
			}

			type($str);

		?>
		
</body>
</html>