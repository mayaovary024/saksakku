<?php
include "../config/koneksi.php";
 
$kodedkt			= $_POST['kodedkt'];
$namadkt			= $_POST['namadkt'];
$spesialis			= $_POST['spesialis'];
$alamatdkt			= $_POST['alamatdkt'];
$telepondkt			= $_POST['telepondkt'];
$kodeplk			= $_POST['kodeplk'];
$tarif				=$_POST['tarif'];
 

if (empty ($kodedkt) or empty ($namadkt) or empty($spesialis) or empty($alamatdkt) or empty($telepondkt) or empty ($kodeplk)or empty($tarif))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='data_dokter.php'; </script>\n"; exit ;
}else{
$query = "insert into dokter (kodedkt,namadkt,spesialis,alamatdkt,telepondkt,kodeplk,tarif)values('".$kodedkt."','".$namadkt."','".$spesialis."','".$alamatdkt."','".$telepondkt."','".$kodeplk."','".$tarif."')";
$con=mysqli_query($koneksi,$query);
}
if($con) {
echo "<script>alert('data berhasil disimpan');
document.location.href='admin_dkt.php'; </script>\n";
}else{
echo "<script>alert('data gagal disimpan');
document.location.href='data_dokter.php'; </script>\n";
}
?>