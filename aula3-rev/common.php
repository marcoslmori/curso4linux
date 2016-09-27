<?php
	// arquivo common.php  - onde ficam todas as funções - boas praticas
function my_filter($lista, $func) {
	$nova_lista = array();
	foreach($lista as $elemento) {
		if ($func($elemento) == true)
				$nova_lista[] = $elemento;
	}
	return $nova_lista;
}


?>