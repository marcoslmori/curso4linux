<?php
// revisao do while
// exercicio pego na internet

echo "=================exercicio 1 ======================= <br />";

$contador = 0;

while($contador <= 10) {
	echo $contador;
	if ($contador == 5) {
		echo "breakCinco";
	}
	$contador++;
}
echo "<br />";
echo $contador; 
echo "<br /";

echo "=================exercicio 1 do professor ======================= <br />";

$num = 0;

while (($num += 10) <= 100){
	echo "<br /> Apagando os arquivos do seu computador: $num <br />";
	sleep(1);
}


echo "=================exercicio 2 do professor ======================= <br />";

$expression = false;

while ($expression) {
	echo "laço do false";
}
	do {
		echo "[do while]";
	}

while ($expression);







?>
