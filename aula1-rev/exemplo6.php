<?php

//for (init,<expression>,<operador>){}

// FOR de 0 ate 20
for ($i = 0; $i <= 20; $i++) {
	echo "Contador: $i\n";
}
echo "\n+============== FOR-1 =============+\n";


// FOR de 20 ate 0
for ($i = 20; $i >= 0; --$i) {
	echo "Contador: $i\n";
}
echo "\n+============== FOR-2 =============+\n";

// FOR para todos os elementos de um array

$times = array("Corinthians", "Santos", "Palmeiras", "Sao Paulo");

// podia usar a sintaxe abaixo, mas para nao usar elementos fixos, foi utilizado a variavel
//for ($i = 0; $i <=3; $i++) {

for ($i = 0; $i < count($times); $i++) {

// uma forma de mostrar echo "" . ($i+1) . " ! " . $times[$i] . "\n";

	//sprint(string, param1,param2...) %d significa digito %s string
	$string = sprintf("%d | %s", ($i+1), $times[$i]);

echo "$string\n";

}

echo "\n+============== FOR-4 =============+\n";
// for para encontrar todos os caracteres e printar um em cada linha
// a variavel eh tratado como um array
$nome = "Marcos"; 
for ($i = 0; $i < strlen($nome); $i++) {

echo $nome[$i] . "\n";

}

echo "\n+============== FOR-5 =============+\n";

// para deixar a funcao de cima mais rapido

$nome = "Marcos"; 
// for (variavel declaracao; expressao; operador) {}
//for ($i = 0, $n = strlen($nome); $i < $n; $i++) {

for ($i = 0, $n = strlen($nome); $i < $n; $i++) {

echo $nome[$i] . "\n";

}

echo "\n+============== FOR-5 mais rapido =============+\n";


echo "\n+============== FOR-5 =============+\n";
// continue
// faz o next

for ($i = 0; $i < 20; $i++) {
	if ($i == 3) {
		continue;
	}
echo "contador: $i\n";

}

echo "\n+============== FOR-5  =============+\n";
// break
// quebra a execucao do loop
for ($i = 0; $i < 20; $i++) {
	if ($i == 3) {
		break;
	}

echo "contador: $i\n";

}

echo "\n+============== FOR-5 numero dos pares  =============+\n";
// mostrando os numeros impares 


for ($i = 0; $i <= 100; $i++) {
	if (($i % 2) == 0) {
		continue;
	}

echo "contador: $i\n";

}

echo "\n+============== FOR-5  =============+\n";
// sabado que vem 
// quero um php todos os numeros primos ate o maximo (esse numero sera uma variavel)
// sao so dividios por um um por ele mesmo


