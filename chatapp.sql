-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : jeu. 05 mai 2022 à 20:07
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `chatapp`
--

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

DROP TABLE IF EXISTS `entreprises`;
CREATE TABLE IF NOT EXISTS `entreprises` (
  `idEntreprise` int NOT NULL AUTO_INCREMENT,
  `nomEntreprise` varchar(255) NOT NULL,
  PRIMARY KEY (`idEntreprise`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`idEntreprise`, `nomEntreprise`) VALUES
(1, 'MemberCom'),
(0, 'Facebook');

-- --------------------------------------------------------

--
-- Structure de la table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `msg_id` int NOT NULL AUTO_INCREMENT,
  `incoming_msg_id` int NOT NULL,
  `outgoing_msg_id` int NOT NULL,
  `msg` varchar(1000) NOT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=73 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1251293589, 528281794, 'salut othmane'),
(2, 1251293589, 528281794, 'cv ?'),
(3, 528281794, 1251293589, 'cv lhamdollah et toi ?'),
(4, 528281794, 1251293589, 'hh'),
(5, 528281794, 1251293589, 'gdg'),
(6, 528281794, 1251293589, 'gdfg'),
(7, 528281794, 1251293589, 'gdfg'),
(8, 528281794, 1251293589, 'gd'),
(9, 528281794, 1251293589, 'dgfdg'),
(10, 528281794, 1251293589, 'dg'),
(11, 528281794, 1251293589, 'gdfdg'),
(12, 528281794, 1251293589, 'fg'),
(13, 528281794, 1251293589, 'fdgfg'),
(14, 528281794, 1251293589, 'gfdg'),
(15, 528281794, 1251293589, 'dfgdfg'),
(16, 528281794, 1251293589, 'dfdgfg'),
(17, 528281794, 1251293589, 'fdgfdg'),
(18, 1096299842, 1251293589, 'salam mohammed'),
(19, 1096299842, 1251293589, 'cv ?'),
(20, 528281794, 1096299842, 'rgg'),
(21, 528281794, 1096299842, 'hffgh'),
(22, 528281794, 1096299842, 'hhfh'),
(23, 528281794, 1096299842, 'hfg'),
(24, 528281794, 1096299842, 'hffh'),
(25, 528281794, 1096299842, 'hfg'),
(26, 528281794, 1096299842, 'hfg'),
(27, 528281794, 1096299842, 'fh'),
(28, 528281794, 1096299842, 'hfg'),
(29, 528281794, 1096299842, 'hfg'),
(30, 528281794, 1251293589, 'salam'),
(31, 1096299842, 1251293589, 'othmane'),
(32, 1251293589, 1096299842, 'fsdf'),
(33, 1251293589, 1096299842, 'fsdf'),
(34, 1251293589, 1096299842, 'gfdg'),
(35, 1251293589, 1096299842, 'fsg'),
(36, 1251293589, 1096299842, 'dfhd'),
(37, 1251293589, 1096299842, 'hfj'),
(38, 1251293589, 1096299842, 'fj'),
(39, 528281794, 1096299842, 'kjkkh'),
(40, 528281794, 1096299842, 'ok'),
(41, 528281794, 1251293589, 'FDF'),
(42, 528281794, 1251293589, 'DSF'),
(43, 528281794, 1251293589, 'DSFDF'),
(44, 1096299842, 1251293589, 'OTHMANE'),
(45, 1096299842, 1251293589, 'FDS'),
(46, 1251293589, 1096299842, 'FD'),
(47, 1096299842, 1251293589, 'salam'),
(48, 1251293589, 1096299842, 'cv?'),
(49, 528281794, 1096299842, 'fff'),
(50, 1251293589, 1096299842, 'oui lhamdollah'),
(51, 1251293589, 1096299842, 'YIIUYIUYIU'),
(52, 1096299842, 395423542, 'salut'),
(53, 395423542, 1096299842, 'cv ?'),
(54, 1251293589, 1096299842, 'ahlan'),
(55, 1138846090, 638621981, 'test'),
(56, 1138846090, 638621981, 'tes'),
(57, 1138846090, 638621981, 'test'),
(58, 1138846090, 638621981, 'tesst'),
(59, 1138846090, 638621981, 'test'),
(60, 1138846090, 638621981, 'tes'),
(61, 1138846090, 638621981, 'test'),
(62, 1138846090, 638621981, 'test'),
(63, 1138846090, 638621981, 'test'),
(64, 1138846090, 638621981, 'tsed'),
(65, 1138846090, 638621981, 'd'),
(66, 1138846090, 638621981, 'd'),
(67, 1138846090, 638621981, 'dd'),
(68, 1138846090, 638621981, 'dd'),
(69, 1138846090, 638621981, 'dd'),
(70, 1138846090, 638621981, 'dd'),
(71, 1138846090, 638621981, 'd'),
(72, 1138846090, 638621981, 'd');

-- --------------------------------------------------------

--
-- Structure de la table `taches`
--

DROP TABLE IF EXISTS `taches`;
CREATE TABLE IF NOT EXISTS `taches` (
  `idTache` int NOT NULL AUTO_INCREMENT,
  `idPerson` int DEFAULT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `dateD` date NOT NULL,
  `dateF` date NOT NULL,
  `idEntreprise` int NOT NULL,
  PRIMARY KEY (`idTache`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `taches`
--

INSERT INTO `taches` (`idTache`, `idPerson`, `title`, `description`, `dateD`, `dateF`, `idEntreprise`) VALUES
(1, 1251293589, 'test', 'c\'est un test d\'une tache.......................................', '2022-04-15', '2022-05-15', 0),
(2, 1096299842, 'othmaneTest', 'une tache de test', '2022-04-13', '2022-04-30', 0),
(5, 1096299842, 'othmaneTest', 'une tache de test', '2022-04-13', '2022-04-30', 0),
(6, 1096299842, 'othmaneTest', 'une tache de test', '2022-04-13', '2022-04-30', 0),
(7, 1096299842, 'fdff', 'gggg', '2022-04-13', '2022-04-30', 0),
(8, 1096299842, 'test2', 'xxxxxxxxxxxxxxxxxx', '2022-04-22', '2022-04-30', 0),
(9, NULL, 'test', 'une tache de test ..................', '2022-04-06', '2022-04-24', 1),
(10, 638621981, 'xxxx', 'xxxxx', '2022-04-15', '2022-04-17', 1),
(11, 638621981, 'test', 'cccccccccccc', '2022-04-07', '2022-04-21', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL AUTO_INCREMENT,
  `unique_id` int NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `work` varchar(255) NOT NULL,
  `idEntreprise` int NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `idEntreprise` (`idEntreprise`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`user_id`, `unique_id`, `fname`, `lname`, `email`, `password`, `img`, `status`, `state`, `work`, `idEntreprise`) VALUES
(1, 1251293589, 'othmane', 'aghbal', 'othmane@gmail.com', '25f9e794323b453885f5181f1b624d0b', '16504790122203538_alarm_bell_notification_ring_icon.png', 'Offline now', 'user', '', 0),
(3, 1096299842, 'mohammed', 'aghbal', 'fathi@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1651075168kisspng-artificial-intelligence-computer-icons-artificial-5ae457e1226187.7697950315249141451408.png', 'Offline now', 'admin', 'designer', 0),
(5, 638621981, 'othmane', 'ccc', 'otm@gmail.com', '25f9e794323b453885f5181f1b624d0b', '16510803829104205_help_support_question_faq_info_icon.png', 'Active now', 'admin', 'Designer', 1),
(7, 287809244, 'otm', 'dd', 'dd@gmail.com', '25f9e794323b453885f5181f1b624d0b', '16510812573994437_add_create_new_plus_positive_icon.png', 'Offline now', 'user', 'Manager', 1),
(8, 1138846090, 'testCompte', 'testCompte', 'testCompte@gmail.com', '25f9e794323b453885f5181f1b624d0b', '1651081432icons8-fighter-80.png', 'Active now', 'no', 'Concepter', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
