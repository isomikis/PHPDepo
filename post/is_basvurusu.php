
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>İŞ BAŞVURUSU</title>
	<style type="text/css">
		.teksatir
		{
			background-color: lightgrey;
		}
	
	</style>
</head>

<body>
	
	<form name="is_basvurusu_formu" id="is_basvurusu" method="POST" action="basvuru_sonuc.php">	
		<table width="50%" border="0" cellspacing="0" cellpadding="4">
		  <tbody>
			<tr class="teksatir">
			  <th align="left" scope="row">TC NUMARANIZ</th>
			  <td>:</td>
			  <td>
              <input name="tc" type="number" required="required" id="tc"></td>
			</tr>
			<tr>
			  <th align="left" scope="row">ADINIZ SOYADINIZ</th>
			  <td>:</td>
			  <td><input type="text" name="adsoyad" id="adsoyad"></td>
			</tr>
			<tr class="teksatir">
			  <th align="left" scope="row">E-MAIL ADRESİNİZ</th>
			  <td>:</td>
			  <td>
              <input type="email" name="email" id="email"></td>
			</tr>
			<tr>
			  <th align="left" scope="row">CEP TELEFONUNUZ</th>
			  <td>:</td>
			  <td><input type="number" name="ceptel" id="ceptel"></td>
			</tr>
			<tr class="teksatir">
			  <th align="left" scope="row">MEDENİ DURUMUNUZ</th>
			  <td>:</td>
			  <td> <label><input name="medeni_durum" type="radio" id="evli" value="evli">
             Evli </label>
				<label><input name="medeni_durum" type="radio" id="bekar" value="bekar" checked="checked">
              Bekar </label>
				</td>
			</tr>
			<tr>
			  <th align="left" scope="row">CİNSİYETİNİZ</th>
			  <td>:</td>
			  <td><select name="cinsiyet" id="cinsiyet">
				<option value="Belirtilmedi">Belirtmek İstemiyorum</option>
			    <option value="Erkek">Erkek</option>
			    <option value="Kadın">Kadın</option>
			    
		      </select></td>
			</tr>
			<tr class="teksatir">
			  <th align="left" scope="row">ADRESİNİZ</th>
			  <td>:</td>
			  <td>
              <textarea rows="5" cols="50" name="adres" id="adres"></textarea></td>
			</tr>
			<tr>
			  <th align="left" scope="row">SİZE NASIL ULAŞALIM?</th>
			  <td>:</td>
			  <td>
				  <label><input type="checkbox" name="eposta" id="eposta">
              E-posta </label>
				<label><input type="checkbox" name="sms" id="sms">
              SMS </label>
				 <label><input type="checkbox" name="whatsapp" id="whatsapp">
              WhatsApp </label> 
				</td>
			</tr>
			<tr>
			  <th colspan="3" align="left" class="teksatir" scope="row"><input type="checkbox" required name="kabul" checked="checked"><label><a href="https://www.google.com.tr" target="_blank">Başvuru Koşularını</a> kabul ediyorum</label> </th>
		    </tr>
			<tr>
			  <th colspan="3" align="left" scope="row"><input type="submit" name="gonder" id="submit" value="BAŞVURU YAP"></th>
		    </tr>
		  </tbody>
		</table>
	</form>

</body>
</html>