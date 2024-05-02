-- phpMyAdmin SQL Dump
-- version 5.1.4
-- https://www.phpmyadmin.net/
--
-- Hôte : mysql.etu.umontpellier.fr
-- Généré le : mer. 06 mars 2024 à 15:06
-- Version du serveur : 10.1.47-MariaDB
-- Version de PHP : 7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e20190006519`
--

-- --------------------------------------------------------

--
-- Structure de la table `bienetrequestions`
--

CREATE TABLE `bienetrequestions` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `question_number` int(11) DEFAULT NULL,
  `question_text` text COLLATE utf8mb4_unicode_ci,
  `significatif` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `bienetrequestions`
--

INSERT INTO `bienetrequestions` (`id`, `theme`, `question_number`, `question_text`, `significatif`) VALUES
(1, 'Social', 1, 'Je me sens connecté(e) aux autres étudiants de mon établissement.', 0),
(2, 'Social', 2, 'J\'ai des amis proches parmi les autres étudiants.', 1),
(3, 'Social', 3, 'J\'ai l\'impression de faire partie d\'une communauté étudiante.', 0),
(4, 'Social', 4, 'Je me sens soutenu(e) par mes pairs.', 0),
(5, 'Social', 5, 'J\'ai l\'impression d\'être inclus(e) dans les activités sociales de mon établissement.', 0),
(6, 'Social', 6, 'J\'ai des opportunités de rencontrer de nouvelles personnes et de me faire de nouveaux amis.', 0),
(7, 'Social', 7, 'Je me sens à l\'aise pour participer aux discussions en classe ou dans les groupes d\'étude.', 0),
(8, 'Social', 8, 'J\'ai l\'impression que mes camarades de classe me respectent.', 0),
(9, 'Social', 9, 'Je me sens à l\'aise pour demander de l\'aide à mes camarades de classe si j\'en ai besoin.', 0),
(10, 'Social', 10, 'J\'ai l\'impression de pouvoir exprimer mes opinions librement sans être jugé(e) par mes pairs.', 0),
(11, 'Social', 11, 'J\'ai l\'impression d\'être inclus(e) dans les activités parascolaires (clubs, associations, événements, etc.).', 1),
(12, 'Social', 12, 'Je me sens à l\'aise pour participer à des discussions et des débats dans des groupes d\'étude ou des projets de groupe.', 0),
(13, 'Social', 13, 'J\'ai des opportunités de collaborer avec d\'autres étudiants sur des projets académiques ou extracurriculaires.', 0),
(14, 'Social', 14, 'Je suis satisfait(e) de la diversité et de l\'inclusion dans mon établissement d\'enseignement.', 0),
(15, 'Social', 15, 'Je me sens à l\'aise pour demander de l\'aide à mes enseignants ou à mes pairs lorsque j\'en ai besoin.', 0),
(16, 'Social', 16, 'J\'ai des opportunités de participer à des activités sociales et culturelles en dehors de mon établissement.', 0),
(17, 'Social', 17, 'J\'ai l\'impression d\'être respecté(e) et valorisé(e) en tant qu\'individu au sein de la communauté étudiante.', 0),
(18, 'Social', 18, 'Je me sens en sécurité et protégé(e) dans mon établissement d\'enseignement.', 1),
(19, 'Social', 19, 'Je suis satisfait(e) des ressources et des services offerts pour soutenir mon bien-être social.', 0),
(20, 'Social', 20, 'J\'ai des relations amicales positives et épanouissantes dans mon environnement étudiant.', 0),
(21, 'Social', 21, 'J\'ai des amis proches en dehors de mon établissement d\'enseignement.', 0),
(22, 'Social', 22, 'Je me sens soutenu(e) par mes amis lors des périodes de stress ou de difficultés.', 0),
(23, 'Social', 23, 'J\'ai l\'impression d\'avoir un équilibre sain entre ma vie sociale et ma vie académique.', 0),
(24, 'Social', 24, 'Je suis satisfait(e) de mes relations amoureuses ou de mes expériences romantiques.', 0),
(25, 'Social', 25, 'J\'ai des relations familiales positives et satisfaisantes.', 1),
(26, 'Social', 26, 'Je me sens soutenu(e) par ma famille dans mes études et dans ma vie en général.', 1),
(27, 'Social', 27, 'J\'ai l\'impression de pouvoir communiquer ouvertement et honnêtement avec mes proches.', 0),
(28, 'Social', 28, 'J\'ai des moments de qualité avec ma famille et mes amis, où nous pouvons nous détendre et nous amuser ensemble.', 0),
(29, 'Social', 29, 'je me sens entouré(e) d\'un réseau de soutien social solide qui contribue à mon bien-être global.', 0),
(30, 'Santé', 1, 'Comment évalueriez-vous votre niveau d\'énergie au cours d\'une journée typique?', 1),
(31, 'Santé', 2, 'Comment décririez-vous la qualité de votre sommeil récent?', 1),
(32, 'Santé', 3, 'À quel point ressentez-vous du stress dans votre vie actuellement?', 0),
(33, 'Santé', 4, 'Dans quelle mesure considérez-vous vos habitudes alimentaires comme équilibrées?', 1),
(34, 'Santé', 5, 'Décrivez votre niveau d\'activité physique habituel.', 0),
(35, 'Santé', 6, 'Comment évaluez-vous votre capacité à gérer votre santé globale?', 0),
(36, 'Santé', 7, 'Dans quelle mesure maintenez-vous une hydratation adéquate au quotidien?', 0),
(37, 'Santé', 8, 'Comment évaluez-vous votre état général de santé actuel?', 0),
(38, 'Santé', 9, 'Comment évaluez-vous votre capacité à gérer votre temps entre les études, les activités sociales et le repos?', 0),
(39, 'Santé', 10, 'Dans quelle mesure pensez-vous avoir un équilibre sain entre vos engagements académiques et votre vie personnelle?', 1),
(40, 'Santé', 11, 'À quelle fréquence ressentez-vous une fatigue musculaire liée à des activités physiques ou à des efforts prolongés?', 0),
(41, 'Santé', 12, 'Comment évaluez-vous votre niveau de flexibilité et de mobilité corporelle?', 0),
(42, 'Santé', 13, 'À quelle fréquence pratiquez-vous une activité physique régulière (ex. : marche, course, yoga, etc.) en dehors de vos activités académiques?', 0),
(43, 'Santé', 14, 'Comment prenez-vous des pauses pendant vos sessions d\'étude pour prévenir la fatigue physique?', 0),
(44, 'Santé', 15, 'Dans quelle mesure êtes-vous engagé(e) dans des pratiques de santé préventive, telles que des contrôles médicaux réguliers, vaccinations, etc.?', 1),
(45, 'Professionnel', 1, 'Dans l\'ensemble, comment évaluez-vous votre satisfaction au travail/à l\'école ?', 1),
(46, 'Professionnel', 2, 'Comment évaluez-vous l\'équilibre entre votre vie professionnelle et personnelle ?', 0),
(47, 'Professionnel', 3, 'Quelle importance accordez-vous aux relations avec vos collègues/camarades de classe ?', 0),
(48, 'Professionnel', 4, 'Dans quelle mesure êtes-vous satisfait(e) des opportunités de développement professionnel/académique ?', 0),
(49, 'Professionnel', 5, 'Dans quelle mesure vous sentez-vous reconnu(e) et valorisé(e) pour votre travail/effort ?', 1),
(50, 'Professionnel', 6, 'Dans quelle mesure êtes-vous engagé(e) dans la réussite de votre équipe/classe ?', 0),
(51, 'Professionnel', 7, 'Dans quelle mesure disposez-vous d\'autonomie dans l\'accomplissement de vos tâches/études ?', 0),
(52, 'Professionnel', 8, 'Comment évaluez-vous votre niveau de stress au travail/à l\'école ?', 1),
(53, 'Professionnel', 9, 'Dans quelle mesure êtes-vous optimiste quant à votre avenir professionnel/académique ?', 0),
(54, 'Professionnel', 10, 'Comment évaluez-vous la communication au sein de votre organisation/établissement ?', 0),
(55, 'Professionnel', 11, 'Dans quelle mesure disposez-vous des ressources nécessaires pour accomplir votre travail/études ?', 1),
(56, 'Professionnel', 12, 'Quelle importance accordez-vous à la collaboration entre différents départements/sections ?', 0),
(57, 'Professionnel', 13, 'Comment évaluez-vous le leadership au sein de votre équipe/établissement ?', 0),
(58, 'Professionnel', 14, 'Dans quelle mesure vous sentez-vous à l\'aise face aux changements dans votre environnement professionnel/académique ?', 0),
(59, 'Professionnel', 15, 'Dans quelle mesure êtes-vous satisfait(e) des opportunités de formation continue ?', 0),
(60, 'Professionnel', 16, 'Comment évaluez-vous votre environnement physique de travail/études ?', 0),
(61, 'Professionnel', 17, 'Dans quelle mesure êtes-vous satisfait(e) des récompenses et avantages offerts par votre organisation/établissement ?', 0),
(62, 'Professionnel', 18, 'Comment évaluez-vous vos relations avec la hiérarchie/professeurs de votre organisation/établissement ?', 1),
(63, 'Professionnel', 19, 'Quelle importance accordez-vous à l\'implication sociale de votre organisation/établissement ?', 0),
(64, 'Professionnel', 20, 'Dans quelle mesure vous sentez-vous capable de gérer efficacement votre temps pour répondre aux exigences de votre travail/études ?', 0),
(65, 'Financier', 1, 'Comment évaluez-vous votre niveau de stress lié à vos problèmes financiers actuels ?', 1),
(66, 'Financier', 2, 'Dans quelle mesure êtes-vous satisfait(e) de votre capacité à payer vos frais de scolarité ou vos dépenses liées à vos études ?', 0),
(67, 'Financier', 3, 'Comment votre stress financier affecte-t-il votre bien-être général et votre capacité à vous concentrer sur vos études ?', 0),
(68, 'Financier', 4, 'Avez-vous établi un budget mensuel pour vos dépenses ?', 0),
(69, 'Financier', 5, 'Êtes-vous satisfait(e) de vos compétences en matière de gestion financière ?', 0),
(70, 'Financier', 6, 'Comment évaluez-vous votre planification des dépenses liées à l\'éducation, à l\'alimentation, au logement, aux transports, etc. ?', 0),
(71, 'Financier', 7, 'Dans quelle mesure êtes-vous en mesure d\'économiser de l\'argent régulièrement malgré vos dépenses liées à vos études ?', 1),
(72, 'Financier', 8, 'À quelle fréquence êtes-vous amené(e) à sauter des repas en raison de contraintes financières ?', 1),
(73, 'Financier', 9, 'Avez-vous des difficultés à trouver un logement abordable et de qualité ?', 0),
(74, 'Financier', 10, 'Pouvez-vous participer à des activités sociales ou à des sorties avec vos amis sans vous soucier de vos dépenses ?', 1),
(75, 'Financier', 11, 'Comment évaluez-vous l\'impact de vos problèmes financiers sur votre santé physique ou mentale ?', 1),
(76, 'Financier', 12, 'Comment évaluez-vous le soutien que vous avez reçu sous forme de bourses d\'études, de subventions ou de prêts pour soutenir vos études ?', 0),
(77, 'Financier', 13, 'Avez-vous accès à des opportunités d\'emploi sur le campus pour vous aider financièrement ?', 0),
(78, 'Financier', 14, 'Avez-vous recherché des ressources financières disponibles sur votre campus/université ?', 0),
(79, 'Financier', 15, 'À quel point êtes-vous informé(e) des services de conseil financier offerts par votre établissement ?', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `bienetrequestions`
--
ALTER TABLE `bienetrequestions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `bienetrequestions`
--
ALTER TABLE `bienetrequestions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
