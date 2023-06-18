<?php

/* - Exercici 4

Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

nom
edat
email
menjar favorit */

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$food = $_POST['food'];

$associativeArray = array();

$associativeArray["Name"] = $name;
$associativeArray["Age"] = $age;
$associativeArray["e-mail"] =$email;
$associativeArray["Favourite meal"] =$food;

var_dump($associativeArray);

?>