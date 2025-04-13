-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2025 at 08:42 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ama`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblarticle`
--

CREATE TABLE `tblarticle` (
  `id` int(11) NOT NULL,
  `rubrik` text NOT NULL,
  `ingress` text NOT NULL,
  `writer` text NOT NULL,
  `bread` text NOT NULL,
  `created` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblarticle`
--

INSERT INTO `tblarticle` (`id`, `rubrik`, `ingress`, `writer`, `bread`, `created`) VALUES
(1, '”The Last of Us”-stjärnan Bella Ramsey om att skådespela med autism', 'Skådespelaren Bella Ramsey, aktuell i säsong två av hyllade ”The Last of Us”, avslöjar hur hennes autismdiagnos har påverkat hur hon arbetar med rollfigurer och känslor.\r\n– Jag har ägnat hela livet åt att tolka människor, säger Bella Ramsey.', 'Kim Veerabuthroo Nordberg', '”The Last of Us” handlar om världen efter ett förödande svampvirus. Den första säsongen (2023) hyllades över världen, inte minst tack vare den begåvade unga huvudrollsinnehavaren.\r\n\r\n– Jag har ägnat hela livet åt att tolka människor och deras mikroskopiska ansiktsuttryck, kopplade till känslor. Jag har tagit in alldeles för mycket, vilket har varit ett problem men samtidigt hjälpsamt för mig som skådespelare, säger Bella Ramsey.\r\n\r\nFick diagnos efter första säsongen\r\nDet var under inspelningen av den första säsongen som en medarbetare antydde att Ramsey visade klassiska tecken på autism. Nu, när säsong två har premiär, har Ramsey fått sin diagnos, och berättar att den hjälper henne som skådespelare.\r\n\r\n– Det har nog bara varit hjälpsamt och antagligen skälet till att jag kunnat göra allt jag gjort och sitta här idag, säger Bella Ramsey.\r\n\r\nI klippet berättar Bella Ramsey hur det var att spela mot kollegan Pedro Pascal, och vad vi kan vänta oss av säsong två av ”The Last of Us”, som har premiär den 14 april.', '2025-04-12'),
(2, 'Historiska fiender enas: Kan Kina, Japan och Sydkorea utmana Trumps handelskrig?', 'Sydkorea, Kina och Japan har enats om att stärka sin frihandel. Historiskt har trion varit fiender. Frågan är om de tre länderna nu kan utmana Donald Trumps tullar.', 'Jasmine Gestblom', 'I slutet av mars enades Sydkorea med Japan och Kina om att stärka frihandeln länderna emellan. Mötet ägde rum i den sydkoreanska huvudstaden Seoul, under en tid då världsekonomin var i gungning efter den amerikanske presidenten Donald Trumps aggressiva tullpolitik.\r\n\r\nI ett uttalande sa den sydkoreanske industriministern Ahn Duk-Geun att de tre länderna måste hitta ”gemensamma” svar på de globala utmaningar som de står inför.\r\n\r\n”Förutsättningarna vad gäller ekonomi och handel präglas i dag av ökad fragmentisering av den globala ekonomin”, stod det i uttalandet.\r\n\r\nBättre på att stå emot\r\nEtt resultat av samarbetet skulle kunna bli att trion står starkare vid framtida ekonomiska nedgångar, säger Helena Löfgren gruppchef på Nationellt kunskapscentrum om Kina:\r\n\r\n– Jag tror att det kan innebära till exempel effektivare värdekedjor, nya marknader, teknologisk utveckling och mer innovation. Det kan innebära att man blir mer resiliens i dem här värdekedjorna, mot globala chocker då när sådana här saker sker som geopolitiska störningar eller globala ekonomiska nedgångar, säger hon.\r\n\r\nVarför väcker det reaktioner på sociala medier att den här trion har enats – och kan de utmana USA på riktigt?', '2025-04-12'),
(3, 'Släppta journalisten om Joakim Medin: Sverige bör byta fokus', 'För störst chans till framgång bör kravet från Sveriges regering inte i första hand vara att journalisten Joakim Medin blir frisläppt, utan att Turkiet ska lägga fram ett åtal.\r\n\r\nDet menar den tyska journalisten Deniz Yücel, som själv satt i samma turkiska fängelse i över ett år.', 'Christoffer Wendick', '– Det skulle innebära en chans att åtminstone få Joakim släppt från häktet, med husarrest och reseförbud. Vilket vore ett steg i rätt riktning, säger Deniz Yücel när SVT träffar honom i Berlin.\r\n\r\nDeniz Yücel var korrespondent för den tyska tidningen Die Welt när han greps av turkiska myndigheter i februari 2017, anklagad för att sprida terroristpropaganda och underminera regeringen. Såväl medierna som allmänheten mobiliserades snabbt i en kampanj för att få honom frisläppt, men taktiken som Deniz Yücel främst väljer att lyfta fram i dag är den tyska regeringens val att i första hand kräva fram ett åtal av Turkiet.\r\n\r\n– Turkiet är ingen rättsstat, men de lägger mycket möda på att framstå som att de har ett oberoende rättsväsende. När svenska regeringen därför säger ”Hallå, släpp honom”, så kommer den turkiska regeringen svara ”Vi har ett oberoende rättsväsende som fattar beslutet”.\r\n\r\nNär åtalet till slut presenterades i Deniz Yücels fall, ett år efter gripandet, släpptes han omedelbart på fri fot trots att rättsprocessen fortsatt var pågående.\r\n\r\nFörsta telefonsamtalet till frun\r\nJournalisten Joakim Medin har suttit fängslad i Turkiet sedan den 27 mars, anklagad för kopplingar till terroristorganisation och för att ha förolämpat president Erdogan. Under fredagen fick han för första gången sedan gripandet tala med sin fru Sofie Axelsson, i ett telefonsamtal från högsäkerhetsfängelset Marmara.\r\n\r\n– Han var som vanligt. Han lät glad. Kunde skratta. Och jag kunde reta honom lite, sade hon till Dagens ETC efter samtalet.\r\n\r\nI ett brev som ETC:s chefredaktör Andreas Gustavsson har publicerat på X, skriver Medin att han är tacksam för det stöd som riktats hans håll.\r\n\r\n”Jag hoppas fortfarande att det här kan gå att lösa snabbt. Jag vill fortfarande tro på att pennan är mäktigare än svärdet”, tillägger Medin.\r\n\r\nUtrikesdepartementet meddelar att de fortsatt arbetar intensivt med fallet och använder de metoder som bedöms ha störst chans att ge framgång, men kan inte gå in på närmare detaljer.', '2025-04-12'),
(6, 'oujopäå', 'hgfhgfhhfh', 'htgdghf', 'hgfhfghf', '2025-04-13');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `username`, `password`, `role`) VALUES
(1, 'user1', 'a722c63db8ec8625af6cf71cb8c2d939', 100),
(2, 'user2', 'pass2', 10),
(6, 'user3', '10', 3),
(7, 'user3', '3afc79b597f88a72528e864cf81856d2', 3),
(8, 'user4', '100', 0),
(9, 'user5', '100', 0),
(10, 'user6', '100', 0),
(11, 'user11', '0102812fbd5f73aa18aa0bae2cd8f79f', 100);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblarticle`
--
ALTER TABLE `tblarticle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblarticle`
--
ALTER TABLE `tblarticle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
