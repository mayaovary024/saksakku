<!doctype>
<html>
<head>
<title>Form Obat</title>
<link rel="stylesheet" href="../css/style.css">
<link href="../css/default.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<div class="menu-wrap">
<ul>
			<li class="active"><a href="home_petugas.php" accesskey="1" title="">Home</a></li>
			 
			<li><a href="data_detail.php" accesskey="4" title="">Detail</a></li>
			 
			 
		</ul>
	</div>
<div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Obat</h2>
</div>
<div class="artikel">
<form name="form" method="POST" action="aksi_obat.php">
<div class="grup">
<strong><label>Kode Obat</label></strong>
<input type="text" name="kode" placeholder="Kode Obat" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Nama Obat</label></strong>
<input type="text" name="nama" placeholder="Nama Obat" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Jenis Obat</label></strong>
<input type="text" name="jenis" placeholder="Jenis Obat" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Kategori Obat</label></strong>
<input type="text" name="kategori" placeholder="Kategori Obat" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Harga Obat</label></strong>
<input type="text" name="harga" placeholder="Harga Obat" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Jumlah Obat</label></strong>
<input type="text" name="jml_obat" placeholder="Jumlah Obat" required="required" /><br/>
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