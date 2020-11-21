<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id_catatan = $_POST['id_catatan'];
$author = $_POST['author'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$catatan = $_POST['catatan'];

//menginput data ke database
mysqli_query($koneksi,"INSERT INTO tugas1 VALUE('$id_catatan','$author','$tanggal','$judul','$catatan')");

//mengalihkan halaman kembali ke activity.php
header("location:activity.php");
?>