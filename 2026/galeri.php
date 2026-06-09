<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>GALERİ</title>
	<style type="text/css">
		img {
			border:solid 1px #666;
			border-radius:10px;
			box-shadow:0 0 5px darkred;
		}
		img:hover{
			scale:1.2;
		}
	</style>
</head>

<body>
		<?php
			for($a=1;$a<=10; $a++)
			{
			 echo "<a href='media/araba$a.jpg' target='_blank'><img src='media/araba$a.jpg' width='180' height='120' /></a> ";	
			}
	
		?>
			
</body>
</html>