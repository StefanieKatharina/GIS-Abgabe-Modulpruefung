-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 07, 2021 at 04:25 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `Steffi`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `bild` text NOT NULL,
  `artikelbeschreibung` text NOT NULL,
  `verfuegbar` tinytext NOT NULL,
  `email` text,
  `Preis` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `artikel`
--
INSERT INTO `artikel` (`id`, `name`, `bild`, `artikelbeschreibung`, `verfuegbar`, `email`, `Preis`) VALUES
(1, 'Das Online-Marketing-Cockpit - 8 Phasen ', 'coverbilder/marketing_1.jpg', 'Autor: Bastian Sens - Nutzen Sie dieses Buch über Online-Marketing, um Ihr eigenes Online-Marketing-Konzept zu erstellen und so alle für Sie relevanten Plattformen zu identifizieren und zu bedienen. Diese Fachlektüre erläutert Ihnen acht Phasen, in denen Sie Ihre eigene Online-Marketing-Strategie erstellen und diese in Ihrem Unternehmen umsetzen können. Dabei legt das Buch auch ein Augenmerk auf das immer wichtiger werdende Thema des Bewerbermarketings. \r\n', '1', NULL, 2),
(2, 'Online-Marketing-Konzeption', 'coverbilder/marketing_2.jpg', 'Autor: Erwin Lammenett - In diesem Buch geht es primär um Methoden und Wege zur Ermittlung einer zielführenden und wirtschaftlich funktionierenden Online-Marketing-Konzeption.\r\n', '1', NULL, 2),
(3, 'Rechnungswesen, Controlling, Bankrechnen', 'coverbilder/controlling_1.jpg', 'Autor: Rudolf Rathner, Wolfgang Grundmann - \r\nPrüfungsaufgaben mit Lösungen\r\nAnhand von prüfungsnahen Aufgaben mit kommentierten Lösungen wiederholt, festigt und ergänzt der Auszubildende die wirklich relevanten Lerninhalte, die ihn optimal auf die Abschlussprüfung vorbereiten. \r\n', '1', NULL, 3),
(4, 'Handbuch Digitale Wirtschaft', 'coverbilder/wirtschaft_1.jpg', 'Autor: Kollmann, Tobias - Dieses Handbuch liefert die theoretischen Grundlagen und praxisbezogenen Implikationen für die Digitale Transformation unserer Wirtschaft, unserer Produktion und Kundenbeziehungen und bietet damit ein solides Fundament für Praktiker und Wissenschaftler. Renommierte Autorinnen und Autoren aus Wissenschaft und Praxis behandeln die Themen des Einkaufs-, Verkaufs-, Handels-, Kontakt- und Kooperationsmanagements auf Basis elektronischer Netzwerke.\r\n', '0', 'stefanie.katharina@yahoo.com', 2),
(5, 'B2B eCommerce', 'coverbilder/ecommerce_2.jpg', 'Autor:  Heinemann, Gerrit - Dieses Lehrbuch behandelt die Grundlagen des eCommerce im Bereich Business-to-Business (B2B), bei dem ähnliche Prinzipien der Kundenansprache zu beobachten sind wie im B2C eCommerce. Gerrit Heinemann beleuchtet die Besonderheiten und Geschäftsmodelle des B2B eCommerce, analysiert die digitalen Herausforderungen und zeigt die Konsequenzen und Chancen für den Online-Verkauf im B2B auf.\r\n', '1', NULL, 5),
(6, 'Ganzheitliche Markenpositionierung ', 'coverbilder/markenpositionierung_1.jpg', 'Autorin: Kallweit, Barbara - Eine authentische Positionierung, klare USPs und deren konsequente Umsetzung sind Schlüsselfaktoren für den Erfolg von Marken und Unternehmen. Dieses essential stellt verschiedene Positionierungsmodelle und -strategien kompakt und systematisch dar. Die Leserinnen und Leser gewinnen so einen wissenschaftlich fundierten und praktischen Überblick über die Bedeutung und Entscheidungen der strategischen Markenpositionierung.', '1', NULL, 3),
(7, 'eCommerce klipp und klar', 'coverbilder/ecommerce_3.jpg', 'Autor: Engelhardt, Jan-Frederik - Dieses Lehrbuch präsentiert eine Einführung und Vertiefung der wesentlichen Themenfelder des eCommerce. Der Fokus liegt dabei auf kundenzentrierten Aspekten, wie z.B. der Kundenzufriedenheit und -erwartung. Diese werden entlang einer Customer Journey systematisiert und ausgeführt. Neben Themen wie dem Kundenmanagement wird vor allem auch auf Onlineshops im eCommerce, insbesondere auf deren Gestaltungsmöglichkeiten, eingegangen.\r\n', '1', NULL, 3),
(8, 'E-Business', 'coverbilder/ebusiness_1.jpg', 'Autor: Kollmann, Tobias - Tobias Kollmann beschreibt in seinem Lehrbuch „E-Business“ umfassend die theoretischen Grundlagen und praxisbezogenen Implikationen für das Einkaufs-, Verkaufs-, Handels-, Kontakt- und Kooperationsmanagement auf Basis elektronischer Netzwerke. Dabei werden die Grundbausteine Systemlösungen, Prozesse, Management, Marketing und Implementierung konsequent für die zugehörigen Online-Plattformen erklärt.\r\n', '1', NULL, 5),
(9, 'Praxiswissen Online-Marketing', 'coverbilder/onlinemarketing_1.jpg', 'Autor: Lammenett, Erwin - Wie gelingt profitables Online-Marketing? Erwin Lammenett, Gründer einer renommierten Internetagentur, erläutert praxisnah und theoretisch fundiert die gesamte Palette der Online-Marketing-Instrumente. Sie erfahren, wie Sie diese Instrumente erfolgreich nutzen, welche Sie sinnvoll miteinander kombinieren können und wie Sie ein effizientes Controlling aufbauen. \r\n', '1', NULL, 2),
(10, 'The Good Entrepreneur ', 'coverbilder/entrepreneur_1.jpg', 'Autorin: Santini, Cristina - This book explores the relationship between entrepreneurship and doing good.\r\nAs research into entrepreneurship has evolved, so has the business environment and the society in which entrepreneurs work. Now more than ever, entrepreneurs are found to reflect on personal commitment, ethical issues and more recently, the influence they could have on society. In short they have embraced the concept of ‘the good entrepreneur’.', '1', NULL, 3),
(11, 'Marktforschung für die Smart Data World ', 'coverbilder/marktforschung_1.jpg', 'Autor: Keller, Bernhard - Kann Marktforschung aus Big Data wertvolle Informationen generieren? Was können Künstliche Intelligenz und Blockchain heute bereits dafür leisten? Was ist Hype und welche Instrumente haben Zukunftspotenzial in der Konsumentenforschung?\r\n \r\nExperten aus Instituten und Agenturen der Marktforschung, des Marketing, der Wissenschaft und aus Unternehmen schreiben in diesem Buch über ihre Visionen, neue Techniken und deren Einsatz.\r\n', '1', NULL, 3),
(12, 'Die mediatisierte Markenerweiterung ', 'coverbilder/markenerweiterung_1.jpg', 'Autor: Kist, Edgar Leander - Was bislang undenkbar schien, nämlich dass Nicht-Medienmarken anspruchsvolle Medienangebote unter ihrem etablierten Markennamen (»Markenmedien«) betreiben und damit in Konkurrenz zu etablierten Medien treten, ist in der Zwischenzeit – so zeigen vielfältige Beispiele – zu einer vermeintlich willkommenen Vorgehensweise avanciert. ', '0', '', 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);
