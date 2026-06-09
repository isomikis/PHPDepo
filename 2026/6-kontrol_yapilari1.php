<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Kontrol Yapıları-1</title>
</head>

<body>
	<form method="post" name="hesaplama" action="">
		<label>Doğum yılınızı girin</label><input type="number" required name="yil" min="1900" max="2026" id="yil" />
		<input type="submit" name="gonder" value="FORMU GÖNDER" />
	</form>
	<?php
	if(isset($_POST['gonder'])) // gönder butonuna basılmışsa
	{
			$dogum_yili=$_POST['yil']; // kutudan gelen yıl bilgisini aldık
			$buyil=date('Y'); // bugünün tarihindeki yıl bilgisini aldık
			$yas=$buyil-$dogum_yili; // yaşı hesapladık
			if($yas<18){
				echo "<font color='red'>yaşınız $yas olduğundan bu siteye giriş yetkiniz yok!</font>";	
			}
			else{
				echo "<h1>Web Sitemize Hoşgeldiniz</h1>";
			}
	} // post işlemi bitti
		
	?>
</body>
</html>