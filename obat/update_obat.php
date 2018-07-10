<?php
include "../config/koneksi.php";
$idobat=$_GET['id'];
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$jenis=$_POST['jenis'];
$kategori=$_POST['kategori'];
$harga=$_POST['harga'];
$jml_obat=$_POST['jml_obat'];
if(empty ($kode)or empty($nama)or empty($jenis)or empty($kategori)or empty($harga)or empty($jml_obat))
{
echo "<script>alert ('data tidak boleh kosong');
document.location.href='data_obat.php';</script>\n";
}else {
$hai="update obat set kode='$kode',nama='$nama',jenis='$jenis',kategori='$kategori',harga='$harga',jml_obat='$jml_obat'
where idobat='$idobat'";
$jui=mysqli_query($koneksi,$hai);
}
if($jui){
echo "<script>alert ('data berhasil diupdate');
document.location.href='admin_obat.php';</script>\n";
}else {
echo "<script>alert ('data gagal diupadte');
document.location.href='data_obat.php';</script>\n";
}
?>