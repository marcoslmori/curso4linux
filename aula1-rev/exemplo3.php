<?php

// switch para numeros exatos (rafael)
// ou para melhorar as estruturas do if else
// eh mais lento que o if 
// REVISAO DO SWITCH

	system ("command clear");
	echo "ESCOLHA UM NÚMERO ALEATORIO 1 a 5 ==> ";
    $opt = readline();


    switch($opt) {
    	case 1 :
    		echo "voce eh um babaca \n";
    		break;
    	case 2 :
    		echo "voce eh inteligente \n";
    		break;
    	case 3 :
    		echo "Voce eh burro \n";
    		break;
    	case 4 :
    		echo  "voce eh lindo\n";
    		break;
    	case 5 :
    		echo "voce eh demais\n";
    		break;

    }

