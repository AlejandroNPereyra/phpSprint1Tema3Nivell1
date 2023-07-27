<?php

/* - Exercici 3
Crea una funció que rebi com a paràmetres un array de paraules i un caràcter. 
La funció ens retorna true si totes les paraules de l’array tenen el caràcter passat com a segon paràmetre.

Per exemple:
Si tenim [“hola”, “Php”, “Html”] retornarà true si preguntem per “h” però fals si preguntem per “l”.*/ 

$string1 = $_POST['string1'];
$string2 = $_POST['string2'];
$string3 = $_POST['string3'];
$character = $_POST['character'];

/*$wordsArray = array();

array_push($wordsArray, $string1);
array_push($wordsArray, $string2);
array_push($wordsArray, $string3);

var_dump($wordsArray);*/

function stringCheck ($string1, $string2, $string3, $character) {

    if (strpos($string1, $character) !== false &&
    strpos($string2, $character) !== false &&
    strpos($string3, $character) !== false) {

        return true;

    } else {

        return false;

    }

}

var_dump(stringCheck($string1, $string2, $string3, $character));

/*foreach ($wordsArray as $strings) {

    if (strpos($strings, $character) !== false) {

        echo "The character '$character' exists in the string '$strings'.<br>";

    } else {

        echo "The character '$character' doesn't exist in the string '$strings'.<br>";
    }

}*/

?>