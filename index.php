<?php

// includere il connettore mysql
require_once("db_connector.php");



//get results from database
$sql = "SELECT id, nome, simpatia FROM nomi";
$result = mysqli_query($connection, $sql);

$connection->close();


while ( $row = $result->fetch_assoc() ) {
    // il mio codice andrà qui
    echo "<b>" . $row["nome"] . "</b> ha l'id numero: " . $row["id"] . "";
    echo " <a href='modifica.php'>modifica</a>";
    echo "<br>";
}






?>
