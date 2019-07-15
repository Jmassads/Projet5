-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  lun. 15 juil. 2019 à 11:32
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
  `article_slug` varchar(255) NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`article_id`, `article_title`, `article_content`, `article_excerpt`, `article_image`, `article_url`, `article_slug`, `is_published`) VALUES
(1, 'htmlreference.io', '<p>Htmlreference.io est un site outil qui va vous permettre de bien comprendre l&rsquo;HTML et les diff&eacute;rents attributs.</p>\r\n<p>Ce site r&eacute;f&eacute;rence toutes les balises du langage HTML par ordre alphab&eacute;tique. Un moteur de recherche permet aussi de trouver rapidement une balise.</p>\r\n<p>Pour chacune d&rsquo;entre elles, on dispose d&rsquo;explications d&eacute;taill&eacute;es sur son fonctionnement, des exemples pratiques d&rsquo;utilisation, la description des &eacute;ventuels attributs des balises&hellip;</p>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>\r\n<div>&nbsp;</div>', '<p><span style=\"color: #626262;\">Htmlreference.io est un site outil qui va vous permettre de bien comprendre l&rsquo;HTML et les diff&eacute;rents attributs.</span></p>', 'html-reference-icon.png', 'https://htmlreference.io/', 'htmlreference-io', 1),
(2, 'cssreference.io', '<p>cssreference.io est une documentation visuelle de presque toutes les propri&eacute;t&eacute;s CSS illustr&eacute;es par des exemples visuels et interactifs.</p>', '<p><span style=\"color: #626262;\">cssreference.io est une documentation visuelle de presque toutes les propri&eacute;t&eacute;s CSS illustr&eacute;es par des exemples visuels et interactifs.</span></p>', 'css-reference-icon.png', 'https://cssreference.io/', 'cssreference-io', 1),
(3, 'scrollmagic.io', '<p>Librairie Javascript qui permet une multitude d\'interaction lors du scrolling d\'une page web.</p>\r\n<p><img class=\"img-fluid\" src=\"//localhost:3004/FinalProjectphp/uploads/scrollmagic.png\" alt=\"\" width=\"534\" height=\"228\" /></p>\r\n<p><code class=\"jscript plain\" style=\"white-space: nowrap; font-family: Consolas, \'Bitstream Vera Sans Mono\', \'Courier New\', Courier, monospace !important; font-size: 1em !important; color: black !important; border-radius: 0px !important; background-image: none !important; background-repeat: initial !important; line-height: 1.1em !important; bottom: auto !important; float: none !important; height: auto !important; left: auto !important; outline: 0px !important; overflow: visible !important; position: static !important; right: auto !important; top: auto !important; vertical-align: baseline !important; width: auto !important; box-sizing: content-box !important; direction: ltr !important; box-shadow: none !important; display: inline !important;\"></code></p>', '<p><span style=\"color: #626262;\">Librairie Javascript qui permet une multitude d\'interaction lors du scrolling d\'une page web.</span></p>', 'scrollmagic_icon.png', 'https://scrollmagic.io/', 'scrollmagic-io', 0),
(4, 'Complete WordPress Development Themes and Plugins', '<p>Cours en Anglais de Zac Gordon pour devenir un d&eacute;veloppeur WordPress en cr&eacute;ant des th&egrave;mes et des plugins personnalis&eacute;s</p>', '<p><span style=\"color: #626262;\">Cours en Anglais de Zac Gordon pour devenir un d&eacute;veloppeur WordPress en cr&eacute;ant des th&egrave;mes et des plugins personnalis&eacute;s</span></p>', 'udemy_icon.png', 'https://www.udemy.com/wordpress-theme-and-plugin-development-course/', 'complete-wordpress-development-themes-and-plugins', 0),
(5, 'A Complete Guide to Flexbox', '<p>Ce guide explique tout ce qui concerne flexbox, en se concentrant sur les diff&eacute;rentes propri&eacute;t&eacute;s possibles pour l\'&eacute;l&eacute;ment parent (le conteneur flex) et les &eacute;l&eacute;ments enfants (les &eacute;l&eacute;ments flex).</p>\r\n<div>&nbsp;</div>', '<p><span style=\"color: #626262;\">Ce guide explique tout ce qui concerne flexbox, en se concentrant sur les diff&eacute;rentes propri&eacute;t&eacute;s possibles pour l\'&eacute;l&eacute;ment parent (le conteneur flex) et les &eacute;l&eacute;ments enfants (les &eacute;l&eacute;ments flex).</span></p>', 'css_tricks_icon.png', 'https://css-tricks.com/snippets/css/a-guide-to-flexbox/', 'a-complete-guide-to-flexbox', 1),
(6, 'idiomatic.js', '<p>Principes d\'&eacute;criture d\'un code JavaScript coh&eacute;rent et idiomatique</p>', '<p><span style=\"color: #626262;\">Principes d\'&eacute;criture d\'un code JavaScript coh&eacute;rent et idiomatique</span></p>', 'github_icon.png', 'https://github.com/rwaldron/idiomatic.js/tree/master/translations/fr_FR', 'idiomatic-js', 0),
(7, 'Object Oriented PHP & MVC', '<p>Cours en Anglais de Brad Traversy pour apprendre &agrave; construire un framework PHP MVC orient&eacute; objet personnalis&eacute;</p>', '<p><span style=\"color: #626262;\">Cours en Anglais de Brad Traversy pour apprendre &agrave; construire un framework PHP MVC orient&eacute; objet personnalis&eacute;</span></p>', 'udemy_icon.png', 'https://www.udemy.com/object-oriented-php-mvc/', 'object-oriented-php-mvc', 0),
(8, 'Flexbox Froggy', '<p>Jeu o&ugrave; vous aidez Froggy la grenouille et ses amis en &eacute;crivant du code CSS (flexbox).</p>\r\n<p><img class=\"img-fluid\" src=\"../../uploads/flexbox-froggy.png\" alt=\"flexbox-froggy\" width=\"503\" height=\"259\" /></p>', '<p><span style=\"color: #626262;\">Jeu o&ugrave; vous aidez Froggy la grenouille et ses amis en &eacute;crivant du code CSS (flexbox).</span></p>', 'froggy_icon.ico', 'https://flexboxfroggy.com/#fr', 'flexbox-froggy', 1),
(9, 'MVC : Créer des sites web PHP performants et organisés !', '<p><span style=\"color: #626262;\">Cours de Bryan P. en Fran&ccedil;ais pour c</span><span style=\"color: #626262;\">r&eacute;er et comprendre la structure Model View Controller en PHP</span></p>\r\n<ul>\r\n<li><span style=\"color: #626262;\">Cr&eacute;er &amp; comprendre la structure MVC</span></li>\r\n<li><span style=\"color: #626262;\">Utiliser l\'outil SASS</span></li>\r\n<li><span style=\"color: #626262;\">Utiliser des classes PHP</span></li>\r\n<li><span style=\"color: #626262;\">Construire un syst&egrave;me multi-langages performant</span></li>\r\n<li><span style=\"color: #626262;\">Cr&eacute;er un blog avec la structure MVC</span></li>\r\n<li><span style=\"color: #626262;\">Simplifier les requ&ecirc;tes SQL</span></li>\r\n</ul>', '<p>Cours de Bryan P. en Fran&ccedil;ais pour cr&eacute;er et comprendre la structure Model View Controller en PHP</p>', 'udemy_icon.png', 'https://www.udemy.com/stucture-mvc-php/', 'mvc-creer-des-sites-web-php-performants-et-organises', 1),
(10, 'Bootstrap 4 From Scratch With 5 Projects', '<p><span style=\"color: #626262;\">Cours de Brad Traversy (en Anglais) pour apprendre Bootstrap 4</span></p>\r\n<p><span style=\"color: #626262;\">Vous allez d&eacute;couvrir les bases du framework:</span></p>\r\n<ul>\r\n<li><span style=\"color: #626262;\">Utilities</span>\r\n<ul>\r\n<li><span style=\"color: #626262;\">Basic Typography</span></li>\r\n<li><span style=\"color: #626262;\">Text Alignment &amp; Display</span></li>\r\n<li><span style=\"color: #626262;\">Floats &amp; Position</span></li>\r\n<li><span style=\"color: #626262;\">Colors &amp; Background</span></li>\r\n<li><span style=\"color: #626262;\">Spacing</span></li>\r\n<li><span style=\"color: #626262;\">Sizing</span></li>\r\n<li><span style=\"color: #626262;\">Breakpoints</span></li>\r\n</ul>\r\n</li>\r\n<li>Javascript Widgets&nbsp;\r\n<ul>\r\n<li>Carousel</li>\r\n<li>Collapse</li>\r\n<li>Tooltips</li>\r\n<li>Popovers</li>\r\n<li>Modals</li>\r\n<li>ScrollSpy</li>\r\n</ul>\r\n</li>\r\n<li>Grid &amp; Flexbox&nbsp;\r\n<ul>\r\n<li>Grid System</li>\r\n<li>Grid Alignment</li>\r\n<li>Flexbox</li>\r\n<li>Auto Margins &amp; Wrap</li>\r\n</ul>\r\n</li>\r\n<li>CSS components\r\n<ul>\r\n<li>Buttons</li>\r\n<li>Navbar</li>\r\n<li>List Groups &amp; Badges</li>\r\n<li>Forms</li>\r\n<li>Input Groups</li>\r\n<li>Alerts &amp; Progress</li>\r\n<li>Tables 7 Pagination</li>\r\n<li>Cards</li>\r\n<li>Media Objects</li>\r\n<li>Jumbotron</li>\r\n</ul>\r\n</li>\r\n</ul>', '<p>Cours de Brad Traversy pour apprendre Bootstrap 4</p>', 'udemy_icon.png', 'https://www.udemy.com/bootstrap-4-from-scratch-with-5-projects/', 'bootstrap-from-scratch-with-projects', 1),
(11, 'Formation Comprendre Webpack', '<div style=\"color: #626262;\">\r\n<p style=\"color: #626262;\">Formation de Grafikart sur Webpack</p>\r\n<p style=\"color: #626262;\">Vous allez apprendre le fonctionnement de Webpack:</p>\r\n<ul style=\"color: #626262;\">\r\n<li>D&eacute;couverte de Webpack</li>\r\n<li>Configuration</li>\r\n<li>Babel (es2015)</li>\r\n<li>Minification et Lazy Loading</li>\r\n<li>CSS &amp; SASS</li>\r\n<li>Extraire le CSS</li>\r\n<li>Mise en cache</li>\r\n<li>Url Loader</li>\r\n<li>ESLint</li>\r\n<li>Dev Server</li>\r\n<li>Plugin HTML</li>\r\n</ul>\r\n</div>', '<p>Formation de Grafikart sur Webpack</p>', 'grafikart-icon.png', 'https://www.grafikart.fr/formations/webpack', 'formation-comprendre-webpack', 1),
(12, 'Débuter avec Webpack', '<p>Tutoriel pour apprendre Webpack sur alsacreations.com</p>\r\n<p>Vous allez apprendre</p>\r\n<ul>\r\n<li>&agrave; installer et configurer Webpack.</li>\r\n<li>installer un serveur de d&eacute;veloppement</li>\r\n<li>Si vous &eacute;crivez du Javascript ES6, vous aller pouvoir convertir votre code en ES5 avec Webpack (en collaboration avec Babel).</li>\r\n<li>Minifier les fichiers JS et CSS</li>\r\n</ul>', '<p>Tutoriel pour apprendre Webpack sur alsacreations.com.</p>', 'aslacreations-icon.png', 'https://www.alsacreations.com/tuto/lire/1754-debuter-avec-webpack.html', 'debuter-avec-webpack', 1),
(13, 'WordPress Theme Development with Bootstrap', '<p>Cours de Brad Hussey (en Anglais) pour apprendre &agrave; d&eacute;velopper un th&egrave;me Wordpress avec Bootstrap</p>\r\n<p>Vous allez apprendre &agrave;:</p>\r\n<ul>\r\n<li>Convertir un site statique en th&egrave;me Wordpress\r\n<ul>\r\n<li>2 fichiers sont n&eacute;cessaires pour que WordPress reconnaisse un nouveau th&egrave;me : style.css&nbsp;et&nbsp;index.php</li>\r\n<li>S&eacute;parer l&rsquo;en-t&ecirc;te, le pied de page, barre lat&eacute;rale du reste</li>\r\n</ul>\r\n</li>\r\n<li>Rendre la navigation du th&egrave;me dynamique</li>\r\n<li>Le loop Wordpress</li>\r\n<li>Rajouter des widgets</li>\r\n<li>Cr&eacute;er une page 404</li>\r\n<li>Installer le plugin Contact Form 7 et ajouter un formulaire personalis&eacute;</li>\r\n<li><span style=\"color: #626262;\">&agrave; utiliser les Custom Post Types et Advanced Custom Fields (pour rajouter des champs sp&eacute;ciaux)</span></li>\r\n</ul>', '<p><span style=\"color: #626262;\">Cours de Brad Hussey (en Anglais) pour apprendre &agrave; d&eacute;velopper un th&egrave;me Wordpress avec Bootstrap.</span></p>', 'udemy_icon.png', 'https://www.udemy.com/bootstrap-to-wordpress/', 'wordpress-theme-development-with-bootstrap', 1),
(14, 'Adoptez une architecture MVC en PHP', '<p id=\"r-4670721\" data-claire-element-id=\"8461451\">Vous connaissez les bases de la programmation en PHP ? Vous avez peut-&ecirc;tre d&eacute;j&agrave;&nbsp;lu&nbsp;<a href=\"https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql\">Concevez votre site web PHP et MySQL</a>... et vous vous demandez comment aller plus loin ?</p>\r\n<p id=\"r-4670722\" data-claire-element-id=\"8460492\">Comment font les professionnels&nbsp;? Quelle structure de&nbsp;code adoptent-ils ?</p>\r\n<p id=\"r-4670724\" data-claire-element-id=\"8461452\">Ils utilisent des concepts de programmation plus avanc&eacute;s, comme&nbsp;MVC,&nbsp;la&nbsp;Programmation Orient&eacute;e Objet (POO) et bien d\'autres choses... Ce sont des techniques que nous allons d&eacute;couvrir pas &agrave; pas dans ce cours, sur la base d\'un projet concret que nous allons am&eacute;liorer progressivement.</p>', '<p id=\"r-4670724\" data-claire-element-id=\"8461452\">Vous connaissez les bases de la programmation en PHP ? Vous avez peut-&ecirc;tre d&eacute;j&agrave; lu Concevez votre site web PHP et MySQL....et vous vous demandez comment aller plus loin?</p>', 'openclassrooms-icon.png', 'https://openclassrooms.com/fr/courses/4670706-adoptez-une-architecture-mvc-en-php', 'adoptez-une-architecture-mvc-en-php', 0),
(20, 'Unsplash', '<p>Le site&nbsp;<a href=\"https://unsplash.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Unsplash.com</a>&nbsp;est une plateforme o&ugrave; chacun peut trouver une photo pour illustrer un projet, un article et m&ecirc;me &agrave; des fins commerciales.&nbsp;</p>\r\n<p>Le site contient plus d\'un millier d\'images, et ce chiffre est en constante augmentation. Pour ne pas s\'y perdre, Unsplash propose un outil de recherche en utilisant des tags qui permettent ainsi de pr&eacute;s&eacute;lectionner une certaine cat&eacute;gorie de photos.</p>', '<p>Le site&nbsp;<a href=\"https://unsplash.com/\" target=\"_blank\" rel=\"noopener noreferrer\">Unsplash.com</a>&nbsp;est une plateforme o&ugrave; chacun peut trouver une photo pour illustrer un projet, un article et m&ecirc;me &agrave; des fins commerciales.&nbsp;</p>', 'unsplash.png', 'https://unsplash.com/', 'unsplash', 1),
(21, 'PlaceIt', '<p>Placeit vous permet de r&eacute;aliser des visuels vraiment cr&eacute;dibles&nbsp;en tr&egrave;s peu de temps:</p>\r\n<ul>\r\n<li>d&rsquo;int&eacute;grer des&nbsp;captures d&rsquo;&eacute;cran&nbsp;sur une&nbsp;multitude d&rsquo;appareils num&eacute;riques&nbsp;: mobiles, tablettes, ordinateurs, &eacute;crans publicitaires, voire m&ecirc;me montre connect&eacute;e</li>\r\n<li>d&rsquo;int&eacute;grer une capture d&rsquo;&eacute;cran, sur une&nbsp;trentaine de supports non num&eacute;riques, comme une carte de visite, un livre ou encore sur une &eacute;tiquette produit !</li>\r\n<li>de cr&eacute;er des&nbsp;incrustations interactives&nbsp;de sites web et d&rsquo;applications. Tous les &eacute;l&eacute;ments du site sont alors cliquables et la navigation est fonctionnelle.</li>\r\n<li>de cr&eacute;er&nbsp;des vid&eacute;os de d&eacute;mo et des tutos.&nbsp;Id&eacute;al pour montrer comment fonctionne une application ou pr&eacute;senter un site.</li>\r\n</ul>', '<p>Placeit vous permet de r&eacute;aliser des visuels vraiment cr&eacute;dibles <span style=\"color: #626262;\">en tr&egrave;s peu de temps</span></p>', 'placeit.png', 'https://placeit.net/', 'placeit', 1),
(22, 'Font Awesome', '<p><span style=\"color: #626262;\">Font Awesome est une \"police d\'ic&ocirc;nes\".</span></p>\r\n<p>Il permet d\'ajouter rapidement et simplement des ic&ocirc;nes sur votre&nbsp; propre site internet.</p>\r\n<p>Voici quelque ic&ocirc;nes:</p>\r\n<p><img class=\"img-fluid\" src=\"//localhost:3000/FinalProjectphp/uploads/fontawesomeicons.png\" alt=\"font awesome icons\" width=\"700\" height=\"384\" /></p>', '<p>Font Awesome est une \"police d\'ic&ocirc;nes\"</p>', 'fontawesome-icon.png', 'https://fontawesome.com/', 'font-awesome', 1),
(23, 'Lorem Picsum', '<p>Lorem Picsum est un g&eacute;n&eacute;rateur d\'images.</p>\r\n<p>Il suffit d&rsquo;ajouter la taille de l&rsquo;image souhait&eacute;e (largeur et hauteur) pour obtenir une image al&eacute;atoire:</p>\r\n<p><span style=\"background-color: #ecf0f1;\"><a style=\"background-color: #ecf0f1;\" href=\"https://picsum.photos/200/300\" target=\"_blank\" rel=\"noopener\">https://picsum.photos/200/300</a></span></p>\r\n<p>Pour obtenir une image carr&eacute;e, ajoutez simplement la taille.</p>\r\n<p><span style=\"background-color: #ecf0f1;\"><a style=\"background-color: #ecf0f1;\" href=\"https://picsum.photos/200\" target=\"_blank\" rel=\"noopener\">https://picsum.photos/200</a></span></p>\r\n<p>Obtenez une image sp&eacute;cifique en ajoutant / id / {image} au d&eacute;but de l\'URL.</p>\r\n<p><span style=\"background-color: #ecf0f1;\"><a style=\"background-color: #ecf0f1;\" href=\"https://picsum.photos/id/237/200/300\" target=\"_blank\" rel=\"noopener\">https://picsum.photos/id/237/200/300</a></span><br /><br />Vous pouvez trouver une liste de toutes les images<span style=\"color: #b83b3b;\"> <a style=\"color: #b83b3b;\" href=\"https://picsum.photos/images\" target=\"_blank\" rel=\"noopener\">ici</a>.</span></p>', '<p>Lorem Picsum est un g&eacute;n&eacute;rateur d\'images</p>', 'lorempicsum-icon.png', 'https://picsum.photos/', 'lorem-picsum', 1),
(24, 'Ionicons', '<p><span style=\"color: #626262;\">Ic&ocirc;nes compl&egrave;tement open source et r&eacute;alis&eacute;es&nbsp; par l\'&eacute;quipe Ionic Framework.</span></p>', '<p id=\"tw-target-text\" dir=\"ltr\" data-placeholder=\"Translation\"><span lang=\"fr\" tabindex=\"0\">Ic&ocirc;nes compl&egrave;tement open source et r&eacute;alis&eacute;es&nbsp; par l\'&eacute;quipe Ionic Framework.</span></p>', 'ionicons-icon.png', 'https://ionicons.com/', 'ionicons', 1),
(25, 'Flaticon', '<p><span style=\"color: #626262;\">Flaticon, une base de donn&eacute;es d\'icones &eacute;norme !</span></p>\r\n<p>Flaticon est l\'une des bases de donn&eacute;es les plus riches en mati&egrave;re d\'ic&ocirc;nes. Cette plateforme&nbsp; regroupe aujourd\'hui plus de 75 000 ic&ocirc;nes class&eacute;es en 772 th&egrave;mes. La majorit&eacute; des ic&ocirc;nes sont disponibles sous une licence creative commons, ce qui implique de citer l\'auteur pour les utiliser. La recherche par mot cl&eacute; vous permettra d\'acc&eacute;der aux ic&ocirc;nes les plus populaires li&eacute;es &agrave; votre requ&ecirc;te. S&eacute;lectionnez l\'image en un clic puis choisissez le format sous lequel vous souhaitez l\'obtenir (PNG, EPS, SVG ou PSD).</p>', '<p>Flaticon, une base de donn&eacute;es d\'icones &eacute;norme !</p>', 'flaticon-icon.ico', 'https://www.flaticon.com/', 'flaticon', 1),
(26, 'Canva', '<p>Canva est un site Internet qui permet de cr&eacute;er et de personnaliser les designs pour tout type de projet, de fa&ccedil;on simple et intuitive. Il s&rsquo;av&egrave;re tr&egrave;s utile surtout pour celles et ceux qui n&rsquo;ont pas de comp&eacute;tence graphiques particuli&egrave;res. La caract&eacute;ristique principale de Canva consiste en ceci qu&rsquo;il permet d&rsquo;exploiter gracieusement des mod&egrave;les d&eacute;j&agrave; pr&ecirc;ts de bonne qualit&eacute;, et &agrave; la fois de les modifier et de les conformer &agrave; son propre go&ucirc;t ou &agrave; ses propres exigences. Ce qui en fait un outil qui garantit un r&eacute;sultat qualitativement &eacute;lev&eacute;, flexible et adapt&eacute; &agrave; toutes les circonstances.</p>', '<p data-fontsize=\"26\" data-lineheight=\"40\" data-inline-fontsize=\"true\" data-inline-lineheight=\"true\">CANVA, un outil gratuit pour cr&eacute;er des visuels comme un pro.</p>', 'canva-icon.ico', 'https://www.canva.com/', 'canva', 1),
(27, 'Clippy', '<p><span style=\"color: #626262;\">Pour commencer &agrave; s&rsquo;amuser avec&nbsp;</span><span style=\"color: #626262;\">clip-path</span><span style=\"color: #626262;\">, le plus simple est d&rsquo;utiliser <span style=\"color: #b83b3b;\">l&rsquo;</span></span><span style=\"color: #b83b3b;\"><a style=\"color: #b83b3b;\" href=\"http://bennettfeely.com/clippy/\" target=\"_blank\" rel=\"noopener\">excellent outil &ldquo;Clippy&rdquo; de Bennett Feely</a></span><span style=\"color: #626262;\">.</span></p>\r\n<p><span style=\"color: #626262;\"><img class=\"img-fluid\" src=\"//localhost:3000/FinalProjectphp/uploads/clippy.jpg\" alt=\"clippy\" width=\"600\" height=\"442\" /></span></p>', '<p>La propri&eacute;t&eacute; CSS&nbsp;clip-path&nbsp;permet de cacher des portions d&rsquo;un &eacute;l&eacute;ment via le masquage (masking) et le d&eacute;coupage, ou d&eacute;tourage (clipping).</p>', 'clippy-icon.png', 'https://bennettfeely.com/clippy/', 'clippy', 1),
(28, 'Animate.css', '<p>Animate.css est une librairie CSS. Elle est facile &agrave; mettre en oeuvre puisqu&rsquo;il suffit d&rsquo;ajouter les classes CSS aux &eacute;l&eacute;ments HTML.</p>\r\n<p>La page d\'accueil propose de nombreuses d&eacute;mos afin que vous puissiez tester les styles d\'animation et voir ce que vous pensez. De plus, il existe une documentation de qualit&eacute; sur <span style=\"color: #b83b3b;\"><a style=\"color: #b83b3b;\" href=\"https://github.com/daneden/animate.css\" target=\"_blank\" rel=\"noopener\">GitHub</a></span>, notamment une liste de classes et des exemples de fragments de code.</p>\r\n<p><img class=\"img-fluid\" src=\"/projet5/uploads/animate.jpg\" alt=\"animate.css\" width=\"700\" height=\"614\" /></p>', '<p><span style=\"color: #626262;\">Animate.css est une librairie CSS. Elle est facile &agrave; mettre en oeuvre puisqu&rsquo;il suffit d&rsquo;ajouter les classes CSS aux &eacute;l&eacute;ments HTML.</span></p>', 'animate.css-icon.png', 'https://daneden.github.io/animate.css/', 'animate-css', 0),
(29, 'Emmet', '<p><span style=\"color: #626262;\">Emmet est un ensemble d\'abr&eacute;viations qui s\'&eacute;tendent en html/xml/css, comme des snippets de textes.&nbsp;</span></p>\r\n<p><span style=\"color: #626262;\">Cliquez <span style=\"color: #b83b3b;\"><a style=\"color: #b83b3b;\" href=\"https://www.grafikart.fr/tutoriels/emmet-376\" target=\"_blank\" rel=\"noopener\">ici</a></span> pour voir un tutoriel de Grafikart pour apprendre Emmet.</span></p>\r\n<p><span style=\"color: #626262;\">Et voici un <span style=\"color: #b83b3b;\"><a style=\"color: #b83b3b;\" href=\"https://docs.emmet.io/cheat-sheet/\" target=\"_blank\" rel=\"noopener\">aide-m&eacute;moire</a></span> avec les raccourcis d\'Emmet.</span></p>', '<p>Emmet est un ensemble d\'abr&eacute;viations qui s\'&eacute;tendent en html/xml/css, comme des snippets de textes.&nbsp;</p>', 'emmet-icon.ico', 'https://emmet.io/', 'emmet', 1);

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
(16, 7, 9),
(17, 7, 10),
(18, 9, 9),
(19, 13, 6),
(20, 13, 8),
(21, 1, 1),
(29, 14, 9),
(30, 14, 4),
(31, 13, 4),
(36, 20, 15),
(37, 21, 15),
(38, 22, 16),
(39, 23, 15),
(40, 24, 16),
(41, 25, 16),
(42, 26, 15),
(43, 27, 2),
(44, 28, 2),
(45, 29, 17);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_type` varchar(255) NOT NULL,
  `category_name_slug` varchar(255) NOT NULL,
  `category_type_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_type`, `category_name_slug`, `category_type_slug`) VALUES
(1, 'HTML', 'Front-End', 'html', 'front-end'),
(2, 'CSS', 'Front-End', 'css', 'front-end'),
(3, 'Javascript', 'Front-End', 'javascript', 'front-end'),
(4, 'PHP', 'Back-End', 'php', 'back-end'),
(5, 'jQuery', 'Front-End', 'jquery', 'front-end'),
(6, 'Wordpress', 'Back-End', 'wordpress', 'back-end'),
(7, 'Flexbox', 'Front-End', 'flexbox', 'front-end'),
(8, 'Bootstrap', 'Front-End', 'bootstrap', 'front-end'),
(9, 'MySQL', 'Back-End', 'mysql', 'back-end'),
(10, 'Architecture MVC', 'Back-End', 'architecture-mvc', 'back-end'),
(11, 'Webpack', 'Front-End', 'webpack', 'front-end'),
(12, 'Gulp', 'Front-End', 'gulp', 'front-end'),
(14, 'AJAX', 'Front-End', 'ajax', 'front-end'),
(15, 'Images et Vidéos', 'Front-End', 'images-et-videos', 'front-end'),
(16, 'Bibliothèque d\'icônes', 'Front-End', 'bibliotheque-d-icones', 'front-end'),
(17, 'Outils de développement', 'Front-End', 'outils-de-developpement', 'front-end');

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
  `project_comments` text NOT NULL,
  `project_slug` text NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_description`, `project_sm_image`, `project_lg_image`, `project_url`, `project_comments`, `project_slug`, `is_published`) VALUES
(1, 'Musician Website', '<p>Premi&egrave;re activit&eacute; Openclassrooms - Int&eacute;grer une maquette en HTML et CSS</p>\r\n<h4>Instructions</h4>\r\n<p>Dans cet exercice, vous vous entra&icirc;nerez &agrave; gerer un projet avec un client dans sa totalit&eacute;, c\'est-&agrave;-dire de la r&eacute;daction du cahier des charges &agrave; la livraison finale.</p>\r\n<p>Commencez par identifier votre client. Qui est-il ? O&ugrave; est-il ? Que cherche-il ?&nbsp;Ecrivez&nbsp;dans un document quel est son projet et quelles sont ses attentes.</p>\r\n<p>Ensuite, trouvez une maquette qui correspond &agrave; ces besoins.</p>', 'projet-musician-sm.jpg', 'projet-musician-lg.jpg', 'https://jmassads.github.io/Activite-HTML-CSS/', '', 'musician-website', 1),
(2, 'WebAgency', '<p style=\"color: #626262;\">Refonte du site de l\'agence WebAgency.</p>\r\n<p style=\"color: #626262;\">Voici les diff&eacute;rentes sections donn&eacute;es par le graphiste:</p>\r\n<p style=\"color: #626262;\"><img class=\"img-fluid\" src=\"/projet5/uploads/maquette_header.png\" alt=\"maquette header\" width=\"500\" height=\"254\" /></p>\r\n<p style=\"color: #626262;\"><img class=\"img-fluid\" src=\"/projet5/uploads/maquette_services.png\" alt=\"section services de la maquette\" width=\"500\" height=\"210\" /></p>\r\n<p style=\"color: #626262;\"><img class=\"img-fluid\" src=\"/projet5/uploads/maquette_projets.png\" alt=\"section projets de la maquette\" width=\"500\" height=\"214\" /></p>\r\n<p style=\"color: #626262;\"><img class=\"img-fluid\" src=\"/projet5/uploads/maquette_carte.png\" alt=\"section carte de la maquette\" width=\"500\" height=\"218\" /></p>', 'projet1-sm.jpg', 'projet1-lg.jpg', 'https://juliaassad.fr/projet1/', '<p><strong>Excellent projet!</strong></p>\r\n<ul>\r\n<li>D\'un point de vue oral, la pr&eacute;sentation est tr&egrave;s fluide, Julia ma&icirc;trise bien son sujet.</li>\r\n<li>D\'un point de vue technique l\'int&eacute;gralit&eacute; des fonctionnalit&eacute;s attendues sont bien respect&eacute;s . Le code est propre et bien structur&eacute;.</li>\r\n</ul>', 'webagency', 1),
(3, 'Strasbourg Office De Tourisme', '<p><strong>Cr&eacute;ation d\'un site pour l\'Office de Tourisme de Strasbourg.</strong></p>\r\n<p>D&eacute;veloppement d\'un th&egrave;me Wordpress sur-mesure.</p>\r\n<ul>\r\n<li>Cr&eacute;ation des fichiers de mon th&egrave;me</li>\r\n<li>Cr&eacute;ation de custom post types et utilisation du plugin Advanced Custom Fields</li>\r\n</ul>', 'projet2-sm.jpg', 'projet2-lg.jpg', 'https://juliaassad.fr/projet2/', '<p><strong>Travail de fond :</strong></p>\r\n<ul>\r\n<li>Animation CSS3 sont discr&egrave;tes et bien situ&eacute;es</li>\r\n<li>Le site est essentiellement graphique m&ecirc;me s\'il ne respecte&nbsp;pas la charte graphique de Strasbourg</li>\r\n<li>C\'est pertinent de mettre en sidebar les articles qui sont du m&ecirc;me th&egrave;me que l\'article visit&eacute;. Cela incite &agrave; voir le reste des actualit&eacute;s</li>\r\n<li>Bon projet, un site complet qui respecte bien la demande du client</li>\r\n<li>L\'&eacute;l&egrave;ve a rajout&eacute; une section \"Les incontournables\", ce qui est tr&egrave;s utile pour les touristes</li>\r\n</ul>\r\n<p><strong>Oral</strong> :&nbsp;Une pr&eacute;sentation claire et fluide, avec une attitude pro</p>\r\n<p><strong>Axe d\'am&eacute;lioration</strong> :</p>\r\n<ul>\r\n<li>Mentions l&eacute;gales et alerte cookies obligatoire depuis 2018</li>\r\n<li>Il&nbsp; y a beaucoup de contenus ce qui&nbsp;nous oblige &agrave;&nbsp;&nbsp;beaucoup scroller pour arriver au footer</li>\r\n<li>Attention &agrave; ne pas surcharger les pages de contenus pour laisser la page respirer, il aurait &eacute;t&eacute; pertinent de cr&eacute;er un sous-menu par exemple</li>\r\n</ul>\r\n<p>Bonne continuation !</p>', 'strasbourg-office-de-tourisme', 1),
(4, 'Vélo\'v', '<p><strong>Concevoir une carte interactive de location de v&eacute;los</strong></p>\r\n<p>D&eacute;veloppement d\'une page de type \"Single page Application\" simulant la r&eacute;servation de v&eacute;los &agrave; Lyon</p>\r\n<ul>\r\n<li>Cr&eacute;ation d\'un Slider en javascript expliquant le fonctionnement de l\'application.</li>\r\n<li>Carte des stations v&eacute;lo&rsquo;v&nbsp;\r\n<ol>\r\n<li>Ajout d\'un marqueur &agrave; l\'emplacement de chaque station (<span style=\"color: #626262;\">API GoogleMaps)</span></li>\r\n<li>Afficher un panneau avec les d&eacute;tails de la station lors d&rsquo;un clique sur un marqueur (API JCDecaux)</li>\r\n</ol>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li>R&eacute;servation d&rsquo;un v&eacute;lo\r\n<ol>\r\n<li>Canvas (API Canvas)\r\n<ul>\r\n<li>Pour signer dans un champ libre</li>\r\n</ul>\r\n</li>\r\n<li>&nbsp;Formulaire avec Nom et Pr&eacute;nom<br />\r\n<ul>\r\n<li>Sauvegard&eacute;s dans le local storage de l\'API WebStorage pour pr&eacute; remplir le formulaire de r&eacute;servation lors d\'un prochain usage</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li>Timer (d&eacute;compte dynamique)\r\n<ol>\r\n<li>Pour indiquer le temps restant avant expiration de la r&eacute;servation.</li>\r\n<li>20 minutes (Une r&eacute;servation expire au bout de 20 minutes)\r\n<ul>\r\n<li>Sauvegard&eacute; dans le session storage de l\'API WebStorage pour que la r&eacute;servation soit toujours pr&eacute;sente lors du rechargement de la page</li>\r\n</ul>\r\n</li>\r\n</ol>\r\n</li>\r\n</ul>\r\n<p>Ce project a &eacute;t&eacute; enti&egrave;rement d&eacute;velopp&eacute; en Javascript Orient&eacute; Objet</p>', 'projet3-sm.jpg', 'projet3-lg.jpg', 'https://juliaassad.fr/projet3/', '<p>Le&nbsp;projet&nbsp;est&nbsp;valid&eacute;&nbsp;avec succ&egrave;s, f&eacute;licitations !<br /><br /><strong>Points positifs</strong></p>\r\n<ul>\r\n<li>Les livrables sont pr&eacute;sents et fonctionnels</li>\r\n<li>La pr&eacute;sentation est r&eacute;alis&eacute;e de mani&egrave;re professionnelle.</li>\r\n<li><span style=\"color: #626262;\">Le code est bien indent&eacute; et clair.</span></li>\r\n<li><span style=\"color: #626262;\">Le&nbsp; code est en OO et utilise m&ecirc;me deux versions du JS</span></li>\r\n<li><span style=\"color: #626262;\">Une excellente structuration du code avec l&rsquo;utilisation de Webpack</span></li>\r\n<li><span style=\"color: #626262;\">Le site passe toutes les validations.</span></li>\r\n<li><span style=\"color: #626262;\">L&rsquo;&eacute;tudiante a bien pris connaissance du r&ocirc;le de frontend developer&nbsp;</span></li>\r\n<li><span style=\"color: #626262;\">Les r&eacute;ponses aux questions &eacute;taient pertinentes.</span></li>\r\n</ul>\r\n<p><br /><strong>Axes d\'am&eacute;lioration</strong></p>\r\n<ul>\r\n<li>Eviter de recr&eacute;er la roue au niveau des appel HTTP</li>\r\n</ul>\r\n<p><strong>Les comp&eacute;tences suivantes ont bien &eacute;t&eacute; valid&eacute;es</strong></p>\r\n<ul>\r\n<li>Faire des requ&ecirc;tes HTTP en langage JavaScript</li>\r\n<li>Cr&eacute;er des objets simples en JavaScript, contenant des m&eacute;thodes et des propri&eacute;t&eacute;s</li>\r\n<li>R&eacute;cup&eacute;rer des donn&eacute;es de formulaires en utilisant le langage JavaScript</li>\r\n<li>Ecrire un code source lisible</li>\r\n</ul>', 'velo-v', 1),
(5, 'Jean Forteroche | Écrivain', '<p>Cr&eacute;ation d\'un blog pour l\'&eacute;crivain Jean Forteroche.</p>\r\n<p>D&eacute;veloppement d\'une application de blog en PHP <strong>orient&eacute; objet</strong> avec une base de donn&eacute;es MySQL:</p>\r\n<ul>\r\n<li><span style=\"color: #626262;\">D&eacute;veloppement de l\'interface Front-End&nbsp;</span></li>\r\n<li><span style=\"color: #626262;\">D&eacute;veloppement de l\'Interface Back-End dans laquelle on retrouve tous les &eacute;l&eacute;ments d\'un CRUD (Create, Read, Update, Delete) pour que Mr. Forteroche puisse ajouter les chapitres de son nouveau livre, les lire, les modifier, et les supprimer</span></li>\r\n</ul>\r\n<p>Le code est construit sur une architecture MVC</p>', 'projet4-sm.jpg', 'projet4-lg.jpg', 'https://juliaassad.fr/projet4/', '<p><strong>Travail de fond :</strong></p>\r\n<ul>\r\n<li>Travail s&eacute;rieux qui respecte bien toutes les consignes</li>\r\n<li>L\'&eacute;l&egrave;ve est soucieuse des d&eacute;tails, chaque fonctionnalit&eacute; est pouss&eacute; jusqu\'au bout</li>\r\n<li>Des messages d\'erreurs sont bien pr&eacute;sents lorsque les champs sont vides. L\'&eacute;l&egrave;ve a bien travaill&eacute; les r&egrave;gles et la s&eacute;curit&eacute; des champs</li>\r\n<li>L\'&eacute;l&egrave;ve est &agrave; l\'aise avec son projet et la techniques, quelques fonctionnalit&eacute;s en plus ont &eacute;t&eacute; d&eacute;velopp&eacute;es</li>\r\n<li>Le code est propre, bien comment&eacute; et bien structur&eacute;. Utilisation de la structure MVC, les requ&ecirc;tes sont pr&eacute;par&eacute;es</li>\r\n</ul>\r\n<p><strong>Oral</strong> :&nbsp;l\'&eacute;l&egrave;ve est &agrave; l\'aise &agrave; l\'oral, bonne posture</p>\r\n<p>&nbsp;</p>', 'jean-forteroche-ecrivain', 1),
(6, 'Julia Assad | Développeuse Web', '<p>D&eacute;veloppement de mon site en utilisant les 5 langages appris : HTML, CSS, JS, PHP et SQL.&nbsp;</p>\r\n<ul>\r\n<li><span style=\"color: #626262;\">Front-end</span>\r\n<ul>\r\n<li>Sass</li>\r\n<li>Bootstrap</li>\r\n<li>Gulp</li>\r\n<li>Webpack</li>\r\n<li>Javascript</li>\r\n<li>jQuery</li>\r\n<li>Ajax</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<ul>\r\n<li>Back-End\r\n<ul>\r\n<li>PHP orient&eacute; objet</li>\r\n<li>Architecture MVC</li>\r\n<li>CRUD</li>\r\n</ul>\r\n</li>\r\n</ul>', 'monsite_sm.jpg', 'monsite_lg.jpg', 'http://juliaassad.fr/projet5', '', 'julia-assad-developpeuse-web', 1);

-- --------------------------------------------------------

--
-- Structure de la table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `project_categories`
--

INSERT INTO `project_categories` (`id`, `project_id`, `category_id`) VALUES
(4, 2, 1),
(5, 2, 2),
(6, 2, 5),
(8, 3, 1),
(9, 3, 2),
(10, 3, 4),
(11, 3, 6),
(13, 4, 1),
(14, 4, 2),
(15, 4, 3),
(16, 4, 7),
(17, 5, 1),
(18, 5, 2),
(19, 5, 5),
(20, 5, 8),
(21, 5, 4),
(22, 5, 10),
(23, 6, 1),
(24, 6, 2),
(25, 6, 3),
(26, 6, 5),
(27, 6, 8),
(28, 6, 11),
(30, 6, 9),
(31, 6, 4),
(32, 6, 10),
(33, 6, 12),
(34, 1, 1),
(35, 1, 2),
(36, 1, 5),
(37, 2, 7),
(41, 6, 14);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'Julia', 'juliasajah85@gmail.com', '$2y$10$K/PMLSQKModnr4neESsJD.Tv.nGvOwuPxMixIBoXQXMQKpA50VS5i');

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
-- Index pour la table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_id` (`project_id`),
  ADD KEY `project_id_2` (`project_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `article_categories`
--
ALTER TABLE `article_categories`
  ADD CONSTRAINT `article_categories_ibfk_1` FOREIGN KEY (`article_id`) REFERENCES `articles` (`article_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `article_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `project_categories`
--
ALTER TABLE `project_categories`
  ADD CONSTRAINT `project_categories_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `project_categories_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
