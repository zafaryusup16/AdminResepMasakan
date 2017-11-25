<?php

include '../config/koneksi.php';
$query = mysqli_query($koneksi,"SELECT * FROM resep ORDER BY id_resep desc");
$json  = '{"resep": [';

// bikin looping dech array yang di fetch
while ($row = mysqli_fetch_array ($query)) {

//tanda kutip dua (") tidak diijinkan oleh string json, 
//maka akan kita replace dengan karakter `
//strip_tag berfungsi untuk menghilangkan tag-tag html pada string  

$char = '"';

$json .= '{"id":"'.$row['id_resep'].'",
"nama_resep":"'.str_replace($char,'`',strip_tags($row['nama_resep'])).'",
"gambar":"http://10.0.3.3/masakan/gambar_produk/'.$row['gambar'].'"},';
}

// buat menghilangkan koma diakhir array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;

?>