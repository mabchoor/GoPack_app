-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 10 avr. 2023 à 18:05
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `db_livraison`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `admin_id` int(11) NOT NULL,
  `User_id` varchar(50) NOT NULL,
  `role` enum('1','0','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `administrateur`
--

INSERT INTO `administrateur` (`admin_id`, `User_id`, `role`) VALUES
(6, 'cli__aeeee', '0'),
(7, 'admin_642ecbb48707f7.38714609', '1');

-- --------------------------------------------------------

--
-- Structure de la table `assistance`
--

CREATE TABLE `assistance` (
  `num` int(11) NOT NULL,
  `contenue` text NOT NULL,
  `user` varchar(12) NOT NULL,
  `date` datetime NOT NULL,
  `centre_assis` enum('chauffeur','client','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `avis_client`
--

CREATE TABLE `avis_client` (
  `num` int(11) NOT NULL,
  `client` int(11) NOT NULL,
  `commentaire` text NOT NULL,
  `date_avis` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `avis_client`
--

INSERT INTO `avis_client` (`num`, `client`, `commentaire`, `date_avis`) VALUES
(1, 4, 'this is awesome ', '2023-04-09 16:19:30'),
(2, 4, 'this is awesome ', '2023-04-09 16:19:30'),
(3, 5, 'this is awesome ', '2023-04-09 16:19:30'),
(4, 4, 'this is awesome ', '2023-04-09 16:19:30');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `chauf`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `chauf` (
`chauffeur_id` int(11)
,`id` varchar(50)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `chauff`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `chauff` (
`Chauffeur_id` int(11)
,`User_id` varchar(50)
,`disponible` enum('0','1','-1')
,`validation_id` int(11)
,`permis_conduit` text
,`carte_grise` text
,`capacite_vehicule` double
,`type_vehicule` enum('camion','voiture','moto','autre')
,`etat_chauffeur` enum('0','1')
,`chauffeur` int(11)
);

-- --------------------------------------------------------

--
-- Structure de la table `chauffeur`
--

CREATE TABLE `chauffeur` (
  `Chauffeur_id` int(11) NOT NULL,
  `User_id` varchar(50) NOT NULL,
  `disponible` enum('0','1','-1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `chauffeur`
--

INSERT INTO `chauffeur` (`Chauffeur_id`, `User_id`, `disponible`) VALUES
(1, 'chauf_642d8fa3d44584.98786020', '-1'),
(2, 'chauf_642d946907d772.15778648', '-1'),
(3, 'sahli', '-1'),
(4, 'zineb', '-1'),
(5, 'User_643431e63da38', '0');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `chauffeur_detail`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `chauffeur_detail` (
`User_id` varchar(30)
,`Nom` varchar(30)
,`Prenom` varchar(30)
,`Ville` varchar(30)
,`Username` varchar(12)
,`Email` varchar(255)
,`Phone` text
,`date_inscription` datetime
,`role` enum('1','2','0')
,`Chauffeur_id` int(11)
,`disponible` enum('0','1','-1')
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `chauffeur_etails`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `chauffeur_etails` (
`chauffeur_id` int(11)
,`disponible` enum('0','1','-1')
,`validation_id` int(11)
,`permis_conduit` text
,`carte_grise` text
,`capacite_vehicule` double
,`type_vehicule` enum('camion','voiture','moto','autre')
,`etat_chauffeur` enum('0','1')
,`CIN` varchar(50)
,`User_id` varchar(30)
,`Nom` varchar(30)
,`Prenom` varchar(30)
,`Ville` varchar(30)
,`phone` text
,`image` text
);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `client_id` int(11) NOT NULL,
  `CIN` text NOT NULL,
  `addresse_client` text NOT NULL,
  `User` varchar(50) NOT NULL,
  `dispo` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`client_id`, `CIN`, `addresse_client`, `User`, `dispo`) VALUES
(4, '', '', 'cli_642d96f1a16dc3.19628084', '1'),
(5, '', 'true', 'cli__aeeee', '1');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `client_detail`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `client_detail` (
`User_id` varchar(30)
,`Nom` varchar(30)
,`Prenom` varchar(30)
,`Ville` varchar(30)
,`Username` varchar(12)
,`Email` varchar(255)
,`Phone` text
,`Password` varchar(30)
,`Image` text
,`date_inscription` datetime
,`role` enum('1','2','0')
,`client_id` int(11)
,`CIN` text
,`addresse_client` text
,`User` varchar(50)
,`dispo` enum('0','1')
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `client_details`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `client_details` (
);

-- --------------------------------------------------------

--
-- Structure de la table `coli`
--

CREATE TABLE `coli` (
  `num` int(11) NOT NULL,
  `description` int(11) NOT NULL,
  `largeur` double DEFAULT NULL,
  `longeur` double DEFAULT NULL,
  `profondeur` double DEFAULT NULL,
  `poids` double DEFAULT NULL,
  `quantite` int(11) DEFAULT 1,
  `demmande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `id_emetteur` varchar(50) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `role` enum('0','1','2') NOT NULL,
  `message` text DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` enum('0','1','-1') NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `id_emetteur`, `role`, `message`, `date`, `status`) VALUES
(1, 'sahli', '1', 'hada awel message', '2023-04-06 11:47:32', '1'),
(2, 'cli__aeeee', '1', 'hada awel message', '2023-04-06 12:17:49', '1');

-- --------------------------------------------------------

--
-- Structure de la table `demande`
--

CREATE TABLE `demande` (
  `Demande_id` int(11) NOT NULL,
  `prix_Demande` double NOT NULL,
  `date_Demande` datetime NOT NULL,
  `date_limite` datetime NOT NULL,
  `cllient` int(11) NOT NULL,
  `destination` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `demande`
--

INSERT INTO `demande` (`Demande_id`, `prix_Demande`, `date_Demande`, `date_limite`, `cllient`, `destination`) VALUES
(1, 118, '2023-04-08 17:42:47', '2023-04-09 17:42:47', 4, 'hey salam');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `demande_client`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `demande_client` (
`client` varchar(12)
,`Demande_id` int(11)
,`date_Demande` datetime
,`destination` varchar(100)
);

-- --------------------------------------------------------

--
-- Structure de la table `livraison`
--

CREATE TABLE `livraison` (
  `num_Livraison` int(11) NOT NULL,
  `time_serv` time NOT NULL,
  `date` varchar(250) NOT NULL,
  `prix` double NOT NULL,
  `commentaire` int(11) DEFAULT NULL,
  `satisfaction` int(11) DEFAULT NULL,
  `etat` enum('0','1','2') NOT NULL,
  `demande` int(11) NOT NULL,
  `chauffeur` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `livraison`
--

INSERT INTO `livraison` (`num_Livraison`, `time_serv`, `date`, `prix`, `commentaire`, `satisfaction`, `etat`, `demande`, `chauffeur`) VALUES
(1, '00:00:00', '0000-00-00', 2550, NULL, NULL, '0', 1, 4),
(2, '00:00:00', '0000-00-00', 600, NULL, NULL, '0', 1, 4),
(3, '00:00:00', '1999', 2560, NULL, NULL, '0', 1, 4);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `livraison_details`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `livraison_details` (
`num_Livraison` int(11)
,`time_serv` time
,`date` varchar(250)
,`prix` double
,`commentaire` int(11)
,`satisfaction` int(11)
,`etat` enum('0','1','2')
,`demande` int(11)
,`chauffeur` int(11)
,`Demande_id` int(11)
,`prix_Demande` double
,`date_Demande` datetime
,`date_limite` datetime
,`cllient` int(11)
,`destination` varchar(100)
,`client_id` int(11)
,`CIN` text
,`addresse_client` text
,`User` varchar(50)
,`dispo` enum('0','1')
,`chauffeur_id` int(11)
,`id` varchar(50)
,`User_id` varchar(30)
,`Nom` varchar(30)
,`Prenom` varchar(30)
,`Ville` varchar(30)
,`Username` varchar(12)
,`Email` varchar(255)
,`Phone` text
,`Password` varchar(30)
,`Image` text
,`date_inscription` datetime
,`role` enum('1','2','0')
);

-- --------------------------------------------------------

--
-- Structure de la table `login_details`
--

CREATE TABLE `login_details` (
  `login_id` int(11) NOT NULL,
  `user` varchar(30) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `lastactivity` datetime NOT NULL DEFAULT current_timestamp(),
  `status` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `login_details`
--

INSERT INTO `login_details` (`login_id`, `user`, `lastactivity`, `status`) VALUES
(1, 'sahli', '0000-00-00 00:00:00', '0'),
(2, 'sahli', '0000-00-00 00:00:00', '0'),
(3, 'sahli', '0000-00-00 00:00:00', '0'),
(4, 'sahli', '2023-04-05 05:20:01', '0'),
(5, 'sahli', '2023-04-05 05:20:01', '0'),
(6, 'sahli', '2023-04-05 05:20:01', '0'),
(7, 'sahli', '2023-04-05 05:22:56', '0'),
(8, 'chauf', '2023-04-05 05:44:19', '0'),
(9, 'chauf', '2023-04-05 07:26:46', '0'),
(10, 'sahli', '2023-04-05 07:26:58', '0'),
(11, 'sahli', '2023-04-05 15:08:56', '0'),
(12, 'chauf', '2023-04-05 15:26:43', '0'),
(13, 'sahli', '2023-04-05 15:35:32', '0'),
(14, 'chauf', '2023-04-05 15:37:00', '0'),
(15, 'sahli', '2023-04-05 15:37:02', '0'),
(16, 'sahli', '2023-04-06 04:59:30', '0'),
(17, 'sahli', '2023-04-06 05:01:26', '0'),
(18, 'sahli', '2023-04-06 05:01:39', '0'),
(19, 'sahli', '2023-04-06 05:02:21', '0'),
(20, 'sahli', '2023-04-06 05:02:57', '0'),
(21, 'sahli', '2023-04-06 05:03:19', '0'),
(22, 'sahli', '2023-04-06 05:04:21', '0'),
(23, 'sahli', '2023-04-06 05:04:44', '0'),
(24, 'sahli', '2023-04-06 05:05:05', '0'),
(25, 'sahli', '2023-04-06 05:05:16', '0'),
(26, 'sahli', '2023-04-06 05:05:38', '0'),
(27, 'sahli', '2023-04-06 05:07:09', '0'),
(28, 'sahli', '2023-04-06 05:07:26', '0'),
(29, 'sahli', '2023-04-06 05:07:47', '0'),
(30, 'sahli', '2023-04-06 05:08:06', '0'),
(31, 'sahli', '2023-04-06 05:08:51', '0'),
(32, 'sahli', '2023-04-06 12:23:12', '0'),
(33, 'sahli', '2023-04-06 13:28:07', '0'),
(34, 'sahli', '2023-04-06 13:28:30', '0'),
(35, 'cli__aeeee', '2023-04-06 14:15:35', '0'),
(36, 'cli__aeeee', '2023-04-06 14:16:39', '0'),
(37, 'cli__aeeee', '2023-04-06 14:17:08', '0'),
(38, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:07:54', '0'),
(39, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:08:06', '0'),
(40, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:15:20', '0'),
(41, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:17:33', '0'),
(42, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:18:07', '0'),
(43, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:19:11', '0'),
(44, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:19:50', '0'),
(45, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:20:07', '0'),
(46, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:20:32', '0'),
(47, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:20:42', '0'),
(48, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:21:27', '0'),
(49, 'admin_642ecbb48707f7.38714609', '2023-04-06 16:21:49', '0'),
(50, 'zineb', '2023-04-06 17:30:42', '0'),
(51, 'zineb', '2023-04-06 17:31:15', '0'),
(52, 'zineb', '2023-04-06 17:31:36', '0'),
(53, 'zineb', '2023-04-06 17:38:02', '0'),
(54, 'zineb', '2023-04-06 17:39:52', '0'),
(55, 'zineb', '2023-04-06 17:39:56', '0'),
(56, 'zineb', '2023-04-06 17:40:37', '0'),
(57, 'zineb', '2023-04-06 17:41:53', '0'),
(58, 'chauf', '2023-04-08 14:56:35', '0'),
(59, 'chauf', '2023-04-08 14:58:36', '0'),
(60, 'chauf', '2023-04-08 14:58:37', '0'),
(61, 'chauf', '2023-04-08 14:58:51', '0'),
(62, 'chauf', '2023-04-08 14:58:51', '0'),
(63, 'chauf', '2023-04-08 14:59:20', '0'),
(64, 'chauf', '2023-04-08 14:59:20', '0'),
(65, 'chauf', '2023-04-08 14:59:45', '0'),
(66, 'admin_642ecbb48707f7.38714609', '2023-04-08 15:02:15', '0'),
(67, 'admin_642ecbb48707f7.38714609', '2023-04-08 15:10:27', '0'),
(68, 'admin_642ecbb48707f7.38714609', '2023-04-08 15:46:36', '0'),
(69, 'admin_642ecbb48707f7.38714609', '2023-04-08 15:51:42', '0'),
(70, 'zineb', '2023-04-09 18:27:51', '0'),
(71, 'zineb', '2023-04-09 18:29:02', '0'),
(72, 'zineb', '2023-04-09 18:29:19', '0'),
(73, 'zineb', '2023-04-09 18:29:34', '0'),
(74, 'zineb', '2023-04-09 18:30:04', '0'),
(75, 'zineb', '2023-04-09 18:30:30', '0'),
(76, 'zineb', '2023-04-09 18:31:17', '0'),
(77, 'zineb', '2023-04-09 18:31:57', '0'),
(78, 'zineb', '2023-04-09 18:32:49', '0'),
(79, 'zineb', '2023-04-09 18:33:14', '0'),
(80, 'zineb', '2023-04-09 18:33:28', '0'),
(81, 'zineb', '2023-04-09 18:34:59', '0'),
(82, 'zineb', '2023-04-09 18:35:44', '0'),
(83, 'zineb', '2023-04-09 18:36:39', '0'),
(84, 'zineb', '2023-04-09 18:38:55', '0'),
(85, 'zineb', '2023-04-09 18:42:01', '0'),
(86, 'zineb', '2023-04-09 18:46:28', '0'),
(87, 'zineb', '2023-04-09 18:47:33', '0'),
(88, 'zineb', '2023-04-09 18:49:36', '0'),
(89, 'zineb', '2023-04-09 18:52:50', '0'),
(90, 'zineb', '2023-04-09 18:53:40', '0'),
(91, 'zineb', '2023-04-09 18:55:46', '0'),
(92, 'zineb', '2023-04-09 19:02:44', '0'),
(93, 'zineb', '2023-04-09 19:03:38', '0'),
(94, 'zineb', '2023-04-09 19:04:35', '0'),
(95, 'zineb', '2023-04-09 19:05:25', '0'),
(96, 'zineb', '2023-04-09 19:09:14', '0'),
(97, 'admin_642ecbb48707f7.38714609', '2023-04-10 09:23:50', '0'),
(98, 'zineb', '2023-04-10 14:38:35', '0');

-- --------------------------------------------------------

--
-- Structure de la table `message`
--

CREATE TABLE `message` (
  `message_id` int(11) NOT NULL,
  `recepteur` varchar(30) NOT NULL,
  `emetteur` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('0','1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `message`
--

INSERT INTO `message` (`message_id`, `recepteur`, `emetteur`, `message`, `date`, `status`) VALUES
(2, 'sahli', 'chauf', 'frrrrrf', '2023-04-05 13:08:17', '0'),
(3, 'chauf', 'sahli', 'qh', '2023-04-05 13:24:45', '2'),
(4, 'chauf', 'sahli', 'de', '2023-04-05 13:25:50', '2'),
(5, 'sahli', 'chauf', 'vb', '2023-04-05 13:26:55', '0'),
(6, 'sahli', 'chauf', 'hey je suis le chauf', '2023-04-05 13:32:37', '0'),
(7, 'sahli', 'chauf', 'this message is from aya sahli', '2023-04-05 13:33:25', '2'),
(8, 'sahli', 'chauf', 'this sahli user id chaf', '2023-04-05 13:38:02', '2'),
(9, 'chauf', 'sahli', 'and this is aya from sahli', '2023-04-05 13:38:18', '0'),
(13, 'cli__aeeee', 'zineb', ',', '2023-04-06 15:48:08', '1'),
(14, 'cli__aeeee', 'zineb', 're', '2023-04-06 15:48:18', '2'),
(15, 'cli__aeeee', 'zineb', 'fr', '2023-04-06 15:48:53', '1'),
(16, 'chauf', 'zineb', 'jk', '2023-04-09 17:10:49', '1'),
(17, 'chauf', 'zineb', 'gfhjk', '2023-04-09 17:13:57', '1'),
(20, 'chauf', 'zineb', 'hy', '2023-04-09 17:21:55', '1'),
(22, 'chauf', 'zineb', 'hj', '2023-04-09 17:45:17', '1'),
(23, 'chauf', 'zineb', 'confirm', '2023-04-09 22:34:28', '1'),
(24, 'chauf', 'zineb', 'confirm', '2023-04-09 22:38:22', '1'),
(25, 'chauf', 'zineb', 'confirm', '2023-04-09 22:40:46', '1'),
(26, 'chauf', 'zineb', 'confirm', '2023-04-09 22:40:57', '1'),
(27, 'chauf', 'zineb', 'confirm', '2023-04-09 22:41:30', '1'),
(28, 'chauf', 'zineb', '?', '2023-04-09 22:41:59', '1'),
(29, 'chauf', 'zineb', '?', '2023-04-09 22:42:00', '1'),
(30, 'chauf', 'zineb', 'ftg', '2023-04-09 22:42:11', '1'),
(31, 'chauf', 'zineb', 'cd', '2023-04-09 22:43:33', '1'),
(32, 'chauf', 'zineb', 'confirm', '2023-04-09 22:43:47', '1'),
(33, 'chauf', 'zineb', 'confirm', '2023-04-09 22:44:03', '1'),
(34, 'chauf', 'zineb', '1', '2023-04-09 22:44:34', '1'),
(35, 'chauf', 'zineb', 'confirm', '2023-04-09 22:45:28', '1'),
(36, 'chauf', 'zineb', 'cd', '2023-04-09 22:45:58', '1'),
(37, 'chauf', 'zineb', 'he', '2023-04-09 22:51:36', '1'),
(38, 'chauf', 'zineb', 'confirm', '2023-04-09 22:51:48', '1'),
(39, 'chauf', 'zineb', 'confirm', '2023-04-09 22:52:55', '1'),
(40, 'chauf', 'zineb', 'hey', '2023-04-09 22:53:17', '1'),
(41, 'chauf', 'zineb', 'confirm', '2023-04-09 23:05:41', '1'),
(42, 'chauf', 'zineb', 'confirm', '2023-04-09 23:06:55', '1'),
(43, 'chauf', 'zineb', 'confirm', '2023-04-09 23:07:17', '1'),
(44, 'chauf', 'zineb', 'confirm', '2023-04-09 23:07:31', '1'),
(45, 'chauf', 'zineb', 'confirm', '2023-04-09 23:09:36', '1'),
(46, 'chauf', 'zineb', 'confirm', '2023-04-09 23:16:14', '2'),
(47, 'chauf', 'zineb', 'confirm', '2023-04-09 23:16:44', '1'),
(48, 'chauf', 'zineb', 'confirm', '2023-04-09 23:17:21', '1'),
(50, 'chauf', 'zineb', 'hey cv', '2023-04-10 00:16:05', '1');

-- --------------------------------------------------------

--
-- Structure de la table `offre_proposer`
--

CREATE TABLE `offre_proposer` (
  `offre_id` int(11) NOT NULL,
  `new_prix` double NOT NULL,
  `new_date` datetime NOT NULL,
  `Demande` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `payement`
--

CREATE TABLE `payement` (
  `payement_id` int(11) NOT NULL,
  `date_payement` datetime NOT NULL,
  `type_payement` enum('cod','carte_bancaire','','') NOT NULL,
  `livraison` int(11) NOT NULL,
  `status` enum('en_attente','accepte','refuse','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `region` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `region`
--

INSERT INTO `region` (`id`, `region`) VALUES
(1, 'Tanger-Tétouan-Al Hoceïma'),
(2, 'l\'Oriental'),
(3, 'Fès-Meknès'),
(4, 'Rabat-Salé-Kénitra'),
(5, 'Béni Mellal-Khénifra'),
(6, 'Casablanca-Settat'),
(7, 'Marrakech-Safi'),
(8, 'Drâa-Tafilalet'),
(9, 'Souss-Massa'),
(10, 'Guelmim-Oued Noun'),
(11, 'Laâyoune-Sakia El Hamra'),
(12, 'Dakhla-Oued Ed Dahab');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `User_id` varchar(30) NOT NULL,
  `Nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `Ville` varchar(30) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` text NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Image` text NOT NULL,
  `date_inscription` datetime NOT NULL DEFAULT current_timestamp(),
  `role` enum('1','2','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`User_id`, `Nom`, `Prenom`, `Ville`, `Username`, `Email`, `Phone`, `Password`, `Image`, `date_inscription`, `role`) VALUES
('\".$userid.\"', '\".$nom.\"', '\".$prenom.\"', '\".$ville.\"', '\".$username.', '\".$email.\"', '\".$phone.\"', '\".$password.\"', '\".$image.\"', '0000-00-00 00:00:00', '1'),
('User_643431e63da38', 'aya', 'sahli', '17', '', 'sahli.2002.aya@gmail.com', '0651256132', '6332821827664fc6e22b0d1b5fd7c1', '../Users/Profiles/User_643431e63da38_profile.pdf', '2023-04-10 17:57:26', ''),
('admin_642ecbb48707f7.38714609', 'sahli', 'prenom', 'settat', 'adminprincip', 'salam@gmail.com', '00000000', '123', '../assets/images/companies/img-2.png', '2023-04-06 15:40:04', '0'),
('chauf', 'sahli', 'aya', 'settat', 'sahli', 'sahli@gmail.com', '0651256132', '123', '', '2023-04-05 05:40:53', '1'),
('chauf_642d8f3f2a3dc7.97124961', 'aya', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', 'sjh', '../assets/images/image_uti/1_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('chauf_642d8f7b41c242.54405564', 'aya', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', 'sjh', '../assets/images/image_uti/1_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('chauf_642d8fa3d44584.98786020', 'aya', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', 'sjh', '../assets/images/image_uti/1_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('chauf_642d9098e9dd36.44367667', 'aya', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', 'sjh', '../assets/images/image_uti/1_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('chauf_642d90bcdc0f49.80710167', 'aya', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', 'sjh', '../assets/images/image_uti/1_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('chauf_642d90d75286e7.84823947', 'eeeeeeeeeeeeeeeee', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', 'dezds', '../assets/images/image_uti/1_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('chauf_642d9104997092.38702787', 'eeeeeeeeeeeeeeeee', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', 'dezds', '../assets/images/image_uti/1_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('chauf_642d946907d772.15778648', 'eeeeeeeeeeeeeeeee', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', 'dezds', '../assets/images/image_uti/1_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('cli_642d959de76f63.85775196', 'eeeeeeeeeeeeeeeee', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', '$2y$10$6PJ1Qjt6ZQtQMQEL.ijDf.8', '../assets/images/image_uti/2_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('cli_642d95c8410322.80991399', 'eeeeeeeeeeeeeeeee', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', '$2y$10$hZmR3f.RRQZoon0yq9Z2geX', '../assets/images/image_uti/2_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('cli_642d95db639693.32153745', 'eeeeeeeeeeeeeeeee', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', '$2y$10$3pgk.LyScDHurePWvD961.b', '../assets/images/image_uti/2_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('cli_642d96f1a16dc3.19628084', 'eeeeeeeeeeeeeeeee', 'sahml', 'Nador', 'hadiana', 'salam@gmail.com', '0607534090', '$2y$10$0t6.6pbhNcUFflZsC8bSJ..', '../assets/images/image_uti/2_hadiana.jpg', '0000-00-00 00:00:00', '1'),
('cli__aeeee', 'aya', 'aya', 'ifran', 'name', 'salam@gmail.com', '0600000', '123', '', '2023-04-06 13:57:25', '2'),
('sahli', 'aya', 'aya', 'ifran', 'name', 'aya@gmail.com', '0600000', '123456789', '', '2023-04-01 14:29:45', '1'),
('zineb', 'zineb', 'zineb', 'settat', 'zineb', ';kfnl', 'j;knk', '123', '; ,,;jbnk', '2023-04-06 17:30:21', '1');

-- --------------------------------------------------------

--
-- Structure de la table `validation_chauffeur`
--

CREATE TABLE `validation_chauffeur` (
  `validation_id` int(11) NOT NULL,
  `permis_conduit` text NOT NULL,
  `carte_grise` text NOT NULL,
  `capacite_vehicule` double NOT NULL,
  `type_vehicule` enum('camion','voiture','moto','autre') NOT NULL,
  `etat_chauffeur` enum('0','1') NOT NULL,
  `chauffeur` int(11) NOT NULL,
  `CIN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Déchargement des données de la table `validation_chauffeur`
--

INSERT INTO `validation_chauffeur` (`validation_id`, `permis_conduit`, `carte_grise`, `capacite_vehicule`, `type_vehicule`, `etat_chauffeur`, `chauffeur`, `CIN`) VALUES
(1, 'serdhtfgyjki', 'esgrdfjghkjnk', 222, '', '1', 4, 'fdsgfhgh,j;k:'),
(2, 'serdhtfgyjki', 'esgrdfjghkjnk', 222, '', '1', 4, 'fdsgfhgh,j;k:');

-- --------------------------------------------------------

--
-- Structure de la table `ville`
--

CREATE TABLE `ville` (
  `id` int(11) NOT NULL,
  `ville` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `region` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `ville`
--

INSERT INTO `ville` (`id`, `ville`, `region`) VALUES
(1, 'Aïn Harrouda', 6),
(2, 'Ben Yakhlef', 6),
(3, 'Bouskoura', 6),
(4, 'Casablanca', 6),
(5, 'Médiouna', 6),
(6, 'Mohammadia', 6),
(7, 'Tit Mellil', 6),
(8, 'Ben Yakhlef', 6),
(9, 'Bejaâd', 5),
(10, 'Ben Ahmed', 6),
(11, 'Benslimane', 6),
(12, 'Berrechid', 6),
(13, 'Boujniba', 5),
(14, 'Boulanouare', 5),
(15, 'Bouznika', 6),
(16, 'Deroua', 6),
(17, 'El Borouj', 6),
(18, 'El Gara', 6),
(19, 'Guisser', 6),
(20, 'Hattane', 5),
(21, 'Khouribga', 5),
(22, 'Loulad', 6),
(23, 'Oued Zem', 5),
(24, 'Oulad Abbou', 6),
(25, 'Oulad H\'Riz Sahel', 6),
(26, 'Oulad M\'rah', 6),
(27, 'Oulad Saïd', 6),
(28, 'Oulad Sidi Ben Daoud', 6),
(29, 'Ras El Aïn', 6),
(30, 'Settat', 6),
(31, 'Sidi Rahhal Chataï', 6),
(32, 'Soualem', 6),
(33, 'Azemmour', 6),
(34, 'Bir Jdid', 6),
(35, 'Bouguedra', 7),
(36, 'Echemmaia', 7),
(37, 'El Jadida', 6),
(38, 'Hrara', 7),
(39, 'Ighoud', 7),
(40, 'Jamâat Shaim', 7),
(41, 'Jorf Lasfar', 6),
(42, 'Khemis Zemamra', 6),
(43, 'Laaounate', 6),
(44, 'Moulay Abdallah', 6),
(45, 'Oualidia', 6),
(46, 'Oulad Amrane', 6),
(47, 'Oulad Frej', 6),
(48, 'Oulad Ghadbane', 6),
(49, 'Safi', 7),
(50, 'Sebt El Maârif', 6),
(51, 'Sebt Gzoula', 7),
(52, 'Sidi Ahmed', 7),
(53, 'Sidi Ali Ban Hamdouche', 6),
(54, 'Sidi Bennour', 6),
(55, 'Sidi Bouzid', 6),
(56, 'Sidi Smaïl', 6),
(57, 'Youssoufia', 7),
(58, 'Fès', 3),
(59, 'Aïn Cheggag', 3),
(60, 'Bhalil', 3),
(61, 'Boulemane', 3),
(62, 'El Menzel', 3),
(63, 'Guigou', 3),
(64, 'Imouzzer Kandar', 3),
(65, 'Imouzzer Marmoucha', 3),
(66, 'Missour', 3),
(67, 'Moulay Yaâcoub', 3),
(68, 'Ouled Tayeb', 3),
(69, 'Outat El Haj', 3),
(70, 'Ribate El Kheir', 3),
(71, 'Séfrou', 3),
(72, 'Skhinate', 3),
(73, 'Tafajight', 3),
(74, 'Arbaoua', 4),
(75, 'Aïn Dorij', 1),
(76, 'Dar Gueddari', 4),
(77, 'Had Kourt', 4),
(78, 'Jorf El Melha', 4),
(79, 'Kénitra', 4),
(80, 'Khenichet', 4),
(81, 'Lalla Mimouna', 4),
(82, 'Mechra Bel Ksiri', 4),
(83, 'Mehdia', 4),
(84, 'Moulay Bousselham', 4),
(85, 'Sidi Allal Tazi', 4),
(86, 'Sidi Kacem', 4),
(87, 'Sidi Slimane', 4),
(88, 'Sidi Taibi', 4),
(89, 'Sidi Yahya El Gharb', 4),
(90, 'Souk El Arbaa', 4),
(91, 'Akka', 9),
(92, 'Assa', 10),
(93, 'Bouizakarne', 10),
(94, 'El Ouatia', 10),
(95, 'Es-Semara', 11),
(96, 'Fam El Hisn', 9),
(97, 'Foum Zguid', 9),
(98, 'Guelmim', 10),
(99, 'Taghjijt', 10),
(100, 'Tan-Tan', 10),
(101, 'Tata', 9),
(102, 'Zag', 10),
(103, 'Marrakech', 7),
(104, 'Ait Daoud', 7),
(115, 'Amizmiz', 7),
(116, 'Assahrij', 7),
(117, 'Aït Ourir', 7),
(118, 'Ben Guerir', 7),
(119, 'Chichaoua', 7),
(120, 'El Hanchane', 7),
(121, 'El Kelaâ des Sraghna', 7),
(122, 'Essaouira', 7),
(123, 'Fraïta', 7),
(124, 'Ghmate', 7),
(125, 'Ighounane', 8),
(126, 'Imintanoute', 7),
(127, 'Kattara', 7),
(128, 'Lalla Takerkoust', 7),
(129, 'Loudaya', 7),
(130, 'Lâattaouia', 7),
(131, 'Moulay Brahim', 7),
(132, 'Mzouda', 7),
(133, 'Ounagha', 7),
(134, 'Sid L\'Mokhtar', 7),
(135, 'Sid Zouin', 7),
(136, 'Sidi Abdallah Ghiat', 7),
(137, 'Sidi Bou Othmane', 7),
(138, 'Sidi Rahhal', 7),
(139, 'Skhour Rehamna', 7),
(140, 'Smimou', 7),
(141, 'Tafetachte', 7),
(142, 'Tahannaout', 7),
(143, 'Talmest', 7),
(144, 'Tamallalt', 7),
(145, 'Tamanar', 7),
(146, 'Tamansourt', 7),
(147, 'Tameslouht', 7),
(148, 'Tanalt', 9),
(149, 'Zeubelemok', 7),
(150, 'Meknès‎', 3),
(151, 'Khénifra', 5),
(152, 'Agourai', 3),
(153, 'Ain Taoujdate', 3),
(154, 'MyAliCherif', 8),
(155, 'Rissani', 8),
(156, 'Amalou Ighriben', 5),
(157, 'Aoufous', 8),
(158, 'Arfoud', 8),
(159, 'Azrou', 3),
(160, 'Aïn Jemaa', 3),
(161, 'Aïn Karma', 3),
(162, 'Aïn Leuh', 3),
(163, 'Aït Boubidmane', 3),
(164, 'Aït Ishaq', 5),
(165, 'Boudnib', 8),
(166, 'Boufakrane', 3),
(167, 'Boumia', 8),
(168, 'El Hajeb', 3),
(169, 'Elkbab', 5),
(170, 'Er-Rich', 5),
(171, 'Errachidia', 8),
(172, 'Gardmit', 8),
(173, 'Goulmima', 8),
(174, 'Gourrama', 8),
(175, 'Had Bouhssoussen', 5),
(176, 'Haj Kaddour', 3),
(177, 'Ifrane', 3),
(178, 'Itzer', 8),
(179, 'Jorf', 8),
(180, 'Kehf Nsour', 5),
(181, 'Kerrouchen', 5),
(182, 'M\'haya', 3),
(183, 'M\'rirt', 5),
(184, 'Midelt', 8),
(185, 'Moulay Ali Cherif', 8),
(186, 'Moulay Bouazza', 5),
(187, 'Moulay Idriss Zerhoun', 3),
(188, 'Moussaoua', 3),
(189, 'N\'Zalat Bni Amar', 3),
(190, 'Ouaoumana', 5),
(191, 'Oued Ifrane', 3),
(192, 'Sabaa Aiyoun', 3),
(193, 'Sebt Jahjouh', 3),
(194, 'Sidi Addi', 3),
(195, 'Tichoute', 8),
(196, 'Tighassaline', 5),
(197, 'Tighza', 5),
(198, 'Timahdite', 3),
(199, 'Tinejdad', 8),
(200, 'Tizguite', 3),
(201, 'Toulal', 3),
(202, 'Tounfite', 8),
(203, 'Zaouia d\'Ifrane', 3),
(204, 'Zaïda', 8),
(205, 'Ahfir', 2),
(206, 'Aklim', 2),
(207, 'Al Aroui', 2),
(208, 'Aïn Bni Mathar', 2),
(209, 'Aïn Erreggada', 2),
(210, 'Ben Taïeb', 2),
(211, 'Berkane', 2),
(212, 'Bni Ansar', 2),
(213, 'Bni Chiker', 2),
(214, 'Bni Drar', 2),
(215, 'Bni Tadjite', 2),
(216, 'Bouanane', 2),
(217, 'Bouarfa', 2),
(218, 'Bouhdila', 2),
(219, 'Dar El Kebdani', 2),
(220, 'Debdou', 2),
(221, 'Douar Kannine', 2),
(222, 'Driouch', 2),
(223, 'El Aïoun Sidi Mellouk', 2),
(224, 'Farkhana', 2),
(225, 'Figuig', 2),
(226, 'Ihddaden', 2),
(227, 'Jaâdar', 2),
(228, 'Jerada', 2),
(229, 'Kariat Arekmane', 2),
(230, 'Kassita', 2),
(231, 'Kerouna', 2),
(232, 'Laâtamna', 2),
(233, 'Madagh', 2),
(234, 'Midar', 2),
(235, 'Nador', 2),
(236, 'Naima', 2),
(237, 'Oued Heimer', 2),
(238, 'Oujda', 2),
(239, 'Ras El Ma', 2),
(240, 'Saïdia', 2),
(241, 'Selouane', 2),
(242, 'Sidi Boubker', 2),
(243, 'Sidi Slimane Echcharaa', 2),
(244, 'Talsint', 2),
(245, 'Taourirt', 2),
(246, 'Tendrara', 2),
(247, 'Tiztoutine', 2),
(248, 'Touima', 2),
(249, 'Touissit', 2),
(250, 'Zaïo', 2),
(251, 'Zeghanghane', 2),
(252, 'Rabat', 4),
(253, 'Salé', 4),
(254, 'Ain El Aouda', 4),
(255, 'Harhoura', 4),
(256, 'Khémisset', 4),
(257, 'Oulmès', 4),
(258, 'Rommani', 4),
(259, 'Sidi Allal El Bahraoui', 4),
(260, 'Sidi Bouknadel', 4),
(261, 'Skhirate', 4),
(262, 'Tamesna', 4),
(263, 'Témara', 4),
(264, 'Tiddas', 4),
(265, 'Tiflet', 4),
(266, 'Touarga', 4),
(267, 'Agadir', 9),
(268, 'Agdz', 8),
(269, 'Agni Izimmer', 9),
(270, 'Aït Melloul', 9),
(271, 'Alnif', 8),
(272, 'Anzi', 9),
(273, 'Aoulouz', 9),
(274, 'Aourir', 9),
(275, 'Arazane', 9),
(276, 'Aït Baha', 9),
(277, 'Aït Iaâza', 9),
(278, 'Aït Yalla', 8),
(279, 'Ben Sergao', 9),
(280, 'Biougra', 9),
(281, 'Boumalne-Dadès', 8),
(282, 'Dcheira El Jihadia', 9),
(283, 'Drargua', 9),
(284, 'El Guerdane', 9),
(285, 'Harte Lyamine', 8),
(286, 'Ida Ougnidif', 9),
(287, 'Ifri', 8),
(288, 'Igdamen', 9),
(289, 'Ighil n\'Oumgoun', 8),
(290, 'Imassine', 8),
(291, 'Inezgane', 9),
(292, 'Irherm', 9),
(293, 'Kelaat-M\'Gouna', 8),
(294, 'Lakhsas', 9),
(295, 'Lakhsass', 9),
(296, 'Lqliâa', 9),
(297, 'M\'semrir', 8),
(298, 'Massa (Maroc)', 9),
(299, 'Megousse', 9),
(300, 'Ouarzazate', 8),
(301, 'Oulad Berhil', 9),
(302, 'Oulad Teïma', 9),
(303, 'Sarghine', 8),
(304, 'Sidi Ifni', 10),
(305, 'Skoura', 8),
(306, 'Tabounte', 8),
(307, 'Tafraout', 9),
(308, 'Taghzout', 1),
(309, 'Tagzen', 9),
(310, 'Taliouine', 9),
(311, 'Tamegroute', 8),
(312, 'Tamraght', 9),
(313, 'Tanoumrite Nkob Zagora', 8),
(314, 'Taourirt ait zaghar', 8),
(315, 'Taroudannt', 9),
(316, 'Temsia', 9),
(317, 'Tifnit', 9),
(318, 'Tisgdal', 9),
(319, 'Tiznit', 9),
(320, 'Toundoute', 8),
(321, 'Zagora', 8),
(322, 'Afourar', 5),
(323, 'Aghbala', 5),
(324, 'Azilal', 5),
(325, 'Aït Majden', 5),
(326, 'Beni Ayat', 5),
(327, 'Béni Mellal', 5),
(328, 'Bin elouidane', 5),
(329, 'Bradia', 5),
(330, 'Bzou', 5),
(331, 'Dar Oulad Zidouh', 5),
(332, 'Demnate', 5),
(333, 'Dra\'a', 8),
(334, 'El Ksiba', 5),
(335, 'Foum Jamaa', 5),
(336, 'Fquih Ben Salah', 5),
(337, 'Kasba Tadla', 5),
(338, 'Ouaouizeght', 5),
(339, 'Oulad Ayad', 5),
(340, 'Oulad M\'Barek', 5),
(341, 'Oulad Yaich', 5),
(342, 'Sidi Jaber', 5),
(343, 'Souk Sebt Oulad Nemma', 5),
(344, 'Zaouïat Cheikh', 5),
(345, 'Tanger‎', 1),
(346, 'Tétouan‎', 1),
(347, 'Akchour', 1),
(348, 'Assilah', 1),
(349, 'Bab Berred', 1),
(350, 'Bab Taza', 1),
(351, 'Brikcha', 1),
(352, 'Chefchaouen', 1),
(353, 'Dar Bni Karrich', 1),
(354, 'Dar Chaoui', 1),
(355, 'Fnideq', 1),
(356, 'Gueznaia', 1),
(357, 'Jebha', 1),
(358, 'Karia', 3),
(359, 'Khémis Sahel', 1),
(360, 'Ksar El Kébir', 1),
(361, 'Larache', 1),
(362, 'M\'diq', 1),
(363, 'Martil', 1),
(364, 'Moqrisset', 1),
(365, 'Oued Laou', 1),
(366, 'Oued Rmel', 1),
(367, 'Ouazzane', 1),
(368, 'Point Cires', 1),
(369, 'Sidi Lyamani', 1),
(370, 'Sidi Mohamed ben Abdallah el-Raisuni', 1),
(371, 'Zinat', 1),
(372, 'Ajdir‎', 1),
(373, 'Aknoul‎', 3),
(374, 'Al Hoceïma‎', 1),
(375, 'Aït Hichem‎', 1),
(376, 'Bni Bouayach‎', 1),
(377, 'Bni Hadifa‎', 1),
(378, 'Ghafsai‎', 3),
(379, 'Guercif‎', 2),
(380, 'Imzouren‎', 1),
(381, 'Inahnahen‎', 1),
(382, 'Issaguen (Ketama)‎', 1),
(383, 'Karia (El Jadida)‎', 6),
(384, 'Karia Ba Mohamed‎', 3),
(385, 'Oued Amlil‎', 3),
(386, 'Oulad Zbair‎', 3),
(387, 'Tahla‎', 3),
(388, 'Tala Tazegwaght‎', 1),
(389, 'Tamassint‎', 1),
(390, 'Taounate‎', 3),
(391, 'Targuist‎', 1),
(392, 'Taza‎', 3),
(393, 'Taïnaste‎', 3),
(394, 'Thar Es-Souk‎', 3),
(395, 'Tissa‎', 3),
(396, 'Tizi Ouasli‎', 3),
(397, 'Laayoune‎', 11),
(398, 'El Marsa‎', 11),
(399, 'Tarfaya‎', 11),
(400, 'Boujdour‎', 11),
(401, 'Awsard', 12),
(402, 'Oued-Eddahab', 12),
(403, 'Stehat', 1),
(404, 'Aït Attab', 5);


CREATE TABLE `db_livraison2`.`black_list` ( `num` INT(11) NOT NULL AUTO_INCREMENT , `user` INT(11) NOT NULL , `date` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`num`)) ENGINE = InnoDB;

-- --------------------------------------------------------

--
-- Structure de la vue `chauf`
--
DROP TABLE IF EXISTS `chauf`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chauf`  AS SELECT `chauffeur`.`Chauffeur_id` AS `chauffeur_id`, `chauffeur`.`User_id` AS `id` FROM `chauffeur``chauffeur`  ;

-- --------------------------------------------------------

--
-- Structure de la vue `chauff`
--
DROP TABLE IF EXISTS `chauff`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chauff`  AS SELECT `chauffeur`.`Chauffeur_id` AS `Chauffeur_id`, `chauffeur`.`User_id` AS `User_id`, `chauffeur`.`disponible` AS `disponible`, `validation_chauffeur`.`validation_id` AS `validation_id`, `validation_chauffeur`.`permis_conduit` AS `permis_conduit`, `validation_chauffeur`.`carte_grise` AS `carte_grise`, `validation_chauffeur`.`capacite_vehicule` AS `capacite_vehicule`, `validation_chauffeur`.`type_vehicule` AS `type_vehicule`, `validation_chauffeur`.`etat_chauffeur` AS `etat_chauffeur`, `validation_chauffeur`.`chauffeur` AS `chauffeur` FROM (`chauffeur` join `validation_chauffeur`) WHERE `chauffeur`.`Chauffeur_id` = `validation_chauffeur`.`chauffeur``chauffeur`  ;

-- --------------------------------------------------------

--
-- Structure de la vue `chauffeur_detail`
--
DROP TABLE IF EXISTS `chauffeur_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chauffeur_detail`  AS SELECT `utilisateur`.`User_id` AS `User_id`, `utilisateur`.`Nom` AS `Nom`, `utilisateur`.`Prenom` AS `Prenom`, `utilisateur`.`Ville` AS `Ville`, `utilisateur`.`Username` AS `Username`, `utilisateur`.`Email` AS `Email`, `utilisateur`.`Phone` AS `Phone`, `utilisateur`.`date_inscription` AS `date_inscription`, `utilisateur`.`role` AS `role`, `chauffeur`.`Chauffeur_id` AS `Chauffeur_id`, `chauffeur`.`disponible` AS `disponible` FROM (`utilisateur` join `chauffeur` on(`utilisateur`.`User_id` = `chauffeur`.`User_id`))  ;

-- --------------------------------------------------------

--
-- Structure de la vue `chauffeur_etails`
--
DROP TABLE IF EXISTS `chauffeur_etails`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `chauffeur_etails`  AS SELECT `chauffeur`.`Chauffeur_id` AS `chauffeur_id`, `chauffeur`.`disponible` AS `disponible`, `validation_chauffeur`.`validation_id` AS `validation_id`, `validation_chauffeur`.`permis_conduit` AS `permis_conduit`, `validation_chauffeur`.`carte_grise` AS `carte_grise`, `validation_chauffeur`.`capacite_vehicule` AS `capacite_vehicule`, `validation_chauffeur`.`type_vehicule` AS `type_vehicule`, `validation_chauffeur`.`etat_chauffeur` AS `etat_chauffeur`, `validation_chauffeur`.`CIN` AS `CIN`, `utilisateur`.`User_id` AS `User_id`, `utilisateur`.`Nom` AS `Nom`, `utilisateur`.`Prenom` AS `Prenom`, `utilisateur`.`Ville` AS `Ville`, `utilisateur`.`Phone` AS `phone`, `utilisateur`.`Image` AS `image` FROM ((`utilisateur` join `chauffeur`) join `validation_chauffeur` on(`utilisateur`.`User_id` = `chauffeur`.`User_id` and `chauffeur`.`Chauffeur_id` = `validation_chauffeur`.`chauffeur`))  ;

-- --------------------------------------------------------

--
-- Structure de la vue `client_detail`
--
DROP TABLE IF EXISTS `client_detail`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `client_detail`  AS SELECT `utilisateur`.`User_id` AS `User_id`, `utilisateur`.`Nom` AS `Nom`, `utilisateur`.`Prenom` AS `Prenom`, `utilisateur`.`Ville` AS `Ville`, `utilisateur`.`Username` AS `Username`, `utilisateur`.`Email` AS `Email`, `utilisateur`.`Phone` AS `Phone`, `utilisateur`.`Password` AS `Password`, `utilisateur`.`Image` AS `Image`, `utilisateur`.`date_inscription` AS `date_inscription`, `utilisateur`.`role` AS `role`, `client`.`client_id` AS `client_id`, `client`.`CIN` AS `CIN`, `client`.`addresse_client` AS `addresse_client`, `client`.`User` AS `User`, `client`.`dispo` AS `dispo` FROM (`utilisateur` join `client` on(`utilisateur`.`User_id` = `client`.`User`))  ;

-- --------------------------------------------------------

--
-- Structure de la vue `client_details`
--
DROP TABLE IF EXISTS `client_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `client_details`  AS SELECT `client`.`client_id` AS `client_id`, `client`.`CIN` AS `CIN`, `client`.`addresse_client` AS `addresse_client`, `client`.`User` AS `User`, `client`.`disponible` AS `disponible`, `utilisateur`.`User_id` AS `User_id`, `utilisateur`.`Nom` AS `Nom`, `utilisateur`.`Prenom` AS `Prenom`, `utilisateur`.`Ville` AS `Ville`, `utilisateur`.`Username` AS `Username`, `utilisateur`.`Email` AS `Email`, `utilisateur`.`Phone` AS `Phone`, `utilisateur`.`Password` AS `Password`, `utilisateur`.`Image` AS `Image`, `utilisateur`.`date_inscription` AS `date_inscription`, `utilisateur`.`role` AS `role` FROM (`client` join `utilisateur` on(`client`.`User` = `utilisateur`.`User_id`))  ;

-- --------------------------------------------------------

--
-- Structure de la vue `demande_client`
--
DROP TABLE IF EXISTS `demande_client`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `demande_client`  AS SELECT `utilisateur`.`Username` AS `client`, `demande`.`Demande_id` AS `Demande_id`, `demande`.`date_Demande` AS `date_Demande`, `demande`.`destination` AS `destination` FROM ((`client` join `utilisateur`) join `demande` on(`utilisateur`.`User_id` = `client`.`User` and `demande`.`cllient` = `client`.`client_id`))  ;

-- --------------------------------------------------------

--
-- Structure de la vue `livraison_details`
--
DROP TABLE IF EXISTS `livraison_details`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `livraison_details`  AS SELECT `livraison`.`num_Livraison` AS `num_Livraison`, `livraison`.`time_serv` AS `time_serv`, `livraison`.`date` AS `date`, `livraison`.`prix` AS `prix`, `livraison`.`commentaire` AS `commentaire`, `livraison`.`satisfaction` AS `satisfaction`, `livraison`.`etat` AS `etat`, `livraison`.`demande` AS `demande`, `livraison`.`chauffeur` AS `chauffeur`, `demande`.`Demande_id` AS `Demande_id`, `demande`.`prix_Demande` AS `prix_Demande`, `demande`.`date_Demande` AS `date_Demande`, `demande`.`date_limite` AS `date_limite`, `demande`.`cllient` AS `cllient`, `demande`.`destination` AS `destination`, `client`.`client_id` AS `client_id`, `client`.`CIN` AS `CIN`, `client`.`addresse_client` AS `addresse_client`, `client`.`User` AS `User`, `client`.`dispo` AS `dispo`, `chauf`.`chauffeur_id` AS `chauffeur_id`, `chauf`.`id` AS `id`, `utilisateur`.`User_id` AS `User_id`, `utilisateur`.`Nom` AS `Nom`, `utilisateur`.`Prenom` AS `Prenom`, `utilisateur`.`Ville` AS `Ville`, `utilisateur`.`Username` AS `Username`, `utilisateur`.`Email` AS `Email`, `utilisateur`.`Phone` AS `Phone`, `utilisateur`.`Password` AS `Password`, `utilisateur`.`Image` AS `Image`, `utilisateur`.`date_inscription` AS `date_inscription`, `utilisateur`.`role` AS `role` FROM ((((`livraison` join `demande`) join `client`) join `chauf`) join `utilisateur` on(`livraison`.`demande` = `demande`.`Demande_id` and `utilisateur`.`User_id` = `client`.`User` and `utilisateur`.`User_id` = `chauf`.`id` and `chauf`.`id` = `livraison`.`chauffeur` and `client`.`client_id` = `demande`.`cllient`))  ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`admin_id`),
  ADD KEY `User_id` (`User_id`);

--
-- Index pour la table `assistance`
--
ALTER TABLE `assistance`
  ADD PRIMARY KEY (`num`),
  ADD KEY `user` (`user`);

--
-- Index pour la table `avis_client`
--
ALTER TABLE `avis_client`
  ADD PRIMARY KEY (`num`),
  ADD KEY `client` (`client`);

--
-- Index pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  ADD PRIMARY KEY (`Chauffeur_id`),
  ADD KEY `User_id` (`User_id`) USING BTREE;

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`),
  ADD KEY `User` (`User`);

--
-- Index pour la table `coli`
--
ALTER TABLE `coli`
  ADD PRIMARY KEY (`num`),
  ADD KEY `demmande` (`demmande`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`),
  ADD KEY `contact_foreign` (`id_emetteur`);

--
-- Index pour la table `demande`
--
ALTER TABLE `demande`
  ADD PRIMARY KEY (`Demande_id`),
  ADD KEY `cllient` (`cllient`);

--
-- Index pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD PRIMARY KEY (`num_Livraison`),
  ADD KEY `demande` (`demande`),
  ADD KEY `livaison_foreign` (`chauffeur`);

--
-- Index pour la table `login_details`
--
ALTER TABLE `login_details`
  ADD PRIMARY KEY (`login_id`),
  ADD KEY `foreignkey` (`user`);

--
-- Index pour la table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`message_id`),
  ADD KEY `vrt` (`emetteur`),
  ADD KEY `test` (`recepteur`);

--
-- Index pour la table `offre_proposer`
--
ALTER TABLE `offre_proposer`
  ADD PRIMARY KEY (`offre_id`),
  ADD KEY `Demande` (`Demande`);

--
-- Index pour la table `payement`
--
ALTER TABLE `payement`
  ADD PRIMARY KEY (`payement_id`),
  ADD KEY `livraison` (`livraison`);

--
-- Index pour la table `region`
--
ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`User_id`);

--
-- Index pour la table `validation_chauffeur`
--
ALTER TABLE `validation_chauffeur`
  ADD PRIMARY KEY (`validation_id`),
  ADD KEY `chauffeur` (`chauffeur`);

--
-- Index pour la table `ville`
--
ALTER TABLE `ville`
  ADD PRIMARY KEY (`id`),
  ADD KEY `region` (`region`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `assistance`
--
ALTER TABLE `assistance`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `avis_client`
--
ALTER TABLE `avis_client`
  MODIFY `num` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  MODIFY `Chauffeur_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `demande`
--
ALTER TABLE `demande`
  MODIFY `Demande_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `livraison`
--
ALTER TABLE `livraison`
  MODIFY `num_Livraison` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `login_details`
--
ALTER TABLE `login_details`
  MODIFY `login_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT pour la table `message`
--
ALTER TABLE `message`
  MODIFY `message_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT pour la table `offre_proposer`
--
ALTER TABLE `offre_proposer`
  MODIFY `offre_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `payement`
--
ALTER TABLE `payement`
  MODIFY `payement_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `validation_chauffeur`
--
ALTER TABLE `validation_chauffeur`
  MODIFY `validation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `ville`
--
ALTER TABLE `ville`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=405;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD CONSTRAINT `administrateur_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `utilisateur` (`User_id`);

--
-- Contraintes pour la table `assistance`
--
ALTER TABLE `assistance`
  ADD CONSTRAINT `assistance_ibfk_1` FOREIGN KEY (`user`) REFERENCES `utilisateur` (`User_id`);

--
-- Contraintes pour la table `avis_client`
--
ALTER TABLE `avis_client`
  ADD CONSTRAINT `avis_client_ibfk_1` FOREIGN KEY (`client`) REFERENCES `client` (`client_id`);

--
-- Contraintes pour la table `chauffeur`
--
ALTER TABLE `chauffeur`
  ADD CONSTRAINT `chauffeur_ibfk_1` FOREIGN KEY (`User_id`) REFERENCES `utilisateur` (`User_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Contraintes pour la table `client`
--
ALTER TABLE `client`
  ADD CONSTRAINT `contraint_client` FOREIGN KEY (`User`) REFERENCES `utilisateur` (`User_id`);

--
-- Contraintes pour la table `coli`
--
ALTER TABLE `coli`
  ADD CONSTRAINT `coli_ibfk_1` FOREIGN KEY (`demmande`) REFERENCES `demande` (`Demande_id`);

--
-- Contraintes pour la table `contact`
--
ALTER TABLE `contact`
  ADD CONSTRAINT `contact_foreign` FOREIGN KEY (`id_emetteur`) REFERENCES `utilisateur` (`User_id`);

--
-- Contraintes pour la table `demande`
--
ALTER TABLE `demande`
  ADD CONSTRAINT `demande_ibfk_1` FOREIGN KEY (`cllient`) REFERENCES `client` (`client_id`);

--
-- Contraintes pour la table `livraison`
--
ALTER TABLE `livraison`
  ADD CONSTRAINT `livaison_foreign` FOREIGN KEY (`chauffeur`) REFERENCES `chauffeur` (`Chauffeur_id`),
  ADD CONSTRAINT `livraison_ibfk_1` FOREIGN KEY (`demande`) REFERENCES `demande` (`Demande_id`);

--
-- Contraintes pour la table `login_details`
--
ALTER TABLE `login_details`
  ADD CONSTRAINT `login_details_ibfk_1` FOREIGN KEY (`user`) REFERENCES `utilisateur` (`User_id`);

--
-- Contraintes pour la table `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `message_ibfk_1` FOREIGN KEY (`recepteur`) REFERENCES `utilisateur` (`User_id`),
  ADD CONSTRAINT `message_ibfk_2` FOREIGN KEY (`emetteur`) REFERENCES `utilisateur` (`User_id`),
  ADD CONSTRAINT `test` FOREIGN KEY (`recepteur`) REFERENCES `utilisateur` (`User_id`),
  ADD CONSTRAINT `vrt` FOREIGN KEY (`emetteur`) REFERENCES `utilisateur` (`User_id`),
  ADD CONSTRAINT `vrtlo` FOREIGN KEY (`recepteur`) REFERENCES `utilisateur` (`User_id`),
  ADD CONSTRAINT `vrty` FOREIGN KEY (`recepteur`) REFERENCES `utilisateur` (`User_id`);

--
-- Contraintes pour la table `offre_proposer`
--
ALTER TABLE `offre_proposer`
  ADD CONSTRAINT `offre_proposer_ibfk_1` FOREIGN KEY (`Demande`) REFERENCES `demande` (`Demande_id`);

--
-- Contraintes pour la table `payement`
--
ALTER TABLE `payement`
  ADD CONSTRAINT `payement_ibfk_1` FOREIGN KEY (`livraison`) REFERENCES `livraison` (`num_Livraison`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `validation_chauffeur`
--
ALTER TABLE `validation_chauffeur`
  ADD CONSTRAINT `validation_foreign` FOREIGN KEY (`chauffeur`) REFERENCES `chauffeur` (`Chauffeur_id`);

--
-- Contraintes pour la table `ville`
--
ALTER TABLE `ville`
  ADD CONSTRAINT `ville_ibfk_1` FOREIGN KEY (`region`) REFERENCES `region` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
