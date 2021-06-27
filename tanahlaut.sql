-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 27, 2021 at 07:47 PM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanahlaut`
--

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE `lokasi` (
  `id_wisata` int(11) NOT NULL,
  `nama_wisata` varchar(255) DEFAULT NULL,
  `deskripsi` text,
  `alamat` text,
  `kategori` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `gambar` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`id_wisata`, `nama_wisata`, `deskripsi`, `alamat`, `kategori`, `latitude`, `longitude`, `gambar`) VALUES
(2, 'Pantai Asmara', 'Pantai Asmara merupakan objek wisata pantai baru dari Kalimantan Selatan yang baru diresmikan dan dibuka untuk umum pada tahun 2016 oleh pemerintah setempat. Pantai Asmara merupakan singkatan dari Pantai Asam-Asam Muara yang kemudian oleh penduduk lokal sering disebut dengan Pantai Asmara.', 'Muara Asam Asam Jorong, Muara Asam Asam, Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70881', 'Pantai', '-3.9814189', '115.0776786', 'asmara.jpg'),
(3, 'Pantai Muara Kintap', 'Salah satu objek wisata terkenal yang berasal dari Kalimantan Selatan adalah objek wisata Pantai Muara Kintap. Pantai Muara Kintap merupakan objek wisata baru dari Kalimantan Selatan yang berada di Kabupaten Tanah Laut. Objek wisata tersebut baru diresmikan dan dikenal oleh wisatawan pada tahun 2016.', 'Muara Kintap, Kintap, Tanah Laut Regency, South Kalimantan 70883', 'Pantai', '-3.8958535449380856', '115.28452609485846', 'muara.jpg'),
(4, 'Bukit Lebak Naga', 'wisata yang ada di kabupaten Tanah-Laut yaitu Bukit Lebak Naga, oke langsung saja jika perjalanan di mulai dari Banjarmasin lama perjalanan kira-kira 2 jam, dan dari Pelaihari hanya sekitar 1 jam saja dalam mode perjalanan santai ya. Lokasi Bukit Lebak Naga sebenarnya sangat dekat dengan Pantai Batakan, mungkin sekitar 5 km sebelum pantai, jadi jika kalian bingung mencari lokasinya teman-teman bisa langsung saja berangkat ke arah pantai batakan, jangan takut tidak menemukan lokasi Lebak Naga ini karena 5 km sebelum pantai Batakan kalian akan mendapati petunjuk arah berupa papan yang sudah terpasang bertulisan Gunung Lebak Naga dipinggir jalan.', 'Kandangan Lama, Batakan, Panyipatan, Kabupaten Tanah Laut, Kalimantan Selatan 70871', 'Bukit', '-4.047441083410274', '114.66879300217748', 'naga.jpg'),
(5, 'Pantai Swarangan', 'Pantai Swarangan merupakan pantai elok yang terletak di Kabupaten Tanah Laut, Provinsi Kalimantan Selatan. Namun para pengunjung harus tetap bersabar dulu, karena Pantai Swarangan belum dibuka untuk umum.', 'Pantai, Swarangan, Jorong, Kabupaten Tanah Laut, Kalimantan Selatan 70881', 'Pantai', '-4.040259957380402', '114.95712493366463', 'swarangan.png'),
(6, 'Gunung Keramaian', 'Gunung Keramaian, merupakan salah satu objek wisata alam di Kabupaten Tanah Laut. Gunung Keramaian berada di wilayah Desa Ujung Batu, Kecamatan Pelaihari, berjarak 58 kilometer dari Banjarmasin, ibu kota Provinsi Kalimantan Selatan.', 'Ujung Batu, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70815', 'Gunung', '-3.754227270111792', '114.70514231549319', 'karamaian.jpg'),
(7, 'Taman Mina Tirta', 'Wisata Taman Mina Tirta Pelaihari atau yang sekarang lebih dikenal juga dengan sebutan Taman Mintir adalah salah satu destinasi wisata Kabupaten Tanah Laut yang berlokasi di Kelurahan Angsau, Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan. Wisata ini merupakan tempat wisata yang ramai dikunjungi pada hari biasa maupun hari liburan karena letaknya disamping jalan raya.', 'Angsau, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70815', 'Taman', '-3.7989657119257516', '114.77995442235307', 'tira.jpg'),
(9, 'Air Terjun Bajuin', 'Air terjun Bajuin memiliki panorama pegunungan yang indah, eksotik, dan udaranya pun masih sangat sejuk karena banyaknya pepohonan. Di kawasan ini terdapat tiga air terjun dengan ketinggian yang berbeda, dikarenakan alamnya yang masih asri dan alami. Di sini juga terdapat beberapa jenis burung dan tanaman anggrek hutan, serta bunga bangkai.', 'Sungai Bakar, Bajuin, Kabupaten Tanah Laut, Kalimantan Selatan 70815', 'Air Terjun', '-3.7732834089535823', '114.8608390839144', 'baijun.jpg'),
(11, 'Bukit Rimpi', 'Bukit Rimpi merupakan sebuah perbukitan yang ditumbuhi oleh padang savana hijau yang dihiasi oleh hamparan rumput dengan pemandangannya yang sangat elok. Bukit cantik ini lebih dikenal dengan sebutan Bukit Teletubies', 'Tampang Pelaihari Kabupaten Tanah Laut, GMK barat, Tampang, Kec. Pelaihari, Kabupaten Tanah Laut, Kalimantan Selatan 70815', 'Bukit', '-3.846741964437704', '114.79164088789183', 'rimpi.jpg'),
(12, 'Taman Labirin Pelaihari', 'Labirin Palaihari adalah salah satu tempat wisata buatan berupa taman yang terletak di Tambang Ulang, Tanah Laut, Kalimantan Selatan. Daya tarik utama tempat wisata ini adalah sensasi memasuki lorong lorong labirin dari tumbuhan dengan tujuan mencari jalan keluar. Pada lokasi yang sama pengunjung juga dapat melihat rusa tutul dan menikmati danau buatan. Pengunjung juga dapat befoto dari atas dengan latar belakang labirin di atas menara setinggi 3,5 m ', 'Sungai Jelai, Tambang Ulang, Kabupaten Tanah Laut, Kalimantan Selatan 70854', 'Taman', '-3.6930092971599255', '114.73344496827242', 'labirin.jpg'),
(13, 'Pantai Batakan Baru', 'Pantai Batakan Baru terletak di Desa Batakan Kecamatan Panyipatan Kabupaten Tanah Laut provinsi Kalimantan Selatan. Pantai ini lokasinya persis berdekatan dengan Pantai Batakan Lama, yang membedakan hanya pengelolaannya', 'Batakan, Panyipatan, Kabupaten Tanah Laut, Kalimantan Selatan 70871', 'Pantai', '-4.084651350313258', '114.62877032418925', 'batakan.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lokasi`
--
ALTER TABLE `lokasi`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lokasi`
--
ALTER TABLE `lokasi`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
