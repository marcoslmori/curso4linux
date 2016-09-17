<?php

// so serve para chamar arquivos nao tem parametros
// erro warning - nao para de executar
// talvez para html
include "example_0.php";
echo "\t========================+\n\n\n";
echo "aqui 1";
// erro fatal - para de executar
// require utiliza arquivos que vc depende
// o professor sempre usa o require
require "example_0.php"; 
print ("aqui 2");
