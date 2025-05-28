<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post">
  <table width="50%" border="0">
    <tbody>
      <tr>
        <td><label for="textfield">TC KİMLİK NO:</label></td>
        <td><input type="number" step="1" name="tckimlik" id="tckimlik"></td>
      </tr>
      <tr>
        <td>ADI:</td>
        <td><input type="text" name="adi" id="adi"></td>
      </tr>
      <tr>
        <td>SOYADI:</td>
        <td><input type="text" name="soyadi" id="soyadi"></td>
      </tr>
      <tr>
        <td>YAŞI:</td>
        <td><input type="number" max="100" min="15" name="yasi" id="yasi"></td>
      </tr>
      <tr>
        <td>ADRES:</td>
        <td><textarea name="adres" rows="5" id="adres"></textarea></td>
      </tr>
      <tr>
        <td>MESLEK</td>
        <td><input type="text" name="meslek" id="meslek"></td>
      </tr>
      <tr>
        <td>MAAŞ</td>
        <td><input type="number" step="any" name="maas" id="maas"></td>
      </tr>
      <tr>
        <td colspan="2"><input type="submit" name="ekle" id="ekle" value="YENİ KAYDI EKLE"></td>
      </tr>
    </tbody>
  </table>
</form>
	<?php
	if(isset($_POST['ekle'])) // EKLE BUTONUNA BASILDIĞINDA
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
		$sorgu_cumlesi="INSERT INTO `personeller` (`tckimlik`, `adi`, `soyadi`, `yasi`, `adres`, `meslek`, `maas`) VALUES ('$tckimlik', '$adi', '$soyadi', '$yasi', '$adres', '$meslek', '$maas')";
			// SORGUYU ÇALIŞTIRALIM
		$DB->query($sorgu_cumlesi) OR die("Veri Eklenemedi");
		
	}
	
		// PERSONELİ LİSTESİ ALTA GETİRİLİYOR

	require_once('baglanti.php'); // bağlantı sayfasını dahil ettik
	$calisan_listesi=$DB->query("SELECT * FROM personeller WHERE 1 ORDER BY adi,soyadi ASC"); // sorgu çalştrldı
	
	
	
	?>
<table width="100%" border="1">
      <tbody>
        <tr>
		 <th scope="col">SIRANO</th>
          <th scope="col">TC NO</th>
          <th scope="col">ADI</th>
          <th scope="col">SOYADI</th>
          <th scope="col">YAŞI</th>
          <th scope="col">ADRESİ</th>
          <th scope="col">MESLEK</th>
          <th scope="col">MAAŞI</th>
         
        </tr>
		  <?php
		  $sn=1;
		  foreach($calisan_listesi as $calisanlar)
			{
		  ?>
        <tr 
			<?php
			if($sn%2==0) echo "bgcolor='#CCC'"; else echo "bgcolor='#FFF'"; 
			?>
			>
			
		  <td><?php echo $sn++ ?></td>
          <td><?php echo $calisanlar->tckimlik ?></td>
          <td><?php echo $calisanlar->adi ?></td>
          <td><?php echo $calisanlar->soyadi ?></td>
		  <td><?php echo $calisanlar->yasi ?></td>
          <td><?php echo $calisanlar->adres ?></td>
          <td><?php echo $calisanlar->meslek ?></td>
          <td><?php echo $calisanlar->maas ?></td>
         
          
        </tr>
		  <?php
		  }
		  ?>
      </tbody>
</table>
	
</body>
</html>