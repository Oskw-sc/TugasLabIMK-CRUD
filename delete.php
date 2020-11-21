<?php
//koneksi database
include 'koneksi.php';

// menangkap data id yang di kirim dari url
$id_catatan = $_GET['id_catatan'];


// menghapus data dari database
$data = mysqli_query($koneksi, "DELETE FROM tugas1 WHERE id_catatan=$id_catatan");

// mengalihkan halaman kembali ke activity.php
header("location:activity.php");

?>