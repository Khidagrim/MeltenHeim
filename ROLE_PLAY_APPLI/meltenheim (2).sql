-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 19 sep. 2019 à 11:50
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `meltenheim`
--

-- --------------------------------------------------------

--
-- Structure de la table `biome`
--

CREATE TABLE `biome` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `color` varchar(15) NOT NULL,
  `description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `biome`
--

INSERT INTO `biome` (`id`, `type`, `image`, `color`, `description`) VALUES
(6, 'Ocean', 'ocean.jpg', '', 'MeltenHeim est composé de 2 océans, chacun se situant entre les deux continents du monde.\r\n\r\nMalus : -1 en déplacement'),
(7, 'Marais', 'Marais.jpg', '', ''),
(8, 'Toundra', 'Toundra.jpg', '', ''),
(9, 'Plaines', 'Plains.png', '', ''),
(10, 'Desert', 'Desert.jpg', '', ''),
(11, 'Nuit', 'Night.jpg', '', ''),
(12, 'Steppes', 'Steppes.jpg', '', ''),
(13, 'Montagne', 'Mountain.jpg', '', ''),
(14, 'Forêt', 'forest.jpg', '', ''),
(15, 'Ville', 'town.jpg', '', ''),
(16, 'Forêt Sombre', 'dark_forest.jpg', '', ''),
(17, 'Forêt Magique', 'magic_forest.jpg', '', ''),
(18, 'Plateau', 'plateau.jpg', '', ''),
(19, 'Terre de Cendre', 'terre_de_cendre.jpg', '', ''),
(20, 'Plage', 'plage.jpg', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `entity`
--

CREATE TABLE `entity` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Vie` int(6) NOT NULL,
  `Force` int(6) NOT NULL,
  `Dext` int(6) NOT NULL,
  `Init` int(6) NOT NULL,
  `Magie` int(6) NOT NULL,
  `Mana` int(6) NOT NULL,
  `Symbiose` int(6) NOT NULL,
  `Rage` int(6) NOT NULL,
  `Armure_phy` int(2) NOT NULL,
  `Armure_mag` int(2) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(200) NOT NULL,
  `Taille` varchar(40) NOT NULL,
  `Type` varchar(40) NOT NULL,
  `SpecialData` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `entity`
--

INSERT INTO `entity` (`id`, `Nom`, `Vie`, `Force`, `Dext`, `Init`, `Magie`, `Mana`, `Symbiose`, `Rage`, `Armure_phy`, `Armure_mag`, `Description`, `Image`, `Taille`, `Type`, `SpecialData`) VALUES
(1, 'Ents', 90, 20, 0, 10, 0, 0, 10, 0, 4, 2, 'Les Ents sont de grandes créatures à l\'apparence d\'arbre, éveillés par les restes des magies Folg dont ils sont les défenseurs. \r\n\r\nMalus : \r\nMalus feu : deg+25%\r\nMalus glace : deg+10%\r\n\r\nPassifs:\r\nAA stun : 50% de chance\r\nAA de zone : 2m autour\r\nRegen haute : +10pv/tours\r\n\r\nActifs : \r\nbiosynthèse (-10 sym) : créer un Tréant', 'ent.jpg', '5m', 'creature', ''),
(3, 'Tréant', 50, 24, 0, 10, 0, 0, 5, 0, 1, 1, 'Les Tréants sont des gardiens de la fôrets. Souvent immobiles pendants des décennies, il se réveillent s\'ils sentent l\'appel d\'un Ent \r\n\r\nMalus : \r\nMalus feu : deg+25%\r\nMalus glace : deg+10%\r\n\r\nPassifs:\r\nRegeneration : 5pv/tours\r\n\r\nActifs:\r\nArmure de boisblanc : -x symbiose, +x en armure phy ou mag sur 1 coup', 'treant.jpg', '2m', 'creature', ''),
(4, 'Dryades', 40, 8, 30, 25, 8, 10, 5, 0, 0, 3, 'Les Driades sont des créatures pacifiques et altruistes. Bénéficiant d\'une magie liée à la régénération elles permettent de soigner de nombreuses blessure. Elles ne se montreront que si les personnages ont agi en faveur de la nature depuis le début.\r\n\r\nActifs: \r\nHeal (-2 mana) : +5pv\r\nBiogénése (10 mana) : Fusion de la driade et du personnage\r\n\r\nPassif :\r\nInaltérable\r\nBeauté Divine (charme sur homme : 80%)\r\n', 'driade.jpg', '1m80', 'creature', ''),
(5, 'Pixie', 20, 4, 40, 40, 20, 10, 5, 0, 0, 0, 'Les Pixies sont de petites fées. Celles-ci habitent dans les fôrets magiques et disposent de pouvoirs agissant sur le sommeil et les éléments naturels.\r\n\r\nActifs:\r\nAttaque élémentaire (-x mana): contrôle les éléments terre ou eau\r\nLéthargie (-3 sym,-2 mana): Provoque sommeil (1/4)\r\n\r\n', 'pixie.jpg', '50cm', 'creature', ''),
(6, 'Mat-Mout', 30, 24, 15, 15, 0, 0, 0, 0, 2, 0, 'Les Mat-Mouts sont de grands chevaux disposants de longue défenses pour se protéger. Leur imposante force fait d\'eux une monture de choix mais tout le monde ne parvient pas à monter dessus du fait de leur taille imposante.', 'matmout.jpg', '3m', 'creature', ''),
(7, 'Vindicateurs', 25, 20, 30, 40, 20, 5, 0, 5, 2, 4, 'Âme maudite par l\'église ramenée à la vie pour purger ses pêchers. Sous le joug de l\'église celle-ci n\'attaqueront que sur ordre. Sa force dépend de l\'âme ramenée à la vie.\r\n\r\nPassif :\r\nInaltérable\r\n\r\n\r\n', 'Vindicateur.jpg', '1m70-2m', 'creature', ''),
(8, 'Pahols', 100, 32, 25, 30, 0, 0, 0, 5, 2, 1, 'Les Pahols sont de grand oiseaux aimant construire leurs nids entre les plaines et les montagnes. Ils ne sont pas hostile ou du moins, cela dépend de la distance avec leur nid.\r\n\r\nPassif:\r\nImpressionnant : chaque joueur perd 5 en dext\r\nEsquive puissante : En cas d\'esquive repousse chaque joueur devant lui.', 'Pahols.jpg', '4m', 'creature', ''),
(9, 'Dragon', 530, 80, 20, 50, 60, 0, 0, 0, 5, 5, 'Les dragons sont de grande créatures semant misère et destruction. Fidèles à eux même ils sont particulièrement puissant et gardent dans leur caverne un gigantesque trésor. Leur couleur indique leur attribution élémentaire.\r\n\r\nPassif:\r\nImpressionnant : -5 de dext à tout les joueurs\r\nRésistance élémentaire : deg-10%\r\n\r\nActifs:\r\nSouffle élémentaire', 'Dragon.jpg', '30m', 'creature', ''),
(10, 'Golems de pierre', 100, 34, 0, 0, 0, 0, 0, 4, 3, 2, '', 'Golem_de_pierre.jpg', '5-10m', 'creature', ''),
(11, 'Galadraagks', 20, 16, 25, 25, 0, 0, 0, 3, 1, 1, 'Chiens avec des piques sur le dos.', 'Galadraagks.jpg', '70cm', 'creature', ''),
(12, 'Glenns', 30, 16, 20, 15, 0, 0, 0, 0, 1, 0, 'Miste entre Buffles et Cochons, ce sont des créatures aquatiques. Ils ont une peau visqueuse et bleuté et n\'ont pas de poils. Ils sont de bonnes monture aquatique et peuvent tirer des barques. Certains Glenns sont plus forts à la naissance et sont élevés par les frinnls pour en faire des Glenns de Guerre. Leurs cornes partent vers l\'avant et ceux-ci ont une queue semblable à celle des poissons.', '', '1m40', 'creature', ''),
(13, 'Glenn de guerre', 60, 40, 15, 30, 0, 0, 0, 5, 3, 1, 'Les Glenns de guerre sont des glenns entrainés et ayant reçu certaines conditions génétiques à la naissance. Ils sont plus gros et forts que les Glenns normaux.\r\n\r\nActifs : \r\n-Charge portée: (-2rage), additionne la force du glenn et la moitié de celle de son monteur pour les infliger en dégâts.\r\n\r\n-Force brute : (-X Rage et - X Pv), + x * 10% de dégâts suppl.', '', '1m70', 'creature', ''),
(14, 'Naga', 45, 24, 35, 25, 20, 6, 0, 0, 0, 2, 'Les Nagas sont des habitants des abysses. Particulièrement agressifs ils sont craint de par leur nombre et leur ténacité. Ils attaquent les navires marchants en nombre et préfèrent les eaux chaudes pour s\'y reproduire. Armés de tridents ou de lances.\r\nUne glande du cerveau des Nagas peut être utilisé pour des potions de mana.\r\nLeur reine est une spécialiste de la magie de l\'eau.\r\n\r\nActifs:\r\nTribal méerin : (-3 mana) + 2 force sur 2 tours\r\nSphère d\'eau : Sphère d\'au propulsée rapidement, faibles dégâts mais éjection forte.\r\n\r\nPassifs:\r\nVigueur de l\'océan: peuvent fuir vers l\'eau pour regen 5Pv/tours.', 'naga.jpg\r\n', '1m50', 'creature', ''),
(15, 'Ethel', 400, 60, 15, 0, 40, 5, 5, 5, 3, 1, 'Grande vouivre des mers aux allures du serpent Mécano-Chercheur (de mtg). Les Ethels sont voraces mais ne se batteront pas jusqu\'à la mort. Elles préféreront fuir que mourir si elles pensent n\'avoir aucune chance.', 'Ethel.jpg', '50m de long', 'creature', ''),
(16, 'Zelgan', 40, 2, 10, 15, 2, 8, 10, 5, 0, 0, 'Description du Zelgan', 'zelgan.jpg', '1m10', 'race', ''),
(17, 'Tatooan', 48, 5, 8, 13, 1, 2, 5, 5, 4, 0, '', 'tatooan.jpg', '3m50', 'race', ''),
(18, 'Kaldrinn', 40, 4, 13, 13, 1, 2, 2, 6, 4, 0, '', 'kaldrinn.jpg', '2m15', 'race', ''),
(19, 'Nain', 40, 2, 10, 15, 1, 1, 4, 4, 2, 4, 'Description des nains', 'nain.jpg', '1m30', 'race', ''),
(20, 'Dwaln', 32, 2, 15, 15, 2, 8, 10, 4, 0, 0, 'Description des Dwalns', 'dwaln.jpg', '1m70', 'race', ''),
(21, 'Orlan', 40, 3, 10, 10, 3, 10, 8, 4, 0, 0, 'Description des orlans', 'orlan.jpg', '1m70', 'race', ''),
(22, 'Folg', 24, 1, 14, 8, 3, 15, 8, 0, 0, 0, 'Description des Folgs', 'folg.jpg', '2m10', 'race', ''),
(23, 'Seilen', 28, 1, 10, 10, 5, 15, 10, 3, 0, 8, 'Description des seilens', 'seilen.jpg', '1m50', 'race', ''),
(24, 'Frinl', 60, 4, 5, 5, 2, 8, 4, 6, 4, 0, 'Description des Frinls', 'frinl.jpg', '2m20', 'race', ''),
(25, 'Nelgen', 40, 2, 15, 15, 1, 8, 10, 4, 0, 0, 'Description des Nelgens', 'nelgen.jpg', '2m50', 'race', ''),
(26, 'Sedlheim', 32, 3, 15, 15, 3, 12, 12, 5, 0, 0, 'Description des Sedlheims', 'sedlheim.jpg', '2m10', 'race', ''),
(27, 'Paladin', 28, 0, -4, 0, 0, 1, 0, 0, 4, 4, '-Bonus : +2vie Si -2Dex (trigger once)\r\n-Capa = soin, bouclier magique, buffs\r\n-Passif = Imposant (+10% de réussite des négociations, -25% de discrétion), \r\nUtilisateur de mana\r\n', '', '', 'classe', 'Guerrier'),
(28, 'Adepte', 24, 1, 2, -1, 0, 0, 0, 1, 4, 4, 'Bonus : +3pts a répartir n’importe où,\r\n +10% Ville/foret/montagne, \r\nCapas : Interruption(2/3 d’annuler un sort (1 par combat, coute 2rage), rugissement(5mana, reduit de 10 l initiative des ennemis pdt le combat),\r\nUtilisateur de mana', '', '', 'classe', 'Guerrier'),
(29, 'Templier', 24, 2, 2, 0, 0, 0, 0, 0, 0, 8, 'Bonus : +15% Ville/Mer \r\nCapa : purification(degats +5 dégâts contre morts-vivants, convertissement + chance enrôler des mercenaires, bouclier humain, Utilisateur de mana', '', '', 'classe', 'Guerrier'),
(30, 'Chevalier', 12, 0, 0, 0, 0, 0, 0, 2, 4, 0, 'Bonus : +15% sur montures\r\n\r\nCapa : super-charge (si impair : +25% de dégats sup),2X attaques si monture', '', '', 'classe', 'Guerrier'),
(31, 'Tirailleur', 8, 1, 3, 0, 0, 0, 0, 2, 0, 4, 'Bonus : +10%cad,\r\nCapa : canardage(tir + dé6/2 munitions gratuite)(-4rage)\r\n', '', '', 'classe', 'Guerrier'),
(32, 'Marin', 12, 1, 0, 0, 0, 0, 0, 2, 4, 0, 'Bonus :+100% Lac/Mer,\r\nCapa : (enlacement(cordes))', '', '', 'classe', 'Guerrier'),
(33, 'Fantassin', 12, 1, -2, 0, 0, 0, 0, 2, 0, 0, 'Bonus : +10%cac,\r\ncapa : épée divine(-2 rage: buff son arme pour creer des attaques lumière/feu), tourbilol', '', '', 'classe', 'Guerrier'),
(34, 'Berserker', 4, 2, -2, 0, 0, 0, 0, 4, 0, 0, 'Bonus : +0.5F par coup /coup pris,\r\nCapa : Vengeance (-3rage, -2PV (1/2 de contre attaquer après une attaque ),multicoup(x+2 rage pour x coups).', '', '', 'classe', 'Guerrier'),
(35, 'Pugiliste', 8, 2, 0, 2, 0, 0, 0, 2, 0, 0, 'Bonus :+1force par vie perdue pdt combat (multicoup,grosse baffe)', '', '', 'classe', 'Guerrier'),
(36, 'Guérisseur', 0, 0, 0, 0, 2, 5, 0, 0, 0, 4, 'Apothicaire (connaissances des potions),\r\nManiement feu, eau ou lumière.\r\nBonus : Foret+15%.\r\nSorts : soin de zone, buffs, Bouclier anti-magie(résistance a la magie(degats – 25%).', '', '', 'classe', 'Mage'),
(37, 'Croisé', 8, 0, 0, 0, 2, 2, 0, 0, 0, 4, 'Bonus :Inspiration (« Les ennemis de l’églises périront»)+2 ATK pour l’équipe. Capa : \r\nEnchantement (+2 force/magie/init), Protection (encaisse les dégâts /2)\r\n\r\nAttention on ne peut porter qu un équipement enchanté par personne', '', '', 'classe', 'Mage'),
(38, 'Prêtre', 0, 0, 0, 0, 4, 2, 0, 0, 0, 4, 'Bonus :Bonus Ville+30%/église\r\nCapa : Buffs de zone, soins, conjuration (supprime les altérations d’état', '', '', 'classe', 'Mage'),
(39, 'Exorciste ', 4, 0, -1, 0, 2, 4, 0, 0, 0, 0, 'Passif : Armure+ 2 contre non-vivants, quasi-insensible aux sorts des ténèbres\r\nBonus : Ville/Zone Lumiére +10% \r\nCapa : Conjuration de Zone (ultra efficace vs morts et démon)\r\n', '', '', 'classe', 'Mage'),
(40, 'Pyromancien', 8, 0, -2, 0, 5, 2, 0, 0, 0, 0, 'Passif : Résistance au feu X (x=le lvl)-> + x armure contre feu.\r\nBonus : terres de cendre+25%.\r\n\r\nActifs : mur de feu, boule de feu, armageddon, etc...', '', '', 'classe', 'Mage'),
(41, 'Aeromancien', 8, 0, 2, 4, 2, 1, 0, 0, 0, 0, 'Bonus :Montagne/plaines+25% \r\nActifs : buffs vitesse, altération fatigue, stase de zone, onde de choc, implosion', '', '', 'classe', 'Mage'),
(42, 'Geomancien', 20, 2, 0, -1, 2, 0, 0, 0, 1, 1, 'Bonus : Montagne+15%,\r\n+1vie quand équipe combat en montagne \r\n\r\nActifs : buffs de défense/ force, jet de pierres, écrasement', '', '', 'classe', 'Mage'),
(43, 'Hydromancien', 8, 0, 0, 6, 2, 3, 0, 0, 0, 3, 'Bonus :Mer/Lac/Riviére+10% \r\nActifs : piques de glace, nova incapacitante(ennemis gelés),soins partiels, mur de glace', '', '', 'classe', 'Mage'),
(44, 'Necromancien', 0, 0, 0, 0, 5, 3, 0, 0, 0, 2, 'Bonus :Nuit+10%/Fin de combat+2% par morts (résurrection des morts/alliés, Balle d’ombre, rétrécissement)', '', '', 'classe', 'Mage'),
(45, 'Maleficien', -8, 0, 2, 0, 7, 0, 0, 0, 0, 1, 'Bonus :Nuit+10%\r\nActifs : nbr ennemis(+5Magie/ennemis) (sorts : pareils que pyromancien mais version ténébre', '', '', 'classe', 'Mage'),
(46, 'Ensorceleur', 4, 0, 0, 0, 5, 2, 0, 0, 0, 0, 'Bonus :Nuit+10%\r\nActifs: nbr ennemis(+1 Mana/ennemis)(Mégalteration de zone(fatigue,faiblesse,peur,peste)+invoc de 2 familiers d’atk)', '', '', 'classe', 'Mage'),
(47, 'Démonologue', 0, 0, 0, 4, 5, 1, 0, 0, 0, 1, 'Bonus : Nuit+15% \r\nActifs : invocation de démons, transformation partielle/entière en démon, Portails de TP', '', '', 'classe', 'Mage'),
(48, 'Dompteur', 10, 0, 6, 2, 0, 0, 3, 0, 2, 0, 'Bonus : peut capturer une créature type bête (25%)\r\n\r\nActifs : \r\n-Saut (saute et inflige lvl+Force+Symbiose de dégâts autour)(-3 sym)\r\n-Hurlement (1/2 de faire passer un tour a un ennemis) (4sym)', '', '', 'classe', 'Roublard'),
(49, 'Chasseur', 4, 1, 5, 8, 0, 0, 3, 0, 3, 0, 'Bonus : atk*2 contre les bêtes,\r\n+2 déplacement hors combats\r\n\r\nActifs : \r\n-Peut apprivoiser des oiseaux (1/2)(3 sym)\r\n-affronter un ennemis déjà affronte = bonus de dégâts/résistance', '', '', 'classe', 'Roublard'),
(50, 'Braconnier', 6, 0, 6, 2, 0, 0, 3, 0, 0, 2, 'Bonus :peut poser/fabriquer des pièges\r\n(bombes,pièges électriques, flèches tranquillisante)\r\nFabrication d armes, sacs, etc\r\nRéduction des prix de 10%', '', '', 'classe', 'Roublard'),
(51, 'Rodeur', 4, 2, 5, 2, 0, 0, 3, 0, 1, 1, 'Bonus : augmente l’efficacité des potions (5vie au lieu de 3)+fabrication de potions\r\n\r\nActifs : \r\nTorpeur : Peut endormir 1 ennemis pdt 2 tours (1/2, + 4 sym)', '', '', 'classe', 'Roublard'),
(52, 'Crocheteur', -2, 1, 10, 4, 0, 0, 0, 0, 0, 1, 'Bonus : attaque 2 fois si proximité avec ville (consomme 2 sym)', '', '', 'classe', 'Roublard'),
(53, 'Pickpocket', -2, 0, 13, 1, 0, 0, 0, 0, 1, 0, '', '', '', 'classe', 'Roublard'),
(54, 'Acrobate', 3, 1, 12, 2, 0, 0, 0, 0, 0, 0, 'Bonus : min 40dext en ville ; +20dext en forêt', '', '', 'classe', 'Roublard'),
(55, 'Assassin', 8, 3, 5, 6, 0, 0, 2, 0, 1, 1, '-50% d’avoir une attaque surprise a chaque combat (sauf contre créature de rang supérieur)\r\n\r\n-Analyse Weakness(1/3 et -5 symbiose) pour connaitre la faiblesse du monstre (dégâts + 25%)', '', '', 'classe', 'Roublard'),
(56, 'Empoisonneur', 8, 2, 5, 4, 0, 0, 1, 0, 0, 0, 'Bonus : +25% de dégats contre les cibles biologiques (1/3 chance de faire 50%) sous forme de poison', '', '', 'classe', 'Roublard'),
(57, 'Duelliste', 8, 3, 6, 1, 0, 0, 1, 0, 1, 1, 'Passif : 20% de force au cac', '', '', 'classe', 'Roublard'),
(58, 'Druide de Loess (terre) :', 4, 2, 0, 0, 1, 1, 1, 0, 1, 1, 'Bonus : Résonnance environnementale  (si foret , possibilité de se regen en utilisant les arbres)(- 5sym)\r\n\r\nActifs : \r\n50%de psn (-1 sym),\r\n50% de gros recul (-1sym ;-2Man),\r\nCréation de mur : -4mana,\r\nCréation de stalagmite de terre :-5mana,', '', '', 'classe', 'Guerrier'),
(59, 'Druide du Zéphire (air) ', 4, 0, 1, 0, 1, 1, 1, 0, 0, 0, 'Actifs : \r\n15% de stun(-2sym)\r\nMinivol (quand tu veux ;+15dext + éjection -5mana)\r\nVent violent (-2sym – 2mana : fait reculer les ennemis grouper + dispersement)', '', '', 'classe', 'Roublard'),
(60, 'Druide fioruisge (eau) ', 4, 0, 0, 2, 1, 1, 1, 0, 0, 1, '50%de tranchant (dégâts/4 sur un ennemis proche)\r\nContrôle de l’eau\r\nChangement d’etat (-2mana) eau ->gaz, liquide , solide', '', '', 'classe', 'Mage'),
(61, 'Spider-Drone', 30, 12, 15, 10, 0, 0, 0, 0, 2, 0, 'Les ouvrières sont de grosses araignées ayant pour principal but de s\'occuper des tâches primaires de la ruche: nourriture, reproduction, élevage.\r\n\r\nPassifs : Applique poison 1 (-4pv / 1 tour)', 'Spider_drone.jpg', '1m20', 'creature', ''),
(62, 'Spider-Warrior', 80, 24, 35, 20, 0, 0, 0, 0, 7, 0, 'Les Guerrières sont bien plus robustes que les ouvrières et ont pour unique tache la défense de la colonie (elles sont peut nombreuses).\r\n \r\n\r\nPassifs : Applique poison 2 (-8pv / 2 tour)', 'Spider_warrior.jpg', '1m70', 'creature', ''),
(63, 'Spider-Support', 60, 10, 20, 20, 0, 0, 0, 0, 4, 2, 'Les support sont des araignées spéciales, elles enlisent leurs adversaires et soignent leurs alliées.\r\n\r\nPassifs:\r\n-Les supports envoient un gel visqueux a distance, soignant de 12pv une araignée ou reduisant de 50% les déplacements du joueur', 'Spider_support.jpg', '1m30', 'creature', ''),
(64, 'Spider-Chancre', 35, 16, 0, 0, 0, 0, 0, 0, 0, 0, 'Les araignées explosives sont des ouvrières mutées par la reine. Celles-ci servent seulement à l\'éradication de menaces que les guerrières ne peuvent résoudre seules.\r\n\r\nPassif: l\'explosion provoquée à leur mort applique Poison 3 (-12Pv/ 3 tours)', 'Spider_poisonous.jpg', '1m10', 'creature', ''),
(65, 'Spider-Queen', 450, 28, 20, 40, 0, 0, 0, 0, 7, 4, 'La reine des araignées est l\'âme même de la colonie, sans elle, les autres araignées sont désorganisées.\r\n\r\nPassifs : Attaque 2 fois:\r\n-Une attaque au cac qui inflige poison 2\r\n-Une attaque à distance (jet de dard)(dégats de 15) qui applique enlisement et poison 2\r\n', 'Spider_queen.jpg', '2m20', 'creature', ''),
(66, 'Serpents géants', 100, 20, 25, 20, 0, 0, 0, 0, 4, 2, 'Un gigantesque serpent qui gobe ses proies et les laisses mourir dans son estomac.', 'giant_snake.jpg', '15m de long', 'creature', ''),
(67, 'Coureur Freaf-grimpant', 8, 7, 40, 20, 0, 0, 0, 0, 0, 0, 'Particulièrement faible seule, les coureurs Freaf préfèrent des déplacements en meute de 40 à 50 individus. Ils jaugent la force de leur proie en envoyant l\'un d\'entre eux en observateur avant d\'encercler cette dernière et d\'attaquer.\r\n', 'Coureur_freaf_grimpant.jpg', '30cm', 'creature', ''),
(68, 'Monstruosite Freaf-grimpante', 80, 15, 10, 30, 0, 0, 5, 0, 8, 8, 'Les monstruosité Freaf-grimpant sont à l\'origine des Ents qui ont été contaminés par les composants chimiques du vaisseau Nelgen et la magie noire des \'Aspects\'. Ils obéissent seulement à Mittgenheim, l\'abomination-esprit.\r\n\r\nPassifs:\r\nSi l\'attaque réussit, la 1ére plante au dessus de leur tête frappe (force/2) et si l\'attaque réussi, la derniére tête tape aussi (force/3).', 'Monstruosite_Freaf_grimpante.png', '4m50', 'creature', ''),
(69, 'Mittgenheim-Carcasse', 10000, 300, 0, 0, 0, 0, 0, 0, 200, 200, 'Mittgenheim ou l\'Abomination-Esprit est à l\'origine l\'aspect de la peur ayant fusionné avec l\'Yggdrasil contaminé par les composants chimiques du vaisseau Nelgen.\r\n150 ans ont fallut à cette monstruosité pour devenir ce colosse ayant la volonté de corrompre le monde.\r\n\r\nPassifs: \r\n-Aspect de la peur : Toute entité attaquant Mittgenheim volontairement ne pourra plus s\'enfuir à moins que l\'abomination-esprit ne soit défaite.\r\n-Timor : Toute entité en contact avec Mittgenheim reçoit un compteur \'Peur\'(cf l\'aspect de la peur pour son fonctionnement).\r\n-Frappes cataclysmiques : les attaques de La carcasse fendent le sol et réduisent à néant les mètres se trouvant sous ses poings.\r\n', 'Mittgenheim.jpg', '150m', 'creature', ''),
(70, 'Mittgenheim-Esprit', 1, 0, 0, 50, 50, 10000, 10000, 10000, 0, 0, 'Mittgenheim-Esprit est indépendante de la carcasse et se rattache au système \'immunitaire\' de cette dernière. Elle invoquera des créatures, dressera des pièges empoisonnés et tentera de détruire toute entité la pénétrant. (2 phase : phase externe, et phase interne).\r\n\r\nPhase externe : \r\nActifs (au début de chaque combat lance un sort : ): \r\n- Invocation de (Bruches * 4, larves de peur * 4, ents de peste * 2,Monstruosité freaf-grimpant *2 et coureurs freaf-grimpants * 8).\r\n- Malédiction ( faiblesse (-25%degats), fatigue (1/4 de sleep), poison2 ( -8pv/2tours)).\r\n- Création de : (nuage toxique : applique poison 2, jet de perception pour le détecter avec contamination).\r\n- Racine transperçante : racine sortent du sol et transpercent x joueurs (dé4) et infligent 35 max).\r\n\r\nPhase interne : \r\nActifs (au début de chaque salle lance un sort : ): \r\n- Invocation de (Bruches * 4, larves de peur * 4, ents de peste * 2,Monstruosité freaf-grimpant *2 et coureurs freaf-grimpants * 8).\r\n- Malédiction ( faiblesse (-25%degats), fatigue (1/4 de sleep), poison2 ( -8pv/2tours)).\r\n- Création de : (nuage toxique : applique poison 2, jet de perception pour le détecter avec contamination).\r\n- Racine transperçante : racine sortent du sol et transpercent x joueurs (dé4) et infligent 35 max).\r\n-hex de peur (dé4 de peur pour chaque joueur)\r\n-Lien drainant (dé 3 pour chaque joueur : lient ensemble tous les joueurs ayant fait le même résultat (de fréquence la plus haute). ils perdent 4pv/tours et perdent 8Pv si ils le coupent (-8pv pour les 2 joueurs liés aux extrémités).\r\n\r\nPassif : créateur de a peur :\r\n- a chaque fois qu\'un joueur subit des dégâts, il augmente de 1 la jauge de peur', 'Mittgenheim.jpg', '0m', 'creature', ''),
(71, 'Larve de peur', 50, 12, 10, 80, 0, 0, 0, 0, 0, 0, 'Les larves de peur sont des créatures créées par Mittgenheim pour se défendre. Celle-ci se cachent sous le sol et attendent une proie, elle sort sous ses pieds et le dévore. Elle n’attaque pas fort mais vite, ce qui lui permet d\'attaquer 2 fois par tours).', 'Larve_de_peur.jpg', '1m40', 'creature', ''),
(72, 'Ent pestiféré', 75, 20, 0, 30, 0, 0, 10, 0, 5, 5, 'Les ents de peste sont des sapeurs, ils vont affaiblir les joueurs en les entravant ou en les empoisonnant.\r\n\r\nEntrave : invoque des lianes qui empêchent le joueur de bouger. (-5 symbiose)\r\n\r\nPoison3 : lance poisont 3 sur un joueur (-12 pv par tours pendant 3 tours)(-5 symbiose)\r\n', 'Ent_de_peste.jpg', '3m', 'creature', ''),
(73, 'Bruche instable', 10, 1, 10, 10, 0, 0, 0, 0, 0, 0, 'Les bruches sont des insectes repérant les intrus avec les marqueurs peurs. Elles visent celui en ayant le plus afin de le tuer et permettre à Mittgenheim de le contrôler.\r\n\r\nActifs : \r\nBoom : explosent en rependant un poison brûlant.(dégats = 30)', 'Bruche_instable.jpg', '1m', 'creature', ''),
(74, 'Mimic de Spore', 60, 15, 15, 50, 0, 0, 0, 0, 10, 0, 'Le Mimic des spores et une créature pernissieuse ressemblant trait pour trait à un vieux coffre en bois enlisé dans les branchages et les lianes.\r\n\r\nActifs : \r\nQuand on s\'approche du Mimic des Spores il lâche jusqu\'à 5 m autour de lui un violent poison appliquant Poison 3 (-12hp/3tours)', 'Mimic_de_spores.jpg', '80 cm', 'creature', ''),
(75, 'Gardien des sources', 200, 25, 0, 40, 0, 0, 10, 0, 0, 0, 'Le Gardien des sources se trouve exclusivement dans les terrains de spore des forêts enchantées. Le Gardien des sources est malin et attends que ses proies se situent proche de la fontaine pour les attaquer. Il commence le combat en expulsant des trous autour de lui des spores appliquant poison 1 à toutes autre entité et réduisant considérablement la visibilité. (Max vision : 5m devant toi).\r\n\r\nPassif : Haute regen : tant que le gardien des sources possède une de ses \"lianes\" dans la source, il régénère 20hp/tour\r\n\r\nActifs : \r\n- Agression lethargique : (-10 symbiose) Chaque joueur lance un dé6 (seulement si le joueur est affecté par poison 1 ). En fonction du résultat : (1-3 = rien, 4-5 : Poison 2)(6 : torpeur (chaque tour : 1/3 de s\'endormir)\r\n\r\nLoot : \r\n-Coeur de Gardien des sources : artefact transformant un membre de son possesseur en bras-plante-biologique pouvant s\'allonger, appliquer poison2 aux entités qu\'il touche et rendant invulnérable au poison son possesseur. Il peut etre retiré en enlevant l\'artefact(pierre rose) du bras de son possesseur (celui-ci peut être détruit lors de l\'extraction).', 'gardien_des_sources.jpg', '3m', 'creature', ''),
(76, 'Liche de sang', 20, 0, 35, 0, 35, 100, 0, 0, 0, 8, 'Les liches de sang sont des entités très rares qui apparaissent principalement lors des lunes de sang. Elles manipulent le comportement de leurs adversaire, sapent le moral et altèrent la perception. Les dégats qu\'elles infligent proviennent des auto-mutilation de ses adversaires liés à ses hallucinations ou bien des javelots et autre projectiles de sang qu\'elle envoie.\r\n\r\nPassifs : \r\n-Vice de sang : la liche ne peut pas perdre plus de 1 pv/coup.\r\n-La liche regen 1hp par effusion de sang lors du combat.\r\n-Lanceur de sorts multiples initiateur : 2 actions le même tour si c\'est le premier.\r\n\r\nActifs : \r\n-Gangrène de masse: (-10 mana) : action réalisé par la liche souvent au début du combat, chaque joueur lance un dé6 et n\'est pas affecté si il fait 1 ou 2. Les joueurs affectés auront des hallucinations suivant leur résultat de dé d\'action (ennemis inexistants, alliés devenant des monstres, copies hallucinés de la liche).\r\n\r\n-Altération comportementale de masse: (-10 mana) : action réalisé par la liche au début du combat, chaque joueur lance un dé6 et sera affecté si il fait 3 ou plus (3 compris). \r\n3 = Effrayé, aura très peur des hallucinations, \r\n4 = Folie, aura plus d\'hallucination, \r\n5 = tourmenté, perte de sang froid,\r\n6 = fatigué, +2 au jets de dés\r\n', 'liche_de_sang.jpg', '2m10', 'creature', ''),
(77, 'Sangtipédes', 120, 25, 15, 30, 0, 0, 0, 0, 6, 4, 'Les Sangtipédes sont de grands vers apparaissant lors des lunes de sang. Ils repèrent leur cible par vibration (ils agressent celui qui bouge le plus ou provoque le plus de vibrations).\r\nIls ne sont pas très dur à tuer mais leur charge souterraine fait d\'eux des adversaires respectables.', 'blood_worm.jpg', '20m', 'creature', ''),
(78, 'Elementaires de sang', 30, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Les Elementaires de sang sont de petits esprits rouges apparaissant lors des lunes de sang. Ceux-ci sont créés à partir du sang sur le sol. Particulièrement instables ils explosent si la personne dont le sang ayant permis leur création est proche d\'eux(ou si ils meurent). Ils ne bougent pas vraiment mais flottent et s’élèvent vers le ciel progressivement.\r\n\r\nPassif : \r\n-Liqueux : Insensible aux atk physiques.\r\n\r\nActifs : \r\n-Explosion : inflige 40 dégâts sur 10 m (dégâts se réduisant sur la distance (réduction de 30 dégâts au max).', 'blood_elemental.png', '20cm', 'creature', ''),
(79, 'Termadraagks', 45, 30, 30, 30, 0, 0, 0, 0, 8, 0, 'Les Termadraagks sont des Galadraagks plus forts. Techniquement, c\'est la magie du sang qui à transformé des galadraagks normaux en Termadraagks. Ainsi, ils deviennent plus robustes et agressifs. Ils ne chassent plus en meute car ils deviennent incapable de vivre entre eux.\r\n\r\nPassifs :\r\n-Rage intense : prendre un coup augmente la force de 5. ', 'Termadraagks.jpg', '1m80', 'creature', ''),
(80, 'Hémo, Aspect du sang.', 2000, 50, 0, 0, 50, 0, 0, 0, 0, 0, 'Hémo est un Aspect, soit une ancienne divinité réveillée. Elle ressemble à un humain recouvert d\'un sang ductile infinie (ou presque).\r\n\r\nPassifs : \r\n-Divinité du sang : tant que le sang recouvre son corps, Hémo est intuable.\r\n-Les sorts lancés par Hemo coûtent des points de vie, il en regen en fonctions des effusions de sang qu\'il provoque (50pv par touche).\r\n-Faiblesses de sang : \r\n-Glace, médicament qui liquéfie le sang.\r\n-Instable : -50pv/tours\r\n-Lanceur de sort rapide : 2 sorts/actions par tour.\r\n\r\nActifs : \r\n-Blood grap : envoit tout autour de lui une multitude de billes de sang. Chaque bille enlève 5hp (l\'armure est prise en compte qu\'aprés la somme des touches) et il y a 1 bille par 50cm² (coût = -200Pv)\r\n\r\n-Lance de sang : Lance une lance qui transperce le permier joueur qu\'elle touche et lui inflige 25 dégats. La lance reste en contact avec le joueur tant qu\'elle n\'est pas retirée et lui inflige 10 dégats / tours. (coût = -150Pv)\r\n\r\n-Invocation d’élémentaires de sang : invoque 1 dé6 élémentaires de sang à partir du sang des joueurs versé. Les élémentaires restent autour de l\'aspect du sang pour le protéger. (coût = -100Pv)\r\n\r\n-Flagellation : Hemo rentre dans le sol et ressort derrière un joueur (au hasard) et lui inflige 40 dégâts phy (coût = -150 PV)\r\n\r\n-Corps epineux : Le corps d\'Hemo devient épineux et les joueurs perdent 10hp en le frappant (les piques réagissent et sont tirés en direction du joueur tapant).(coûts = -250hp)\r\n\r\n-Alteration sanguine de masse : tous les joueurs lancent 1 dé6 et obtiennent en fonction du resultat :\r\n-1 : rien,\r\n-2 : faiblesse (dégâts - 20%),\r\n-3 : peste3 : -12hp/3 tours,\r\n-4 : Cauchemar : ont des hallucinations,\r\n-5 : rien,\r\n-6 : rien\r\n\r\nLoot : \r\nAnneau du sang : Anneau permettant de regen des hp a partir de n\'importe quel sang (entre 20 et 40 pv par utilisations) et de manière passive.\r\n', 'Hemo.jpg', '1m75', 'creature', ''),
(81, 'Alpee', 20, 2, 20, 10, 0, 0, 0, 0, 0, 0, '', 'Alpee.jpg', '1m', 'creature', ''),
(82, 'Alpolg', 45, 10, 25, 20, 0, 0, 0, 0, 4, 0, '', 'Alpolg.jpg', '2m', 'creature', '');

-- --------------------------------------------------------

--
-- Structure de la table `entity_type`
--

CREATE TABLE `entity_type` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

CREATE TABLE `events` (
  `id` int(6) NOT NULL,
  `Titre` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `Image` varchar(50) NOT NULL,
  `Biome` int(6) NOT NULL,
  `loot` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `Titre`, `Description`, `Image`, `Biome`, `loot`) VALUES
(1, 'Découverte d\'un coffre flottant', 'Contient souvent des étoffes de qualité ou des épices, des bourses, des herbes médicinales, parfois un artefact : \r\n\r\n', 'treasure_ocean.jpg', 6, 'Dés 10:\r\n1-3 = étoffes/épices\r\n4-7 = golds (8 + dé 6)\r\n7-9 = herbes\r\n10 = artos mineur'),
(2, 'Découverte d\'un vieux coffre', 'Coffre de bois un peu pourri contenant souvent des étoffes de qualité ou des épices, des bourses (Zelgans) sinon seulement des herbes ou des potions(Seilens)\r\n\r\n', 'treasure_swamp.jpg', 7, 'Dés 10:\r\n1-3 = étoffes/épices\r\n4-10 = golds (12 + dé 10)\r\n\r\nDés 10:\r\n1-3 = potions\r\n4-10 = herbes(2 + dé 4)'),
(3, 'Découverte d\'un coffre de glace', 'Les coffres de glaces, des contrées gelées contiennent bien souvent des artefacts ou des herbes/ vêtements chauds pour survivre dans ces contrées.\r\n', 'treasure_toundra.jpg', 8, 'Dés 10:\r\n1-3 = vétements\r\n4-5 = golds (5 + dé 6)\r\n6-9 = Oulée\r\n10 = Parchemin de gel instantané(1/2 de geler celui qui ouvre le coffre)'),
(4, 'Apparition d\'une tempête', 'Tempête de niveau X (x = dé 4). En fonction de son intensité : \r\n-1 -> une tempête de niveau 1 augmentera la taille des vagues, fera pleuvoir la pluie. Prévoir un petit vent.\r\n-2 -> une tempête de niveau 2 augmentera la taille des vagues, fera pleuvoir beaucoup de pluie. Prévoir un vent moyen.\r\n-3 -> une tempête de niveau 3 augmentera la taille des vagues, fera pleuvoir beaucoup de pluie. Prévoir un vent moyen et des éclairs.\r\n-4 -> une tempête de niveau 4 = cataclysme', 'tempest.jpg', 6, 'Nada'),
(12, 'Attaque de Nagas', 'Condition : être sur bateau sur l\'Ocean\r\n\r\nAttaque de Nagas (3 + dé 4).\r\n1/6 Présence de Naga Elite (*1)pour diriger l\'attaque.\r\n\r\nLes Nagas focusent les cibles légères pour les éjecter.', '../creatures/naga.jpg', 6, 'Tridents, bijou doré possédés par les Nagas ou lances.\r\nUne glande du cerveau des Nagas peut être utilisé pour des potions de mana'),
(11, 'Découverte de Taniére des naga', 'Conditions : Eaux chaudes, Proximité de l\'Océan ou dans l\'Océan.\r\n\r\nDécouverte d\'une caverne de Naga (Donjon)\r\nLes cavernes de Naga sont leur seul lieu de reproduction. Elles y abritent leurs bassins d\'incubation ainsi qu\'une petite partie de leur trésor destiné à leur progéniture. Il s\'y trouve aussi parfois la reine (1/4) et dans ce cas le nombre de naga augmente drastiquement (+présence de naga élites)(naga élite et naga de haut lvl).', 'naga_lair.jpg', 6, 'Richesse : (40-100 dragons)\r\nArmes et protections du torse, des épaules et des bras\r\nArtos\r\nUne glande du cerveau des Nagas peut être utilisé pour des potions de mana'),
(13, 'Découverte d\'un Mimic de Spore', 'Mimic à l\'apparence d\'un vieux coffre de bois enlisé dans des lianes et autres plantes grimpantes.\r\nIl ne contient ni or ni armes mais de grosses dents et une longue langue.', 'Mimic_de_spores.jpg', 17, 'Bave de Mimic (Quantité: Abondante)'),
(14, 'Terrain de Spore', 'Le terrain de spore et une zone plutôt dégagée des forêts magiques. L\'herbe y est verte-bleue et des trous (genre trous de taupes) sont un peu partout. Au milieu du terrain de spore se trouve en principe une source d\'eau pure ayant de grandes propriétés thérapeutiques anti-altérations.\r\nCependant, prends garde voyageur à la créature la protégeant. (cf gardien des sources)', 'Terrain_de_spore.jpg', 17, '-Eau de fontaine d\'eau pure (quantité = infinie)\r\n-Coeur de Gardien des sources : artefact transformant un membre de son possesseur en bras-plante-biologique pouvant s\'allonger, appliquer poison2 aux entités qu\'il touche et rendant invulnérable au poison son possesseur. Il peut etre retiré en enlevant l\'artefact(pierre rose) du bras de son possesseur (celui-ci peut être détruit lors de l\'extraction).'),
(15, 'Attaque de creatures', 'De mystérieuses créatures de la forêt attaquent (cf creatures biome foret magique). ', '', 17, 'Dépend des creatures'),
(16, 'Lune de sang', 'La Lune de sang est un événement spécial ou la lune est de couleur rousse. Durant cette nuit, les monstres ont 1-2 levels de plus, sont très agressifs et plus nombreux. Une une de sang peu de ce fait être un événement très dangereux.\r\n\r\nLes mobs présent lors des lunes de sang : \r\n-Liche de sang\r\n-Sangtipédes\r\n-Hémo, Aspect du sang (boss)\r\n-Elementaires de sang\r\n-Termadraagks\r\n-Larves de peur', 'blood_moon.jpg', 11, 'Tout dépend de ce qu\'il y a sur les mobs tués');

-- --------------------------------------------------------

--
-- Structure de la table `habiter`
--

CREATE TABLE `habiter` (
  `id` int(6) NOT NULL,
  `biomeId` int(6) NOT NULL,
  `entityId` int(6) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `habiter`
--

INSERT INTO `habiter` (`id`, `biomeId`, `entityId`) VALUES
(1, 14, 1),
(2, 17, 1),
(3, 14, 3),
(4, 17, 3),
(5, 14, 4),
(6, 17, 4),
(7, 17, 5),
(8, 14, 5),
(9, 9, 6),
(10, 12, 6),
(11, 18, 6),
(12, 15, 7),
(13, 9, 8),
(14, 13, 8),
(15, 18, 8),
(16, 13, 9),
(17, 12, 10),
(18, 13, 10),
(19, 17, 10),
(20, 19, 11),
(21, 11, 11),
(22, 9, 11),
(23, 6, 12),
(24, 20, 12),
(25, 6, 13),
(26, 12, 13),
(27, 20, 13),
(28, 6, 14),
(29, 20, 15),
(30, 6, 15),
(31, 16, 61),
(32, 16, 62),
(33, 16, 63),
(34, 16, 64),
(35, 16, 65),
(36, 16, 66),
(37, 14, 66),
(38, 7, 66),
(39, 17, 67),
(40, 17, 68),
(41, 17, 69),
(42, 17, 70),
(43, 17, 71),
(44, 17, 72),
(45, 17, 73),
(46, 11, 71),
(47, 17, 74),
(48, 17, 75),
(49, 11, 76),
(50, 11, 77),
(51, 11, 78),
(52, 11, 79),
(53, 11, 80),
(54, 14, 81),
(55, 17, 82),
(56, 14, 82),
(57, 17, 81);

-- --------------------------------------------------------

--
-- Structure de la table `level`
--

CREATE TABLE `level` (
  `id` int(11) NOT NULL,
  `Name` varchar(35) NOT NULL,
  `Vie` int(2) NOT NULL,
  `Force` int(2) NOT NULL,
  `Dext` int(2) NOT NULL,
  `Init` int(2) NOT NULL,
  `Magie` int(2) NOT NULL,
  `Mana` int(2) NOT NULL,
  `Symbiose` int(2) NOT NULL,
  `Rage` int(2) NOT NULL,
  `Armure_phy` int(2) NOT NULL,
  `Armure_mag` int(2) NOT NULL,
  `Stats` int(2) NOT NULL,
  `Specific` text NOT NULL,
  `unlockAtLevel` int(2) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `level`
--

INSERT INTO `level` (`id`, `Name`, `Vie`, `Force`, `Dext`, `Init`, `Magie`, `Mana`, `Symbiose`, `Rage`, `Armure_phy`, `Armure_mag`, `Stats`, `Specific`, `unlockAtLevel`) VALUES
(1, 'Guerrier', 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', 1),
(2, 'Guerrier', 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, '', 2),
(3, 'Mage', 4, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, '', 1),
(4, 'Guerrier', 0, 1, 0, 2, 0, 0, 0, 0, 0, 0, 1, '', 3),
(5, 'Guerrier', 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, '', 4),
(6, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 'Capacité Heroique de niv5:\r\n-Cris d\'Aggro (70% des ennemis attaquent le lanceur,passif: donne 1 reg pv/tours )(3 rage),\r\n-Tourbilol (25% * Force * Rage en zone)(5 rage),\r\n-Frappe du héro ( 3 prochaines atk = 1.25 * force + rage )(5 rage)', 5),
(7, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, '', 6),
(8, 'Guerrier', 0, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0, '', 7),
(9, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Niveau 8 :\r\n2Force OU 2Vie Ou 4Init', 8),
(10, 'Guerrier', 8, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 9),
(11, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 0, 'Capacité Heroique de niveau10 :\r\n-Shield(4 rage)(Donne un bouclier de 4 PV)\r\n(Non cumulable, trigger quand tu veux)', 10),
(12, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Amélioration de capacité Heroique du niveau11 :\r\n-Shield d\'endurance ( shield * 2 )\r\n-Shield de force ( Force *= 1.5 )\r\n-Shield imprenable ( Dext *= 1.5 )', 11),
(13, 'Guerrier', 8, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, 'Niveau 12 : \r\n-Retirer 4 stats reparties n\'importe ou', 12),
(14, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Niveau 13:\r\n- +4 Regen hp/tour', 13),
(15, 'Guerrier', 12, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 14),
(16, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 2, 0, 0, 8, '', 15),
(17, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Niveau16 :\r\n- +4hp Regen par tour', 16),
(18, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 2, '', 17),
(19, 'Guerrier', 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 18),
(20, 'Guerrier', 2, 2, 2, 2, 0, 0, 0, 0, 0, 0, 0, '', 19),
(21, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Capacité Heroique de niveau 20 : \r\n-50 % de chance de critique (si dés atk < 7 alors dégats + 50%)\r\n- + 3 hp regen par tour\r\n-2 actions par tour', 20),
(22, 'Guerrier', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, '', 21),
(23, 'Guerrier', 1, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, '', 22),
(24, 'Mage', 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 2, '', 2),
(25, 'Mage', 1, 0, 1, 2, 1, 0, 0, 0, 0, 0, 0, '', 3),
(26, 'Mage', 1, 0, 0, 0, 2, 0, 0, 0, 0, 0, 1, '', 4),
(27, 'Mage', 0, 0, 0, 0, 1, 4, 0, 0, 0, 0, 0, 'Capacité Heroique de niv5:\r\n-Dérèglement (-5mana): permet de juxtaposer un deuxième élément aux attaques(3 tours + lvl%10)\r\n-MegaBuff ou MegaDebuff(10 mana): Confére selon 1 dés 6 X buffs/debuffs aux alliés/Ennemis(buff dmg: +/-15%, vitesse +/-25%, santé +/- 12PV, init +/- 10, dext +/- 10 , +/- 20% mana/sym/rage)\r\n-Corruption (5mana, limite de 1 manipulable), 1/2 de corrompre un ennemis pour qu\'il se batte pour le joueur jusqu\'à la fin du combat (aprés il meurt).', 5),
(28, 'Mage', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, '', 6),
(29, 'Mage', 0, 0, 0, 0, 2, 2, 0, 0, 0, 0, 0, '', 7),
(30, 'Mage', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'Niveau 8 :\r\n3Mana OU 2Magie Ou 4Dext', 8),
(31, 'Mage', 8, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', 9),
(32, 'Mage', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'Capacité Heroique de niveau10 :\r\n-Invocation d\'élémentaire(-5 mana): invoque un élémentaire correspondant à la magie de l\'invocateur (possibilité de combo avec Dérèglement) ', 10),
(33, 'Mage', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Amélioration de capacité Heroique du niveau11 :\r\nSpécialisation de l\'élémentaire : \r\n-Lumiére : lance des buffs/soigne\r\n-Saboteur : obtient le debuff Confusion( on atk : 1/4 que n\'importe quelle créa saute son tour, 1/8 pour les boss)\r\n-Persistant: lors de son tour, l\'ennemis perd 25% des dégats infligés au tour précédent par l\'élémentaire (durée 2 tours de persistance)', 11),
(34, 'Mage', 0, 0, 0, 2, 1, 0, 0, 0, 0, 0, 2, '', 12),
(35, 'Mage', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Niveau 13:\r\n- +1 regen Mana/tour\r\n', 13),
(36, 'Mage', 8, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, '', 14),
(37, 'Mage', 0, 0, 0, 0, 2, 2, 0, 0, 0, 0, 8, '', 15),
(38, 'Mage', 0, 0, 0, 0, 1, 0, 0, 0, 0, 0, 0, 'Niveau16 : \r\n- + 1regen Mana/tour', 16),
(39, 'Mage', 4, 0, 0, 0, 1, 1, 0, 0, 0, 0, 1, '', 17),
(40, 'Mage', 4, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, '', 18),
(41, 'Mage', 6, 0, 2, 2, 2, 1, 0, 0, 0, 0, 0, '', 19),
(42, 'Mage', 0, 0, 0, 0, 2, 0, 0, 0, 0, 0, 0, 'Capacité Heroique de niveau 20 :\r\n-Persistance sur tout les sorts (peut combotter avec le soin)(2 tours)\r\n-Maître du Mana(3 regen/ tours)\r\n-Mage de Guerre (+100% dégats mais + 50% coûts en mana).', 20),
(43, 'Mage', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 3, '', 21),
(44, 'Mage', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Niveau22:\r\n- +1Regen mana / tour', 22),
(45, 'Roublard', 8, 0, 0, 0, 0, 0, 2, 0, 0, 0, 0, '', 1),
(46, 'Roublard', 0, 0, 1, 2, 0, 0, 0, 0, 0, 0, 2, '', 2),
(47, 'Roublard', 4, 1, 3, 2, 0, 0, 0, 0, 0, 0, 0, '', 3),
(48, 'Roublard', 4, 0, 0, 0, 0, 0, 2, 0, 0, 0, 1, '', 4),
(49, 'Roublard', 0, 0, 0, 2, 0, 0, 1, 0, 0, 0, 1, 'Capacité Heroique de niveau 5 :\r\nArmement Spécialisé (-5 symbiose) : \r\nUtilise les éléments de l\'environement pour upgrade son arme (foret = poison, montagne ) explosif (50% de dégats de zone : 1,5m), eau = perforation(toucher 2 ennemis proches))\r\n-Esquive du maître : (60% de dodge les atks à distance)\r\n-Approche spectrale :(-5 symbiose)(se tp derriére une cible biologique a x métres ou x représente 5 + lvl)', 5),
(50, 'Roublard', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 4, '', 6),
(51, 'Roublard', 0, 1, 0, 2, 0, 0, 2, 0, 0, 0, 0, '', 7),
(52, 'Roublard', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Niveau 8 :\r\n+4 init ou +3 dext ou +3 sym ou +2 force', 8),
(53, 'Roublard', 10, 1, 0, 0, 0, 0, 0, 0, 0, 0, 1, '', 9),
(54, 'Roublard', 0, 1, 3, 1, 0, 0, 0, 0, 0, 0, 0, 'Capacité Heroique de niveau 10 : \r\nMaitrise de l\'arme : (passif)\r\n- Alteration ( debuff force (-10%) ou armure (-3)\r\n- Explosion\r\n- Perforation', 10),
(55, 'Roublard', 4, 1, 1, 1, 0, 0, 0, 0, 0, 0, 0, '', 11),
(56, 'Roublard', 0, 1, 2, 3, 0, 0, 0, 0, 0, 0, 0, '', 12),
(57, 'Roublard', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Niveau13: - +1regen Hp/tour', 13),
(58, 'Roublard', 8, 2, 1, 0, 0, 0, 2, 0, 0, 0, 0, '', 14),
(59, 'Roublard', 0, 0, 0, 2, 0, 0, 2, 0, 0, 0, 8, '', 15),
(60, 'Roublard', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'Niveau16: 1 regen Symbiose/vie par tour', 16),
(61, 'Roublard', 4, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, '', 17),
(62, 'Roublard', 4, 0, 0, 2, 0, 0, 0, 0, 0, 0, 0, '', 18),
(63, 'Roublard', 0, 0, 4, 4, 0, 0, 0, 0, 0, 0, 0, '', 19),
(64, 'Roublard', 2, 1, 2, 1, 0, 0, 0, 0, 0, 0, 0, 'Capacité Heroique de niveau 20 : \r\n-Convertisseur : (trigger once par game) - permet de convertir X points d\' init/2 en force ou X points de force en init * 2,\r\nPassif donne +4 stats,\r\n\r\n-Roi de l\'ombre ( a l\'utilisation d\'une capacité : donne +10 dext ou +10 force)(1 fois par tour)\r\n\r\n-Symbiote (+5 stats partout)', 20);

-- --------------------------------------------------------

--
-- Structure de la table `loot`
--

CREATE TABLE `loot` (
  `id` int(6) NOT NULL,
  `Loot` varchar(150) NOT NULL,
  `valeur_marchande` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `biome`
--
ALTER TABLE `biome`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entity`
--
ALTER TABLE `entity`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entity_type`
--
ALTER TABLE `entity_type`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `habiter`
--
ALTER TABLE `habiter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `loot`
--
ALTER TABLE `loot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `biome`
--
ALTER TABLE `biome`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `entity`
--
ALTER TABLE `entity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT pour la table `entity_type`
--
ALTER TABLE `entity_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `habiter`
--
ALTER TABLE `habiter`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT pour la table `level`
--
ALTER TABLE `level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT pour la table `loot`
--
ALTER TABLE `loot`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
