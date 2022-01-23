-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23 Jan 2022 pada 14.22
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pakaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id` varchar(10) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL,
  `merk` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `barang`
--

INSERT INTO `barang` (`id`, `namabarang`, `stok`, `merk`, `harga`) VALUES
('KB-001', 'Celana Jeans', 15, 'Levis Modern', 175000),
('KB-002', 'Sarung', 17, 'Wadimor', 57000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `belanja`
--

CREATE TABLE IF NOT EXISTS `belanja` (
  `idpembelian` varchar(10) NOT NULL,
  `iduser` varchar(10) NOT NULL,
  `namabarang` varchar(50) NOT NULL,
  `namauser` varchar(50) NOT NULL,
  `jumlahbeli` int(11) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `belanja`
--

INSERT INTO `belanja` (`idpembelian`, `iduser`, `namabarang`, `namauser`, `jumlahbeli`, `harga`) VALUES
('IP-001', 'P-002', 'Celana Jeans', 'Dwiki Ramadhan', 2, 350000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jeniskelamin` varchar(20) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama`, `jeniskelamin`, `nohp`, `alamat`) VALUES
('P-001', 'Reza Ardhana Putra', 'Laki-laki', '083444566543', 'Kisaran'),
('P-002', 'Dwiki Ramadhan', 'Laki-laki', '082134567654', 'Ujung Batu'),
('P-003', 'Andrean Hasibuan', 'Laki-laki', '086444566548', 'Tanjung Pura');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '0192023a7bbd73250516f069df18b500', 'pegawaitokojaya@gmail.com', 'Reza Ajiardhana Manurung', 1, 'Kasir'),
('pengunjung', '4c7420670566ee2315c2292921c55166', 'pembelibaju@gmail.com', 'Dwiki Andrean Frans Ramadhan', 2, 'Pembeli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `belanja`
--
ALTER TABLE `belanja`
 ADD PRIMARY KEY (`idpembelian`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`username`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
