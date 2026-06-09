<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Değişkenler</title>
</head>

<body>
	<img src="media/formul1.png" >
	<?php
		/*
		MATEMATİKSEL İŞLEM ÖNCELİĞİ
		1. Parantez içleri
		2. Soldan sağa doğru çarpma ve bölme
		3. Soldan sağa doğru toplama ve çıkarma
		
		*/
		$a=10; $b=14; $c=4; $d=8;
		
	//$sonuc=(($a+$b)/($c-$d)+4) / (($a+2)/($c+2)+($b+$c)/($d-2));
	
	$sonuc=((($a+$b)/($c+$d)-2) / (($a+2+$c)/($b-2)))+1/(($a+$b+$c+$d)/(3/4));
	
	echo "<br> Yukardaki değerler ve işleme göre sonuç: ".$sonuc;
	
	
		
	?>
</body>
</html>