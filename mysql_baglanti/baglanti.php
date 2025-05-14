<?php
$sunucu = 'localhost';
$veritabani   = 'mehmet';
$kullanici = 'root';
$sifre = '';
$karakter_seti = 'utf8mb4';

$baglanti = "mysql:host=$sunucu;dbname=$veritabani;charset=$karakter_seti";

$secenekler = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // Hata durumunda istisna fırlat
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,       // Varsayılan veri çekme modu
    PDO::ATTR_EMULATE_PREPARES   => false,                  // Gerçek prepare kullanılmasını sağlar
];

try {
    $DB = new PDO($baglanti, $kullanici, $sifre, $secenekler);
    // echo "Bağlantı başarılı!";
	
} 

catch (PDOException $e) {
    echo "Bağlantı hatası: " . $e->getMessage();
}


?>