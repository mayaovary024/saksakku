<html>
<head>
<title>halaman admin</title>
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.judul{
	text-align:center;
}
</style></head>

<body>

       <div class="judul">Edit Data Pasien
        </div>
 
		          
                <form method="post" action="update_obat.php?&id=<?php echo $_GET['id'] ?>">
                  
                    <?php
include "../config/koneksi.php";

$idobat = $_GET['id'];
$er		= "select * from obat where idobat=$idobat";
  $kie	= mysqli_query ($koneksi,$er);
  $coy		= mysqli_fetch_array ($kie);

?>
 <div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Obat</h2>
</div>
<div class="artikel">
           <div class="grup">
<strong><label>Kode Obat</label></strong>
 <input name="kode" type="text" id="kode" value="<?php echo $coy['kode']; ?>">
</div>
<div class="grup">
<strong><label>Nama Obat</label></strong>
<input type="text" name="nama" id="nama" value ="<?php echo $coy['nama'];?>">
</div>
<div class="grup">
<strong><label>Jenis Obat</label></strong>
<input type="text" name="jenis" id="jenis" value ="<?php echo $coy['jenis'];?> "><br/>
</div>
<div class="grup">
<strong><label>Kategori Obat</label></strong>
<input type="text" name="kategori" id="kategori" value ="<?php echo $coy['kategori'];?> "><br/>
</div>  
<div class="grup">
<strong><label>Harga Obat</label></strong>
<input type="text" name="harga" id="harga" value ="<?php echo $coy['harga'];?> "><br/>
</div>   
<div class="grup">
<strong><label>Jumlah Obat</label></strong>
<input type="text" name="jml_obat" id="jml_obat" value ="<?php echo $coy['jml_obat'];?> "><br/>
</div>           
 <center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal"/>
</div>    
                     
                   
 
                </form>