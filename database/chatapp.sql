-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2023 at 08:54 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) NOT NULL,
  `comment` varchar(191) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `writter_first_name` varchar(191) NOT NULL,
  `writter_last_name` varchar(191) NOT NULL,
  `writter_image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `post_id`, `writter_first_name`, `writter_last_name`, `writter_image`, `created_at`) VALUES
(64, '    nice picture', 34, 'niyonzima', 'joji', '63dbd8dfb00684.95300818.jpg', '2023-02-02 15:42:15'),
(65, '    another one', 34, 'niyonzima', 'joji', '63dbd8dfb00684.95300818.jpg', '2023-02-02 15:42:31');

-- --------------------------------------------------------

--
-- Table structure for table `groupchat`
--

CREATE TABLE `groupchat` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_first_name` varchar(191) NOT NULL,
  `user_last_name` varchar(191) NOT NULL,
  `user_profile` varchar(191) NOT NULL,
  `message` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groupchat`
--

INSERT INTO `groupchat` (`id`, `user_id`, `user_first_name`, `user_last_name`, `user_profile`, `message`, `created_at`) VALUES
(14, 4, 'Mbonyimfura', 'Tresor', '63ce9fca66f179.03598824.jpg', '    hello guys', '2023-02-02 15:25:18'),
(15, 22, 'niyonzima', 'joji', '63dbd8dfb00684.95300818.jpg', '    hello', '2023-02-02 15:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) NOT NULL,
  `user_first_name` varchar(191) NOT NULL,
  `user_last_name` varchar(191) NOT NULL,
  `writter_image` varchar(191) NOT NULL,
  `user_email` varchar(191) NOT NULL,
  `post_id` bigint(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `user_first_name`, `user_last_name`, `writter_image`, `user_email`, `post_id`, `created_at`) VALUES
(20, 'niyonzima', 'joji', ' 63dbd8dfb00684.95300818.jpg', 'niyobuhungiro@gmail.com', 34, '2023-02-02 15:41:53');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) NOT NULL,
  `sender_id` bigint(20) NOT NULL,
  `receiver_id` bigint(20) NOT NULL,
  `sender_first_name` varchar(191) NOT NULL,
  `sender_last_name` varchar(191) NOT NULL,
  `sender_profile` varchar(191) NOT NULL,
  `message` varchar(300) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `sender_first_name`, `sender_last_name`, `sender_profile`, `message`, `created_at`) VALUES
(58, 4, 2, 'Mbonyimfura', 'Tresor', '63ce9fca66f179.03598824.jpg', 'slm kwibuka?', '2023-02-02 15:20:59'),
(59, 4, 2, 'Mbonyimfura', 'Tresor', '63ce9fca66f179.03598824.jpg', '    bmz bt?', '2023-02-02 15:21:06'),
(60, 2, 4, 'kwibuka', 'olivier', '63ce690d864fc2.70374523.jpg', '    n poa umsa ntarb kbx', '2023-02-02 15:21:44'),
(61, 2, 4, 'kwibuka', 'olivier', '63ce690d864fc2.70374523.jpg', 'woe x vp mn?', '2023-02-02 15:21:59'),
(62, 4, 2, 'Mbonyimfura', 'Tresor', '63ce9fca66f179.03598824.jpg', '    nanjy ntarb namahoro...', '2023-02-02 15:23:06'),
(63, 2, 4, 'kwibuka', 'olivier', '63ce690d864fc2.70374523.jpg', '    ✌🏻✌🏻', '2023-02-02 15:24:03'),
(64, 22, 2, 'niyonzima', 'joji', '63dbd8dfb00684.95300818.jpg', 'hi bro', '2023-02-02 15:43:00'),
(65, 2, 22, 'kwibuka', 'olivier', '63ce690d864fc2.70374523.jpg', '    i am okay', '2023-02-02 15:44:06');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `body` varchar(800) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_first_name` varchar(191) NOT NULL,
  `user_last_name` varchar(191) NOT NULL,
  `user_profile` varchar(191) NOT NULL,
  `post_image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `user_id`, `user_first_name`, `user_last_name`, `user_profile`, `post_image`, `created_at`) VALUES
(22, '    this is the first news           ', '          my news are available here          ', 8, 'kwibuka', 'olivier', '63d24356552c65.03866401.jpg', '63dbdacac48370.94571768.jpg', '2023-02-02 15:46:18'),
(23, '              this is the second news      ', '                my secpnd news    ', 8, 'kwibuka', 'olivier', '63d24356552c65.03866401.jpg', '63dbdb1bdd7966.52712021.jpg', '2023-02-02 15:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` bigint(20) NOT NULL,
  `description` varchar(600) NOT NULL,
  `image` varchar(191) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_first_name` varchar(151) NOT NULL,
  `user_last_name` varchar(151) NOT NULL,
  `user_profile` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `description`, `image`, `user_id`, `user_first_name`, `user_last_name`, `user_profile`, `created_at`) VALUES
(34, '            i am single', '63dbd9ae395ec3.26426029.jpg', 22, 'niyonzima', 'joji', '63dbd8dfb00684.95300818.jpg', '2023-02-02 15:41:34'),
(35, '           my first post ', '63dbdb70526f40.89175903.jpg', 2, 'kwibuka', 'olivier', '63ce690d864fc2.70374523.jpg', '2023-02-02 15:49:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `first_name` varchar(191) NOT NULL,
  `last_name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `birth` varchar(191) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `image` varchar(191) NOT NULL,
  `user_type` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `birth`, `sex`, `image`, `user_type`, `created_at`) VALUES
(2, 'kwibuka', 'olivier', 'okwibuka@gmail.com', '$2y$10$jjWn7wQUCSQsXprWPlEqEeW8c4dxIeOUgRpBlJCn23IpUZd1quc7m', '1999-02-06', '', '63ce690d864fc2.70374523.jpg', 'user', '2023-01-31 11:55:53'),
(3, 'Iradukunda', 'David', 'david@gmail.com', '$2y$10$2EJaRx9Bqg972WHdrCuQ1u6vuuad4SoK21o3m0LoxFedV4Zt02L72', '1998-04-05', '', '63ce97d5f157f7.64073572.jpg', 'user', '2023-01-23 14:21:09'),
(4, 'Mbonyimfura', 'Tresor', 'tresor@gmail.com', '$2y$10$TPWBuXlho4Lo4Qx6vWQ5B.hmKBtBpE7vwixrpV3Kaznnes/Z1BbDe', '1993-12-03', '', '63ce9fca66f179.03598824.jpg', 'user', '2023-01-23 14:55:06'),
(6, 'kellia', 'promise', 'uwiduhayekellia@mail', '$2y$10$7Qe4yP.sUOYkqgp7C.8G9Oz1Pc9CcnIJW23nfUbFbMbm0Y.LzU4Ae', '2022-02-06', '', '63cf7c4484baf1.50631531.jpg', 'user', '2023-02-01 19:03:10'),
(7, 'Nambaje', 'Edwin', 'edwin@gmail.com', '$2y$10$oebepeRyhNnkJzRm1vLHauywRNhwUThKwTd2m/n066egoM3erqV6K', '2023-01-24', '', '63d021410b6846.81936552.jpg', 'user', '2023-01-24 18:19:45'),
(8, 'kwibuka', 'olivier', 'okwibuka11@gmail.com', '$2y$10$ZOm4cc/Ms.YQtIBJPwAO4.O49K3oQ.Ou6OReypDxYzxQGdKiE42xK', '1999-02-06', '', '63d24356552c65.03866401.jpg', 'admin', '2023-01-26 09:10:10'),
(13, 'kimenyi', 'honollin', 'kimenyi@gmail.com', '$2y$10$ooqPj08gMESxSqS2.UYFMuXUwij9kF/UiHbuDF4pdjZyYZH6nh25y', '2023-01-27', '', '63d38f06e02d86.08947049.jpg', 'user', '2023-01-27 08:44:54'),
(14, 'nibishaka', 'damascene', 'nibishaka@gmail.com', '$2y$10$UQ/4T1qr5F34N4n7DvD1zO0IygkR5VhEh5ppCgC0ovtevoifKpKNS', '2023-01-27', '', '63d38f338287d9.79698881.jpg', 'user', '2023-01-27 08:45:39'),
(15, 'kagabo', 'emmanuel', 'kagabo@gmail.com', '$2y$10$lTuaPaDICcrZuRxBhD/H5.Wb4Nqu6buQeurfD1hd0/yR0H9Hcxp0.', '2023-01-27', '', '63d38f57946698.32722894.jpg', 'user', '2023-01-27 08:46:15'),
(16, 'iranzi', 'kevin', 'iranzi@gmail.com', '$2y$10$ceUu2n9wovYHnrMCynFiG.Qj6ZfrJZCzhs33vy6QFMlAsQZ0Q47Ty', '2023-01-27', '', '63d38f7f831974.39916931.jpg', 'user', '2023-01-27 08:46:55'),
(17, 'hirwa', 'kollin', 'hirwa@gmail.com', '$2y$10$Ekx3pYKXEHEhBs5zZfv/hu..MYUfi.thA/51kmrH88GxjVALAAmCO', '2023-01-27', '', '63d38fa17bbe25.67774216.jpg', 'user', '2023-01-27 08:47:29'),
(18, 'kwisanga', 'pascal', 'kwisanga@gmail.com', '$2y$10$Ydsi8k4nVdgVwcBXNLBTy.84r8.UGx.zsz5n.sLsXK9TA0aUjGzoi', '2023-01-27', '', '63d3906c915044.78602001.jpg', 'user', '2023-01-27 08:50:52'),
(19, 'imfurayacu', 'epaphrodite', 'mfura@gmail.com', '$2y$10$l1vq3oiFzG1osx9.0FLQJOdC6On368rAcIx6KhvuTvHC5RYs/lVIG', '2023-01-27', '', '63d390a9dd6420.78638019.jpg', 'user', '2023-01-27 08:51:53'),
(20, 'kalisa', 'djuma', 'kalisa@gmail.com', '$2y$10$K0as1hel0HhxEfLpGNNclOwu4pafHzfcRRAQ8CX8RHE.Yqvrxbi.2', '2023-01-27', '', '63d390d856fb90.64249246.jpg', 'user', '2023-01-27 08:52:40'),
(21, 'ahintuje', 'Daniel', 'daniel@gmail.com', '$2y$10$6nHrEuqyTOAa93ANeqsIre3XS2/mwukiV1yJJ/DHKgMyr39/Cu1wu', '2023-01-27', '', '63d39117771a42.92601779.jpg', 'user', '2023-01-27 08:53:43'),
(22, 'niyonzima', 'joji', 'niyobuhungiro@gmail.com', '$2y$10$M.Yawn10HoH3HKiZ6izytePOaGt9T2eDeKVq5sIzHd1MyadRkVIQO', '0020-02-03', '', '63dbd8dfb00684.95300818.jpg', 'user', '2023-02-02 15:38:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupchat`
--
ALTER TABLE `groupchat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `groupchat`
--
ALTER TABLE `groupchat`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
