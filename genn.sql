-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2015 at 06:12 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `genn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(9) NOT NULL,
  `admin_name` varchar(40) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `admin_password` varchar(40) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_password`) VALUES
(1, 'dvs', '123'),
(2, 'pratik', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(2) NOT NULL,
  `cat_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Laptops'),
(9, 'Televisions & Players'),
(3, 'Digital Cameras'),
(4, 'Computer Peripherals'),
(5, 'Mobiles & Tablets'),
(6, 'Storage Medias'),
(7, 'Printers'),
(8, 'Games & Consoles'),
(10, 'Other Electronics');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `c_id` int(9) NOT NULL,
  `org_name` varchar(45) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `owner_name` varchar(45) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_username` varchar(45) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_password` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_email` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_mno` bigint(12) DEFAULT '0',
  `c_city` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_address` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `c_pcode` int(6) NOT NULL DEFAULT '0',
  `c_icon` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `org_name`, `owner_name`, `c_username`, `c_password`, `c_email`, `c_mno`, `c_city`, `c_address`, `c_pcode`, `c_icon`) VALUES
(4, 'Kishan Store', 'KIshan Ranpara', 'kbranpara', 'kbranpara', 'kbranpara@yahoo.com', 9638481988, 'Morbi', 'Modi street, "Nilkanth",\r\nMorbi-363 641', 363641, 'kishan.jpg'),
(3, 'Himanshu & Company', 'Himanshu Bhavsar', 'hbhavsar', 'hbhavsar', 'hbhavsar@gmail.com', 9033252102, 'Rajkot', 'Dhrol city, Rajkot District', 360001, '123.jpg'),
(2, 'Ashok Infotech', 'Ashok Chavda', 'akchavda', 'akchavda', 'akchavda007@gmail.com', 7567500150, 'Morbi', 'Bypass road, Kamdhenu Circle,\r\nMorbi-363 641', 363641, 'ashok.jpg'),
(8, 'Unitech Computers', 'Sumit Parekh', 'skparekh', 'skparekh', 'skparekh@gmail.com', 9033955765, 'Morbi', '"kamlesh", Ayodhyapuri Road,\r\nMorbi-363 641', 363641, 'sumit.jpg'),
(5, 'Angel Computers', 'Anjali Ranpara', 'a_ranpara', 'a_ranpara', 'aaranpara@rediffmail.in', 9408288327, 'Mumbai', 'Juhu Complex, "Angel Frenchise",\r\nMumbai', 123456, 'angel.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(9) NOT NULL,
  `user_type` varchar(10) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `name` varchar(40) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `user` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `subject` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `message` longtext COLLATE latin1_general_ci NOT NULL,
  `email` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `p_id` int(9) NOT NULL,
  `c_id` int(9) NOT NULL DEFAULT '0',
  `p_name` varchar(100) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `p_price` int(9) NOT NULL DEFAULT '0',
  `p_desc` longtext COLLATE latin1_general_ci NOT NULL,
  `p_image1` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `p_image2` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `p_image3` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `cat_id` int(2) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `c_id`, `p_name`, `p_price`, `p_desc`, `p_image1`, `p_image2`, `p_image3`, `cat_id`) VALUES
(1, 3, 'Nikon-d3200-dslr', 24900, 'Key Features of Nikon D3200 (Body with AF-S DX NIKKOR 18-55mm f/3.5-5.6G VR II Lens) DSLR Camera\r\nFull HD Recording\r\n3 inch TFT LCD\r\n24.2 Megapixel Camera\r\nCMOS Image Sensor\r\nISO 100 - ISO 6400 Sensitivity\r\n35 mm Equivalent Focal Length: 27 - 82.5 mm\r\nf/3.0 - f/5.6 Aperture', 'nikon-d3200-dslr-400x400-imaeyxfa7sybqxrr.jpeg', 'nikon-d3200-dslr-400x400-imaeyxfaesk7tvrg.jpeg', 'nikon-d3200-dslr-400x400-imaeyxfanzpaandh.jpeg', 3),
(2, 8, 'Sony ps3', 8999, 'Key Features of Sony PS3 500 GB with FIFA 14\r\nEthernet Connection\r\nHDMI Output\r\nUSB 2.0', 'sony-ps3.jpeg', 'ps2-400x400-imad5xnzp7hvg9a6.jpeg', 'ps2-400x400-imacy9xmg9fjzhz8.jpeg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(3) NOT NULL,
  `cat_id` int(9) NOT NULL DEFAULT '0',
  `slider_image` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `cat_id`, `slider_image`) VALUES
(1, 4, '1.jpg'),
(2, 5, '2.jpg'),
(3, 3, '3.jpg'),
(4, 9, '4.jpg'),
(5, 8, '5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `u_id` int(9) NOT NULL,
  `u_name` varchar(45) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `u_username` varchar(45) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `u_password` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `u_email` varchar(50) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `u_mno` bigint(10) NOT NULL DEFAULT '0',
  `u_city` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `u_address` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT '',
  `u_pcode` int(6) NOT NULL DEFAULT '0'
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_username`, `u_password`, `u_email`, `u_mno`, `u_city`, `u_address`, `u_pcode`) VALUES
(9, 'Dhrupal Ranpara', 'dr_ranpara', 'dr_ranpara', 'dr_ranpara@rediffmail.in', 9979180845, 'Morbi', 'DarbarGadh, Derasar Seri, "Shreeji Krupa", Morbi.', 363641),
(10, 'Chirag Soni', 'ca_soni', 'ca_soni', 'ca_ranpara@yahoo.com', 8758528048, 'Vadodra', 'White Palaca, Flat no.603, Vadodra', 456789),
(11, 'Akash Ashokan', 'aa_ezhava', 'aa_eshava', 'akash_ashokan@gmail.com', 9277653114, 'Rajkot', 'rajkot city, "Ashokan"', 360001),
(12, 'steve jobs', 'st_jobs', 'st_jobs', 'st_jobs@gmail.com', 9435893580, 'Aligarh', 'nthi khbr...!', 360001),
(13, 'Divyesh Chauhan', 'divyesh123', '123456', 'dbc.divyesh@gmail.com', 9638015504, 'Diu', 'Near Dena Bank, Ghodia Street\r\nPuniyA NO BHOSDO', 362520);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`c_id`), ADD UNIQUE KEY `c_id` (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`), ADD KEY `u_id` (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
