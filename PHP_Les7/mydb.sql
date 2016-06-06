-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Час створення: Трв 25 2016 р., 10:53
-- Версія сервера: 5.7.11
-- Версія PHP: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База даних: `mydb`
--

-- --------------------------------------------------------

--
-- Структура таблиці `category`
--

CREATE TABLE `category` (
  `idCategory` int(11) NOT NULL,
  `CategoryName` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `category_post`
--

CREATE TABLE `category_post` (
  `idCategory_Post` int(11) NOT NULL,
  `Category_Id` int(11) NOT NULL,
  `Post_Id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `page`
--

CREATE TABLE `page` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Link` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `page`
--

INSERT INTO `page` (`Id`, `Name`, `Link`) VALUES
(1, 'About', 'http://127.0.0.1:8080/PHP_Les7/about.php'),
(2, 'Contact', 'http://127.0.0.1:8080/PHP_Les7/contact.php'),
(3, 'Home', 'http://127.0.0.1:8080/PHP_Les7/home.php');

-- --------------------------------------------------------

--
-- Структура таблиці `post`
--

CREATE TABLE `post` (
  `idPost` int(11) NOT NULL,
  `PostName` varchar(45) NOT NULL,
  `User_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблиці `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `UserName` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп даних таблиці `user`
--

INSERT INTO `user` (`id`, `UserName`, `Password`) VALUES
(1, 'Stas', '123'),
(2, 'Vlad', '321'),
(3, 'Google', 'google1'),
(4, 'gg', 'wp'),
(5, 'Leonardo', 'qwerty'),
(6, '', '');

--
-- Індекси збережених таблиць
--

--
-- Індекси таблиці `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idCategory`),
  ADD UNIQUE KEY `idCategory_UNIQUE` (`idCategory`);

--
-- Індекси таблиці `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`idCategory_Post`),
  ADD UNIQUE KEY `idCategory_Post_UNIQUE` (`idCategory_Post`),
  ADD KEY `Category_Id_idx` (`Category_Id`),
  ADD KEY `Post_Id_idx` (`Post_Id`);

--
-- Індекси таблиці `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `Id` (`Id`);

--
-- Індекси таблиці `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`idPost`),
  ADD UNIQUE KEY `idPost_UNIQUE` (`idPost`),
  ADD KEY `User_id_idx` (`User_id`);

--
-- Індекси таблиці `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `UserName_UNIQUE` (`UserName`);

--
-- AUTO_INCREMENT для збережених таблиць
--

--
-- AUTO_INCREMENT для таблиці `category`
--
ALTER TABLE `category`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `category_post`
--
ALTER TABLE `category_post`
  MODIFY `idCategory_Post` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `page`
--
ALTER TABLE `page`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT для таблиці `post`
--
ALTER TABLE `post`
  MODIFY `idPost` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT для таблиці `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Обмеження зовнішнього ключа збережених таблиць
--

--
-- Обмеження зовнішнього ключа таблиці `category_post`
--
ALTER TABLE `category_post`
  ADD CONSTRAINT `Category_Id` FOREIGN KEY (`Category_Id`) REFERENCES `category` (`idCategory`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Post_Id` FOREIGN KEY (`Post_Id`) REFERENCES `post` (`idPost`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Обмеження зовнішнього ключа таблиці `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `User_id` FOREIGN KEY (`User_id`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
