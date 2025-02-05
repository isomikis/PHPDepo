<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP İKİNCİ SAYFAMIZ</title>
</head>
<body>
    
    <?php
    // VERİ TİPLERİNİ ÖĞRENELİM
    $isim="İSMAİL";
    $yas=45;
    $boy=1.75;
    $sinifListesi=array("Ali","Hasan","Hüseyin",27);
    $dogruMu=true;
    
    echo '$isim değişkeninin değeri '.$isim.' türü ise: '.gettype($isim).'<br>'; 
    echo '$yas değişkeninin değeri '.$yas.' türü ise: '.gettype($yas).'<br>'; 
    echo '$boy değişkeninin değeri '.$boy.' türü ise: '.gettype($boy).'<br>'; 
    echo '$sinifListesi değişkeninin ilk elemanı '.$sinifListesi[0].' türü ise: '.gettype($sinifListesi).'<br>';
    echo '$dogruMu değişkeninin değeri '.$dogruMu.' türü ise: '.gettype($dogruMu).'<br>';  
    ?>
</body>
</html>