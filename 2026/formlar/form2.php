<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form2" name="form1" method="post" action="">
  <label for="textfield">Metni Giriniz:</label>
  <input type="text" name="metin" id="metin">
  <input type="submit" name="gonder" id="submit" value="METNİ GÖNDER">
</form>
	
	<?php
		if(isset($_POST['gonder'])) // gönder butonuna basılmışsa
		{
			$gelen_metin=$_POST['metin'];
			echo "Yazdığınız Metin: ".$gelen_metin;
		}
	?>
</body>
</html>