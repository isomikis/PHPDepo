<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Echo ile yazdırma kuralları</title>
</head>

<body>
	<?php
		$isim="İsmail";
	echo $isim;
	echo "<br>";
	echo $isim." ÇETİN"."<br>"; // çoklu metin birleştirerek yazmak için . operatörü kullanılır
	echo "$isim ÇETİN <br>"; // çift tırnak içerisine yazılan değişkenler algılanır
	echo 'Bir bahar akşamı rastladım size <br>'; // tek tırnakla da echo komutu kullanılabilir
	echo '$isim Bana dedi ki tek trnak değişkenleri tanımaz <br>'; // tek tırnak değişkenleri tanımaz
	echo $isim.'  Bana dedi ki ben de geliyorum. <br>'; // eğer tek trnakla değişken kullanlacaksa dışına yazılıp . ile birleştirmek gerekiyor
	echo "Ali'n'in en büy'ük hay'ali o'kula gitmekti <br>"; // çift tırnak içinde tek tırnak sorunsuz şekilde yazdırılır
	echo 'Annesi kızına "Hayır sen gelmiyorsun" dedi <br>'; // tek tırnak içinde çift tırnak da sorunsuz yazdırıldı
	echo 'Ali\'nin en büyük hayali o\'kula gitmekti<br>';  // tek tırnak içinde tek tırnak yazdırabilmek için önüne ters slaş \ işareti atılır 
	echo "Annesi kızına \"Hayır Sen Gelmiyorsun\" dedi <br>"; // çift tırnak içinde çift tırnak yazdırmak için başına ters slaş işareti atlır;
	echo "\\"; // ters slaş yazdırabilmek için iki adet ters slaş eklenmelidir
	
	?>
</body>
</html>