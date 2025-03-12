<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP YEDİNCİ SAYFAMIZ</title>
</head>
<body>
    
    <?php
      // KARAR YAPLARI
        $username="ismailsdasdsads";
		$password="abc123dssadas";
	if($username=="ismail" && $password=="abc123")
	{
		echo '<script> alert("Başarıyla Giriş yaptınız")</script>';
	}
	elseif($username=="ismail" && $password!="abc123")
	{
		echo "Şifreniz Hatalı <input type='button' onclick='window.back()' value='GERİ DÖN' />";
	}
	else
	{
		echo "Böyle bir kullanıcı yok";	
	}
	
	
    ?>
</body>
</html>