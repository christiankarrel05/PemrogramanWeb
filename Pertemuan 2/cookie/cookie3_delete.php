<?php
setcookie("user", "", time() - 3600, "/");

if(isset($_COOKIE['user'])){
    echo "cookie " . 'user' ." telah diatur!<br/>";
    echo "nilainya adalah " . $_COOKIE['user'];
} else {
    echo "nama cookie ". 'user'." tidak diatur";
}\