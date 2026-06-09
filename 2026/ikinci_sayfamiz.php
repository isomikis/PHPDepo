<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>PHP İKİNCİ SAYFAMIZ</title>
</head>

<body>
	<!-- BU SAYFADA HEM HTML HEM DE PHP KODLAR KULLANACAĞIZ-->
	<h1>HTML VE PHP BİR ARADA</h1>
	<?php
	$metin="Bu sayfamızda yer alacak metin PHP komutlarında bir değişkenin içine yazdırılmıştır. Ve az sonra bir komutla ekrana yazdırılacaktır.";
	//Bu PHP'de kullanılan bir açıklama satırıdır. sayfa kaynağında kesinlikle görüntülenmez sadece yazılımcıya özeldir.
	echo $metin." Bu metni de bir öncekinin yanına . koyarak ekledim";
	?>
	
</body>
</html>