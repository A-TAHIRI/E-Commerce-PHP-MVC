-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 09 jan. 2023 à 15:07
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `bijoux-siam`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int NOT NULL,
  `nom_Article` varchar(50) NOT NULL,
  `Quantité` int NOT NULL,
  `description_Article` varchar(100) NOT NULL,
  `type_Article` varchar(20) NOT NULL,
  `prix_Article` float(15,3) NOT NULL,
  `reference_Article` varchar(50) NOT NULL,
  `dat_Article` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image1_Article` varchar(100) NOT NULL,
  `image2_Article` varchar(100) NOT NULL,
  `id_categories` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_categories_FK` (`id_categories`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `nom_Article`, `Quantité`, `description_Article`, `type_Article`, `prix_Article`, `reference_Article`, `dat_Article`, `image1_Article`, `image2_Article`, `id_categories`) VALUES
(1, 'Boucles d\'oreilles originales', 30, 'Boucles d\'oreilles originales', '', 22.900, '', '2023-01-09 15:42:55', 'b.oreille2.png', 'b.oreille1.png', 2),
(2, 'Trios de Brcelets Dorés Simple', 20, 'Trios de Brcelet Dorés Simple', '', 12.990, '', '2023-01-09 15:50:14', 'braslete1-removebg-preview.png', 'braslete1.jpeg', 3),
(3, 'Collier Etoile', 30, 'Collier Etoile', 'Or', 14.990, '', '2022-12-30 15:07:58', 'collier2.png', 'collier1.png', 1),
(4, 'bague \"Doria\"', 30, 'bague \"Doria\"', '', 27.000, '', '2023-01-09 15:55:13', 'b-removebg-preview.png', 'baguedor.png', 4),
(5, 'Bracelet de cheville\'Pearly\'', 20, 'Bracelet de cheville\'Pearly\'', 'Or', 21.990, '', '2022-12-30 15:18:10', 'b.cheville2.png', 'f6.png', 5),
(6, 'MC Femme Montre', 30, 'MC Femme Montre', 'Or', 50.000, '', '2022-12-30 15:22:17', 'Montere1-removebg-preview.png', 'Montere1-removebg-preview.png', 6);

-- --------------------------------------------------------

--
-- Structure de la table `cartefideles`
--

DROP TABLE IF EXISTS `cartefideles`;
CREATE TABLE IF NOT EXISTS `cartefideles` (
  `id` int NOT NULL,
  `numeros_CarteFidele` varchar(50) NOT NULL,
  `dat_Validite_Debut` datetime NOT NULL,
  `dat_Validite_Fin` date NOT NULL,
  `points_CarteFidele` int NOT NULL,
  `id_clients` int NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `CarteFideles_clients_AK` (`id_clients`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int NOT NULL,
  `nom_Categorie` varchar(50) NOT NULL,
  `image_Categorie` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom_Categorie`, `image_Categorie`) VALUES
(1, 'Collier', 'f1.png'),
(2, 'B.d\'oreille', 'f2.png'),
(3, 'Bracelet', 'f3.png'),
(4, 'Bague', 'f4.png'),
(5, 'B.cheville', 'f5.png'),
(6, 'Montre', 'Montere.png'),
(7, 'Collier', 'f1.png');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL,
  `nomClient` varchar(50) NOT NULL,
  `PrenomClient` varchar(50) NOT NULL,
  `SexeClient` varchar(50) NOT NULL,
  `AdresseClient` varchar(50) NOT NULL,
  `CodePostalClient` varchar(50) NOT NULL,
  `VilleClient` varchar(50) NOT NULL,
  `TelephoneClient` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `pseudo_Client` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pass_Client` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `clients`
--

INSERT INTO `clients` (`id`, `nomClient`, `PrenomClient`, `SexeClient`, `AdresseClient`, `CodePostalClient`, `VilleClient`, `TelephoneClient`, `Email`, `pseudo_Client`, `pass_Client`) VALUES
(1, '', '', '', '', '', '', '', '', 'abdel', '8c6617dbddaf5ee6d4dd0a91108429ecf6018408');

-- --------------------------------------------------------

--
-- Structure de la table `commandes`
--

DROP TABLE IF EXISTS `commandes`;
CREATE TABLE IF NOT EXISTS `commandes` (
  `id` int NOT NULL,
  `dat_Commande` date NOT NULL,
  `numeros_Commande` varchar(50) NOT NULL,
  `numeros_Facture` varchar(50) NOT NULL,
  `id_clients` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Commandes_clients_FK` (`id_clients`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `paniers`
--

DROP TABLE IF EXISTS `paniers`;
CREATE TABLE IF NOT EXISTS `paniers` (
  `id` int NOT NULL,
  `id_articles` int NOT NULL,
  `total_Prix` varchar(50) NOT NULL,
  `quantite_Produit` int NOT NULL,
  `dat_Panier` datetime NOT NULL,
  PRIMARY KEY (`id`,`id_articles`),
  KEY `paniers_articles0_FK` (`id_articles`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_categories_FK` FOREIGN KEY (`id_categories`) REFERENCES `categories` (`id`);

--
-- Contraintes pour la table `cartefideles`
--
ALTER TABLE `cartefideles`
  ADD CONSTRAINT `CarteFideles_clients_FK` FOREIGN KEY (`id_clients`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `commandes`
--
ALTER TABLE `commandes`
  ADD CONSTRAINT `Commandes_clients_FK` FOREIGN KEY (`id_clients`) REFERENCES `clients` (`id`);

--
-- Contraintes pour la table `paniers`
--
ALTER TABLE `paniers`
  ADD CONSTRAINT `paniers_articles0_FK` FOREIGN KEY (`id_articles`) REFERENCES `articles` (`id`),
  ADD CONSTRAINT `paniers_clients_FK` FOREIGN KEY (`id`) REFERENCES `clients` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
