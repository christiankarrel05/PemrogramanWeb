<?php
//manual session
session_start();

//membuat session dengan nama kaliam
$_SESSION['nama'] = "Christian Karrel"

//membuat session dengan no absen kalian
$_SESSION['absen'] = 05;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Latihan sesion</title>
</head>
<body>
    <?php
    echo "Nama saya " , $_SESSION['nama'] . "<br>". "Nomor absen ". $_SESSION['absen'];
    ?>
    </body>
    </html>

