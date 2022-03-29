<?php

// includere il connettore mysql
require_once("db_connector.php");

$nome = "Mario"; //string
$eta = 24; //numerico integer
$simpatia = true; //boolean

$persona = array("Niccolo", 24, true);

$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

echo $age["Joe"];


if ( $persona[1] > 25 ) {
    // Saluto con Buongiorno
    echo "Buongiorno " . $persona[0] . "!"; // Ciao Nome!
} else {

    if ( $persona[2] == true ) {
        // Saluto con Buongiorno
        echo "Ciao " . $persona[0] . "!"; // Ciao Nome!
    } else {
        // saluto con Ciao
        echo "Buongiorno " . $persona[0] . "!"; // Ciao Nome!
    }
}



?>
