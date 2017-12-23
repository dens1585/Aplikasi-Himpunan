-- phpMyAdmin SQL Dump
-- version 3.2.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 18. April 2017 jam 21:05
-- Versi Server: 5.1.41
-- Versi PHP: 5.3.1

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pendaftaran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `biodata`
--

CREATE TABLE IF NOT EXISTS `biodata` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `nim` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jurusan` varchar(12) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(20) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `jk` varchar(2) NOT NULL,
  `hobi` varchar(40) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data untuk tabel `biodata`
--

INSERT INTO `biodata` (`no`, `nim`, `nama`, `jurusan`, `tmp_lahir`, `tgl_lahir`, `agama`, `jk`, `hobi`, `alamat`) VALUES
(29, 1116018, 'Mahmud Mulyadi', 'Informatika', 'Bandung', '6-April-2014', 'Islam', 'L', 'Sepak Bola,Mancing', 'Oks'),
(21, 1116018, 'Mahmud Mulyad', 'Informatik', 'Bandun', '21-Agustus-1997', 'Hindu', 'L', 'Basket,Gaming,Badminton', 'Jl. Cigadung Raya Barat No. 861'),
(22, 1116010, 'Cecep Sudrajat', 'Sipil', 'Tangerang', '13-Maret-2009', 'Kristen', 'P', 'Mancing,Badminton', 'Jl. Harmoni');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
