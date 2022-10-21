<?php

include_once("config.php");

$id = $_GET['id'];

$result = mysqli_query($conn_DB, "DELETE FROM customers WHERE id=$id");
if ($result){
    $message = "Berhasil menghapus customer";
} else if {
    $message = "Gagal menghapus customer";
}
header("location:index.php?message=".$message);
?>