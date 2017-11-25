<?php
include "config/koneksi.php";
include "config/library.php";
include "config/fungsi_indotgl.php";
include "config/fungsi_combobox.php";
include "class_paging.php";

// Bagian Home
if ($_GET['module']=='home'){
  if ($_SESSION['leveluser']=='admin'){
	
?>

<h1 class="entry-title">Aplikasi Resep Masakan Khas Sunda </h1>
<div class="entry-body">
<p>Selamat datang di halaman dashboard Aplikasi Resep Masakan Khas Sunda menggunakan Algoritma Knuth Morris Pratt , disini Anda bisa mengelola data untuk keperluan server dan client untuk aplikasi berbasis Android.</p>

  </div>		

<?php
	}
}
// Bagian Ganti Password
elseif ($_GET[module]=='password'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_password/password.php";
  }
}

// Bagian Master Buku
elseif ($_GET[module]=='resep'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_resep/resep.php";
  }
}

// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
