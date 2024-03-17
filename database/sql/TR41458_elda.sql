-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 10.192.0.97
-- Généré le : dim. 17 mars 2024 à 04:46
-- Version du serveur : 8.0.17
-- Version de PHP : 7.3.14-1~deb10u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `TR41458_elda`
--

-- --------------------------------------------------------

--
-- Structure de la table `apropos`
--

CREATE TABLE `apropos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `apropos`
--

INSERT INTO `apropos` (`id`, `photo`, `titre`, `paragraphe`, `created_at`, `updated_at`) VALUES
(5, NULL, 'N/A', 'N/A', '2024-03-05 16:25:15', '2024-03-12 18:53:25'),
(6, NULL, 'Bienvenue chez \"GALERIE ELDA\"', 'N/A', '2024-03-05 16:28:59', '2024-03-12 18:53:32'),
(7, NULL, 'N/A', 'Fondée avec passion, notre entreprise est une référence incontournable dans le domaine de la vente des meubles, des mobiliers de bureau ,des objets de décoration ainsi que des stores. \r\nNotre engagement envers la satisfaction client guide chacune de nos actions.', '2024-03-05 16:29:21', '2024-03-12 19:48:13'),
(8, NULL, 'N/A', 'Nous mettons à votre disposition une flotte diversifiée des objets de décorations, des meubles ainsi que les mobiliers de bureau, répondant aux normes les plus élevées en matière de qualité et de luxe. Que vous ayez besoin d\'une solution temporaire avec notre service de location ou que vous recherchiez votre prochaine voiture, notre équipe dévouée est là pour vous accompagner.', '2024-03-05 16:29:56', '2024-03-12 19:48:45'),
(9, NULL, 'N/A', 'Chez \"GALERIE ELDA\", la transparence, l\'intégrité et l\'efficacité sont au cœur de nos valeurs. Nous nous efforçons de rendre votre expérience de décoration aussi agréable que possible, en vous offrant des tarifs compétitifs, des options de financement flexibles et un service personnalisé.', '2024-03-05 16:30:15', '2024-03-12 19:49:06'),
(10, NULL, 'N/A', 'Explorez notre site pour découvrir notre gamme complète de services, des meubles, de mobiliers de bureau sans oublier les objets de décoration. Faites confiance à \"GALERIE ELDA\" pour rendre votre parcours de décoration ,de luxe en matière de meuble et de mobilier. Merci de choisir l\'excellence avec nous ❤.\r\n\r\nAvec la Galerie Elda, la vrai vie commence à l\'intérieur !', '2024-03-05 16:30:31', '2024-03-12 19:52:29');

-- --------------------------------------------------------

--
-- Structure de la table `choisirs`
--

CREATE TABLE `choisirs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `choisirs`
--

INSERT INTO `choisirs` (`id`, `photo`, `titre`, `description`, `created_at`, `updated_at`) VALUES
(1, 'storage/elda/pourquoi/65ef443dd38f8.webp', 'Moins chers', 'Nos articles sont les moins chers du marché. Nous misons sur le commerce de proximité en réduisants les couts.', '2024-02-29 11:15:07', '2024-03-11 19:49:49'),
(2, 'storage/elda/pourquoi/65ef4448e1bd4.png', 'Livraison rapide', 'Nous vous livrons le plus rapidemant possible. La livraison de nos produits se fait avec les services de livraison express.', '2024-02-29 11:29:52', '2024-03-11 19:50:00'),
(3, 'storage/elda/pourquoi/65ef44550ba66.png', 'Meilleure Qualité', 'Nous sommes convaincu que la chose dont vous allez le plus vous souvenir, c\'est la qualité des produits achetés.', '2024-02-29 11:35:54', '2024-03-11 19:50:13');

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `CLIENT` varchar(150) DEFAULT NULL,
  `ifu` varchar(50) DEFAULT NULL,
  `TEL` varchar(50) DEFAULT NULL,
  `adresse` varchar(100) DEFAULT NULL,
  `IDClient` int(11) NOT NULL,
  `IDPRESTATAIRE` bigint(20) DEFAULT '0',
  `Ifusociete` bigint(20) DEFAULT '0',
  `totaldette` int(11) DEFAULT '0',
  `totalRemb` int(11) DEFAULT '0',
  `Solde` int(11) DEFAULT '0',
  `PayementAutomatique` tinyint(4) DEFAULT '0',
  `envoyer` tinyint(4) DEFAULT '0',
  `email` varchar(50) DEFAULT NULL,
  `CpteGal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `client`
--

INSERT INTO `client` (`CLIENT`, `ifu`, `TEL`, `adresse`, `IDClient`, `IDPRESTATAIRE`, `Ifusociete`, `totaldette`, `totalRemb`, `Solde`, `PayementAutomatique`, `envoyer`, `email`, `CpteGal`) VALUES
('DAVOD', '', '', '', 1, 0, 0, 0, 0, 0, 0, 1, '', ''),
('ERMETA FINANCES', '', '', '', 2, 0, 0, 0, 0, 0, 0, 1, '', ''),
('BLAISE', '', '', '', 3, 0, 0, 0, 0, 0, 0, 1, '', ''),
('STE ATRICOM-GS', '', '', '', 4, 0, 0, 0, 0, 0, 0, 1, '', ''),
('CHRISTELLE', '', '', '', 5, 0, 0, 0, 0, 0, 0, 1, '', ''),
('CLIENT DIVERS', '', '', '', 6, 0, 0, 0, 0, 0, 0, 1, '', ''),
('DESTINATION CANADA', '', '', '', 7, 0, 0, 0, 0, 0, 0, 1, '', ''),
('OGOUYEMI Grace', '', '', '', 8, 0, 0, 0, 0, 0, 0, 1, '', ''),
('BENIN ESPOIR SERVICE LUC', '', '', '', 9, 0, 0, 0, 0, 0, 0, 1, '', ''),
('SETON BLAISE', '', '', '', 10, 0, 0, 0, 0, 0, 0, 1, '', ''),
('TOUSSAINT', '', '', '', 11, 0, 0, 0, 0, 0, 0, 1, '', ''),
('AWE LOGISTICS', '1201100032906', '', '', 12, 0, 0, 0, 0, 0, 0, 1, '', ''),
('BRIGHTNESS CONSULTING', '', '', '', 13, 0, 0, 0, 0, 0, 0, 1, '', ''),
('BFS', '', '', '', 14, 0, 0, 0, 0, 0, 0, 1, '', ''),
('GSK ESE SARL', '', '', '', 15, 0, 0, 0, 0, 0, 0, 1, '', ''),
('FULBERT', '', '', '', 16, 0, 0, 0, 0, 0, 0, 1, '', ''),
('VINCENT', '', '97771957', '', 17, 0, 0, 0, 0, 0, 0, 1, '', ''),
('CYRILLE', '', '', '', 18, 0, 0, 0, 0, 0, 0, 1, '', ''),
('SOCIS SARL', '', '', '', 19, 0, 0, 0, 0, 0, 0, 1, '', ''),
('STE KES', '', '97771957', '', 20, 0, 0, 0, 0, 0, 0, 1, '', ''),
('MEL CONCEPT', '', '', '', 21, 0, 0, 0, 0, 0, 0, 1, '', ''),
('DECO & EQUIPEMENTS', '3201810271032', '', '', 22, 0, 0, 0, 0, 0, 0, 1, '', ''),
('Mme TCHAOU', '', '', '', 23, 0, 0, 0, 0, 0, 0, 1, '', ''),
('EMERGENCE & CIE', '3201910792689', '', '', 24, 0, 0, 0, 0, 0, 0, 1, '', ''),
('UNIVERSAL SOLUTION COMPANY', '3202112520356', '', '', 25, 0, 0, 0, 0, 0, 0, 1, '', ''),
('VB DECOR INTER', '', '', '', 26, 0, 0, 0, 0, 0, 0, 1, '', ''),
('MME OUEDRAOGO', '', '97709792', '', 27, 0, 0, 0, 0, 0, 0, 1, '', ''),
('MME ELDA', '', '97683652', '', 28, 0, 0, 0, 0, 0, 0, 1, '', ''),
('Mr ALAIN', '', '', '', 29, 0, 0, 0, 0, 0, 0, 1, '', ''),
('CAISSE NATIONNALE DE SECURITE SOCIALE (CNSS)', '', '', '', 30, 0, 0, 0, 0, 0, 0, 1, '', ''),
('CNSS', '', '', '', 31, 0, 0, 0, 0, 0, 0, 1, '', ''),
('PHARMACIE ZINVIE', '', '', '', 32, 0, 0, 0, 0, 0, 0, 1, '', ''),
('ECOVLEX', '', '', '', 33, 0, 0, 0, 0, 0, 0, 1, '', ''),
('AMEGNISSI Narcisse', '', '66235235', 'tankpê', 34, 0, 0, 0, 0, 0, 0, 1, '', ''),
('AOGA David', '', '937362830', 'Calavi Bidossesi', 35, 0, 0, 0, 0, 0, 0, 1, '', ''),
('YANSUNU Christelle', '', '97782415', 'calavi', 36, 0, 0, 0, 0, 0, 0, 1, '', ''),
('YANSUNU Christelle', '', '97782415', 'calavi', 37, 0, 0, 0, 0, 0, 0, 1, '', ''),
('YANSUNU Christelle', '', '97782415', 'calavi', 38, 0, 0, 0, 0, 0, 0, 1, '', ''),
('YANSUNU christelle', '', '97782415', 'calavi', 39, 0, 0, 0, 0, 0, 0, 1, '', ''),
('YANSUNU Judith', '', '95830145', 'calavi', 40, 0, 0, 0, 0, 0, 0, 1, '', ''),
('AHIDOTE Fulbert', '', '51023876', '', 41, 0, 0, 0, 0, 0, 0, 1, '', ''),
('SELLIG GROUP SARL', '3200800581819', '', '', 42, 0, 0, 0, 0, 0, 0, 1, '', ''),
('NSIA', '', '', '', 43, 0, 0, 0, 0, 0, 0, 1, '', ''),
('NSIA BANQUE UNAFRICA (ETAGE 4)', '', '', '', 44, 0, 0, 0, 0, 0, 0, 1, '', ''),
('NSIA BANQUE(AGENCE VEDOKO)', '', '', '', 45, 0, 0, 0, 0, 0, 0, 1, '', ''),
('NSIA BANQUE (SAINT MICHEL)', '', '', '', 46, 0, 0, 0, 0, 0, 0, 1, '', ''),
('NSIA BANQUE (ILLACONDJI)', '', '', '', 47, 0, 0, 0, 0, 0, 0, 1, '', ''),
('NSIA BANQUE UNAFRICA (ETAGE 3)', '', '', '', 48, 0, 0, 0, 0, 0, 0, 1, '', ''),
('NSIA BANQUE UNAFRICA (ETAGE2)', '', '', '', 49, 0, 0, 0, 0, 0, 0, 1, '', ''),
('NSIA BANQUE(SIEGE)', '', '', '', 50, 0, 0, 0, 0, 0, 0, 1, '', ''),
('PHARMACIE HÔTEL DE VILLE', '3202247845737', '+229 94483975', '', 51, 0, 0, 0, 0, 0, 0, 1, '', ''),
('ALPHONSE', '', '', 'tankpê', 52, 0, 0, 0, 0, 0, 0, 1, '', ''),
('NSIA BANQUE UNAFRICA (ETAGE 5)', '', '', '', 53, 0, 0, 0, 0, 0, 0, 1, '', ''),
('SADA MOTORS SA', '', '97898008', '', 54, 0, 0, 0, 0, 0, 0, 1, '', ''),
('TEST 2', '', '', '', 55, 0, 0, 0, 0, 0, 0, 1, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `conditions`
--

CREATE TABLE `conditions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `conditions`
--

INSERT INTO `conditions` (`id`, `photo`, `titre`, `paragraphe`, `created_at`, `updated_at`) VALUES
(1, 'storage/elda/conditions/65ef6332c176f.png', 'Conditions d\'utilisation du site Galerie Elda', 'Bienvenue sur Galerie Elda, votre destination en ligne pour des meubles élégants, des objets de décoration inspirants et des stores de qualité. Avant d\'explorer notre collection exceptionnelle, veuillez prendre quelques instants pour lire attentivement nos conditions d\'utilisation.\r\n\r\n1- Acceptation des Conditions\r\nEn accédant et en utilisant ce site, vous acceptez de vous conformer aux présentes conditions d\'utilisation. Si vous n\'êtes pas d\'accord avec l\'une de ces conditions, veuillez vous abstenir d\'utiliser notre site.\r\n\r\n2- Informations sur le Produit \r\nNous nous efforçons de fournir des descriptions précises de nos produits, y compris des images et des spécifications. Cependant, veuillez noter que des variations peuvent survenir, et nous ne pouvons garantir une correspondance exacte avec les images présentées.\r\n\r\n3- Commandes et Paiements \r\nEn passant une commande, vous vous engagez à fournir des informations exactes et complètes. Les paiements sont sécurisés, et les informations financières sont traitées conformément à nos normes de confidentialité.\r\n\r\n4- Livraison et Retours \r\nConsultez notre politique de livraison et de retours pour des informations détaillées sur les délais de livraison, les frais, et les procédures de retour.\r\n\r\n5- Responsabilités de l\'Utilisateur\r\nLes utilisateurs sont responsables de maintenir la confidentialité de leurs comptes, et ils sont tenus responsables de toutes les activités qui se déroulent sous leur nom d\'utilisateur.\r\n\r\n6- Droits de Propriété Intellectuelle\r\nTout le contenu présenté sur www.galerieelda.bj est protégé par des droits d\'auteur, des marques déposées et d\'autres lois sur la propriété intellectuelle. Aucune reproduction ou utilisation non autorisée n\'est permise.\r\n\r\n7- Communication\r\nEn utilisant notre site, vous consentez à recevoir des communications de notre part par e-mail ou d\'autres moyens. Vous pouvez vous désinscrire à tout moment.\r\n\r\n8- Modifications des Conditions\r\nNous nous réservons le droit de modifier ces conditions d\'utilisation à tout moment. Les modifications prendront effet dès leur publication sur le site.\r\n\r\nEn utilisant le site Galerie Elda, vous reconnaissez avoir lu, compris et accepté ces conditions d\'utilisation. Si vous avez des questions, veuillez nous contacterpar email à l\'adresse suivante  ejuvencio05@gmail.com.\r\n\r\nMerci de faire partie de notre communauté et de choisir Galerie Elda pour vos besoins en mobilier et décoration.', '2024-03-09 19:25:22', '2024-03-12 19:45:26');

-- --------------------------------------------------------

--
-- Structure de la table `confidentialites`
--

CREATE TABLE `confidentialites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraphe` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `confidentialites`
--

INSERT INTO `confidentialites` (`id`, `photo`, `titre`, `paragraphe`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Politique de Confidentialité', 'Dernière mise à jour : 10 Mars 2024\r\n\r\nBienvenue sur Galerie Elda (www.galerieelda.bj), votre destination en ligne pour des meubles élégants, des objets de décoration inspirants et des stores de qualité. La confidentialité et la sécurité de vos informations personnelles sont d\'une importance capitale pour nous. Cette politique de confidentialité explique comment nous collectons, utilisons, divulguons et protégeons vos données.\r\n\r\n1. Collecte des Informations\r\n\r\nNous collectons des informations lorsque vous créez un compte, effectuez une commande, participez à un sondage, naviguez sur notre site ou interagissez avec nous de toute autre manière. Les informations collectées peuvent inclure votre nom, adresse, adresse e-mail, numéro de téléphone, informations de paiement, et préférences de produits.\r\n\r\n2. Utilisation des Informations\r\n\r\nNous utilisons vos informations pour traiter les commandes, personnaliser votre expérience, améliorer notre site, envoyer des communications marketing, et répondre à vos demandes de service à la clientèle. Nous ne vendons ni ne louons vos informations à des tiers.\r\n\r\n3. Sécurité des Données\r\n\r\nLa sécurité de vos données personnelles est notre priorité. Nous mettons en place des mesures de sécurité physiques, électroniques et administratives pour protéger vos informations contre tout accès non autorisé, perte, mauvaise utilisation ou divulgation.\r\n\r\n4. Partage des Informations\r\n\r\nNous pouvons partager vos informations avec des partenaires de confiance qui nous aident à exploiter notre site, à mener nos activités ou à vous servir. Ces tiers sont tenus de maintenir la confidentialité de vos informations.\r\n\r\n5. Cookies et Technologies Similaires\r\n\r\nNotre site utilise des cookies et d\'autres technologies pour améliorer votre expérience en ligne. Vous pouvez gérer vos préférences de cookies dans les paramètres de votre navigateur.\r\n\r\n6. Accès et Contrôle de Vos Informations\r\n\r\nVous avez le droit d\'accéder à vos informations personnelles, de les corriger, de les supprimer ou de limiter leur traitement. Contactez-nous à [votre adresse e-mail de contact] pour exercer ces droits.\r\n\r\n7. Modifications de la Politique de Confidentialité\r\n\r\nNous nous réservons le droit de mettre à jour cette politique de confidentialité à tout moment. Les modifications seront publiées sur cette page.\r\n\r\nEn utilisant Galerie Elda (www.galerieelda.bj), vous consentez à la collecte et à l\'utilisation de vos informations conformément à cette politique de confidentialité. Si vous avez des questions, veuillez nous contacter par email à l\'adresse suivante  ejuvencio05@gmail.com.\r\n\r\nMerci de faire confiance à Galerie Elda (www.galerieelda.bj) pour vos besoins en mobilier, décoration et stores.', '2024-03-09 19:30:00', '2024-03-12 19:37:54');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `ID` int(11) NOT NULL,
  `Nom` varchar(150) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Adresse` varchar(50) DEFAULT NULL,
  `TEL` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `lu` tinyint(1) DEFAULT NULL,
  `dateEnvoi` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `objet` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`ID`, `Nom`, `Prenom`, `Adresse`, `TEL`, `email`, `message`, `lu`, `dateEnvoi`, `objet`) VALUES
(1, 'Wilfried ETEKA', '', NULL, '0766361300', 'etekawilfried@gmail.com', 'qsfdfssdsd', NULL, '2024-03-10 23:00:00', 'Reseignement'),
(2, 'CESI SAS', '', NULL, '6484421212', 'IBaudry@cesi.fr', 'dzzdzddfz  zzfz fzf', NULL, '2024-03-10 23:00:00', 'Reseignement'),
(3, 'Wilfried ETEKA', '', NULL, '0766361300', 'etekawilfried@gmail.com', 'dzdzdz', NULL, NULL, 'Problème de livraison'),
(4, 'Message', '', NULL, '648442124', 'usermail@gmail.com', 'Wvvsvvdvd', NULL, NULL, 'Choisir...'),
(5, 'Message', '', NULL, '51845151848', 'adresseiel@gmail.com', 'Message à l’administration', NULL, NULL, 'Problème de livraison'),
(6, 'Message', '', NULL, '648442124', 'usermail@gmail.com', 'Wvvsvvdvd', NULL, NULL, 'Choisir...'),
(7, 'Message', '', NULL, '648442124', 'usermail@gmail.com', 'Wvvsvvdvd', NULL, NULL, 'Choisir...'),
(8, 'Message', '', NULL, '648442124', 'usermail@gmail.com', 'Wvvsvvdvd', NULL, NULL, 'Choisir...'),
(9, 'Prince', '', NULL, '97885970', 'princealvares@yahoo.com', 'Visite du site pour admiration', NULL, NULL, 'Autres'),
(10, 'Jean', '', NULL, '97000000', 'Jean-Charles@yahoo.fr', 'Tests', NULL, NULL, 'Autres'),
(11, 'suzanne VISSEHO', '', NULL, '96384648', 'suzannevisseho@gmail.com', 'je veux 2 tables', NULL, NULL, 'Commande de produits'),
(12, 'narcisse amegnissi', '', NULL, '66235235', 'narcisseamegnissi@gmail.com', 'hghhnghgf', NULL, '2024-03-13 18:41:51', 'Reseignement'),
(13, 'narcisse amegnissi', '', NULL, '66235235', 'narcisseamegnissi@gmail.com', 'hhhghhghgghhf', NULL, '2024-03-13 18:51:12', 'Reseignement');

-- --------------------------------------------------------

--
-- Structure de la table `evenements`
--

CREATE TABLE `evenements` (
  `IDEVENEMENTS` bigint(20) NOT NULL,
  `DETAILS` varchar(200) DEFAULT NULL,
  `HEURE` time DEFAULT NULL,
  `date` date DEFAULT NULL,
  `Identifiant` varchar(50) DEFAULT NULL,
  `IDClient` int(11) DEFAULT '0',
  `Ifusociete` bigint(20) DEFAULT '0',
  `envoyer` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `famille`
--

CREATE TABLE `famille` (
  `NOM` varchar(50) DEFAULT NULL,
  `Ifusociete` bigint(20) DEFAULT '0',
  `CodeFamille` int(11) DEFAULT '0',
  `photoFamille` longblob,
  `ID` int(11) NOT NULL,
  `envoyer` tinyint(4) DEFAULT '0',
  `cpte` varchar(10) DEFAULT NULL,
  `imgPathLink` longtext,
  `imgPath` longtext,
  `imgPathLinkPhone` longtext,
  `imgPathPhone` longtext,
  `photoFamillePhone` blob
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `famille`
--

INSERT INTO `famille` (`NOM`, `Ifusociete`, `CodeFamille`, `photoFamille`, `ID`, `envoyer`, `cpte`, `imgPathLink`, `imgPath`, `imgPathLinkPhone`, `imgPathPhone`, `photoFamillePhone`) VALUES
('MEUBLES', 12222222, 123333, NULL, 3, 0, NULL, 'https://pischon-tech.com/Elda/PishonSoftImageArticle/categorie/Pc3.jpg', NULL, NULL, NULL, NULL),
('MOBILIER DE BUREAU', 441, 0, NULL, 4, 0, NULL, 'https://pischon-tech.com/Elda/PishonSoftImageArticle/categorie/Pc4.jpg', NULL, NULL, NULL, NULL),
('OBJET DE DECORATION', 0, 0, NULL, 5, 0, NULL, 'https://pischon-tech.com/Elda/PishonSoftImageArticle/categorie/Pc5.jpg', NULL, NULL, NULL, NULL),
('STORE', 0, 0, NULL, 12, 0, NULL, '/Elda/PishonSoftImageArticle/categorie/65f081e63dea9.jpg', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `fournisseur`
--

CREATE TABLE `fournisseur` (
  `idfournisseur` int(11) NOT NULL,
  `Fournisseur` varchar(150) DEFAULT NULL,
  `IFU` varchar(50) DEFAULT NULL,
  `TEL` varchar(50) DEFAULT NULL,
  `Adresse` varchar(150) DEFAULT NULL,
  `Ifusociete` bigint(20) DEFAULT '0',
  `envoyer` tinyint(4) DEFAULT '0',
  `CpteGal` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2014_10_12_100000_create_password_resets_table', 1),
(14, '2014_10_12_100000_create_sliders_table', 1),
(15, '2019_08_19_000000_create_failed_jobs_table', 1),
(16, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(17, '2024_01_22_103659_add_timestamps_to_utilisateur', 1),
(18, '2024_02_27_092031_create_pourquois_table', 2),
(19, '2024_02_29_110320_create_choisirs_table', 3),
(20, '2024_03_04_150000_create_apropos_table', 4);

-- --------------------------------------------------------

--
-- Structure de la table `nouvelle`
--

CREATE TABLE `nouvelle` (
  `LibelleImage` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `lien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImagePC` longblob,
  `ImageMobile` longblob,
  `idnouvelle` int(11) NOT NULL,
  `Ifusociete` bigint(20) DEFAULT '0',
  `envoyer` tinyint(4) DEFAULT '0',
  `Description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imgPathLink` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgPath` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imgPathLinkPhone` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imgPathPhone` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `nouvelle`
--

INSERT INTO `nouvelle` (`LibelleImage`, `lien`, `ImagePC`, `ImageMobile`, `idnouvelle`, `Ifusociete`, `envoyer`, `Description`, `imgPathLink`, `imgPath`, `imgPathLinkPhone`, `imgPathPhone`) VALUES
('PLAISIR AU QUOTIDIEN', NULL, NULL, '', 2, 0, 1, 'Profitez d\'un confort inégalé avec nos salons conçus pour vous offrir une détente ultime.', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/Pc2.jpg', 'Pc2.jpg', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone2.jpg', 'Phone2.jpg'),
('CONFORT SUPREME', 'https://www.galerieelda.bj/public/shop/P0000144', NULL, '', 3, 0, 1, 'Nos salons offrent un confort inégalé pour une détente totale à la maison', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/Pc3.jpg', 'Pc3.jpg', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone3.jpg', 'Phone3.jpg'),
('DINER AVEC STYLE', NULL, NULL, '', 4, 0, 1, 'Découvrez notre collection de tables à manger élégantes pour des repas mémorables', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/Pc4.jpg', 'Pc4.jpg', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone4.jpg', 'Phone4.jpg'),
('LUXE ET CONFORT', NULL, NULL, '', 5, 0, 1, 'Explorez notre collection pour une vie quotidienne empreinte de style et de confort', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/Pc5.jpg', 'Pc5.jpg', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone5.jpg', 'Phone5.jpg'),
('LA BEAUTE DANS LA SIMPLICITE', NULL, NULL, '', 6, 0, 1, 'Des guéridons au design minimaliste, parfaits pour ceux qui apprécient l\'élégance discrète.', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/Pc7.jpg', 'Pc7', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone.jpg', 'Phone.jpg'),
('SEDUISEZ VOS INVITES', NULL, NULL, '', 7, 0, 1, 'Des tables en cuir conçues pour impressionner dans vos salons exécutifs et bureaux de direction', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/Pcslide6.jpg', 'Pcslide6', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone.jpg', 'Phone.jpg'),
('CONFORT OPTIMAL', 'https://www.galerieelda.bj/public/shop/P00000001', NULL, '', 8, 0, 1, 'Plongez dans un confort inégalé avec nos salons conçus pour vous offrir un repos ultime.', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/PcSlide7.jpg', 'PcSlide7', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone.jpg', 'Phone.jpg'),
('QUALITÉ INEGALÉE', NULL, NULL, '', 9, 0, 1, 'Meuble définit de nouveaux standards de qualité, pour des pièces qui résistent à l\'épreuve du temps', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/PcSlide8.jpg', 'PcSlide8', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone.jpg', 'Phone.jpg'),
('OPTIMISEZ VOTRE ESPACE DE VIE', NULL, NULL, '', 10, 0, 1, 'Découvrez le confort et l\'ingéniosité de nos salons d\'angle, parfaits pour maximiser votre espace', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/PcSlide9.jpg', 'PcSlide9', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone.jpg', 'Phone.jpg'),
('DURABILITE EXCEPTIONNELLE', NULL, NULL, '', 11, 0, 1, 'Des meubles durables qui résistent à l\'épreuve du temps, synonymes de qualité supérieure.', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/Slider/PcSlide10.jpg', 'PcSlide10', 'https://pischon-tech.com/Elda/PishonSoftImageArticle/slider/Phone.jpg', 'Phone.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `parametre`
--

CREATE TABLE `parametre` (
  `IDPARAMETRE` bigint(20) NOT NULL,
  `Valeur` int(11) DEFAULT '0',
  `Ifusociete` bigint(20) DEFAULT '0',
  `envoyer` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `parametre`
--

INSERT INTO `parametre` (`IDPARAMETRE`, `Valeur`, `Ifusociete`, `envoyer`) VALUES
(1, 3, 0, 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `pourquois`
--

CREATE TABLE `pourquois` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `pourquois`
--

INSERT INTO `pourquois` (`id`, `titre`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Moins chers', 'Nos articles sont les moins chers du marché. Nous misons sur le commerce de proximité en réduisant les coûts.', '2024-02-27 10:02:58', '2024-02-27 10:18:22'),
(3, 'Livraison rapide', 'Nous vous livrons le plus rapidement possible. La livraison de nos produits se fait avec les services de livraison express.', '2024-02-27 10:24:31', '2024-02-27 10:24:31'),
(4, 'Meilleure Qualité', 'Nous sommes convaincu que la chose dont vous allez le plus vous souvenir, c\'est la qualité des produits achetés.', '2024-02-27 10:25:58', '2024-02-27 10:25:58');

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE `produit` (
  `CODEPRODUIT` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `PRODUIT` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unite` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `nbreunite` double DEFAULT '0',
  `qtéseuile` tinyint(4) DEFAULT '0',
  `NOM` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `QteTappro` double DEFAULT '0',
  `QteTvente` double DEFAULT '0',
  `QteTrebus` double DEFAULT '0',
  `QteTtrsft` double DEFAULT '0',
  `stock` double DEFAULT '0',
  `assujeti` tinyint(4) DEFAULT '0',
  `QteRéap` int(11) DEFAULT '0',
  `Qtezone` int(11) DEFAULT '0',
  `Zone` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ZP` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qteapprozone` double DEFAULT '0',
  `qtegros` int(11) DEFAULT '0',
  `IntituleGros` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `IntituleDetail` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodeBarre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CodeManuel` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peremption` int(11) DEFAULT '0',
  `Ifusociete` bigint(20) DEFAULT '0',
  `QteSortir` int(11) DEFAULT '0',
  `vues` int(11) DEFAULT '0',
  `Opportunite` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `NumeroOpportunite` int(11) DEFAULT '0',
  `PrixOpportunite` int(11) DEFAULT '0',
  `PhotoArticle` longblob,
  `TitrePhoto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LienVideo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TitreVideo` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `envoyer` tinyint(4) DEFAULT '0',
  `CpteGal` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imgPathLink` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imgPath` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `ID` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`CODEPRODUIT`, `PRODUIT`, `lien`, `unite`, `nbreunite`, `qtéseuile`, `NOM`, `QteTappro`, `QteTvente`, `QteTrebus`, `QteTtrsft`, `stock`, `assujeti`, `QteRéap`, `Qtezone`, `Zone`, `ZP`, `qteapprozone`, `qtegros`, `IntituleGros`, `IntituleDetail`, `CodeBarre`, `CodeManuel`, `peremption`, `Ifusociete`, `QteSortir`, `vues`, `Opportunite`, `NumeroOpportunite`, `PrixOpportunite`, `PhotoArticle`, `TitrePhoto`, `LienVideo`, `TitreVideo`, `Description`, `envoyer`, `CpteGal`, `imgPathLink`, `imgPath`, `ID`) VALUES
('P00000001', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 26, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-8-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f08e334ccc8.jpg', '65f08e334ccc8.jpg', 12),
('P0000002', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 16, 0, 0, 0, '', '', 0, 1, '', '', '', 'M73-5-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f084c0a9cb8.jpg', '65f084c0a9cb8.jpg', 12),
('P0000003', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 6, 0, 0, 15, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-11-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000003.jpg', 'P0000003.jpg', 12),
('P0000004', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 24, 0, 0, 0, '', '', 0, 1, '', '', '', 'M86-5-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000004.jpg', 'P0000004.jpg', 12),
('P0000007', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-18-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f08cf7e32ec.jpg', '65f08cf7e32ec.jpg', 12),
('P0000008', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 27, 0, 0, 0, '', '', 0, 1, '', '', '', 'M86-6-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f0911b32618.jpg', '65f0911b32618.jpg', 12),
('P0000009', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 6, 0, 0, 0, '', '', 0, 1, '', '', '', '806-2-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000009.jpg', 'P0000009.jpg', 12),
('P0000010', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 7, 0, 0, 0, '', '', 0, 1, '', '', '', 'M6-21-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000010.jpg', 'P0000010.jpg', 12),
('P0000011', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '701-1-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000011.jpg', 'P0000011.jpg', 12),
('P0000012', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'M86-8-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f0918ab4427.jpg', '65f0918ab4427.jpg', 12),
('P0000013', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 2, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-12-1', 0, 0, 0, 3, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f0937cc826a.jpg', '65f0937cc826a.jpg', 12),
('P0000014', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 18, 0, 0, -13, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-9-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000014.jpg', 'P0000014.jpg', 12),
('P0000015', 'STORE DE 1,20M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 7, 0, 0, 0, '', '', 0, 1, '', '', '', 'M86-24-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f091449bfa5.jpg', '65f091449bfa5.jpg', 12),
('P0000016', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 22, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-8-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000016.jpg', 'P0000016.jpg', 12),
('P0000017', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 18, 0, 0, 0, '', '', 0, 1, '', '', '', 'M73-5-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f08de760346.jpg', '65f08de760346.jpg', 12),
('P00000178', 'Articles 2', NULL, '0', 0, 0, 'MEUBLES', 0, 0, 0, 0, 0, 0, 0, 0, NULL, NULL, 0, 0, NULL, NULL, NULL, 'J802-81-2', 0, 0, 0, 1, NULL, 5, 13000, '', NULL, NULL, NULL, 'ADMINDES', 0, NULL, 'storage/elda/produits/65ef4dcf00994.jpg', '65ef4dcf00994.jpg', 0),
('P0000018', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 26, 0, 0, 0, '', '', 0, 1, '', '', '', 'M86-8-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000018.jpg', 'P0000018.jpg', 12),
('P0000019', 'CHAISE VISITEUR MARON', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', '906V', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000019.jpg', 'P0000019.jpg', 4),
('P0000020', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 20, 0, 0, 0, '', '', 0, 1, '', '', '', 'M86-5-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000020.jpg', 'P0000020.jpg', 12),
('P0000021', 'CHAISE VISITEUR NOIRE', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '903H-1', 0, 0, 0, 0, 'Sélection', 3, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000021.jpg', 'P0000021.jpg', 4),
('P0000022', 'SALONS 7 PLACES 2 COULEUR 1917', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', '1917-1', 0, 3201810271032, 0, 0, 'Sélection', 3, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000022.jpg', 'P0000022.jpg', 3),
('P0000025', 'GUERIDONS ET POSE TELE 5550-3', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-3', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000025.jpg', 'P0000025.jpg', 3),
('P0000027', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-18-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000027.jpg', 'P0000027.jpg', 12),
('P0000029', 'CHAISE VISITEUR NOIRE', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 4, 0, 0, 0, '', '', 0, 1, '', '', '', '903V-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000029.jpg', 'P0000029.jpg', 4),
('P0000030', 'SALON LOUIS 14 R-196', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 1, 0, 0, 0, '', '', 0, 1, '', '', '', 'R-196', 0, 3201810271032, 0, 3, '', 3, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000030.jpg', 'P0000030.jpg', 3),
('P0000031', 'TABLE POUR CAFE', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 6, 0, 0, 0, '', '', 0, 1, '', '', '', 'M-809', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000031.jpg', 'P0000031.jpg', 3),
('P0000032', 'BUREAU X-DA2820', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 2, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', 'X-DA2820', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000032.jpg', 'P0000032.jpg', 4),
('P0000034', 'BUREAU DE 2,2m X-DC2218-2', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 1, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', 'X-DC2218-2', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '00', 'Elda/PishonSoftImageArticle/produit/P0000034.jpg', 'P0000034.jpg', 4),
('P0000035', 'BUREAU DE 1,80m Y-D2017-1', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 1, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', 'Y-D2017-1', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '0060', 'Elda/PishonSoftImageArticle/produit/P0000035.jpg', 'P0000035.jpg', 4),
('P0000036', 'BUREAU DE 2m Y-D2017-2', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 1, 0, 0, 1, 0, 0, 0, '', '', 0, 1, '', '', '', 'Y-D2017-2', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '00', 'Elda/PishonSoftImageArticle/produit/P0000036.jpg', 'P0000036.jpg', 4),
('P0000038', 'BUREAU DE 1,60m ', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 36, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', 'T-DC1406', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000038.jpg', 'P0000038.jpg', 4),
('P0000039', 'CHAISES VISITEURS B815', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 5, 0, 0, 0, '', '', 0, 1, '', '', '', 'B815', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000039.jpg', 'P0000039.jpg', 4),
('P0000040', 'CHAISES VISITEURS D815', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 6, 0, 0, 0, '', '', 0, 1, '', '', '', 'D815', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000040.jpg', 'P0000040.jpg', 4),
('P0000041', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '701-1-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65ef41895e4e8.jpg', '65ef41895e4e8.jpg', 12),
('P0000042', 'CHAISES VISITEURS D815-1', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', 'D815-1', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000042.jpg', 'P0000042.jpg', 4),
('P0000043', 'FAUTEUIL DIRECTEUR 903H', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '903H', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000043.jpg', 'P0000043.jpg', 4),
('P0000044', 'CHAISES DIRECTEURS 903V', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 1, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '903V', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '0', 'storage/elda/produits/65f092d213b2a.jpg', '65f092d213b2a.jpg', 4),
('P0000045', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 85, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-11-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000045.jpg', 'P0000045.jpg', 12),
('P0000046', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 12, 0, 0, 25, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-12-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f08e85c20ba.jpg', '65f08e85c20ba.jpg', 12),
('P0000047', 'FAUTEUIL DIRECTEUR GRIS 912H', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 1, 0, 0, 0, '', '', 0, 1, '', '', '', '912H', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000047.jpg', 'P0000047.jpg', 4),
('P0000048', 'CHAISES VISITEURS NOIRS 912V', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 4, 0, 0, 0, '', '', 0, 1, '', '', '', '912V', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000048.jpg', 'P0000048.jpg', 4),
('P0000049', 'CHAISES VISITEURS NOIRS 906H', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '906H', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000049.jpg', 'P0000049.jpg', 4),
('P0000050', 'CHAISES VISITEURS MARRONS 906V', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', '906V', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000050.jpg', 'P0000050.jpg', 4),
('P0000051', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-3-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000051.jpg', 'P0000051.jpg', 12),
('P0000052', 'CHAISES VISITEURS GRIS 562V', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 4, 0, 0, 0, '', '', 0, 1, '', '', '', '562V', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000052.jpg', 'P0000052.jpg', 4),
('P0000053', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 22, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-9-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000053.jpg', 'P0000053.jpg', 12),
('P0000054', 'STORE DE 1,50M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 19, 0, 0, 0, '', '', 0, 1, '', '', '', 'M86-24-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000054.jpg', 'P0000054.jpg', 12),
('P0000055', 'STORE DE 1,80M', NULL, '', 1, 0, 'STORE', 0, 2, 0, 0, 116, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-12-3', 0, 0, 0, 1, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000055.jpg', 'P0000055.jpg', 12),
('P0000056', 'STORE DE 1,80M', NULL, '', 1, 0, 'STORE', 0, 1, 0, 0, 12, 0, 0, 0, '', '', 0, 1, '', '', '', 'J802-8-3', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000056.jpg', 'P0000056.jpg', 12),
('P0000058', 'DECO KMP4311', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP4311', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000058.jpg', 'P0000058.jpg', 5),
('P0000060', 'DECO KMP3731M', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP3731M', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000060.jpg', 'P0000060.jpg', 5),
('P0000063', 'DECO KMP4546L', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP4546L', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000063.jpg', 'P0000063.jpg', 5),
('P0000064', 'DECO KMP4407L', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP4407L', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000064.jpg', 'P0000064.jpg', 5),
('P0000065', 'DECO KMP3658M', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP3658M', 0, 3201810271032, 0, 3, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000065.jpg', 'P0000065.jpg', 5),
('P0000068', 'DECO KMP4447R', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP4447R', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000068.jpg', 'P0000068.jpg', 5),
('P0000074', 'DECO KMP5390W', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP5390W', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000074.jpg', 'P0000074.jpg', 5),
('P0000077', 'DECO KMP6915S', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP6915S', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000077.jpg', 'P0000077.jpg', 5),
('P0000078', 'STORE DE 1,80M', NULL, '', 1, 0, 'STORE', 0, 0, 0, 0, 16, 0, 0, 0, '', '', 0, 1, '', '', '', 'M86-24-3', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000078.jpg', 'P0000078.jpg', 12),
('P0000079', 'DECO KMP6595L', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP6595L', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000079.jpg', 'P0000079.jpg', 5),
('P0000082', 'DECO KMP3364', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP3364', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '00', 'Elda/PishonSoftImageArticle/produit/P0000082.jpg', 'P0000082.jpg', 5),
('P0000083', 'DECO KMP3365', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP3365', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000083.jpg', 'P0000083.jpg', 5),
('P0000084', 'DECO KMP3560L', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP3560L', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000084.jpg', 'P0000084.jpg', 5),
('P0000085', 'DECO KMP3826L', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP3826L', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000085.jpg', 'P0000085.jpg', 5),
('P0000086', 'DECO KMP3739L', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP3739L', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000086.jpg', 'P0000086.jpg', 5),
('P0000087', 'DECO KMP4788', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP4788', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000087.jpg', 'P0000087.jpg', 5),
('P0000088', 'FAUTEUILS DE BUREAU NOIR 1530B', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 11, 0, 0, 0, '', '', 0, 1, '', '', '', '1530B', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'Elda/PishonSoftImageArticle/produit/P0000088.jpg', 'P0000088.jpg', 4),
('P0000089', 'FAUTEUILS DE BUREAU BLANC 1530B-1', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 10, 0, 0, 0, '', '', 0, 1, '', '', '', '1530B-1', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000089.jpg', 'P0000089.jpg', 4),
('P0000092', 'BUREAU SECRETAIRE 5550-12', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 11, 0, 0, 19, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-12', 0, 3201810271032, 0, 3, '', 0, 0, '', '', '', '', '', 1, '0', 'Elda/PishonSoftImageArticle/produit/P0000092.jpg', 'P0000092.jpg', 4),
('P0000099', 'MONTRES MURALES 5550-19', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 4, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-19', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f0921c2103f.jpg', '65f0921c2103f.jpg', 5),
('P0000100', 'DECO', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 3, 0, 0, 0, '', '', 0, 1, '', '', '', 'KMP3362L', 0, 0, 0, 0, 'Sélection', 3, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f0933414f66.jpg', '65f0933414f66.jpg', 5),
('P0000102', 'MONTRES MURALES 5550-22', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 5, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-22', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000102.jpg', 'P0000102.jpg', 5),
('P0000105', 'FAUTEUIL DIRECTEUR GRIS FK004-A13-1', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 6, 0, 0, 0, '', '', 0, 1, '', '', '', 'FK004-A13-1', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000105.jpg', 'P0000105.jpg', 4),
('P0000106', 'FAUTEUIL DIRECTEUR NOIR FK004-A13-2', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 6, 0, 0, 0, '', '', 0, 1, '', '', '', 'FK004-A13-2', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000106.jpg', 'P0000106.jpg', 4),
('P0000107', 'FAUTEUIL VISITEUR GRIS C2011-2', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 4, 0, 0, 0, '', '', 0, 1, '', '', '', 'C2011-2', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'Elda/PishonSoftImageArticle/produit/P0000107.jpg', 'P0000107.jpg', 4),
('P0000108', 'FAUTEUIL VISITEUR MARRON C2011', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 6, 0, 0, 0, '', '', 0, 1, '', '', '', 'C2011-1', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000108.jpg', 'P0000108.jpg', 4),
('P0000109', 'FAUTEUIL ACCEUILCA-S300', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 6, 0, 0, 0, '', '', 0, 1, '', '', '', 'CA-S300', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000109.jpg', 'P0000109.jpg', 3),
('P0000110', 'TABLE A MANGER + 6 CHAISES 5550-25', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-25', 0, 3201810271032, 0, 1, 'Sélection', 3, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000110.jpg', 'P0000110.jpg', 3),
('P0000111', '2 CHAISES DE BAR + TABLE5550-26', NULL, '', 1, 0, 'MEUBLES', 0, 30, 0, 0, 5, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-26', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '60', 'Elda/PishonSoftImageArticle/produit/P0000111.jpg', 'P0000111.jpg', 3),
('P0000113', '6 CHAISES DE DINER + TABLE A MANGER 5550-28', NULL, '', 1, 0, 'MEUBLES', 0, 56, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-28', 0, 3201810271032, 0, 0, '', 3, 0, '', '', '', '', '', 1, '60', 'Elda/PishonSoftImageArticle/produit/P0000113.jpg', 'P0000113.jpg', 3),
('P0000114', 'BUREAU DE CHEVET BLANC 5550-29', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 12, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-29', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '00', 'Elda/PishonSoftImageArticle/produit/P0000114.jpg', 'P0000114.jpg', 4),
('P0000115', 'BUREAU DE CHEVET BOIS 5550-30', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 2, 0, 0, 10, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-30', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '00', 'Elda/PishonSoftImageArticle/produit/P0000115.jpg', 'P0000115.jpg', 4),
('P0000127', 'MONTRE MURALE', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 5, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-18', 0, 0, 0, 1, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f098bcc4f0c.jpg', '65f098bcc4f0c.jpg', 5),
('P0000132', 'BUREAU DE 1,40M', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 5, 0, 0, 0, '', '', 0, 1, '', '', '', 'YF403-140-XD', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000132.jpg', 'P0000132.jpg', 4),
('P0000141', 'GUERIDON ET POSE TELE 5550-4', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-4', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000141.jpg', 'P0000141.jpg', 3),
('P0000142', 'GUERIDONS ET POSE TELE 5550-6', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-6', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000142.jpg', 'P0000142.jpg', 3),
('P0000143', 'SALON 6 PLACES MARRON 9808', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', '9808-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000143.jpg', 'P0000143.jpg', 3),
('P0000144', 'FAUTEUIL POUR PERSONNEL', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 1, 0, 0, 0, '', '', 0, 1, '', '', '', '9808-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '', 'storage/elda/produits/65f08d99de60d.jpg', '65f08d99de60d.jpg', 3),
('P0000145', 'SALON 7 PLACES 5550-31', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 1, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-31', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000145.jpg', 'P0000145.jpg', 3),
('P0000146', 'SALON DE 7 PLACE MARRON 1615-2', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0, 1, '', '', '', '1615-2', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000146.jpg', 'P0000146.jpg', 3),
('P0000147', 'CHAISES POUR BAR', NULL, '', 1, 0, 'MEUBLES', 0, 4, 0, 0, 12, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-39', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', NULL, 1, '060', 'storage/elda/produits/65f0905859ace.jpg', '65f0905859ace.jpg', 3),
('P0000149', 'SALON DE 7 PLACES NOIR', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 1, 0, 0, 0, '', '', 0, 1, '', '', '', '1615-1', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000149.jpg', 'P0000149.jpg', 3),
('P0000152', 'FAUTEUIL DIRECTEUR GRIS', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-94', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000152.jpg', 'P0000152.jpg', 4),
('P0000154', 'SALON LOUIS 14 R-120', NULL, '', 1, 0, 'MEUBLES', 0, 0, 0, 0, 1, 0, 0, 0, '', '', 0, 1, '', '', '', 'R-120', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000154.jpg', 'P0000154.jpg', 3),
('P0000156', 'BUREAU BLANC DE 1,60m', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 1, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', 'OD 160', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000156.jpg', 'P0000156.jpg', 4),
('P0000162', 'DECO', NULL, '', 1, 0, 'OBJET DE DECORATION', 0, 0, 0, 0, 1, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-93', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', '', 1, '00', 'Elda/PishonSoftImageArticle/produit/P0000162.jpg', 'P0000162.jpg', 5),
('P0000164', 'FAUTEUIL SECRETAIRE BLANC', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 19, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-23', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000164.jpg', 'P0000164.jpg', 4),
('P0000165', 'FAUTEUIL SECRETAIRE NOIRE', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 0, 0, 0, 0, 20, 0, 0, 0, '', '', 0, 1, '', '', '', '5550-24', 0, 0, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000165.jpg', 'P0000165.jpg', 4),
('P0000175', 'BUREAU BLANC DE 1,80m', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 6, 0, 0, 0, 6, 0, 0, 0, '', '', 0, 1, '', '', '', 'OD 180', 0, 3201810271032, 0, 1, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000175.jpg', 'P0000175.jpg', 4),
('P0000176', 'BUREAU BLANC DE 1,20m', NULL, '', 1, 0, 'MOBILIER DE BUREAU', 2, 0, 0, 0, 2, 0, 0, 0, '', '', 0, 1, '', '', '', 'OD 120', 0, 3201810271032, 0, 0, '', 0, 0, '', '', '', '', '', 1, '', 'Elda/PishonSoftImageArticle/produit/P0000176.jpg', 'P0000176.jpg', 4),
('P0000177', 'FAUTEUIL VISTEUR GRIS', NULL, '', 1, 0, 'MEUBLES', 10, 0, 0, 0, 10, 0, 0, 0, '', '', 0, 1, '', '', '', '1547C1', 0, 3201810271032, 0, 5, '', 0, 0, '', '', '', '', NULL, 1, '', 'Elda/PishonSoftImageArticle/produit/P0000177.jpg', 'P0000177.jpg', 4);

-- --------------------------------------------------------

--
-- Structure de la table `publicite`
--

CREATE TABLE `publicite` (
  `IDPUBLICITE` bigint(20) NOT NULL,
  `Description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `PhotoPub` longblob,
  `envoyer` tinyint(4) DEFAULT NULL,
  `imgPathLink` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `imgPath` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `publicite`
--

INSERT INTO `publicite` (`IDPUBLICITE`, `Description`, `PhotoPub`, `envoyer`, `imgPathLink`, `imgPath`) VALUES
(1, 'Description', NULL, NULL, 'storage/elda/publicites/65ef44027cf2c.jpg', NULL),
(2, 'PUB2', NULL, NULL, 'storage/elda/publicites/65ef44144e5f1.jpg', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `LibelleImage` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sproduit`
--

CREATE TABLE `sproduit` (
  `prix` double DEFAULT '0',
  `NOM` varchar(100) DEFAULT NULL,
  `CODEPRODUIT` varchar(50) DEFAULT '0',
  `CODE_Sousproduit` varchar(50) DEFAULT NULL,
  `nbreunité` double DEFAULT '0',
  `unité` varchar(10) DEFAULT NULL,
  `unitéproduit` double DEFAULT '0',
  `assujeti` tinyint(4) DEFAULT '0',
  `design` varchar(100) DEFAULT NULL,
  `prixachat` double DEFAULT '0',
  `codebare` int(11) DEFAULT '0',
  `Zone` varchar(50) DEFAULT NULL,
  `ZP` varchar(100) DEFAULT NULL,
  `Qtezone` int(11) DEFAULT '0',
  `qtéapprozone` double DEFAULT '0',
  `idfamille` varchar(50) DEFAULT '0',
  `Ifusociete` bigint(20) DEFAULT '0',
  `CodeManuel` varchar(50) DEFAULT NULL,
  `envoyer` tinyint(4) DEFAULT '0',
  `FamilleProd` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sproduit`
--

INSERT INTO `sproduit` (`prix`, `NOM`, `CODEPRODUIT`, `CODE_Sousproduit`, `nbreunité`, `unité`, `unitéproduit`, `assujeti`, `design`, `prixachat`, `codebare`, `Zone`, `ZP`, `Qtezone`, `qtéapprozone`, `idfamille`, `Ifusociete`, `CodeManuel`, `envoyer`, `FamilleProd`) VALUES
(98000, 'FAUTEUIL SECRETAIRE NOIRE', 'P0000165', 'S0000165', 1, '', 0, 0, 'FAUTEUIL SECRETAIRE NOIRE (A-EX)', 0, 111, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(55000, 'DECO', 'P0000130', 'S0000130', 1, '', 0, 0, 'DECO (A-EX)', 0, 111, '', '0', 0, 0, '5', 0, '', 1, 'OBJET DE DECORATION'),
(35400, 'STORE DE 1,20M', 'P0000005', 'S0000005', 1, '', 0, 0, 'STORE DE 1,20M (A-EX)', 0, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(150000, 'FAUTEUIL DIRECTEUR GRIS', 'P0000152', 'S0000152', 1, '', 0, 0, 'FAUTEUIL DIRECTEUR GRIS (A-EX)', 0, 111, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(65500, 'MONTRE MURALE', 'P0000128', 'S0000128', 1, '', 0, 0, 'MONTRE MURALE (A-EX)', 0, 111, '', '0', 0, 0, '5', 0, '', 1, 'OBJET DE DECORATION'),
(15000, 'Main d\'oeuvre', 'P0000174', 'S0000174', 1, '', 0, 0, 'Main d\'oeuvre', 0, 111, '', '0', 0, 0, '0', 3201810271032, '', 1, 'Autres'),
(63000, 'OBJET DE DECORATION', 'P0000127', 'S0000127', 1, '', 0, 0, NULL, NULL, 111, '', '0', 0, 0, '5', 0, '', 1, 'OBJET DE DECORATION'),
(35400, 'STORE DE 1,20M', 'P0000004', 'S0000004', 1, '', 0, 0, 'STORE DE 1,20M (A-EX)', 0, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(2800000, 'MEUBLES', 'P0000144', 'S0000144', 1, '', 0, 0, NULL, NULL, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(40000, 'STORE', 'P0000017', 'S0000017', 1, '', 0, 0, NULL, NULL, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(35000, 'STORE DE 1,20M', 'P0000003', 'S0000003', 1, '', 0, 0, 'STORE DE 1,20M (A-EX)', 0, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(2800000, 'SALON 6 PLACES MARRON 9808', 'P0000143', 'S0000143', 1, '', 0, 0, 'SALON 6 PLACES MARRON 9808 (A-EX)', 0, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(40000, 'STORE DE 1,50M', 'P0000016', 'S0000016', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(35400, 'STORE', 'P0000002', 'S0000002', 1, '', 0, 0, NULL, NULL, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(122800, 'BUREAU BLANC DE 1,20m', 'P0000176', 'S0000176', 1, '', 0, 0, 'BUREAU BLANC DE 1,20m', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(40000, 'Main d\'oeuvre', 'P0000181', 'S0000181', 1, '', 0, 0, 'Main d\'oeuvre', 0, 0, '', '0', 0, 0, '0', 3201810271032, '', 1, 'AUTRES'),
(185700, 'BUREAU BLANC DE 1,80m', 'P0000175', 'S0000175', 1, '', 0, 0, 'BUREAU BLANC DE 1,80m', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(40000, 'STORE DE 1,50M', 'P0000018', 'S0000018', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 18, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(0, 'CHAISE VISITEUR MARON', 'P0000019', 'S0000019', 1, '', 0, 0, 'CHAISE VISITEUR MARON', 0, 20, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(40000, 'STORE DE 1,50M', 'P0000020', 'S0000020', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 20, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(260000, 'CHAISE VISITEUR NOIRE', 'P0000029', 'S0000029', 1, '', 0, 0, 'CHAISE VISITEUR NOIRE (A-EX)', 0, 30, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(3300000, 'SALONS 7 PLACES 2 COULEUR 1917', 'P0000022', 'S0000022', 1, '', 0, 0, 'SALONS 7 PLACES 2 COULEUR 1917 (A-EX)', 3400000, 22, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(40000, 'STORE DE 1,50M', 'P0000023', 'S0000023', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 23, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(850000, 'GUERIDONS ET POSE TELE 5550-2', 'P0000024', 'S0000024', 1, '', 0, 0, 'GUERIDONS ET POSE TELE 5550-2', 750000, 24, '', '0', 0, 0, '3', 3201810271032, '', 1, ''),
(720000, 'GUERIDONS ET POSE TELE 5550-3', 'P0000025', 'S0000025', 1, '', 0, 0, 'GUERIDONS ET POSE TELE 5550-3 (A-EX)', 650000, 25, '', '0', 0, 0, '', 3201810271032, '', 1, ''),
(40000, 'STORE DE 1,50M', 'P0000026', 'S0000026', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 26, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(40000, 'STORE DE 1,50M', 'P0000027', 'S0000027', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 27, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(40000, 'STORE DE 1,50M', 'P0000028', 'S0000028', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 28, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(350000, 'CHAISE VISITEUR NOIRE', 'P0000021', 'S0000021', 1, '', 0, 0, 'CHAISE VISITEUR NOIRE (A-EX)', 0, 22, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(3890000, 'SALON LOUIS 14 R-196', 'P0000030', 'S0000030', 1, '', 0, 0, 'SALON LOUIS 14 R-196 (A-EX)', 4000000, 30, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(250000, 'TABLE POUR CAFE', 'P0000031', 'S0000031', 1, '', 0, 0, 'TABLE POUR CAFE ( E )', 200000, 31, '', '0', 0, 0, '3', 3201810271032, '', 1, ''),
(1103000, 'BUREAU X-DA2820', 'P0000032', 'S0000032', 1, '', 0, 0, 'BUREAU X-DA2820 (A-EX)', 850000, 32, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(40000, 'STORE DE 1,50M', 'P0000033', 'S0000033', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 33, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(520000, 'BUREAU DE 2,2m X-DC2218-2', 'P0000034', 'S0000034', 1, '', 0, 0, 'BUREAU DE 2,2m X-DC2218-2', 435000, 34, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(600000, 'BUREAU DE 1,80m Y-D2017-1', 'P0000035', 'S0000035', 1, '', 0, 0, 'BUREAU DE 1,80m Y-D2017-1 (A-EX)', 510000, 35, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(650000, 'BUREAU DE 2m Y-D2017-2', 'P0000036', 'S0000036', 1, '', 0, 0, 'BUREAU DE 2m Y-D2017-2', 550000, 36, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(40000, 'STORE DE 1,50M', 'P0000037', 'S0000037', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 37, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(300000, 'BUREAU DE 1,60m ', 'P0000038', 'S0000038', 1, '', 0, 0, 'BUREAU DE 1,60m  (A-EX)', 220000, 38, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(105000, 'CHAISES VISITEURS B815', 'P0000039', 'S0000039', 1, '', 0, 0, 'CHAISES VISITEURS B815', 87000, 39, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(90000, 'CHAISES VISITEURS D815', 'P0000040', 'S0000040', 1, '', 0, 0, 'CHAISES VISITEURS D815', 72000, 40, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(40000, 'STORE', 'P0000041', 'S0000041', 1, '', 0, 0, NULL, NULL, 41, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(90000, 'CHAISES VISITEURS D815-1', 'P0000042', 'S0000042', 1, '', 0, 0, 'CHAISES VISITEURS D815-1', 72000, 42, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(450000, 'FAUTEUIL DIRECTEUR 903H', 'P0000043', 'S0000043', 1, '', 0, 0, 'FAUTEUIL DIRECTEUR 903H (A-EX)', 385000, 43, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(320000, 'MOBILIER DE BUREAU', 'P0000044', 'S0000044', 1, '', 0, 0, NULL, NULL, 44, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(40000, 'STORE DE 1,50M', 'P0000045', 'S0000045', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 45, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(40000, 'STORE', 'P0000046', 'S0000046', 1, '', 0, 0, NULL, NULL, 46, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(325000, 'FAUTEUIL DIRECTEUR GRIS 912H', 'P0000047', 'S0000047', 1, '', 0, 0, 'FAUTEUIL DIRECTEUR GRIS 912H (A-EX)', 275000, 47, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(230000, 'CHAISES VISITEURS NOIRS 912V', 'P0000048', 'S0000048', 1, '', 0, 0, 'CHAISES VISITEURS NOIRS 912V', 200000, 48, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(390000, 'CHAISES VISITEURS NOIRS 906H', 'P0000049', 'S0000049', 1, '', 0, 0, 'CHAISES VISITEURS NOIRS 906H', 330000, 49, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(295000, 'CHAISES VISITEURS MARRONS 906V', 'P0000050', 'S0000050', 1, '', 0, 0, 'CHAISES VISITEURS MARRONS 906V', 250000, 50, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(495000, 'CHAISES VISITEURS GRIS 562H', 'P0000051', 'S0000051', 1, '', 0, 0, 'CHAISES VISITEURS GRIS 562H', 415000, 51, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(320000, 'CHAISES VISITEURS GRIS 562V', 'P0000052', 'S0000052', 1, '', 0, 0, 'CHAISES VISITEURS GRIS 562V', 270000, 52, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(40000, 'STORE DE 1,50M', 'P0000053', 'S0000053', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 53, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(43800, 'STORE DE 1,50M', 'P0000054', 'S0000054', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 54, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(50000, 'STORE DE 1,80M', 'P0000055', 'S0000055', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 55, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(50500, 'STORE DE 1,80M', 'P0000056', 'S0000056', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 56, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(50500, 'STORE DE 1,80M', 'P0000057', 'S0000057', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 57, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(71000, 'DECO KMP4311', 'P0000058', 'S0000058', 1, '', 0, 0, 'DECO KMP4311 (A-EX)', 0, 58, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(50500, 'STORE DE 1,80M', 'P0000059', 'S0000059', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 59, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(57000, 'DECO KMP3731M', 'P0000060', 'S0000060', 1, '', 0, 0, 'DECO KMP3731M (A-EX)', 0, 60, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(50500, 'STORE DE 1,80M', 'P0000061', 'S0000061', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 61, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(50500, 'STORE DE 1,80M', 'P0000062', 'S0000062', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 62, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(63000, 'DECO KMP4546L', 'P0000063', 'S0000063', 1, '', 0, 0, 'DECO KMP4546L (A-EX)', 0, 63, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(60000, 'DECO KMP4407L', 'P0000064', 'S0000064', 1, '', 0, 0, 'DECO KMP4407L (A-EX)', 0, 64, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(25000, 'DECO KMP3658M', 'P0000065', 'S0000065', 1, '', 0, 0, 'DECO KMP3658M (A-EX)', 0, 65, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(50500, 'STORE DE 1,80M', 'P0000066', 'S0000066', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 66, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(50500, 'STORE DE 1,80M', 'P0000067', 'S0000067', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 67, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(63000, 'DECO KMP4447R', 'P0000068', 'S0000068', 1, '', 0, 0, 'DECO KMP4447R (A-EX)', 0, 68, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(50500, 'STORE DE 1,80M', 'P0000069', 'S0000069', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 69, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(50500, 'STORE DE 1,80M', 'P0000070', 'S0000070', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 70, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(50500, 'STORE DE 1,80M', 'P0000071', 'S0000071', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 71, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(50500, 'STORE DE 1,80M', 'P0000072', 'S0000072', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 72, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(50000, 'STORE DE 1,80M', 'P0000073', 'S0000073', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 73, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(42000, 'DECO KMP5390W', 'P0000074', 'S0000074', 1, '', 0, 0, 'DECO KMP5390W (A-EX)', 0, 74, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(32000, 'DECO KMP5391B', 'P0000075', 'S0000075', 1, '', 0, 0, 'DECO KMP5391B', 27000, 75, '', '0', 0, 0, '5', 3201810271032, '', 1, ''),
(50000, 'STORE DE 1,80M', 'P0000076', 'S0000076', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 76, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(38500, 'DECO KMP6915S', 'P0000077', 'S0000077', 1, '', 0, 0, 'DECO KMP6915S (A-EX)', 0, 77, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(51800, 'STORE DE 1,80M', 'P0000078', 'S0000078', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 78, '', '0', 0, 0, '12', 3201810271032, '', 1, 'STORE'),
(16000, 'DECO KMP6595L', 'P0000079', 'S0000079', 1, '', 0, 0, 'DECO KMP6595L (A-EX)', 0, 79, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(35000, 'STORE DE 1,20M', 'P0000080', 'S0000080', 1, '', 0, 0, 'STORE DE 1,20M (A-EX)', 0, 80, '', '0', 0, 0, '13', 3201810271032, '', 1, 'STORE BLANC'),
(28000, 'STORE DE 1,50M', 'P0000081', 'S0000081', 1, '', 0, 0, 'STORE DE 1,50M (A-EX)', 0, 81, '', '0', 0, 0, '13', 3201810271032, '', 1, 'STORE BLANC'),
(65000, 'DECO KMP3364', 'P0000082', 'S0000082', 1, '', 0, 0, 'DECO KMP3364 (A-EX)', 0, 82, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(65000, 'DECO KMP3365', 'P0000083', 'S0000083', 1, '', 0, 0, 'DECO KMP3365 (A-EX)', 0, 83, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(42000, 'DECO KMP3560L', 'P0000084', 'S0000084', 1, '', 0, 0, 'DECO KMP3560L (A-EX)', 0, 84, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(55000, 'DECO KMP3826L', 'P0000085', 'S0000085', 1, '', 0, 0, 'DECO KMP3826L (A-EX)', 0, 85, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(68000, 'DECO KMP3739L', 'P0000086', 'S0000086', 1, '', 0, 0, 'DECO KMP3739L (A-EX)', 0, 86, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(68000, 'DECO KMP4788', 'P0000087', 'S0000087', 1, '', 0, 0, 'DECO KMP4788 (A-EX)', 0, 87, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(85000, 'MEUBLES', 'P0000088', 'S0000088', 1, '', 0, 0, NULL, NULL, 88, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MEUBLES'),
(95000, 'FAUTEUILS DE BUREAU BLANC 1530B-1', 'P0000089', 'S0000089', 1, '', 0, 0, 'FAUTEUILS DE BUREAU BLANC 1530B-1 (A-EX)', 70000, 89, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(50000, 'STORE DE 1,80M', 'P0000090', 'S0000090', 1, '', 0, 0, 'STORE DE 1,80M (A-EX)', 0, 90, '', '0', 0, 0, '13', 3201810271032, '', 1, 'STORE BLANC'),
(89000, 'FAUTEUIL VISITEUR BLANC 1530C-1', 'P0000091', 'S0000091', 1, '', 0, 0, 'FAUTEUIL VISITEUR BLANC 1530C-1 (A-EX)', 65000, 91, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(135000, 'BUREAU SECRETAIRE 5550-12', 'P0000092', 'S0000092', 1, '', 0, 0, 'BUREAU SECRETAIRE 5550-12', 115000, 92, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(0, 'DECO', 'P0000093', 'S0000093', 1, '', 0, 0, 'DECO (A-EX)', 0, 93, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(0, 'DECO', 'P0000094', 'S0000094', 1, '', 0, 0, 'DECO (A-EX)', 0, 94, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(57000, 'MONTRES MURALES 5550-15', 'P0000095', 'S0000095', 1, '', 0, 0, 'MONTRES MURALES 5550-15 (A-EX)', 0, 95, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(52000, 'MONTRES MURALES 5550-16', 'P0000096', 'S0000096', 1, '', 0, 0, 'MONTRES MURALES 5550-16 (A-EX)', 0, 96, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(68000, 'MONTRES MURALES 5550-17', 'P0000097', 'S0000097', 1, '', 0, 0, 'MONTRES MURALES 5550-17 (A-EX)', 0, 97, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(63000, 'DECO', 'P0000098', 'S0000098', 1, '', 0, 0, 'DECO (A-EX)', 0, 98, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(74000, 'OBJET DE DECORATION', 'P0000099', 'S0000099', 1, '', 0, 0, NULL, NULL, 99, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(65500, 'OBJET DE DECORATION', 'P0000100', 'S0000100', 1, '', 0, 0, NULL, NULL, 100, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(65500, 'MONTRES MURALES 5550-21', 'P0000101', 'S0000101', 1, '', 0, 0, 'MONTRES MURALES 5550-21 (A-EX)', 0, 101, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(68000, 'MONTRES MURALES 5550-22', 'P0000102', 'S0000102', 1, '', 0, 0, 'MONTRES MURALES 5550-22 (A-EX)', 0, 102, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(48000, 'DECO', 'P0000103', 'S0000103', 1, '', 0, 0, 'DECO (A-EX)', 83500, 103, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(98000, 'DECO', 'P0000104', 'S0000104', 1, '', 0, 0, 'DECO (A-EX)', 0, 104, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(395000, 'FAUTEUIL DIRECTEUR GRIS FK004-A13-1', 'P0000105', 'S0000105', 1, '', 0, 0, 'FAUTEUIL DIRECTEUR GRIS FK004-A13-1', 335000, 105, '', '0', 0, 0, '4', 3201810271032, '', 1, ''),
(395000, 'FAUTEUIL DIRECTEUR NOIR FK004-A13-2', 'P0000106', 'S0000106', 1, '', 0, 0, 'FAUTEUIL DIRECTEUR NOIR FK004-A13-2 (A-EX)', 335000, 106, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(285000, 'MEUBLES', 'P0000107', 'S0000107', 1, '', 0, 0, NULL, NULL, 107, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MEUBLES'),
(280000, 'FAUTEUIL VISITEUR MARRON C2011', 'P0000108', 'S0000108', 1, '', 0, 0, 'FAUTEUIL VISITEUR MARRON C2011 (A-EX)', 215000, 108, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(380000, 'FAUTEUIL ACCEUILCA-S300', 'P0000109', 'S0000109', 1, '', 0, 0, 'FAUTEUIL ACCEUILCA-S300 (A-EX)', 0, 109, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(1940000, 'TABLE A MANGER + 6 CHAISES 5550-25', 'P0000110', 'S0000110', 1, '', 0, 0, 'TABLE A MANGER + 6 CHAISES 5550-25 (A-EX)', 1850000, 110, '', '0', 0, 0, '', 3201810271032, '', 1, ''),
(450000, '2 CHAISES DE BAR + TABLE5550-26', 'P0000111', 'S0000111', 1, '', 0, 0, '2 CHAISES DE BAR + TABLE5550-26 (A-EX)', 450000, 111, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(512000, '2 CHAISES DE DINER + TABLE', 'P0000112', 'S0000112', 1, '', 0, 0, '2 CHAISES DE DINER + TABLE (A-EX)', 490000, 112, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(1600000, '6 CHAISES DE DINER + TABLE A MANGER 5550-28', 'P0000113', 'S0000113', 1, '', 0, 0, '6 CHAISES DE DINER + TABLE A MANGER 5550-28 (A-EX)', 1560000, 113, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(36580, 'BUREAU DE CHEVET BLANC 5550-29', 'P0000114', 'S0000114', 1, '', 0, 0, 'BUREAU DE CHEVET BLANC 5550-29 (A-EX)', 28000, 114, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(36580, 'BUREAU DE CHEVET BOIS 5550-30', 'P0000115', 'S0000115', 1, '', 0, 0, 'BUREAU DE CHEVET BOIS 5550-30 (A-EX)', 31000, 115, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(57000, 'DECO', 'P0000116', 'S0000116', 1, '', 0, 0, 'DECO (A-EX)', 2750000, 116, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(24000, 'DECO', 'P0000117', 'S0000117', 1, '', 0, 0, 'DECO (A-EX)', 0, 117, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(67000, 'DECO', 'P0000118', 'S0000118', 1, '', 0, 0, 'DECO (A-EX)', 110000, 118, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(136000, 'LAMPES DE PLAFOND 5550-34', 'P0000119', 'S0000119', 1, '', 0, 0, 'LAMPES DE PLAFOND 5550-34', 115000, 119, '', '0', 0, 0, '6', 3201810271032, '', 1, ''),
(136000, 'LAMPES DE PLAFOND 5550-35', 'P0000120', 'S0000120', 1, '', 0, 0, 'LAMPES DE PLAFOND 5550-35', 115000, 120, '', '0', 0, 0, '6', 3201810271032, '', 1, ''),
(36000, 'DECO', 'P0000121', 'S0000121', 1, '', 0, 0, 'DECO (A-EX)', 0, 121, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(175000, 'LAMPES DE PLAFOND 5550-360', 'P0000122', 'S0000122', 1, '', 0, 0, 'LAMPES DE PLAFOND 5550-360', 148000, 122, '', '0', 0, 0, '6', 3201810271032, '', 1, ''),
(45000, 'DECO', 'P0000123', 'S0000123', 1, '', 0, 0, 'DECO (A-EX)', 0, 111, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(50500, 'STORES 1,80 M', 'P0000124', 'S0000124', 1, '', 0, 0, 'STORES 1,80 M', 0, 111, '', '0', 0, 0, '1', 3201810271032, '', 1, ''),
(770000, 'GUERIDON ET POSE TELE', 'P0000125', 'S0000125', 1, '', 0, 0, 'GUERIDON ET POSE TELE', 0, 84, '', '0', 0, 0, '3', 3201810271032, '', 1, ''),
(35400, 'STORES DE 1,20 m', 'P0000126', 'S0000126', 1, '', 0, 0, 'STORES DE 1,20 m', 0, 111, '', '0', 0, 0, '1', 3201810271032, '', 1, ''),
(600000, 'GUERIDONS ET POSE TELE 5550-6', 'P0000142', 'S0000142', 1, '', 0, 0, 'GUERIDONS ET POSE TELE 5550-6 (A-EX)', 0, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(36600, 'STORE', 'P0000015', 'S0000015', 1, '', 0, 0, NULL, NULL, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(62000, 'MONTRE MURALE', 'P0000129', 'S0000129', 1, '', 0, 0, 'MONTRE MURALE (A-EX)', 0, 111, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(760000, 'GUERIDON ET POSE TELE 5550-4', 'P0000141', 'S0000141', 1, '', 0, 0, 'GUERIDON ET POSE TELE 5550-4 (A-EX)', 0, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(35000, 'STORE DE 1,20M', 'P0000014', 'S0000014', 1, '', 0, 0, 'STORE DE 1,20M (A-EX)', 0, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(132000, 'BUREAU DE 1,40M', 'P0000132', 'S0000132', 1, '', 0, 0, 'BUREAU DE 1,40M (A-EX)', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(400000, 'BUREAU DE 2M', 'P0000133', 'S0000133', 1, '', 0, 0, 'BUREAU DE 2M (A-EX)', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(640000, 'GUERIDON ET POSE TELE 5550-1', 'P0000140', 'S0000140', 1, '', 0, 0, 'GUERIDON ET POSE TELE 5550-1 (A-EX)', 0, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(35400, 'STORE', 'P0000013', 'S0000013', 1, '', 0, 0, NULL, NULL, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(20000, 'Main d\'oeuvre', 'P0000173', 'S0000173', 1, '', 0, 0, 'Main d\'oeuvre', 0, 111, '', '0', 0, 0, '0', 3201810271032, '', 1, 'Autres'),
(700000, 'GUERIDON 5550-5', 'P0000139', 'S0000139', 1, '', 0, 0, 'GUERIDON 5550-5 (A-EX)', 0, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(35400, 'STORE', 'P0000012', 'S0000012', 1, '', 0, 0, NULL, NULL, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(30000, 'Main d\'oeuvre', 'P0000172', 'S0000172', 1, '', 0, 0, 'Main d\'oeuvre', 0, 111, '', '0', 0, 0, '0', 3201810271032, '', 1, 'AUTRES'),
(770000, 'GUERIDON ET POSE TELE', 'P0000138', 'S0000138', 1, '', 0, 0, 'GUERIDON ET POSE TELE (A-EX)', 0, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(35400, 'STORE DE 1,20M', 'P0000011', 'S0000011', 1, '', 0, 0, 'STORE DE 1,20M (A-EX)', 0, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(495000, 'CHAISE VISITEUR GRIS ', 'P0000171', 'S0000171', 1, '', 0, 0, 'CHAISE VISITEUR GRIS ', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(262845, 'GUERIDON EN MARBRE', 'P0000137', 'S0000137', 1, '', 0, 0, 'GUERIDON EN MARBRE (A-EX)', 0, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(35400, 'STORE DE 1,20M', 'P0000010', 'S0000010', 1, '', 0, 0, 'STORE DE 1,20M (A-EX)', 0, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(2900000, 'SALON 7 PLACES 5550-31', 'P0000145', 'S0000145', 1, '', 0, 0, 'SALON 7 PLACES 5550-31 (A-EX)', 0, 111, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(3050000, 'SALON DE 7 PLACE MARRON 1615-2', 'P0000146', 'S0000146', 1, '', 0, 0, 'SALON DE 7 PLACE MARRON 1615-2 (A-EX)', 0, 111, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(161700, 'MEUBLES', 'P0000147', 'S0000147', 1, '', 0, 0, NULL, NULL, 111, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(186000, 'CHAISES POUR CAFE', 'P0000148', 'S0000148', 1, '', 0, 0, 'CHAISES POUR CAFE', 0, 111, '', '0', 0, 0, '3', 3201810271032, '', 1, ''),
(3050000, 'SALON DE 7 PLACES NOIR', 'P0000149', 'S0000149', 1, '', 0, 0, 'SALON DE 7 PLACES NOIR (A-EX)', 0, 111, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(0, 'CHAISE VISITEUR', 'P0000163', 'S0000163', 1, '', 0, 0, 'CHAISE VISITEUR', 0, 111, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(400000, 'BUREAU', 'P0000153', 'S0000153', 1, '', 0, 0, 'BUREAU (A-EX)', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(3890000, 'SALON LOUIS 14 R-120', 'P0000154', 'S0000154', 1, '', 0, 0, 'SALON LOUIS 14 R-120 (A-EX)', 0, 111, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(92500, 'TABLE D\'ACCUEIL', 'P0000155', 'S0000155', 1, '', 0, 0, 'TABLE D\'ACCUEIL (A-EX)', 0, 111, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(165700, 'BUREAU BLANC DE 1,60m', 'P0000156', 'S0000156', 1, '', 0, 0, 'BUREAU BLANC DE 1,60m (A-EX)', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(15000, 'DECO', 'P0000157', 'S0000157', 1, '', 0, 0, 'DECO', 0, 111, '', '0', 0, 0, '5', 3201810271032, '', 1, ''),
(95000, 'CHAISE VISTEUR', 'P0000158', 'S0000158', 1, '', 0, 0, 'CHAISE VISTEUR (A-EX)', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(23600, 'MONTRES MURALES', 'P0000159', 'S0000159', 1, '', 0, 0, 'MONTRES MURALES (A-EX)', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(25500, 'DECO', 'P0000160', 'S0000160', 1, '', 0, 0, 'DECO (A-EX)', 0, 111, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(63000, 'DECO', 'P0000161', 'S0000161', 1, '', 0, 0, 'DECO (A-EX)', 0, 111, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(38000, 'DECO', 'P0000162', 'S0000162', 1, '', 0, 0, 'DECO (A-EX)', 0, 111, '', '0', 0, 0, '5', 3201810271032, '', 1, 'OBJET DE DECORATION'),
(175230, 'BUREAU DE 1,30M', 'P0000170', 'S0000170', 1, '', 0, 0, 'BUREAU DE 1,30M', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(98000, 'FAUTEUIL SECRETAIRE BLANC', 'P0000164', 'S0000164', 1, '', 0, 0, 'FAUTEUIL SECRETAIRE BLANC (A-EX)', 0, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(93500, 'FAUTEUIL SECRETAIRE GRIS', 'P0000169', 'S0000169', 1, '', 0, 0, 'FAUTEUIL SECRETAIRE GRIS (A-EX)', 0, 111, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(0, 'GUERIDON', 'P0000136', 'S0000136', 1, '', 0, 0, 'GUERIDON', 0, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(35400, 'STORE DE 1,20M', 'P0000009', 'S0000009', 1, '', 0, 0, 'STORE DE 1,20M (A-EX)', 0, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(99700, 'FAUTEUIL DIRECTEUR BLEU', 'P0000168', 'S0000168', 1, '', 0, 0, 'FAUTEUIL DIRECTEUR BLEU (A-EX)', 0, 111, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(295000, 'FAUTEUIL BLEU', 'P0000135', 'S0000135', 1, '', 0, 0, 'FAUTEUIL BLEU (A-EX)', 0, 111, '', '0', 0, 0, '3', 0, '', 1, 'MEUBLES'),
(35400, 'STORE', 'P0000008', 'S0000008', 1, '', 0, 0, NULL, NULL, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(81800, 'FAUTEUIL VISITEUR BLEU', 'P0000167', 'S0000167', 1, '', 0, 0, 'FAUTEUIL VISITEUR BLEU (A-EX)', 0, 111, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(1800000, 'BUREAU+ARMOIRE', 'P0000134', 'S0000134', 1, '', 0, 0, 'BUREAU+ARMOIRE (A-EX)', 0, 111, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(35400, 'STORE', 'P0000007', 'S0000007', 1, '', 0, 0, NULL, NULL, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(80000, 'FAUTEUIL VISITEUR NOIR', 'P0000166', 'S0000166', 1, '', 0, 0, 'FAUTEUIL VISITEUR NOIR (A-EX)', 0, 111, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(270000, 'BUREAU DE 1,40M', 'P0000131', 'S0000131', 1, '', 0, 0, 'BUREAU DE 1,40M (A-EX)', 0, 111, '', '0', 0, 0, '4', 0, '', 1, 'MOBILIER DE BUREAU'),
(35400, 'STORE DE 1,20M', 'P0000006', 'S0000006', 1, '', 0, 0, 'STORE DE 1,20M (A-EX)', 0, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(81499, 'MEUBLES', 'P0000177', 'S0000177', 1, '', 0, 0, NULL, NULL, 111, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MEUBLES'),
(950000, 'BUREAU DE 2,40m', 'P0000178', 'S0000178', 1, '', 0, 0, 'BUREAU DE 2,40m (A-EX)', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(850000, 'ARMOIRE DE BUREAU', 'P0000179', 'S0000179', 1, '', 0, 0, 'ARMOIRE DE BUREAU (A-EX)', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(1, 'MONTRE', 'P0000180', 'S0000180', 1, '', 0, 0, 'MONTRE', 0, 0, '', '0', 0, 0, '0', 3201810271032, '', 1, 'ARTICLE TEST'),
(35400, 'STORE', 'P00000001', 'S00000001', 1, '', 0, 0, NULL, NULL, 18, '', '0', 0, 0, '12', 0, '', 1, 'STORE'),
(1, 'TEST', 'P0000182', 'S0000182', 1, '', 0, 0, 'TEST', 0, 0, '', '0', 0, 0, '0', 3201810271032, '', 1, 'AUTRES'),
(500, 'SUPPORTS', 'P0000183', 'S0000183', 1, '', 0, 0, 'SUPPORTS', 0, 0, '', '0', 0, 0, '0', 3201810271032, '', 1, 'AUTRES'),
(385200, 'BUREAUX', 'P0000184', 'S0000184', 1, '', 0, 0, 'BUREAUX', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(275000, 'FAUTEUILS DE BUREAUX', 'P0000185', 'S0000185', 1, '', 0, 0, 'FAUTEUILS DE BUREAUX', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(256400, 'FAUTEUILS VISITEURS', 'P0000186', 'S0000186', 1, '', 0, 0, 'FAUTEUILS VISITEURS', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(499000, 'SIEGE DU HALL', 'P0000187', 'S0000187', 1, '', 0, 0, 'SIEGE DU HALL', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(230000, 'ARMOIRE DE RANGEMENT BOX', 'P0000188', 'S0000188', 1, '', 0, 0, 'ARMOIRE DE RANGEMENT BOX', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(2000000, 'SALON DE 4 PLACE', 'P0000189', 'S0000189', 1, '', 0, 0, 'SALON DE 4 PLACE (A-EX)', 0, 0, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(1850000, 'BUREAU DIRECTEUR', 'P0000190', 'S0000190', 1, '', 0, 0, 'BUREAU DIRECTEUR', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(429500, 'FAUTEUIL DIRECTEUR', 'P0000191', 'S0000191', 1, '', 0, 0, 'FAUTEUIL DIRECTEUR', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(378800, 'FAUTEUILS VISITEURS', 'P0000192', 'S0000192', 1, '', 0, 0, 'FAUTEUILS VISITEURS', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(5826000, 'SALON COMPLET DE 7 places', 'P0000193', 'S0000193', 1, '', 0, 0, 'SALON COMPLET DE 7 places', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(523000, 'GUERIDON', 'P0000194', 'S0000194', 1, '', 0, 0, 'GUERIDON', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(262845, 'GUERIDON EN MARBRE', 'P0000195', 'S0000195', 1, '', 0, 0, 'GUERIDON EN MARBRE (A-EX)', 0, 20, '', '0', 0, 0, '3', 3201810271032, '', 1, 'MEUBLES'),
(132000, 'BUREAU DE 1,40 m', 'P0000196', 'S0000196', 1, '', 0, 0, 'BUREAU DE 1,40 m (A-EX)', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(175230, 'BUREAU DE 1,50 m', 'P0000197', 'S0000197', 1, '', 0, 0, 'BUREAU DE 1,50 m', 0, 0, '', '0', 0, 0, '4', 3201810271032, '', 1, 'MOBILIER DE BUREAU'),
(15000, 'MEUBLES', 'P00000178', 'S00000178', 0, NULL, 0, 0, NULL, NULL, 0, NULL, NULL, 0, 0, '20', 0, 'J802-81-2', 0, 'MEUBLES');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'AMEGNISSI Narcisse', 'narcisseamegnissi@gmail.com', NULL, '$2y$12$jEF/V78PgWDPrs2udiMqSeIh/3E70pRsp1QBbSPwxHVYCtzPAlBAi', NULL, '2024-02-14 13:35:33', '2024-02-14 13:35:33'),
(9, 'Administrateur', 'admin@galerieelda.bj', NULL, '$2y$10$gSjjjN8F.c1bKWDLqN4ccORdS0K6Bzo671QfazamT4dhQkMCIMItS', NULL, '2024-03-12 17:09:53', '2024-03-12 17:09:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `apropos`
--
ALTER TABLE `apropos`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `choisirs`
--
ALTER TABLE `choisirs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`IDClient`);

--
-- Index pour la table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `confidentialites`
--
ALTER TABLE `confidentialites`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `evenements`
--
ALTER TABLE `evenements`
  ADD PRIMARY KEY (`IDEVENEMENTS`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `famille`
--
ALTER TABLE `famille`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `fournisseur`
--
ALTER TABLE `fournisseur`
  ADD PRIMARY KEY (`idfournisseur`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `nouvelle`
--
ALTER TABLE `nouvelle`
  ADD PRIMARY KEY (`idnouvelle`);

--
-- Index pour la table `parametre`
--
ALTER TABLE `parametre`
  ADD PRIMARY KEY (`IDPARAMETRE`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `pourquois`
--
ALTER TABLE `pourquois`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produit`
--
ALTER TABLE `produit`
  ADD PRIMARY KEY (`CODEPRODUIT`) USING BTREE;

--
-- Index pour la table `publicite`
--
ALTER TABLE `publicite`
  ADD PRIMARY KEY (`IDPUBLICITE`);

--
-- Index pour la table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `sproduit`
--
ALTER TABLE `sproduit`
  ADD UNIQUE KEY `CODE_Sousproduit` (`CODE_Sousproduit`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `apropos`
--
ALTER TABLE `apropos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `choisirs`
--
ALTER TABLE `choisirs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `IDClient` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT pour la table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `confidentialites`
--
ALTER TABLE `confidentialites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `famille`
--
ALTER TABLE `famille`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `pourquois`
--
ALTER TABLE `pourquois`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `publicite`
--
ALTER TABLE `publicite`
  MODIFY `IDPUBLICITE` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
