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
<div class="menu-wrap">
<ul>
			<li class="active"><a href="home_petugas.php" accesskey="1" title="">Home</a></li>
			<li><a href="data_pasien.php" accesskey="3" title="">+Tambah</a></li>
			 
			 
		</ul>
	</div>
	
<center>	
 <?php
include "config/koneksi.php";
$warnagenap="#cccccc";
$warnaganjil="#ffffff";
$warnaheading="#008080";
$sory = "select * from pasien ";
$aku= mysqli_query($koneksi,$sory);
           echo"<table border='0' width='1000px'>";
            echo  "<tr bgcolor='".$warnaheading."'>
            <th><small>NO</small></th>
                <th><small>Kode</small></th>
                <th><small>Nama</small></th>
                <th><small>Alamat</small></th>
                <th><small>Jenis Kelamin</small></th>
                <th><small>Umur</small></th>
                <th><small>Nomor Telepon</small></th>
                <th><small>Aksi</small></th>
                 
              
              </tr>";
$no=1;
while ($d=mysqli_fetch_array($aku))
	 
{if($no%2==0)$warna=$warnagenap;
else $warna=$warnaganjil;
            echo  "<tr bgcolor='".$warna."'>";
             echo  "<td><small>".$no."</small></td>";
             echo"<td><small>".$d['kodepsn']."</small></td>";
             echo" <td><small>".$d['namapsn']."</small></td>";
             echo "<td><small>".$d['alamatpsn']."</small></td>";
             echo "<td><small>".$d['jkpsn']."</small></td>";
             echo "<td><small>".$d['umurpsn']."</small></td>";
             echo "<td><small>".$d['tlppsn']."</small></td>";
			echo "<td><small><a href='hapus_psn.php?id=".$d['idpsn']."'>Hapus</a>|
			 
			 <a href='edit_psn.php?id=". $d['idpsn']."' >Edit</a>|<a href='daftar.php?id=".$d['idpsn']."'>Pendaftaran</a>
			 </small></td>";
				  
             
			 
	
             echo" </tr>";
            
$no++;
}
?>
</body>
</html>