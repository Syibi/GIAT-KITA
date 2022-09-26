-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Sep 2022 pada 07.22
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `giat_kita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `nia` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` enum('master-admin','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`nia`, `nama`, `nip`, `jabatan`, `email`, `telepon`, `password`, `level`) VALUES
('ADM0001', 'admin', '123456789', 'administrator', 'testemail@gmail.com', '0897654321', 'test', 'master-admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `anggota`
--

CREATE TABLE `anggota` (
  `nik` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `telepon` varchar(12) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `anggota`
--

INSERT INTO `anggota` (`nik`, `nama`, `nip`, `jabatan`, `email`, `telepon`, `password`) VALUES
('AGT0001', 'pengguna01', '12345678909', 'bagian ujicoba', 'testemail@gmail.com', '0987654321', 'ujicoba'),
('AGT2209001', 'Asep Kurniawan', '1234959537030', 'bagian test', '098765432123', 'testemailsay', 'testuser'),
('AGT2209002', 'Ahmad', '1276557654.34.54', 'bagian test juga', 'testemail2@gmail.com', '085434567843', 'testpassword'),
('AGT2209003', 'Monkey D Luffy', '1276557654.34.54', 'Raja Bajak Laut', 'testemail@gmail.com', '098765434565', 'testkapten'),
('AGT2209004', 'Roronoa Zoro', '1276557654.34.54', 'Pendekar pedang', 'testemail@gmail.com', '098765432123', 'testuser'),
('AGT2209005', 'Sanji', '1276557654.34.54', 'Koki', 'testemail@gmail.com', '098765432123', 'testuser');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi`
--

CREATE TABLE `disposisi` (
  `no_surat` varchar(50) NOT NULL,
  `tgl_terima` date NOT NULL,
  `pengirim` varchar(30) NOT NULL,
  `sifat` enum('Penting','Rahasia','Biasa','Segera','Sangat Segera') NOT NULL,
  `perihal` varchar(40) NOT NULL,
  `detail` varchar(100) NOT NULL,
  `file_surat` varchar(100) NOT NULL,
  `status` enum('Diterima','Diperiksa','Disposisi') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disposisi`
--

INSERT INTO `disposisi` (`no_surat`, `tgl_terima`, `pengirim`, `sifat`, `perihal`, `detail`, `file_surat`, `status`) VALUES
('78/VII/MA/test/2022', '2022-09-17', 'Bukan pengirim surat', 'Sangat Segera', 'Cuma usil', 'Test kirim mobile', 'Ceklist Persyaratan Sidang.pdf', 'Diterima'),
('89/56/888/2004', '2022-09-18', 'test pengirim', 'Segera', 'test surat masuk 3', 'test', 'training yolov5.png', 'Diterima'),
('90/89/200/VII/2022', '2022-09-24', 'Marine', 'Penting', 'penangkapan kru topi jerami', 'tangkap luffy, zoro dan sanji', 'Koala.jpg', 'Diterima'),
('90/89/3232/2000', '2022-09-19', 'dummy', 'Biasa', 'test surat masuk2', 'er eysbgra htddj', 'Firebase Database _ A Guide for Beginners - Guides - Kodular Community.pdf', 'Diterima'),
('PO/05.4.2/07/VII/2022', '2022-09-19', 'Sekretariat Kab. Kediri', 'Penting', 'Pelaksanaan Kegiatan HUT RI', 'Pelaksanaan Kegiatan HUT RI ke 77 tahun 2022', '', 'Diterima');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`nia`);

--
-- Indeks untuk tabel `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`nik`);

--
-- Indeks untuk tabel `disposisi`
--
ALTER TABLE `disposisi`
  ADD PRIMARY KEY (`no_surat`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
