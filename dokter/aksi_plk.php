<?php
include "../config/koneksi.php";
$kodeplk		=$_POST['kodeplk'];
$namaplk		=$_POST['namaplk'];

if(empty($kodeplk)or empty($namaplk))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='data_plk.php';</script>\n";exit;
}else{
$cuma="insert into poliklinik(kodeplk,namaplk)values('".$kodeplk."','".$namaplk."')";
$ring=mysqli_query($koneksi,$cuma);
}
if($ring){
echo "<script>alert ('data berhasil disimpan');
document.location.href='admin_dkt.php';</script>\n";
}
else{
echo "<script>alert('data gagal disimpan');
document.location.href='data_plk.php';</script>\n";
}
?>