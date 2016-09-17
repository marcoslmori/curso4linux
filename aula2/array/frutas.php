<?php
//arrays chamada pelo arquivos carros.php
// arquivo:frutas.php

function _merge($chaves,$valores){
	$resultado = array();
      for ($i = 0, $n = count($chaves); $i < $n; $i++) {
			$chave = $chaves[$i];			
			$valor = $valores{$i};

	$resultado[$chave] = $valor;

}	
	return $resultado;

}

$c = array('Rafael', 'Lucas', 'Joana', 'Viviane');
$v = array('Maca', 'banana', 'pera', 'morango');

$resultado = _merge ($c, $v);
