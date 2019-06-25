-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 25 juin 2019 à 18:07
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ja_site`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `article_excerpt` text NOT NULL,
  `article_image` varchar(255) NOT NULL,
  `article_url` text NOT NULL,
  `article_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_content`, `article_excerpt`, `article_image`, `article_url`, `article_slug`) VALUES
(1, 'htmlreference.io', '<p>Htmlreference.io est un site outil qui va vous permettre de bien comprendre l&rsquo;HTML et les diff&eacute;rents attributs.</p>\r\n<p>Ce site r&eacute;f&eacute;rence toutes les balises du langage HTML par ordre alphab&eacute;tique. Un moteur de recherche permet aussi de trouver rapidement une balise.</p>\r\n<p>Pour chacune d&rsquo;entre elles, on dispose d&rsquo;explications d&eacute;taill&eacute;es sur son fonctionnement, des exemples pratiques d&rsquo;utilisation, la description des &eacute;ventuels attributs des balises&hellip;</p>\r\n<div><img class=\"img-fluid\" src=\"//localhost:3004/FinalProjectphp/uploads/header.png\" alt=\"header example\" width=\"600\" height=\"335\" /></div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>', '<p><span style=\"color: #626262;\">Htmlreference.io est un site outil qui va vous permettre de bien comprendre l&rsquo;HTML et les diff&eacute;rents attributs.</span></p>', 'html-reference-icon.png', 'https://htmlreference.io/', 'htmlreferenceio'),
(2, 'cssreference.io', '<p>cssreference.io est une documentation visuelle de presque toutes les propri&eacute;t&eacute;s CSS illustr&eacute;es par des exemples visuels et interactifs.</p>', '<p><span style=\"color: #626262;\">cssreference.io est une documentation visuelle de presque toutes les propri&eacute;t&eacute;s CSS illustr&eacute;es par des exemples visuels et interactifs.</span></p>', 'css-reference-icon.png', 'https://cssreference.io/', 'cssreferenceio'),
(3, 'scrollmagic.io', '<p>Librairie Javascript qui permet une multitude d\'interaction lors du scrolling d\'une page web.</p>\r\n<p><img class=\"img-fluid\" src=\"//localhost:3004/FinalProjectphp/uploads/scrollmagic.png\" alt=\"\" width=\"534\" height=\"228\" /></p>\r\n<p><code class=\"jscript plain\" style=\"white-space: nowrap; font-family: Consolas, \'Bitstream Vera Sans Mono\', \'Courier New\', Courier, monospace !important; font-size: 1em !important; color: black !important; border-radius: 0px !important; background-image: none !important; background-repeat: initial !important; line-height: 1.1em !important; bottom: auto !important; float: none !important; height: auto !important; left: auto !important; outline: 0px !important; overflow: visible !important; position: static !important; right: auto !important; top: auto !important; vertical-align: baseline !important; width: auto !important; box-sizing: content-box !important; direction: ltr !important; box-shadow: none !important; display: inline !important;\"></code></p>', '<p><span style=\"color: #626262;\">Librairie Javascript qui permet une multitude d\'interaction lors du scrolling d\'une page web.</span></p>', 'scrollmagic_icon.png', 'https://scrollmagic.io/', 'scrollmagicio'),
(4, 'Complete WordPress Development Themes and Plugins', '<p>Cours en Anglais de Zac Gordon pour devenir un d&eacute;veloppeur WordPress en cr&eacute;ant des th&egrave;mes et des plugins personnalis&eacute;s</p>', '<p><span style=\"color: #626262;\">Cours en Anglais de Zac Gordon pour devenir un d&eacute;veloppeur WordPress en cr&eacute;ant des th&egrave;mes et des plugins personnalis&eacute;s</span></p>', 'udemy_icon.png', 'https://www.udemy.com/wordpress-theme-and-plugin-development-course/', 'Complete-WordPress-Development-Themes-and-Plugins'),
(5, 'A Complete Guide to Flexbox', '<p>Ce guide explique tout ce qui concerne flexbox, en se concentrant sur les diff&eacute;rentes propri&eacute;t&eacute;s possibles pour l\'&eacute;l&eacute;ment parent (le conteneur flex) et les &eacute;l&eacute;ments enfants (les &eacute;l&eacute;ments flex).</p>\r\n<p>Terminology:</p>\r\n<ul>\r\n<li><strong>main axis</strong>&nbsp;- The main axis of a flex container is the primary axis along which flex items are laid out. Beware, it is not necessarily horizontal; it depends on the&nbsp;flex-direction&nbsp;property (see below).</li>\r\n<li><strong>main-start | main-end</strong>&nbsp;- The flex items are placed within the container starting from main-start and going to main-end.</li>\r\n<li><strong>main size</strong>&nbsp;- A flex item\'s width or height, whichever is in the main dimension, is the item\'s main size. The flex item\'s main size property is either the &lsquo;width&rsquo; or &lsquo;height&rsquo; property, whichever is in the main dimension.</li>\r\n<li><strong>cross axis</strong>&nbsp;- The axis perpendicular to the main axis is called the cross axis. Its direction depends on the main axis direction.</li>\r\n<li><strong>cross-start | cross-end</strong>&nbsp;- Flex lines are filled with items and placed into the container starting on the cross-start side of the flex container and going toward the cross-end side.</li>\r\n<li><strong>cross size</strong>&nbsp;- The width or height of a flex item, whichever is in the cross dimension, is the item\'s cross size. The cross size property is whichever of &lsquo;width&rsquo; or &lsquo;height&rsquo; that is in the cross dimension.</li>\r\n</ul>\r\n<div>&nbsp;</div>', '<p><span style=\"color: #626262;\">Ce guide explique tout ce qui concerne flexbox, en se concentrant sur les diff&eacute;rentes propri&eacute;t&eacute;s possibles pour l\'&eacute;l&eacute;ment parent (le conteneur flex) et les &eacute;l&eacute;ments enfants (les &eacute;l&eacute;ments flex).</span></p>', 'css_tricks_icon.png', 'https://css-tricks.com/snippets/css/a-guide-to-flexbox/', 'A-Complete-Guide-to-Flexbox'),
(6, 'idiomatic.js', '<p>Principes d\'&eacute;criture d\'un code JavaScript coh&eacute;rent et idiomatique</p>', '<p><span style=\"color: #626262;\">Principes d\'&eacute;criture d\'un code JavaScript coh&eacute;rent et idiomatique</span></p>', 'github_icon.png', 'https://github.com/rwaldron/idiomatic.js/tree/master/translations/fr_FR', 'idiomaticjs'),
(7, 'Object Oriented PHP & MVC', '<p>Cours en Anglais de Brad Traversy pour apprendre &agrave; construire un framework PHP MVC orient&eacute; objet personnalis&eacute;</p>', '<p><span style=\"color: #626262;\">Cours en Anglais de Brad Traversy pour apprendre &agrave; construire un framework PHP MVC orient&eacute; objet personnalis&eacute;</span></p>', 'udemy_icon.png', 'https://www.udemy.com/object-oriented-php-mvc/', 'Object-Oriented-PHP--MVC'),
(8, 'Flexbox Froggy', '<p>Jeu o&ugrave; vous aidez Froggy la grenouille et ses amis en &eacute;crivant du code CSS (flexbox).</p>', '<p><span style=\"color: #626262;\">Jeu o&ugrave; vous aidez Froggy la grenouille et ses amis en &eacute;crivant du code CSS (flexbox).</span></p>', 'froggy_icon.ico', 'https://flexboxfroggy.com/#fr', 'Flexbox-Froggy'),
(9, 'MVC : Créer des sites web PHP performants et organisés !', '<p><span style=\"color: #626262;\">Cours de Bryan P. en Fran&ccedil;ais pour c</span><span style=\"color: #626262;\">r&eacute;er et comprendre la structure Model View Controller en PHP</span></p>\r\n<ul>\r\n<li><span style=\"color: #626262;\">Cr&eacute;er &amp; comprendre la structure MVC</span></li>\r\n<li><span style=\"color: #626262;\">Utiliser l\'outil SASS</span></li>\r\n<li><span style=\"color: #626262;\">Utiliser des classes PHP</span></li>\r\n<li><span style=\"color: #626262;\">Construire un syst&egrave;me multi-langages performant</span></li>\r\n<li><span style=\"color: #626262;\">Cr&eacute;er un blog avec la structure MVC</span></li>\r\n<li><span style=\"color: #626262;\">Simplifier les requ&ecirc;tes SQL</span></li>\r\n</ul>', '<p>Cours de Bryan P. en Fran&ccedil;ais pour cr&eacute;er et comprendre la structure Model View Controller en PHP</p>', 'udemy_icon.png', 'https://www.udemy.com/stucture-mvc-php/', 'MVC--Crer-des-sites-web-PHP-performants-et-organiss-'),
(10, 'Bootstrap 4 From Scratch With 5 Projects', '<p><span style=\"color: #626262;\">Cours de Brad Traversy pour apprendre Bootstrap 4</span></p>', '<p>Cours de Brad Traversy pour apprendre Bootstrap 4</p>', 'udemy_icon.png', 'https://www.udemy.com/bootstrap-4-from-scratch-with-5-projects/', 'Bootstrap-4-From-Scratch-With-5-Projects'),
(11, 'Formation Comprendre Webpack', '<div>\r\n<div style=\"color: #626262;\">\r\n<p style=\"color: #626262;\">Formation de Grafikart sur Webpack</p>\r\n<p style=\"color: #626262;\"><a href=\"https://www.grafikart.fr/formations/webpack\">https://www.grafikart.fr/formations/webpack</a></p>\r\n<p style=\"color: #626262;\">Vous allez apprendre le fonctionnement de Webpack:</p>\r\n<ul style=\"color: #626262;\">\r\n<li>D&eacute;couverte de Webpack</li>\r\n<li>Configuration</li>\r\n<li>Babel (es2015)</li>\r\n<li>Minification et Lazy Loading</li>\r\n<li>CSS &amp; SASS</li>\r\n<li>Extraire le CSS</li>\r\n<li>Mise en cache</li>\r\n<li>Url Loader</li>\r\n<li>ESLint</li>\r\n<li>Dev Server</li>\r\n<li>Plugin HTML</li>\r\n</ul>\r\n</div>\r\n</div>', '<p>Formation de Grafikart sur Webpack</p>\r\n<p><a title=\"formation webpack grafikart\" href=\"https://www.grafikart.fr/formations/webpack\" target=\"_blank\" rel=\"noopener\">Acc&egrave;s &agrave; la formation</a></p>', 'grafikart-icon.png', 'https://www.grafikart.fr/formations/webpack﻿', 'Formation-Comprendre-Webpack'),
(12, 'Débuter avec Webpack', '<p>Tutoriel pour apprendre Webpack sur alsacreations.com</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', '<p>Tutoriel pour apprendre Webpack sur alsacreations.com</p>', 'aslacreations-icon.png', 'https://www.alsacreations.com/tuto/lire/1754-debuter-avec-webpack.html', 'Dbuter-avec-Webpack'),
(13, 'WordPress Theme Development with Bootstrap', '<p><span style=\"color: #626262;\">Cours de Brad Hussey pour apprendre &agrave; d&eacute;velopper un th&egrave;me Wordpress avec Bootstrap</span></p>', '<p><span style=\"color: #626262;\">Cours de Brad Hussey pour apprendre &agrave; d&eacute;velopper un th&egrave;me Wordpress avec Bootstrap</span></p>', 'udemy_icon.png', 'https://www.udemy.com/bootstrap-to-wordpress/', 'WordPress-Theme-Development-with-Bootstrap'),
(14, 'Animsition jQuery', '<div style=\"color: #626262;\">&nbsp;</div>\r\n<div style=\"color: #626262;\"><span style=\"color: #626262;\">Un plug-in avec de tr&egrave;s nombreuses possibilit&eacute;s de configurations pour cr&eacute;er simplement et facilement&nbsp;</span><span style=\"color: #626262; font-weight: bold;\">des&nbsp;transitions de pages en CSS</span><span style=\"color: #626262;\">.</span></div>\r\n<div style=\"color: #626262;\">58 animation diff&eacute;rentes:</div>\r\n<div style=\"color: #626262;\">&nbsp;</div>\r\n<ul style=\"color: #626262;\">\r\n<li>Fade</li>\r\n<li>Fade up</li>\r\n<li>Fade Down</li>\r\n<li>Fade Left</li>\r\n<li>Fade Right</li>\r\n<li>Rotate</li>\r\n<li>Flip X</li>\r\n<li>Flip Y</li>\r\n<li>Zoom</li>\r\n<li>Overlay Option</li>\r\n</ul>\r\n<p style=\"color: #626262;\"><a title=\"animsition\" href=\"http://git.blivesta.com/animsition/\" target=\"_blank\" rel=\"noopener\">Voir le site</a></p>', '<p><span style=\"color: #626262;\">Un plug-in avec de tr&egrave;s nombreuses possibilit&eacute;s de configurations pour cr&eacute;er simplement et facilement&nbsp;</span><span style=\"color: #626262; font-weight: bold;\">des&nbsp;transitions de pages en CSS</span><span style=\"color: #626262;\">.</span></p>', 'animsition-icon.ico', 'https://git.blivesta.com/animsition/', 'Animsition-jQuery');

-- --------------------------------------------------------

--
-- Structure de la table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article_categories`
--

INSERT INTO `article_categories` (`id`, `article_id`, `category_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(4, 3, 3),
(5, 4, 4),
(6, 4, 6),
(7, 6, 3),
(8, 5, 7),
(9, 9, 10),
(10, 9, 4),
(11, 8, 7),
(12, 11, 11),
(13, 12, 11),
(14, 10, 8),
(15, 7, 4),
(16, 7, 9),
(17, 7, 10),
(18, 9, 9),
(19, 13, 6),
(20, 13, 8),
(21, 14, 5);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_type`) VALUES
(1, 'html', 'front'),
(2, 'css', 'front'),
(3, 'javascript', 'front'),
(4, 'php', 'back'),
(5, 'jquery', 'front'),
(6, 'wordpress', 'back'),
(7, 'flexbox', 'front'),
(8, 'bootstrap', 'front'),
(9, 'mysql', 'database'),
(10, 'architecture mcv', 'back'),
(11, 'Webpack', 'front');

-- --------------------------------------------------------

--
-- Structure de la table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_description` text NOT NULL,
  `project_sm_image` varchar(255) NOT NULL,
  `project_lg_image` varchar(255) NOT NULL,
  `project_url` varchar(255) NOT NULL,
  `project_categories` text NOT NULL,
  `project_comments` text NOT NULL,
  `project_slug` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_description`, `project_sm_image`, `project_lg_image`, `project_url`, `project_categories`, `project_comments`, `project_slug`) VALUES
(1, 'WebAgency', '<div><span style=\"color: #626262;\">Refonte du site de l\'agence en int&eacute;grant une maquette</span><br style=\"color: #626262;\" /><br style=\"color: #626262;\" /><img class=\"img-fluid\" style=\"color: #626262;\" src=\"//localhost:3000/FinalProjectphp/uploads/maquette_header.png\" alt=\"\" width=\"400\" height=\"203\" /></div>\r\n<div>&nbsp;</div>\r\n<div><img class=\"img-fluid\" src=\"//localhost:3000/FinalProjectphp/uploads/maquette_services.png\" alt=\"\" width=\"400\" height=\"168\" /></div>\r\n<div>&nbsp;</div>\r\n<div><img class=\"img-fluid\" src=\"//localhost:3000/FinalProjectphp/uploads/maquette_projets.png\" alt=\"\" width=\"400\" height=\"171\" /></div>\r\n<div>&nbsp;</div>\r\n<div><img class=\"img-fluid\" src=\"//localhost:3000/FinalProjectphp/uploads/maquette_carte.png\" alt=\"\" width=\"400\" height=\"175\" /></div>', 'projet1-sm.jpg', 'projet1-lg.jpg', 'https://juliaassad.fr/projet1/', 'html,css,jquery,flexbox,Sass', '<p><strong>Excellent projet!</strong></p>\r\n<ul>\r\n<li>D\'un point de vue oral, la pr&eacute;sentation est tr&egrave;s fluide, Julia ma&icirc;trise bien son sujet.</li>\r\n<li>D\'un point de vue technique l\'int&eacute;gralit&eacute; des fonctionnalit&eacute;s attendues sont bien respect&eacute;s . Le code est propre et bien structur&eacute;.</li>\r\n</ul>\r\n<p>Bravo et bonne continuation Julia</p>', 'WebAgency'),
(2, 'Strasbourg Office De Tourisme', '<p><strong>Cr&eacute;ation d\'un site pour l\'Office de Tourisme de Strasbourg.</strong></p>\r\n<p>D&eacute;veloppement d\'un th&egrave;me Wordpress sur-mesure.</p>\r\n<ul>\r\n<li>Cr&eacute;ation des fichiers de mon th&egrave;me</li>\r\n<li>Cr&eacute;ation de custom post types et utilisation du plugin Advanced Custom Fields</li>\r\n</ul>', 'projet2-sm.jpg', 'projet2-lg.jpg', 'https://juliaassad.fr/projet2/', 'html,css,jquery,flexbox,php,wordpress', '<p><strong>Travail de fond :</strong></p>\r\n<ul>\r\n<li>Animation CSS3 sont discr&egrave;tes et bien situ&eacute;es</li>\r\n<li>Le site est essentiellement graphique m&ecirc;me s\'il ne respecte&nbsp;pas la charte graphique de Strasbourg</li>\r\n<li>C\'est pertinent de mettre en sidebar les articles qui sont du m&ecirc;me th&egrave;me que l\'article visit&eacute;. Cela incite &agrave; voir le reste des actualit&eacute;s</li>\r\n<li>Bon projet, un site complet qui respecte bien la demande du client</li>\r\n<li>L\'&eacute;l&egrave;ve a rajout&eacute; une section \"Les incontournables\", ce qui est tr&egrave;s utile pour les touristes</li>\r\n</ul>\r\n<p><strong>Oral</strong> :&nbsp;Une pr&eacute;sentation claire et fluide, avec une attitude pro</p>\r\n<p><strong>Axe d\'am&eacute;lioration</strong> :</p>\r\n<ul>\r\n<li>Mentions l&eacute;gales et alerte cookies obligatoire depuis 2018</li>\r\n<li>Il&nbsp; y a beaucoup de contenus ce qui&nbsp;nous oblige &agrave;&nbsp;&nbsp;beaucoup scroller pour arriver au footer</li>\r\n<li>Attention &agrave; ne pas surcharger les pages de contenus pour laisser la page respirer, il aurait &eacute;t&eacute; pertinent de cr&eacute;er un sous-menu par exemple</li>\r\n</ul>\r\n<p>Bonne continuation !</p>', 'Strasbourg-Office-De-Tourisme'),
(3, 'Vélo\'v', '<p><strong>Concevoir une carte interactive de location de v&eacute;los</strong></p>\r\n<p>D&eacute;veloppement d\'une page de type \"Single page Application\" simulant la r&eacute;servation de v&eacute;los &agrave; Lyon</p>\r\n<ul>\r\n<li>Cr&eacute;ation d\'un Slider en javascript expliquant le fonctionnement de l\'application.</li>\r\n<li>Carte des stations v&eacute;lo&rsquo;v&nbsp;\r\n<ol>\r\n<li>Ajout d\'un marqueur &agrave; l\'emplacement de chaque station (<span style=\"color: #626262;\">API GoogleMaps)</span></li>\r\n<li>Afficher un panneau avec les d&eacute;tails de la station lors d&rsquo;un clique sur un marqueur (API JCDecaux)</li>\r\n</ol>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li>R&eacute;servation d&rsquo;un v&eacute;lo\r\n<ol>\r\n<li>Canvas (API Canvas)\r\n<ul>\r\n<li>Pour signer dans un champ libre</li>\r\n</ul>\r\n</li>\r\n<li>&nbsp;Formulaire avec Nom et Pr&eacute;nom<br />\r\n<ul>\r\n<li>Sauvegard&eacute;s dans le local storage de l\'API WebStorage pour pr&eacute; remplir le formulaire de r&eacute;servation lors d\'un prochain usage</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li>Timer (d&eacute;compte dynamique)\r\n<ol>\r\n<li>Pour indiquer le temps restant avant expiration de la r&eacute;servation.</li>\r\n<li>20 minutes (Une r&eacute;servation expire au bout de 20 minutes)\r\n<ul>\r\n<li>Sauvegard&eacute; dans le session storage de l\'API WebStorage pour que la r&eacute;servation soit toujours pr&eacute;sente lors du rechargement de la page</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n</li>\r\n</ul>\r\n<p>Ce project a &eacute;t&eacute; enti&egrave;rement d&eacute;velopp&eacute; en Javascript Orient&eacute; Objet</p>', 'projet3-sm.jpg', 'projet3-lg.jpg', 'https://juliaassad.fr/projet3/', 'html,css,javascript,Bootstrap', '<p>Le&nbsp;projet&nbsp;est&nbsp;valid&eacute;&nbsp;avec succ&egrave;s, f&eacute;licitations !<br /><br /><strong>Points positifs</strong></p>\r\n<ul>\r\n<li>Les livrables sont pr&eacute;sents et fonctionnels</li>\r\n<li>La pr&eacute;sentation est r&eacute;alis&eacute;e de mani&egrave;re professionnelle.</li>\r\n<li><span style=\"color: #626262;\">Le code est bien indent&eacute; et clair.</span></li>\r\n<li><span style=\"color: #626262;\">Le&nbsp; code est en OO et utilise m&ecirc;me deux versions du JS</span></li>\r\n<li><span style=\"color: #626262;\">Une excellente structuration du code avec l&rsquo;utilisation de Webpack</span></li>\r\n<li><span style=\"color: #626262;\">Le site passe toutes les validations.</span></li>\r\n<li><span style=\"color: #626262;\">L&rsquo;&eacute;tudiante a bien pris connaissance du r&ocirc;le de frontend developer&nbsp;</span></li>\r\n<li><span style=\"color: #626262;\">Les r&eacute;ponses aux questions &eacute;taient pertinentes.</span></li>\r\n</ul>\r\n<p><br /><strong>Axes d\'am&eacute;lioration</strong></p>\r\n<ul>\r\n<li>Eviter de recr&eacute;er la roue au niveau des appel HTTP</li>\r\n</ul>\r\n<p><strong>Les comp&eacute;tences suivantes ont bien &eacute;t&eacute; valid&eacute;es</strong></p>\r\n<ul>\r\n<li>Faire des requ&ecirc;tes HTTP en langage JavaScript</li>\r\n<li>Cr&eacute;er des objets simples en JavaScript, contenant des m&eacute;thodes et des propri&eacute;t&eacute;s</li>\r\n<li>R&eacute;cup&eacute;rer des donn&eacute;es de formulaires en utilisant le langage JavaScript</li>\r\n<li>Ecrire un code source lisible</li>\r\n</ul>', 'Vlov'),
(4, 'Jean Forteroche | Écrivain', '<p>Cr&eacute;ation d\'un blog pour l\'&eacute;crivain Jean Forteroche.</p>\r\n<p>D&eacute;veloppement d\'une application de blog en PHP <strong>orient&eacute; objet</strong> avec une base de donn&eacute;es MySQL:</p>\r\n<ul>\r\n<li><span style=\"color: #626262;\">D&eacute;veloppement de l\'interface Front-End&nbsp;</span></li>\r\n<li><span style=\"color: #626262;\">D&eacute;veloppement de l\'Interface Back-End dans laquelle on retrouve tous les &eacute;l&eacute;ments d\'un CRUD (Create, Read, Update, Delete) pour que Mr. Forteroche puisse ajouter les chapitres de son nouveau livre, les lire, les modifier, et les supprimer</span></li>\r\n</ul>\r\n<p>Le code est construit sur une architecture MVC</p>', 'projet4-sm.jpg', 'projet4-lg.jpg', 'https://juliaassad.fr/projet4/', 'html,css,javascript,php,mySql,architecture MVC', '<p><strong>Travail de fond :</strong></p>\r\n<ul>\r\n<li>Travail s&eacute;rieux qui respecte bien toutes les consignes</li>\r\n<li>L\'&eacute;l&egrave;ve est soucieuse des d&eacute;tails, chaque fonctionnalit&eacute; est pouss&eacute; jusqu\'au bout</li>\r\n<li>Des messages d\'erreurs sont bien pr&eacute;sents lorsque les champs sont vides. L\'&eacute;l&egrave;ve a bien travaill&eacute; les r&egrave;gles et la s&eacute;curit&eacute; des champs</li>\r\n<li>L\'&eacute;l&egrave;ve est &agrave; l\'aise avec son projet et la techniques, quelques fonctionnalit&eacute;s en plus ont &eacute;t&eacute; d&eacute;velopp&eacute;es</li>\r\n<li>Le code est propre, bien comment&eacute; et bien structur&eacute;. Utilisation de la structure MVC, les requ&ecirc;tes sont pr&eacute;par&eacute;es</li>\r\n</ul>\r\n<p><strong>Oral</strong> :&nbsp;l\'&eacute;l&egrave;ve est &agrave; l\'aise &agrave; l\'oral, bonne posture</p>\r\n<p>Bonne continuation !</p>', 'jean-forteroche'),
(11, 'Julia Assad | Développeuse Web', '<p>D&eacute;veloppement de mon site en utilisant les 5 langages appris : HTML, CSS, JS, PHP et SQL.&nbsp;</p>\r\n<ul>\r\n<li><span style=\"color: #626262;\">Front-end</span>\r\n<ul>\r\n<li>Gulp</li>\r\n<li>Webpack</li>\r\n<li>Sass</li>\r\n<li>Bootstrap</li>\r\n<li>GSAP</li>\r\n<li>ScrollMagic</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li>Back-End\r\n<ul>\r\n<li>PHP orient&eacute; objet</li>\r\n<li>Architecture MVC</li>\r\n<li>CRUD</li>\r\n</ul>\r\n</li>\r\n</ul>', 'projet5-sm.jpg', '', 'http://juliaassad.fr', 'html,css,javascript,jquery,php,mySql,architecture MVC,Webpack,GSAP,ScrollMagic,Sass,Bootstrap,Gulp', '<p>Commentaires du mentor apr&egrave;s la soutenance</p>', 'Julia-Assad--Dveloppeuse-Web');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Index pour la table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_id` (`article_id`) USING BTREE,
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Index pour la table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT pour la table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article_categories`
--
ALTER TABLE `article_categories`
  ADD CONSTRAINT `article_categories_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`),
  ADD CONSTRAINT `article_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
