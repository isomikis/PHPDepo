<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>BAŞVURU SONUCU</title>
</head>

<body>
	<?php
if(isset($_POST['gonder'])) // VERİLER POST EDİLMİŞSE
{
	if(!isset($_POST['eposta']) && !isset($_POST['sms']) && !isset($_POST['whatsapp']) )
	{
		die('En az bir iletişim şekli seçmelisiniz.<a href="javascript:history.back()">Geri Dön</a>');
	}
	// VERİLERİ ALIYORUZ
	$tc=$_POST['tc'];
	$adsoyad=$_POST['adsoyad'];
	$email=$_POST['email'];
	$ceptel=$_POST['ceptel'];
	$medeni_durum=$_POST['medeni_durum'];
	$cinsiyet=$_POST['cinsiyet'];
	$adres=$_POST['adres'];
	echo "Hoşgeldiniz sayın<b> $adsoyad </b>Başvuru bilgileriniz şöyle <br>";
	echo "
	<b>TC NUMARANIZ</b>: $tc <br>
	<b>E-POSTA ADRESİNİZ</b>: $email <br>
	<b>CEP TELEFONUNUZ</b>: $ceptel <br>
	<b>MEDENİ DURUMUNUZ</b>: $medeni_durum <br>
	<b>CİNSİYETİNİZ</b>: $cinsiyet <br>
	<b>ADRESİNİZ</b>: $adres <br>
	<b>İLETİŞİM SEÇENEKLERİNİZ:<b> <br>";
	if(isset($_POST['eposta']))
	{
		echo "E-posta <br>";
	}
	if(isset($_POST['sms']))
	{
		echo "SMS <br>";
	}
	if(isset($_POST['whatsapp']))
	{
		echo "WhatsApp <br>";
	}
} // FORM GÖNDERME İŞLEMİ BİTTİ
else // VERİLER POST EDİLMEMİŞSE
{
	echo "BU SAYFAYI GÖRÜNTÜLEME YETKİNİZ YOK!";
}
	?>
</body>
</html>