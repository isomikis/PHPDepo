<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<form method="post" action="" name="adformu" >
		Personel adının veya soyadının (en az 3 harfini giriniz) <br>
		<input type="text" name="adi" id="adi" />
		<input type="submit" value="BUL" name="adgonder" >
		
	</form>
	<hr/>
	<form method="post" action="" name="yasformu" >
		Personel Yaşını Giriniz <br>
		<input type="number" name="yasi" id="yasi" />
		<input type="submit" value="YAŞ BUL" name="yasgonder" >
		
	</form>
	
	<?php
	require_once('baglanti.php'); // bağlantı sayfasını dahil ettik
	if(isset($_POST['adgonder']))
	{	
		$adi=$_POST['adi']; // adi kutusunda gelen değeri aldık
		if(strlen($adi)<3)
		{
			die("en az 3 harf girmelisiniz");
		}
		$calisan_listesi=$DB->query("SELECT * FROM calisanlar WHERE adi LIKE '%$adi%' OR soyadi LIKE '%$adi%'"); // sorgu çalştrıldı
	}
	elseif(isset($_POST['yasgonder']))
	{
		$yasi=$_POST['yasi'];
		$calisan_listesi=$DB->query("SELECT * FROM calisanlar WHERE yasi='$yasi'"); // sorgu çalştrıldı
		
	}
	
	
	if(isset($_POST['adgonder']) || isset($_POST['yasgonder'])) // iki formdan herhangi biri gönderilirse
	{	
		if($calisan_listesi->rowCount() === 0) // hiçbir sonuç bulanamadıysa yani bulunana kayıt sayısı 0 ise
		{
			echo "Hiçbir sonuç bulunamadı!";
		}
		else
		{
	
	?>
		<table width="100%" border="1">
		  <tbody>
			<tr>
			 <th scope="col">SIRANO</th>
			  <th scope="col">ID</th>
			  <th scope="col">ADI</th>
			  <th scope="col">SOYADI</th>
			  <th scope="col">CİNSİYETİ</th>
			  <th scope="col">YAŞI</th>
			  <th scope="col">MAAŞI</th>
			  <th scope="col">GÖREVİ</th>
			  <th scope="col">DEPARTMANI</th>
			  <th scope="col">NÜFUS İLİ</th>
			  <th scope="col">GİRİŞ TARİHİ</th>
			  <th scope="col">MEDENİ DURUMU</th>
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
			  <td><?php echo $calisanlar->id ?></td>
			  <td><?php echo $calisanlar->adi ?></td>
			  <td><?php echo $calisanlar->soyadi ?></td>
			  <td><?php echo $calisanlar->cinsiyeti ?></td>
			  <td><?php echo $calisanlar->yasi ?></td>
			  <td><?php echo $calisanlar->maasi ?></td>
			  <td><?php echo $calisanlar->gorevi ?></td>
			  <td><?php echo $calisanlar->departmani ?></td>
			  <td><?php echo $calisanlar->nufus_ili ?></td>
			  <td><?php echo $calisanlar->ise_giris_tarihi ?></td>
			  <td><?php echo $calisanlar->medeni_durumu ?></td>

			</tr>
			  <?php
			  }
			} // kayıt bulunduysa else kapatma
		} // adgönder veya yasgonder butonuna basılmşsa listeyi gösterecek
			  ?>
		  </tbody>
	</table>
</body>
</html>