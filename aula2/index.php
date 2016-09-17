<html>
	<head>
		<title>Minha primeira pagina</title>
	</head>
<body>
	<h1>
		<?php echo "Seja bem vindo" ?>
		<table border="2">
			<thead>
				<th>coluna1</th>
				<th>coluna2</th>
			</thead>
			<tbody>
				<?php
					for ($i = 0; $i < 10; $i++) {
						echo "<tr>";
						echo "<td>coluna${i}.1</td>";
						echo "<td>coluna${i}.2</td>";
						echo "</tr>";
					}
				 ?>
				
			</tbody>
		</table>
	</h1>
</body>
</html>
