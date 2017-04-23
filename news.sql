-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2017 at 09:44 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `news`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`id_admin` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `email`, `password`) VALUES
(5, 'putriaditya166@gmail.com', '4093fed663717c843bea100d17fb67c8');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
`id_ca` int(11) NOT NULL,
  `category` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id_ca`, `category`) VALUES
(7, 'Politik'),
(8, 'Olahraga'),
(9, 'Ekonomi');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `image` varchar(100) NOT NULL,
  `id_ca` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `id_ca`) VALUES
(29, 'Koeman Nilai Everton tak Pantas Menang Atas West Ham', 'REPUBLIKA.CO.ID, LONDON –– Everton gagal memberikan tekanan kepada tim-tim zona Liga Champions setelah hanya memperoleh hasil imbang tanpa gol saat bertandang ke markas West Ham United, Sabtu (22/4). Pelatih Everton Ronald Koeman mengatakan timnya memang tak pantas menang pada duel yang berlangsung di Stadion London.\r\n\r\nKoeman menilai penampilan timnya jauh dari kata baik, dan tak layak menggenggam angka. “Ada satu tim yang pantas mendapatkan kemenangan dan itu adalah West Ham, bukan Everton,” kata Koeman dikutip dari Sky Sports, Sabtu (23/4).', '14.JPG', 8),
(30, 'Jokowi Resmikan Perluasan Pabrik Sritex Rp 2,6 Triliun', 'REPUBLIKA.CO.ID,SOLO -- Presiden Joko Widodo (Jokowi) meresmikan perluasan pabrik PT Sri Rejeki Isman Tbk  (SRIL) sebagai salah satu upaya pengembangan kapasitas produksi dengan total nilai investasi sebesar Rp 2,6 triliun. \r\n\r\nDirektur Utama PT Sri Rejeki Isman Tbk  (Sritex)  Iwan Setiawan Lukminto mengharapkan investasi infrastruktur ini dapat memberikan dampak positif terhadap peningkatan industri padat karya di  sektor tekstil dan produk tekstil (TPT). \r\n"Penambahan luas fasilitas infrastruktur pabrik ini dirancang untuk dapat menyerap tenaga kerja baru hingga 3.500 karyawan yang berdampak secara signifikan pada penambahan kapasitas produksi perusahaan," katanya dalam rilis yang diterima Republika.co.id, Sabtu (22/4).', '3.JPG', 9),
(31, 'Zidane Pastikan Ronaldo Bugar untuk Laga El Clasico', 'REPUBLIKA.CO.ID, MADRID – Real Madrid akan menyambut Barcelona dalam laga lanjutan La Liga di Santiago Bernabeu, Senin (24/4) dini hari WIB. Menghadapi laga akbar ini, Los Blancos akan diperkuat skuat terbaiknya, termasuk Gareth Bale yang sudah pulih dari cedera dan Cristiano Ronaldo yang menjadi pahlawan lawan Bayern Muenchen di Liga Champions beberapa hari lalu.\r\n\r\nPelatih Madrid Zinedine Zidane mengonfirmasi kesiapan Ronaldo. Ia mengatakan, secara fisik dan mental Ronaldo siap untuk meladeni Lionel Messi dkk. Begitu pula para pemain lain, meskipun pada tengah pekan baru saja melakoni pertandingan hingga babak tambahan waktu.', '4.JPG', 8);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
 ADD PRIMARY KEY (`id_ca`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
MODIFY `id_ca` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
