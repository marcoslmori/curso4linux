<?php

// arquivo : testes/teste_usuarios.php

require "../core/db_mysql.php";

$query = mysqli_query($conn, 'SELECT * FROM usuarios');

while (($row = mysqli_fetch_assoc($query))) {
	var_dump($row);
	echo "<hr>";

}

//var_dump($resultado);