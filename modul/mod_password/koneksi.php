<?php
// panggil fungsi validasi xss dan injection

// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "dbresep";

// Koneksi dan memilih database di server
$koneksi = mysqli_connect($server,$username,$password) or die("Koneksi gagal");
mysqli_select_db($koneksi, $database) or die("Database tidak bisa dibuka");

?>
