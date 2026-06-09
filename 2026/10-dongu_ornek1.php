<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Döngü Örneği-1</title>
	<style>
		.kirmizi{
			color:red;
			border:solid 1px red;
		}
		.mavi{
			color:blue;
			border:solid 1px blue;
		}
	</style>
</head>

<body>
	<?php
	// 1'den 100'e kadar sayları alt alta yazarken tek sayılar mavi çift sayılar kırmızı olacak şekilde yapalım
	
	for($a=1;$a<=100; $a++)
	{
		if($a%2==0) // sayı 2 ile tam bölünebiliyorsa çifttir
		{
			echo "<font class='kirmizi'>$a</font><br>";
		}
		else
		{
			echo "<font class='mavi'>$a</font><br>";
		}
	}
	
	// AYNISINI WHILE DÖNGÜSÜ İLE YAPALIM
	$b=1;
	while($b<=100)
	{
		if($b%2==0) // sayı 2 ile tam bölünebiliyorsa çifttir
		{
			echo "<font class='kirmizi'>$b</font><br>";
		}
		else
		{
			echo "<font class='mavi'>$b</font><br>";
		}
		$b++;
	}
	
	?>
</body>
</html>