-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 06, 2023 at 09:29 AM
-- Server version: 8.0.32
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipcom_ipcom`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `id` int NOT NULL,
  `username` varchar(200) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `reg_jenis` varchar(200) NOT NULL,
  `file` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id`, `username`, `nama`, `reg_jenis`, `file`) VALUES
(11, 'ahmad', 'AHMAD HIDAYAT, M.PSI., PSIKOLOG', 'Universitas Islam Riau (UIR) Pekanbaru', 'Ahmad_Hidayat,_M__Psi_,_Psikolog-_Qiraah-FORMJURIPSY.xlsx'),
(12, 'hidayatul', 'Hidayatul Azizah Gazali, S.Th.I., M.Ag.', 'UIN Imam Bonjol Padang', 'FORMJURIPSY-QIRAAH-update.xlsx'),
(13, 'bahril', 'BAHRIL HIDAYAT, M.PSI., PSIKOLOG', 'Universitas Islam Riau (UIR) Pekanbaru', '01_Bahril_Hidayat_Nilai_Psy_paper_JuriPsy-Paper.xlsx'),
(14, 'yuliana', 'Yuliana Intan Lestari, S.Psi.,MA', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', 'Yuliana_Intan_Lestari_JuriPsy-Photography.xlsx');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `category_id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `category_banner` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`category_id`, `category_name`, `category_banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Selayang Pandang', 'category-banner-1.png', 'Fakultas Psikologi', '', ''),
(2, 'Perlombaan', 'category-banner-2.png', 'Perlombaan', '', ''),
(5, 'Panitia Pelaksana', 'category-banner-5.png', 'Panitia Pelaksana', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_client`
--

INSERT INTO `tbl_client` (`id`, `name`, `url`, `photo`) VALUES
(22, 'Fakultas Psikologi Universitas Islam Riau', 'https://psy.uir.ac.id/', 'client-22.png'),
(23, 'Fakultas Psikologi UIN Raden Fatah Palembang', 'https://psikologi.radenfatah.ac.id/', 'client-23.png'),
(24, 'Fakultas Psikologi UIN Sultan Syarif Kasim Pekanbaru Riau', 'https://fpsi.uin-suska.ac.id/', 'client-24.png'),
(25, 'Fakultas Ushuluddin dan Studi Agama UIN Imam Bonjol Padang', 'https://pi-fu.uinib.ac.id/', 'client-25.png'),
(20, 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', 'https://psikologi.uinsgd.ac.id/', 'client-20.png'),
(26, 'Fakultas Sosial dan Humaniora UMB Bandung', 'https://umbandung.ac.id/', 'client-26.png'),
(27, 'Fakultas Psikologi UNISBA', 'https://psikologi.unisba.ac.id/', 'client-27.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int NOT NULL,
  `code_body` text NOT NULL,
  `code_main` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `code_body`, `code_main`) VALUES
(1, '<div id=\"fb-root\"></div>\r\n<script>(function(d, s, id) {\r\n  var js, fjs = d.getElementsByTagName(s)[0];\r\n  if (d.getElementById(id)) return;\r\n  js = d.createElement(s); js.id = id;\r\n  js.src = \"//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.10&appId=323620764400430\";\r\n  fjs.parentNode.insertBefore(js, fjs);\r\n}(document, \'script\', \'facebook-jssdk\'));</script>', '<div class=\"fb-comments\" data-href=\"https://developers.facebook.com/docs/plugins/comments#configurator\" data-numposts=\"5\"></div>');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int NOT NULL,
  `event_title` varchar(255) NOT NULL,
  `event_content` text NOT NULL,
  `event_content_short` text NOT NULL,
  `event_start_date` varchar(10) NOT NULL,
  `event_end_date` varchar(10) NOT NULL,
  `event_location` text NOT NULL,
  `event_map` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_title`, `event_content`, `event_content_short`, `event_start_date`, `event_end_date`, `event_location`, `event_map`, `photo`, `banner`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(29, 'PSY-CERPEN ISLAMI', '<p><b>KATEGORI LOMBA</b></p><p>    1.   Kategori Individu</p><p>    2.   Kaetgori Kelompok</p><p><b>TEMA</b></p><p>    <i>\"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"</i></p><p><b>SUB-TEMA</b></p><p>    1.    Peran Pola Asuh Islami Pada Era VUCA</p><p>    2.   Peran Kepribadian Muslim Pada Era VUCA</p><p>    3.   Kesehatan Mental Pada Era VUCA (Membangun Kepribadian yang Mutmainnah)</p><p>    4.   Peran Kepemimpinan Muslim Pada Era VUCA</p><p>    5.   Peran Pendidikan Islam Pada Era VUCA</p><p>    6.   Peran Dukungan Sosial dan Komunitas Pada Era VUCA</p><p><br></p><p><b>KETENTUAN PESERTA</b></p><p>    1.    Peserta adalah mahasiswa/i perorangan dan kelompok</p><p>    2.    Setiap universitas dapat mengirimkan maksimal 3 (tiga) orang Pa/Pi untuk kategori individu,</p><p>          dan 3 (tiga) kelompok yang terdiri dari maksimal 3 (tiga) anggota Pa/Pi untuk kategori</p><p>           kelompok</p><p><br></p><p><b>*Untuk Informasi lebih lanjut dapat dilihat pada buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-CERPEN ISLAMI', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-29.png', 'event-banner-28.png', 'psy-cerpen islami', 'psy-cerpen islami', 'psy-cerpen islami'),
(34, 'PSY-DAKWAH', '<p><b>KATEGORI LOMBA</b></p><p>    1.    Kategori Putra</p><p>    2.   Kagetori Putri</p><p><b>TEMA</b></p><p>    \"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"</p><p><b>SUB-TEMA</b></p><p>    1.    Peran Pola Asuh Islami Pada Era VUCA</p><p>    2.   Peran Kepribadian Muslim Pada Era VUCA</p><p>    3.   Kesehatan Mental Pada Era VUCA (Membangun Kepribadian Mutmainnah)</p><p>    4.   Peran Kepemimpinan Muslin Pada Era VUCA</p><p>    5.   Peran Pendidikan Islam Pada Era VUCA</p><p>    6.   Peran Dukungan Sosial Pada Era VUCA</p><p><b>KETENTUAN PESERTA</b></p><p>    1.    Peserta adalah mahasiswa/i perorangan dan kelompok</p><p>    2.   Setiap Universitas dapat mengirimkan maksimal 3 (tiga) peserta putra, dan 3 (tiga) orang peserta putri</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat dilihat pada buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-DAKWAH', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-34.png', 'event-banner-30.png', 'psy-dakwah', 'psy-dakwah', 'psy-dakwah'),
(30, 'PSY-POSTER', '<p><b>KATEGORI LOMBA</b></p><p>    1.    Kategori Individu</p><p>    2.   Kagetori Kelompok</p><p><b>TEMA</b></p><p>    \"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"</p><p><b>SUB-TEMA</b></p><p>    1.    Peran Pola Asuh Islami Pada Era VUCA</p><p>    2.   Peran Kepribadian Muslim Pada Era VUCA</p><p>    3.   Kesehatan Mental Pada Era VUCA (Membangun Kepribadian Mutmainnah)</p><p>    4.   Peran Kepemimpinan Muslin Pada Era VUCA</p><p>    5.   Peran Pendidikan Islam Pada Era VUCA</p><p>    6.   Peran Dukungan Sosial Pada Era VUCA</p><p><b>KETENTUAN PESERTA</b></p><p>    1.    Peserta adalah mahasiswa/i perorangan dan kelompok</p><p>    2.   Setiap Universitas dapat mengirimkan maksimal 3 (tiga) orang Pa/Pi untuk kategori individu,</p><p>          dan 3 (tiga) kelompok yang terdiri dari maksimal 3 (tiga) anggota Pa/Pi untuk kategori</p><p>          kelompok</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat dilihat pada buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-POSTER', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-30.png', 'event-banner-30.png', 'psy-poster', 'psy-poster', 'psy-poster'),
(31, 'PSY-QIRAAH', '<p><b>KATEGORI LOMBA</b></p><p>    1.    Kategori Putra</p><p>    2.   Kagetori Putri</p><p><b>TEMA</b></p><p>    \"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"</p><p><b>SUB-TEMA</b></p><p>    1.    Peran Pola Asuh Islami Pada Era VUCA</p><p>    2.   Peran Kepribadian Muslim Pada Era VUCA</p><p>    3.   Kesehatan Mental Pada Era VUCA (Membangun Kepribadian Mutmainnah)</p><p>    4.   Peran Kepemimpinan Muslin Pada Era VUCA</p><p>    5.   Peran Pendidikan Islam Pada Era VUCA</p><p>    6.   Peran Dukungan Sosial Pada Era VUCA</p><p><b>KETENTUAN PESERTA</b></p><p>    1.    Peserta adalah mahasiswa/i perorangan</p><p>    2.   Setiap Universitas dapat mengirimkan maksimal 3 (tiga) orang peserta putra, dan 3 (tiga) orang peserta putri</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat dilihat pada buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-QIRAAH', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-31.png', 'event-banner-30.png', 'psy-qiraah', 'psy-qiraah', 'psy-qiraah'),
(33, 'PSY-LAGU RELIGI', '<p><b>KETENTUAN UMUM</b></p><p>    1.    Peserta bersifat individual/perorangan, 1 (satu) orang Pa/Pi</p><p>    2.   Setiap universitas dapat mengirimkan maksimal 3 (tiga) orang peserta Pa/Pi</p><p><b>LAGU WAJIB</b></p><p>    Muhasabah Cinta - Edcoustic</p><p><b>LAGU PILIHAN</b></p><p>    1.    Rahmatan Lil Alamin - Maher Zain</p><p>    2.   Al-I\'tiraf - Abu Nawas</p><p>    3.   Ketika Tangan dan Kaki Berkata - Chrisye</p><p>    4.   InsyaAllah - Maher Zain feat Fadly]</p><p>    5.   Tak Kan Berpaling Dari-MU - Rossa</p><p>    6.   Al-Wabaa\' - Sabyan</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat dilihat melalui budu pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-LAGU RELIGI', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-33.png', 'event-banner-30.png', 'psy-lagu religi', 'psy-lagu religi', 'psy-lagu religi'),
(32, 'PSY-PHOTOGRAPHY', '<p><b>KETENTUAN UMUM</b></p><p>    1.    Peserta bersifat individual/perorangan, 1 (satu) orang Pa/Pi</p><p>    2.   Setiap Universitas dapat mengirimkan maksimal 3 (tiga) orang peserta Pa/Pi</p><p><b>TEMA</b></p><p>    \"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"</p><p><b>SUB-TEMA</b></p><p>    1.    Peran Pola Asuh Islami Pada Era VUCA</p><p>    2.   Peran Kepribadian Muslim Pada Era VUCA</p><p>    3.   Kesehatan Mental Pada Era VUCA (Membangun Kepribadian Mutmainnah)</p><p>    4.   Peran Kepemimpinan Muslin Pada Era VUCA</p><p>    5.   Peran Pendidikan Islam Pada Era VUCA</p><p>    6.   Peran Dukungan Sosial Pada Era VUCA</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat dilihat pada buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-PHOTOGRAPHY', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-32.png', 'event-banner-30.png', 'psy-photography', 'psy-photography', 'psy-photography'),
(35, 'PSY-TAHFIDZ JUZ 30', '<p><b>KATEGORI PERLOMBAAN</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Kategori Putra</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Kategori Putri</p><p><b>KETENTUAN PESERTA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Peserta adalah mahasiswa/i perorangan</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Setiap Universitas dapat mengirimkan maksimal 3 (tiga) orang peserta putra dan 3 (tiga)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orang peserta putri</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat dilihat melalui buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-TAHFIDZ JUZ 30', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-35.png', 'event-banner-30.png', 'psy-tahfidz juz 30', 'psy-tahfidz juz 30', 'psy-tahfidz juz 30'),
(36, 'PSY-TAHFIDZ JUZ 1-5', '<p><b>KATEGORI PERLOMBAAN</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Kategori Putra</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Kategori Putri</p><p><b>KETENTUAN PESERTA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Peserta adalah mahasiswa/i perorangan</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Setiap Universitas dapat mengirimkan maksimal 3 (tiga) orang peserta putra dan 3 (tiga)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orang peserta putri</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat dilihat melalui buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-TAHFIDZ JUZ 1-5', '2023-01-16', '2023-01-21', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-36.png', 'event-banner-30.png', 'psy-tahfidz juz 1-5', 'psy-tahfidz juz 1-5', 'psy-tahfidz juz 1-5'),
(38, 'PSY-ESAI', '<p><b>KATEGORI LOMBA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Kategori Individu</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Kategori Kelompok</p><p><b>TEMA</b></p><p>&nbsp;&nbsp;&nbsp;<i>&nbsp;\"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"</i></p><p><b>SUB-TEMA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Peran Pola Asuh Islami Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Peran Kepribadian Muslim Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp; &nbsp;Kesehatan Mental Pada Era VUCA (Membangun Kepribadian Mutmainnah)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp; &nbsp;Peran Kepemimpinan Muslim Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;5.&nbsp; &nbsp;Peran Pendidikan Islam Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;6.&nbsp; &nbsp;Peran Dukungan Sosial Pada Era VUCA</p><p><b>KETENTUAN PESERTA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Peserta adalah mahasiswa/i perorangan dan kelompok</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Setiap Universitas dapat mengirimkan maksimal 3 (tiga) orang Pa/Pi untuk kategori individu,</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan 3 (tiga) kelompok yang terdiri dari maksimal 3 (tiga) anggota Pa/Pi untuk kategori</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kelompok</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat melihat buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-ESAI', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-38.png', 'event-banner-37.png', 'psy-esai', 'psy-esai', 'psy-esai'),
(39, 'PSY-PROPOSAL', '<p><b>KATEGORI LOMBA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Kategori Individu</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Kategori Kelompok</p><p><b>TEMA</b></p><p>&nbsp;&nbsp;&nbsp;<i>&nbsp;\"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"</i></p><p><b>SUB-TEMA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Peran Pola Asuh Islami Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Peran Kepribadian Muslim Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp; &nbsp;Kesehatan Mental Pada Era VUCA (Membangun Kepribadian Mutmainnah)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp; &nbsp;Peran Kepemimpinan Muslim Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;5.&nbsp; &nbsp;Peran Pendidikan Islam Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;6.&nbsp; &nbsp;Peran Dukungan Sosial Pada Era VUCA</p><p><b>KETENTUAN PESERTA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Peserta adalah mahasiswa/i perorangan dan kelompok</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Setiap Universitas dapat mengirimkan maksimal 3 (tiga) orang Pa/Pi untuk kategori individu,</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan 3 (tiga) kelompok yang terdiri dari maksimal 3 (tiga) anggota Pa/Pi untuk kategori</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kelompok</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat melihat buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-PROPOSAL', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-39.png', 'event-banner-37.png', 'psy-proposal', 'psy-proposal', 'psy-proposal'),
(40, 'PSY-PAPER', '<p><b>KATEGORI LOMBA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Kategori Individu</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Kategori Kelompok</p><p><b>TEMA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;<i>\"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"</i></p><p><b>SUB-TEMA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Peran Pola Asuh Islami Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Peran Kepribadian Muslim Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp; &nbsp;Kesehatan Mental Pada Era VUCA (Membangun Kepribadian Mutmainnah)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp; &nbsp;Peran Kepemimpinan Muslim Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;5.&nbsp; &nbsp;Peran Pendidikan Islam Pada Era VUCA</p><p>&nbsp;&nbsp;&nbsp;&nbsp;6.&nbsp; &nbsp;Peran Dukungan Sosial Pada Era VUCA</p><p><b>KETENTUAN PESERTA</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Peserta adalah mahasiswa/i perorangan dan kelompok</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Setiap Universitas dapat mengirimkan maksimal 3 (tiga) orang Pa/Pi untuk kategori individu,</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dan 3 (tiga) kelompok yang terdiri dari maksimal 3 (tiga) anggota Pa/Pi untuk kategori</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kelompok</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat melihat buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-PAPER', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-40.png', 'event-banner-37.png', 'psy-paper', 'psy-paper', 'psy-paper'),
(43, 'PSY-HCMOTION', '<p><b>KETENTUAN UMUM</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Peserta bersifat kelompok, maksimal 3 (tiga) orang Pa/Pi untuk setiap kelompok</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Setiap Universitas dapat mengirimkan maksimal 3 (tiga) kelompok</p><p><br></p><p><b>*Untuk Informasi lebih lanjut dapat melihat buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-HCMOTION', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-43.png', 'event-banner-41.png', 'psy-hcmotion', 'psy-hcmotion', 'psy-hcmotion'),
(41, 'PSY-CERDAS CERMAT', '<p><b>KETENTUAN UMUM</b></p><p>    1.    Peserta bersifat kelompok terdiri dari 3 (tiga) orang Pa/Pi setiap kelompok</p><p>    2.   Setiap Universitas dapat mengirimkan maksimal 3 (tiga) kelompok</p><p><br></p><p><b>SISTEM LOMBA</b></p><p>    1.    Lomba akan dilaksanakan secara online menggunakan aplikasi Kuis Online</p><p>    2.   Pada setiap pertandingan, setiap anggota kelompok wajib mengerjakan paket soal.</p><p>    3.   Peserta wajib untuk mengumpulkan/sumbit jawaban sebelum waktu pengerjaan soal</p><p>          berakhir. Jika pengumpulan melebihi batas waktu yang ditentukan, maka soal yang</p><p>          sudah dikerjakan tidak dapat dinilai</p><p>    4.   Selanjutnya, waktu dan alur diatur berdasarkan mekanisme cerdas cermat yang telah ditetapkan</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat dilihat melalui buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-CERDAS CERMAT', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-41.png', 'event-banner-41.png', 'psy-cerdas cermat', 'psy-cerdas cermat', 'psy-cerdas cermat'),
(42, 'PSY-DEBAT', '<p><b>KETENTUAN UMUM</b></p><p>&nbsp;&nbsp;&nbsp;&nbsp;1.&nbsp; &nbsp; Lomba ini adalah kompetisi bersifat kelompok dengan masing-masing kelompok</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;beranggotakan 3 (tiga) orang anggota (debater)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;2.&nbsp; &nbsp;Anggota kelompok tidak boleh diganti dengan alasan apapun sejak dimulainya lomba</p><p>&nbsp;&nbsp;&nbsp;&nbsp;3.&nbsp; &nbsp;Setiap Universitas dapat mengirimkan maksimal 3 (tiga) kelompok</p><p>&nbsp;&nbsp;&nbsp;&nbsp;4.&nbsp; &nbsp;Pelaksanaan debat bersifat daring menggunakan aplikasi <i>zoom</i>. Para peserta disarankan</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;untuk <i>sign in zoom</i> melalui komputer atau laptop, bukan melalui smartphone</p><p>&nbsp;&nbsp;&nbsp;&nbsp;5.&nbsp; &nbsp;Pelaksanaan debat mengadopsi sistem Parlemen Asia. Pada setiap sesi terdapat 2 (dua)</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;kelompok yang bertanding yang berperan sebagai <i>Government</i> dan <i>Opposition</i></p><p>&nbsp;&nbsp;&nbsp;&nbsp;6.&nbsp; &nbsp;Mosi yang akan diberikan adalah <i>Impromtu Motion </i>atau pemberitahuan mosi secara</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mendadak sesaat sebelum perlombaan debat dimulai.&nbsp;</p><p><br></p><p><b>*Untuk informasi lebih lanjut dapat melihat melalui buku pedoman pelaksanaan dan petunjuk teknis</b></p>', 'PSY-DEBAT', '2023-01-16', '2023-02-28', 'Fakultas Psikologi UIN Sunan Gunung Djati Bandung', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15842.417175615008!2d107.7049553!3d-6.9378057!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5af3cab34400f6d0!2sUIN%20Sunan%20Gunung%20Djati%20Bandung%20Kampus%20II!5e0!3m2!1sid!2sid!4v1674179174363!5m2!1sid!2sid\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade\"></iframe>', 'event-42.png', 'event-banner-41.png', 'psy-debat', 'psy-debat', 'psy-debat');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_faq`
--

CREATE TABLE `tbl_faq` (
  `faq_id` int NOT NULL,
  `faq_title` varchar(255) NOT NULL,
  `faq_content` text NOT NULL,
  `show_on_home` varchar(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_faq`
--

INSERT INTO `tbl_faq` (`faq_id`, `faq_title`, `faq_content`, `show_on_home`) VALUES
(8, 'KETENTUAN UMUM KEIKUTSERTAAN', '<p>1.&nbsp;&nbsp;&nbsp;&nbsp;Peserta Harus merupakan mahasiswa aktif di salah satu Fakultas Psikologi UIN Sunan Gunung DJati Bandung, UIN Raden Fatah Palembang,</p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Universitas Islam Riau, UIN Suska Riau, UIN Imam Bonjol Padang, Universitas Muhammadiyah Bandung, dan Universitas Islam Bandung</p><p>2.&nbsp;&nbsp;&nbsp;&nbsp;Peserta duduk pada Semster 2- 6 untuk Bidang ilmiah, dan Semester 2-8 untuk Bidang Non-Ilmiah</p><p>3.&nbsp;&nbsp;&nbsp;&nbsp;Satu Peserta dapat mengikuti cabang lomba maksimal 2 (dua) nomor Perlombaan</p><p>4.&nbsp;&nbsp;&nbsp;&nbsp;Setiap Perguruan tinggi dapat mengirimkan tiga peserta/tim pada setiap kategori cabang perlombaan.</p><p>5.&nbsp;&nbsp;&nbsp;&nbsp;Jika ada peserta yang melanggar,maka panitia berhak mengambil tindakan Peringatan</p>', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feature`
--

CREATE TABLE `tbl_feature` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feature`
--

INSERT INTO `tbl_feature` (`id`, `name`, `content`, `icon`) VALUES
(1, 'ECONOMIC POLICY', 'Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an in dolore.', 'fa fa-globe'),
(2, 'BUSINESS MODEL', 'Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno.', 'fa fa-file-text'),
(3, 'SECURITY PROTECTION', 'Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no.', 'fa fa-clock-o'),
(4, 'NICE COMMUNICATION', 'Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit.', 'fa fa-shield'),
(5, 'DIGITAL STRATEGY', 'Vis constituto complectitur an, modo falli eirmod ea has. Ex vis indoctum scriptorem appellantur.', 'fa fa-commenting'),
(6, 'INTERNAL CONSULTING', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam.', 'fa fa-bullhorn');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `id` int NOT NULL,
  `name` text NOT NULL,
  `value` text CHARACTER SET utf8mb3 COLLATE utf8mb3_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`id`, `name`, `value`) VALUES
(1, 'HOME', 'Home'),
(2, 'ABOUT', 'About'),
(3, 'TEAM', 'DOWNLOAD'),
(4, 'PAGE', 'Page'),
(5, 'EVENT', 'Event'),
(6, 'PHOTO_GALLERY', 'Photo Gallery'),
(7, 'TESTIMONIAL', 'Registration'),
(8, 'FAQ', 'Regulation'),
(9, 'PRICING_TABLE', 'Pricing Table'),
(10, 'SERVICE', 'Category'),
(11, 'PORTFOLIO', 'Portfolio'),
(12, 'NEWS', 'News'),
(13, 'CONTACT', 'Contact'),
(14, 'SEARCH_FOR', 'Search for...'),
(15, 'READ_MORE', 'Read More'),
(16, 'SUBMIT', 'Submit'),
(17, 'FIRST_NAME', 'First Name'),
(18, 'LAST_NAME', 'Last Name'),
(19, 'PHONE_NUMBER', 'HP'),
(20, 'EMAIL_ADDRESS', 'Email Address'),
(21, 'ADDRESS', 'Address'),
(22, 'MESSAGE', 'Message'),
(23, 'START_DATE', 'Start Date'),
(24, 'END_DATE', 'End Date'),
(25, 'EVENT_START_DATE', 'Event Start Date'),
(26, 'EVENT_END_DATE', 'Event End Date'),
(27, 'EVENT_LOCATION_MAP', 'Event Location Map'),
(28, 'SHARE_THIS_EVENT', 'Share This Event'),
(29, 'SHARE_THIS_NEWS', 'Share This News'),
(30, 'COMMENT', 'Comment'),
(31, 'NAME', 'Name'),
(32, 'ALL', 'All'),
(33, 'PROJECT_OVERVIEW', 'Project Overview'),
(34, 'CATEGORY', 'Category'),
(35, 'CLIENT_NAME', 'Client Name'),
(36, 'CLIENT_COMPANY_NAME', 'Client Company Name'),
(37, 'PROJECT_START_DATE', 'Project Start Date'),
(38, 'PROJECT_END_DATE', 'Project End Date'),
(39, 'CLIENT_COMMENT', 'Client Comment'),
(40, 'NEWS_DATE', 'News Date'),
(41, 'RECENT_PORTFOLIO', 'Recent Portfolio'),
(42, 'RECENT_PORTFOLIO_SUBTITLE', 'See all our works that we do for our clients'),
(43, 'CONTACT_FORM', 'Contact Form'),
(44, 'SEND_MESSAGE', 'Send Message'),
(45, 'SUBJECT', 'Subject'),
(46, 'NO_RESULT_FOUND', 'No Result is Found');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `news_content_short` text NOT NULL,
  `news_date` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `banner` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `comment` varchar(3) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `news_content`, `news_content_short`, `news_date`, `photo`, `banner`, `category_id`, `comment`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Rapat Persiapan IPCOM IV', '<p>Pada hari ini tanggal 19 Januari Tim IPCOM IV sedang melakukan Rapat persiapan lanjutan kegiatan IPCOM IV dimana IPCOM IV ini di laksanakan Fakultas Psikologi UIN BANDUNG.<br></p>', 'Pada hari ini tanggal 19 Januari Tim IPCOM IV sedang melakukan Rapat persiapan lanjutan kegiatan IPCOM IV dimana IPCOM IV ini di laksanakan Fakultas Psikologi UIN BANDUNG.', '2023-01-19', 'news-1.jpeg', 'news-banner-1.png', 5, 'On', 'Rapat Persiapan IPCOM IV', '', ''),
(6, 'Perlombaan IPCOM IV 2023', '<p>Perlombaan IPCOM IV 2023 Fakultas Psikologi UIN Sunan Gunung Djati Bandung terdapat 6 (enam) lomba untuk cabang ilmiah, dan 8 (delapan) lomba untuk cabang non-ilmiah.</p><p><br></p><p><b>Cabang Ilmiah</b></p><p>1.    Psy-Paper</p><p>2.   Psy-Esai</p><p>3.   Psy-Proposal</p><p>4.   Psy-HCMotion</p><p>5.   Psy-Debat</p><p>6.   Psy-Cerdas Cermat</p><p><br></p><p><b>Cabang Non-Ilmiah</b></p><p>1.    Psy-Dakwah</p><p>2.   Psy-Qira\'ah</p><p>3.   Psy-Lagu Religi</p><p>4.   Psy-Tahfidz Juz 30</p><p>5.   Psy-Tahfidz 5 Juz (Juz 1-5)</p><p>6.   Psy-Poster</p><p>7.   Psy-Photography</p><p>8.   Psy-Cerpen Islami</p><p><br></p><p>Tema yang diusung pada IPCOM IV 2023, yaitu:</p><p><b><i>\"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"</i></b></p><p><br></p><p>Tagline yang diusung pada IPCOM IV 2023, yaitu:</p><p><b><i>\"Bersama Kita Bisa, Let\'s Grab Your Victory\"</i></b></p>', 'Perlombaan IPCOM IV 2023 Fakultas Psikologi UIN Sunan Gunung Djati Bandung terdapat 6 (enam) lomba untuk cabang ilmiah, dan 8 (delapan) lomba untuk cabang non-ilmiah', '2023-01-20', 'news-6.png', 'news-banner-6.png', 2, 'On', 'Perlombaan IPCOM IV 2023', '', ''),
(7, 'PSYCHOLOGY NEWS: Persiapan IPCOM IV 2023', '<p>[PSYCHOLOGY NEWS: Persiapan IPCOM IV 2023, Panitia Pelaksana Mengadakan Pertemuan dengan Staff Fakultas Psikologi Universitas Islam Riau]\r\n<br class=\"Apple-interchange-newline\"></p><p><br></p><p>Dalam rangka persiapan menuju IPCOM IV 2023 yang akan dilaksanakan oleh Fakultas Psikologi UIN Sunan Gunung Djati Bandung, sejumlah Panitia IPCOM IV melakukan agenda pertemuan dengan Bambang Kamajaya Barus, SP yang merupakan Staff Perpustakaan Fakultas Psikologi Universitas Islam Riau pada Jum\'at (20/1/2023). </p><p><br></p><p>Pertemuan ini dilaksanakan secara online dan membahas tentang tata cara pengoperasian website IPCOM yang akan digunakan selama kompetisi berlangsung. </p><p><br></p><p>Kegiatan tersebut dihadiri oleh Rika Rahmawati, M.Psi, Psikolog. selaku ketua pelaksana, Gugun Gumilar, S.T. selaku ketua divisi IT, Hilmi Agni Ruhiyat, M.Psi., Suci Ramdhany Darmawan, S.Psi., dan perwakilan mahasiswa yang merupakan bagian dari panitia IPCOM IV 2023.</p>', '[PSYCHOLOGY NEWS: Persiapan IPCOM IV 2023, Panitia Pelaksana Mengadakan Pertemuan dengan Staff Fakultas Psikologi Universitas Islam Riau]', '2023-01-20', 'news-7.jpeg', 'news-banner-7.jpeg', 5, 'On', '', '', ''),
(8, 'PSYCHOLOGY NEWS: Persiapan IPCOM IV 2023', '<div>Dalam rangka pemantapan persiapan IPCOM IV 2023 yang akan dilaksanakan oleh Fakultas Psikologi UIN Sunan Gunung Djati Bandung, sejumlah Panitia IPCOM IV melakukan agenda pertemuan dengan Bambang Kamajaya Barus, SP yang merupakan Staff Perpustakaan Fakultas Psikologi Universitas Islam Riau pada Jum\'at (27/1/2023). <br></div><div><br></div><div>Pertemuan ini dilaksanakan secara online dan membahas perihal website IPCOM yang perlu diperbaiki dan membahas tugas divisi IT Panitia IPCOM IV 2023. </div><div><br></div><div>Kegiatan tersebut dihadiri oleh Gugun Gumilar, S.T. selaku ketua divisi IT, Hilmi Agni Ruhiyat, M.Psi., dan perwakilan mahasiswa yang merupakan bagian dari panitia IPCOM IV 2023.</div>', '[PSYCHOLOGY NEWS: Persiapan IPCOM IV 2023, Pertemuan dengan Staff Fakultas Psikologi Universitas Islam Riau Membahas Tata Kelola Website IPCOM dan Tugas Divisi IT]', '2023-01-28', 'news-8.png', 'news-banner-8.png', 5, 'On', '', '', ''),
(9, 'PSYCHOLOGY NEWS: Persiapan IPCOM IV 2023', '<p>Sedang berlangsung pada hari ini (Rabu, 17 Februari 2023) kegiatan simulasi lomba IPCOM IV untuk lomba Psy-Paper, Psy-Essai, Psy-HC Motion, Psy-Proposal, Psy-Cerdas Cermat, Psy-Debat, Psy-Tahfidz Juz 30, dan Psy-Tahfidz 5 Juz (Juz 1-5). </p><p><br></p><p>Kegiatan ini dilaksanakan secara hybrid di Ruang Penjaminan Mutu Fakultas Psikologi UIN Sunan Gunung Djati Bandung dan online melalui Zoom Meeting dengan dihadiri Panitia Pelaksana dan Wakil Dekan III Dr. H. Irfan Fahmi, S.Th.I., M.Psi, Psikolog.</p>', 'Simulasi Lomba IPCOM IV 2023', '2023-02-22', 'news-9.jpeg', 'news-banner-9.jpeg', 2, 'On', '', '', ''),
(10, 'PSYCHOLOGY NEWS: Semangat Menyukseskan IPCOM IV 2023, Dewan Hakim IPCOM Melaksanakan Agenda Pertemuan', '<p>Kompetisi IPCOM IV 2023 telah membuka pendaftaran gelombang pertama pada bulan Januari, dan pendaftaran gelombang ke-2 masih berlangsung sampai hari ini. Dalam menyempurnakan jalannya kompetisi tersebut, sejumlah Dewan Hakim IPCOM IV mengadakan pertemuan pada Senin (27/2/2023). <br></p><p><br></p><p>Pertemuan ini dilaksanakan secara online melalui Zoom Meeting dan membahas perkembangan agenda IPCOM IV serta perpanjangan waktu untuk pendaftaran peserta lomba.</p><p><br></p><p>Pertemuan tersebut dihadiri oleh Dr. Agus Abdul Rahman, M.Psi., Psikolog., CIPP selaku Dekan Fakultas Psikologi UIN Sunan Gunung Djati Bandung, Dr. H. Kusnadi, M.Pd selaku Dekan Fakultas Psikologi UIN Sultan Syarif Kasim Riau, Yanwar Arief, M.Psi., Psikolog selaku Dekan Fakultas Psikologi Universitas Islam Riau, dan Dr. Reza Fahmi, M.A selaku Kepala Program Studi Psikologi Islam Fakultas Ushuluddin UIN Imam Bonjol Padang.</p><p><br></p><p>Kemudian dihadiri juga oleh Dr. H. Irfan Fahmi, S.Th.I., M.Psi, Psikolog., CIPP selaku Pengarah Substansi Panitia Pelaksana IPCOM IV, Rika Rahmawati, M.Psi, Psikolog selaku Ketua Panitia IPCOM IV, dan sejumlah panitia pelaksana IPCOM IV.</p>', 'Dewan Hakim IPCOM Melaksanakan Agenda Pertemuan', '2023-02-28', 'news-10.png', 'news-banner-10.png', 2, 'On', '', '', ''),
(11, 'PSYCHOLOGY NEWS: Perpanjangan Pendaftaran IPCOM IV 2023, Dibuka untuk Gelombang 3', '<p>IPCOM IV 2023 membuka perpanjangan pendaftaran untuk gelombang 3 mulai 1 Maret 2023. Sebelumnya pendaftaran gelombang 1 dan 2 telah dilaksanakan di bulan Januari dan Februari.&nbsp;<br></p><p><br></p><p>Teknis perlombaan ini terbagi menjadi 3 modus daring. Adapun modus daring 1 untuk lomba Psy-Debat, Psy-Cerdas Cermat, Psy-Tahfidz Juz 30, dan Psy-Tahfidz 5 Juz (Juz 1-5). Modus daring 1 dilaksanakan pada 1-10 Maret 2023 secara daring via zoom meeting, mulai babak penyisihan sampai dengan babak final.</p><p><br></p><p>Selanjutnya untuk modus daring 2 yang dilaksanakan pada 1-25 Maret 2023, dilakukan oleh peserta dengan cara mengirimkan karya kepada panitia untuk dinilai oleh dewan juri, dan hanya sejumlah 6 Finalis yang akan diundang untuk presentasi dan tanya-jawab via zoom meeting pada babak final. Adapun kompetisi yang menggunakan modus ini adalah Psy-Esai, Psy-Paper, Psy-Proposal, dan Psy-HCMotion.</p><p><br></p><p>Selain itu pada lomba Psy-Qira\'ah, Psy-Dakwah, Psy-Lagu Religi, Psy-Poster, Psy-Photography, dan Psy-Cerpen Islami menggunakan modus daring 3 dengan cara peserta mengirimkan naskah, foto, dan video kepada panitia, kemudian video-video tersebut akan dinilai oleh dewan juri. Teknis pelaksanaan modus 3 ini akan berlangsung pada 1-25 Maret 2023.</p>', 'IPCOM IV 2023 membuka perpanjangan pendaftaran untuk gelombang 3 mulai 1 Maret 2023. Sebelumnya pendaftaran gelombang 1 dan 2 telah dilaksanakan di bulan Januari dan Februari.', '2023-03-07', 'news-11.jpeg', 'news-banner-11.jpeg', 2, 'On', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_about`
--

CREATE TABLE `tbl_page_about` (
  `id` int NOT NULL,
  `about_heading` varchar(255) NOT NULL,
  `about_content` text NOT NULL,
  `mt_about` varchar(255) NOT NULL,
  `mk_about` text NOT NULL,
  `md_about` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_about`
--

INSERT INTO `tbl_page_about` (`id`, `about_heading`, `about_content`, `mt_about`, `mk_about`, `md_about`) VALUES
(1, 'ABOUT', '<p class=\"MsoNormal\" style=\"text-align: start; text-indent: 0px; margin: 0cm 0.3pt 0.0001pt 0cm; line-height: 150%;\"><span style=\"text-indent: 36pt; font-size: 24px;\"><font color=\"#4172a5\">Pengantar</font></span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-indent:36.0pt;line-height:\r\n150%;text-autospace:none\"><span lang=\"MS\" style=\"font-size:12.0pt;line-height:\r\n150%;font-family:\" arial=\"\" mt\",sans-serif;mso-fareast-font-family:\"dejavu=\"\" serif\";=\"\" mso-bidi-font-family:\"times=\"\" new=\"\" roman\";mso-ansi-language:ms\"=\"\">Puji<span style=\"letter-spacing:-.6pt\"> </span>syukur<span style=\"letter-spacing:-.65pt\">\r\n</span>kami<span style=\"letter-spacing:-.65pt\"> </span>panjatkan<span style=\"letter-spacing:-.6pt\"> </span>kepada<span style=\"letter-spacing:-.65pt\">\r\n</span>Allah<span style=\"letter-spacing:-.65pt\"> </span>SWT<span style=\"letter-spacing:-.6pt\"> </span>karena<span style=\"letter-spacing:-.65pt\">\r\n</span>dengan<span style=\"letter-spacing:-.65pt\"> </span>rahmat<span style=\"letter-spacing:-.6pt\"> </span>dan hidayah-Nyalah petunjuk teknis </span><b><span lang=\"MS\" style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\";=\"\" mso-ansi-language:ms\"=\"\">Islamic Psychology Competition</span></b><b><span lang=\"MS\" style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"dejavu=\"\" serif\";mso-bidi-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-ansi-language:ms\"=\"\">&nbsp; (IPCOM) IV 2023</span></b><span lang=\"MS\" style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"dejavu=\"\" serif\";mso-bidi-font-family:\"times=\"\" new=\"\" roman\";=\"\" mso-ansi-language:ms\"=\"\"> dapat terselesaikan dengan baik. Pelaksanaan IPCOM IV\r\ntahun 2023 ini bertempat di Universitas Islam Negeri Sunan Gunung Djati\r\nBandung. <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-indent:36.0pt;line-height:\r\n150%;text-autospace:none\"><span lang=\"MS\" style=\"font-size:12.0pt;line-height:\r\n150%;font-family:\" arial=\"\" mt\",sans-serif;mso-fareast-font-family:\"dejavu=\"\" serif\";=\"\" mso-bidi-font-family:\"times=\"\" new=\"\" roman\";mso-ansi-language:ms\"=\"\">Tema yang diusung\r\ndalam IPCOM IV ini mengkaitkan Psikologi Islam dalam kehidupan yang berkembang\r\ndalam konteks <b>VUCA</b> (<b>Volatility, Uncertainty, Complexity and Ambiguity</b>).\r\nSelanjutnya tema tersebut mewarnai konsep kompetisi yang difasilitasi dalam\r\nberbagai cabang perlombaan. Kami menyajikan beberapa cabang perlombaan sebagai\r\nwadah ekspresi mahasiswa psikologi generasi masa kini untuk mengekspresikan\r\nide-ide dan menyalurkan minat bakat yang dimiliki.<o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-indent:36.0pt;line-height:\r\n150%;text-autospace:none\"><span lang=\"MS\" style=\"font-size:12.0pt;line-height:\r\n150%;font-family:\" arial=\"\" mt\",sans-serif;mso-fareast-font-family:\"dejavu=\"\" serif\";=\"\" mso-bidi-font-family:\"times=\"\" new=\"\" roman\";mso-ansi-language:ms\"=\"\">Berbagai cabang\r\nperlombaan pada IPCOM IV ini disajikan dalam dua konteks yaitu ilmiah dan non\r\nilmiah sebagai maksud memberikan kesempatan melalui pilihan yang beragam bagi\r\nminat dan bakat yang sangat berwarna pada mahasiswa. Menstimulasi jiwa\r\nkompetitif dalam persaingan yang sehat dan sportif menjadi filosofi\r\nterselenggaranya agenda IPCOM IV ini tanpa mengesampingkan makna terdalam\r\nsilaturahim persaudaraan lembaga-lembaga yang mengusung kesuksesannya. <o:p></o:p></span></p><p class=\"MsoNormal\" style=\"text-align:justify;text-indent:36.0pt;line-height:\r\n150%;text-autospace:none\"><span lang=\"MS\" style=\"font-size:12.0pt;line-height:\r\n150%;font-family:\" arial=\"\" mt\",sans-serif;mso-fareast-font-family:\"dejavu=\"\" serif\";=\"\" mso-bidi-font-family:\"times=\"\" new=\"\" roman\";mso-ansi-language:ms\"=\"\">Kami berharap\r\npetunjuk teknis IPCOM IV 2023 ini dapat menjadi acuan dan pedoman oleh siapapun\r\nyang terlibat dalam kegiatan ini. Semoga Allah SWT meridhoi niat dan kegiatan\r\nyang akan kita laksanakan dengan tujuan mengembangkan potensi mahasiswa</span><span lang=\"EN-ID\" style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"times=\"\" new=\"\" roman\";mso-bidi-font-family:\"times=\"\" roman\"\"=\"\">.\r\n</span><span lang=\"EN-ID\" style=\"font-size:12.0pt;line-height:150%;font-family:\r\n\" arial=\"\" mt\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\"><o:p></o:p></span></p><p class=\"MsoNormal\" style=\"margin: 0cm 0.3pt 0.0001pt 0cm; line-height: 150%;\">\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoNormal\" style=\"text-align:justify;line-height:150%;text-autospace:\r\nnone\"><span style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-bidi-font-family:\"times=\"\" new=\"\" roman\";mso-ansi-language:en-us\"=\"\">Kita Bisa\r\nKarena Bersama, Let\'s Grab Your Victory.</span><span lang=\"EN-ID\" style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\"><o:p></o:p></span></p><h3>Tujuan</h3><p><br></p><p class=\"MsoListParagraphCxSpFirst\" style=\"margin: 0cm 7.05pt 8pt 25px; text-align: justify; text-indent: -18pt; line-height: 150%;\"><!--[if !supportLists]--><span lang=\"EN-ID\" style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"arial=\"\" mt\";mso-bidi-font-family:\"arial=\"\" mt\"\"=\"\">1.</span><span lang=\"EN-ID\" style=\"line-height: 150%;\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"arial=\"\" mt\";mso-bidi-font-family:\"arial=\"\" mt\"\"=\"\"><font size=\"1\">&nbsp;</font></span><span lang=\"EN-ID\" style=\"font-size:12.0pt;\r\nline-height:150%;font-family:\" arial=\"\" mt\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\">Memperteguh\r\nsemangat kebangsaan melalui seni dan riset guna menghasilkan anak bangsa yang\r\nmengedepankan perdamaian dan persatuan bangsa.</span><b><span lang=\"EN-ID\" style=\"font-size:14.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\"><o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm 7.05pt 8pt 25px; text-align: justify; text-indent: -18pt; line-height: 150%;\"><!--[if !supportLists]--><span lang=\"EN-ID\" style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"arial=\"\" mt\";mso-bidi-font-family:\"arial=\"\" mt\"\"=\"\">2.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;</span></span><span lang=\"EN-ID\" style=\"font-size:12.0pt;\r\nline-height:150%;font-family:\" arial=\"\" mt\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\">Mempererat\r\nsilaturahim antar mahasiswa UIN Sunan Gunung Djati, UIN Raden Fatah, Universitas\r\nIslam Riau, UIN Suska Riau, UIN Imam Bonjol Padang, Universitas Muhammadiyah\r\nBandung, dan Universitas Islam Bandung, serta memberikan kontribusi untuk\r\nkemajuan prestasi keilmuan, seni dan riset guna menghasilkan calon penerus\r\nkepemimpinan bangsa yang berdedikasi tinggi dengan segenap potensi dan\r\nketerampilan.</span><b><span lang=\"EN-ID\" style=\"font-size:14.0pt;line-height:\r\n150%;font-family:\" arial=\"\" mt\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\"><o:p></o:p></span></b></p><p class=\"MsoListParagraphCxSpMiddle\" style=\"margin: 0cm 7.05pt 8pt 25px; text-align: justify; text-indent: -18pt; line-height: 150%;\"><!--[if !supportLists]--><span lang=\"EN-ID\" style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"arial=\"\" mt\";mso-bidi-font-family:\"arial=\"\" mt\"\"=\"\">3.</span><span lang=\"EN-ID\" style=\"line-height: 150%;\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"arial=\"\" mt\";mso-bidi-font-family:\"arial=\"\" mt\"\"=\"\"><font size=\"1\">&nbsp;&nbsp;</font></span><span lang=\"EN-ID\" style=\"font-size:12.0pt;\r\nline-height:150%;font-family:\" arial=\"\" mt\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\">Meningkatkan\r\nkesehatan jasmani, disiplin, kreatifitas dan sportivitas mahasiswa UIN Sunan\r\nGunung Djati, UIN Raden Fatah, Universitas Islam Riau, UIN Suska Riau, UIN Imam\r\nBonjol Padang, Universitas Muhammadiyah Bandung, dan Universitas Islam Bandung\r\nagar menjadi manusia Indonesia yang berkarakter dan berbudaya</span><b><span lang=\"EN-ID\" style=\"font-size:14.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\"><o:p></o:p></span></b></p><p>\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"MsoListParagraphCxSpLast\" style=\"margin: 0cm 7.05pt 8pt 25px; text-align: justify; text-indent: -18pt; line-height: 150%;\"><!--[if !supportLists]--><span lang=\"EN-ID\" style=\"font-size:12.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-fareast-font-family:\"arial=\"\" mt\";mso-bidi-font-family:\"arial=\"\" mt\"\"=\"\">4.<span style=\"font-variant-numeric: normal; font-variant-east-asian: normal; font-stretch: normal; font-size: 7pt; line-height: normal; font-family: \" times=\"\" new=\"\" roman\";\"=\"\">&nbsp;&nbsp;&nbsp;\r\n</span></span><!--[endif]--><span lang=\"EN-ID\" style=\"font-size:12.0pt;\r\nline-height:150%;font-family:\" arial=\"\" mt\",sans-serif;mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\">Meningkatkan\r\nprestasi nasional melalui seni dan riset.</span></p><p style=\"margin: 0cm 7.05pt 8pt 75px; text-align: justify; text-indent: -18pt; line-height: 150%;\"><br></p><p style=\"margin: 0cm 7.05pt 8pt 75px; text-align: justify; text-indent: -18pt; line-height: 150%;\"><b><span lang=\"EN-ID\" style=\"font-size:14.0pt;line-height:150%;font-family:\" arial=\"\" mt\",sans-serif;=\"\" mso-bidi-font-family:\"times=\"\" new=\"\" roman\"\"=\"\"><o:p></o:p></span></b></p><p class=\"MsoNormal\" style=\"margin-top:0cm;margin-right:.3pt;margin-bottom:0cm;\r\nmargin-left:0cm;margin-bottom:.0001pt;text-align:justify;text-indent:36.0pt;\r\nline-height:150%\"><o:p></o:p></p>\r\n', 'ABOUT', 'ISLAMIC PSYCHOLOGY KOMPETITION', 'ISLAMIC PSYCHOLOGY KOMPETITION');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_contact`
--

CREATE TABLE `tbl_page_contact` (
  `id` int NOT NULL,
  `contact_heading` varchar(255) NOT NULL,
  `contact_address` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_phone` text NOT NULL,
  `contact_map` text NOT NULL,
  `mt_contact` varchar(255) NOT NULL,
  `mk_contact` text NOT NULL,
  `md_contact` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_contact`
--

INSERT INTO `tbl_page_contact` (`id`, `contact_heading`, `contact_address`, `contact_email`, `contact_phone`, `contact_map`, `mt_contact`, `mk_contact`, `md_contact`) VALUES
(1, 'Contact', 'Alamat : Jln. A.H. Nasution No. 105 Cibiru Bandung 40614', 'ipcom@uinsgd.ac.id', 'CP : Hilmi Agni (089523906411) & Parulima (089609644597)', '', 'Contact', 'Contact', 'Contact');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_event`
--

CREATE TABLE `tbl_page_event` (
  `id` int NOT NULL,
  `event_heading` varchar(255) NOT NULL,
  `mt_event` varchar(255) NOT NULL,
  `mk_event` text NOT NULL,
  `md_event` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_event`
--

INSERT INTO `tbl_page_event` (`id`, `event_heading`, `mt_event`, `mk_event`, `md_event`) VALUES
(1, 'Cabang Perlombaan', 'Cabang Perlombaan', 'Cabang Perlombaan', 'Cabang Perlombaan');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_faq`
--

CREATE TABLE `tbl_page_faq` (
  `id` int NOT NULL,
  `faq_heading` varchar(255) NOT NULL,
  `mt_faq` varchar(255) NOT NULL,
  `mk_faq` text NOT NULL,
  `md_faq` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_faq`
--

INSERT INTO `tbl_page_faq` (`id`, `faq_heading`, `mt_faq`, `mk_faq`, `md_faq`) VALUES
(1, 'REGULATION', 'REGULATION', 'REGULATION', 'REGULATION');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_home`
--

CREATE TABLE `tbl_page_home` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL,
  `home_welcome_title` varchar(255) NOT NULL,
  `home_welcome_subtitle` varchar(255) NOT NULL,
  `home_welcome_text` text NOT NULL,
  `home_welcome_video` text NOT NULL,
  `home_welcome_pbar1_text` varchar(255) NOT NULL,
  `home_welcome_pbar1_value` varchar(10) NOT NULL,
  `home_welcome_pbar2_text` varchar(255) NOT NULL,
  `home_welcome_pbar2_value` varchar(10) NOT NULL,
  `home_welcome_pbar3_text` varchar(255) NOT NULL,
  `home_welcome_pbar3_value` varchar(10) NOT NULL,
  `home_welcome_pbar4_text` varchar(255) NOT NULL,
  `home_welcome_pbar4_value` varchar(10) NOT NULL,
  `home_welcome_pbar5_text` varchar(255) NOT NULL,
  `home_welcome_pbar5_value` varchar(10) NOT NULL,
  `home_welcome_status` varchar(5) NOT NULL,
  `home_welcome_video_bg` varchar(255) NOT NULL,
  `home_why_choose_title` varchar(255) NOT NULL,
  `home_why_choose_subtitle` varchar(255) NOT NULL,
  `home_why_choose_status` varchar(5) NOT NULL,
  `home_feature_title` varchar(255) NOT NULL,
  `home_feature_subtitle` varchar(255) NOT NULL,
  `home_feature_status` varchar(5) NOT NULL,
  `home_service_title` varchar(255) NOT NULL,
  `home_service_subtitle` varchar(255) NOT NULL,
  `home_service_status` varchar(5) NOT NULL,
  `counter_1_title` varchar(255) NOT NULL,
  `counter_1_value` varchar(10) NOT NULL,
  `counter_1_icon` varchar(50) NOT NULL,
  `counter_2_title` varchar(255) NOT NULL,
  `counter_2_value` varchar(10) NOT NULL,
  `counter_2_icon` varchar(50) NOT NULL,
  `counter_3_title` varchar(255) NOT NULL,
  `counter_3_value` varchar(10) NOT NULL,
  `counter_3_icon` varchar(50) NOT NULL,
  `counter_4_title` varchar(255) NOT NULL,
  `counter_4_value` varchar(10) NOT NULL,
  `counter_4_icon` varchar(50) NOT NULL,
  `counter_photo` varchar(255) NOT NULL,
  `counter_status` varchar(10) NOT NULL,
  `home_portfolio_title` varchar(255) NOT NULL,
  `home_portfolio_subtitle` varchar(255) NOT NULL,
  `home_portfolio_status` varchar(5) NOT NULL,
  `home_booking_form_title` varchar(255) NOT NULL,
  `home_booking_faq_title` varchar(255) NOT NULL,
  `home_booking_status` varchar(5) NOT NULL,
  `home_booking_photo` varchar(255) NOT NULL,
  `home_team_title` varchar(255) NOT NULL,
  `home_team_subtitle` varchar(255) NOT NULL,
  `home_team_status` varchar(255) NOT NULL,
  `home_ptable_title` varchar(255) NOT NULL,
  `home_ptable_subtitle` varchar(255) NOT NULL,
  `home_ptable_status` varchar(255) NOT NULL,
  `home_testimonial_title` varchar(255) NOT NULL,
  `home_testimonial_subtitle` varchar(255) NOT NULL,
  `home_testimonial_photo` varchar(255) NOT NULL,
  `home_testimonial_status` varchar(255) NOT NULL,
  `home_blog_title` varchar(255) NOT NULL,
  `home_blog_subtitle` varchar(255) NOT NULL,
  `home_blog_item` varchar(255) NOT NULL,
  `home_blog_status` varchar(255) NOT NULL,
  `home_cta_text` varchar(255) NOT NULL,
  `home_cta_button_text` varchar(255) NOT NULL,
  `home_cta_button_url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_home`
--

INSERT INTO `tbl_page_home` (`id`, `title`, `meta_keyword`, `meta_description`, `home_welcome_title`, `home_welcome_subtitle`, `home_welcome_text`, `home_welcome_video`, `home_welcome_pbar1_text`, `home_welcome_pbar1_value`, `home_welcome_pbar2_text`, `home_welcome_pbar2_value`, `home_welcome_pbar3_text`, `home_welcome_pbar3_value`, `home_welcome_pbar4_text`, `home_welcome_pbar4_value`, `home_welcome_pbar5_text`, `home_welcome_pbar5_value`, `home_welcome_status`, `home_welcome_video_bg`, `home_why_choose_title`, `home_why_choose_subtitle`, `home_why_choose_status`, `home_feature_title`, `home_feature_subtitle`, `home_feature_status`, `home_service_title`, `home_service_subtitle`, `home_service_status`, `counter_1_title`, `counter_1_value`, `counter_1_icon`, `counter_2_title`, `counter_2_value`, `counter_2_icon`, `counter_3_title`, `counter_3_value`, `counter_3_icon`, `counter_4_title`, `counter_4_value`, `counter_4_icon`, `counter_photo`, `counter_status`, `home_portfolio_title`, `home_portfolio_subtitle`, `home_portfolio_status`, `home_booking_form_title`, `home_booking_faq_title`, `home_booking_status`, `home_booking_photo`, `home_team_title`, `home_team_subtitle`, `home_team_status`, `home_ptable_title`, `home_ptable_subtitle`, `home_ptable_status`, `home_testimonial_title`, `home_testimonial_subtitle`, `home_testimonial_photo`, `home_testimonial_status`, `home_blog_title`, `home_blog_subtitle`, `home_blog_item`, `home_blog_status`, `home_cta_text`, `home_cta_button_text`, `home_cta_button_url`) VALUES
(1, 'IPCOM - PSIKOLOGI UIN BDG', 'IPCOM - PSIKOLOGI UIN BDG', 'Islamic Psychology Competition IV 2023', 'IPCOM - PSIKOLOGI UIR', 'Islamic Psychologi competition III', '<p class=\"MsoNormal\" style=\"margin: 0cm 0.3pt 0.0001pt 0cm; text-align: justify; text-indent: 36pt; line-height: 19.5px;\">Mahasiswa adalah subjek yang aktif mencari ilmu. Aktivitas mencari ilmu sendiri merupakan  pemenuhan kewajiban sebagai seorang Muslim. Sepanjang pencarian ilmu itu diniati untuk dan karena Allah, maka ia bernilai ibadah. Bila demikian yang terjadi, maka pencarian ilmu akan memberikan pengaruh terhadap keberhasilan hidup di hari akhir nanti.<o:p></o:p></p><p class=\"MsoNormal\" style=\"margin: 0cm 0.3pt 0.0001pt 0cm; text-align: justify; text-indent: 36pt; line-height: 19.5px;\">Universitas Islam sebagai penyelenggara pendidikan yang mendidikkan ilmu, perlu melakukan usaha yang aktif dan optimal agar mahasiswa memiliki semangat dan daya juang optimal untuk menguasai dan bahkan terlibat dalam pengembangan ilmu. Usaha itu, di samping dilakukan dengan menyelenggarakan proses kurikuler, juga dilakukan dengan berbagai aktivitas ekstra-kurikuler. Salah satu bentuk kegiatan ekstra-kurikuler adalah penyelenggaraan kompetisi ilmiah. Universitas Islam penyelenggara program studi psikologi dan program studi psikologi Islam di Indonesia perlu melakukan berbagai kegiatan ekstra kurikuler, dalam hal ini kompetisi ilmiah di bidang psikologi, agar proses penguasaan dan pengembangan ilmu bersifat optimal.</p><p class=\"MsoNormal\" style=\"margin: 0cm 0.3pt 0.0001pt 0cm; text-align: justify; text-indent: 36pt; line-height: 19.5px;\"><span style=\"text-indent: 36pt;\">Kompetisi ilmiah di bidang psikologi akan menemukan gaungnya kalau dilakukan melalui kerjasama antar universitas Islam. Penyelenggaraan kompetisi ini akan melaksanakan dua perintah agama Islam sekaligus, yaitu bekerjasama sama dalam kebaikan </span><i style=\"text-indent: 36pt;\">(ta’awanu ‘alal birr)</i><span style=\"text-indent: 36pt;\"> dan berlomba dalam kebaikan </span><i style=\"text-indent: 36pt;\">(fastabiqul khairat)</i><span style=\"text-indent: 36pt;\">. Kompetisi ini diselenggarakan oleh sekumpulan perguruan tinggi Islam dalam naungan kerjasama, saling menopang, dan saling mendukung untuk menggapai kemajuan. Kompetisi ini juga merupakan bentuk kompetisi untuk menghidupkan kebaikan karena yang dilombakan adalah sejauh mana tingkat penguasaan ilmu pada mahasiswa yang merupakan subjek didik.</span><br></p>', '<iframe src=\"https://player.vimeo.com/video/43982091\" style=\"position:absolute;width:100%;height:100%;left:0\" width=\"480\" height=\"360\" allowfullscreen></iframe>', 'Business Management', '95', 'Financial Management', '70', 'Project Management', '88', '', '', '', '', 'Hide', 'home_welcome_video_bg.jpg', 'WHY CHOOSE US', 'We have some special crieteria that will help you', 'Hide', 'SPECIAL FEATURES', 'We offer some awesome features that will help you', 'Hide', 'JENIS LOMBA', 'Kompetisi Ilmiah Mahasiswa Psikologi Universitas Islam I', 'Hide', 'Projects', '150', 'fa fa-user', 'Reviews', '300', 'fa fa-bar-chart', 'Clients', '250', 'fa fa-users', 'Awards', '120', 'fa fa-trophy', 'counter.jpg', 'Hide', 'WORK PORTFOLIO', 'See what we do for our valuable clients', 'Hide', 'BOOKING FORM', 'FREEQUENTLY ASKED QUESTIONS', 'Hide', 'home_booking_photo.jpg', 'OUR TEAM', 'All our skilled team members are listed below', 'Hide', 'PRICING TABLE', 'Our detailed consulting service prices are listed below', 'Hide', 'OUR CLIENTS', 'See what our valuable clients tell about us', 'home_testimonial_photo.jpg', 'Hide', 'BERITA TERBARU', 'All our latest news are listed below', '10', 'Hide', 'Do you want to get our quality service for your business?', 'Contact Us', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_news`
--

CREATE TABLE `tbl_page_news` (
  `id` int NOT NULL,
  `news_heading` varchar(255) NOT NULL,
  `mt_news` varchar(255) NOT NULL,
  `mk_news` text NOT NULL,
  `md_news` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_news`
--

INSERT INTO `tbl_page_news` (`id`, `news_heading`, `mt_news`, `mk_news`, `md_news`) VALUES
(1, 'NEWS', 'NEWS', 'NEWS', 'NEWS');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_photo_gallery`
--

CREATE TABLE `tbl_page_photo_gallery` (
  `id` int NOT NULL,
  `photo_gallery_heading` varchar(255) NOT NULL,
  `mt_photo_gallery` varchar(255) NOT NULL,
  `mk_photo_gallery` text NOT NULL,
  `md_photo_gallery` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_photo_gallery`
--

INSERT INTO `tbl_page_photo_gallery` (`id`, `photo_gallery_heading`, `mt_photo_gallery`, `mk_photo_gallery`, `md_photo_gallery`) VALUES
(1, 'PHOTO GALLERY', 'Photo Gallery - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_portfolio`
--

CREATE TABLE `tbl_page_portfolio` (
  `id` int NOT NULL,
  `portfolio_heading` varchar(255) NOT NULL,
  `mt_portfolio` varchar(255) NOT NULL,
  `mk_portfolio` text NOT NULL,
  `md_portfolio` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_portfolio`
--

INSERT INTO `tbl_page_portfolio` (`id`, `portfolio_heading`, `mt_portfolio`, `mk_portfolio`, `md_portfolio`) VALUES
(1, 'PORTFOLIO', 'Portfolio - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_pricing`
--

CREATE TABLE `tbl_page_pricing` (
  `id` int NOT NULL,
  `pricing_heading` varchar(255) NOT NULL,
  `mt_pricing` varchar(255) NOT NULL,
  `mk_pricing` text NOT NULL,
  `md_pricing` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_pricing`
--

INSERT INTO `tbl_page_pricing` (`id`, `pricing_heading`, `mt_pricing`, `mk_pricing`, `md_pricing`) VALUES
(1, 'PRICING', 'Pricing - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_privacy`
--

CREATE TABLE `tbl_page_privacy` (
  `id` int NOT NULL,
  `privacy_heading` varchar(255) NOT NULL,
  `privacy_content` text NOT NULL,
  `mt_privacy` varchar(255) NOT NULL,
  `mk_privacy` text NOT NULL,
  `md_privacy` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_privacy`
--

INSERT INTO `tbl_page_privacy` (`id`, `privacy_heading`, `privacy_content`, `mt_privacy`, `mk_privacy`, `md_privacy`) VALUES
(1, 'PRIVACY POLICY', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p>', 'Privacy Policy - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_search`
--

CREATE TABLE `tbl_page_search` (
  `id` int NOT NULL,
  `search_heading` varchar(255) NOT NULL,
  `mt_search` varchar(255) NOT NULL,
  `mk_search` text NOT NULL,
  `md_search` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_search`
--

INSERT INTO `tbl_page_search` (`id`, `search_heading`, `mt_search`, `mk_search`, `md_search`) VALUES
(1, 'SEARCH BY:', 'Search - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_service`
--

CREATE TABLE `tbl_page_service` (
  `id` int NOT NULL,
  `service_heading` varchar(255) NOT NULL,
  `mt_service` varchar(255) NOT NULL,
  `mk_service` text NOT NULL,
  `md_service` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_service`
--

INSERT INTO `tbl_page_service` (`id`, `service_heading`, `mt_service`, `mk_service`, `md_service`) VALUES
(1, 'CATEGORY', 'CATEGORY', 'CATEGORY', 'CATEGORY');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_team`
--

CREATE TABLE `tbl_page_team` (
  `id` int NOT NULL,
  `team_heading` varchar(255) NOT NULL,
  `mt_team` varchar(255) NOT NULL,
  `mk_team` text NOT NULL,
  `md_team` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_team`
--

INSERT INTO `tbl_page_team` (`id`, `team_heading`, `mt_team`, `mk_team`, `md_team`) VALUES
(1, 'DOWNLOAD AREA', 'DOWNLOAD AREA', 'DOWNLOAD AREA', 'DOWNLOAD AREA');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_term`
--

CREATE TABLE `tbl_page_term` (
  `id` int NOT NULL,
  `term_heading` varchar(255) NOT NULL,
  `term_content` text NOT NULL,
  `mt_term` varchar(255) NOT NULL,
  `mk_term` text NOT NULL,
  `md_term` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_term`
--

INSERT INTO `tbl_page_term` (`id`, `term_heading`, `term_content`, `mt_term`, `mk_term`, `md_term`) VALUES
(1, 'TERMS & CONDITIONS', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p><p>Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p><p>Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei. At his ludus nonumes gloriatur. Ne vim tamquam nonumes.</p><p>Duo purto pertinax in. Ea noluisse mediocrem qui, nobis melius vis et. Iudico delicatissimi no qui, quando fastidii nam et, ne eum rationibus deseruisse neglegentur. Ei eum populo viderer reprimique, tantas homero abhorreant usu ei, at postulant gloriatur vituperata sit.</p>', 'Terms and Conditions - Multix - Multipurpose Website CMS with Codeigniter', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page_testimonial`
--

CREATE TABLE `tbl_page_testimonial` (
  `id` int NOT NULL,
  `testimonial_heading` varchar(255) NOT NULL,
  `mt_testimonial` varchar(255) NOT NULL,
  `mk_testimonial` text NOT NULL,
  `md_testimonial` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page_testimonial`
--

INSERT INTO `tbl_page_testimonial` (`id`, `testimonial_heading`, `mt_testimonial`, `mk_testimonial`, `md_testimonial`) VALUES
(1, 'REGISTRATION', 'REGISTRATION', 'REGISTRATION', 'REGISTRATION');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_photo`
--

CREATE TABLE `tbl_photo` (
  `photo_id` int NOT NULL,
  `photo_name` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_photo`
--

INSERT INTO `tbl_photo` (`photo_id`, `photo_name`) VALUES
(2, 'photo-2.jpeg'),
(3, 'photo-3.jpg'),
(4, 'photo-4.jpg'),
(5, 'photo-5.jpg'),
(6, 'photo-6.jpg'),
(7, 'photo-7.jpg'),
(8, 'photo-8.jpg'),
(9, 'photo-9.jpg'),
(10, 'photo-10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio`
--

CREATE TABLE `tbl_portfolio` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `short_content` text NOT NULL,
  `content` text NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_company` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `website` varchar(255) NOT NULL,
  `cost` varchar(50) NOT NULL,
  `client_comment` text NOT NULL,
  `category_id` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio`
--

INSERT INTO `tbl_portfolio` (`id`, `name`, `short_content`, `content`, `client_name`, `client_company`, `start_date`, `end_date`, `website`, `cost`, `client_comment`, `category_id`, `photo`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'Corporate Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Darrell S. McClain', 'Waves Music', '01-07-2018', '04-07-2018', 'http://www.abc.com', '$3000', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '1', 'portfolio-1.jpg', 'Corporate Work 1', '', ''),
(2, 'Business Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Richard R. Caldwell', 'Grey Fade', '29-08-2018', '07-09-2018', 'http://www.abc.com', '$2000', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '2', 'portfolio-2.jpg', 'Business Work 1', '', ''),
(3, 'Engineering Work 1', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Nicholas Y. Coleman', 'Baltimore Markets', '08-04-2018', '22-06-2018', 'http://www.abc.com', '$3400', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '3', 'portfolio-3.jpg', 'Engineering Work 1', '', ''),
(4, 'Business Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'John A. Flesher', 'Magna Solution', '10-04-2018', '25-05-2018', 'http://www.abc.com', '$2300', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '2', 'portfolio-4.jpg', 'Business Work 2', '', ''),
(5, 'Corporate Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'Brandon J. Erwin', 'Custom Sound', '15-06-2018', '05-07-2018', 'http://www.abc.com', '$5000', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '1', 'portfolio-5.jpg', 'Corporate Work 2', '', ''),
(6, 'Engineering Work 2', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis.', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Liber utroque vim an, ne his brute vivendo, est fabulas consetetur appellantur an. In dolore legendos quo, ne ferri noluisse sed. Tantas eligendi at ius. Purto ipsum nemore sit ad.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.</p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum.</p>', 'George L. Perryman', 'The Own Hardware', '05-02-2018', '20-04-2018', 'http://www.abc.com', '$1900', 'Ancillae interpretaris ea has. Id amet impedit qui, eripuit mnesarchum percipitur in eam. Ne sit habeo inimicus, no his liber regione volutpat. Ex quot voluptaria usu, dolor vivendo docendi nec ea. Et atqui vocent integre vim, quod cibo recusabo ei usu, soleat deseruisse percipitur pri no. Aeterno theophrastus id pro.', '3', 'portfolio-6.jpg', 'Engineering Work 2', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_category`
--

CREATE TABLE `tbl_portfolio_category` (
  `category_id` int NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio_category`
--

INSERT INTO `tbl_portfolio_category` (`category_id`, `category_name`, `status`) VALUES
(1, 'Corporate', 'Active'),
(2, 'Business', 'Active'),
(3, 'Engineering', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_portfolio_photo`
--

CREATE TABLE `tbl_portfolio_photo` (
  `id` int NOT NULL,
  `portfolio_id` int NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_portfolio_photo`
--

INSERT INTO `tbl_portfolio_photo` (`id`, `portfolio_id`, `photo`) VALUES
(17, 7, '17.jpg'),
(18, 7, '18.jpg'),
(24, 1, '24.jpg'),
(26, 1, '26.jpg'),
(27, 2, '27.jpg'),
(28, 2, '28.jpg'),
(29, 3, '29.jpg'),
(30, 4, '30.jpg'),
(31, 4, '31.jpg'),
(32, 5, '32.jpg'),
(33, 5, '33.jpg'),
(34, 6, '34.jpg'),
(35, 6, '35.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pricing_table`
--

CREATE TABLE `tbl_pricing_table` (
  `id` int NOT NULL,
  `icon` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `button_text` varchar(255) NOT NULL,
  `button_url` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pricing_table`
--

INSERT INTO `tbl_pricing_table` (`id`, `icon`, `title`, `price`, `subtitle`, `text`, `button_text`, `button_url`) VALUES
(1, 'fa fa-shield', 'Standard', '$99', 'per month', '<ul><li>Single Domain</li><li>10 GB bandwidth/month</li><li>Free SSL Activation</li><li>No Website Builder</li><li>No Email Support</li><li>No Chat Support</li></ul>', 'Choose Us', '#'),
(2, 'fa fa-globe', 'Professional', '$299', 'per month', '<ul><li>5 Domains</li><li>100 GB bandwidth/month</li><li>Free SSL Activation</li><li>Free Website Builder</li><li>Free Email Support</li><li>No Chat Support</li></ul>', 'Choose Us', '#'),
(3, 'fa fa-diamond', 'Business', '$499', 'per month', '<ul><li>Unlimited Domains</li><li>Unlimited bandwidth/month</li><li>Free SSL Activation</li><li>Free Website Builder</li><li>Free Email Support</li><li>Free Chat Support</li></ul>', 'Choose Us', '#');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reg`
--

CREATE TABLE `tbl_reg` (
  `reg_id` int NOT NULL,
  `reg_delegasi` varchar(255) NOT NULL,
  `reg_jenis` varchar(255) NOT NULL,
  `reg_universitas` varchar(255) NOT NULL,
  `reg_date` varchar(255) NOT NULL,
  `hp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `category_id` int NOT NULL,
  `judul` varchar(255) NOT NULL,
  `abstrak` varchar(255) NOT NULL,
  `ktm` varchar(255) NOT NULL,
  `pernyataan` varchar(255) NOT NULL,
  `softcopy` varchar(255) NOT NULL,
  `penulis1` varchar(255) NOT NULL,
  `penulis2` varchar(255) NOT NULL,
  `penulis3` varchar(255) NOT NULL,
  `penulis4` varchar(255) NOT NULL,
  `penulis5` varchar(255) NOT NULL,
  `kategori` varchar(200) NOT NULL,
  `link` varchar(200) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_reg`
--

INSERT INTO `tbl_reg` (`reg_id`, `reg_delegasi`, `reg_jenis`, `reg_universitas`, `reg_date`, `hp`, `email`, `category_id`, `judul`, `abstrak`, `ktm`, `pernyataan`, `softcopy`, `penulis1`, `penulis2`, `penulis3`, `penulis4`, `penulis5`, `kategori`, `link`) VALUES
(1, 'Modus Daring 2', 'Psy-Cerpen', 'UIN Imam Bonjol Padang', '2023-02-02', '081378452445', 'nabilamaharani649@gmail.com', 0, 'Titik Balik Kehidupan Ratu', 'SINOPSIS_CERPEN_ISLAMI_ns.pdf', 'KTM_Penulis_ns.pdf', 'Surat_Pernyataan_ns.pdf', 'Psy-CerpenIslami_UIN_Imam_Bonjol_Padang_Nabila_Maharani.pdf', 'Nabila Maharani', 'Dita Merta Rilianty', 'May Syarah', '', '', 'Kelompok', ''),
(2, 'Modus Daring 2', 'Psy-Esai', 'UIN Imam Bonjol Padang', '2023-02-02', '081364381449', 'nafatriutami09@gmail.com', 0, 'INSPIRING (Islamic Parenting) : Program Inovatif dalam Mengantisipasi Pernikahan Dini untuk Meningkatkan Peran Orang Tua menurut Pandangan Psikologi Islam Pada Era VUCA', 'ABSTRAK-Psy-Esai-UIN_Imam_Bonjol_Padang-Nafa_Tri_Utami.pdf', 'KTM-Surat_Rekomendasi-Pas_Photonafa.pdf', 'Surat_Pernyataan-UIN_Imam_Bonjol_Padang-Nafa_Tri_Utami.pdf', 'Psy-Esai-UIN_Imam_Bonjol_Padang-Nafa_Tri_Utami.pdf', 'Nafa Tri Utami', 'Diah Fara Ananda Ardi', 'Ulfa Nur\'aini', '-', '-', 'Kelompok', ''),
(3, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Bandung', '2023-02-13', '081213933235', 'henryan.arsyafa@gmail.com', 0, 'Peran Pola Asuh Islami Anak', '', 'reg-ktm82.jpg', 'reg-surat-pernyataan82.pdf', 'https://drive.google.com/drive/folders/1Ne1lkNoSfNrzhf8Zp0I4cNwQGfYJMiLq', 'HENRYAN ARSYAFA PUTRA MULIAWAN', '-', '-', '-', '-', 'Perorangan', ''),
(4, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Bandung', '2023-02-05', '087719152146', 'firzanna78@gmail.com', 0, '', '', 'reg-ktm4.pdf', '', '', 'Firzan Najwa Ardian', 'Silsy Aziza Meidisty', 'Cindy Kumala Dewi', '', '', 'Kelompok', ''),
(5, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Bandung', '2023-02-05', '081995922741', 'denitasal@gmail.com', 0, '', '', 'reg-ktm80.jpg', '', '', 'Denita Salsabila', 'Aufa Zalfa Khairunnisa', 'Risma Suci Nabilah', '', '', 'Kelompok', ''),
(6, 'Modus Daring 3', 'Psy-Preach', 'UIN Imam Bonjol Padang', '2023-02-04', '082250092971', 'vintazalvianti23@gmail.com', 0, 'Peran Mahasiswa Psikologi Islam Dalam meningkatkan Kapabilitas untuk menghadapi era vuca', '', 'reg-ktm79.pdf', 'reg-surat-pernyataan79.pdf', '', 'Vinta Zalvianti', '', '', '', 'https://youtu.be/CYXCpqP72_I', 'Putri', ''),
(7, 'Modus Daring 3', 'Psy-Poster', 'UIN Imam Bonjol Padang', '2023-02-02', '082281812874', 'muharika124@gmail.com', 0, 'Peran Kepemimpinan Muslim Pada Era VUCA', '', 'reg-ktm30.pdf', 'reg-surat-pernyataan30.pdf', 'https://drive.google.com/file/d/1y3gKYT0KX6y6uKNQyGzGLVVWOCGn_3rm/view?usp=drivesdk', 'Muharika', 'Tasya Maharini', 'Nur Hafizah Rahmadani', '', '', 'Kelompok', ''),
(8, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'UIN Imam Bonjol Padang', '2023-02-02', '083155465360', 'karinaameliaputri7@gmail.com', 0, '', '', 'reg-ktm30.pdf', '', '', 'Karina Amelia Putri', '', '', '', '', 'Putri', ''),
(9, 'Modus Daring 1', 'Psy-Debat', 'UIN Imam Bonjol Padang', '2023-02-02', '085102728771', 'aisyah.arfyan@gmail.com', 0, '', '', 'reg-ktm9.pdf', '', '', 'Aisyah Arfyan', 'Azella Ikram Aulia', 'Sugiati Tri Rizki', '', '', 'Kelompok', ''),
(10, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'UIN Imam Bonjol Padang', '2023-02-02', '085102728771', 'aisyah.arfyan@gmail.com', 0, '', '', 'reg-ktm10.pdf', '', '', 'Aisyah Arfyan', '', '', '', '', 'Putri', ''),
(11, 'Modus Daring 2', 'Psy-Cerpen', 'UIN Imam Bonjol Padang', '2023-02-02', '083800618278', 'taniawutami@gmail.com', 0, 'Mendengar untuk Didengar', 'Sinopsis_cerpen_islami_(Mendengar_untuk_Didengar)tania.pdf', 'tania-cerpen.jpeg', 'CamScanner_02-02-2023_20_18tania.pdf', 'Psy-CerpenIslami_UINIB_Tania_Wardah_Utami_(kategori_individu).pdf', 'Tania Wardah Utami', '-', '-', '-', '-', 'Perorangan', ''),
(12, 'Modus Daring 2', 'Psy-HCMotion', 'UIN Imam Bonjol Padang', '2023-02-02', '081222206763', 'nailaalangmarpaung@gmail.com', 0, 'Strategi Pengembangan Sumber Daya Manusia Untuk Menghadapi Tantangan Di Era Revolusi Industri 4.0', 'ABSTRAK_alv.pdf', 'KTM_Peserta-alv.pdf', 'Surat_Pernyataan_Kelompok_untuk_Psy_Hc_Motionalv.pdf', 'Psy-HRC_UIN_IMAM_BONJOL_PADANG_Siti_Nailatunnazihah.pdf', 'Alvia Nisha', 'Siti Nailatunnazihah', '', '', '', 'Kelompok', ''),
(285, 'Modus Daring 3', 'Psy-Lagu Religi', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-17', '081261565444', 'natasyasyahda@gmail.com', 0, 'muhasabah cinta & ketika kaki dan tangan berkata', '', 'reg-ktm285.pdf', 'reg-surat-pernyataan285.pdf', '', 'Natasya Lutfiah Syahda', '', '', '', 'https://youtu.be/lKAzLdNyaAQ dan https://youtu.be/zJXvAPzcZg4', 'Putri', 'https://youtu.be/zJXvAPzcZg4'),
(14, 'Modus Daring 3', 'Psy-Qira\'ah', 'UIN Imam Bonjol Padang', '2023-02-03', '082152348474', 'putriwardah1209@gmail.com', 0, 'Ali-Imran ayat 190', '', 'reg-ktm76.pdf', 'reg-surat-pernyataan76.pdf', '', 'Putri Wardah', '-', '-', '', 'https://youtu.be/7ThDlXV8HNsOkee ', 'Putri', ''),
(15, 'Modus Daring 1', 'Psy-Debat', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-03', '082213621164', 'puspitaningrum8062002@gmail.com', 0, '', '', 'syah-dwi-puspita-debat-uir.pdf', '', '', 'Syah Dwi Puspita Ningrum', 'Rangga Aditya Rosman', 'M. Rafi Andrwan', '', '', 'Kelompok', ''),
(16, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'UIN Imam Bonjol Padang', '2023-02-04', '082287242560', 'syhlsthy@gmail.com', 0, '', '', 'reg-ktm78.pdf', '', '', 'Syahla Nurmardhatillah Sothy', '', '', '', '', 'Putri', ''),
(17, 'Modus Daring 2', 'Psy-Esai', 'UIN Imam Bonjol Padang', '2023-02-03', '081930504302', 'zainulazmi0227@gmail.com', 0, 'Membentuk Pemimpin Berakidah Pada Era VUCA', 'Psy-Abstrak_Esai__Universitas_Imam_Bonjol_Padang_Muhammad_Zainul_Azmi.docx', 'Surat_Pernyataan_Orisinalitas_Karya_UIN_Imam_Bonjol_Padang__Muhammad_Zainul_Azmi.pdf', 'Surat_Pernyataan_Orisinalitas_Karya_UIN_Imam_Bonjol_Padang__Muhammad_Zainul_Azmi.pdf', 'Psy-Esai_Universitas_Islam_Negeri_Imam_Bonjol_Padang_Muhammad_Zainul_Azmi.docx', 'Muhammad Zainul Azmi', '', '', '', '', 'Perorangan', ''),
(105, 'Modus Daring 3', 'Psy-Poster', 'UIN Imam Bonjol Padang', '2023-02-02', '085211239461', 'nurulhanifa119@gmail.com', 0, 'Peran Pola Asuh Orang Tua Di Era Digital', '', 'reg-ktm30.pdf', 'reg-surat-pernyataan30.pdf', 'https://drive.google.com/file/d/1Ch-gcST-qLM33sPb5gayON7xopZ4l7Iq/view?usp=drivesdk', 'Nurul Hanifa', 'Trio Adi Rahman', '', '', '', 'Kelompok', ''),
(13, 'Modus Daring 2', 'Psy-Cerpen', 'UIN Imam Bonjol Padang', '2023-02-03', '085379221995', 'sugiatitririzki@gmail.com', 0, 'Ketika Mimpi dan Doa Orang Tua Bekerja Sama', 'SINOPSIS.pdf', 'KTM_Gia.pdf', 'reg-surat-pernyataan44.pdf', 'Psy-CerpenIslami_UIN_IMAM_BONJOL_Sugiati_Tri_Rizki.pdf', 'Sugiati Tri Rizki', '', '', '', '', 'Perorangan', ''),
(116, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Bandung', '2023-02-15', '088219905426', 'kaliwacitra72@gmail.com', 0, '', '', 'reg-ktm116.jpeg', '', '', 'Kaliwacitra Suriaatmaja', '', '', '', '', 'Kelompok ', ''),
(117, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Bandung', '2023-02-15', '088219905426', 'kaliwacitra72@gmail.com', 0, '', '', 'reg-ktm116.jpeg', '', '', 'Kaliwacitra Suriaatmaja', '', '', '', '', 'Kelompok ', ''),
(115, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Bandung', '2023-02-15', '087730820762', 'miaaulianurfitri28@gmail.com', 0, '', '', 'reg-ktm115.pdf', '', '', 'Mia Aulia Nurfitri', '', '', '', '', 'Putri', ''),
(119, 'Modus Daring 3', 'Psy-Preach', 'Universitas Islam Bandung', '2023-02-17', '087837749989', 'rosaansaf08@gmail.com', 0, 'Peran Kepribadian Muslim Pada Era VUCA', '', 'reg-ktm119.pdf', 'reg-surat-pernyataan119.pdf', '', 'Rosa Annisa Safira', '', '', '', 'https://youtu.be/x22PIdszR_M', 'Putri', ''),
(120, 'Modus Daring 3', 'Psy-Fotografi', 'Universitas Islam Bandung', '2023-02-17', '08112283011', 'dendi.raihan123@gmail.com', 0, 'Ayahku Teladanku', '', 'reg-ktm120.pdf', 'reg-surat-pernyataan120.pdf', 'https://drive.google.com/drive/folders/103bRfzOE1tv3PeBH5GHf6U_iiPmEC0oa', 'Dendi Raihan Ramdani', '', '', '', '', 'Perorangan', ''),
(121, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-02-19', '0813?6376?1373?', 'Desnakarmita@gmail.com', 0, '', '', 'reg-ktm121.jpg', '', '', 'Desna karmita', '', '', '', '', 'Putri', ''),
(122, 'Modus Daring 1', 'Psy-Debat', 'Universitas Islam Bandung', '2023-02-19', '0895603689303', 'soniaandriani29304@gmail.com', 0, '', '', 'reg-ktm122.pdf', '', '', 'Karin Azizy', '', '', '', '', 'Kelompok', ''),
(142, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Muhammadiyah Bandung', '2023-02-25', '085899423786', 'listiaenarahayu@gmail.com', 0, 'Kita Sebagai Pemeran Utama', 'reg-abstrak141.pdf', 'reg-ktm141.pdf', 'reg-surat-pernyataan141.jpg', 'reg-soft-copy141.pdf', 'Listia Ena Rahayu', '', '', '', '', 'Perorangan', ''),
(221, 'Modus Daring 3', 'Psy-Qira\'ah', 'UIN Raden Fatah Palembang', '2023-02-28', '082372286503', 'Yopandaines@gmail.com', 0, 'Akhlak Mulia', '', 'reg-ktm215.pdf', 'reg-surat-pernyataan215.pdf', '', 'Ines Yopanda', '', '', '', 'https://youtu.be/Kibcplcz3iY ', 'Putri', ''),
(246, 'Modus Daring 3', 'Psy-Preach', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-04', '083164704123', 'syafiqa@student.uir.ac.id', 0, 'peran pemimpin di era vuca', '', 'reg-ktm246.pdf', 'reg-surat-pernyataan246.pdf', '', 'syafiqa', '', '', '', 'https://youtu.be/sHVkaTYJjik', 'Putri', ''),
(127, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-02-20', '081268717156', 'radisaokta@gmail.com', 0, '', '', 'KTM-RADHISA,_VIVI_DAN_FAUZIAH-CERDAS_CERMAT.pdf', '', '', 'Radhisa Oktadevani', 'Vivi Rinda Yani', 'Fauziah Oktari', '', '', 'Kelompok', ''),
(146, 'Modus Daring 3', 'Psy-Preach', 'Universitas Islam Bandung', '2023-02-25', '087736486589', 'aldiwahdan12@gmail.com', 0, 'Peran Pola Asuh Islami di Era VUCA', '', 'reg-ktm141.pdf', 'reg-surat-pernyataan141.pdf', '', 'Wahdan Aldi Januar Dahjana', '', '', '', 'https://youtu.be/S8B-KSjTn9Q', 'Putra', ''),
(129, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-20', '082361374961', 'Smarttaza4@gmail.com', 0, '', '', 'reg-ktm128.jpg', '', '', 'Sa\'awiyah Mumtazah', '', '', '', '', 'Putri', ''),
(130, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-02-21', '082235267751', 'santisundari472@gmail.com', 0, '', '', 'reg-ktm130.jpg', '', '', 'Santi Sundari', '', '', '', '', 'Putri', ''),
(131, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-21', '082171398519', 'Fitriazani19@gmail.com', 0, 'Kepribadian Muslim: Benteng Seks Bebas di Era VUCA', 'reg-abstrak131.pdf', 'reg-ktm131.pdf', 'reg-surat-pernyataan131.pdf', 'reg-soft-copy131.pdf', 'Fitria Zani Fittah', 'Sevira Serly', '', '', '', 'Kelompok', ''),
(132, 'Modus Daring 1', 'Psy-Debat', 'Universitas Islam Bandung', '2023-02-22', '0895603689303', 'soniaandriani29304@gmail.com', 0, '', '', 'reg-ktm132.pdf', '', '', 'Mochammad Irgia Mukti', '', '', '', '', 'Kelompok', ''),
(147, 'Modus Daring 2', 'Psy-Esai', 'Universitas Muhammadiyah Bandung', '2023-02-25', '081296261326', 'anlestari53@gmail.com', 0, 'Meningkatkan Kesejahteraan Psikologis Orang Dewasa Dalam Menghadapi Era VUCA Melalui Komunitas Kajian Berbasis Islam', 'reg-abstrak147.pdf', 'reg-ktm147.pdf', 'reg-surat-pernyataan147.pdf', 'reg-soft-copy147.pdf', 'Ananda N. Lestari', 'Rosita Nadif Priyatna', '', '', '', 'Kelompok', ''),
(300, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '088279987772', 'tengkuariskafidela@gmail.com', 0, 'Ketakutan Akan Ketidakpastian Membuatmu Cemas? Efek dari Intolerance of Uncertainty pada Mahasiswa yang Memiliki Kecemasan Sosial: Model Mediasi Moderat', '', 'reg-ktm299.pdf', 'reg-surat-pernyataan299.pdf', 'https://drive.google.com/file/d/1edqySm6_6iju0vvkHaGIhETbkn2qrcoh/view?usp=drivesdk', 'T. Ariska Fidela', 'Nilam Cahya Rahmadani', 'Zaitun Nizar Pohan', 'Dosen Pembimbing: Fara Ulfa, M.Psi, Psikolog', '', 'Kelompok', ''),
(288, 'Modus Daring 2', 'Psy-Proposal', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-21', '082287628384', 'annisasalsabila@student.uir.ac.id', 0, 'Kontrol Diri Sebagai Mediator Pengaruh Religiusitas Terhadap Fear of Missing Out (FoMO) Pada Pengguna Internet Di Indonesia', 'reg-abstrak288.pdf', 'reg-ktm288.pdf', 'reg-surat-pernyataan288.pdf', 'reg-soft-copy288.pdf', 'Annisa Salsabila', 'Shabrina Triandini Pratiwi', 'Ristia Desdiana', '', '', 'Kelompok', ''),
(140, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Muhammadiyah Bandung', '2023-02-25', '0816839699', 'belladwilestari0017@gmail.com', 0, '', '', 'reg-ktm140.pdf', '', '', 'Bella Dwi Lestari', '', '', '', '', 'Kelompok', ''),
(141, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Muhammadiyah Bandung', '2023-02-25', '081224902941', 'hasanahnura011101@gmail.com', 0, 'Sungguh Disetiap Kesulitan Ada Kemudahan', 'Abstrakhas.pdf', 'KTMhas.pdf', 'Lembar-Orisinalitas-Proposal-IPCOM-IVhas.pdf', 'Psy-CerpenIslami_Universitas_Muhammadiyahhas.pdf', 'Hasanah Nur Aulia', 'Laznah Fitri Nurazizah', '', '', '', 'Kelompok', ''),
(245, 'Modus Daring 2', 'Psy-Paper', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-04', '085363238931', 'dedesuhada@student.uir.ac.id', 0, 'Sedekah Sepenanggungan: Akhlak Mulia di Masa Sulit dan Penuh Cobaan', 'reg-abstrak245.pdf', 'reg-ktm245.pdf', 'reg-surat-pernyataan245.pdf', 'reg-soft-copy245.pdf', 'Dede Suhada', '', '', '', '', 'Perorangan', ''),
(149, 'Modus Daring 2', 'Psy-HCMotion', 'Universitas Muhammadiyah Bandung', '2023-02-26', '085839533862', 'achmadnurrachim07@gmail.com', 0, 'TECHNOTREND SEBAGAI SOLUSI DALAM MENGHADAPI REVOLUSI INDUSTRI 4.0 BESERTA IMPLEMENTASINYA', 'reg-abstrak148.pdf', 'reg-ktm148.pdf', 'reg-surat-pernyataan148.pdf', 'reg-soft-copy148.pdf', 'Achmad Fajrin Nurrachim', 'Ajeng Maulidina Rahma', 'Shilva Anadya Putri', '-', '-', 'Kelompok', ''),
(297, 'Modus Daring 3', 'Psy-Lagu Religi', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '082285317978', 'nelsyandryana.88@gmail.com', 0, 'Muhasabah Cinta dan Tak Kan Berpaling Dari-Mu', '', 'KTM___11960120834___NELSY_ANDRYANA.pdf', 'reg-surat-pernyataan297.pdf', '', 'Nelsy Andryana', '', '', '', 'https://youtu.be/kUPllD6LzhQ dan https://youtu.be/xHVzr3iAIiQ', 'Perorangan', 'https://youtu.be/xHVzr3iAIiQ'),
(152, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-02-26', '085363941649', 'indahfrziaa@gmail.com', 0, 'KEPEMIMPINAN ISLAM DI ERA DISRUPSI: STUDI KASUS COVID-19 DI INDONESIA', '', 'reg-ktm150.pdf', 'reg-surat-pernyataan150.pdf', 'https://drive.google.com/drive/folders/1mkoiOpWI23jk1-hmgpwgzBFrPqye9_px?usp=share_link', 'Indah Fairozia Huwaidah', 'Syifa Khairunnisa', 'Cut Ranjani', '', '', 'Kelompok', ''),
(295, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-24', '082312457993', 'vividindri01@gmail.com', 0, 'MUSLIM ITU BERPERAN BUKAN BAPERAN', 'reg-abstrak291.pdf', 'reg-ktm291.pdf', 'reg-surat-pernyataan291.pdf', 'reg-soft-copy291.pdf', 'VIVID INDRI YULISTIA', 'NABILA ATIKA AJRA', '', '', '', 'Kelompok', ''),
(294, 'Modus Daring 3', 'Psy-Fotografi', 'Universitas Muhammadiyah Bandung', '2023-03-24', '085158132201', 'lejen.lfn@gmail.com', 0, 'Peran pendidikan Islam pada era VUCA', '', 'reg-ktm291.pdf', 'reg-surat-pernyataan291.pdf', 'https://drive.google.com/drive/folders/1mjtIH_EXHofGedgS5esK1HvlUPdutW58', 'LAZNAH FITRI NURAZIZAH', '-', '-', '-', '-', 'Perorangan', ''),
(299, 'Modus Daring 3', 'Psy-Fotografi', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '081368031184', 'ikanovianaandriani12@gmail.com', 0, 'Dimulakan dengan Bismillah', '', 'reg-ktm299.pdf', 'reg-surat-pernyataan299.pdf', 'https://drive.google.com/drive/folders/1hGgetu2v7NlfYR1iZQMSTSKPAMWj5LSz?usp=share_link ', 'Ika Noviana Andriani', '', '', '', 'https://drive.google.com/drive/folders/1hGgetu2v7NlfYR1iZQMSTSKPAMWj5LSz?usp=share_link', 'Perorangan', ''),
(292, 'Modus Daring 3', 'Psy-Preach', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-24', '082172253271', 'Amrilutfi11@gmail.com', 0, 'Pendidikan islam dalam upaya menghadapi VUCA', '', 'KTM___12160111229___MUHAMMAD_LUTFI_AMRI.pdf', 'reg-surat-pernyataan291.jpg', '', 'Muhammad Lutfi Amri', '', '', '', 'https://youtu.be/q3-47MtXU8Y', 'Putra', ''),
(291, 'Modus Daring 3', 'Psy-Lagu Religi', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-24', '085353569079', '11960124958@students.uin-suska.ac.id', 0, 'Muhasabah Cinta dan Al-I\'tiraf', '', 'KTM___11960124958___SITI_MINARDA.pdf', 'reg-surat-pernyataan291.pdf', '', 'Siti Minarda', '', '', '', 'https://youtu.be/ObobhI5zb_Q  dan https://youtu.be/mjZXJhkOmuM', 'Perorangan', 'https://youtu.be/mjZXJhkOmuM'),
(290, 'Modus Daring 3', 'Psy-Fotografi', 'Universitas Muhammadiyah Bandung', '2023-03-23', '085951673287', 'sarahdttt@gmail.com', 0, 'Menjadi pribadi yang lebih baik', '', 'reg-ktm290.pdf', 'reg-surat-pernyataan290.pdf', 'https://drive.google.com/drive/folders/1vqizZz9zjMNUXu1872qe8Sx8-pVpUkr1?usp=share_link', 'Sarah Devi Tiaraningsih', '-', '-', '-', '-', 'Perorangan', ''),
(289, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-23', '081221999411', 'izzanbelajar06@gmail.com', 0, 'Peer to Peer Counseling Sebagai Upaya Menjaga Resistansi Mental di Era Vuca', 'reg-abstrak289.pdf', 'reg-ktm289.pdf', 'reg-surat-pernyataan289.pdf', 'reg-soft-copy289.pdf', 'Izzan Faruqy Azzahir', '', '', '', '', 'Perorangan', ''),
(283, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Meiviana Nurul Khadijah Maulana', '', '', '', '', 'Putri', ''),
(284, 'Modus Daring 3', 'Psy-Fotografi', 'UIN Imam Bonjol Padang', '2023-03-11', '082391530475', 'abibsfc@gmail.com', 0, 'Islamic Religious Education For Adolescent To Overcome Uncertanty In The Vuca Era', '', 'reg-ktm284.pdf', 'reg-surat-pernyataan284.pdf', 'https://drive.google.com/drive/folders/1lqHmG8duG4BDQF3J9_37f7C8Hm4KvKlT?usp=sharing', 'Abib Maulana Zalenda Deswal', '-', '-', '-', '-', 'Perorangan', ''),
(282, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Iqlima Nur Kalima Maulidin', '', '', '', '', 'Putri', ''),
(280, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Husna', '', '', '', '', 'Putri', ''),
(281, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Nasya Indah Fahira', '', '', '', '', 'Putri', ''),
(279, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Tsabita Najma Qoulan Syahida', '', '', '', '', 'Putri', ''),
(277, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Fahreinsya Hasbi', '', '', '', '', 'Putra', ''),
(278, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Syahidatul Izzah Addiniyah', '', '', '', '', 'Putri', ''),
(275, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Haekal Azkia', '', '', '', '', 'Putra', ''),
(276, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Sultan Muhamad Al Fatih', '', '', '', '', 'Putra', ''),
(173, 'Modus Daring 3', 'Psy-Lagu Religi', 'Universitas Muhammadiyah Bandung', '2023-02-26', '087879177949', 'shkrdiva@gmail.com', 0, 'Muhasabah Cinta dan Takkan Berpaling DariMu', '', 'reg-ktm150.pdf', 'reg-surat-pernyataan150.pdf', '', 'Shakira Diva Rahman', '', '', '', 'https://www.youtube.com/@shakiradiva21', 'Putri', 'https://www.youtube.com/@shakiradiva21'),
(174, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-26', '082293002837', 'devarahmadhani278@student.uir.ac.id', 0, '', '', 'reg-ktm174.pdf', '', '', 'Deva Rahmadhani', '', '', '', '', 'Putri', ''),
(175, 'Modus Daring 3', 'Psy-Lagu Religi', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-27', '082285264693', 'murniati@student.uir.ac.id', 0, 'Maher Zaiin- Rahmatun Lil’Alameen', '', 'reg-ktm175.pdf', 'reg-surat-pernyataan175.pdf', '', 'Murniati', '-', '-', '', 'https://youtu.be/wfJ4ZIdWj6U', 'Perorangan', 'https://youtu.be/wfJ4ZIdWj6U'),
(176, 'Modus Daring 2', 'Psy-HCMotion', 'Universitas Muhammadiyah Bandung', '2023-02-27', '08976598087', 'adistysheyra@gmail.com', 0, 'IMPLEMENTASI PENINGKATAN KUALITAS SUMBER DAYA MANUSIA DALAM MENGATASI PENGANGGURAN PADA ERA REVOLUSI 4.0', 'reg-abstrak176.pdf', 'reg-ktm176.pdf', 'reg-surat-pernyataan176.pdf', 'reg-soft-copy176.pdf', 'Adisty Sheyra Muchyi Pratama', 'Danti Noviani', '-', '-', '-', 'Kelompok', ''),
(177, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'Universitas Muhammadiyah Bandung', '2023-02-27', '085159180003', 'haqqotulya.psi20@gmail.com', 0, '', '', 'reg-ktm176.pdf', '', '', 'Haqqotul Ulya', '', '', '', '', 'Putri', ''),
(238, 'Modus Daring 3', 'Psy-Lagu Religi', 'UIN Raden Fatah Palembang', '2023-02-28', '+62 887-4777-5845', 'uddinrofi53@gmail.com', 0, 'Muhasabah cinta,Rahmatan Lil\'alamin', '', 'reg-ktm238.jpg', 'reg-surat-pernyataan238.jpg', '', 'Muhammad Rofi\'udin', '', '', '', 'https://youtu.be/xxJo1R3j5Ik lagu pilihan (https://youtu.be/mXMo7F1DYnA)', 'Putra', 'https://youtu.be/mXMo7F1DYnA'),
(179, 'Modus Daring 1', 'Psy-Debat', 'Universitas Islam Bandung', '2023-02-27', '0895603689303', 'soniaandriani29304@gmail.com', 0, '', '', 'reg-ktm178.pdf', '', '', 'Sonia Andriani', '', '', '', '', 'Kelompok', ''),
(180, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-27', '082231952377', 'nurulandini982@student.uir.ac.id', 0, '', '', 'reg-ktm178.jpg', '', '', 'NURUL ANDINI', '', '', '', '', 'Putri', ''),
(181, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-27', '082231952377', 'nurulandini982@student.uir.ac.id', 0, '', '', 'reg-ktm178.jpg', '', '', 'NURUL ANDINI', '', '', '', '', 'Putri', ''),
(182, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Muhammadiyah Bandung', '2023-02-27', '082115757123', 'nurulisyabillah29@gmai.com', 0, '', '', 'reg-ktm178.docx', '', '', 'Nurul Isyabillah Baramahdi', '', '', '', '', 'Putri', ''),
(183, 'Modus Daring 3', 'Psy-Lagu Religi', 'UIN Raden Fatah Palembang', '2023-02-27', '081295384079', 'choironnisya@gmail.com', 0, 'Muhasabah cinta, Insyaallah Maher Zain', '', 'reg-ktm183.jpg', 'reg-surat-pernyataan183.jpg', '', 'Choiron Nisya', 'Dita Anggia putri ', 'Muhammad Rofi\'udin', '', 'https://youtu.be/kkJksLjWBqI, https://youtu.be/j9R5hBGXdr0', 'Putri', 'https://youtu.be/j9R5hBGXdr0'),
(184, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Muhammadiyah Bandung', '2023-02-27', '085871119485', 'Abqoryamala@gmail.com', 0, 'Dua sudut dan dua pandang mereka', 'Ab_Qori_Amal_Azwari.pdf', 'reg-ktm183.jpg', 'reg-surat-pernyataan183.docx', 'Ab_Qori_Amal_Azwari.pdf', 'Ab Qori Amal', '', '', '', '', 'Perorangan', ''),
(185, 'Modus Daring 3', 'Psy-Fotografi', 'Universitas Muhammadiyah Bandung', '2023-02-27', '081953506515', 'skhoirunnisaica@gmail.com', 0, 'Katarsis', '', 'reg-ktm183.pdf', 'reg-surat-pernyataan183.pdf', 'https://drive.google.com/file/d/1x5NaCi96dvA9UwWEKzKES7FPCNeBQBte/view?usp=share_link', 'Siti Khoirun Nisa', '-', '-', '-', '-', 'Perorangan', ''),
(186, 'Modus Daring 3', 'Psy-Poster', 'Universitas Muhammadiyah Bandung', '2023-02-27', '088214118664', 'evawfakhriyah@gmail.com', 0, 'Pengaruh Dukungan Organisasi Keterlibatan Kerja Terhadap Kinerja Adaftif Karyawan', '', 'reg-ktm183.pdf', 'reg-surat-pernyataan183.pdf', 'https://drive.google.com/drive/folders/10Fjrwuuh8wFU2_11NZf2WV8LAViTgRnY', 'Eva Walidah Fakhriyah', 'Azmi Fadiyah Nir Azizah', 'Nita Zulfia', '', '', 'Kelompok', ''),
(187, 'Modus Daring 3', 'Psy-Poster', 'Universitas Muhammadiyah Bandung', '2023-02-27', '089516078006', 'dantinoviani@gmail.com', 0, 'Islamic Parenting sebagai Upaya Mendidik Karakter Islami Generasi Alpha', '', 'reg-ktm183.pdf', 'reg-surat-pernyataan183.pdf', 'https://drive.google.com/file/d/1eQenYZBi_GKaKkcZXgS4t6scdYqfXnqO/view?usp=share_link', 'Adisty Sheyra Muchyi Pratama', 'Danti Noviani', '', '', '', 'Kelompok', ''),
(188, 'Modus Daring 2', 'Psy-Esai', 'Universitas Muhammadiyah Bandung', '2023-02-27', '+62 898-6165-589', 'alodiaisfara@gmail.com', 0, 'Mindful Parenting Dalam Kacamata Islam di Era VUCA', 'reg-abstrak183.docx', 'reg-ktm183.pdf', 'reg-surat-pernyataan183.pdf', 'reg-soft-copy183.docx', 'Aliza Nur Muhammad', 'Bunga Alodia Isfara', 'Yudi Hadiana Hidayat ', '', '', 'Kelompok', ''),
(189, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-27', '088271365673', 'ferryndafiannisa@gmail.com', 0, '', '', 'reg-ktm183.pdf', '', '', 'Dinda Radya Ardiningrum', '', '', '', '', 'Kelompok', ''),
(190, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'UIN Raden Fatah Palembang', '2023-02-27', '085840579814', 'sitifauziahpangkal@gmail.com', 0, '', '', 'reg-ktm190.pdf', '', '', 'Siti Fauziah', '', '', '', '', 'Kelompok', ''),
(191, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-27', '082384490149', 'nadhillarahmadhani@student.uir.ac.id', 0, 'The Effect Of Social Media On Understanding Of Islamic Religious Education In Gen Z', '', 'reg-ktm190.pdf', 'reg-surat-pernyataan190.pdf', 'https://drive.google.com/file/d/1t3zfT5l4rgjdLqT3lRUshN-8TtuvKo1h/view', 'Nadhilla Rahmadhani', 'Nurul Rahma Dilla', 'Della Safira', '', '', 'Kelompok', ''),
(192, 'Modus Daring 3', 'Psy-Preach', 'UIN Raden Fatah Palembang', '2023-02-27', '081373084497', 'ahmnabildd13@gmail.com', 0, 'Peran Dukungan Sosial dan Komunitas di Era VUCA', '', 'reg-ktm190.pdf', 'reg-surat-pernyataan190.pdf', '', 'Ahmad Nabil Muthohariy', '', '', '', 'https://youtu.be/K0-HjukkklE', 'Putra', ''),
(193, 'Modus Daring 3', 'Psy-Poster', 'UIN Raden Fatah Palembang', '2023-02-27', '085781303910', 'Syahiranasywa801@gmail.com', 0, 'Peran Kesadaran Diri menjadi Pemimpin dalam era VUCA', '', 'reg-ktm190.pdf', 'reg-surat-pernyataan190.jpg', 'https://drive.google.com/drive/folders/16N0lF05ekG49VhBj8__cciMlj8Cj8hcE', 'Nasywa Syahira Oktaviani', '', '', '', '', 'Perorangan', ''),
(194, 'Modus Daring 3', 'Psy-Lagu Religi', 'UIN Raden Fatah Palembang', '2023-02-27', '081272174707', 'ditaanggiaputri@gmail.com', 0, 'Lagu Wajib : Muhasabah Cinta-Edcoustic dan Lagu Pilihan : Takkan Berpaling Darimu-Rossa', '', 'reg-ktm190.pdf', 'reg-surat-pernyataan190.pdf', '', 'Dita Anggia Putri', '', '', '', 'https://youtu.be/-rv9owDGj18  Lagu Pilihan “Takkan Berpaling Darimu” Link : https://youtu.be/1QpwUcgo2W8', 'Putri', 'https://youtu.be/1QpwUcgo2W8'),
(196, 'Modus Daring 3', 'Psy-Poster', 'UIN Raden Fatah Palembang', '2023-02-27', '08811351063', 'silviaanggraini1405@gmail.com', 0, 'Mengelola dan Menghadapi Tantangan di Era VUCA', '', 'reg-ktm190.pdf', 'reg-surat-pernyataan190.jpg', 'https://drive.google.com/file/d/1XBEO3Vw0HfxesDhcEC8fH06R--BaE265/view?usp=drivesdk ', 'Silvia Anggraini Ana Sandi', '-', '-', '-', '-', 'Perorangan', ''),
(197, 'Modus Daring 3', 'Psy-Preach', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-02-27', '082388889415', 'windasriwahyuni769@gmail.com', 0, 'Peran Kepemimpinan Muslim Pada Era Vuca', '', 'reg-ktm190.pdf', 'reg-surat-pernyataan190.pdf', '', 'Winda Sri Wahyuni', '', '', '', 'https://youtu.be/U8iH9nLNqh8', 'Putri', ''),
(198, 'Modus Daring 2', 'Psy-Esai', 'UIN Raden Fatah Palembang', '2023-02-28', '089628625111', 'bintangamanda190@gmail.com', 0, 'Adaptasi Diri di Era VUCA dengan Meningkatkan Kepribadian yang Mutmainnah', 'Psy_Essai_Bintang_Amanda_UIN_Raden_Fatah_Palembang.pdf', 'Bintang_Amanda.pdf', 'Bintang_Amanda.pdf', 'Psy-Esai_UIN_Raden_Fatah_Bintang_Amanda.pdf', 'Bintang Amanda', '', '', '', '', 'Perorangan', ''),
(199, 'Modus Daring 3', 'Psy-Poster', 'UIN Raden Fatah Palembang', '2023-02-28', '083173348937', 'aisyahrf1807@gmail.com', 0, 'Pentingnya Smart Parenting Dalam Pembentukan Karakter Pada Mahasiswa Psikologi Dengan Metode Islam DI Era VUCA', '', 'reg-ktm198.pdf', 'reg-surat-pernyataan198.pdf', 'https://drive.google.com/file/d/18yVDjEPVdbh3eASgXrIE9dK_3RrVgnkm/view?usp=sharing', 'Aisyah Rizky Faradila', '', '', '', '', 'Perorangan', ''),
(200, 'Modus Daring 2', 'Psy-Esai', 'UIN Raden Fatah Palembang', '2023-02-28', '0857-8130-3910', 'Syahiranasywa801@gmail.com', 0, 'Menimbulkan Kesadaran Diri Mahasiswa Psikologi Dalam Menjadi Pemimpin Di Era VUCA', 'reg-abstrak198.pdf', 'reg-ktm198.pdf', 'reg-surat-pernyataan198.pdf', 'reg-soft-copy198.pdf', 'Nasywa Syahira Oktaviani', 'Aisyah Rizky Faradila', '', '', '', 'Kelompok', ''),
(201, 'Modus Daring 2', 'Psy-HCMotion', 'UIN Raden Fatah Palembang', '2023-02-28', '085764419063', 'fadilaoktavianti@gmail.com', 0, 'INTERVENSI PSIKOLOGI TERHADAP PENGARUH DARI TEKNOLOGI 4.0 BERUPA PENGARUH JUMLAH RESAPAN TENAGA KERJA MANUSIA.', 'reg-abstrak201.pdf', 'reg-ktm201.pdf', 'reg-surat-pernyataan201.pdf', 'reg-soft-copy201.pdf', 'Fadila Oktavianti (2130901157)', 'Ayu Apriliah (2130901177)', 'Devi Afrianti (2130901170)', '', '', 'Kelompok', ''),
(202, 'Modus Daring 1', 'Psy-Debat', 'UIN Raden Fatah Palembang', '2023-02-28', '087804676447', 'risawulandari1221@gmail.com', 0, '', '', 'reg-ktm201.pdf', '', '', 'Sidi Sofatillah', 'Risa Wulandari', 'Dea Ananda Safitri', '', '', 'Kelompok', ''),
(204, 'Modus Daring 2', 'Psy-Cerpen', 'UIN Raden Fatah Palembang', '2023-02-28', '089626460378', 'juliasari140704@gmail.com', 0, '\"Ambil Hikmah dari Peran ini\"', 'sitij.pdf', 'Lembar_Pernyataan_sitij.pdf', 'Lembar_Pernyataan_sitij.pdf', 'sitij.pdf', 'Siti Julia Sari', '', '', '', '', 'Perorangan', ''),
(205, 'Modus Daring 2', 'Psy-Cerpen', 'UIN Raden Fatah Palembang', '2023-02-28', '085840579814', 'sitifauziahpangkal@gmail.com', 0, 'Pemimpin Impian Dengan Slogan \"Balance Leadership\"', 'Abstrak_Psy-Cerpen_Siti_Fauziah.pdf', 'KTM_Siti_Fauziah_1.pdf', 'KTM_Siti_Fauziah_1.pdf', 'Psy-CerpenIslami_UIN_Raden_Fatah_Siti_Fauziah_Kategori_individu.pdf', 'Siti Fauziah', '', '', '', '', 'Perorangan', ''),
(206, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'UIN Raden Fatah Palembang', '2023-02-28', '083177385964', 'niarahmaoktober30@gmail.com', 0, '', '', 'reg-ktm203.jpg', '', '', 'Rahmania', '', '', '', '', 'Putri', ''),
(208, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'UIN Raden Fatah Palembang', '2023-02-28', '089697305370', 'andinipratama53@gmail.com', 0, '', '', 'reg-ktm203.jpg', '', '', 'Andini Pratama', '', '', '', '', 'Putri', ''),
(209, 'Modus Daring 2', 'Psy-Proposal', 'UIN Raden Fatah Palembang', '2023-02-28', '082282848956', 'sitiathira7@gmail.com', 0, 'Hubungan dukungan sosial terhadap resiliensi pada mahasiswa baru di universitas UIN Raden Fatah Palembang', 'ABSTRAK-indah.pdf', 'indahktm.jpeg', 'SURAT_PERNYATAAN-indah.pdf', 'Psy-proposal_UIN_Raden_Fatah_Palembang_Indah_Septiani.pdf', 'Indah Septiani', 'Hanni Pratiwi', 'Siti Athira Nur Izzati', '', '', 'Kelompok', ''),
(210, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'UIN Raden Fatah Palembang', '2023-02-28', '081373902575', 'khodijahauliya25@gmail.com', 0, '', '', 'reg-ktm203.pdf', '', '', 'Khodijah Auliya Tsabitta', '', '', '', '', 'Putri', ''),
(274, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Azka Makaya', '', '', '', '', 'Kelompok', ''),
(213, 'Modus Daring 2', 'Psy-Esai', 'UIN Raden Fatah Palembang', '2023-02-28', '088299791266', 'nadyawulanrizky@gmail.com', 0, 'Perempuan selalu dijadikan objek pelecehan seksual dan selalu disalahkan dalam berpakaian', 'reg-abstrak203.docx', 'reg-ktm203.pdf', 'reg-surat-pernyataan203.pdf', 'reg-soft-copy203.pdf', 'Nadya Wulan Rizky', 'Nadya Wulan Rizky', 'Nadya Wulan Rizky', 'Nadya Wulan Rizky', 'Nadya Wulan Rizky', 'Perorangan', ''),
(214, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'UIN Raden Fatah Palembang', '2023-02-28', '085832617863', 'fandi9041@gmail.com', 0, '', '', 'reg-ktm203.pdf', '', '', 'Ahmad Arfandi', '', '', '', '', 'Putra', ''),
(215, 'Modus Daring 2', 'Psy-Cerpen', 'UIN Raden Fatah Palembang', '2023-02-28', '0895631593318', 'alvientprimadanap@gmail.com', 0, 'Cita-cita dari Langit', 'reg-abstrak215.png', 'reg-ktm215.pdf', 'reg-ktm215.pdf', 'Psy-CerpenIslami_UIN_Raden_Fatah_Palembang_Alvient.pdf', 'Alvient Primadana Putra', '', '', '', '', 'Perorangan', ''),
(216, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'UIN Raden Fatah Palembang', '2023-02-28', '081277435129', 'bakhdanadikatrirona@gmail.com', 0, '', '', 'reg-ktm215.pdf', '', '', 'Bakhdan Adika Trirona', '', '', '', '', 'Kelompok', ''),
(218, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'UIN Raden Fatah Palembang', '2023-02-28', '082126786855', 'triaash03@gmail.com', 0, '', '', 'reg-ktm215.pdf', '', '', 'Sahidatul Fitria', '', '', '', '', 'Putri', ''),
(287, 'Modus Daring 2', 'Psy-HCMotion', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-20', '082172483811(WA)/089621771972(Tlp)', 'qistyanggilestari@student.uir.ac.id', 0, 'EFEKTIVITAS PENERAPAN KONSEP EQUAL BENEFIT UNTUK MENGURANGI KETIDAKADILAN DI PERUSAHAAN', 'reg-abstrak287.pdf', 'reg-ktm287.pdf', 'reg-surat-pernyataan287.pdf', 'reg-soft-copy287.pdf', 'Herzya Elvanny', 'Qisty Anggi Lestari', 'Rangga Adhitya Rosman', '', '', 'Kelompok', ''),
(222, 'Modus Daring 3', 'Psy-Qira\'ah', 'UIN Raden Fatah Palembang', '2023-02-28', '082126786855', 'Triaash03@gmail.com', 0, 'Akhlak mulia', '', 'reg-ktm215.pdf', 'reg-surat-pernyataan215.pdf', '', 'Sahidatul fitria', '', '', '', 'https://youtu.be/ZdcBJ-vviJ4', 'Putri', ''),
(223, 'Modus Daring 2', 'Psy-Paper', 'UIN Raden Fatah Palembang', '2023-02-28', '083163852882', 'bintynrhalimah@gmail.com', 0, 'THE EFFECTIVENESS OF AL-QUR\'AN MUROTTAL THERAPY ON INCREASING STUDENTS\' LEARNING CONCENTRATION IN DEALING WITH THE VUCA ERA', 'Psy-Paper_Binti_Nurhalimah_dkk.pdf', 'reg-ktm215.pdf', 'CamScanner_02-27-2023_15_07.pdf', 'Psy-Paper_Binti_Nurhalimah_dkk.pdf', 'Binti Nurhalimah', 'Dira Utami', 'Rensi Tiara Amelia', 'Yayu Indriani', '', 'Kelompok', ''),
(224, 'Modus Daring 2', 'Psy-Paper', 'UIN Raden Fatah Palembang', '2023-02-28', 'meipanmut@gmail.com', 'meipanmut@gmail.com', 0, 'THE EFFECT OF BREATHING RELAXATION WITH DHIKR ON REDUCING ANXIETY IN STUDENTS IN THE FACE OF THE VUCA ERA', 'Abstrak_Psypaper-meidwi.docx', 'reg-ktmmei.pdf', 'orisinalitas_paper_Mei_Dwi_Yanti.pdf', 'Artikel_3-meidwi.docx', 'Mei Dwi Yanti', 'Winda Agustina Anggraini', 'Siti Saluna Nurhalizah', 'Kartika Cantamala', 'Sunarsih', 'Kelompok', ''),
(225, 'Modus Daring 2', 'Psy-Paper', 'UIN Raden Fatah Palembang', '2023-02-28', '082176968967', 'dzikradaffasalsabela@icloud.com', 0, 'THE EFFECT OF REMOVING THE QUR\'AN ON ADOLESCENT SELF-CONTROL IN RQT ALMUKMIN IN THE VUCA ERA', 'reg-abstrak215.pdf', 'reg-ktm215.pdf', 'reg-surat-pernyataan215.pdf', 'reg-soft-copy215.pdf', 'Dzikra Daffa Salsabela', 'Afif Khairullah', 'Aldi Alisin', 'Nova Zahrani', 'Rati Oktariasni', 'Kelompok', ''),
(226, 'Modus Daring 1', 'Psy-Debat', 'UIN Raden Fatah Palembang', '2023-02-28', '082179435759', 'nailammashun@gmail.com', 0, '', '', 'reg-ktm215.pdf', '', '', 'Na\'il Ammashun Alyahya Putra', 'Malini Dwi Rahma Dona', 'Salsabila Nur Kamila', '', '', 'Kelompok', ''),
(227, 'Modus Daring 3', 'Psy-Fotografi', 'UIN Raden Fatah Palembang', '2023-02-28', '082269999040', 'sandrosaragi2001@gmail.com', 0, 'Tadarus Berjamaah Di Masjid Lebih Afdhol', '', 'reg-ktm227.pdf', 'reg-surat-pernyataan227.pdf', 'https://drive.google.com/drive/folders/13Ofopx1fJBTpnec9Wi8ZGI8SUaF1kTO8', 'Sandro Saragi', '', '', '', '', 'Perorangan', ''),
(286, 'Modus Daring 2', 'Psy-HCMotion', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-17', '081371166840', 'refindajeliscaamara@student.uir.ac.id', 0, 'PENGEMBANGAN IMPLEMENTASI DOWNSIZING DAN SIKAP AHSANU AMALA DI ERA GEMPURAN KECERDASAN BUATAN (ARTIFICIAL INTELLIGENCE)', 'reg-abstrak286.pdf', 'reg-ktm286.pdf', 'reg-surat-pernyataan286.pdf', 'reg-soft-copy286.pdf', 'Nurrahmi Rizkia Hidayati', 'Amalia Noni Sanjana', 'Refinda Jelisca Amara', '', '', 'Kelompok', ''),
(230, 'Modus Daring 3', 'Psy-Qira\'ah', 'UIN Raden Fatah Palembang', '2023-02-28', '085832617863', 'fandi9041@gmail.com', 0, 'Q.S Al-Isra ayat 23-27 mengenai peran pola asuh Islami pada era VUCA dalam membentuk karakter insan yang berakhlak mulia', '', 'reg-ktm227.pdf', 'reg-surat-pernyataan227.pdf', '', 'Ahmad Arfandi', '', '', '', 'https://youtube.com/watch?v=ubAn8soKsss&si=EnSIkaIECMiOmarE', 'Putra', ''),
(232, 'Modus Daring 3', 'Psy-Fotografi', 'UIN Raden Fatah Palembang', '2023-02-28', '+62 895-3271-93621', 'yandygokil57@gmail.com', 0, 'Kegigihan Penjual Balon Untuk Bertahan Hidup', '', 'reg-ktm227.pdf', 'reg-surat-pernyataan227.pdf', 'https://drive.google.com/drive/folders/1AOrUkl3NfQhXqqzuirz4RbvsolQf3cww', 'M. Jorgie Arroyandy', '', '', '', '', 'Perorangan', ''),
(233, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Bandung', '2023-02-28', '083816595940', 'tarinapratami6@gmail.com', 0, '', '', 'reg-ktm227.pdf', '', '', 'Tarina Pratami Indira Mulyana', '', '', '', '', 'Kelompok', ''),
(234, 'Modus Daring 3', 'Psy-Fotografi', 'UIN Raden Fatah Palembang', '2023-02-28', '082179435759', 'nailammashun@gmail.com', 0, 'Peran Dukungan Sosial dan Komunitas pada Era VUCA', '', 'reg-ktm227.pdf', 'Psy-Photography_Uin_Raden_Fatah_Palemban.pdf', 'https://drive.google.com/drive/folders/1093T-numT9pTomtSFdY2YnKusYX1M9Oi', 'Na’il Ammashun Alyahya Putra', '-', '-', '-', 'https://drive.google.com/drive/folders/1093T-numT9pTomtSFdY2YnKusYX1M9Oi', 'Perorangan', ''),
(236, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Bandung', '2023-02-28', '085721237633', 'tesarhartasar@gmail.com', 0, 'PERWUJUDAN KEPRIBADIAN MUTMAINAH SEBAGAI UPAYA PENINGKATAN RESILIENSI MENTAL PADA ERA VUCA SEBAGAI DAMPAK DARI REVOLUSI INDUSTRI 4.0', 'ABSTRAK_(Psy-esai)rs.pdf', 'KTM_Adzkia_Nidars.pdf', 'Surat_Rekomendasi_Perlombaan_IPCOM_2rs.pdf', 'Psy-Esai_Universitas_Islam_Bandung_Raisha_Hartashar_Mauritsrs.pdf', 'Raisha Hartashar Maurits', 'Adzkia Nida Gandia', 'Naufal Aldian Pratama', '', '', 'Kelompok', ''),
(272, 'Modus Daring 1', 'Psy-Debat', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Indar Nurdin', '', '', '', '', 'Kelompok', ''),
(273, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Dzakia Nurul Aini', '', '', '', '', 'Kelompok', ''),
(240, 'Modus Daring 2', 'Psy-Paper', 'Universitas Islam Bandung', '2023-02-28', '081350904196', 'salsabilasyazwina3@gmail.com', 0, '\"Kajian\" mengenai Makna Motivasi dalam Perspektif Islam', 'Abstrak_Psy-Papersl.pdf', 'KARTU_TANDA_MAHASISWA_LOMPA_PSYsl.docx', 'Psy-Paper_Universitas_Islam_Bandung_Salsabila_Syazwina.pdf', 'Psy-Paper_Krya_Salsabila_Syazwina.pdf', 'Salsabila Syazwina Lukman', 'Gya Adhwa Ramadhani', '-', '-', '-', 'Kelompok', ''),
(270, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 1-5', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-10', '082282539263', 'naylanoerma@gmail.com', 0, '', '', 'reg-ktm269.pdf', '', '', 'Noerma Nayla Annur', '', '', '', '', 'Putri', ''),
(271, 'Modus Daring 1', 'Psy-Debat', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-10', '089604188141', 'wd3psi@uinsgd.ac.id', 0, '', '', 'reg-ktm269.pdf', '', '', 'Wulan Siti Khodijah', '', '', '', '', 'Kelompok', ''),
(242, 'Modus Daring 2', 'Psy-Proposal', 'UIN Raden Fatah Palembang', '2023-02-28', '085767095720', 'salsabilanurkamilah@gmail.com', 0, 'PENGARUH PROPHETIC PARENTING TERHADAP PSYCHOLOGICAL WELL-BEING PADA SANTRI DI SUMATERA SELATAN USIA REMAJA PADA ERA VUCA', 'reg-abstrak238.pdf', 'reg-ktm238.pdf', 'reg-surat-pernyataan238.pdf', 'reg-soft-copy238.pdf', 'Salsabila Nur Kamilah', '', '', '', '', 'Perorangan', ''),
(243, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Bandung', '2023-02-28', '089672720012', 'cindykdewi@gmail.com', 0, 'QURANIC-BASED PARENTING SOCIALIZATION: PERAN MAHASISWA DALAM PENERAPAN PSIKOLOGI ISLAM SEBAGAI SOLUSI MENGHADAPI ERA VUCA', 'Psy-Esai_Abstrak_Universitas_Islam_Bandung_Cindy_Kumala_Dewi.docx', 'KTM_Cindy_Kumala_Dewi,_Arshilla_Nada_Sophia,_Arini_Baasir.pdf', 'Lembar-Orisinalitas-Proposal-IPCOM-IV.pdf', 'Psy-Esai_Universitas_Islam_Bandung_Cindy_Kumala_Dewi.docx', 'Cindy Kumala Dewi', 'Arshilla Nada Sophia', 'Arini Baasir', '', '', 'Kelompok', ''),
(268, 'Modus Daring 1', 'Psy-Debat', 'Universitas Islam Bandung', '2023-03-10', '085157712271', 'bacharkautsarr@gmail.com', 0, '', '', 'reg-ktm268.pdf', '', '', 'Bacharuddien Kautsar', '', '', '', '', 'Kelompok', ''),
(269, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-10', '085271403114', 'riandia888@gmail.com', 0, '', '', 'reg-ktm269.pdf', '', '', 'Agus Ryandi', '', '', '', '', 'Putra', ''),
(250, 'Modus Daring 3', 'Psy-Qira\'ah', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-06', '082362811855', 'faizalqarny@gmail.com', 0, 'Qs. Al Mujadalah ayat 11-12', '', 'reg-ktm250.pdf', 'reg-surat-pernyataan250.pdf', '', 'Muhammad Faiz Ramadhan', '', '', '', 'https://youtu.be/7uU4RLSiTcY', 'Putra', ''),
(251, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-06', '0895705057010', 'gheodevihernanda@gmail.com', 0, 'Smart Techno Parenting : Pendidikan Teknologi Pada Anak di Era VUCA', '', 'reg-ktm251.pdf', 'reg-surat-pernyataan251.pdf', 'https://drive.google.com/file/d/170xLNyuMyJ5XvPBwX54BRj5wmCKQ8_q9/view?usp=sharing', 'Gheodevi Hernanda (208110159)', 'Intan Permata Sari (208110133)', 'Putri Ghamelia (208110071)', '', '', 'Kelompok', ''),
(252, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-07', '087720857968', 'ryoharviyonas07@gmail.com & : ryoharviyonas@student.uir.ac.id', 0, 'Kesiapan Menghadapi Dunia Kerja di Era VUCA pada Mahasiswa Akhir', '', 'reg-ktm251.docx', 'reg-surat-pernyataan251.pdf', 'https://drive.google.com/drive/folders/1q2dupvKxNuUPgv4xoqegrbAYtAVxjFpu?usp=sharing', 'Ryo Harvi Yonas', 'Revangga Catur Sumantri', 'Mutiara Ananta Rinefi Putri', '', '', 'Kelompok', ''),
(253, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-07', '081289514492', 'salsabila.1salsa@gmail.com', 0, 'Menelisik Prokrastinasi Akademik pada Mahasiswa dengan Nafsu Mutmainnah di Era VUCA', 'reg-abstrak253.pdf', 'KTM_Salsabila_Aprilia_Wahyuni_.pdf', 'KTM_Salsabila_Aprilia_Wahyuni_.pdf', 'reg-soft-copy253.pdf', 'Fajril Hidayah', 'Muhammad Hafiz Hasibuan', 'Salsabila Aprilia Wahyuni', '', '', 'Kelompok', ''),
(254, 'Modus Daring 3', 'Psy-Fotografi', 'Universitas Islam Riau (UIR) Pekanbaru', '2023-03-07', '0895620315248', 'jagatputriw@gmail.com', 0, 'future religion', '', 'reg-ktm253.pdf', 'reg-surat-pernyataan253.pdf', 'https://drive.google.com/drive/folders/1-6Wn9SZnKddt5PgXxu33eEK8W-ab3wMP', 'JAGAT PUTRI WIDIARTI', '', '', '', '', 'Perorangan', ''),
(256, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-08', '083181958851', '12160121278@students.uin-suska.ac.id', 0, '', '', 'reg-ktm256.pdf', '', '', 'Dwi surotul isni', '', '', '', '', 'Putri', ''),
(257, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-08', '081364451016', 'sarahharmaini17@gmail.com', 0, '', '', 'KTM-MEILY,_SARAH_DAN_ANNISA-CERDAS_CERMAT.pdf', '', '', 'Meily Fatirah', 'Sarah Febrina Harmaini', 'Annisa Putri Perdani', '', '', 'Kelompok', ''),
(258, 'Modus Daring 1', 'Psy-Debat', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-08', '081368031184', 'ikanovianaandriani12@gmail.com', 0, '', '', 'KTM-IBNU,_S_HAKYRA_DAN_IKA-DEBAT.pdf', '', '', 'Ibnu Raihan Rambey', 'S Hakyra Junia', 'Ika Noviana Andriani', '', '', 'Kelompok', ''),
(259, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-08', '085263708445', 'muhammadirsantanjung04@gmail.com', 0, '', '', 'KTM-M__IRSAN,_SALSABILA_DAN_ILMIL-CERDAS_CERMAT.pdf', '', '', 'Muhammad Irsan Tanjung', 'Cahaya Salsabila', 'Ilmil Fadhila', '', '', 'Kelompok', ''),
(260, 'Modus Daring 1', 'Psy-Cerdas Cermat', 'Universitas Islam Bandung', '2023-03-08', '082116788373', 'safaainun0804@gmail.com', 0, '', '', 'reg-ktm260.jpg', '', '', 'Safa Ainun Nisa Lukito', '', '', '', '', 'Kelompok', ''),
(266, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-10', '082289893051', 'zul27691@gmail.com', 0, '', '', 'reg-ktm266.pdf', '', '', 'Zulkhairi', '', '', '', '', 'Putra', ''),
(262, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-09', '62 895-3247-70882', 'myusuf.nurhafiz14@gmail.com', 0, '', '', 'reg-ktm261.pdf', '', '', 'Muhammad Yusuf nurhafiz', '', '', '', '', 'Putra', ''),
(263, 'Modus Daring 2', 'Psy-Proposal', 'UIN Imam Bonjol Padang', '2023-03-09', '081374111030', 'syarifahhistorynoversya@gmail.com', 0, 'Hubungan Penyesuaian Diri dengan Kebahagiaan Santri di Pondok Pesantren Nurul Yaqin Ambung Kapur', 'reg-abstrak263.pdf', 'reg-ktm263.pdf', 'reg-surat-pernyataan263.pdf', 'reg-soft-copy263.pdf', 'Syarifah History Noversya', '', '', '', '', 'Perorangan', ''),
(265, 'Modus Daring 2', 'Psy-Proposal', 'UIN Imam Bonjol Padang', '2023-03-09', '082283854207', 'intan230618@gmail.com', 0, 'Pengaruh Asertivitas Terhadap Perilaku Seksual Pranikah Pada Siswa di MAs/TI Paninggahan', 'reg-abstrak263.docx', 'reg-ktm263.docx', 'reg-surat-pernyataan263.docx', 'reg-soft-copy263.docx', 'Intan Adina', '', '', '', '', 'Perorangan', ''),
(267, 'Modus Daring 1', 'PSY-TAHFIDZ JUZ 30', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-10', '082241521145', 'syarifhazzhr@gmai.com', 0, '', '', 'reg-ktm267.pdf', '', '', 'Syarifah Azzahra', '', '', '', '', 'Putri', ''),
(298, 'Modus Daring 3', 'Psy-Lagu Religi', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '085270559923', 'mailto:1226012288@students.uin-suska.ac.ad', 0, 'Muhasabah Cinta dan Tak Kan Berpaling Dari-Mu', '', 'reg-ktm297.pdf', 'reg-surat-pernyataan297.pdf', '', 'Nabila Firstania Putri Rianto', '', '', '', 'https://youtu.be/1bnJ536vdnY dan https://youtu.be/inL57cxoUVY', 'Putri', 'https://youtu.be/inL57cxoUVY'),
(301, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '083878502745', 'zaitunnizar04@gmail.com', 0, 'Nada Bahagia Nabila', 'Abstrakzaitun.pdf', 'IMG_20230324_145858zaitun.jpg', 'IMG_20230324_145858zaitun.jpg', 'Psy-CerpenIslami_UIN_Suska_Riau_Zaitun_Nizar_Pohan.pdf', 'Zaitun Nizar Pohan', '', '', '', '', 'Perorangan', ''),
(302, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '082268856202', 'dwi.surotul.isni3@gmail.com', 0, 'SLOW LIVING SEBAGAI SENI MENIKMATI HIDUP DI ERA VUCA SEBUAH PERSPEKTIF ISLAM', 'reg-abstrak299.pdf', 'reg-ktm299.pdf', 'reg-surat-pernyataan299.pdf', 'reg-soft-copy299.pdf', 'Dwi Surotul Isni', 'Klarisa Yoselbela', '', '', '', 'Kelompok', ''),
(303, 'Modus Daring 2', 'Psy-Proposal', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-25', '08112251402', 'muti.nsalsabila@gmail.com', 0, 'Pengaruh Pola Asuh Islam terhadap Resiliensi Generasi Strawberry di Era VUCA', 'reg-abstrak303.pdf', 'reg-ktm303.pdf', 'reg-surat-pernyataan303.pdf', 'reg-soft-copy303.pdf', 'Mutiara Nathania Salsabila', 'Salma Farhanah', 'Auza Azzahra', '-', '-', 'Kelompok', ''),
(304, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '085764258774', 'salmiacahayafitri@gmail.com', 0, 'Kemenangan Untuk Ibu Ke Tanah Suci', 'Alur_Singkat_Cerpen_-_Salmia_Cahaya_Fitri.pdf', 'KTM___12060122450___SALMIA_CAHAYA_FITRI.pdf', 'Lembar_Pernyataan_Salmia_Cahaya_Fitri.pdf', 'CerpenIslami_UIN_SUSKA_Riau_Salmia_Cahaya_Fitri.pdf', 'Salmia Cahaya Fitri', '', '', '', '', 'Perorangan', ''),
(305, 'Modus Daring 3', 'Psy-Qira\'ah', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '082298246994', '12060126325@students.uin-suska.ac.id', 0, 'Akhlak Mulia (QS. Al-Baqarah ayat 82-84)', '', 'reg-ktm304.pdf', 'reg-surat-pernyataan304.pdf', '', 'Sumini', '', '', '', 'https://youtu.be/8ahD4Cgypz8', 'Putri', ''),
(306, 'Modus Daring 3', 'Psy-Fotografi', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '082217741927', '12060122288@students.uin-suska.ac.id', 0, 'Islamic in the VUCA Era', '', 'reg-ktm304.pdf', 'reg-surat-pernyataan304.pdf', 'https://drive.google.com/drive/folders/136Ubgv1uEIwOGGc7dHHLvcOWcRwfK0oW', 'Tarania Qudri', '', '', '', '', 'Perorangan', '');
INSERT INTO `tbl_reg` (`reg_id`, `reg_delegasi`, `reg_jenis`, `reg_universitas`, `reg_date`, `hp`, `email`, `category_id`, `judul`, `abstrak`, `ktm`, `pernyataan`, `softcopy`, `penulis1`, `penulis2`, `penulis3`, `penulis4`, `penulis5`, `kategori`, `link`) VALUES
(309, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '083180165583', '12060123251@students.uin-suska.ac.id', 0, 'Mindful Parenting dan Parental Mediation dalam Perspektif Islam dan Psikologi', '', 'reg-ktm304.pdf', 'reg-surat-pernyataan304.pdf', 'https://drive.google.com/file/d/16LRKo9MXiX8ZNhOj98EwqmB8v6-pXxVb/view?usp=sharing', 'Fita Indah Yustika Sari', '', '', '', '', 'Perorangan', ''),
(310, 'Modus Daring 2', 'Psy-HCMotion', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-25', '082128195691', '1206000096@student.uinsgd.ac.id', 0, 'MENANGANI TANTANGAN ZERO GROWTH PADA SEKTOR INDUSTRI DENGAN PEMANFAATAN TEKNOLOGI DIGITAL DI ERA VUCA DAN INDUSTRI 4.0', 'reg-abstrak304.pdf', 'reg-ktm304.pdf', 'reg-surat-pernyataan304.pdf', 'reg-soft-copy304.pdf', 'Muhamad Anshori', 'Muhammad Rais Muslim', '', '', '', 'Kelompok', ''),
(312, 'Modus Daring 3', 'Psy-Lagu Religi', 'Universitas Islam Bandung', '2023-03-25', '081324720097', 'nononfriyanti@gmail.com', 0, 'Al-I\'tiraf', '', 'reg-ktm304.pdf', 'reg-surat-pernyataan304.pdf', '', 'Tasya Berlian Cittra Friyanti', '', '', '', 'https://youtu.be/MXjl8e4C4nI', 'Putri', 'https://youtu.be/MXjl8e4C4nI'),
(313, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Islam Bandung', '2023-03-25', '083833117180', 'dizaaax@gmail.com', 0, 'Goresan Luka Dita', 'SINOPSIS_CERPEN_na.pdf', 'KTM_na.pdf', 'Surat_Orisinalitas_na.pdf', 'PsyCerpen_Islami_Universitas_Islam_Bandung_Nabila_Adzafirah_Kategori_Individu.pdf', 'Nabila Adzafirah', '', '', '', '', 'Perorangan', ''),
(314, 'Modus Daring 3', 'Psy-Qira\'ah', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '085263831327', 'septialailiyulyan@gmail.com', 0, 'Akhlak Mulia ( berbakti kepada orang tua) Q.S Luqman ayat 13-15', '', 'reg-ktm313.pdf', 'reg-surat-pernyataan313.pdf', '', 'Yulyan Septia Laili', '', '', '', 'https://youtu.be/2DmZdQZ5S-o', 'Putri', ''),
(315, 'Modus Daring 3', 'Psy-Preach', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '+6282285330898', 'annisakrofifah@gmail.com', 0, 'Peran Kepemimpinan Muslim Pada Era VUCA', '', 'KTM_ANNISAK_ROFIFAH.pdf', 'reg-surat-pernyataan313.pdf', '', 'Annisak Rofifah', '', '', '', 'https://youtu.be/G0UTNWp2oh8', 'Putri', ''),
(322, 'Modus Daring 3', 'Psy-Qira\'ah', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '085353569079', '11960124958@students.uin-suska.ac.id', 0, 'QS. Al-Ahzab ayat 21-22', 'KTM___11960124958___SITI_MINARDA.pdf', 'KTM___11960124958___SITI_MINARDA.pdf', 'KTM___11960124958___SITI_MINARDA.pdf', 'KTM___11960124958___SITI_MINARDA.pdf', 'Siti Minarda', '', '', '', 'https://youtu.be/EOpuk1d9f00', 'Putri', ''),
(317, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '08994814272', 'riannad101@gmail.com', 0, 'Perilaku Mutmainnah Sebagai Dasar dalam Menghadapi VUCA', 'Psy-Esai_Universitas_Islam_Negeri_Sultan_Syarif_Kasim_Alana_Floriansa_Del_Fajrinna_(abstrak).pdf', 'KTM___12060124207___Alana_Floriansa_Del_Fajrinna.pdf', 'Surat_Pernyataanalana.pdf', 'Psy-Esai_Universitas_Islam_Negeri_Sultan_Syarif_Kasim_Alana_Floriansa_Del_Fajrinna.pdf', 'Alana Floriansa Del Fajrinna', '', '', '', '', 'Perorangan', ''),
(318, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '081363053461', 'zakiaaufa66@gmail.com', 0, 'Misi Riani Untuk Papa', 'Sinopsis_Psy-CerpenIslami_UIN_Suska_Riau_Aufa_Zakia.pdf', 'KTM___12260121114___Aufa_Zakia.pdf', 'IMG-20230325-WA0070aufa.pdf', 'Cerpen_Islami_UIN_Suska_Riau_Aufa_Zakia__Khairun_Nisa_Nur_Rafita.pdf', 'Aufa Zakia', 'Khairun Nisa Nur Rafita', '', '', '', 'Kelompok', ''),
(319, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '081276479047', 'aningindira23@gmail.com', 0, 'Kepemimpinan Rasulullah Dalam Diri Pemimpin Masa Depan', 'Abstrak_Psy-Esai_UIN_Suska_Riau_Aning_Indira_Putri.pdf', 'KTM_Psy-Esai_UIN_Suska_Riau_Aning_Indira_Putri.pdf', 'Surat_Pernyataan_Orisinalitas_Psy-Esai_UIN_Suska_Riau_Aning_Indira_Putri.pdf', 'Psy-Esai_UIN_Suska_Riau_Aning_Indira_Putri.pdf', 'Aning Indira Putri', 'Aufa Zakia', 'Khairun Nisa Nur Rafita', '', '', 'Kelompok', ''),
(321, 'Modus Daring 2', 'Psy-HCMotion', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '0838 0213 1819', 'oktaviaikasari45@gmail.com', 0, 'KARAKTERISTIK PEMIMPIN YANG ADIL MEWUJUDKAN KESEJAHTERAAN KARYAWAN DALAM PERSPEKTIF ISLAM', 'reg-abstrak313.pdf', 'reg-ktm313.pdf', 'reg-surat-pernyataan313.pdf', 'reg-soft-copy313.pdf', 'Oktavia Ika Sari', 'Heidisa Alauddina', 'Rani Flonia', '', '', 'Kelompok', ''),
(323, 'Modus Daring 3', 'Psy-Fotografi', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-25', '081387312710', 'sherlock2461@gmail.com', 0, 'Architecture', '', 'reg-ktm322.jpeg', 'reg-surat-pernyataan322.pdf', 'https://drive.google.com/drive/folders/1EF0UyhHim9slMIbzfTN1jfyrcnB2nX7Z?usp=share_link', 'Aditya', '', '', '', '', 'Perorangan', ''),
(324, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '082283392695', '12060123759@student.uin-suska.ac.id', 0, 'Peran Pembelajaran Agama Islam Untuk Meningkatkan Perkembangan Kognitif Anak dengan Keterbatasan Mental', '', 'reg-ktm322.pdf', 'reg-surat-pernyataan322.pdf', 'https://drive.google.com/file/d/1sgHFPQ7PbxxWix6GQhzTMiNNrCxnvsPv/view?usp=drivesdk', 'Aura Maryam', '', '', '', '', 'Perorangan', ''),
(325, 'Modus Daring 2', 'Psy-HCMotion', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '082287118340', 'mkhoirunnas09@gmail.com', 0, 'Mempersiapkan Generasi Muda Muslim Untuk Menghadapi Dunia Kerja di Era Revolusi Industri 4.0', 'abstrakKhoirunnas.pdf', 'ktmUIN_SUSKA_RIAU_Muhammad_Khoirunnas.pdf', 'oriKhoirunnas.pdf', 'Psy-HRC_UIN_SUSKA_RIAU_Muhammad_Khoirunnas.pdf', 'Muhammad Khoirunnas', 'Muhammad Adjie Alfarisi', 'Meily Fatirah', '', '', 'Kelompok', ''),
(326, 'Modus Daring 2', 'Psy-Proposal', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '081268717156', '12160124284@students.uin-suska.ac.id', 0, 'Hubungan Prophetic Parenting dengan Classroom Incivility pada siswa', 'abstrakradisha.pdf', 'ktmradishs.pdf', 'oriradisha.pdf', 'karyaradisha.pdf', 'Radhisa Oktadevani', 'Vivi Rinda Yani', '', '', '', 'Kelompok', ''),
(327, 'Modus Daring 2', 'Psy-Proposal', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau', '2023-03-25', '081278727503', '12060126216@students.uin-suska.ac.id', 0, 'Peran Integrative Islamic Personality Sebagai Moderator Pengaruh Classroom Incivility dan Academic Stress Terhadap Kesehatan Mental Mahasiswa', 'Abstrak IPCOM_Salwayana.pdf', 'reg-ktm322.pdf', 'ori Salwayana.pdf', 'karyasalwa.pdf', 'Salwayana', '', '', '', '', 'Perorangan', ''),
(328, 'Modus Daring 3', 'Psy-Fotografi', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-25', '082115615193', 'afinasalsabila86@gmail.com', 0, 'VUCA Leadership in VUCA Situation by Security Guard in Al-Jabbar Mosque', '', 'reg-ktm322.jpg', 'reg-surat-pernyataan322.pdf', 'https://drive.google.com/drive/folders/1PPh9oq7Li6lhGGqY-gxvAnvNYpSBFyl4', 'Afina Naqiyya Salsabila', '-', '-', '-', '-', 'Perorangan', ''),
(329, 'Modus Daring 2', 'Psy-Proposal', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '081241678949', 'fadilahsukma30@gmail.com', 0, 'Pengaruh efikasi diri dan orientasi masa depan terhadap kesiapan kerja mahasiswa di era vuca', 'reg-abstrak322.pdf', 'KTM.pdf', 'Psy-Proposal_UIN_Sunan_Gunung_Djati_Nephia_Kategori_Kelompok.pdf', 'Psy-proposal_UIN_Sunan_Gunung_Djati_Nephia_Rai_Rachmanda_Kategori_Kelompok.pdf', 'Nephia Rai Rachmanda', 'Fadilah Sukma Utami ', 'Reva Savela', '', '', 'Kelompok', ''),
(330, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Terima Kasih. Sub Tema : Kesehatan Mental Pada Era VUCA (Membangun Pribadi yang  Mutmainnah)', 'reg-abstrak330.pdf', 'KTM_Gheva_Yusriah_Sri_Wulan_Akmalia.pdf', 'Psy-Cerpen_Islami_UIN_Sunan_Gunung_Djati__Gheva_Yusriah_Dalillah_Kategori_Kelompok.pdf', 'Psy-CerpenIslami_UIN_Sunan_Gunung_Djati_Bandung_Gheva_Yusriah.pdf', 'Gheva Yuriah Dalillah', 'Sri Wulan Amalia', '', '', '', 'Kelompok', ''),
(331, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Certain. Sub Tema : Kesehatan Mental Pada Era VUCA (Membangun Pribadi yang Mutmainnah)', 'reg-abstrak330.pdf', '16747426722998514340233108149529_-_Syakira_Aulya.jpg', 'Psy-Cerpen_UIN_Sunan_Gunung_Djati_Syakira_Kategori_Individu_.jpg', 'Psy-Cerpen_UIN_Sunan_Gunung_Djati_Syakira_Kategori_Individu.pdf', 'Syakira Aulya Fillah', '', '', '', '', 'Perorangan', ''),
(332, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Interloacked. Sub Tema : Peran Pola Asuh Islami Pada Era VUCA', 'reg-abstrak330.pdf', 'KTM_Iqlima_Nurkarima.pdf', 'Psy-Cerpen_UIN_Sunan_Gunung_Djati_Iqlima_Nurkarima_M.pdf', 'Psy-Cerpen_Islami_UIN_Sunan_Gunung_Djati_Iqlima_Nurkarima_Maulidin_Individu.pdf', 'Iqlima Nur Kalima Maulidin', '', '', '', '', 'Perorangan', ''),
(333, 'Modus Daring 2', 'Psy-Cerpen', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Suksesku Buah Kasih Sayangmu. Sub Tema : Peran Pola Asuh Islami pada Era VUCA', 'reg-abstrak330.pdf', 'KTM_AZKA_-_???enhee.jpg', 'Psy-CerpenIslami_AzkaMazaya.pdf', 'Psy-CerpenIslami_UINSGDBandung_AzkaMazaya.pdf', 'Azka Mazaya', '', '', '', '', 'Perorangan', ''),
(334, 'Modus Daring 2', 'Psy-HCMotion', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Menjawab Tantangan Artificial Intelligence dengan  Ahsanu’amala', 'reg-abstrak330.pdf', 'KTM_HC_-_Dzakiya_Nurul_Aini.pdf', 'Psy-HC-Motion_UIN_Sunan_Gunung_Djati_Bandung_Kelompok_2.pdf', 'Psy-HRC_UIN_SGD_Tim_2_(Denada_Martantri).pdf', 'Denada Martantri', 'Dzakiya Nurul Aini', 'Fadillah Sukma', '', '', 'Kelompok', ''),
(335, 'Modus Daring 2', 'Psy-HCMotion', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'UNDANG-UNDANG CIPTA KERJA MENCEMASKAN PARA TENAGA  KERJA: SOLUSI HUMAN RESOURCE POV', 'reg-abstrak330.pdf', 'KTM_KEL_1_HC_MOTION.pdf', 'LEMBAR_PERNYATAAN_ORISINALITAS_KARYA.pdf', 'Psy-HRC_UIN_SGD_Yasmin_Maulida_A.pdf', 'Yasmin Maulida Alhusna', 'Munatul Fuadah', 'Khansa Alisha', '', '', 'Kelompok', ''),
(336, 'Modus Daring 2', 'Psy-Paper', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'STRESS PADA MAHASISWA DI ERA VUCA: DITINJAU DARI KESALEHAN  DALAM KONTEKS SOSIAL', 'Psy-Paper_UIN_Sunan_Gunung_Djati_Tri_Lestari_dkk__(Abstrak).pdf', 'Psy-Paper_UIN_Sunan_Gunung_Djati_Tri_Lestari_dkk__(KTM).pdf', 'Psy-Paper_UIN_Sunan_Gunung_Djati_Tri_Lestari_dkk__(Orisinalitas).pdf', 'Psy-Paper_UIN_Sunan_Gunung_Djati_Tri_Lestari_dkk__(Paper).pdf', 'Tri Lestari', 'Rahayu Ramdaniyati', 'Ristiani Ayuning Misyel Andini', '', '', 'Kelompok', ''),
(337, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Implementasi QS. Ar-Ra’d ayat 28 terhadap Fenomena Spiritual Emptiness  di Kalangan Mahasiswa pada Era VUCA', 'reg-abstrak330.pdf', 'KTM_Psy-Essai_IPCOM.pdf', 'Lembar_Originalitas_Psy-Essai_UIN_Sunan_Gunung_Djati_Bandung_M_Ramdhan_Assidiq_Kategori_Kelompok.pdf', 'Psy-Essai_UIN_Sunan_Gunung_Djati_Bandung_M_Ramdhan_Assidiq_Kategori_kelompok_(2).pdf', 'Mochamad Ramdhan Assidiq', 'Destri Syawalgia Ranki', 'Hanipah Sukmawati', '', '', 'Kelompok', ''),
(338, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'MINDFULNESS SEBAGAI UPAYA MENJAGA KESEHATAN MENTAL DI ERA VUCA UNTUK MENCAPAI PRIBADI YANG MUTMAINNAH', 'reg-abstrak330.pdf', 'KTM_Psy-Esai_Tim_3(1).pdf', 'Psy-Esai_Lembar_Orisinalitas_UIN_Sunan_Gunung_Djati_Bandung_Sri_Wulan_A.pdf', 'Psy-Esai_UIN_Sunan_Gunung_Djati_Bandung_Sri_Wulan_A.pdf', 'Sri Wulan Akmalia', 'Istiqa Nurhillah Abdiny Malika', 'Siti Rahmi Nur Rahmah', '', '', 'Kelompok', ''),
(345, 'Modus Daring 2', 'Psy-Esai', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'ISLAMIC SMART TECHNO PARENTING: SEBUAH SOLUSI UNTUK  MEREDUKSI DEGRADASI MORAL PADA REMAJA DI ERA VUCA', 'reg-abstrak345.pdf', 'reg-ktm345.pdf', 'reg-surat-pernyataan345.jpg', 'reg-soft-copy345.pdf', 'Ristiani Ayuning Misyel Andini', 'Rahayu Ramdaniyati', 'Sabrina Fitrohromadona Aljabar', '', '', 'Kelompok', ''),
(341, 'Modus Daring 3', 'Psy-Lagu Religi', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Lagu Wajib : Muhasabah Cinta - Edcoustic ; Lagu Pilihan : Takkan Berpaling Dari-Mu - Rossa', '', 'reg-ktm330.pdf', 'reg-surat-pernyataan330.pdf', '', 'Isma Nurhanipah', '', '', '', 'https://drive.google.com/drive/folders/1RMhcXLJIEI9trECC0-KJz7z4cC4ATMnM?usp=share_link', 'Putri', 'https://drive.google.com/drive/folders/1RMhcXLJIEI9trECC0-KJz7z4cC4ATMnM?usp=share_link'),
(342, 'Modus Daring 3', 'Psy-Lagu Religi', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Lagu Wajib : Muhasabah Cinta - Edcoustic ; Lagu Pilihan : Al Waba - Sabyan', '', 'reg-ktm330.pdf', 'reg-surat-pernyataan330.pdf', '', 'Erika Sri Yuningsih', '', '', '', 'https://drive.google.com/drive/folders/1wDJ7HgSNVZrtUthYPhZ0Xoui66LfLq6i?usp=share_link', 'Putri', 'https://drive.google.com/drive/folders/1wDJ7HgSNVZrtUthYPhZ0Xoui66LfLq6i?usp=share_link'),
(343, 'Modus Daring 3', 'Psy-Preach', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Peran Asuh Orang Tua Di Era VUCA', '', 'reg-ktm343.pdf', 'reg-surat-pernyataan343.pdf', '', 'Erika Sri Yuningsih', '', '', '', 'https://drive.google.com/drive/folders/1Uda7HJYpWqzrT-4vMuI1qOV19XGz2sJ1?usp=share_link', 'Putri', ''),
(344, 'Modus Daring 3', 'Psy-Preach', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Peran Kepribadian Muslim Pada Era VUCA', '', 'reg-ktm343.pdf', 'reg-surat-pernyataan343.pdf', '', 'Fahreinsya Hasbi', '', '', '', 'https://drive.google.com/drive/folders/1TuriGIU7XUn6jotzbxhWiJ1bAk4ruDRQ?usp=share_link', 'Putra', ''),
(346, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'Mastering Calm and Peaceful Mind : Menghadapi Kesehatan Mental Menghadapi Tantangan VUCA', '', 'reg-ktm346.pdf', 'reg-surat-pernyataan346.pdf', 'https://drive.google.com/file/d/1EFzcCI2A2Rs74posdaZcTqdIT88HjEq3/view?usp=share_link', 'Nuraesha Ambarweni', 'Fadia Yunita Afifah', 'Afifah Marsyla F', '', '', 'Kelompok', ''),
(347, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089604188141', 'wd3psi@uinsgd.ac.id', 0, 'The Old School Leadership VS VUCA Leadership: What\'s the Different ?', '', 'reg-ktm346.pdf', 'reg-surat-pernyataan346.pdf', 'https://drive.google.com/file/d/1UwuezBFXbDaIYfmeLSC15i2CQpX0nw_M/view?usp=share_link', 'Munatul Fuadah', 'Khansa Alisha Thabina', '', '', '', 'Kelompok', ''),
(348, 'Modus Daring 3', 'Psy-Poster', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '081287661667', 'syifaauliafit@gmail.com', 0, 'Menjaga Kesehatan Mental pada Era VUCA dengan OBAT', '', 'reg-ktm348.pdf', 'reg-surat-pernyataan348.pdf', 'https://drive.google.com/drive/folders/1xMK6KRMtFefNqL6NGvliJaVulgi6aTiR', 'Syifa Aulia Fitrotunnisa. R', '', '', '', '', 'Perorangan', ''),
(349, 'Modus Daring 3', 'Psy-Qira\'ah', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '082213317061', 'ezot.rezpack@gmail.com', 0, 'Surah Al Ahzab Ayat 21-25', '', 'reg-ktm349.pdf', 'reg-surat-pernyataan349.pdf', '', 'Akmal Reza', '', '', '', 'https://drive.google.com/drive/folders/1XJ5EgxgZPpjzsh15BK_rJS2YRNGD9USf', 'Putra', ''),
(350, 'Modus Daring 3', 'Psy-Qira\'ah', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '081298860317', 'tasyasyfts@gmail.com', 0, 'Psy-Qiraah_Surat An-Nisa ayat 103', '', 'reg-ktm349.PDF', 'reg-surat-pernyataan349.pdf', '', 'TASYA SYAFA\'ATUSSA\'DIYYAH', '', '', '', 'https://drive.google.com/drive/folders/1MtjQ67qkUIAChcPVPAyhiD2S4RFXp1XK', 'Putri', ''),
(351, 'Modus Daring 2', 'Psy-Proposal', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung', '2023-03-26', '089662909615', 'sabilarifqi02@gmail.com', 0, 'Dzaka’: Elaborasi Kecerdasan Majemuk Islami untuk Maksimalisasi Potensi Diri Gen-Z dalam Menghadapi VUCA', 'reg-abstrak349.pdf', 'reg-ktm349.pdf', 'reg-surat-pernyataan349.pdf', 'reg-soft-copy349.pdf', 'Sabila Ar Rifqi', '', '', '', '', 'Perorangan', ''),
(352, 'Modus Daring 3', 'Psy-Preach', 'UIN Imam Bonjol Padang', '2023-03-26', '082370851622', 'putriparna6@gmail.com', 0, 'Peran dan Pola Asuh Islam di Era VUCA', 'Rencana_Aksi_TA_20230001.pdf', 'Rencana_Aksi_TA_20230001.pdf', 'Rencana_Aksi_TA_20230001.pdf', 'Rencana_Aksi_TA_20230001.pdf', 'Putri Hayati Parma', '', '', '', 'https://www.youtube.com/watch?v=rz7ODyrjjjo', 'Putri', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE `tbl_service` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `short_description` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`id`, `name`, `description`, `short_description`, `photo`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(1, 'CONSULTANT COORDINATION', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.<br></p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum. Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.<br></p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argum entum has. Latine propriae quo no unum.', 'service-1.png', 'Consultant Coordination', '', ''),
(2, 'COST MANAGEMENT', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.<br></p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum. Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argum entum has. Latine propriae quo no unum.', 'service-2.png', 'Cost Management', '', ''),
(3, 'TRAINING PROGRAM', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.<br></p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum. Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argum entum has. Latine propriae quo no unum.', 'service-3.png', 'Training Program', '', ''),
(4, 'PROJECT MANAGEMENT', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.<br></p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum. Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argum entum has. Latine propriae quo no unum.', 'service-4.png', 'Project Management', '', ''),
(5, 'QUALITY ASSURANCE', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.<br></p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum. Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argum entum has. Latine propriae quo no unum.', 'service-5.png', 'Quality Assurance', '', ''),
(6, 'REPORTING', '<p>Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens expetenda id sit, at usu eius eligendi singulis. Sea ocurreret principes ne. At nonumy aperiri pri, nam quodsi copiosae intellegebat et, ex deserunt euripidis usu. Per ad ullum lobortis. Duo volutpat imperdiet ut, postea salutatus imperdiet ut per, ad utinam debitis invenire has.</p><p>Vix tale noluisse voluptua ad, ne brute altera democritum cum. Omnes ornatus qui et, te aeterno discere ocurreret sea. Tollit cetero cu usu, etiam evertitur id nec. Id pro unum pertinax oportere, vel ad ridens mollis. Ad ius meis suavitate voluptaria.<br></p><p>Mei ut errem legimus periculis, eos liber epicurei necessitatibus eu, facilisi postulant vel no. Ad mea commune disputando, cu vel choro exerci. Pri et oratio iisque atomorum, enim detracto mei ne, id eos soleat iudicabit. Ne reque reformidans mei, rebum delicata consequuntur an sit. Sea ad audire utamur. Ut mei ridens minimum intellegat, perpetua euripidis te qui, ad consul intellegebat comprehensam eum. Ex vix alienum sadipscing, quod melius philosophia id has. Ad qui quem reprimique, quo possit detracto reprimique no, sint reque officiis ei per. Ea regione commune volutpat pro, fabulas facilis omnesque mei ne. Cu unum detracto comprehensam sea, ad vim ancillae principes, ex usu fugit consulatu. Vis te purto equidem voluptatum.</p>', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argum entum has. Latine propriae quo no unum.', 'service-6.png', 'Reporting', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int NOT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `footer_col1_title` varchar(255) NOT NULL,
  `footer_col2_title` varchar(255) NOT NULL,
  `footer_col3_title` varchar(255) NOT NULL,
  `footer_col4_title` varchar(255) NOT NULL,
  `footer_copyright` text NOT NULL,
  `footer_address` text NOT NULL,
  `footer_email` text NOT NULL,
  `footer_phone` text NOT NULL,
  `footer_recent_news_item` varchar(5) NOT NULL,
  `footer_recent_portfolio_item` varchar(5) NOT NULL,
  `newsletter_text` text NOT NULL,
  `cta_text` text NOT NULL,
  `cta_button_text` varchar(255) NOT NULL,
  `cta_button_url` varchar(255) NOT NULL,
  `cta_background` varchar(255) NOT NULL,
  `top_bar_email` varchar(255) NOT NULL,
  `top_bar_phone` varchar(255) NOT NULL,
  `send_email_from` varchar(255) NOT NULL,
  `receive_email_to` varchar(255) NOT NULL,
  `banner_about` varchar(255) NOT NULL,
  `banner_faq` varchar(255) NOT NULL,
  `banner_service` varchar(255) NOT NULL,
  `banner_testimonial` varchar(255) NOT NULL,
  `banner_news` varchar(255) NOT NULL,
  `banner_event` varchar(255) NOT NULL,
  `banner_contact` varchar(255) NOT NULL,
  `banner_search` varchar(255) NOT NULL,
  `banner_terms` varchar(255) NOT NULL,
  `banner_privacy` varchar(255) NOT NULL,
  `banner_team` varchar(255) NOT NULL,
  `banner_portfolio` varchar(255) NOT NULL,
  `banner_verify_subscriber` varchar(255) NOT NULL,
  `banner_pricing` varchar(255) NOT NULL,
  `banner_photo_gallery` varchar(255) NOT NULL,
  `front_end_color` varchar(255) NOT NULL,
  `sidebar_total_recent_post` varchar(255) NOT NULL,
  `sidebar_total_upcoming_event` varchar(255) NOT NULL,
  `sidebar_total_past_event` varchar(255) NOT NULL,
  `sidebar_news_heading_category` varchar(255) NOT NULL,
  `sidebar_news_heading_recent_post` varchar(255) NOT NULL,
  `sidebar_event_heading_upcoming` varchar(255) NOT NULL,
  `sidebar_event_heading_past` varchar(255) NOT NULL,
  `sidebar_service_heading_service` varchar(255) NOT NULL,
  `sidebar_service_heading_quick_contact` varchar(255) NOT NULL,
  `sidebar_portfolio_heading_project_detail` varchar(255) NOT NULL,
  `sidebar_portfolio_heading_quick_contact` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `favicon`, `footer_col1_title`, `footer_col2_title`, `footer_col3_title`, `footer_col4_title`, `footer_copyright`, `footer_address`, `footer_email`, `footer_phone`, `footer_recent_news_item`, `footer_recent_portfolio_item`, `newsletter_text`, `cta_text`, `cta_button_text`, `cta_button_url`, `cta_background`, `top_bar_email`, `top_bar_phone`, `send_email_from`, `receive_email_to`, `banner_about`, `banner_faq`, `banner_service`, `banner_testimonial`, `banner_news`, `banner_event`, `banner_contact`, `banner_search`, `banner_terms`, `banner_privacy`, `banner_team`, `banner_portfolio`, `banner_verify_subscriber`, `banner_pricing`, `banner_photo_gallery`, `front_end_color`, `sidebar_total_recent_post`, `sidebar_total_upcoming_event`, `sidebar_total_past_event`, `sidebar_news_heading_category`, `sidebar_news_heading_recent_post`, `sidebar_event_heading_upcoming`, `sidebar_event_heading_past`, `sidebar_service_heading_service`, `sidebar_service_heading_quick_contact`, `sidebar_portfolio_heading_project_detail`, `sidebar_portfolio_heading_quick_contact`) VALUES
(1, 'logo.jpeg', 'favicon.jpeg', 'NEWSLETTER', 'BERITA TERKINI', 'PROJECT', 'ALAMAT', 'Copyright © 2023, ipcom. All Rights Reserved.', 'Alamat : Jln. A.H. Nasution No. 105 Cibiru Bandung 40614', 'ipcom@uinsgd.ac.id', 'CP : Hilmi Agni (089523906411) \r\n Parulima (089609644597)', '4', '9', 'Detracto contentiones te est, brute ipsum consul an vis. Mea ei regione blandit ullamcorper, definiebas constituam vix ei.', 'Untuk informasi lebih lanjut, silahkan hubungi kami...', 'Hubungi kami', 'https://api.whatsapp.com/send?phone=6289523906411&text=Assalamu%20\'alaikum%20Bapak,%20Saya%20ingin%20info%20selengkapnya.', 'cta_background.jpeg', 'ipcom@uinsgd.ac.id', '089523906411', 'ipcom@uinsgd.ac.id', 'ipcom@uinsgd.ac.id', 'banner_about.png', 'banner_faq.png', 'banner_service.jpg', 'banner_testimonial.png', 'banner_news.png', 'banner_event.png', 'banner_contact.png', 'banner_search.jpg', 'banner_terms.jpg', 'banner_privacy.jpg', 'banner_team.png', 'banner_portfolio.jpg', 'banner_verify_subscriber.jpg', 'banner_pricing.jpg', 'banner_photo_gallery.png', '4776C8', '3', '5', '5', 'Kategori', 'Berita Terkini', 'Kompetisi Berikutnya', 'Kompetisi Selesai', 'OUR SERVICES', 'QUICK CONTACT', 'PROJECT DETAILS', 'QUICK CONTACT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int NOT NULL,
  `photo` varchar(255) NOT NULL,
  `heading` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `button1_text` varchar(255) NOT NULL,
  `button1_url` varchar(255) NOT NULL,
  `button2_text` varchar(255) NOT NULL,
  `button2_url` varchar(255) NOT NULL,
  `position` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `photo`, `heading`, `content`, `button1_text`, `button1_url`, `button2_text`, `button2_url`, `position`) VALUES
(8, 'slider-8.jpg', 'TEMA IPCOM IV 2023', '\"Peran Mahasiswa Psikologi Dalam Mengembangkan Psikologi Islam Pada Era VUCA\"', 'SELENGKAPNYA', '#', 'kONTAK KAMI', 'https://api.whatsapp.com/send?phone=6289523906411&text=Assalamu%20\'alaikum%20Bapak,%20Saya%20ingin%20info%20selengkapnya.', 'Left'),
(7, 'slider-4.jpg', 'WILUJENG SUMPING', 'Urang paheuyeuk-heuyeuk leungeun\r\nPaantay-antay tangan\r\nBengkung ngariung, Bongok ngaronyok\r\nHayu, Ngarojong IPCOM IV 2023', 'SELENGKAPNYA', '#', 'KONTAK KAMI', 'https://api.whatsapp.com/send?phone=6289523906411&text=Assalamu%20\'alaikum%20Bapak,%20Saya%20ingin%20info%20selengkapnya.', 'Left'),
(4, 'slider-4.png', 'ISLAMIC PSYCHOLOGY COMPETITION (IPCOM) IV 2023', 'Kompetisi ini diselenggarakan oleh sekumpulan perguruan tinggi Islam dalam naungan kerjasama, saling menopang, dan saling mendukung untuk menggapai kemajuan.', 'SELENGKAPNYA', 'https://ipcom.uinsgd.ac.id/about', 'KONTAK KAMI', 'https://api.whatsapp.com/send?phone=6289523906411&text=Assalamu%20\'alaikum%20Bapak,%20Saya%20ingin%20info%20selengkapnya.', 'Right');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `social_id` int NOT NULL,
  `social_name` varchar(30) NOT NULL,
  `social_url` varchar(255) NOT NULL,
  `social_icon` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`social_id`, `social_name`, `social_url`, `social_icon`) VALUES
(1, 'Facebook', '', 'fa fa-facebook'),
(2, 'Twitter', '', 'fa fa-twitter'),
(3, 'LinkedIn', '', 'fa fa-linkedin'),
(4, 'Google Plus', '', 'fa fa-google-plus'),
(5, 'Pinterest', 'http://www.pinterest.com', 'fa fa-pinterest'),
(6, 'YouTube', 'https://www.youtube.com/@psikologiuinbandungofficia3128', 'fa fa-youtube'),
(7, 'Instagram', 'https://www.instagram.com/ipcom_iv2023', 'fa fa-instagram'),
(8, 'Tumblr', '', 'fa fa-tumblr'),
(9, 'Flickr', '', 'fa fa-flickr'),
(10, 'Reddit', '', 'fa fa-reddit'),
(11, 'Snapchat', '', 'fa fa-snapchat'),
(12, 'WhatsApp', 'https://api.whatsapp.com/send?phone=6289523906411&text=Assalamu%20\'alaikum%20Bapak,%20Saya%20ingin%20info%20selengkapnya.', 'fa fa-whatsapp'),
(13, 'Quora', '', 'fa fa-quora'),
(14, 'StumbleUpon', '', 'fa fa-stumbleupon'),
(15, 'Delicious', '', 'fa fa-delicious'),
(16, 'Digg', '', 'fa fa-digg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `subs_id` int NOT NULL,
  `subs_email` varchar(255) NOT NULL,
  `subs_date` varchar(100) NOT NULL,
  `subs_date_time` varchar(100) NOT NULL,
  `subs_hash` varchar(255) NOT NULL,
  `subs_active` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_team_member`
--

CREATE TABLE `tbl_team_member` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `detail` text NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `youtube` varchar(255) NOT NULL,
  `google_plus` varchar(255) NOT NULL,
  `instagram` varchar(255) NOT NULL,
  `flickr` varchar(255) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` text NOT NULL,
  `meta_description` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_team_member`
--

INSERT INTO `tbl_team_member` (`id`, `name`, `designation`, `photo`, `detail`, `facebook`, `twitter`, `linkedin`, `youtube`, `google_plus`, `instagram`, `flickr`, `phone`, `email`, `website`, `meta_title`, `meta_keyword`, `meta_description`) VALUES
(2, 'Brent Grundy', 'Managing Director', 'team-member-2.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Brent Grundy', '', ''),
(3, 'Scott Ford', 'CEO', 'team-member-3.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Scott Ford', '', ''),
(4, 'Robert Krol', 'CTO', 'team-member-4.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Robert Krol', '', ''),
(5, 'Sal Harvey', 'Graphic Designer', 'team-member-5.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Sal Harvey', '', ''),
(7, 'Harold Hayes', 'Web Designer', 'team-member-7.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Harold Hayes', '', ''),
(8, 'Terry Spain', 'WordPress Developer', 'team-member-8.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Terry Spain', '', ''),
(9, 'Bryan Dolan', 'PHP Developer', 'team-member-9.jpg', '<p>Lorem ipsum dolor sit amet, ea eos viderer electram quaerendum, id eam mundi oblique docendi. Ex per dicta vitae persius, volumus suavitate elaboraret eos in. Fugit quaeque suavitate qui an, no discere noluisse sea. At vim sanctus scaevola consetetur, ius falli appellantur ad. Per virtute inermis neglegentur cu. Eius meis voluptua te nec, ne eam aperiam accommodare complectitur.</p><p>Cu dicat partem verterem mel. Integre repudiandae nam ea, nam corpora salutatus ea, laudem neglegentur nam no. Ne alii nominati assentior mei, has decore molestie cu, ea pri oportere consetetur. Ex virtute complectitur eum, vel facilis efficiantur concludaturque ne, ad mea graeco nostro. In alia stet definiebas sed, soluta reprimique nec cu.<br></p><p>Melius pertinax pri id, ea mea alterum scripserit, ipsum officiis evertitur et sed. Eu qui lorem eirmod, vix odio tacimates in, mei cu phaedrum deserunt theophrastus. Duo ex elit iriure intellegam, eos quis indoctum definitiones eu, ex vix quaeque eligendi accommodare. Enim recteque gloriatur cu qui. Qui sint honestatis ullamcorper te, in vim suas esse eius, per an equidem habemus ancillae.<br></p><p>Eu assum soluta ancillae per, pri ut mutat errem homero, no eum eros argumentum. Congue civibus accusam ei qui, mei harum labore vidisse no. Ei utinam legere periculis eam, vide ponderum interpretaris ei quo. Ad duo paulo nihil laoreet, ea per delectus expetendis. Dicam platonem periculis eos in, dicat nihil conceptam est ut.</p>', '#', '#', '#', '#', '', '', '', '111-222-3333', 'member@yourwebsite.com', 'http://www.yourwebsite.com', 'Bryan Dolan', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_testimonial`
--

CREATE TABLE `tbl_testimonial` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `comment` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_testimonial`
--

INSERT INTO `tbl_testimonial` (`id`, `name`, `designation`, `photo`, `comment`) VALUES
(2, 'Robert Krol', 'CEO, ABC Company', 'testimonial-2.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(3, 'Sal Harvey', 'Director, DEF Company', 'testimonial-3.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(4, 'Terry Spain', 'Founder, XYZ Company', 'testimonial-4.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(5, 'John Hilton', 'CEO, AAA Company', 'testimonial-5.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(6, 'Arthur Cox', 'Chairman, RR Company', 'testimonial-6.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.'),
(7, 'David Moore', 'HR Manager, DSF Company', 'testimonial-7.jpg', 'Lorem ipsum dolor sit amet, an labores explicari qui, eu nostrum copiosae argumentum has. Latine propriae quo no, unum ridens.');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `role` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `password`, `photo`, `token`, `role`, `status`) VALUES
(1, 'admin@uinsgd.ac.id', '0192023a7bbd73250516f069df18b500', 'user-.jpg', '', 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_why_choose`
--

CREATE TABLE `tbl_why_choose` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `icon` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_why_choose`
--

INSERT INTO `tbl_why_choose` (`id`, `name`, `content`, `icon`, `photo`) VALUES
(1, 'QUICK RESPONSE', 'Iisque persius ne sit, simul zril vix eu. Qui ne iusto epicuri suscipiantur, sit ne probo adhuc. Liber verterem interpretaris nam et, ea pro solum expetendis.', 'fa fa-clock-o', 'why-choose-1.jpg'),
(7, '100% SATISFACTION', 'Duo luptatum delicata evertitur ad. Usu te quaerendum definitiones, ne mundi volutpat duo, in dissentias temporibus pri. Duo ferri dicant definitionem te.', 'fa fa-thumbs-up', 'why-choose-7.jpg'),
(8, 'CREATIVE SERVICE', 'Amet dolor oratio ex has, stet repudiare definiebas vim ne. Id probo facilisis usu, pri aliquam omnesque cu. Vide assentior id qui, quando possim eos.', 'fa fa-globe', 'why-choose-8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `active` tinyint UNSIGNED DEFAULT '1',
  `nama` varchar(100) DEFAULT NULL,
  `foto` varchar(200) DEFAULT 'foto-default.jpg',
  `level` varchar(100) NOT NULL,
  `reg_jenis` varchar(200) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `tempat_lhr` varchar(100) NOT NULL,
  `jenkel` varchar(20) NOT NULL,
  `notelp` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `id_prov` varchar(25) NOT NULL,
  `id_kab` varchar(25) NOT NULL,
  `id_kec` varchar(25) NOT NULL,
  `id_kel` varchar(25) NOT NULL,
  `id_prov_ortu` varchar(25) NOT NULL,
  `id_kab_ortu` varchar(25) NOT NULL,
  `id_kec_ortu` varchar(25) NOT NULL,
  `id_kel_ortu` varchar(25) NOT NULL,
  `hobby` varchar(100) NOT NULL,
  `bakat` varchar(100) NOT NULL,
  `orangtua` varchar(100) NOT NULL,
  `notelp_ortu` varchar(25) NOT NULL,
  `alamat_ortu` varchar(255) NOT NULL,
  `npk` varchar(25) NOT NULL,
  `nidn` varchar(25) NOT NULL,
  `rt` varchar(10) NOT NULL,
  `rw` varchar(10) NOT NULL,
  `universitas` varchar(100) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `active`, `nama`, `foto`, `level`, `reg_jenis`, `jabatan`, `tempat_lhr`, `jenkel`, `notelp`, `email`, `alamat`, `id_prov`, `id_kab`, `id_kec`, `id_kel`, `id_prov_ortu`, `id_kab_ortu`, `id_kec_ortu`, `id_kel_ortu`, `hobby`, `bakat`, `orangtua`, `notelp_ortu`, `alamat_ortu`, `npk`, `nidn`, `rt`, `rw`, `universitas`) VALUES
(1, '811admin', '0192023a7bbd73250516f069df18b500', 1, 'Bambang Kamajaya Barus, SP', 'foto-default.jpg', 'admin', 'All', 'Admin', '', '', '', 'kamabarus@yahoo.co.id', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(130, 'undang', '0192023a7bbd73250516f069df18b500', 1, 'Undang Kamaludin', 'foto-default.jpg', 'subadmin', '', 'Admin Universitas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Bandung'),
(142, 'yulia', '0192023a7bbd73250516f069df18b500', 1, 'YULIA HERAWATI, S.PSI., M.SI', 'foto-default.jpg', 'juri', 'Psy-Preach', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(132, 'indah', '0192023a7bbd73250516f069df18b500', 1, 'Indah Andika Octavia', 'foto-default.jpg', 'subadmin', '', 'Admin Universitas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(133, 'kardinah', '0192023a7bbd73250516f069df18b500', 1, 'N. Kardinah', 'foto-default.jpg', 'subadmin', '', 'Admin Universitas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung'),
(134, 'iredho', '0192023a7bbd73250516f069df18b500', 1, 'Iredho Fani Reza, MA.Si', 'foto-default.jpg', 'subadmin', '', 'Admin Universitas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Raden Fatah Palembang'),
(135, 'ainin', '0192023a7bbd73250516f069df18b500', 1, 'Ainin Rahmanawati, M.A', 'foto-default.jpg', 'subadmin', '', 'Admin Universitas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Muhammadiyah Bandung'),
(136, 'fara', '0192023a7bbd73250516f069df18b500', 1, 'Fara Ulfa, M.Psi., Psikolog', 'foto-default.jpg', 'subadmin', '', 'Admin Universitas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau'),
(137, 'barus', '0192023a7bbd73250516f069df18b500', 1, 'Bambang Kamajaya Barus, SP', 'foto-default.jpg', 'subadmin', '', 'Admin Universitas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(138, 'bahril', '0192023a7bbd73250516f069df18b500', 1, 'BAHRIL HIDAYAT, M.PSI., PSIKOLOG', 'foto-default.jpg', 'juri', 'Psy-Paper', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(139, 'syarifah', '0192023a7bbd73250516f069df18b500', 1, 'SYARIFAH FARRADINNA, M.A., PH.D', 'foto-default.jpg', 'juri', 'Psy-Proposal', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(140, 'fikri', '0192023a7bbd73250516f069df18b500', 1, 'DR. FIKRI, S.PSI., M.SI', 'foto-default.jpg', 'juri', 'Psy-Esai', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(141, 'juliarni', '0192023a7bbd73250516f069df18b500', 1, 'JULIARNI SIREGAR, M.PSI., PSIKOLOG', 'foto-default.jpg', 'juri', 'Psy-Cerdas Cermat', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(143, 'sigit', '0192023a7bbd73250516f069df18b500', 1, 'DR. SIGIT NUGROHO, M.PSI., PSIKOLOG', 'foto-default.jpg', 'juri', 'PSY-TAHFIDZ JUZ 1-5', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(144, 'didik', '0192023a7bbd73250516f069df18b500', 1, 'DIDIK WIDIANTORO, M.PSI., PSIKOLOG', 'foto-default.jpg', 'juri', 'Psy-Fotografi', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(145, 'leni', '0192023a7bbd73250516f069df18b500', 1, 'DR. LENI ARMAYATI, MSI', 'foto-default.jpg', 'juri', 'Psy-Lagu Religi', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(146, 'ahmad', '0192023a7bbd73250516f069df18b500', 1, 'AHMAD HIDAYAT, M.PSI., PSIKOLOG', 'foto-default.jpg', 'juri', 'Psy-Qira\'ah', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(147, 'ricca', '0192023a7bbd73250516f069df18b500', 1, 'Ricca Angreini Munthe, S.Psi., M.A', 'foto-default.jpg', 'juri', 'Psy-Debat', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau'),
(148, 'mukhlis', '0192023a7bbd73250516f069df18b500', 1, 'Drs. Mukhlis, M. Si', 'foto-default.jpg', 'juri', 'PSY-TAHFIDZ JUZ 30', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau'),
(149, 'ulfa', '0192023a7bbd73250516f069df18b500', 1, 'Fara Ulfa, M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-Poster', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau'),
(150, 'mai', '0192023a7bbd73250516f069df18b500', 1, 'Mai Tiza Husna, M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-HCMotion', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(151, 'kama', '0192023a7bbd73250516f069df18b500', 1, 'Kamabarus', 'foto-default.jpg', 'juri', 'Psy-Cerpen', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Riau (UIR) Pekanbaru'),
(152, 'diana', '0192023a7bbd73250516f069df18b500', 1, 'Dr. Diana Elfida, M.Si., Psikolog', 'foto-default.jpg', 'juri', 'Psy-Proposal', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau'),
(153, 'winbaktianur', '0192023a7bbd73250516f069df18b500', 1, 'Winbaktianur, M.A', 'foto-default.jpg', 'juri', 'Psy-Debat', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(154, 'subhan', '0192023a7bbd73250516f069df18b500', 1, 'Dr. Subhan Ajrin Sudirman, M.A.', 'foto-default.jpg', 'juri', 'Psy-Cerdas Cermat', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(155, 'hidayatul', '0192023a7bbd73250516f069df18b500', 1, 'Hidayatul Azizah Gazali, S.Th.I., M.Ag.', 'foto-default.jpg', 'juri', 'Psy-Qira\'ah', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(156, 'dwi', '0192023a7bbd73250516f069df18b500', 1, 'Dwi Wahyuni, M.Ag', 'foto-default.jpg', 'juri', 'Psy-Lagu Religi', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(157, 'yuliana', '0192023a7bbd73250516f069df18b500', 1, 'Yuliana Intan Lestari, S.Psi.,MA', 'foto-default.jpg', 'juri', 'Psy-Fotografi', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau'),
(158, 'mardenny', '0192023a7bbd73250516f069df18b500', 1, 'Mardenny, M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-Fotografi', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(159, 'dina', '0192023a7bbd73250516f069df18b500', 1, 'Dina Haya Sufya, M.Si', 'foto-default.jpg', 'juri', 'Psy-Preach', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau'),
(160, 'ahmaddin', '0192023a7bbd73250516f069df18b500', 1, 'Dr. Ahmaddin Ahmad Tohar. Lc., M.A', 'foto-default.jpg', 'juri', 'PSY-TAHFIDZ JUZ 1-5', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri Sultan Syarif Kasim (UIN SUSKA) Riau'),
(161, 'pismawenzi', '0192023a7bbd73250516f069df18b500', 1, 'Dr. Pismawenzi, M Ag', 'foto-default.jpg', 'juri', 'PSY-TAHFIDZ JUZ 1-5', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(162, 'sri', '0192023a7bbd73250516f069df18b500', 1, 'Dr. Sri Chalida, M.Ag.', 'foto-default.jpg', 'juri', 'PSY-TAHFIDZ JUZ 30', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(163, 'fajar', '0192023a7bbd73250516f069df18b500', 1, 'Fajar Tri Utami, M.Si', 'foto-default.jpg', 'juri', 'Psy-Esai', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Raden Fatah Palembang'),
(164, 'witrin', '0192023a7bbd73250516f069df18b500', 1, 'Witrin Gamayanti, M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-Esai', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung'),
(165, 'fani', '0192023a7bbd73250516f069df18b500', 1, 'Iredho Fani Reza, MA.Si', 'foto-default.jpg', 'juri', 'Psy-Paper', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Raden Fatah Palembang'),
(166, 'kiki', '0192023a7bbd73250516f069df18b500', 1, 'Kiki Cahaya Setiawan, M.Si', 'foto-default.jpg', 'juri', 'Psy-HCMotion', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Raden Fatah Palembang'),
(167, 'tintin', '0192023a7bbd73250516f069df18b500', 1, 'Tintin Supriyatin, M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-HCMotion', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung'),
(168, 'rizka', '0192023a7bbd73250516f069df18b500', 1, 'Rizka Kurniawati, M.Si', 'IMG_20220915_104851_8151.jpg', 'juri', 'Psy-Cerpen', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Raden Fatah Palembang'),
(169, 'leili', '0192023a7bbd73250516f069df18b500', 1, 'Hj. Leili Agustina Syaidah, S.Sos, M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-Cerpen', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung'),
(170, 'yuli', '0192023a7bbd73250516f069df18b500', 1, 'Yuli Widiningsih, M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-Cerpen', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Imam Bonjol Padang'),
(171, 'lukmawati', '0192023a7bbd73250516f069df18b500', 1, 'Lukmawati, MA', 'foto-default.jpg', 'juri', 'Psy-Lagu Religi', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Raden Fatah Palembang'),
(172, 'sarah', '0192023a7bbd73250516f069df18b500', 1, 'Sarah Afifah, M.A', 'foto-default.jpg', 'juri', 'Psy-Poster', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Raden Fatah Palembang'),
(173, 'diah', '0192023a7bbd73250516f069df18b500', 1, 'Diah Puspasari, M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-Poster', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung'),
(174, 'fenti', '0192023a7bbd73250516f069df18b500', 1, 'Dr. Fenti Hikmawati, M.Si.', 'foto-default.jpg', 'juri', 'Psy-Qira\'ah', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung'),
(175, 'endi', '0192023a7bbd73250516f069df18b500', 1, 'Dr. H. Endi, M.A.', 'foto-default.jpg', 'juri', 'Psy-Preach', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung'),
(176, 'fridayanti', '0192023a7bbd73250516f069df18b500', 1, 'Dr. Fridayanti, M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-Paper', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung'),
(177, 'nani', '0192023a7bbd73250516f069df18b500', 1, 'Dr. Nani Nuranisah Djamal, M.Pd., M.Psi., Psikolog', 'foto-default.jpg', 'juri', 'Psy-Proposal', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'Universitas Islam Negeri (UIN) Sunan Gunung Djati Bandung'),
(178, 'eko', '0192023a7bbd73250516f069df18b500', 1, 'Eko Oktapiya Hardinata, M.Ag', 'foto-default.jpg', 'juri', 'PSY-TAHFIDZ JUZ 30', 'Juri', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'UIN Raden Fatah Palembang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_page_about`
--
ALTER TABLE `tbl_page_about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_contact`
--
ALTER TABLE `tbl_page_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_event`
--
ALTER TABLE `tbl_page_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_faq`
--
ALTER TABLE `tbl_page_faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_home`
--
ALTER TABLE `tbl_page_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_news`
--
ALTER TABLE `tbl_page_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_photo_gallery`
--
ALTER TABLE `tbl_page_photo_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_portfolio`
--
ALTER TABLE `tbl_page_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_pricing`
--
ALTER TABLE `tbl_page_pricing`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_privacy`
--
ALTER TABLE `tbl_page_privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_search`
--
ALTER TABLE `tbl_page_search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_service`
--
ALTER TABLE `tbl_page_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_team`
--
ALTER TABLE `tbl_page_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_term`
--
ALTER TABLE `tbl_page_term`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page_testimonial`
--
ALTER TABLE `tbl_page_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  ADD PRIMARY KEY (`photo_id`);

--
-- Indexes for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_portfolio_photo`
--
ALTER TABLE `tbl_portfolio_photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pricing_table`
--
ALTER TABLE `tbl_pricing_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `tbl_service`
--
ALTER TABLE `tbl_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`social_id`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`subs_id`);

--
-- Indexes for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_why_choose`
--
ALTER TABLE `tbl_why_choose`
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
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `tbl_faq`
--
ALTER TABLE `tbl_faq`
  MODIFY `faq_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_feature`
--
ALTER TABLE `tbl_feature`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_page_about`
--
ALTER TABLE `tbl_page_about`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_contact`
--
ALTER TABLE `tbl_page_contact`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_event`
--
ALTER TABLE `tbl_page_event`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_faq`
--
ALTER TABLE `tbl_page_faq`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_home`
--
ALTER TABLE `tbl_page_home`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_news`
--
ALTER TABLE `tbl_page_news`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_photo_gallery`
--
ALTER TABLE `tbl_page_photo_gallery`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_portfolio`
--
ALTER TABLE `tbl_page_portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_pricing`
--
ALTER TABLE `tbl_page_pricing`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_privacy`
--
ALTER TABLE `tbl_page_privacy`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_search`
--
ALTER TABLE `tbl_page_search`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_service`
--
ALTER TABLE `tbl_page_service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_team`
--
ALTER TABLE `tbl_page_team`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_term`
--
ALTER TABLE `tbl_page_term`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page_testimonial`
--
ALTER TABLE `tbl_page_testimonial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_photo`
--
ALTER TABLE `tbl_photo`
  MODIFY `photo_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_portfolio`
--
ALTER TABLE `tbl_portfolio`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_portfolio_category`
--
ALTER TABLE `tbl_portfolio_category`
  MODIFY `category_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_portfolio_photo`
--
ALTER TABLE `tbl_portfolio_photo`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `tbl_pricing_table`
--
ALTER TABLE `tbl_pricing_table`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_reg`
--
ALTER TABLE `tbl_reg`
  MODIFY `reg_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=353;

--
-- AUTO_INCREMENT for table `tbl_service`
--
ALTER TABLE `tbl_service`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `social_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `subs_id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_team_member`
--
ALTER TABLE `tbl_team_member`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_testimonial`
--
ALTER TABLE `tbl_testimonial`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_why_choose`
--
ALTER TABLE `tbl_why_choose`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
