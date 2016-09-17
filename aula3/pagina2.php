<?php require "common.php" ?>

<html>
<head><title>pagina1</title></head>
<body>
	<?php
		// funcoes anonimas
		$minha_func = function($valor) {
		return $valor + 10;
		};
		echo $minha_func(15) . "<br />";
	?>

</body>
</html>