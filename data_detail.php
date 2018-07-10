<!doctype>
<html>
<head>
<title>Form Detail Obat</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Detail Obat</h2>
</div>
<div class="artikel">
<form name="form" method="POST" action="aksi_detail.php">
<div class="grup">
<strong><label>Nomor Resep</label></strong>
<input type="text" name="no_resep" placeholder="Nomor Resep" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Kode Obat</label></strong>
 <?php
		include "config/koneksi.php";
		echo "<select name=\"kd_obat\">";
		$aneh="select kode,nama from obat";
		$bing=mysqli_query($koneksi,$aneh) or die (mysql_error());
		while($gah=mysqli_fetch_object($bing))
		{
		echo "<option value=\"$gah->kode\">$gah->nama</option>";
		}
		echo "</select>";
		?>
</div>
<div class="grup">
<strong><label>Harga Obat </label></strong>
<input type="text" name="harga_obat" placeholder="Harga Obat" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Dosis Obat</label></strong>
<input type="text" name="dosis_obat" placeholder="Dosis Obat" required="required" /><br/>
</div>
<div class="grup">
<strong><label>SubTotal</label></strong>
<input type="text" name="subtotal" placeholder="SubTotal" required="required" /><br/>
</div>
<center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal"/>
</div>
</form>
</body>
</html>