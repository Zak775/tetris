-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Апр 19 2021 г., 13:27
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `tetris`
--

-- --------------------------------------------------------

--
-- Структура таблицы `score`
--

CREATE TABLE `score` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `score`
--

INSERT INTO `score` (`id`, `user_id`, `count`) VALUES
(1, 1, 400),
(2, 2, 370),
(3, 3, 520),
(4, 4, 260),
(5, 5, 390),
(6, 6, 290),
(7, 7, 340),
(8, 8, 440),
(9, 9, 330),
(10, 10, 410),
(11, 11, 270);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Zak', 'lutskyi777@gmail.com', '1122'),
(2, 'Nick', 'nikolya@gmail.com', '2021'),
(3, 'Rolf', 'rolf@in.com', '1234'),
(4, 'John', 'john@in.com', '1111'),
(5, 'Ion', 'ion777@gmail.com', '7777'),
(6, 'Simon', 'semen_999@gmail.com', '9999'),
(7, 'Ed', 'ed-2000@gmail.com', '2000'),
(8, 'Alex', 'mike4321@mail.ru', '4321'),
(9, 'Stiv', 'stiven0000@in.com', '0000'),
(10, 'Jane', 'jane3333@yahoo.com', '3333'),
(11, 'Erick', 'erik9876@ukr.net', '9876');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `score`
--
ALTER TABLE `score`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `score`
--
ALTER TABLE `score`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
