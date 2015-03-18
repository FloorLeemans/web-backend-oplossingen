-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Machine: 127.0.0.1
-- Gegenereerd op: 18 mrt 2015 om 09:28
-- Serverversie: 5.6.20
-- PHP-versie: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Databank: `opdracht-crud-cms`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artikels`
--

CREATE TABLE IF NOT EXISTS `artikels` (
`id` int(11) NOT NULL,
  `titel` text NOT NULL,
  `artikel` text NOT NULL,
  `kernwoorden` text NOT NULL,
  `datum` date NOT NULL,
  `is_active` int(2) NOT NULL DEFAULT '0',
  `is_archived` int(2) NOT NULL DEFAULT '0'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Gegevens worden geëxporteerd voor tabel `artikels`
--

INSERT INTO `artikels` (`id`, `titel`, `artikel`, `kernwoorden`, `datum`, `is_active`, `is_archived`) VALUES
(1, 'Testbericht 1', 'Dit is het artikel voor testbericht 1. Dit is aangepast via ''Artikel Wijzigen''.', 'kernwoord 1, kernwoord 2', '2015-03-17', 1, 0),
(2, 'Testbericht 2', 'artikeltekst 2', 'kern 2', '2015-03-17', 1, 1),
(3, 'Testbericht 3', 'fjifjeoifez jfiefj ezfjidf djfiezfje fjeziofje fjeiof', 'kernwoord', '2015-03-18', 0, 0),
(5, 'Testbericht 4', 'bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4 bericht 4.', 'Bericht 4, kernwoord 4, kernwoorden', '2015-03-17', 0, 0),
(6, 'Testbericht 5', 'Dit is artikel 5, toegevoegd met ''artikel toevoegen''.', 'artikel 5, kernwoord 5, tag', '2015-03-18', 1, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`index` int(11) NOT NULL,
  `email` varchar(150) NOT NULL,
  `salt` varchar(255) NOT NULL,
  `hashed_password` varchar(255) NOT NULL,
  `last_login_time` datetime NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`index`, `email`, `salt`, `hashed_password`, `last_login_time`) VALUES
(1, 'test@test.be', 'Za3UC/TkLmjGMeN', 'ad750b65540eb8a4a9c66239b03781e4865235ed4d1ae75d153ff362feadb4ba4b1d4604781631365c351c85a9ce2a2309dcc82fae17b9bc9099d038c39fb0b8', '2015-03-17 22:35:58');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `artikels`
--
ALTER TABLE `artikels`
 ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`index`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `artikels`
--
ALTER TABLE `artikels`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
MODIFY `index` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
