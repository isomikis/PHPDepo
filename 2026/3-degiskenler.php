<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Değişkenler</title>
</head>

<body>
	<?php
		/*
		Değişken tanımlama ve kullanma adımlarını bu sayfada öğreneceğiz genel değişken tanımlama kuralı
		şöyledir
		$degisken = değer;
		1. Değişkenler mutlaka $ işareti ile başlar
		2. Değişkenlerin ilk karakteri sayı olamaz
		3. Değişkenler boşluk içeremez
		4. Değişkenler alt tire haricinde özel karakterleri içeremez ( ! ' ? * / () - + gibi karakterleri)
		5. Değişkenler ingilizce karakter seti haricinde karakterleri içeremez (ö ü ğ ş ç ı İ gibi)
		6. Değişkenlerin maksimum uzunluğu 256 karakteri geçemez
		7. Değişkenler büyük ve küçük harfe duyarlıdır $AD değişkeni $ad değişkenine veya $Ad değişkenine veya $aD değişkenine eşit değildir
		
		*/
	$sayi=12345; // 12345 değerini $sayi değişkenine atadım
	$ogrenci1="Ahmet"; // $1ogrenci şeklinde bir değişken tanımlanamaz
	$adi_soyadi="İsmail ÇETİN"; // $adi soyadi="İsmail" şeklinde boşluklu bir değişken olamaz
	$sayi_kupu=478; // $sayi-kupu şeklinde tanımlama yapılamaz
	$ogrenci_adi="Süleyman"; // $öğrenci_adı="Süleyman" şeklinde tanımlama olmaz
	
		// DEĞİŞKEN VERİ TİPLERİ
	//1. Tam Sayı değişkenler (integer) 
	$s1=3;
	$sayi=345766;
	
	echo '$s1 değişkeninin değeri '.$s1." ve veri tipi: ".gettype($s1)."<br>";
	
	//2. Ondalıklı sayı (double) veri tipi
	
	$pi=3.14;
	$para=123.7454;
	
	echo '$para değişkeninin değeri '.$para." ve veri tipi: ".gettype($para)."<br>";
	
	// 3. Metin (string) veri tipi
	
	$isim="İsmail";
	$ad_soyad="İsmail"." "."Çetin";
	
	echo '$ad_soyad değişkeninin değeri '.$ad_soyad." ve veri tipi: ".gettype($ad_soyad)."<br>";
	
	// 4. Boolean (mantıksal) veri tipi
	
	$dogrumu=true; // değeri 1 kabul edilir ekrana 1 olarak yazdırılır
	$mantik=false; // değeri sıfır kabul edilir ekrana yazdırılmaz
	
	echo '$mantik değişkeninin değeri '.$mantik." ve veri tipi: ".gettype($mantik)."<br>";
	
	// 5. NULL (Hiçlik) veri tipi 
	
	$hic=NULL;
	echo '$hic değişkeninin değeri '.$hic." ve veri tipi: ".gettype($hic)."<br>";
	
	// 6. DİZİ (Array) değişken veri tipi
	
	$ogrenciler=array("Ali","Armut",123,NULL,false,"Güneş");
	
	echo '$ogrenciler değişkeninin veri tipi: '.gettype($ogrenciler)."<br>";
	print_r($ogrenciler); echo "<br>";
	
	
	$A11=array(3091=>"Furkan BAYRAM", 3203=>"Muhammet HAYRETTİNOĞLU", 3087=>"Yusuf Efe KONUK", 1525=>"Ali Efe KOÇ", 1351=>"Yusuf BALCI", 2515=>"Cansu MAZMAN", 3058=>"Sudenur KARAKAYA", 2516=>"İremsu ÇİNAR");
	
	echo $A11[1351]."<br>";
	$A11[2578]="Ahmet MEKİN";
	$A11[]="Halide Edip ADIVAR"; 
	$A11[3379]="Deneme"; 
	
	print_r($A11);
	
	?>
</body>
</html>