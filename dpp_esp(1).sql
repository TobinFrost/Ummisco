-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 23 Novembre 2015 à 00:16
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `dpp_esp`
--

-- --------------------------------------------------------

--
-- Structure de la table `countries`
--

CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `code` char(2) CHARACTER SET latin1 NOT NULL,
  `name_en` tinytext CHARACTER SET latin1,
  `name_fr` tinytext CHARACTER SET latin1,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=499 ;

--
-- Contenu de la table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name_en`, `name_fr`) VALUES
(1, 'AD', 'Andorra', 'Andorre'),
(2, 'AE', 'United Arab Emirates', 'Émirats arabes unis'),
(3, 'AF', 'Afghanistan', 'Afghanistan'),
(4, 'AG', 'Antigua and Barbuda', 'Antigua-et-Barbuda'),
(5, 'AI', 'Anguilla', 'Anguilla'),
(6, 'AL', 'Albania', 'Albanie'),
(7, 'AM', 'Armenia', 'Arménie'),
(8, 'AO', 'Angola', 'Angola'),
(9, 'AQ', 'Antarctica', 'Antarctique'),
(10, 'AR', 'Argentina', 'Argentine'),
(11, 'AS', 'American Samoa', 'Samoa américaine'),
(12, 'AT', 'Austria', 'Autriche'),
(13, 'AU', 'Australia', 'Australie'),
(14, 'AW', 'Aruba', 'Aruba'),
(15, 'AX', 'Åland Islands', 'Îles d''Åland'),
(16, 'AZ', 'Azerbaijan', 'Azerbaïdjan'),
(17, 'BA', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine'),
(18, 'BB', 'Barbados', 'Barbade'),
(19, 'BD', 'Bangladesh', 'Bangladesh'),
(20, 'BE', 'Belgium', 'Belgique'),
(21, 'BF', 'Burkina Faso', 'Burkina Faso'),
(22, 'BG', 'Bulgaria', 'Bulgarie'),
(23, 'BH', 'Bahrain', 'Bahreïn'),
(24, 'BI', 'Burundi', 'Burundi'),
(25, 'BJ', 'Benin', 'Bénin'),
(26, 'BL', 'Saint Barthélemy', 'Saint-Barthélemy'),
(27, 'BM', 'Bermuda', 'Bermudes'),
(28, 'BN', 'Brunei Darussalam', 'Brunei Darussalam'),
(29, 'BO', 'Bolivia', 'Bolivie'),
(30, 'BQ', 'Caribbean Netherlands ', 'Pays-Bas caribéens'),
(31, 'BR', 'Brazil', 'Brésil'),
(32, 'BS', 'Bahamas', 'Bahamas'),
(33, 'BT', 'Bhutan', 'Bhoutan'),
(34, 'BV', 'Bouvet Island', 'Île Bouvet'),
(35, 'BW', 'Botswana', 'Botswana'),
(36, 'BY', 'Belarus', 'Bélarus'),
(37, 'BZ', 'Belize', 'Belize'),
(38, 'CA', 'Canada', 'Canada'),
(39, 'CC', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)'),
(40, 'CD', 'Congo, Democratic Republic of', 'Congo, République démocratique du'),
(41, 'CF', 'Central African Republic', 'République centrafricaine'),
(42, 'CG', 'Congo', 'Congo'),
(43, 'CH', 'Switzerland', 'Suisse'),
(44, 'CI', 'Côte d''Ivoire', 'Côte d''Ivoire'),
(45, 'CK', 'Cook Islands', 'Îles Cook'),
(46, 'CL', 'Chile', 'Chili'),
(47, 'CM', 'Cameroon', 'Cameroun'),
(48, 'CN', 'China', 'Chine'),
(49, 'CO', 'Colombia', 'Colombie'),
(50, 'CR', 'Costa Rica', 'Costa Rica'),
(51, 'CU', 'Cuba', 'Cuba'),
(52, 'CV', 'Cape Verde', 'Cap-Vert'),
(53, 'CW', 'Curaçao', 'Curaçao'),
(54, 'CX', 'Christmas Island', 'Île Christmas'),
(55, 'CY', 'Cyprus', 'Chypre'),
(56, 'CZ', 'Czech Republic', 'République tchèque'),
(57, 'DE', 'Germany', 'Allemagne'),
(58, 'DJ', 'Djibouti', 'Djibouti'),
(59, 'DK', 'Denmark', 'Danemark'),
(60, 'DM', 'Dominica', 'Dominique'),
(61, 'DO', 'Dominican Republic', 'République dominicaine'),
(62, 'DZ', 'Algeria', 'Algérie'),
(63, 'EC', 'Ecuador', 'Équateur'),
(64, 'EE', 'Estonia', 'Estonie'),
(65, 'EG', 'Egypt', 'Égypte'),
(66, 'EH', 'Western Sahara', 'Sahara Occidental'),
(67, 'ER', 'Eritrea', 'Érythrée'),
(68, 'ES', 'Spain', 'Espagne'),
(69, 'ET', 'Ethiopia', 'Éthiopie'),
(70, 'FI', 'Finland', 'Finlande'),
(71, 'FJ', 'Fiji', 'Fidji'),
(72, 'FK', 'Falkland Islands', 'Îles Malouines'),
(73, 'FM', 'Micronesia, Federated States of', 'Micronésie, États fédérés de'),
(74, 'FO', 'Faroe Islands', 'Îles Féroé'),
(75, 'FR', 'France', 'France'),
(76, 'GA', 'Gabon', 'Gabon'),
(77, 'GB', 'United Kingdom', 'Royaume-Uni'),
(78, 'GD', 'Grenada', 'Grenade'),
(79, 'GE', 'Georgia', 'Géorgie'),
(80, 'GF', 'French Guiana', 'Guyane française'),
(81, 'GG', 'Guernsey', 'Guernesey'),
(82, 'GH', 'Ghana', 'Ghana'),
(83, 'GI', 'Gibraltar', 'Gibraltar'),
(84, 'GL', 'Greenland', 'Groenland'),
(85, 'GM', 'Gambia', 'Gambie'),
(86, 'GN', 'Guinea', 'Guinée'),
(87, 'GP', 'Guadeloupe', 'Guadeloupe'),
(88, 'GQ', 'Equatorial Guinea', 'Guinée équatoriale'),
(89, 'GR', 'Greece', 'Grèce'),
(90, 'GS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les îles Sandwich du Sud'),
(91, 'GT', 'Guatemala', 'Guatemala'),
(92, 'GU', 'Guam', 'Guam'),
(93, 'GW', 'Guinea-Bissau', 'Guinée-Bissau'),
(94, 'GY', 'Guyana', 'Guyana'),
(95, 'HK', 'Hong Kong', 'Hong Kong'),
(96, 'HM', 'Heard and McDonald Islands', 'Îles Heard et McDonald'),
(97, 'HN', 'Honduras', 'Honduras'),
(98, 'HR', 'Croatia', 'Croatie'),
(99, 'HT', 'Haiti', 'Haïti'),
(100, 'HU', 'Hungary', 'Hongrie'),
(101, 'ID', 'Indonesia', 'Indonésie'),
(102, 'IE', 'Ireland', 'Irlande'),
(103, 'IL', 'Israel', 'Israël'),
(104, 'IM', 'Isle of Man', 'Île de Man'),
(105, 'IN', 'India', 'Inde'),
(106, 'IO', 'British Indian Ocean Territory', 'Territoire britannique de l''océan Indien'),
(107, 'IQ', 'Iraq', 'Irak'),
(108, 'IR', 'Iran', 'Iran'),
(109, 'IS', 'Iceland', 'Islande'),
(110, 'IT', 'Italy', 'Italie'),
(111, 'JE', 'Jersey', 'Jersey'),
(112, 'JM', 'Jamaica', 'Jamaïque'),
(113, 'JO', 'Jordan', 'Jordanie'),
(114, 'JP', 'Japan', 'Japon'),
(115, 'KE', 'Kenya', 'Kenya'),
(116, 'KG', 'Kyrgyzstan', 'Kirghizistan'),
(117, 'KH', 'Cambodia', 'Cambodge'),
(118, 'KI', 'Kiribati', 'Kiribati'),
(119, 'KM', 'Comoros', 'Comores'),
(120, 'KN', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis'),
(121, 'KP', 'North Korea', 'Corée du Nord'),
(122, 'KR', 'South Korea', 'Corée du Sud'),
(123, 'KW', 'Kuwait', 'Koweït'),
(124, 'KY', 'Cayman Islands', 'Îles Caïmans'),
(125, 'KZ', 'Kazakhstan', 'Kazakhstan'),
(126, 'LA', 'Lao People''s Democratic Republic', 'Laos'),
(127, 'LB', 'Lebanon', 'Liban'),
(128, 'LC', 'Saint Lucia', 'Sainte-Lucie'),
(129, 'LI', 'Liechtenstein', 'Liechtenstein'),
(130, 'LK', 'Sri Lanka', 'Sri Lanka'),
(131, 'LR', 'Liberia', 'Libéria'),
(132, 'LS', 'Lesotho', 'Lesotho'),
(133, 'LT', 'Lithuania', 'Lituanie'),
(134, 'LU', 'Luxembourg', 'Luxembourg'),
(135, 'LV', 'Latvia', 'Lettonie'),
(136, 'LY', 'Libya', 'Libye'),
(137, 'MA', 'Morocco', 'Maroc'),
(138, 'MC', 'Monaco', 'Monaco'),
(139, 'MD', 'Moldova', 'Moldavie'),
(140, 'ME', 'Montenegro', 'Monténégro'),
(141, 'MF', 'Saint-Martin (France)', 'Saint-Martin (France)'),
(142, 'MG', 'Madagascar', 'Madagascar'),
(143, 'MH', 'Marshall Islands', 'Îles Marshall'),
(144, 'MK', 'Macedonia', 'Macédoine'),
(145, 'ML', 'Mali', 'Mali'),
(146, 'MM', 'Myanmar', 'Myanmar'),
(147, 'MN', 'Mongolia', 'Mongolie'),
(148, 'MO', 'Macau', 'Macao'),
(149, 'MP', 'Northern Mariana Islands', 'Mariannes du Nord'),
(150, 'MQ', 'Martinique', 'Martinique'),
(151, 'MR', 'Mauritania', 'Mauritanie'),
(152, 'MS', 'Montserrat', 'Montserrat'),
(153, 'MT', 'Malta', 'Malte'),
(154, 'MU', 'Mauritius', 'Maurice'),
(155, 'MV', 'Maldives', 'Maldives'),
(156, 'MW', 'Malawi', 'Malawi'),
(157, 'MX', 'Mexico', 'Mexique'),
(158, 'MY', 'Malaysia', 'Malaisie'),
(159, 'MZ', 'Mozambique', 'Mozambique'),
(160, 'NA', 'Namibia', 'Namibie'),
(161, 'NC', 'New Caledonia', 'Nouvelle-Calédonie'),
(162, 'NE', 'Niger', 'Niger'),
(163, 'NF', 'Norfolk Island', 'Île Norfolk'),
(164, 'NG', 'Nigeria', 'Nigeria'),
(165, 'NI', 'Nicaragua', 'Nicaragua'),
(166, 'NL', 'The Netherlands', 'Pays-Bas'),
(167, 'NO', 'Norway', 'Norvège'),
(168, 'NP', 'Nepal', 'Népal'),
(169, 'NR', 'Nauru', 'Nauru'),
(170, 'NU', 'Niue', 'Niue'),
(171, 'NZ', 'New Zealand', 'Nouvelle-Zélande'),
(172, 'OM', 'Oman', 'Oman'),
(173, 'PA', 'Panama', 'Panama'),
(174, 'PE', 'Peru', 'Pérou'),
(175, 'PF', 'French Polynesia', 'Polynésie française'),
(176, 'PG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée'),
(177, 'PH', 'Philippines', 'Philippines'),
(178, 'PK', 'Pakistan', 'Pakistan'),
(179, 'PL', 'Poland', 'Pologne'),
(180, 'PM', 'St. Pierre and Miquelon', 'Saint-Pierre-et-Miquelon'),
(181, 'PN', 'Pitcairn', 'Pitcairn'),
(182, 'PR', 'Puerto Rico', 'Puerto Rico'),
(183, 'PS', 'Palestine, State of', 'Palestine'),
(184, 'PT', 'Portugal', 'Portugal'),
(185, 'PW', 'Palau', 'Palau'),
(186, 'PY', 'Paraguay', 'Paraguay'),
(187, 'QA', 'Qatar', 'Qatar'),
(188, 'RE', 'Réunion', 'Réunion'),
(189, 'RO', 'Romania', 'Roumanie'),
(190, 'RS', 'Serbia', 'Serbie'),
(191, 'RU', 'Russian Federation', 'Russie'),
(192, 'RW', 'Rwanda', 'Rwanda'),
(193, 'SA', 'Saudi Arabia', 'Arabie saoudite'),
(194, 'SB', 'Solomon Islands', 'Îles Salomon'),
(195, 'SC', 'Seychelles', 'Seychelles'),
(196, 'SD', 'Sudan', 'Soudan'),
(197, 'SE', 'Sweden', 'Suède'),
(198, 'SG', 'Singapore', 'Singapour'),
(199, 'SH', 'Saint Helena', 'Sainte-Hélène'),
(200, 'SI', 'Slovenia', 'Slovénie'),
(201, 'SJ', 'Svalbard and Jan Mayen Islands', 'Svalbard et île de Jan Mayen'),
(202, 'SK', 'Slovakia', 'Slovaquie'),
(203, 'SL', 'Sierra Leone', 'Sierra Leone'),
(204, 'SM', 'San Marino', 'Saint-Marin'),
(205, 'SN', 'Senegal', 'Sénégal'),
(206, 'SO', 'Somalia', 'Somalie'),
(207, 'SR', 'Suriname', 'Suriname'),
(208, 'SS', 'South Sudan', 'Soudan du Sud'),
(209, 'ST', 'Sao Tome and Principe', 'Sao Tomé-et-Principe'),
(210, 'SV', 'El Salvador', 'El Salvador'),
(211, 'SX', 'Sint Maarten (Dutch part)', 'Saint-Martin (Pays-Bas)'),
(212, 'SY', 'Syria', 'Syrie'),
(213, 'SZ', 'Swaziland', 'Swaziland'),
(214, 'TC', 'Turks and Caicos Islands', 'Îles Turks et Caicos'),
(215, 'TD', 'Chad', 'Tchad'),
(216, 'TF', 'French Southern Territories', 'Terres australes françaises'),
(217, 'TG', 'Togo', 'Togo'),
(218, 'TH', 'Thailand', 'Thaïlande'),
(219, 'TJ', 'Tajikistan', 'Tadjikistan'),
(220, 'TK', 'Tokelau', 'Tokelau'),
(221, 'TL', 'Timor-Leste', 'Timor-Leste'),
(222, 'TM', 'Turkmenistan', 'Turkménistan'),
(223, 'TN', 'Tunisia', 'Tunisie'),
(224, 'TO', 'Tonga', 'Tonga'),
(225, 'TR', 'Turkey', 'Turquie'),
(226, 'TT', 'Trinidad and Tobago', 'Trinité-et-Tobago'),
(227, 'TV', 'Tuvalu', 'Tuvalu'),
(228, 'TW', 'Taiwan', 'Taïwan'),
(229, 'TZ', 'Tanzania', 'Tanzanie'),
(230, 'UA', 'Ukraine', 'Ukraine'),
(231, 'UG', 'Uganda', 'Ouganda'),
(232, 'UM', 'United States Minor Outlying Islands', 'Îles mineures éloignées des États-Unis'),
(233, 'US', 'United States', 'États-Unis'),
(234, 'UY', 'Uruguay', 'Uruguay'),
(235, 'UZ', 'Uzbekistan', 'Ouzbékistan'),
(236, 'VA', 'Vatican', 'Vatican'),
(237, 'VC', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les-Grenadines'),
(238, 'VE', 'Venezuela', 'Venezuela'),
(239, 'VG', 'Virgin Islands (British)', 'Îles Vierges britanniques'),
(240, 'VI', 'Virgin Islands (U.S.)', 'Îles Vierges américaines'),
(241, 'VN', 'Vietnam', 'Vietnam'),
(242, 'VU', 'Vanuatu', 'Vanuatu'),
(243, 'WF', 'Wallis and Futuna Islands', 'Îles Wallis-et-Futuna'),
(244, 'WS', 'Samoa', 'Samoa'),
(245, 'YE', 'Yemen', 'Yémen'),
(246, 'YT', 'Mayotte', 'Mayotte'),
(247, 'ZA', 'South Africa', 'Afrique du Sud'),
(248, 'ZM', 'Zambia', 'Zambie'),
(249, 'ZW', 'Zimbabwe', 'Zimbabwe'),
(250, 'AD', 'Andorra', 'Andorre'),
(251, 'AE', 'United Arab Emirates', 'Émirats arabes unis'),
(252, 'AF', 'Afghanistan', 'Afghanistan'),
(253, 'AG', 'Antigua and Barbuda', 'Antigua-et-Barbuda'),
(254, 'AI', 'Anguilla', 'Anguilla'),
(255, 'AL', 'Albania', 'Albanie'),
(256, 'AM', 'Armenia', 'Arménie'),
(257, 'AO', 'Angola', 'Angola'),
(258, 'AQ', 'Antarctica', 'Antarctique'),
(259, 'AR', 'Argentina', 'Argentine'),
(260, 'AS', 'American Samoa', 'Samoa américaine'),
(261, 'AT', 'Austria', 'Autriche'),
(262, 'AU', 'Australia', 'Australie'),
(263, 'AW', 'Aruba', 'Aruba'),
(264, 'AX', 'Åland Islands', 'Îles d''Åland'),
(265, 'AZ', 'Azerbaijan', 'Azerbaïdjan'),
(266, 'BA', 'Bosnia and Herzegovina', 'Bosnie-Herzégovine'),
(267, 'BB', 'Barbados', 'Barbade'),
(268, 'BD', 'Bangladesh', 'Bangladesh'),
(269, 'BE', 'Belgium', 'Belgique'),
(270, 'BF', 'Burkina Faso', 'Burkina Faso'),
(271, 'BG', 'Bulgaria', 'Bulgarie'),
(272, 'BH', 'Bahrain', 'Bahreïn'),
(273, 'BI', 'Burundi', 'Burundi'),
(274, 'BJ', 'Benin', 'Bénin'),
(275, 'BL', 'Saint Barthélemy', 'Saint-Barthélemy'),
(276, 'BM', 'Bermuda', 'Bermudes'),
(277, 'BN', 'Brunei Darussalam', 'Brunei Darussalam'),
(278, 'BO', 'Bolivia', 'Bolivie'),
(279, 'BQ', 'Caribbean Netherlands ', 'Pays-Bas caribéens'),
(280, 'BR', 'Brazil', 'Brésil'),
(281, 'BS', 'Bahamas', 'Bahamas'),
(282, 'BT', 'Bhutan', 'Bhoutan'),
(283, 'BV', 'Bouvet Island', 'Île Bouvet'),
(284, 'BW', 'Botswana', 'Botswana'),
(285, 'BY', 'Belarus', 'Bélarus'),
(286, 'BZ', 'Belize', 'Belize'),
(287, 'CA', 'Canada', 'Canada'),
(288, 'CC', 'Cocos (Keeling) Islands', 'Îles Cocos (Keeling)'),
(289, 'CD', 'Congo, Democratic Republic of', 'Congo, République démocratique du'),
(290, 'CF', 'Central African Republic', 'République centrafricaine'),
(291, 'CG', 'Congo', 'Congo'),
(292, 'CH', 'Switzerland', 'Suisse'),
(293, 'CI', 'Côte d''Ivoire', 'Côte d''Ivoire'),
(294, 'CK', 'Cook Islands', 'Îles Cook'),
(295, 'CL', 'Chile', 'Chili'),
(296, 'CM', 'Cameroon', 'Cameroun'),
(297, 'CN', 'China', 'Chine'),
(298, 'CO', 'Colombia', 'Colombie'),
(299, 'CR', 'Costa Rica', 'Costa Rica'),
(300, 'CU', 'Cuba', 'Cuba'),
(301, 'CV', 'Cape Verde', 'Cap-Vert'),
(302, 'CW', 'Curaçao', 'Curaçao'),
(303, 'CX', 'Christmas Island', 'Île Christmas'),
(304, 'CY', 'Cyprus', 'Chypre'),
(305, 'CZ', 'Czech Republic', 'République tchèque'),
(306, 'DE', 'Germany', 'Allemagne'),
(307, 'DJ', 'Djibouti', 'Djibouti'),
(308, 'DK', 'Denmark', 'Danemark'),
(309, 'DM', 'Dominica', 'Dominique'),
(310, 'DO', 'Dominican Republic', 'République dominicaine'),
(311, 'DZ', 'Algeria', 'Algérie'),
(312, 'EC', 'Ecuador', 'Équateur'),
(313, 'EE', 'Estonia', 'Estonie'),
(314, 'EG', 'Egypt', 'Égypte'),
(315, 'EH', 'Western Sahara', 'Sahara Occidental'),
(316, 'ER', 'Eritrea', 'Érythrée'),
(317, 'ES', 'Spain', 'Espagne'),
(318, 'ET', 'Ethiopia', 'Éthiopie'),
(319, 'FI', 'Finland', 'Finlande'),
(320, 'FJ', 'Fiji', 'Fidji'),
(321, 'FK', 'Falkland Islands', 'Îles Malouines'),
(322, 'FM', 'Micronesia, Federated States of', 'Micronésie, États fédérés de'),
(323, 'FO', 'Faroe Islands', 'Îles Féroé'),
(324, 'FR', 'France', 'France'),
(325, 'GA', 'Gabon', 'Gabon'),
(326, 'GB', 'United Kingdom', 'Royaume-Uni'),
(327, 'GD', 'Grenada', 'Grenade'),
(328, 'GE', 'Georgia', 'Géorgie'),
(329, 'GF', 'French Guiana', 'Guyane française'),
(330, 'GG', 'Guernsey', 'Guernesey'),
(331, 'GH', 'Ghana', 'Ghana'),
(332, 'GI', 'Gibraltar', 'Gibraltar'),
(333, 'GL', 'Greenland', 'Groenland'),
(334, 'GM', 'Gambia', 'Gambie'),
(335, 'GN', 'Guinea', 'Guinée'),
(336, 'GP', 'Guadeloupe', 'Guadeloupe'),
(337, 'GQ', 'Equatorial Guinea', 'Guinée équatoriale'),
(338, 'GR', 'Greece', 'Grèce'),
(339, 'GS', 'South Georgia and the South Sandwich Islands', 'Géorgie du Sud et les îles Sandwich du Sud'),
(340, 'GT', 'Guatemala', 'Guatemala'),
(341, 'GU', 'Guam', 'Guam'),
(342, 'GW', 'Guinea-Bissau', 'Guinée-Bissau'),
(343, 'GY', 'Guyana', 'Guyana'),
(344, 'HK', 'Hong Kong', 'Hong Kong'),
(345, 'HM', 'Heard and McDonald Islands', 'Îles Heard et McDonald'),
(346, 'HN', 'Honduras', 'Honduras'),
(347, 'HR', 'Croatia', 'Croatie'),
(348, 'HT', 'Haiti', 'Haïti'),
(349, 'HU', 'Hungary', 'Hongrie'),
(350, 'ID', 'Indonesia', 'Indonésie'),
(351, 'IE', 'Ireland', 'Irlande'),
(352, 'IL', 'Israel', 'Israël'),
(353, 'IM', 'Isle of Man', 'Île de Man'),
(354, 'IN', 'India', 'Inde'),
(355, 'IO', 'British Indian Ocean Territory', 'Territoire britannique de l''océan Indien'),
(356, 'IQ', 'Iraq', 'Irak'),
(357, 'IR', 'Iran', 'Iran'),
(358, 'IS', 'Iceland', 'Islande'),
(359, 'IT', 'Italy', 'Italie'),
(360, 'JE', 'Jersey', 'Jersey'),
(361, 'JM', 'Jamaica', 'Jamaïque'),
(362, 'JO', 'Jordan', 'Jordanie'),
(363, 'JP', 'Japan', 'Japon'),
(364, 'KE', 'Kenya', 'Kenya'),
(365, 'KG', 'Kyrgyzstan', 'Kirghizistan'),
(366, 'KH', 'Cambodia', 'Cambodge'),
(367, 'KI', 'Kiribati', 'Kiribati'),
(368, 'KM', 'Comoros', 'Comores'),
(369, 'KN', 'Saint Kitts and Nevis', 'Saint-Kitts-et-Nevis'),
(370, 'KP', 'North Korea', 'Corée du Nord'),
(371, 'KR', 'South Korea', 'Corée du Sud'),
(372, 'KW', 'Kuwait', 'Koweït'),
(373, 'KY', 'Cayman Islands', 'Îles Caïmans'),
(374, 'KZ', 'Kazakhstan', 'Kazakhstan'),
(375, 'LA', 'Lao People''s Democratic Republic', 'Laos'),
(376, 'LB', 'Lebanon', 'Liban'),
(377, 'LC', 'Saint Lucia', 'Sainte-Lucie'),
(378, 'LI', 'Liechtenstein', 'Liechtenstein'),
(379, 'LK', 'Sri Lanka', 'Sri Lanka'),
(380, 'LR', 'Liberia', 'Libéria'),
(381, 'LS', 'Lesotho', 'Lesotho'),
(382, 'LT', 'Lithuania', 'Lituanie'),
(383, 'LU', 'Luxembourg', 'Luxembourg'),
(384, 'LV', 'Latvia', 'Lettonie'),
(385, 'LY', 'Libya', 'Libye'),
(386, 'MA', 'Morocco', 'Maroc'),
(387, 'MC', 'Monaco', 'Monaco'),
(388, 'MD', 'Moldova', 'Moldavie'),
(389, 'ME', 'Montenegro', 'Monténégro'),
(390, 'MF', 'Saint-Martin (France)', 'Saint-Martin (France)'),
(391, 'MG', 'Madagascar', 'Madagascar'),
(392, 'MH', 'Marshall Islands', 'Îles Marshall'),
(393, 'MK', 'Macedonia', 'Macédoine'),
(394, 'ML', 'Mali', 'Mali'),
(395, 'MM', 'Myanmar', 'Myanmar'),
(396, 'MN', 'Mongolia', 'Mongolie'),
(397, 'MO', 'Macau', 'Macao'),
(398, 'MP', 'Northern Mariana Islands', 'Mariannes du Nord'),
(399, 'MQ', 'Martinique', 'Martinique'),
(400, 'MR', 'Mauritania', 'Mauritanie'),
(401, 'MS', 'Montserrat', 'Montserrat'),
(402, 'MT', 'Malta', 'Malte'),
(403, 'MU', 'Mauritius', 'Maurice'),
(404, 'MV', 'Maldives', 'Maldives'),
(405, 'MW', 'Malawi', 'Malawi'),
(406, 'MX', 'Mexico', 'Mexique'),
(407, 'MY', 'Malaysia', 'Malaisie'),
(408, 'MZ', 'Mozambique', 'Mozambique'),
(409, 'NA', 'Namibia', 'Namibie'),
(410, 'NC', 'New Caledonia', 'Nouvelle-Calédonie'),
(411, 'NE', 'Niger', 'Niger'),
(412, 'NF', 'Norfolk Island', 'Île Norfolk'),
(413, 'NG', 'Nigeria', 'Nigeria'),
(414, 'NI', 'Nicaragua', 'Nicaragua'),
(415, 'NL', 'The Netherlands', 'Pays-Bas'),
(416, 'NO', 'Norway', 'Norvège'),
(417, 'NP', 'Nepal', 'Népal'),
(418, 'NR', 'Nauru', 'Nauru'),
(419, 'NU', 'Niue', 'Niue'),
(420, 'NZ', 'New Zealand', 'Nouvelle-Zélande'),
(421, 'OM', 'Oman', 'Oman'),
(422, 'PA', 'Panama', 'Panama'),
(423, 'PE', 'Peru', 'Pérou'),
(424, 'PF', 'French Polynesia', 'Polynésie française'),
(425, 'PG', 'Papua New Guinea', 'Papouasie-Nouvelle-Guinée'),
(426, 'PH', 'Philippines', 'Philippines'),
(427, 'PK', 'Pakistan', 'Pakistan'),
(428, 'PL', 'Poland', 'Pologne'),
(429, 'PM', 'St. Pierre and Miquelon', 'Saint-Pierre-et-Miquelon'),
(430, 'PN', 'Pitcairn', 'Pitcairn'),
(431, 'PR', 'Puerto Rico', 'Puerto Rico'),
(432, 'PS', 'Palestine, State of', 'Palestine'),
(433, 'PT', 'Portugal', 'Portugal'),
(434, 'PW', 'Palau', 'Palau'),
(435, 'PY', 'Paraguay', 'Paraguay'),
(436, 'QA', 'Qatar', 'Qatar'),
(437, 'RE', 'Réunion', 'Réunion'),
(438, 'RO', 'Romania', 'Roumanie'),
(439, 'RS', 'Serbia', 'Serbie'),
(440, 'RU', 'Russian Federation', 'Russie'),
(441, 'RW', 'Rwanda', 'Rwanda'),
(442, 'SA', 'Saudi Arabia', 'Arabie saoudite'),
(443, 'SB', 'Solomon Islands', 'Îles Salomon'),
(444, 'SC', 'Seychelles', 'Seychelles'),
(445, 'SD', 'Sudan', 'Soudan'),
(446, 'SE', 'Sweden', 'Suède'),
(447, 'SG', 'Singapore', 'Singapour'),
(448, 'SH', 'Saint Helena', 'Sainte-Hélène'),
(449, 'SI', 'Slovenia', 'Slovénie'),
(450, 'SJ', 'Svalbard and Jan Mayen Islands', 'Svalbard et île de Jan Mayen'),
(451, 'SK', 'Slovakia', 'Slovaquie'),
(452, 'SL', 'Sierra Leone', 'Sierra Leone'),
(453, 'SM', 'San Marino', 'Saint-Marin'),
(454, 'SN', 'Senegal', 'Sénégal'),
(455, 'SO', 'Somalia', 'Somalie'),
(456, 'SR', 'Suriname', 'Suriname'),
(457, 'SS', 'South Sudan', 'Soudan du Sud'),
(458, 'ST', 'Sao Tome and Principe', 'Sao Tomé-et-Principe'),
(459, 'SV', 'El Salvador', 'El Salvador'),
(460, 'SX', 'Sint Maarten (Dutch part)', 'Saint-Martin (Pays-Bas)'),
(461, 'SY', 'Syria', 'Syrie'),
(462, 'SZ', 'Swaziland', 'Swaziland'),
(463, 'TC', 'Turks and Caicos Islands', 'Îles Turks et Caicos'),
(464, 'TD', 'Chad', 'Tchad'),
(465, 'TF', 'French Southern Territories', 'Terres australes françaises'),
(466, 'TG', 'Togo', 'Togo'),
(467, 'TH', 'Thailand', 'Thaïlande'),
(468, 'TJ', 'Tajikistan', 'Tadjikistan'),
(469, 'TK', 'Tokelau', 'Tokelau'),
(470, 'TL', 'Timor-Leste', 'Timor-Leste'),
(471, 'TM', 'Turkmenistan', 'Turkménistan'),
(472, 'TN', 'Tunisia', 'Tunisie'),
(473, 'TO', 'Tonga', 'Tonga'),
(474, 'TR', 'Turkey', 'Turquie'),
(475, 'TT', 'Trinidad and Tobago', 'Trinité-et-Tobago'),
(476, 'TV', 'Tuvalu', 'Tuvalu'),
(477, 'TW', 'Taiwan', 'Taïwan'),
(478, 'TZ', 'Tanzania', 'Tanzanie'),
(479, 'UA', 'Ukraine', 'Ukraine'),
(480, 'UG', 'Uganda', 'Ouganda'),
(481, 'UM', 'United States Minor Outlying Islands', 'Îles mineures éloignées des États-Unis'),
(482, 'US', 'United States', 'États-Unis'),
(483, 'UY', 'Uruguay', 'Uruguay'),
(484, 'UZ', 'Uzbekistan', 'Ouzbékistan'),
(485, 'VA', 'Vatican', 'Vatican'),
(486, 'VC', 'Saint Vincent and the Grenadines', 'Saint-Vincent-et-les-Grenadines'),
(487, 'VE', 'Venezuela', 'Venezuela'),
(488, 'VG', 'Virgin Islands (British)', 'Îles Vierges britanniques'),
(489, 'VI', 'Virgin Islands (U.S.)', 'Îles Vierges américaines'),
(490, 'VN', 'Vietnam', 'Vietnam'),
(491, 'VU', 'Vanuatu', 'Vanuatu'),
(492, 'WF', 'Wallis and Futuna Islands', 'Îles Wallis-et-Futuna'),
(493, 'WS', 'Samoa', 'Samoa'),
(494, 'YE', 'Yemen', 'Yémen'),
(495, 'YT', 'Mayotte', 'Mayotte'),
(496, 'ZA', 'South Africa', 'Afrique du Sud'),
(497, 'ZM', 'Zambia', 'Zambie'),
(498, 'ZW', 'Zimbabwe', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Structure de la table `dpp_administrateur`
--

CREATE TABLE IF NOT EXISTS `dpp_administrateur` (
  `adm_id` int(11) NOT NULL AUTO_INCREMENT,
  `adm_log` varchar(225) CHARACTER SET latin1 NOT NULL,
  `adm_pwd` varchar(225) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`adm_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Contenu de la table `dpp_administrateur`
--

INSERT INTO `dpp_administrateur` (`adm_id`, `adm_log`, `adm_pwd`) VALUES
(1, 'admin', 'passer');

-- --------------------------------------------------------

--
-- Structure de la table `dpp_agent`
--

CREATE TABLE IF NOT EXISTS `dpp_agent` (
  `agent_id` int(11) NOT NULL AUTO_INCREMENT,
  `agent_prenom` varchar(225) CHARACTER SET latin1 NOT NULL,
  `agent_nom` varchar(225) CHARACTER SET latin1 NOT NULL,
  `agent_matricule` varchar(225) CHARACTER SET latin1 NOT NULL,
  `agent_iddept` int(11) NOT NULL,
  `agent_tel` varchar(225) CHARACTER SET latin1 NOT NULL,
  `agent_mail` varchar(225) CHARACTER SET latin1 NOT NULL,
  `agent_pwd` varchar(225) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`agent_id`),
  KEY `agent_iddept` (`agent_iddept`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `dpp_agent`
--

INSERT INTO `dpp_agent` (`agent_id`, `agent_prenom`, `agent_nom`, `agent_matricule`, `agent_iddept`, `agent_tel`, `agent_mail`, `agent_pwd`) VALUES
(1, 'Pierre', 'JANANTO', '102 595/B', 2, '77 510 80 12', 'NULL', '102 595/B'),
(2, 'Dorothé B.', 'AZILINON', '100 101/A', 4, '77 555 33 71', 'NULL', '100 101/A'),
(3, 'Sidi Mambaye', 'LO', '102 853/C', 1, '77 650 63 34', 'NULL', '102 853/C'),
(4, 'Chérif Ibrahima', 'GOUDIABY', '381 712/L', 6, '77 573 22 56 ', 'NULL', '381 712/L'),
(5, 'Cheikh Momar', 'NGUER', '102 614/F', 3, '77 540 57 27', 'NULL', '102 614/F'),
(6, 'Gervais', 'MENDY', '101 045/A', 5, '70 100 65 02', 'NULL', '101 045/A');

-- --------------------------------------------------------

--
-- Structure de la table `dpp_candidat`
--

CREATE TABLE IF NOT EXISTS `dpp_candidat` (
  `cdt_id` int(11) NOT NULL AUTO_INCREMENT,
  `cdt_confirm` tinyint(1) NOT NULL,
  `cdt_nom` varchar(225) CHARACTER SET latin1 NOT NULL,
  `cdt_prenom` varchar(225) CHARACTER SET latin1 NOT NULL,
  `cdt_adresse` varchar(225) CHARACTER SET latin1 NOT NULL,
  `cdt_email` varchar(225) CHARACTER SET latin1 NOT NULL,
  `cdt_telephone` varchar(225) CHARACTER SET latin1 NOT NULL,
  `cdt_password` varchar(225) CHARACTER SET latin1 NOT NULL,
  `cdt_id_countrie` int(30) DEFAULT NULL,
  `cdt_id_formation` int(11) DEFAULT NULL,
  `cdt_cni` varchar(225) CHARACTER SET latin1 NOT NULL,
  `cdt_time_subscribe` varchar(225) CHARACTER SET latin1 NOT NULL,
  `cdt_id_niveau` int(11) DEFAULT NULL,
  PRIMARY KEY (`cdt_id`),
  KEY `cdt_id_countrie` (`cdt_id_countrie`),
  KEY `cdt_id_formation` (`cdt_id_formation`),
  KEY `cdt_id_niveau` (`cdt_id_niveau`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Contenu de la table `dpp_candidat`
--

INSERT INTO `dpp_candidat` (`cdt_id`, `cdt_confirm`, `cdt_nom`, `cdt_prenom`, `cdt_adresse`, `cdt_email`, `cdt_telephone`, `cdt_password`, `cdt_id_countrie`, `cdt_id_formation`, `cdt_cni`, `cdt_time_subscribe`, `cdt_id_niveau`) VALUES
(19, 0, 'DIAKHAME', 'Pape', '109B Sicap Mbao', 'aliasgerrard@hotmail.fr', '771827530', '403926033d001b5279df37cbbe5287b7c7c267fa', NULL, 5, 'XCDTY17887585', '', NULL),
(33, 0, 'DIAHAME', 'Pape', 'GJGKGJ', 'ndenz28@gmail.com', 'JGJGJHGJG', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 117, 20, '8959598596', 'dfd9d05042df841b0560b578d0987740160da340', 3),
(41, 0, 'SOW', 'Tobin', 'LOKI', 'habib92m@esp.sn', '776565464', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 205, 9, '7765676', 'dfd9d05042df841b0560b578d0987740160da340', 1),
(42, 0, 'TEKO-AGBO', 'Folly Eddy', 'Cices Foire', 'eddygratias@gmail.com', '777437648', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 217, 9, '6548998868655', '5fb903db53aac3e142f4ac4caf6f77d14c8b6e87', 3),
(43, 0, 'DIAGNE', 'Mayoro', 'SIpres', 'mayoro@gmail.com', '7765645', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', 205, 9, '9899667785875785', '5fb903db53aac3e142f4ac4caf6f77d14c8b6e87', 3),
(44, 0, 'sow', 'tobin', 'n,bjjgjgkj', 'habib92m@gmail.com', 'jkgkgkjgj', '482f7629a2511d23ef4e958b13a5ba54bdba06f2', NULL, NULL, 'l908907807', '871422151d0184181dfa3e9f4fc65c3abfa10417', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `dpp_departement`
--

CREATE TABLE IF NOT EXISTS `dpp_departement` (
  `dpt_id` int(11) NOT NULL AUTO_INCREMENT,
  `dpt_code` varchar(225) CHARACTER SET latin1 NOT NULL,
  `dpt_libelle` varchar(225) CHARACTER SET latin1 NOT NULL,
  `dpt_description` text CHARACTER SET latin1 NOT NULL,
  `dpt_serie_id` int(11) NOT NULL,
  PRIMARY KEY (`dpt_id`),
  KEY `dpt_serie_id` (`dpt_serie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Contenu de la table `dpp_departement`
--

INSERT INTO `dpp_departement` (`dpt_id`, `dpt_code`, `dpt_libelle`, `dpt_description`, `dpt_serie_id`) VALUES
(1, 'DGE', 'Génie Electrique', '<h4 style="text-align: justify;">Le Département de Génie Electrique a pour mission de former des techniciens supérieurs et des ingénieurs de conception dans les domaines de l&rsquo;électronique, de l&rsquo;électrotechnique, des automatismes et de l&rsquo;informatique industrielle, pour des secteurs d&rsquo;activités aussi divers que la production, les services, les études, la recherche appliquée et de procéder à des expertises.</h4>\n<h4 style="text-align: justify;">La formation a pour objectifs :</h4>\n<ul style="text-align: justify;">\n<li>\n<h4>de permettre l&rsquo;adaptation des diplômés à une grande variété d&rsquo;emplois</h4>\n</li>\n<li>\n<h4>de faciliter leur mobilité et toute évolution ultérieure de carrière</h4>\n</li>\n<li>\n<h4>de leur donner la possibilité d&rsquo;une poursuite d&rsquo;études.</h4>\n</li>\n</ul>\n<h4 style="text-align: justify;">Le Département Génie Electrique compte 21 enseignants dont 20 de spécialité parmi lesquels : 03 professeurs, 03 maîtres de conférences, 07 maîtres – assistants, 04 assistants dont deux titulaires, 01 professeur technique agrégé et 03 chefs de travaux.</h4>\n<h4 style="text-align: justify;">Il dispose également d’un personnel administratif, technique et de service (PATS) : 02 PAS et 06 PT (01 ingénieur de conception, 01 ingénieur technologue et 04 techniciens dont 03 supérieurs). Le Département est en outre appuyé au niveau des enseignements par des vacataires.</h4>\n<h4 style="text-align: justify;">Contact</h4>\n<h4 style="text-align: justify;">Chef de Département : M. Lamine THIAW</h4>\n<h4 style="text-align: justify;"> Téléphone : +221 33 825 47 23 poste 101 / E-mail : genie.electrique@esp.sn</h4>', 1),
(2, 'DGEST', 'Gestion des Entreprises', '<h4 style="text-align: justify;">Le Département de Gestion a connu plusieurs appellations .Il est d’abord la subdivision Tertiaire de l’ex ENSUT, ensuite l’Institut Supérieur de Gestion (ISG) pour  devenir enfin  depuis août 2005 le Département de Gestion de l’Ecole Supérieure Polytechnique (ESP)</h4>\n<h4 style="text-align: justify;">Le Département de Gestion a pour mission de former des techniciens et ces cadres supérieurs dans le domaine de la comptabilité et de la finance, du marketing, du management et de la gestion.</h4>\n<h4 style="text-align: justify;">En outre, il est souvent sollicité pour des formations dans le cadre d’appels d’offre ou de convention avec des sociétés ou des organismes de la place dans les différents domaines de la gestion.</h4>\n<h4>Contact : Pierre JANANTO (Chef de département)</h4>\n<h4>Téléphone : 33 864 51 89</h4>\n<h4></h4>', 2),
(3, 'DGCH', 'Génie Chimique Et Biologie Appliquée', '<p style="text-align: justify;">Pour répondre aux besoins des industries chimiques, alimentaires et des laboratoires d’analyses et de contrôle, le Département Génie Chimique et Biologie Appliquée a mis en place différentes formations pour :</p>\n<ul style="text-align: justify;">\n<li>le personnel technique du niveau DUT (Diplôme Universitaire de Technologie) en Génie Chimique, en Industries Alimentaires et en Analyses Biologiques,</li>\n<li>le personnel d’encadrement du niveau DIC (Diplôme d’Ingénieur Technologie) en Génie des procédés appliqué aux industries chimiques et aux industries agroalimentaire.</li>\n</ul>\n<p style="text-align: justify;">Grâce à leur solide formation en sciences fondamentales et en sciences de l’ingénieur, ils sauront conduire et contrôler toutes les activités qui touchent le domaine du génie des procédés.</p>\n<p style="text-align: justify;">Formés aux sciences humaines et à la gestion des entreprises, aux langues étrangères, aux nouvelles technologies de l’information et de la communication, les diplômés du Département Génie Chimique et Biologie Appliquée seront les cadres indispensables à l’entreprise, capables de manager une équipe, de tisser de véritables relations humaines et sociales mais également de transmettre leurs connaissances. Ils seront capables de dialoguer avec les différents spécialistes qui interviennent dans les différentes étapes du process industriel.</p>\n<p style="text-align: justify;">Chef de Département : M. Momar NGUER</p>\n<p style="text-align: justify;">Contact</p>\n<p style="text-align: justify;">Momar NGUER: Téléphone : +221 33 825 32 17 / Télécopie : +221 33 825 55 94 / E-mail :<br />\nMme Louise Yande FAYE (secrétaire) : Téléphone : + 221 33 825 32 17 / Télécopie : +221 33 825 55 94 / E-mail : dthiadji@yahoo.fr</p>', 1),
(4, 'DGM', 'Génie Mécanique', '<h4 style="text-align: justify;">Le Département a à sa tête un Chef de département qui préside les réunions de l’Assemblée de Département et qui est aidé dans ses taches par des responsables pédagogiques. L’Assemblée de Département est l’Organe de décision du Département. Sont membres de cette Assemblée tous les enseignants permanents, un représentant du personnel administratif, un représentant du personnel technique et des représentants des étudiants (un par classe). La durée du mandat du Chef de Département est de deux (02) ans et la fonction est élective.<br />\nLe Département Génie mécanique offre des enseignements de haut niveau et de qualité conduisant à une formation complète au niveau premier cycle (Diplôme Universitaire de Technologie, Licence) et au niveau second cycle (Diplôme d’Ingénieur de Conception, Master) dans tous les métiers du domaine de Génie des Systèmes Industriels à savoir : Conception et réalisation des systèmes électromécaniques, Maintenance Industrielle, Mécanique Automobile, Mécatronique, Energétique, Matériaux, Conception et Fabrication Assistées par Ordinateur (CFAO).<br />\nLe Département Génie Mécanique réalise également des prestations de service pour les entreprises : Essais et Contrôle des Matériaux, Métrologie dimensionnelle, Production Mécanique et Maintenance, Construction Métallique, Automatismes.</h4>\n<h4 style="text-align: justify;"><em><strong>Chef de Département</strong></em> : M. Dorothé AZILINON</h4>\n<h4 style="text-align: justify;"><em><strong>Responsables pédagogiques</strong></em> :</h4>\n<h4 style="text-align: justify;">- Responsable pédagogique DUT1 : Monsieur Amadou Moctar GUEYE<br />\n&#8211; Responsable pédagogique DUT2 : Monsieur Mame Mor Diarra NDIAYE<br />\n&#8211; Responsable pédagogique DIC : Monsieur Mamadou NDIAYE<br />\n&#8211; Responsable pédagogique Licence : Madame Lioudmila PAVLOVSKAYA<br />\n&#8211; Responsable pédagogique Master 1 : Monsieur Paul MALOU<br />\n&#8211; Responsable pédagogique Master 2 : Madame Awa NIANG<br />\n&#8211; Responsable des ateliers : Monsieur Abdoulaye NDIAYE<br />\n&#8211; Responsable des relations avec les entreprises : Monsieur Youssouf MANDIANG</h4>\n<h4 style="text-align: justify;"><em><strong>Assistante du chef de Département</strong> </em>: Madame Mame Diarra Pouye DIOP<br />\nTéléphone : (221) 33 825 47 20<br />\nE-mail : genie.mecanique@esp.sn</h4>', 1),
(5, 'DGI', 'Génie Informatique', '<h4 style="text-align: justify;">Le Département Informatique a pour missions de :</h4>\n<ul style="text-align: justify;">\n<li>\n<h4>former des Techniciens supérieurs, Assistants ingénieurs, des Ingénieurs en Informatique Télé-Informatique et en Télécommunication ;</h4>\n</li>\n<li>\n<h4>mener des activités de recherche dans les domaines sus-mentionnés visant au perfectionnement permanent, à l&rsquo;adaptation et à la participation à l&rsquo;évolution scientifique et technologique ;</h4>\n</li>\n<li>\n<h4> procéder à des expertises dans le cadre de la formation à l&rsquo;intention des entreprises publiques et privées.</h4>\n</li>\n</ul>\n<h4 style="text-align: justify;">Chef de Département : M. Gervais MENDY</h4><h4></h4>\n<h4 style="text-align: justify;"></h4>\n<h4 style="text-align: justify;">Présentation détaillée du Département</h4>\n<h2 style="text-align: justify;"><a href="http://www.esp.sn/wp-content/uploads/2014/12/présentation-DGI_v2.pptx" target="_blank">présentation DGI_v2</a></h2>\n<h4 style="text-align: justify;">Reportage sur le Département Génie Informatique  de l&rsquo;Ecole Supérieure Polytechnique (ESP) de Dakar à l&rsquo;occasion du Week-end du Département</h4>', 1),
(6, 'DGCI', 'Génie Civil', '<h4 style="text-align: justify;">Le Département Génie civil a pour missions :</h4>\n<ul style="text-align: justify;">\n<li>\n<h4>de former des Techniciens supérieurs, des Ingénieurs d’Exécution et des Ingénieurs de Conception en génie civil ;</h4>\n</li>\n<li>\n<h4>d&rsquo;organiser des enseignements et des activités de recherche dans les domaines susmentionnés visant au perfectionnement permanent, à l&rsquo;adaptation et à la participation à l&rsquo;évolution scientifique et technologique;</h4>\n</li>\n<li>\n<h4>de procéder à des expertises dans le cadre de la formation continue pour répondre aux besoins de qualification et de spécialisation à l&rsquo;intention des entreprises publiques et privées et offrir aux jeunes bacheliers à la quête du premier emploi une formation adéquate leur permettant d’assurer des fonctions dans une entreprise de génie civil, bureau d’étude et ou cabinet d’architecture.</h4>\n</li>\n</ul>\n<h4 style="text-align: justify;">La formation est assurée par une équipe d’enseignants permanents et professionnels. Ces derniers animent le Département tant au niveau de son administration, de l’ingénierie de formation et de la mise en œuvre aidés et soutenus par une équipe de PATS.</h4>\n<h4 style="text-align: justify;">Le Département fait appel aux compétences d’un réseau d’intervenants, cadres d’entreprise ou de bureaux d’études, professeurs de l’Ecole Supérieure Polytechnique, ingénieurs du génie civil, ingénieurs hydrauliciens, architectes, ingénieurs topographes, enseignants.</h4>\n<h4 style="text-align: justify;">Pour mener à bien ses missions, le CRIF-BTP dispose des moyens suivants:</h4>\n<ul style="text-align: justify;">\n<li>\n<h4>9 salles de formation : capacité de 50 places</h4>\n</li>\n<li>\n<h4> 3 laboratoires : Sols, béton et hydraulique</h4>\n</li>\n<li>\n<h4>2 salles informatiques : 50 PC régulièrement renouvelé</h4>\n</li>\n<li>\n<h4>des équipements informatiques : imprimantes, 03 scanners, des logiciels appliqués au BTP</h4>\n</li>\n<li>\n<h4>des équipements didactiques : 4 vidéo projecteurs, 6 rétroprojecteurs, 1 projecteur de diapositives,Théodolites + niveaux et accessoires</h4>\n</li>\n<li>\n<h4>1 centre documentaire : près de 500 ouvrages du génie civil, répertoriés par domaine technique, à la disposition des enseignants et des étudiants</h4>\n</li>\n</ul>\n<h4><span style="text-decoration: underline;">Site du Département:</span> <a title="mini site génie civil" href="http://geniecivilesp.com/" target="_blank">http://geniecivilesp.com/</a></h4>\n<h4 style="text-align: justify;">Chef de Département : Vincent SAMBOU</h4>\n<h4 style="text-align: justify;">Contact 1 : Secrétariat<br />\nTéléphone : (221) 338 24 48 87<br />\nTélécopie : (221)338 24 29 26<br />\nE-mail : crifbtp@ucad.sn</h4>\n<h4 style="text-align: justify;">Contact 2 : Mbaye DIOP (Responsable pédagogique ou administratif)<br />\nNom de l’agent à contacter : Téléphone : (221)776 39 63 08<br />\nTélécopie : (221)338 24 29 26<br />\nE-mail : g2dconcept@hotmail.com</h4>', 1);

-- --------------------------------------------------------

--
-- Structure de la table `dpp_formation`
--

CREATE TABLE IF NOT EXISTS `dpp_formation` (
  `frm_id` int(11) NOT NULL AUTO_INCREMENT,
  `frm_dptid` int(11) NOT NULL,
  `frm_libelle` varchar(225) CHARACTER SET latin1 NOT NULL,
  `frm_code` varchar(225) CHARACTER SET latin1 NOT NULL,
  `frm_typeid` int(11) NOT NULL,
  `frm_level_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`frm_id`),
  KEY `frm_dptid` (`frm_dptid`),
  KEY `frm_typeid` (`frm_typeid`),
  KEY `frm_level_id` (`frm_level_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=57 ;

--
-- Contenu de la table `dpp_formation`
--

INSERT INTO `dpp_formation` (`frm_id`, `frm_dptid`, `frm_libelle`, `frm_code`, `frm_typeid`, `frm_level_id`) VALUES
(1, 1, 'DUT en Electronique, Electrotechnique et Automatique Informatique industrielle et Télécommunications', 'EEAIT', 1, 6),
(2, 1, 'Licence en Electronique et Systèmes  de Télécommunications/Distribution Electrique & Automatismes ', 'DEA/EST', 2, 8),
(3, 1, 'DIC en Electronique, Electrotechnique et Automatique Informatique industrielle ', 'EEAI', 1, 9),
(4, 1, 'Licence Distribution Electrique & Automatismes ', 'DEA', 2, 8),
(5, 5, 'DUT en Informatique', 'DUTI', 1, 6),
(6, 5, 'DUT en Télécommunications et Réseaux', 'DUTTR', 1, 6),
(7, 5, 'DST en Informatique', 'DSTI', 2, 7),
(8, 5, 'DST en Télécommunications et Réseaux', 'DSTTR', 2, 7),
(9, 5, 'Licence Génie Logiciel', 'LGL', 2, 8),
(10, 5, 'DIC en Télécommunications et Réseaux', 'DICTR', 1, 9),
(11, 5, 'DIC en Informatique  ', 'DICI', 1, 9),
(12, 5, 'Licence Informatique, Télécommunications et Réseaux', 'LTR', 2, 8),
(13, 5, 'Master Télécommunications et Réseaux ', 'MTR', 2, 10),
(14, 5, 'Master Génie Logiciel ', 'MGL', 2, 10),
(15, 5, 'Master Global e-Business', 'MGE', 2, 10),
(16, 4, 'DUT en Génie Mécanique et Systèmes Industriels', 'DUTGMSI', 1, 6),
(17, 4, 'Licence en Gestion des Systèmes Industriels et de la Production', 'LGSIP', 2, 8),
(18, 4, 'DIC en Génie Mécanique et Systèmes Industriels', 'DICGMSI', 1, 9),
(19, 4, 'Master en  Gestion des Systèmes Industriels et de la Production', 'MGSIP', 2, 10),
(20, 2, 'DUT en Finances-Comptabilité', 'DUTFC', 1, 6),
(21, 2, 'DUT en Techniques de Commercialisation', 'DUTTC', 1, 6),
(22, 2, 'DST en Comptabilité et Gestion des Organisations', 'DSTCGO', 2, 7),
(23, 2, 'Licence en Sciences et Techniques Comptable et Financière', 'LSTCF', 2, 8),
(24, 2, 'Licence en Banque-Finance-Assurance', 'LBFA', 2, 8),
(25, 2, 'Licence en Marketing et Action Commerciale', 'LMAC', 2, 8),
(26, 2, 'Licence en Marketing des Affaires Internationales', 'LMAI', 2, 8),
(27, 2, 'Licence en Gestion Hôtelière et Touristique', 'LGHT', 2, 8),
(28, 2, 'Licence en Gestion des Ressources Humaines', 'LGRH', 2, 8),
(29, 2, 'Diplôme d’Etudes Supérieures en Commerce et Administration Financière', 'DESCAF', 1, NULL),
(30, 2, 'Master en Gestion Hôtelière et Touristique', 'MGHT', 2, 10),
(31, 2, 'Master en Contrôle Comptabilité et Audit', 'MCCA', 2, 10),
(32, 2, 'Master en Gestion des Institutions Financières', 'MGIF', 2, 10),
(33, 2, 'Master en Gestion Commerciale', 'MGC', 2, 10),
(34, 2, 'Master en Gestion des Ressources Humaines', 'MGRH', 2, 10),
(35, 2, 'Master en Commerce Marketing et Management des Affaires Internationales (double diplomation avec Lille)', 'MCMMAI', 2, 10),
(36, 2, 'Master Gestion de la Mobilité, des Transports et de la Logistique', 'MGMTL', 2, 10),
(37, 2, 'Diplôme Elémentaire Comptable', 'DEC', 1, NULL),
(38, 2, 'Diplôme Supérieur Comptable', 'DSC', 2, NULL),
(39, 2, 'Diplôme Supérieur des Etudes Comptables et de Gestion', 'DSECG', 2, NULL),
(40, 6, 'DST en Génie Civil', 'DSTGC', 2, 7),
(41, 6, 'DUT en Génie Civil', 'DUTGC', 1, 6),
(42, 6, 'DIT en Génie Civil', 'DITGC', 1, NULL),
(43, 6, 'Licence en METERBAT', 'LMETERBAT', 2, 8),
(44, 6, 'Licence en Conducteur des Travaux', 'LCT', 2, 8),
(45, 6, 'Licence en Géométrie', 'LGEO', 2, 8),
(46, 6, 'DIC en Génie Civil', 'DICGC', 1, 9),
(47, 3, 'DST  en Biologie Appliquée', 'DSTBA', 2, 7),
(48, 3, 'DST en  Industries Chimiques et Agroalimentaires', 'DSTICA', 2, 7),
(49, 3, 'DIT  en Génie Biologique et Sanitaire', 'DITGBS', 1, NULL),
(50, 3, 'DUT  en Analyses Biologiques', 'DUTAB', 1, 6),
(51, 3, 'DUT en  Industries  Alimentaires', 'DUTIA', 1, 6),
(52, 3, 'DUT en  Génie Chimique', 'DUTGC', 1, 6),
(53, 3, 'DIT  en Génie Chimique', 'DITGC', 1, NULL),
(54, 3, 'DIT  en  Industries Chimiques et Agroalimentaires', 'DITICA', 1, NULL),
(55, 3, 'Licence en Qualité Hygiène Sécurité et Environnement', 'LQHSE', 2, 8),
(56, 3, 'Master en  Qualité Sécurité et Environnement', 'MQSE', 2, 10);

-- --------------------------------------------------------

--
-- Structure de la table `dpp_level`
--

CREATE TABLE IF NOT EXISTS `dpp_level` (
  `lvl_id` int(11) NOT NULL AUTO_INCREMENT,
  `lvl_code` varchar(225) CHARACTER SET latin1 NOT NULL,
  `lvl_duration` int(11) NOT NULL,
  `lvl_minima` varchar(225) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`lvl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Contenu de la table `dpp_level`
--

INSERT INTO `dpp_level` (`lvl_id`, `lvl_code`, `lvl_duration`, `lvl_minima`) VALUES
(6, 'DUT', 2, 'Bac'),
(7, 'DST', 2, 'Bac'),
(8, 'Licence', 1, 'Bac+2'),
(9, 'DIC', 3, 'Bac+2'),
(10, 'Master', 2, 'Bac+3');

-- --------------------------------------------------------

--
-- Structure de la table `dpp_niveau_scolaire`
--

CREATE TABLE IF NOT EXISTS `dpp_niveau_scolaire` (
  `nv_id` int(11) NOT NULL AUTO_INCREMENT,
  `nv_libelle` varchar(225) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`nv_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `dpp_niveau_scolaire`
--

INSERT INTO `dpp_niveau_scolaire` (`nv_id`, `nv_libelle`) VALUES
(1, 'BAC'),
(2, 'BAC+1'),
(3, 'BAC+2'),
(4, 'BAC+3');

-- --------------------------------------------------------

--
-- Structure de la table `dpp_serie_formation`
--

CREATE TABLE IF NOT EXISTS `dpp_serie_formation` (
  `serie_id` int(11) NOT NULL AUTO_INCREMENT,
  `serie_libelle` varchar(200) NOT NULL,
  PRIMARY KEY (`serie_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `dpp_serie_formation`
--

INSERT INTO `dpp_serie_formation` (`serie_id`, `serie_libelle`) VALUES
(1, 'S_T'),
(2, 'L_G');

-- --------------------------------------------------------

--
-- Structure de la table `dpp_specialite`
--

CREATE TABLE IF NOT EXISTS `dpp_specialite` (
  `spec_id` int(11) NOT NULL AUTO_INCREMENT,
  `spec_libelle` varchar(200) NOT NULL,
  `spec_dpt_id` int(11) NOT NULL,
  PRIMARY KEY (`spec_id`),
  KEY `spec_dpt_fk` (`spec_dpt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=60 ;

--
-- Contenu de la table `dpp_specialite`
--

INSERT INTO `dpp_specialite` (`spec_id`, `spec_libelle`, `spec_dpt_id`) VALUES
(1, 'Electronique', 1),
(2, 'Electrotechnique', 1),
(3, 'Automatique', 1),
(4, 'Informatique industrielle', 1),
(5, 'Télécommunications', 1),
(6, 'Distribution Electrique', 1),
(7, 'Automatismes', 1),
(8, 'Finances', 2),
(9, 'Comptabilité', 2),
(10, 'Gestion des Organisations', 2),
(11, 'Techniques de Commercialisation', 2),
(12, 'Banque', 2),
(13, 'Finance', 2),
(14, 'Assurance', 2),
(15, 'Marketing', 2),
(16, 'Action Commerciale', 2),
(17, 'Affaires Internationales', 2),
(18, 'Gestion Hôtelière', 2),
(19, 'Hôtelière', 2),
(20, 'Touristique', 2),
(21, 'Ressources Humaines', 2),
(22, 'Contrôle Comptabilité', 2),
(23, 'Audit', 2),
(24, 'Institutions Financières', 2),
(25, 'Mobilité', 2),
(26, 'Transports', 2),
(27, 'Logistique', 2),
(28, 'Analyses Biologiques', 3),
(29, 'Biologiques', 3),
(30, 'Alimentaires', 3),
(31, 'Industries Alimentaires', 3),
(32, 'Chimique', 3),
(33, 'Chimie', 3),
(34, 'Biologie', 3),
(35, 'Agroalimentaires', 3),
(36, 'Environnement', 3),
(37, 'Qualité', 3),
(38, 'Sécurité', 3),
(39, 'Mécanique', 4),
(40, 'Systèmes Industriels', 4),
(41, 'Industriels', 4),
(42, 'Production Industriels', 4),
(43, 'Informatique', 5),
(44, 'Télécommunications', 5),
(45, 'Réseaux', 5),
(46, 'Génie Logiciel', 5),
(47, 'Logiciel', 5),
(48, 'Programmation', 5),
(49, 'Global e-Business', 5),
(50, 'Ordinateur', 5),
(51, 'Génie Civil', 6),
(52, 'Civil', 6),
(53, 'Conducteur des Travaux', 6),
(54, 'Travaux', 6),
(55, 'Géométrie', 6),
(56, 'METERBAT', 6),
(57, 'Bâtiment', 6),
(58, 'Architecture', 6),
(59, 'Biologie Appliquée', 3);

-- --------------------------------------------------------

--
-- Structure de la table `dpp_typeformation`
--

CREATE TABLE IF NOT EXISTS `dpp_typeformation` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_code` varchar(225) CHARACTER SET latin1 NOT NULL,
  `type_libelle` varchar(225) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `dpp_typeformation`
--

INSERT INTO `dpp_typeformation` (`type_id`, `type_code`, `type_libelle`) VALUES
(1, 'PCE', 'pris en charge par l''Etat'),
(2, 'PCT', 'pris en charge par des Tiers');

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `dpp_agent`
--
ALTER TABLE `dpp_agent`
  ADD CONSTRAINT `dpp_agent_ibfk_1` FOREIGN KEY (`agent_iddept`) REFERENCES `dpp_departement` (`dpt_id`);

--
-- Contraintes pour la table `dpp_candidat`
--
ALTER TABLE `dpp_candidat`
  ADD CONSTRAINT `dpp_candidat_ibfk_1` FOREIGN KEY (`cdt_id_countrie`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `dpp_candidat_ibfk_2` FOREIGN KEY (`cdt_id_formation`) REFERENCES `dpp_formation` (`frm_id`),
  ADD CONSTRAINT `dpp_candidat_ibfk_3` FOREIGN KEY (`cdt_id_niveau`) REFERENCES `dpp_niveau_scolaire` (`nv_id`);

--
-- Contraintes pour la table `dpp_formation`
--
ALTER TABLE `dpp_formation`
  ADD CONSTRAINT `dpp_formation_ibfk_1` FOREIGN KEY (`frm_dptid`) REFERENCES `dpp_departement` (`dpt_id`),
  ADD CONSTRAINT `dpp_formation_ibfk_2` FOREIGN KEY (`frm_typeid`) REFERENCES `dpp_typeformation` (`type_id`),
  ADD CONSTRAINT `dpp_formation_ibfk_3` FOREIGN KEY (`frm_level_id`) REFERENCES `dpp_level` (`lvl_id`);

--
-- Contraintes pour la table `dpp_specialite`
--
ALTER TABLE `dpp_specialite`
  ADD CONSTRAINT `spec_dpt_fk` FOREIGN KEY (`spec_dpt_id`) REFERENCES `dpp_departement` (`dpt_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
