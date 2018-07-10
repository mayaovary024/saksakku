<?php
include "../config/koneksi.php";
$iddkt=$_GET['id'];
$ha="delete from dokter where iddkt='$iddkt'";
$hi=mysqli_query($koneksi,$ha);
if($hi){
echo "<script>alert('data berhasil dihapus');
document.location.href='admin_dkt.php';</script>\n";
}
else{
echo "<script>alert('data gagal dihapus');
document.location.href='admin_dkt.php';</script>\n";
}
?>