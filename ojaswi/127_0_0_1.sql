-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 03:29 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssms`
--
CREATE DATABASE IF NOT EXISTS `ssms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `ssms`;

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(15) NOT NULL,
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_name`) VALUES
(4, 'bajey'),
(1, 'doms'),
(5, 'Ekta'),
(7, 'nataraj'),
(8, 'pilot'),
(6, 'Readmore'),
(9, 'riton'),
(10, 'scholar'),
(11, 'sega');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(15) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Accesso'),
(15, 'book'),
(10, 'books'),
(18, 'cover file'),
(24, 'ef'),
(11, 'eraser'),
(28, 'gfds'),
(27, 'hgfds'),
(23, 'huifhfief'),
(20, 'iuytrds'),
(5, 'kaale'),
(22, 'lmfao'),
(19, 'loose sheets'),
(13, 'pen'),
(14, 'pencil'),
(16, 'tipp-ex');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customer_id` int(15) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_address` varchar(255) NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_pan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `customer_name`, `customer_address`, `customer_contact`, `customer_pan`) VALUES
(2, 'sujan bhujel', 'grdh', '1234567890', '987654321'),
(3, 'aayush', 'grdha', '9876789870', '234156543'),
(4, 'bisesh kark', 'dml', '9843654576', '234156879'),
(5, 'Proj', 'GRG', '9842654321', '987890987'),
(8, 'jybs', 'dml', '9808920031', '987654565'),
(10, 'Jin Mori', 'belbari', '9842657654', '090921921'),
(12, 'Aakash karki', 'gauradaha', '9808920031', '980982003'),
(15, 'bisesh karki', 'dml', '1234567890', '987654327'),
(17, 'Joshi Bhai', 'Basundhara', '9860774322', '986077432'),
(19, 'Aakasg', 'Gauradha', '9816967720', '981696772'),
(20, 'Aayush Chitrakar', '123', '9854321678', '123456789');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_no` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `sales_date` date NOT NULL,
  `sub_total` double NOT NULL,
  `discount` double NOT NULL,
  `net_total` double NOT NULL,
  `paid` double NOT NULL,
  `due` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_no`, `customer_name`, `sales_date`, `sub_total`, `discount`, `net_total`, `paid`, `due`) VALUES
(29, '2', '2021-07-11', 25000, 1000, 24000, 24000, 0),
(30, '2', '2021-07-11', 2000, 100, 1900, 1900, 0),
(31, '2', '2021-07-11', 200, 0, 200, 200, 0),
(32, '2', '2021-07-11', 50000, 1000, 49000, 49000, 0),
(33, '2', '2021-07-11', 250000, 5000, 245000, 240000, 5000),
(34, '3', '2021-07-11', 5000, 0, 5000, 5000, 0),
(35, '3', '2021-07-11', 50000, 0, 50000, 50000, 0),
(36, '2', '2021-07-11', 90, 0, 90, 90, 0),
(37, '3', '2021-07-11', 500, 0, 500, 500, 0),
(38, '4', '2021-07-11', 2, 0, 2, 0, 2),
(39, '4', '2021-07-11', 5000, 0, 5000, 0, 5000),
(40, '4', '2021-07-11', 5000, 0, 5000, 200, 4800),
(41, '2', '2021-07-11', 5000, 0, 5000, 600, 4400),
(42, '2', '2021-07-11', 500, 0, 500, 500, 0),
(43, '3', '2021-07-11', 5000, 0, 5000, 5000, 0),
(44, '3', '2021-07-11', 5000, 0, 5000, 5000, 0),
(45, '2', '2021-07-11', 20, 0, 20, 20, 0),
(46, '3', '2021-07-11', 2, 0, 2, 2, 0),
(47, '3', '2021-07-11', 2, 0, 2, 2, 0),
(48, '3', '2021-07-11', 2, 0, 2, 2, 0),
(49, '3', '2021-07-11', 5000, 0, 5000, 100, 4900),
(50, '3', '2021-07-11', 5000, 0, 5000, 600, 4400),
(51, '3', '2021-07-11', 5000, 0, 5000, 12, 4988),
(52, '3', '2021-07-11', 5000, 0, 5000, 12, 4988),
(53, '2', '2021-07-11', 5000, 0, 5000, 5000, 0),
(54, '2', '2021-07-11', 5000, 0, 5000, 5000, 0),
(55, '2', '2021-07-11', 5000, 0, 5000, 5000, 0),
(56, '2', '2021-07-11', 5000, 0, 5000, 5000, 0),
(57, '3', '2021-07-11', 5000, 0, 5000, 5000, 0),
(58, '3', '2021-07-11', 5000, 0, 5000, 5000, 0),
(59, '3', '2021-07-11', 2, 0, 2, 2, 0),
(60, '3', '2021-07-11', 5000, 0, 5000, 5000, 0),
(61, '3', '2021-07-11', 5000, 0, 5000, 500, 4500),
(62, '7', '2021-07-11', 5000, 0, 5000, 0, 5000),
(63, '3', '2021-07-11', 20, 0, 20, 20, 0),
(64, '3', '2021-07-11', 50000, 0, 50000, 50000, 0),
(65, '3', '2021-07-11', 450000, 0, 450000, 450000, 0),
(66, '2', '2021-07-11', 50000, 0, 50000, 50000, 0),
(67, '3', '2021-07-11', 5000, 0, 5000, 5000, 0),
(68, '2', '2021-07-11', 5000, 0, 5000, 5000, 0),
(69, '3', '2021-07-11', 5000, 0, 5000, 1, 4999),
(70, '2', '2021-07-11', 20, 0, 20, 20, 0),
(71, '2', '2021-07-12', 5000, 0, 5000, 5000, 0),
(72, '2', '2021-07-12', 200, 10, 190, 90, 190),
(73, '2', '2021-07-12', 2000, 300, 1700, 1700, 0),
(74, '4', '2021-07-12', 1000, 0, 1000, 1000, 0),
(75, '4', '2021-07-12', 3500, 300, 3200, 3200, 0),
(76, '3', '2021-07-12', 90, 0, 90, 90, 0),
(77, '4', '2021-07-12', 950000, 5000, 945000, 900000, 45000),
(78, '3', '2021-07-12', 5000, 0, 5000, 5000, 0),
(79, '3', '2021-07-12', 4500, 0, 4500, 4500, 0),
(80, '4', '2021-07-12', 500, 0, 500, 500, 0),
(81, '3', '2021-07-12', 2, 0, 2, 2, 0),
(82, '3', '2021-07-12', 2, 0, 2, 2, 0),
(83, '2', '2021-07-12', 200, 0, 200, 200, 0),
(84, '2', '2021-07-13', 5000, 0, 5000, 5000, 0),
(85, '3', '2021-07-13', 2, 0, 2, 2, 0),
(86, '2', '2021-07-13', 500, 0, 500, 500, 0),
(87, '2', '2021-07-13', 5000, 0, 5000, 5000, 0),
(88, '3', '2021-07-13', 200, 0, 200, 200, 0),
(89, '7', '2021-07-13', 8500, 0, 8500, 8500, 0),
(90, '4', '2021-07-13', 200, 0, 200, 200, 0),
(91, '4', '2021-07-13', 2, 0, 2, 2, 0),
(92, '2', '2021-07-13', 500, 0, 500, 500, 0),
(93, '3', '2021-07-13', 2, 0, 2, 2, 0),
(94, '3', '2021-07-13', 5000, 0, 5000, 5000, 0),
(95, '2', '2021-07-14', 5000, 0, 5000, 5000, 0),
(96, '3', '2021-07-14', 2, 0, 2, 2, 0),
(97, '4', '2021-07-14', 2, 0, 2, 2, 0),
(98, '2', '2021-07-14', 500, 0, 500, 500, 0),
(99, '3', '2021-07-14', 500, 0, 500, 500, 0),
(100, '3', '2021-07-14', 200, 0, 200, 200, 0),
(101, '4', '2021-07-14', 500, 0, 500, 500, 0),
(102, '2', '2021-07-14', 5000, 0, 5000, 600, 4400),
(103, '3', '2021-07-14', 500, 0, 500, 500, 0),
(104, '2', '2021-07-14', 10500, 500, 10000, 10000, 0),
(105, '5', '2021-07-14', 5000, 900, 4100, 4000, 100),
(106, '4', '2021-07-14', 5000, 0, 5000, 5000, 0),
(107, '5', '2021-07-14', 500, 0, 500, 500, 0),
(108, '4', '2021-07-14', 200, 0, 200, 200, 0),
(109, '5', '2021-07-14', 500, 0, 500, 500, 0),
(110, '4', '2021-07-14', 500, 0, 500, 500, 0),
(111, '4', '2021-07-14', 500, 0, 500, 500, 0),
(112, '5', '2021-07-14', 500, 0, 500, 500, 0),
(113, '5', '2021-07-14', 500, 0, 500, 500, 0),
(114, '5', '2021-07-14', 5000, 0, 5000, 5000, 0),
(115, '4', '2021-07-14', 500, 0, 500, 800, -300),
(116, '4', '2021-07-14', 5000, 0, 5000, 5000, 0),
(117, '5', '2021-07-14', 200, 0, 200, 85, 115),
(118, '4', '2021-07-14', 2000, 0, 2000, 2000, 0),
(119, '4', '2021-07-14', 90, 0, 90, 90, 0),
(120, '5', '2021-07-14', 5000, 0, 5000, 5000, 0),
(121, '3', '2021-07-14', 200, 0, 200, 200, 0),
(122, '3', '2021-07-14', 200, 0, 200, 200, 0),
(123, '4', '2021-07-14', 200, 0, 200, 200, 0),
(124, '2', '2021-07-14', 2, 0, 2, 2, 0),
(125, '2', '2021-07-14', 500, 0, 500, 500, 0),
(126, '3', '2021-07-14', 200, 0, 200, 200, 0),
(127, '2', '2021-07-14', 200, 0, 200, 200, 0),
(128, '5', '2021-07-20', 5500, 100, 5400, 5400, 0),
(129, 'Proj', '2021-07-20', 500200, 200, 500000, 500000, 0),
(130, 'aayush', '2021-07-20', 2, 0, 2, 2, 0),
(131, 'aayush', '2021-07-20', 200, 0, 200, 200, 0),
(132, 'aayush', '2021-07-20', 2000, 0, 2000, 2000, 0),
(133, 'aayush', '2021-07-20', 50000, 0, 50000, 50000, 0),
(134, 'bisesh kark', '2021-07-20', 500000, 0, 500000, 50000, 450000),
(135, 'bisesh kark', '2021-07-20', 500, 0, 500, 200, 300),
(136, 'bisesh kark', '2021-07-20', 5700, 0, 5700, 5000, 700),
(137, 'sujan bhujel', '2021-07-20', 2, 0, 2, 2, 0),
(138, 'sujan bhujel', '2021-07-20', 200, 0, 200, 200, 0),
(139, 'aayush', '2021-07-20', 5000, 0, 5000, 5000, 0),
(140, 'sujan bhujel', '2021-09-04', 5000, 0, 5000, 5000, 0),
(141, 'bisesh kark', '2021-09-18', 5000, 0, 5000, 5000, 0),
(142, 'Aakash karki', '2021-09-23', 2000, 0, 2000, 2000, 0),
(143, 'bisesh kark', '2021-09-26', 200, 0, 200, 200, 0),
(144, 'sujan bhujel', '2021-09-26', 5000, 0, 5000, 123, 4877),
(145, 'aayush', '2021-09-28', 200, 0, 200, 200, 0),
(146, 'sujan bhujel', '2021-09-30', 0, 0, 0, 5000, -5000),
(147, 'aayush', '2021-09-30', 50000, 0, 50000, 5000, 50000),
(148, 'aayush', '2021-10-04', 400, 0, 400, 400, 0),
(149, 'sujan bhujel', '2022-09-01', 2, 0, 2, 1, 1),
(150, 'sujan bhujel', '2022-09-01', 502, 0, 502, 12, 490);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_price` double NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_date` date NOT NULL,
  `product_status` enum('1','0') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `cat_id`, `brand_id`, `supplier_id`, `product_name`, `product_price`, `product_stock`, `product_date`, `product_status`) VALUES
(3, 1, 4, 3, 'ravin', 2, 26, '2021-07-11', '1'),
(5, 10, 4, 3, 'booksss', 200, 248, '2021-06-21', '1'),
(6, 10, 1, 1, 'headway', 500, 279, '2021-07-09', '1'),
(12, 10, 4, 1, 'symphony', 500, 158, '2021-07-11', '1'),
(13, 10, 6, 5, 'grammar', 5000, 203, '2021-07-11', '1'),
(15, 5, 4, 3, 'book', 500, 5670, '2021-09-18', '1'),
(18, 1, 4, 1, 'A4 paper', 500, 21, '2021-10-02', '1'),
(19, 19, 7, 3, 'A5 paper', 10, 1000, '2021-10-02', '1');

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `bill_no` int(11) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `purchase_date` date NOT NULL,
  `sub_total` double NOT NULL,
  `discount` double NOT NULL,
  `net_total` double NOT NULL,
  `paid` double NOT NULL,
  `due` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`bill_no`, `supplier_name`, `purchase_date`, `sub_total`, `discount`, `net_total`, `paid`, `due`) VALUES
(1, '1', '2021-07-11', 5000, 0, 5000, 500, 4500),
(2, '1', '2021-07-11', 2, 0, 2, 2, 0),
(3, '3', '2021-07-11', 2, 0, 2, 2, 0),
(4, '5', '2021-07-11', 5000, 0, 5000, 5000, 0),
(5, '1', '2021-07-11', 5000, 0, 5000, 5000, 0),
(6, '1', '2021-07-11', 92, 0, 92, 5000, 92),
(7, '3', '2021-07-11', 5000, 0, 5000, 1000, 4000),
(8, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(9, '1', '2021-07-11', 55000, 1000, 54000, 54000, 54000),
(10, '3', '2021-07-11', 50000, 0, 50000, 50000, 0),
(11, '1', '2021-07-11', 5000, 0, 5000, 5000, 0),
(12, '1', '2021-07-11', 5000, 1000, 4000, 4000, 0),
(13, '1', '2021-07-11', 5000, 1000, 4000, 4000, 0),
(14, '1', '2021-07-11', 5000, 1000, 4000, 4000, 0),
(15, '1', '2021-07-11', 5000, 1000, 4000, 4000, 0),
(16, '1', '2021-07-11', 5000, 0, 5000, 5000, 0),
(17, '1', '2021-07-11', 5000, 0, 5000, 5000, 0),
(18, '3', '2021-07-11', 5000, 0, 5000, 5000, 0),
(19, '1', '2021-07-11', 2, 0, 2, 2, 0),
(20, '3', '2021-07-11', 5000, 0, 5000, 5000, 0),
(21, '1', '2021-07-11', 5000, 0, 5000, 50, 4950),
(22, '1', '2021-07-11', 5000, 0, 5000, 1, 4999),
(23, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(24, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(25, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(26, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(27, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(28, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(29, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(30, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(31, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(32, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(33, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(34, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(35, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(36, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(37, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(38, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(39, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(40, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(41, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(42, '1', '2021-07-11', 5000, 0, 5000, 600, 4400),
(43, '3', '2021-07-11', 2, 0, 2, 2, 0),
(44, '1', '2021-07-12', 50000, 0, 50000, 50000, 0),
(45, '3', '2021-07-12', 50200, 0, 50200, 50200, 0),
(46, '3', '2021-07-12', 2, 0, 2, 2, 0),
(47, '3', '2021-07-12', 2, 0, 2, 2, 0),
(48, '3', '2021-07-12', 2, 0, 2, 2, 0),
(49, '', '2021-07-12', 0, 0, 0, 10, -10),
(50, '', '2021-07-12', 0, 0, 0, 500, -500),
(51, '', '2021-07-12', 0, 0, 0, 500, -500),
(52, '3', '2021-07-12', 5000, 0, 5000, 5000, 0),
(53, '3', '2021-07-12', 5000, 0, 5000, 5000, 0),
(54, '3', '2021-07-12', 5000, 0, 5000, 5000, 0),
(55, '3', '2021-07-12', 5000, 0, 5000, 5000, 0),
(56, '3', '2021-07-12', 5000, 0, 5000, 5000, 0),
(57, '3', '2021-07-12', 5000, 0, 5000, 5000, 0),
(58, '1', '2021-07-12', 555000, 0, 555000, 555000, 0),
(59, '8', '2021-07-12', 38500, 0, 38500, 600, 38500),
(60, '3', '2021-07-12', 174, 0, 174, 2, 174),
(61, '3', '2021-07-12', 174, 0, 174, 2, 174),
(62, '1', '2021-07-12', 7000, 0, 7000, 7000, 0),
(63, '3', '2021-07-12', 20000, 5690, 14310, 5000, 14310),
(64, '1', '2021-07-12', 2, 0, 2, 2, 0),
(65, '1', '2021-07-12', 50000, 10000, 40000, 40000, 0),
(66, '1', '2021-07-12', 398, 0, 398, 398, 0),
(67, '1', '2021-07-12', 398, 0, 398, 398, 0),
(68, '1', '2021-07-12', 398, 0, 398, 398, 0),
(69, '1', '2021-07-12', 398, 0, 398, 398, 0),
(70, '1', '2021-07-12', 398, 0, 398, 398, 0),
(71, '1', '2021-07-12', 398, 0, 398, 398, 0),
(72, '1', '2021-07-12', 398, 0, 398, 398, 0),
(73, '1', '2021-07-12', 398, 0, 398, 398, 0),
(74, '5', '2021-07-12', 99500, 9500, 90000, 90000, 0),
(75, '3', '2021-07-12', 500, 0, 500, 69, 431),
(76, '3', '2021-07-13', 2, 0, 2, 2, 0),
(77, '5', '2021-07-19', 200, 0, 200, 200, 0),
(78, '5', '2021-09-23', 200, 0, 200, 200, 0),
(79, '', '2021-09-23', 50, 0, 50, 50, 0),
(80, '1', '2021-09-23', 50, 0, 50, 50, 0),
(81, '10', '2021-09-24', 20000, 0, 20000, 20000, 0),
(82, '14', '2021-09-24', 5000, 100, 4900, 4900, 0),
(83, '', '2021-09-24', 500, 0, 500, 500, 0),
(84, 'chitre', '2021-09-24', 100000, 0, 100000, 100000, 0),
(85, 'chitre', '2021-09-24', 200, 0, 200, 200, 0),
(86, '5', '2021-09-28', 2, 0, 2, 2, 0),
(87, '1', '2021-10-02', 2, 0, 2, 2, 0),
(88, '3', '2021-10-02', 250000, 0, 250000, 250000, 0),
(89, '3', '2021-10-02', 5000, 0, 5000, 5000, 0),
(90, '3', '2021-10-02', 10500, 0, 10500, 10500, 0),
(91, '3', '2021-10-02', 24500, 0, 24500, 24500, 0),
(92, '', '2021-10-02', 0, 0, 0, 50000, -50000),
(93, '10', '2021-10-04', 20000, 0, 20000, 20000, 0),
(94, '3', '2022-09-01', 2, 0, 2, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE `purchase_details` (
  `id` int(11) NOT NULL,
  `bill_no` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`id`, `bill_no`, `product_name`, `price`, `qty`) VALUES
(1, 2, '', 100, 10),
(2, 86, 'ravin', 2, 1),
(3, 87, 'ravin', 2, 1),
(4, 88, 'book', 500, 500),
(5, 89, 'book', 500, 10),
(6, 90, 'book', 500, 21),
(7, 91, 'book', 500, 49),
(8, 92, '', 0, 0),
(9, 93, 'booksss', 200, 100),
(10, 94, 'ravin', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_details`
--

CREATE TABLE `sales_details` (
  `id` int(11) NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `price` double NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sales_details`
--

INSERT INTO `sales_details` (`id`, `invoice_no`, `product_name`, `price`, `qty`) VALUES
(1, 30, 'booksss', 200, 10),
(2, 31, 'booksss', 200, 1),
(3, 31, '', 0, 0),
(4, 32, 'pencil', 5000, 10),
(5, 36, 'jah', 90, 1),
(6, 37, 'headway', 500, 1),
(7, 38, 'ravin', 2, 1),
(8, 39, 'pencil', 5000, 1),
(9, 40, 'pencil', 5000, 1),
(10, 41, 'pencil', 5000, 1),
(11, 42, 'symphony', 500, 1),
(12, 69, 'pencil', 5000, 1),
(13, 70, 'ravin', 2, 10),
(14, 71, 'pencil', 5000, 1),
(15, 72, 'ravin', 2, 100),
(16, 73, 'booksss', 200, 10),
(17, 74, 'headway', 500, 2),
(18, 75, 'symphony', 500, 7),
(19, 76, 'jah', 90, 1),
(20, 77, 'grammar', 5000, 190),
(21, 78, 'grammar', 5000, 1),
(22, 79, 'symphony', 500, 9),
(23, 80, 'headway', 500, 1),
(24, 81, 'ravin', 2, 1),
(25, 82, 'ravin', 2, 1),
(26, 83, 'booksss', 200, 1),
(27, 84, 'pencil', 5000, 1),
(28, 85, 'ravin', 2, 1),
(29, 86, 'headway', 500, 1),
(30, 87, 'pencil', 5000, 1),
(31, 88, 'booksss', 200, 1),
(32, 89, 'symphony', 500, 17),
(33, 90, 'booksss', 200, 1),
(34, 91, 'ravin', 2, 1),
(35, 92, 'symphony', 500, 1),
(36, 93, 'ravin', 2, 1),
(37, 94, 'grammar', 5000, 1),
(38, 95, 'pencil', 5000, 1),
(39, 96, 'ravin', 2, 1),
(40, 97, 'ravin', 2, 1),
(41, 98, 'headway', 500, 1),
(42, 99, 'headway', 500, 1),
(43, 100, 'booksss', 200, 1),
(44, 101, 'symphony', 500, 1),
(45, 102, 'grammar', 5000, 1),
(46, 103, 'symphony', 500, 1),
(47, 104, 'headway', 500, 1),
(48, 104, 'grammar', 5000, 2),
(49, 105, 'grammar', 5000, 1),
(50, 106, 'grammar', 5000, 1),
(51, 107, 'symphony', 500, 1),
(52, 108, 'booksss', 200, 1),
(53, 109, 'headway', 500, 1),
(54, 110, 'symphony', 500, 1),
(55, 111, 'symphony', 500, 1),
(56, 112, 'symphony', 500, 1),
(57, 113, 'symphony', 500, 1),
(58, 114, 'grammar', 5000, 1),
(59, 115, 'symphony', 500, 1),
(60, 116, 'grammar', 5000, 1),
(61, 117, 'booksss', 200, 1),
(62, 118, 'booksss', 200, 10),
(63, 120, 'pencil', 5000, 1),
(64, 121, 'booksss', 200, 1),
(65, 122, 'booksss', 200, 1),
(66, 123, 'booksss', 200, 1),
(67, 124, 'ravin', 2, 1),
(68, 125, 'headway', 500, 1),
(69, 126, 'booksss', 200, 1),
(70, 127, 'booksss', 200, 1),
(71, 128, 'headway', 500, 1),
(72, 128, 'symphony', 500, 10),
(73, 129, 'grammar', 5000, 100),
(74, 129, 'ravin', 2, 100),
(75, 130, 'ravin', 2, 1),
(76, 131, 'ravin', 2, 100),
(77, 132, 'booksss', 200, 10),
(78, 133, 'headway', 500, 100),
(79, 134, 'grammar', 5000, 100),
(80, 135, 'headway', 500, 1),
(81, 136, 'headway', 500, 1),
(82, 136, 'pencil', 5000, 1),
(83, 136, 'booksss', 200, 1),
(84, 137, 'ravin', 2, 1),
(85, 138, 'booksss', 200, 1),
(86, 139, 'pencil', 5000, 1),
(87, 140, 'pencil', 5000, 1),
(88, 141, 'book', 500, 10),
(89, 142, 'booksss', 200, 10),
(90, 143, 'booksss', 200, 1),
(91, 144, 'pencil', 5000, 1),
(92, 145, 'booksss', 200, 1),
(93, 146, '', 0, 0),
(94, 147, 'grammar', 5000, 10),
(95, 148, 'ravin', 2, 200),
(96, 149, '', 0, 0),
(97, 149, 'ravin', 2, 1),
(98, 150, 'ravin', 2, 1),
(99, 150, 'headway', 500, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sales_return`
--

CREATE TABLE `sales_return` (
  `id` int(15) NOT NULL,
  `invoice_no` int(15) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `qty` int(15) NOT NULL,
  `price` int(15) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `supplier_id` int(15) NOT NULL,
  `supplier_name` varchar(255) NOT NULL,
  `supplier_address` varchar(255) NOT NULL,
  `supplier_contact` varchar(255) NOT NULL,
  `supplier_pan` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`supplier_id`, `supplier_name`, `supplier_address`, `supplier_contact`, `supplier_pan`) VALUES
(1, 'adhikari', 'Damak', '9876543210', ''),
(3, 'australia', 'aus', '9876543210', ''),
(5, 'btm', 'birtamod', '9842627530', ''),
(10, 'saraswati', 'biratnagar', '9842678567', '980897689'),
(11, 'google', 'biratnagar', '9842768579', ''),
(12, 'JAMUNA', 'ktm', '9867500000', '987678998'),
(16, 'birtamod', 'birtamod', '9878769086', '123321654'),
(18, 'dharan', 'drn', '9742354678', '122343221'),
(20, 'Mama', 'gauradaha', '9816967720', '981696772');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(15) NOT NULL,
  `Role_id` enum('admin','viewer') NOT NULL,
  `Password` varchar(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `First_Name` varchar(255) NOT NULL,
  `Last_Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `Role_id`, `Password`, `Username`, `Contact`, `First_Name`, `Last_Name`) VALUES
(1, 'admin', 'aakash98', 'karkiaakash00@gmail.com', '9808920031', 'Aakash', 'karki'),
(100, 'admin', '8878787878', 'a@gmail.com', '8878787878', 'Asas', 'Ses'),
(101, '', '?', '?', '?', '?', '?'),
(102, 'admin', 'wereqwer', 'bk@gmail.com', '2343212300', 'bisesh', 'karki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`),
  ADD UNIQUE KEY `brand_name` (`brand_name`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`),
  ADD UNIQUE KEY `cat_name` (`cat_name`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_pan` (`customer_pan`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_no`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD UNIQUE KEY `product_name` (`product_name`),
  ADD KEY `cat_id` (`cat_id`),
  ADD KEY `supplier_id` (`supplier_id`),
  ADD KEY `brand_id` (`brand_id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`bill_no`);

--
-- Indexes for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bill_no` (`bill_no`);

--
-- Indexes for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `invoice_no` (`invoice_no`);

--
-- Indexes for table `sales_return`
--
ALTER TABLE `sales_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`supplier_id`),
  ADD UNIQUE KEY `supplier_name` (`supplier_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`),
  ADD UNIQUE KEY `Username` (`Username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `invoice_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=151;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `bill_no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `purchase_details`
--
ALTER TABLE `purchase_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `sales_details`
--
ALTER TABLE `sales_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT for table `sales_return`
--
ALTER TABLE `sales_return`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `supplier_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`supplier_id`),
  ADD CONSTRAINT `products_ibfk_3` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`brand_id`);

--
-- Constraints for table `purchase_details`
--
ALTER TABLE `purchase_details`
  ADD CONSTRAINT `purchase_details_ibfk_1` FOREIGN KEY (`bill_no`) REFERENCES `purchase` (`bill_no`);

--
-- Constraints for table `sales_details`
--
ALTER TABLE `sales_details`
  ADD CONSTRAINT `sales_details_ibfk_1` FOREIGN KEY (`invoice_no`) REFERENCES `invoice` (`invoice_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
