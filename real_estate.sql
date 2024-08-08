-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 05 May 2024, 20:51:23
-- Sunucu sürümü: 10.4.28-MariaDB
-- PHP Sürümü: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `real_estate`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `branches`
--

CREATE TABLE `branches` (
  `branch_id` int(11) NOT NULL,
  `branch_name` varchar(200) NOT NULL,
  `branch_owner` varchar(200) NOT NULL,
  `branch_address` varchar(500) NOT NULL,
  `branch_phone` varchar(100) NOT NULL,
  `branch_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `branches`
--

INSERT INTO `branches` (`branch_id`, `branch_name`, `branch_owner`, `branch_address`, `branch_phone`, `branch_email`) VALUES
(3, 'Merkez', 'Batuhan Basar', 'Antalya/Kepez', '0539 838 6310', 'basar@example.com'),
(4, 'Alanya Merkez', 'Batuhan Basar', 'Antalya/Alanya', '0539 838 6310', 'basaralanya@example.com');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personnel`
--

CREATE TABLE `personnel` (
  `personnel_id` int(11) NOT NULL,
  `branch_id` int(11) NOT NULL,
  `personnel_name` varchar(200) NOT NULL,
  `personnel_surname` varchar(200) NOT NULL,
  `personnel_role` varchar(100) NOT NULL,
  `personnel_password` varchar(200) NOT NULL,
  `personnel_gmail` varchar(200) NOT NULL,
  `personnel_phone` varchar(200) NOT NULL,
  `personnel_address` varchar(500) NOT NULL,
  `personnel_job` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `personnel`
--

INSERT INTO `personnel` (`personnel_id`, `branch_id`, `personnel_name`, `personnel_surname`, `personnel_role`, `personnel_password`, `personnel_gmail`, `personnel_phone`, `personnel_address`, `personnel_job`) VALUES
(4, 3, 'Bugra Batuhan', ' Basar', 'Personel', '202cb962ac59075b964b07152d234b70', 'basar@example.com', '0539 838 6310', 'Istanbul Sultanbeyli', 'Satış Temsilcisi');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `property_attributes`
--

CREATE TABLE `property_attributes` (
  `property_id` int(11) NOT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `personnel_id` int(11) DEFAULT NULL,
  `property_name` varchar(200) NOT NULL,
  `property_province` varchar(200) NOT NULL,
  `property_district` varchar(200) NOT NULL,
  `property_neighbourhood` varchar(200) DEFAULT NULL,
  `property_address_link` varchar(400) NOT NULL,
  `property_address_code` varchar(100) NOT NULL,
  `property_sales_price` int(10) NOT NULL,
  `property_rental_price` int(10) DEFAULT NULL,
  `property_brief_info` varchar(200) NOT NULL,
  `property_detailed_info` varchar(500) NOT NULL,
  `property_1_features` varchar(400) NOT NULL,
  `property_2_features` varchar(400) NOT NULL,
  `property_3_features` varchar(400) NOT NULL,
  `property_4_features` varchar(400) NOT NULL,
  `property_5_features` varchar(400) NOT NULL,
  `property_6_features` varchar(400) NOT NULL,
  `property_size` varchar(100) DEFAULT NULL,
  `property_bedroom_count` varchar(100) DEFAULT NULL,
  `property_bathroom_count` varchar(100) DEFAULT NULL,
  `property_livingroom_count` varchar(100) DEFAULT NULL,
  `property_room_size_description` varchar(500) DEFAULT NULL,
  `property_indoor_room_description` varchar(500) NOT NULL,
  `property_outdoor_room_description` varchar(500) NOT NULL,
  `property_status` varchar(100) NOT NULL,
  `property_type` varchar(200) NOT NULL,
  `currentDateTime` varchar(200) NOT NULL,
  `property_publicy` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `property_attributes`
--

INSERT INTO `property_attributes` (`property_id`, `branch_id`, `personnel_id`, `property_name`, `property_province`, `property_district`, `property_neighbourhood`, `property_address_link`, `property_address_code`, `property_sales_price`, `property_rental_price`, `property_brief_info`, `property_detailed_info`, `property_1_features`, `property_2_features`, `property_3_features`, `property_4_features`, `property_5_features`, `property_6_features`, `property_size`, `property_bedroom_count`, `property_bathroom_count`, `property_livingroom_count`, `property_room_size_description`, `property_indoor_room_description`, `property_outdoor_room_description`, `property_status`, `property_type`, `currentDateTime`, `property_publicy`) VALUES
(8, 1, 1, 'Serene Sanctuary of the Aegean', 'Muğla', 'Bodrum', 'Yalıkavak Mahallesi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6614.10053229899!2d27.286855161431767!3d37.102194244179664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14be7169c4132667%3A0xf1b67a46a8db65b6!2zWWFsxLFrYXZhaywgQm9kcnVtL011xJ9sYQ!5e0!3m2!1str!2str!4v1714932715157!5m2!1str!2str', '48330', 3500000, 15, 'A luxurious and modern villa with stunning views.', 'Located in Bodrum Yalıkavak, this villa offers a peaceful lifestyle surrounded by nature, with 5 bedrooms and a spacious garden providing an excellent living space.', 'Sea View', 'Private Pool', 'Security Cameras', 'Modern Design', 'Large Garden', 'Terrace', '350', '5', '6', '2', 'Provides a comfortable living space with spacious and modern interior design.', 'Each room is meticulously designed with details and comfortable furniture.', 'With its spacious and well-maintained garden, it offers a private and peaceful living experience.', 'Sale', 'Villa', '05 Mayıs 2024 21:16', '1'),
(9, 1, 1, ' Green Haven of Antalya', 'Antalya', 'Kemer', 'Çamyuva Mahallesi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6408.957857759025!2d30.561506419563873!3d36.56667500582977!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14c3b65a4992e5e1%3A0x9a12735e2df6b6cf!2s%C3%87amyuva%2C%2007990%20Kemer%2FAntalya!5e0!3m2!1str!2str!4v1714933211727!5m2!1str!2str', '07980', 2800000, 12000, 'A promise of luxurious and serene living surrounded by nature', 'Located in one of Antalya\'s most popular districts, this villa stands out with its private pool and stylish design. With 4 bedrooms and an open terrace, it offers a comfortable lifestyle.', 'Nature View', 'Private Pool', 'Spa Area', 'Modern Interior Design', 'Spacious Terrace', 'Open Parking', '300', '4', '5', '1', 'Provides a comfortable living space with modern and spacious interior design.', 'Each room offers a combination of comfort and elegance with carefully selected details.', 'Surrounded by greenery, its well-maintained garden offers a tranquil living environment.', 'Sale', 'Duplex', '05 Mayıs 2024 21:22', '1'),
(10, 1, 1, 'Prime Location in Istanbul', 'İstanbul', 'Beykoz', 'Çubuklu Mahallesi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6012.9469862614615!2d29.081631370106386!3d41.102349069455556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caca4de071f713%3A0x7a68c5302b3c0f44!2zw4d1YnVrbHUsIDM0ODA1IEJleWtvei_EsHN0YW5idWw!5e0!3m2!1str!2str!4v1714933417287!5m2!1str!2str', '34820', 6200000, 25000, 'Urban living with a touch of nature, unlocking the doors to a prestigious lifestyle.', 'Situated in the heart of Istanbul, this villa offers privileged comfort with its Bosphorus view and spacious living areas. With 6 bedrooms and luxurious interior design, it stands out.', 'Bosphorus View', 'Private Garden', 'Security System', 'Spacious Interior Design', 'Hammam', 'Fitness Room', '600', '6', '7', '2', 'Provides a luxurious living space with its spacious and grand interior design.', 'Each room is adorned with special details and comfortable furniture for a luxurious living experience.', 'With its meticulously arranged garden, it offers a tranquil living environment surrounded by nature.', 'Rent', 'Triplex', '05 Mayıs 2024 21:25', '1'),
(11, 1, 1, 'Hidden Gem with Sea View in Izmir', 'İzmir', 'Çeşme', 'Alaçatı Mahallesi', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d25054.129920774474!2d26.348931307976027!3d38.28491127780191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bb78dfaf0d56d9%3A0x29d825d486962be3!2zQWxhw6dhdMSxLCDDh2XFn21lL8Swem1pcg!5e0!3m2!1str!2str!4v1714933570475!5m2!1str!2str', '35930', 4500000, 18000, 'An exceptional villa blending Alaçatı\'s historic ambiance with panoramic sea views.', ' Located in Çeşme\'s gem, Alaçatı, this villa boasts the magnificent view of the Aegean Sea and modern design. With 5 bedrooms and a private pool, it offers a delightful living experience.', 'Sea View', 'Private Pool', 'Fireplace', 'Modern Design', 'Security Cameras', 'Spacious Terrace', '400', '5', '6', '1', 'Offers a comfortable living space with its modern interior design and spacious living areas.', 'Each room is adorned with special details and comfortable furniture for a luxurious living experience.', 'With its well-maintained garden and spacious terrace, it offers a tranquil living environment with sea views.', 'Rent', 'Villa', '05 Mayıs 2024 21:27', '1');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `property_photos`
--

CREATE TABLE `property_photos` (
  `property_photo_id` int(11) NOT NULL,
  `property_id` int(11) NOT NULL,
  `property_main_photo` varchar(200) NOT NULL,
  `property_1_promo_video` varchar(500) NOT NULL,
  `property_2_promo_photo` varchar(200) NOT NULL,
  `property_attribute_photo` varchar(200) NOT NULL,
  `property_1_photos` varchar(300) DEFAULT NULL,
  `property_2_photos` varchar(300) DEFAULT NULL,
  `property_3_photos` varchar(300) DEFAULT NULL,
  `property_4_photos` varchar(300) DEFAULT NULL,
  `property_5_photos` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Tablo döküm verisi `property_photos`
--

INSERT INTO `property_photos` (`property_photo_id`, `property_id`, `property_main_photo`, `property_1_promo_video`, `property_2_promo_photo`, `property_attribute_photo`, `property_1_photos`, `property_2_photos`, `property_3_photos`, `property_4_photos`, `property_5_photos`) VALUES
(7, 7, 'property_photos/testFoto.jpg', 'property_photos/testFoto.jpg', 'property_photos/testFoto.jpg', 'property_photos/testFoto.jpg', 'property_photos/testFoto.jpg', 'property_photos/testFoto.jpg', 'property_photos/testFoto.jpg', 'property_photos/testFoto.jpg', 'property_photos/testFoto.jpg'),
(8, 8, 'property_photos/home1_410x264.png', 'property_photos/home1_1920x1080.png', 'property_photos/home1_160x110.png', 'property_photos/home1_1050x358.png', 'property_photos/home1_1290x358.png', 'property_photos/home1_410x475_v1.png', 'property_photos/home1_410x475_v2.png', 'property_photos/home1_410x475_v3.png', 'property_photos/home1_790x375.png'),
(9, 9, 'property_photos/home2_410x264.png', 'property_photos/home2_1920x1080.png', 'property_photos/home2_160x110.png', 'property_photos/home2_1050x358.png', 'property_photos/home2_1290x358.png', 'property_photos/home2_410x475_v1.png', 'property_photos/home2_410x475_v1.png', 'property_photos/home2_410x475_v2.png', 'property_photos/home2_790x375.png'),
(10, 10, 'property_photos/home3_410x264.png', 'property_photos/home3_1920x1080.png', 'property_photos/home3_160x110.png', 'property_photos/home3_1050x358.png', 'property_photos/home3_1290x358.png', 'property_photos/home3_410x475_v1.png', 'property_photos/home3_410x475_v2.png', 'property_photos/home3_410x475_v3.png', 'property_photos/home3_790x375.png'),
(11, 11, 'property_photos/home4_410x264.png', 'property_photos/home4_1920x1080.png', 'property_photos/home4_160x110.png', 'property_photos/home4_1050x358.png', 'property_photos/home4_1290x358.png', 'property_photos/home4_410x475_v1.png', 'property_photos/home4_410x475_v3.png', 'property_photos/home4_790x375.png', 'property_photos/home4_790x375.png');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Tablo için indeksler `personnel`
--
ALTER TABLE `personnel`
  ADD PRIMARY KEY (`personnel_id`);

--
-- Tablo için indeksler `property_attributes`
--
ALTER TABLE `property_attributes`
  ADD PRIMARY KEY (`property_id`);

--
-- Tablo için indeksler `property_photos`
--
ALTER TABLE `property_photos`
  ADD PRIMARY KEY (`property_photo_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `branches`
--
ALTER TABLE `branches`
  MODIFY `branch_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `personnel`
--
ALTER TABLE `personnel`
  MODIFY `personnel_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Tablo için AUTO_INCREMENT değeri `property_attributes`
--
ALTER TABLE `property_attributes`
  MODIFY `property_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Tablo için AUTO_INCREMENT değeri `property_photos`
--
ALTER TABLE `property_photos`
  MODIFY `property_photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
