<html>
<head>
	<title>Usuários Legados</title>
	<?php require "bootstrap.php" ?>
</head>
<body>
<table class "table">
	<thead><th>nome</th> <th>Login</th><th>Ações</th></thead>
		<tbody>
				<?php require "array/usuarios.php" ?>
				<?php 
					foreach ($user as $u): 
				 ?>
				<tr>
					<td><?=$u['name'] ?></td>
					<td><?=$u['login'] ?></td>
					<td>
						<button class="btn btn-primary btn-sm">editar</button>
						<button class="btn btn-primary btn-sm">excluir</button>
					</td>
				</tr>
				<?php endforeach ?>
		</tbody>
</table>


</body>
</html>