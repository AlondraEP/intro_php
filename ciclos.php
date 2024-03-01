<?php 
include ('funtion.php');
include_once('funtion.php');
require('funtion.php');
require_once('funtion.php');
echo "Ciclo for: \n";
for ($i=0; $i < 10; $i++) { 
   echo "valor de i: $i";
}

echo "Ciclo while: \n";
$a=0;
while ($a <= 10) {
    echo "Valor de a: $a" ;
    $a++;
}
?>