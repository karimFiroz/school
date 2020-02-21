<?php

$dsn = 'mysql:host=localhost;dbname=firozshah';

$con = new PDO($dsn, 'root', '');
$con->query("CREATE TABLE `sfdata` (
  `sn` varchar(11) NOT NULL,
  `id` varchar(25) NOT NULL,
  `snBn` varchar(250) NOT NULL,
  `snEn` varchar(50) NOT NULL,
  `sbrN` varchar(25) NOT NULL,
  `sdob` varchar(25) NOT NULL,
  `sbp` varchar(25) NOT NULL,
  `sclass` varchar(25) NOT NULL,
  `section` varchar(25) NOT NULL,
  `roll` varchar(25) NOT NULL,
  `religion` varchar(25) NOT NULL,
  `bgroup` varchar(25) NOT NULL,
  `mnid` varchar(25) NOT NULL,
  `mbrN` varchar(25) NOT NULL,
  `mdob` varchar(25) NOT NULL,
  `mnBn` varchar(250) NOT NULL,
  `mnEn` varchar(50) NOT NULL,
  `mmob` varchar(25) NOT NULL,
  `mocu` varchar(25) NOT NULL,
  `mdoy` varchar(25) NOT NULL,
  `fnid` varchar(25) NOT NULL,
  `fbrN` varchar(25) NOT NULL,
  `fdob` varchar(25) NOT NULL,
  `fnBn` varchar(250) NOT NULL,
  `fnEn` varchar(50) NOT NULL,
  `fmob` varchar(25) NOT NULL,
  `focu` varchar(25) NOT NULL,
  `fdoy` varchar(25) NOT NULL,
  `tdiv` varchar(25) NOT NULL,
  `tdis` varchar(25) NOT NULL,
  `tunion` varchar(25) NOT NULL,
  `tpou` varchar(25) NOT NULL,
  `tword` varchar(25) NOT NULL,
  `tmoz` varchar(25) NOT NULL,
  `trdN` varchar(25) NOT NULL,
  `thN` varchar(25) NOT NULL,
  `tpost` varchar(25) NOT NULL,
  `tpcN` varchar(25) NOT NULL,
  `pdiv` varchar(25) NOT NULL,
  `pdis` varchar(25) NOT NULL,
  `punion` varchar(25) NOT NULL,
  `ppou` varchar(25) NOT NULL,
  `pword` varchar(25) NOT NULL,
  `pmoz` varchar(25) NOT NULL,
  `prdN` varchar(25) NOT NULL,
  `phN` varchar(25) NOT NULL,
  `ppost` varchar(25) NOT NULL,
  `ppcN` varchar(25) NOT NULL,
  `gname` varchar(50) NOT NULL,
  `gnid` varchar(25) NOT NULL,
  `gocu` varchar(25) NOT NULL,
  `grel` varchar(25) NOT NULL,
  `gmob` varchar(25) NOT NULL,
  `pic` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sfdata`
--

INSERT INTO `sfdata` (`sn`, `id`, `snBn`, `snEn`, `sbrN`, `sdob`, `sbp`, `sclass`, `section`, `roll`, `religion`, `bgroup`, `mnid`, `mbrN`, `mdob`, `mnBn`, `mnEn`, `mmob`, `mocu`, `mdoy`, `fnid`, `fbrN`, `fdob`, `fnBn`, `fnEn`, `fmob`, `focu`, `fdoy`, `tdiv`, `tdis`, `tunion`, `tpou`, `tword`, `tmoz`, `trdN`, `thN`, `tpost`, `tpcN`, `pdiv`, `pdis`, `punion`, `ppou`, `pword`, `pmoz`, `prdN`, `phN`, `ppost`, `ppcN`, `gname`, `gnid`, `gocu`, `grel`, `gmob`, `pic`) VALUES
('1', '1', '&#2475;&#2494;&#2480;&#2489;&#2494; &#2475;&#2494;&#2489;&#2478;&#2495;&#2470;&#2494;', 'FARHA FAHMIDA', '0123456789', '16/06/2008', 'CHAPAI NAWABGONG', 'SEVEN', 'B', '17', 'ISLAM', 'O+', '9876543210', '0123456789', '17/03/1978', '&#2478;&#2507;&#2488;&#2494;&#2435; &#2478;&#2472;&#2495;&#2480;&#2494; &#2454;&#2494;&#2468;&#2497;&#2472;', 'MST. MONIRA KHATUN', '01715-383451', 'HOUSE WIFE', '01/01/1969', '0123456789', '9876543210', '16/06/1964', '&#2478;&#2497;&#2435; &#2438;&#2476;&#2470;&#2497;&#2482; &#2453;&#2480;&#2495;&#2478;', 'MD. ABDUL KARIM', '01818-830761', 'TEACHER', '01/01/2016', 'CHATTOGRAM', 'CHATTOGRAM', 'AKBARSHAH', 'CHATTOGRAM CITY CORPORATI', '9 UTTOR PAHARTALI', 'FIROZSHAH', 'VITOR FIROZSHAH', 'E/M-04', 'FIROZSHAH COLONY', '4207', 'RAJSHAHI', 'CHAPAI NAWABGONG', 'ROHANPUR', 'ROHANPUR', '1 NO', 'SHEKH PARA', 'BAZER ROAD', 'E/721-B', 'ROHANPUR', '6420', 'AYESHA PERVIN', '9876543210', 'TEACHER', 'UNTY', '01234-567894', 'images/seven17.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sfdata`
--
ALTER TABLE `sfdata`
  ADD PRIMARY KEY (`id`);