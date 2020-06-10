-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 07 oct. 2019 à 21:57
-- Version du serveur :  5.7.17
-- Version de PHP :  5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gip_data`
--

-- --------------------------------------------------------

--
-- Structure de la table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `about`
--

INSERT INTO `about` (`id`, `title`, `content`, `image`) VALUES
(1, 'hello <b> bro</b>', 'dhf fjioifd oidosd  ior oezoef oiefenie ejfuhefi ijrufezpof eoijzeooufj eifhufefefejzhfeiugf ieufhef jiuefrrrfkskfe jehufezlkf efhele', 'about3.jpg'),
(2, 'hello bro', 'rtyuiop dfghjklm', 'banner.jpg'),
(14, 'bonjour', 'fghjkl dfghjklm', 'post4.jpg'),
(4, '<h1>Notre hystorique</h1>', 'De nos jours, l\'internet constitue un phénomène dans la facilitation des interactions entre les personnes <br>et l’accès à l’information. Le web est utilisé par tous, sociétés, particuliers, Gouvernements.<br> Ainsi donc nous avons pensé à apporter une quelconque innovation dans la gestion de l’administration en revoyant le système existant qui présente des inconvénients<br> majeurs d’où notre choix pour le projet de fin d’année porte sur le sujet suivant						pensé à apporter une quelconque innovation dans la gestion de l’administration en revoyant le système existant qui présente des inconvénients majeurs d’où notre choix pour le projet de fin d’année porte sur le sujet suivant', 'c3.jpg'),
(7, 'Bonsoir', 'bonsoir  bonsoir  bonsoir  bonsoir  bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir bonsoir', 'about3.jpg'),
(5, '<h2><b>Qui</b> somme nous?</h2>', '<p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain\r\n                        was born and I will give you a complete account of the system, and expound the actual teachings\r\n                        of the great explorer of the truth, the master-builder of human happiness. No one rejects,\r\n                        dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know\r\n                        how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again\r\n                        is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain,\r\n                        but because occasionally circumstances occur in which toil and pain can procure him some great\r\n                        pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise,\r\n                        except to obtain some advantage from it? But who has any right to find fault with a man who\r\n                        chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that\r\n                        produces no resultant pleasure? On the other hand, we denounce with righteous indignation and\r\n                        dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so\r\n                        blinded by desire, that they cannot foresee</p>\r\n<br><br>\r\n<div class=\"bo13 p-l-29 m-l-9 p-b-10\">\r\n						<p class=\"p-b-11\">\r\n							Pensé à apporter une quelconque innovation dans la gestion de l’administration en revoyant le système existant qui présente des inconvénients majeurs d’où notre choix pour le projet de fin d’année porte sur le sujet suivant						</p>\r\n\r\n						<span class=\"s-text7\">\r\n							- Erick Tshibang\r\n						</span>\r\n					</div>', 'intro6.jpg'),
(6, '<h2>Recrutement</h2>', '<p>   Ainsi donc nous avons pensé à apporter une quelconque innovation dans la gestion de l’administration en revoyant le système existant qui présente des inconvénients\r\nmajeurs d’où notre choix pour le projet de fin d’année porte sur le sujet suivant pensé à apporter une quelconque innovation dans la gestion de l’administration en revoyant le système existant qui présente des inconvénients majeurs d’où notre choix pour le projet de fin d’année porte sur le sujet suivant</p>\r\n<div class=\"col-md-4 p-b-30\">\r\n	<div class=\"hov-img-zoom\">\r\n					\r\n<img src=\"../assets/images/banner-14.jpg\" alt=\"IMG-ABOUT\">\r\n	</div>\r\n</div>\r\n</div>', 'laptop1.jpg'),
(8, 'hello bro', 'ghjkl', '2.png'),
(15, 'Bonsoir', 'yuioo ghjklm fghuio', 'slider4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `auteur` varchar(30) DEFAULT NULL,
  `gradeAuteur` varchar(50) DEFAULT NULL,
  `categorie` varchar(30) DEFAULT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(250) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `datepub` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `blog`
--

INSERT INTO `blog` (`id`, `auteur`, `gradeAuteur`, `categorie`, `title`, `description`, `content`, `image`, `datepub`) VALUES
(1, 'Erick', 'CYBER SECURITE', 'sercurité', 'tfgyhuijkolphjk fghjklm fghuj', 'fgyhuijkolphjk fghjklm fghuj  fgyhuijkolphjk fghjklm fghuj  fgyhuijkolphjk fghjklm fghuj fgyhuijkolphjk fghjklm fghuj', 'fghjklm fghujfghjklm fghujfghjklm fghujfghjklm fghuj fghjklm fghujfghjklm fghujfghjklm fghuj fghjklm fghujfghjklm fghuj fghjklm fghuj fghjklm fghuj fghjklm fghuj fghjklm fghuj fghjklm fghuj fghjklm fghuj', 'banner2.jpg', '2019-10-01 19:00:42');

-- --------------------------------------------------------

--
-- Structure de la table `projet`
--

CREATE TABLE `projet` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `content` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `projet`
--

INSERT INTO `projet` (`id`, `title`, `description`, `content`, `image`) VALUES
(1, 'Application', 'fghjkf fhyoipjhg sghuijokp  sdfuyiop uhuiop dfghjkkld dghjklm\r\nfghjkf fhyoipjhg sghuijokp  sdfuyiop uhuiop dfghjkkld dghjklm', 'fghjkf fhyoipjhg sghuijokp  sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp  sdfuyiop uhuiop dfghjkkld dghjklm\r\nfghjkf fhyoipjhg sghuijokp  sdfuyiop uhuiop dfghjkkld dghjklm\r\nfghjkf fhyoipjhg sghuijokp  sdfuyiop uhuiop dfghjkkld dghjklm', '21.png'),
(5, 'hello bro', 'fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm', 'fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm', 'iphone43.png'),
(6, 'Application', 'fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm', 'fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm', '11.png'),
(7, 'Application mobile', 'fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm', 'fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm', '31.png'),
(8, 'Application', 'fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm', 'fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklmfghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm fghjkf fhyoipjhg sghuijokp sdfuyiop uhuiop dfghjkkld dghjklm', '22.png');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `service`
--

INSERT INTO `service` (`id`, `title`, `description`, `image`) VALUES
(1, 'AdminLT', 'Nous disposons de templates au graphisme de bonne qualité, de montage phoos hors norme ainsi que les affiches de publicité mais aussi des logos.', 'post-img22.jpg'),
(2, 'Dising', 'Nous disposons de templates au graphisme de bonne qualité, de montage phoos hors norme ainsi que les affiches de publicité mais aussi des logos.', 'post-img12.jpg'),
(3, 'Application', 'Nous disposons de templates au graphisme de bonne qualité, de montage phoos hors norme ainsi que les affiches de publicité mais aussi des logos.', 'c31.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(128) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'Erick', 'ericktshibang55@gmail.com', '973777330'),
(6, 'big', 'eri@gmail.com', '1234'),
(5, 'Manasse', 'admin@webdamn.com', 'bonjour'),
(8, 'Medane', 'ericktshibang55@gmail.com', '123456'),
(9, 'Rachel', 'ericktshibang55@gmail.com', '123654'),
(10, 'Benjamin', 'ericktshibang55@gmail.com', '20172020'),
(11, 'Henock', 'ericktshibang55@gmail.com', '1234567'),
(12, 'bijou', 'ericktshibang55@gmail.com', 'bijou');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `projet`
--
ALTER TABLE `projet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT pour la table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `projet`
--
ALTER TABLE `projet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
