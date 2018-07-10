<?php
include "config/koneksi.php";
$no		=$_POST['no_resep'];
$kd		=$_POST['kd_obat'];
$harga	=$_POST['harga_obat'];
$dosis	=$_POST['dosis_obat'];
$sub	=$_POST['subtotal'];

if(empty($no)or empty($kd)or empty($dosis)or empty($harga)or empty($dosis)or empty($sub))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='data_detail.php';</script>\n";exit;
}
else {
$obat="insert into detail(no_resep,kd_obat,harga_obat,dosis_obat,subtotal)values ('".$no."','".$kd."','".$harga."','".$dosis."','".$sub."')";
$isi=mysqli_query($koneksi,$obat);
}
if($isi){
echo "<script>alert ('data berhasil disimpan');
document.location.href='data_admin.php';</script>\n";
}
else{
echo "<script>alert ('data gagal disimpan');
docoment.location.href='data_detail.php';</script>\n";
}