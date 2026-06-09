<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Döngüler-3</title>
</head>

<body>
	
	<?php
		// foreach döngüsü dizi değişkenler için kullanılan bir döngü türüdür
	$ogrenciler=array("Ahmet","Mehmet","Ayşe","Elif","Rümeysa","Saime");
	foreach($ogrenciler as $ogrenci)
	{
		echo $ogrenci."<br>";
	}
	
	// örnek dizideki sayıların toplamını bulalım
	$sayilar=array(27,14,21.45,66,1248,89,100,65,23.12);
	$toplam=0;
	foreach($sayilar as $sayi)
	{
		$toplam+=$sayi;
	}
	echo "Dizideki sayılarıın toplamı: ".$toplam."<br>";
	
	$personeller=array(1243=>"Selim Koçdemir", 1665=>"Sait Odabaşı",1878=>"Ahmet Bozfırat",1377=>"Nuriye Keskin");
	foreach($personeller as $personel_no=>$personel_adi)
	{
		echo $personel_no."-".$personel_adi."<br>";
	}
	
	?>
</body>
</html>