<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$old_id_catatan = $_POST['old_id_catatan'];
$id_catatan = $_POST['id_catatan'];
$author = $_POST['author'];
$tanggal = $_POST['tanggal'];
$judul = $_POST['judul'];
$catatan = $_POST['catatan'];

//update data ke database
$data= mysqli_query($koneksi,"UPDATE tugas1 SET id_catatan = '$id_catatan', author= '$author', tanggal= '$tanggal', judul = '$judul', catatan='$catatan' WHERE id_catatan = '$old_id_catatan' ");

//mengalihkan halaman kembali ke activity.php
header("location:activity.php");

?>