<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>DİZİLER-2 (İKİ BOYUTLU DİZİLER)</title>
<style type="text/css">
		img{
			margin:10px;
			border-radius:10px;
			box-shadow:0px 0px 10px #333;
		}
		img:hover{
				margin:10px;
				border-radius:10px;
				box-shadow:0px 0px 10px #DA5642;
				scale:1.1;
			}
		.ortala
		{
			text-align:center;
		}
		.resimDiv
		{
			width:220;
			padding: 5px;
			display: inline-block;
			
		}
		.yaziDiv
		{
			text-align:left;
			font-size:20px;
		}
	</style>
</head>

<body>
	<?php 
	$arabalar=array(
	1=>array('Marka'=>'Renault','Model'=>'Clio','Motor Hacmi'=>'2.0 TDI','Renk'=>'Gümüş Gri','Model Yili'=>'2021'),
	2=>array('Marka'=>'Toyota','Model'=>'Corolla','Motor Hacmi'=>'1.5','Renk'=>'Metalik Mavi','Model Yili'=>'2021'),
	3=>array('Marka'=>'Citroen','Model'=>'Nemo','Motor Hacmi'=>'1.2','Renk'=>'Beyaz','Model Yili'=>'2018'),
	4=>array('Marka'=>'Aston Martin','Model'=>'BB5','Motor Hacmi'=>'3.8','Renk'=>'Kırmızı','Model Yili'=>'1998'),
	5=>array('Marka'=>'Ford','Model'=>'Mustang','Motor Hacmi'=>'4.2','Renk'=>'Siyah','Model Yili'=>'1968'),
	6=>array('Marka'=>'Tofaş','Model'=>'131 Şahin','Motor Hacmi'=>'1.6','Renk'=>'Vişne Çürüğü','Model Yili'=>'1988')
	);
	?>
	<div class="ortala">
	<?php
	foreach($arabalar as $id=>$bilgiler)
	{
		echo '<div class="resimDiv">';
		echo "<a href='img/$id.jpg'><img src='img/$id.jpg' width='200' height='150'></a> <br>";
			echo '<div class="yaziDiv">';
				foreach($bilgiler as $anahtar=>$bilgi)
				{
					echo "<b>$anahtar: </b>".$bilgi."<br>";
				}
			echo '</div>';
		echo '</div>';
		if($id%3==0)
		{
			echo '<br>'; // her 3 resimde bir alt satıra geçsin
		}
	}
	?>
	</div>
</body>
</html>