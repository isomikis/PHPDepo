<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP İLK SAYFAMIZ</title>
</head>
<body>
    
    <?php
    // BU BİR YORUM SATIRIDIR VE SADECE BU SATIRDA GEÇERLİDİR
    # BU DA BİR YORUM SATIRIDIR VE TEK SATIRDA GEÇERLİDİR
    /*
        bu da 
        çok satırlı bir
        yorum yazma yöntemi
        bu yöntemi bazen hata ayıklama için kullanyoruz
    */
    // ECHO İLE EKRANA YAZDIRMA İŞLEMLERİ
    $degisken="AHMET";
    echo "Merhaba $degisken <br>"; // çift tırnak içine yazılan değişkenler tanınır
    echo 'Merhaba $degisken <br>'; // tek tırnakiçineyazılan değişenler tanınmaz
    echo "İstanbul'da Sonbahar mevsimi <br>"; // çift tırnak içinde tek tırnak sorunsuzca kullanlabilir
    echo 'İstanbul\'da yaz mevisimi <br>'; // tek tırnak içinde tek tırnak yazdrmak için önüne \ konmalıdır
    echo 'Oğlan Babasına "Seni Seviyorum" dedi <br>'; // tek tırnak içinde çift tırnak sorunsuz kullanılablilir
    echo "Değirmende \"Arpa\" da öğütülürmüş <br>"; // çift tırnak içinde çift tırnak önüne \ koyularak yazdrılır
    echo "Bu bir ters slaş işareti \\ <br>"; // ters slaş yazdırmak için önüne yine ters slaş koymalıyız
    echo ("Deneme");
    echo "Bu akaşam "."bütün meyhanelerini".' dolaştım '." İstanbul". ' dedi '.$degisken."<br>"; // birden fazla metni . ile birleştirebiliriz
    ?>
    <h1>BURAYA BİR HTML KODU EKLEDİM</h1>
    <?php
    echo "Bu sayfa ".$degisken." tarafından tasarlanmıştır";
    
    ?>
</body>
</html>