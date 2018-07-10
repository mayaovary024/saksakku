<!doctype html>
<html>
<head>
<title>nomor antrian</title>
<link href="css/default.css" rel="stylesheet" type="text/css" media="all" />
<style type="text/css">
.no{
	margin-top:100px;
	
	font-size:23px;
	
}
#print{
	
	margin-top:100px;
font-size:22px;}
</style>
</head>
<center>
<body>
<hr>
<div class="no">
<?php
function randomString($length=3){
$str="";
$characters=array_merge(range('0','7'));
$max=count($characters)-1;for ($i=0;$i<$length;$i++){
$rand=mt_rand(0,$max);
$str.=$characters[$rand];
}
return $str;
}
echo randomString();
echo "<br/>";
?>
</div>
<hr>
<div id="print"><a href="javascript:window.print() ">cetak</a></div>
</div>
<div id="back"><a href="index.php">Back</a></div>
 
</body>
</html>