-- phpMyAdmin SQL Dump
-- version 4.4.15
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2018 at 11:30 AM
-- Server version: 5.6.26-enterprise-commercial-advanced
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thm`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `cartid` varchar(240) NOT NULL,
  `product` varchar(240) NOT NULL,
  `product_id` varchar(240) NOT NULL,
  `qty` varchar(240) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cartid`, `product`, `product_id`, `qty`, `time`) VALUES
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535322356'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535322369'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535322420'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325033'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325221'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325315'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325317'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325337'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325351'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325354'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325370'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325374'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325378'),
('ob14nmc2sjfb4ll87q224st252', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'AMP004', '1', '1535325672'),
('ob14nmc2sjfb4ll87q224st252', 'BAKED COCONUT CHIPS', 'BAK001', '1', '1535325768'),
('ob14nmc2sjfb4ll87q224st252', 'BAKED COCONUT CHIPS', 'BAK001', '1', '1535325803'),
('ob14nmc2sjfb4ll87q224st252', 'BAKED COCONUT CHIPS', 'BAK001', '1', '1535325900');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE IF NOT EXISTS `checkout` (
  `id` varchar(50) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `item` varchar(100) DEFAULT NULL,
  `qty` varchar(100) NOT NULL,
  `subtotal` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `imageurl` varchar(100) NOT NULL,
  `time` varchar(30) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `username`, `item`, `qty`, `subtotal`, `category`, `imageurl`, `time`) VALUES
('59fac96086d39', 'emma1234', 'Roland Wears', '1', '500', 'Cosmetics', 'itemimages/59fac8b18c8bc319231509607601/IMG-20151030-WA0009.jpg', '1509607776'),
('5a8dba3ab2c6c', 'admin', 'Business Cards', '1', '4500', 'Business', 'itemimages/5a887fe776db561261518895079/2.jpg', '1519237690'),
('5a8dba3ab2c6c', 'admin', 'Kitchen Cabinets', '1', '47000', 'Cabinets', 'itemimages/5a88821626e73221511518895638/cabinets_after6.jpg', '1519237691'),
('5a8e19b92a42c', 'admin', 'Business Cards', '1', '4500', 'Business', 'itemimages/5a887fe776db561261518895079/2.jpg', '1519262137'),
('5a8e19b92a42c', 'admin', 'Kitchen Cabinets', '1', '47000', 'Cabinets', 'itemimages/5a88821626e73221511518895638/cabinets_after6.jpg', '1519262138'),
('5a8ef1bda63e4', '', 'Business Cards', '1', '4500', 'Business', 'itemimages/5a887fe776db561261518895079/2.jpg', '1519317437'),
('5acf0d57996ee', 'admin', 'PVC Closets', '1', '59999', 'Home Comforts', 'itemimages/5a88804c85f81150191518895180/bathroom-cabinet-above-the-toilet.jpg', '1523518807'),
('5acf0d57996ee', 'admin', 'Business Cards', '1', '4500', 'Business', 'itemimages/5a887fe776db561261518895079/2.jpg', '1523518808');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE IF NOT EXISTS `invoice` (
  `id` varchar(50) NOT NULL DEFAULT '',
  `firstname` varchar(100) DEFAULT NULL,
  `lastname` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `zipcode` varchar(100) DEFAULT NULL,
  `mobile` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `country` varchar(30) DEFAULT NULL,
  `address` text NOT NULL,
  `payment_method` text,
  `ordernotes` text,
  `checkoutid` varchar(30) DEFAULT NULL,
  `shiptofirstname` varchar(100) DEFAULT NULL,
  `shiptolastname` varchar(100) DEFAULT NULL,
  `shiptoaddress` varchar(100) DEFAULT NULL,
  `shiptostate` varchar(100) DEFAULT NULL,
  `shiptocountry` varchar(100) DEFAULT NULL,
  `total` varchar(30) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `firstname`, `lastname`, `email`, `zipcode`, `mobile`, `state`, `country`, `address`, `payment_method`, `ordernotes`, `checkoutid`, `shiptofirstname`, `shiptolastname`, `shiptoaddress`, `shiptostate`, `shiptocountry`, `total`, `status`, `time`) VALUES
('5a8e12f9f347e', 'Emmanuel', 'Paul', 'ewebstech@gmail.com', '', '08133918455', 'Anambra', '', '12, Adebowale Street', 'mastercard', '', '5a8dba3ab2c6c', 'Roland', 'Kevin', '12, Gonoi Street, Gaki Avenue', 'Anambra', 'Nigeria', '51500', 'unconfirmed', '1519260409'),
('5a8e2065a1f02', 'Emmanuel', 'Paul', 'ewebstech@gmail.com', '455889', '08133918455', 'Adamawa', 'Nigeria', '12, Adebowale Street Kole', 'mastercard', '', '5a8e19b92a42c', '', '', '', '', 'Nigeria', '51500', 'unconfirmed', '1519263845'),
('5a8e209f7dd7c', 'Emmanuel', 'Paul', 'ewebstech@gmail.com', '455889', '08133918455', 'Adamawa', 'Nigeria', '12, Adebowale Street Kole', 'mastercard', 'Okay, I need trucks to carry my goods carefully', '5a8e19b92a42c', '', '', '', '', 'Nigeria', '51500', 'unconfirmed', '1519263903'),
('5acf0d7d3e4cc', 'Emmanuel', 'Paul', 'admin1@admin.com', '455889', '09053782296', 'Jigawa', 'Nigeria', '12, Adebowale Street', 'mastercard', '', '5acf0d57996ee', '', '', '', '', 'Nigeria', '64499', 'unconfirmed', '1523518845');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` varchar(100) NOT NULL DEFAULT '',
  `itemtitle` varchar(200) DEFAULT NULL,
  `itemcategory` varchar(200) DEFAULT NULL,
  `standardprice` varchar(50) DEFAULT NULL,
  `discountprice` varchar(50) DEFAULT NULL,
  `quantity` varchar(10) DEFAULT NULL,
  `reviewstar` varchar(5) DEFAULT NULL,
  `imageurl` varchar(200) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `description` text,
  `shipping` text,
  `userid` varchar(30) DEFAULT NULL,
  `saletime` varchar(20) DEFAULT NULL,
  `time` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `itemtitle`, `itemcategory`, `standardprice`, `discountprice`, `quantity`, `reviewstar`, `imageurl`, `status`, `description`, `shipping`, `userid`, `saletime`, `time`) VALUES
('5a886d7912e1011256', 'Dubai Shoes', 'Foot Wears', '6000', '4500', '3', '4', 'itemimages/5a886d7851545100751518890360/custom-made-upholstery.jpg', 'confirmed', 'High heeled. Double Tramped.', 'Free Shipping within Lagos State', 'admin', '1519081200', '1518890361'),
('5a886d79b346330929', 'Dubai Shoes', 'Foot Wears', '6000', '4500', '3', '4', 'itemimages/5a886d7851545100751518890361/pic1.jpg', 'confirmed', 'High heeled. Double Tramped.', 'Free Shipping within Lagos State', 'admin', '1519081200', '1518890363'),
('5a886d7a64a2b20278', 'Dubai Shoes', 'Foot Wears', '6000', '4500', '3', '4', 'itemimages/5a886d7851545100751518890362/wittman_4336_0001_D.jpg', 'confirmed', 'High heeled. Double Tramped.', 'Free Shipping within Lagos State', 'admin', '1519081200', '1518890365'),
('5a887fe79fcbb25743', 'Business Cards', 'Business', '6000', '4500', '40', '3', 'itemimages/5a887fe776db561261518895079/2.jpg', 'confirmed', 'Available for prints ', 'Paid Shipping', 'admin', '1519340400', '1518895080'),
('5a887fe7bbe384892', 'Business Cards', 'Business', '6000', '4500', '40', '3', 'itemimages/5a887fe776db561261518895080/3.jpg', 'confirmed', 'Available for prints ', 'Paid Shipping', 'admin', '1519340400', '1518895082'),
('5a887fe7d8a1923333', 'Business Cards', 'Business', '6000', '4500', '40', '3', 'itemimages/5a887fe776db561261518895081/5.jpg', 'confirmed', 'Available for prints ', 'Paid Shipping', 'admin', '1519340400', '1518895084'),
('5a887fe7f3f0617658', 'Business Cards', 'Business', '6000', '4500', '40', '3', 'itemimages/5a887fe776db561261518895082/6.jpg', 'confirmed', 'Available for prints ', 'Paid Shipping', 'admin', '1519340400', '1518895086'),
('5a88804cc9d3017672', 'PVC Closets', 'Home Comforts', '60000', '59999', '12', '5', 'itemimages/5a88804c85f81150191518895180/bathroom-cabinet-above-the-toilet.jpg', 'confirmed', 'White and Black Colours available', 'Free Shipping Around Nigeria', 'admin', '1519772400', '1518895181'),
('5a88804d3a3d41185', 'PVC Closets', 'Home Comforts', '60000', '59999', '12', '5', 'itemimages/5a88804c85f81150191518895181/bnas.jpg', 'confirmed', 'White and Black Colours available', 'Free Shipping Around Nigeria', 'admin', '1519772400', '1518895183'),
('5a88804d8b95d14022', 'PVC Closets', 'Home Comforts', '60000', '59999', '12', '5', 'itemimages/5a88804c85f81150191518895182/over-the-toilet-cabinets-ikea.jpg', 'confirmed', 'White and Black Colours available', 'Free Shipping Around Nigeria', 'admin', '1519772400', '1518895185'),
('5a8882167a6d410676', 'Kitchen Cabinets', 'Cabinets', '48000', '47000', '3', '4', 'itemimages/5a88821626e73221511518895638/cabinets_after6.jpg', 'confirmed', 'Description for Kitchen cabinets', 'Paid Shipping. 3 Days Delivery max.', 'admin', '1519426800', '1518895639'),
('5a888216ba4a518909', 'Kitchen Cabinets', 'Cabinets', '48000', '47000', '3', '4', 'itemimages/5a88821626e73221511518895639/country-oak-kitchen-cabinets-25.jpg', 'confirmed', 'Description for Kitchen cabinets', 'Paid Shipping. 3 Days Delivery max.', 'admin', '1519426800', '1518895641'),
('5a888216e0d4531058', 'Kitchen Cabinets', 'Cabinets', '48000', '47000', '3', '4', 'itemimages/5a88821626e73221511518895640/images.jpg', 'confirmed', 'Description for Kitchen cabinets', 'Paid Shipping. 3 Days Delivery max.', 'admin', '1519426800', '1518895643');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `userid` varchar(50) NOT NULL,
  `name` varchar(240) NOT NULL,
  `email` varchar(240) NOT NULL,
  `mobile` varchar(240) NOT NULL,
  `location` varchar(240) NOT NULL,
  `password` varchar(240) NOT NULL,
  `status` varchar(240) NOT NULL,
  `time` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`userid`, `name`, `email`, `mobile`, `location`, `password`, `status`, `time`) VALUES
('5b4ab0fd5eb78', 'Emmanuel Paul', 'e.paul@dreammesh.ng', '08133918455', 'Imo', '$2y$10$lw1/ihYvYHfK2.TWs5PLUuEj2ROn5DEPeU0QwwE4FVOccyd/r6LQq', 'nonverified', '1531621629'),
('5b4c174ccef70', 'Paul John', 'ewebsorg@gmail.com', '08133918455', 'Akwa Ibom', '8sTGCEfzawk', 'nonverified', '1531713356'),
('5b4c16e199692', 'Paul John', 'ewebsportfolio@gmail.com', '08133918455', 'Akwa Ibom', '8sTGCEfzawk', 'nonverified', '1531713249'),
('5b4ab73f6a27e', 'Roland Mike', 'ewebstech@gmail.com', '08133918455', 'Abuja', '$2y$10$SdfxCMKX5l7PvB4msOhdhumJraAy.ZGQIQ8YsE7Rxe5itWAkiY91a', 'nonverified', '1531623231'),
('5b4aba10ae1e9', 'Emmanuel Paul', 'roland@gmail.com', '093938993', 'Abuja', 'xSHkuS.5a0M', 'nonverified', '1531623952');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` varchar(13) NOT NULL DEFAULT '',
  `product` varchar(40) DEFAULT NULL,
  `category` varchar(16) DEFAULT NULL,
  `price` int(4) DEFAULT NULL,
  `quantity` int(1) DEFAULT NULL,
  `shipping` varchar(13) DEFAULT NULL,
  `status` varchar(7) DEFAULT NULL,
  `time` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product`, `category`, `price`, `quantity`, `shipping`, `status`, `time`) VALUES
('5b5fe6467c687', 'Paraceutamol', 'Analgesics', 200, 5, 'Free Shipping', 'active', 1533011526),
('5b5fe6467c689', 'Cloroquine', 'Analgesics', 200, 5, 'Free Shipping', 'active', 1533011526),
('AML003', 'AMLONG-10 TABS  X 30 (SATCHET)', 'B.P. DRUGS', 300, 1, 'Free Shipping', 'UNIT', 1533011526),
('AMP004', 'AMPICLOX (BEECHAM)  SUSP 250MG/5ML', 'ANTIBIOTICS', 1500, 1, 'Free Shipping', 'UNIT', 1533011526),
('ARA001', 'ARABIAN MYSTERY PERFUME', 'GROCERY', 3500, 1, 'Free Shipping', 'PACK', 1533011526),
('ASM004', 'ASMANOL PLAIN', 'COUGH/COLD', 200, 1, 'Free Shipping', 'UNIT', 1533011526),
('BAK001', 'BAKED COCONUT CHIPS', 'GROCERY', 500, 2, 'Free Shipping', 'UNIT', 1533011526),
('CO004', 'CO-CODAMOL TABS 8/500 X 100 (SATCHET)', 'ANALGESIC', 250, 1, 'Free Shipping', 'UNIT', 1533011526),
('EVE008', 'EVERSURE BODY SPRAY', 'GROCERY', 1000, 3, 'Free Shipping', 'UNIT', 1533011526),
('FOL001', 'FOLIC ACID  TABS X 100', 'VITAMINS', 250, 1, 'Free Shipping', 'UNIT', 1533011526),
('GOY001', 'GOYA OLIVE OIL S\\S', 'OINTMENT / CREAM', 550, 1, 'Free Shipping', 'UNIT', 1533011526),
('HYD004', 'HYDROGEN PEROXIDE (SKG-PHARMA)  SOLUTION', 'GENERAL', 180, 1, 'Free Shipping', 'UNIT', 1533011526),
('INS003', 'INSUPEN 30G NEEDLE', 'GENERAL', 60, 2, 'Free Shipping', 'UNIT', 1533011526),
('KIN008', 'KING TONIC 200ML', 'VITAMINS', 450, 2, 'Free Shipping', 'BOTTLES', 1533011526),
('NAT 010', 'PROSTATE DEFENCE', 'SUPPLEMENTS', 7400, 2, 'Free Shipping', 'PACK', 1533011526),
('NAT050', 'CHOLESTEROL DEFENCE X60TAB', 'SUPPLEMENTS', 5850, 1, 'Free Shipping', 'PACK', 1533011526),
('NEO015', 'NEO - MEDROL LOTION', 'OINTMENT / CREAM', 1600, 2, 'Free Shipping', 'UNIT', 1533011526),
('PAR004', 'PARACETAMOL (EMZOR)  TABS 500MG X 96', 'ANALGESIC', 40, 2, 'Free Shipping', 'SACHET', 1533011526),
('PAR006', 'PARACETAMOL (M&B)  TABS 500MG X 96', 'ANALGESIC', 50, 3, 'Free Shipping', 'SACHET', 1533011526),
('PAS001', 'PASSCODE BODY SPRAY', 'GROCERY', 1000, 4, 'Free Shipping', 'UNIT', 1533011526),
('SMA004', 'SMART BLACK PERFUME', 'GROCERY', 3500, 5, 'Free Shipping', 'UNIT', 1533011526),
('SOF004', 'SOFT FIX 2.5X5M PLASTER', 'GENERAL', 550, 3, 'Free Shipping', 'PACK', 1533011526),
('SOF005', 'SOFT FIX 5X5M PLASTER', 'GENERAL', 700, 4, 'Free Shipping', 'UNIT', 1533011526),
('SUP007', 'SUPRAMULT PLUS TABS', 'VITAMINS', 2600, 3, 'Free Shipping', 'UNIT', 1533011526),
('TEG002', 'TEGRETOL CR 400 TABS  X 30 (SAC)', 'ANTICONVULSANT', 2000, 1, 'Free Shipping', 'UNIT', 1533011526),
('ZET001', 'ZETGEL', 'OINTMENT / CREAM', 550, 3, 'Free Shipping', 'UNIT', 1533011526);

-- --------------------------------------------------------

--
-- Table structure for table `staffs`
--

CREATE TABLE IF NOT EXISTS `staffs` (
  `id` varchar(20) NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `lastaccess` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(20) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL,
  `loginstatus` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staffs`
--

INSERT INTO `staffs` (`id`, `name`, `username`, `password`, `phone`, `email`, `lastaccess`, `status`, `date`, `loginstatus`) VALUES
('1448079846', 'Emmanuel C. Paul', 'admin', 'admin', '08133918455', 'support@email.com', '2018-07-14 15:27:11', 'admin', '04:24 am Nov-Sat-201', 'offline');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`time`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staffs`
--
ALTER TABLE `staffs`
  ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
