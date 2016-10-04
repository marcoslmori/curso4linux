<?php 
// pagina1.php

$string = "ao infinito e alem";

// string strtoupper ( string $string )
// ele nao altera o valor da variável

echo "<h2>strtoupper(string)</h2> </br>";
echo strtoupper($string);
echo "<hr>";

// para deixar minuscula
echo "<h2>strtlower(string)</h2></br>";
echo strtolower($string);
echo "<hr>";

// deixa tudo minusculo, com a prim>eira palavra da string em caixa alta
echo "<h2>ucfirst(str)</h2></br>";
echo ucfirst($string);
echo "<hr>";

// repete o número do imput
echo "<h2>str_repeat(input, multiplier)</h2></br>";
echo str_repeat("#", 15);
echo "<hr>";

// faz replace do search
echo "<h2>str_replace(search, replace, subject)</h2></br>";
echo str_replace('oi', 'tchau', 'oi mundo');
echo "<hr>";

// retira um 3 caractere e mostra a partir do proximo
// a partir do conta 6 e retira os proximos

echo "<h2>substr(string, start)</h2></br>";
echo "substr: " . substr("ABCDEFGHIJ", 3,6);
echo "<hr>";








?>