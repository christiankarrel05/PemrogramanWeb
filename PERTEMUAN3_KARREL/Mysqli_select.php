<?php

$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connnection Failed : " . mysqli_connect_error());    
} echo "Connnection Succesfully to Project1 <br>";
$connection_2 = mysqli_select_db($connection, "project2");
if (!$connection) {
    die("Connnection Failed : " . mysqli_connect_error() );
    
}echo "Connection Succesfully to Project2 <br>";

?>