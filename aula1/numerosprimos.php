<?php 
// sabado que vem
// quero um php todos os numeros primos ate o maximo (esse numero sera uma variavel)
// sao so dividios por um um por ele mesmo

system ("command clear");
echo "Numeros primos até o número --> ";
$opt = readline();

for ($n = 2; $n <= $opt; $n++) { 
$primo = true; 
for ($x = 2; $x < $n; $x++) { 
if ($n % $x == 0) { 
$primo = false;
break; 
} 
} 
if ($primo) { 
echo ' ' . $n . "\n"; 
} 
} 
?>
