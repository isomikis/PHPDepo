<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP DÖRDÜNCÜ SAYFAMIZ</title>
</head>
<body>
    
    <?php
     /* SABİTLER
        1. Sabitler $ işareti ile başlamaz
        2. Sabitler sayı ile başlayamaz
        3. Sabitlerde ingilizce karakter seti ve alt tire haricinde karakterler kullanılamaz
        4. Sabitler bir kere tanmlanır ve bir daha başka bir satırda değeri değiştirilemez 
     */
    // ilk sabitimizi tanımlayalım
    define('PI',3.14); 
    echo PI."<br>";
    define('PI',6.25); // Bu tanımlama hata verir
    echo PI."<br>";
    define('kullaniciAdi','Ahmet');
    define('sifre','123456*!0');
    echo kullaniciAdi."<br>";
    
    $yaricap=5;
    $cevre=2*$yaricap*PI;
    $alan=PI*$yaricap*$yaricap;

    echo $yaricap." yarıçaplı bir dairenin çevresi: ".$cevre." Alanı: ".$alan. "Olarak Hesaplanmıştır ". "Pi değeri: ".PI;
    
    
    ?>
</body>
</html>