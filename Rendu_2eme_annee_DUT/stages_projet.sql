-- phpMyAdmin SQL Dump
-- version 4.5.4.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 19 Octobre 2021 à 08:44
-- Version du serveur :  5.7.11
-- Version de PHP :  5.6.18

CREATE DATABASE IF NOT EXISTS `stages_projet` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `stages_projet`;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `stages_projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `contenus`
--

CREATE TABLE `contenus` (
  `id_auteur` int(20) UNSIGNED NOT NULL,
  `suivi_stage` text NOT NULL,
  `doc_fin_stage` text NOT NULL,
  `rapport_stage` text NOT NULL,
  `soutenance` text NOT NULL,
  `procedure_candidature` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `contenus`
--

INSERT INTO `contenus` (`id_auteur`, `suivi_stage`, `doc_fin_stage`, `rapport_stage`, `soutenance`, `procedure_candidature`) VALUES
(1, '         <font color="#4CAF50" face="verdana"> 
   <br>
Le maître de stage est votre responsable dans l’entreprise, c’est lui qui vous encadre sur une base quotidienne au cours du stage.   <br>

C’est lui qui fixe les règles à appliquer dans l’entreprise. En tant que stagiaire, vous devez vous conformer au règlement de l\'entreprise.   <br>

Le référent de votre stage est votre interlocuteur pour l’IUT. Son rôle est de vous suivre et de vous conseiller pendant la durée de votre stage. Il présidera votre jury lors de  la soutenance.   <br>

L’attestation de fin de stage est obligatoire pour valider le stage.   <br>

Cette attestation est à faire remplir par l’entreprise à la fin du stage. Vous êtes tenus d’en remettre une copie au secrétariat pédagogique.            <br>
            <br>
</font>                           ',
'<font color="#4CAF50" face="verdana"> 
   <br>
Vous devez vous assurer que les trois documents ci-après ont été remplis et rendus au secrétariat du département informatique avant votre soutenance :   <br>
    <br>
    L\'organisme d\'accueil doit remplir et viser l\'annexe 1 (attestation de fin de stage) et vous le remettre à la fin du stage ;    <br>
    L\'organisme d\'accueil doit remplir et viser l\'annexe 2 (fiche d\'évaluation du stage par l\'organisme d\'accueil) ;    <br>
    L\'étudiant doit remplir l\'annexe 3 (fiche d\'évaluation du stage par l\'étudiant).             <br>       
            <br>
</font>', 
' <font color="black" face="verdana">
            <br>
Le rapport doit contenir impérativement les éléments suivants :            <br>
   <br>
    la page de couverture (cartonnée) ;            <br>
    la page de garde : elle reprend les éléments principaux de la page de couverture ;            <br>
    un résumé en français ;            <br>
    un ensemble de mots clés décrivant votre travail ;            <br>
    les remerciements ;            <br>
    la table des matières ;            <br>
    l’introduction ;            <br>
    le corps du rapport (pas plus de 3 pages consacrées à la présentation de l’entreprise) ;            <br>
    l\'analyse par le stagiaire de son insertion dans le milieu professionnel – bilan d’activité ;            <br>
    la conclusion ;            <br>
    les annexes techniques ;            <br>
    une feuille de temps.            <br>            <br>

</font>', 
'            <font color="black" face="verdana"> 
   <br>
L\'exposé comportera les points suivants :   <br>
   <br>
    présentation du plan ;   <br>
    introduction ;   <br>
    présentation du contexte du stage ;   <br>
    explication de la démarche ;   <br>
    justification des solutions proposées ;   <br>
    démonstration/présentation du travail et de ses résultats ;   <br>
    conclusion.   <br>            <br>
</font>',
'                           <br>
<font color="#4CAF50" face="verdana">
   Chercher une organisation (entreprise ou autre) puis spécifier le sujet et l\'environnement du stage (langage, localisation, technologie, etc.) ; <br>
    Remplir "numériquement" le fichier de validation (que vous trouverez infra dès que possible) et l\'envoyer à : youssef.chikhaoui@univ-amu.fr ; <br>
    La demande de stage doit être validé par le département ; <br>
    Si la réponse à la demande est positive, les exemplaires de la convention de stage sont éditées par le secrétariat puis dans la foulée envoyées à l\'entreprise qui après les avoir signées les retourne à l\'IUT pour que l\'étudiant et le chef de département signent aussi in fine; <br>
    Sinon retour à l\'étape 1. <br>
            <br>

</font> ');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id_entreprise` int(20) UNSIGNED NOT NULL,
  `nom_entreprise` varchar(25) NOT NULL,
  `effectif` int(11) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `adresse` varchar(100) NOT NULL,
  `complement` varchar(50) DEFAULT NULL,
  `code_postal` decimal(5,0) NOT NULL,
  `activite` varchar(100) NOT NULL,
  `ville` varchar(20) NOT NULL,
  `pays` varchar(20) NOT NULL,
  `tuteur` int(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id_entreprise`, `nom_entreprise`, `effectif`, `tel`, `mail`, `adresse`, `complement`, `code_postal`, `activite`, `ville`, `pays`, `tuteur`) VALUES
(1, 'entreprise1', 100, '0494782866', 'mail_ent@entreprise.com', 'adresse_ent', 'complement_ent', '83577', 'activite_ent', 'ville_ent', 'France', 3);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

CREATE TABLE `personne` (
  `id_personne` int(20) UNSIGNED NOT NULL,
  `statut` varchar(40) NOT NULL,
  `fonction_pro` varchar(25) DEFAULT NULL,
  `civilite` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `adresse` varchar(150) NOT NULL,
  `complement` varchar(150) NOT NULL,
  `code_postal` varchar(5) NOT NULL,
  `ville` varchar(25) NOT NULL,
  `pays` varchar(25) NOT NULL,
  `tel` varchar(10) NOT NULL,
  `date_naiss` date NOT NULL,
  `num_secu` varchar(15) NOT NULL,
  `mutuelle` varchar(30) NOT NULL,
  `objectif_pro` text,
  `motdepasse` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `personne`
--

INSERT INTO `personne` (`id_personne`, `statut`, `fonction_pro`, `civilite`, `prenom`, `nom`, `mail`, `adresse`, `complement`, `code_postal`, `ville`, `pays`, `tel`, `date_naiss`, `num_secu`, `mutuelle`, `objectif_pro`, `motdepasse`) VALUES
(1, 'Secretariat', 'non spécifié', 'Mrs', 'utilisateur_p', 'utilisateur_n', 'admin@gmail.com', 'on sait pas', 'fdsf', '83570', 'ville_admin', 'France', '0682461912', '2018-12-30', '212121242424231', 'rien_i', 'faire des trucs', 'motdepasse'),
(2, 'Etudiant', 'non spécifié', 'Mr', 'utilisateur_p_etu', 'utilisateur_n_etu', 'etu@gmail.com', 'adresse', 'zrzerez', '45621', 'ville_etu', 'France', '0494782843', '2018-12-03', '212121242424255', 'muteee', 'rien faire', 'etudiant'),
(3, 'Professionnel', 'Fonction', 'Mrs', 'prenom_pro', 'nom_pro', 'mailpro@gmail.com', 'adresse_pro_2', 'complement_pro', '83571', 'ville_pro', 'France', '0494782854', '2018-12-17', '212121242424235', 'mutuelle_pro', 'etre pro', 'mdppro'),
(4, 'Responsable', 'non spécifié', 'Mr', 'prenom_resp', 'nom_resp', 'mailresp@gmail.com', 'adresse resp', 'complemeent resp', '83578', 'ville_resp', 'France', '0494782854', '2018-12-08', '212121242424289', 'mutuelle_resp', 'responsable de stage', 'mdpresp'),
(15, 'Etudiant', 'non_specifié', 'Mr', 'etu_prenom2', 'etu_nom2', 'deux_etu@gmail.com', 'adresse_etu2', 'complement2_etu', '83571', 'ville_etu_2', 'France', '0682461945', '1998-11-30', '212121242424289', 'mutuelle2_etu', 'objectif2_etu', '5c30e5db00e23');

-- --------------------------------------------------------

--
-- Structure de la table `stage`
--

CREATE TABLE `stage` (
  `id_stage` int(20) UNSIGNED NOT NULL,
  `intitule_stage` varchar(50) NOT NULL,
  `entreprise` int(20) UNSIGNED NOT NULL,
  `date_debut_stage` date NOT NULL,
  `date_fin_stage` date NOT NULL,
  `adresse` varchar(70) NOT NULL,
  `mission` text NOT NULL,
  `code_postal` decimal(5,0) DEFAULT NULL,
  `ville` varchar(30) NOT NULL,
  `pays` varchar(30) NOT NULL,
  `validation` tinyint(1) NOT NULL DEFAULT '0',
  `auteur` int(20) UNSIGNED NOT NULL,
  `postuler` int(20) UNSIGNED DEFAULT NULL,
  `sauvegarder_offre` int(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `stage`
--

INSERT INTO `stage` (`id_stage`, `intitule_stage`, `entreprise`, `date_debut_stage`, `date_fin_stage`, `adresse`, `mission`, `code_postal`, `ville`, `pays`, `validation`, `auteur`, `postuler`, `sauvegarder_offre`) VALUES
(3, 'stage2', 1, '2019-01-30', '2019-02-09', 'adresse_ent2', 'mission2', '33101', 'ville_nouv', 'USA', 1, 3, 2, 2);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `contenus`
--
ALTER TABLE `contenus`
  ADD PRIMARY KEY (`id_auteur`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id_entreprise`),
  ADD KEY `Entreprise_fk0` (`tuteur`);

--
-- Index pour la table `personne`
--
ALTER TABLE `personne`
  ADD PRIMARY KEY (`id_personne`);

--
-- Index pour la table `stage`
--
ALTER TABLE `stage`
  ADD PRIMARY KEY (`id_stage`),
  ADD KEY `Stage_fk0` (`auteur`),
  ADD KEY `Stage_fk1` (`entreprise`),
  ADD KEY `Personne_fk0` (`postuler`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id_entreprise` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `personne`
--
ALTER TABLE `personne`
  MODIFY `id_personne` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `stage`
--
ALTER TABLE `stage`
  MODIFY `id_stage` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `contenus`
--
ALTER TABLE `contenus`
  ADD CONSTRAINT `auteur_fk0` FOREIGN KEY (`id_auteur`) REFERENCES `personne` (`id_personne`),
  ADD CONSTRAINT `fk_id_auteur` FOREIGN KEY (`id_auteur`) REFERENCES `personne` (`id_personne`);

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `Entreprise_fk0` FOREIGN KEY (`tuteur`) REFERENCES `personne` (`id_personne`);

--
-- Contraintes pour la table `stage`
--
ALTER TABLE `stage`
  ADD CONSTRAINT `Personne_fk0` FOREIGN KEY (`postuler`) REFERENCES `personne` (`id_personne`),
  ADD CONSTRAINT `Stage_fk0` FOREIGN KEY (`auteur`) REFERENCES `personne` (`id_personne`),
  ADD CONSTRAINT `Stage_fk1` FOREIGN KEY (`entreprise`) REFERENCES `entreprise` (`id_entreprise`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

CREATE USER 'user_projet_mvc'@'%' IDENTIFIED BY 'projet_mvc' WITH MAX_QUERIES_PER_HOUR 0
MAX_UPDATES_PER_HOUR 0 MAX_CONNECTIONS_PER_HOUR 0 MAX_USER_CONNECTIONS 0;

GRANT ALL PRIVILEGES ON stages_projet.* TO 'user_projet_mvc'@'%';
