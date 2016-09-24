<?php
// pagina1.php
$string = "Ao infinito e alem";

// str to upper (string to upper case)
// createuseradnaddtogrouponldad()
// Ele nao altera o valor da variavel
// para gravar a variavel maiscula strtoupper joga na variavel


echo "<h2>strtoupper(string)</hr></br>";
echo strtoupper($string);
echo "<hr>";

// deixa minuscula

echo "<h2>strtolower(string)</hr></br>";
echo strtolower($string);
echo "<hr>";

// tudo caixa baixa e depois so a primeira letra
// $nome = ucfirst(strlower($nome_form));

echo "<h2>ucfirst(string)</hr></br>";
echo ucfirst($string);
echo "<hr>";

// repete n o input

echo "<h2>str_repeat(input, multiplier)</hr></br>";
echo str_repeat("#", 10);
echo "<hr>";

// faz o replace do search

echo "<h2>str_replace(search, replace, subject)</hr></br>";
echo str_replace('oi', 'tchau', 'oi mundo');
echo "<hr>";

// retira um 3 caractere e mostra a partir do proximo
// a partir do 3, conta 6 e retira os proximos

echo "<h2>substr(string, start)</hr></br>";
echo "substr: " . substr("ABCDEFGHIJ", 3, 6);
echo "<hr>";

//

echo "<h2>strpos(haystack, needle)</hr></br>";
echo strpos("123456789", '7') . "<br />";
echo strpos("123456789", '9') . "<br />";
echo strpos("123456789", 'A') . "<br />";  // null
echo "<hr>";

echo "<h2>strstr(valor, pesquisa)</hr></br>";
echo strstr('gigioxxx@gmail.com.br', '@');
echo "<hr>";

echo "<h2>trim(str)</hr></br>";
$s = '   SEJA BEM VINDO       ';
var_dump($s);
echo var_dump(trim($s));
echo "<hr>";










?>
