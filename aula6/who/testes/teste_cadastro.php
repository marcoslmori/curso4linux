<?php
	require "../core/db_mysql.php";
	
	// cadastro quando a requisicao for POST
	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	

	//recuperar os dados do formulario / funcao com o sql injection
	$nome = htmlspecialchars($_POST['nome']);
	$email = htmlspecialchars($_POST['email']);
	$senha = htmlspecialchars($_POST['senha']);


	// debugar se os dados estao vindo corretamente
	// echo "Nome: " . $nome . "<br />";
	// echo "Email: " . $email . "<br />";
	// echo "Senha: " . $senha . "<br />";

	//mostrar a query do banco de dados
	// preparement Statement | prepare Statment

	$string = "INSERT INTO usuarios (nome, email, senha)
					VALUES ('%s', '%s', '%s')";

	$sql = sprintf($string, $nome, $email, $senha);

	// debugando os dados echo "QUERY: " . $sql . "<br/ >";

	$result = mysqli_query($conn, $sql);

if ($result) {

echo "Cadastro realizado com sucesso";
}
else {
	echo "Nao foi possivel realizar seu cadastro: " .$conn->error;
	}
	// debugar saida
	//var_dump($result);

}

 ?>
<html>
	<head>
			<title>
				teste de cadastro
			</title>
	</head>	

	<body>
			<form method="POST" action="teste_cadastro.php">
					<input type="text" name="nome" placeholder="Nome">
					<br />
					<input type="email" name="email" placeholder="Email">
					<br />
					<input type="password" name="senha" placeholder="Senha">
					<br/>					
					<input type="submit" value="Cadastrar">
					<br />
			</form>
	</body>

</html>
