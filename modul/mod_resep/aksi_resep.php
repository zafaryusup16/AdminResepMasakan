<?php
session_start();
//error_reporting(0);
error_reporting(0);
if (empty($_SESSION['username']) AND empty($_SESSION['passuser'])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=../../index.php><b>LOGIN</b></a></center>";
}
else{
include "../../config/koneksi.php";
include "../../config/library.php";
include "../../config/fungsi_thumb.php";

$module=$_GET[module];
$act=$_GET[act];

// Hapus Data resep
if ($module=='resep' AND $act=='hapus'){
  $data=mysqli_fetch_array(mysqli_query($koneksi, "SELECT gambar FROM resep WHERE id_resep='$_GET[id]'"));
  if ($data['gambar']!=''){
     mysqli_query($koneksi, "DELETE FROM resep WHERE id_resep='$_GET[id]'");
     unlink("../../gambar_resep/$_GET[namafile]");   
     unlink("../../gambar_resep/small_$GET[namafile]");   
  }
  else{
     mysqli_query($koneksi, "DELETE FROM resep WHERE id_resep='$_GET[id]'");
  }
  header('location:../../media.php?module='.$module);
}

// Input Data resep
elseif ($module=='resep' AND $act=='input'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 

// Apabila ada gambar yang diupload
  if (!empty($lokasi_file)){
    if ($tipe_file != "image/jpg" AND $tipe_file != "image/jpeg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');history.back(-2);</script>";
    }
    else{
    UploadImage($nama_file_unik);

    mysqli_query($koneksi, "INSERT INTO resep(nama_resep,
                                    bahan,
									cara_membuat,
                                    gambar) 
                            VALUES('$_POST[judul]',
                                   '$_POST[bahan]',
								   '$_POST[cara]',
                                   '$nama_file_unik')");
  header('location:../../media.php?module='.$module);
  
	}
  }
  else{
    mysqli_query($koneksi, "INSERT INTO resep(nama_resep,
                                    bahan,
									cara_membuat) 
                            VALUES('$_POST[judul]',
                                   '$_POST[bahan]',
								   '$_POST[cara]')");
  header('location:../../media.php?module='.$module);
  }
}

// Update data resep
elseif ($module=='resep' AND $act=='update'){
  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file; 
  // Apabila gambar tidak diganti
  if (empty($lokasi_file)){
    mysqli_query($koneksi, "UPDATE resep SET nama_resep       = '$_POST[judul]',
                                    bahan   = '$_POST[bahan]',
									cara_membuat   = '$_POST[cara]'
                             WHERE id_resep   = '$_POST[id]'");
  echo "<script>window.alert('Data berhasil di update');window.location='../../media.php?module=$module';</script>";
  }
  else{
    if ($tipe_file != "image/jpeg" AND $tipe_file != "image/jpg"){
    echo "<script>window.alert('Upload Gagal, Pastikan File yang di Upload bertipe *.JPG');histori.back(-1);</script>";
    }
    else{
    UploadImage($nama_file_unik);
    mysqli_query($koneksi, "UPDATE resep SET nama_resep = '$_POST[judul]',
                                   bahan   = '$_POST[bahan]',
									cara_membuat   = '$_POST[cara]',
                                   gambar      = '$nama_file_unik'   
                             WHERE id_resep   = '$_POST[id]'");
   echo "<script>window.alert('Data berhasil di update');window.location='../../media.php?module=$module';</script>";
   }
  }
}
}
?>
