-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Waktu pembuatan: 22 Jun 2019 pada 10.18
-- Versi server: 10.3.14-MariaDB
-- Versi PHP: 7.3.5

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

DROP TABLE IF EXISTS `tb_admin`;
CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(35) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`username`),
  KEY `id_admin` (`id_admin`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `username`, `password`, `level`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Mahrus Khomaini'),
(2, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'admin', 'Habib Sahal Khomaini'),
(3, 'admin3', '32cacb2f994f6b42183a1300d9a3e8d6', 'admin', 'Fayruz Rayga Khomaini'),
(4, 'admin4', 'admin4', 'admin', 'Sugeng');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

DROP TABLE IF EXISTS `tb_barang`;
CREATE TABLE IF NOT EXISTS `tb_barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(100) NOT NULL,
  `stok` int(11) NOT NULL,
  `satuan` varchar(11) NOT NULL,
  `exp` date NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `stok`, `satuan`, `exp`) VALUES
(1, 'Spuit 50ml', 124, 'pcs', '2019-04-09'),
(2, 'Ultramilk', 112, 'liter', '2019-06-04'),
(3, 'Obat tidur', 28, 'pcs', '2019-06-29');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_id`
--

DROP TABLE IF EXISTS `tb_id`;
CREATE TABLE IF NOT EXISTS `tb_id` (
  `id` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `tb_invoice`;
CREATE TABLE IF NOT EXISTS `tb_invoice` (
  `id_invoice` int(5) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT,
  `id_kasir` int(11) NOT NULL,
  `id_pasien` varchar(10) NOT NULL,
  `total` int(11) NOT NULL,
  `datecreate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id_invoice`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_invoice`
--

INSERT INTO `tb_invoice` (`id_invoice`, `id_kasir`, `id_pasien`, `total`, `datecreate`) VALUES
(00001, 2, 'ID-0002', 20000, '2019-06-15 15:48:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_lab`
--

DROP TABLE IF EXISTS `tb_lab`;
CREATE TABLE IF NOT EXISTS `tb_lab` (
  `id_lab` int(11) NOT NULL,
  `id_pasien` varchar(11) NOT NULL,
  `id_dokter` int(11) DEFAULT NULL,
  `tanggal` date NOT NULL,
  `isValidasi` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_lab`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_ordertmp`
--

DROP TABLE IF EXISTS `tb_ordertmp`;
CREATE TABLE IF NOT EXISTS `tb_ordertmp` (
  `id_order` int(11) NOT NULL AUTO_INCREMENT,
  `id_profile` int(11) NOT NULL,
  `session` varchar(32) NOT NULL,
  PRIMARY KEY (`id_order`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

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
(49, 2, '20190641');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pemeriksaan`
--

DROP TABLE IF EXISTS `tb_pemeriksaan`;
CREATE TABLE IF NOT EXISTS `tb_pemeriksaan` (
  `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT,
  `id_profil` int(11) NOT NULL,
  `jenis_pemeriksaan` varchar(100) NOT NULL,
  `harga` int(11) DEFAULT 0,
  `unit` varchar(100) DEFAULT NULL,
  `nilai_rujukan` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_pemeriksaan`),
  KEY `id_profil` (`id_profil`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `tb_profil`;
CREATE TABLE IF NOT EXISTS `tb_profil` (
  `id_profil` int(11) NOT NULL AUTO_INCREMENT,
  `nama_profil` varchar(32) NOT NULL,
  PRIMARY KEY (`id_profil`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

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

DROP TABLE IF EXISTS `tb_siswa`;
CREATE TABLE IF NOT EXISTS `tb_siswa` (
  `nis` varchar(20) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jk` varchar(20) NOT NULL,
  `tmpt_lahir` varchar(100) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(200) NOT NULL,
  PRIMARY KEY (`nis`)
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

DROP TABLE IF EXISTS `tb_test`;
CREATE TABLE IF NOT EXISTS `tb_test` (
  `id_test` int(11) NOT NULL AUTO_INCREMENT,
  `id_lab` int(11) NOT NULL,
  `id_pemeriksaan` int(11) NOT NULL,
  `hasil` varchar(32) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `isDanger` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_test`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
