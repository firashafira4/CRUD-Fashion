<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
// menginput data ke database
mysqli_query($koneksi,"insert into user (nama, username, password, email) values ('$nama', '$username', '$password', '$email')");
 
// mengalihkan halaman kembali ke index.php
header("location:tampil.php");
 
?>