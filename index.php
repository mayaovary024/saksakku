<!doctype html>
<html>
<head>
<title>Prosedur </title>
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.judul{
	margin-left:500px;
	margin-top:50px;
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
			<li class="active"><a href="#" accesskey="1" title="">Home</a></li>
			<li><a href="#" accesskey="3" title="">About</a></li>
			<li><a href="#" accesskey="4" title="">CARA</a></li>
			 
		</ul>
	</div>
<div class="judul"><h3>
Prosedur Pengambilan Nomor Antrian Klinik Harapan_Semua</h3></div><hr>
<div class="langkah">
1.Sebelum Petugas mengisi data pasien,pasien diharuskan mengambil nomor antrian<br>
2.Pada mesin otomatis ini,pasien dapat menekan tombol daftar <br>
3.Sesudah itu di layar akan muncul nomor antrian Anda<br>
4.Lalu tekan tombol cetak,agar menjadi bentuk kertas<br>
<div class="daftar">
<a href="#"onClick="nomor()">daftar</a>
</div>
<script language="javascript">
<!--
function nomor()
{
		top.location="nomor.php"
}
//-->
</script>
</div>

</body>
</html>