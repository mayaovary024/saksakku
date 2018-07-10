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
			<li class="active"><a href="../home_petugas.php" accesskey="1" title="">Home</a></li>
			<li><a href="data_dokter.php" accesskey="3" title="">+Tambah</a></li>
			<li><a href="data_plk.php" accesskey="3" title="">+Poliklinik</a></li>
			 
			 
		</ul>
	</div>
	
<center>	
 <?php
include "../config/koneksi.php";
$warnagenap="#cccccc";
$warnaganjil="#ffffff";
$warnaheading="#008080";
$ki = "select * from dokter,poliklinik where dokter.kodeplk=poliklinik.kodeplk";
$ri= mysqli_query($koneksi,$ki);
           echo"<table border='0' width='1000px'>";
            echo  "<tr bgcolor='".$warnaheading."'>
            <th><small>NO</small></th>
                <th><small>Kode Dokter</small></th>
                <th><small>Kode Poliklinik</small></th>
                <th><small>Nama</small></th>
                <th><small>Spesialis</small></th>
                <th><small>Alamat<small></th>
                <th><small>Nomer Telepon</small></th>
                <th><small>Poliklinik</small></th>
                <th><small>Tarif</small></th>
                <th><small>Aksi</small></th>
                 
              
              </tr>";
$no=1;
while ($s=mysqli_fetch_array($ri))
	 
{if($no%2==0)$warna=$warnagenap;
else $warna=$warnaganjil;
            echo  "<tr bgcolor='".$warna."'>";
             echo  "<td><small>".$no."</small></td>";
             echo"<td><small>".$s['kodedkt']."</small></td>";
             echo"<td><small>".$s['kodeplk']."</small></td>";

             echo" <td><small>".$s['namadkt']."</small></td>";
             echo "<td><small>".$s['spesialis']."</small></td>";
             echo "<td><small>".$s['alamatdkt']."</small></td>";
             echo "<td><small>".$s['telepondkt']."</small></td>";
             echo "<td><small>".$s['namaplk']."</small></td>";
             echo "<td><small>".$s['tarif']."</small></td>";
			echo "<td><small><a href='hapus_dkt.php?id=".$s['iddkt']."'>Hapus</a>|
			 
			 <a href='edit_dkt.php?id=". $s['iddkt']."' >Edit</a>
			 </small></td>";
				  
             
			 
	
             echo" </tr>";
            
$no++;
}
?>
</body>
</html>