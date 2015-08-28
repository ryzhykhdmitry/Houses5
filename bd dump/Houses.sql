-- phpMyAdmin SQL Dump
-- version 4.2.10
-- http://www.phpmyadmin.net
--
-- Хост: localhost:8889
-- Время создания: Авг 28 2015 г., 20:27
-- Версия сервера: 5.5.38
-- Версия PHP: 5.6.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `Houses`
--

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_01_29_131714_create_users_table', 1),
('2015_03_11_140332_create_projects_table', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `projects`
--

CREATE TABLE `projects` (
`id` int(10) unsigned NOT NULL,
  `title` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `levels` float NOT NULL,
  `building_area` float NOT NULL,
  `lot_dem` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `building_height` float NOT NULL,
  `roof_angle` int(11) NOT NULL,
  `garage` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inhabitants` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `projects`
--

INSERT INTO `projects` (`id`, `title`, `levels`, `building_area`, `lot_dem`, `building_height`, `roof_angle`, `garage`, `inhabitants`) VALUES
(1, 'As', 1, 125.8, '20x25', 7.3, 25, 'нет', '4'),
(2, 'Asteroid', 1, 132.8, '20x25', 6, 25, 'нет', '4'),
(3, 'Atuter', 1, 94.1, '21x20', 6.96, 27, 'нет', '4'),
(4, 'Beatia', 1, 107.7, '19x20', 5.02, 22, 'есть', '3'),
(5, 'Fantazja', 1, 175.5, '23x25', 6.41, 30, 'есть', '4'),
(6, 'Fiesta', 1, 232, '29x28', 7, 30, 'есть', '4'),
(7, 'Fraza dr', 1, 165.9, '31.1x24', 5.25, 30, 'есть', '4'),
(8, 'Fraza silka', 1, 225, '27.2x22', 5.89, 30, 'есть', '4'),
(9, 'Grafit', 1, 112, '22.5x20', 6.85, 30, 'нет', '4'),
(10, 'Grot', 1, 118.7, '20.3x18.5', 7.18, 33, 'нет', '3'),
(11, 'Grot 2', 1, 151, '24.5x18.5', 7.18, 33, 'есть', '3'),
(12, 'Grot 3', 1, 175.8, '26.3x18.5', 7.18, 33, 'есть', '3'),
(13, 'Imbir', 1, 68.1, '16.5x17.5', 6.1, 30, 'нет', '2'),
(14, 'Caprys', 1, 253, '24.3x30', 7.45, 35, 'есть', '3'),
(15, 'Kiwi 3', 1, 200, '', 6.5, 30, 'есть', '4'),
(16, 'Lara', 1, 134.9, '18x22.9', 6, 23, 'нет', '4'),
(17, 'Lara', 1, 163.2, '24х25', 6.71, 23, 'есть', '4'),
(18, 'Neptun', 1, 166.5, '21.4x25.4', 6.7, 30, 'есть', '4'),
(19, 'Tercja', 1, 205.8, '26.8x22', 7.98, 35, 'нет', '4'),
(20, 'Zoska', 1, 194.4, '25.9x1.6', 6.77, 25, 'есть', '4'),
(21, 'Aga', 1.5, 190, '18.9x28.1', 7.11, 25, 'есть', '5'),
(22, 'Agat', 1.5, 79.1, '16.8x21.2', 8.6, 45, 'нет', '4'),
(23, 'Agava', 1.5, 98.5, '15.85х21.55', 8.59, 43, 'нет', '4'),
(24, 'Akcent', 1.5, 158.2, '21.7x21.5', 8.04, 38, 'нет', '6'),
(25, 'Alfa', 1.5, 184.6, '26.8x20.4', 8.98, 38, 'есть', '4'),
(26, 'Alicja', 1.5, 76, '18.1x16.8', 8.2, 40, 'нет', '4'),
(27, 'Aloes', 1.5, 136.2, '20.35x19.1', 8.93, 42, 'нет', '5'),
(28, 'Amarant', 1.5, 123.9, '17.05x22.15', 7.1, 30, 'нет', '4'),
(29, 'Amarylis', 1.5, 171.6, '17.2x24.5', 8.63, 40, 'есть', '4'),
(30, 'Amber', 1.5, 158.1, '23.3x19.4', 8.47, 40, 'есть', '4'),
(31, 'Amber 3', 1.5, 232.9, '25.34x19.25', 8.49, 45, 'есть', '6'),
(32, 'Amulet', 1.5, 154.7, '24x19', 8.8, 40, 'есть', '4'),
(33, 'Arnika', 1.5, 148.2, '20x19.65', 8, 40, 'есть', '4'),
(34, 'Bachus', 1.5, 238.6, '25.83x22.24', 9.05, 40, 'есть', '6'),
(35, 'Bachus', 1.5, 250, '26.2x22.1', 8.2, 40, 'есть', '6'),
(36, 'Batuta', 1.5, 151.5, '22.3x18.5', 8.3, 45, 'нет', '4'),
(37, 'Blusczc', 1.5, 139.4, '20.6x21', 9.21, 45, 'есть', '6'),
(38, 'Boguska', 1.5, 165.1, '21.19x20.71', 8.3, 35, 'есть', '5'),
(39, 'Ewka', 1.5, 154.8, '22.6x21.9', 7.65, 44, 'есть', '5'),
(40, 'Onyks', 1.5, 233.2, '29x21', 8.52, 30, 'есть', '3'),
(41, 'Alabaster', 2, 207.5, '19.32x26.75', 8.68, 21, 'есть', '4'),
(42, 'Aplause', 2, 237.4, '19.35x28', 8.8, 20, 'есть', '6'),
(43, 'Apollo', 2, 302, '35x27.4', 7.17, 0, 'есть', '6'),
(44, 'Arizona', 2, 204, '24.7x26', 7.98, 21, 'есть', '4'),
(45, 'Arkadia', 2, 393.5, '31.9x36.9', 7.7, 2, 'есть', '5'),
(46, 'Atena', 2, 385.4, '39.5x26.3', 6.4, 2, 'есть', '4'),
(47, 'Bryg', 2, 177.4, '18.2x24.4', 6.85, 2, 'есть', '4'),
(48, 'Burzstyn', 2, 328, '30.3x29.5', 8.12, 17, 'есть', '4'),
(49, 'Cyprys 4', 2, 192.1, '25.7x18.2', 9.4, 30, 'есть', '5'),
(50, 'Diuna', 2, 225.9, '21.4x30.2', 7.9, 2, 'есть', '5'),
(51, 'Horus', 2, 205.2, '21.55x30.15', 7.34, 3, 'есть', '4'),
(52, 'Kobalt', 2, 161.7, '18.9x24', 7.7, 22, 'есть', '4'),
(53, 'Luna', 2, 234.5, '23.5x24.8', 7.38, 2, 'есть', '4'),
(54, 'Oaza', 2, 248, '29.2x26.5', 7.9, 2, 'есть', '4'),
(55, 'Pinia', 2, 148.1, '20.3x20.4', 8.18, 21, 'есть', '5'),
(56, 'Terra', 2, 229.6, '32.1x21.3', 8.13, 20, 'есть', '4'),
(57, 'Wena', 2, 188.4, '24.44x19.37', 8.22, 20, 'есть', '5'),
(58, 'Liber', 2, 218.7, '22.6x30.6', 7.43, 3, 'есть', '4'),
(59, 'Legenda 2', 2, 283.8, '30x21.5', 7.88, 20, 'есть', '6'),
(60, 'Hydra', 2, 344.6, '37x23.6', 8.06, 20, 'есть', '8'),
(61, 'Decimia', 1, 110, '26x18', 6.7, 30, 'есть', '3');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
`id` int(10) unsigned NOT NULL,
  `facebook_id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `twitter_id` int(50) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `active` int(11) NOT NULL,
  `permissions` int(11) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `password_temp` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `activation_code` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `facebook_id`, `twitter_id`, `email`, `active`, `permissions`, `username`, `password`, `password_temp`, `activation_code`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0', 0, '123456@mail.ru', 1, 0, 'Dmitry', '$2y$10$2Z/ORKfaK.UF5YYrmSC9mOIOD4mR2ndXQSu2uZNBP.d4sSFXUVuS2', '', '', 'rguCCFwrohRaA32Ahonc1yB9UcsndQAcsyrAJ4lzrUbjeJ66na96j9g0UXlM', '0000-00-00 00:00:00', '2015-08-19 09:20:40'),
(14, '0', 0, 'ryzhykh.dmitry@gmail.com', 1, 0, 'Ryzhykh Dmitry', '$2y$10$GfklumGG4D7SFXnJgoTpV.93yrrET4zuNOFTO2QyO.JFo8n5p5Pny', '', '', NULL, '2015-08-19 09:27:25', '2015-08-19 09:27:55'),
(16, '0', 534079168, NULL, 1, 0, 'Dmitry Ryzhykh', '', '', '', 'Zx8YMDr6aMdw73lPFHgtnXCcSpf55Homjgc0kqorle7Ggz8CoceWQZMUYLj0', '2015-08-20 17:12:55', '2015-08-22 09:31:30'),
(35, '936591309734558', 0, '1rosenrot1@mail.ru', 1, 0, 'Dmitry Ryzhykh', '', '', '', 'Rj3boMbcT9f64mNUhczD5FLPXhGpqDb2yOGanrXQXNqmm1QRQkSdu9ObCZHY', '2015-08-22 09:46:47', '2015-08-22 09:49:58');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `projects`
--
ALTER TABLE `projects`
 ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `projects`
--
ALTER TABLE `projects`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=62;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
