-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2022 at 02:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rest`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
(1, 'Admin', 'admin@gmail.com', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` varchar(50) NOT NULL,
  `d` varchar(50) NOT NULL,
  `t` varchar(50) NOT NULL,
  `num_of_pep` varchar(50) NOT NULL,
  `mes` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `email`, `phone_num`, `d`, `t`, `num_of_pep`, `mes`) VALUES
(4, 'Johurul', 'rojinalamjohurul@gmail.com', '01623609990', '2022-09-07', '07.00pm', '2', 'hello'),
(5, 'johurul', 'johurul@gmail.com', '01623609990', '2022-09-08', '07.00pm', '3', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `u_id` int(11) NOT NULL,
  `food_name` varchar(250) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL,
  `total_price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `u_id`, `food_name`, `quantity`, `price`, `total_price`) VALUES
(20, 0, 'Chingri Malai curry', 1, 55, 55);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `short_desc` varchar(250) NOT NULL,
  `long_desc` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `short_desc`, `long_desc`) VALUES
(1, 'starter', 'A starter is a small quantity of food that is served as the first course of a meal.', 'An hors d\'oeuvre, appetizer or starter is a small dish served before a meal in European cuisine. Some hors d\'oeuvres are served cold, others hot. Hors d\'oeuvres may be served at the dinner table as a part of the meal, or they may be served before seating, such as at a reception or cocktail party.'),
(2, 'lunch', 'Lunch is the meal that you have in the middle of the day.', 'Lunch is a meal eaten around midday.It is commonly the second meal of the day, after breakfast, and varies in size by culture and region.'),
(3, 'dinner', 'The main meal of the day, taken either around midday or in the evening.', 'Dinner usually refers to what is in many Western cultures the largest and most formal meal of the day, which is eaten in the evening. Historically, the largest meal used to be eaten around midday, and called dinner. Especially among the elite, it gradually migrated to later in the day over the 16th to 19th centuries.');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `f_cat` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `f_des` varchar(255) NOT NULL,
  `f_price` float NOT NULL,
  `f_img` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `f_cat`, `f_name`, `f_des`, `f_price`, `f_img`) VALUES
(2, 1, 'Soup', 'Very Tasty', 50, 'food/starter/soup.jpg'),
(3, 2, 'Biriyani', 'Special local variety of rice, meat, potato and spices.', 65, 'food/lunch/biriyani.jpg'),
(4, 2, 'Chingri Malai curry', 'Curry: prawns, coconut, mustard, steamed', 55, 'food/lunch/chingri.jpg'),
(5, 3, 'Bhuna Khichuri', 'Obindobhog chaal (Small grain rice) and shona moong dal (Split yellow lentils) are fried together and then cooked in hot water with some specific spices and fried onions.', 35, 'food/dinner/bhuna_khichuri.jpg'),
(7, 3, 'Beef Kala Bhuna', 'Shoulder pieces of beef and traditional spices;', 40, 'food/dinner/beef_kala_bhuna.jpg'),
(11, 1, 'Wonthon', 'Crispy', 15, 'food/starter/wonthon.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `opinion`
--

CREATE TABLE `opinion` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `des` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reg`
--

CREATE TABLE `reg` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reg`
--

INSERT INTO `reg` (`id`, `name`, `email`, `phone`, `pass`) VALUES
(12, 'Johurul Alam', 'johurulrojin@yahoo.com', '01623609990', 'fcea920f7412b5da7be0cf42b8c93759'),
(13, 'safi', 'safi@gmail.com', '01689075231', '75f34b5502bec3c609734fdf4d37fa5c'),
(18, 'Johurul Alam', 'rojinalamjohurul@gmail.com', '01623609999', 'fcea920f7412b5da7be0cf42b8c93759');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `opinion`
--
ALTER TABLE `opinion`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reg`
--
ALTER TABLE `reg`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `opinion`
--
ALTER TABLE `opinion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reg`
--
ALTER TABLE `reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
