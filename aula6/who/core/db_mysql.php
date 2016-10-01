<?php
require "settings.php";

// arquivo : core/db_mysql.php

// Conectando a banco de dados - precisa de php5-mysql, php5-pgsl)
// STRING, ARRAY, INT, FLOAT, DOUBLE, RESOURCE

$conn = mysqli_connect (
	$DB_HOSTNAME,
	$DB_USUARIO,
	$DB_SENHA,
	$DB_DATABASE
	) or die ('nao foi possivel conectar so banco de dados');