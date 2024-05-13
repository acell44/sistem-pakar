-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2023 at 05:58 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_tktb`
--

-- --------------------------------------------------------

--
-- Table structure for table `gaya`
--

CREATE TABLE `gaya` (
  `username` varchar(100) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `visual` varchar(8) NOT NULL,
  `auditori` varchar(8) NOT NULL,
  `kinestetik` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gaya_soal`
--

CREATE TABLE `gaya_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `pilihan1` text NOT NULL,
  `pilihan2` text NOT NULL,
  `pilihan3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gaya_soal`
--

INSERT INTO `gaya_soal` (`id_soal`, `soal`, `pilihan1`, `pilihan2`, `pilihan3`) VALUES
(1, 'Ketika saya mengoperasikan peralatan baru, pada umumnya saya:', 'membaca instruksinya lebih dulu.', 'mendengarkan penjelasan dari seseorang yang pernah menggunakan peralatan tersebut.', 'menggunakan peralatan tersebut, saya akan mampu mengetahuinya selagi menggunakannya.'),
(2, 'Ketika saya perlu petunjuk untuk bepergian, saya biasanya:', 'melihat peta.', '. bertanya denah/arah ke orang lain.', 'mengikuti naluri dan mungkin menggunakan kompas'),
(3, 'Ketika saya memasak masakan baru, saya biasanya melakukan:', 'mengikuti petunjuk resep tertulis.', 'menelepon seorang teman untuk mendapatkan penjelasan.', 'mengikuti naluri, mencoba seperti biasanya saya memasak'),
(4, 'Jika saya mengajar seseorang tentang sesuatu yang baru, saya cenderung untuk:', 'menulis instruksi bagi mereka.', 'memberi penjelasan secara lisan kepada mereka.', 'mendemonstrasikan terlebih dahulu dan kemudian membiarkan mereka berlanjut'),
(5, 'Saya cenderung mengatakan:', 'lihat bagaimana saya melakukannya.', 'dengarkan saya menjelaskan.', 'lakukanlah sendiri'),
(6, 'Selama waktu senggang, saya paling menikmati saat:', 'pergi ke museum dan galeri.', 'mendengarkan musik dan bincang-bincang dengan teman-teman saya', 'bermain olahraga atau melakukan hal yang bisa saya lakukan.'),
(7, 'Ketika saya pergi berbelanja pakaian, saya cenderung untuk:', 'membayangkan apakah pakaian tersebut sesuai bagi saya.', 'mendiskusikannya dengan karyawan toko', 'mencoba pakaian dan melihat kesesuaiannya.'),
(8, 'Bila saya memilih liburan, saya biasanya:', 'membaca banyak brosur', 'meminta rekomendasi dari teman-teman.', 'membayangkan akan seperti apa jika berada di sana'),
(9, 'Jika saya membeli mobil baru, saya akan:', 'membaca ulasan di koran dan majalah.', 'membahas apa yang saya butuhkan dengan teman-teman.', 'melakukan test-drive banyak jenis.'),
(10, 'Ketika saya sedang belajar keterampilan baru, saya paling nyaman:', 'melihat apa yang pengajar lakukan.', 'menanyakan ke pengajar tentang apa yang seharusnya saya lakukan', 'mencobanya dan menemukan sendiri ketika saya mempelajarinya.'),
(11, 'Jika saya memilih makanan pada daftar menu, saya cenderung untuk', 'membayangkan makanan akan seperti apa.', 'memikirkannya sendiri atau membicarakannya dengan pasangan saya.', 'membayangkan makanan akan terasa seperti apa.'),
(12, 'Ketika saya mendengarkan pertunjukan sebuah band, saya tidak bisa:', 'melihat anggota band dan orang lain di antara para penonton.', 'mendengarkan lirik dan nada', 'terbawa dalam suasana dan musik.'),
(13, 'Ketika saya berkonsentrasi, saya paling sering', 'fokus pada kata-kata atau gambar-gambar di depan saya.', 'membahas masalah dan memikirkan solusi yang mungkin dapat dilakukan.', 'banyak melihat hal di sekitar, mencatat yang diperlukan.'),
(14, 'Saya memilih peralatan rumah tangga karena saya suka:', 'warnanya dan bagaimana penampilannya', 'paparan dari pramuniaga.', 'tekstur peralatan tersebut dan bagaimana rasanya menyentuhnya.'),
(15, 'Memori pertama saya terbentuk ketika:', 'melihat sesuatu.', 'sedang membicarakannya.', 'melakukan sesuatu'),
(16, 'Ketika saya cemas, saya:', 'membayangkan skenario terburuk.', 'memikirkan apa yang paling mengkhawatirkan saya.', 'tidak dapat duduk tenang, mondar-mandir.'),
(17, 'Saya dapat mengingat orang lain, karena:', 'penampilan mereka.', 'apa yang mereka katakan kepada saya.', 'bagaimana mereka membuat saya mampu mengingatkan saya tentang mereka.'),
(18, 'Ketika saya harus merevisi untuk ujian, saya biasanya:', 'menulis banyak catatan revisi dan diagram.', 'menekuni catatan saya sendiri, atau membahasnya dengan orang lain.', 'membayangkan membuat kemajuan belajar atau menciptakan rumus/cara yang tepat.'),
(19, 'Jika saya menjelaskan kepada seseorang, saya cenderung:', 'menunjukkan kepada mereka apa yang saya maksud.', 'menjelaskan kepada mereka dengan cara yang memungkinkan sampai mereka paham.', 'memotivasi mereka untuk mencoba dan menyampaikan ide saya selagi mereka melakukan kegiatan.'),
(20, 'Saya benar-benar suka:', 'menonton film, fotografi, melihat seni atau mengamati orang-orang sekitar', 'mendengarkan musik, radio atau bincang-bincang dengan teman-teman.', 'berperan serta dalam kegiatan olahraga, atau menikmati makanan yang disajikan.'),
(21, 'Sebagian besar waktu luang, saya habiskan:', 'menonton televisi.', 'berbincang-bincang dengan teman-teman.', 'melakukan aktivitas fisik atau membuat sesuatu.'),
(22, 'Ketika pertama kali saya bertemu seseorang yang baru, saya biasanya:', 'mengatur pertemuan bersama.', 'berbicara dengan mereka melalui telepon', 'mencoba melakukan sesuatu bersama-sama, misalnya suatu kegiatan atau makan bersama.'),
(23, 'Saya memperhatikan orang melalui', 'tampilannya dan pakaiannya.', 'suara dan cara berbicaranya.', 'caranya berdiri dan bergerak.'),
(24, 'Jika saya marah, saya cenderung untuk:', 'terus mengingat dan mencari tahu hal yang membuat saya marah.', 'menyampaikan ke orang-orang sekitar tentang perasaan saya.', 'membanting pintu atau menunjukkan kemarahan saya dengan cara lainnya'),
(25, 'Saya merasa lebih mudah untuk mengingat:', 'wajah.', 'nama.', 'hal-hal yang telah saya lakukan'),
(26, 'Saya pikir bahwa saya dapat mengetahui apakah seseorang berbohong jika:', 'mereka menghindari melihat Anda.', 'perubahan suara mereka.', 'mereka menunjukkan hal aneh.'),
(27, 'Ketika saya bertemu dengan seorang teman lama:', 'Saya berkata \"Senang bertemu denganmu!\"', 'Saya berkata \"Senang mendengar kabar tentangmu!\"', 'Saya memberi mereka pelukan atau jabat tangan'),
(28, 'Saya mengingat hal-hal yang terbaik dengan cara:', 'menulis catatan atau menyimpan rincian materi print-out', 'mengatakan dengan suara keras atau mengulang-ulang kata-kata penting dan menghafal kata-kata kunci', 'melakukan dan mempraktikkan kegiatan atau membayangkan bagaimana suatu hal dilakukan.'),
(29, 'Jika saya mengeluh tentang barang rusak yang sudah dibeli, saya paling nyaman:', 'menulis surat', 'mengontak melalui telepon', 'mengembalikan ke toko atau menyampaikannya ke kepala kantor'),
(30, 'Saya cenderung mengatakan:', 'Saya paham apa yang Anda maksud.', 'Saya mendengar apa yang Anda katakan.', 'Saya tahu bagaimana Anda merasakannya.');

-- --------------------------------------------------------

--
-- Table structure for table `kepribadian`
--

CREATE TABLE `kepribadian` (
  `username` varchar(100) NOT NULL,
  `jawaban` varchar(50) NOT NULL,
  `sanguinis` varchar(8) NOT NULL,
  `melankolis` varchar(8) NOT NULL,
  `koleris` varchar(8) NOT NULL,
  `plegmatis` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kepribadian_soal`
--

CREATE TABLE `kepribadian_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `pilihan1` text NOT NULL,
  `pilihan2` text NOT NULL,
  `pilihan3` text NOT NULL,
  `pilihan4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kepribadian_soal`
--

INSERT INTO `kepribadian_soal` (`id_soal`, `soal`, `pilihan1`, `pilihan2`, `pilihan3`, `pilihan4`) VALUES
(1, 'k1.png', 'Senang berbicara', 'Cendrung menganalisa , memikirkan dan  mempertimbangakan', 'Senang dengan tantangan', 'Pendengar yang baik'),
(2, 'k2.png', 'Suka menolong orang lain', 'Menyukai fakta-fakta', 'Suka petualangan', 'Cendrung diam'),
(3, 'k3.png', 'Emosian dan terbuka', 'Introvert, pemikir dan pesimis', 'Tegas ,kuat,cepat dan tangkas', 'Mau merugi agar masalah tidak berkepanjangan'),
(4, 'k4.png', 'Tidak bisa dijadikan sebagai sandaran', 'Mendominasi pembicaraan', 'Suka mengatur', 'kalem'),
(5, 'k5.png', 'Mudah berubah mood', 'Segala sesuatu ingin teratur', 'Tidak punya banyak teman', 'Suka menunda dalam mengambil keputusan'),
(6, 'k6.png', 'Sedikit pelupa', 'Teratur, rapi, terjadwal, tersusun sesuai pola', 'Tidak mau kalah', 'Kurang teratur dan serba dingin'),
(7, 'k7.png', 'Sulit berkonsentrasi', 'Ingin selalu sempurna', 'Suka memerintah', 'Sangat memerlukan perubahan'),
(8, 'k8.png', 'Kurang disiplin waktu', 'Disiplin waktu', 'Tidak ada istilah tidak mungkin', 'Kurang bersemangat');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `usia` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `validasi`
--

CREATE TABLE `validasi` (
  `username` varchar(100) NOT NULL,
  `jawaban` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validasi`
--

INSERT INTO `validasi` (`username`, `jawaban`) VALUES
('admin', 'sesuai');

-- --------------------------------------------------------

--
-- Table structure for table `validasi_soal`
--

CREATE TABLE `validasi_soal` (
  `id_soal` int(11) NOT NULL,
  `soal` text NOT NULL,
  `pilihan1` text NOT NULL,
  `pilihan2` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `validasi_soal`
--

INSERT INTO `validasi_soal` (`id_soal`, `soal`, `pilihan1`, `pilihan2`) VALUES
(1, 'Apakah Hasil Tes Kepribadian dan Gaya Belajar dari Aplikasi Ini Relate/Sesuai dengan Diri Anda?', 'Sesuai', 'Tidak Sesuai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gaya`
--
ALTER TABLE `gaya`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `gaya_soal`
--
ALTER TABLE `gaya_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `kepribadian`
--
ALTER TABLE `kepribadian`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `kepribadian_soal`
--
ALTER TABLE `kepribadian_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `validasi`
--
ALTER TABLE `validasi`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `validasi_soal`
--
ALTER TABLE `validasi_soal`
  ADD PRIMARY KEY (`id_soal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gaya_soal`
--
ALTER TABLE `gaya_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kepribadian_soal`
--
ALTER TABLE `kepribadian_soal`
  MODIFY `id_soal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
