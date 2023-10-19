-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 19, 2023 at 06:41 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int NOT NULL,
  `category_name` text COLLATE utf8mb4_general_ci NOT NULL,
  `category_description` text COLLATE utf8mb4_general_ci NOT NULL,
  `imagePath` text COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`, `imagePath`) VALUES
(1, 'BBREZZA', 'DJBCcOIQEINOQWJD\r\nSDQJHBIWEA\r\nDCNkDJNVOA\r\nDCNSJSNI\r\nDCKNJWN', 'a'),
(2, 'car2', 'dibciWEJCOW\r\ndfcawre\r\nwaF\r\nwef\r\nwdcc', 'b'),
(3, 'car3', 'reags\r\nga\r\ndsv\r\nddvs\r\ndvs', 'c');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

DROP TABLE IF EXISTS `data`;
CREATE TABLE IF NOT EXISTS `data` (
  `sno` int NOT NULL,
  `uname` text NOT NULL,
  `upass` varchar(2000) NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`sno`, `uname`, `upass`, `date`) VALUES
(29, 'arnavagarwal', '$2y$10$i4btyDKzgDkBXzdF./conOhhGkFJw90kezQMsL7vGAn4/AOOXEOfW', '2023-06-09 15:23:57'),
(0, 'rohan', '$2y$10$8vlox2k30nDyjrPMqZkjceRu0rqwuHPIELFyfdJvl4I1FhKR2Jabu', '2023-06-13 09:56:08'),
(0, 'ram', '$2y$10$Kirr1d/J14IF4A20uHqa5u4dpNYZolCNmiGuwb9qvZ0v65ZjpSfAe', '2023-06-13 09:57:18'),
(0, 'ria', '$2y$10$1MK9UVGTvZXgFwn7CcXxgONkOBKOAprqtIgG7mXwuRAgkTQ10iiNa', '2023-06-13 09:59:23'),
(0, 'mira', '$2y$10$atExd1rs9oBFffIHRqoPVOiECJhwWsjXuWQrnZRbdU0kMRH3HrZMu', '2023-06-13 10:00:05'),
(0, 'arun', '$2y$10$WveG476NdXX3nJTF0XEdq.yvGBiIUFgauzqWdJ4LxEwQCHELZIc76', '2023-06-13 10:00:46'),
(0, 'aa', '$2y$10$gRrqUZWGFoBN/QIngp0Zau787Q7Ex/jRNREaKWWX5m853GOh0O7AC', '2023-06-13 10:03:11'),
(0, 'aan', '$2y$10$P4tMyQh/TxckSqpp2WliKe0nMisa/6c4CDnIGSTxi.caN.4F32iZy', '2023-06-13 10:04:05'),
(0, 'aap', '$2y$10$z1ZrCDc18WLsapL92CIUSuN8EGBiXWq4953PhmcPx6ePXsbvi3J1a', '2023-06-13 10:35:54'),
(0, 'ab', '$2y$10$N6wSPwC/Rtwm3vSUOwItaOKzIe6PKSRveoSl22olSr7tCXArtX4mC', '2023-06-13 10:38:33'),
(0, 'arnav', '$2y$10$w640b7yhxt5VUI8Q.YIJg.29.06qzbCIJuckwcKYP1ma9ceKb5twS', '2023-07-28 22:43:28'),
(0, 'arnavvv', '$2y$10$ltlRJIj1xwdpT.awZIjIlOF/UxFHYpsO5dOW4nqwKDMLKz1dOtqny', '2023-08-10 23:35:28'),
(0, 'aniket', '$2y$10$xr/FmlyhPWXekumXvnkpyemac4MBB33kIQIZ.pXcZvtZpG0B5sD6q', '2023-08-11 00:37:19'),
(0, 'arn', '$2y$10$9uFnI2wnpPIcSPwSxz4M7OmBGAHgSQrhx.ibk1v9Kz5a7IZC7nMHW', '2023-08-11 00:47:19'),
(0, '', '$2y$10$YRC4toJYNX.I8ZiVEcmfRuS4K2EEnv/venMfu4XAMJifjNZnmHxWi', '2023-08-11 02:01:11'),
(0, 'arna', '$2y$10$r4/8ag4atm7EbGgRj1V87O6e0Q.tkgglfg81WzXgBdae4oYYLn.nC', '2023-08-11 16:00:58'),
(0, 'aar', '$2y$10$7sIbwS95sR/6J0Vy6KxMNefTZ/DBKmujoIGdQLLriJM4THXc2TzZO', '2023-08-11 16:12:07'),
(0, 'aarnav', '$2y$10$oUjp58uGl5Mj.uF5W8hHj.wnBD.XVNBMgYxZMhsIn9Zf/mw4BTeHm', '2023-08-11 17:17:45'),
(0, 'siddhant', '$2y$10$HJFnthVUwHQzrZUpOaAHN.i6NNEgWHN8AUvfR9cyrlLU7ezrR/vJu', '2023-09-13 22:22:00'),
(0, 'arnabb', '$2y$10$snM3Xo1fdLCsaa6/29sqgOuQuBQ4yNds9L8C3THG1iZABnbHgJYjy', '2023-10-19 11:19:48');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
