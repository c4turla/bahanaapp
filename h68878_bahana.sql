-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2017 at 04:18 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `h68878_bahana`
--

-- --------------------------------------------------------

--
-- Table structure for table `bahana_car`
--

CREATE TABLE `bahana_car` (
  `id_car` int(11) NOT NULL,
  `VendorName` varchar(50) DEFAULT NULL,
  `CarBrand` varchar(50) DEFAULT NULL,
  `CarName` varchar(50) DEFAULT NULL,
  `NoPolisi` varchar(50) DEFAULT NULL,
  `Color` varchar(50) DEFAULT NULL,
  `Year` year(4) DEFAULT NULL,
  `Transmission` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `CarPhoto` varchar(50) DEFAULT NULL,
  `Notes` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahana_car`
--

INSERT INTO `bahana_car` (`id_car`, `VendorName`, `CarBrand`, `CarName`, `NoPolisi`, `Color`, `Year`, `Transmission`, `Status`, `CarPhoto`, `Notes`) VALUES
(1, 'PT. ABC Motor', 'TOYOTA', 'GRAND INNOVA', 'B1234JKT', 'WHITE', 2016, 'MANUAL', '1', 'car-sample.jpg', 'OK'),
(6, 'PT. Catur Tunggal', 'TOYOTA', 'AGYA', 'DT 1212 J', 'WHITE', 2015, 'AUTOMATIC', '1', NULL, 'OK'),
(4, 'PT. Adi Jaya', 'SUZUKI', 'ERTIGA', 'DT 1131 AH', 'GREY', 2017, 'MANUAL', '2', NULL, 'OK'),
(5, 'PT. ABC Motor', 'DAIHATSU', 'XENIA', 'AB 213 H', 'SILVER', 2013, 'MANUAL', '4', NULL, 'OK'),
(7, 'PT. ABC Motor', 'HONDA', 'BRIO', 'DT 1020 JE', 'BLACK', 2014, 'AUTOMATIC', '3', NULL, 'Perbaikan');

-- --------------------------------------------------------

--
-- Table structure for table `bahana_client`
--

CREATE TABLE `bahana_client` (
  `id` int(11) NOT NULL,
  `GroupClient` varchar(100) DEFAULT NULL,
  `nameClient` varchar(100) DEFAULT NULL,
  `nameCP` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `uploadKTP` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `NoKTP` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahana_client`
--

INSERT INTO `bahana_client` (`id`, `GroupClient`, `nameClient`, `nameCP`, `phone`, `fax`, `mobile`, `email`, `Address`, `uploadKTP`, `Country`, `city`, `provinsi`, `NoKTP`) VALUES
(1, '2', 'Imam Maulana', '082910101', '939383', '', '08212939393', 'imam.maulana2011@gmail.com', 'jalan Jaksa ', 'gramblr.exe', 'Jakarta', 'Jakarta', 'Jakarta', '2323'),
(3, '1', 'PT. Bahana Motor', 'Mr. Raka', '939383', '', '08212939393', 'imam.maulana2011@gmail.com', 'Jl. Sudirman Raya No.99 Jakarta Selatan DKI Jakarta Indonesia', 'mie-bakso-sapi-indonesian-food-picture-wallpapers-gallery.jpg', 'Jakarta', 'Jakarta', 'Jakarta', '2323'),
(7, '3', 'Caturla Corp', 'Catur Riyono', '085340517686', '', '', 'c4turla@yahoo.co.id', 'Kendari', 'foldable-travel-bag2.jpg', 'Sulawesi Tenggara', 'Kendari', 'Sulawesi Tenggara', '323213213'),
(8, '2', 'Sanjaya Grup', 'Agus Sudarajat', '85340517686', '', '', 'catur.crh@gmail.com', 'Jakarta', 'Aris.jpeg', 'Indonesia', 'Jakarta', 'DKI', '23231321');

-- --------------------------------------------------------

--
-- Table structure for table `bahana_driver`
--

CREATE TABLE `bahana_driver` (
  `id` int(11) NOT NULL,
  `DriverName` varchar(50) DEFAULT NULL,
  `Mobile1` varchar(50) DEFAULT NULL,
  `Mobile2` varchar(50) DEFAULT NULL,
  `PINBB` varchar(50) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `Status` varchar(50) DEFAULT NULL,
  `Address` varchar(50) DEFAULT NULL,
  `City` varchar(50) DEFAULT NULL,
  `Province` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `FotoSIM` varchar(50) DEFAULT NULL,
  `NoSIM` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahana_driver`
--

INSERT INTO `bahana_driver` (`id`, `DriverName`, `Mobile1`, `Mobile2`, `PINBB`, `Email`, `Status`, `Address`, `City`, `Province`, `Country`, `FotoSIM`, `NoSIM`) VALUES
(1, 'ABDUL', '8654654654', '8565345345', '7ABC123', 'catur@pnm.co.id', '1', 'Jl. Ciputat Raya No.101 Jakarta Selatan DKI Jakart', 'Jakarta', 'Jakarta', 'Indonesia', 'Aris.jpeg', 'ok23232323');

-- --------------------------------------------------------

--
-- Table structure for table `bahana_faktur`
--

CREATE TABLE `bahana_faktur` (
  `id` int(11) NOT NULL,
  `NomorSO` varchar(50) DEFAULT NULL,
  `NomorFaktur` varchar(50) DEFAULT NULL,
  `DateCreate` date DEFAULT NULL,
  `TimeCreate` time DEFAULT NULL,
  `DateUpdate` date DEFAULT NULL,
  `TimeUpdate` time DEFAULT NULL,
  `DataMobil` varchar(200) DEFAULT NULL,
  `TotalSelling` int(20) DEFAULT NULL,
  `Notes` text,
  `status` int(2) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `update_by` varchar(100) DEFAULT NULL,
  `vendor` varchar(100) DEFAULT NULL,
  `TglSewa` date DEFAULT NULL,
  `Hari` varchar(100) DEFAULT NULL,
  `buying` int(20) DEFAULT NULL,
  `Tujuan` varchar(200) DEFAULT NULL,
  `selling` int(20) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `TimeApprove` time DEFAULT NULL,
  `DateApprove` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahana_faktur`
--

INSERT INTO `bahana_faktur` (`id`, `NomorSO`, `NomorFaktur`, `DateCreate`, `TimeCreate`, `DateUpdate`, `TimeUpdate`, `DataMobil`, `TotalSelling`, `Notes`, `status`, `create_by`, `approved_by`, `update_by`, `vendor`, `TglSewa`, `Hari`, `buying`, `Tujuan`, `selling`, `client`, `TimeApprove`, `DateApprove`) VALUES
(6, 'SO-201702120001', 'FA-201702120001', '2017-02-12', '02:42:17', '2017-03-30', '04:40:46', '1', 200000, 'Alamat Jalan jaksa', 4, '2', '3', '3', 'PT. BAHANA HOLIDAY', '2017-02-22', '3', 1000, 'surabaya', 200000, '1', '02:14:47', '2017-03-26'),
(7, 'SO-201702120001', 'FA-201702120002', '2017-02-12', '02:42:54', NULL, NULL, '1', 1000, 'jalan cikeleng', 2, '2', '3', NULL, 'PT. BAHANA HOLIDAY', '2017-02-22', '3', 2000, 'kuningan', 1000, '1', '00:20:17', '2010-08-15'),
(8, 'SO-201702120002', 'FA-201702120003', '2017-02-12', '02:45:19', '2017-03-30', '04:43:44', '1', 200000, 'jalan cipinang muara', 4, '2', '3', '3', 'PT. BAHANA HOLIDAY', '2017-02-22', '2', 200000, 'bogor', 200000, '1', '00:20:17', '2010-12-10'),
(9, 'SO-201702120002', 'FA-201702120004', '2017-02-12', '02:45:48', NULL, NULL, '1', 3000, 'itu dah ', 1, '2', NULL, NULL, 'PT. BAHANA HOLIDAY', '2017-02-14', '2', 200000, 'kemana mana', 3000, '1', NULL, NULL),
(10, 'SO-201702120003', 'FA-201702120005', '2017-02-12', '03:12:29', NULL, NULL, '1', 200000, 'jalan cc', 2, '2', '3', NULL, 'PT. BAHANA HOLIDAY', '2017-02-16', '2', 300000, 'XX', 200000, '1', '10:16:21', '2017-02-12'),
(11, 'SO-201702120004', 'FA-201702120006', '2017-02-12', '03:13:25', NULL, NULL, '1', 2222, 'asdasd', 1, '2', NULL, NULL, 'PT. BAHANA HOLIDAY', '2017-02-07', '2', 22222, 'sdas', 2222, '1', NULL, NULL),
(12, 'SO-201702120005', 'FA-201702120007', '2017-02-12', '03:21:35', NULL, NULL, '1', 20000, 'sdads', 1, '2', NULL, NULL, 'PT. BAHANA HOLIDAY', '2017-02-15', '2', 20000, 'asd', 20000, '1', NULL, NULL),
(13, 'SO-201702120003', 'FA-201702120008', '2017-02-12', '03:27:39', NULL, NULL, '1', 20000, 'asdas', 1, '2', NULL, NULL, 'PT. BAHANA HOLIDAY', '2017-02-14', '2', 20000, 'ss', 20000, '1', NULL, NULL),
(14, 'SO-201702120006', 'FA-201702120009', '2017-02-12', '05:56:14', NULL, NULL, '1', 232323, 'sdfsdfsd', 1, '2', NULL, NULL, 'PT. BAHANA HOLIDAY', '2017-02-21', '2', 23232, 'dd', 232323, '3', NULL, NULL),
(15, 'SO-201702120007', 'FA-201702120010', '2017-02-12', '05:56:50', NULL, NULL, '1', 3233, 'sdfsdf', 1, '2', NULL, NULL, 'PT. BAHANA HOLIDAY', '2017-02-07', '2', 2323, 'dasd', 3233, '3', NULL, NULL),
(16, 'SO-201702120008', 'FA-201702120011', '2017-02-12', '05:57:08', NULL, NULL, '1', 23, 'asdasdas', 2, '2', '3', NULL, 'PT. BAHANA HOLIDAY', '2017-02-02', '4', 23, 'ds', 23, '1', '00:20:17', '0000-00-00'),
(17, 'SO-201702120003', 'FA-201702120012', '2017-02-12', '05:57:29', NULL, NULL, '1', 232323, 'asdasd', 2, '2', '3', NULL, 'PT. BAHANA HOLIDAY', '2017-02-08', '2', 23232, 'sad', 232323, '3', '00:20:17', '2010-10-26'),
(18, 'SO-201702120009', 'FA-201702120013', '2017-03-26', '04:57:32', NULL, NULL, '6', 2500, 'Jemput di CGK', 2, '4', '3', NULL, 'Saputra', '2019-02-03', 'Sabtu', 2000, 'Magelang', 2500, '7', '10:29:10', '2017-03-27'),
(19, 'SO-201702120010', 'FA-201702120014', '2017-03-27', '10:07:32', NULL, NULL, '4', 350000, 'Jemput di Lipo Karawaci', 1, '2', NULL, NULL, 'Catur', '2019-04-03', 'Selasa', 300000, 'Bekasi', 350000, '8', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bahana_invoice`
--

CREATE TABLE `bahana_invoice` (
  `id` int(11) NOT NULL,
  `NomorInvoice` varchar(50) DEFAULT NULL,
  `NomorSO` varchar(50) DEFAULT NULL,
  `DateCreate` date DEFAULT NULL,
  `TimeCreate` time DEFAULT NULL,
  `DateUpdate` date DEFAULT NULL,
  `TimeUpdate` time DEFAULT NULL,
  `Customer` varchar(200) DEFAULT NULL,
  `Currency` int(20) DEFAULT NULL,
  `DueDate` date DEFAULT NULL,
  `DataMobil` varchar(200) DEFAULT NULL,
  `Notes` text,
  `status` int(2) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `update_by` varchar(100) DEFAULT NULL,
  `vendor` varchar(100) DEFAULT NULL,
  `TglSewa` date DEFAULT NULL,
  `Hari` varchar(100) DEFAULT NULL,
  `buying` int(20) DEFAULT NULL,
  `Tujuan` varchar(200) DEFAULT NULL,
  `selling` int(20) DEFAULT NULL,
  `client` varchar(100) DEFAULT NULL,
  `TimeApprove` time DEFAULT NULL,
  `DateApprove` date DEFAULT NULL,
  `DariClient` int(2) DEFAULT NULL,
  `NoteClient` text,
  `Kevendor` int(2) DEFAULT NULL,
  `NoteVendor` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahana_invoice`
--

INSERT INTO `bahana_invoice` (`id`, `NomorInvoice`, `NomorSO`, `DateCreate`, `TimeCreate`, `DateUpdate`, `TimeUpdate`, `Customer`, `Currency`, `DueDate`, `DataMobil`, `Notes`, `status`, `create_by`, `approved_by`, `update_by`, `vendor`, `TglSewa`, `Hari`, `buying`, `Tujuan`, `selling`, `client`, `TimeApprove`, `DateApprove`, `DariClient`, `NoteClient`, `Kevendor`, `NoteVendor`) VALUES
(6, 'IN-20150501', 'SO-201702120001', '2017-02-12', '02:42:17', '2017-03-30', '04:40:46', NULL, NULL, NULL, '1', 'Alamat Jalan jaksa', 4, '2', '3', '3', 'PT. BAHANA HOLIDAY', '2017-02-22', '3', 1000, 'surabaya', 200000, '1', '02:14:47', '2017-03-26', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `bahana_sales_order`
--

CREATE TABLE `bahana_sales_order` (
  `id` int(11) NOT NULL,
  `NomorSO` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahana_sales_order`
--

INSERT INTO `bahana_sales_order` (`id`, `NomorSO`) VALUES
(5, 'SO-201702120001'),
(6, 'SO-201702120002'),
(7, 'SO-201702120003'),
(8, 'SO-201702120004'),
(9, 'SO-201702120005'),
(10, 'SO-201702120006'),
(11, 'SO-201702120007'),
(12, 'SO-201702120008'),
(13, 'SO-201702120009'),
(14, 'SO-201702120010');

-- --------------------------------------------------------

--
-- Table structure for table `bahana_sessions`
--

CREATE TABLE `bahana_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(45) NOT NULL DEFAULT '0',
  `user_agent` varchar(120) NOT NULL,
  `last_activity` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `user_data` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bahana_sessions`
--

INSERT INTO `bahana_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('ea177ea0724b4d194dcd3a4b0d8baeaa', '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:52.0) Gecko/20100101 Firefox/52.0', 1490891079, 'a:43:{s:9:"user_data";s:0:"";s:9:"logged_in";s:17:"yesGetMeLoginBaby";s:2:"id";s:1:"3";s:11:"NamaLengkap";s:7:"bagus X";s:8:"Position";s:7:"manager";s:4:"Role";s:1:"5";s:9:"FilesName";s:5:"3.jpg";s:5:"Email";s:15:"babar@pnm.co.id";s:8:"Username";s:7:"manager";s:8:"Password";s:32:"21232f297a57a5a743894a0e4a801fc3";s:7:"Address";s:129:"Bagian IT , PT Permodalan Nasional Madani (Persero)\r\nGedung Arthaloka Lantai 1 Jl.Jendral Sudirman Kav.2 Jakarta 10220, Indonesia";s:4:"City";s:13:"Jakarta Pusat";s:8:"Province";s:11:"DKI Jakarta";s:7:"Country";s:7:"Jakarta";s:5:"Phone";s:9:"094748833";s:10:"BBMAccount";s:7:"933IS33";s:9:"YMAccount";s:15:"babar@ymail.com";s:6:"IdRole";s:1:"5";s:8:"NamaRole";s:7:"Finance";s:11:"UserProfile";N;s:7:"Members";N;s:12:"GroupProfile";N;s:18:"CompanyInformation";N;s:14:"PaymentAccount";N;s:16:"SecurityPassword";N;s:10:"DataClient";N;s:10:"DataVendor";N;s:8:"DataCars";N;s:10:"DataDriver";N;s:10:"ListFaktur";N;s:12:"CreateFaktur";N;s:16:"ManagerAppFaktur";N;s:14:"ListSuratJalan";N;s:16:"CreateSuratJalan";N;s:24:"ManagerAppSuratUangJalan";N;s:11:"ListInvoice";N;s:13:"CreateInvoice";N;s:17:"ManagerAppInvoice";N;s:12:"ReportOrders";N;s:13:"ReportClients";N;s:13:"ReportVendors";N;s:10:"ReportCars";N;s:13:"ReportDrivers";N;}');

-- --------------------------------------------------------

--
-- Table structure for table `bahana_setting`
--

CREATE TABLE `bahana_setting` (
  `id_setting` int(10) NOT NULL,
  `tipe` varchar(50) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content_setting` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bahana_setting`
--

INSERT INTO `bahana_setting` (`id_setting`, `tipe`, `title`, `content_setting`) VALUES
(1, 'site_title', 'Nama Situs', 'Applikasi Bahaaana'),
(2, 'site_quotes', 'Quotes Situs', 'aaa'),
(3, 'site_footer', 'Teks Footer', 'Applikasi Bahana'),
(4, 'key_login', 'Hash Key MD5', 'sss'),
(5, 'site_theme', 'Theme Folder', 'bahana'),
(6, 'site_limit_small', 'Limit Data Small', '5'),
(7, 'site_limit_medium', 'Limit Data Medium', '15');

-- --------------------------------------------------------

--
-- Table structure for table `bahana_surat_jalan`
--

CREATE TABLE `bahana_surat_jalan` (
  `id` int(11) NOT NULL,
  `NomorSO` varchar(50) DEFAULT NULL,
  `NomorFaktur` varchar(50) DEFAULT NULL,
  `NomorSJ` varchar(50) DEFAULT NULL,
  `DateCreate` date DEFAULT NULL,
  `TimeCreate` time DEFAULT NULL,
  `DateUpdate` date DEFAULT NULL,
  `TimeUpdate` time DEFAULT NULL,
  `DateApprove` date DEFAULT NULL,
  `TimeApprove` time DEFAULT NULL,
  `Client` varchar(100) DEFAULT NULL,
  `DataMobil` varchar(200) DEFAULT NULL,
  `kmstart` int(10) DEFAULT NULL,
  `kmfinish` int(10) DEFAULT NULL,
  `Driver` varchar(100) DEFAULT NULL,
  `Namatamu` varchar(100) DEFAULT NULL,
  `Telptamu` varchar(100) DEFAULT NULL,
  `Alamatjemput` varchar(255) DEFAULT NULL,
  `DateJemput` date DEFAULT NULL,
  `timemulai` time DEFAULT NULL,
  `timeakhir` time DEFAULT NULL,
  `timetotal` time DEFAULT NULL,
  `overtime` time DEFAULT NULL,
  `notatime` text,
  `rute` varchar(255) DEFAULT NULL,
  `r1` int(11) DEFAULT NULL,
  `r2` int(11) DEFAULT NULL,
  `r3` int(11) DEFAULT NULL,
  `r4` int(11) DEFAULT NULL,
  `r5` int(11) DEFAULT NULL,
  `r6` int(11) DEFAULT NULL,
  `r7` int(11) DEFAULT NULL,
  `r8` int(11) NOT NULL,
  `keterangan` text,
  `note` text,
  `hari` varchar(100) DEFAULT NULL,
  `ricianuangjalan` text,
  `ttd` varchar(100) DEFAULT NULL,
  `uangjalan` varchar(100) DEFAULT NULL,
  `create_by` varchar(100) DEFAULT NULL,
  `approved_by` varchar(100) DEFAULT NULL,
  `update_by` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bahana_surat_jalan`
--

INSERT INTO `bahana_surat_jalan` (`id`, `NomorSO`, `NomorFaktur`, `NomorSJ`, `DateCreate`, `TimeCreate`, `DateUpdate`, `TimeUpdate`, `DateApprove`, `TimeApprove`, `Client`, `DataMobil`, `kmstart`, `kmfinish`, `Driver`, `Namatamu`, `Telptamu`, `Alamatjemput`, `DateJemput`, `timemulai`, `timeakhir`, `timetotal`, `overtime`, `notatime`, `rute`, `r1`, `r2`, `r3`, `r4`, `r5`, `r6`, `r7`, `r8`, `keterangan`, `note`, `hari`, `ricianuangjalan`, `ttd`, `uangjalan`, `create_by`, `approved_by`, `update_by`, `status`) VALUES
(1, 'SO-201702120002', 'FA-201702120003', 'SJ-201703050001', '2017-03-05', '01:10:20', '2017-03-28', '06:47:06', '2017-03-05', '01:18:08', 'PT. ABC Motor', '1', 1, 200, '1', 'budi', '0219191919', 'jalan jaksa', '2017-03-24', '19:15:00', '18:15:00', '23:00:00', '22:00:00', 'tidak ada', 'a:2:{i:0;s:5:"bogor";i:1;s:9:"jalaksana";}', 1, 1, 1, 1, 1, 1, 1, 1, 'Oke', 'oke', '2', 'ok', 'on', '20000000', '3', '3', '3', 4),
(2, 'SO-201702120009', 'FA-201702120013', 'SJ-201703050002', '2017-03-27', '01:54:59', '2017-03-28', '07:25:47', '2017-03-27', '03:15:48', 'Caturla Corp', '7', 5200, 6000, '1', 'Agus ', '02329329329', 'Jl Jend Sudirman', '2017-03-28', '20:00:00', '18:00:00', '22:00:00', '00:00:00', 'OK', 'a:1:{i:0;s:7:"Jakarta";}', 1, 2, 1, 2, 2, 1, 1, 1, 'OK', 'OK', 'Selasa', 'OK', 'on', '500000', '2', '2', '2', 4);

-- --------------------------------------------------------

--
-- Table structure for table `bahana_vendor`
--

CREATE TABLE `bahana_vendor` (
  `id` int(11) NOT NULL,
  `nameCP` varchar(100) DEFAULT NULL,
  `nameVendor` varchar(100) DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `mobile` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `uploadKTP` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `provinsi` varchar(100) DEFAULT NULL,
  `NoKTP` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `bahana_vendor`
--

INSERT INTO `bahana_vendor` (`id`, `nameCP`, `nameVendor`, `phone`, `fax`, `mobile`, `email`, `Address`, `uploadKTP`, `Country`, `city`, `provinsi`, `NoKTP`) VALUES
(5, 'Mr. Ricky', 'PT. ABC Motor', '+62-21-740777888', '122', '+62-820-999888', NULL, 'Jl. Ciputat Raya No.101 ', '1.jpg', 'Banten ', 'Tangerang Selatan', 'Banten ', '2332'),
(6, 'Saputra', 'PT. Adi Jaya', '323123232', '343423423', '23432423', '', 'Jl. Manggis No 10', '1.jpg', 'Sulawesi Tenggara', 'Kendari', 'Sulawesi Tenggara', '32442342'),
(7, 'Catur', 'PT. Catur Tunggal', '85340517686', '43423553', '324324325', 'catur@pnm.co.id', 'Jl. Martandu No 8-9', NULL, 'Sulawesi Tenggara', 'Kendari', 'Sulawesi Tenggara', '7471040709870002');

-- --------------------------------------------------------

--
-- Table structure for table `company_information`
--

CREATE TABLE `company_information` (
  `id` int(11) NOT NULL,
  `CompanyName` varchar(50) DEFAULT NULL,
  `CompanyAddress` text,
  `CompanyPhone` varchar(50) DEFAULT NULL,
  `CompanyPhone2` varchar(50) DEFAULT NULL,
  `CompanyFax` varchar(50) DEFAULT NULL,
  `CompanyEmail` varchar(50) DEFAULT NULL,
  `CompanyEmail2` varchar(50) DEFAULT NULL,
  `CompanyWebsite` varchar(50) DEFAULT NULL,
  `BankName` varchar(50) DEFAULT NULL,
  `AccountNumber` varchar(50) DEFAULT NULL,
  `AccountName` varchar(50) DEFAULT NULL,
  `BankName2` varchar(50) DEFAULT NULL,
  `AccountNumber2` varchar(50) DEFAULT NULL,
  `AccountName2` varchar(50) DEFAULT NULL,
  `BankName3` varchar(50) DEFAULT NULL,
  `AccountNumber3` varchar(50) DEFAULT NULL,
  `AccountName3` varchar(50) DEFAULT NULL,
  `NPWP` varchar(50) DEFAULT NULL,
  `NPWPName` varchar(50) DEFAULT NULL,
  `SecurityPassword` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_information`
--

INSERT INTO `company_information` (`id`, `CompanyName`, `CompanyAddress`, `CompanyPhone`, `CompanyPhone2`, `CompanyFax`, `CompanyEmail`, `CompanyEmail2`, `CompanyWebsite`, `BankName`, `AccountNumber`, `AccountName`, `BankName2`, `AccountNumber2`, `AccountName2`, `BankName3`, `AccountNumber3`, `AccountName3`, `NPWP`, `NPWPName`, `SecurityPassword`) VALUES
(1, 'PNM', 'Bagian IT , PT Permodalan Nasional Madani (Persero)\r\nGedung Arthaloka Lantai 1 Jl.Jendral Sudirman Kav.2 Jakarta 10220, Indonesia', '0218501992', '0218561629', '021832794981', 'imam.maulana2011@gmail.com', 'oceboysip@gmail.com', 'http://bahana.co.id', 'BNI', '90282-293993', 'Imam Maulana', 'MANDIRI', '1093938-22', 'Imam Maulana', 'BCA', '9292928-11', 'Imam Maulana', '9188199292', 'PT BAHANA', 'obAIPwwi3AZBEJyHaofXyK+0ggEFE/pfqXAvbKflUwKm+srFEf7CalQer+0p3FjL622pHGMFGBk2ZCRn3d7tpg==');

-- --------------------------------------------------------

--
-- Table structure for table `groupclient`
--

CREATE TABLE `groupclient` (
  `id` int(11) NOT NULL,
  `GroupName` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `groupclient`
--

INSERT INTO `groupclient` (`id`, `GroupName`) VALUES
(1, 'Corporate'),
(2, 'Agent'),
(3, 'Personal');

-- --------------------------------------------------------

--
-- Table structure for table `group_profile`
--

CREATE TABLE `group_profile` (
  `IdRole` int(11) NOT NULL,
  `NamaRole` char(50) DEFAULT NULL,
  `UserProfile` int(5) DEFAULT '0',
  `Members` int(5) DEFAULT NULL,
  `GroupProfile` int(5) DEFAULT NULL,
  `CompanyInformation` int(5) DEFAULT NULL,
  `PaymentAccount` int(5) DEFAULT NULL,
  `SecurityPassword` int(5) DEFAULT NULL,
  `DataClient` int(5) DEFAULT NULL,
  `DataVendor` int(5) DEFAULT NULL,
  `DataCars` int(5) DEFAULT NULL,
  `DataDriver` int(5) DEFAULT NULL,
  `ListFaktur` int(5) DEFAULT NULL,
  `CreateFaktur` int(5) DEFAULT NULL,
  `ManagerAppFaktur` int(5) DEFAULT NULL,
  `ListSuratJalan` int(5) DEFAULT NULL,
  `CreateSuratJalan` int(5) DEFAULT NULL,
  `ManagerAppSuratUangJalan` int(5) DEFAULT NULL,
  `ListInvoice` int(5) DEFAULT NULL,
  `CreateInvoice` int(5) DEFAULT NULL,
  `ManagerAppInvoice` int(5) DEFAULT NULL,
  `ReportOrders` int(5) DEFAULT NULL,
  `ReportClients` int(5) DEFAULT NULL,
  `ReportVendors` int(5) DEFAULT NULL,
  `ReportCars` int(5) DEFAULT NULL,
  `ReportDrivers` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `group_profile`
--

INSERT INTO `group_profile` (`IdRole`, `NamaRole`, `UserProfile`, `Members`, `GroupProfile`, `CompanyInformation`, `PaymentAccount`, `SecurityPassword`, `DataClient`, `DataVendor`, `DataCars`, `DataDriver`, `ListFaktur`, `CreateFaktur`, `ManagerAppFaktur`, `ListSuratJalan`, `CreateSuratJalan`, `ManagerAppSuratUangJalan`, `ListInvoice`, `CreateInvoice`, `ManagerAppInvoice`, `ReportOrders`, `ReportClients`, `ReportVendors`, `ReportCars`, `ReportDrivers`) VALUES
(1, 'Administrator', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Manager Approve', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Reservation', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Operational', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Finance', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id` int(11) NOT NULL,
  `name_status` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `name_status`) VALUES
(1, 'new'),
(2, 'approved'),
(3, 'update'),
(4, 'finish');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `NamaLengkap` varchar(100) DEFAULT NULL,
  `Position` varchar(100) DEFAULT NULL,
  `Role` int(10) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `Username` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `Address` text,
  `City` varchar(50) DEFAULT NULL,
  `Province` varchar(50) DEFAULT NULL,
  `Country` varchar(50) DEFAULT NULL,
  `Phone` varchar(100) DEFAULT NULL,
  `BBMAccount` varchar(50) DEFAULT NULL,
  `YMAccount` varchar(100) DEFAULT NULL,
  `FilesName` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `NamaLengkap`, `Position`, `Role`, `Email`, `Username`, `Password`, `Address`, `City`, `Province`, `Country`, `Phone`, `BBMAccount`, `YMAccount`, `FilesName`) VALUES
(1, 'Administrator', 'Admin', 1, 'admin@bahana.com', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Jl. Lingkar Mega Kuningan Kav. E No.1 Lantai 28, Kuningan Timur\r\nJakarta Selatan, Kode Pos 12950\r\nDKI Jakarta, Indonesia', 'Jakarta', 'Jakarta', 'Indonesia', '082110037061', '21212131', 'oceboysip@yahoo.com', '14.jpg'),
(2, 'imam', 'Reservation', 2, 'imam.maulana2011@gmail.com', 'reserv', '21232f297a57a5a743894a0e4a801fc3', 'Bagian IT , PT Permodalan Nasional Madani (Persero)\r\nGedung Arthaloka Lantai 1 Jl.Jendral Sudirman Kav.2 Jakarta 10220, Indonesia', 'Jakarta Pusat', 'DKI Jakarta', 'Jakarta', '082110037041', 'sad2323', 'oceboysip@yahoo.com', '6.jpg'),
(3, 'bagus X', 'manager', 5, 'babar@pnm.co.id', 'manager', '21232f297a57a5a743894a0e4a801fc3', 'Bagian IT , PT Permodalan Nasional Madani (Persero)\r\nGedung Arthaloka Lantai 1 Jl.Jendral Sudirman Kav.2 Jakarta 10220, Indonesia', 'Jakarta Pusat', 'DKI Jakarta', 'Jakarta', '094748833', '933IS33', 'babar@ymail.com', '3.jpg'),
(4, 'Catur Riyono', 'Admin', 1, 'catur@pnm.co.id', 'c4turla', '21232f297a57a5a743894a0e4a801fc3', 'Jl Martandu No. 8-9 Kel. Anduonohu Kec. Poasia Kota Kendari', 'Kendari', 'Sulawesi Tenggara', 'Indonesia', '085340517686', 'AB2213SA', 'c4turla@yahoo.co.id', 'crh.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `nama_role` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `nama_role`) VALUES
(1, 'Administrator'),
(2, 'Reservation'),
(3, 'Operational'),
(4, 'Finance'),
(5, 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bahana_car`
--
ALTER TABLE `bahana_car`
  ADD PRIMARY KEY (`id_car`);

--
-- Indexes for table `bahana_client`
--
ALTER TABLE `bahana_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahana_driver`
--
ALTER TABLE `bahana_driver`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahana_faktur`
--
ALTER TABLE `bahana_faktur`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahana_invoice`
--
ALTER TABLE `bahana_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahana_sales_order`
--
ALTER TABLE `bahana_sales_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahana_sessions`
--
ALTER TABLE `bahana_sessions`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `last_activity_idx` (`last_activity`);

--
-- Indexes for table `bahana_setting`
--
ALTER TABLE `bahana_setting`
  ADD PRIMARY KEY (`id_setting`);

--
-- Indexes for table `bahana_surat_jalan`
--
ALTER TABLE `bahana_surat_jalan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bahana_vendor`
--
ALTER TABLE `bahana_vendor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company_information`
--
ALTER TABLE `company_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupclient`
--
ALTER TABLE `groupclient`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `group_profile`
--
ALTER TABLE `group_profile`
  ADD PRIMARY KEY (`IdRole`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bahana_car`
--
ALTER TABLE `bahana_car`
  MODIFY `id_car` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bahana_client`
--
ALTER TABLE `bahana_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `bahana_driver`
--
ALTER TABLE `bahana_driver`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `bahana_faktur`
--
ALTER TABLE `bahana_faktur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `bahana_invoice`
--
ALTER TABLE `bahana_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `bahana_sales_order`
--
ALTER TABLE `bahana_sales_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `bahana_setting`
--
ALTER TABLE `bahana_setting`
  MODIFY `id_setting` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `bahana_surat_jalan`
--
ALTER TABLE `bahana_surat_jalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `bahana_vendor`
--
ALTER TABLE `bahana_vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `company_information`
--
ALTER TABLE `company_information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `groupclient`
--
ALTER TABLE `groupclient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `group_profile`
--
ALTER TABLE `group_profile`
  MODIFY `IdRole` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
