-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 24 Ara 2024, 13:14:22
-- Sunucu sürümü: 10.4.32-MariaDB
-- PHP Sürümü: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `tikla_git2`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kisisel_bilgiler`
--

CREATE TABLE `kisisel_bilgiler` (
  `id` int(11) NOT NULL,
  `isim` varchar(50) NOT NULL,
  `say_isim` varchar(50) NOT NULL,
  `cinsiyet` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `kullanicilar`
--

CREATE TABLE `kullanicilar` (
  `id` int(11) NOT NULL,
  `kullanici_adi` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `parola` varchar(150) NOT NULL,
  `kayit_tarihi` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `kullanicilar`
--

INSERT INTO `kullanicilar` (`id`, `kullanici_adi`, `email`, `parola`, `kayit_tarihi`) VALUES
(31, 'zehra', 'nur@nur.com', '$2y$10$YJ9B.93vbBVN29q0CVmZt.SkF/Zb/1M5szpUtrx2/lV6969gFUGfy', '2024-12-23 13:24:39');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `yayınlanan_yol`
--

CREATE TABLE `yayınlanan_yol` (
  `id` int(11) NOT NULL,
  `kal_il` varchar(20) NOT NULL,
  `kal_ilce` varchar(20) NOT NULL,
  `var_il` text NOT NULL,
  `var_ilce` varchar(20) NOT NULL,
  `plaka` varchar(10) NOT NULL,
  `tarih` date NOT NULL,
  `adres` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `fiyat` int(11) NOT NULL,
  `yolcu_say` varchar(5) NOT NULL,
  `eklenme_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Tablo döküm verisi `yayınlanan_yol`
--

INSERT INTO `yayınlanan_yol` (`id`, `kal_il`, `kal_ilce`, `var_il`, `var_ilce`, `plaka`, `tarih`, `adres`, `email`, `fiyat`, `yolcu_say`, `eklenme_date`) VALUES
(2, 'DENİZLİ', 'MERKEZEFENDİ', 'ANTALYA', 'ELMALI', 'aa 11 aaaa', '2024-12-24', 'pamukkale üniversitesi', 'nur@gmail.com', 100, 'Two', '2024-12-23 15:02:28'),
(3, 'BARTIN', 'MERKEZ', 'KONYA', 'DERBENT', 'bb 22 aaaa', '2024-12-30', 'pamukkale üniversitesi', 'deneme@gmail.com', 250, 'Three', '2024-12-23 23:09:18'),
(4, 'DENİZLİ', 'ACIPAYAM', 'ANTALYA', 'AKSEKİ', 'bb 22 aaaa', '2024-12-19', 'pamukkale üniversitesi', 'nur@gmail.com', 222, 'Two', '2024-12-24 13:32:01'),
(5, 'BARTIN', 'AMASRA', 'KONYA', 'AHIRLI', 'aa 11 aaaa', '2025-01-01', 'pamukkale üniversitesi', 'y@y.com', 250, 'Three', '2024-12-24 13:39:59'),
(6, 'BARTIN', 'KURUCAŞİLE', 'KONYA', 'DEREBUCAK', 'bb 22 aaaa', '2024-12-28', 'pamukkale üniversitesi', 'deneme@gmail.com', 100, 'One', '2024-12-24 13:40:37'),
(7, 'BARTIN', 'KURUCAŞİLE', 'KONYA', 'DEREBUCAK', 'bb 22 aaaa', '2024-12-28', 'pamukkale üniversitesi', 'deneme@gmail.com', 100, 'One', '2024-12-24 13:45:37'),
(8, 'AMASYA', 'MERZİFON', 'ANTALYA', 'FİNİKE', 'bb 22 aaaa', '2024-12-21', 'pamukkale üniversitesi', 'y@y.com', 250, 'Two', '2024-12-24 15:00:40');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `kisisel_bilgiler`
--
ALTER TABLE `kisisel_bilgiler`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `kullanicilar`
--
ALTER TABLE `kullanicilar`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kullanici_adi` (`kullanici_adi`);

--
-- Tablo için indeksler `yayınlanan_yol`
--
ALTER TABLE `yayınlanan_yol`
  ADD PRIMARY KEY (`id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `kisisel_bilgiler`
--
ALTER TABLE `kisisel_bilgiler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `kullanicilar`
--
ALTER TABLE `kullanicilar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Tablo için AUTO_INCREMENT değeri `yayınlanan_yol`
--
ALTER TABLE `yayınlanan_yol`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
