<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Değişkenler</title>
</head>

<body>
	<?php
		/*
		MATEMATİK OPERATÖRLERİ
		Operatör	İşareti		Örnek
		Toplama			+		$a+$b+8
		Çıkarma			-		$a-3
		Çarpma			*		$a*$d
		Bölme			/		$d/2
		Mod Alma		%		$sayi%2
		
		*/
		$sayi1=10;
		$sayi2=5;
		$toplam=$sayi1+$sayi2;
		$carpim=$sayi1*$sayi2;
		$bolum=$sayi1/$sayi2;
		$fark=$sayi1-$sayi2;
		$mod=$sayi1%3; // sayı1 değerinin 3 ile bölümünden kalanı verecek
		echo "$sayi1 ve $sayi2 sayılarının; <br> toplamı: $toplam <br>
		Çarpımı: $carpim <br>
		Bölümü: $bolum <br>
		Farkı: $fark <br>
		$sayi1 sayısının 3 ile bölümünden kalan ise: $mod <br>";
		/* KARŞILAŞTIRMA OPERATÖRLERİ
		Genellikle koşullar içerisinde kullanılırlar
				Operatör			İşareti		Örnek				Açıklama
				Küçükse					<		$yas < 18			$yas değişkeninin değeri 18'den küçükse
				Büyükse					>		$sayi > 12			$sayi değişkeni 12 değerinden büyükse
				Küçük veya Eşitse		<=		$a<=$b
				Büyük veya Eşitse		>=		$a>=25
				Eşit Değilse			!=		$a!=3
				Eşitse					==		$sayi==25
				Denkse					===		$sayi===23
				Denk Değilse			!==		$sayi!==10
				
		*/
	
	$a="12";
	$b=12;
	if($a===$b)
	{
		echo "değişkenler denk";
	}
	else
	{
		echo "değişkenler denk değil";
	}
			/* MANTIKSAL OPERATÖRLER 
				Operatör			İşareti		Örnek						Açıklama
					Ve			&& ya da AND	$a==3 && $b<20				$a 3 değerine eşitse ve $b 20'den küçükse 
					Veya		|| ya da OR		$user=="abc" $pass==12456   $user değeri abc ise veya $pass değeri 12456 ise 																true değerini döndürür
					Not(Değil)  	!			!is_numeric($a)				$a değişkeni sayılardan oluşmuyorsa true değerini 															döndürür
			*/
	
			/* ARTTIRMA EKSİLTME VE BİRLEŞİK ATAMA OPERATÖRLERİ
			Operatör			İşareti		Örnek						Açıklama
			Bir arttır				++		$a++						$a değişkeninin değerini 1 arttırır
			Bir Eksilt				--		$c--						$c değişkeninin değerini 1 eksiltir
			Üzerine Topla			+=		$d+=10						$d değişkenin değerini 10 arttırır
			Üzerinden çıkar			-=		$f-=5						$f değişkenin değerini 5 azaltır
			Üzerine çarp			*=		$g*=2						$g değişkenin değerini 2 katına eşitliyor
			üzerinden böl			/=		$h/=3						$h değişkenin değerinin 3'te birine düşürür
			
			*/
	?>
</body>
</html>