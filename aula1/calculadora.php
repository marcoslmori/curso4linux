<?php

// switch para numeros exatos (rafael)
// ou para melhorar as estruturas do if else
// eh mais lento que o if 


$opt = 1;

while($opt <= 4) {

system ("command clear");
echo "\n+============== Calculadora  =============+\n";
echo "Digite a opção desejada \n";
echo "1 - Somar \n";
echo "2 - Subtrair \n";
echo "3 - Multiplicar \n";
echo "4 - Dividir \n";
echo "5 - Sair \n";

echo "digite a Opcao--> ";
$opt = readline();

switch ($opt) {
	case 1: 

        system("command  clear");
echo "\n+==================================+\n";
		echo "Voce está na operação de somar \n";
		echo "digite o primeiro número --> ";
		$num1 = readline();
		echo "digite o segundo numero--> ";
		$num2 = readline();
		$soma = $num1 + $num2;
		echo "Resultado ";
		echo $soma . "\n\n";	
		echo "digite a [ENTER] para continuar --> ";
		$opt2 = readline();
		break;
		
	case 2:

		system("command  clear");
	echo "\n+==================================+\n";
        echo "Voce está na operação de subtrair \n";
        echo "digite o primeiro número --> ";
        $num1 = readline();
        echo "digite o segundo numero--> ";
        $num2 = readline();
        $soma = $num1 - $num2;
        echo "Resultado ";
        echo $soma . "\n\n";
		echo "digite a [ENTER] para continuar --> ";
		$opt2 = readline();
        break;

	case 3:
	
	    system("command  clear");
	echo "\n+==================================+\n";
		echo "Voce está na operação de multiplicar \n";
		echo "digite o primeiro número --> ";
		$num1 = readline();
		echo "digite o segundo numero--> ";
		$num2 = readline();
		$soma = $num1 * $num2;
		echo "Resultado ";
		echo $soma . "\n\n";	
		echo "digite a [ENTER] para continuar --> ";
		$opt2 = readline();
		break;
	
	case 4:
		
		system("command  clear");
	echo "\n+==================================+\n";
		echo "Voce está na operação de dividir \n";
		echo "digite o primeiro número --> ";
		$num1 = readline();
		echo "digite o segundo numero--> ";
		$num2 = readline();
		$soma = $num1 / $num2;
		echo "Resultado ";
		echo $soma . "\n\n";	
		echo "digite a [ENTER] para continuar --> ";
		$opt2 = readline();
		break;

	case 5:
		echo "Sair \n";
		break;	
	default: 
		echo "Opcao nao valida\n";
		break;
		// nao precisa colocar o break
}

}

