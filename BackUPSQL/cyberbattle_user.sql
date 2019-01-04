-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 04 2019 г., 15:28
-- Версия сервера: 5.6.38
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `cyberbattle`
--

-- --------------------------------------------------------

--
-- Структура таблицы `cyberbattle_user`
--

CREATE TABLE `cyberbattle_user` (
  `id` int(11) NOT NULL,
  `nickname` text NOT NULL,
  `login` text NOT NULL,
  `password` text NOT NULL,
  `e-mail` text NOT NULL,
  `date-registration` date NOT NULL,
  `subscription` tinyint(4) NOT NULL,
  `name` text NOT NULL COMMENT 'Имя',
  `surname` text NOT NULL COMMENT 'Фамилия',
  `patronymic` text NOT NULL COMMENT 'Отчество',
  `img` text NOT NULL COMMENT 'url аватарки',
  `telephone` text NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cyberbattle_user`
--

INSERT INTO `cyberbattle_user` (`id`, `nickname`, `login`, `password`, `e-mail`, `date-registration`, `subscription`, `name`, `surname`, `patronymic`, `img`, `telephone`, `city`) VALUES
(1, 'maestro', 'maestro', 'lucki0902', 'libertydreamstudia@gmail.com', '2018-12-31', 5, 'Евгений', 'Голопотылюк', 'Андреевич', 'id-1.jpg', '+380506468467', 'Каховка');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cyberbattle_user`
--
ALTER TABLE `cyberbattle_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cyberbattle_user`
--
ALTER TABLE `cyberbattle_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
