<?php

// arquivo : testes/teste_banco.php

require "../core/db_mysql.php";

$query = mysqli_query($conn, 'SELECT * FROM usuarios');


// monta um array associativo

$resultado = mysqli_fetch_assoc($query);

// var_dump($resultado);		

echo "Bem vindo usuario " . $resultado['nome'];

