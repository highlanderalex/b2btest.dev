-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 23 2018 г., 09:10
-- Версия сервера: 5.6.34
-- Версия PHP: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `b2btest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bad_domain`
--

CREATE TABLE `bad_domain` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `bad_domain`
--

INSERT INTO `bad_domain` (`id`, `name`) VALUES
(1, 'test.com'),
(6, 'laravel-land.loc');

-- --------------------------------------------------------

--
-- Структура таблицы `click`
--

CREATE TABLE `click` (
  `id` int(10) UNSIGNED NOT NULL,
  `ua` text NOT NULL,
  `ip` varchar(50) NOT NULL,
  `ref` varchar(200) NOT NULL,
  `param1` varchar(100) NOT NULL,
  `param2` varchar(100) NOT NULL,
  `error` int(11) NOT NULL DEFAULT '0',
  `bad_domain` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `click`
--

INSERT INTO `click` (`id`, `ua`, `ip`, `ref`, `param1`, `param2`, `error`, `bad_domain`) VALUES
(1, 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '127.0.0.1', 'http://laravel-land.loc/', '1', 'test', 0, 0),
(18, 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '127.0.0.1', 'http://laravel-land.loc/', '25', 'test', 5, 1),
(19, 'Mozilla/5.0 (Windows NT 6.0) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/49.0.2623.112 Safari/537.36', '127.0.0.1', 'http://laravel-land.loc/', 'd\'art', 'test', 0, 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bad_domain`
--
ALTER TABLE `bad_domain`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `click`
--
ALTER TABLE `click`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bad_domain`
--
ALTER TABLE `bad_domain`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT для таблицы `click`
--
ALTER TABLE `click`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
