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

       <div class="judul">Edit Data Dokter
        </div>
 
		          
                <form method="post" action="update_dkt.php?&id=<?php echo $_GET['id'] ?>">
                  
                    <?php
include "../config/koneksi.php";

$iddkt = $_GET['id'];
$ka		= "select * from dokter where iddkt=$iddkt";
  $ha	= mysqli_query ($koneksi,$ka);
  $k		= mysqli_fetch_array ($ha);

?>
 <div class="konten">
<div class="kepala">
<div class="lock"></div>
<h2 class="judul">Data Dokter</h2>
</div>
<div class="artikel">
           <div class="grup">
<strong><label>Kode Dokter</label></strong>
 <input name="kodedkt" type="text" id="kodedkt" value="<?php echo $k['kodedkt']; ?>">
</div>
<div class="grup">
<strong><label>Nama Dokter</label></strong>
<input type="text" name="namadkt" id="namadkt" value ="<?php echo $k['namadkt'];?>">
</div>
<div class="grup">
<strong><label>Spesialis</label></strong>
<input type="text" name="spesialis" id="spesialis" value ="<?php echo $k['spesialis'];?> "><br/>
</div>
<div class="grup">
<strong><label>Alamat</label></strong>
 <input type="text" name="alamatdkt" id="alamatdkt" value ="<?php echo $k['alamatdkt'];?> "><br/>
</div>
<div class="grup">
<strong><label>Nomor Telepon</label></strong>
<input type="text" name="telepondkt" id="telepondkt" value ="<?php echo $k['telepondkt'];?> "><br/>
</div>  
<div class="grup">
<strong><label>Poliklinik</label></strong> 
    <?php
		include "../config/koneksi.php";
		echo "<select name=\"kodeplk\">";
		$kuy="select kodeplk,namaplk from poliklinik";
		$jon=mysqli_query($koneksi,$kuy) or die (mysql_error());
		while($yo=mysqli_fetch_object($jon))
		{
		echo "<option value=\"$yo->kodeplk\">$yo->namaplk</option>";
		}
		echo "</select>";
		?>
</div> 
 <div class="grup">
<strong><label>Tarif</label></strong>
<input type="text" name="tarif" id="tarif" value ="<?php echo $k['tarif'];?> "><br/>
</div>  
    
 <center>
<div class="grup">
<input type="submit" name="submit" value="Simpan" />
</div>
<div class="grup">
<input type="reset" name="reset" value="Batal"/>
</div>    
                     
                   
 
                </form>