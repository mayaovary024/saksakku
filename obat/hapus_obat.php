<?php
include "../config/koneksi.php";
$idobat=$_GET['id'];
$kuy="delete from obat where idobat='$idobat'";
$baba=mysqli_query($koneksi,$kuy);
if($baba){
echo "<script>alert('data berhasil dihapus');
document.location.href='admin_obat.php';</script>\n";
}else {
echo "<script>alert ('data gagal dihapus');
document.location.href='data_obat.php;</script>\n";
}
?>