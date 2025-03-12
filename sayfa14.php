<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DİZİLER-1</title>
</head>

<body>
	<?php 
	$arabalar=array("Fiat","Toyota","BMW","Mercedes","Togg","Volvo");
	print_r($arabalar); 
	echo "<br>";
	$arabalar[]="Ford"; // dizinin sonuna ford ekleyecek
	print_r($arabalar); 
	echo "<br>";
	$arabalar[3]="Hyundai"; // mercedesi silecek yerine hyundai yazacak
	print_r($arabalar); 
	echo "<br>";
	$arabalar["kral"]="Porsche"; // dizinin en sonuna ekleyecek
	print_r($arabalar); 
	echo "<br>";
	
	$ogrenciler[256]="Berat Resul SEVİNDİK";
	$ogrenciler[1380]="Abdullah KARATAŞ";
	$ogrenciler[1617]="M. Halit KESKİN";
	$ogrenciler[1696]="Enes SAZLIKLARDAN HAVALANAN ÖRDEK";
	$ogrenciler[1614]="Umut Eren YAŞAR";
	$ogrenciler[283]="Berkay ERGÜN";
	$ogrenciler[1264]="M. Ali AYMAN";
	print_r($ogrenciler); // TÜM DİZİYİ TANIMLANDIĞI SIRAYLA YAZAR
	echo "<br>";
	// sort($ogrenciler); // Anahtarlar siler diziyi elemanlarına göre artan sıralar
	// rsort($ogrenciler);  // Anahtarları siler diziyi elemanlarına göre azalan sıralatır
	// ksort($ogrenciler);  // Anahtarları korur anahtarlara göre küçükten büyüğe sıralar
	//krsort($ogrenciler);  // Anahtarları korur anahtarlara göre büyükten küçüğe sıralar
	//natsort($ogrenciler); // Anahtarlar korunur sayısal değerleri de alfabetik olarak sıralar ör: 1.1 değeri 11'den sonra gelir
	shuffle($ogrenciler); // Anahtarları siler dizinin elemanlarını rastgele sıralar;
	print_r($ogrenciler); 
	echo "<br>";
	
	?>
</body>
</html>