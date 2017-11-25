<?php
$aksi="modul/mod_resep/aksi_resep.php";
switch($_GET[act]){
   //Tampil resep
  default:
    echo"<h1>Data Resep</h1>
	<div class='panel panel-default'>
    <div class='panel-heading'>        
        <form class='form-inline'>
            <div class='form-group'>
           <a class='btn btn-primary' onclick=\"window.location.href='?module=resep&act=tambahresep';\"><span class='glyphicon glyphicon-plus'></span> Tambah</a>
            </div>
        </form>
		</div>
    <table class='table table-bordered table-hover table-striped'>
    <thead>
        <tr>
            <th>No</th>
            <th>Judul Resep</th>
			 <th>Aksi</th>
        </tr>
    </thead>";
		
    $tampil=mysqli_query($koneksi,"SELECT * FROM resep ORDER BY id_resep DESC");
    $no=1;
    while ($r=mysqli_fetch_array($tampil)){
       echo "<tr><td>$no</td>
             <td>$r[nama_resep]</td>
             <td><a class='btn btn-xs btn-warning' href=?module=resep&act=editresep&id=$r[id_resep]><span class='glyphicon glyphicon-edit'></span></a> 
	        <a class='btn btn-xs btn-danger' onclick='return konfirmasi()' href='$aksi?module=resep&act=hapus&id=$r[id_resep]&namafile=$r[gambar]'><span class='glyphicon glyphicon-trash'></span></a>

             </td></tr>";
      $no++;
    }
    echo "</table></div>";
    break;
  
  // Form Tambah Data Resep
  // reiquired untuk menampilkan alert isian harus di isi semua
  case "tambahresep":
  echo "<h1>Tambah Resep</h1>
<div class='row'>
<div class='col-sm-6'>
<form method=POST action='$aksi?module=resep&act=input'  enctype='multipart/form-data'>
<div class='form-group'>
    <label>Judul Resep<span class='text-danger'></span></label>
    <input class='form-control' type='text' name='judul' required='required' value=''/>
</div>
<div class='form-group'>
    <label>Bahan<span class='text-danger'></span></label>
   <textarea class='ckeditor' id='ckeditor' required='required' name='bahan'></textarea>
</div>
<div class='form-group'>
    <label>Cara Membuat<span class='text-danger'></span></label>
   <textarea class='ckeditor' id='ckeditor' required='required' name='cara'></textarea>
</div>
<div class='form-group'>
    <label>Gambar resep<span class='text-danger'></span></label>
    <input class='form-control' type=file name='fupload' value=''/>
</div>
<button class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Simpan</button>
<a class='btn btn-danger' onclick=self.history.back() ><span class='glyphicon glyphicon-arrow-left'></span> Kembali</a>
</form>
</div>
</div>";

break;

// Form Edit resep 
  case "editresep":
  $edit=mysqli_query($koneksi, "SELECT * FROM resep WHERE id_resep='$_GET[id]'");
  $r=mysqli_fetch_array($edit);
  echo "<h1>Edit Data Resep</h1>
<div class='row'>
<div class='col-sm-6'>
<form method=POST action=$aksi?module=resep&act=update  enctype=multipart/form-data>
<input type=hidden name=id value='$r[id_resep]'>
<div class='form-group'>
    <label>Judul Resep<span class='text-danger'></span></label>
    <input class='form-control' type='text' name='judul' required='required' value='$r[nama_resep]'/>
</div>
<div class='form-group'>
    <label>Bahan<span class='text-danger'></span></label>
   <textarea class='ckeditor' id='ckeditor' required='required' name='bahan'>$r[bahan]</textarea>
</div>
<div class='form-group'>
    <label>Cara Membuat<span class='text-danger'></span></label>
   <textarea class='ckeditor' id='ckeditor' required='required' name='cara'>$r[cara_membuat]</textarea>
</div>
<div class='form-group'>
    <label>Gambar resep<span class='text-danger'></span></label>
    <input class='form-control' type=file name='fupload'/>
</div>
<button class='btn btn-primary'><span class='glyphicon glyphicon-save'></span> Simpan</button>
<a class='btn btn-danger' onclick=self.history.back() ><span class='glyphicon glyphicon-arrow-left'></span> Kembali</a>
</form>
</div>
</div>";
  
  break;
}  

  
	?>
 