<?php
$cookie_name = "user";
$cookie_value = "samudra";
setcookie($cookie_name, $cookie_value, time()+3600, "/");

if(isset($_COOKIE[$cookie_name])){
    echo "cookie " . $cookie_name ." telah diatur!<br/>";
    echo "nilainya adalah " . $_COOKIE[$cookie_name];
} else {
    echo "nama cookie ". $cookie_name."tidak diatur";
}