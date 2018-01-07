-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2018 at 02:16 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pharmacy_stock_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `id` int(11) NOT NULL,
  `med_name` varchar(30) NOT NULL,
  `med_category` varchar(30) NOT NULL,
  `desciption` longtext NOT NULL,
  `unit_mesurement` varchar(10) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `med_name`, `med_category`, `desciption`, `unit_mesurement`, `date_created`, `date_modified`) VALUES
(1, 'panadol', 'tablets', 'hvjhvn hvhjj', '250g', '2018-01-04 06:35:59', '2018-01-04 06:35:59'),
(2, 'metakefline', 'tablets', 'hjjhv jhgjh', '500g', '2018-01-04 06:36:30', '2018-01-04 06:36:30'),
(3, 'mseto', 'tablets', 'hjfhvjh', '400g', '2018-01-04 06:36:58', '2018-01-04 06:36:58'),
(4, 'sprit', 'liquid', 'hvj hjgvh', '650', '2018-01-04 06:37:24', '2018-01-04 06:37:24'),
(5, 'whitedent', 'tubes', 'jhfjf jyfuy', '300g', '2018-01-04 06:38:45', '2018-01-04 06:38:45');

-- --------------------------------------------------------

--
-- Table structure for table `medic_category`
--

CREATE TABLE IF NOT EXISTS `medic_category` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `discription` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medic_category`
--

INSERT INTO `medic_category` (`id`, `name`, `discription`, `date_created`, `date_modified`) VALUES
(1, 'tablets', 'uhuibuui uu ui', '2018-01-04 06:15:52', '0000-00-00 00:00:00'),
(2, 'liquid', 'uibu uk', '2018-01-04 06:17:00', '0000-00-00 00:00:00'),
(3, 'tubes', 'hjgjg jhgu', '2018-01-04 06:17:31', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `medic_sales`
--

CREATE TABLE IF NOT EXISTS `medic_sales` (
  `id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `sell_cat_id` int(11) NOT NULL,
  `quantiy_sold` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` int(11) NOT NULL,
  `date_modified` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medic_stock`
--

CREATE TABLE IF NOT EXISTS `medic_stock` (
  `id` int(11) NOT NULL,
  `medicine_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `batch_id` varchar(30) NOT NULL,
  `quantity` int(11) NOT NULL,
  `buying_cost` int(11) NOT NULL,
  `retail_sale` int(11) NOT NULL,
  `whole_sale` int(11) NOT NULL,
  `date_issued` date NOT NULL,
  `date_expired` date NOT NULL,
  `description` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medic_stock`
--

INSERT INTO `medic_stock` (`id`, `medicine_id`, `supplier_id`, `batch_id`, `quantity`, `buying_cost`, `retail_sale`, `whole_sale`, `date_issued`, `date_expired`, `description`, `date_created`, `date_modified`) VALUES
(1, 1, 1, '2018/01/04-07:49', 1000, 1000, 3000, 2000, '0000-00-00', '0000-00-00', 'gfktyf jhfuj', '2018-01-04 06:49:51', '2018-01-04 06:49:51'),
(2, 4, 2, '2018/01/04-07:50', 560, 500, 1500, 1000, '0000-00-00', '0000-00-00', 'ytdytdjt hjfkuy', '2018-01-04 06:50:38', '2018-01-04 06:50:38'),
(3, 4, 3, '2018/01/04-07:56', 100, 700, 2000, 1200, '0000-00-00', '0000-00-00', 'yfyufkyu', '2018-01-04 06:57:05', '2018-01-04 06:57:05'),
(4, 2, 2, '2018/01/04-08:27', 500, 2000, 4000, 3000, '0000-00-00', '0000-00-00', 'tdjtfjgh', '2018-01-04 07:28:21', '2018-01-04 07:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `medic_stock_handler`
--

CREATE TABLE IF NOT EXISTS `medic_stock_handler` (
  `id` int(11) NOT NULL,
  `medic_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `retail` int(11) NOT NULL,
  `wholesale` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medic_stock_handler`
--

INSERT INTO `medic_stock_handler` (`id`, `medic_id`, `quantity`, `retail`, `wholesale`, `date_created`, `date_modified`) VALUES
(1, 1, 1000, 3000, 2000, '2018-01-04 06:49:51', '2018-01-04 06:49:51'),
(2, 4, 660, 2000, 1200, '2018-01-04 06:50:38', '2018-01-04 06:50:38'),
(3, 2, 500, 4000, 3000, '2018-01-04 07:28:21', '2018-01-04 07:28:21');

-- --------------------------------------------------------

--
-- Table structure for table `on_current_cat`
--

CREATE TABLE IF NOT EXISTS `on_current_cat` (
  `id` int(11) NOT NULL,
  `medic_name` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `seller_name` varchar(30) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `on_current_cat`
--

INSERT INTO `on_current_cat` (`id`, `medic_name`, `quantity`, `price`, `total`, `customer_name`, `seller_name`, `status`) VALUES
(1, 'metakefline', 5, 4000, 20000, '', '', ''),
(2, 'sprit', 10, 2000, 20000, '', '', ''),
(3, 'sprit', 1, 2000, 2000, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `priviledge`
--

CREATE TABLE IF NOT EXISTS `priviledge` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `priviledge`
--

INSERT INTO `priviledge` (`id`, `name`, `level`, `date_created`, `date_modified`) VALUES
(1, 'Top manager', 'Level 1', '2018-01-03 18:03:56', '2018-01-03 18:03:56'),
(2, 'Administrator', 'level 2', '2018-01-04 05:36:36', '2018-01-04 05:36:36'),
(3, 'Cashier', 'level 3', '2018-01-04 05:36:59', '2018-01-04 05:36:59');

-- --------------------------------------------------------

--
-- Table structure for table `sales_cat`
--

CREATE TABLE IF NOT EXISTS `sales_cat` (
  `id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `whole_sell` int(11) NOT NULL,
  `retail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `comment` longtext NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1 COMMENT='this table is for supplier''s details';

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `phone_number`, `location`, `address`, `comment`, `status`, `date_created`, `date_modified`) VALUES
(1, 'imelda B', '7869786789', 'posta', 'ifm', 'hjvjh vkhav', 0, '2018-01-04 05:51:39', '0000-00-00 00:00:00'),
(2, 'japhet D', '875868', 'tmk', 'hbjsb', 'bhjbf hbjhb', 0, '2018-01-04 05:53:46', '0000-00-00 00:00:00'),
(3, 'kings man', '8768796678', 'england', 'london', 'hhbajf nnbaj', 0, '2018-01-04 05:54:40', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `supply_batch`
--

CREATE TABLE IF NOT EXISTS `supply_batch` (
  `id` int(11) NOT NULL,
  `batch_no` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tracking_activities`
--

CREATE TABLE IF NOT EXISTS `tracking_activities` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `event` varchar(70) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL,
  `full_name` varchar(30) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `priviledge` varchar(15) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `details` longtext NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_modified` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `user_name`, `password`, `priviledge`, `status`, `mobile`, `address`, `details`, `date_created`, `date_modified`) VALUES
(1, 'boss walter', 'le boss', 'boss1234', '1', 0, '868608', 'tegeta', 'bhjbla hvbashbf avbe', '2018-01-04 05:38:13', '2018-01-04 05:38:13'),
(2, 'collin R', 'sappic', 'collin1234', '2', 0, '9579785', 'kgambon', 'jjhbaf hjvakj', '2018-01-04 05:48:26', '2018-01-04 05:48:26'),
(3, 'jamali A', 'alljama', 'jamali1234', '3', 0, '69897987', 'mnyamala', 'avfhbhjbkvja abfb', '2018-01-04 05:49:31', '2018-01-04 05:49:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medic_category`
--
ALTER TABLE `medic_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medic_sales`
--
ALTER TABLE `medic_sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medic_stock`
--
ALTER TABLE `medic_stock`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medic_stock_handler`
--
ALTER TABLE `medic_stock_handler`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `on_current_cat`
--
ALTER TABLE `on_current_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `priviledge`
--
ALTER TABLE `priviledge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales_cat`
--
ALTER TABLE `sales_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supply_batch`
--
ALTER TABLE `supply_batch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tracking_activities`
--
ALTER TABLE `tracking_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `medic_category`
--
ALTER TABLE `medic_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `medic_sales`
--
ALTER TABLE `medic_sales`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `medic_stock`
--
ALTER TABLE `medic_stock`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `medic_stock_handler`
--
ALTER TABLE `medic_stock_handler`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `on_current_cat`
--
ALTER TABLE `on_current_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `priviledge`
--
ALTER TABLE `priviledge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sales_cat`
--
ALTER TABLE `sales_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `supply_batch`
--
ALTER TABLE `supply_batch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tracking_activities`
--
ALTER TABLE `tracking_activities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
