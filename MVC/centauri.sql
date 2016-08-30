-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Mar 30 Août 2016 à 14:00
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
-- Structure de la table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` varchar(63) NOT NULL,
  `id_voyage` int(11) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `note` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `id_user`, `id_voyage`, `comment`, `note`) VALUES
(1, 'admin@admin.fr', 5, 'azdeazdzaedzd', 4),
(2, 'admin@admin.fr', 5, '', 0),
(3, 'f@f.fr', 5, 'frrfeferzfzeffzerfeferzfzer', 0),
(4, 'f@f.fr', 6, 'ujjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj', 0),
(5, 'f@f.fr', 6, 'fezrrzeferzfrzefrerzefzerfrezfezrfrzefrezferzfezrfezr', 0),
(6, 'f@f.fr', 6, 'dfgverfvervrevgcervecevze', 0),
(7, 'f@f.fr', 5, 'aaaaaaaaaa', 0),
(8, 'f@f.fr', 5, 'dzaedazedazdaezdazdadazdazdazdada', 0),
(9, 'f@f.fr', 5, 'arfeerfreffrzefreazfrze', 0),
(10, 'f@f.fr', 6, '', 0),
(11, 'f@f.fr', 5, 'frrefrzefrezferzfze', 0),
(12, '', 5, '', 0),
(13, 'f@f.fr', 5, 'ededzedazedazedazed', 0),
(14, 'f@f.fr', 5, 'zedeazdazedeazdazd', 0),
(15, 'f@f.fr', 5, 'dzeadazedazda', 0),
(16, 'f@f.fr', 6, 'zedezceez vrev rerb', 0),
(17, 'f@f.fr', 6, 'rrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 0),
(18, 'f@f.fr', 6, 'ezdezdezdezdazed', 0),
(19, 'f@f.fr', 6, 'ffffffffffffffffffffffffffffffffffffffffffffffffffffff', 0),
(20, 'f@f.fr', 6, 'edzazedzaedazedazedeaz', 0),
(21, 'f@f.fr', 6, 'jcvnaerofvjnenvqsn cqscjnqsdcjnqsdjcndjsqncjqsndcjnqsdjcnmsqdnqsdvqs\r\nsvdqsvdsv\r\nsqv\r\nsqv\r\nqsv\r\nq', 0),
(22, 'f@f.fr', 5, 'fergfezrferfrzeferzfrzefzef', 0),
(23, 'f@f.fr', 5, 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 0),
(24, 'f@f.fr', 5, '', 0),
(25, 'f@f.fr', 5, 'cerzezrgezgcezgezgzecgcgezgzgzgezcgzggez', 4),
(26, 'f@f.fr', 5, '', 0),
(27, 'f@f.fr', 5, '', 0),
(28, 'f@f.fr', 5, '', 0),
(29, 'f@f.fr', 5, '', 0),
(30, 'f@f.fr', 5, '', 0),
(31, 'f@f.fr', 5, '', 0),
(32, 'f@f.fr', 6, 'a', 0),
(33, 'f@f.fr', 5, 'a', 0),
(34, '10', 5, 'aaaaaaaaaaaa', 2),
(35, '10', 6, 'fffffffffdzazdadzadzadazadzdzadzadzaadzdzaadzdzaadzdzaazddzadza', 999999),
(36, '4', 5, 'edezdzaedzedazed', 3),
(37, '4', 5, 'decdzedezfrefreffzfrezf', 2),
(38, '4', 5, 'ffffffffffff', 120),
(39, '4', 5, 'refreferfrefreferfref', 1),
(40, '4', 5, 'fvezvreafraefvraefreavfae', 2),
(41, '4', 11, 'genial!!!!', 5),
(42, '4', 11, 'bof!!!!!!!!!!!', 1),
(43, '4', 11, 'mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm', 1),
(44, '4', 5, 'aze aze aze aze aze ', 0);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

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
  `adresse` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=15 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `birthdate`, `admin`, `nom`, `prenom`, `rue`, `code_postal`, `ville`, `tel`, `adresse`) VALUES
(1, 'a@a.fr', 'e10adc3949ba59abbe56e057f20f883e', '2016-08-18', 1, 'a', 'a', '12 rue du aaaa', '67000', 'strasbourg', '0303030303', ''),
(2, 'b@B.fr', 'e35cf7b66449df565f93c607d5a81d09', '2016-08-12', 0, 'b', 'b', '1 rue du b', '75000', 'paris', '04040404', ''),
(4, 'admin@admin.fr', '21232f297a57a5a743894a0e4a801fc3', '2016-08-18', 1, 'admin', 'admin', '1 rue de la truc', '67000', 'strasbourg', '0303030303', ''),
(5, 'b@b.fr', 'e35cf7b66449df565f93c607d5a81d09', '0000-00-00', 0, 'b', 'b', '', '', 'bbbb', '03030303030', '1 vvvvvv'),
(6, 'd@d.fr', '11ddbaf3386aea1f2974eee984542152', '0000-00-00', 0, 'd', 'd', '', '', 'ddddd', '3333333333', 'ddddddddd'),
(7, 'd@d.fr', '11ddbaf3386aea1f2974eee984542152', '0000-00-00', 0, 'd', 'd', '', '6700', 'ddddd', '3333333333', 'ddddddddd'),
(8, 'd@d.fr', '81dc9bdb52d04dc20036dbd8313ed055', '0000-00-00', 0, 'd', 'd', '', '6700', 'ddddd', '3333333333', 'ddddddddd'),
(9, 'Z@Z.FR', '4ddf7fd96ffcf749d2f1ee6efb64cc88', '0000-00-00', 0, 'Z', 'Z', '', '66666', 'ZZZZZZZ', '030303030', '1 ZZZZZZZ'),
(10, 'f@f.fr', 'ece926d8c0356205276a45266d361161', '0000-00-00', 0, 'f', 'f', 'ffffffff', '67000', 'ffffff', '0000000', ''),
(11, 'h@h.fr', 'e61e7de603852182385da5e907b4b232', '0000-00-00', 0, 'h', 'h', 'hhhhhhh', '67000', 'hhhhhh', '00000000000', ''),
(12, 'gregory.pace@hotmail.fr', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', 0, 'pace', 'greg', '1 rue de schaffhouse', '67000', 'strasbourg', '0000000000', ''),
(13, 'g@g.fr', 'e10adc3949ba59abbe56e057f20f883e', '0000-00-00', 0, 'g', 'g', 'ddddddddddd', '5555555', 'dd', '0000000000', ''),
(14, 'j@j.fr', '3b6281fa2ce2b6c20669490ef4b026a4', '0000-00-00', 0, 'j', 'j', 'jjjjjjjjj', '0000000', 'jjjjjj', '0000000000', '');

-- --------------------------------------------------------

--
-- Structure de la table `voyage`
--

CREATE TABLE IF NOT EXISTS `voyage` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `destination` varchar(255) COLLATE utf8_bin NOT NULL,
  `depart` varchar(255) COLLATE utf8_bin NOT NULL,
  `nom` varchar(127) COLLATE utf8_bin NOT NULL,
  `resume` varchar(255) COLLATE utf8_bin NOT NULL,
  `date` date NOT NULL,
  `prix` int(10) unsigned NOT NULL,
  `classe_eco` int(6) unsigned NOT NULL,
  `classe_business` int(6) unsigned NOT NULL,
  `premiere_classe` int(6) unsigned NOT NULL,
  `url` varchar(255) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=14 ;

--
-- Contenu de la table `voyage`
--

INSERT INTO `voyage` (`id`, `destination`, `depart`, `nom`, `resume`, `date`, `prix`, `classe_eco`, `classe_business`, `premiere_classe`, `url`) VALUES
(5, 'lune', 'strasbourg', 'aaaaaaaa', 'Erwan Cordeau : Ces tempÃ©ratures plus Ã©levÃ©es sont principalement liÃ©es aux Ã®lots de chaleur urbains. Ceux-ci sont produits par lâ€™omniprÃ©sence de surfaces minÃ©rales qui emmagasinent lâ€™Ã©nergie lumineuse. Les chaussÃ©es, les routes et les bÃ¢t', '2025-03-20', 10000, 1, 35, 20, ''),
(6, 'saturne', 'paris', 'voyage 2', '\r\nErwan Cordeau : Ces tempÃ©ratures plus Ã©levÃ©es sont principalement liÃ©es aux Ã®lots de chaleur urbains. Ceux-ci sont produits par lâ€™omniprÃ©sence de surfaces minÃ©rales qui emmagasinent lâ€™Ã©nergie lumineuse. Les chaussÃ©es, les routes et les bÃ¢t', '3212-12-25', 10000, 1, 35, 20, ''),
(7, 'mars', 'strasbourg', 'voyage3', '\r\nErwan Cordeau : Ces tempÃ©ratures plus Ã©levÃ©es sont principalement liÃ©es aux Ã®lots de chaleur urbains. Ceux-ci sont produits par lâ€™omniprÃ©sence de surfaces minÃ©rales qui emmagasinent lâ€™Ã©nergie lumineuse. Les chaussÃ©es, les routes et les bÃ¢t', '3000-12-26', 20000, 1, 35, 25, ''),
(8, 'uranus', 'mulhouse', 'voyage 3', '\r\nErwan Cordeau : Ces tempÃ©ratures plus Ã©levÃ©es sont principalement liÃ©es aux Ã®lots de chaleur urbains. Ceux-ci sont produits par lâ€™omniprÃ©sence de surfaces minÃ©rales qui emmagasinent lâ€™Ã©nergie lumineuse. Les chaussÃ©es, les routes et les bÃ¢t', '3020-12-25', 10000, 1, 35, 20, ''),
(9, 'supernova', 'mulhouse', 'voyagex', 'oijefvoirnejovirjeoirejvirejvirjveierjvirejvirejvrei\r\nervijeroirjeviorjevee\r\nervier,voirjevoirejviorjev\r\n', '2222-02-20', 25000, 10, 50, 35, ''),
(10, 'gggggggg', 'gggggg', 'voyage gggg', 'pkrj,fiprejvfreifvjeriveoijerijvijrievjeizj', '2024-12-12', 0, 25, 32, 36, ''),
(11, 'saturne', 'lille', 'voyage h', 'Des compagnies de CRS stationnÃ©es par dizaines, des policiers en civil patrouillant arme Ã  la hanche, des barriÃ¨res anti-Ã©meutes dressÃ©es bien en amont du modeste Hall Comminges. Le tout pour prÃ©venir la rÃ©union socialiste de quelques dizaines de m', '2016-12-20', 0, 10, 50, 35, 'http://ds1.static.rtbf.be/article/image/770x433/b/2/e/43d762ca733a839226415450b0dbf9d2-1460028494.jpg'),
(12, 'rgtrtgrtgr', 'tgrtgrtgrtgrt', 'trgtrgrtgrt', 'BFGRGEBRBERBREBNRVBRHE', '0012-12-12', 0, 12, 12, 12, ''),
(13, 'uranus', 'grenoble', 'voyage z', 'Cette fois, câ€™est la bonne. AprÃ¨s des mois de rumeurs et de dÃ©mentis, le ministre de lâ€™Ã©conomie Emmanuel Macron va annoncer sa dÃ©mission du gouvernement, mardi 30 aoÃ»t, ont assurÃ© au Monde plusieurs sources proches du ministres, confirmant une', '2056-03-20', 60000, 10, 50, 35, '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;