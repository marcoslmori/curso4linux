<?php
$t = serialize(array('Marcos' => 'Mori'));

echo $t . "\n";

var_dump(unserialize($t));

