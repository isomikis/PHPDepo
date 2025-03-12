<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FONKSİYONLAR-2</title>
</head>

<body>
	<img src="img/daire.png" width="216" height="228" alt=""/>
<?php
	// FONKSİYONLARIN KENDİ İÇİNE DÖNDÜRÜLMESİ
	/*
		kare isminde bir fonksiyon tanımlayarak bir dairenin çevresini ve alanını hesaplayan işlemler zincirini yazalım
		
	*/
	function kare($a)
	{
		$sonuc=$a*$a;
		return $sonuc; // elde edilen sonucun fonksiyonun kendisine döndürülmesi
	}
	$r=22; // yarıçap değerini girdik
	define('PI',3.14);
	
	$cevre=2*PI*$r;
	$alan=PI*kare($r);
	
	echo "$r yarıçaplı bir dairenin çevresi: $cevre ve alanı $alan birimdir </br>";
	?>
</body>
</html>