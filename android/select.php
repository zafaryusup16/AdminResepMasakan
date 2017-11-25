<?php
	include '../config/koneksi.php';
	sleep(2);
	
	$offset = isset($_GET['offset']) && $_GET['offset'] != '' ? $_GET['offset'] : 0;
	
	$all = mysqli_query($koneksi, "SELECT * FROM resep ORDER BY id_resep DESC");
	$count_all = mysqli_num_rows($all);
	
	$query = mysqli_query($koneksi, "SELECT * FROM resep ORDER BY id_resep DESC LIMIT $offset,10");
	
	$count = mysqli_num_rows($query);
	$json_kosong = 0;
	
	if($count<10){
		if($count==0){
			$json_kosong = 1;
		}else{
			$query = mysqli_query($koneksi, "SELECT * FROM resep ORDER BY id_resep DESC LIMIT $offset,$count");
			$count = mysqli_num_rows($query);
			if(empty($count)){
				$query = mysqli_query($koneksi, "SELECT * FROM resep ORDER BY id_resep DESC LIMIT 0,10");
				$num = 0;
			}else{
				$num = $offset;
			}
		}
	} else{
		$num = $offset;
	}
	
	$json = '[';
	
	while ($row = mysqli_fetch_array($query)){
		$num++;
		$char ='"';
		$json .= '{
			"no": '.$num.',
			"id": "'.str_replace($char,'`',strip_tags($row['id_resep'])).'", 
			"nama": "'.str_replace($char,'`',strip_tags($row['nama_resep'])).'",
			"gambar": "http://10.0.3.3/masakan/gambar_produk/small_'.str_replace($char,'`',strip_tags($row['gambar'])).'"},';
	}
	
	$json = substr($json,0,strlen($json)-1);
	
	
	if($json_kosong==1){
		$json = '[{ "no": "", "id": "", "nama": "", "gambar": ""}]';
	}else{
		$json .= ']';
	}
	echo $json;
	
	mysqli_close($koneksi);
?>