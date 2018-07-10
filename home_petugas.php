<?php
session_start ();
if(!isset($_SESSION['user'])){
	die('anda belum login <a href="javascript:history.back()">kembali</a>');
}
if($_SESSION['user']!="user"){
	die('anda bukan petugas <a href="javascript:history.back()">kembali</a>');
} 
?>
<!doctype html>
<html>
<head>
<title>Prosedur </title>
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
body{
	height:300px;
}
.judul{
	margin-left:500px;
	margin-top:20px;
	font-size:19px;
	
}
.langkah{
	margin-left:400px;
	margin-top:50px;
	font-size:18px;
}
.daftar{
	font-size:22px;
}
</style>
</head>
<body>
<div class="menu-wrap">
<div class="admin">
<a href="login_admin.php "><img src="img/admin.png" width="40px" ></a>
</div>

 <ul>
			<li class="active"><a href="index.php" accesskey="1" title="">Home</a></li>
			<li><a href="admin_psn.php" accesskey="3" title="">Pasien</a></li>
			<li><a href="dokter/admin_dkt.php" accesskey="3" title="">Dokter</a></li>
			 
			<li><a href="obat/admin_obat.php" accesskey="4" title="">Obat</a></li>
			 
			 
		</ul>
	</div>
<div class="judul"><h3>Selamat datang di Halaman Administrator,,</h3></div><br>
<center>Sebagai Petugas Administrator Anda dapat mengisi data pribadi dokter,pasien serta obat<br>
  

</body>
</html>