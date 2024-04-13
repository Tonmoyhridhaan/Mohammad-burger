-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 13, 2024 at 08:11 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `york_burger`
--

-- --------------------------------------------------------

--
-- Table structure for table `addons`
--

CREATE TABLE `addons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', '0c7540eb7e65b553ec1ba6b20de79608');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `ingredients`, `category`, `image`, `status`) VALUES
(3, 'Fish Burger', 'Combo $8.25\r\nBurger Only $5.25 ', 'burger', '5aa7a307e9e3586eecc92584aea26a74.png', 1),
(4, 'Double Fish Burger', 'Combo $9.99\r\nBurger Only $5.99', 'burger', 'e89ff61c7b307e301d42a01361c1d5d2.png', 1),
(5, 'Chicken Burger', 'Combo $8.25\r\nBurger Only $5.25', 'burger', '8ec6f1bf588f2ffcb1859b1af063c0cf.png', 1),
(6, 'Grilled Chicken Burger', 'Combo $8.99\r\nBurger Only $5.99', 'burger', '911ab1dffde02135f5248d32dd6743f2.png', 1),
(7, 'Cheese Burger', 'Combo $8.99\r\nBurger Only $5.49', 'burger', 'dabf701a8be34b6ee7c391373d272127.png', 1),
(8, 'Double Cheese Burger', 'Combo $11.49\r\nBurger Only $7.49', 'burger', '6e49df65ad50d5cccb098cd69a9184a1.png', 1),
(9, 'Bacon Cheese Burger', 'Combo $11.49\r\nBurger Only $7.49', 'burger', '6f693c5adb21e454adef13b83f22300e.png', 1),
(10, 'D-Cheese Bacon Burger', 'Combo $13.49\r\nBurger Only $9.49', 'burger', 'b33bede52f145c85b3f26bf50e6750fd.png', 1),
(11, 'Chicken Wings', '10 pcs $10.99\r\nwith fries \r\n20 pcs $15.99\r\n10 pcs $8.99 ', 'chicken', 'ce98b13eb28a03a37726d431f563d306.png', 1),
(12, 'Chicken Tender', '03 pcs $10.99\r\nTender Combo\r\n03 pcs $5.99\r\n05 pcs $9.99\r\n10 pcs $17.99\r\n', 'chicken', '0fbd20aba24bf4d1db4b82ea29389b56.png', 1),
(13, 'Popcorn Chicken', 'Combo $5.99', 'chicken', '83c8e5bacd49a862b17af56a11e1951a.png', 1),
(14, 'Chicken Nuggets', '6 Combo $5.99\r\n6 pcs only $2.99', 'chicken', 'd251559fda6823f7b97d8f2971f5e8a5.png', 1),
(15, 'Chicken Box', '10 pcs chicken box (large fries, coleslaw & 2L pop)  $28.99\r\n04 pcs chicken box (fries, coleslaw & pop)  $10.99\r\n03 pcs chicken  $5.99\r\n10 pcs chicken  $18.99\r\n21 pcs chicken  $35.99\r\n', 'chicken', '25df3bd158df2d80c8feec4a33ccffec.png', 1),
(16, 'Fish & Chips', '1 pc fish $3.75\r\n1 pc fish & chip $6.49\r\n2 pc fish & chips $9.49 ', 'chicken', '8e3e88afb49fb0d57c061b27006af010.png', 1),
(17, 'Gyro', 'Gyro Combo $10.99\r\nGyro Only $7.99', 'chicken', '0aecfe6a096738966d1f422f6d2e5820.png', 1),
(18, 'Poutine', 'Small $6.49\r\nLarge $7.75', 'sides', 'abc6602c310c02c017e29515acda0614.png', 1),
(19, 'Grilled Chicken Poutine', 'Large $9.99 ', 'sides', 'c881db2c5b49e0ef8f0466ed73c2d50b.png', 1),
(20, 'Onion Rings', 'Small $3.99\r\nLarge $4.49', 'sides', '987a61f6cb6a99aa97cddc0e1fee56f9.png', 1),
(21, 'Potato Wedges', 'Small $4.99\r\nLarge $6.49 ', 'sides', '8f22226282bcc8f6308ac1923e6f748d.png', 1),
(22, 'Philly Chicken Steak', 'Steak combo $11.99\r\nSteak only $7.99', 'sides', '1d2a85e6e3fd3ce64162028b2ed17280.png', 1),
(23, 'Grilled Chicken Salad', ' Salad $8.49', 'sides', '495d2c6a087b74587278b59ccf680902.png', 1),
(24, 'French Fries', 'Small $3.25\r\nLarge $4.49', 'sides', '34d87ca82ed5929769ee6a79c835e1aa.png', 1),
(25, 'Pizza Go #1', '2 Small Pizzas\r\n4 Toppings each\r\n2 Pops or Fries\r\n$24.99', 'pizza', '6a8730ef8bf7ab791793d35de6d73252.png', 1),
(26, 'Pizza Go #2', '2 Medium Pizzas\r\n4 toppings each\r\n2 Pops or Fries\r\n$28.99', 'pizza', 'db5fd69353930114f39a4aa63d52fbab.png', 1),
(27, 'Pizza Go #3', '2 Large Pizzas\r\n4 Toppings each\r\n4 Pops or Lrg. Fries\r\n$33.99', 'pizza', '1f32073b481dc784fcd1177b02d8d19c.png', 1),
(28, 'Pizza Go #4', '2 XL Pizzas\r\n4 Toppings each\r\n4 Pops or Lrg. Fries\r\n$37.99', 'pizza', '0f8eb78b18ac7ce92f42fdcd91a7f6b3.png', 1),
(29, 'Pizza Go #5', '1 Large Pizza\r\n3 Toppings\r\n2 Pops or Lrg. Fries\r\n$22.99', 'pizza', 'acfbfdfe631d0a497bc713cef2dbb46b.png', 1),
(30, 'Big Y Pizza&wings special 1', '1 Small pizza\r\n3 Toppings\r\n12 Chicken Wings\r\n2 Pops\r\n$23.99\r\n\r\n2nd Pizza with regular\r\n$8.99\r\nFree Fries\r\n ', 'pizza', 'a7b436df443a90b2c2fd1a893b4b718c.png', 1),
(31, 'Big Y Pizza&wings special 2', '1 Medium Pizza\r\n3 Toppings\r\n14 Chicken Wings\r\n2 Pops\r\n$27.99\r\n\r\n2nd pizza with regular\r\n$9.99\r\nFree Fries', 'pizza', 'b0c88f9478b90da220e8f22eade2810a.png', 1),
(32, 'Big Y Pizza&wings special 3', '1 Lrg Pizza\r\n3 Toppings\r\n20 Chicken Wings\r\n3 Pops\r\n$31.99\r\n\r\n2nd Pizza with regular\r\n$10.99\r\nFree Fries', 'pizza', 'eb4f0bcab65275f78049de15f0252ee4.png', 1),
(33, 'Big Y Pizza&wings special 4', '1 XL pizza\r\n3 Toppings\r\n20 Chicken Wings\r\n4 Pops\r\n$35.99\r\n\r\n2nd Pizza with fries\r\n$13.99\r\nFree fries', 'pizza', '0fe895e9813baf812da16be86c9c0454.png', 1),
(34, 'Walk-In Special', '2 Small Pizzas (4 toppings each, 2 Pops) $14.99\r\n2 Medium Pizzas (4 toppings each, 2 Pops) $17.49\r\n2 Large Pizzas (4 toppings each, 4 Pops) $21.49\r\n2 X-Large Pizzas (4 toppings each, 4 Pops) $28.49', 'pizza', '3ee2bbb3557c6716cf0f4b3508847ff5.png', 1),
(35, 'Drinks', '2L POP $3.25\r\nCan $1.10\r\nWater $1.49\r\nJuice $1.49\r\nShake $5.49', 'drinks', '71e4529d304bd129df260a0343e57b40.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderLine`
--

CREATE TABLE `orderLine` (
  `id` int(11) NOT NULL,
  `item` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orderId` int(11) NOT NULL,
  `description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orderLine`
--

INSERT INTO `orderLine` (`id`, `item`, `orderId`, `description`) VALUES
(4, 'Fish Burger ', 4, ' Combo + BBQ '),
(5, 'Big Y Pizza&wings special 2 ', 4, ' 1 Medium Pizza, 3 Toppings, 14 Chicken Wings, 2 Pops + Green Olives + Chicken Sausage '),
(6, 'Fish Burger ', 5, ' Combo + BBQ '),
(7, 'Pizza Go #1 ', 5, ' 2 Small Pizzas, 4 Toppings each, 2 Pops or Fries + Tomato + Chicken Sausage '),
(8, 'Pizza Go #1 ', 6, ' 2 Small Pizzas, 4 Toppings each, 2 Pops or Fries + Tomato + Chicken Sausage + Hot Sauce '),
(9, 'Fish Burger ', 7, ' Combo + BBQ + Cheese Patty '),
(10, 'Pizza Go #1 ', 7, ' 2 Small Pizzas, 4 Toppings each, 2 Pops or Fries + Black Olives + Chicken Sausage + Hot Sauce '),
(11, '2L POP  + Ice Cube ', 7, ' '),
(12, 'Water  + Ice Cube ', 7, ' ');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `customerName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerContact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customerLocation` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` float NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `date`, `time`, `customerName`, `customerContact`, `customerLocation`, `price`, `type`, `status`) VALUES
(4, '2024-04-12', '07:33:56', 'Tonmoy', '1234', 'Chattogram, Bangladesh', 38.74, 'cod', 0),
(5, '2024-04-12', '07:50:18', 'Hridhaan', '1234', 'Chattogram, Bangladesh', 35.74, 'cod', 0),
(6, '2024-04-13', '05:53:48', 'Tonmoy', '1234', 'Chattogram, Bangladesh', 28.99, 'cod', 0),
(7, '2024-04-13', '06:19:47', 'Mohammad', '01919191', 'Lalkhan Bazar', 48.48, 'cod', 0);

-- --------------------------------------------------------

--
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prices`
--

INSERT INTO `prices` (`id`, `name`, `price`, `category`, `image`, `status`) VALUES
(1, 'Fish Burger - Combo', 8.25, 'burger', '90949081861b996849799918aad90e56.png', 1),
(2, 'Pizza Go #1 - 2 Small Pizzas, 4 Toppings each, 2 Pops or Fries', 24.99, 'pizza', '014f17ca948d820384d82396cecf8f37.png', 1),
(3, 'Fish Burger - Burger Only', 5.25, 'burger', 'b986b9097d6983abcf1f110a58a35095.png', 1),
(4, 'Double Fish Burger - Combo', 9.99, 'burger', 'ac7bf6916ea399a51c8e142b6d97d923.png', 1),
(5, 'Double Fish Burger - Burger Only', 5.99, 'burger', 'd7ea003260b671588bd5d587224b6ae9.png', 1),
(6, 'Chicken Burger - Combo', 8.25, 'burger', 'a7f43bfc1153e10d01dee616a50ed2c7.png', 1),
(7, 'Chicken Burger - Burger Only', 5.25, 'burger', 'ef498deaf04f93033bf9fcbc347c4c60.png', 1),
(8, 'Grilled Chicken Burger - Combo', 8.99, 'burger', 'd3c7f89b3233da726e62c17d8d335f56.png', 1),
(9, 'Grilled Chicken Burger - Burger Only', 5.99, 'burger', '55bc3eb95b62639a7a38afe0b5d118ad.png', 1),
(10, 'Chicken Burger - Combo', 8.99, 'burger', '08b15466a2689e9a29cbdb5a727f1e1b.png', 1),
(11, 'Cheese Burger - Burger Only', 5.49, 'burger', '49085b3e2b7dff33a5aee859f5192208.png', 1),
(12, 'Double Cheese Burger - Combo', 11.49, 'burger', '40330f9242ff56735ac6c110363ae57f.png', 1),
(13, 'Double Cheese Burger - Burger Only', 7.49, 'burger', 'd2f91094fbf78d148b97d1bca0fe8cb5.png', 1),
(14, 'Bacon Cheese Burger - Combo', 11.49, 'burger', '7b4f62451f3e99ee5363382442f3c5c6.png', 1),
(15, 'Bacon Cheese Burger - Burger Only', 7.49, 'burger', '4935347dd4861ae2ced57c8ab9333289.png', 1),
(16, 'D-Cheese Bacon Burger - Combo', 13.49, 'burger', 'a31e0c631c7c8f6323a36aee2814ce62.png', 1),
(17, 'D-Cheese Bacon Burger - Burger Only', 9.49, 'burger', 'd86d5f26c42d4083cd748cafe84febe7.png', 1),
(18, 'Pizza Go #2 - 2 Medium Pizzas, 4 toppings each, 2 Pops or Fries', 28.99, 'pizza', '5c4febce876d66ffda80b698cbf2db45.png', 1),
(19, 'Pizza Go #3 - 2 Large Pizzas, 4 Toppings each, 4 Pops or Lrg. Fries', 33.99, 'pizza', 'ce2335b8c43175552a770fe71d22c4ca.png', 1),
(20, 'Pizza Go #4 - 2 XL Pizzas, 4 Toppings each ,4 Pops or Lrg. Fries ', 37.99, 'pizza', '15d00d0027c4bfba9e037f8cfeaee142.png', 1),
(21, 'Pizza Go #5 - 1 Large Pizza, 3 Toppings, 2 Pops or Lrg. Fries ', 22.99, 'pizza', '65a912dd8d5372ec540e14b05f6ea7d4.png', 1),
(22, 'Big Y Pizza&wings special 1 - 1 Small pizza, 3 Toppings, 12 Chicken Wings, 2 Pops.', 23.99, 'pizza', '533f29f6d5ee75cef20f58f3fe8eb9e8.png', 1),
(23, 'Big Y Pizza&wings special 1 - 1 Small pizza, 3 Toppings, 12 Chicken Wings, 2 Pops + 2nd Pizza with regular Free Fries', 32.98, 'pizza', 'eeeb0702e9e31142e3e96b0b2bc71644.png', 1),
(24, 'Big Y Pizza&wings special 2 - 1 Medium Pizza, 3 Toppings, 14 Chicken Wings, 2 Pops', 27.99, 'pizza', '6c0232cafae2bb69a7568ef96be47d7e.png', 1),
(25, 'Big Y Pizza&wings special 2 - 1 Medium Pizza, 3 Toppings, 14 Chicken Wings, 2 Pops +  2nd pizza with regular Free Fries', 37.98, 'pizza', 'ea6dcfae2baf64de1f9d3c46ad4902d5.png', 1),
(26, 'Big Y Pizza&wings special 3 - 1 Lrg Pizza, 3 Toppings, 20 Chicken Wings, 3 Pops', 31.99, 'pizza', 'fefd8fd882a78a0741b5ed0e948eecec.png', 1),
(27, 'Big Y Pizza&wings special 3 - 1 Lrg Pizza 3 Toppings 20 Chicken Wings 3 Pops + 2nd Pizza with regular Free Fries', 42.98, 'pizza', '51d02efb6c141e008d3474d8aae25d2c.png', 1),
(28, 'Big Y Pizza&wings special 4 - 1 XL pizza, 3 Toppings, 20 Chicken Wings, 4 Pops', 35.99, 'pizza', 'a1c7db669d5aced6d37c5b7dad9d2629.png', 1),
(29, 'Big Y Pizza&wings special 4 - 1 XL pizza, 3 Toppings, 20 Chicken Wings, 4 Pops + 2nd Pizza with fries Free fries', 49.98, 'pizza', '8efa6b19a2a1f0a309bb459c667bc860.png', 1),
(30, 'Walk-In Special - 2 Small Pizzas (4 toppings each, 2 Pops) ', 14.99, 'pizza', 'daadd2859b906e098a70842976c3285c.png', 1),
(31, 'Walk-In Special - 2 Medium Pizzas (4 toppings each, 2 Pops) ', 17.49, 'pizza', '8d7ac9c1a6d8440e6ce57e0f7478c12a.png', 1),
(32, 'Walk-In Special - 2 Large Pizzas (4 toppings each, 4 Pops) ', 21.49, 'pizza', '74f24cc07739a7d6fdbfafd95fa0d086.png', 1),
(33, 'Walk-In Special - 2 X-Large Pizzas (4 toppings each, 4 Pops) ', 28.49, 'pizza', '3f04aa6ba7465d982b7f9a0a6bd3793e.png', 1),
(34, 'Chicken Wings - 10 pcs + Fries', 10.99, 'chicken', 'c0c9eb52ce6ed61bad971259f781238d.png', 1),
(35, 'Chicken Wings - 20 pcs', 15.99, 'chicken', 'c010010a23c1a20b7476992d2c595101.png', 1),
(36, 'Chicken Wings - 10 pcs ', 8.99, 'chicken', '10e150f5cf773cb58a9644ea5fc90251.png', 1),
(37, 'Chicken Tender - 03 pcs Tender Combo', 10.99, 'chicken', 'b2ef30a2326fb92c82ab5e00abae41bf.png', 1),
(38, 'Chicken Tender - 03 pcs ', 5.99, 'chicken', '7d09a3def524c6f1bffd42a6fe6189cf.png', 1),
(39, 'Chicken Tender - 05 pcs ', 9.99, 'chicken', '98d811f717a7bcd7d797dc46f33dba63.png', 1),
(40, 'Chicken Tender - 10 pcs', 17.99, 'chicken', '8782df49e0e8535dcb319e1f153abb72.png', 1),
(41, 'Popcorn Chicken - Combo ', 5.99, 'chicken', 'b47657ca41aa78beee013ff902c8c94b.png', 1),
(42, '10 pcs chicken box - (large fries, coleslaw & 2L pop) ', 28.99, 'chicken', '71e39beda7b6a938c1c4154bb3a0b15a.png', 1),
(43, '04 pcs chicken box - (fries, coleslaw & pop) ', 10.99, 'chicken', 'eae12c5e6030467baac74ac25c0c5d13.png', 1),
(44, '03 pcs chicken -', 5.99, 'chicken', '1fb783e5b209578bd3bb60d718e717f1.png', 1),
(45, '10 pcs chicken -', 18.99, 'chicken', '6a86a5512817b19852e311502f8c9dde.png', 1),
(46, '21 pcs chicken - ', 35.99, 'chicken', 'f56ade046e9acaf04de9d1727e3ef252.png', 1),
(47, '1 pc fish -', 3.75, 'chicken', '1994dcf0a5fd6e078f45d1ba2eab8519.png', 1),
(48, '1 pc fish & chip -', 6.49, 'chicken', '3cf140e6aef735d83cabbe39ac2980f4.png', 1),
(49, '2 pc fish & chips -', 9.49, 'chicken', 'ad7ced6a7120d76dc85162360597ffa5.png', 1),
(50, 'Chicken Nuggets - 6 pcs Combo ', 5.99, 'chicken', '3fe8219bbc44e9a430671238ce903abf.png', 1),
(51, 'Chicken Nuggets - 6 pcs only ', 2.99, 'chicken', '1d09c0b58580688627653ff1719bb464.png', 1),
(52, 'Gyro Combo -', 10.99, 'chicken', '09e6b78c52ded496f79f3fe6c8ef84c8.png', 1),
(53, 'Gyro Only -', 7.99, 'chicken', '0bbffc0fddf48cdfa8720fd13911b005.png', 1),
(54, 'Poutine Small -', 6.49, 'sides', '46dbaca4b3b5237926b8c9ce32c480e0.png', 1),
(55, 'Poutine Large -', 7.75, 'sides', '61714492dcbf4a63efd66537cf0305dd.png', 1),
(56, 'Grilled Chicken Poutine Large -', 9.99, 'sides', '44404963e61058e670217e8de4dc6686.png', 1),
(57, 'Onion Rings - Small', 3.99, 'sides', '31dc95b268e269234d9cf27ad1a82a1b.png', 1),
(58, 'Onion Rings - Large', 4.49, 'sides', '46fe75ce531f77bb4e91373c0eb0a37d.png', 1),
(59, 'Philly Chicken Steak - combo ', 11.99, 'sides', 'c6f20c3e2139e16caafa282bd1cb2eb2.png', 1),
(60, 'Philly Chicken Steak - Steak only', 7.99, 'sides', 'c3658aa041805f35565f9b660fc75b8d.png', 1),
(61, 'Potato Wedges - Small ', 4.99, 'sides', '77e79bcbdcda7de2d849d49ac8c5f39e.png', 1),
(62, 'Potato Wedges - Large', 6.49, 'sides', '55d34467f545f0b6d7fa99fad29146b8.png', 1),
(63, 'Grilled Chicken - Salad ', 8.49, 'sides', 'd6ab9cd468d6f22b89e473436125018d.png', 1),
(64, 'French Fries - Small ', 3.25, 'sides', '3bd6bb4a3312cc768f32e98eba2f3f65.png', 1),
(65, 'French Fries - Large ', 4.49, 'sides', '02f82eff5a638d93e197ea3fba804f2f.png', 1),
(66, '2L POP -', 3.25, 'drinks', 'f39df4764a14c6cdaa809735cd089546.png', 1),
(67, 'Can -', 1.1, 'drinks', '80572ee6284e03dcdfaf5d51d8f1f97f.png', 1),
(68, 'Water -', 1.49, 'drinks', '7ed30fdcd5c0f232f929dcf48c91aa3f.png', 1),
(69, 'Juice -', 1.49, 'drinks', 'c7732f6f0acb3f3caccca35c44dffe34.png', 1),
(70, 'Shake -', 5.49, 'drinks', '76ca416ea2da06ec556de029140a995b.png', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addons`
--
ALTER TABLE `addons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_addons` (`item`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderLine`
--
ALTER TABLE `orderLine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_order` (`orderId`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addons`
--
ALTER TABLE `addons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `orderLine`
--
ALTER TABLE `orderLine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `addons`
--
ALTER TABLE `addons`
  ADD CONSTRAINT `fk_addons` FOREIGN KEY (`item`) REFERENCES `prices` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `orderLine`
--
ALTER TABLE `orderLine`
  ADD CONSTRAINT `fk_order` FOREIGN KEY (`orderId`) REFERENCES `orders` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
