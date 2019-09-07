-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2015 at 08:41 PM
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
(1, 'mike', '123'),
(2, 'mayur', '123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(2) NOT NULL,
  `cat_name` varchar(30) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

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
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`c_id`, `org_name`, `owner_name`, `c_username`, `c_password`, `c_email`, `c_mno`, `c_city`, `c_address`, `c_pcode`, `c_icon`) VALUES
(4, 'Kishan Store', 'KIshan Ranpara', 'kbranpara', 'kbranpara', 'kbranpara@yahoo.com', 9638481988, 'Morbi', 'Modi street, "Nilkanth",\r\nMorbi-363 641', 363641, 'kishan.jpg'),
(3, 'Himanshu & Company', 'Himanshu Bhavsar', 'hbhavsar', 'hbhavsar', 'hbhavsar@gmail.com', 9033252102, 'Rajkot', 'Dhrol city, Rajkot District', 360001, '123.jpg'),
(2, 'Ashok Infotech', 'Ashok Chavda', 'akchavda', '123456', 'akchavda007@gmail.com', 7567500150, 'Morbi', 'Bypass road, Kamdhenu Circle,\r\nMorbi-363 641', 363641, 'ashok.jpg'),
(8, 'Unitech Computers', 'Sumit Parekh', 'skparekh', 'skparekh', 'skparekh@gmail.com', 9033955765, 'Morbi', '"kamlesh", Ayodhyapuri Road,\r\nMorbi-363 641', 363641, 'sumit.jpg'),
(5, 'Angel Computers', 'Anjali Ranpara', 'a_ranpara', 'a_ranpara', 'aaranpara@rediffmail.in', 9408288327, 'Mumbai', 'Juhu Complex, "Angel Frenchise",\r\nMumbai', 123456, 'angel.jpg'),
(11, 'Divyesh Pvt. Ltd.', 'Divyesh Chauhan', 'dvsstore', '12345678', 'dbc_divyesh@yahoo.in', 9638015500, 'Rajkot', 'Dr. Yagnik Road\r\nNear Shaphire Tower.\r\n', 360003, '49754225_F_tn (1).jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_type`, `name`, `user`, `subject`, `message`, `email`) VALUES
(12, 'User', 'Divyesh Chauhan', 'divyesh123', 'Hi', 'Hello', 'dbc.divyesh@gmail.com');

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
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `c_id`, `p_name`, `p_price`, `p_desc`, `p_image1`, `p_image2`, `p_image3`, `cat_id`) VALUES
(1, 3, 'Nikon-d3200-dslr', 24900, 'Key Features of Nikon D3200 (Body with AF-S DX NIKKOR 18-55mm f/3.5-5.6G VR II Lens) DSLR Camera\r\nFull HD Recording\r\n3 inch TFT LCD\r\n24.2 Megapixel Camera\r\nCMOS Image Sensor\r\nISO 100 - ISO 6400 Sensitivity\r\n35 mm Equivalent Focal Length: 27 - 82.5 mm\r\nf/3.0 - f/5.6 Aperture', 'nikon-d3200-dslr-400x400-imaeyxfa7sybqxrr.jpeg', 'nikon-d3200-dslr-400x400-imaeyxfaesk7tvrg.jpeg', 'nikon-d3200-dslr-400x400-imaeyxfanzpaandh.jpeg', 3),
(2, 8, 'Sony ps3', 8999, 'Key Features of Sony PS3 500 GB with FIFA 14\r\nEthernet Connection\r\nHDMI Output\r\nUSB 2.0', 'sony-ps3.jpeg', 'ps2-400x400-imad5xnzp7hvg9a6.jpeg', 'ps2-400x400-imacy9xmg9fjzhz8.jpeg', 8),
(3, 3, 'Asus X52', 20000, 'Asus X52 Laptop\r\n4GB Ram\r\n320 Gb HDD', 'asus-400x400-imaeyk4ndyqgahqk.jpeg', 'asus-400x400-imaeyk4ngxghg5vy.jpeg', 'asus-400x400-imaeyk4nhbgfm6ff.jpeg', 1),
(12, 2, 'Seagate Hardrive ', 3900, 'Segate External Hard Drive\r\n1 TB\r\nNo Power Source Needed.\r\n1 year Warranty', 'seagate-stbv2000300-400x400-imadc2w4xgyx9bgh.jpeg', 'seagate-stbv2000300-400x400-imadc2w4azyzr8mg.jpeg', 'seagate-stbv2000300-400x400-imadc2w4fqkyugkr.jpeg', 6),
(13, 2, 'Hp Printer', 9000, 'HP Printer\r\nDeskjet Advantage 2645\r\nBest For Students', 'hp-deskjet-advantage-2645-400x400-imadxpnzjzyq2gzu.jpeg', 'hp-deskjet-advantage-2645-400x400-imadxpnzvknetubb.jpeg', 'hp-deskjet-advantage-2645-400x400-imadxpnzxgrdpxdf.jpeg', 7),
(14, 11, 'U Smart Watch', 2800, 'U Smart Watch\r\nManage Your Android Phone from your wrist\r\nEasy to operate and ,manage\r\nUses Bluetooth', 'u-watch-400x400-imae65erqheyjbj9.jpeg', 'u-watch-400x400-imae6apkv5grn8gy.jpeg', 'u-watch-400x400-imae65erkhdzfyyf.jpeg', 10),
(15, 4, 'Asus ZenFone2', 13000, 'Asus Zenphone 2\r\n32 Internal Memory\r\n2 Gb Ram\r\n2.4 Ghz Intel Processor', 'asus-ze551ml-ze551ml-6j333ww-400x400-imae6kggzusrx2cw.jpeg', 'asus-ze551ml-ze551ml-6j333ww-400x400-imae6kggfutghkg2.jpeg', 'asus-ze551ml-ze551ml-6j333ww-400x400-imae6kggvmkn7hwv.jpeg', 5),
(17, 11, 'Microsoft Mouse', 450, 'Microsoft Wireless Mouse\r\nWith Rechargeable Battery.', 'microsoft-mouse-3500-400x400-imaddgzdegrfzhvz.jpeg', 'microsoft-3500-400x400-imadwgc5hseuyxuf.jpeg', 'microsoft-mouse-3500-400x400-imaddgzdjuzyhyhg.jpeg', 4),
(18, 2, 'Dell Inspiron Notebook 512', 18999, 'Free Windows 10 Upgrade Available with This Laptop. Please Visit the Microsoft Website for the Upgrade.\r\nIntel Core i3\r\n4 GB DDR3 RAM\r\n500 GB HDD\r\nWindows 8.1\r\nWARRANTY\r\n1 Year Accidental Damages Service', 'dell-inspiron-notebook-400x400-imadwescm4yqy7qv.jpeg', 'asus-400x400-imaeyk4ndyqgahqk.jpeg', 'null', 1),
(19, 3, 'Asus High Studio', 39999, 'Asus X553MA-XX515D Notebook (1st PQC/ 2GB/ 500GB/ Free DOS) (90NB04X1-M09250)(15.6 inch, Black)\r\n????? ????? 2\r\nWrite a REVIEW\r\nAdd to WISHLIST\r\nPentium Quad Core\r\n2 GB DDR3 RAM\r\n500 GB HDD\r\nFree DOS\r\nWARRANTY\r\n1 Year Manufacturer Warranty', 'asus-notebook-400x400-imae2fkwpyzzmjnv.jpeg', 'asus-400x400-imaeyk4ngxghg5vy.jpeg', 'null', 1),
(20, 4, 'Batman Argham City', 999, 'Batman: Arkham Knight\r\nWhen the city you love is threatened by a pantheon of heinous villains, you can only fight the darkness as the darkness by becoming the Batman. Developed by Rocksteady Studios and published by Warner Bros. Interactive Entertainment, Batman: Arkham Knight is an action-adventure game that pits Batman against a new foe - Arkham Knight.', 'batman-arkham-knight-400x400-imadzqs2jut82zvg.jpeg', 'batman-arkham-knight-400x400-imadzqs2q2ebnqpr.jpeg', 'batman-arkham-knight-400x400-imadzqs2regzdhmz.jpeg', 8),
(21, 11, 'Sony Play Station 4', 38999, 'Key Features of Sony PlayStation 4 (PS4) 500 GB\r\nUSB 3.0\r\nEthernet Connection\r\nHDMI Output\r\n500 GB Hard Disk\r\nSony PS4\r\nFeatures such as an exceptional graphics performance and a customized memory make the PlayStation4 an immersive gaming experience. A processor that is 10 times more powerful than the PlayStation3 creates a setting that is bigger and bolder.\r\n\r\nPerformance\r\nCPU x86-64\r\nAMD Jaguar\r\nGPU 1.84\r\nTFLOPS\r\nRAM 8 GB\r\nGDDR5\r\n\r\nA single-chip custom processor ensures that your games run without a glitch while the 8 core Jaguar low power x86-64 AMD CPU allows for a smooth flow. An 8GB Graphics Card allows for an incredible gaming experience, supporting the most superior games. A 1.84 TFLOPS, AMD next-generation Radeon™ based graphics engine further enhances the experience.\r\n\r\nDUALSHOCK 4\r\nThe all-new DUALSHOCK 4 wireless controller brings inspired play to your hands. Featuring a host of brand new design changes like the SHARE button to show off your greatest gaming moments, a new touch pad, a speaker as well as a 3.5 mm audio jack built into the controller itself and a colored light bar, while still retaining the trademark layout of the Dualshock 3 we have all come to recognize and love, this is some of Sony''s best work yet. Easy drags, drops and flicks are facilitated by the 2 Point Touch Pad.\r\n\r\nKeys / Switches\r\n\r\nPS button, SHARE button, OPTIONS button, Directional buttons (Up/Down/Left/Right), Action buttons (Triangle, Circle, Cross, Square), R1/L1/R2/L2, Left stick / L3 button, Right stick / R3 button, Touch Pad Button.\r\n\r\nTouch Pad\r\n\r\n2 Point Touch Pad, Click Mechanism, Capacitive Type\r\n\r\nStorage\r\n500 GB\r\nHard Disk\r\n\r\nInstalling games becomes effortless with the PS4''s ability to store up to 500 GB of data.\r\n\r\nSoftware\r\nGaming on the PS4 is made easier with the console''s smart software.\r\n\r\nAutomatic Background Updates\r\n\r\nUpdates to the PlayStation 4 are downloaded and stored in the background, facilitating ease of use.\r\n\r\nPlayAsYouDownload\r\nRevolutionizing the gaming experience is the PlayAsYouDownload feature that allows you to play a game just as it starts downloading to your system.\r\n\r\n\r\n\r\n\r\nView all 5 features\r\nMedia\r\n\r\nThe PS4 has the ability to read DVDs at the rate of 8 CAV and Blu-Ray Discs at 6 CAV, making gaming a crystal-clear, high-definition experience.', 'sony-ps4.jpeg', 'sony-ps3.jpeg', 'null', 8),
(23, 8, 'Sony PS Play Station 3', 30000, 'Key Features of Sony PS3 500 GB with FIFA 14\r\nEthernet Connection\r\nHDMI Output\r\nUSB 2.0', 'sony-ps3.jpeg', 'ps2-400x400-imadb7b5dgp8gujg.jpeg', 'ps2-400x400-imacy9xmg9fjzhz8.jpeg', 8),
(24, 5, 'axl Dual Hybrid Pen Drive (32 GB)', 599, 'GENERAL SPECIFICATIONS\r\nInterface	USB On The Go\r\nBrand	AXL\r\nCapacity (GB)	32 GB\r\nModel	Dual Hybrid\r\nType	On-The-Go Pendrive\r\nCase Material	Plastic\r\nColor	Black\r\nWARRANTY\r\nWarranty Summary	5 years warranty\r\nDIMENSIONS\r\nWeight	9.8 g', 'axl-dual-hybrid-400x400-imaefbq5dzg7rqvw.jpeg', 'axl-dual-hybrid-400x400-imaefbq5dzg7rqvw.jpeg', 'null', 4),
(25, 5, 'San Disk 16 GB Pen Drive', 499, 'GENERAL SPECIFICATIONS\r\nInterface	USB 3.0\r\nBrand	Sandisk\r\nCapacity (GB)	16 GB\r\nModel	Ultra USB 3.0\r\nLED Indication	No\r\nType	Flash Drive\r\nCase Material	Plastic\r\nOS Supported	Mac\r\nForm Factor	Standard Flash Drive\r\nFeatures	High Speed & Comes with SanDisk SecureAccess Software Keeps Files Private\r\nColor	Black\r\n', 'sandisk-cz-48-400x400-imadw6z5qwrgesjt.jpeg', 'sandisk-sdcz48-016g-u46-100mb-s-400x400-imadw6z5mesnw2au.jpeg', 'sandisk-sdcz48-016g-u46-100mb-s-400x400-imadw6z5mesnw2au.jpeg', 4),
(27, 5, 'The Xerox Printer Cage', 1999, 'The Excellent Printer Cage!', 'xerox-006r03052-400x400-imadwaa4gzmmxh7v.jpeg', 'xerox-006r03052-400x400-imadwaa4z4vywmba.jpeg', 'xerox-006r03052-400x400-imadwaa4gzmmxh7v.jpeg', 4),
(29, 5, 'Dell Venue 730', 30000, 'Key Features of Dell Venue 7 3741 Tablet\r\n2 MP Primary Camera\r\n0.3 MP Secondary Camera\r\n6.95 inch Twisted Nematic Capacitive Touchscreen\r\n1.83 GHz Intel Atom Z3735G Quad Core Processor\r\nAndroid v4.4 (KitKat) OS\r\nWi-Fi Enabled\r\nExpandable Storage Capacity of 64 GB', 'dell-venue-7-3000-400x400-imae4er4fnddfqsg.jpeg', 'dell-venue-7-3000-400x400-imae4er468mymja2.jpeg', 'dell-venue-7-3000-400x400-imae4er4fnddfqsg.jpeg', 5),
(30, 11, 'Xiomi Mi-4', 21999, 'Key Features of Mi 4i\r\nUnibody Design, Ultra-compact Frame\r\n2nd-gen Snapdragon 615 Processor, 2GB RAM, 32 GB Flash\r\n5 inch Sharp/JDI 1080p Display\r\nAll-new Sunlight Display, Corning OGS Glass\r\n13MP Sony /Samsung Camera f/2.0 aperture, Two-tone Flash\r\n5MP Front Camera with Beautify\r\n4.4V 3120 mAh Battery, 4G Dual SIM\r\nMIUI 6 on Android L', 'mi-mi-4i-mzb4300in-mzb4345in-400x400-imae9he4xnfgeckd.jpeg', 'mi-mi-4i-mzb4300in-mzb4345in-400x400-imae9he4zbgtgmju.jpeg', 'mi-mi-4i-mzb4300in-mzb4345in-400x400-imae9he4xnfgeckd.jpeg', 5),
(31, 11, 'Asus Zenfone-5 Upgraded', 17000, 'Asus Zenfone 5 ZE551ML(Silver, With 2 GB RAM,With Full HD Display, With 16 GB)\r\nAndroid v5 (Lollipop) OS\r\n13 MP Primary Camera\r\n5 MP Secondary Camera\r\nDual Sim (GSM + LTE)\r\nWARRANTY\r\n1 year manufacturer warranty for Phone and 6 months warranty for in the box accessories', 'asus-ze551ml-ze551ml-6j333ww-400x400-imae6kggzusrx2cw.jpeg', 'asus-ze551ml-ze551ml-6j333ww-400x400-imae6kggvmkn7hwv.jpeg', 'asus-ze551ml-ze551ml-6j333ww-400x400-imae6kggzusrx2cw.jpegv', 5),
(33, 2, 'Fujitsu Life Bokok 514', 19999, 'Brand:	Fujitsu\r\nFamily Line:	Lifebook	Operating System:	DOS\r\nType:	Notebook	Processor:	Intel Core i3 (4th Generation)\r\nUsage Type:	Budget	Memory:	8 GB\r\nWarranty:	Manufacturer Warranty	Hard Drive Capacity:	500 GB\r\nDuration:	1 year	Bundled Items:	Wi-Fi, WebCam\r\nServiced In India:	Yes	SSD Capacity:	Not Specified (Others)', 'fujitsu.jpg', 'fujitsu2.jpg', 'fujitsu3.jpg', 1),
(34, 2, 'NEW Western Digital Elements USB Portable External Hard Disk Drive', 6999, 'Brand	WD\r\nModel	WDBU6Y0020BBK\r\nType	Portable External Hard Drive\r\nPart Number	WDBU6Y0020BBK\r\nConnectivity	USB 3.0\r\nOS Supported	Formatted NTFS for Windows: XP, Vista, 7, 8, Mac OS X: 10.6.5 (Requires Reformatting)\r\nForm Factor	Portable\r\nTransfer Speed	USB 3.0: 5 Gb/s\r\nExternal Power Required	No\r\nColor	Black\r\nFeatures	Quick Install Guide, USB Cable, High-capacity in a Sleek Design, Long-term Reliability, Durable Enclosure Designed, Pro Backup Software, Backward Compatibility with USB 2.0, Operating Temperature Range: 5 Deg C - 35 Deg C, Non-operating Temperature Range: -20 Deg C - 65 Deg C\r\nIn The Box	Hard Drive, USB Cable\r\nWeight	234 g\r\nDimensions	111 x 82.4 x 21 mm\r\nModel Name	Elements - 2 TB\r\nCapacity	2 TB', 'wd1.jpg', 'wd2.jpg', 'wd3.jpg', 6),
(35, 3, 'Segate 1Tb Hard Drive', 5999, 'Key Features of Seagate Expansion 2 TB External Hard Disk\r\nConnectivity: USB 3.0\r\nExternal Power: Yes\r\nSeagate Expansion 2 TB External Hard Disk Price: Rs. 6,574\r\nWith an overdose of storage space, your life couldn’t get any more convenient while you use this Seagate Expansion 2 TB External Hard Disk.\r\n\r\nEasy-to-use storage solution\r\n\r\nOur lives have been integrated with photographs and videos ever since portable cameras and smartphones have been born, and we have been capturing and recording every special moment dumping them in our computers filling up the disk space. This generously spacious 2 TB external hard disk relieves your computer instantly while you conveniently transfer all your data in a simple drag-and-drop manner. This device makes it easy for both beginners and pro’s to transfer and store data with no hassle.\r\n\r\nPlug and play\r\n\r\nRequiring no prior installation or formatting, this drive is extremely easy to use. All you require to do is plug it into the USB port and the device is automatically recognized by your system and is ready to use. Create folders and copy files that need to be transferred like how you would do within your computer between folders.\r\n\r\nFast data transfer with USB 3.0 connectivity\r\n\r\nExperience blazing speeds while you transfer massive video files and data with the USB 3.0 connectivity that is three times faster than the USB 2.0 interface. The drive also supports data transfers with the USB 2.0 interface but at slower a slower speed.', 'seagate-stbv2000300-400x400-imadc2w4azyzr8mg.jpeg', 'seagate-stbv2000300-400x400-imadc2w4fqkyugkr.jpeg', 'seagate-stbv2000300-400x400-imadc2w4hjscgjub.jpeg', 6),
(36, 3, 'Silicon Power 512Gb', 3999, '512Gb Hard Drive\r\n3.0 USB\r\n117gm\r\n\r\n5 Year Warranty', 'silicon-power-armor-400x400-imadwhdhzdhmr8yg.jpeg', 'seagate-stbv2000300-400x400-imadc2w4hjscgjub.jpeg', 'seagate-stbv2000300-400x400-imadc2w4hjscgjub.jpeg', 6),
(37, 4, 'Sony CyberShot', 8999, 'Brand:	Sony\r\nMPN:	W830	Optical Zoom:	8x\r\nBattery Type:	Li-ion	Digital Zoom:	32x\r\nWarranty:	Manufacturer Warranty	Display Size:	2.7 inch\r\nDuration:	2 years	Memory Card Format:	Memory Stick Duo;Memory Stick PRO Duo;Memory Stick PRO HG Duo;SDHC;SDXC;Micro SD;Micro SDHC\r\nWarranty Service:	Repair	Camera Type:	Compact Digital Cameras\r\nWarranty Partner Name:	Sony India Pvt Ltd	Sensor Resolution:	20.1 Megapixels\r\nWarranty Details:	Repair	Lens:	Not Interchangeable Lens\r\nWarranty Conditions:	Should Not Be Damaged	Product:	With Kit', 'sony1.jpg', 'sony2.jpg', 'sony3.jpg', 3),
(40, 5, 'Canon Digital DSLR Lens', 12999, '\r\nLens Construction (Elements/Groups)	7 elements in 6 groups (with one aspherical lens element)\r\nPicture Angle with 35mm (135) format	47°\r\nPicture Angle with Nikon DX Format	31°30''\r\nMinimum f/stop	f/16\r\nClosest focusing distance	0.45 m\r\nMaximum reproduction ratio	0.15X\r\nFilter Attachment Size	58mm\r\nLens Cap	Snap-on\r\nLens Hood	HB-47\r\nLens Case	CL-1013', 'lens1.jpg', 'lens2.jpg', 'lens3.jpg', 3),
(41, 11, 'Canon DSLR Camera with Lens', 60000, '\r\nCondition:	\r\nNew: A brand-new, unused and undamaged item. See the seller''s listing for full details. See all condition definitions\r\nBrand:	generic\r\nRefund will be given as:	Money Back	All returns accepted:	Returns Accepted\r\nRestocking Fee:	No	Color:	Black\r\nReturn shipping will be paid by:	Buyer	Compatible Brand:	For Canon\r\nType:	Fisheye	Item must be returned within:	14 Days\r\nColour:	generic	PrimaryCategoryID:	3323\r\nReference Number:	141493416242	PrimaryCategoryName:	Cameras & Photo:Lenses & Filters:Lenses', 'canon1/jpg', 'canon2.jpg', 'null', 3),
(45, 11, 'hp Black-White Printer', 3999, '\r\nCondition:	\r\nUsed: An item that has been used previously. The item may have some signs of wear. See the seller’s ... Read more\r\nBrand:	HP\r\nConnectivity:	USB 2.0	Technology:	Inkjet\r\nWarranty:	No Warranty	Output Type:	color & black-white', 'hp1.jpg', 'hp2.jpg', 'hp3.jpg', 7),
(46, 2, 'Canon Advance Printer', 12999, '\r\nCondition:	\r\nNew: A brand-new, unused and undamaged item. See the seller''s listing for full details. See all condition definitions\r\nBrand:	Canon\r\nModel:	MG2570S	Technology:	Inkjet\r\nWarranty:	Manufacturer Warranty	Output Type:	Colour\r\nDuration:	1 year', 'canon11.jpg', 'canon12.jpg', 'null', 7),
(47, 3, 'Canon Pixma Printer', 7999, '\r\nCondition:	\r\nNew: A brand-new, unused and undamaged item. See the seller''s listing for full details. See all condition definitions\r\nBrand:	Canon\r\nWarranty:	Manufacturer Warranty	Output Type:	Colour\r\nDuration:	1 year	Model:	MG2570S', 'pixma1.jpg', 'pixma2.jpg', 'null', 7),
(49, 3, 'Dell Television 52'' inch', 59999, 'Dell FUll HD \r\n3D SUpported television\r\nwith 3 Years\r\n+\r\n1 Year Extended Warranty', 'dell-e1914h-400x400-imadpzzgmhxwdxat.jpeg', 'dell-e1914h-400x400-imadpzzg2zjfaphh.jpeg', 'dell-e1914h-400x400-imadpzzggvanxjau.jpeg', 9),
(50, 5, 'Samsung Android Supported TV', 69000, 'Condition:	\r\nNew: A brand-new, unused and undamaged item. See the seller''s listing for full details. See all condition definitions\r\nBrand:	Samsung\r\nModel No:	40J5100	Screen Size:	40"\r\nModel Year:	2015	Screen Type:	LED\r\nWarranty:	Seller Warranty	Display Size:	40"\r\nDuration:	1 year	Resolution:	Full HD', 'samsung1.jpg', 'samsung1.jpg', 'null', 9),
(51, 11, 'Sony Bravia Imported TV', 39999, '\r\nCondition:	\r\nNew: A brand-new, unused and undamaged item. See the seller''s listing for full details. See all condition definitions\r\nBrand:	Sony Bravia\r\nModel No:	40W700	Screen Size:	40"\r\nModel Year:	2015	Screen Type:	LED\r\nWarranty:	Seller Warranty	Display Size:	40"\r\nDuration:	1 year	Resolution:	Full HD\r\nWarranty Service:	Repair', 'bravia.jpg', 'bravia.jpg', 'null', 9),
(52, 3, 'Jabra Bluetooth Inability ', 999, 'Clip-on Design\r\nWireless Connectivity\r\nIn-the-ear Headset\r\nBuilt-in Mic', 'jabra-bt-2046-400x400-imadmgxhmz5qrcps.jpeg', 'jabra-bt-2046-400x400-imadmgxhtjqgmk2b.jpeg', 'jabra-bt-2046-400x400-imadmgxhwatvfe8s.jpeg', 10),
(53, 4, 'Orbit Smart Watch Cell Handler', 6999, '(Blue and Black)\r\n????? ????? 7\r\nWrite a REVIEW\r\nAdd to WISHLIST\r\nOrbit Connect\r\n7 Days+ Battery\r\nWater Proof\r\n24 Hour Tracking\r\nWARRANTY\r\n1 Year Manufacture Warranty', 'orbit-runtastic-400x400-imae9b7y5wehb64a.jpeg', 'orbit-runtastic-400x400-imae95w28xwamvdx.jpeg', 'skullcandy-s6hsdz-072-400x400-imadfb4rvhabubda.jpeg', 10),
(55, 2, 'Skull Candy HeadPhone', 2999, 'Wired Connectivity\r\nOver the Ear Headphone\r\nOver the Head\r\nCircumaural Headphone', 'skullcandy-s6hsdz-072-400x400-imadfb4rvhabubda.jpeg', 'skullcandy-s6hsdz-072-400x400-imadfb4rvhhz3snw.jpeg', '', 10);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE IF NOT EXISTS `review` (
  `r_id` int(9) NOT NULL,
  `u_id` int(9) NOT NULL,
  `p_id` int(9) NOT NULL,
  `u_review` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`r_id`, `u_id`, `p_id`, `u_review`) VALUES
(1, 13, 1, 'This is a very nice camera.\r\nAffortable Price with excelent features.'),
(2, 13, 1, 'Hello'),
(3, 11, 1, 'Very Bad Camera\r\nBetter to get Cannon Camera'),
(4, 11, 2, 'Its a very good gaming console with affortable price.'),
(5, 13, 6, 'hello bad laptop'),
(6, 13, 12, 'Any other colour available?'),
(7, 13, 11, 'bakwas');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE IF NOT EXISTS `slider` (
  `slider_id` int(3) NOT NULL,
  `cat_id` int(9) NOT NULL DEFAULT '0',
  `slider_image` varchar(200) COLLATE latin1_general_ci NOT NULL DEFAULT ''
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `cat_id`, `slider_image`) VALUES
(13, 4, '1.jpg'),
(12, 5, '2.jpg');

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
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_username`, `u_password`, `u_email`, `u_mno`, `u_city`, `u_address`, `u_pcode`) VALUES
(9, 'Dhrupal Ranpara', 'dr_ranpara', '123', 'dr_ranpara@rediffmail.in', 9979180845, 'Morbi', 'DarbarGadh, Derasar Seri, "Shreeji Krupa", Morbi.', 363641),
(10, 'Chirag Soni', 'ca_soni', '123', 'ca_ranpara@yahoo.com', 8758528048, 'Vadodra', 'White Palaca, Flat no.603, Vadodra', 456789),
(11, 'Akash Ashokan', 'aa_ezhava', '123', 'akash_ashokan@gmail.com', 9277653114, 'Rajkot', 'rajkot city, "Ashokan"', 360001),
(12, 'steve jobs', 'st_jobs', '123', 'st_jobs@gmail.com', 9435893580, 'Aligarh', 'nthi khbr...!', 360001),
(13, 'Divyesh Chauhan', 'divyesh123', '12345678', 'dbc.divyesh@gmail.com', 9638015504, 'Diu', 'Near Dena Bank, \r\nOpp. Pranami Temple,\r\nGhodia Street Diu.', 362520),
(14, 'Punit Chundariya', 'punit12', '123', 'punit@gmail.com', 9856474523, 'Gandhinagar', 'Gandhi Road\r\nNear Imperial Heights.', 365214);

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
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`r_id`);

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
  MODIFY `cat_id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `c_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=56;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `r_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
