-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:8889
-- Généré le :  Dim 01 Octobre 2017 à 23:47
-- Version du serveur :  5.6.35
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `streetfighter`
--

-- --------------------------------------------------------

--
-- Structure de la table `persos`
--

CREATE TABLE `persos` (
  `id` int(11) NOT NULL,
  `nom` varchar(32) NOT NULL,
  `type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `persos`
--
ALTER TABLE `persos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `persos`
--
ALTER TABLE `persos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;