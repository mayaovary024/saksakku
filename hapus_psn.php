<?php
include "config/koneksi.php";
$idpsn=$_GET['id'];
$coba="delete from pasien where idpsn='$idpsn'";
$jika=mysqli_query($koneksi,$coba);
if($jika){
echo "<script>alert ('data berhasil dihapus');
document.location.href='admin_psn.php';</script>\n";
}else{
echo "<script>alert ('data gagal dihapus');
document.location.href='admin_psn.php';</script>\n";
}
?>