<?php

// switch para numeros exatos (rafael)
// ou para melhorar as estruturas do if else
// eh mais lento que o if 


echo "Digite a opção desejada \n";
echo "1 - somar \n";
echo "2 - Subtrair \n";
echo "3 - Multiplicar \n";
echo "4 - Dividir \n";
echo "5 - Sair \n";



echo "digite a Opcao--> ";
$opt = readline();

switch ($opt) {
	case 1: 
		echo "Somar \n";
		echo "digite o primeiro número --> ";
		$num1 = readline();
		echo "digite o segundo numero--> ";
		$num2 = readline();
		$soma = $num1 + $num2;
		echo "Resultado ";
		echo $soma . "\n";
		
		break;
		
	case 2:
		echo "Subtrair \n";
		break;

	case 3:
		echo "multiplicar \n";
		break;

	case 4:
		echo "Dividir \n";
		break;

	case 5:
		echo "Sair \n";
		break;	
	default: 
		echo "Opcao nao valida\n";
		break;
		// nao precisa colocar o break
}

