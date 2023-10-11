-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 03:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog site`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us_card`
--

CREATE TABLE `about_us_card` (
  `id` int(11) NOT NULL,
  `image` longblob NOT NULL,
  `heading` varchar(255) NOT NULL,
  `about` mediumtext NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about_us_card`
--

INSERT INTO `about_us_card` (`id`, `image`, `heading`, `about`, `date`) VALUES
(1, 0x61646d696e2f70616765732f61626f75745f696d6167652f363531373434336264623163665f6f776e65722d70696374757265322e706e67, 'Meet the coach', 'Coach offers business coaching workshop programs that are designed to step up progress and accelerate results in both your business and personal life. Our global community of successful entrepreneurs, our highly experienced coaches, our arsenal of proprietary tools, and our deep-dive strategy sessions are the cornerstones of our programs\' success.\r\n                ', '2023-09-29 22:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `blog_page`
--

CREATE TABLE `blog_page` (
  `id` int(11) NOT NULL,
  `blog_image` blob NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_info` varchar(500) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blog_page`
--

INSERT INTO `blog_page` (`id`, `blog_image`, `blog_title`, `blog_info`, `date`) VALUES
(1, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386165633839323035375f363531373538616131646561655f6469762e706f73742d696d6167652e706e67, 'The Benefits of Meditation for Mental Health', 'Explore the positive impact of meditation on mental well-being and provide tips for incorporating it into daily life.', '2023-10-01 00:27:04'),
(2, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386166356339616262315f363531373539623434633466625f6469762e706f73742d696d616765202831292e706e67, 'The Future of Artificial Intelligence in Healthcare', 'Discuss how AI is revolutionizing the healthcare industry, from diagnostics to patient care.', '2023-10-01 00:29:32'),
(3, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386166616330386564635f363531373538616131646561655f6469762e706f73742d696d6167652e706e67, 'Sustainable Living: Tips for Reducing Your Carbon Footprint', 'Offer practical advice on eco-friendly habits and sustainable choices for a greener lifestyle.', '2023-10-01 00:30:52'),
(4, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386230333537346636395f363531373539623434633466625f6469762e706f73742d696d616765202831292e706e67, 'The Importance of Cybersecurity in the Digital Age', 'TDelve into the rising significance of cybersecurity, especially with the increase in online threats and data breaches.', '2023-10-01 00:33:09'),
(5, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386230363661323466645f363531373538616131646561655f6469762e706f73742d696d6167652e706e67, 'Exploring the World of Virtual Reality Gaming', 'Provide insights into the immersive world of VR gaming and recommend popular VR games.', '2023-10-01 00:33:58'),
(6, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386230386636306235395f363531373539623434633466625f6469762e706f73742d696d616765202831292e706e67, ' A Beginner\'s Guide to Investing in Stocks', 'Introduce beginners to the world of stock market investing,  covering  key concepts and strategies.', '2023-10-01 00:34:39'),
(7, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386232363436623531365f363531373539623434633466625f6469762e706f73742d696d616765202831292e706e67, 'The Art of Productive Remote Work', 'Share strategies and tools for staying productive while working remotely, a topic of growing relevance.', '2023-10-01 00:42:28'),
(8, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386232386331643231375f363531373539623434633466625f6469762e706f73742d696d616765202831292e706e67, 'Traveling on a Budget: How to Explore the World Affordably', 'Offer budget-friendly travel tips and resources for  adventure-seekers.', '2023-10-01 00:43:08'),
(9, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386232626330373662385f363531373538616131646561655f6469762e706f73742d696d6167652e706e67, 'The Impact of Social Media on Mental Health', 'Examine the relationship between social media use and mental health, along with tips for maintaining a healthy balance.', '2023-10-01 00:43:56'),
(10, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386232656461326662365f363531373538616131646561655f6469762e706f73742d696d6167652e706e67, ' The Rise of Plant-Based Diets: Health Benefits and Myths', 'Explore the health benefits of plant-based diets, debunk common myths,  and provide recipe ideas', '2023-10-01 00:44:45'),
(11, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386233313839666561355f363531373539623434633466625f6469762e706f73742d696d616765202831292e706e67, ' A Beginner\'s Guide to Investing in Stocks', 'Introduce beginners to the world of stock market investing, covering key concepts and strategies.', '2023-10-01 00:45:28'),
(12, 0x61646d696e2f70616765732f626c6f675f696d616765732f363531386233343731353564305f363531373538616131646561655f6469762e706f73742d696d6167652e706e67, ' A Beginner\'s Guide to Investing in Stocks', 'Introduce beginners to the world of stock market investing, covering key concepts and strategies.', '2023-10-01 00:46:15');

-- --------------------------------------------------------

--
-- Table structure for table `book_advert`
--

CREATE TABLE `book_advert` (
  `id` int(11) NOT NULL,
  `book_image` blob NOT NULL,
  `book_text` varchar(255) NOT NULL,
  `book_intro` varchar(255) NOT NULL,
  `book2_image` blob NOT NULL,
  `modal_header` varchar(255) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `book_description` varchar(255) NOT NULL,
  `book_sumary` varchar(255) NOT NULL,
  `sumary_content` varchar(1000) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_advert`
--

INSERT INTO `book_advert` (`id`, `book_image`, `book_text`, `book_intro`, `book2_image`, `modal_header`, `book_title`, `book_description`, `book_sumary`, `sumary_content`, `time`) VALUES
(1, 0x61646d696e2f70616765732f626f6f6b5f6164766572745f696d6167652f363531383966333734646434365f626f6f6b20696d61676520322e706e67, 'Get started today!', 'Our starter kit includes everything you need to know about how Val Coach will multiply your income, expand your freedom, and simplify every area of your life.', 0x61646d696e2f70616765732f626f6f6b5f6164766572745f696d6167652f363531383966333734653236325f626f6f6b20696d61676520322e706e67, 'Downlod the E-book now', 'Book title', 'Book description.This content is a little bit longer.', 'Book summary or overview', 'Omnis, sint earum? Alias optio quae perspiciatis laboriosam voluptatem vel ipsam rerum modi quaerat\r\n                    asperiores dolorum dolor nam eveniet minima facere, repellat, cumque quam consequatur reiciendis\r\n                    doloribus culpa! Fuga, exercitationem. Dolorum dolorem itaque, enim dicta quidem reprehenderit\r\n                    possimus adipisci quas, modi sapiente consequatur fugit voluptate vitae ratione ipsa voluptas\r\n                    aliquid, distinctio similique voluptates corrupti unde? Ducimus, non! Praesentium, facere\r\n                    ea?', '2023-09-30 23:20:39');

-- --------------------------------------------------------

--
-- Table structure for table `our_program_home`
--

CREATE TABLE `our_program_home` (
  `id` int(11) NOT NULL,
  `program_image` longblob NOT NULL,
  `program_title` varchar(255) NOT NULL,
  `program_info` varchar(4000) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `coaching_content` varchar(4000) NOT NULL,
  `level` varchar(255) NOT NULL,
  `dates` varchar(255) NOT NULL,
  `fees` varchar(600) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `our_program_home`
--

INSERT INTO `our_program_home` (`id`, `program_image`, `program_title`, `program_info`, `date`, `coaching_content`, `level`, `dates`, `fees`) VALUES
(1, 0x61646d696e2f70616765732f70726f6772616d5f696d6167652f363531373538616131646561655f6469762e706f73742d696d6167652e706e67, 'The Epicurean Program - Classic', 'Our in-person workshops allow you to become fully immersed in the strategy and planning of your life and business while connecting with your coach and the other entrepreneurs in the room. No distractions: Only you, your vision, and the tools and resources to get you to where you want to be.', '2023-09-30 00:07:22', 'Classic programs typically cover fundamental topics such as business ideation, marketresearch, business planning, marketing strategies, financial management, and scaling for growth.', 'This program is designed for entrepreneurs who are in the early stages of their business journey, often at the startup phase.', 'The program may be offered on a specific start and end date, with regular sessions over a set duration, such as 12 weeks.', 'The fees for classic programs can vary widely depending on the coaching provider, the duration of the program, and the depth of coaching offered. It\'s common to find both free and paid classic programs, with paid programs ranging from a few hundred to a few thousand dollars.'),
(2, 0x61646d696e2f70616765732f70726f6772616d5f696d6167652f363531373539356465343334395f6469762e706f73742d696d616765202831292e706e67, 'The Odyssey Program - P2P', 'Our online workshops give you the proven benefits of val Coaching with the flexibility you need. With the ability to attend from anywhere in the, this is the perfect option for entrepreneurs who want to save time and avoid travel complexities, while still enjoying massive results and breakthroughs.', '2023-09-30 00:10:21', 'p2p programs often focus on collaboration and learning from fellow entrepreneurs. Topics may include peer mentorship, problem-solving, industry-specific insights, and networking.', 'The p2p program might be suitable for entrepreneurs who have some business\r\n                        experience and are looking for peer learning and networking opportunities.', 'The format of p2p programs can vary. Some may have fixed start and end dates,\r\n                        while others might operate as ongoing peer groups or communities.', 'Fees for p2p programs can also vary. Some may be offered for free, while others\r\n                        may charge a subscription fee or yan annual membership fee to access the peer network and\r\n                        resources.'),
(3, 0x61646d696e2f70616765732f70726f6772616d5f696d6167652f363531373539623434633466625f6469762e706f73742d696d616765202831292e706e67, 'The Astral Program - Virtual', 'Our online workshops give you the proven benefits of what you need with the flexibility\r\n                you need. With the ability to attend from anywhere in the world, this is the perfect option for\r\n                entrepreneurs who want to save time and avoid travel complexities, while still enjoying massive results\r\n                and breakthroughs.', '2023-09-30 00:11:48', 'The content of virtual programs can cover a wide range of topics similar\r\n                        to classic programs. It often includes webinars, online workshops, mentoring sessions, and\r\n                        access to digital resources.', 'Virtual programs are designed to be accessible to entrepreneurs regardless of their\r\n                        location, making them suitable for a global audience.', 'Virtual programs may be structured in various ways. Some may have scheduled live\r\n                        sessions, while others might provide on-demand content for participants to access at their\r\n                        convenience.', 'The fees for virtual programs can vary, with some offering free content and others\r\n                        charging a fee for full access. Prices can range from a nominal fee to more substantial costs,\r\n                        depending on the program\'s offerings.');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(255) NOT NULL,
  `image` longblob NOT NULL,
  `header` varchar(255) NOT NULL,
  `paragraph` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `image`, `header`, `paragraph`, `date`) VALUES
(2, 0x696d6167652f363531363466666463396231615f736c6964657220696d67312e6a7067, 'First slide label', 'Some representative placeholder content for the first slide.', '2023-09-29 14:44:40'),
(3, 0x696d6167652f363531363532366339663336365f736c696465722d696d67322e706e67, 'Second slide label', 'Some representative placeholder content for the second slide.', '2023-09-29 14:44:40'),
(4, 0x696d6167652f363531363562663834336432365f736c696465722d696d67332e706e67, 'Third slide label', 'Some representative placeholder content for the third slide.', '2023-09-29 14:44:40'),
(5, 0x696d6167652f363531363563353431636539365f736c696465722d696d67342e706e67, 'Fourth slide label', 'Some representative placeholder content for the fourth slide.', '2023-09-29 14:44:40'),
(6, 0x696d6167652f363531363563626365363761655f736c696465722d696d67362e706e67, 'Fifth slide label', 'Some representative placeholder content for the fifth slide.', '2023-09-29 14:44:40');

-- --------------------------------------------------------

--
-- Table structure for table `slider_card`
--

CREATE TABLE `slider_card` (
  `id` int(30) NOT NULL,
  `image` longblob DEFAULT NULL,
  `inspire_text` varchar(255) NOT NULL,
  `announce_text` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider_card`
--

INSERT INTO `slider_card` (`id`, `image`, `inspire_text`, `announce_text`, `date`) VALUES
(1, 0x736c6964657263617264696d672f363531366137333163646335625f6f776e65722d706963747572652e706e67, 'Don\'t be afraid to give up the good to go for the great.', 'Important update: The venue for our upcoming seminar has been changed to the Grand Ballroom.', '2023-09-29 14:43:53'),
(2, 0x736c6964657263617264696d672f363531366363313164306531635f6f776e65722d706963747572652e706e67, 'Success is not final, failure is not fatal: It is the courage to continue that counts.', 'Exciting news! Our upcoming workshop on business strategies is scheduled for next month.\r\n', '2023-09-29 14:43:53'),
(3, 0x736c6964657263617264696d672f363531366363353136636535615f6f776e65722d706963747572652e706e67, 'Your time is limited, don\'t waste it living someone else\'s life.', 'New coaching sessions are available! Book your slot now for personalized entrepreneurial guidance.', '2023-09-29 14:43:53'),
(4, 0x736c6964657263617264696d672f363531366363373237653531385f6f776e65722d706963747572652e706e67, 'The only way to do great work is to love what you do.', 'Join our exclusive entrepreneur networking event this Friday. Limited seats are available.', '2023-09-29 14:43:53');

-- --------------------------------------------------------

--
-- Table structure for table `success_card`
--

CREATE TABLE `success_card` (
  `id` int(11) NOT NULL,
  `success_image` blob NOT NULL,
  `head_text` varchar(255) NOT NULL,
  `success_insight` varchar(255) NOT NULL,
  `success_name` varchar(255) NOT NULL,
  `success_cite` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `success_card`
--

INSERT INTO `success_card` (`id`, `success_image`, `head_text`, `success_insight`, `success_name`, `success_cite`, `date`) VALUES
(1, 0x61646d696e2f70616765732f737563636573735f696d6167652f363531383661336362623635375f6469762e706f73742d696d616765202831292e706e67, 'Thinking About Val Coach? Here\'s What You Should Know.', 'Our members answer your top questions about val Coaching.', 'Justin  ', '“It has\r\n                    transformed my entire life.”', '2023-09-30 19:34:36'),
(2, 0x61646d696e2f70616765732f737563636573735f696d6167652f363531383662353965636233355f6469762e706f73742d696d6167652e706e67, 'Exploring Val Coach: Is It the Right Fit for Your Journey?', 'Maxwell Property Management', 'Maxwell  ', '“Coach val creates a community of people who are are like-minded and understand what you\'re going through”', '2023-09-30 19:39:21'),
(3, 0x61646d696e2f70616765732f737563636573735f696d6167652f363531383662633633626264385f6469762e706f73742d696d6167652e706e67, 'Unlocking the Value of Val Coach: Is It Right for You?', 'JDRM Dental Care Ltd.', 'Majid  ', '“Coach val is an investment that will pay dividends for a long time in my personal life, my marriage, with my family, and in my business.”', '2023-09-30 19:41:10'),
(4, 0x61646d696e2f70616765732f737563636573735f696d6167652f363531383664643662396464625f6469762e706f73742d696d6167652e706e67, 'Is Val Coach Worth the Investment?', 'Our members reveal how they\'ve made the most of their investments.', 'Valentine  ', '“The numbers have gone up every year that I\'ve been in Coach.”', '2023-09-30 19:49:58');

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
(1, 'Dirk', 'Vernon', 'dirkvernon900@gmail.com', '$2y$10$JSJFRoLKCObaxHVN9UgknuMWu/WhZiBBDvbxLEx8w5P7ZcYmVXbhe', '+2348164906365', 'healthcare', 'classic', 'I am known for my [Positive Attribute, e.g., \\\'strong work ethic\\\' or \\\'creativity\\\'] and my ability to [Another Positive Attribute, e.g., \\\'work well in teams\\\' or \\\'adapt to new situations\\\']. I thrive in environments that encourage innovation and collaboration and am always eager to contribute my best to any project or initiative.', 'growth', 'Opposite School Junction Tunga Maje, Abuja Nigeria', '2023-10-05 14:48:45', '', 1, 0x2e2e2f70726f66696c655f696d616765732f363531656265626431636666375f696d6167652839292e77656270),
(2, 'valor', 'valentine', 'vernondirk419@gmail.com', '$2y$10$YKCykVNZ6T9WKmo4roMP6.c0YCJp8hQrQ4IOV/.CD7r/Rrz4m28MO', '+2348164906365', 'healthcare', 'classic', 'i don\'t give a fuck about what people say about me cuz imma live my life to the fullest', 'growth', 'Opposite School Junction Tunga Maje, Abuja Nigeria', '2023-10-05 14:16:46', '', 1, ''),
(3, 'Shino', 'Peter', 'test@gmail.com', '$2y$10$biAi6AblzWYnDUqap25mvOV29hjdtDH.CY4zLyBp4R/WaOi333h4G', '08164906365', 'tech', 'p2p', 'If you\\\\\\\'re still encountering the \\\\\\\"Undefined variable $row\\\\\\\" warning, it suggests that the $row variable is not being defined within the if statement due to the SQL query not returning any results. To handle this situation, you can initialize the $row variable before the if statement as follows:', 'startup', 'Opposite deeper life church Madalla Niger State', '2023-10-05 14:57:32', '', 1, 0x2e2e2f70726f66696c655f696d616765732f363531656330636364663832375f696d616765283130292e77656270),
(4, 'Maxwell', 'Onah', 'max@email.com', '$2y$10$pTwuHnJxzcC/8oWIv3sgGeJYlMCM7Sdl7papdhqTRWC0VYU.0GaD6', '08163876453', 'Agriculture', 'virtual', 'variable is not being defined within the if statement due to the SQL query not returning any results. ', 'startup', 'veritas university abuja niger state', '2023-10-05 14:58:42', '', 1, 0x2e2e2f70726f66696c655f696d616765732f363531656331313239643538635f696d6167652833292e77656270),
(5, 'John', 'Kendrick ', 'val@m.com', '$2y$10$EOCmimoJbwAeQybzjfD3hOciPQdKa7Kxe6TmnO.j8SLgJV9XQgRpK', '08164906365', 'admin', 'admin', 'I\'m one of the admins of this honourable coaching platform', 'startup', 'val is everywhere', '2023-10-08 16:16:20', 'admin', 1, 0x70726f66696c655f696d616765732f363531653939666430613835635f696d616765283131292e77656270),
(6, 'van', 'vicker', 'van@e.com', '$2y$10$hfgyZ7iF5cq.v9Tfy/vn0.nCzJTDUeSVCxTmnHJyNev8VAo8R6r1q', '+2348164906365', 'Technology', 'virtual', 'i go soon mad', 'growth', 'Opposite School Junction Tunga Maje, Abuja Nigeria', '2023-10-05 10:25:00', 'user', 1, 0x2e2e2f70726f66696c655f696d6167652f363531653764623334323961345f696d616765283130292e77656270),
(7, 'sam', 'larry', 'sam@e.com', '$2y$10$/sUqzPcUlIPHO.bLIzv6FuN3uAhvEdzq3hbkMCKS0Cvr50knugl5K', '+2348164906365', 'Technology', 'classic', 'still testing', 'growth', 'Opposite School Junction Tunga Maje, Abuja Nigeria', '2023-10-04 17:39:39', 'user', 1, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us_card`
--
ALTER TABLE `about_us_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_page`
--
ALTER TABLE `blog_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_advert`
--
ALTER TABLE `book_advert`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_program_home`
--
ALTER TABLE `our_program_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_card`
--
ALTER TABLE `slider_card`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `success_card`
--
ALTER TABLE `success_card`
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
-- AUTO_INCREMENT for table `about_us_card`
--
ALTER TABLE `about_us_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog_page`
--
ALTER TABLE `blog_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `book_advert`
--
ALTER TABLE `book_advert`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `our_program_home`
--
ALTER TABLE `our_program_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `slider_card`
--
ALTER TABLE `slider_card`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `success_card`
--
ALTER TABLE `success_card`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
