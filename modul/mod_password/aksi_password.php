<?php
session_start();

if (empty($_SESSION['namauser']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
	include "../../config/koneksi.php";

	$username=$_SESSION['namauser'];

	$password_lama=md5($_POST['password_lama']);
	$password_baru=md5($_POST['password_baru']);

	$query=mysqli_query($koneksi,"SELECT * FROM admins WHERE password='$password_lama'");
	if($cek=mysqli_num_rows($query)){
		$update=mysqli_query($koneksi,"UPDATE admins SET password='$password_baru' WHERE username='$username'");
		if($update){
			echo "<script>alert('Password berhasil diubah');window.location='../../media.php?module=home';</script>";
		}
	}else{
		echo "<script>alert('Periksa kembali password lama anda');history.back(-1);</script>";
	}
}
?>