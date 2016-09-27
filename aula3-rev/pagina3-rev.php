<?php require "common.php" ?>
<html>
<head>
	<title>pagina 3</title>
</head>
<body>
<?php 
	// possibilidade de passar uma função de uma função
	$valores = [1, 2, 3, 4, 5, 6, 7, 8];
	$valores_filtrados = my_filters($valores, function($n) {
		return ($n % 2 == 1);
	});
	var_dump($valores_filtrados);
?>

</body>
</html>