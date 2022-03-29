<?php

// includere il connettore mysql
require_once("db_connector.php");



//get results from database
$result = mysqli_query($connection, "SELECT * FROM nomi");
$all_property = array();  //declare an array for saving property

//print_r($result);

//showing property
echo '<table class="data-table">
        <tr class="data-heading">';  //initialize table tag
while ($property = mysqli_fetch_field($result)) {
    echo '<td>' . $property->name . '</td>';  //get field name for header
    $all_property[] = $property->name;  //save those to array
}
echo '</tr>'; //end tr tag

//showing all data
while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    foreach ($all_property as $item) {
        echo '<td>' . $row[$item] . '</td>'; //get items using property value
    }
    echo '</tr>';
}
echo "</table>";





?>
