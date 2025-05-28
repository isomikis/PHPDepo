<?php

 // adres çubuğundan tc numarası alındı
// KONTROLLERDEN GEÇİRELİM
if(!isset($_GET['tckimlik']) || !is_numeric($_GET['tckimlik']) || strlen($_GET['tckimlik'])!=11 )
	   {
		   die("Tc Kimlik nbumarası geçersiz");
	   }
	else
	{
		$tckimlik=$_GET['tckimlik'];
	}


require_once('baglanti.php');
$sorgu_cumlesi="DELETE FROM personeller WHERE tckimlik='$tckimlik'";

$DB->query($sorgu_cumlesi) OR die ("Kayıt Silinemedi");
 header("location: personel_listesi.php");

?>