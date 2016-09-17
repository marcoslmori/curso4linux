<?php

/*
operadores logicos 
*/


$n1 = 7; 
$n2 = 10; 
$n3 = 19; 
$n4 = 20;

$a = $n1 > 5 && $n2 > 5;
$b = $n1 > 5 || $n2 < 5;
$c = $n3 < 15 and $n4 != 5;
$d = $n3 < 15 or $n4 != 5;

// ! eh o not

var_dump($a); //true
var_dump($b); //true
var_dump($c); //false
var_dump($d); //false
