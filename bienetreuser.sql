-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 19 mars 2024 à 10:50
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bienetre`
--

-- --------------------------------------------------------

--
-- Structure de la table `bienetreuser`
--

CREATE TABLE `bienetreuser` (
  `identifiant` varchar(255) NOT NULL,
  `mdp` varchar(255) NOT NULL,
  `pdp` varchar(250) NOT NULL DEFAULT '''''',
  `professionnel` int(11) NOT NULL DEFAULT 0,
  `santé` int(11) NOT NULL DEFAULT 0,
  `financier` int(11) NOT NULL DEFAULT 0,
  `social` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bienetreuser`
--

INSERT INTO `bienetreuser` (`identifiant`, `mdp`, `pdp`, `professionnel`, `santé`, `financier`, `social`) VALUES
('nabil', '$2y$10$etCEn/etBezD7/p6RWWk2u.VWGPmF/R4RII2jDj74IY6wituwzike', '/../../../../../Conduite-Pj/img/utilisateur.jpg', 1, 1, 1, 1),
('adam', '$2y$10$2bCH08fW0xJo1EgVI1NN1OFQs6U8Ak.pdmiP.48kIg80LbvENnXxu', '/../../../../../Conduite-Pj/img/Goku.jpg', 5, 3, 4, 2),
('thomas', '$2y$10$cWgx/9StvoH0GphXtHm1OuDWe4BcqAyY1do.DIn7Iu9dV.St0D21e', '/../../../../../Conduite-Pj/img/utilisateur.jpg', 3, 3, 1, 3),
('ayoub', '$2y$10$hD07CEVTAlNC1Hornjwjq.viUZ.WPo7LEY0Lfpb931rViga26fRbC', '/../../../../../Conduite-Pj/img/utilisateur.jpg', 4, 4, 4, 4),
('', '', '', 0, 0, 0, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
