<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$Id_user    = $_POST['Id_user'];
$username   = $_POST['username'];
$password   = $_POST['password'];
$nama       = $_POST['nama'];
$email      = $_POST['email'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE user SET nama = '$nama', username = '$username', password = '$password', email = '$email' WHERE Id_user = '$Id_user'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //redirect ke halaman tampil.php 
    header("location: tampil.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>