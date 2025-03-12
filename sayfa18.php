<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FONKSİYONLAR-3</title>
</head>

<body>
	
<?php
	// METİN İŞLEMLERİ YAPILABİLECEK BAZI FONKSİYONLAR
	function adsoyad($ad="",$soyad="")
	{
		return $ad." ".$soyad."<br>";
	}
	echo adsoyad("İsmail","Çetin");
	
	function buyukharf($metin="")
	{
		$metin=str_replace("i","İ",$metin);
		return mb_strtoupper($metin,'UTF-8'); // strtoupper($metin);
	}
	
	echo buyukharf("OkuLun ArkasIndaKi KapIdan gEL dedi çocuk");
	
	
	function harfdonustur($metin)
	{ // boşluk, büyük harf veya özel karakter kullanılarak girilmiş metni küçük harf ingilizce karakter setine dönüştüren ve aradaki boşlukları veya diğer karakterleri alt tire şekline dönüştüren fonksiyon
		$giris = array(
    "a", "b", "c", "ç", "d", "e", "f", "g", "ğ", "h", "ı", "i", "j", "k", "l", "m", "n", "o", "ö", "p", "r", "s", "ş", "t", "u", "ü", "v", "y", "z",
    "A", "B", "C", "Ç", "D", "E", "F", "G", "Ğ", "H", "I", "İ", "J", "K", "L", "M", "N", "O", "Ö", "P", "R", "S", "Ş", "T", "U", "Ü", "V", "Y", "Z","+","-","!","&","/","(",")","?"," ");
		$cikis = array(
    "a", "b", "c", "c", "d", "e", "f", "g", "g", "h", "i", "i", "j", "k", "l", "m", "n", "o", "o", "p", "r", "s", "s", "t", "u", "u", "v", "y", "z",
    "a", "b", "c", "c", "d", "e", "f", "g", "g", "h", "i", "i", "j", "k", "l", "m", "n", "o", "o", "p", "r", "s", "s", "t", "u", "u", "v", "y", "z","_","_","_","_","_","_","_","_","_");
		return str_replace($giris,$cikis,$metin);
		
	}
	echo harfdonustur("Bir BaHAR akşamI rastladım SİZE");
	
	
	
	
	?>
</body>
</html>