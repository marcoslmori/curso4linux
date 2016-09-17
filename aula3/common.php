<?php
//arquivo: common.php

// novo_array(10, 3, array(3, 6))

// function soma($a,$b){
	

function my_filter($lista, $func){
	$nova_lista = array();
	foreach ($lista as $elemento) {
		if ($func($elemento) == true)
			$nova_lista[] = $elemento;
	}

	return $nova_lista;

}


