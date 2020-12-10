-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1:3306
-- Létrehozás ideje: 2020. Nov 30. 15:14
-- Kiszolgáló verziója: 8.0.21
-- PHP verzió: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Adatbázis: `hoonigan`
--

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_hungarian_ci NOT NULL,
  `msg` varchar(150) COLLATE utf8_hungarian_ci NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `messages`
--

INSERT INTO `messages` (`time`, `name`, `email`, `msg`) VALUES
('2020-11-30 14:39:33', 'Nagy István', 'teszt2@qwe.hu', 'euismod in non nunc. In hac habitasse platea dictumst. Suspendisse eu pellentesque velit. Ut cursus velit quis sapien vulputate, sed lobortis libero i'),
('2020-11-30 14:49:44', 'tzu', 'tzu', 'tzu');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `password` varchar(80) CHARACTER SET utf8 COLLATE utf8_hungarian_ci NOT NULL,
  `fname` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  `lname` varchar(30) COLLATE utf8_hungarian_ci NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_hungarian_ci;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`) VALUES
(7, 'Teszt3', '92f2fc53c2be2f948dc8bace6ae7eff7', 'asd', 'jjjj'),
(8, 'CoreX2', 'bfd59291e825b5f2bbf1eb76569f8fe7', 'Nagy', 'József');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
