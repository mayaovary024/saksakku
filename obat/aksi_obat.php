<?php 
include "../config/koneksi.php";
$kode			=$_POST['kode'];
$nama			=$_POST['nama'];
$jenis			=$_POST['jenis'];
$kategori		=$_POST['kategori'];
$harga			=$_POST['harga'];
$jml_obat		=$_POST['jml_obat'];

if(empty($kode)or empty($nama)or empty($jenis)or empty($kategori)or empty($harga)or empty($harga)or empty($jml_obat))
{
echo "<script>alert ('data tidak boleh kosong');
document.location.href='data_obat.php';</script>\n";exit;
}
else{
$line="insert into obat(kode,nama,jenis,kategori,harga,jml_obat)values('".$kode."','".$nama."','".$jenis."','".$kategori."','".$harga."','".$jml_obat."')";
$kun=mysqli_query($koneksi,$line);
}
if($kun){
echo "<script>alert ('data berhasil disimpan');
document.location.href='admin_obat.php';</script>\n";
}
else{
echo "<script>alert ('data gagal simpan');
document.location.href='data_obat.php';</script>\n";
}
?>