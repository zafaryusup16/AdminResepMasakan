<?php

//$kd="";
include '../config/koneksi.php';

$id = $_POST['id'];

	$query = mysqli_query($koneksi, "SELECT * FROM resep WHERE nama_resep='".$id."'");

	while ($row = mysqli_fetch_array($query)){

		$char ='"';

		$string1 = $row['cara_membuat'];
		$string2 = $row['bahan'];
		
		$json = '{
				"id_resep": "'.str_replace($char,'`',strip_tags($row['id_resep'])).'", 
				"nama_resep": "'.str_replace($char,'`',strip_tags($row['nama_resep'])).'",
				"bahan": "'.str_replace($char,'`', $string1).'",
				"cara_membuat": "'.str_replace($char,'`', $string2).'",
				"gambar": "http://10.0.3.3/masakan/gambar_produk/small_'.$row['gambar'].'"}';
	}

	echo $json;

	mysqli_close($koneksi);
?>