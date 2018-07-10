<html>
<head>
<title>halaman admin</title>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.judul{
	text-align:center;
}
</style></head>

<body>

       <div class="judul">Edit Data Pasien
        </div>
 
		          
                <form method="post" action="update_psn.php?&id=<?php echo $_GET['id'] ?>">
                  
                    <?php
include "config/koneksi.php";

$idpsn = $_GET['id'];
$edit		= "select * from pasien where idpsn=$idpsn";
  $h	= mysqli_query ($koneksi,$edit);
  $c		= mysqli_fetch_array ($h);

?>
 <div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Pasien</h2>
</div>
<div class="artikel">
           <div class="grup">
<strong><label>Kode Pasien</label></strong>
 <input name="kodepsn" type="text" id="kodepsn" value="<?php echo $c['kodepsn']; ?>">
</div>
<div class="grup">
<strong><label>Nama</label></strong>
<input type="text" name="namapsn" id="namapsn" value ="<?php echo $c['namapsn'];?>">
</div>
<div class="grup">
<strong><label>Alamat</label></strong>
<input type="text" name="alamatpsn" id="alamatpsn" value ="<?php echo $c['alamatpsn'];?> "><br/>
</div>
<div class="grup">
<strong><label>Jenis Kelamin</label></strong>
 <select name="jkpsn" id="gender_psn" > 
            <option value="Laki-laki" selected>Laki-laki</option> 
            <option value="Perempuan">Perempuan</option> 
 
        </select>
<div class="grup">
<strong><label>Umur</label></strong>
<input type="text" name="umurpsn" id="umurpsn" value ="<?php echo $c['umurpsn'];?> "><br/>
</div>  
<div class="grup">
<strong><label>Telepon</label></strong>
<input type="text" name="tlppsn" id="tlppsn" value ="<?php echo $c['tlppsn'];?> "><br/>
</div>       
 <center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal"/>
</div>    
                     
                   
 
                </form>