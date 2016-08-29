-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 26 Août 2016 à 12:01
-- Version du serveur: 5.5.49-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `centauri`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--
CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(63) NOT NULL,
  `id_voyage` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `note` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(63) COLLATE utf8_bin NOT NULL,
  `password` varchar(255) COLLATE utf8_bin NOT NULL,
  `birthdate` date NOT NULL,
  `admin` tinyint(1) NOT NULL,
  `nom` varchar(63) COLLATE utf8_bin NOT NULL,
  `prenom` varchar(63) COLLATE utf8_bin NOT NULL,
  `rue` varchar(63) COLLATE utf8_bin NOT NULL,
  `code_postal` varchar(7) COLLATE utf8_bin NOT NULL,
  `ville` varchar(63) COLLATE utf8_bin NOT NULL,
  `tel` varchar(15) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=9 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `birthdate`, `admin`, `nom`, `prenom`, `rue`, `code_postal`, `ville`, `tel`) VALUES
(1, 'robert.delabuche@gmail.com', '17dd465a5cfccd02cff3ca53379e1cbf', '1950-08-17', 1, 'Robert', 'André', '20 RUE DES TUILES', '67000', 'STRASBOURG', '0388888888'),
(2, 'ursule.bidochon@gmail.com', '4a5f91d922959310ab68d6fa494745d6', '1965-08-12', 0, 'Ursule', 'Bidochon', '14 ROUTE DES POIDS MORTS', '67800', 'BISCHHEIM', '0605050505'),
(8, 'yves.muller@gmail.com', '6823bea8da9875ac432e36c95701ee80', '0000-00-00', 0, 'Muller', 'Yves', '52 ROUTE DU GENERAL DE GAULLE', '75000', 'PARIS', '0175225566');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE IF NOT EXISTS `voyage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `destination` varchar(255) COLLATE utf8_bin NOT NULL,
  `depart` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `prix` int(10) unsigned NOT NULL,
  `classe_eco` int(6) unsigned NOT NULL,
  `classe_business` int(6) unsigned NOT NULL,
  `premiere_classe` int(6) unsigned NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(63) COLLATE utf8_bin NOT NULL,
  `resume` varchar(1023) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=6 ;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`id`, `destination`, `depart`, `date`, `prix`, `classe_eco`, `classe_business`, `premiere_classe`, `url`, `nom`, `resume`) VALUES
(1, 'Uranus', 'Strasbourg', '2050-08-01', 12000, 1200, 600, 300, 'http://imgur.com', 'La flute de Faress', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis!'),
(2, 'Pluton', 'Paris', '3020-05-23', 16000, 1600, 800, 400, 'http://imgur.com', '20 000 lieux sous la schneck', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis!'),
(3, 'Soleil', 'Mars', '2080-01-31', 231344, 1321564, 321231, 1324154, 'http://imgur.com', 'Le règne des glaces', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis!'),
(4, 'Galactica', 'Andromède', '2080-01-31', 231344, 1321564, 321231, 1324154, 'http://imgur.com', 'La croisière s''amuse', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis!'),
(5, 'Lion', 'Neptune', '2080-01-31', 231344, 1321564, 321231, 1324154, 'http://imgur.com', 'Une virée vers l''infinie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam iure, deserunt vel? Nostrum sunt dolorem quas, nesciunt sapiente enim aliquam accusamus eum excepturi. Aperiam recusandae enim quasi itaque adipisci? Nobis!');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
