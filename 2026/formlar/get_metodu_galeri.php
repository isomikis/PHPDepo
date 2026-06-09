<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Fotogaleri</title>
	<style>
		.buyukresim{
			border-radius:15px;
			box-shadow:0 0 10px darkred;
		}
		.kucukresim
		{
			border-radius:5px;
			border:solid 3px white;
			margin:5px;
			box-shadow:0 0 5px #333;
		}
	</style>
</head>

<body>
	<?php
	if(isset($_GET['resimno']))
	{
		$resimno=$_GET['resimno'];
	}
	else
	{
		$resimno=1;
	}
	
	?>
	<div align="center">
		<img class="buyukresim" src="../media/araba<?php echo $resimno ?>.jpg" width="800" height="500" alt=""/> <br>
	
	
	<?php
		for($a=1;$a<=10;$a++)
		{
			echo "<a href='get_metodu_galeri.php?resimno=$a'><img class='kucukresim' src='../media/araba$a.jpg' width='150' height='80' ></a>";
		}
	?>
	</div>
</body>
</html>