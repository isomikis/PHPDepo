<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP SEKİZİNCİ SAYFAMIZ</title>
</head>
<body>
    
    <?php
      // DÖNGÜLER
      // FOR DÖNGÜSÜ
		for($a=1; $a<=100; $a++)
		{
			echo $a."-"; // sayıları yan yana yazar
		}
	?>
	<hr>
	<?php
		for($b=100;$b>=1;$b--)
		{
			echo $b."<br>"; // 100'den 1'e kadar alt alta yazdırma
		}
    ?>
</body>
</html>