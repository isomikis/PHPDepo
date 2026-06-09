<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" action="" method="post">
  <label for="number">Sayı1:</label>
  <input name="sayi1" type="number" required="required" id="number">
  <br>
  <label for="number2">Sayı2:</label>
  <input name="sayi2" type="number" required="required" id="number2">
  <br>
  <input type="submit" name="gonder" id="submit" value="İŞLEM YAP">
</form>
	<?php
		if(isset($_POST['gonder'])) // Eğer gonder isimli butona basılmışsa
		{
			$s1=$_POST['sayi1'];
			$s2=$_POST['sayi2'];
			$toplam=$s1+$s2;
			$carpim=$s1*$s2;
			$bolum=$s1/$s2;
			$fark=$s1-$s2;
			
			echo "Girilen $s1 ve $s2 sayılarının <br> 
			Toplamı: $toplam <br>
			Çarpımı: $carpim <br>
			Bölümü: $bolum <br>
			Farkı: $fark <br>";
			
		} // POST İŞLEMİ BİTTİ
	
	?>
</body>
</html>