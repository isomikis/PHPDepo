<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
	require_once('baglanti.php'); // bağlantı sayfasını dahil ettik
	$calisan_listesi=$DB->query("SELECT * FROM personeller WHERE 1"); // sorgu çalştrldı
	
	
	
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
          <th scope="col">SİL</th>
         
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
		  <td><a href="personel_sil.php?tckimlik=<?php echo $calisanlar->tckimlik ?>" onclick="return confirm('Bu kaydı silmek istediğinize emin misiniz?');"> SİL</a></td>
         
          
        </tr>
		  <?php
		  }
		  ?>
      </tbody>
</table>
<br>
<a href="personel_ekle.php">YENİ PERSONEL EKLE</a>
</body>
</html>