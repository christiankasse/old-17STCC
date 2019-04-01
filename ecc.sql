-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Client :  localhost:3306
-- Généré le :  Lun 01 Avril 2019 à 21:09
-- Version du serveur :  5.7.25-0ubuntu0.18.04.2
-- Version de PHP :  7.2.16-1+ubuntu18.04.1+deb.sury.org+1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ecc`
--

-- --------------------------------------------------------

--
-- Structure de la table `about_fonctionnement`
--

CREATE TABLE `about_fonctionnement` (
  `id` int(11) NOT NULL,
  `structure` longtext NOT NULL,
  `departement` longtext NOT NULL,
  `organisme` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `slug` varchar(255) NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `about_fonctionnement`
--

INSERT INTO `about_fonctionnement` (`id`, `structure`, `departement`, `organisme`, `created_at`, `slug`, `post`) VALUES
(1, '<p>&nbsp;</p>\r\n\r\n<p>La structure de l&#39;Eglise du Christ au Congo se subdivise en deux h&eacute;miseph&egrave;res dont le premier comprend deux niveaux, &agrave; savoir le niveau national et le niveau provincial.</p>\r\n\r\n<p><strong>Le niveau national comprend:</strong></p>\r\n\r\n<ul>\r\n	<li>Le Synode National;</li>\r\n	<li>Le Comit&eacute; Ex&eacute;cutif National</li>\r\n	<li>La Pr&eacute;sidence Nationale</li>\r\n</ul>\r\n\r\n<p>Tandis que le <strong>niveau provincial</strong>, qui est une r&eacute;plique du niveau national, a en soi sein:</p>\r\n\r\n<ul>\r\n	<li>Le Synode provincial</li>\r\n	<li>Le Comit&eacute; Executif Provincial</li>\r\n	<li>La Pr&eacute;sidence Provinciale</li>\r\n</ul>\r\n\r\n<p>Le second h&eacute;misph&egrave;re est celui qui r&eacute;unit les 95 communaut&eacute;s membres de l&#39;Eglise du Christ au Congo. Il compte &eacute;galement deux niveaux d&#39;instance : le niveau communautaire et le niveau paroissial.</p>\r\n\r\n<p><strong>Le nievau Communautaire comprend : </strong></p>\r\n\r\n<ul>\r\n	<li>Le Synode communautaire&nbsp; au Assembl&eacute;e G&eacute;n&eacute;rale Communautaire;</li>\r\n	<li>Le Comit&eacute; Ex&eacute;cutif Communautaire;</li>\r\n	<li>La Pr&eacute;sidence Communautaire.</li>\r\n</ul>\r\n\r\n<p><strong>Le niveau paroissial r&eacute;unit : </strong></p>\r\n\r\n<ul>\r\n	<li>L&#39;Assembl&eacute;e des fid&egrave;les;</li>\r\n	<li>Le Conseil Paroissial (ou Consistoire);</li>\r\n	<li>Le Pasteur Titulaire</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>', '<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>La Direction nationale de l&#39;Evang&eacute;lisation</li>\r\n	<li>La Direction nationale des Missions</li>\r\n	<li>La Direction nationale des Aum&ocirc;neries des H&ocirc;pitaux et Prisons</li>\r\n	<li>La Direction nationale de la Vie de l&#39;Eglise</li>\r\n	<li>La Direction nationale de Genre, Famille et Enfant</li>\r\n	<li>La Direction nationale de Projets des Femmes</li>\r\n	<li>La Direction nationale de la Jeunesse</li>\r\n	<li>La Direction nationale des Ecoles de Dimanche</li>\r\n	<li>La Direction nationale des Chorales et Musiques</li>\r\n	<li>La Direction / Coordination du Centre de Formation en Management et D&eacute;veloppement Organisationnel (CEFORMAD)</li>\r\n	<li>La Coordination Nationale des Ecoles Conventionn&eacute;es Protestantes</li>\r\n	<li>Le Bureau de l&#39;Enseignement Sup&eacute;rieur et Universitaire Protestant (BESUP)</li>\r\n	<li>La Direction Nationale des Oeuvres M&eacute;dicales (DOM)</li>\r\n	<li>La Direction Nationale de Projets de Sant&eacute;</li>\r\n	<li>La Direction Nationale des Institutions d&#39;Enseignement M&eacute;dical</li>\r\n	<li>La Direction Nationale des Pharmacies</li>\r\n	<li>Le S&eacute;cretariat Ex&eacute;cutif &agrave; la Commission Justice, Paix, Sauvegarde de la Cr&eacute;ation&nbsp; (CJPSC)</li>\r\n	<li>La Direction Nationale des Oeuvres de D&eacute;veloppement (DOD)</li>\r\n	<li>La Direction Nationale de Congo Protestante Relief Agency (CPRA) Traduit en Francais comme <em>Agence Protestante de Secours au Congo</em></li>\r\n	<li>La Direction de Bureau d&#39;Architecture, Technologies appropri&eacute;es et des d&#39;Infrastructures Rurales (BATIR)</li>\r\n	<li>La Direction du Minist&egrave;re de l&#39;ECC pour les R&eacute;fugi&eacute;s et les Urgences (MERU)</li>\r\n</ol>', '<p>&nbsp;</p>\r\n\r\n<ol>\r\n	<li>Le Centre d&#39;Edition et de Diffusion / CEDI</li>\r\n	<li>L&#39;Alliance Biblique du Congo</li>\r\n	<li>Le Centre d&#39;Accueil Protestant / CAP</li>\r\n	<li>Le Minist&egrave;re du Campus pour Christ</li>\r\n	<li>La Ligue pour la Lecture de la Bible / LLB</li>\r\n	<li>Le Groupe Biblique Universitaire GBU</li>\r\n	<li>Le Groupe Biblique des H&ocirc;pitaux / GBH</li>\r\n	<li>L&#39;UPC Universit&eacute; Protestante du Congo</li>\r\n	<li>Tuberculose Leprosy Mission / TLM</li>\r\n	<li>Mission Aviation Fellowship / MAF</li>\r\n	<li>Mennonite Comit&eacute; Congo / MCC</li>\r\n	<li>Le Centre M&eacute;dical Evang&eacute;lique de Nyakunde / CME</li>\r\n</ol>', '2019-01-28 23:47:06', '5c4f866aae6ab', 1);

-- --------------------------------------------------------

--
-- Structure de la table `about_hierachie`
--

CREATE TABLE `about_hierachie` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `fonction` varchar(255) NOT NULL,
  `profile` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `slug` varchar(255) NOT NULL,
  `post` tinyint(1) DEFAULT NULL,
  `mandat` varchar(100) DEFAULT NULL,
  `provenance` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `about_hierachie`
--

INSERT INTO `about_hierachie` (`id`, `nom`, `fonction`, `profile`, `created_at`, `slug`, `post`, `mandat`, `provenance`) VALUES
(12, 'Rév. Dr. BOKUNDOWA-bo-LIKABE', 'PRESIDENT NATIONAL', '', '2018-11-23 07:59:42', '5bf7a55e7c445', 1, 'MN', 'Présidence National'),
(13, 'Mgr. Gabriel Unda Yemba', 'Moderateur du Synode National', '', '2018-11-23 08:00:36', '5bf7a594b6526', 1, 'MN', 'Présidence National'),
(14, 'Rde. Leonie MPAYI', 'Vice Moderactrice du synode national', '', '2018-11-23 08:01:28', '5bf7a5c85a12e', 1, 'MN', 'Présidence National'),
(15, 'Mgr. Isidore NYAMUKE', '1er Vice Président National', '', '2018-11-23 08:02:37', '5bf7a60dcc1c9', 1, 'MN', 'Présidence National'),
(16, 'Mgr. MILENGE Mwenelwata', '2e Vice Président national', '', '2018-11-23 08:04:03', '5bf7a663cec28', 1, 'MN', 'Présidence National'),
(17, 'Rév. Simon LUBIKA', 'PRESIDENT NATIONAL', '', '2018-11-23 08:05:07', '5bf7a6a36ba4b', 1, 'MP', 'ECC / Kongo Central'),
(18, 'Mgr. Odon MUKASHIYENU', 'PRESIDENT NATIONAL', '', '2018-11-23 08:06:04', '5bf7a6dcc5a29', 1, 'MP', 'ECC / Bandundu'),
(19, 'Mgr. Samuel LOTIKA', 'PRESIDENT NATIONAL', '', '2018-11-23 08:07:07', '5bf7a71bc94c4', 1, 'MP', 'ECC / Province Oriental'),
(20, 'Evêque MILEGHA Mbala', 'PRESIDENT NATIONAL', '', '2018-11-23 08:07:47', '5bf7a7439e41f', 1, 'MP', 'ECC / Nord Kivu'),
(21, 'Mgr. Simon TSHIEPELA Kuabilayi', 'PRESIDENT NATIONAL', '', '2018-11-23 08:08:37', '5bf7a775bb8c0', 1, 'MP', 'ECC / Kasai Occidental'),
(22, 'Mgr. MBAYA Tshiakani', 'PRESIDENT NATIONAL', '', '2018-11-23 08:13:30', '5bf7a89a4be75', 1, 'MP', 'ECC / Kasi Oriental'),
(23, 'Mgr. DUALE Théophile', 'PRESIDENT NATIONAL', '', '2018-11-23 08:14:10', '5bf7a8c24dfba', 1, 'MP', 'ECC / Equateur'),
(24, 'Mgr. TSHISUNGU Mwambi', 'President du synode urbain', '', '2018-11-23 08:15:09', '5bf7a8fd10bfd', 1, 'MP', 'ECC / Kinshasa'),
(25, 'Mgr. BITINGO Lusambia', 'PRESIDENT NATIONAL', '', '2018-11-23 08:15:48', '5bf7a9241e7e6', 1, 'MP', 'ECC / Maniema'),
(26, 'Mgr. KUYENDONDO Jean Luc', 'PRESIDENT NATIONAL', '', '2018-11-23 08:16:20', '5bf7a944335d0', 1, 'MP', 'ECC / Sud Kivu');

-- --------------------------------------------------------

--
-- Structure de la table `about_presentation`
--

CREATE TABLE `about_presentation` (
  `id` int(11) NOT NULL,
  `historique` longtext NOT NULL,
  `status` longtext NOT NULL,
  `mission` longtext NOT NULL,
  `symbole` longtext NOT NULL,
  `vision` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `slug` varchar(255) NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `about_presentation`
--

INSERT INTO `about_presentation` (`id`, `historique`, `status`, `mission`, `symbole`, `vision`, `created_at`, `slug`, `post`) VALUES
(1, '<p style=\"text-align:center\"><span style=\"font-size:16px\"><strong>NOTICE HISTORIQUE DE L&#39;EGLISE DU CHRIST AU CONGO</strong></span></p>\r\n\r\n<p><strong><span style=\"font-size:16px\">1. Le D&eacute;but.</span></strong></p>\r\n\r\n<p><br />\r\nC&#39;est au cours de la 48&egrave; Session de l&#39;Assembl&eacute;e G&eacute;n&eacute;rale du Conseil Protestant au Congo (C.P.C) du 23 au 31 mars 1969 qu&#39;une r&eacute;solution mettant fin &agrave; la Mission comme institution &agrave; cot&eacute; de l&#39;Eglise du Christ au Congo a &eacute;t&eacute; vot&eacute;e. Ainsi la Mission comme institution a atteint 90 ans d&#39;existence en R&eacute;publique d&eacute;mocratique du Congo. On se rappellera que c&#39;est en f&eacute;vrier 1878 que le R&eacute;v. Henri CRAVEN, premier missionnaire, fonda la premi&egrave;re station missionnaire &agrave; Palabala. D&eacute;puis cette date, diff&eacute;rentes Missions chr&eacute;tiennes s&#39;install&egrave;rent dans notre pays.<br />\r\n<br />\r\n<strong><span style=\"font-size:16px\">2. La premi&egrave;re Conf&eacute;rence G&eacute;n&eacute;rale</span></strong></p>\r\n\r\n<p><br />\r\nLa premi&egrave;re conf&eacute;rence g&eacute;n&eacute;rale des Missions, sous la pr&eacute;sidence du R&eacute;v. G. GRENFELL, a eu lieu du 18 au 21 janvier 1902 et r&eacute;unissant 34 missionnaires r&eacute;presentant 7 Missions. Ceci prouves que d&egrave;s le d&eacute;but nos missionnaires se sentaient appel&eacute;s &agrave; collaborer pour discuter les probl&egrave;mes d&#39;interet commun.<br />\r\n<br />\r\n<strong><span style=\"font-size:16px\">3. Le commit&eacute; de Continuation</span></strong></p>\r\n\r\n<p><br />\r\nCe Comit&eacute; fut fond&eacute; en 1911. Il est l&#39;ex&eacute;cution des propositions pr&eacute;sent&eacute;es par la premi&egrave;re Conf&eacute;rence Mondaile des Missions qui se r&eacute;unit &agrave; Ednibourg en 1910.</p>\r\n\r\n<p><br />\r\n<strong><span style=\"font-size:16px\">4. Le Conseil Protestant du Congo</span></strong></p>\r\n\r\n<p><br />\r\nNous allons simplement retracer l&#39;histoire du conseil Protestant du Congo. Ecoutez ce que rapporte le Dictionnaire des Conseils Chr&eacute;tiens, &eacute;crit par les missionnaires: Lors de la 9&egrave;me Conf&eacute;rence r&eacute;unie &agrave; Kinshasa, le comit&eacute; de Continuation a vot&eacute; une d&eacute;cision pour d&eacute;venir le Conseil Protestant du Congo et un Comit&eacute; Executif de Cinq conseilllers a &eacute;t&eacute; &eacute;lu.<br />\r\n<br />\r\nLe Conseil a eu du succ&egrave;s surtout dans deux domaines : la r&eacute;partition des champs de Missions et les rapports entre le gouvernement et les soci&eacute;t&eacute;s de Mission. D&egrave;s le d&eacute;but, la conf&eacute;rence s&#39;&eacute;tait mise d&#39;acord que tout le Congo soit &eacute;vang&eacute;lis&eacute;. Le th&egrave;mede la Conf&eacute;rence de 1918 fut &quot;<strong> </strong><em>CONGO MISSION NEWS</em><strong> </strong>&quot; (<strong>Nouvelles Missionnaires du Congo</strong>), indiquait les domaines de la Missions. La coop&eacute;ration dans la r&eacute;partiton des Champs de Mission est rest&eacute;e excellente, bien que le nombre des Missions au Congo ait doubl&eacute; entre 1919 et 1939. La constitution de 1925 avait pr&eacute;vu un comit&eacute; permanent pour la r&eacute;partition des champs de Mission mais aucune r&eacute;gle n&#39;a &eacute;t&eacute; formul&eacute;e et la fonction du conseil n&#39;a pas &eacute;t&eacute; d&eacute;finie.</p>\r\n\r\n<p><br />\r\nLa capacit&eacute; du Conseil de s&#39;attaquer aux divers probl&egrave;mes a suscit&eacute; une confiance croissante. Les Missions protestantes lui ont de plus en plus confi&eacute; leurs affaires. Graces au conseil, des Missions protestantes qui souffraient de l&#39;administration coloniale fortement catholique romaine, ont &eacute;t&eacute; soulag&eacute;es. Le probl&egrave;me de la libert&eacute; religieuse est d&eacute;venu particuli&egrave;rement brulant lorsque dans les ann&eacute;es 20, le r&eacute;gime lib&eacute;ral a &eacute;t&eacute; remplac&eacute; par un autre nettement &quot;Romaniste&quot;. Jusqu&#39;en 1939, une tention constante subsitait et le Conseil avait affaire &agrave; une hostilit&eacute; tant ouverte que cach&eacute;e de la part des responsables coloniaux.</p>\r\n\r\n<p><br />\r\nDans certains cas, des missionnaires catholiques romaines ont ferm&eacute; des &eacute;coles protestantes, refus&eacute; la justice aux indig&egrave;nes protestants et t&eacute;rroris&eacute; les chefs qui favorisaient les Protestantisme. Le Conseil se r&eacute;ferait au <em>Trait&eacute; de Berlin 1884-1885 </em> et &agrave; la <em> Convention de 1919 </em> comme base de la libert&eacute; religieuse au Congo pour toutes secte de toute nationnalit&eacute;. Meme encore en 1942 le Conseil Protestant du Congo a protest&eacute; contre le r&eacute;fus de l&#39;administration colonial de reconnaitre les &eacute;coles protestantes &agrave; l&#39;exception de celles de petite soci&eacute;t&eacute; Belge des Missionnaires Protestantes. Le Conseil Protestant du Congo a r&eacute;pondu de facon &eacute;fficace aux b&eacute;soins des &quot;Missions orphelines&quot; pendant les ann&eacute;es de la geurre.</p>\r\n\r\n<p><br />\r\nVers le millieu des ann&eacute;es 1930, plusieurs Missions ont commenc&eacute; &agrave; employer le nom <em> Eglise du Chrits au Congo</em> et quelques-unes se sont rendues de plus en plus compte de l&#39;Unit&eacute; organique pourrait etre avantageuses. En janvier 1941 la Commission sur la politique &eacute;cclesiastique du Conseil a fait circuler une lettre qui visait question de l&#39;Unit&quot; organique. Les ecclessiatique et posait de nouveau la question de l&#39;Unit&eacute; organique. Les &eacute;glise en collaboration ont adoopt&eacute; un plan d&#39;adhesion commune et transf&eacute;rable.</p>\r\n\r\n<p><br />\r\nEn 1951, le Consel Protestant du Congo a recu du Gouvernement un terrain &agrave; Kinshasa sur lequel on a pu construire un quartier g&eacute;n&eacute;ral administratif. Les &eacute;fforts se sont poursuivis pour &eacute;tablir une collaboration plus efficace entre les &eacute;glises. Des d&eacute;l&eacute;gu&eacute;s congolais ont particip&eacute; &agrave; part enti&egrave;re comme membres du Conseil pour la premi&egrave;re fois en 1957. Au mois Janvier de l&#39;ann&eacute;e suivante, la Conf&eacute;rence des Eglises de Toute l&#39;Afrique a d&eacute;mand&eacute;au Conseil Protestant du Congo de confier rapidement la responbolilit&eacute; daux Afrcains er d&#39;&eacute;difier <em>une &eacute;glise </em></p>', '<p>g</p>', '<p>Selon&nbsp; la Constitution, l&#39;Eglise du Christ au Congo accomplit une double mission : <strong>Internet</strong> et <strong>externe.</strong></p>\r\n\r\n<p>Sur le plan int&eacute;rieur, elle travaille dans les domaines d&#39;&eacute;vang&eacute;lisation, d&#39;&eacute;ducation chr&eacute;tienne et de la diaconie. Pr&eacute;sente&nbsp; et dynamique sur toute l&#39;&eacute;tendue du pays, l&#39;ECC est socialement visible &agrave; travers les temples, les &eacute;coles, les h&ocirc;pitaux, les activit&eacute;s agricoles et de d&eacute;veloppement. Selon des &eacute;tudes non officielles, on attribue &agrave; la popualtion congolaise, entre <strong>30% et 40%</strong> des protestants.</p>\r\n\r\n<p>Sur le plan ext&eacute;rieur, l&#39;ECC envoie des missionnaires et entretient des bonnes relations avec les Eglises &eacute;trang&egrave;res et Organismes chr&eacute;tiens internationaux. L&#39;ECC voudrait &ecirc;tre une Eglise v&eacute;ritablement &eacute;vang&eacute;lique, organis&eacute;e, d&eacute;mocratique, autonome, forte et missionnaire.</p>\r\n\r\n<p><em>L&#39;ECC a pour objectif de s&#39;occuper des oeuvres religieuses de jeunesse et philantropiques (&eacute;vang&eacute;lisation, cultes, oeuvres sociales) et de t&eacute;moigner de son unit&eacute; au Congo et dans le monde. </em></p>', '<p>a</p>', '<p>o</p>', '2018-11-23 08:28:09', '5bf7ac097968e', 1);

-- --------------------------------------------------------

--
-- Structure de la table `archives`
--

CREATE TABLE `archives` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `location` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `slug` varchar(255) NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `comment` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `community`
--

CREATE TABLE `community` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `denomination` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `post` tinyint(1) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `representant` varchar(100) DEFAULT NULL,
  `siege` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `community`
--

INSERT INTO `community` (`id`, `name`, `denomination`, `description`, `created_at`, `url`, `post`, `slug`, `representant`, `siege`, `email`) VALUES
(6, 'CEFMC', 'Communauté des Eglises des Frères Mennoites au Congo', '<p>description</p>', '2018-11-20 05:30:21', '5bf38ddd5bafa', 1, '5bf38ddd5bb01', 'Rév. Mbakila Kabemba', 'BANDUNDU / Kikwit', 'geradmabakila@gmail.com'),
(7, 'CAICC', 'Communauté Africa Irland Chruch', '<p>description</p>', '2018-11-20 05:25:12', '5bf38ca862e64', 1, '5bf38ca862e69', 'Numbi Wakubaluekol Evariste', 'KATANGA \\ Lubumbashi', 'aiccongo@yahoo.com | kitonumbi@yahoo.fr'),
(8, 'CEBU', 'Communauté des Eglises Baptistes Unies', '<p>description</p>', '2018-11-20 05:33:45', '5bf38ea95cc20', 1, '5bf38ea95cc28', 'Rév. Izemengi Boniface', 'BANDUNDU / Semedua', 'izeboniface@gmail.com'),
(9, 'CELPA', 'Communauté des Eglises Libres de Pentecôtes en Afrique', '<p>description</p>', '2018-11-20 05:32:06', '5bf38e46c279d', 1, '5bf38e46c27a1', 'Rév. Levi Ngangura', 'SUD-KIVU / Bukavu', 'ngangura@yahoo.fr'),
(10, 'CBCA', 'Communauté Baptiste au Centre de l\'Afrique', '<p>description</p>', '2018-11-20 05:28:36', '5bf38d748a284', 1, '5bf38d748a288', 'Rév. Dr Samuel Nyayimbako Motayinga', 'NORD-KIVU / Goma', 'cbca_office@yahoo.fr'),
(11, 'CAFKAT', 'Communauté des Assemblées des Frères au Katanga', '<p>description</p>', '2018-11-20 05:27:13', '5bf38d2152fa5', 1, '5bf38d2152faa', 'Mgr. Kafwimbi Mumba', 'KATANGA \\ Lubumbashi', 'ecc2cafkat@yahoo.fr'),
(13, 'CEGC', 'Communauté des Eglise de Grace au Congo', '<p>description</p>', '2018-11-20 05:35:52', '5bf38f2894503', 1, '5bf38f2894509', 'Rév. Asumani Kabungulu', 'KINDU / Maniema', 'cegecassukabu@yahoo.fr'),
(14, 'CEPAC', 'Communauté des Eglises Libres de Pentecôtes en Afrique Centrale', '<p>description</p>', '2018-11-20 05:37:26', '5bf38f861d208', 1, '5bf38f861d20e', 'Rév. Mateso Mouke', 'SUD-KIVU / Bukavu', 'mateso32@yahoo.fr'),
(15, 'CEM', 'Communauté Evangélique au Congo', '<p>description</p>', '2018-11-20 05:38:32', '5bf38fc8e95b6', 1, '5bf38fc8e95bf', 'Rév. Felix Cimbalanga', 'KASAI-ORIENTAL', 'jfcimbalangwampoyi@gmail.com'),
(16, 'CDCC', 'Communauté des Disciples du Christ au Congo', '<p>descritption</p>', '2018-11-20 05:39:53', '5bf3901938150', 1, '5bf3901938154', 'Rév. Eliki Bonanga', 'EQUATEUR / Mbandaka', '-'),
(17, 'CAC', 'Communauté Anglicane au Congo', '<p>description</p>', '2018-11-20 05:41:13', '5bf39069347d0', 1, '5bf39069347d6', 'Archeveque Zacharie Masimango Katanda', 'KINSHASA / Kalamu', 'anglicancongo@yahoo.com'),
(18, 'AOG', 'Communauté des Assemblées of God', '<p>description</p>', '2018-11-20 05:42:19', '5bf390abea274', 1, '5bf390abea27a', 'Rév. Nongoyo', 'PROVINCE ORIENTALE', '-'),
(19, 'CBFC', 'Communauté Baptiste du Fleuve Congo', '<p>description</p>', '2018-11-20 05:43:39', '5bf390fbaac83', 1, '5bf390fbaac8a', 'Rév. Dr. André Bokundoa', 'KINSHASA / Ngaliema', 'ecc_cbfc@yahoo.fr'),
(20, 'CBCN', 'Communauté Baptiste du Bas-Uele', '<p>description</p>', '2018-11-20 05:44:47', '5bf3913faa1e7', 1, '5bf3913faa1ee', 'Rév. Robert Kumbowo', 'PROVINCE ORIENTALE / Buta', 'kumarob@yahoo.fr'),
(21, 'CBCO', 'Communauté Baptiste du Congo Ouest', '<p>description</p>', '2018-11-20 05:47:52', '5bf391f8e013e', 1, '5bf391f8e0142', 'Rév. Bavuinsi Nsenga', 'KINSHASA / Ngaliema', 'fidelebavuinsi@htmail.com'),
(22, 'CECCA', 'Communauté Evangélique du Christ au Coeur de l\'Afique', '<p>description</p>', '2018-11-20 05:46:59', '5bf391c33920b', 1, '5bf391c339212', 'Rév. David Modibale Awilingate', 'PROVINCE ORIENTALE / Isiro', 'prescessa@gmail.com'),
(23, 'CECU', 'Communaté Evangélique du Christ en Ubangi', '<p>description</p>', '2018-11-20 05:49:12', '5bf392484d99f', 1, '5bf392484d9a8', 'Rév. Cyrille Alengenabwe', 'EQUATEUR / Gemena', 'ecc17ecu@gmail.com | cyrile.alenge@gmail.com'),
(24, 'Communauté Evangélique de l\'Alliance au Congo', 'CEAC', '<p>description</p>', '2018-11-20 05:50:50', '5bf392aa6b331', 0, '5bf392aa6b338', 'Rév. Jean Pierre Muandalelo', 'KONGO CENTRAL / Boma', 'jplmuandalelo@gmail.com'),
(25, 'CEEBCO', 'Communauté des Eglises Evangéliques Beréennes au Congo', '<p>description</p>', '2018-11-20 05:52:09', '5bf392f907c56', 1, '5bf392f907c5c', 'Rév. Lwaki Kisala', 'SUD-KIVU / Bukavu', 'revlwakikisala@gmail.com'),
(26, 'CEAC', 'Communauté Evangélique de l\'Alliance au Congo', '<p>description</p>', '2018-11-20 05:53:47', '5bf3935bc7d02', 1, '5bf3935bc7d06', 'Rév. Jean Pierre Muandalelo', 'KONGO CENTRAL / Boma', 'jplmuandalelo@gmail.com'),
(27, 'CECA', 'Communauté Evangélique au Centre de l\'Afique', '<p>description</p>', '2018-11-20 05:55:39', '5bf393cb930c0', 1, '5bf393cb930c7', 'Rév. Kokole Indringi', 'PROVINCE ORIENTALE / Bunia', 'idringikikile@gmail.com'),
(28, 'CNCA', 'Communauté Nation du Christ en Afrique', '<p>description</p>', '2018-11-20 06:01:20', '5bf39520f34a3', 1, '5bf39520f34a7', 'Mgr. Mehuma Huma Bolita', 'PROVINCE ORIENTALE', 'fatumabolita@gmail.com'),
(29, 'CADELU', 'Communauté Association des Eglises Evangélique de Luluanga', '<p>description</p>', '2018-11-20 06:03:04', '5bf39588e47cc', 1, '5bf39588e47d1', 'Rév. Bokombe Boko', 'EQUATEUR / Basankusu', 'bokombejd@gmail.com'),
(30, 'CEC', 'Communauté Evangélique au Congo', '<p>description</p>', '2018-11-20 06:04:11', '5bf395cb25d55', 1, '5bf395cb25d5b', 'Rév. Manyanga Nzola Nzaba', 'KONGO CENTRAL / Luozi', '-'),
(31, 'CLMK', 'Communauté Libre de Manièma Kivu', '<p>description</p>', '2018-11-20 06:05:34', '5bf3961ee9072', 1, '5bf3961ee9078', 'Rév. Sam. Mukula Kyasa', 'KINDU / Maniema', 'mukulasamuel@gmail.com'),
(32, 'CEK', 'Communauté Evangélique du Kwango', '<p>description</p>', '2018-11-20 06:07:30', '5bf39692845e4', 1, '5bf39692845eb', 'Rév. Kabongo Mifundu Stéphane', 'BANDUNDU / Kasongo Lunda', 'sthéphanekabongo2@gmail.com | cek25.churc@gmail.com'),
(33, 'CLMC', 'Communauté Libre Méthodiste au Congo', '<p>description</p>', '2018-11-20 06:08:42', '5bf396dad4d54', 1, '5bf396dad4d61', 'Mgr. Lubanga Venance', 'KINDU / Maniema', 'iwehusha@gmail.com'),
(34, 'CMCO', 'Communauté Menonité au Congo', '<p>description</p>', '2018-11-20 06:11:06', '5bf3976a019ee', 1, '5bf3976a019f3', 'Rév. Adolphe Komuesa Kalunga', 'KASAI-OCCIDENTAL', '-'),
(35, 'CMUCC', 'Communauté Méthodiste Unie au Congo', '<p>description</p>', '2018-11-20 06:12:00', '5bf397a0ce5ab', 1, '5bf397a0ce5b5', 'Mgr. Daniel Liunge', 'KINSHASA', '-'),
(36, 'CMSC', 'Communauté Méthodiste au Sud-Congo', '<p>description</p>', '2018-11-20 06:12:54', '5bf397d6ce99f', 1, '5bf397d6ce9a3', 'Mgr. Kapa Owan', 'KATANGA', '-'),
(37, 'CPCO', 'Communauté Pentecôtiste au Congo', '<p>description</p>', '2018-11-20 06:14:01', '5bf39819059dc', 1, '5bf39819059eb', 'Rév. Mbuya Kaluwa', 'KATANGA / Kamina', '-'),
(38, 'CPC', 'Communauté Presbytérienne au Congo', '<p>description</p>', '2018-11-20 06:15:11', '5bf3985fafb6f', 1, '5bf3985fafb76', 'Mgr. Tshibemba', 'KASAI-OCCIDENTAL', 'marcelethsibemba@yahoo.fr'),
(39, 'CBS', 'Communauté Presbytérienne de Kinshasa', '<p>description</p>', '2018-11-20 06:16:48', '5bf398c08fff5', 1, '5bf398c08fffb', 'Rév. Kalonji Mukendi', 'KINSHASA / Limité', '-'),
(40, 'CERS', 'Communauté Evangélique Région  Sankuru', '<p>description</p>', '2018-11-20 06:17:45', '5bf398f9ae69b', 1, '5bf398f9ae6a1', 'Rév. Samuel Mansimba', 'KASAI-OCCIDENTAL', '-'),
(41, 'CADAF', 'Communauté des Assemblées de Dieu en Afrique', '<p>description</p>', '2018-11-20 06:18:54', '5bf3993e0733f', 1, '5bf3993e07345', 'Rév. Mamimi Mus Jérémie', 'SUD-KIVU / Bukavu', 'jeremielamimbi@gmail.com'),
(42, 'CUEBC', 'Communauté Union des Eglises Baptistes au Congo', '<p>description</p>', '2018-11-20 06:19:58', '5bf3997ec7ee4', 1, '5bf3997ec7eec', 'Rév. Pierre Mutumbambi Matumba', 'BANDUNDU / Kikwit', '-'),
(43, 'CCCA', 'Communauté Centrale du Christ en Afrique', '<p>description</p>', '2018-11-20 06:21:17', '5bf399cd3710e', 1, '5bf399cd37114', 'Ev. Ilunga Jean Pierre', 'KATANNGA / Lubumbashi', 'navjgp32@gmail.com'),
(44, 'CADC', 'Communauté des Assemblées de Dieu du Congo', '<p>descripition</p>', '2018-11-20 06:22:34', '5bf39a1aa3c6d', 1, '5bf39a1aa3c73', 'Rév. Kalaki Manzambi', 'KINSHASA / Kasa-Vubu', '-'),
(45, 'CFCG', 'Communauté des Frères en Christ Gareganza au Congoa', '<p>description</p>', '2018-11-20 06:26:49', '5bf39b19cf2e1', 1, '5bf39b19cf2e7', 'Rév. Mabue Kamuina', 'KATANGA / Manono', '-'),
(46, 'CE', 'Communauté Emmanuel', '<p>description</p>', '2018-11-20 06:27:40', '5bf39b4c0abc0', 1, '5bf39b4c0abc6', 'Rév. Katho', 'PROVINCE ORIENTALE / Bunia', '-'),
(47, 'CECA', 'Communauté des Eglises Chretienne en Afique', '<p>description</p>', '2018-11-20 06:34:33', '5bf39ce941bcf', 1, '5bf39ce941bd5', 'Rév. Angaze B. Pita', 'SUD-KIVU / Bukavu', 'pitaangaza@gmail.com'),
(48, 'CEBIE', 'Communauté des Eglises Chrétiennes Indépendantes Evangéliques', '<p>description</p>', '2018-11-20 06:35:59', '5bf39d3f7a491', 1, '5bf39d3f7a496', 'Dr. Alexis Mushila Nyamakan', 'BANDUNDU', 'myayaki@gmail.com'),
(49, 'CEECO', 'Communauté de l\'Eglise Evangélique du Congo au Kasai', '<p>description</p>', '2018-11-20 06:37:18', '5bf39d8ec3510', 1, '5bf39d8ec3519', 'Rév. Léon Mukanga', 'KASAI-ORIENTAL', 'leomukanga@gmail.com'),
(50, 'CEEC', 'Communauté Evangéliques Congolaise', '<p>description</p>', '2018-11-20 06:38:20', '5bf39dcc8161c', 1, '5bf39dcc81624', 'Rév. Matthieu Kwalongo', 'BANDUNDU / Idiofa', '-'),
(51, 'CFP', 'Communauté des Fidèles Protestants', '<p>description</p>', '2018-11-20 06:39:19', '5bf39e07a114b', 1, '5bf39e07a1155', 'Rév. Felix Manga Dabolo', 'PROVINCE ORIENTALE / Bondo', '-'),
(52, 'CEP', 'Communauté Evangélique de Pentecôte', '<p>description</p>', '2018-11-20 06:40:24', '5bf39e48ba379', 1, '5bf39e48ba381', 'Rév. Banza Mwenze Fortuna', 'KATANGA', 'fortunan@gmail.com'),
(53, 'CPKAT', 'Communauté Protestant au Katanga', '<p>description</p>', '2018-11-20 06:41:24', '5bf39e845f42d', 1, '5bf39e845f438', 'Rév. Kalombo Kalubi', 'KATANGA', '-'),
(54, 'CAFCC', 'Communauté des Assemblés des Frères en Christ au Congo', '<p>description</p>', '2018-11-20 06:44:09', '5bf39f297c500', 1, '5bf39f297c505', 'Ev. Mashinsa Kalenga', 'PROVINCE ORIENTALE / Bunia', '-'),
(55, 'CEBAWB', 'Communauté Baptiste Autonomes entre Wamba-Bakali', '<p>description</p>', '2018-11-20 06:55:08', '5bf3a1bc2d964', 1, '5bf3a1bc2d968', 'Rév. Yengi Idiazo Innoncent', 'BANDUNDU / Nzamba', '-'),
(56, 'CEBA', 'Communauté Episcopale Baptiste Africaine', '<p>description</p>', '2018-11-20 06:56:18', '5bf3a20296494', 1, '5bf3a2029649e', 'Mgr. Kabwe Ka Leza', 'KATANGA / Lubumbashi', '-'),
(57, 'CCEC', 'Communauté Chrétienne Evangélique au Congo', '<p>description</p>', '2018-11-20 06:57:36', '5bf3a25032056', 1, '5bf3a2503205d', 'Rév. Wenge Nzungani', 'BANDUNDU / Mwenalembwa', 'wengehiskia@gmail.com'),
(58, 'CEUM', 'Communauté Evangélique de l\'Ubangu Mongala', '<p>decription</p>', '2018-11-20 06:58:44', '5bf3a2946549e', 1, '5bf3a294654a4', 'Rév. Jules Mboka Ngate', 'EQUATEUR / Gemena', '-'),
(59, 'CEELCO', 'Communauté des Eglises Evangéliques Luthérienne du Congo', '<p>description</p>', '2018-11-20 06:59:49', '5bf3a2d5d5a53', 1, '5bf3a2d5d5a57', 'Rév. Jimmy Kabongo', 'KINSHASA / Lemba', 'rvjimkbo@gmail.com'),
(60, 'CBK', 'Communauté Baptiste du Kwango', '<p>description</p>', '2018-11-20 07:00:44', '5bf3a30c44e49', 1, '5bf3a30c44e4d', 'Rév. Kabeya Shipa', 'BANDUNDU / Kasongo Lunda', '-'),
(61, 'CMUNK', 'Communauté Méthodiste Unie au Nord Katanga', '<p>description</p>', '2018-11-20 07:02:20', '5bf3a36cc2b1f', 1, '5bf3a36cc2b28', 'Rév. Pistshi Ngoy Kazadi', 'KATANGA / Kamina', 'pitshik@htmail.com'),
(62, 'CEBCE', 'Communauté des Eglises Baptistes Congo', '<p>description</p>', '2018-11-20 07:04:05', '5bf3a3d5c7d1b', 1, '5bf3a3d5c7d22', 'Rév. Kombi Kasokero Amos', 'NORD-KIVU / Goma', 'kasongo@htmail.com'),
(63, 'CAEB BOOKE', 'Communauté Evangélique du Kasai Booke', '<p>description</p>', '2018-11-20 07:05:43', '5bf3a4372c6aa', 1, '5bf3a4372c6ae', 'Rév. Bondo Tshivuadi Paul', 'KASAI-ORIENTAL / Lodja', 'cabeglise@gmail.com'),
(64, 'CPKOC', 'Communauté Presbytérienne du Kasai Occidental', '<p>description</p>', '2018-11-20 07:07:25', '5bf3a49dde741', 1, '5bf3a49dde745', 'Mgr. Wishiya Bakatushipa', 'KASAI-OCCIDENTAL / Kananga', 'willybakato@gmail.com'),
(65, 'CPKO', 'Communauté Presbytérienne au Kasai Oriental', '<p>description</p>', '2018-11-20 07:08:49', '5bf3a4f1d5632', 1, '5bf3a4f1d5639', 'Rév. Bekamin Kabeya Nkole', 'KASAI-ORIENTAL', 'kabeyabenjami43@gmail.com'),
(66, 'CEA', 'Communauté Evangélique Africaine', '<p>description</p>', '2018-11-20 07:09:59', '5bf3a537829fc', 1, '5bf3a53782a03', 'Rév. Kapila Ngombe', 'KATANGA / Lubumbashi', 'kapilajames@htmail.com'),
(67, 'CRP', 'Communauté Réforme Presbytérienne', '<p>description</p>', '2018-11-20 07:11:14', '5bf3a582da233', 1, '5bf3a582da238', 'Rév. Sam Kabuayabetu Munene', 'KASAI-ORIENTAL', '-'),
(68, 'CJCC', 'Communauté de Jésus-Christ au Congo', '<p>description</p>', '2018-11-20 07:12:49', '5bf3a5e10ffe7', 1, '5bf3a5e10ffed', 'Patriache Samuel Mbaki Dinganga', 'KINSHASA / Kasa-Vubu', '-'),
(69, 'CBCOO', 'Communauté Branche du Christ au Congo', '<p>description</p>', '2018-11-20 07:13:57', '5bf3a625659e0', 1, '5bf3a625659e6', 'Rév. Mulongo Banza', 'KATANGA / Lubumbashi', '-'),
(70, 'CSEA', 'Communauté du Saint Esprit en Afrique', '<p>description</p>', '2018-11-20 07:15:18', '5bf3a676671c0', 1, '5bf3a676671d8', 'Rév. Munka Léon Dinganga', 'KONGO CENTRAL / Luozi', '-'),
(71, 'CCPC', 'Communauté Chrétienne de pentecôte au Congo', '<p>description</p>', '2018-11-20 07:17:10', '5bf3a6e64271e', 1, '5bf3a6e642724', 'Rév. Lukebana Matomene', 'KINSHASA / Ngiri-ngiri', 'thomaslukebana@gmail.com'),
(72, 'CRC', 'Communauté Réforme du Congo', '<p>description</p>', '2018-11-20 07:21:51', '5bf3a7ffb52ce', 1, '5bf3a7ffb52d6', 'Rév. Nzunzi Vangu Samson', 'KONGO CENTRAL / Matadi', '-'),
(73, 'CELC', 'Communauté Evangélique Libre du Congo', '<p>description</p>', '2018-11-20 07:24:59', '5bf3a8bba6d70', 1, '5bf3a8bba6d75', 'Rév. Muhunga Ngenzo', 'KINSHASA', '-'),
(74, 'CEPE', 'Communauté Evangélique de la Pentecôte', '<p>description</p>', '2018-11-20 07:26:04', '5bf3a8fcc33bb', 1, '5bf3a8fcc33c2', 'Rde Ngoy Nshimba Adrienne', 'KATANGA', '-'),
(75, 'CMRC', 'Communauté Mennonite Réforme au Congo', '<p>description</p>', '2018-11-20 07:27:24', '5bf3a94c8e220', 1, '5bf3a94c8e226', 'Rév. Kasongo Kanda', 'KASAI-ORIENTAL', '-'),
(76, 'CPCR', 'Communauté Pentecôte Christ Roi', '<p>description</p>', '2018-11-20 07:28:31', '5bf3a98f7d8b8', 1, '5bf3a98f7d8c7', 'Rév. Elie Botuli Yongo', 'KINSHASA', 'cmrcechurch@yahoo.fr'),
(77, 'CFEC', 'Communauté de la Fraternité Evangélique au Congo', '<p>description</p>', '2018-11-20 07:29:30', '5bf3a9ca6fa5d', 1, '5bf3a9ca6fa67', '-', 'KINSHASA', '-'),
(78, 'CBSK', 'Communauté Baptiste du Sud Kwango', '<p>description</p>', '2018-11-20 07:30:15', '5bf3a9f70a950', 1, '5bf3a9f70a955', 'Rév. Kutangila', 'KINSHASA', '-'),
(79, 'CPAC', 'Communauté Pentecôtiste Autonome au Congo', '<p>description</p>', '2018-11-20 07:36:08', '5bf3ab58ae716', 1, '5bf3ab58ae71e', 'Rév. Daniel Mukala Njibu', 'KINSHASA', 'danielndjibu@yahoo.fr'),
(80, 'CCGC', 'Communauté Church of God in Christ', '<p>description</p>', '2018-11-20 07:32:06', '5bf3aa66d6bd7', 1, '5bf3aa66d6be9', 'Rév. Kauya Robert', 'KATANGA', '-'),
(81, 'CMK', 'Communauté Mennonite de Kinshasa', '<p>description</p>', '2018-11-20 07:35:27', '5bf3ab2fc8f7e', 1, '5bf3ab2fc8f8b', 'Mgr. Numbi wa Kulokele', 'KINSHASA', 'eccmk@gmail.com'),
(82, 'CELCO', 'Communauté des Eglises Luthériennes Confessionnelle au Congo', '<p>descripion</p>', '2018-11-20 07:37:34', '5bf3abae998e2', 1, '5bf3abae998e8', 'Rév. Ben Makiadi Tombisa', 'KINSHASA', '-'),
(83, 'CEVSE', 'Communauté Evangélique de la Vérité du Saint Esprit', '<p>description</p>', '2018-11-20 07:38:41', '5bf3abf1a1b17', 1, '5bf3abf1a1b22', 'Rév. Jean Muyenga K.', 'KATANGA', '-'),
(84, 'CEPSV', 'Communauté Evangélique Pentecôte Source de Vie', '<p>description</p>', '2018-11-20 07:40:20', '5bf3ac54603fe', 1, '5bf3ac5460407', 'Mgr. Kandala Kandjoko', 'KATANGA', 'kandalabishoprichard@gmail.com'),
(85, 'COFEC', 'Communauté des Frères Evangélique au Congo', '<p>description</p>', '2018-11-20 07:42:01', '5bf3acb92bb9c', 1, '5bf3acb92bba1', 'Rév. Kangani Munumu', 'BANDUNDU', '-'),
(86, 'CPRCO', 'Communauté Pentecôtiste Renformé au Congo', '<p>description</p>', '2018-11-20 07:43:17', '5bf3ad0534074', 1, '5bf3ad0534079', 'Rév. Cruspin Kalonga', 'KASAI-OCCIDENTAL', 'crispinkalonga@gmail.com'),
(87, 'AIC / RDC', 'Communauté Africa  Inlanf Church / RDC', '<p>description</p>', '2018-11-20 07:46:00', '5bf3ada850cb2', 1, '5bf3ada850cbc', 'Rév. Dr. Kwarunga Towasso', 'PROVINCE ORIENTALE / Bunia', 'twossokwarunga@gmail.com'),
(88, 'CMUC', 'Communauté Méthodiste Unie au Congo', '<p>description</p>', '2018-11-20 07:52:52', '5bf3af44daa47', 1, '5bf3af44daa4d', 'Ev. Unda Yemba', 'MANIEMA / Kindu', 'gabrielunda@htmail.com'),
(89, 'CFCG-NK', 'Communauté des Frères en Christ Garenganze Manono', '<p>description</p>', '2018-11-20 07:54:36', '5bf3afacca5c1', 1, '5bf3afacca5c5', 'Rév. Dr. Kalonda Shaledja', 'KATANGA', 'kalondamulenda@yahoo.fr'),
(90, 'EMER', 'Communauté Missionnaire et Evangélique de la Résurrection', '<p>description</p>', '2018-11-20 07:56:07', '5bf3b007c2e5f', 1, '5bf3b007c2e63', 'Rév. Yakasongo Trudon', 'KINSHASA', 'trudsonyakasongo@yahoo.fr'),
(91, 'CMM', 'Communauté Méthodiste Moderne', '<p>description</p>', '2018-11-20 07:57:10', '5bf3b0465e4e8', 1, '5bf3b0465e4ec', '-', 'KASAI-ORIENTAL / Lodja', '-'),
(92, 'CNJ-RDC', 'Communauté Nouvelle Jérusalem', '<p>description</p>', '2018-11-20 07:58:08', '5bf3b080dbf11', 1, '5bf3b080dbf1c', 'Rév. Kazadi Mukalay Boni', 'KATANGA', '-'),
(93, 'CCBCO', 'Communauté Conventionné Baptiste au Congo', '<p>description</p>', '2018-11-20 08:08:30', '5bf3b2ee70ffb', 1, '5bf3b2ee71009', 'Rév. Ilunga Bondo Obed', 'KATANGA', '-'),
(94, 'CMBA', 'Communauté Mission Bérée d\'Afrique', '<p>description</p>', '2018-11-20 08:11:25', '5bf3b39d525a8', 1, '5bf3b39d525af', 'Mgr. Nday Mongawa K.', 'KATANGA', 'pasteurcephas@gmail.com'),
(95, 'CEDAC', 'Communauté des Ecoles des Ambassadeurs du Christ', '<p>description</p>', '2018-11-20 08:13:26', '5bf3b4169e2f3', 1, '5bf3b4169e2fd', 'Apôtre Rody Kadima', 'SUD-KIVU ', '-'),
(96, 'CEMC', 'Communauté de l\'Eglise Morave au Congo', '<p>description</p>', '2018-11-20 08:14:20', '5bf3b44d00967', 1, '5bf3b44d0096b', 'Rév. Lunyanya Sylvain', 'KATANGA', '-'),
(97, 'CEB', 'Communauté des Eglises Biblique', '<p>description</p>', '2018-11-20 08:15:20', '5bf3b48872e92', 1, '5bf3b48872e9c', 'Mgr. Omolonda Mbukila', 'SUD-KIVU', '-'),
(98, 'CEPEA - P- O', 'Communauté des Eglises Pentecôtiste d\'Expression', '<p>description</p>', '2018-11-20 08:16:26', '5bf3b4cad9350', 1, '5bf3b4cad935b', 'Rév. Mundyo Lutala', 'SUD-KIVU', '-'),
(99, 'CMRP', 'Communauté du Ministère du Reveil Pentecôtiste', '<p>description</p>', '2018-11-20 08:18:22', '5bf3b53e4ef1d', 1, '5bf3b53e4ef24', 'Rév. Kizombo Kalumbula', 'SUD-KIVU', 'kkbembula@gmail.com'),
(100, 'CEPEA - P-O', 'Communauté des Eglises Pentecôtistes d\'Expression', '<p>description</p>', '2018-11-20 08:19:51', '5bf3b5979ce5c', 1, '5bf3b5979ce64', 'Rév. Kazimoto Kika Freud', 'SUD-KIVU', 'fkikazima68@gmail.com'),
(101, 'CELCE', 'Communauté Evangéliques Luthérienne du Congo', '<p>description</p>', '2018-11-20 08:21:19', '5bf3b5ef9b6b8', 1, '5bf3b5ef9b6bd', 'Rév. Kasha Rweheza', 'SUD-KIVU', 'jeanmbotwa@gmail.com'),
(102, 'CEPM', 'Communauté des Eglises Pentecôtiste au Monde', '<p>description</p>', '2018-11-20 08:22:41', '5bf3b641723a1', 1, '5bf3b641723aa', 'Ev. Mukosa Mpirmire Paul', 'SUD-KIVU', 'davidmupata@yahoo.fr');

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `location` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `date_events` date NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `location`, `categorie`, `date_events`, `slug`, `created_at`, `post`) VALUES
(1, 'Evangélisation et vie de l\'Eglise', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', 'C/Barumbu, Q/Bon marché, N° 3930; Kinshasa, RDC', 'Sorties_Officielles', '2018-12-08', '5bfd414c5d6b2', '2018-11-27 14:06:20', 1),
(2, 'Ajourt des à les d\'ambition à la démangesion', '<p>sqd</p>', 'dfsdfsf', 'Evenements_en_vues', '2018-11-27', '5c08e47f71a68', '2018-12-06 09:57:35', 1);

-- --------------------------------------------------------

--
-- Structure de la table `feed`
--

CREATE TABLE `feed` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `feed`
--

INSERT INTO `feed` (`id`, `title`, `url`, `categorie`, `slug`, `description`, `created_at`, `post`) VALUES
(6, 'Evangélisation et vie de l\'Eglise', '2b1992fff985f64a6fede8605dadd081.jpg', 'evangelisation', '5bf2421e9878e', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2018-11-19 05:54:54', 1),
(7, 'Education chrétienne', 'd0a32832a41e1adb83244eb98d6598d2.jpg', 'education', '5bf2423000163', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2018-11-19 05:55:11', 1),
(8, 'Femmes et Familles', '294d01dd7300bee8be64377ffe9ced70.jpg', 'femme_famille', '5bf2423c8c7d4', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2018-11-19 05:55:24', 1),
(9, 'Oeuvre Sociales', 'c771a878a28b1e7071cb183bde9bfeea.jpg', 'oeuvre_sociale', '5bf2424b214b0', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2018-11-19 05:55:39', 1);

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `categorie` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `slug` varchar(255) NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `mission`
--

INSERT INTO `mission` (`id`, `title`, `url`, `categorie`, `description`, `created_at`, `slug`, `post`) VALUES
(1, 'Mission de l\'ECC', '', 'ecc_mission', '<p style=\"text-align:left\">Selon&nbsp; la Constitution, l&#39;Eglise du Christ au Congo accomplit une double mission :&nbsp;<strong>Internet</strong>&nbsp;et&nbsp;<strong>externe.</strong></p>\r\n\r\n<p style=\"text-align:left\">Sur le plan int&eacute;rieur, elle travaille dans les domaines d&#39;&eacute;vang&eacute;lisation, d&#39;&eacute;ducation chr&eacute;tienne et de la diaconie. Pr&eacute;sente&nbsp; et dynamique sur toute l&#39;&eacute;tendue du pays, l&#39;ECC est socialement visible &agrave; travers les temples, les &eacute;coles, les h&ocirc;pitaux, les activit&eacute;s agricoles et de d&eacute;veloppement. Selon des &eacute;tudes non officielles, on attribue &agrave; la popualtion congolaise, entre&nbsp;<strong>30% et 40%</strong>&nbsp;des protestants.</p>\r\n\r\n<p style=\"text-align:left\">Sur le plan ext&eacute;rieur, l&#39;ECC envoie des missionnaires et entretient des bonnes relations avec les Eglises &eacute;trang&egrave;res et Organismes chr&eacute;tiens internationaux. L&#39;ECC voudrait &ecirc;tre une Eglise v&eacute;ritablement &eacute;vang&eacute;lique, organis&eacute;e, d&eacute;mocratique, autonome, forte et missionnaire.</p>\r\n\r\n<p style=\"text-align:left\"><em>L&#39;ECC a pour objectif de s&#39;occuper des oeuvres religieuses de jeunesse et philantropiques (&eacute;vang&eacute;lisation, cultes, oeuvres sociales) et de t&eacute;moigner de son unit&eacute; au Congo et dans le monde.</em></p>', '2018-11-23 09:18:54', '5bf7b7eeeeb57', 1),
(2, 'ECC & Société', '', 'ecc_societe', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2018-11-14 08:12:21', '5bebcad5e6cec', 1),
(3, 'Nos communautés', '', 'ecc_communautes', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2018-11-17 05:11:45', '5bef9501e1481', 1);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) DEFAULT NULL,
  `description` longtext NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `news`
--

INSERT INTO `news` (`id`, `title`, `url`, `description`, `slug`, `created_at`, `post`) VALUES
(3, 'Culte pour la paix', '7f2c94bcf181294b83e9afa95b24bf12.jpg', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n\r\n<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '5bfd4005d3d13', '2018-11-27 14:00:53', 1);

-- --------------------------------------------------------

--
-- Structure de la table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `newsletter`
--

INSERT INTO `newsletter` (`id`, `name`, `email`, `status`, `created_at`, `post`) VALUES
(7, 'Christian kasse', 'christiankasse94@gmail.com', 'news_accept', '2018-11-23 09:15:04', 0);

-- --------------------------------------------------------

--
-- Structure de la table `phinxlog`
--

CREATE TABLE `phinxlog` (
  `version` bigint(20) NOT NULL,
  `migration_name` varchar(100) DEFAULT NULL,
  `start_time` timestamp NULL DEFAULT NULL,
  `end_time` timestamp NULL DEFAULT NULL,
  `breakpoint` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `phinxlog`
--

INSERT INTO `phinxlog` (`version`, `migration_name`, `start_time`, `end_time`, `breakpoint`) VALUES
(20180907115401, 'CreateSlidesTable', '2018-10-17 09:37:43', '2018-10-17 09:37:43', 0),
(20180907120014, 'CreateMissionTable', '2018-10-17 09:37:43', '2018-10-17 09:37:44', 0),
(20180907120255, 'CreateSpeechTable', '2018-10-17 09:37:44', '2018-10-17 09:37:44', 0),
(20180907120641, 'CreateFeedTable', '2018-10-17 09:37:44', '2018-10-17 09:37:45', 0),
(20180907120924, 'CreateNewsletterTable', '2018-10-17 09:37:45', '2018-10-17 09:37:46', 0),
(20180907121453, 'CreateAboutPresentationTable', '2018-10-17 09:37:46', '2018-10-17 09:37:46', 0),
(20180907121909, 'CreateAboutFonctionnementTable', '2018-10-17 09:37:46', '2018-10-17 09:37:46', 0),
(20180907122446, 'CreateNewsTable', '2018-10-17 09:37:46', '2018-10-17 09:37:47', 0),
(20180907133526, 'CreateEventsTable', '2018-10-17 09:37:47', '2018-10-17 09:37:47', 0),
(20180907133920, 'CreateArchivesTable', '2018-10-17 09:37:47', '2018-10-17 09:37:48', 0),
(20180907134101, 'CreateCommentsTable', '2018-10-17 09:37:48', '2018-10-17 09:37:48', 0),
(20180907135105, 'CreateUsersTable', '2018-10-17 09:37:48', '2018-10-17 09:37:48', 0),
(20180907162344, 'CreateCommunityTable', '2018-10-17 09:37:48', '2018-10-17 09:37:49', 0),
(20180911082306, 'CreateAboutHierachie', '2018-10-17 09:37:49', '2018-10-17 09:37:49', 0),
(20180916161955, 'CreateTestTable', '2018-10-17 09:37:49', '2018-10-17 09:37:49', 0);

-- --------------------------------------------------------

--
-- Structure de la table `slides`
--

CREATE TABLE `slides` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `slides`
--

INSERT INTO `slides` (`id`, `title`, `url`, `slug`, `content`, `created_at`, `post`) VALUES
(3, 'A la démande à une fille', '125268e92b258ac2c1a4dd95b7a4ae01.jpg', '5bed21e8b868b', '<p>&nbsp;labore et dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excep</p>\r\n', '2018-11-15 08:36:08', 1),
(4, 'L\'Eglise du christ au Congo et Mission', '61bd220ae416e7d055e0649974232076.jpg', '5bed21de21d33', '<p>boris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia de</p>\r\n', '2018-11-15 08:35:58', 0),
(6, 'Lorem ipsum dolor sit amet, consectetur', '7f4c088e438311a447e29bedc7385203.png', '5c168e12d5338', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et</p>\r\n\r\n<p>&nbsp;dolore magna aliqua. Ut enim ad minim veniam,<br />\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo<br />\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse<br />\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non<br />\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n', '2018-12-16 18:40:34', 1);

-- --------------------------------------------------------

--
-- Structure de la table `speech`
--

CREATE TABLE `speech` (
  `id` int(11) NOT NULL,
  `speaker` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` date DEFAULT NULL,
  `post` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `speech`
--

INSERT INTO `speech` (`id`, `speaker`, `role`, `slug`, `description`, `created_at`, `post`) VALUES
(1, 'Rev. Dr. André BOKUNDA-bo Likabe', 'Président National de l\'ECC', '5bebdb6983134', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '2018-11-14', 1);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `username`, `email`, `password`, `status`, `slug`, `role`, `create_at`, `admin`) VALUES
(1, 'Kasse', 'christian', 'christiankasse', 'christian@kasse.com', '$2y$10$HrUiNvP7GSJtaL7WAOgu6uwTxeTnSk86Nfj.Fy2yiEXbV/bHmpqAG', NULL, '5bc7032e64a76', 'r1', '2018-10-17 10:38:54', 1),
(2, 'Kasse Mukanisa', 'christian', 'christiankasse mukanisa', 'kasse@kasse.com', '$2y$10$v5iQLvZYrgiu2capESqr5uAyZMqzyafN9UayXD71s2iK6MQV4/yQm', NULL, '5bca429c79465', 'r1', '2018-10-19 21:46:20', NULL),
(3, 'ecc', 'direction', 'directionecc', 'communication@ecc-co.org', '$2y$10$P/9RfOnW1x3iQGEb28wKdus94H76p6YyOyxCaELFW2OpzkAXaHFqy', 0, '5bdbfe214b333', 'r1', '2018-11-02 07:34:57', NULL);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `about_fonctionnement`
--
ALTER TABLE `about_fonctionnement`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `about_hierachie`
--
ALTER TABLE `about_hierachie`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `about_presentation`
--
ALTER TABLE `about_presentation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `archives`
--
ALTER TABLE `archives`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `community`
--
ALTER TABLE `community`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `feed`
--
ALTER TABLE `feed`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `phinxlog`
--
ALTER TABLE `phinxlog`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `speech`
--
ALTER TABLE `speech`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`,`email`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `about_fonctionnement`
--
ALTER TABLE `about_fonctionnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `about_hierachie`
--
ALTER TABLE `about_hierachie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT pour la table `about_presentation`
--
ALTER TABLE `about_presentation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `archives`
--
ALTER TABLE `archives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `community`
--
ALTER TABLE `community`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `feed`
--
ALTER TABLE `feed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `speech`
--
ALTER TABLE `speech`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
