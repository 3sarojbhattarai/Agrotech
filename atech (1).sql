-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 08:17 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atech`
--

-- --------------------------------------------------------

--
-- Table structure for table `desk_info`
--

CREATE TABLE `desk_info` (
  `did` int(11) NOT NULL,
  `binfo` varchar(1000) NOT NULL,
  `title` varchar(50) NOT NULL,
  `tcare` varchar(1000) NOT NULL,
  `tcare_d` int(11) NOT NULL,
  `harvest` varchar(1000) NOT NULL,
  `harvest_d` varchar(10) NOT NULL,
  `market` varchar(100) NOT NULL,
  `market_d` int(11) NOT NULL,
  `category` varchar(10) NOT NULL,
  `sub_category` varchar(20) NOT NULL,
  `author` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desk_info`
--

INSERT INTO `desk_info` (`did`, `binfo`, `title`, `tcare`, `tcare_d`, `harvest`, `harvest_d`, `market`, `market_d`, `category`, `sub_category`, `author`) VALUES
(7, 'a', 'asdfasdf', 'a', 1, 'a', 'a', 'a', 2, 'animal', '', ''),
(8, 'Poultry also includes other birds that are killed for their meat, such as the young of pigeons (known as squabs) but does not include similar wild birds hunted for sport or food and known as game', 'Poultry', 'elective breeding for fast growth, egg-laying ability, conformation, plumage and docility took place over the centuries, and modern breeds often look very different from their wild ancestors. Although some birds are still kept in small flocks in extensive systems, most birds available in the market today are reared in intensive commercial enterprises.', 2, 'Poultry is the second most widely eaten type of meat globally and, along with eggs, provides nutritionally beneficial food containing high-quality protein accompanied by a low proportion of fat. All poultry meat should be properly handled and sufficiently cooked in order to reduce the risk of food poisoning.', 'ince ', 'In meat breeds, these birds are sometimes castrated (often chemically) to prevent aggression.[5] The', 2, 'animal', '', ''),
(9, 'Poultry also includes other birds that are killed for their meat, such as the young of pigeons (known as squabs) but does not include similar wild birds hunted for sport or food and known as game', 'Poultry', 'elective breeding for fast growth, egg-laying ability, conformation, plumage and docility took place over the centuries, and modern breeds often look very different from their wild ancestors. Although some birds are still kept in small flocks in extensive systems, most birds available in the market today are reared in intensive commercial enterprises.', 2, 'Poultry is the second most widely eaten type of meat globally and, along with eggs, provides nutritionally beneficial food containing high-quality protein accompanied by a low proportion of fat. All poultry meat should be properly handled and sufficiently cooked in order to reduce the risk of food poisoning.', 'ince ', 'In meat breeds, these birds are sometimes castrated (often chemically) to prevent aggression.[5] The', 2, 'animal', '', 'erc'),
(10, 'potato is very helpful for the health and making our fooding vegetables. ', 'potato', 'it must be prevented from varous animals and diseases.', 3, 'it is harvested from root ', '90', 'it  has valuer ranging from rs 20 to 30 per kg', 2, 'plant', 'horticulture', 'saroj'),
(11, 'rose is red in colour and very smelly flower.  it is the symbol of love', 'rose', 'it must be provided sufficient water at the time of planting', 3, 'it can not be harvested', '50', 'sdlfasfla', 3, 'plant', 'floriculture', 'saroj'),
(12, 'Bees are flying insects closely related to wasps and ants, known for their role in pollination and, in the case of the best-known bee species, the European honey bee, for producing honey and beeswax. Bees are a monophyletic lineage within the superfamily Apoidea and are presently considered a clade, called Anthophila. ', 'bee farming', 'Some species including honey bees, bumblebees, and stingless bees live socially in colonies. Bees are adapted for feeding on nectar and pollen, the former primarily as an energy source and the latter primarily for protein and other nutrients. Most pollen is used as food for larvae. Bee pollination is important both ecologically and commercially; the decline in wild bees has increased the value of pollination by commercially managed hives of honey bees.', 2, 'Bees range in size from tiny stingless bee species whose workers are less than 2 millimetres (0.08 in) long, to Megachile pluto, the largest species of leafcutter bee, whose females can attain a length of 39 millimetres (1.54 in). The most common bees in the Northern Hemisphere are the Halictidae, or sweat bees, but they are small and often mistaken for wasps or flies. Vertebrate predators of bees include birds such as bee-eaters; insect predators include beewolves and dragonflies.', '30days', 'Bees range in size from tiny stingless bee species whose workers are less than 2 millimetres (0.08 i', 2, 'animal', '', 'saroj');

-- --------------------------------------------------------

--
-- Table structure for table `erc_2`
--

CREATE TABLE `erc_2` (
  `day` int(11) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erc_2`
--

INSERT INTO `erc_2` (`day`, `action`) VALUES
(1, 'seeding'),
(10, 'watering'),
(20, 'watering'),
(30, 'picking'),
(31, 'planting'),
(40, 'watering'),
(50, 'useferterizer'),
(90, 'harvesting');

-- --------------------------------------------------------

--
-- Table structure for table `fquest`
--

CREATE TABLE `fquest` (
  `qid` varchar(50) DEFAULT NULL,
  `question` varchar(10000) DEFAULT NULL,
  `solved` tinyint(1) DEFAULT '0',
  `uname` varchar(25) DEFAULT NULL,
  `answers` int(200) DEFAULT '0',
  `date` date DEFAULT NULL,
  `status` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fquest`
--

INSERT INTO `fquest` (`qid`, `question`, `solved`, `uname`, `answers`, `date`, `status`) VALUES
('saroj_1', 'How to be a &quot;good farmer&quot;?', 0, 'saroj', 0, '2017-07-22', 0);

-- --------------------------------------------------------

--
-- Table structure for table `f_a_saroj_1`
--

CREATE TABLE `f_a_saroj_1` (
  `aid` int(11) NOT NULL,
  `answer` varchar(10000) DEFAULT NULL,
  `votes` int(11) DEFAULT '0',
  `username` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `logdetail`
--

CREATE TABLE `logdetail` (
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created` date NOT NULL,
  `email` varchar(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logdetail`
--

INSERT INTO `logdetail` (`username`, `password`, `created`, `email`, `name`) VALUES
('erc', 'erc', '2017-07-22', 'erc@erc.com', 'erc'),
('nimesh', 'nimesh', '2017-07-22', 'nimesh@nimesh.com', 'nimesh'),
('saroj', 'saroj', '2017-07-22', 'saroj@erc.com', 'saroj');

-- --------------------------------------------------------

--
-- Table structure for table `maindata`
--

CREATE TABLE `maindata` (
  `mid` varchar(100) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `catagory` varchar(25) NOT NULL,
  `author` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maindata`
--

INSERT INTO `maindata` (`mid`, `pname`, `catagory`, `author`) VALUES
('erc_2', 'rice farming', 'cashcrop', 'erc'),
('saroj_1', 'Tomato', 'cashcrop', 'saroj');

-- --------------------------------------------------------

--
-- Table structure for table `md_erc`
--

CREATE TABLE `md_erc` (
  `mpid` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `cleared` tinyint(1) DEFAULT '0',
  `mid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_erc`
--

INSERT INTO `md_erc` (`mpid`, `productname`, `startdate`, `cleared`, `mid`) VALUES
(2, 'rice farming', '2017-07-12', 0, 'erc_2');

-- --------------------------------------------------------

--
-- Table structure for table `md_nimesh`
--

CREATE TABLE `md_nimesh` (
  `mpid` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `cleared` tinyint(1) DEFAULT '0',
  `mid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `md_saroj`
--

CREATE TABLE `md_saroj` (
  `mpid` int(11) NOT NULL,
  `productname` varchar(50) DEFAULT NULL,
  `startdate` date DEFAULT NULL,
  `cleared` tinyint(1) DEFAULT '0',
  `mid` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `saroj_1`
--

CREATE TABLE `saroj_1` (
  `day` int(11) DEFAULT NULL,
  `action` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `saroj_1`
--

INSERT INTO `saroj_1` (`day`, `action`) VALUES
(1, ' seeding'),
(15, ' watering');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `desk_info`
--
ALTER TABLE `desk_info`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `f_a_saroj_1`
--
ALTER TABLE `f_a_saroj_1`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `logdetail`
--
ALTER TABLE `logdetail`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `maindata`
--
ALTER TABLE `maindata`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `md_erc`
--
ALTER TABLE `md_erc`
  ADD PRIMARY KEY (`mpid`);

--
-- Indexes for table `md_nimesh`
--
ALTER TABLE `md_nimesh`
  ADD PRIMARY KEY (`mpid`);

--
-- Indexes for table `md_saroj`
--
ALTER TABLE `md_saroj`
  ADD PRIMARY KEY (`mpid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `desk_info`
--
ALTER TABLE `desk_info`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `f_a_saroj_1`
--
ALTER TABLE `f_a_saroj_1`
  MODIFY `aid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `md_erc`
--
ALTER TABLE `md_erc`
  MODIFY `mpid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `md_nimesh`
--
ALTER TABLE `md_nimesh`
  MODIFY `mpid` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `md_saroj`
--
ALTER TABLE `md_saroj`
  MODIFY `mpid` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
