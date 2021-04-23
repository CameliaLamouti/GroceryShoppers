-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 23, 2021 at 02:26 PM
-- Server version: 5.7.24
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
-- Database: `soen287`
--

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE `orderlist` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `orderNb` varchar(10) NOT NULL,
  `preTaxCost` varchar(100) NOT NULL,
  `postTaxCost` varchar(100) NOT NULL,
  `orderSummary` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`id`, `email`, `orderNb`, `preTaxCost`, `postTaxCost`, `orderSummary`) VALUES
(1, 'hakhter@concordia.com', '123456', '$85.33', '$98.13', '7 red apple (approx. 3lbs), 2lbs salmon, 5lbs tuna, 2lbs shrimp, 1lb brie cheese'),
(3, 'younesg@concordia.com', '000000', '$44.77', '$51.49', '7 bananas (approx 4lbs), 3lbs beef, 1 liter 2% milk, 1 pack strawberry yogurt, 1 pack banana yogurt'),
(4, 'admin@concordia.com', '023423', '$67.54', '$82.16', '2 red apples, 1lb beef, 2lbs shrimp');

-- --------------------------------------------------------

--
-- Table structure for table `productlist`
--

CREATE TABLE `productlist` (
  `id` int(11) NOT NULL,
  `Product` varchar(30) NOT NULL,
  `Image` varchar(500) NOT NULL,
  `Inventory` int(30) NOT NULL,
  `Price` varchar(30) NOT NULL,
  `Sale` varchar(30),
  `Description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `productlist`
--

INSERT INTO `productlist` (`id`, `Product`, `Image`, `Inventory`, `Price`, `Sale`, `Description`) VALUES
(3, 'Bananas', 'Images/bananas.jpg', 300, '$1.49/lb', '$0.79/lb', 'Description: Imported from Ecuador  Nutritional Information Calories: 60 Total Fat: 0.3g Saturated fat: 0g Cholestorol: 0mg Sodium: 1mg Potassium: 101mg Total Carbohydrate: 10g Sugar: 10g Protein: 0.2g'),
(4, 'Apples', 'Images/apples.jpg', 300, '$0.79/lb', '', 'Description: Imported from China\r\n\r\nNutritional Information\r\nCalories: 60\r\nTotal Fat: 0.3g\r\nSaturated fat: 0g\r\nCholestorol: 0mg\r\nSodium: 1mg\r\nPotassium: 101mg\r\nTotal Carbohydrate: 10g\r\nSugar: 10g\r\nProtein: 0.2g'),
(5, 'Broccoli', 'Images/broccoli.jpg', 400, '$1.58/lb', '', 'Description: Imported from Spain, France & ItalyNutritional InformationCalories: 34Total Fat: 0.3gSaturated fat: 0gCholestorol: 0mgSodium: 27mgPotassium: 320mgTotal Carbohydrate: 10gSugar: 1.5gProtein: 3g'),
(6, 'Salmon', 'Images/salmon.jpg', 30, '$15.00/lb', '', 'Description: Imported from NorwayNutritional InformationCalories: 208Total Fat: 13gSaturated fat: 3.1gCholestorol: 60mgSodium: 50mgPotassium: 380mgTotal Carbohydrate: 0gSugar: 10gProtein: 30g'),
(7, 'Tuna', 'Images/tuna.jpg', 50, '$3.80/lb', '', 'Description: Imported from Italy\r\n\r\nNutritional Information\r\nCalories: 130\r\nTotal Fat: 1.3g\r\nSaturated fat: 0.4g\r\nCholestorol: 60mg\r\nSodium: 47mg\r\nPotassium: 600mg\r\nTotal Carbohydrate: 0g\r\nSugar: 0g\r\nProtein: 30g'),
(8, 'Shrimp', 'Images/shrimp.jpg', 50, '$13.99/lb', '', 'Nutritional Information\r\nCalories: 80\r\nTotal Fat: 0.3g\r\nSaturated fat: 0.2g\r\nCholestorol: 190mg\r\nSodium: 125mg\r\nPotassium: 101mg\r\nTotal Carbohydrate: 10g\r\nSugar: 10g\r\nProtein: 22g'),
(9, 'Beef', 'Images/beef.jpg', 40, '$13.99/lb', '$10.00/lb', 'Description: Imported from Mexico & Australia\r\n\r\nNutritional Information\r\nCalories: 250\r\nTotal Fat: 15g\r\nSaturated fat: 0.5g\r\nCholestorol: 90mg\r\nSodium: 72mg\r\nPotassium: 320mg\r\nTotal Carbohydrate: 0g\r\nSugar: 0g\r\nProtein: 30g'),
(10, 'Chicken', 'Images/chicken.jpg', 50, '$3.50/lb', '', 'Description: Imported from United States\r\n\r\nNutritional Information\r\nCalories: 239\r\nTotal Fat: 14g\r\nSaturated fat: 0g\r\nCholestorol: 88mg\r\nSodium: 83mg\r\nPotassium: 101mg\r\nTotal Carbohydrate: g\r\nSugar: 10g\r\nProtein: 0.2g'),
(11, 'Pork', 'Images/pork.jpg', 30, '$5.56/lb', '', 'Description: Imported from Japan\r\n\r\nNutritional Information\r\nCalories: 240\r\nTotal Fat: 14g\r\nSaturated fat: 6g\r\nCholestorol: 74mg\r\nSodium: 70mg\r\nPotassium: 430mg\r\nTotal Carbohydrate: 0g\r\nSugar: 0g\r\nProtein: 30g'),
(12, 'Milk', 'Images/milk.jpg', 300, '$3.61/liter', '', 'Description: From Quebec\r\n\r\nNutritional Information\r\nCalories: 40\r\nTotal Fat: 1g\r\nSaturated fat: 0.6g\r\nCholestorol: 5mg\r\nSodium: 45mg\r\nPotassium: 150mg\r\nTotal Carbohydrate: 5g\r\nSugar: 5g\r\nProtein: 3.4g'),
(13, 'Cheese', 'Images/cheese.jpg', 300, '$6.00/lb', '', 'Description: Imported from France\r\n\r\nNutritional Information\r\nCalories: 400\r\nTotal Fat: 30g\r\nSaturated fat: 17g\r\nCholestorol: 105mg\r\nSodium: 630mg\r\nPotassium: 101mg\r\nTotal Carbohydrate: 1.5g\r\nSugar: 10g\r\nProtein: 30g'),
(14, 'Yogurt', 'Images/yogurt.jpg', 300, '$4.00/pack', '', 'Description: Imported from United Kingdom\r\n\r\nNutritional Information\r\nCalories: 60\r\nTotal Fat: 0.4g\r\nSaturated fat: 0.1g\r\nCholestorol: 5mg\r\nSodium: 36mg\r\nPotassium: 150mg\r\nTotal Carbohydrate: 10g\r\nSugar: 3.2g\r\nProtein: 10g'),
(15, 'Coke', 'Images/coke.jpg', 400, '$4.00/pack', '', 'Description: Soft drink, made in the United States.\r\n\r\nNutritional Information\r\nCalories: 200\r\nTotal Fat: 0g\r\nSaturated fat: 0.1g\r\nCholestorol: 0mg\r\nSodium: 65mg\r\nPotassium: 0mg\r\nTotal Carbohydrate: 55g\r\nSugar: 55g\r\nProtein: 0g'),
(16, 'Nestea', 'Images/nestea.jpg', 200, '$2.99/pack', '', 'Description: Imported from United States\r\n\r\nNutritional Information\r\nCalories: 110\r\nTotal Fat: 0g\r\nSaturated fat: 0g\r\nCholesterol: 0mg\r\nSodium: 25mg\r\nPotassium: 0mg\r\nTotal Carbohydrate: 30g\r\nSugar: 30g\r\nProtein: 0g'),
(17, 'Crush', 'Images/crush.jpeg', 200, '$1.49/can', '', 'Description: Made in the United States.\r\n\r\nNutritional Information\r\nCalories: 160\r\nTotal Fat: 0g\r\nSaturated fat: 0g\r\nCholestorol: mg\r\nSodium: 70mg\r\nPotassium: 0g\r\nTotal Carbohydrate: 43g\r\nSugar: 43g\r\nProtein: 0g'),
(18, 'Bread', 'Images/Bread.jpg', 150, '$2.00/pack', '', 'Description: Fresh baked bread from Montreal Bakery.\r\n\r\nNutritional Information\r\nCalories: 200\r\nTotal Fat: 0g\r\nSaturated fat: 0.1g\r\nCholestorol: 0mg\r\nSodium: 65mg\r\nPotassium: 0mg\r\nTotal Carbohydrate: 600g\r\nSugar: 55g\r\nProtein: 0g'),
(19, 'Burger Buns', 'Images/BurgerBuns.jpg', 100, '$4.99/pack', '', 'Description: Burger buns from Montreal.\r\n\r\nNutritional Information\r\nCalories: 200\r\nTotal Fat: 0g\r\nSaturated fat: 0.1g\r\nCholestorol: 0mg\r\nSodium: 65mg\r\nPotassium: 0mg\r\nTotal Carbohydrate: 300g\r\nSugar: 55g\r\nProtein: 0g'),
(20, 'Baguettes', 'Images/baguettes.jpeg', 30, '$4.00/pack', '$3.00/pack', 'Description: Fresh baked baguettes from Montreal.Nutritional InformationCalories: 200Total Fat: 0gSaturated fat: 0.1gCholestorol: 0mgSodium: 65mgPotassium: 0mgTotal Carbohydrate: 450gSugar: 55gProtein: 0g');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `id` int(11) NOT NULL,
  `firstName` varchar(30) NOT NULL,
  `lastName` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `userlist`
--

INSERT INTO `userlist` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(1, 'Hamna', 'Akhter', 'hakh@concordia.com', 'password'),
(2, 'Chris', 'Karabatsos', 'chrisk@concordia.com', 'password'),
(3, 'Younes', 'Gharbili', 'younesg@concordia.com', 'password'),
(4, 'Tahmid', 'Rahman', 'tahmidr@concordia.com', 'password'),
(5, 'Patrick', 'Keenan', 'patrickk@concordia.com', 'password'),
(7, 'admin', 'admin', 'admin@concordia.com', 'admin'),
(39, 'John', 'Smith', 'johnsmith@test.com', 'password'),
(40, 'Jacky', 'Huang', 'jackyh@test.com', 'hellobye'),
(43, 'Jhonny', 'Bravo', 'jbravo@test.com', 'password'),
(50, 'Keisha', 'Melissa', 'keishasmith@example.com', 'testing'),
(53, 'hamna', 'akhter', 'test@test.com', 'password'),
(54, 'Hamna', 'Akhter', 'hamna97@hotmail.com', 'password'),
(56, 'Hamna', 'Akhter', 'hamnaakhter@hotmail.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orderlist`
--
ALTER TABLE `orderlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orderNb` (`orderNb`);

--
-- Indexes for table `productlist`
--
ALTER TABLE `productlist`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Product` (`Product`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orderlist`
--
ALTER TABLE `orderlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productlist`
--
ALTER TABLE `productlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
