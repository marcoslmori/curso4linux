<?php
	require_once "core/settings.php";
	require_once "core/db_mysql.php";


 	if (! isset($_SESSION)) session_start(); 

 	if (! isset($_SESSION['email'])) {
 		header('Location: '. $URL_PATH . 'login.php');
 	}


// recuperar os dados do usuaio
 $id = htmlspecialchars($_GET['id']);

// construir a consulta
$sql = "SELECT * FROM usuarios where id='%d';";

// moldar a query do banco com os valores
$query = sprintf($sql, $id);

$mysqli_query = mysqli_query($conn, $query);

$row = mysqli_fetch_assoc($mysqli_query);

var_dump($row);
 
// validacao da consulta

// if (mysqli_query($conn, $query)) {
// header('Location: ' . $URL_PATH . 'index.php' );
// }
// else {
// 	echo "erro ao tentar remover usurio: " . $conn-> error;
// }


?>

<html>
 <head>
 		<?php require_once "bootstrap.php";?>

 		<title>WHO | Edicao de usuario </title>
 		
 </head>

 <body>
 			<div class="panel panel-primary" style="width: 60%; margin: 0 auto; padding:20px;">

 				<div class="panel-heading">
 					editar  
 				</div>

 				<div class"panel-body">		
							<form method="post" action="<?= $URL_PATH ?>core/editar.php?id=<?= $row['id']?> "
							  <div class="form-group">
							    <label for="exampleInputEmail1">Nome</label>
							    <input type="text" name="nome" value=<?= $row['nome'] ?> class="form-control" id="exampleInputEmail1" placeholder="Email">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputEmail1">Email</label>
							    <input type="email" name="email" value=<?= $row['email'] ?> class="form-control" id="exampleInputEmail1" placeholder="Email">
							  </div>
							  <div class="form-group">
							    <label for="exampleInputPassword1">Senha</label>
							    <input type="password" name="senha" class="form-control" value=<?= $row['senha'] ?> id="exampleInputPassword1" placeholder="Password">
							  </div>
							  
							  <button type="submit" class="btn btn-primary">Submit</button>
							</form>
 				</div>
 			</div>

 </body>
 <html>

