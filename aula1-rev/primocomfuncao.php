<?php

//arquivo: primos.php
// calcular a qunatidade de numeros primos

/**
* funcao para calcular os valores primos
* ate o ultimo_valor que eh passado pro
* parametro desta funcao
*/ 
// function <nome_func> (param1,param2,...) {
// Codigo
//	}

// para saber o tempo que demora um script
// time php primocomfuncao.php
function primos($ultimo_valor){
	for($i = 2; $i <= $ultimo_valor; $i++) {
		// echo "valor: $i \n";
		$counter = 0;
		// echo "validando: ";
		for ($j = 1; $j <= $i; $j++) {
			// echo "$j";	
			if ($i % $j == 0) {
				$counter += 1;
			}
		}
		// echo "\n";
		// if ($counter == 2)
			//echo "Primo: " . $i . "\n";
	}
}

primos(10000);


