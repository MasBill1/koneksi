<?php

include('konek.php');

//get id
$id = $_GET['id'];

// Replace 'id_pelanggan' with the correct column name
$query = "DELETE FROM tbl_pelanggan WHERE id_pelanggan = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>
