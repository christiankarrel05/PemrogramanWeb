<?php

$connection = mysqli_connect("localhost", "root", "", "sekolahkarrel");
if(!$connection){
    echo mysqli_connect_error();
}