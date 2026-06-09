<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Döngüler-1</title>
</head>

<body>
	
	<?php
	// 1'den 10'a kadar sayları alt alta yazdıralım
		for ($a=1;$a<=10;$a++)
		{
			echo $a."<br>";
		}
	// ekran 5 kez ismail yazalım
		for ($b=1;$b<=5;$b++)
		{
			echo "İsmail <br>";
		}
	// 1 ile 1000 arasındaki sayıların toplamını bulan kodları yazalım
		$toplam=0;
		
		for($c=1;$c<=1000;$c++)
		{
			$toplam=$toplam+$c;
		}
		echo "1 ile 1000 arasndaki sayılarıın toplamı: $toplam <br>";
	// 100'dan 1'e kadar ikişer ikişer sayıları alt alta yazdıralım	
		for($d=100; $d>=1;$d-=2)
		{
			echo "$d <br>";
		}
	?>
</body>
</html>