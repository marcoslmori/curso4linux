<html>
	<head>
		<title>Usuarios logados</title>
		<?php require "bootstrap.php" ?>
	</head>
<body>
	<table class="table">
		<thead><th>Nome</th><th>Login</th><th>Acoes</th></thead>
		<tbody>
			<!-- TODO: dinamizar conteudo 
			// for ($i = 0, $n = count($users)); $i < $n; $i++):
			// 	$user = $users[$i];
			//	echo $user['name'];
			-->

			<?php require "array/usuarios.php" ?>

			<?php foreach($users as $u): ?>
			<tr>
				<td><?= $u['name'] ?></td>
				<td><?= $u['login'] ?></td>
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
