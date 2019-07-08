-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jul 2019 pada 16.07
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_datasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `level`, `nama`) VALUES
(6, 'adiwijaya', 'd22af4180eee4bd95072eb90f94930e5', 'dokter', 'dr. Adi Wijaya'),
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Mahrus Khomaini'),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin', 'Habib Sahal Khomaini'),
(3, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 'admin', 'Fayruz Rayga Khomaini'),
(4, 'admin4', 'admin4', 'admin', 'Sugeng'),
(5, 'darman', 'e10adc3949ba59abbe56e057f20f883e', 'kasir', 'Darman');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `exp` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `stok`, `satuan`, `exp`) VALUES
(1, 'Spuit 50ml', 107, 'pcs', '2019-04-09'),
(2, 'Ultramilk', 112, 'liter', '2019-06-04'),
(3, 'Obat tidur', 23, 'pcs', '2019-06-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_id`
--

CREATE TABLE `tb_id` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_id`
--

INSERT INTO `tb_id` (`id`) VALUES
(0001),
(0002),
(0003),
(0004),
(0005),
(0006);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id_invoice` int(5) UNSIGNED ZEROFILL NOT NULL,
  `id_kasir` int(11) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `total` int(11) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `id_kasir`, `id_pasien`, `total`, `datecreate`) VALUES
(00008, 1, 'ID-0002', 10000, '2019-06-27 14:53:49'),
(00007, 1, 'ID-0004', 30000, '2019-06-27 01:28:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lab`
--

CREATE TABLE `tb_lab` (
  `id_lab` int(4) UNSIGNED ZEROFILL NOT NULL,
  `id_pasien` varchar(11) NOT NULL,
  `id_dokter` varchar(500) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `isValidasi` tinyint(1) NOT NULL,
  `session` varchar(21) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_lab`
--

INSERT INTO `tb_lab` (`id_lab`, `id_pasien`, `id_dokter`, `tanggal`, `isValidasi`, `session`) VALUES
(0006, 'ID-0004', 'Mahrus Khomaini', '2019-07-01', 1, '20190652'),
(0007, 'ID-0002', 'Mahrus Khomaini', '2019-06-28', 1, '20190653');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ordertmp`
--

CREATE TABLE `tb_ordertmp` (
  `id_order` int(11) NOT NULL,
  `id_profile` int(11) NOT NULL,
  `session` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_ordertmp`
--

INSERT INTO `tb_ordertmp` (`id_order`, `id_profile`, `session`) VALUES
(16, 1, '20190617'),
(15, 1, '20190617'),
(13, 1, '20190617'),
(14, 2, '20190617'),
(17, 1, '20190617'),
(18, 1, '20190617'),
(19, 1, '20190617'),
(27, 1, '20190623'),
(26, 1, '20190622'),
(24, 2, '20190618'),
(28, 1, '20190638'),
(29, 2, '20190638'),
(37, 1, '20190639'),
(38, 2, '20190639'),
(39, 4, '20190639'),
(47, 1, '20190640'),
(46, 2, '20190640'),
(45, 4, '20190640'),
(48, 4, '20190641'),
(49, 2, '20190641'),
(56, 1, '20190642'),
(57, 2, '20190642'),
(58, 4, '20190642'),
(59, 2, '20190643'),
(60, 4, '20190643'),
(61, 1, '20190643'),
(62, 1, '20190644'),
(63, 2, '20190644'),
(64, 4, '20190645'),
(65, 1, '20190646'),
(66, 2, '20190647'),
(68, 1, '20190648'),
(69, 2, '20190649'),
(70, 4, '20190649'),
(71, 1, '20190649'),
(72, 1, '20190650'),
(73, 2, '20190650'),
(74, 4, '20190650'),
(75, 1, '20190651'),
(76, 2, '20190651'),
(77, 1, '20190652'),
(78, 2, '20190652'),
(79, 4, '20190652'),
(80, 4, '20190653'),
(81, 2, '20190653');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan`
--

CREATE TABLE `tb_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_profil` int(11) NOT NULL,
  `jenis_pemeriksaan` varchar(100) NOT NULL,
  `harga` int(11) DEFAULT '0',
  `unit` varchar(100) DEFAULT NULL,
  `nilai_rujukan` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pemeriksaan`
--

INSERT INTO `tb_pemeriksaan` (`id_pemeriksaan`, `id_profil`, `jenis_pemeriksaan`, `harga`, `unit`, `nilai_rujukan`) VALUES
(1, 1, 'Hemoglobin', 20000, 'g/dL', 'L: 13,2-17,3\r\nP: 11,7-15,5\r\n'),
(2, 1, 'Jumlah Eritosit', 9000, '10^6/ÂµL', 'L: 4,4-5,9\nP: 3,8-5,2'),
(4, 4, 'Serologi', 1000, 'g/dL', 'xxx');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_profil`
--

CREATE TABLE `tb_profil` (
  `id_profil` int(11) NOT NULL,
  `nama_profil` varchar(32) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_profil`
--

INSERT INTO `tb_profil` (`id_profil`, `nama_profil`) VALUES
(1, 'Hematologi'),
(2, 'Imunsorelogi'),
(3, 'Kimia Klinik'),
(4, 'Bakterilogi'),
(5, 'Parasitlogy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_siswa`
--

INSERT INTO `tb_siswa` (`nis`, `nama`, `jk`, `tmpt_lahir`, `tgl_lahir`, `alamat`) VALUES
('ID-0002', 'Ahmad Zain', 'Laki - Laki', 'Banyumas', '2019-05-30', 'Jalan Basur'),
('ID-0003', 'Siti', 'Perempuan', 'Sleman', '2019-06-04', 'Jalan Manggis'),
('ID-0004', 'Subarjo', 'Laki - Laki', 'Jogja', '2019-06-20', 'Jl kaki');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_test`
--

CREATE TABLE `tb_test` (
  `id_test` int(11) NOT NULL,
  `id_lab` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `hasil` varchar(32) DEFAULT NULL,
  `keterangan` varchar(500) DEFAULT NULL,
  `isDanger` tinyint(1) DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_test`
--

INSERT INTO `tb_test` (`id_test`, `id_lab`, `id_pemeriksaan`, `hasil`, `keterangan`, `isDanger`) VALUES
(2, 6, 1, '20', NULL, 0),
(3, 6, 2, '10', NULL, 0),
(4, 6, 4, '21', NULL, 0),
(5, 7, 4, '20', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`username`),
  ADD KEY `id_admin` (`id_admin`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indeks untuk tabel `tb_id`
--
ALTER TABLE `tb_id`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id_invoice`);

--
-- Indeks untuk tabel `tb_lab`
--
ALTER TABLE `tb_lab`
  ADD PRIMARY KEY (`id_lab`);

--
-- Indeks untuk tabel `tb_ordertmp`
--
ALTER TABLE `tb_ordertmp`
  ADD PRIMARY KEY (`id_order`);

--
-- Indeks untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_profil` (`id_profil`);

--
-- Indeks untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  ADD PRIMARY KEY (`id_profil`);

--
-- Indeks untuk tabel `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indeks untuk tabel `tb_test`
--
ALTER TABLE `tb_test`
  ADD PRIMARY KEY (`id_test`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_id`
--
ALTER TABLE `tb_id`
  MODIFY `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id_invoice` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_lab`
--
ALTER TABLE `tb_lab`
  MODIFY `id_lab` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `tb_ordertmp`
--
ALTER TABLE `tb_ordertmp`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT untuk tabel `tb_pemeriksaan`
--
ALTER TABLE `tb_pemeriksaan`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tb_profil`
--
ALTER TABLE `tb_profil`
  MODIFY `id_profil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_test`
--
ALTER TABLE `tb_test`
  MODIFY `id_test` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
