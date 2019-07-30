<?php 
       $ad=$_POST["ad"];
	   $soyad=$_POST["soyad"];
	   $dtarihi=$_POST["dtarihi"];
	   $telnumarasi=$_POST["telnumarasi"];
	   $hastalik=$_POST["hastalik"];
	   $ilac=$_POST["ilac"];
	   $ameliyat=$_POST["ameliyat"];
	   $boy=$_POST["boy"];
	   $sigara=$_POST["sigara"];
	   $alerji=$_POST["alerji"];
	   $tc=$_POST["tc"];
$baglan=mysqli_connect("localhost","root","","fnss");
$sql=mysqli_query($baglan,"INSERT INTO 
saglik(ad,soyad,dtarihi,telnumarasi,hastalik,ilac,ameliyat,boy,sigara,alerji,tc) VALUES('$ad','$soyad'
,'$dtarihi','$telnumarasi','$hastalik','$ilac','$ameliyat','$boy','$sigara','$alerji','$tc')");

mysqli_close($baglan);

?>