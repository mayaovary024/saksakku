<?php 
include "../config/koneksi.php";
$iddkt=$_GET['id'];
$kodedkt=$_POST['kodedkt'];
$namadkt=$_POST['namadkt'];
$spesialis=$_POST['spesialis'];
$alamatdkt=$_POST['alamatdkt'];
$kodeplk=$_POST['kodeplk'];
$tarif=$_POST['tarif'];
if(empty($kodedkt)or empty($namadkt)or empty($spesialis)or empty($alamatdkt)or empty($kodeplk)or empty($tarif))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='admin_dkt.php';<script>\n";
}else{
$ar="update dokter set kodedkt='$kodedkt',namadkt='$namadkt',spesialis='$spesialis',alamatdkt='$alamatdkt',kodeplk='$kodeplk',tarif='$tarif' 
where iddkt='$iddkt'";
$my=mysqli_query($koneksi,$ar);
}
if($my){
echo "<script>alert('data berhasil diupdate');
document.location.href='admin_dkt.php';</script>\n";
}else{
echo "<script>alert ('data gagal diupdate');
document.location.href='admin_dkt.php';</script>\n";
}
?>