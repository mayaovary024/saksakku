
<!doctype>
<html>
<head>
<title>Form login</title>
<link rel="stylesheet" href="../css/style.css">
<style type="text/css">
 
</style>
</head>
<body>
<div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Poliklinik</h2>
</div>
<div class="artikel">
<form name="form" method="POST" action="aksi_plk.php">
<div class="grup">
 <strong><label>Kode Poliklinik</label></strong>
<input type="text" name="kodeplk" placeholder="Kode Poliklinik" required="required" /><br/>
</div>
<div class="grup">
<strong><label>Nama Poliklinik</label></strong>
<input type="text" name="namaplk" placeholder="Nama Poliklinik" required="required" /><br/>
</div>
<center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal" />
</div>
</form>
</body>
</html>