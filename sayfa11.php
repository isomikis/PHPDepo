<!doctype html>
<html>
<head>
<meta charset='utf-8'>
<title>Untitled Document</title>
</head>
<style>
	div{
		
	}	
</style>
<body>
	
	<?php 
	// 10px yüksekliğinde divlere 0'dan 255'e kadar kırmızı tonlarını alt alta yazdıralım
		for($b=1;$b<=255;$b++){
			
			echo "<div style='background-color:rgb($b,0,0); margin:5px 0 ; width: 25px;height: 10px; ' class=''></div>";
			
			
			
		}
	?>
</body>
</html>