<?php
$host = "localhost";
$user = "root";
$pass = "root";
$dbname = "enaip";

//create connection
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$connection = mysqli_connect($host, $user, $pass, $dbname);


?>