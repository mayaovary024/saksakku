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
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
 
<style type="text/css">
 
table{
	margin-top:100px;
}
</style>
</head>
<body>
<div class="menu-wrap">
<ul>
			<li class="active"><a href="../home_petugas.php" accesskey="1" title="">Home</a></li>
			<li><a href="data_obat.php" accesskey="3" title="">+Tambah</a></li>
			 
			 
		</ul>
	</div>
	
<center>	
 <?php
include "../config/koneksi.php";
$warnagenap="#cccccc";
$warnaganjil="#ffffff";
$warnaheading="#008080";
$jajan = "select * from obat ";
$yuhu= mysqli_query($koneksi,$jajan);
           echo"<table border='0' width='1000px'>";
            echo  "<tr bgcolor='".$warnaheading."'>
            <th><small>NO</small></th>
                <th><small>Kode Obat</small></th>
                <th><small>Nama Obat</small></th>
                <th><small>Jenis Obat</small></th>
                <th><small>Kategori Obat</small></th>
                <th><small>Harga Obat</small></th>
                <th><small>Jumlah Obat</small></th>
                <th><small>Aksi</small></th>
                 
              
              </tr>";
$no=1;
while ($uye=mysqli_fetch_array($yuhu))
	 
{if($no%2==0)$warna=$warnagenap;
else $warna=$warnaganjil;
            echo  "<tr bgcolor='".$warna."'>";
             echo  "<td><small>".$no."</small></td>";
             echo"<td><small>".$uye['kode']."</small></td>";
             echo" <td><small>".$uye['nama']."</small></td>";
             echo "<td><small>".$uye['jenis']."</small></td>";
             echo "<td><small>".$uye['kategori']."</small></td>";
             echo "<td><small>".$uye['harga']."</small></td>";
             echo "<td><small>".$uye['jml_obat']."</small></td>";
			echo "<td><small><a href='hapus_obat.php?id=".$uye['idobat']."'>Hapus</a>|
			 
			 <a href='edit_obat.php?id=". $uye['idobat']."' >Edit</a>
			 </small></td>";
				  
             
			 
	
             echo" </tr>";
            
$no++;
}
?>
</body>
</html>