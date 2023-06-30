-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : ven. 30 juin 2023 à 11:18
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sleeptonight`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_categorie` int(11) NOT NULL,
  `designation` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `designation`) VALUES
(1, 'India'),
(2, 'Spain'),
(3, 'Canada'),
(4, 'South Korea'),
(5, 'Indonesia');

-- --------------------------------------------------------

--
-- Structure de la table `chambre`
--

CREATE TABLE `chambre` (
  `id_chambre` int(11) NOT NULL,
  `prix` decimal(15,3) DEFAULT NULL,
  `emplacement` varchar(50) NOT NULL,
  `etage` varchar(50) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `num_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `chambre`
--

INSERT INTO `chambre` (`id_chambre`, `prix`, `emplacement`, `etage`, `id_categorie`, `num_reservation`) VALUES
(11, 0.000, 'Balochistan', '1', 1, 1),
(12, 0.000, 'Xīnán', '2', 2, 2),
(13, 0.000, 'Stockholms län', '3', 3, 3),
(14, 0.000, 'Samsun', '4', 4, 4),
(15, 0.000, 'North Island', '5', 5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id_client` int(11) NOT NULL,
  `nationalite` varchar(150) DEFAULT NULL,
  `num_passeport` varchar(150) DEFAULT NULL,
  `nom_prenom` varchar(50) DEFAULT NULL,
  `adresse` varchar(50) DEFAULT NULL,
  `telephone` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`id_client`, `nationalite`, `num_passeport`, `nom_prenom`, `adresse`, `telephone`) VALUES
(1, 'Costa Rica', 'SVK88KGA5TN', 'Ella Tillman', 'P.O. Box 801, 496 Sit Ave', '(850) 377-6012'),
(2, 'Chile', 'WJP48YVY4WS', 'Elvis Rutledge', 'Ap #848-3226 Morbi Rd.', '(766) 246-8603'),
(3, 'South Korea', 'XSM17MUO2TO', 'Marah Glenn', '1385 Dictum Ave', '1-437-883-1167'),
(4, 'France', 'TOA83RLY8VK', 'Aaron Simmons', 'Ap #528-137 Iaculis Av.', '(377) 435-5821'),
(5, 'Turkey', 'SSW91XML4NJ', 'Juliet Rasmussen', 'Ap #686-4747 Suspendisse Road', '1-285-213-1938');

-- --------------------------------------------------------

--
-- Structure de la table `consulte`
--

CREATE TABLE `consulte` (
  `id_categorie` int(11) NOT NULL,
  `id_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `consulte`
--

INSERT INTO `consulte` (`id_categorie`, `id_client`) VALUES
(1, 3),
(2, 1),
(3, 2),
(4, 5),
(5, 4);

-- --------------------------------------------------------

--
-- Structure de la table `effectuer`
--

CREATE TABLE `effectuer` (
  `id_client` int(11) NOT NULL,
  `id_reservation` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `effectuer`
--

INSERT INTO `effectuer` (`id_client`, `id_reservation`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id_reservation` int(11) NOT NULL,
  `date_reservation` varchar(150) DEFAULT NULL,
  `id_client` varchar(150) DEFAULT NULL,
  `id_chambre` varchar(50) DEFAULT NULL,
  `date_entrer` varchar(15) DEFAULT NULL,
  `date_sortie` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id_reservation`, `date_reservation`, `id_client`, `id_chambre`, `date_entrer`, `date_sortie`) VALUES
(1, 'Mar 10, 2024', '1', '1', 'Aug 23, 2022', 'Jul 1, 2024'),
(2, 'Aug 11, 2022', '2', '2', 'Nov 17, 2022', 'Nov 5, 2023'),
(3, 'Nov 26, 2022', '3', '3', 'Apr 28, 2024', 'Sep 1, 2023'),
(4, 'Dec 24, 2022', '4', '4', 'Oct 8, 2022', 'May 26, 2024'),
(5, 'Oct 27, 2023', '5', '5', 'Nov 15, 2022', 'Aug 7, 2022');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id_utilisateur` int(11) NOT NULL,
  `login` varchar(150) NOT NULL,
  `mot_de_passe` varchar(150) DEFAULT NULL,
  `cod_client` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id_utilisateur`, `login`, `mot_de_passe`, `cod_client`) VALUES
(1, 'Jackson Mejia', 'FGR83OBG1MQ', 1),
(2, 'Chancellor Mclean', 'FKH71PEQ2HB', 2),
(3, 'Emily Hill', 'PDJ11KNE2NI', 3),
(4, 'Lev Stevenson', 'YFV25JQL0SO', 4),
(5, 'Jesse Jimenez', 'KZU67CTH0KY', 5);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_categorie`);

--
-- Index pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD PRIMARY KEY (`id_chambre`),
  ADD KEY `Chambre_Categorie_FK` (`id_categorie`),
  ADD KEY `Chambre_Reservation0_FK` (`num_reservation`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id_client`);

--
-- Index pour la table `consulte`
--
ALTER TABLE `consulte`
  ADD PRIMARY KEY (`id_categorie`,`id_client`),
  ADD KEY `Consulte_Client0_FK` (`id_client`);

--
-- Index pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD PRIMARY KEY (`id_client`,`id_reservation`),
  ADD KEY `Effectuer_Reservation0_FK` (`id_reservation`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id_reservation`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id_utilisateur`),
  ADD UNIQUE KEY `Utilisateur_Client_AK` (`cod_client`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_categorie` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `chambre`
--
ALTER TABLE `chambre`
  MODIFY `id_chambre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id_client` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id_reservation` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id_utilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `chambre`
--
ALTER TABLE `chambre`
  ADD CONSTRAINT `Chambre_Categorie_FK` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `Chambre_Reservation0_FK` FOREIGN KEY (`num_reservation`) REFERENCES `reservation` (`id_reservation`);

--
-- Contraintes pour la table `consulte`
--
ALTER TABLE `consulte`
  ADD CONSTRAINT `Consulte_Categorie_FK` FOREIGN KEY (`id_categorie`) REFERENCES `categorie` (`id_categorie`),
  ADD CONSTRAINT `Consulte_Client0_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`);

--
-- Contraintes pour la table `effectuer`
--
ALTER TABLE `effectuer`
  ADD CONSTRAINT `Effectuer_Client_FK` FOREIGN KEY (`id_client`) REFERENCES `client` (`id_client`),
  ADD CONSTRAINT `Effectuer_Reservation0_FK` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id_reservation`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `Utilisateur_Client_FK` FOREIGN KEY (`cod_client`) REFERENCES `client` (`id_client`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
