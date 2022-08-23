phpMyAdmin SQL Dump
version 4.7.4
https://www.phpmyadmin.net/

Host: 127.0.0.1
Gegenereerd op: 20 jan 2021 om 00:02
Serverversie: 10.1.29-MariaDB
PHP-versie: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TCR`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `reservations`
--

CREATE TABLE `reservations` (
  `res_date` date NOT NULL,
  `res_time` time(6) NOT NULL,
  `res_name` varchar(255) NOT NULL,
  `res_tel` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `reservations`
--

INSERT INTO `reservations` (`res_date`, `res_time`, `res_name`, `res_tel`) VALUES
('2021-01-16', '00:00:00.000000', 'Nigel', '612345678'),
('2021-01-19', '03:03:00.000000', 'Hallo', '0612324244'),
('2021-01-19', '23:02:00.000000', 'Deze komt vanuit mijn browser', '12341'),
('2021-01-19', '23:02:00.000000', 'Deze komt vanuit mijn browser', '12341'),
('2021-01-19', '01:01:00.000000', 'asdfas', 'sdafasf'),
('2021-01-19', '04:05:00.000000', 'asdfsadfsadfasdfdsaf', '34255');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
