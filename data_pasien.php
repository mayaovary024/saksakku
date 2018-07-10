
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
<form name="form" method="POST" action="aksi_pasien.php">
<div class="grup">
<strong><label>Kode Pasien</label></strong>
<input type="text" name="kodepsn" placeholder="kode" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Nama</label></strong>
<input type="text" name="namapsn" placeholder="nama pasien" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Alamat</label></strong>
<input type="text" name="alamatpsn" placeholder="alamat pasien" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Jenis Kelamin</label></strong>
 <select name="jkpsn" id="gender_psn" > 
            <option value="Laki-laki" selected>Laki-laki</option> 
            <option value="Perempuan">Perempuan</option> 
 
        </select>
<div class="grup">
<strong><label>Umur</label></strong>
<input type="text" name="umurpsn" placeholder="Umur pasien" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Nomer Telepon</label></strong>
<input type="text" name="tlppsn" placeholder="Nomer Telepon" required="required" /><br/>
</div>
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