<?php
$connection = mysqli_connect("localhost", "root", "", "project1");
if(!$connection) {
    die("Connnection Failed : " . mysqli_connect_error());
}   echo "Connnection Succesfully to Project1 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NAMA_LENGKAP, ALAMAT, TTL, NIP,
JURUSAN) VALUES ('','Christian Karrel', 'Ngegot RT1 Rw 12', '2005-03-05', '20975', 'RPL')");
if(!$query_insert) {
    echo ("Error query " . mysqli_error($connection));
}
mysqli_close($connection);
?>

