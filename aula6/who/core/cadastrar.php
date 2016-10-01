<?php
	require_once "settings.php";
	require_once "db_mysql.php";
	

 	if (! isset($_SESSION)) session_start(); 

 	if (! isset($_SESSION['email'])) {
 		header('Location: '. $URL_PATH . 'login.php');
 	}
 
// pegar as variavies do formulario

$nome = htmlspecialchars($_POST['nome']);
$email = htmlspecialchars($_POST['email']);
$senha = htmlspecialchars($_POST['senha']);

// definir senha segura ;D
$sec_senha = sha1('4linux+' . $senha);

// Criacao do query (insert)
$sql = "INSERT INTO usuarios (nome, email, senha)
		VALUES ('%s','%s','%s')";

$query = sprintf($sql, $nome, $email, $sec_senha);

// executar comando dno banco
$result = mysqli_query($conn, $query);

if ($result) {
	header('Location: ' . $URL_PATH . 'index.php');
}
else{
	echo "Error ao tentar cadastrar: " . $conn-> error;

}
