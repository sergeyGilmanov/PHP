-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2018 г., 00:59
-- Версия сервера: 5.7.20
-- Версия PHP: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `shop`
--

-- --------------------------------------------------------

--
-- Структура таблицы `callback`
--

CREATE TABLE `callback` (
  `id_com` int(11) NOT NULL,
  `id` text NOT NULL,
  `callback` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `callback`
--

INSERT INTO `callback` (`id_com`, `id`, `callback`, `date`) VALUES
(64, 'admin', 'Клевый но дорогой!', '2018-11-15'),
(65, 'admin', '', '2018-11-15'),
(66, 'admin', '', '2018-11-15'),
(67, 'Sergey', '', '2018-11-16'),
(68, 'Sergey', '', '2018-11-16'),
(69, 'Sergey', '', '2018-11-16'),
(70, 'Sergey', '', '2018-11-16'),
(71, 'Sergey', '', '2018-11-16'),
(72, 'Sergey', '', '2018-11-16');

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id_prod` int(5) NOT NULL,
  `prod_name` text NOT NULL,
  `img_prod` text NOT NULL,
  `desc_prod` text NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id_prod`, `prod_name`, `img_prod`, `desc_prod`, `price`) VALUES
(1, 'iPhone 5', 'iph5.png/iph5_1.png/iph5_2.png/iph5_3.png', '\r\nЭкран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 25000),
(2, 'iPhone 5s', 'iph5_3.png/iph5_1.png/iph5_2.png/iph5.png', 'Экран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 30000),
(4, 'iPhone 6', 'iph6.png/iph6_1.png/iph6_2.png', 'Экран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 35000),
(5, 'iPhone 6s', 'iph6_1.png/iph6.png/iph6_2.png', 'Экран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 37200),
(6, 'iPhone 7', 'iph7.png/iph7_1.png/iph7_2.png/iph7s.png', 'Экран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 42500),
(7, 'iPhone 7 Plus', 'iph7_2.png/iph7_1.png/iph7.png/iph7s.png', 'Экран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 45000),
(8, 'iPhone 8 Plus', 'iph8s.png/iph8_2.png', 'Экран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 49800),
(9, 'iPhone X', 'iphX.png/iphX_1.png/iphX_2.png/iphX_3.png', 'Экран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 85000),
(10, 'iPhone XS', 'iphXS.png/iphXS_1.png/iphXS_2.png/iphXS_3.png', 'Экран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 101000),
(11, 'iPhone XR', 'iphXR.png/iphXR_1.png/iphXR_2.png/iphXR_3.png', 'Экран:!\r\nIPS Retina, 4.0\", 1136 × 640 px (326 ppi)!\r\nПроцессор:!\r\nApple A6 (1,1 — 1,3 ГГц; 32 нм; 32 бита; 2 ядра)!\r\nГрафический процессор:!\r\nPowerVR SGX543MP!\r\nОперативная память:!\r\n1 ГБ DRAM DDR2!\r\nВстроенная память:!\r\n16/32/64 ГБ!\r\nКамера:!\r\niSight 8 Мп; диафрагма f/2.4; LED-вспышка\r\nFull HD видео 1080p/30fps; фронтальная 720p/30fps!\r\nАккумулятор:!\r\nLi-ion, 1440 мА·ч!\r\nРазмер и вес:!\r\n123,8 мм х 58,6 мм x 7,6 мм/!\r\n112 г!', 65000);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` int(6) NOT NULL,
  `login` text,
  `email` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `login`, `email`, `password`) VALUES
(18, 'admin', 'admin@admin.home', '$2y$10$MSrlGUPc2nA1gls5O7vi8.xmYEQr/XLpLrWxQhEI8MrCn7FC.t2cO'),
(19, 'Sergey', 'mail@box.ru', '$2y$10$b2OVi41yxmXkRCbBmqWiauuXO9M25pxg1cAeJ.VK0rtR3VNZecqsC');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `callback`
--
ALTER TABLE `callback`
  ADD PRIMARY KEY (`id_com`);

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id_prod`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `callback`
--
ALTER TABLE `callback`
  MODIFY `id_com` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id_prod` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
