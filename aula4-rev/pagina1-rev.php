<?php 
// pagina1.php

$string = "ao infinito e alem";

// string strtoupper ( string $string )
// ele nao altera o valor da variável

echo "<h2>strtoupper(string)</hr> </br>";
echo strtoupper($string);
echo "<hr>";

// para deixar minuscula
echo "<h2>strtlower(string)</hr></br>";
echo strtolower($string);
echo "<hr>";

// deixa tudo minusculo, com a primeira palavra da string em caixa alta
echo "<h2>ucfirst(str)</hr></br>";
echo ucfirst($string);
echo "<hr>";

// repete o número do imput
echo "<h2>str_repeat(input, multiplier)</hr></br>";
echo str_repeat("#", 15);
echo "<hr>";

?>