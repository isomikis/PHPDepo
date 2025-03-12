<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FOREACH DÖNGÜSÜ-1</title>
</head>

<body>
	<?php 
	$sehirler=array("megakent"=>"İstanbul","baskent"=>"Ankara","Bursa","Kayseri","İzmir","Kars","Iğdır","Erzurum");
	foreach($sehirler as $anahtar=>$sehir)
	{
		echo $anahtar."-".$sehir."<br>";
	}
	
	// SAYISAL BİR DİZİNİN ELEMANLARNIN TOPLAM DEĞERİNİ BULALIM
	$sayilar=array(12,22,45,17.48,77.12,145.11);
	
	$toplam=0;
	foreach($sayilar as $sayi)
	{
		$toplam+=$sayi;
	}
	echo "Dizideki sayıların toplamı:".$toplam;
	?>
	

</body>
</html>