<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Döngüler-2</title>
</head>

<body>
	
	<?php
		// 1'den 10'a kadar sayları alt alta yazdıralım
			$a=1;
		while($a<=10)
		{
			echo $a."<br>";
			$a++;
		}
		// ekran 5 kez ismail yazalım
		$b=1;
		while($b<=5)
		{
			echo "İsmail <br>";
			$b++;
		}
		// 1 ile 1000 arasındaki sayıların toplamını bulan kodları yazalım
		$toplam=0;
		$c=1;
		while($c<=1000)
		{
			$toplam+=$c;
			$c++;
			
		}
		 echo "1 ile 1000 arasndaki sayıların toplamı: $toplam <br>";
		
		// 100'dan 1'e kadar ikişer ikişer sayıları alt alta yazdıralım	
		$d=100;
		while($d>=1)
		{
			echo $d."<br>";
			$d-=2;
		}
		
		// do...while döngüsü koşul sağlanmasa bile do...while döngüsü 1  kere çalıştırılır
		$s=10;
		do{
			echo $s."<br>"; // ekrana bir kere 10 yazar
			$s++;
		} while($s>=100); // 10 hiçbir zaman 100'den büyük olamayacağı için şart sağlanmadı
	?>
</body>
</html>