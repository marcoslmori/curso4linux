<?php
	// exercicio do manual php net
	// tentando entender a função implode
	// Retorna uma string contendo os elementos da matriz na mesma ordem com uma ligaçao entre cada elemento
	// string implode(string $glue, array $pieces)

$array = array('lastname', 'email', 'phone');
$comma_separated = implode (",", $array);
print $comma_separated;

echo " <br /> ###################################### <br />" ;

$a1 = array("1", "2", "3");
$a2 = array("a");
$a3 = array();

echo "a1 is: '".implode("','",$a1)."'<br>'";
echo "a2 is: '".implode("','",$a2)."'<br>'";
echo "a3 is: '".implode("','",$a3)."'<br>'";


?> 