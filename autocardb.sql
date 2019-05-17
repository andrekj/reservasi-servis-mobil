-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2019 at 02:44 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autocar`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `gambar` blob NOT NULL,
  `isi` text NOT NULL,
  `tanggal_rilis` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `gambar`, `isi`, `tanggal_rilis`) VALUES
(7, 'Hendak Mencuci Mesin Mobil? Perhatikan Dulu Hal Ini', 0x37353563646439643863613433633138336233366636316436626436616230372e6a7067, '<p>Kebersihan mobil pastinya menjadi hal yang paling didambakan bagi pemiliknya. Jika mobil tampil bersih, tentunya akan membuat tampilan mobil jauh lebih sedap dipandang ketimbang membiarkannya dalam keadaan kotor.</p>\r\n\r\n<p>Namun, ketika mencuci mobil, masih banyak orang yang meragukan ketika turut membersihkan&nbsp;bagian mesin. Tak hanya itu, banyak juga orang yang mencuci mesin mobil tanpa mengetahui resikonya. Lantas, bagaimana cara mencuci bagian ini dengan benar?</p>\r\n\r\n<p><img alt=\"\" src=\"https://otodriver.com/image/load/800/0/gallery/tips-mobil-parkir-oli-sarung-cuci_2317.jpg\" /></p>\r\n\r\n<p>Asep selaku kru bengkel Sideworks Auto Care di kawasan Tangerang Selatan menyarankan bahwa mencuci bagian mesin mobil diperbolehkan, asalkan tidak disemprot dengan semburan air bertekanan tinggi.</p>\r\n\r\n<p>&quot;Disarankan hanya dilap saja, jangan disemprot menggunakan air, apalagi diguyur. Kalau air langsung disemprot ke daerah mesin, khawatir ada air yang masuk ke soket kelistrikan,&quot; ujar Asep ketika ditemui di Tangerang Selatan (16/4)</p>\r\n\r\n<p>Masih kata Edi, air tersebut bisa berpotensi menjadi jamur dan membuat hambatan jalur listrik. &quot;Air yang berada di soket lama kelamaan bisa menjadi jamur dan membuat koneksi listrik menjadi terhambat,&quot; lanjut Edi.</p>\r\n\r\n<p>Edi juga berpesan bahwa menyemprot air bagian mesin bisa menimbulkan korslet. &ldquo;Paling bahaya jika terjadi korslet. Bisa berpotensi terbakar,&rdquo; Tutupnya.</p>\r\n\r\n<p>Maka idealnya adalah lap komponen-komponen mesin dengan lap basah. Atau gunakan kuas untuk menjangkau celah-celah mesin. Siapkan juga lap kering untuk mengeringkan segera bidang yang telah dilap dengan kuas maupun lap basah.&nbsp;</p>\r\n\r\n<p>src : otodriver</p>\r\n', '2019-05-03 14:14:52'),
(8, 'Sejumlah Keunggulan Lampu LED Daripada Halogen', 0x31366530383632633266616337663931626434323066336133323466316331632e706e67, '<p>Lampu LED telah menjadi teknologi terbaru dalam hal penerangan mobil. Bahkan beberapa agen pemegang merek (APM) telah menggunakan headlamp LED sebagai keperluan standar dari produk mereka. Lantas apa saja keunggulan lampu LED jika dibandingkan halogen?</p>\r\n\r\n<p>Dari sisi teknologi, dalam kebutuhan penerangan mobil sehari-hari, LED memiliki banyak keunggulan yang telah umum diketahui. Yang pertama, LED dikenal memiliki kehematan energi yang signifikan jika dibandingkan lampu halogen.</p>\r\n\r\n<p><img alt=\"\" src=\"https://otodriver.com/image/load/800/0/gallery/dxo-04482999.jpg\" /></p>\r\n\r\n<p>&quot;Kalau lampu halogen itu kan bisa sampai 50 watt, nah kalau LED ini cuma 7 watt. Jadi jauh lebih efisien, daya pakai untuk listrik cuma 12 volt sampai 18 volt,&quot; ujar Director CV Sampurna Part Niaga sebagai distributor lampu LED Autovision, Lily Hernawan di Jakarta, Jumat kemarin (26/4).</p>\r\n\r\n<p>Kedua, lampu LED memiliki daya tahan yang jauh lebih lama jika dibandingkan halogen. Jika dibandingkan dalam hitungan jam, lampu LED memiliki ketahanan 40 kali lipat lebih lama dibandingkan halogen.</p>\r\n\r\n<p><img alt=\"\" src=\"https://otodriver.com/image/load/800/0/gallery/battle-of-the-headlights-halogen-vs-xenon-vs-led-26530-23918.jpg\" /></p>\r\n\r\n<p>&quot;Lampu LED itu daya tahannya bisa 20 ribu jam, sedangkan halogen yang bawaan pabrik aja biasanya hanya 500 jam,&quot; ungkap Lily.</p>\r\n\r\n<p>Yang ketiga, Lampu LED dianggap lebih aman untuk digunakan oleh pengendara. Keamanan pada lampu LED dirancang untuk dua pihak, baik pengendara maupun pengguna jalan lainnya. Hal tersebut harus mengacu standar Eropa yang sama-sama menggunakan setir kanan seperti di Indonesia.</p>\r\n\r\n<p>&quot;Dalam dasar-dasar itu ada yang kami dapat seperti jarak 20mm - 50mm dari bahu jalan. Ada juga jarak agar pengguna jalan dari lawan arah itu tidak silau,&quot; ujar Lily mencoba menjelaskan.</p>\r\n\r\n<p>src:otodriver</p>\r\n', '2019-05-03 14:16:14'),
(9, 'Ternyata Ganti Ban Minimal Harus Dua, Ini Alasannya', 0x64383338633633383237366661396661383133313135356364336537396439392e6a706567, '<p>Ban merupakan bagian vital dari sebuah mobil, sehingga perlu perhatian khusus dari pemiliknya. Sebab, ban adalah komponen kendaraan yang langsung bersentuhan dengan jalan. Ban yang bermasalah tentunya dapat membahayakan pengemudi dan penumpang dalam mobil.</p>\r\n\r\n<p>Seiring pemakaian, ban akan lebih cepat habis atau menipis karena pemakaian itu sendiri. Terkadang, menipisnya ban juga berbeda-beda satu dibandingkan yang lainnya. Hal ini yang membuat banyak orang mengganti ban hanya satu saja. Padahal cara tersebut tidak dianjurkan.</p>\r\n\r\n<p>Departement Manager General Affair PT Bridgestone Tire Indonesia, Frankie Paduli mengatakan, akan terdapat efek yang tidak nyaman ketika hanya satu ban yang diganti. Dirinya menganjurkan minimal dua untuk mengganti ban mobil, baik depan maupun belakang.</p>\r\n\r\n<pre>\r\n<img alt=\"\" src=\"https://otodriver.com/image/load/800/0/gallery/tiretreaddepth-0909-danorkari-sr657.jpg\" /></pre>\r\n\r\n<p>&quot;Kami menyarankan mengganti minimal dua ban agar serasi alurnya. Kalau hanya satu, tidak stabil grip-nya karena tapak ban di sisi lainnya tidak sama. Yang satu nge-grip tapi satunya lagi tidak,&quot; ungkap Frankie di Jakarta, Selasa (9/4).</p>\r\n\r\n<p>Efek tidak nyaman yang dimaksud Frankie adalah mobil menjadi tidak stabil lantaran satu ban masih tebal dan lainnya tipis. &quot;Makanya kami sarankan paling tidak ganti ban dua sekaligus,&quot; jelasnya.</p>\r\n\r\n<p>Dirinya pun membolehkan mengganti ban hanya satu buah saja. Namun dianjurkan tidak terlalu lama, dikarenakan alasan-alasan yang baru saja disebutkan.</p>\r\n', '2019-05-03 14:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `nama_customer` varchar(128) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telpon` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `nama_mobil` varchar(128) NOT NULL,
  `tipe_mobil` varchar(128) NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `jenis_servis` varchar(128) NOT NULL,
  `keluhan` varchar(128) NOT NULL,
  `dealer` varchar(128) NOT NULL,
  `total` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nama_customer`, `email`, `no_telpon`, `tanggal`, `jam`, `nama_mobil`, `tipe_mobil`, `no_plat`, `jenis_servis`, `keluhan`, `dealer`, `total`) VALUES
(1, 'ABY KON', 'andrekj48@gmail.com', '0823123213', '2019-05-03', '13:00', 'Datsun', 'RUSH', 'DA 1231 TY', '80KM', 'mesin mati kena air', 'Yogyakarta', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id` int(11) NOT NULL,
  `nama_customer` varchar(128) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_telpon` varchar(128) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` varchar(10) NOT NULL,
  `nama_mobil` varchar(128) NOT NULL,
  `tipe_mobil` varchar(128) NOT NULL,
  `no_plat` varchar(10) NOT NULL,
  `jenis_servis` varchar(128) NOT NULL,
  `keluhan` varchar(128) NOT NULL,
  `dealer` varchar(128) NOT NULL,
  `total` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `riwayat`
--

INSERT INTO `riwayat` (`id`, `nama_customer`, `email`, `no_telpon`, `tanggal`, `jam`, `nama_mobil`, `tipe_mobil`, `no_plat`, `jenis_servis`, `keluhan`, `dealer`, `total`) VALUES
(1, 'ABANG GARONG', 'andre.nxgi@gmail.com', '986969698121', '2019-04-30', '12:00', 'Suzuki', 'TROTON', 'DA 1214 KF', '60KM', 'ban pecah belah', 'Bekasi', 'Rp 300.000'),
(13, 'AWDAWDAWD', 'andrekj@gmail.com', '986969698', '2019-04-29', '14:00', 'Suzuki', 'GO', 'TR 12321 T', '120KM', 'ban kempes bos', 'Solo', 'Rp300.000'),
(15, 'ANDRE KJ', 'abymayu.new@gmail.com', '986969698123', '2019-05-21', '13:00', 'Daihatsu', 'RUSH', 'DA 1234 KF', '80KM', 'ban kempes bos 123dsfsdf', 'Medan', 'Rp250.000'),
(16, 'AWDAWDAWD', 'abymayu.new@gmail.com', '986969698123', '2019-04-30', '11:00', 'Daihatsu', 'PICANTO', 'DA 1214 KF', '40KM', 'ban kempes bos', 'Semarang', NULL),
(17, 'AKU IYA', 'andrekj48@gmail.com', '986969698', '2019-04-30', '11:00', 'KIA', 'RUSH', 'DA 1214 KF', '80KM', 'ban kempes bos 123dsfsdf', 'Yogyakarta', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `image` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `image`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin', 'andrekj48@gmail.com', '$2y$10$ewKJBT33fsPYNfjY.CclOOzpd01SblpXt0peksgsAmLq6tWL6VqAu', 'IMG_20170210_1332271.jpg', 1, 1, 1553346597),
(3, 'andre', 'andrekj@gmail.com', '$2y$10$i1.Ba4z/LkOmc1Gz4h/0i.xgPZsbN/7K.iYxdx4FaYD1JSDiqkU6e', 'default.jpg', 2, 1, 1555697414),
(4, 'Pelanggan test', 'abymayu.new@gmail.com', '$2y$10$TVy56h61dx.gbDq7nc4la.e8ZwwrLOHIZ1mKrjo1ZY60X.qJZVQTC', 'default.jpg', 2, 1, 1556505627);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Customer');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'Profil', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder-plus', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'far fa-fw fa-folder-open', 1),
(6, 1, 'Pesanan', 'admin/pesanan', 'fas fa-fw fa-shopping-basket', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 4, 'Pesanan', 'customer', 'fas fa-fw fa-shopping-basket', 1),
(9, 1, 'Riwayat Pesanan', 'admin/riwayat', 'fas fa-shopping-bag', 1),
(10, 1, 'Artikel', 'admin/artikel', 'fas fa-align-justify', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
