-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 26, 2024 at 03:46 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `prices`
--

CREATE TABLE `prices` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

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
-- Indexes for table `prices`
--
ALTER TABLE `prices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

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
-- AUTO_INCREMENT for table `prices`
--
ALTER TABLE `prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
