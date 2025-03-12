<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FONKSİYONLAR-1</title>
</head>

<body>
	<?php
	// girilen saynın karesini ekrana yazn bir fonksiyon yazalım
	
	function kare($sayi)
	{
		$sonuc=$sayi*$sayi;
		echo "Girilen $sayi sayısının karesi: $sonuc <br>";
	}
	
	kare(17);
	kare(21);
	kare(3);
	kare(77);
	
	 // kare(); // Bu şekilde çağırdığımızda kare fonksiyonunun içerisine yeterli değişken olmadığını söyler
	
	
	echo "Kod Devam Ediyor <br>";
	
	function topla($s1=0,$s2=0) // varsayılan  değer alan fonksiyon
	{
		$sonuc=$s1+$s2;
		echo "Girilen $s1 ve $s2 sayılarının toplamı: $sonuc <br>";
	}
	
	topla(12,23);
	topla(75.37,2386);
	topla();
	
	// kuvvet(4,3) şeklinde çağırıldığında 4'ün 3. kuvvetini hesaplayan fonksiyon yapalım
	function kuvvet($taban,$us)
	{
		$sonuc=1; // taban değeri ilk seferde verilmediği için çarpmada etkisiz elaman 1 verdik
		for($a=1;$a<=$us;$a++)
		{
			$sonuc*=$taban;
		}
		echo "$taban uzeri $us = $sonuc <br>";
	}
	
	kuvvet(2,8);
	kuvvet(10,3);
	kuvvet(5,1);
	kuvvet(8,0);
	?>
</body>
</html>