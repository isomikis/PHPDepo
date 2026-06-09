<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fonksiyonlar-1</title>
</head>

<body>
	<?php
	function topla($a=0,$b=0)
	{
		$toplam=$a+$b;
		echo "$a ve $b sayılarının toplamı: $toplam <br>";
	}
	topla(10,20);
	topla(1258,74676);
	topla(5);
	topla();
	
	function birlestir($metin1="",$metin2="")
	{
		echo "Birleştirilen metin: ".$metin1." ".$metin2."<br>";
	}
	
	birlestir("Bir bahar akşamı","rastladım size");
	birlestir("Nasılsın?");
	
	function kare($sayi)
	{
		$kare=$sayi*$sayi;
		echo "Girilen $sayi sayısının  karesi: $kare <br>";
	}
	
	kare(10);
	kare(20);
	// FAKTÖRYEL HESAPLAYAN BİR FONKSİYON YAZALIM
	
	function faktoryel($sayi=1)
	{
		$sonuc=1;
		for($a=$sayi;$a>=1;$a--)
		{
			$sonuc*=$a;
		}
		$sonuc=number_format($sonuc,0,",","."); // ondalık basamak göstermez ve binlik ayıraç için . kullanır
		echo "$sayi! = $sonuc <br>";
	}
	
	faktoryel(5);
	faktoryel(6);
	faktoryel(20);
	?>
</body>
</html>