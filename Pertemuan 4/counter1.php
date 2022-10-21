<?php

$connection = mysqli_connect("localhost", "root", "", "db_counter1");

if (!$connection) {
    echo mysqli_connect_error();
}
$squery_counting = mysqli_query($connection, "UPDATE tb_counter SET counter = counter + 1");
$squery_select = mysqli_query($connection, "SELECT counter FROM tb_counter1");
$data = mysqli_fetch_row($squery_select);

echo "Anda adalah pengunjung ke-" . $data[0] . " hari ini";

mysqli_close($connection);