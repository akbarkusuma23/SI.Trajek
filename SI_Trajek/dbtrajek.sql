-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 06, 2019 at 06:03 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbtrajek`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbbarang`
--

CREATE TABLE `tbbarang` (
  `id_barang` varchar(5) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `nopol` varchar(8) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `gambar` text NOT NULL,
  `kapasitas` int(2) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `warna` varchar(20) NOT NULL,
  `harga` int(10) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbbarang`
--

INSERT INTO `tbbarang` (`id_barang`, `id_kategori`, `nopol`, `merk`, `jenis`, `gambar`, `kapasitas`, `tahun`, `warna`, `harga`, `status`) VALUES
('BR001', 2, 'JMBR0012', 'Honda', 'Bit', 'default.jpg', 2, '2009', 'Hitam', 20000, 1),
('BRG01', 2, 'M0134519', 'Honda', 'Bit', 'default.jpg', 2, '2011', 'Merah', 15000, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbdetailpemesanan`
--

CREATE TABLE `tbdetailpemesanan` (
  `id_detail_pemesanan` varchar(5) NOT NULL,
  `id_barang` varchar(5) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah_barang` int(2) NOT NULL,
  `subtotal` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbdp`
--

CREATE TABLE `tbdp` (
  `id_dp` varchar(5) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `dp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbjabatan`
--

CREATE TABLE `tbjabatan` (
  `id_jabatan` int(11) NOT NULL,
  `jabatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbjabatan`
--

INSERT INTO `tbjabatan` (`id_jabatan`, `jabatan`) VALUES
(1, 'Admin'),
(2, 'Karyawan');

-- --------------------------------------------------------

--
-- Table structure for table `tbkaryawan`
--

CREATE TABLE `tbkaryawan` (
  `nip` varchar(6) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `aktif` int(1) NOT NULL,
  `tanggal_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkaryawan`
--

INSERT INTO `tbkaryawan` (`nip`, `nama_karyawan`, `email`, `no_telepon`, `alamat`, `foto`, `password`, `id_jabatan`, `aktif`, `tanggal_buat`) VALUES
('KWN000', 'Khosnol Khotimatul Arifah', 'khotimahkhotim15@gmail.com', '085336125313', 'Bansanik Gayam', 'default.jpg', '$2y$10$IwxDRymrtd1Yh.iPyrpH9ui50KFPkf9SwXk/P4l.ut.6eOpJFlKw2', 1, 1, '2019-05-04 23:14:47'),
('KWN001', 'Ana Amilia', 'liaamilia11@gmail.com', '085336125312', 'Bansanik Gayam', 'default.jpg', '$2y$10$YIgBFC77jfv9Ted.G6lUoe8yBNmGTPQhF/C9hTTlnPbLVmT7CYaum', 2, 1, '2019-05-04 23:25:38'),
('KWN002', 'Susilawati', 'susi21@gmail.com', '085336345432', 'Kaowang-Gayam', 'default.jpg', '$2y$10$NOq4a5y1oOl/KxmUxIjEeetbLFxYMq0atFgoNFCG5Kq6bbO7z/iQ.', 2, 1, '2019-05-05 16:26:05');

-- --------------------------------------------------------

--
-- Table structure for table `tbkategori`
--

CREATE TABLE `tbkategori` (
  `id_kategori` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbkategori`
--

INSERT INTO `tbkategori` (`id_kategori`, `kategori`) VALUES
(1, 'Mobil'),
(2, 'Sepeda motor'),
(3, 'Kamera');

-- --------------------------------------------------------

--
-- Table structure for table `tbpelanggan`
--

CREATE TABLE `tbpelanggan` (
  `nik` varchar(16) NOT NULL,
  `nama_pelanggan` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `aktif` int(1) NOT NULL,
  `tanggal_buat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbpemesanan`
--

CREATE TABLE `tbpemesanan` (
  `id_pemesanan` varchar(5) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tanggal_pesan` date NOT NULL,
  `id_detail_pemesanan` varchar(5) NOT NULL,
  `tanggal_pengambilan` date NOT NULL,
  `tanggal_pengembalian` date NOT NULL,
  `tipe_pembayaran` varchar(20) NOT NULL,
  `jumlah_total` int(10) NOT NULL,
  `id_dp` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbpengembalian`
--

CREATE TABLE `tbpengembalian` (
  `id_pengembalian` varchar(5) NOT NULL,
  `nip` varchar(6) NOT NULL,
  `id_transaksi` varchar(11) NOT NULL,
  `denda` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbsarankritik`
--

CREATE TABLE `tbsarankritik` (
  `id_saran_kritik` varchar(5) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `saran_kritik` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbtransaksi`
--

CREATE TABLE `tbtransaksi` (
  `id_transaksi` varchar(11) NOT NULL,
  `id_pemesanan` varchar(5) NOT NULL,
  `nip` varchar(6) NOT NULL,
  `bayar` int(10) NOT NULL,
  `kembali` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_access_menu`
--

CREATE TABLE `tb_user_access_menu` (
  `id` int(11) NOT NULL,
  `id_jabatan` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_access_menu`
--

INSERT INTO `tb_user_access_menu` (`id`, `id_jabatan`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_menu`
--

CREATE TABLE `tb_user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_menu`
--

INSERT INTO `tb_user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Karyawan'),
(3, 'Menu');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_sub_menu`
--

CREATE TABLE `tb_user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `url` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `aktif` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user_sub_menu`
--

INSERT INTO `tb_user_sub_menu` (`id`, `menu_id`, `judul`, `url`, `icon`, `aktif`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'karyawan', 'fas fa-fw fa-user', 1),
(4, 3, 'Menu Menejemen', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Menejemen', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(6, 1, 'Jabatan', 'admin/jabatan', 'fas fa-fw fa-user-tie', 1),
(8, 1, 'Karyawan', 'admin/karyawan', 'fas fa-fw fa-user-plus', 1),
(10, 1, 'Barang', 'admin/barang', 'fas fa-fw fa-plus-circle', 1),
(11, 1, 'Kategori', 'admin/kategori', 'far fa-fw fa-plus-square', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbbarang`
--
ALTER TABLE `tbbarang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `tbdetailpemesanan`
--
ALTER TABLE `tbdetailpemesanan`
  ADD KEY `id_sewa` (`id_barang`);

--
-- Indexes for table `tbdp`
--
ALTER TABLE `tbdp`
  ADD PRIMARY KEY (`id_dp`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbjabatan`
--
ALTER TABLE `tbjabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `tbkaryawan`
--
ALTER TABLE `tbkaryawan`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tbkategori`
--
ALTER TABLE `tbkategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbpelanggan`
--
ALTER TABLE `tbpelanggan`
  ADD PRIMARY KEY (`nik`),
  ADD KEY `id_jabatan` (`id_jabatan`);

--
-- Indexes for table `tbpemesanan`
--
ALTER TABLE `tbpemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_dp` (`id_dp`);

--
-- Indexes for table `tbpengembalian`
--
ALTER TABLE `tbpengembalian`
  ADD PRIMARY KEY (`id_pengembalian`),
  ADD KEY `nip` (`nip`),
  ADD KEY `id_transaksi` (`id_transaksi`);

--
-- Indexes for table `tbsarankritik`
--
ALTER TABLE `tbsarankritik`
  ADD PRIMARY KEY (`id_saran_kritik`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_pemesanan` (`id_pemesanan`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `tb_user_access_menu`
--
ALTER TABLE `tb_user_access_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_jabatan` (`id_jabatan`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `tb_user_menu`
--
ALTER TABLE `tb_user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user_sub_menu`
--
ALTER TABLE `tb_user_sub_menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbjabatan`
--
ALTER TABLE `tbjabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbkategori`
--
ALTER TABLE `tbkategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user_access_menu`
--
ALTER TABLE `tb_user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_user_menu`
--
ALTER TABLE `tb_user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_user_sub_menu`
--
ALTER TABLE `tb_user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbbarang`
--
ALTER TABLE `tbbarang`
  ADD CONSTRAINT `tbbarang_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbkategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbdetailpemesanan`
--
ALTER TABLE `tbdetailpemesanan`
  ADD CONSTRAINT `tbdetailpemesanan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `tbbarang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbdp`
--
ALTER TABLE `tbdp`
  ADD CONSTRAINT `tbdp_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tbpelanggan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbpemesanan`
--
ALTER TABLE `tbpemesanan`
  ADD CONSTRAINT `tbpemesanan_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tbpelanggan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbpemesanan_ibfk_2` FOREIGN KEY (`id_dp`) REFERENCES `tbdp` (`id_dp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbpengembalian`
--
ALTER TABLE `tbpengembalian`
  ADD CONSTRAINT `tbpengembalian_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `tbtransaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbpengembalian_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `tbkaryawan` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbsarankritik`
--
ALTER TABLE `tbsarankritik`
  ADD CONSTRAINT `tbsarankritik_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `tbpelanggan` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbtransaksi`
--
ALTER TABLE `tbtransaksi`
  ADD CONSTRAINT `tbtransaksi_ibfk_1` FOREIGN KEY (`id_pemesanan`) REFERENCES `tbpemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbtransaksi_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `tbkaryawan` (`nip`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user_access_menu`
--
ALTER TABLE `tb_user_access_menu`
  ADD CONSTRAINT `tb_user_access_menu_ibfk_1` FOREIGN KEY (`id_jabatan`) REFERENCES `tbjabatan` (`id_jabatan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
