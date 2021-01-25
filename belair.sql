-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  mar. 19 jan. 2021 à 08:16
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `belair`
--

-- --------------------------------------------------------

--
-- Structure de la table `addressfactures`
--

CREATE TABLE `addressfactures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numrue` mediumint(9) DEFAULT NULL,
  `rue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` mediumint(9) NOT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `addressfactures`
--

INSERT INTO `addressfactures` (`id`, `numrue`, `rue`, `postal`, `ville`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2784, 'chemin de Vinche', 82440, 'Réalville', 'Get82Design', 1, '2020-01-11 11:07:49', '2020-01-11 11:07:49');

-- --------------------------------------------------------

--
-- Structure de la table `addresslivraisons`
--

CREATE TABLE `addresslivraisons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `numrue` mediumint(9) NOT NULL,
  `rue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postal` mediumint(9) NOT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `addresslivraisons`
--

INSERT INTO `addresslivraisons` (`id`, `numrue`, `rue`, `postal`, `ville`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2784, 'chemin de Vinche', 82440, 'Réalville', 1, '2020-01-11 11:07:49', '2020-01-11 11:07:49');

-- --------------------------------------------------------

--
-- Structure de la table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `imgproduits`
--

CREATE TABLE `imgproduits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `produit_id` int(11) NOT NULL,
  `alt` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `imgproduits`
--

INSERT INTO `imgproduits` (`id`, `image`, `produit_id`, `alt`, `created_at`, `updated_at`) VALUES
(1, 'feve-01.jpg', 1, 'Fèves issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(2, 'feve-02.jpg', 1, 'Fèves issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(3, 'feve-03.jpg', 1, 'Fèves issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(4, 'oignonblanc-01.jpg', 2, 'Oignons fane blanc issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(5, 'oignonblanc-02.jpg', 2, 'Oignons fane blanc issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(6, 'oignonblanc-03.jpg', 2, 'Oignons fane blanc issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(7, 'oignonrouge-01.jpg', 3, 'Oignons rouges issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(8, 'oignonrouge-02.jpg', 3, 'Oignons rouges issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(9, 'oignonrouge-03.jpg', 3, 'Oignons rouges issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(10, 'courgette-01.jpg', 4, 'Courgettes issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(11, 'courgette-02.jpg', 4, 'Courgettes issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(12, 'courgette-03.jpg', 4, 'Courgettes issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(13, 'poivronvert-01.jpg', 5, 'Poivrons verts issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(14, 'poivronvert-02.jpg', 5, 'Poivrons verts issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(15, 'poivronvert-03.jpg', 5, 'Poivrons verts issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(16, 'piment-01.jpg', 6, 'Piments lapid issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(17, 'pro-detail-01.jpg', 6, 'Piments lapid issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(18, 'pro-detail-01.jpg', 6, 'Piments lapid issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(19, 'pimentcapelhot-01.jpg', 7, 'Piments capel hot issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(20, 'pro-detail-01.jpg', 7, 'Piments capel hot issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(21, 'pro-detail-01.jpg', 7, 'Piments capel hot issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(22, 'tomatecerise-r-01.jpg', 8, 'Tomates cerises rouges issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(23, 'tomatecerise-r-02.jpg', 8, 'Tomates cerises rouges issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(24, 'tomatecerise-r-03.jpg', 8, 'Tomates cerises rouges issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(25, 'tomatecerise-j-01.jpg', 9, 'Tomates cerises jaunes issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(26, 'tomatecerise-j-02.jpg', 9, 'Tomates cerises jaunes issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(27, 'tomatecerise-j-03.jpg', 9, 'Tomates cerises jaunes issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(28, 'tomategrappe-01.jpg', 10, 'Tomates grappe issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(29, 'tomategrappe-02.jpg', 10, 'Tomates grappe issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(30, 'tomategrappe-03.jpg', 10, 'Tomates grappe issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(31, 'tomatecdb-01.jpg', 11, 'Tomates coeur de boeuf issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(32, 'tomatecdb-02.jpg', 11, 'Tomates coeur de boeuf issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(33, 'tomatecdb-03.jpg', 11, 'Tomates coeur de boeuf issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(34, 'aubergine-01.jpg', 12, 'Aubergines issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(35, 'aubergine-02.jpg', 12, 'Aubergines issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(36, 'pro-detail-01.jpg', 12, 'Aubergines issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(37, 'melonjaune-01.jpg', 13, 'Melons jaunes issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(38, 'melonjaune-02.jpg', 13, 'Melons jaunes issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(39, 'melonjaune-03.jpg', 13, 'Melons jaunes issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(40, 'melonvert-01.jpg', 14, 'Melons verts issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(41, 'melonvert-02.jpg', 14, 'Melons verts issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(42, 'melonvert-03.jpg', 14, 'Melons verts issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(43, 'pasteque-01.jpg', 15, 'Pastèques issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(44, 'pasteque-02.jpg', 15, 'Pastèques issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(45, 'pasteque-03.jpg', 15, 'Pastèques issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(46, 'ail-01.jpg', 16, 'Ails issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(47, 'ail-02.jpg', 16, 'Ails issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(48, 'ail-03.jpg', 16, 'Ails issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(49, 'oignonsec-01.jpg', 17, 'Oignons blanc sec issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(50, 'pro-detail-01.jpg', 17, 'Oignons blanc sec issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(51, 'pro-detail-01.jpg', 17, 'Oignons blanc sec issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(52, 'echalote-01.jpg', 18, 'Échalotes issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(53, 'echalote-02.jpg', 18, 'Échalotes issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(54, 'echalote-03.jpg', 18, 'Échalotes issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(55, 'potimarron-01.jpg', 19, 'Potimarron issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(56, 'potimarron-02.jpg', 19, 'Potimarron issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(57, 'pro-detail-01.jpg', 19, 'Potimarron issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(58, 'citrouille-01.jpg', 20, 'Citrouilles issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(59, 'citrouille-02.jpg', 20, 'Citrouilles issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(60, 'pro-detail-01.jpg', 20, 'Citrouilles issues d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(61, 'butternut-01.jpg', 21, 'Butternuts issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(62, 'butternut-02.jpg', 21, 'Butternuts issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50'),
(63, 'pro-detail-01.jpg', 21, 'Butternuts issus d\'une agriculture raisonnée. Légumes de Bel Air à Réalville dans le Tarn et Garonne. Production locale de légumes en plein air, et vente de légumes à la ferme. Découvrez notre sélection de légumes.', '2020-01-11 11:07:50', '2020-01-11 11:07:50');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_10_202303_create_addressfactures_table', 1),
(4, '2019_03_10_223246_create_addresslivraisons_table', 1),
(5, '2019_03_11_163306_create_produits_table', 1),
(6, '2019_03_13_090608_create_imgproduits_table', 1),
(7, '2019_04_08_214252_create_shoppingcarts_table', 1),
(8, '2019_04_28_090020_create_contact_us_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci,
  `price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dispo` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `conditionnement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `name`, `desc`, `price`, `dispo`, `conditionnement`, `created_at`, `updated_at`) VALUES
(1, 'Fève', 'La fève est une graine qui peut être consommer à l\'état frais ou sec. C\'est un légume très ancien, que l\'on sème à l\'automne dans les régions chaudes, elle végète l\'hiver tout en développant son réseau racinaire. Au printemps, elle grandit très vite et fleurit dans la foulée. Les gousses peuvent alors être récoltées de mi-avril à fin mai. Les fèves fraîches peuvent être consommée crues, mais sans la peau. Cuites, elles remplaçaient les haricots dans le cassoulet (alors appelé févoulet). Elles peuvent aussi être consommées en purée et dans la soupe', '1.50', 'yes', '250g', '2020-01-11 11:07:49', '2020-02-07 06:59:05'),
(2, 'Oignon fane blanc', 'Aussi appelé oignon nouveau, l\'oignon fane blanc est un légume de printemps et un condiment dont l’usage très répandu en cuisine. Son parfum est bien plus doux que son cousin l\'oignon blanc, il est donc conseillé de le consommer cru en salade pour profiter de toute sa saveur. On peut également consommer l\'oignon nouveau cuit, à la poêle avec un filet d’huile d’olive ou une noisette de beurre. On peut aussi en faire un confit et les ajouter à une purée ou à une quiche de légumes.', '1.30', 'yes', 'Pièce', '2020-01-11 11:07:49', '2020-02-07 06:57:13'),
(3, 'Oignon fane rouge', 'Aussi appelé oignon nouveau, l\'oignon fane rouge est un légume de printemps et un condiment dont l’usage très répandu en cuisine. Son parfum est bien plus doux que son cousin l\'oignon rouge, il est donc conseillé de le consommer cru en salade pour profiter de toute sa saveur. On peut également consommer l\'oignon nouveau cuit, à la poêle avec un filet d’huile d’olive ou une noisette de beurre. On peut aussi en faire un confit et les ajouter à une purée ou à une quiche de légumes.', '1.30', 'yes', 'botte', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(4, 'Courgette', 'La courgette est un légume d\'été, dont la fleur est aussi parfois utilisée en cuisine. La courgette est un fruit de forme allongée, de couleur verte, qui a l\'allure d\'un grand concombre. Bien qu\'il s\'agisse d\'un fruit, on est communément consommée comme un légume, crue ou cuite. Cuite, elle se mange bouillie, sautée, frite, farcie, en gratin, en soupe et rentre dans la composition de la ratatouille. Les fleurs mâles peuvent être consommées, farcies ou en beignet.', '1.40', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(5, 'Poivron carré', 'Le poivron n\'est autre qu\'une variété de piments doux. Son fruit peut être consommé, cru ou cuit, comme un légume. Il est l\'ingrédient indispensable d\'une piperade ou d\'une ratatouille, mais il peut aussi servir d\'accompagnement. Découpé en rondelles ou en morceaux, il entre facilement dans la composition de salades avec des tomates et des oignons. Sa peau est peu digeste crue. Il peut être cuit au gril, au four, ou à l\'étouffée.', '1.80', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(6, 'Piment lapid', 'Le piment est généralement associée à la saveur pimentée, piquante. Il sert généralement à relever le goût des aliments ou des préparations culinaires, notamment des sauces. Les piments contiennent plus de vitamines A que n\'importe quel autre fruit ou légume et sont une source importante de vitamine C, de magnésium et de fer. Boire de l\'eau pour atténuer la force d\'un piment est inutile, en revanche le lait neutralise son action sur les récepteurs de la douleur. Contrairement à l\'ail, loignon ou l\'échalote, la cuisson n\'altère pas cette force.', '2.00', 'no', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(7, 'Piment capel hot', 'Le piment est généralement associée à la saveur pimentée, piquante. Il sert généralement à relever le goût des aliments ou des préparations culinaires, notamment des sauces. Les piments contiennent plus de vitamines A que n\'importe quel autre fruit ou légume et sont une source importante de vitamine C, de magnésium et de fer. Boire de l\'eau pour atténuer la force d\'un piment est inutile, en revanche le lait neutralise son action sur les récepteurs de la douleur. Contrairement à l\'ail, loignon ou l\'échalote, la cuisson n\'altère pas cette force.', '2.00', 'no', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(8, 'Tomate cerise rouge', 'La tomate cerise est un type de variété de tomate, cultivée comme cette dernière pour ses fruits - mais de taille réduite - consommés comme légumes. À la fois sucrée et acidulée, elle a tout pour plaire, en particulier pour l\'apéritif où elle se laisse manger nature sans culpabiliser. On peut la farcir de fromage frais ou caramélisée au miel, elle n\'en est pas moins délicieuse dans une salade associée à de la feta ou à de la mozzarella', '0.70', 'yes', '250g', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(9, 'Tomate cerise jaune', 'La tomate cerise est un type de variété de tomate, cultivée comme cette dernière pour ses fruits - mais de taille réduite - consommés comme légumes. À la fois sucrée et acidulée, elle a tout pour plaire, en particulier pour l\'apéritif où elle se laisse manger nature sans culpabiliser. On peut la farcir de fromage frais ou caramélisée au miel, elle n\'en est pas moins délicieuse dans une salade associée à de la feta ou à de la mozzarella', '0.70', 'yes', '250g', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(10, 'Tomate grappe', 'La tomate grappe est une variété de tomates aux fruits ronds d\'un calibre moyen, en grappe. Cette tomate précoce est très parfumée. Elles peuvent être mangées crues, telles quelles, en salade ou encore en jus. Cuites en coulis, elles accompagneront de nombreux plats.', '2.00', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(11, 'Tomate cœur de bœuf', 'La cœur de bœuf originelle est une variété de grosse tomate dont la forme rappelle celle d\'un cœur de bovin. Cette tomate est réputée pour son goût et sa chair abondante. La pleine saison de la tomate cœur de bœuf s’étire de fin août à septembre, elle peut durer jusqu’aux premières gelées d’octobre certaines années. La tomate cœur de bœuf se consomme principalement crue agrémentée d’un filet d’huile d’olive et de quelques feuilles de basilic. Essayez-la aussi en tomate farcie végétarienne avec des noix et une sauce au basilic.', '1.50', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(12, 'Aubergine demi long', 'L\'aubergine se consomme cuite ou crue. Cuite, son goût se rapproche de celui des champignons. Elle constitue donc une bonne candidate pour la diète anti-obésité, sous réserve de la cuisiner sans huile qu\'elle prend plaisir à absorber (cuire à l\'eau, à la vapeur, au four sous sac de cuisson, à sec où au jus de lime à la poêle, grillée, marinées, etc).', '1.30', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(13, 'Melon Canari', 'Le melon canari ou melon d\'hiver est un gros melon allongé, jaune vif, à la chair blanche. Il se consomme cru, seul ou en salade et est très désaltérant. Moins parfumé mais plus juteux, le melon jaune Canari se consomme de la même façon que les autres variétés de melons en gardant à l’esprit que sa chair a moins de tenue. Dégustez-le frais par exemple avec du jambon cru, en lamelles sucrées-salées, ou en salade de fruits.', '1.60', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(14, 'Melon vert', 'Le melon vert est ovale, de couleur vert olive. Il possède une chair ferme et blanche succulente. Généralement dégusté cru en hors d’œuvre ou en dessert, on peut le préparer pour la confection de confitures. Il se mariera très bien avec du jambon fumé et certains fromages.', '1.60', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(15, 'Pastèque sans pépin', 'La pastèque sans pépin, communément appelée le melon d\'eau, possède un goût rafraîchissant particulièrement apprécié durant les chaudes journées d\'été.', '1.00', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(16, 'Ail violet', 'L’ail violet est un ail d’automne, aussi appelé précoce car il est planté en octobre et novembre. En bouche, il apporte une légère impression de piquant et présente une bonne persistance aromatique. Sa texture est moelleuse et sa saveur délicatement sucrée', '3.00', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(17, 'Oignon blanc en sec', 'L\'oignon blanc sec peut se faire en confit et être ajouter à une quiche de légumes ou à une purée.', '1.50', 'no', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(18, 'échalote', 'L\'échalote fait partie depuis longtemps de la gastronomie française. Il peut être consommé cuits ou crus. Crus, ils servent à aromatiser les salades et crudités. Cuits, ils entrent dans la confection de sauces, de courts-bouillons, ou accompagnent les plats de viande.', '1.60', 'yes', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(19, 'Potimarron', 'Le potimarron est très riche en provitamine A et en oligo-éléments. Comme les potirons, les potimarrons peuvent être consommés en potage, au four avec de l\'ail, frits, en tourte ou en purée. À la différence du potiron, il n\'est pas nécessaire de retirer la peau du potimarron avant la cuisson. Il est aussi succulent cru.', '1.30', 'no', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(20, 'Citrouille musquée', ' La citrouille musquée est l\'une des cinq espèces de courges les plus couramment cultivées. Elle se consomme cuite. On peut les préparer de très nombreuses manières comme légume ou comme dessert : en soupe, en purée, en gratin, en flan, en tarte, en tourte, en confiture… Elles ont un goût musqué assez fin.', '0.80', 'no', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(21, 'Butternut', 'La butternut est aussi appelé la doubeurre. Elle peut se manger crue comme une carotte, bien qu\'elle soit très légèrement âcre, mais plus goûteuse. Sa chair ferme permet de la cuisiner comme une pomme de terre. Une recette habituelle est la soupe. On peut aussi la cuisiner au four, en gratin, ou en faire des gâteaux, comme avec les carottes.', '1.30', 'no', 'Kg', '2020-01-11 11:07:49', '2020-01-11 11:07:49');

-- --------------------------------------------------------

--
-- Structure de la table `shoppingcarts`
--

CREATE TABLE `shoppingcarts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `livraison` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `checkcommande` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `checkreception` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'no',
  `day` enum('Mercredi','Samedi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `hour` enum('18h00','18h30','19h00','19h30') COLLATE utf8mb4_unicode_ci NOT NULL,
  `daylivr` enum('Mardi','Jeudi') COLLATE utf8mb4_unicode_ci NOT NULL,
  `daypro` enum('Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi','Dimanche') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `shoppingcarts`
--

INSERT INTO `shoppingcarts` (`id`, `user_id`, `content`, `livraison`, `checkcommande`, `checkreception`, `day`, `hour`, `daylivr`, `daypro`, `created_at`, `updated_at`) VALUES
(1, 1, '{\"6f9a7122c6f80b2bf13d180938ff88c7\":{\"rowId\":\"6f9a7122c6f80b2bf13d180938ff88c7\",\"id\":\"1\",\"name\":\"F\\u00e8ve\",\"qty\":2,\"price\":1.3000000000000000444089209850062616169452667236328125,\"options\":{\"image\":\"feve-01.jpg\"},\"tax\":0,\"subtotal\":2.600000000000000088817841970012523233890533447265625},\"2dae8b86e1110d6835399542d657699f\":{\"rowId\":\"2dae8b86e1110d6835399542d657699f\",\"id\":\"5\",\"name\":\"Poivron carr\\u00e9\",\"qty\":2,\"price\":1.8000000000000000444089209850062616169452667236328125,\"options\":{\"image\":\"poivronvert-01.jpg\"},\"tax\":0,\"subtotal\":3.600000000000000088817841970012523233890533447265625},\"7347a89f41e4e42205a59593f2802abb\":{\"rowId\":\"7347a89f41e4e42205a59593f2802abb\",\"id\":\"8\",\"name\":\"Tomate cerise rouge\",\"qty\":7,\"price\":0.6999999999999999555910790149937383830547332763671875,\"options\":{\"image\":\"tomatecerise-r-01.jpg\"},\"tax\":0,\"subtotal\":4.89999999999999946709294817992486059665679931640625}}', 'no', 'yes', 'no', 'Mercredi', '18h00', 'Mardi', 'Lundi', '2020-01-24 12:37:29', '2020-01-27 17:14:31'),
(2, 1, '{\"3fc83b5f71faabe2566e574b6fd2768f\":{\"rowId\":\"3fc83b5f71faabe2566e574b6fd2768f\",\"id\":\"3\",\"name\":\"Oignon fane rouge\",\"qty\":5,\"price\":1.3000000000000000444089209850062616169452667236328125,\"options\":{\"image\":\"oignonrouge-01.jpg\"},\"tax\":0,\"subtotal\":6.5}}', 'no', 'no', 'no', 'Mercredi', '18h00', 'Mardi', 'Lundi', '2020-01-27 16:34:40', '2020-01-27 16:34:40'),
(3, 1, '[]', 'no', 'no', 'no', 'Mercredi', '18h00', 'Mardi', 'Lundi', '2020-01-27 16:45:30', '2020-01-27 16:45:30'),
(4, 1, '{\"3fc83b5f71faabe2566e574b6fd2768f\":{\"rowId\":\"3fc83b5f71faabe2566e574b6fd2768f\",\"id\":\"3\",\"name\":\"Oignon fane rouge\",\"qty\":6,\"price\":1.3000000000000000444089209850062616169452667236328125,\"options\":{\"image\":\"oignonrouge-01.jpg\"},\"tax\":0,\"subtotal\":7.800000000000000710542735760100185871124267578125},\"6e56b8dc59171bc3f8344ab40a8c710e\":{\"rowId\":\"6e56b8dc59171bc3f8344ab40a8c710e\",\"id\":\"4\",\"name\":\"Courgette\",\"qty\":7,\"price\":1.399999999999999911182158029987476766109466552734375,\"options\":{\"image\":\"courgette-01.jpg\"},\"tax\":0,\"subtotal\":9.7999999999999989341858963598497211933135986328125}}', 'no', 'no', 'no', 'Mercredi', '18h00', 'Jeudi', 'Lundi', '2020-03-26 12:48:07', '2020-03-26 12:48:07'),
(5, 1, '{\"44144a73cf00c5f72b4523826be2cc1b\":{\"rowId\":\"44144a73cf00c5f72b4523826be2cc1b\",\"id\":\"11\",\"name\":\"Tomate c\\u0153ur de b\\u0153uf\",\"qty\":8,\"price\":1.5,\"options\":{\"image\":\"tomatecdb-01.jpg\"},\"tax\":0,\"subtotal\":12},\"0157e7f5d13225e9f798498066adf03f\":{\"rowId\":\"0157e7f5d13225e9f798498066adf03f\",\"id\":\"10\",\"name\":\"Tomate grappe\",\"qty\":7,\"price\":2,\"options\":{\"image\":\"tomategrappe-01.jpg\"},\"tax\":0,\"subtotal\":14}}', 'no', 'no', 'no', 'Mercredi', '18h00', 'Mardi', 'Lundi', '2020-03-26 12:50:32', '2020-03-26 12:50:32'),
(6, 1, '{\"1d57262e87aa6762b06416c2b1eb2870\":{\"rowId\":\"1d57262e87aa6762b06416c2b1eb2870\",\"id\":\"2\",\"name\":\"Oignon fane blanc\",\"qty\":6,\"price\":1.3000000000000000444089209850062616169452667236328125,\"options\":{\"image\":\"oignonblanc-01.jpg\"},\"tax\":0,\"subtotal\":7.800000000000000710542735760100185871124267578125},\"3fc83b5f71faabe2566e574b6fd2768f\":{\"rowId\":\"3fc83b5f71faabe2566e574b6fd2768f\",\"id\":\"3\",\"name\":\"Oignon fane rouge\",\"qty\":5,\"price\":1.3000000000000000444089209850062616169452667236328125,\"options\":{\"image\":\"oignonrouge-01.jpg\"},\"tax\":0,\"subtotal\":6.5},\"6e56b8dc59171bc3f8344ab40a8c710e\":{\"rowId\":\"6e56b8dc59171bc3f8344ab40a8c710e\",\"id\":\"4\",\"name\":\"Courgette\",\"qty\":6,\"price\":1.399999999999999911182158029987476766109466552734375,\"options\":{\"image\":\"courgette-01.jpg\"},\"tax\":0,\"subtotal\":8.39999999999999857891452847979962825775146484375}}', 'no', 'no', 'no', 'Mercredi', '18h00', 'Jeudi', 'Lundi', '2020-03-26 12:53:08', '2020-03-26 12:53:08'),
(7, 1, '{\"2dae8b86e1110d6835399542d657699f\":{\"rowId\":\"2dae8b86e1110d6835399542d657699f\",\"id\":\"5\",\"name\":\"Poivron carr\\u00e9\",\"qty\":15,\"price\":1.8000000000000000444089209850062616169452667236328125,\"options\":{\"image\":\"poivronvert-01.jpg\"},\"tax\":0,\"subtotal\":27}}', 'no', 'no', 'no', 'Mercredi', '18h00', 'Mardi', 'Lundi', '2020-03-26 12:59:50', '2020-03-26 12:59:50'),
(8, 1, '{\"e3907bfb555afe0745aeaeec239d9d88\":{\"rowId\":\"e3907bfb555afe0745aeaeec239d9d88\",\"id\":\"15\",\"name\":\"Past\\u00e8que sans p\\u00e9pin\",\"qty\":\"17\",\"price\":1,\"options\":{\"image\":\"pasteque-01.jpg\"},\"tax\":0,\"subtotal\":17}}', 'no', 'no', 'no', 'Mercredi', '18h00', 'Jeudi', 'Lundi', '2020-03-26 13:22:53', '2020-03-26 13:22:53'),
(9, 1, '{\"6e56b8dc59171bc3f8344ab40a8c710e\":{\"rowId\":\"6e56b8dc59171bc3f8344ab40a8c710e\",\"id\":\"4\",\"name\":\"Courgette\",\"qty\":15,\"price\":1.399999999999999911182158029987476766109466552734375,\"options\":{\"image\":\"courgette-01.jpg\"},\"tax\":0,\"subtotal\":21}}', 'no', 'no', 'no', 'Mercredi', '18h00', 'Mardi', 'Lundi', '2020-03-26 13:25:54', '2020-03-26 13:25:54'),
(10, 1, '{\"6e56b8dc59171bc3f8344ab40a8c710e\":{\"rowId\":\"6e56b8dc59171bc3f8344ab40a8c710e\",\"id\":\"4\",\"name\":\"Courgette\",\"qty\":12,\"price\":1.399999999999999911182158029987476766109466552734375,\"options\":{\"image\":\"courgette-01.jpg\"},\"tax\":0,\"subtotal\":16.7999999999999971578290569595992565155029296875}}', 'no', 'no', 'no', 'Mercredi', '18h00', 'Mardi', 'Lundi', '2020-03-26 13:28:53', '2020-03-26 13:28:53'),
(11, 1, '{\"ddeedc56a6441229b8ed6a28a8d47fa0\":{\"rowId\":\"ddeedc56a6441229b8ed6a28a8d47fa0\",\"id\":\"18\",\"name\":\"\\u00e9chalote\",\"qty\":13,\"price\":1.600000000000000088817841970012523233890533447265625,\"options\":{\"image\":\"echalote-01.jpg\"},\"tax\":0,\"subtotal\":20.800000000000000710542735760100185871124267578125}}', 'yes', 'yes', 'no', 'Mercredi', '18h00', 'Jeudi', 'Lundi', '2020-03-26 13:34:59', '2020-03-26 13:41:31');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` enum('user','pro','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `newuser` enum('yes','no') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'yes',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `phone`, `email`, `password`, `role`, `newuser`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Angles', 'Benoit', '0681834817', 'get82design@gmail.com', '$2y$10$au52PxVVYGP6qGCtsIy3WOu.XCte9gAZ5ra6xeSXMmajbjM/NCSvu', 'admin', 'no', NULL, '2020-01-11 11:07:49', '2020-01-11 11:07:49'),
(2, 'Martinasso', 'Olivier', '0605115223', 'legumesdebelair@gmail.com', '$2y$10$RraqlLqU.eG7W58l9mVKVOxBeII5X71dEZglifz43F3ooIVUj01ge', 'admin', 'no', NULL, '2020-01-11 11:07:49', '2020-01-11 11:07:49');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `addressfactures`
--
ALTER TABLE `addressfactures`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `addresslivraisons`
--
ALTER TABLE `addresslivraisons`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `imgproduits`
--
ALTER TABLE `imgproduits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `shoppingcarts`
--
ALTER TABLE `shoppingcarts`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT pour la table `addressfactures`
--
ALTER TABLE `addressfactures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `addresslivraisons`
--
ALTER TABLE `addresslivraisons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `imgproduits`
--
ALTER TABLE `imgproduits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `shoppingcarts`
--
ALTER TABLE `shoppingcarts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
