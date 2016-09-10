<?php
// lacos de repeticao
echo "+==================  CHERNOBIL =====================+\n\n";

$num = 0;

while (($num += 10) <= 100) {
	// fica cada uma em linha
	echo "\rApagando os arquivos do seu computador: $num\n";

	// trava o sistema por 1 segundo (1)
	sleep(1); // for (int 1 = 0; 1 < (n) * 1.99999; i++) {}
	// so funciona via terminal

}

echo "\n;D";