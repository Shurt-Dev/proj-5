-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : mer. 01 déc. 2021 à 19:47
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `php_sith`
--

-- --------------------------------------------------------

--
-- Structure de la table `indexprojet`
--

DROP TABLE IF EXISTS `indexprojet`;
CREATE TABLE IF NOT EXISTS `indexprojet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `parallax` varchar(255) DEFAULT NULL,
  `altPar` varchar(255) DEFAULT NULL,
  `presentation` text NOT NULL,
  `projName` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `indexprojet`
--

INSERT INTO `indexprojet` (`id`, `img`, `alt`, `parallax`, `altPar`, `presentation`, `projName`) VALUES
(1, 'proj1', 'proj1', 'parallax1', 'parallax1', 'The first project was to create a \"that\'s more that\'s less\" in python.', 'Higher or Lower'),
(2, 'proj2', 'proj2', 'parallax2', 'parallax2', 'Our second project was to do a Connect 4 game in C language under a debian environment.', 'Connect 4'),
(3, 'proj3', 'proj3', 'parallax3', 'parallax3', 'Our third project was to be make a website on our favorite video games.', 'Website');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

DROP TABLE IF EXISTS `projet`;
CREATE TABLE IF NOT EXISTS `projet` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProjet` int(11) NOT NULL,
  `url` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `href` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `idProjet`, `url`, `text`, `href`) VALUES
(1, 1, 'image/cpcm1', 'The name of the game is \"c\'est plus c\'est moins\" in french; so a rough translation would be \"it\'s more, it\'s less\".', 'one'),
(2, 1, 'image/cpcm2', 'This is the code, created by Shurturgal and his group for the their projects. We can see the part of code that decide a random number.', 'two'),
(3, 1, 'image/cpcm3', 'This is the code, created by Shurturgal and his group for the their projects. We can see the part of the code that asks the player for difficulty.', 'three'),
(6, 2, 'image/puis4 (3)', 'And the announcement of the winner + a proposition to play again.', 'three'),
(7, 2, 'image/puis4 (4)', 'Another example mid game.', 'four'),
(5, 2, 'image/puis4 (2)', 'An example mid-game, where the program ask the player 2 where he want to put his token(chip).', 'two'),
(4, 2, 'image/puis4 (1)', 'This is the game at the start of each session. The point represent an empty emplacement and the vertical bar is here to help visualize column. Each column is numerated from 1 to 7.', 'one'),
(10, 3, 'image/website1', 'This website was created by Aleksi and his group for the their projects; he decided with his group make a website on Rainbow Six Siege.', 'one'),
(11, 3, 'image/website2', 'This website was created by Shurturgal and his group for the their projects; he decided with his group make a website on Minecraft.', 'two'),
(12, 3, 'image/parallax3', 'This is a part of our code in HTML.', 'three');

-- --------------------------------------------------------

--
-- Structure de la table `text`
--

DROP TABLE IF EXISTS `text`;
CREATE TABLE IF NOT EXISTS `text` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idProjet` varchar(255) NOT NULL,
  `text` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `text`
--

INSERT INTO `text` (`id`, `idProjet`, `text`) VALUES
(1, '1', 'Our first project was to create a \"c\'est plus, c\'est moins\" in python language. The goal of this project was to make the program choose a random number and ask the player to choose a number until it finds the one chosen by the program. The only clues available are after the player enters a number, the program then answers if its number is bigger or smaller than the one given by the player.'),
(2, '2', 'We made this game of Connect 4 as our second project in python. The image are from Alexander\'s game, but the visuals rendering are pretty similar to Aleksi\'s game. The goal is simple, align four token of your color verticaly, horizontally, or diagonally. To chose in which column you want your token to be, you just have to enter the correspondant number when you\'re prompt to. The winner is announced automatically by the program, and it can be Player 1, Player 2 or the computer(in case of a draw). Some colors were added to simplify gameplay and making the game more enjoyable'),
(3, '3', 'For our third project we had to make a website about a video game. The final goal of this exercise was to understand and master the HTML and CSS languages but also the principle of SEO (which allows a better referencing according to many criteria).');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(249) NOT NULL,
  `email` varchar(249) NOT NULL,
  `password` varchar(249) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  `isAdmin` tinyint(1) NOT NULL DEFAULT '2',
  `img` varchar(255) DEFAULT NULL,
  `pathFile` varchar(255) DEFAULT NULL,
  `alt` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `pseudo`, `email`, `password`, `date`, `isAdmin`, `img`, `pathFile`, `alt`) VALUES
(1, 'Shurturgal', 'shurturgalk@gmail.com', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', '2021-11-29 08:45:43.770717', 1, 'pfpteto', 'image/index/', 'pfpteto'),
(2, 'Leksi', 'abielski@gaming.tech', 'b444ac06613fc8d63795be9ad0beaf55011936ac', '2021-11-29 08:46:29.538489', 1, 'pfpjevil', 'image/index/', 'pfpjevil'),
(3, 'Teto', 'truegod@disboard.com', 'a1abf5f2cc5fd6e2943a72845a246708613741a4', '2021-12-01 15:05:53.079402', 2, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
