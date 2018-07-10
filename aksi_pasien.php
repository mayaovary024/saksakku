<?php
include "config/koneksi.php";
 
$kodepsn			= $_POST['kodepsn'];
$namapsn			= $_POST['namapsn'];
$alamatpsn			= $_POST['alamatpsn'];
$jkpsn				= $_POST['jkpsn'];
$umurpsn			= $_POST['umurpsn'];
$tlppsn				= $_POST['tlppsn'];
 

if (empty ($kodepsn) or empty ($namapsn) or empty($alamatpsn) or empty($jkpsn) or empty($umurpsn) or empty ($tlppsn))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='data_pasien.php'; </script>\n"; exit ;
}else{
$simpan = "insert into pasien (kodepsn,namapsn,alamatpsn,jkpsn,umurpsn,tlppsn)values('".$kodepsn."','".$namapsn."','".$alamatpsn."','".$jkpsn."','".$umurpsn."','".$tlppsn."')";
$baru=mysqli_query($koneksi,$simpan);
}
if($baru) {
echo "<script>alert('data berhasil disimpan');
document.location.href='admin_psn.php'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='data_pasien.php'; </script>\n";
}
?>