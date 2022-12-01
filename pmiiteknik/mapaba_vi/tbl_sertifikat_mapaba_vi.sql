-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 25, 2022 at 03:25 PM
-- Server version: 10.5.17-MariaDB-cll-lve
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u1607792_pmiiftekuninus_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sertifikat_mapaba_vi`
--

CREATE TABLE `tbl_sertifikat_mapaba_vi` (
  `sertifikat_id` int(11) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `nim` varchar(32) NOT NULL,
  `jurusan` varchar(64) NOT NULL,
  `link_sertifikat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sertifikat_mapaba_vi`
--

INSERT INTO `tbl_sertifikat_mapaba_vi` (`sertifikat_id`, `nama`, `nim`, `jurusan`, `link_sertifikat`) VALUES
(1, 'rai', '123123', 'Teknik Industri', 'https://tailwindcss.com/'),
(2, 'rifqy', '321', 'Teknik Informatika', 'https://www.w3schools.com/'),
(3, 'Shira Zahira Nurfitria', '41033402221058', 'Manajemen', 'https://drive.google.com/file/d/1Lj8dm76unlUz-GJKa1yvEHxKLs18_8Mx/view?usp=share_link'),
(4, 'Rd. Muhammad Ilyas S.M.', '41037006221034', 'Teknik Informatika', 'https://drive.google.com/file/d/1BE2qXgQjBmNwWLqieAyj2A2MwBQGgeBD/view?usp=share_link'),
(5, 'Rafa Mut Mainah Ibni Imam', '41033402221034', 'Manajemen', 'https://drive.google.com/file/d/1cAnKM2M-6fct9F5hp6gna8DLaZOQV6Y4/view?usp=share_link'),
(6, 'Wina Lutviah', '21030803221006', 'Pendidikan Guru Madrasah Ibtidaiyah', 'https://drive.google.com/file/d/15voMVxL-bVKD2dmkfF8r4q-LNPnNDeFz/view?usp=share_link'),
(7, 'Mutiara Khoerunnisa', '41032102221025', 'Pendidikan Luar Biasa', 'https://drive.google.com/file/d/16jrkFueXGXMcWWd2ldLIog5yC8XPmJrd/view?usp=share_link'),
(8, 'Ginanjar Badar Pamungkas', '41037006211057', 'Teknik Informatika', 'https://drive.google.com/file/d/1bx4_cpHMh_MeF59XBsta4-m2FK2y9K6m/view?usp=share_link'),
(9, 'Neng Ulpiah', '41032151221006', 'Pendidikan Matematika', 'https://drive.google.com/file/d/1-0-u8pG8MKM4VIekxnXAVF6Cat6Uvcem/view?usp=share_link'),
(10, 'Dede Lutfiyah Adawiyah', '41032102221031', 'Pendidikan Luar Biasa', 'https://drive.google.com/file/d/1Iwt7uQKIwr4fvlwyQoBR7ZEFu3-jJ86V/view?usp=share_link'),
(11, 'Septian Adi Chandra', '41037002211023', 'Teknik Elektro', 'https://drive.google.com/file/d/1qQ19ueoTTlwyZ_un8JyT4hYTQjfYagXg/view?usp=share_link'),
(12, 'Urfa Nur Hasanah', '41032151221002', 'Pendidikan Matematika', 'https://drive.google.com/file/d/1bAZiMGXQEEgKrpDgh6JklWDerHELlwyV/view?usp=share_link'),
(13, 'M Lewi Anugrah', '21030804221007', 'Perbankan Syariah', 'https://drive.google.com/file/d/1ZoY0fN6IE3WFx3dry2OAoEqfGFfuwl9v/view?usp=share_link'),
(14, 'M Sandi Abdurohman', '21030801221015', 'Komunikasi & Penyiaran Islam', 'https://drive.google.com/file/d/1iCGhrnGCkEw9MJMR8rXAROCqgwv2AQT1/view?usp=share_link'),
(15, 'Ikbal Nurfalah', '41037002200023', 'Teknik Elektro', 'https://drive.google.com/file/d/1RmtGnjlLg-AEQ10y4K_2wrOxNIcOdWF0/view?usp=share_link');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_sertifikat_mapaba_vi`
--
ALTER TABLE `tbl_sertifikat_mapaba_vi`
  ADD PRIMARY KEY (`sertifikat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_sertifikat_mapaba_vi`
--
ALTER TABLE `tbl_sertifikat_mapaba_vi`
  MODIFY `sertifikat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
