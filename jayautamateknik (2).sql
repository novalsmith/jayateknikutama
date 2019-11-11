-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2019 at 01:12 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jayautamateknik`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(1) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `keterangan`) VALUES
(1, '<p>about page</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `idartikel` int(10) UNSIGNED NOT NULL,
  `idmenu` int(10) NOT NULL,
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `modif_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`idartikel`, `idmenu`, `tags`, `title`, `slug`, `body`, `image`, `status`, `create_date`, `modif_date`) VALUES
(82, 1, 'GG,GGG,CI,PHP', 'Codeigniter', 'codeigniter', '<p>gggggggggggg</p>\n', 'haditerpal_04Nov19_00_05_05.jpg', 1, '2019-11-04 13:05:58', NULL),
(83, 2, 'CC,CXX,CCC', 'OOP PHP7', 'oop_php7', '<p>php 7</p>\n', 'haditerpal_04Nov19_00_19_43.jpg', 1, '2019-11-04 13:01:43', NULL),
(84, 2, 'G,GGG,GG', 'Rest Api', 'rest_api', '<p>ggggggggggggggg</p>\n', 'haditerpal_04Nov19_00_20_37.jpg', 1, '2019-11-04 00:20:37', NULL),
(85, 1, 'TEST', 'Codeigniter', 'codeigniter', '<p>isi artikel codeigniter</p>\n', 'haditerpal_04Nov19_13_01_12.jpg', 1, '2019-11-04 13:01:12', NULL),
(86, 9, 'NODEJS,EXPRESS JS', 'Api Rest Node Js', 'api_rest_node_js', '<p>node js n express to make API restful</p>\n', 'haditerpal_10Nov19_01_59_46.jpg', 1, '2019-11-10 10:34:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `idbrand` int(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `filebrand` varchar(100) NOT NULL,
  `createdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`idbrand`, `judul`, `filebrand`, `createdate`) VALUES
(12, 'Maspion', 'jtu_10Nov19_11_07_37.png', '2010-11-19 00:00:00'),
(13, 'Multipro', 'jtu_10Nov19_11_07_22.png', '2010-11-19 00:00:00'),
(14, 'Panasonic', 'jtu_10Nov19_11_07_49.png', '2010-11-19 00:00:00'),
(15, 'Sanyo', 'jtu_10Nov19_11_07_59.png', '2010-11-19 00:00:00'),
(16, 'Terada', 'jtu_10Nov19_11_08_11.jpg', '2010-11-19 00:00:00'),
(17, 'Uchida', 'jtu_10Nov19_11_08_22.png', '2010-11-19 00:00:00'),
(18, 'Zhimitzu', 'jtu_10Nov19_11_08_41.png', '2010-11-19 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(1) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `keterangan`) VALUES
(1, '<p>yes its contact page</p>\n');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `idfaq` int(1) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `createdate` datetime NOT NULL,
  `modifdate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`idfaq`, `judul`, `keterangan`, `createdate`, `modifdate`) VALUES
(1, 'Bagaimana Cara ngeprint online', 'Bagaimana Cara ngeprint online Bagaimana Cara ngeprint online Bagaimana Cara ngeprint online Bagaimana Cara ngeprint online', '2019-10-18 00:00:00', '0000-00-00 00:00:00'),
(3, 'fasilitas apa saja yang ada ?', '<p>kami memiliki fasilitas printer terbaik, dengan kualitas cetak mantab yoo</p>\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'Harga berapa untuk cetak ?', '<p>Berikut ini daftar harga</p>\n\n<table align=\"center\" border=\"0\" cellpadding=\"1\" cellspacing=\"1\" style=\"width:100%\">\n	<caption>Daftar Harga</caption>\n	<tbody>\n		<tr>\n			<td>Nama</td>\n			<td>Harga</td>\n			<td>Item</td>\n		</tr>\n		<tr>\n			<td>A4</td>\n			<td>Rp.500</td>\n			<td>Hitam Putih</td>\n		</tr>\n		<tr>\n			<td>A4</td>\n			<td>Rp.1000</td>\n			<td>Color</td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Framework PHP', '<p>Berikut ini adalah daftar Framework PHP</p>\n\n<p><img alt=\"\" src=\"https://dab1nmslvvntp.cloudfront.net/wp-content/uploads/2013/12/chart1-1024x853.png\" style=\"float:left; height:417px; width:500px\" />&nbsp; &nbsp;<img alt=\"\" src=\"https://cdn-images-1.medium.com/max/783/1*rswvkT67SYivx7LNhN0hyw.jpeg\" style=\"height:336px; width:783px\" /></p>\n', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `idgalery` int(11) NOT NULL,
  `idmenu` int(10) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judulfoto` varchar(200) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `modif_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`idgalery`, `idmenu`, `foto`, `judulfoto`, `create_date`, `modif_date`) VALUES
(2, 1, 'jayatknikutama_06Nov19143014.jpg', 'new series version phyton', '2019-11-06 14:30:14', NULL),
(4, 2, 'jayatknikutama_06Nov19143611.jpg', 'test testing', '2019-11-06 14:36:11', NULL),
(5, 2, 'jayatknikutama_06Nov19144439.jpg', 'rtrtrtrtr', '2019-11-06 14:44:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(10) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL,
  `status` int(1) NOT NULL,
  `hargaBW` int(30) NOT NULL,
  `hargaColor` int(30) NOT NULL,
  `hargajilid` int(30) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `modif_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `nama_kategori`, `status`, `hargaBW`, `hargaColor`, `hargajilid`, `create_date`, `modif_date`) VALUES
(26, 'Mesin Bor', 1, 200, 450, 9000, '2019-08-15 11:33:48', '2019-11-02 13:23:52'),
(27, 'Mesin Sedot', 1, 300, 500, 10000, '2019-06-03 06:24:04', '2019-11-02 13:23:32'),
(35, 'Mesin Pompa', 1, 7000, 7000, 7000, '2019-10-15 08:49:18', '2019-11-02 13:23:14'),
(40, 'Mesin Uap', 0, 3000, 9000, 20000, '2019-10-17 15:15:51', '2019-11-02 13:24:18');

-- --------------------------------------------------------

--
-- Table structure for table `kategorimenu`
--

CREATE TABLE `kategorimenu` (
  `idmenu` int(5) NOT NULL,
  `parentid` int(5) NOT NULL,
  `menu` varchar(50) NOT NULL,
  `slugmenu` varchar(100) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategorimenu`
--

INSERT INTO `kategorimenu` (`idmenu`, `parentid`, `menu`, `slugmenu`, `status`) VALUES
(1, 0, 'Framework', 'framework', 1),
(2, 1, 'PHP', 'php', 1),
(3, 1, 'JAVA', 'java', 1),
(4, 2, 'Codeigniter', 'codeigniter', 1),
(5, 3, 'Spring Bot', 'spring-bot', 1),
(6, 0, 'Framework JS', 'framework-js', 1),
(7, 6, 'Angular', 'angular', 1),
(8, 6, 'React Js', 'react-js', 1),
(9, 6, 'Node & Express Js', 'node-express-js', 1),
(10, 0, 'Mobile', 'mobile', 1),
(11, 10, 'Android', 'android', 1),
(12, 10, 'Kotlin', 'kotlin', 1),
(13, 10, 'Native Script', 'native-script', 1),
(14, 10, 'React Native', 'react-native', 1),
(15, 10, 'Ionic', 'ionic', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `idorder` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `modif_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`idorder`, `name`, `phone`, `email`, `message`, `status`, `create_date`, `modif_date`) VALUES
(1, 'coba', '123456', 'cobain@gmail.com', 'percobaan', 'B', '2016-09-30 04:07:12', '2016-09-30 04:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idpesanan` varchar(10) NOT NULL,
  `idpesananduplicate` varchar(100) NOT NULL,
  `idorder` int(10) NOT NULL,
  `dateorder` datetime NOT NULL,
  `datefinish` datetime NOT NULL,
  `status` int(1) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `bworcolor` int(1) NOT NULL,
  `datafilecetak` int(1) NOT NULL,
  `total` int(20) NOT NULL,
  `keterangan` text NOT NULL,
  `fileprint` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idpesanan`, `idpesananduplicate`, `idorder`, `dateorder`, `datefinish`, `status`, `idkategori`, `qty`, `bworcolor`, `datafilecetak`, `total`, `keterangan`, `fileprint`) VALUES
('3634553', '3634553', 1, '2019-10-19 00:00:00', '2019-10-19 09:00:00', 0, 26, 2, 1, 1, 65775, 'dfgdfgb', ''),
('3634554', '3634553', 1, '2019-10-19 00:00:00', '2019-10-19 17:00:00', 0, 26, 3, 2, 1, 3, 'ambil jam 17 ya.. \r\npaling lambat jam 18 lah..\r\n', 'skripsifix.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idmenu` int(10) NOT NULL,
  `idbrand` int(10) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `slideshow` int(1) NOT NULL,
  `status` int(1) NOT NULL,
  `tags` text COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `modif_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `slug`, `idmenu`, `idbrand`, `description`, `image`, `slideshow`, `status`, `tags`, `create_date`, `modif_date`) VALUES
(31, 'Enterprise Aplication with Java', 'enterprise_aplication_with_java', 3, 15, '<p>About About yes Update yui</p>\n', 'haditerpal_02Nov19_13_35_33.jpg', 0, 1, 'SPRING,JSP,SERVLET,SPRING,JSP,SERVLET', '2019-11-02 13:35:33', '0000-00-00 00:00:00'),
(32, 'mesin pompa', 'mesin_pompa', 4, 14, '<p>yes coba ya</p>\n', 'haditerpal_08Nov19_22_46_08.jpg', 1, 1, 'CODEIGNITER,PHP', '2019-11-02 17:02:02', '0000-00-00 00:00:00'),
(36, 'mesin pompa kualitas terbaik', 'mesin_pompa_kualitas_terbaik', 4, 14, '<p>isi artikel</p>\n', 'jayateknikutama_06Nov19_17_25_59.jpg', 1, 1, 'MESIN POMPA,MESIN BAGUS', '2019-11-06 17:26:00', NULL),
(37, 'GIS tracking Pekerjaan Freelancer', 'gis_tracking_pekerjaan_freelancer', 10, 13, '<p>ini adalah Apilkasi GPIS dengan Android</p>\n', 'haditerpal_10Nov19_09_44_12.jpg', 0, 1, 'ANGULAR,REACT,GPS,ANDROID,GMAP,PRODUK 1,PRODUK 2,ANGULAR,REACT,PRODUK', '2019-11-10 03:58:56', '0000-00-00 00:00:00'),
(38, 'Angular Vs React Js', 'angular_vs_react_js', 8, 13, '<p>angular vs reacj js</p>\n', 'haditerpal_10Nov19_09_43_43.jpg', 0, 1, 'ANGULAR,REACT,GPS,ANDROID,GMAP,PRODUK 1,PRODUK 2,ANGULAR,REACT', '2019-11-10 09:33:02', '0000-00-00 00:00:00'),
(39, 'Produk 1', 'produk_1', 11, 12, '<p>produk 1</p>\n', 'haditerpal_10Nov19_09_38_00.jpg', 0, 1, 'ANGULAR,REACT,GPS,ANDROID,GMAP,PRODUK 1', '2019-11-10 09:38:00', NULL),
(40, 'Produk 2', 'produk_2', 1, 12, '<p>produk 2</p>\n', 'haditerpal_10Nov19_09_38_36.jpg', 0, 0, 'ANGULAR,REACT,GPS,ANDROID,GMAP,PRODUK 1,PRODUK 2', '2019-11-10 09:38:36', '0000-00-00 00:00:00'),
(41, 'Mesin Pompa Air Terkuat', 'mesin_pompa_air_terkuat', 12, 15, '<p>sanyo</p>\n', 'haditerpal_10Nov19_12_39_27.jpg', 0, 1, 'KINCIL,UCHIDA,ANGULAR,REACT,GPS,ANDROID,GMAP,PRODUK 1,PRODUK 2,SANYO,MESIN UAP,PANASONIK', '2019-11-10 12:13:10', '0000-00-00 00:00:00'),
(42, 'Mesin Uap', 'mesin_uap', 1, 14, '<p>Keterangan detil mesin uap</p>\n', 'haditerpal_10Nov19_12_39_16.jpg', 0, 1, 'KINCIL,UCHIDA,ANGULAR,REACT,GPS,ANDROID,GMAP,PRODUK 1,PRODUK 2,SANYO,MESIN UAP,PANASONIK', '2019-11-10 12:21:43', '0000-00-00 00:00:00'),
(43, 'Mesin Penyaring Air', 'mesin_penyaring_air', 7, 17, '<p>isi</p>\n', 'haditerpal_10Nov19_12_39_06.jpg', 0, 1, 'KINCIL,UCHIDA', '2019-11-10 12:25:57', '0000-00-00 00:00:00'),
(44, 'Mesin Kincir', 'mesin_kincir', 3, 16, '<p>terada</p>\n', 'haditerpal_10Nov19_12_38_57.jpg', 0, 1, 'KINCIL', '2019-11-10 12:31:49', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `idtag` int(10) UNSIGNED NOT NULL,
  `namaTag` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `modif_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`idtag`, `namaTag`, `status`, `create_date`, `modif_date`) VALUES
(1, 'kolam', 0, '2016-10-02 21:31:58', '2016-10-02 21:31:58'),
(2, 'kolam bulat', 0, '2016-10-03 00:53:33', '2016-10-03 00:54:49'),
(3, 'HARGA KOLAM TERPAL BUNDAR DAN ', 0, '2016-10-03 00:53:48', '2018-03-06 02:37:29'),
(4, 'kolam bulat dan rangka', 0, '2016-10-03 00:54:03', '2016-10-03 00:54:03'),
(5, 'kolam terpal', 0, '2016-10-03 00:54:24', '2016-10-03 00:54:24'),
(6, 'kolam bulat karet', 0, '2016-10-03 00:55:15', '2016-10-03 00:55:15'),
(7, 'kolam terpal bulat', 0, '2016-10-03 00:55:45', '2016-10-03 00:55:45'),
(8, 'kolam terpal kotak', 0, '2016-10-03 00:56:01', '2016-10-03 00:56:01'),
(9, 'kolam kotak karet', 0, '2016-10-03 00:56:25', '2016-10-03 00:56:25'),
(10, 'harga kolam kotak karet', 0, '2016-10-03 00:56:39', '2016-10-03 00:56:39'),
(11, 'terpal', 0, '2016-10-03 00:56:57', '2016-10-03 00:56:57'),
(12, 'terpal lembaran', 0, '2016-10-03 00:57:34', '2016-10-03 00:57:34'),
(13, 'harga terpal', 0, '2016-10-03 00:57:49', '2016-10-03 00:57:49'),
(14, 'jual kolam terpal', 0, '2016-10-03 00:58:11', '2016-10-03 00:58:11'),
(15, 'kolam terpal murah', 0, '2016-10-03 00:58:52', '2016-10-03 00:58:52'),
(16, 'harga terpal permeter', 0, '2016-10-03 00:59:38', '2016-10-03 00:59:38'),
(17, 'kolam bulat baleho', 0, '2016-10-03 01:00:15', '2016-10-03 01:00:15'),
(18, 'penjual kolam terpal', 0, '2016-10-03 01:01:50', '2016-10-03 01:01:50'),
(19, 'terpaulin orchid', 0, '2016-10-03 01:02:35', '2016-10-03 01:02:35'),
(20, 'drainase', 0, '2016-10-03 01:03:16', '2016-10-03 01:03:16'),
(21, 'kolam terpal baleho dan rangka', 0, '2016-10-29 01:52:33', '2016-10-29 01:52:33'),
(22, 'kolam bulat baleho dan rangka', 0, '2016-10-29 01:54:26', '2016-10-29 01:54:26'),
(23, 'Kolam kotak baleho', 0, '2016-10-31 02:30:33', '2016-10-31 02:30:33'),
(24, 'Terpal plastik kotak ', 0, '2016-10-31 02:34:56', '2016-10-31 02:34:56'),
(25, 'Kolam terpal karet komplit', 0, '2016-10-31 03:26:43', '2016-10-31 03:26:43'),
(26, 'cara membuat drainase', 0, '2017-02-12 14:27:13', '2017-02-12 14:27:13'),
(27, 'cara membuat pembuangan pada k', 0, '2017-02-12 14:27:33', '2017-02-12 14:27:33'),
(28, 'cara mudah membuat drainase ko', 0, '2017-02-12 14:28:04', '2017-02-12 14:28:04'),
(29, 'jual kolam bulat', 0, '2017-07-30 19:41:56', '2017-07-30 19:41:56'),
(30, 'terpal karet', 0, '2017-07-30 19:42:10', '2017-07-30 19:42:10'),
(31, 'cara membuat lubang pembuangan', 0, '2017-07-30 19:42:34', '2017-07-30 19:42:34'),
(32, 'pembuangan kolam terpal', 0, '2017-07-30 19:42:44', '2017-07-30 19:42:44'),
(33, 'terpal orchid', 0, '2017-07-30 19:42:52', '2017-07-30 19:42:52'),
(34, 'kolam bulat orchid', 0, '2017-07-30 19:43:02', '2017-07-30 19:43:02'),
(35, 'kelebihan kolam bulat', 0, '2017-07-30 21:49:27', '2017-07-30 21:49:27'),
(36, 'kekurangan kolam bulat', 0, '2017-07-30 21:49:37', '2017-07-30 21:49:37'),
(37, 'orchid', 0, '2017-07-30 21:49:44', '2017-07-30 21:49:44'),
(38, 'kolam terpal bulat karet', 0, '2017-07-30 21:50:03', '2017-07-30 21:50:03'),
(39, 'kolam terpal bulat karet', 0, '2017-07-30 21:50:08', '2017-07-30 21:50:08'),
(40, 'AGEN KOLAM TERPAL MURAH', 0, '2017-08-28 06:39:29', '2017-08-28 06:39:29'),
(41, 'jual kolam bulat murah', 0, '2017-09-12 06:01:33', '2017-09-12 06:01:33'),
(42, 'kolam terpal untuk budidaya le', 0, '2017-09-27 06:58:47', '2017-09-27 06:58:47'),
(43, 'kolam terpal bulat untuk budid', 0, '2017-12-14 22:50:44', '2017-12-14 22:50:44'),
(44, 'jual kolam terpal bundar siap ', 0, '2018-01-31 21:34:30', '2018-01-31 21:34:30'),
(45, 'JUAL KOLAM TERPAL SURABAYA ', 0, '2018-03-14 20:18:29', '2018-03-14 20:18:29'),
(46, 'jual terpal plastik a2', 0, '2018-10-07 19:57:42', '2018-10-07 19:57:42'),
(47, 'jual terpal plastik a3', 0, '2018-10-07 19:59:28', '2018-10-07 19:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `iduser` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tlp1` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `tlp2` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `modif_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `name`, `email`, `tlp1`, `tlp2`, `password`, `create_date`, `modif_date`) VALUES
(1, 'Jaya Teknik Utama', 'admin@jtm.com', '', '', 'admin', '2016-09-03 13:12:57', '2019-11-10 09:46:30');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_kategorimenu`
-- (See below for the actual view)
--
CREATE TABLE `v_kategorimenu` (
`idmenu` int(5)
,`parentid` int(5)
,`menu` varchar(50)
,`parentmenu` varchar(50)
,`slugmenu` varchar(100)
,`status` int(1)
);

-- --------------------------------------------------------

--
-- Table structure for table `webprofil`
--

CREATE TABLE `webprofil` (
  `idwebprofil` int(1) NOT NULL,
  `namaweb` varchar(50) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `tlp1` int(20) DEFAULT NULL,
  `tlp2` int(20) DEFAULT NULL,
  `tlp3` int(20) DEFAULT NULL,
  `fb` varchar(100) DEFAULT NULL,
  `ig` varchar(100) DEFAULT NULL,
  `profil` text NOT NULL,
  `visimisi` text NOT NULL,
  `support` text NOT NULL,
  `carapesan` text NOT NULL,
  `create_date` datetime DEFAULT NULL,
  `midif_date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `webprofil`
--

INSERT INTO `webprofil` (`idwebprofil`, `namaweb`, `email`, `tlp1`, `tlp2`, `tlp3`, `fb`, `ig`, `profil`, `visimisi`, `support`, `carapesan`, `create_date`, `midif_date`) VALUES
(1, 'Jaya Teknik Utama', 'info@jayateknikutama.com', 928304982, 843098340, 934093840, 'facebook.com/jayateknikutama', '@jayateknikutama', 'Jaya teknik Utama', '', '', '', '2019-06-21 00:00:00', '2019-11-10 09:47:53');

-- --------------------------------------------------------

--
-- Structure for view `v_kategorimenu`
--
DROP TABLE IF EXISTS `v_kategorimenu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_kategorimenu`  AS  select `k`.`idmenu` AS `idmenu`,`k`.`parentid` AS `parentid`,`k`.`menu` AS `menu`,(select `j`.`menu` from `kategorimenu` `j` where (`j`.`idmenu` = `k`.`parentid`)) AS `parentmenu`,`k`.`slugmenu` AS `slugmenu`,`k`.`status` AS `status` from `kategorimenu` `k` order by `k`.`parentid` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`idartikel`),
  ADD KEY `idmenu` (`idmenu`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`idbrand`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`idfaq`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`idgalery`),
  ADD KEY `idmenu` (`idmenu`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `kategorimenu`
--
ALTER TABLE `kategorimenu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`idorder`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idpesanan`),
  ADD KEY `idkategori` (`idkategori`),
  ADD KEY `idorder` (`idorder`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idmenu` (`idmenu`),
  ADD KEY `idbrand` (`idbrand`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`idtag`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- Indexes for table `webprofil`
--
ALTER TABLE `webprofil`
  ADD PRIMARY KEY (`idwebprofil`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `idartikel` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `idbrand` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `idfaq` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `idgalery` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `kategorimenu`
--
ALTER TABLE `kategorimenu`
  MODIFY `idmenu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `idorder` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `idtag` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `webprofil`
--
ALTER TABLE `webprofil`
  MODIFY `idwebprofil` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `menus` FOREIGN KEY (`idmenu`) REFERENCES `kategorimenu` (`idmenu`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `galeri`
--
ALTER TABLE `galeri`
  ADD CONSTRAINT `galeri_ibfk_1` FOREIGN KEY (`idmenu`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `orderbykategori` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `menu` FOREIGN KEY (`idmenu`) REFERENCES `kategorimenu` (`idmenu`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
