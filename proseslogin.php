<?php
include "config/koneksi.php";
if (isset($_POST['submit'])){
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
}
$sql="select * from petugas where user='".$user."' and pass='".$pass."'";
$result=mysqli_query($koneksi,$sql);
$num=mysqli_num_rows($result);
$row=mysqli_fetch_row($result);
if($num >0){
	session_start();
	$_SESSION['user']="user";
	$_SESSION['pass']="pass";
	echo "<script>alert('Anda berhasil login');</script>";
	echo"<script>location='home_petugas.php';</script>";
	 
	
}else{
	echo "<script>alert ('username atau password admin tidak benar !!!');</script>";
	echo "<script>location='login_admin.php';</script>";

}
?>