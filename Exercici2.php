<?php

/*- Exercici 2

$X = array (10, 20, 30, 40, 50,60);

Mostrar per pantalla la mida de l’array anterior i posteriorment elimina un element de l’array anterior. 
Després d'eliminar l'element, les claus senceres han de ser normalitzades(s’han de reorganitzar els seus índexs).
Mostra per última vegada la mida de l’array. */

$X = array (10, 20, 30, 40, 50, 60);

echo "The total measure of the array X is: ".count($X);
echo '<br>';

echo "We're deleting the last position of the array X now!";
array_splice($X, 5, 1);
echo '<br>';

echo "Now it's total measure is :",count($X);
echo '<br>';

print_r($X);

?>