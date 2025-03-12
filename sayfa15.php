<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DİZİLER-2 (İKİ BOYUTLU DİZİLER)</title>
</head>

<body>
	<?php 
	$sinif11A=array(
	256=>array("adi"=>"Berat Resul","soyadi"=>"SEVİNDİK","baba_adi"=>"Eyüp","memleketi"=>"Samsun"),
	283=>array("adi"=>"Berkay","soyadi"=>"ERGÜN","baba_adi"=>"İbrahim","memleketi"=>"Uşak"),
	1617=>array("adi"=>"M.Halit","soyadi"=>"KESKİN","baba_adi"=>"Ali","memleketi"=>"Trabzon"),
	1380=>array("adi"=>"Abdullah","soyadi"=>"KARATAŞ","baba_adi"=>"Verruhi","memleketi"=>"Ardahan")
	);
	
	print_r($sinif11A);
	echo "<br>";
	echo $sinif11A[1617]["memleketi"]."<br>"; // TARABZON değerini yazacak
	$sinif11A[1617]["memleketi"]="BURSA"; // TRABZON olan değeri BURSA olarak değiştirdik
	print_r($sinif11A);
	echo "<br>";
	// diziye eleman ekleyelim
	$sinif11A[1562]=array("adi"=>"Yunus Emre","soyadi"=>"POLAT","baba_adi"=>"Vedat","memleketi"=>"Erzurum");
	// İÇ İÇE DÖNGÜLER KULLANARAK TÜM SINIFI EKRANA YAZDIRALIM
	// SNIFI NUMARA SIRASINA GÖRE AZALAN SIRALATALIM
	krsort($sinif11A); 
	foreach($sinif11A as $numara=>$bilgiler)
	{
		echo "<h2>".$numara."</h2>";
		
		foreach($bilgiler as $bilgiAnahtari=>$bilgi)
		{
			echo $bilgiAnahtari.": ".$bilgi."<br>";
		}
	}
	
	?>
</body>
</html>