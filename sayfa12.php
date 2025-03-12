<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>İÇ İÇE DÖNGÜLER</title>
</head>

<body>
	<?php 
	$satirSayisi=15;
	$sutunSayisi=3;
	$metin="Mehmet";
	echo '<table width="50%" border="1">';
	// ilk döngümüzü yazalım
	for($a=1;$a<=$satirSayisi;$a++)
	{
		echo "<tr>";
		// SÜTUNLAR GELECEK
			for($b=1;$b<=$sutunSayisi;$b++)
			{
				echo "<td>$metin</td>";
			}
		
		echo "</tr>"; 
		
	}
	
	echo '</table>';
	?>
	
<table width="200" border="1">
    <tr>
      <td>Ahmet</td>
      <td>Ahmet</td>
      <td>Ahmet</td>
    </tr>
    <tr>
      <td>Ahmet</td>
      <td>Ahmet</td>
      <td>Ahmet</td>
    </tr>
    <tr>
      <td>Ahmet</td>
      <td>Ahmet</td>
      <td>Ahmet</td>
    </tr>
    <tr>
      <td>Ahmet</td>
      <td>Ahmet</td>
      <td>Ahmet</td>
    </tr>
  
</table>
</body>
</html>