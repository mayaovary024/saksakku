<?php
include "config/koneksi.php";
$idpsn=$_GET['id'];
$kodepsn=$_POST['kodepsn'];
$namapsn=$_POST['namapsn'];
$alamatpsn=$_POST['alamatpsn'];
$jkpsn=$_POST['jkpsn'];
$umurpsn=$_POST['umurpsn'];
$tlppsn=$_POST['tlppsn'];
 
if (empty ($kodepsn) or empty ($namapsn) or empty($alamatpsn) or empty($jkpsn) or empty($umurpsn) or empty ($tlppsn))
{
echo "<script>alert('data tidak boleh kosong');
document.location.href='data_pasien.php'; </script>\n"; exit ;
}else{
$we="update pasien set kodepsn='$kodepsn',namapsn='$namapsn',alamatpsn='$alamatpsn',jkpsn='$jkpsn',umurpsn='$umurpsn',tlppsn='$tlppsn'
where idpsn='$idpsn'";
$gi=mysqli_query($koneksi,$we);
}
if($gi){
	echo "<script>alert('data berhasil diupdate');
	document.location.href='admin_psn.php';</script>\n";
}else{
	echo "<script>alert('data gagal diupdate');
	document.location.href='admin_psn.php';</script>\n";
}
?>