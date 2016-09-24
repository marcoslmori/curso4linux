<?php
//prepared statement

$s = "INSERT (nome, senha) VALUES (%s,%s)";
$query = sprintf ($s, 'Marcos', 'teste');

// mysql_query($query);
echo $query;

