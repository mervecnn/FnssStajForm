<?php 
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);

       $ad=$_POST["ad"];
	   $soyad=$_POST["soyad"];
	   $dtarihi=$_POST["dtarihi"];
	   $email=$_POST["email"];
	   $dyeri=$_POST["dyeri"];
	   $ikametgah=$_POST["ikametgah"];
	   $il=$_POST["il"];
	   $ilce=$_POST["ilce"];
	   $sgkno=$_POST["sgkno"];
	   $iletisimnumarasi=$_POST["iletisimnumarasi"];
	   $universiteadi=$_POST["universiteadi"];
	   $bolumadi=$_POST["bolumadi"];
	   $sinif=$_POST["sinif"];
	   $dep=$_POST["departman"];
	   $anneadi=$_POST["anneadi"];
	   $babaadi=$_POST["babaadi"];
	   $tc=$_POST["tc"];
$baglan=mysqli_connect("localhost","root","","fnss");
$sql=mysqli_query($baglan,"INSERT INTO 
personel(ad,soyad,dtarihi,email,dyeri,ikametgah,il,ilce,sgkno,iletisimnumarasi,universiteadi,bolumadi,sinif,departman,anneadi,babaadi,tc) VALUES('$ad','$soyad'
,'$dtarihi','$email','$dyeri','$ikametgah','$il','$ilce','$sgkno','$iletisimnumarasi','$universiteadi','$bolumadi','$sinif','$dep','$anneadi','$babaadi','$tc')");

mysqli_close($baglan);

?>