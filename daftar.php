
<!doctype>
<html>
<head>
<title>Form login</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Pasien</h2>
</div>
<div class="artikel">
<form name="form" method="POST" action="hasil.php">
<div class="grup">
<strong><label>Nomor Pendaftaran</label></strong>
<input type="text" name="nomor" placeholder="kode" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Tanggal Daftar</label></strong>
<input type="text" name="tgl" placeholder="Tanggal Daftar" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Kode Dokter</label></strong>
<input type="text" name="kode_dok" placeholder="Kode dokter" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Kode Pasien</label></strong>
<input type="text" name="kode_pas" placeholder="Kode Pasien" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Kode Poliklinik</label></strong>
<input type="text" name="kode_pol" placeholder="Kode Poliklinik" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Biaya</label></strong>
<input type="text" name="biaya" placeholder="Biaya" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Keterangan</label></strong>
<input type="text" name="ket" placeholder="Keterangan" required="required" /><br/>
</div>
<center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal"/>
</div>
</form>
</div>
</div>
</body>
</html>