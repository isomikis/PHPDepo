<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	require_once('baglanti.php'); // bağlantı sayfasını dahil ettik
	$calisan_listesi=$DB->query("SELECT * FROM calisanlar WHERE 1"); // sorgu çalştrldı
	
	
	
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
		  ?>
      </tbody>
</table>
</body>
</html>