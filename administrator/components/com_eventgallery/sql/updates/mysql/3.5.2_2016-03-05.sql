CREATE TABLE IF NOT EXISTS `#__eventgallery_state` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `countrycode` varchar(3) NOT NULL DEFAULT '',
  `statecode` varchar(10) NOT NULL DEFAULT '',
  `statename` varchar(255) NOT NULL DEFAULT '',
  `language` varchar(10) NOT NULL DEFAULT '*',
  `published` tinyint(1) NOT NULL DEFAULT '0',
  `ordering` int(11) NOT NULL DEFAULT 0,
  `modified` timestamp NULL DEFAULT NULL,
  `created` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `statecodekey` (`statecode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1;

DELETE FROM `#__eventgallery_state`;
INSERT INTO `#__eventgallery_state` (`id`, `countrycode`, `statecode`, `statename`, `published`)
VALUES
	(1,'US','AL','Alabama',1),
	(2,'US','AK','Alaska',1),
	(3,'US','AZ','Arizona',1),
	(4,'US','AR','Arkansas',1),
	(5,'US','CA','California',1),
	(6,'US','CO','Colorado',1),
	(7,'US','CT','Connecticut',1),
	(8,'US','DE','Delaware',1),
	(9,'US','DC','District of Columbia',1),
	(10,'US','FL','Florida',1),
	(11,'US','GA','Georgia',1),
	(12,'US','HI','Hawaii',1),
	(13,'US','ID','Idaho',1),
	(14,'US','IL','Illinois',1),
	(15,'US','IN','Indiana',1),
	(16,'US','IA','Iowa',1),
	(17,'US','KS','Kansas',1),
	(18,'US','KY','Kentucky',1),
	(19,'US','LA','Louisiana',1),
	(20,'US','ME','Maine',1),
	(21,'US','MD','Maryland',1),
	(22,'US','MA','Massachusetts',1),
	(23,'US','MI','Michigan',1),
	(24,'US','MN','Minnesota',1),
	(25,'US','MS','Mississippi',1),
	(26,'US','MO','Missouri',1),
	(27,'US','MT','Montana',1),
	(28,'US','NE','Nebraska',1),
	(29,'US','NV','Nevada',1),
	(30,'US','NH','New Hampshire',1),
	(31,'US','NJ','New Jersey',1),
	(32,'US','NM','New Mexico',1),
	(33,'US','NY','New York',1),
	(34,'US','NC','North Carolina',1),
	(35,'US','ND','North Dakota',1),
	(36,'US','OH','Ohio',1),
	(37,'US','OK','Oklahoma',1),
	(38,'US','OR','Oregon',1),
	(39,'US','PA','Pennsylvania',1),
	(40,'US','RI','Rhode Island',1),
	(41,'US','SC','South Carolina',1),
	(42,'US','SD','South Dakota',1),
	(43,'US','TN','Tennessee',1),
	(44,'US','TX','Texas',1),
	(45,'US','UT','Utah',1),
	(46,'US','VT','Vermont',1),
	(47,'US','VA','Virginia',1),
	(48,'US','WA','Washington',1),
	(49,'US','WV','West Virginia',1),
	(50,'US','WI','Wisconsin',1),
	(51,'US','WY','Wyoming',1),
	(52,'CA','AB','Alberta',0),
	(53,'CA','BC','British Columbia',0),
	(54,'CA','MB','Manitoba',0),
	(55,'CA','NB','New Brunswick',0),
	(56,'CA','NL','Newfoundland and Labrador',0),
	(57,'CA','NT','Northwest Territories',0),
	(58,'CA','NS','Nova Scotia',0),
	(59,'CA','NU','Nunavut',0),
	(60,'CA','ON','Ontario',0),
	(61,'CA','PE','Prince Edward Island',0),
	(62,'CA','QC','Quebec',0),
	(63,'CA','SK','Saskatchewan',0),
	(64,'CA','YT','Yukon',0),
	(65,'AU','ACT','Australian Capital Territory',0),
	(66,'AU','NSW','New South Wales',0),
	(67,'AU','AU-NT','Northern Terittory',0),
	(68,'AU','QLD','Queensland',0),
	(69,'AU','AU-SA','South Australia',0),
	(70,'AU','TAS','Tasmania',0),
	(71,'AU','VIC','Victoria',0),
	(72,'AU','AU-WA','Western Australia',0),
	(73,'GR','GR-ATT','Αττική',0),
	(74,'GR','GR-EFV','Εύβοια',0),
	(75,'GR','GR-EVT','Ευρυτανία',0),
	(76,'GR','GR-FOK','Φωκίδα',0),
	(77,'GR','GR-FTH','Φθιώτιδα',0),
	(78,'GR','GR-VIO','Βοιωτία',0),
	(79,'GR','GR-HAL','Χαλκιδική',0),
	(80,'GR','GR-IMA','Ημαθία',0),
	(81,'GR','GR-KIL','Κιλκίς',0),
	(82,'GR','GR-PEL','Πέλλα',0),
	(83,'GR','GR-PIE','Πιερία',0),
	(84,'GR','GR-SER','Σέρρες',0),
	(85,'GR','GR-THE','Θεσσαλονίκη',0),
	(86,'GR','GR-CHA','Χανιά',0),
	(87,'GR','GR-IRA','Ηράκλειο',0),
	(88,'GR','GR-LAS','Λασίθι',0),
	(89,'GR','GR-RET','Ρέθυμνο',0),
	(90,'GR','GR-DRA','Δράμα',0),
	(91,'GR','GR-EVR','Έβρος',0),
	(92,'GR','GR-KAV','Καβάλα',0),
	(93,'GR','GR-ROD','Ροδόπη',0),
	(94,'GR','GR-XAN','Ξάνθη',0),
	(95,'GR','GR-ART','Άρτα',0),
	(96,'GR','GR-IOA','Ιωάννινα',0),
	(97,'GR','GR-PRE','Πρέβεζα',0),
	(98,'GR','GR-THS','Θεσπρωτία',0),
	(99,'GR','GR-KER','Κέρκυρα',0),
	(100,'GR','GR-KEF','Κεφαλληνία',0),
	(101,'GR','GR-LEF','Λευκάδα',0),
	(102,'GR','GR-ZAK','Ζάκυνθος',0),
	(103,'GR','GR-CHI','Χίος',0),
	(104,'GR','GR-LES','Λέσβος',0),
	(105,'GR','GR-SAM','Σάμος',0),
	(106,'GR','GR-ARK','Αρκαδία',0),
	(107,'GR','GR-ARG','Αργολίδα',0),
	(108,'GR','GR-KOR','Κορινθία',0),
	(109,'GR','GR-LAK','Λακωνία',0),
	(110,'GR','GR-MES','Μεσσηνία',0),
	(111,'GR','GR-KYK','Κυκλάδες',0),
	(112,'GR','GR-DOD','Δωδεκάνησα',0),
	(113,'GR','GR-KAR','Καρδίτσα',0),
	(114,'GR','GR-LAR','Λάρισα',0),
	(115,'GR','GR-MAG','Μαγνησία',0),
	(116,'GR','GR-TRI','Τρίκαλα',0),
	(117,'GR','GR-ACH','Αχαΐα',0),
	(118,'GR','GR-AIT','Αιτωλοακαρνανία',0),
	(119,'GR','GR-ILI','Ηλεία',0),
	(120,'GR','GR-FLO','Φλώρινα',0),
	(121,'GR','GR-GRE','Γρεβενά',0),
	(122,'GR','GR-KAS','Καστοριά',0),
	(123,'GR','GR-KOZ','Κοζάνη',0),
	(124,'GR','GR-AGO','Άγιο Όρος',0),
	(125,'DE','DE-BW','Baden-Württemberg',0),
	(126,'DE','DE-BY','Bayern',0),
	(127,'DE','DE-BE','Berlin',0),
	(128,'DE','DE-BB','Brandenburg',0),
	(129,'DE','DE-HB','Freie Hansestadt Bremen',0),
	(130,'DE','DE-HH','Hamburg',0),
	(131,'DE','DE-HE','Hessen',0),
	(132,'DE','DE-MV','Mecklenburg-Vorpommern',0),
	(133,'DE','DE-NI','Niedersachsen',0),
	(134,'DE','DE-NW','Nordrhein-Westfalen',0),
	(135,'DE','DE-RP','Rheinland-Pfalz',0),
	(136,'DE','DE-SL','Saarland',0),
	(137,'DE','DE-SN','Sachsen',0),
	(138,'DE','DE-ST','Sachsen-Anhalt',0),
	(139,'DE','DE-SH','Schleswig-Holstein',0),
	(140,'DE','DE-TH','Thüringen',0),
	(181,'CN','CN-BJ','Beijing Municipality',0),
	(182,'CN','CN-TJ','Tianjin Municipality',0),
	(183,'CN','CN-HE','Hebei Province',0),
	(184,'CN','CN-SX','Shanxi Province',0),
	(185,'CN','CN-NM','Nei Mongol Autonomous Region',0),
	(186,'CN','CN-LN','Liaoning Province',0),
	(187,'CN','CN-JL','Jilin Province',0),
	(188,'CN','CN-HL','Heilongjiang Province',0),
	(189,'CN','CN-SH','Shanghai Municipality',0),
	(190,'CN','CN-JS','Jiangsu Province',0),
	(191,'CN','CN-ZJ','Zhejiang Province',0),
	(192,'CN','CN-AH','Anhui Province',0),
	(193,'CN','CN-FJ','Fujian Province',0),
	(194,'CN','CN-JX','Jiangxi Province',0),
	(195,'CN','CN-SD','Shandong Province',0),
	(196,'CN','CN-HA','Henan Province',0),
	(197,'CN','CN-HB','Hubei Province',0),
	(198,'CN','CN-HN','Hunan Province',0),
	(199,'CN','CN-GD','Guangdong Province',0),
	(200,'CN','CN-GX','Guangxi Zhuang Autonomous Region',0),
	(201,'CN','CN-HI','Hainan Province',0),
	(202,'CN','CN-CQ','Chongqing Municipality',0),
	(203,'CN','CN-SC','Sichuan Province',0),
	(204,'CN','CN-GZ','Guizhou Province',0),
	(205,'CN','CN-YN','Yunnan Province',0),
	(206,'CN','CN-XZ','Xizang Autonomous Region',0),
	(207,'CN','CN-SN','Shaanxi Province',0),
	(208,'CN','CN-GS','Gansu Province',0),
	(209,'CN','CN-QH','Qinghai Province',0),
	(210,'CN','CN-NX','Ningxia Hui Autonomous Region',0),
	(211,'CN','CN-XJ','Xinjiang Uyghur Autonomous Region',0),
	(212,'CN','CN-HK','Xianggang Special Administrative Region',0),
	(213,'CN','CN-MC','Aomen Special Administrative Region',0),
	(214, 'ES', 'ES-VI', 'Álava', 1),
	(215, 'ES', 'ES-AB', 'Albacete', 1),
	(216, 'ES', 'ES-A', 'Alicante', 1),
	(217, 'ES', 'ES-AL', 'Almería', 1),
	(218, 'ES', 'ES-O', 'Asturias', 1),
	(219, 'ES', 'ES-AV', 'Ávila', 1),
	(220, 'ES', 'ES-BA', 'Badajoz', 1),
	(221, 'ES', 'ES-IB', 'Islas Baleares', 1),
	(222, 'ES', 'ES-B', 'Barcelona', 1),
	(223, 'ES', 'ES-BU', 'Burgos', 1),
	(224, 'ES', 'ES-CC', 'Cáceres', 1),
	(225, 'ES', 'ES-CA', 'Cádiz', 1),
	(226, 'ES', 'ES-S', 'Cantabria', 1),
	(227, 'ES', 'ES-CS', 'Castellón', 1),
	(228, 'ES', 'ES-CE', 'Ceuta', 1),
	(229, 'ES', 'ES-CR', 'Ciudad Real', 1),
	(230, 'ES', 'ES-CO', 'Córdoba', 1),
	(231, 'ES', 'ES-CU', 'Cuenca', 1),
	(232, 'ES', 'ES-GI', 'Gerona', 1),
	(233, 'ES', 'ES-GR', 'Granada', 1),
	(234, 'ES', 'ES-GU', 'Guadalajara', 1),
	(235, 'ES', 'ES-SS', 'Guipúzcoa', 1),
	(236, 'ES', 'ES-H', 'Huelva', 1),
	(237, 'ES', 'ES-HU', 'Huesca', 1),
	(238, 'ES', 'ES-J', 'Jaén', 1),
	(239, 'ES', 'ES-C', 'La Coruña', 1),
	(240, 'ES', 'ES-LO', 'La Rioja', 1),
	(241, 'ES', 'ES-GC', 'Las Palmas', 1),
	(242, 'ES', 'ES-LE', 'León', 1),
	(243, 'ES', 'ES-L', 'Lérida', 1),
	(244, 'ES', 'ES-LU', 'Lugo', 1),
	(245, 'ES', 'ES-M', 'Madrid', 1),
	(246, 'ES', 'ES-MA', 'Málaga', 1),
	(247, 'ES', 'ES-ML', 'Melilla', 1),
	(248, 'ES', 'ES-MU', 'Murcia', 1),
	(249, 'ES', 'ES-NA', 'Navarra', 1),
	(250, 'ES', 'ES-OU', 'Orense', 1),
	(251, 'ES', 'ES-P', 'Palencia', 1),
	(252, 'ES', 'ES-PO', 'Pontevedra', 1),
	(253, 'ES', 'ES-SA', 'Salamanca', 1),
	(254, 'ES', 'ES-TF', 'Santa Cruz de Tenerife', 1),
	(255, 'ES', 'ES-SG', 'Segovia', 1),
	(256, 'ES', 'ES-SE', 'Sevilla', 1),
	(257, 'ES', 'ES-SO', 'Soria', 1),
	(258, 'ES', 'ES-T', 'Tarragona', 1),
	(259, 'ES', 'ES-TE', 'Teruel', 1),
	(260, 'ES', 'ES-TO', 'Toledo', 1),
	(261, 'ES', 'ES-V', 'Valencia', 1),
	(262, 'ES', 'ES-VA', 'Valladolid', 1),
	(263, 'ES', 'ES-BI', 'Vizcaya', 1),
	(264, 'ES', 'ES-ZA', 'Zamora', 1),
	(265, 'ES', 'ES-Z', 'Zaragoza', 1);