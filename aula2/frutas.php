<html>
	<head>
		<title>Frutas</title>
	</head>
<body>
	<h1>Frutas</h1>
	<?php require "array/frutas.php";?>;
	<?php foreach ($resultado as $chave => $valor): ?>
	
		<li>(<?= $chave ?>) <?= $valor ?></li>

	<?php endforeach ?>
</body>
</html>