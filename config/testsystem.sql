-- phpMyAdmin SQL Dump
-- version 4.4.15.5
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 03 2018 г., 08:03
-- Версия сервера: 5.7.11
-- Версия PHP: 7.0.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `testsystem`
--

-- --------------------------------------------------------

--
-- Структура таблицы `rezultat`
--

CREATE TABLE IF NOT EXISTS `rezultat` (
  `id` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `id_testa` int(11) NOT NULL,
  `rezultat` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `create_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rezultat`
--

INSERT INTO `rezultat` (`id`, `user`, `id_testa`, `rezultat`, `max`, `create_at`) VALUES
(1, 1, 7, 6, 15, 1522723975),
(2, 1, 7, 11, 15, 1522724042),
(3, 1, 4, 0, 50, 1522730932),
(4, 1, 4, 50, 50, 1522730945);

-- --------------------------------------------------------

--
-- Структура таблицы `rubrici`
--

CREATE TABLE IF NOT EXISTS `rubrici` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `rubrici`
--

INSERT INTO `rubrici` (`id`, `name`, `status`) VALUES
(1, 'Рубрика 1', 1),
(2, 'Рубрика2', 1),
(3, 'Рубрика4', 1),
(4, 'Самая новая рубрика', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `testname`
--

CREATE TABLE IF NOT EXISTS `testname` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `rubrica` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `testname`
--

INSERT INTO `testname` (`id`, `name`, `rubrica`) VALUES
(1, 'Биология', 2),
(4, 'Самый интересный тест', 3),
(7, 'Тест с рубрикой', 1);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `parol` varchar(225) NOT NULL,
  `role` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fio` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `parol`, `role`, `email`, `fio`) VALUES
(1, 'admin', '123456', 'admin', 'fazanis@mail.ru', 'admin'),
(2, 'user', '123456', 'registr', 'fazanis1@mail.ru', 'Кравчук'),
(4, 'user2', '123456', 'registr', 'fazanis2@mail.ru', 'Петров'),
(5, 'user3', 'Кравчук', 'registr', 'fazanis3@mail.ru', 'Сидоров'),
(7, 'user15', '123456', 'registr', 'faz@mail.ru', 'Петренко');

-- --------------------------------------------------------

--
-- Структура таблицы `voprosi`
--

CREATE TABLE IF NOT EXISTS `voprosi` (
  `id` int(11) NOT NULL,
  `id_testa` int(11) NOT NULL,
  `vopros` varchar(255) NOT NULL,
  `otveti` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `voprosi`
--

INSERT INTO `voprosi` (`id`, `id_testa`, `vopros`, `otveti`) VALUES
(1, 7, 'Первый вопрос', '{"да":"1","нет":"5","незнаю":"0","1234134":"1"}'),
(3, 7, 'Самостоятельный вопрос', '{"да":"1","нет":"5","незнаю":"0"}'),
(4, 7, 'Новый воперос', '{"новый ответ":"1","неправильный ответ":"0","лучший ответ":"5"}'),
(5, 4, 'Проверочный тест', '{"не тот ответ":"0","Тот ответ":"50"}');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `rezultat`
--
ALTER TABLE `rezultat`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `rubrici`
--
ALTER TABLE `rubrici`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `testname`
--
ALTER TABLE `testname`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login` (`login`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Индексы таблицы `voprosi`
--
ALTER TABLE `voprosi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `rezultat`
--
ALTER TABLE `rezultat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `rubrici`
--
ALTER TABLE `rubrici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT для таблицы `testname`
--
ALTER TABLE `testname`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT для таблицы `voprosi`
--
ALTER TABLE `voprosi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
