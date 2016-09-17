<html>
	<head>
		<title>Meus carros 2</title>
	</head>
<body>
	<h1>
		<table border="2">
			<thead>
				<th>coluna1</th>
				<th>coluna2</th>
			</thead>
			<tbody>
				<?php
					require "array/carros_db.php";
					require "array/donos_carros.php";
					# echo "<pre>";
					# var_dump($array);
					#foreach ($array as $chave) {
					#	echo $chave . "<br />";
					#}
					foreach($array as $chave => $valor){
						echo "$chave ===> $valor <br />";
					}
					echo  "<hr>";
					foreach ($carros as $carro) {
						echo "$carro<br />";
					}

				 ?>
				
			</tbody>
		</table>
	</h1>
</body>
</html>
