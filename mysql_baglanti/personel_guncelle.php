<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
<?php
	if(!isset($_GET['tckimlik']) || !is_numeric($_GET['tckimlik']) || strlen($_GET['tckimlik'])!=11 )
	   {
		   die("Tc Kimlik nbumarası geçersiz");
	   }
	else
	{
		$tckimlik=$_GET['tckimlik'];
	}


require_once('baglanti.php');
	$kayitbul=$DB->query("SELECT * FROM personeller WHERE tckimlik='$tckimlik'");
	foreach($kayitbul as $anahtar=>$deger)
	{
		$kayitlar[]=$deger; // değerleri diziye aktardık
	}
	//print_r($kayitlar);
	
	?>
<form id="form1" name="form1" method="post">
  <table width="50%" border="0">
    <tbody>
      <tr>
        <td><label for="textfield">TC KİMLİK NO:</label></td>
        <td><input type="number" step="1" readonly name="tckimlik" value="<?php echo $kayitlar[0]->tckimlik; ?>" id="tckimlik"></td>
      </tr>
      <tr>
        <td>ADI:</td>
        <td><input type="text" name="adi" value="<?php echo $kayitlar[0]->adi; ?>"  id="adi"></td>
      </tr>
      <tr>
        <td>SOYADI:</td>
        <td><input type="text" name="soyadi" value="<?php echo $kayitlar[0]->soyadi; ?>"  id="soyadi"></td>
      </tr>
      <tr>
        <td>YAŞI:</td>
        <td><input type="number" max="100" value="<?php echo $kayitlar[0]->yasi; ?>"  min="15" name="yasi" id="yasi"></td>
      </tr>
      <tr>
        <td>ADRES:</td>
        <td><textarea name="adres" rows="5"  id="adres"><?php echo $kayitlar[0]->adres; ?> </textarea></td>
      </tr>
      <tr>
        <td>MESLEK</td>
        <td><input type="text" name="meslek" value="<?php echo $kayitlar[0]->meslek; ?>"  id="meslek"></td>
      </tr>
      <tr>
        <td>MAAŞ</td>
        <td><input type="number" step="any" name="maas" value="<?php echo $kayitlar[0]->maas; ?>"  id="maas"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="guncelle" id="guncelle" value="KAYDI GÜNCELLE"></td>
      </tr>
    </tbody>
  </table>
</form>
	<?php
	if(isset($_POST['guncelle'])) // EKLE BUTONUNA BASILDIĞINDA
	{
		$tckimlik=$_POST['tckimlik'];
		$adi=$_POST['adi'];
		$soyadi=$_POST['soyadi'];
		$yasi=$_POST['yasi'];
		$adres=$_POST['adres'];
		$meslek=$_POST['meslek'];
		$maas=$_POST['maas'];
		// VERİLER ALINDI ŞİMDİ EKLEYELİM
		require_once('baglanti.php');
		$sorgu_cumlesi="UPDATE `personeller` SET `adi` = '$adi', `soyadi` = '$soyadi', `yasi` = '$yasi', `adres` = '$adres', `meslek` = '$meslek', `maas` = '$maas' WHERE `tckimlik` = '$tckimlik';";
			// SORGUYU ÇALIŞTIRALIM
		$DB->query($sorgu_cumlesi) OR die("Veri Gncellenemedi");
		header("location:personel_listesi.php");
		
	}
	
		// PERSONELİ LİSTESİ ALTA GETİRİLİYOR

	?>
	
</body>
</html>