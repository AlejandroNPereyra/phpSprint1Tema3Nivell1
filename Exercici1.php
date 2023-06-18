<?php

/*- Exercici 1
Crea un array, afegeix-li 5 nombres enters i després mostrals per pantalla d’un en un.*/

$names = ['Manolo', 'Alex', 'Sam', 'Kostas', 'Maybuch'];

echo "These are the names contained in my Array:";
echo '<br>';
print_r($names);
echo '<br>';

echo '<br>';
echo "Now i'll try looping the Array!";
echo '<br>';

foreach ($names as $name) {
    echo $name . "<br>";
}

?>