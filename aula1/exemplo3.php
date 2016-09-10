<?php

// switch para numeros exatos (rafael)
// ou para melhorar as estruturas do if else
// eh mais lento que o if 

echo "Opcao: ";
$opt = readline();

switch ($opt) {
	case 1:
		echo "Cadastrar usuarios... \n";
		break;
		
	case 2:
		echo "Listar usuarios...";
		break;

	case 3:
		echo "deletar usuarios...";
		break;
	default: 
		echo "Opcao nao valida\n";
		// nao precisa colocar o break
}

