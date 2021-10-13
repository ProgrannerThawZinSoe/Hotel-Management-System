-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2021 at 03:00 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `password`, `role`, `image`, `create_date`) VALUES
(1, 'Thaw Zin Soe', 'HoAum3/46VBtU', 'admin', '870_male.jpg', '2021-10-11'),
(2, 'Thiri San', 'HoAum3/46VBtU', 'admin', '185_female 2.jpg', '2021-10-11'),
(3, 'Yadanar', 'HoAum3/46VBtU', 'staff', '942_female 3.png', '2021-10-11'),
(6, 'kyaw gyi', 'HoAum3/46VBtU', 'staff', '543_images (2).jpg', '2021-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` varchar(225) NOT NULL,
  `author` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `image` text NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `author`, `description`, `image`, `create_date`) VALUES
(1, 'Best hotel blogs and how to succeed with yours', 'Thaw Zin Soe', ' How many times have you heard that paper is matter of the past? Obviously, this panorama is not so drastic. From time to time we want to have the pleasure to hold a good travel guide. Nevertheless, the Internet has become the first source of information for several years, especially among younger people (18-29 years old)', '659_600-best-hotel-travel-instagram-pictures-by-fashion-bloggers.jpg', '2021-10-13');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `room_category` varchar(225) NOT NULL,
  `check_in` varchar(225) NOT NULL,
  `check_out` varchar(225) NOT NULL,
  `day` int(225) NOT NULL,
  `reference` varchar(225) NOT NULL,
  `confirm` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `name`, `phone`, `room_category`, `check_in`, `check_out`, `day`, `reference`, `confirm`) VALUES
(9, 'Thaw Zin Soe', '09403077739', 'Deluxe Room', '2021-10-12', '2021-10-26', 14, '282_order', 'confirm'),
(10, 'Thiri San', '09251016448', 'Super Deluxe Room', '2021-10-12', '2021-10-15', 3, '872_order', 'confirm'),
(11, 'tester', '1', 'Double Room', '2021-10-13', '2021-10-15', 2, '41_order', 'confirm');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(225) DEFAULT 'active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `description`, `status`) VALUES
(1, 'Thaw Zin Soe', 'thawzinsoe.business.mm@gmail.com', '09403077739', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', 'active'),
(2, 'Mg Mg', 'tz@gmail.com', '09251016448', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', 'done'),
(3, 'tester', 'thawzinsoe.dev@gmail.com', '', 'In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. Lorem ipsum may be used as a placeholder before final copy is available', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `name` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `name`, `image`, `date`, `description`) VALUES
(1, '4Years Hotel Anniversary Events', '952_template-gold-logo-4-years-anniversary-with-ribbon-vector-20490665.jpg', '2021-10-10', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit praesentium adipisci incidunt velit voluptatem! Dolorem placeat maxime exercitationem quo reprehenderit, veritatis quia numquam quasi deleniti perspiciatis voluptate esse. Adipisci.'),
(2, 'Jame Wedding', '587__112530533_brideandgroom2.jpg', '2021-10-15', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit praesentium adipisci incidunt velit voluptatem! Dolorem placeat maxime exercitationem quo reprehenderit, veritatis quia numquam quasi deleniti perspiciatis voluptate esse. Adipisci.'),
(3, 'John Brithday patry', '599_remotebirthday-lowres-2x1-699712360-1024x512.jpg', '2021-10-30', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit praesentium adipisci incidunt velit voluptatem! Dolorem placeat maxime exercitationem quo reprehenderit, veritatis quia numquam quasi deleniti perspiciatis voluptate esse. Adipisci.'),
(4, 'Software Launch Event', '227_backdrop-and-screen.jpg', '2021-11-25', '    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit praesentium adipisci incidunt velit voluptatem! Dolorem placeat maxime exercitationem quo reprehenderit, veritatis quia numquam quasi deleniti perspiciatis voluptate esse. Adipisci.'),
(5, 'Company Dinner', '446_GettyImages-868935172-2000.jpg', '2021-10-01', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit praesentium adipisci inc .... see more in detai'),
(6, 'independence day', '629_happy-myanmar-independence-day-1577691960.png', '2022-01-04', 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aliquid, odit praesentium adipisci inc');

-- --------------------------------------------------------

--
-- Table structure for table `page_setting`
--

CREATE TABLE `page_setting` (
  `page_title` varchar(225) NOT NULL,
  `page_phone` varchar(225) NOT NULL,
  `page_email` varchar(225) NOT NULL,
  `page_address` varchar(225) NOT NULL,
  `banner_image` varchar(225) NOT NULL,
  `fb` varchar(225) NOT NULL,
  `twitter` varchar(225) NOT NULL,
  `linked_in` varchar(225) NOT NULL,
  `google_map` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE `room` (
  `id` int(11) NOT NULL,
  `room_name` varchar(225) NOT NULL,
  `category_id` varchar(225) NOT NULL,
  `available` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`id`, `room_name`, `category_id`, `available`) VALUES
(1, 'A101', 'Single Room', 'Available'),
(2, 'A102', 'Single Room', 'Available'),
(3, 'A103', 'Single Room', 'Available'),
(4, 'A104', 'Single Room', 'Available'),
(5, 'A105', 'Single Room', 'Available'),
(6, 'A106', 'Double Room', 'Available'),
(7, 'A107', 'Double Room', 'Available'),
(8, 'A108', 'Double Room', 'Available'),
(9, 'A109', 'Double Room', 'Available'),
(10, 'A110', 'Double Room', 'Available'),
(11, 'B101', 'Family Room', 'Available'),
(12, 'B102', 'Family Room', 'Available'),
(13, 'B103', 'Family Room', 'Available'),
(14, 'B104', 'Family Room', 'Available'),
(15, 'B105', 'Family Room', 'Available'),
(16, 'B106', 'Deluxe Room', 'Available'),
(17, 'B107', 'Deluxe Room', 'Available'),
(18, 'B108', 'Deluxe Room', 'Available'),
(19, 'B109', 'Deluxe Room', 'Available'),
(20, 'B110', 'Deluxe Room', 'Available'),
(21, 'C101', 'Super Deluxe Room', 'Available'),
(22, 'C102', 'Super Deluxe Room', 'Available'),
(23, 'C103', 'Super Deluxe Room', 'Available'),
(24, 'C104', 'Super Deluxe Room', 'Available'),
(25, 'C105', 'Super Deluxe Room', 'Available'),
(26, 'C106', 'Standard Room', 'Available'),
(27, 'C107', 'Standard Room', 'Available'),
(28, 'C108', 'Standard Room', 'Available'),
(29, 'C109', 'Standard Room', 'Available'),
(31, 'C110', 'Standard Room', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `room_category`
--

CREATE TABLE `room_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(225) NOT NULL,
  `image` varchar(225) NOT NULL,
  `price` varchar(225) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `room_category`
--

INSERT INTO `room_category` (`id`, `category_name`, `image`, `price`, `description`) VALUES
(1, 'Single Room', '168_Room-Type-Single-Room.jpg', '12000', ' Single room: these rooms are assigned to one person or a couple. It may have one or more beds, but the size of the bed depends on the hotel. Some single rooms have a twin bed, most will have a double, few will have a queen bed'),
(2, 'Double Room', '403_Room-Type-Double-Room.jpg', '18000', ' a double room will generally be 1 bed for two people, the bed will either be a Double, Queen or King size bed, if you are traveling with friends and want to share a room you need to book a twin room which will have to single beds in.'),
(3, 'Family Room', '679_Family-Room-Furano-Prince-Hotel-1.jpg', '25000', ' Many hotels and resorts have specific &quot;adult only&quot; sections and offer separate rooms, pools and areas for families.  The rooms themselves may be identical but the term &quot;family room&quot; simply designates the location of your room.  Family room locations might also mean added conveniences for parents.  For example, these might be ground floor rooms or rooms closer to play areas.'),
(4, 'Deluxe Room', '381_Deluxe King-1.jpg', '32000', ' Luxury room. One of the most expensive types of rooms in the hotel. As a rule, Deluxe rooms have an area of u200bu200bat least 35 sq.m. The Deluxe Room usually includes several rooms (bedroom and living room), they are furnished with more expensive furniture than standard rooms. Some hotels in Deluxe rooms have a separate kitchen. From these numbers usually opens beautiful view On the city.'),
(5, 'Standard Room', '82_standard-room.jpg', '17000', ' The Standard Room comprises of 1 Double Bed or 2 Twin Beds, 2 Bedside Tables, a Desk &amp; Chair. The room is furnished with wall to wall carpeting, trendy furnishings and a balcony. Our ultramodern glass bathroom is equipped with hairdryer, magnifying shaving and make up mirror as well as all the amenities you could possible need during your stay.\r\nA Complimentary Bottle of Wine, Fresh Fruit and Mineral Water, are provided on arrival. Electric current: 220 Volts. Smoking rooms &amp; inter-connecting rooms are also available.'),
(6, 'Super Deluxe Room', '574_tumblr_inline_nst87vD6wP1r02mf8_1280.jpg', '45000', ' The Supe2r deluxe hotel room is finely decorated for your luxurious stay and contains all basic amenities such as Color LCD with Cable, Large windows for the perfect valley views, cozy double bed with quality material, Resting chair, Dressing mirror, Mini Fridge and 24 hrs running hot and cold wate ');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`) VALUES
(1, 'thawzinsoe.dev@gmail.com'),
(2, 'mgmg@gmail.com'),
(3, 'tester@gmail.com'),
(4, 'tester2@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room`
--
ALTER TABLE `room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `room_category`
--
ALTER TABLE `room_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `room`
--
ALTER TABLE `room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `room_category`
--
ALTER TABLE `room_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
