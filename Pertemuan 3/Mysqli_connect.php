<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connnection Failed : " . mysqli_connect_error());    
}echo "Connnection Succesfully";
mysqli_close($connection);
?>