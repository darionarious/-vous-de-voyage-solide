-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Client: 127.0.0.1
-- Généré le: Sam 27 Octobre 2018 à 19:42
-- Version du serveur: 5.5.27-log
-- Version de PHP: 5.4.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `crim`
--

-- --------------------------------------------------------

--
-- Structure de la table `criminel`
--

CREATE TABLE IF NOT EXISTS `criminel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `prenom` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `surnom` varchar(255) NOT NULL,
  `date_naissance` date NOT NULL,
  `lieu_naissance` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `duree_profession` varchar(255) NOT NULL,
  `telephone` varchar(11) NOT NULL,
  `domicile` varchar(255) NOT NULL,
  `ville` varchar(255) NOT NULL,
  `civilite` text NOT NULL,
  `groupe_sanguin` text NOT NULL,
  `taille` varchar(255) NOT NULL,
  `teint` varchar(15) NOT NULL,
  `race` varchar(20) NOT NULL,
  `couleur_cheveux` varchar(25) NOT NULL,
  `cicatrice_particuliere` varchar(15) NOT NULL,
  `caractere` varchar(255) NOT NULL,
  `temperament` varchar(255) NOT NULL,
  `situation_medicale` varchar(255) NOT NULL,
  `vie_sentimental` varchar(25) NOT NULL,
  `valeur_a_propos` varchar(25) NOT NULL,
  `famille_origine` varchar(255) NOT NULL,
  `famille_constituee` varchar(255) NOT NULL,
  `valeur_a_propos_famille` varchar(255) NOT NULL,
  `loisir` varchar(255) NOT NULL,
  `diplome` varchar(255) NOT NULL,
  `situation_professionelle` varchar(255) NOT NULL,
  `message1` text NOT NULL,
  `message2` varchar(255) NOT NULL,
  `croyance_religieuse` varchar(255) NOT NULL,
  `conviction_politique` varchar(255) NOT NULL,
  `situation_financiere` varchar(255) NOT NULL,
  `file_url` varchar(2000) NOT NULL,
  `file_url2` varchar(2000) NOT NULL,
  `file_url3` varchar(2000) NOT NULL,
  `file_url4` varchar(2000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Contenu de la table `criminel`
--

INSERT INTO `criminel` (`id`, `prenom`, `nom`, `surnom`, `date_naissance`, `lieu_naissance`, `profession`, `duree_profession`, `telephone`, `domicile`, `ville`, `civilite`, `groupe_sanguin`, `taille`, `teint`, `race`, `couleur_cheveux`, `cicatrice_particuliere`, `caractere`, `temperament`, `situation_medicale`, `vie_sentimental`, `valeur_a_propos`, `famille_origine`, `famille_constituee`, `valeur_a_propos_famille`, `loisir`, `diplome`, `situation_professionelle`, `message1`, `message2`, `croyance_religieuse`, `conviction_politique`, `situation_financiere`, `file_url`, `file_url2`, `file_url3`, `file_url4`) VALUES
(32, 'valvaerde', 'diallo', '', '2018-10-04', 'lab', 'informaticien', '1 ans', '628-568-469', 'hamdallaye', 'Conakry', 'Celibataire', 'A+', '1.80m', 'noir', 'sarakole', 'Noir', 'non', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(33, 'valvaerde', 'diallo', '', '2018-10-18', 'lab', 'informaticien', '628-568-469', 'hamdallaye', 'Conakry', 'Celibataire', 'O-', '1.80m', '1 ans', 'noir', 'sarakole', 'Noir', 'non', 'calme', 'non', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(34, 'valvaerde', 'diallo', '', '2018-10-24', 'lab', 'informaticien', '628-568-469', 'hamdallaye', 'Conakry', 'Celibataire', 'O+', '1.80m', '1 ans', 'noir', 'sarakole', 'Noir', 'non', 'calme', 'non', 'non', 'non', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(35, 'valvaerde', 'diallo', '', '2018-10-10', 'lab', 'informaticien', '628-568-469', 'hamdallaye', 'Conakry', 'Celibataire', 'O+', '1.80m', '1 ans', 'noir', 'sarakole', 'Noir', 'non', 'calme', 'non', 'non', 'non', 'non', 'non', 'non', 'non', '', '', '', '', '', '', '', '', '', '', '', ''),
(36, 'valvaerde', 'diallo', '', '2018-10-31', 'lab', 'informaticien', '628-568-469', 'hamdallaye', 'Conakry', 'Celibataire', 'O+', '1.80m', '1 ans', 'noir', 'sarakole', 'Noir', 'non', 'calme', 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'jeux ordinateur', 'licence 4', 'non', 'bonjour', 'bonsoir', 'musulman', 'non', 'non', '', '', '', ''),
(37, 'boubacar', 'drame', '', '2018-10-24', 'lab', 'informaticien', '628-568-469', 'hamdallaye', 'Conakry', 'Celibataire', 'O+', '1.80m', '1 ans', 'noir', 'sarakole', 'Noir', 'non', 'calme', 'non', 'non', 'non', 'non', 'non', 'non', 'non', 'jeux ordinateur', 'licence 4', 'non', 'grj', 'frai', 'musulman', 'non', 'non', 'image/download (1).jpg', '', '', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
