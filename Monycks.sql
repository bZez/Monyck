-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  ven. 24 nov. 2017 à 10:57
-- Version du serveur :  10.1.28-MariaDB
-- Version de PHP :  7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `Monycks`
--

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `execTime` time NOT NULL,
  `insurance` tinyint(1) NOT NULL,
  `id_ticket` int(11) NOT NULL,
  `id_user_offer` int(11) NOT NULL,
  `id_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offers`
--

INSERT INTO `offers` (`id`, `amount`, `execTime`, `insurance`, `id_ticket`, `id_user_offer`, `id_status`) VALUES
(3, 101, '00:20:17', 0, 1, 2, 2),
(6, 666, '00:00:00', 0, 3, 2, 1),
(7, 666, '00:00:00', 1, 1, 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `explanation` float NOT NULL,
  `relation` float NOT NULL,
  `comitment` float NOT NULL,
  `id_offer` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reports`
--

INSERT INTO `reports` (`id`, `explanation`, `relation`, `comitment`, `id_offer`) VALUES
(1, 5, 5, 5, 3);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(11) NOT NULL,
  `language` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `language`) VALUES
(1, 'html'),
(2, 'PHP'),
(3, 'JS'),
(4, 'MySQL'),
(5, 'othersssss');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'OPEN'),
(2, 'CLOSED'),
(3, 'SOLVED'),
(4, 'FAILED');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(500) NOT NULL,
  `creationDate` date NOT NULL,
  `expTime` time NOT NULL,
  `id_user_ticket` int(11) NOT NULL,
  `id_skill` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `description`, `creationDate`, `expTime`, `id_user_ticket`, `id_skill`) VALUES
(1, 'ticket', 'ceci est la description du ticket de test...', '2017-11-21', '00:20:17', 2, 2),
(3, 'Ticket CLIENT', 'sdtgsefghsrdfhgs', '0000-00-00', '00:00:00', 7, 1);

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `transferDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment` varchar(500) NOT NULL,
  `id_receiver` int(11) NOT NULL,
  `id_sender` int(11) NOT NULL,
  `id_transaction_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transactions`
--

INSERT INTO `transactions` (`id`, `amount`, `transferDate`, `comment`, `id_receiver`, `id_sender`, `id_transaction_type`) VALUES
(3, 666, '2017-11-24 11:40:05', 'you earn that because i love you', 2, 7, 2);

-- --------------------------------------------------------

--
-- Structure de la table `transaction_types`
--

CREATE TABLE `transaction_types` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `transaction_types`
--

INSERT INTO `transaction_types` (`id`, `type`) VALUES
(1, 'Bonus'),
(2, 'Extra'),
(4, 'Payment(s)');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `birthday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `login`, `password`, `birthday`) VALUES
(2, 'admin', 'supreme', 'admin@admin.com', 'administrator', '123456', '0000-00-00'),
(7, 'john', 'doe', 'john@doe.com', 'client', '123456', '2017-11-24');

-- --------------------------------------------------------

--
-- Structure de la table `user_types`
--

CREATE TABLE `user_types` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_types`
--

INSERT INTO `user_types` (`id`, `type`) VALUES
(1, 'Customer'),
(2, 'Banker'),
(3, 'Insurer');

-- --------------------------------------------------------

--
-- Structure de la table `user_types_users`
--

CREATE TABLE `user_types_users` (
  `id_user` int(11) NOT NULL,
  `id_user_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_types_users`
--

INSERT INTO `user_types_users` (`id_user`, `id_user_type`) VALUES
(2, 1),
(2, 2),
(2, 3),
(2, 7),
(6, 1),
(6, 2),
(6, 7),
(7, 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user_offer` (`id_user_offer`),
  ADD KEY `id_status` (`id_status`),
  ADD KEY `id_ticket` (`id_ticket`);

--
-- Index pour la table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_offer` (`id_offer`);

--
-- Index pour la table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_skill` (`id_skill`),
  ADD KEY `id_user_ticket` (`id_user_ticket`);

--
-- Index pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_receiver` (`id_receiver`),
  ADD KEY `id_sender` (`id_sender`),
  ADD KEY `id_transaction_type` (`id_transaction_type`);

--
-- Index pour la table `transaction_types`
--
ALTER TABLE `transaction_types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_types`
--
ALTER TABLE `user_types`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user_types_users`
--
ALTER TABLE `user_types_users`
  ADD PRIMARY KEY (`id_user`,`id_user_type`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_user_type` (`id_user_type`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `transaction_types`
--
ALTER TABLE `transaction_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user_types`
--
ALTER TABLE `user_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `id_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_ticket` FOREIGN KEY (`id_ticket`) REFERENCES `tickets` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_user_offer` FOREIGN KEY (`id_user_offer`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `id_offer` FOREIGN KEY (`id_offer`) REFERENCES `offers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `id_receiver` FOREIGN KEY (`id_receiver`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_sender` FOREIGN KEY (`id_sender`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `id_transaction_type` FOREIGN KEY (`id_transaction_type`) REFERENCES `transaction_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;