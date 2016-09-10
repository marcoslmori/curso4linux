<?php

/*
operadores relacionais 
*/


$a = "7" == 7; //igual
$b = 7 != 7; //(diferente) pode usar tambem 7 <> 7
$c = "7" === 7; // identico 
$d = 7 !== 7; // nao identico
$e = 7 > 8; //maior
$f = 7 < 8; //menor
$g = 7 <= 7; // menor ou igual 
$h = 7 >= 8; // maior ou igual 



var_dump($a); //true
var_dump($b); //false
var_dump($c); //false
var_dump($d); //false
var_dump($e); //false
var_dump($f); //true
var_dump($g); //true
var_dump($h); //false