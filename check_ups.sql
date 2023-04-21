-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 21 2023 г., 19:37
-- Версия сервера: 8.0.31
-- Версия PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `check_ups`
--

-- --------------------------------------------------------

--
-- Структура таблицы `texts`
--

DROP TABLE IF EXISTS `texts`;
CREATE TABLE IF NOT EXISTS `texts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `extra` varchar(100) COLLATE utf8mb4_general_ci NOT NULL,
  `list` varchar(400) COLLATE utf8mb4_general_ci NOT NULL,
  `current_price` int NOT NULL,
  `old_price` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `texts`
--

INSERT INTO `texts` (`id`, `extra`, `list`, `current_price`, `old_price`) VALUES
(1, 'для мужчин', 'Гормональный скрининг; Тестостерон; Свободный тестостерон; Глобулин, связывающий половые гормоны', 2800, 3500),
(2, 'для мужчин\r\n\r\n', 'Гормональный скрининг; Тестостерон; Свободный тестостерон; Глобулин, связывающий половые гормоны', 2800, 3600),
(3, 'для мужчин', 'Гормональный скрининг; Тестостерон; Свободный тестостерон; Глобулин, связывающий половые гормоны', 2000, 3000),
(4, 'для мужчин', 'Гормональный скрининг; Тестостерон; Свободный тестостерон; Глобулин, связывающий половые гормоны', 2600, 4000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
