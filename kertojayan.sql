-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 11, 2022 at 06:08 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kertojayan`
--

-- --------------------------------------------------------

--
-- Table structure for table `agenda`
--

CREATE TABLE `agenda` (
  `idagenda` int(11) NOT NULL,
  `agenda_detail` text NOT NULL,
  `agenda_day` varchar(32) NOT NULL,
  `agenda_time` varchar(64) NOT NULL,
  `location_agenda` varchar(255) NOT NULL,
  `time_agenda` varchar(255) NOT NULL,
  `agenda_month` varchar(32) NOT NULL,
  `agenda_date` varchar(32) NOT NULL,
  `agenda_description` text NOT NULL,
  `agenda_penyelenggara` varchar(255) NOT NULL,
  `agenda_contact` varchar(64) NOT NULL,
  `img_agenda` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agenda`
--

INSERT INTO `agenda` (`idagenda`, `agenda_detail`, `agenda_day`, `agenda_time`, `location_agenda`, `time_agenda`, `agenda_month`, `agenda_date`, `agenda_description`, `agenda_penyelenggara`, `agenda_contact`, `img_agenda`) VALUES
(2, 'Penerimaan Mahasiswa Baru 2020 Gel. I', '', '08.00 - 16.00', 'Universitas Muhammadiyah Purworejo', '24 Feb. 2020 - 23 Mei 2020', '', '', '', '', '', 'pmb2019.jpg'),
(3, 'Seminar Nasional Fakultas Pertanian 2020', '', '08.00 - 12.00', 'Auditorium Universitas Muhammadiyah Purworejo', '14 Mar. 2020', '', '', '', '', '', 'semnas_faperta.JPG'),
(4, 'Lomba Video Kreatif', '', '', '<a href=\"https://bit.ly/formulirlombavideokreatif\">Link Pendaftaran</a>', '9 Mei 2020', '', '', '', '', '', 'himapma_agenda.jpg'),
(5, 'Penerimaan Mahasiswa Baru 2020 Gel. II', '', '08.00 - 16.00', 'R. PMB. UMPwr', '25 Mei 2020 - 25 Juli 2020', '', '', '', '', '', 'pmb.jpg'),
(6, 'Pengukuhan Badan Pembina Harian', 'Jumat', '09.00 - Selesai', 'R. Seminar UMPwr / Daring', '19 Juni 2020', 'Juni', '19', '', 'Universitas Muhammadiyah Purworejo', 'info@umpwr.ac.id', 'Pengukuhan_BPH.jpg'),
(7, 'Webinar Kesehatan Mental di Era New Normal', 'Jumat', '09.00 WIB', 'Daring (Zoom)', '17 Juli 2020', 'Juli', '17', '', 'Program Studi Psikologi', '+6287738287444 (Itsna Iftayani)', ''),
(8, 'Content Creator Milenial : Mengubah Hobi menjadi Profesi', 'Kamis', '19.00 WIB', 'Daring (Zoom)', '16 Juli 2020', 'Juli', '16', '', 'Program Studi Psikologi', '+6287738287444 (Itsna Iftayani)', ''),
(9, 'Forum Silaturahmi IKAHIMATIKA', 'Sabtu', '08.00 WIB', 'Daring (Zoom)', '18 Juli 2020', 'Juli', '18', '', 'Program Studi Matematika', '+6285225370807 (Dr. Teguh Wibowo,  M. Pd. )', ''),
(10, 'Sosialisasi Adendum PKM 2020', 'Senin', '09.00 WIB', 'Daring (Zoom)', '20 Juli 2020', 'Juli', '20', '', 'Biro Kemahasiswaan', '+6281236816467', ''),
(11, 'Webinar Internasional: Islam dan Keberagaman', 'Kamis', '15:30', 'Daring (Zoom)', '13 Agustus 2020', 'Agustus', '13', '<em>\"Memaknai Kemerdekaan Islam Rahmatan lil \'Alamin dalam Sudut Pandang Sosio-politic\"</em>\r\n<p>Meeting ID : 816 2823 2618</p>\r\n<p>Password : 983271</p>', 'Universitas Muhammadiyah Purworejo', '(0275) 321494', 'audit.jpeg'),
(12, 'Sosialisasi Adendum PKM 2021', 'Minggu', '09.00-selesai', 'Zoom', '16 April 2021', 'April', '16', 'Lorem', 'ump', '08226776645', '106ec5fbd8b6600151d04a0f1536a0b5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bpd`
--

CREATE TABLE `bpd` (
  `idpimpinan` int(11) NOT NULL,
  `nama_pimpinan` varchar(255) NOT NULL,
  `jabatan_pimpinan` varchar(64) NOT NULL,
  `tupoksi` text NOT NULL,
  `img_pimpinan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bpd`
--

INSERT INTO `bpd` (`idpimpinan`, `nama_pimpinan`, `jabatan_pimpinan`, `tupoksi`, `img_pimpinan`) VALUES
(5, 'Lorem Ipsum', 'Ketua Program Studi Teknologi Informasi', '', '57141cc48114981922a05393e8ae8e0c.jpg'),
(6, 'Lorem Ipsum', 'Sekretaris Prodi Teknologi Informasi', '', 'ba2f3fff7f49f05d5b96c0a0f45db58b.jpg'),
(7, 'Lorem Ipsum', 'Ketua Fakultas Teknik', '', '23ef93112ad58a17b4250ab183432267.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `idcategory` int(10) UNSIGNED NOT NULL,
  `name_category` varchar(256) NOT NULL,
  `status_category` tinyint(2) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`idcategory`, `name_category`, `status_category`) VALUES
(1, 'Webinar', 1),
(2, 'PPKKMB', 1),
(4, 'Tech Learning', 1);

-- --------------------------------------------------------

--
-- Table structure for table `frontdata`
--

CREATE TABLE `frontdata` (
  `idfrontdata` int(11) NOT NULL,
  `frontdata_head` varchar(255) NOT NULL,
  `frontdata_subhead` varchar(255) NOT NULL,
  `tentang` text NOT NULL,
  `frontdata_visi` text NOT NULL,
  `frontdata_misi` text NOT NULL,
  `demografi` text NOT NULL,
  `penduduk` int(250) NOT NULL,
  `keluarga` int(250) NOT NULL,
  `wilayah` int(250) NOT NULL,
  `umkm` int(250) NOT NULL,
  `frontdata_img_head` text NOT NULL,
  `frontdata_img_subhead` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `frontdata`
--

INSERT INTO `frontdata` (`idfrontdata`, `frontdata_head`, `frontdata_subhead`, `tentang`, `frontdata_visi`, `frontdata_misi`, `demografi`, `penduduk`, `keluarga`, `wilayah`, `umkm`, `frontdata_img_head`, `frontdata_img_subhead`) VALUES
(1, 'Selamat Datang Di Desa Kertojayan Grabag Purworejo.', 'Kertojayan Membangun', '<div class=\"content\">\r\n<div class=\"artikel-single\">\r\n<p>Desa Kertojayan merupakan Desa yang pernah menjadi juara 1 kampung siaga candi tingkat Jawa Tengah di tahun 2020. Desa ini terletak di Kecamatan Bayan Kabupaten Purworejo Provinsi Jawa Tengah.</p>\r\n<p><strong>1. Batas Wilayah</strong></p>\r\n<p>Secara demografis, Desa Krandegan berbatasan dengan:</p>\r\n<ul>\r\n<li>\r\n<p>Sebelah Utara&nbsp; &nbsp; &nbsp;&nbsp;: Desa Tanjungrejo, Kec. Bayan</p>\r\n</li>\r\n<li>\r\n<p>Sebelah Selatan&nbsp; &nbsp;:&nbsp;Desa Pogungkalangan, Kec. Bayan</p>\r\n</li>\r\n<li>\r\n<p>Sebelah Timur&nbsp; &nbsp; &nbsp; : Desa Tanjungrejo dan Pogungkalangan, Kec. Bayan</p>\r\n</li>\r\n<li>\r\n<p>Sebelah Barat&nbsp; &nbsp; &nbsp; &nbsp;: Desa Pringgowijayan, Kec. Kutoarjo</p>\r\n</li>\r\n</ul>\r\n<p><strong>2. Luas Wilayah</strong></p>\r\n<p>Luas wilayah Desa Krandegan 161 Ha</p>\r\n<p><strong>3. Jumlah Penduduk</strong></p>\r\n<p>Jumlah Total Penduduk : 2984 Jiwa</p>\r\n<p><strong>4. Jumlah Perangkat Desa</strong></p>\r\n<ol>\r\n<li>Kepala Desa&nbsp; &nbsp; &nbsp; &nbsp;: 1 Orang</li>\r\n<li>Sekretaris Desa&nbsp; : 1&nbsp;Orang</li>\r\n<li>Kepala Urusan&nbsp; &nbsp; : 3&nbsp;Orang</li>\r\n<li>Kepala Seksi&nbsp; &nbsp; &nbsp; &nbsp;: 2&nbsp;Orang</li>\r\n<li>Kepala Dusun&nbsp; &nbsp; &nbsp; : 6&nbsp;Orang</li>\r\n<li>Rukun Warga&nbsp; &nbsp; &nbsp; &nbsp;: 6 Orang</li>\r\n<li>Rukun Tetangga&nbsp; &nbsp;: 14&nbsp;Orang</li>\r\n</ol>\r\n</div>\r\n<p>&nbsp;</p>\r\n</div>\r\n<p>&nbsp;</p>\r\n<div class=\"accordion-list\">\r\n<ul>\r\n<li>&nbsp;</li>\r\n</ul>\r\n</div>', '<p>&rdquo;Mewujudkan desa yang mandiri dan sejahtera lahir dan batin dengan bertumpu pada sektor pertanian serta penguatan ekonomi kerakyatan dan pengembangan industri rakyat yang ditopang oleh sistem pemerintahan yang profesional dengan didukung oleh sumber daya alam dan sumber daya manusia yang handal.&rdquo;</p>', '<ol>\r\n<li>\r\n<p>Membangun dan mendorong majunya bidang pendidikan, baik formal maupun nonformal yang mudah diakses dan dinikmati seluruh warga masyarakat tanpa terkecuali.</p>\r\n</li>\r\n<li>\r\n<p>Membangun dan mengembangkan sistem pemerintahan desa yang bersih, profesional, efektif dan efisien serta berorientasi kepada pelayanan publik.</p>\r\n</li>\r\n<li>\r\n<p>Memperkuat sumber &ndash; sumber ekonomi rakyat yang mendorong percepatan pertumbuhan ekonomi.</p>\r\n</li>\r\n<li>\r\n<p>Membangun infrastruktur yang mendorong percepatan pertumbuhan ekonomi.</p>\r\n</li>\r\n<li>\r\n<p>Mengembangkan pelayanan kebutuhan dasar masyarakat seperti pendidikan, kesehatan, dan papan rumah tinggal.</p>\r\n</li>\r\n<li>\r\n<p>Mengembangkan solidaritas antar tokoh dan semua komponen masyarakat untuk bersama &ndash; sama membangun desa yang berlandaskan nilai &ndash; nilai mulia yang dipegang teguh bersama.</p>\r\n</li>\r\n<li>\r\n<p>Mengembangkan semua potensi desa untuk mewujudkan keunggulan desa di semua sektor.</p>\r\n</li>\r\n<li>\r\n<p>Meningkatkan peran generasi muda dalam proses pembangunan.</p>\r\n</li>\r\n<li>\r\n<p>Menanggulangi kemiskinan dengan peningkatan keteermpilan dan pengembangan pertanian, industri kecil dan perdagangan serta peningkatan peran koperasi dalam pemberdayaan ekonomi kerakyatan serta pembukaan lapangan kerja yang memadai.</p>\r\n</li>\r\n<li>\r\n<p>Meningkatkan pengelolaan sumber daya alam yang ada dengan berjalan secara seiring dengan pembangunan dan penyediaan sumber daya manusia yang handal.</p>\r\n</li>\r\n<li>\r\n<p>Mendorong pengembangan usaha &ndash; usaha untuk terciptanya pembangunan di segala bidang.</p>\r\n</li>\r\n</ol>', '<p>Secara umum kondisi Desa Kertojayan baik secara demografi maupun geografis dapat digambarkan sebagai berikut:</p>\r\n<ul>\r\n<li>Luas wilayah: &nbsp;161 Ha</li>\r\n<li>Jumlah Penduduk :<br />Berdasarkan data induk penduduk, jumlah penduduk Desa Kertojayan sampai dengan akhir Agustus 2020 adalah sebagai berikut :\r\n<ul>\r\n<li>Laki-laki :&nbsp; jiwa</li>\r\n<li>Perempuan :&nbsp; jiwa</li>\r\n</ul>\r\n</li>\r\n</ul>\r\n<p style=\"padding-left: 30px;\">Jumlah : 2.984 jiwa</p>', 5300, 900, 7, 12, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `heading_unduh`
--

CREATE TABLE `heading_unduh` (
  `idheading_unduh` int(11) NOT NULL,
  `nama_heading_unduh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `heading_unduh`
--

INSERT INTO `heading_unduh` (`idheading_unduh`, `nama_heading_unduh`) VALUES
(1, 'Dokumen Perkuliahan'),
(2, 'Kerja Praktik');

-- --------------------------------------------------------

--
-- Table structure for table `kemahasiswaan`
--

CREATE TABLE `kemahasiswaan` (
  `idkemahasiswaan` int(11) NOT NULL,
  `cat_kemahasiswaan` varchar(128) NOT NULL,
  `title_kemahasiswaan` varchar(255) NOT NULL,
  `desc_kemahasiswaan` text NOT NULL,
  `date_kemahasiswaan` varchar(32) NOT NULL,
  `pict_kemahasiswaan` text NOT NULL,
  `unique_id` int(11) NOT NULL,
  `author_kemahasiswaan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `idnews` int(11) NOT NULL,
  `idcategory` int(10) UNSIGNED NOT NULL,
  `title_news` varchar(128) NOT NULL,
  `no_char` text NOT NULL,
  `detail_news` text NOT NULL,
  `img_news` text NOT NULL,
  `date_news` varchar(4) NOT NULL,
  `month_news` varchar(32) NOT NULL,
  `year_news` int(11) NOT NULL,
  `full_date_news` varchar(64) NOT NULL,
  `queue_news` int(11) NOT NULL,
  `author_news` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`idnews`, `idcategory`, `title_news`, `no_char`, `detail_news`, `img_news`, `date_news`, `month_news`, `year_news`, `full_date_news`, `queue_news`, `author_news`) VALUES
(2, 1, 'Webinar Physics In Action 2020 ', 'Webinar Pendidikan Fisika merupakan serangkaian acara Physics In Action 2020 dengan tema “Optimalisasi Media Pembelajaran Berbasis Digital sebagai Penggerak Pendidikan Nasional di Era Pandemi Covid-19” dilaksanakan pada hari Sabtu, 29 Agustus 2020 secara daring via Zoom Meeting. Acara tersebut diikuti oleh kurang lebih 80 peserta yang berasal dari berbagai kota seperti Surabaya, Banyumas, Kebumen, Purworejo, Semarang dan sekitarnya. Acara tersebut di isi oleh dua Narasumber, yaitu Bapak Dr. Raden Wakhid Akhdinirwanto, M.Si. selaku Dosen Program Studi Pendidikan Fisika UM Purworejo dan Ibu Umi Pratiwi, S.Si., M.Sc. selaku Ketua Program Studi Pendidikan Fisika UM Purworejo yang dimoderatori oleh Riani Putri Lestari, S.Pd. alumni Program Studi Pendidikan Fisika UM Purworejo. Acara tersebut berjalan dengan lancer dan dilaksanakan di kediaman Ibu Umi Pratiwi, S.Si., M.Sc.', '<p>Webinar Pendidikan Fisika merupakan serangkaian acara Physics In Action 2020 dengan tema “Optimalisasi Media Pembelajaran Berbasis Digital sebagai Penggerak Pendidikan Nasional di Era Pandemi Covid-19” dilaksanakan pada hari Sabtu, 29 Agustus 2020 secara daring via Zoom Meeting. Acara tersebut diikuti oleh kurang lebih 80 peserta yang berasal dari berbagai kota seperti Surabaya, Banyumas, Kebumen, Purworejo, Semarang dan sekitarnya. </p>\r\n<p>Acara tersebut di isi oleh dua Narasumber, yaitu Bapak Dr. Raden Wakhid Akhdinirwanto, M.Si. selaku Dosen Program Studi Pendidikan Fisika UM Purworejo dan Ibu Umi Pratiwi, S.Si., M.Sc. selaku Ketua Program Studi Pendidikan Fisika UM Purworejo yang dimoderatori oleh Riani Putri Lestari, S.Pd. alumni Program Studi Pendidikan Fisika UM Purworejo. Acara tersebut berjalan dengan lancer dan dilaksanakan di kediaman Ibu Umi Pratiwi, S.Si., M.Sc.</p>\r\n', 'dua.jpeg', '30', 'Agustus', 2020, '30 Agustus 2020', 0, 'Tendik'),
(3, 2, 'PPKMB 2020, Sukses Dilaksanakan Secara Daring', 'PPKKMB Universitas Muhammadiyah Puworejo Tahun 2020 dilakukan secara daring melalui aplikasi zoom meeting. PPKKMB 2020 Gelombang Pertama dilaksanakan pada hari Senin-Kamis, 14-17 September 2020 secara daring melalui via zoom meeting yang menghadirkan Mendikbud Bapak Nadiem Anwar Makarim, B. A, M.B.A , dengan Narasumber :\r\na.	Bapak Dr. Sandiaga S. Uno, B.B.A, M.B.A\r\nb.	Ketua Umum Oke Oce Indonesia Bapak Iim Rusyamsi\r\nc.	Sekretaris LLDIKTI Wilayah VI Bapak Dr. Lukman S.T, M.Hum \r\nd.	Rektor Universitas Muhammadiyah Purworejo Bapak Dr. Rofiq Nurhadi, M.Ag\r\ne.	Guru Besar Universitas Muhammadiyah Purworejo Prof. Dr. H. S. Eko Putro Widoyoko\r\nf.	Kepala BPBD Kabupaten Purworejo Bapak Drs. Sutrisno, M.Si\r\nPPKKMB 2020 Universitas Muhammadiyah Purworejo dengan tema “Internalisasi Keislaman dan Keilmuan Untuk Membangun Almaster dan Bangsa Yang Berkemajuan”. PPKKMB 2020 gelombang pertama berjalan dengan lancar, pada hari pertama yaitu pembukaan Kegiatan PPKKMB 2020 diisi sambutan dari Kemendikbud RI, Bapak Nadiem Anwar Makarim, B. A, M.B.A, Ketua BPH, dan Rektor Universitas Muhammadiyah Purworejo. Kemudian, acara selanjutnya yaitu seminar dan motivasi yang diisi oleh Dr. Sandiaga S. Uno, B.B.A, M.B.A dan LLDIKTI Wilayah VI. \r\nPada hari Kedua PPKKMB yaitu diisi oleh 3 pemateri. Pemateri pertama yaitu diisi oleh Kepala BPBD Kabupaten Purworejo tentang One Earth: Kesadaran Lingkungan Hidup dan Kesiap Siagaan Bencana di Perguruan Tinggi, selanjutnya pemateri kedua diisi oleh Prof.Dr.H.S. Eko Putro Widoyoko tentang Dinamika Universitas Muhammadiyah Purworejo di Era Revolusi Industri 4.0 dan Kehidupan Baru Pasca Pandemi (New Normal) dan pemateri ketiga diisi oleh Tim Rektor tentang Kampus Menyapa: Kebijakan Strategis dalam Membentuk Civitas Akademika yang professional untuk menyongsong Kampus Merdeka Belajar. \r\nPada hari ketiga PPKKMB yaitu MASTA (Masa Ta’aruf) yang diselenggarakan oleh Ikatan Mahasiswa Muhammadiyah (IMM) Universitas Muhammadiyah Purworejo, dan kegiatan selanjutnya yaitu perform seluruh Unit Kegiatan Mahasiswa (UKM). \r\nPada hari keempat PPKKMB yaitu kegiatan Struktur Organisasi dan Tata Kelola (SOTK) Fakultas dan Program Studi yang disampaikan oleh masing-masing fakultas dan program studi. Dan pada tanggal 28-29 September 2020 akan dilaksanakan PPKKMB gelombang kedua.\r\n', '<p>PPKKMB 2020 Universitas Muhammadiyah Purworejo dengan tema &ldquo;Internalisasi Keislaman dan Keilmuan Untuk Membangun Almaster dan Bangsa Yang Berkemajuan&rdquo;. PPKKMB 2020 gelombang pertama berjalan dengan lancar, pada hari pertama yaitu pembukaan Kegiatan PPKKMB 2020 diisi sambutan dari Kemendikbud RI, Bapak Nadiem Anwar Makarim, B. A, M.B.A, Ketua BPH, dan Rektor Universitas Muhammadiyah Purworejo. Kemudian, acara selanjutnya yaitu seminar dan motivasi yang diisi oleh Dr. Sandiaga S. Uno, B.B.A, M.B.A dan LLDIKTI Wilayah VI.&nbsp;</p>\r\n<p>Pada hari Kedua PPKKMB yaitu diisi oleh 3 pemateri. Pemateri pertama yaitu diisi oleh Kepala BPBD Kabupaten Purworejo tentang One Earth: Kesadaran Lingkungan Hidup dan Kesiap Siagaan Bencana di Perguruan Tinggi, selanjutnya pemateri kedua diisi oleh Prof.Dr.H.S. Eko Putro Widoyoko tentang Dinamika Universitas Muhammadiyah Purworejo di Era Revolusi Industri 4.0 dan Kehidupan Baru Pasca Pandemi (New Normal) dan pemateri ketiga diisi oleh Tim Rektor tentang Kampus Menyapa: Kebijakan Strategis dalam Membentuk Civitas Akademika yang professional untuk menyongsong Kampus Merdeka Belajar</p>\r\n<p>Pada hari ketiga PPKKMB yaitu MASTA (Masa Ta&rsquo;aruf) yang diselenggarakan oleh Ikatan Mahasiswa Muhammadiyah (IMM) Universitas Muhammadiyah Purworejo, dan kegiatan selanjutnya yaitu perform seluruh Unit Kegiatan Mahasiswa (UKM).&nbsp;</p>\r\n<p>Pada hari keempat PPKKMB yaitu kegiatan Struktur Organisasi dan Tata Kelola (SOTK) Fakultas dan Program Studi yang disampaikan oleh masing-masing fakultas dan program studi. Dan pada tanggal 28-29 September 2020 akan dilaksanakan PPKKMB gelombang kedua.</p>\r\n', 'tiga.jpeg', '30', 'September', 2020, '30 September 2020', 0, 'Tendik'),
(4, 1, 'Informasi Magang', 'Webinar Pendidikan Fisika merupakan serangkaian acara Physics In Action 2020 dengan tema “Optimalisasi Media Pembelajaran Berbasis Digital sebagai Penggerak Pendidikan Nasional di Era Pandemi Covid-19” dilaksanakan pada hari Sabtu, 29 Agustus 2020 secara daring via Zoom Meeting. Acara tersebut diikuti oleh kurang lebih 80 peserta yang berasal dari berbagai kota seperti Surabaya, Banyumas, Kebumen, Purworejo, Semarang dan sekitarnya. Acara tersebut di isi oleh dua Narasumber, yaitu Bapak Dr. Raden Wakhid Akhdinirwanto, M.Si. selaku Dosen Program Studi Pendidikan Fisika UM Purworejo dan Ibu Umi Pratiwi, S.Si., M.Sc. selaku Ketua Program Studi Pendidikan Fisika UM Purworejo yang dimoderatori oleh Riani Putri Lestari, S.Pd. alumni Program Studi Pendidikan Fisika UM Purworejo. Acara tersebut berjalan dengan lancer dan dilaksanakan di kediaman Ibu Umi Pratiwi, S.Si., M.Sc.', '<p>Webinar Pendidikan Fisika merupakan serangkaian acara Physics In Action 2020 dengan tema “Optimalisasi Media Pembelajaran Berbasis Digital sebagai Penggerak Pendidikan Nasional di Era Pandemi Covid-19” dilaksanakan pada hari Sabtu, 29 Agustus 2020 secara daring via Zoom Meeting. Acara tersebut diikuti oleh kurang lebih 80 peserta yang berasal dari berbagai kota seperti Surabaya, Banyumas, Kebumen, Purworejo, Semarang dan sekitarnya. </p>\r\n<p>Acara tersebut di isi oleh dua Narasumber, yaitu Bapak Dr. Raden Wakhid Akhdinirwanto, M.Si. selaku Dosen Program Studi Pendidikan Fisika UM Purworejo dan Ibu Umi Pratiwi, S.Si., M.Sc. selaku Ketua Program Studi Pendidikan Fisika UM Purworejo yang dimoderatori oleh Riani Putri Lestari, S.Pd. alumni Program Studi Pendidikan Fisika UM Purworejo. Acara tersebut berjalan dengan lancer dan dilaksanakan di kediaman Ibu Umi Pratiwi, S.Si., M.Sc.</p>\r\n', 'dua.jpeg', '30', 'Agustus', 2020, '30 Agustus 2020', 0, 'Tendik'),
(5, 1, 'Jadwal UAS Daring', 'Webinar Pendidikan Fisika merupakan serangkaian acara Physics In Action 2020 dengan tema “Optimalisasi Media Pembelajaran Berbasis Digital sebagai Penggerak Pendidikan Nasional di Era Pandemi Covid-19” dilaksanakan pada hari Sabtu, 29 Agustus 2020 secara daring via Zoom Meeting. Acara tersebut diikuti oleh kurang lebih 80 peserta yang berasal dari berbagai kota seperti Surabaya, Banyumas, Kebumen, Purworejo, Semarang dan sekitarnya. Acara tersebut di isi oleh dua Narasumber, yaitu Bapak Dr. Raden Wakhid Akhdinirwanto, M.Si. selaku Dosen Program Studi Pendidikan Fisika UM Purworejo dan Ibu Umi Pratiwi, S.Si., M.Sc. selaku Ketua Program Studi Pendidikan Fisika UM Purworejo yang dimoderatori oleh Riani Putri Lestari, S.Pd. alumni Program Studi Pendidikan Fisika UM Purworejo. Acara tersebut berjalan dengan lancer dan dilaksanakan di kediaman Ibu Umi Pratiwi, S.Si., M.Sc.', '<p>Webinar Pendidikan Fisika merupakan serangkaian acara Physics In Action 2020 dengan tema “Optimalisasi Media Pembelajaran Berbasis Digital sebagai Penggerak Pendidikan Nasional di Era Pandemi Covid-19” dilaksanakan pada hari Sabtu, 29 Agustus 2020 secara daring via Zoom Meeting. Acara tersebut diikuti oleh kurang lebih 80 peserta yang berasal dari berbagai kota seperti Surabaya, Banyumas, Kebumen, Purworejo, Semarang dan sekitarnya. </p>\r\n<p>Acara tersebut di isi oleh dua Narasumber, yaitu Bapak Dr. Raden Wakhid Akhdinirwanto, M.Si. selaku Dosen Program Studi Pendidikan Fisika UM Purworejo dan Ibu Umi Pratiwi, S.Si., M.Sc. selaku Ketua Program Studi Pendidikan Fisika UM Purworejo yang dimoderatori oleh Riani Putri Lestari, S.Pd. alumni Program Studi Pendidikan Fisika UM Purworejo. Acara tersebut berjalan dengan lancer dan dilaksanakan di kediaman Ibu Umi Pratiwi, S.Si., M.Sc.</p>\r\n', 'dua.jpeg', '30', 'Agustus', 2020, '30 Agustus 2020', 0, 'Tendik'),
(6, 1, 'Webinar Pakar Android', 'Webinar Pendidikan Fisika merupakan serangkaian acara Physics In Action 2020 dengan tema “Optimalisasi Media Pembelajaran Berbasis Digital sebagai Penggerak Pendidikan Nasional di Era Pandemi Covid-19” dilaksanakan pada hari Sabtu, 29 Agustus 2020 secara daring via Zoom Meeting. Acara tersebut diikuti oleh kurang lebih 80 peserta yang berasal dari berbagai kota seperti Surabaya, Banyumas, Kebumen, Purworejo, Semarang dan sekitarnya. Acara tersebut di isi oleh dua Narasumber, yaitu Bapak Dr. Raden Wakhid Akhdinirwanto, M.Si. selaku Dosen Program Studi Pendidikan Fisika UM Purworejo dan Ibu Umi Pratiwi, S.Si., M.Sc. selaku Ketua Program Studi Pendidikan Fisika UM Purworejo yang dimoderatori oleh Riani Putri Lestari, S.Pd. alumni Program Studi Pendidikan Fisika UM Purworejo. Acara tersebut berjalan dengan lancer dan dilaksanakan di kediaman Ibu Umi Pratiwi, S.Si., M.Sc.', '<p>Webinar Pendidikan Fisika merupakan serangkaian acara Physics In Action 2020 dengan tema “Optimalisasi Media Pembelajaran Berbasis Digital sebagai Penggerak Pendidikan Nasional di Era Pandemi Covid-19” dilaksanakan pada hari Sabtu, 29 Agustus 2020 secara daring via Zoom Meeting. Acara tersebut diikuti oleh kurang lebih 80 peserta yang berasal dari berbagai kota seperti Surabaya, Banyumas, Kebumen, Purworejo, Semarang dan sekitarnya. </p>\r\n<p>Acara tersebut di isi oleh dua Narasumber, yaitu Bapak Dr. Raden Wakhid Akhdinirwanto, M.Si. selaku Dosen Program Studi Pendidikan Fisika UM Purworejo dan Ibu Umi Pratiwi, S.Si., M.Sc. selaku Ketua Program Studi Pendidikan Fisika UM Purworejo yang dimoderatori oleh Riani Putri Lestari, S.Pd. alumni Program Studi Pendidikan Fisika UM Purworejo. Acara tersebut berjalan dengan lancer dan dilaksanakan di kediaman Ibu Umi Pratiwi, S.Si., M.Sc.</p>\r\n', 'dua.jpeg', '30', 'Agustus', 2020, '30 Agustus 2020', 0, 'Tendik'),
(8, 4, 'Workshop Pemrograman Python', 'Mau belajar bahasa pemrograman python, tapi masih bingung mulainya dari mana?\r\n\r\nTenang…\r\n\r\nKarena pada artikel ini, kita akan membahas persiapan awalnya sampai tuntas:\r\n\r\nApa itu Python dan kenapa belajar Python?\r\nApa saja alat-alat yang diperlukan untuk belajar python?\r\nBagaimana cara membuat program python?\r\nApa yang harus dipelajari selanjutnya?\r\n', 'Mau belajar bahasa pemrograman python, tapi masih bingung mulainya dari mana?\r\n\r\nTenang…\r\n\r\nKarena pada artikel ini, kita akan membahas persiapan awalnya sampai tuntas:\r\n\r\nApa itu Python dan kenapa belajar Python?\r\nApa saja alat-alat yang diperlukan untuk belajar python?\r\nBagaimana cara membuat program python?\r\nApa yang harus dipelajari selanjutnya?\r\n', '4ca53934d0928fa0a48aab465b5e81a4.jpg', '03', 'Desember', 2020, '03 Desember 2020', 0, 'Admin'),
(10, 1, 'Lorem Ipsum', 'Lorem Ipsum&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.\r\n&lt;p&gt;&lt;img class=\'img-fluid\' src=\'http://localhost/kmj/assets/img/news/LDSCP-PBI_0000s_0001_IMG_0138.jpg\'/&gt;&lt;/p&gt;&lt;figcaption class=\'figure-caption\'&gt;&lt;/figcaption&gt; &lt;hr&gt;\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n&nbsp;', '<p><strong style=\"margin: 0px; padding: 0px; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">Lorem Ipsum</strong><span style=\"font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; text-align: justify; background-color: #ffffff;\">&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>\r\n<p><span style=\"text-align: justify; background-color: #ffffff;\"><span style=\"font-family: Open Sans, Arial, sans-serif;\"><span style=\"font-size: 14px;\"><p><img class=\'img-fluid\' src=\'http://localhost/kmj/assets/img/news/LDSCP-PBI_0000s_0001_IMG_0138.jpg\'/></p><figcaption class=\'figure-caption\'></figcaption> <hr></span></span></span></p>\r\n<p style=\"margin: 0px 0px 15px; padding: 0px; text-align: justify; font-family: \'Open Sans\', Arial, sans-serif; font-size: 14px; background-color: #ffffff;\">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n<p>&nbsp;</p>', 'sven-fischer-V7WkmXntA8M-unsplash.jpg', '02', 'Februari', 2021, '02 Februari 2021', 0, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE `pengumuman` (
  `idpengumuman` int(11) NOT NULL,
  `judul_pengumuman` varchar(255) NOT NULL,
  `ringkasan_pengumuman` text NOT NULL,
  `full_pengumuman` text NOT NULL,
  `tgl_pengumuman` varchar(255) NOT NULL,
  `link_pengumuman` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`idpengumuman`, `judul_pengumuman`, `ringkasan_pengumuman`, `full_pengumuman`, `tgl_pengumuman`, `link_pengumuman`) VALUES
(1, 'Beasiswa Mahasiswa Santri Pondok Pesantren', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '<p><b>Lorem Ipsum</b> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>', '17 September 2020', 'buku_panduan_20202021.pdf'),
(2, 'Beasiswa Mahasiswa Tahfidz Al-Quran', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '<p><em>Contrary to popular belief</em>, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '18 September 2020', 'format_laporan_kp.pdf'),
(3, 'Beasiswa Mahasiswa Beprestasi', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '<p><b>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</b> The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>', '20 September 2020', 'buku_panduan_20202021'),
(6, 'Judul Pengumuman', 'test Pengumuman Kosong Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '<p>test Pengumuman Kosong</p>', '6 October 2020', ''),
(7, 'Informasi UAS', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 't is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '03 Desember 2020', '7b45e5bf04ba5757b473d9bbfab407ab.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `pimpinan`
--

CREATE TABLE `pimpinan` (
  `idpimpinan` int(11) NOT NULL,
  `nama_pimpinan` varchar(255) NOT NULL,
  `jabatan_pimpinan` varchar(64) NOT NULL,
  `tupoksi` text NOT NULL,
  `img_pimpinan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pimpinan`
--

INSERT INTO `pimpinan` (`idpimpinan`, `nama_pimpinan`, `jabatan_pimpinan`, `tupoksi`, `img_pimpinan`) VALUES
(5, 'Lorem Ipsum', 'Ketua Program Studi Teknologi Informasi', '', '57141cc48114981922a05393e8ae8e0c.jpg'),
(6, 'Lorem Ipsum', 'Sekretaris Prodi Teknologi Informasi', '', 'ba2f3fff7f49f05d5b96c0a0f45db58b.jpg'),
(7, 'Lorem Ipsum', 'Ketua Fakultas Teknik', '', '23ef93112ad58a17b4250ab183432267.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `saran`
--

CREATE TABLE `saran` (
  `idsaran` int(11) NOT NULL,
  `nama_saran` text NOT NULL,
  `email_saran` text NOT NULL,
  `topik_saran` text NOT NULL,
  `pesan_saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `saran`
--

INSERT INTO `saran` (`idsaran`, `nama_saran`, `email_saran`, `topik_saran`, `pesan_saran`) VALUES
(18, 'Wahyu Darma', 'ahmaadkurniawaan@gmail.com', 'Weibnar', 'Lorem Ipsum ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_slider`
--

CREATE TABLE `tb_slider` (
  `idslider` int(11) NOT NULL,
  `img_slider` varchar(255) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_slider`
--

INSERT INTO `tb_slider` (`idslider`, `img_slider`, `date_created`) VALUES
(37, '97476fbdfde2c63c464ce555081787f9.jpg', '2021-01-24'),
(38, '6c64c88100999a42bf6f0ee0b8908df9.jpg', '2021-01-24'),
(40, '20b1b42e5787c5a854964da0053eac24.JPG', '2022-01-11'),
(41, 'f0b656e54782b9dc58fb9b31607539d1.JPG', '2022-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `idtestimonials` int(11) NOT NULL,
  `nama_testi` varchar(255) NOT NULL,
  `pek_testi` varchar(255) NOT NULL,
  `detil_testi` text NOT NULL,
  `link_testi` text NOT NULL,
  `tgl_testi` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`idtestimonials`, `nama_testi`, `pek_testi`, `detil_testi`, `link_testi`, `tgl_testi`) VALUES
(1, 'Lorem Ipusm', 'Mahasiswa', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sed dolor eleifend, blandit ipsum eu, dignissim quam. Praesent consequat faucibus velit gravida pretium. Donec maximus vel nibh in ultrices. Nunc lobortis mauris nisi, at varius nisi accumsan et. Suspendisse scelerisque id ex eget tempor.', 't1.jpg', '25 September 2020'),
(2, 'Lorem Ipusm', 'Mahasiswa', 'Nulla dui nisi, porta sed consectetur hendrerit, sagittis ut felis. In nec finibus dui. Morbi ut ex tempus, tristique quam et, pretium arcu. Praesent lectus eros, finibus eget sagittis nec, laoreet non est. Duis urna ante, condimentum eget mattis nec, tempor vitae libero. ', 't2.jpg', '30 September 2020'),
(3, 'Lorem Ipusm', 'Mahasiswa', 'Nulla dui nisi, porta sed consectetur hendrerit, sagittis ut felis. In nec finibus dui. Morbi ut ex tempus, tristique quam et, pretium arcu. Praesent lectus eros, finibus eget sagittis nec, laoreet non est. Duis urna ante, condimentum eget mattis nec, tempor vitae libero. ', 't3.jpg', '30 September 2020'),
(4, 'Lorem Ipusm', 'Mahasiswa', 'Nulla dui nisi, porta sed consectetur hendrerit, sagittis ut felis. In nec finibus dui. Morbi ut ex tempus, tristique quam et, pretium arcu. Praesent lectus eros, finibus eget sagittis nec, laoreet non est. Duis urna ante, condimentum eget mattis nec, tempor vitae libero. ', 't4.jpg', '30 September 2020'),
(6, 'Lorem Ipusm', 'Mahasiswa', 'Nulla dui nisi, porta sed consectetur hendrerit, sagittis ut felis. In nec finibus dui. Morbi ut ex tempus, tristique quam et, pretium arcu. Praesent lectus eros, finibus eget sagittis nec, laoreet non est. Duis urna ante, condimentum eget mattis nec, tempor vitae libero.', 't5.jpg', '3 December 2020');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `pass_word` text NOT NULL,
  `status_user` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `user_name`, `pass_word`, `status_user`) VALUES
(1, 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`idagenda`);

--
-- Indexes for table `bpd`
--
ALTER TABLE `bpd`
  ADD PRIMARY KEY (`idpimpinan`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`idcategory`);

--
-- Indexes for table `frontdata`
--
ALTER TABLE `frontdata`
  ADD PRIMARY KEY (`idfrontdata`);

--
-- Indexes for table `heading_unduh`
--
ALTER TABLE `heading_unduh`
  ADD PRIMARY KEY (`idheading_unduh`);

--
-- Indexes for table `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
  ADD PRIMARY KEY (`idkemahasiswaan`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`idnews`),
  ADD KEY `idcategory` (`idcategory`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`idpengumuman`);

--
-- Indexes for table `pimpinan`
--
ALTER TABLE `pimpinan`
  ADD PRIMARY KEY (`idpimpinan`);

--
-- Indexes for table `saran`
--
ALTER TABLE `saran`
  ADD PRIMARY KEY (`idsaran`);

--
-- Indexes for table `tb_slider`
--
ALTER TABLE `tb_slider`
  ADD PRIMARY KEY (`idslider`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`idtestimonials`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agenda`
--
ALTER TABLE `agenda`
  MODIFY `idagenda` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `bpd`
--
ALTER TABLE `bpd`
  MODIFY `idpimpinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `idcategory` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `heading_unduh`
--
ALTER TABLE `heading_unduh`
  MODIFY `idheading_unduh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kemahasiswaan`
--
ALTER TABLE `kemahasiswaan`
  MODIFY `idkemahasiswaan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `idnews` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `idpengumuman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pimpinan`
--
ALTER TABLE `pimpinan`
  MODIFY `idpimpinan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `saran`
--
ALTER TABLE `saran`
  MODIFY `idsaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `tb_slider`
--
ALTER TABLE `tb_slider`
  MODIFY `idslider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `idtestimonials` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`idcategory`) REFERENCES `category` (`idcategory`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
