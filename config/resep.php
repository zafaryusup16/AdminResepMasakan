<?php

include './config/koneksi.php';
$query = mysql_query("SELECT * FROM produk ORDER BY id_produk desc");
$json  = '{"produk": [';

// bikin looping dech array yang di fetch
while ($row = mysql_fetch_array ($query)) {

//tanda kutip dua (") tidak diijinkan oleh string json, 
//maka akan kita replace dengan karakter `
//strip_tag berfungsi untuk menghilangkan tag-tag html pada string  

$char = '"';

$json .= '{"id":"'.$row['id_produk'].'",
"nama_produk":"'.str_replace($char,'`',strip_tags($row['nama_produk'])).'",
"gambar":"http://10.0.2.2/admin-resep/gambar_produk/'.$row['gambar'].'"},';
}

// buat menghilangkan koma diakhir array
$json = substr($json,0,strlen($json)-1);

$json .= ']}';

// print json
echo $json;

?>