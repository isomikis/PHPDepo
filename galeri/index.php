<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OTOMOBİL FİLOMUZ</title>
	<style type="text/css">
		img{
			margin:10px;
			border-radius:10px;
			box-shadow:0px 0px 10px #333;
		}
		.ortala
		{
			text-align:center;
		}
	</style>
</head>

<body>
<div class="ortala">
<?php 
	
		for($a=1;$a<=10;$a++)
		{
			echo "<a href='img/$a.jpg'><img src='img/$a.jpg' width='250' height='150'/></a> ";
			if($a%3==0)
			{
				echo "<br>"; // 3 resimde bir alt satıra geçsin
			}
		}
	
	?>
</div>
</body>
</html>