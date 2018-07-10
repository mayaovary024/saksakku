<!doctype html>
<html>
<head>
<title>Prosedur </title>
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
 
<style type="text/css">
body{
	margin-top:0px;
	
}
table{
	margin-top:100px;
}
</style>
</head>
<body>
<div class="isi">
 <h3>Checkout Selesai</h3>
                  Selamat Anda telah berhasil checkout, silahkan catat info di bawah ini..
                  
  
 <?php
include "config/koneksi.php";

$idpsn = $_GET['id'];
$juju		= "select * from pasien where idpsn=$idpsn";
  $kuki	= mysqli_query ($koneksi,$juju);
  $o		= mysqli_fetch_array ($kuki);

?>                                                      
			 
<div class="grup">
<strong><label></label></strong>
 <input name="kodepsn" type="text" id="kodepsn" value="<?php echo $c['kodepsn']; ?>">
</div>