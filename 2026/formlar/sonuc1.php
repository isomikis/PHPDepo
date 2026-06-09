<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	if(isset($_POST['metin'])) // form1 formu buraya gönderilmişse
	{
		$gelen_metin=$_POST['metin']; // $gelen_metin değişkenine metin isimli kutudan gelen metni yaz
		echo "Az önce kutudan gönderilen metin: ".$gelen_metin;
	}
	else
	{
		echo "Formu göndermediniz!";
	}
	
	?>
</body>
</html>