<?php

$a = 10;
$b = 3;

echo $a % $b . "\n";

// nao passa de 1000 
// pode utilizar para gravar junto com a senha o random

// nunca vai gerar um numero maior do que 100
$random = rand();
$resultado = $random % 100;

echo "($random) => $resultado" .  "\n";

// par e impar

$random = rand();
$resultado = $random % 2;

echo "($random) => $resultado" .  "\n";

