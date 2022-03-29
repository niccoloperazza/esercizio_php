<?php

// includere il connettore mysql
require_once("db_connector.php");



//get results from database
$sql = "SELECT id, nome, simpatia FROM nomi";
$result = mysqli_query($connection, $sql);


while ( $row = $result->fetch_assoc() ) {
    // il mio codice andrà qui
    echo "<b>" . $row["nome"] . "</b> ha l'id numero: " . $row["id"] . "<br>";
}


$connection->close();




?>
