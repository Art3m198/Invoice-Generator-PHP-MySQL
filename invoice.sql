-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Окт 25 2020 г., 21:44
-- Версия сервера: 5.5.25
-- Версия PHP: 5.6.19

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `invoice`
--

-- --------------------------------------------------------

--
-- Структура таблицы `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` longtext,
  `country` longtext,
  `state` longtext,
  `city` longtext,
  `zip` longtext,
  `email` longtext,
  `phone` longtext,
  `address1` longtext,
  `address2` longtext,
  `product1` longtext,
  `quantity1` longtext,
  `cost1` longtext,
  `total1` longtext,
  `product2` longtext,
  `quantity2` longtext,
  `cost2` longtext,
  `total2` longtext,
  `product3` longtext,
  `quantity3` longtext,
  `cost3` longtext,
  `total3` longtext,
  `product4` longtext,
  `quantity4` longtext,
  `cost4` longtext,
  `total4` longtext,
  `product5` longtext,
  `quantity5` longtext,
  `cost5` longtext,
  `total5` longtext,
  `subtotal` longtext,
  `alltotal` longtext,
  `discount` int(50) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `signature` longtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Дамп данных таблицы `invoice`
--

INSERT INTO `invoice` (`id`, `name`, `country`, `state`, `city`, `zip`, `email`, `phone`, `address1`, `address2`, `product1`, `quantity1`, `cost1`, `total1`, `product2`, `quantity2`, `cost2`, `total2`, `product3`, `quantity3`, `cost3`, `total3`, `product4`, `quantity4`, `cost4`, `total4`, `product5`, `quantity5`, `cost5`, `total5`, `subtotal`, `alltotal`, `discount`, `date`, `signature`) VALUES
(13, 'Mike Jensen', 'USA', 'CA', 'Santa Clara', '95050', 'admin@admin.com', '91111111111', 'El Camino Real', '902', 'Phone', '10', '999', '9990', 'Computer', '2', '1300', '2600', 'TV', '3', '340', '1020', 'Cheese', '6', '8', '48', 'Milk', '4', '7', '28', '13686', '12317.4', 10, '2020-10-25', 'Admin#1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
