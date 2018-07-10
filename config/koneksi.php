<?php
$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="klinik1";
$koneksi=mysqli_connect($db_host,$db_user,$db_pass,$db_name);
if(!$koneksi){
	die ("connection filed.".  mysqli_connect_error());
}
?>