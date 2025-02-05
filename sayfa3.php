<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP ÜÇÜNCÜ SAYFAMIZ</title>
</head>
<body>
    
    <?php
     /* DEĞİŞKEN TANIMLAMA KURALLARI
     1. Değişkenler $ işareti ile başlamalıdır
     2. Değişkenlerde ilk karakter sayı olamaz
     3. Değişkenlerde boşluk kullanılamaz
     4. Değişlenlerde TÜRKÇE karakterler kullanılamaz
     5. Değişkenler .,;!?=()*+- gibi özel karakterler kullanılamaz
     6. Değişkenlerin uzunluğu 256 karakteri geçemez
     7. Değişkenler büyük ve küçük harfe duyarlıdır. ($ad değişkeni ile $Ad değişkeni farklı iki değişkendir)
     */

     $okulunAdi="Yeşilyayla Mesleki ve Teknik Anadolu Lisesi"; // camel Case tanımlama
     $okulun_adi=" Malcılar Anadolu Lisesi"; // snake case tanmalama
     $OKULUN_ADI=" Kırcılar Meslek Lisesi"; // SNAKE CASE tanımlama
     $OKULUN_AdI=" Bursa Anadolu Lisesi";
    
     $sayi=13;
     $sayi=12;
     $sayi=1.5;
     $sayi="Selam";
     $sayi=true;
     $sayi=3;
     echo $sayi; // ekranda 3 değerini görürüz en son atanan değer geçerlidir
     
    ?>
</body>
</html>