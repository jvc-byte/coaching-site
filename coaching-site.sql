-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2024 at 07:59 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coaching_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `first_name` varchar(150) NOT NULL,
  `last_name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `password` longtext NOT NULL,
  `phone_number` varchar(30) NOT NULL,
  `industry` varchar(255) NOT NULL,
  `program` varchar(255) NOT NULL DEFAULT 'user',
  `about` varchar(500) NOT NULL,
  `business_stage` varchar(1000) NOT NULL,
  `address` varchar(500) NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `status` int(2) NOT NULL DEFAULT 1,
  `profile_picture` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `industry`, `program`, `about`, `business_stage`, `address`, `registration_date`, `user_type`, `status`, `profile_picture`) VALUES
(1, 'Dirk', 'Vernon', 'dirk@gmail.com', '$2y$10$JSJFRoLKCObaxHVN9UgknuMWu/WhZiBBDvbxLEx8w5P7ZcYmVXbhe', '+2348164906365', 'healthcare', 'classic', 'I am known for my [Positive Attribute, e.g., \\\'strong work ethic\\\' or \\\'creativity\\\'] and my ability to [Another Positive Attribute, e.g., \\\'work well in teams\\\' or \\\'adapt to new situations\\\']. I thrive in environments that encourage innovation and collaboration and am always eager to contribute my best to any project or initiative.', 'growth', 'Opposite School Junction Tunga Maje, Abuja Nigeria', '2023-10-05 14:48:45', '', 1, 0x2e2e2f70726f66696c655f696d616765732f363531656265626431636666375f696d6167652839292e77656270),
(2, 'valor', 'valentine', 'vernon@gmail.com', '$2y$10$YKCykVNZ6T9WKmo4roMP6.c0YCJp8hQrQ4IOV/.CD7r/Rrz4m28MO', '+2348164906365', 'healthcare', 'classic', 'i don\'t give a fuck about what people say about me cuz imma live my life to the fullest', 'growth', 'Opposite School Junction Tunga Maje, Abuja Nigeria', '2023-10-05 14:16:46', '', 1, ''),
(3, 'Shino', 'Peter', 'test@gmail.com', '$2y$10$biAi6AblzWYnDUqap25mvOV29hjdtDH.CY4zLyBp4R/WaOi333h4G', '08164908475', 'tech', 'p2p', 'If you\\\\\\\'re still encountering the \\\\\\\"Undefined variable $row\\\\\\\" warning, it suggests that the $row variable is not being defined within the if statement due to the SQL query not returning any results. To handle this situation, you can initialize the $row variable before the if statement as follows:', 'startup', 'Opposite deeper life church Madalla Niger State', '2023-10-05 14:57:32', '', 1, 0x2e2e2f70726f66696c655f696d616765732f363531656330636364663832375f696d616765283130292e77656270),
(4, 'Maxwell', 'Onah', 'max@email.com', '$2y$10$pTwuHnJxzcC/8oWIv3sgGeJYlMCM7Sdl7papdhqTRWC0VYU.0GaD6', '08163876453', 'Agriculture', 'virtual', 'variable is not being defined within the if statement due to the SQL query not returning any results. ', 'startup', 'veritas university abuja niger state', '2023-10-05 14:58:42', '', 1, 0x2e2e2f70726f66696c655f696d616765732f363531656331313239643538635f696d6167652833292e77656270),
(5, 'John', 'Kendrick ', 'val@m.com', '$2y$10$EOCmimoJbwAeQybzjfD3hOciPQdKa7Kxe6TmnO.j8SLgJV9XQgRpK', '081649756965', 'admin', 'admin', 'I\'m one of the admins of this honourable coaching platform', 'startup', 'val is everywhere', '2023-10-08 16:16:20', 'admin', 1, 0x70726f66696c655f696d616765732f363531653939666430613835635f696d616765283131292e77656270),
(6, 'van', 'vicker', 'van@e.com', '$2y$10$hfgyZ7iF5cq.v9Tfy/vn0.nCzJTDUeSVCxTmnHJyNev8VAo8R6r1q', '+2348166406365', 'Technology', 'virtual', 'i go soon mad', 'growth', 'Opposite School Junction Tunga Maje, Abuja Nigeria', '2023-10-05 10:25:00', 'user', 1, 0x2e2e2f70726f66696c655f696d6167652f363531653764623334323961345f696d616765283130292e77656270),
(7, 'sam', 'larry', 'sam@e.com', '$2y$10$/sUqzPcUlIPHO.bLIzv6FuN3uAhvEdzq3hbkMCKS0Cvr50knugl5K', '+2348164906365', 'Technology', 'classic', 'still testing', 'growth', 'Opposite School Junction Tunga Maje, Abuja Nigeria', '2023-10-04 17:39:39', 'user', 1, ''),
(9, 'Admin', 'admin', 'email@example.com', '$2y$10$ifnA4hIvJhAddPAfMswhCuj8E6I3h0uCCINHta6bDkvOzyyhUlULa', '1234567890', 'Technology', 'admin', 'I am the admin', 'growth', 'i  work remotely', '2024-07-30 18:59:05', 'admin', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
