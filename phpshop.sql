-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Час створення: Чрв 04 2018 р., 18:57
-- Версія сервера: 5.7.19
-- Версія PHP: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `phpshop`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sort_order` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `category`
--

INSERT INTO `category` (`id`, `name`, `sort_order`, `status`, `img`) VALUES
(13, 'Ноутбуки', 1, 1, '33.jpg'),
(14, 'Планшети', 2, 1, '34.png'),
(15, 'Монітори', 3, 1, '35.jpg'),
(16, 'Клавіатури', 4, 1, '36.png');

-- --------------------------------------------------------

--
-- Структура таблиці `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL,
  `code` int(11) NOT NULL,
  `price` float NOT NULL,
  `availability` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `is_new` int(11) NOT NULL DEFAULT '0',
  `is_recommended` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `product`
--

INSERT INTO `product` (`id`, `name`, `category_id`, `code`, `price`, `availability`, `brand`, `description`, `is_new`, `is_recommended`, `status`) VALUES
(33, 'Ноутбук Acer Aspire E3-112-C65X', 13, 2019487, 325, 1, 'Acer', 'Экран 11.6\'\' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Linpus / 1.29 кг / серебристый', 0, 1, 1),
(34, 'Ноутбук Asus X200MA (X200MA-KX315D)', 13, 1839707, 395, 1, 'Asus', 'Экран 11.6\" (1366x768) HD LED, глянцевый / Intel Pentium N3530 (2.16 - 2.58 ГГц) / RAM 4 ГБ / HDD 750 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / синий', 0, 0, 1),
(35, 'Ноутбук HP Stream 11-d050nr', 13, 2343847, 305, 0, 'Hewlett Packard', 'Экран 11.6” (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / eMMC 32 ГБ / Intel HD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 8.1 + MS Office 365 / 1.28 кг / синий', 1, 1, 1),
(36, 'Ноутбук Asus X200MA White ', 13, 2028027, 270, 1, 'Asus', 'Экран 11.6\" (1366x768) HD LED, глянцевый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Bluetooth 4.0 / Wi-Fi / LAN / веб-камера / без ОС / 1.24 кг / белый', 0, 1, 1),
(38, 'Ноутбук Acer TravelMate TMB115', 13, 1953212, 275, 1, 'Acer', 'Экран 11.6\'\' (1366x768) HD LED, матовый / Intel Celeron N2840 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / Linpus / 1.32 кг / черный', 0, 0, 1),
(39, 'Ноутбук Lenovo Flex 10', 13, 1602042, 370, 0, 'Lenovo', 'Экран 10.1\" (1366x768) HD LED, сенсорный, глянцевый / Intel Celeron N2830 (2.16 ГГц) / RAM 2 ГБ / HDD 500 ГБ / Intel HD Graphics / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 8.1 / 1.2 кг / черный', 0, 0, 1),
(40, 'Ноутбук Asus X751MA', 13, 2028367, 430, 1, 'Asus', 'Экран 17.3\" (1600х900) HD+ LED, глянцевый / Intel Pentium N3540 (2.16 - 2.66 ГГц) / RAM 4 ГБ / HDD 1 ТБ / Intel HD Graphics / DVD Super Multi / LAN / Wi-Fi / Bluetooth 4.0 / веб-камера / DOS / 2.6 кг / белый', 0, 1, 1),
(44, 'Монитор 23\" Dell E2314H Black', 15, 355025, 175, 1, 'Dell', 'С расширением Full HD Вы сможете рассмотреть мельчайшие детали. Dell E2314H предоставит Вам резкое и четкое изображение, с которым любая работа будет в удовольствие. Full HD 1920 x 1080 при 60 Гц разрешение (макс.)', 0, 0, 1),
(48, 'Asus', 14, 123654, 120, 1, 'Asus', 'Екран 10.1\" (1280x800) ємнісний MultiTouch / Intel Atom Z3745 (1.33 ГГц) / RAM 1 ГБ / 16 ГБ вбудованої пам\'яті + microSD / Wi-Fi 802.11 a/b/g/n / Bluetooth 4.0 / головна камера 2 Мп + фронтальна 0.3 Мп / GPS + GLONASS / ОС Android 4.4 / 550 г / чорний + док-станція (QWERTY-клавіатура, тачпад, USB 2.0)', 0, 1, 1),
(49, 'Планшет Asus Transformer Book', 14, 12354, 250, 1, 'Asus', 'Екран 10.1\" IPS (1280x800) MultiTouch / Intel Atom x5-Z8350 (1.92 ГГц) / RAM 2 ГБ / 32 ГБ вбудованої пам\'яті + microSD / Wi-Fi 802.11a/c / Bluetooth 4.1 / основна камера 2 Мп / ОС Windows 10 Home 64bit / 580 г / сірий / док-станція', 0, 1, 1),
(50, 'ASUS Transformer Book T100TAM', 14, 126545, 220, 1, 'Asus', 'Екран 10.1\" (1280x800) ємнісний Multi-Touch / Intel Atom Z2560 (1.6 ГГц) / RAM 1 ГБ / флеш пам\'ять 16 ГБ + підтримання карт пам\'яті MicroSD / Wi-Fi 802.11 b/g/n / Bluetooth 4.0 / головна камера 2 Мп + фронтальна 0.3 Мп / GPS + GLONASS / ОС Android 4.4 / 550 г / чорний', 0, 1, 1),
(51, 'Lenovo Tab 3 Plus', 14, 45621, 230, 1, 'Lenovo', 'Екран 10\" IPS (1920x1200) MultiTouch / MediaTek MT8161 (1.3 ГГц) / RAM 2 ГБ / 32 ГБ вбудованої пам\'яті + microSD / 3G / LTE / Wi-Fi / Bluetooth 4.0 / основна камера 8 Мп, фронтальна - 5 Мп / GPS / ГЛОНАСС / Android 6.0 (Marshmallow) / 509 г / чорний', 1, 1, 1),
(52, 'Pixus Vision 10.1', 14, 23456, 135, 1, 'Pixus', 'Екран 10.1\" IPS (1920x1200) MultiTouch / MediaTek MT6753 (1.3 ГГц) / RAM 3 ГБ / 32 ГБ вбудованої пам\'яті + microSD / 3G / LTE / Wi-Fi / Bluetooth 4.0 / основна камера 5 Мп, фронтальна - 2 Мп / GPS / A-GPS / підтримка 2 SIM-карток / Android 7.0 (Nougat) / 450 г / чорний', 1, 1, 1),
(53, 'eSTAR GO', 14, 56484, 95, 1, 'eSTAR', 'Екран 7\" IPS (1024x600) ємнісний, MultiTouch / MediaTek MT8321 (1.3 ГГц) / RAM 1 ГБ / 8 ГБ вбудованої пам\'яті + microSD / 3G / Wi-Fi / Bluetooth / основна камера 2 Мп, фронтальна - 0.3 Мп / GPS / Android 6.0 (Marshmallow) / 268 г / чорний', 1, 1, 1),
(54, 'Huawei MediaPad T3', 14, 15458, 220, 1, 'Huawei', 'Экран 9.6\" IPS (1280x800) MultiTouch / Qualcomm Snapdragon 425 (1.4 ГГц) / RAM 2 ГБ / 16 ГБ встроенной памяти + microSD / 3G / LTE / Wi-Fi / Bluetooth / основная камера 5 Мп, фронтальная 2 Мп / GPS / Android 7.0 (Nougat) / 460 г / серый', 1, 1, 1),
(55, 'Impression ImPAD W1102', 14, 36526, 260, 1, 'Impression', 'Екран 11.6\" IPS (1920x1080) ємнісний, MultiTouch / Intel Atom x5-Z8300 (1.44 ГГц) / RAM 2 ГБ / 32 ГБ вбудованої пам\'яті + microSD / Wi-Fi / Bluetooth / основна камера 2 Мп, фронтальна - 2 Мп / Windows 10 / темно-синій', 1, 1, 1),
(56, 'Samsung Curved C27F396F', 15, 65234, 310, 1, 'Samsung', '\r\n\r\n    Тип матриці: VA\r\n    Інтерфейси: VGA, HDMI\r\n    Час реакції матриці: 4 мс\r\n    Яскравість дисплея: 250 кд/м²\r\n    Контрастність дисплея: 3000:1\r\n    Особливості: Вигнутий екран\r\n', 1, 1, 1),
(57, 'LG 24MP68VQ-P', 15, 65984, 350, 1, 'LG', '\r\n\r\n    Тип матриці: IPS IPS\r\n    Інтерфейси: DVI, VGA, HDMI\r\n    Час реакції матриці: 5 мс\r\n    Яскравість дисплея: 250 кд/м²\r\n    Контрастність дисплея: 1000:1\r\n    Особливості: Безрамковий (Сinema screen)\r\n', 1, 1, 1),
(58, 'LG 27MP68VQ-H', 15, 65325, 310, 1, 'LG', '\r\n\r\n    Тип матриці: IPS IPS\r\n    Інтерфейси: DVI, VGA, HDMI\r\n    Час реакції матриці: 5 мс (GtG)\r\n    Яскравість дисплея: 250 кд/м²\r\n    Контрастність дисплея: 1000:1 (типове)\r\n    Особливості: Безрамковий (Сinema screen), Flicker-Free\r\n', 1, 1, 1),
(59, 'Samsung S22F350F', 15, 32658, 280, 1, 'Samsung', '\r\n\r\n    Тип матриці: TN\r\n    Інтерфейси: VGA, HDMI\r\n    Час реакції матриці: 5 мс\r\n    Яскравість дисплея: 200 кд/м²\r\n    Контрастність дисплея: 1000:1\r\n    Особливості: Flicker-Free\r\n', 1, 1, 1),
(60, 'Dell UltraSharp U2717D', 15, 98654, 310, 1, 'Dell', ' Тип матриці: IPS IPS\r\nІнтерфейси: HDMI, miniDisplayPort, USB, 2 x DisplayPort\r\nЧас реакції матриці: 8 мс (від сірого до сірого) у звичайному режимі\r\n6 мс (від сірого до сірого) у прискореному режимі\r\nЯскравість дисплея: 350 кд/м²\r\n', 1, 1, 1),
(61, 'Samsung S24D300HS', 15, 78456, 260, 1, 'Samsung', '\r\n\r\n    Тип матриці: TN\r\n    Інтерфейси: VGA, HDMI\r\n    Час реакції матриці: 2 мс\r\n    Яскравість дисплея: 250 кд/м²\r\n    Контрастність дисплея: Статична: 1 000:1\r\n    Динамічна: Mega ', 1, 1, 1),
(62, 'Philips 227E6EDSD', 15, 45985, 245, 1, 'Philips', ' Тип матриці: IPS-ADS\r\nІнтерфейси: DVI, VGA, HDMI\r\nЧас реакції матриці: 5 мс (сірий до сірого)\r\nЯскравість дисплея: 250 кд/м²\r\nКонтрастність дисплея: 20 000 000:1 (SmartContrast)', 1, 1, 1),
(63, 'Samsung S24E390H', 15, 59862, 250, 1, 'Samsung', ' Тип матриці: PLS\r\nІнтерфейси: VGA, HDMI\r\nЧас реакції матриці: 4 мс (GTG)\r\nЯскравість дисплея: 250 кд/м²\r\nКонтрастність дисплея: 1 000:1, 700:1 (мін)', 1, 1, 1),
(64, 'Samsung S22E390HSO', 15, 78651, 190, 1, 'Samsung', ' Тип матриці: PLS\r\nІнтерфейси: VGA, HDMI\r\nЧас реакції матриці: 4 мс\r\nЯскравість дисплея: 250 кд/м²\r\nКонтрастність дисплея: Статична: 1000:1\r\nДинамічна: Mega', 1, 1, 1),
(65, 'Dell S2418HN', 15, 13654, 320, 1, 'Dell', ' Тип матриці: IPS IPS\r\nІнтерфейси: VGA, HDMI\r\nЧас реакції матриці: 6 мс\r\nЯскравість дисплея: 250 кд/м²\r\nКонтрастність дисплея: 1000:1 (номінал)\r\n8 000 000:1 (динамічна)', 1, 1, 1),
(67, 'Logitech K270 Black', 16, 56984, 110, 1, 'Logitech', '\r\n\r\n    Кількість кнопок: 111\r\n    Інтерфейс: Бездротовий\r\n    Тип упаковки: BOX\r\n    Підсвітка клавіш: Немає\r\n    Сумісність з ОС: Microsoft Windows\r\n', 1, 1, 1),
(69, 'Rapoo E9270p 5GHz', 16, 36548, 60, 1, 'Rapoo', 'Кількість кнопок: 112 (включно з 8 гарячими/8 програмованими кнопками (сенсорна панель) Інтерфейс: Бездротовий Тип упаковки: BOX Підсвітка клавіш: Немає Сумісність з ОС: Microsoft Windows, Mac OS ', 1, 1, 1),
(70, 'A4Tech KV-300H USB', 16, 85695, 50, 1, 'Tech', '\r\n\r\n    Інтерфейс: USB\r\n    Тип упаковки: BOX\r\n    Підсвітка клавіш: Немає\r\n    Особливості: Вбудований USB-порт\r\n    Сумісність з ОС: Microsoft Windows\r\n', 1, 1, 1),
(71, 'Logitech K280e', 16, 78465, 20, 1, 'Logitech', '\r\n\r\n    Кількість кнопок: 103\r\n    Інтерфейс: USB\r\n    Тип упаковки: BOX\r\n    Підсвітка клавіш: Немає\r\n    Особливості: Підставка під зап\'ястя\r\n    Сумісність з ОС: Microsoft Windows\r\n    Докладніше: https://hard.rozetka.com.ua/ua/keyboards/c80171/\r\n\r\n\r\n\r\n    Кількість кнопок: 103\r\n    Інтерфейс: USB\r\n    Тип упаковки: BOX\r\n    Підсвітка клавіш: Немає\r\n    Особливості: Підставка під зап\'ястя\r\n    Сумісність з ОС: Microsoft Windows\r\n', 1, 1, 1),
(72, 'Real-El 8700 Backlit', 16, 12685, 30, 1, 'Real', '\r\n\r\n    Кількість кнопок: Стандартні: 104\r\n    Інтерфейс: USB\r\n    Тип упаковки: Retail\r\n    Підсвітка клавіш: Є\r\n    Сумісність з ОС: Microsoft Windows\r\n', 1, 1, 1),
(73, 'Logitech G213 Prodigy', 16, 78542, 70, 1, 'Logitech', '\r\n\r\n    Кількість кнопок: 113\r\n    Інтерфейс: USB\r\n    Тип упаковки: BOX\r\n    Підсвітка клавіш: Є\r\n    Особливості: Підставка під зап\'ястя\r\n    Сумісність з ОС: Microsoft Windows\r\n', 1, 1, 1),
(74, 'Aula Adjudication USB Black', 16, 98564, 10, 1, 'Aula', '\r\n\r\n    Інтерфейс: USB\r\n    Підсвітка клавіш: Немає\r\n    Сумісність з ОС: Microsoft Windows\r\n', 1, 1, 1),
(75, 'Logitech G105 USB Black', 16, 59865, 90, 1, 'Logitech', '\r\n\r\n    Інтерфейс: USB\r\n    Тип упаковки: BOX\r\n    Підсвітка клавіш: Є\r\n    Сумісність з ОС: Microsoft Windows\r\n', 1, 1, 1),
(76, 'Ноутбук Lenovo ThinkPad P71', 13, 65489, 1800, 1, 'Lenovo', 'Екран 17.3\" IPS (3840x2160) Ultra HD 4K, матовий / Intel Xeon E3-1535M v6 (3.1 - 4.2 ГГц) / RAM 32 ГБ / SSD 1 ТБ / nVidia Quadro P5000, 16 ГБ / DVD+/-RW / LAN / Wi-Fi / Bluetooth / веб-камера / Windows 10 Pro 64bit / 3.84 кг / чорний', 1, 1, 1),
(78, 'Dream Machines Clevo X1080-17', 13, 45875, 3200, 1, 'Dream', 'Екран 17.3\" IPS (1920x1080) Full HD, матовий / Intel Core i7-8700K (3.7 - 4.7 ГГц) / RAM 16 ГБ / SSD 500 ГБ / nVidia GeForce GTX 1080, 8 ГБ / без ОД / Wi-Fi / Bluetooth / веб-камера / DOS / 3.9 кг / чорний', 1, 1, 1),
(79, 'HP ZBook 17 G4', 13, 78457, 2800, 1, 'HP', 'Екран 17.3\" (1920x1080) Full HD LED, глянсовий з антивідблисковим покриттям / Intel Core i7-7700HQ (2.8 - 3.8 ГГц) / RAM 16 ГБ / SSD 256 ГБ + HDD 1 ТБ / nVidia Quadro M2200, 4 ГБ / без ОД / LAN / Wi-Fi / Bluetooth / веб-камера / Windows 10 Pro / 3.14 кг / чорний', 1, 1, 1),
(80, 'Apple MacBook Pro', 13, 98654, 2900, 1, 'Apple', 'Экран 15.4\" IPS (2880x1800) Retina, глянцевый / Intel Core i7 (2.9 - 3.8 ГГц) / RAM 16 ГБ / SSD 1 ТБ / AMD Radeon Pro 460 / без ОД / Wi-Fi / Bluetooth / веб-камера / macOS Sierra / 1.83 кг / космический серый', 1, 1, 1),
(81, 'Lenovo ThinkPad X1 Yoga 3rd', 13, 14569, 2700, 1, 'Lenovo', 'Екран 14\" IPS (2560x1440) HDR WQHD, Multi-Touch, глянсовий / Intel Core i7-8550U (1.8 - 4.0 ГГц) / RAM 16 ГБ / SSD 512 ГБ / Intel UHD Graphics 620 / без ОД / Wi-Fi / Bluetooth / 3G / 4G / веб-камера / Windows 10 Pro 64bit / 1.4 кг / чорний / стилус\r\n', 1, 1, 1),
(82, 'Apple A1706 MacBook Pro', 13, 12569, 2750, 1, 'Apple', 'Екран 13.3\" IPS (2560x1600) Retina, глянсовий / Intel Core i5 (3.1 - 3.5 ГГц) / RAM 8 ГБ / SSD 512 ГБ / Intel Iris Graphics 650 / без ОД / Wi-Fi / Bluetooth / веб-камера / macOS Sierra / 1.37 кг / космічний сірий\r\n', 1, 1, 1),
(83, 'Lenovo Yoga 920 Glass', 13, 63258, 2200, 1, 'Lenovo', 'Екран 13.9\" IPS (3840х2160) Ultra HD 4K, Multi-touch, глянсовий з антивідблисковим покриттям / Intel Core i7-8550U (1.8 - 4.0 ГГц) / RAM 16 ГБ / SSD 1 ТБ / Intel UHD 620 / без ОД / Wi-Fi / Bluetooth / веб-камера / Windows 10 Pro / 1.37 кг / сріблястий', 1, 1, 1);

-- --------------------------------------------------------

--
-- Структура таблиці `product_order`
--

CREATE TABLE `product_order` (
  `id` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(255) NOT NULL,
  `user_comment` text NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `products` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `product_order`
--

INSERT INTO `product_order` (`id`, `user_name`, `user_phone`, `user_comment`, `user_id`, `date`, `products`, `status`) VALUES
(47, 'new user', '38065423158', 'Дякую за товар', 8, '2018-06-04 12:05:21', '{\"46\":4,\"45\":3,\"44\":5,\"43\":4,\"42\":3,\"41\":3}', 1),
(48, 'admin updated', '38065423158', 'Дякую за товар', 8, '2018-06-04 12:05:21', '{\"43\":1,\"42\":1,\"41\":2,\"49\":4,\"48\":2,\"47\":2,\"46\":2}', 1),
(49, 'admin updated', '38065423158', 'Дякую за товар', 8, '2018-06-04 12:05:21', '{\"44\":5,\"42\":2,\"41\":1}', 1),
(53, 'admin', '3806254514546', 'оразфоів', 9, '2018-06-04 12:21:19', '{\"45\":1,\"44\":1}', 1),
(54, 'admin updated', '325646465658', 'Cool', 9, '2018-06-04 15:33:14', '{\"64\":1,\"63\":1,\"83\":1,\"73\":1}', 1),
(51, 'admin', '38065423158', 'Дякую за товар', 9, '2018-06-04 12:05:21', '{\"43\":1,\"41\":1}', 1),
(52, 'admin', '3298451641', 'немає', 9, '2018-06-04 12:20:56', '{\"46\":1,\"45\":1,\"44\":1}', 1);

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `role`) VALUES
(6, 'Коля', 'nicofofdn177@gmafil.comfg', '55555555', 'admin'),
(7, 'Коля', 'qwert@gmail.com', '00000000', ''),
(8, 'rjjj', 'nio@gnial.xon', '22222222', ''),
(9, 'admin', 'admin@admin.com', '11111111', 'admin');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `product_order`
--
ALTER TABLE `product_order`
  ADD PRIMARY KEY (`id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT для таблиці `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;
--
-- AUTO_INCREMENT для таблиці `product_order`
--
ALTER TABLE `product_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
