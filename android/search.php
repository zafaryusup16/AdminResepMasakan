<?php 
	include "../config/koneksi.php";
	include_once("kmp.php");

	error_reporting(0);
	
	$KMP = new KMP();
	
	$id = $_GET['id'];
	
	$query = mysqli_query($koneksi, "SELECT * FROM resep WHERE nama_resep like '%%".$id."%%' ORDER BY nama_resep DESC");
	$count = mysqli_num_rows($query);
	$json_kosong = 0;
	
	if($count>0){
	$query = mysqli_query($koneksi,"SELECT * FROM resep WHERE nama_resep like '%%".$id."%%' ORDER BY nama_resep DESC");
	$hasil = $KMP->KMPSearch($id,$query);
	$json  = '{"hasil": [';

	// bikin looping array yang di fetch
	while ($row = mysqli_fetch_array ($query)) {

	$json .= '{"id":"'.$row['id_resep'].'", "nama_resep":"'.str_replace($char,'`',strip_tags($row['nama_resep'])).'", "gambar":"http://10.0.3.3/masakan/gambar_produk/'.$row['gambar'].'"},';
	}

	// buat menghilangkan koma diakhir array
	$json = substr($json,0,strlen($json)-1);

	$json .= ']}';
	}else{
	
	if($json_kosong==0){
		$json = '{"hasil": [{ "id": "", "nama_resep": "Resep Tidak Ditemukan", "gambar": ""}]}';
	}else{
	}
	}

	// print json
	echo $json;
	
?>