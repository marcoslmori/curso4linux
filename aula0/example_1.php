<?php
// TODO: colocar a conexao do banco AQUI

$string ="String";
$inteiro = 10;
$float = 10.2;
//$array = [["Azul", "Amarelo", "Rosa"], 5, 15];
//$array = ["Azul", "Amarelo", "Rosa", 5, 15];
$sub_array = ["Azul", "Amarelo", "Rosa"];
$array = [$sub_array, 5, 15.4];

$array2 = [["Azul", "Amarelo","Rosa"], 5, 15];

// otima funcao para debugar
var_dump($string);
// var_dump($array);
var_dump($array2);
// mostrar a  posicao 5
// nao consegui colocar um enter aqui -- testar
echo $array[1] ;