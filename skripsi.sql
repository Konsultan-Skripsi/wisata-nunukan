-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2021 at 05:54 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(3, 'coba', 'coba');

-- --------------------------------------------------------

--
-- Table structure for table `tb_budaya`
--

CREATE TABLE `tb_budaya` (
  `id_budaya` int(11) NOT NULL,
  `id_katagori_info` int(11) NOT NULL,
  `nama_budaya` varchar(50) NOT NULL,
  `foto_budaya` varchar(100) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_budaya`
--

INSERT INTO `tb_budaya` (`id_budaya`, `id_katagori_info`, `nama_budaya`, `foto_budaya`, `keterangan`) VALUES
(3, 1, 'Perupun Batu Narit', 'image_2020-12-10_162533.png', 'Perupun Batu Narit, disebut demikian karena betu narit ini berada pada sruktur dasar batu narit yang berbentuk menyerupai bukit kecil. Pahatan pada batu narit ini adalah figur menyerupai manusia dalam posisi kaki kangkang. Terdapat juga beberapa goresan yang merupakan bekas digunakan untuk mengasah benda logam.'),
(4, 1, 'Irau Rayeh Lundayeh', 'rusak_komp.PNG', 'Sampai saat ini belum ada penelitian yang mendalam tentang asal usul dayak Lundayeh yang dapat dijadikan referensi yang akurat. Menurut legenda bahwa nenek moyang dayak Lundayeh berasal dari daratan Cina yang berimigrasi ke bumi Borneo berabad-abad yang lalu.'),
(5, 1, 'Situs Lobong', 'situs_lobong.PNG', 'Situs Lobong Tetaban terletak di Desa Tetaban, Kecamatan  Sebuku  Kabupaten  Nunukan, Provinsi Kalimantan Utara.  Lokasi   pemakaman   dapat   di tempuh   dengan   mobil sekitar   satu   jam   dari  kota kecamatan Sebuku. Untuk masuk ke situs, melalui kebun sawit kemudian melewati hutan dengan jarak sekitar satu kilometer.\r\n\r\nMenurut keterangan masyarakat,  orang-orang  yang dimakamkan  di tempat  tersebut   merupakan   leluhur mereka (Dayak Agabag/Tenggalan).  Kondisi makam saat ini tidak terawat dan ditumbuhi semak belukar. Sisa tinggalan di makam tersebut berupa 26 buah lungun yang masih utuh dan satu buah tempayan yang sudah pecah. Sebagian  besar   lungun-lungun   tersebut   masih   utuh lengkap dengan bagian penutup. Bagian dalam lungun masih terdapat tulang-belulang. Ukuran lungun berbeda-beda, disesuaikan dengan ukuran orang yang meninggal.'),
(6, 1, 'Sumpah Bedolop', '', 'Bedolob adalah sebuah tradisi yang dilakukan oleh masyarakat Dayak Agabag di Kabupaten Nunukan, Kalimantan Utara. Tradisi ini berupa penyelesaian permasalahan yang terjadi antarwarga Dayak Agabag jika penyelesaian secara musyawarah adat tidak menghasilkan solusi bagi kedua belah pihak. Kasus yang biasanya diselesaikan dengan tradisi Bedolob bervariasi. Sebagian di antaranya adalah kasus pencurian, perselingkuhan, sengketa tanah dan pembunuhan.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_katagori_info`
--

CREATE TABLE `tb_katagori_info` (
  `id_katagori_info` int(11) NOT NULL,
  `nama_katagori_info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_katagori_info`
--

INSERT INTO `tb_katagori_info` (`id_katagori_info`, `nama_katagori_info`) VALUES
(1, 'budaya'),
(2, 'wisata');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_acara`
--

CREATE TABLE `tb_laporan_acara` (
  `id_laporan_acara` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_acara` varchar(100) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `tempat_acara` varchar(200) NOT NULL,
  `ket_acara` text NOT NULL,
  `verifikasi_acara` enum('menunggu','diterima') NOT NULL,
  `latitude` varchar(25) NOT NULL,
  `longitude` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laporan_acara`
--

INSERT INTO `tb_laporan_acara` (`id_laporan_acara`, `id_user`, `nama_acara`, `tgl_mulai`, `tgl_selesai`, `jam_mulai`, `jam_selesai`, `tempat_acara`, `ket_acara`, `verifikasi_acara`, `latitude`, `longitude`) VALUES
(10, 42, 'Gg', '2020-12-08', '2020-12-09', '09:45:00', '15:57:00', 'Jj', 'Gha', 'diterima', '', ''),
(11, 43, 'Gg', '2020-12-08', '2020-12-09', '09:45:00', '15:57:00', 'Jj', 'Gha', 'menunggu', '', ''),
(16, 58, 'nga', '2021-01-04', '2021-01-05', '15:48:00', '16:48:00', 'tengah laut', 'nga', 'menunggu', '', ''),
(17, 62, 'jajal', '2021-01-06', '2021-01-07', '16:58:00', '17:58:00', 'gor nyobo', 'jajal wae', 'menunggu', '3.9107577742138666', '117.92383124599455');

-- --------------------------------------------------------

--
-- Table structure for table `tb_laporan_wisata`
--

CREATE TABLE `tb_laporan_wisata` (
  `id_laporan_wisata` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_wisata` varchar(100) NOT NULL,
  `lokasi_wisata` varchar(200) NOT NULL,
  `ket_wisata` text NOT NULL,
  `foto_wisata` varchar(100) NOT NULL,
  `latitude` varchar(50) NOT NULL,
  `longitude` varchar(50) NOT NULL,
  `verifikasi_wisata` enum('menunggu','diterima') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_laporan_wisata`
--

INSERT INTO `tb_laporan_wisata` (`id_laporan_wisata`, `id_user`, `nama_wisata`, `lokasi_wisata`, `ket_wisata`, `foto_wisata`, `latitude`, `longitude`, `verifikasi_wisata`) VALUES
(9, 28, 'testing', 'kab. repmu', 'wisata karepmu', 'Capture23.PNG', '', '', 'menunggu'),
(12, 40, 'Baba', 'Hh', 'Xkxkx', 'lamampau.PNG', '', '', 'diterima'),
(19, 53, 'Air Terjun Sianak', 'Desa bambangan Sebatik Nunukan Kalimantan Utara', 'Untuk sampai ke air terjun sianak harus menempuh jarak 3 km dari pusat keramaian sebatik.', '', '', '', 'menunggu'),
(20, 56, 'admin', 'ba', 'dewfregf', '12.jpg', '4.124464582229112', '117.66268064746855', 'menunggu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `no_tlp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `no_tlp`) VALUES
(36, 'coba aja', '123456789'),
(37, 'test1', '87654347586'),
(39, 'Coba', '08190'),
(40, 'Cici', '987654323'),
(41, 'coba', '1234567890'),
(42, 'Ss', '139'),
(43, 'Ss', '139'),
(44, 'A', '12'),
(45, 'Hh', '67'),
(46, 'Hh', '67'),
(47, 'A', '1'),
(48, 'A', '123'),
(49, 'aa', '123'),
(50, 'Abc', '1234'),
(51, 'Ss', '088'),
(52, 'Etahyu', '08967543211'),
(53, 'Etahyu', '08967543211'),
(54, 'admin', '1223'),
(55, 'admin', '1223'),
(56, 'admin', '1223'),
(57, 'fgmm', '1234254323'),
(58, 'fvresgh', '134567'),
(59, 'fvresgh', '134567'),
(60, 'fvresgh', '134567'),
(61, 'fvresgh', '134567'),
(62, 'jajal', '12314');

-- --------------------------------------------------------

--
-- Table structure for table `tb_wisata`
--

CREATE TABLE `tb_wisata` (
  `id_wisata` int(11) NOT NULL,
  `id_katagori_info` int(11) NOT NULL,
  `nama_wisata` varchar(50) NOT NULL,
  `lokasi_wisata` varchar(200) NOT NULL,
  `foto_wisata` varchar(100) NOT NULL,
  `keterangan` text NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_wisata`
--

INSERT INTO `tb_wisata` (`id_wisata`, `id_katagori_info`, `nama_wisata`, `lokasi_wisata`, `foto_wisata`, `keterangan`, `latitude`, `longitude`) VALUES
(3, 2, 'Pulau Sebatik', 'Jl. Bukit Keramat, Aji Kuning, Kec. Sebatik Barat, Kab. Nunukan', 'sebatik1.PNG', 'Pulau Sebatik adalah salah satu pulau yang berbatasan langsung dengan Malaysia. Alhasil memiliki keunikan berupa perpaduan antara dua negara, yaitu Indonesia dan Malaysia. Tak ayal setiap harinya selalu ada wisatawan yang mengeksplor keindahan pantai, wisatawan dapat menikmati potensi alam mulai dari bukit sampai pantainya yang eksotik.', 4.1513542, 117.6288171),
(4, 2, 'Pantai Batu Lamampu', 'Lamampu, Kec. Sebatik, Kab. Nunukan', 'image_2020-12-10_133149.png', 'Pantai ini berlokasi di Pantai Batu Lamampu, Kec. Sebatik, Kab. Nunukan. Pantai ini memiliki garis pantai sepanjang 3 km. Pasir pantainya berwarna cokelat dengan air laut biru jernih.', 4.0405, 117.90404),
(5, 2, 'Pantai Kayu Angin', 'Tanjung Karang RT. 7, Sebatik, Tj. Karang, Sebatik, Kabupaten Nunukan', 'image_2020-12-10_133625.png', 'Alamat: Tanjung Karang RT. 7, Sebatik, Tj. Karang, Sebatik, Kabupaten Nunukan, Kalimantan Utara', 4.0536, 117.91611),
(6, 2, 'Masjid Islamic Center Hidayatur Rahma Nunukan', 'Jl. Sungai Jepun, Kelurahan Mansapa, Kecamatan Nunukan Selatan', 'masjid.PNG', 'Masjid yang berada di jalan Sungai Jepun, Kelurahan Mansapa, Kecamatan Nunukan Selatan Kabupaten Kalimantan Utara, ini bisa dikatakan sebagai salah satu masjid terindah di Indonesia. Masjid ini memiliki bangunan megah dan elegan serta cantik dan anggun', 4.07875, 117.72747),
(7, 2, 'Pantai Simangkadu', 'Kecamatan Nunukan Selatan', 'image_2020-12-10_154958.png', 'Wisata bahari yang cukup unik, lokasinya berada di wilayah Kecamatan Nunukan Selatan. Garis Pantai Simangkadu tergolong cukup panjang, dan yang paling unik adalah ada sebagian wilayah pantainya penuh dengan rumput ilalang nan hijau dan sebagiannya lagi berpasir putih.', 4.027594, 117.738079),
(8, 2, 'Air Terjun Sianak', 'Bambangan, Kec. Sebatik, Kab. Nunukan.', 'airterjun1.PNG', 'Lokasi air terjun Sianak harus menempuh jarak sejauh 3 km dari pusat Sebatik. Setelah itu harus melanjutkan perjalanan dengan menyusuri jalur sungai yang ekstrim karena dipenuhi oleh bebatuan yang sangat licin.\r\nLokasi: Bambangan, Kec. Sebatik, Kab. Nunukan.', 0, 0),
(9, 2, 'Alun-alun Kabupaten Nunukan', 'Jl. Pattimura, Nunukan Timur, Kec. Nunukan, Kab. Nunukan', 'image_2020-12-10_150845.png', 'Dengan desain alun-alun yang begitu indah seperti adanya kolam yang berada di tengah alun-alun serta berdekatan dengan Tugu Dwikora, semakin membuat alun-alun ini cukup menarik untuk dikunjungi. Tidak hanya di siang dan di sore hari saja, tetapi ketika malam hari Alun-Alun Kota Nunukan telah menjelma menjadi tempat wisata di Kalimantan Utara yang menyenangkan untuk nongkrong menikmati indahnya Kota Nunukan di malam hari.', 4.14053, 117.6511858),
(10, 2, 'Air Terjun Paramayo', 'Desa Pa\'Betung, Kecamatan Krayan Induk', 'image_2020-12-10_151354.png', 'Air terjun Paramayo ini berada di Desa Pa\'Betung, Kecamatan Krayan Induk. Jalanan wilayah ini dikelilingi dengan pemandangan gunung-gunung. Air Terjun Paramayo memiliki ketinggian sekitar 20 meter dengan 4 tingkatan.', 4.0269323, 115.5754837),
(11, 2, 'Pantai Taiwan', 'Pulau Sebatik Kalimantan Utara', 'image_2020-12-10_152309.png', 'Tempat wisata di Kalimantan Utara ini memang cukup tenang dengan hamparan pasir pantainya yang begitu luas. Dikenal juga dengan sebutan Pantai Sungai Tawian oleh masyarakat Pulau Sebatik. Ketika kamu berkunjung di Pulau Sebatik tak lengkap rasanya jika tidak mengunjungi Pantai Taiwan. Tak kalah indahnya dengan Pantai Batu Lamampu, hamparan pasir pantainya yang begitu luas membutmu bebas melakukan berbagai aktifitas di pinggiran pantai. Mau bermain sepak bola, berlarian kesana-kemari atau hanya sekedar bersantai menikmati indahnya senja di Pantai Taiwan. Tempat wisata di Kalimantan Utara ini memang cukup tenang jika dibandingkan Pantai Batu Lamampu, jadi buat kamu yang ingin merasakan kedamaian di pinggir pantai maka datang saja di Pantai Taiwan.', 4.1513542, 117.6288152),
(12, 2, 'Kelenteng San Seng Kong', 'Jl. Pembangunan RT.10 Kelurahan Nunukan Barat', 'image_2020-12-10_154200.png', 'Klenteng Tri Dharma San Sen Kong beralamatkan di Jalan Pembangunan RT.10 Kelurahan Nunukan Barat Kecamatan Nunukan merupakan tempat ibadah bagi umat Agama Konghucu. Klenteng ini merupakan satu-satunya Klenteng yang ada di Kabupaten Nunukan.', 4.1324157, 117.6447529),
(13, 2, 'doalan', 'vfgrtwgb', '15.jpg', 'wefrewgrtwh', 3.989868964511355, 117.76543321294359);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tb_budaya`
--
ALTER TABLE `tb_budaya`
  ADD PRIMARY KEY (`id_budaya`);

--
-- Indexes for table `tb_katagori_info`
--
ALTER TABLE `tb_katagori_info`
  ADD PRIMARY KEY (`id_katagori_info`);

--
-- Indexes for table `tb_laporan_acara`
--
ALTER TABLE `tb_laporan_acara`
  ADD PRIMARY KEY (`id_laporan_acara`);

--
-- Indexes for table `tb_laporan_wisata`
--
ALTER TABLE `tb_laporan_wisata`
  ADD PRIMARY KEY (`id_laporan_wisata`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_budaya`
--
ALTER TABLE `tb_budaya`
  MODIFY `id_budaya` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_katagori_info`
--
ALTER TABLE `tb_katagori_info`
  MODIFY `id_katagori_info` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_laporan_acara`
--
ALTER TABLE `tb_laporan_acara`
  MODIFY `id_laporan_acara` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tb_laporan_wisata`
--
ALTER TABLE `tb_laporan_wisata`
  MODIFY `id_laporan_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `tb_wisata`
--
ALTER TABLE `tb_wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
