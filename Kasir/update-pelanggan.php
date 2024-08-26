<?php

//include koneksi database
include('konek.php');

//get data dari form
$id_pelanggan        = $_POST['id_pelanggan'];
//$pelanggan           = $_POST['pelanggan'];
$Nama_pelanggan     = $_POST['nama_pelanggan'];
$Alamat              = $_POST['alamat'];
$Nomor_Telepon       = $_POST['nomor_telepon'];


//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_pelanggan SET  Nama_Pelanggan = '$Nama_pelanggan', Alamat = '$Alamat', Nomor_Telepon = '$Nomor_Telepon' WHERE id_pelanggan = '$id_pelanggan'";

echo $query;

//kondisi pengecekan apakah data berhasil diupdate atau tidak

if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>