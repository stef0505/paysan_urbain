-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 12 déc. 2019 à 11:20
-- Version du serveur :  10.3.16-MariaDB
-- Version de PHP :  7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `paysan_urbain`
--

-- --------------------------------------------------------

--
-- Structure de la table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  `contenu` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `content`
--

INSERT INTO `content` (`id`, `page_id`, `name`, `online`, `contenu`, `title`) VALUES
(1, 1, 'cardHomePage', 1, 'Produire des micro-pousses : notre spécialité, ce sont ces fameux mini végétaux qui apportent à la fois\r\nsaveurs, couleurs et nutriments aux assiettes. Pas de chimie chez nous, ni de séances d’UV sous Led. Juste\r\ndes graines (bio), du terreau (bio aussi), une jolie serre et du soleil. Nous compostons notre précieux terreau\r\npour bien sûr le réutiliser. Chaque minutieuse étape de la production (semi, suivi, arrosage, récolte,\r\nconditionnement…) est faite de manière artisanale.', 'Production'),
(2, 1, 'cardHomePage', 1, 'Donner un coup de pouce à l’insertion : Le Paysan urbain est engagé dans l’économie sociale et solidaire du\r\nterritoire. Nous sommes un chantier d’insertion et accompagnons des personnes en difficulté vers un retour\r\nà un emploi durable.', 'Insertion'),
(3, 1, 'cardHomePage', 1, 'Sensibiliser à une meilleure alimentation : conscients de l’enjeu d’une alimentation durable pour l’homme\r\nson environnement, nous avons à cœur d’animer des ateliers et autres activités permettant aux enfants\r\ncomme aux adultes de se connecter à la nature de manière ludique.', 'Sensibiliser'),
(4, 2, 'Block-notreHistoire', 1, 'Fort d’une première expérience réussie à Paris depuis 2016, Le Paysan Urbain est arrivé à Marseille début\r\n2019 ! Notre ferme urbaine s’est installée dans les jardins du Cloitre, nouveau pôle d’innovation social de\r\nMarseille et propriété de la fondation des Apprentis d’Auteuil. C’est 2 hectares verdoyant que Le Paysan\r\nUrbain produit ses micro-pousses sous serre et aménage des jardins pédagogiques.', 'Marseille'),
(5, 2, 'card-home-ville', 1, 'Les micropousses sont tout simplement des semences de légumes ou d’herbes que l’on plante sur terreau, que\r\nl’on fait germer et que l’on expose ensuite à la lumière.', 'Le Monde des Micro-Pousses'),
(6, 2, 'card-home-ville', 1, 'Le Paysan Urbain déploie des ateliers de sensibilisation à l’environnement et à l’alimentation durable, sous\r\ndifférentes formes et à destination de divers publics :', 'Nos Animations'),
(7, 3, 'title-micropousse', 1, 'Les micropousses sont tout simplement des semences de légumes ou d’herbes que l’on plante sur terreau, que\r\nl’on fait germer et que l’on expose ensuite à la lumière. Le processus complet, prenant environ une semaine en\r\nété ! Nous consommons la tige et les feuilles de ces magnifiques et délicates petites plantes goûteuses. Les\r\nsaveurs intenses et les couleurs éclatantes des micropousses ont conquis le cœur, les cuisines et les assiettes\r\ndes épicuriens de ce monde. Mais leur effet étonnant ne s’arrête pas là…\r\nces micro-plantes renferment aussi une tonne de bienfaits nutritionnels.', 'Qu\'est ce qu\'une micropousse ?'),
(8, 3, 'title-gamme-micropousse', 1, 'Nos micro-pousses sont issues de graines biologiques. Elles s&#39;épanouissent sur un bon terreau, bio lui\r\naussi, et bien sûr nous n&#39;utilisons aucun engrais ni pesticides. Après germination, nos micro-pousses\r\npoursuivent le délicat développement sous serre, à la lumière naturelle du soleil marseillais!\r\n\r\nLes variétés de micro-pousses produites évoluent selon les saisons et ses aléas.', 'Notre Gamme'),
(9, 3, 'title-recette', 1, 'Les micro-pousses se consomment fraiches, et accompagnent plats chauds comme froids, sucrés ou salés.', 'Nos Recettes'),
(10, 4, 'card-mission', 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, debitis.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Cumque accusamus consectetur, reiciendis cupiditate saepe maiores!', 'ANIMATIONS PÉDAGOGIQUES POUR ENFANTS'),
(11, 4, 'card-mission', 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, debitis.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Cumque accusamus consectetur, reiciendis cupiditate saepe maiores!', 'Ateliers pour adultes / entreprises'),
(12, 4, 'card-mission', 1, 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, debitis.\r\nLorem ipsum dolor sit amet consectetur adipisicing elit. Cumque accusamus consectetur, reiciendis cupiditate saepe maiores!', 'Installation de jardins'),
(13, 4, 'title-mission', 1, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Blanditiis voluptate a enim facilis amet explicabo, odio ad vitae molestiae rem dolorum minus omnis aperiam at vel cum nisi molestias neque accusamus repudiandae labore harum exercitationem cupiditate quos. Omnis cumque eum ipsam repellendus odit nam magni iste tempora quaerat cum. Quisquam, quo sunt aliquam nisi impedit modi volupt', 'Nos Animations'),
(14, 5, 'card-contact', 1, 'Pour la presse : cecile@lepaysanurbain(.)fr\r\n\r\nPour organiser une animation :  cecile@lepaysanurbain.fr\r\n\r\nPour en savoir plus sur nos micro-pousses et les acheter, envoyez nous un message ou passez nous voir.\r\n\r\nPour venir jardiner ou bricoler, c’est tous les jeudi de 9h à 12h !\r\n\r\nPour nous donner un coup de main sur la micro-ferme, regardez nos événements sur notre page Facebook ou Instagram !', 'DES QUESTIONS ? UNE IDÉE ? NOUS SOUTENIR ?'),
(15, 5, 'card-contact', 1, 'Nous sommes toujours ultra contents de vous accueillir sur place !!!', 'INFOS VISITEURS'),
(16, 5, 'card-contact', 1, 'Adresse : 20 boulevard Madeleine Rémusat, 13013\r\n\r\n Téléphone : 06.07.08.09.01\r\n\r\nEmail: paysanurbainmars@gmail.com', 'Adresse'),
(173, 66, 'homePage', 1, 'Veuillez modifier votre contenu', 'Veuillez modifier votre contenu'),
(174, 66, 'card-home-ville', 1, 'Veuillez modifier votre contenu', 'Titre de la carte'),
(175, 66, 'card-home-ville', 1, 'Veuillez modifier votre contenu', 'Titre de la carte'),
(176, 67, 'title-micropousse', 1, 'Veuillez modifier votre contenu', 'Qu\'est ce qu\'une micropousse ?'),
(177, 67, 'title-gamme-micropousse', 1, 'Veuillez modifier votre contenu', 'Notre Gamme'),
(178, 67, 'title-recette', 1, 'Veuillez modifier votre contenu', 'Nos Recettes'),
(179, 68, 'title-mission', 1, 'Veuillez modifier votre contenu', 'Titre animation 1'),
(180, 68, 'card-mission', 1, 'Veuillez modifier votre contenu', 'Titre animation 1'),
(181, 68, 'card-mission', 1, 'Veuillez modifier votre contenu', 'Titre animation 2'),
(182, 68, 'card-mission', 1, 'Veuillez modifier votre contenu', 'Titre animation 2'),
(183, 69, 'card-contact', 1, 'Veuillez modifier votre contenu', 'DES QUESTIONS ? UNE IDÉE ? NOUS SOUTENIR ?'),
(184, 69, 'card-contact', 1, 'Veuillez modifier votre contenu', 'INFOS VISITEURS'),
(185, 69, 'card-contact', 1, 'Veuillez modifier votre contenu', 'Adresse');

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `name`, `online`, `create_at`) VALUES
(1, 'Marseille', 1, '2019-11-15 11:53:09'),
(41, 'Bordeaux', 1, '2019-11-21 14:16:06');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_at` datetime NOT NULL,
  `entreprise_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`id`, `name`, `description`, `image_name`, `create_at`, `entreprise_id`) VALUES
(1, 'Soraya Sigamalom', 'Gestionnaire des serres', 'user.jpg', '2019-11-15 12:22:00', 1),
(2, 'Joseph Potiron', 'Semeur de pousse', 'user.jpg', '2019-11-15 12:23:00', 1),
(17, 'Nom Prénom', 'Description du nouveau membre d\'équipe', 'user.png', '2019-11-21 14:16:06', 41),
(18, 'Regis Fontaine', 'Dev cool', 'user.jpg', '2019-11-21 14:17:00', 1);

-- --------------------------------------------------------

--
-- Structure de la table `micropousse`
--

CREATE TABLE `micropousse` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `entreprise_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `micropousse`
--

INSERT INTO `micropousse` (`id`, `name`, `description`, `image_name`, `entreprise_id`) VALUES
(1, 'Folie de Radis', 'Mes charmes irrésistibles  Ce qui nous rend folles, c’est notre mélange. Pourpre, rose et daïkon, nous avons toutes le bon goût du radis frais  Nos belles feuilles tendres et nos tiges de toutes les couleurs mettront de la joie dans vos assiettes !', 'foliederadis.png', 1),
(2, 'Méli-Mélo', 'Mes charmes irrésistibles  Du vert tendre au pourpre, avec ou sans poils, douces ou poivrées, nous sommes les championnes de la bio-diversité. : Radis poupre, brocoli, chou rouge et moutarde.  Et comme l’union fait la force, nous sommes un cocktail de vit', 'melimelo.jpg', 1),
(3, 'Moutarde', 'Mes petites feuilles rondes ne manquent pas de style avec leur revers bronze. Vous serez d’abord surpris par ma saveur acidulée. Mais je finis par une note suffisamment piquante pour vous rappeler que je suis bien de la moutarde !', 'moutarde.png', 1),
(4, 'Pois Vert', 'Avec mes petites vrilles et mes jolies feuilles rondes légèrement bleutées, je suis la plus bohème et la plus féminine des micro-pousses.  Ma saveur de pois frais vous surprendra.      Et je prendrai soin de vous avec mes anti-oxydants, mes vitamines C et', 'poisvert.jpg', 1),
(5, 'Roquette', 'Ne vous fiez pas à mes petites feuilles vertes et tendres, j’ai un tempérament de feu ! En toute saison, je mettrai les parfums et saveurs du sud dans vos assiettes!  Et pour joindre l’utile à l’agréable, je regorge de vitamines K, d’antioxydants (flavono', 'roquette.jpg', 1),
(6, 'Tournesol', 'Mes petites feuilles croquantes et douces avec une petite saveur de noix font de moi la micro-pousse favorite des enfants.  Et en plus, je suis super baraquée avec une gamme complète d’acides aminés (protéines), de vitamines (A, B, D, E) et de sels minéra', 'tournesol.jpg', 1),
(7, 'Fenouil', 'none', 'default.jpg', 1),
(8, 'Betterave rouge', 'none', 'default.jpg', 1),
(9, 'Coriandre', 'none', 'default.jpg', 1),
(10, 'Pak ChoÏ', 'none', 'default.jpg', 1),
(11, 'Amaranthe rouge', 'none', 'default.jpg', 1),
(12, 'Mélisse citronnée', 'none', 'default.jpg', 1),
(13, 'Radis Pourpre', 'none', 'default.jpg', 1),
(14, 'Aneth', 'none', 'default.jpg', 1),
(25, 'Folie de Radis', 'Mes charmes irrésistibles Ce qui nous rend folles, c’est notre mélange. Pourpre, rose et daïkon, nous avons toutes le bon goût du radis frais Nos belles feuilles tendres et nos tiges de toutes les couleurs mettront de la joie dans vos assiettes !', 'foliederadis.png', 41);

-- --------------------------------------------------------

--
-- Structure de la table `migration_versions`
--

CREATE TABLE `migration_versions` (
  `version` varchar(14) COLLATE utf8mb4_unicode_ci NOT NULL,
  `executed_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migration_versions`
--

INSERT INTO `migration_versions` (`version`, `executed_at`) VALUES
('20191114195658', '2019-11-15 10:46:33'),
('20191115095821', '2019-11-15 10:46:35'),
('20191115130852', '2019-11-15 13:09:16'),
('20191115134145', '2019-11-15 13:42:20'),
('20191116094822', '2019-11-16 09:49:54'),
('20191116105805', '2019-11-16 10:58:17');

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online` tinyint(1) NOT NULL,
  `create_at` datetime NOT NULL,
  `entreprise_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `page`
--

INSERT INTO `page` (`id`, `name`, `online`, `create_at`, `entreprise_id`) VALUES
(1, 'homePageGeneral', 1, '2019-11-15 15:36:00', NULL),
(2, 'homePage', 1, '2019-11-16 10:39:26', 1),
(3, 'micropoussePage', 1, '2019-11-19 15:39:00', 1),
(4, 'missionPage', 1, '2019-11-19 16:07:00', 1),
(5, 'contactPage', 1, '2019-11-19 16:36:00', 1),
(66, 'homePage', 1, '2019-11-21 14:16:06', 41),
(67, 'micropoussePage', 1, '2019-11-21 14:16:06', 41),
(68, 'missionPage', 1, '2019-11-21 14:16:06', 41),
(69, 'contactPage', 1, '2019-11-21 14:16:06', 41);

-- --------------------------------------------------------

--
-- Structure de la table `recette`
--

CREATE TABLE `recette` (
  `id` int(11) NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entreprise_id` int(11) DEFAULT NULL,
  `image_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `recette`
--

INSERT INTO `recette` (`id`, `name`, `description`, `entreprise_id`, `image_name`) VALUES
(1, 'Méli-mélo sur son lit d’avocat et pain de campagne', '« Faites griller deux grandes tranches de pain de campagne. Sur l’une des tranches, déposez des tranches d’avocat et recouvrez de fromage feta. Ajoutez quelques feuilles d’épinards et une bonne poignée de micropousses. »  Crédits recette et image : IGA, V', NULL, 'sandwich.jpg'),
(2, 'Rigatoni farcis, micropousses et bettes à carde', '« Ça faisait longtemps que j’imaginais une recette de rigatoni farcis. Je me disais que ces petits tuyaux de pâtes seraient goûteux et agréables une fois garnis de fromage ou d’herbes. Et ce soir-là, ni la motivation ni l’inspiration n’étaient au rendez-v', NULL, 'pate.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `create_at` datetime NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entreprise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `create_at`, `email`, `password`, `entreprise_id`) VALUES
(3, 'Admin', 'Admin', '2019-11-15 12:26:42', 'admin@mail.com', '$2y$13$qaQ8a7zU2tc5v8nHt2MhGuSAaYRH/rLXSnrYAFPRafVqS9pBDecGi', 1);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_FEC530A9C4663E4` (`page_id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2449BA15A4AEAFEA` (`entreprise_id`);

--
-- Index pour la table `micropousse`
--
ALTER TABLE `micropousse`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_88C86F1A4AEAFEA` (`entreprise_id`);

--
-- Index pour la table `migration_versions`
--
ALTER TABLE `migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Index pour la table `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_140AB620A4AEAFEA` (`entreprise_id`);

--
-- Index pour la table `recette`
--
ALTER TABLE `recette`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_49BB6390A4AEAFEA` (`entreprise_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8D93D649A4AEAFEA` (`entreprise_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=186;

--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `micropousse`
--
ALTER TABLE `micropousse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT pour la table `recette`
--
ALTER TABLE `recette`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `FK_FEC530A9C4663E4` FOREIGN KEY (`page_id`) REFERENCES `page` (`id`);

--
-- Contraintes pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD CONSTRAINT `FK_2449BA15A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `micropousse`
--
ALTER TABLE `micropousse`
  ADD CONSTRAINT `FK_88C86F1A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `page`
--
ALTER TABLE `page`
  ADD CONSTRAINT `FK_140AB620A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `recette`
--
ALTER TABLE `recette`
  ADD CONSTRAINT `FK_49BB6390A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `FK_8D93D649A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
