 
<!doctype>
<html>
<head>
<title>Form login</title>
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="../css/style.css">
<style type="text/css">
 
</style>
</head>
<body>
<body>
<div class="menu-wrap">
 <ul>
			<li class="active"><a href="home_petugas.php" accesskey="1" title="">Home</a></li>
			 
			<li><a href="data_plk.php" accesskey="4" title="">Poliklinik</a></li>
			 
			 
		</ul>
	</div>
<div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Dokter</h2>
</div>
<div class="artikel">
<form name="form" method="POST" action="aksi_dokter.php">
<div class="grup">
 <strong><label>Kode Dokter </label></strong>
<input type="text" name="kodedkt" placeholder="kode dokter" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Nama Dokter</label></strong>
<input type="text" name="namadkt" placeholder="nama dokter" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Spesialis</label></strong>
<input type="text" name="spesialis" placeholder="Spesialis" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Alamat</label></strong>
<input type="text" name="alamatdkt" placeholder="alamat dokter" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Nomer Telepon</label></strong>
<input type="text" name="telepondkt" placeholder="Nomer Telepon" required="required" /><br/>
</div>
 <div class="grup">
<strong><label>Kode Poliklinik</label></strong>
    <?php
		include "../config/koneksi.php";
		echo "<select name=\"kodeplk\">";
		$myquery="select kodeplk,namaplk from poliklinik";
		$daftar=mysqli_query($koneksi,$myquery) or die (mysql_error());
		while($dataku=mysqli_fetch_object($daftar))
		{
		echo "<option value=\"$dataku->kodeplk\">$dataku->namaplk</option>";
		}
		echo "</select>";
		?>
		
</div>
<div class="grup">
<strong><label>Tarif</label></strong>
<input type="text" name="tarif" placeholder="Tarif" required="required" /><br/>
</div>
<center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal" />
</div>
</form>
</div>
</div>
</body>
</html>