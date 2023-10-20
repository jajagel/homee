-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2023 at 02:01 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homee`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(10) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `brief_desc` varchar(255) DEFAULT NULL,
  `long_desc` text DEFAULT NULL,
  `featured` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `image`, `brief_desc`, `long_desc`, `featured`) VALUES
(11, 'Respira', 31350, 'respira-1.webp', 'Stylish Modular Sofa', 'Elevate your living space with the Respira Modular Sofa, a chic and versatile seating solution that adapts to your needs. Its contemporary design and premium comfort make it the perfect addition to any modern home.', 1),
(12, 'Sleek', 6710, 'sleek-1.webp', 'Modern Glass Coffee Table', 'The Sleek Glass Coffee Table combines style and functionality, featuring a minimalist design and a sturdy glass surface. It\'s the ideal choice for those who appreciate the beauty of simplicity in their living room decor.', 1),
(13, 'Zenith', 18100, 'zenith-1.webp', 'Luxurious Reclining Armchair', 'Unwind in absolute luxury with the Zenith Reclining Armchair. Crafted for ultimate relaxation, this chair boasts plush comfort and a sleek design, making it a stunning addition to your home\'s relaxation zone.', 1),
(14, 'Luna', 4150, 'luna-1.webp', 'Elegant Moonlight Nightstand', 'The Luna Nightstand is a charming piece that adds a touch of elegance to your bedroom. Its unique design, combined with a spacious top and storage drawer, is the perfect bedside companion.', 1),
(16, 'Nova', 10300, 'nova-1.webp', 'Minimalist Wooden Desk', 'The Nova Wooden Desk is a sleek and functional addition to your workspace. Its minimalist design and ample workspace make it a perfect fit for modern offices and home workstations.', 0),
(17, 'Vista', 26000, 'vista-1.webp', 'Spacious Wide Wardrobe', 'Keep your wardrobe organized and clutter-free with the Vista Wide Wardrobe. With its ample storage space and stylish design, it\'s the perfect solution for storing and showcasing your clothing collection.', 0),
(18, 'Aria', 12900, 'aria-1.webp', 'Contemporary TV Console', 'Elevate your home entertainment experience with the Aria TV Console. Its contemporary design and ample storage space provide the perfect platform for your TV and media equipment, all while enhancing your living room decor.', 0),
(19, 'Harmony', 8790, 'harmony-1.webp', 'Sleek Bookshelf', 'The Harmony Bookshelf combines form and function seamlessly, providing a stylish way to display your favorite books and decorative items. Its sleek design complements a modern interior while keeping your space organized.', 0),
(20, 'Cozy', 15590, 'cozy-1.webp', 'Cozy Bedframe', 'Sleep in comfort and style with the Cozy Bedframe. Its inviting design and quality construction create a cozy and welcoming atmosphere in your bedroom, ensuring a restful night\'s sleep.', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
