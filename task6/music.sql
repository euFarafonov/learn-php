-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1
-- Время создания: Июн 11 2018 г., 15:05
-- Версия сервера: 5.5.25
-- Версия PHP: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `music`
--

-- --------------------------------------------------------

--
-- Структура таблицы `band`
--

CREATE TABLE IF NOT EXISTS `band` (
  `band_id` tinyint(10) unsigned NOT NULL AUTO_INCREMENT,
  `band_name` varchar(50) NOT NULL,
  PRIMARY KEY (`band_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Дамп данных таблицы `band`
--

INSERT INTO `band` (`band_id`, `band_name`) VALUES
(1, 'Scorpions'),
(2, 'Ivanushki');

-- --------------------------------------------------------

--
-- Структура таблицы `band_genre`
--

CREATE TABLE IF NOT EXISTS `band_genre` (
  `band_id` tinyint(3) unsigned NOT NULL,
  `genre_id` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `band_genre`
--

INSERT INTO `band_genre` (`band_id`, `genre_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `category_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `category_name` varchar(50) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Дамп данных таблицы `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(1, 'Stringed'),
(2, 'Drums'),
(3, 'Wind'),
(4, 'Keyboard');

-- --------------------------------------------------------

--
-- Структура таблицы `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `genre_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `genre_name` varchar(50) NOT NULL,
  PRIMARY KEY (`genre_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Дамп данных таблицы `genre`
--

INSERT INTO `genre` (`genre_id`, `genre_name`) VALUES
(1, 'Rock'),
(2, 'Pop'),
(3, 'Jazz');

-- --------------------------------------------------------

--
-- Структура таблицы `instrument`
--

CREATE TABLE IF NOT EXISTS `instrument` (
  `instrument_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `instrument_name` varchar(50) NOT NULL,
  PRIMARY KEY (`instrument_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Дамп данных таблицы `instrument`
--

INSERT INTO `instrument` (`instrument_id`, `instrument_name`) VALUES
(1, 'Guitar'),
(2, 'Drum'),
(3, 'Trumpet'),
(4, 'Balalaika'),
(5, 'Piano'),
(6, 'Ionica'),
(7, 'Bus guitar'),
(8, 'Violin'),
(9, 'Flute');

-- --------------------------------------------------------

--
-- Структура таблицы `instrument_category`
--

CREATE TABLE IF NOT EXISTS `instrument_category` (
  `instrument_id` tinyint(3) unsigned NOT NULL,
  `category_id` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `instrument_category`
--

INSERT INTO `instrument_category` (`instrument_id`, `category_id`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 1),
(5, 4),
(6, 4),
(7, 1),
(8, 1),
(9, 3);

-- --------------------------------------------------------

--
-- Структура таблицы `musician`
--

CREATE TABLE IF NOT EXISTS `musician` (
  `musician_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `musician_name` varchar(50) NOT NULL,
  PRIMARY KEY (`musician_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Дамп данных таблицы `musician`
--

INSERT INTO `musician` (`musician_id`, `musician_name`) VALUES
(1, 'Musician 1'),
(2, 'Musician 2'),
(3, 'Musician 3'),
(4, 'Musician 4'),
(5, 'Musician 5'),
(6, 'Musician 6'),
(7, 'Musician 7'),
(8, 'Musician 8'),
(9, 'Musician 9'),
(10, 'Musician 10');

-- --------------------------------------------------------

--
-- Структура таблицы `musician_band`
--

CREATE TABLE IF NOT EXISTS `musician_band` (
  `musician_id` tinyint(3) unsigned NOT NULL,
  `band_id` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `musician_band`
--

INSERT INTO `musician_band` (`musician_id`, `band_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 2),
(7, 2),
(8, 2),
(9, 2),
(10, 2);

-- --------------------------------------------------------

--
-- Структура таблицы `musician_instrument`
--

CREATE TABLE IF NOT EXISTS `musician_instrument` (
  `musician_id` tinyint(3) unsigned NOT NULL,
  `instrument_id` tinyint(3) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `musician_instrument`
--

INSERT INTO `musician_instrument` (`musician_id`, `instrument_id`) VALUES
(1, 1),
(2, 1),
(3, 2),
(4, 5),
(5, 7),
(6, 1),
(7, 2),
(8, 1),
(9, 8),
(10, 9);

-- --------------------------------------------------------

--
-- Структура таблицы `musician_musictype`
--

CREATE TABLE IF NOT EXISTS `musician_musictype` (
  `musician_id` tinyint(4) NOT NULL,
  `musictype_id` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `musician_musictype`
--

INSERT INTO `musician_musictype` (`musician_id`, `musictype_id`) VALUES
(1, 2),
(2, 2),
(3, 3),
(4, 4),
(5, 2),
(6, 2),
(7, 3),
(8, 2),
(9, 2),
(10, 1);

-- --------------------------------------------------------

--
-- Структура таблицы `musictype`
--

CREATE TABLE IF NOT EXISTS `musictype` (
  `musictype_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `musictype_name` varchar(50) NOT NULL,
  PRIMARY KEY (`musictype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `musictype`
--

INSERT INTO `musictype` (`musictype_id`, `musictype_name`) VALUES
(1, 'trumpeter'),
(2, 'guitar player'),
(3, 'drummer'),
(4, 'keyboardist');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
