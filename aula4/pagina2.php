<?php

$keys = array('primeiro', 'segundo', 'terceiro');
$values = array('Hamilton', 'Rubinho','Alonso');

// camel case
echo "array_combine(keys, array values)";
$new_array = array_combine($keys, $values);
var_dump($new_array);
echo "<hr>";

//quantos valores tem no array
// a quantidade de elementos do array - se tiver um repetido ele nao considera mais um

echo "array_combine(keys, array values)";
$new_array = array_combine($keys, $values);
var_dump($new_array);
echo "<hr>";

// diferenca entre dois array
echo "array_diff(array1, array2)";
$array1 = array('um', 'tres', 'quatro', 'sete');
$array2 = array('um', 'tres', 'cinco', 'seis');
$new_array = array_diff($array1, $array2);
var_dump($new_array);
echo "<hr>";

// indice iguais o valor 2
echo "array_merge(array1, array2)";
// array associativos
$array1 = array("cor" => "azul", 1, 2, 6, 8);
$array2 = array("cor" => "rosa", 1, "a", "2", "6", 8, 10, 12);
$new_array = array_merge($array1, $array2);
var_dump($new_array);
echo "<hr>";


echo "array_sum(array)";
$resultados = array(1, 2, 3, 4, 5, 6, 7);
$new_array = array_sum($resultados);
var_dump($new_array);
echo "<hr>";

// em casa fazer os exercicios da apostila






