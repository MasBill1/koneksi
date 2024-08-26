<?php

//include koneksi database
include('konek.php');

//get data dari form
$id_pelanggan          = $_POST['id_pelanggan'];
$pelanggan             = $_POST['pelanggan'];
$nama_pelanggan        = $_POST['nama_pelanggan'];
$alamat                = $_POST['alamat'];
$nomor_telepon         = $_POST['nomor_telepon'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_pelanggan (id_pelanggan, nama_pelanggan, alamat, nomor_telepon) VALUES ('$id_pelanggan', '$nama_pelanggan', '$alamat', '$nomor_telepon')";

echo $query;
//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
/*
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}
?>