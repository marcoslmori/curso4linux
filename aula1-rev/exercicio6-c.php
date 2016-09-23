<?php
// for para todos elementos de um array
$times = array ("Corinthians", "Santos", "Palmeiras", "São Paulo");

for ($i = 0; $i < count($times); $i++) {
	$string = sprintf("%d | %s", ($i+1), $times[$i]);
echo "$string\n"; 
}
?> 
