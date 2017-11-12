-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  Dim 12 nov. 2017 à 22:07
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
-- Base de données :  `monyckDB`
--

-- --------------------------------------------------------

--
-- Structure de la table `offers`
--

CREATE TABLE `offers` (
  `id` int(10) NOT NULL,
  `#id_ticket` int(10) NOT NULL,
  `#id_user` int(10) NOT NULL,
  `#amount` int(10) NOT NULL,
  `time` int(10) NOT NULL,
  `insurance` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `offers`
--

INSERT INTO `offers` (`id`, `#id_ticket`, `#id_user`, `#amount`, `time`, `insurance`) VALUES
(1, 1, 1, 100, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `skills`
--

CREATE TABLE `skills` (
  `id` int(10) NOT NULL,
  `skillname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `skills`
--

INSERT INTO `skills` (`id`, `skillname`) VALUES
(1, 'HTML & CSS'),
(2, 'JS'),
(3, 'PHP'),
(4, 'FULLSTACK');

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

CREATE TABLE `status` (
  `id` int(10) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `status`
--

INSERT INTO `status` (`id`, `status`) VALUES
(1, 'Active'),
(2, 'Solved');

-- --------------------------------------------------------

--
-- Structure de la table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) NOT NULL,
  `description` varchar(100) NOT NULL,
  `#id_offer` int(10) NOT NULL,
  `creationDate` date NOT NULL,
  `#status` int(10) NOT NULL,
  `#id_user` int(10) NOT NULL,
  `#id_skills` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tickets`
--

INSERT INTO `tickets` (`id`, `description`, `#id_offer`, `creationDate`, `#status`, `#id_user`, `#id_skills`) VALUES
(1, 'TEST OFFRE 100', 1, '2017-11-11', 1, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(10) NOT NULL,
  `#id_receiver` int(10) NOT NULL,
  `#id_sender` int(10) NOT NULL,
  `#id_transaction_type` int(10) NOT NULL,
  `amount` int(10) NOT NULL,
  `transferDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `transaction_type`
--

CREATE TABLE `transaction_type` (
  `id` int(10) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `login` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `#id_user_type` int(10) NOT NULL DEFAULT '1',
  `#id_transaction` int(10) DEFAULT NULL,
  `#id_skills` int(11) DEFAULT NULL,
  `credit` int(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `login`, `password`, `#id_user_type`, `#id_transaction`, `#id_skills`, `credit`) VALUES
(1, 'Sam', 'BZEZ', 'indabzez@icloud.com', 'bzezzz', '123456', 1, NULL, 4, 999999999),
(2, 'Céline', 'Lembach', 'celine-lembach@hotmail.fr', 'Eni666', 'pass', 1, NULL, 1, 666),
(4, 'Testeur', 'DEFOLIE', 'mon@mail.me', 'ULTIME', '123456', 1, NULL, 4, 0),
(6, 'John', 'Doe', 'john@doe.fr', 'Billy', '123456', 1, NULL, 4, 0),
(7, 'Nyny', 'nyny', 'nyefnydsfndgd@frfr.fr', 'Nyny', 'sfdsgsdfg', 1, NULL, 4, 0);

-- --------------------------------------------------------

--
-- Structure de la table `user_type`
--

CREATE TABLE `user_type` (
  `id` int(10) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `user_type`
--

INSERT INTO `user_type` (`id`, `type`) VALUES
(1, 'user'),
(2, 'bank');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `tickets_fk0` (`#id_offer`),
  ADD KEY `tickets_fk1` (`#status`),
  ADD KEY `tickets_fk2` (`#id_user`),
  ADD KEY `tickets_fk3` (`#id_skills`);

--
-- Index pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_fk0` (`#id_receiver`),
  ADD KEY `transactions_fk1` (`#id_sender`);

--
-- Index pour la table `transaction_type`
--
ALTER TABLE `transaction_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_fk0` (`#id_user_type`),
  ADD KEY `users_fk1` (`#id_skills`);

--
-- Index pour la table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `transaction_type`
--
ALTER TABLE `transaction_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT pour la table `user_type`
--
ALTER TABLE `user_type`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `Offre ticket` FOREIGN KEY (`#id_offer`) REFERENCES `offers` (`id`),
  ADD CONSTRAINT `tickets_fk1` FOREIGN KEY (`#status`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `tickets_fk2` FOREIGN KEY (`#id_user`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `tickets_fk3` FOREIGN KEY (`#id_skills`) REFERENCES `skills` (`id`);

--
-- Contraintes pour la table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_fk0` FOREIGN KEY (`#id_receiver`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `transactions_fk1` FOREIGN KEY (`#id_sender`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_fk0` FOREIGN KEY (`#id_user_type`) REFERENCES `user_type` (`id`),
  ADD CONSTRAINT `users_fk1` FOREIGN KEY (`#id_skills`) REFERENCES `skills` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
