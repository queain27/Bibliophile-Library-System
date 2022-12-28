-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2021 at 05:08 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bibliophilelibrary`
--
CREATE DATABASE IF NOT EXISTS `bibliophilelibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `bibliophilelibrary`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` varchar(10) NOT NULL,
  `adminName` varchar(100) NOT NULL,
  `adminPass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminName`, `adminPass`) VALUES
('A11', 'Ahmad Kasim', 'Kasim123');

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `image` longblob NOT NULL,
  `author` varchar(100) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `publisher` varchar(100) NOT NULL,
  `published_date` date DEFAULT NULL,
  `category_id` int(11) NOT NULL,
  `adminID` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`id`, `name`, `image`, `author`, `isbn`, `publisher`, `published_date`, `category_id`, `adminID`) VALUES
(1, 'A Good Girl Guide To Murder', 0x412d476f6f642d4769726c2d47756964652d546f2d4d75726465722e6a7067, ' Holly Jackson', '9781984896360', 'Random House Penguin', '2020-02-04', 12, 'A11'),
(2, 'And Then There Were None', 0x416e642d5468656e2d54686572652d576572652d4e6f6e652e6a7067, ' Agatha Christie', '9780062073488', 'William Morrow', '2011-03-29', 11, 'A11'),
(3, 'A Study in Charlotte', 0x412d53747564792d696e2d436861726c6f7474652d62792d4272697474616e792d436176616c6c61726f2e6a7067, ' Brittany Cavallaro', '9780062398901', 'Katherine Tegen Books (US)', '2016-03-11', 12, 'A11'),
(10, 'Sherlock Holmes And The Disappearing Diamonds\r\n(Baker Street Academy #1)', 0x42616b65722d5374726565742d41636164656d792e6a7067, 'Sam Hearn', '9781338277685', 'Scholastic Press', '2018-03-27', 10, 'A11'),
(11, 'The Little House', 0x626f6f6b312e6a7067, 'Virginia Lee Burton', '0395181569', 'Houghton Mifflin Harcourt', '1942-01-01', 7, 'A11'),
(12, 'Good Night Moon', 0x626f6f6b322e6a7067, 'Margaret Wise Brown', '9780230764842', 'Harper', '2012-08-01', 7, 'A11'),
(13, 'Where\'s The Big Bad Wolf', 0x626f6f6b332e6a7067, 'Eileen Christelow', '9780618181940', 'Publisher Weekly', '2002-09-01', 7, 'A11'),
(14, 'The Box Turtle', 0x626f6f6b342e6a7067, 'Vanessa Roeder', '9780735230507', 'Penguin Random House ', '2020-02-11', 7, 'A11'),
(15, 'No More Nap', 0x626f6f6b352e6a7067, 'Chris Grabenstein', ' 9781524771287', 'Penguin Random House', '2020-02-04', 7, 'A11'),
(16, 'The Fault In Our Stars', 0x626f6f6b362e6a7067, 'John Green', '9780141355078', 'Penguin', '2012-01-10', 8, 'A11'),
(17, 'Me Before You', 0x626f6f6b372e6a7067, 'Jojo Moyes', '9780718157838', 'Penguin Books', '2012-01-05', 8, 'A11'),
(18, 'The Dead\'s Wife Handbook', 0x626f6f6b382e6a7067, 'Hannah Beckerman', '9780718178147', 'Penguin Books', '2014-02-13', 8, 'A11'),
(19, 'Black Box', 0x626f6f6b31312e6a7067, 'Cassia Leo', '9780552171120', 'Corgi Books', '2014-02-28', 9, 'A11'),
(20, 'Hate List', 0x626f6f6b31322e6a7067, 'Jennifer Brown', '9780316041447', 'Little, Brown and Company', '2009-09-01', 9, 'A11'),
(21, 'Can\'t Look Away', 0x626f6f6b31332e6a7067, 'Donna Cooner', '9780545791847', 'Scholastic Inc.', '2014-08-24', 9, 'A11'),
(22, 'It Felt Like A Kiss', 0x626f6f6b31342e6a7067, 'Sarra Manning', '9780593066492', 'CB Creative Books', '2013-02-01', 9, 'A11'),
(23, 'Don\'t Look Back', 0x626f6f6b31352e6a7067, 'Jennifer L. Armentrout', '9780545929035', 'Scholastic Inc.', '2015-10-01', 9, 'A11'),
(24, 'Capture The Flag', 0x436170747572652d5468652d466c61672e6a7067, 'Kate Messner', '9781627656320', 'Scholastic', '2013-12-10', 10, 'A11'),
(25, 'City Spies', 0x626f6f6b31362e6a7067, 'James Ponti', '9781534414914', 'Simon & Schuster', '2020-03-10', 10, 'A11'),
(26, 'Famous Last Words', 0x46616d6f75732d4c6173742d576f7264732e6a7067, 'Katie Alender', '9780545639972', 'Scholastic Inc.', '2014-09-30', 10, 'A11'),
(27, 'Flashes', 0x466c61736865732e6a7067, 'Tim O\'Rourke', '9780545829595', 'Chicken House', '2015-10-17', 10, 'A11'),
(28, 'Follow Me Down', 0x626f6f6b32302e6a7067, 'Tanya Brynne', '9780755393091', 'Headline Book Publishing; UK ed. edition', '2013-10-10', 12, 'A11'),
(29, 'Hide and Seek', 0x486964652d416e642d5365656b2e6a7067, 'Kate Messner', '9780545799102', 'Scholastic Inc', '2015-03-31', 10, 'A11'),
(30, 'Love,Water,Memory', 0x6c6f766577617465726d656d6f72792e6a7067, 'Jennie Shortridge', 'B008J2AFVU', 'Gallery Books', '2013-04-03', 8, 'A11'),
(31, 'One of Us is Lying', 0x6f6e656c79696e672e6a7067, 'Karen McMannus', '9781524714680', 'Delacorte Press', '2017-05-30', 11, 'A11'),
(32, 'Paper Towns', 0x50617065722d546f776e732e6a7067, 'John Green', '9780142414934', 'Penguin Books', '2009-09-22', 12, 'A11'),
(33, 'Pretty Girl 13', 0x7072657474792d6769726c2d31332e6a7067, 'Liz Coley', ' 9780062127396', 'Katherine Tegen Books', '2014-03-18', 12, 'A11'),
(34, 'Sharp Object', 0x53686172702d4f626a6563742e6a7067, 'Gillian Flynn', '9780307341556', 'Crown', '2007-07-11', 11, 'A11'),
(35, 'Star Gazing', 0x7374617267617a696e672e6a7067, 'Linda Gilliard', '9780749938970', 'Piatkus Books', '2008-12-10', 8, 'A11'),
(36, 'The Girl on Train', 0x5468652d4769726c2d4f6e2d747261696e2e6a7067, 'Paula Hawkins', '9781594634024', 'Riverhead Books', '2016-07-16', 11, 'A11'),
(37, 'The Guest List', 0x5468652d47756573742d4c6973742e6a7067, 'Lucy Foley', 'B07WG8L7WC', 'William Morrow ', '2020-06-02', 11, 'A11'),
(38, 'The Naturals', 0x5468652d4e61747572616c732e6a7067, 'Jennifer Lynn Barne', 'B00EDOBZRQ', 'Quercus Children\'s Books', '2013-11-07', 12, 'A11'),
(39, 'The Parker Inheritance', 0x5468652d5061726b65722d496e6865726974616e63652e6a7067, 'Varian Johnson ', ' 9780545952781', 'Scholastic Inc.', '2019-06-05', 10, 'A11'),
(40, 'The Woman In Cabin 10', 0x5468652d576f6d616e2d496e2d436162696e2d31302e6a7067, 'Ruth Ware', '9781501132957', 'Gallery/Scout Press', '2017-04-11', 11, 'A11'),
(41, 'We Were Liars', 0x77652d776572652d6c696172732e6a7067, 'e. lockhart ', '9780385741279', 'Ember', '2018-05-29', 9, 'A11'),
(42, 'Rukun Islam: Mari Kita Solat', 0x726566626f6f6b392e6a7067, 'Syerif Nurhakim, Al-Ghozi', '9789672196396', 'AZMAR PRIMA', '2020-01-01', 4, 'A11'),
(43, 'Rukun Islam: Mari Membayar Zakat ', 0x726566626f6f6b31302e6a7067, 'Syerif Nurhakim , Al-Ghozi', '9789672196389', 'AZMAR PRIMA', '2020-01-01', 4, 'A11'),
(44, 'Rukun Islam: Mari Kita Puasa', 0x726566626f6f6b382e6a7067, 'Syerif Nurhakim , Al-Ghozi', '9789672196365', 'AZMAR PRIMA', '2020-01-01', 4, 'A11'),
(45, 'Rukun Islam: Mari Melafazkan Syahadah', 0x726566626f6f6b372e6a7067, 'Syerif Nurhakim , Al-Ghozi', '9789672196358', 'AZMAR PRIMA', '2020-01-01', 4, 'A11'),
(46, 'Bacalah Anakku', 0x726566626f6f6b362e706e67, 'Nik Eliani Nik Nawi Othman Ahamad', '9789833901753', 'Onestop Language & Computer Consultancy', '2013-11-01', 4, 'A11'),
(47, 'Sila Baca Jangan Tidur', 0x726566626f6f6b31352e6a7067, 'Kamilin Jamilin', '9789678609241', 'Karya Bestari', '2019-12-01', 5, 'A11'),
(48, 'Ulama\' Hadis Makhluk Asing Dari Bumi', 0x726566626f6f6b31342e706e67, 'Kamilin Jamilin', '9789674811778', 'PTS', '2018-12-12', 5, 'A11'),
(49, 'C++ Programming In Easy Steps', 0x726566626f6f6b31332e6a7067, 'Mike Mcgrath', '9781840787573', 'N Easy Steps Limited', '2017-02-14', 5, 'A11'),
(50, 'Skilled Reading A Guide Approach', 0x726566626f6f6b31322e6a7067, 'Shangeetha R.K.', '9789673635664', 'Penerbit Press Uitm', '2017-03-04', 5, 'A11'),
(51, 'English For You', 0x726566626f6f6b31312e6a7067, 'Nahani Mansor', '9789834703684', 'Oxford Fajar Sdn Bhd', '2013-11-20', 5, 'A11'),
(52, 'Tuntas Komsas Tingkatan 3', 0x726566626f6f6b32302e6a7067, 'Saleh Ahmad', '9789835967245', 'Sasbadi Sdn Bhd', '2014-11-10', 6, 'A11'),
(53, 'Nota Berdiagram Matematik Spm', 0x726566626f6f6b31392e6a7067, 'Amir Fahmi Jaafar', '9789670527376', 'Penerbitan Inspirasi Sdn Bhd', '2015-08-07', 6, 'A11'),
(54, 'Longman Esensi Sejarah Spm', 0x726566626f6f6b31382e6a7067, 'Natasha Abdullah & Norzalina Abdullah', '9789674027223', 'Pearson Malaysia Sdn Bhd', '2013-10-10', 6, 'A11'),
(55, '[Topbooks Ilmu Bakti] Revisi Cepat Pt3 Geografi Kssm Tingkatan 1.2.3 (2020)', 0x726566626f6f6b31372e6a7067, 'Faizah Mat Aroff ', '9789674935214', 'Ilmu Bakti', '2020-10-19', 6, 'A11'),
(56, '[Topbooks Oxford Fajar] Success Biologi Spm', 0x726566626f6f6b31362e6a7067, 'Gan Wan Yeat ', '9789834722999', 'Oxford Fajar', '2019-12-18', 6, 'A11'),
(57, 'Cara Nabi Mendidik Anak Laki-Laki', 0x726566626f6f6b352e6a7067, 'Abu Abdurrahman Al-Faruq', '9786237490111', 'Prou Media', '2012-10-19', 5, 'A11'),
(58, 'Prophetic Parenting: Cara Nabi Mendidik Anak', 0x726566626f6f6b342e6a7067, 'Dr. Muhammad Nur Abdul Hafizh Suwaid', '9791273693', 'Pro-U Media', '2014-05-29', 5, 'A11'),
(59, '600 Modern Business Letters In English & Bahasa Malaysia( Bilingual Edition)', 0x726566626f6f6b35302e706e67, 'Yoong Kai Seng', '9789836803306', 'Minerva Publications', '2014-12-17', 5, 'A11'),
(60, 'Mission 5 Daily Solat Imran\'s Solat Diary', 0x726566626f6f6b322e706e67, 'Nazry Salam', '9789674813291', 'Pts', '2019-10-19', 4, 'A11'),
(61, 'Tafsir Mini Surah Al-Fatihah', 0x726566626f6b6b312e706e67, 'Ummu Ammar Amir, Abu Ammar Romlie', '9789673885176', 'Telaga Biru', '2018-12-10', 5, 'A11'),
(62, 'The Elephants In The Brain', 0x6e6f6e66696331342e6a7067, 'Robin Hanson And Kevin Simler', '9780190495992', 'Oxford University Press', '2018-05-09', 6, 'A11'),
(63, 'Where The Forest Meets The Starts', 0x6e6f6e666963312e332e6a7067, 'Glendy Vanderah', '9781542040068', 'Lake Union Publishing', '2019-03-01', 3, 'A11'),
(64, 'Love In The Time Of Global Warming', 0x6e6f6e666963312e322e6a7067, 'Francesca Lia Block', '9781250044426', 'Henry Holt And Co. (Byr)', '2013-08-27', 2, 'A11'),
(65, 'Real Friends', 0x6e6f6e666963312e312e6a7067, 'Shannon Hale', '9781626727854', 'First Second', '2017-05-01', 3, 'A11'),
(66, 'The Silence At Murder', 0x6e6f6e666963312e302e6a7067, 'Dandi Daley Mackall', '9780375868962', 'Knopf Doubleday Publishing Group', '2011-09-07', 3, 'A11'),
(67, 'BossyPants', 0x6e6f6e66696331352e6a7067, 'Tina Fey', '8601400317013', 'Reagan Arthur Books', '2011-04-05', 2, 'A11'),
(68, 'A Child Called \"It\"', 0x6e6f6e66696331342e6a7067, 'Dave Pelzer', '860140442283', 'Deerfield Beach, Florida ', '1995-09-08', 2, 'A11'),
(69, 'Hidden Figures', 0x6e6f6e66696331332e6a7067, 'Margot Lee Shetterly', '9780062363602', 'William Morrow And Company', '2016-09-06', 2, 'A11'),
(70, 'Eat, Pray, Love', 0x6e6f6e66696331322e6a7067, 'Elizabeth Gilbert', '9780670034710', 'Penguin', '2006-02-16', 2, 'A11'),
(71, 'Educated', 0x6e6f6e66696331312e6a7067, 'Tara Westover', '9781786330529', 'Random House', '2018-02-20', 2, 'A11'),
(72, 'The Movie Book Big Ideas Simply Explained', 0x6e6f6e66696331302e6a7067, 'Dk', '9781465437990', 'DK', '2016-01-05', 3, 'A11'),
(73, 'Honor Girl', 0x6e6f6e666963392e6a7067, 'Maggie Thrash', '9780763673826', 'Candlewick Press', '2015-09-08', 3, 'A11'),
(74, 'Do You Know Who You Are?', 0x6e6f6e666963382e6a7067, ' Megan Kaye', '1409348385', 'Dorling Kindersley Publishers Ltd', '2014-01-01', 3, 'A11'),
(75, 'The Truths We Hold', 0x6e6f6e666963372e6a7067, 'Kamala Harris', '9780525560739', 'Penguin Books', '2019-01-08', 3, 'A11'),
(76, 'The Far Away Brothers', 0x6e6f6e666963362e6a7067, 'Lauren Markham', '9781984829801', 'Ember', '2020-08-25', 3, 'A11'),
(77, 'Worst Of Friend', 0x6e6f6e666963332e6a7067, 'Suzanne Tripp Jurmain', '9780525479031', 'Dutton Books For Young Readers', '2011-12-08', 1, 'A11'),
(78, 'Humongous Fungus', 0x6e6f6e666963342e6a7067, 'Dk', '9780744033335', 'Dk Children', '2020-07-13', 1, 'A11'),
(79, 'Castles', 0x6e6f6e666963352e6a7067, 'Dk', '9781465498557', 'Dk Children', '2020-01-01', 1, 'A11'),
(80, 'Wow! I Didn\'t Know That - Surprising Facts About Animals', 0x6e6f6e666963322e6a7067, 'Kingfisher Publications, John Woodward, Marc Aspinall', '9780753471173', 'Kingfisher', '2013-09-24', 1, 'A11'),
(81, 'The Prophets Of Islam Activity Book: Prophet Muhammad Saw & The Crying Camel By Saadah Taib', 0x6e6f6e666963312e706e67, 'Saadah Taib', '9780860376347', 'Kube Publishing Ltd', '2019-08-16', 1, 'A11');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(11) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `type`) VALUES
(1, 'Children Non fiction'),
(2, 'Adult Non fiction'),
(3, 'Teen Non fiction'),
(4, 'Children Reference Book'),
(5, 'Adult Reference Book'),
(6, 'Teen Reference Book'),
(7, 'Child Fiction'),
(8, 'Adult Fiction'),
(9, 'Teen Fiction'),
(10, 'Children Mystery'),
(11, 'Adult Mystery'),
(12, 'Teen Mystery');

-- --------------------------------------------------------

--
-- Table structure for table `receipt`
--

CREATE TABLE `receipt` (
  `receiptid` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `borrowDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `userName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `receipt`
--

INSERT INTO `receipt` (`receiptid`, `name`, `borrowDate`, `userName`) VALUES
(81, 'Rukun Islam: Mari Kita Solat', '2021-01-21 07:22:58', 'Auni');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` varchar(10) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `dateCreated` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `userName`, `userPass`, `address`, `email`, `dateCreated`) VALUES
('918213', 'tgHanis', 'tgHanis1234_', 'Kota Bharu', 'hanis@yahoo.com', '2021-01-20 13:04:55'),
('fifi.arisy', 'Fifi', 'fifiarisya18', 'Pengkalan Chepa', 'fifi616@yahoo.com', '2021-01-22 08:37:43'),
('ydw.auni', 'Auni Yoon', 'auni891', 'Busan', 'dounauni98@gmail.com', '2021-01-20 16:25:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `adminID` (`adminID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`receiptid`),
  ADD UNIQUE KEY `name` (`name`),
  ADD KEY `userName` (`userName`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `receipt`
--
ALTER TABLE `receipt`
  MODIFY `receiptid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- Database: `lms`
--
CREATE DATABASE IF NOT EXISTS `lms` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `lms`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `BookId` varchar(5) NOT NULL,
  `BookTitle` varchar(100) NOT NULL,
  `BookAuthor` varchar(100) NOT NULL,
  `BookPublication` varchar(100) NOT NULL,
  `BookISBN` varchar(5) NOT NULL,
  `BookQuantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`BookId`, `BookTitle`, `BookAuthor`, `BookPublication`, `BookISBN`, `BookQuantity`) VALUES
('11111', 'Object Oriented Programming : JAVA', 'Yusuff', 'Comp Science', 'SC123', 6),
('22222', 'WEB PROGRAMMING PHP', 'Alia', 'Top Up', 'TP234', 2),
('23232', 'HTML', 'Athur', 'BMI', '23457', 5),
('34869', 'Python for Data Science', 'Ahmad', 'MalayPost', '23464', 5),
('78654', 'ASAS Multimedia', 'Milari', 'MILA Sdn Bhd', 'ML385', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bookborrow`
--

CREATE TABLE `bookborrow` (
  `BookBorrowID` int(11) NOT NULL,
  `idPelajar` varchar(10) NOT NULL,
  `BookId` varchar(5) NOT NULL,
  `BookBorrowDateBorrow` date NOT NULL,
  `BookBorrowDateDue` date NOT NULL,
  `BookBorrowStatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookborrow`
--

INSERT INTO `bookborrow` (`BookBorrowID`, `idPelajar`, `BookId`, `BookBorrowDateBorrow`, `BookBorrowDateDue`, `BookBorrowStatus`) VALUES
(1, '676767', '11111', '0000-00-00', '0000-00-00', 3),
(2, '676767', '11111', '2016-03-08', '0000-00-00', 3),
(3, '21334545', '22222', '2016-03-08', '2016-03-15', 1),
(4, '21334545', '22222', '2016-03-08', '2016-03-15', 1),
(5, '21334545', '22222', '2016-03-08', '2016-03-15', 3),
(6, '676767', '22222', '2016-08-14', '2016-08-30', 2),
(7, '676767', '11111', '2016-08-15', '2016-09-29', 1),
(8, '21334545', '11111', '2020-04-29', '2020-04-05', 1),
(9, '21334545', '11111', '2020-06-18', '2020-06-18', 3),
(10, '676767', '22222', '2021-01-10', '2021-01-20', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseCode` varchar(5) NOT NULL,
  `courseName` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseCode`, `courseName`) VALUES
('CS110', 'DIPLOMA IN COMPUTER SCIENCE'),
('CS111', 'DIPLOMA IN STATISTIC'),
('CS143', 'DIPLOMA IN MATHEMATICS');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staffID` varchar(6) NOT NULL,
  `staffName` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staffID`, `staffName`, `password`, `level`) VALUES
('267897', 'Mohd Zaki Abdullah', '123456', 1),
('345678', 'Salmah Hamid', '234567', 2);

-- --------------------------------------------------------

--
-- Table structure for table `statusborrow`
--

CREATE TABLE `statusborrow` (
  `BookBorrowStatus` int(11) NOT NULL,
  `StatusDetail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `statusborrow`
--

INSERT INTO `statusborrow` (`BookBorrowStatus`, `StatusDetail`) VALUES
(1, 'Borrowing'),
(2, 'Clear'),
(3, 'Late');

-- --------------------------------------------------------

--
-- Table structure for table `stdntinfo`
--

CREATE TABLE `stdntinfo` (
  `idPelajar` varchar(10) NOT NULL,
  `namePelajar` varchar(100) NOT NULL,
  `coursePelajar` varchar(6) NOT NULL,
  `cgpaPelajar` varchar(4) NOT NULL,
  `phonePelajar` varchar(15) NOT NULL,
  `dobPelajar` date NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stdntinfo`
--

INSERT INTO `stdntinfo` (`idPelajar`, `namePelajar`, `coursePelajar`, `cgpaPelajar`, `phonePelajar`, `dobPelajar`, `password`) VALUES
('2000134567', 'Ahmad Syukri Bin Yahya', 'CS110', '3.67', '0132456789', '2000-03-09', '222333'),
('21334545', 'Haniff Muhammad Ali', 'CS111', '2.79', '0149864578', '1996-02-08', 'aaaaaa'),
('676767', 'Salman Ahmad', 'CS143', '2.00', '0132456546', '1996-09-09', 'bbbbbb'),
('906949202', 'Mohd Zaki', 'CS111', '3.33', '0134656567', '2000-02-15', '1111111'),
('9090909090', 'Siti Zarina', 'CS143', '3.44', '0199876543', '2016-08-23', '121212');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`BookId`);

--
-- Indexes for table `bookborrow`
--
ALTER TABLE `bookborrow`
  ADD PRIMARY KEY (`BookBorrowID`),
  ADD KEY `BookId` (`BookId`),
  ADD KEY `idPelajar` (`idPelajar`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseCode`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staffID`);

--
-- Indexes for table `stdntinfo`
--
ALTER TABLE `stdntinfo`
  ADD PRIMARY KEY (`idPelajar`),
  ADD KEY `coursePelajar` (`coursePelajar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookborrow`
--
ALTER TABLE `bookborrow`
  MODIFY `BookBorrowID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookborrow`
--
ALTER TABLE `bookborrow`
  ADD CONSTRAINT `bookborrow_ibfk_1` FOREIGN KEY (`BookId`) REFERENCES `book` (`BookId`),
  ADD CONSTRAINT `bookborrow_ibfk_2` FOREIGN KEY (`idPelajar`) REFERENCES `stdntinfo` (`idPelajar`);

--
-- Constraints for table `stdntinfo`
--
ALTER TABLE `stdntinfo`
  ADD CONSTRAINT `stdntinfo_ibfk_1` FOREIGN KEY (`coursePelajar`) REFERENCES `course` (`courseCode`);
--
-- Database: `phpmyadmin`
--
CREATE DATABASE IF NOT EXISTS `phpmyadmin` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `phpmyadmin`;

-- --------------------------------------------------------

--
-- Table structure for table `pma__bookmark`
--

CREATE TABLE `pma__bookmark` (
  `id` int(10) UNSIGNED NOT NULL,
  `dbase` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `label` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `query` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Bookmarks';

-- --------------------------------------------------------

--
-- Table structure for table `pma__central_columns`
--

CREATE TABLE `pma__central_columns` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_length` text COLLATE utf8_bin DEFAULT NULL,
  `col_collation` varchar(64) COLLATE utf8_bin NOT NULL,
  `col_isNull` tinyint(1) NOT NULL,
  `col_extra` varchar(255) COLLATE utf8_bin DEFAULT '',
  `col_default` text COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Central list of columns';

-- --------------------------------------------------------

--
-- Table structure for table `pma__column_info`
--

CREATE TABLE `pma__column_info` (
  `id` int(5) UNSIGNED NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `column_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `mimetype` varchar(255) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `input_transformation_options` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Column information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__designer_settings`
--

CREATE TABLE `pma__designer_settings` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `settings_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Settings related to Designer';

-- --------------------------------------------------------

--
-- Table structure for table `pma__export_templates`
--

CREATE TABLE `pma__export_templates` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `export_type` varchar(10) COLLATE utf8_bin NOT NULL,
  `template_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `template_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved export templates';

--
-- Dumping data for table `pma__export_templates`
--

INSERT INTO `pma__export_templates` (`id`, `username`, `export_type`, `template_name`, `template_data`) VALUES
(1, 'root', 'server', 'bibliophilelibrary', '{\"quick_or_custom\":\"quick\",\"what\":\"sql\",\"db_select[]\":[\"bibliophilelibrary\",\"lms\",\"phpmyadmin\",\"test\"],\"aliases_new\":\"\",\"output_format\":\"sendit\",\"filename_template\":\"@SERVER@\",\"remember_template\":\"on\",\"charset\":\"utf-8\",\"compression\":\"none\",\"maxsize\":\"\",\"codegen_structure_or_data\":\"data\",\"codegen_format\":\"0\",\"csv_separator\":\",\",\"csv_enclosed\":\"\\\"\",\"csv_escaped\":\"\\\"\",\"csv_terminated\":\"AUTO\",\"csv_null\":\"NULL\",\"csv_structure_or_data\":\"data\",\"excel_null\":\"NULL\",\"excel_columns\":\"something\",\"excel_edition\":\"win\",\"excel_structure_or_data\":\"data\",\"json_structure_or_data\":\"data\",\"json_unicode\":\"something\",\"latex_caption\":\"something\",\"latex_structure_or_data\":\"structure_and_data\",\"latex_structure_caption\":\"Structure of table @TABLE@\",\"latex_structure_continued_caption\":\"Structure of table @TABLE@ (continued)\",\"latex_structure_label\":\"tab:@TABLE@-structure\",\"latex_relation\":\"something\",\"latex_comments\":\"something\",\"latex_mime\":\"something\",\"latex_columns\":\"something\",\"latex_data_caption\":\"Content of table @TABLE@\",\"latex_data_continued_caption\":\"Content of table @TABLE@ (continued)\",\"latex_data_label\":\"tab:@TABLE@-data\",\"latex_null\":\"\\\\textit{NULL}\",\"mediawiki_structure_or_data\":\"data\",\"mediawiki_caption\":\"something\",\"mediawiki_headers\":\"something\",\"htmlword_structure_or_data\":\"structure_and_data\",\"htmlword_null\":\"NULL\",\"ods_null\":\"NULL\",\"ods_structure_or_data\":\"data\",\"odt_structure_or_data\":\"structure_and_data\",\"odt_relation\":\"something\",\"odt_comments\":\"something\",\"odt_mime\":\"something\",\"odt_columns\":\"something\",\"odt_null\":\"NULL\",\"pdf_report_title\":\"\",\"pdf_structure_or_data\":\"data\",\"phparray_structure_or_data\":\"data\",\"sql_include_comments\":\"something\",\"sql_header_comment\":\"\",\"sql_use_transaction\":\"something\",\"sql_compatibility\":\"NONE\",\"sql_structure_or_data\":\"structure_and_data\",\"sql_create_table\":\"something\",\"sql_auto_increment\":\"something\",\"sql_create_view\":\"something\",\"sql_create_trigger\":\"something\",\"sql_backquotes\":\"something\",\"sql_type\":\"INSERT\",\"sql_insert_syntax\":\"both\",\"sql_max_query_size\":\"50000\",\"sql_hex_for_binary\":\"something\",\"sql_utc_time\":\"something\",\"texytext_structure_or_data\":\"structure_and_data\",\"texytext_null\":\"NULL\",\"yaml_structure_or_data\":\"data\",\"\":null,\"as_separate_files\":null,\"csv_removeCRLF\":null,\"csv_columns\":null,\"excel_removeCRLF\":null,\"json_pretty_print\":null,\"htmlword_columns\":null,\"ods_columns\":null,\"sql_dates\":null,\"sql_relation\":null,\"sql_mime\":null,\"sql_disable_fk\":null,\"sql_views_as_tables\":null,\"sql_metadata\":null,\"sql_drop_database\":null,\"sql_drop_table\":null,\"sql_if_not_exists\":null,\"sql_view_current_user\":null,\"sql_or_replace_view\":null,\"sql_procedure_function\":null,\"sql_truncate\":null,\"sql_delayed\":null,\"sql_ignore\":null,\"texytext_columns\":null}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__favorite`
--

CREATE TABLE `pma__favorite` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Favorite tables';

-- --------------------------------------------------------

--
-- Table structure for table `pma__history`
--

CREATE TABLE `pma__history` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp(),
  `sqlquery` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='SQL history for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__navigationhiding`
--

CREATE TABLE `pma__navigationhiding` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `item_type` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Hidden items of navigation tree';

-- --------------------------------------------------------

--
-- Table structure for table `pma__pdf_pages`
--

CREATE TABLE `pma__pdf_pages` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `page_nr` int(10) UNSIGNED NOT NULL,
  `page_descr` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='PDF relation pages for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__recent`
--

CREATE TABLE `pma__recent` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `tables` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Recently accessed tables';

--
-- Dumping data for table `pma__recent`
--

INSERT INTO `pma__recent` (`username`, `tables`) VALUES
('root', '[{\"db\":\"bibliophilelibrary\",\"table\":\"book\"},{\"db\":\"bibliophilelibrary\",\"table\":\"user\"},{\"db\":\"lms\",\"table\":\"stdntinfo\"},{\"db\":\"bibliophilelibrary\",\"table\":\"receipt\"},{\"db\":\"bibliophilelibrary\",\"table\":\"admin\"},{\"db\":\"lms\",\"table\":\"staff\"},{\"db\":\"bibliophilelibrary\",\"table\":\"returns\"}]');

-- --------------------------------------------------------

--
-- Table structure for table `pma__relation`
--

CREATE TABLE `pma__relation` (
  `master_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `master_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_db` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_table` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `foreign_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Relation table';

-- --------------------------------------------------------

--
-- Table structure for table `pma__savedsearches`
--

CREATE TABLE `pma__savedsearches` (
  `id` int(5) UNSIGNED NOT NULL,
  `username` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Saved searches';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_coords`
--

CREATE TABLE `pma__table_coords` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pdf_page_number` int(11) NOT NULL DEFAULT 0,
  `x` float UNSIGNED NOT NULL DEFAULT 0,
  `y` float UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table coordinates for phpMyAdmin PDF output';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_info`
--

CREATE TABLE `pma__table_info` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_field` varchar(64) COLLATE utf8_bin NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Table information for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__table_uiprefs`
--

CREATE TABLE `pma__table_uiprefs` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `prefs` text COLLATE utf8_bin NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Tables'' UI preferences';

-- --------------------------------------------------------

--
-- Table structure for table `pma__tracking`
--

CREATE TABLE `pma__tracking` (
  `db_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `table_name` varchar(64) COLLATE utf8_bin NOT NULL,
  `version` int(10) UNSIGNED NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `schema_snapshot` text COLLATE utf8_bin NOT NULL,
  `schema_sql` text COLLATE utf8_bin DEFAULT NULL,
  `data_sql` longtext COLLATE utf8_bin DEFAULT NULL,
  `tracking` set('UPDATE','REPLACE','INSERT','DELETE','TRUNCATE','CREATE DATABASE','ALTER DATABASE','DROP DATABASE','CREATE TABLE','ALTER TABLE','RENAME TABLE','DROP TABLE','CREATE INDEX','DROP INDEX','CREATE VIEW','ALTER VIEW','DROP VIEW') COLLATE utf8_bin DEFAULT NULL,
  `tracking_active` int(1) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Database changes tracking for phpMyAdmin';

-- --------------------------------------------------------

--
-- Table structure for table `pma__userconfig`
--

CREATE TABLE `pma__userconfig` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `timevalue` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `config_data` text COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User preferences storage for phpMyAdmin';

--
-- Dumping data for table `pma__userconfig`
--

INSERT INTO `pma__userconfig` (`username`, `timevalue`, `config_data`) VALUES
('root', '2021-01-23 04:02:23', '{\"Console\\/Mode\":\"collapse\"}');

-- --------------------------------------------------------

--
-- Table structure for table `pma__usergroups`
--

CREATE TABLE `pma__usergroups` (
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL,
  `tab` varchar(64) COLLATE utf8_bin NOT NULL,
  `allowed` enum('Y','N') COLLATE utf8_bin NOT NULL DEFAULT 'N'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='User groups with configured menu items';

-- --------------------------------------------------------

--
-- Table structure for table `pma__users`
--

CREATE TABLE `pma__users` (
  `username` varchar(64) COLLATE utf8_bin NOT NULL,
  `usergroup` varchar(64) COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin COMMENT='Users and their assignments to user groups';

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pma__central_columns`
--
ALTER TABLE `pma__central_columns`
  ADD PRIMARY KEY (`db_name`,`col_name`);

--
-- Indexes for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `db_name` (`db_name`,`table_name`,`column_name`);

--
-- Indexes for table `pma__designer_settings`
--
ALTER TABLE `pma__designer_settings`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_user_type_template` (`username`,`export_type`,`template_name`);

--
-- Indexes for table `pma__favorite`
--
ALTER TABLE `pma__favorite`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__history`
--
ALTER TABLE `pma__history`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`,`db`,`table`,`timevalue`);

--
-- Indexes for table `pma__navigationhiding`
--
ALTER TABLE `pma__navigationhiding`
  ADD PRIMARY KEY (`username`,`item_name`,`item_type`,`db_name`,`table_name`);

--
-- Indexes for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  ADD PRIMARY KEY (`page_nr`),
  ADD KEY `db_name` (`db_name`);

--
-- Indexes for table `pma__recent`
--
ALTER TABLE `pma__recent`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__relation`
--
ALTER TABLE `pma__relation`
  ADD PRIMARY KEY (`master_db`,`master_table`,`master_field`),
  ADD KEY `foreign_field` (`foreign_db`,`foreign_table`);

--
-- Indexes for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `u_savedsearches_username_dbname` (`username`,`db_name`,`search_name`);

--
-- Indexes for table `pma__table_coords`
--
ALTER TABLE `pma__table_coords`
  ADD PRIMARY KEY (`db_name`,`table_name`,`pdf_page_number`);

--
-- Indexes for table `pma__table_info`
--
ALTER TABLE `pma__table_info`
  ADD PRIMARY KEY (`db_name`,`table_name`);

--
-- Indexes for table `pma__table_uiprefs`
--
ALTER TABLE `pma__table_uiprefs`
  ADD PRIMARY KEY (`username`,`db_name`,`table_name`);

--
-- Indexes for table `pma__tracking`
--
ALTER TABLE `pma__tracking`
  ADD PRIMARY KEY (`db_name`,`table_name`,`version`);

--
-- Indexes for table `pma__userconfig`
--
ALTER TABLE `pma__userconfig`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `pma__usergroups`
--
ALTER TABLE `pma__usergroups`
  ADD PRIMARY KEY (`usergroup`,`tab`,`allowed`);

--
-- Indexes for table `pma__users`
--
ALTER TABLE `pma__users`
  ADD PRIMARY KEY (`username`,`usergroup`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pma__bookmark`
--
ALTER TABLE `pma__bookmark`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__column_info`
--
ALTER TABLE `pma__column_info`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__export_templates`
--
ALTER TABLE `pma__export_templates`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pma__history`
--
ALTER TABLE `pma__history`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__pdf_pages`
--
ALTER TABLE `pma__pdf_pages`
  MODIFY `page_nr` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pma__savedsearches`
--
ALTER TABLE `pma__savedsearches`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Database: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
