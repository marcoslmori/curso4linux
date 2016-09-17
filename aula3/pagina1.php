<?php require "common.php" ?>

<html>
<head><title>pagina1</title></head>
<body>
	<?php

		function soma_test ($a, $b, $resultado) {
			echo "a=$a, b=$b, resultado=$resultado<br />";
			return $resultado == soma($a, $b);
		}

		if (soma_test(1,2,3))
			echo "teste OK";
		else echo "teste Fail";
	?>

</body>
</html>