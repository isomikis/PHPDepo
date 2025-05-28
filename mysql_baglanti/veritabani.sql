-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 28 May 2025, 13:44:42
-- Sunucu sürümü: 10.4.21-MariaDB
-- PHP Sürümü: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `mehmet`
--
CREATE DATABASE IF NOT EXISTS `mehmet` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `mehmet`;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `calisanlar`
--

DROP TABLE IF EXISTS `calisanlar`;
CREATE TABLE IF NOT EXISTS `calisanlar` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) DEFAULT NULL,
  `soyadi` varchar(50) DEFAULT NULL,
  `cinsiyeti` varchar(10) DEFAULT NULL,
  `yasi` int(11) DEFAULT NULL,
  `maasi` double DEFAULT NULL,
  `gorevi` varchar(100) DEFAULT NULL,
  `departmani` varchar(100) DEFAULT NULL,
  `nufus_ili` varchar(50) DEFAULT NULL,
  `ise_giris_tarihi` date DEFAULT NULL,
  `medeni_durumu` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `calisanlar`
--

INSERT INTO `calisanlar` (`id`, `adi`, `soyadi`, `cinsiyeti`, `yasi`, `maasi`, `gorevi`, `departmani`, `nufus_ili`, `ise_giris_tarihi`, `medeni_durumu`) VALUES
(1, 'Ahmet', 'Yılmaz', 'Erkek', 34, 15313.0375, 'Yazılım Geliştirici', 'Bilgi Teknolojileri', 'İstanbul', '2018-04-15', 'Evli'),
(2, 'Ayşe', 'Demir', 'Kadın', 29, 9800.5, 'İnsan Kaynakları Uzmanı', 'İK', 'Ankara', '2020-09-01', 'Bekar'),
(3, 'Mehmet', 'Kaya', 'Erkek', 41, 17395.610600000004, 'Proje Yöneticisi', 'Ar-Ge', 'İzmir', '2016-06-20', 'Evli'),
(4, 'Zeynep', 'Çelik', 'Kadın', 26, 8700, 'Finans Analisti', 'Finans', 'Bursa', '2021-01-12', 'Bekar'),
(5, 'Mustafa', 'Şahin', 'Erkek', 38, 13475.473000000002, 'Satış Temsilcisi', 'Satış', 'Konya', '2017-03-10', 'Evli'),
(6, 'Elif', 'Aydın', 'Kadın', 32, 9600, 'Pazarlama Uzmanı', 'Pazarlama', 'Antalya', '2019-07-22', 'Evli'),
(7, 'Emre', 'Arslan', 'Erkek', 27, 8900.75, 'Grafik Tasarımcı', 'Tasarım', 'Adana', '2022-02-01', 'Bekar'),
(8, 'Fatma', 'Koç', 'Kadın', 45, 15000, 'Mali İşler Müdürü', 'Muhasebe', 'Gaziantep', '2015-11-05', 'Evli'),
(9, 'Burak', 'Yıldız', 'Erkek', 31, 11392.899900000002, 'Veri Analisti', 'Bilgi Teknolojileri', 'Eskişehir', '2020-10-17', 'Bekar'),
(10, 'Hülya', 'Öztürk', 'Kadın', 36, 10700, 'Satın Alma Uzmanı', 'Satın Alma', 'Kayseri', '2018-12-03', 'Evli'),
(11, 'Selim', 'Bozkurt', 'Erkek', 39, 16476.828350000003, 'Sistem Yöneticisi', 'BT', 'Mersin', '2017-08-18', 'Evli'),
(12, 'Merve', 'Kurt', 'Kadın', 28, 9500, 'Ürün Yöneticisi', 'Ürün Yönetimi', 'Samsun', '2021-05-10', 'Bekar'),
(13, 'Cem', 'Eren', 'Erkek', 33, 12372.9343, 'İş Geliştirme Uzmanı', 'Strateji', 'Denizli', '2019-09-26', 'Evli'),
(14, 'Nazlı', 'Güneş', 'Kadın', 30, 9200, 'Dijital Pazarlama Uzmanı', 'Pazarlama', 'Malatya', '2020-11-11', 'Bekar'),
(15, 'Oğuz', 'Kara', 'Erkek', 43, 17763.1235, 'Operasyon Müdürü', 'Operasyon', 'Erzurum', '2014-04-07', 'Evli'),
(16, 'Büşra', 'Acar', 'Kadın', 25, 8200, 'Müşteri Temsilcisi', 'Çağrı Merkezi', 'Trabzon', '2022-07-19', 'Bekar'),
(17, 'Tuna', 'Polat', 'Erkek', 29, 8800, 'Donanım Mühendisi', 'Ar-Ge', 'Kocaeli', '2021-03-02', 'Bekar'),
(18, 'Gül', 'Kılıç', 'Kadın', 37, 11100, 'Kalite Uzmanı', 'Kalite Kontrol', 'Manisa', '2017-10-25', 'Evli'),
(19, 'Can', 'Ersoy', 'Erkek', 35, 14700.516000000001, 'Mobil Uygulama Geliştirici', 'BT', 'Tekirdağ', '2018-01-30', 'Evli'),
(20, 'Yasemin', 'Uçar', 'Kadın', 31, 9400, 'İçerik Editörü', 'İletişim', 'Aydın', '2020-06-06', 'Bekar'),
(21, 'Volkan', 'Duran', 'Erkek', 40, 16170.567600000002, 'Takım Lideri', 'Satış', 'Çanakkale', '2016-02-14', 'Evli'),
(22, 'İrem', 'Sarı', 'Kadın', 26, 8600, 'Sosyal Medya Uzmanı', 'Pazarlama', 'Yalova', '2022-03-21', 'Bekar'),
(23, 'Serkan', 'Yavuz', 'Erkek', 42, 17150.602000000003, 'Lojistik Müdürü', 'Lojistik', 'Sivas', '2015-09-09', 'Evli'),
(24, 'Melis', 'Taş', 'Kadın', 33, 9800, 'Hukuk Danışmanı', 'Hukuk', 'Kütahya', '2019-08-08', 'Evli'),
(25, 'Onur', 'Toprak', 'Erkek', 28, 9100, 'Web Geliştirici', 'BT', 'Karabük', '2021-01-04', 'Bekar'),
(26, 'Gamze', 'Deniz', 'Kadın', 35, 10200, 'Eğitim Uzmanı', 'Eğitim', 'Uşak', '2018-06-12', 'Evli'),
(27, 'Hakan', 'Özdemir', 'Erkek', 37, 13842.985900000001, 'Test Mühendisi', 'Kalite', 'Afyonkarahisar', '2017-07-29', 'Evli'),
(28, 'Derya', 'Çoban', 'Kadın', 29, 8900, 'İletişim Uzmanı', 'Kurumsal İletişim', 'Nevşehir', '2020-12-01', 'Bekar'),
(29, 'Kerem', 'Sezer', 'Erkek', 31, 11760.412800000002, 'Veri Tabanı Yöneticisi', 'BT', 'Isparta', '2019-04-05', 'Bekar'),
(30, 'Simge', 'Bayrak', 'Kadın', 34, 10000, 'Marka Yöneticisi', 'Pazarlama', 'Zonguldak', '2018-11-09', 'Evli');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ogrenci`
--

DROP TABLE IF EXISTS `ogrenci`;
CREATE TABLE IF NOT EXISTS `ogrenci` (
  `sirano` int(11) NOT NULL AUTO_INCREMENT,
  `adi` varchar(50) NOT NULL,
  `soyadi` varchar(50) NOT NULL,
  `sinifi` varchar(10) NOT NULL,
  `numarasi` int(11) NOT NULL,
  PRIMARY KEY (`sirano`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `ogrenci`
--

INSERT INTO `ogrenci` (`sirano`, `adi`, `soyadi`, `sinifi`, `numarasi`) VALUES
(1, 'Selim', 'GÜLER', '11C', 444),
(2, 'Selim', 'dsadasd', 'dsa', 3434),
(6, 'ismail', 'ÇETİN', '111', 323),
(40, 'dasdsa', 'dsdsa', '43534d', 3443),
(41, '775fghgf', 'hfgfhfghfgh', 'ghfgh', 777),
(42, 'yyyy', 'yyyyyy', 'yyyyy', 445);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personeller`
--

DROP TABLE IF EXISTS `personeller`;
CREATE TABLE IF NOT EXISTS `personeller` (
  `tckimlik` bigint(20) NOT NULL,
  `adi` varchar(50) DEFAULT NULL,
  `soyadi` varchar(50) DEFAULT NULL,
  `yasi` int(11) DEFAULT NULL,
  `adres` varchar(100) DEFAULT NULL,
  `meslek` varchar(50) DEFAULT NULL,
  `maas` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`tckimlik`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Tablo döküm verisi `personeller`
--

INSERT INTO `personeller` (`tckimlik`, `adi`, `soyadi`, `yasi`, `adres`, `meslek`, `maas`) VALUES
(1234598732, 'Necmettin', 'GÜNEŞ', 28, 'Bağlarbaşı mahalklesi Bursa', 'Diş Teknisyeni', '16345.27'),
(12345678901, 'Selim', 'GÜR', 37, 'Çamlıca mahallesi Bursa', 'Yazar', '17350.00'),
(15680956002, 'serkan', 'taş', 46, 'Ankara', 'öğretmen', '2200.00'),
(21545706994, 'seda', 'kart', 34, 'Rize', 'işçi', '2450.00'),
(23547897646, 'adem', 'aslan', 34, 'Kocaeli', 'doktor', '4800.00'),
(25467897642, 'ahmet', 'aslan', 23, 'Eskişehir', 'doktor', '4500.00'),
(25632543458, 'erkan', 'nil', 21, 'Samsun', 'muhasebeci', '2200.00'),
(25634568297, 'mehmet', 'sert', 26, 'Bayburt', 'hakim', '3100.00'),
(34564356298, 'mehtap', 'ay', 34, 'Adana', 'memur', '2600.00'),
(34565443210, 'muhammet', 'aydin', 35, 'Rize', 'doktor', '5000.00'),
(34565467820, 'tulin', 'versay', 20, 'Aydın', 'öğretmen', '2300.00'),
(34565766798, 'yagmur', 'kurt', 25, 'Samsun', 'katip', '1650.00'),
(34654359732, 'esra', 'arslan', 32, 'Mersin', 'müdür', '3200.00'),
(34654363200, 'eda', 'ay', 25, 'Adana', 'savaş', '2600.00'),
(35634545932, 'zeynep', 'keskin', 19, 'Kırşehir', 'hemşire', '2000.00'),
(40976840234, 'çağrı', 'çınpolat', 26, 'İstanbul', 'profesör', '5400.00'),
(75694930374, 'musa', 'erva', 28, 'Muğla', 'öğretmen', '2300.00'),
(85604235427, 'esma', 'ankul', 22, 'Trabzon', 'memur', '1750.00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
