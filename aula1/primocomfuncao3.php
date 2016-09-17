para casa - melhorar a performas

<?php

//arquivo: primoscomfuncao2.php
// otimizar o codigo com funcoes
// nao melhorar as performas

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

function e_primo($numero){
	if($numero == 2) return true;
	// pode ser assim if ($i % 2 == 0 && $numero != 2)
	if ($numero % 2 == 0)
			return false;
		$counter = 0;
		for ($j = 1; $j <= $numero; $j++) {
			if ($numero % $j == 0) {
				$counter += 1;
		}

		if ($counter > 2) return false;
	
	}
	return $counter == 2;
}

function primos($ultimo_valor){
	for($i = 2; $i <= $ultimo_valor; $i++) {
		if (e_primo($i)) {
			echo "Primo: ". $i;
		}
	}
}

primos(10000);


