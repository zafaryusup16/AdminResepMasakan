<?php
error_reporting(0);

session_start();

if (empty($_SESSION[username]) AND empty($_SESSION[passuser])){
  echo "<link href='style.css' rel='stylesheet' type='text/css'>
 <center>Untuk mengakses modul, Anda harus login <br>";
  echo "<a href=index.php><b>LOGIN</b></a></center>";
}
else{
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Aplikasi Resep Masakan Khas Sunda"/>
    <meta name="keywords" content="resep masakan"/>
    <meta name="author" content="Muhamad Zafar Yusup"/>
	<link rel="canonical" href="" />

    <title>Aplikasi Resep Masakan  </title>
    <link href="assets/css/united-bootstrap.min.css" rel="stylesheet"/>
    <link href="assets/css/general.css" rel="stylesheet"/>
	<link rel="stylesheet" href="assets/css/datepicker.css">
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>  
	<script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
	<script src="assets/js/bootstrap-datepicker.js"></script>     
 <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#tanggal').datepicker({
                    format: "yyyy-mm-dd"
                });
				
				$('#awal').datepicker({
                    format: "yyyy-mm-dd"
                }); 
				
				$('#akhir').datepicker({
                    format: "yyyy-mm-dd"
                });   
				
            
            });    
    </script>
	<!--- untuk alert dialog hapus -->
		<script type="text/javascript" language="JavaScript">
 function konfirmasi()
 {
 tanya = confirm("Anda Yakin Akan Menghapus Data ?");
 if (tanya == true) return true;
 else return false;
 }</script>

		  </head>
  <body>
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
		  <li><a href="media.php?module=home"><span class="glyphicon glyphicon-home"></span> Home</a></li>  
            <li class="dropdown">
                <a href="?m=kriteria" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-th-large"></span> Kelola <span class="caret"></span></a>
                <ul class="dropdown-menu" role="menu">
				<li><a href="media.php?module=resep"><span class="glyphicon glyphicon-book"></span> Resep Masakan </a></li>
                </ul>
            </li>
		<li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> Setelan <span class="caret"></span></a>
			 <ul class="dropdown-menu" role="menu">
			  <li><a href="media.php?module=password"><span class="glyphicon glyphicon-edit"></span> Ganti Password</a></li>   
     		</ul>
          </ul>          
         <ul class="nav navbar-nav navbar-right">
           <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Keluar </a></li>    
              </ul>
            </li>             
          </ul>
        </div>
    </nav>

    <div class="container">
<?php include "content.php"; ?>
</div>
    <footer class="footer bg-primary">
      <div class="container">
        <p>Copyright &copy; 2017 Muhamad Zafar Yusup </p>
      </div>
    </footer>
</html>
<?php } ?>