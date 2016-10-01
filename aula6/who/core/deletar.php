<?php
	require_once "settings.php";
	require_once "db_mysql.php";
	

 	if (! isset($_SESSION)) session_start(); 

 	if (! isset($_SESSION['email'])) {
 		header('Location: '. $URL_PATH . 'login.php');
 	}
 
// recuperar os dados do usuaio
 $id = htmlspecialchars($_GET['id']);

// construir a consulta
 $sql = "DELETE FROM usuarios where id='%d';";

// moldar a query do banco com os valores
 $query = sprintf($sql, $id);

// validacao da consulta

 if (mysqli_query($conn, $query)) {
 	header('Location: ' . $URL_PATH . 'index.php' );
 }
 else {
 	echo "erro ao tentar remover usurio: " . $conn-> error;
 }

