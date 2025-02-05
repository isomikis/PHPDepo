<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP BEŞİNCİ SAYFAMIZ</title>
</head>
<body>
    
    <?php
     /* OPERATÖRLER */
     /* MATEMATİKSEL OPERATÖRLER
    OPERATÖR ADI        OPERATÖR        ÖRNEK
    Toplama                 +           $a+3;
    Çıkarma                 -           $b-$c;
    Çarpma                  *           $a*$b;
    Bölme                   /           22/$c;
    Mod Alma                %           $a%2 ($a değişkeninin 2 ile bölümünden kalan)
    
      ARTTIRMA EKSİLTME BİRLİKTE ATAMA OPERATÖRLERİ
    OPERATÖR ADI        OPERATÖR        ÖRNEK
    Bir ekleme             ++           $a++; $a=$a+1 anlamına gelir $a değerini 1 arttırır
    Bir Çıkarma            --           $b--;
    Üzerine Toplama        +=           $d+=10; $d değerini 10 arttırır
    Üzerinden çıkarma      -=           $c-=5; $c değerini 5 azaltır
    Üzerine çarpma         *=           $a*=3; $a değerini 3 katına çıkartır
    Üzerinden bölme        /=           $c/=2; $c değerini yarısna eşitler

        KARŞILAŞTIRMA OPERATÖRLERİ
    Küçükse                 <           $a<0;
    Büyükse                 >           $a>$b;
    Küçük veya Eşitse       <=          $d<=18;
    Büyük veya Eşitse       >=          $yas>=18;
    Eşit Değilse            !=          $sifre!="deneme";

        MANTIKSAL OPERATÖRLER
    Veya                || ya da OR     $a<0 || $a>100; 
    Ve                  && ya da AND    $b>10 && $b<20;
    Değil               !               !is_numeric($a); $a değişkeni saylsal bir veri tipi değilse

    */
    error_reporting(0); // sayfadaki hiçbir hatayı gösterme
    $a=4;
    $b=6;
    $c=10;
    $d=2.2;
    $ad="İsmail1";
    $soyad="3Çetin";

     echo $a+$b."<br>"; //10 yazacak
     echo $a++; echo "<br>"; // 4 yazacak
     echo $a."<br>"; // 5 yazacak
     echo --$c."<br>"; // 9 yazacak
     echo $b+=20; echo "<br>"; // 26 yazacak
     echo $d--."<br>"; // 2.2 yazacak
     echo $d."<br>"; // 1.2 yazacak
     $d*=10;
     echo $d."<br>"; // 2 yazacak
     $c+=$a*5;
     echo $c."<br>";// 34 yazacak
    $sonuc1=$ad+4;
    echo $sonuc1."<br>"; // hata vericek
    $sonuc2=$soyad+10; 
    echo $sonuc2; // hata verecek ama 13 değerini gösterecek

    ?>
</body>
</html>