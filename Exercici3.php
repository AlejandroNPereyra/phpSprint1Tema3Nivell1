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

$wordsArray = array();

array_push($wordsArray, $string1);
array_push($wordsArray, $string2);
array_push($wordsArray, $string3);

function stringCheck ($character, $wordsArray) {

    if (in_array($character, $wordsArray)) {

        return true;

    } else {

        return false;

    }

}

$verify = stringCheck ($character, $wordsArray);

if ($verify === true) {

    echo "The character ".$character.  " exists in the array of words!";

} else {

    echo "The character " .$character. " doesn't exists in the array of words!";

}

?>