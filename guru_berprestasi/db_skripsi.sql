-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Feb 2019 pada 01.13
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_skripsi`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bobotevaluasi`
--

CREATE TABLE `tbl_bobotevaluasi` (
  `id` int(11) NOT NULL,
  `nip` varchar(24) NOT NULL,
  `rendah` float NOT NULL,
  `sedang` float NOT NULL,
  `tinggi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bobotevaluasi`
--

INSERT INTO `tbl_bobotevaluasi` (`id`, `nip`, `rendah`, `sedang`, `tinggi`) VALUES
(1, '131252030119020006', 0, 0.5, 0),
(2, '131252030119030005', 0, 0.2, 0.0285714),
(3, '131252030119040003', 0, 0, 0.342857),
(4, '131252030119060018', 0, 0, 0.428571),
(5, '131252030119070009', 0, 0.65, 0),
(6, '131252030119090019', 0, 0, 0.285714),
(7, '131252030119100014', 0, 0.6, 0),
(8, '131252030119110001', 0, 0.5, 0),
(9, '131252030119110013', 0, 0.75, 0),
(10, '131252030119130016', 0, 0, 0.428571),
(11, '131252030119140010', 0, 0.2, 0.0285714),
(12, '131252030119150017', 0, 0, 0.142857),
(13, '131252030119170011', 0, 0.5, 0),
(14, '131252030119180008', 0, 0, 0.228571),
(15, '131252030119190012', 0, 0, 0.371429),
(16, '131252030119210015', 0, 0, 0.142857),
(17, '131252030119210020', 0, 0, 0.428571),
(18, '131252030119270004', 0, 0.65, 0),
(19, '131252030119280021', 0, 0, 0.142857),
(20, '131252030119280022', 0, 0.1, 0.0857143);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bobotkehadiran`
--

CREATE TABLE `tbl_bobotkehadiran` (
  `id` int(11) NOT NULL,
  `nip` varchar(24) NOT NULL,
  `rendah` float NOT NULL,
  `sedang` float NOT NULL,
  `tinggi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bobotkehadiran`
--

INSERT INTO `tbl_bobotkehadiran` (`id`, `nip`, `rendah`, `sedang`, `tinggi`) VALUES
(1, '131252030119020006', 0, 0, 0.142857),
(2, '131252030119030005', 0, 0.8, 0),
(3, '131252030119040003', 0, 0.2, 1),
(4, '131252030119060018', 0, 0, 0.142857),
(5, '131252030119070009', 0, 0.6, 0),
(6, '131252030119090019', 0, 0.4, 0),
(7, '131252030119100014', 0, 0.4, 0),
(8, '131252030119110001', 0, 0, 0.571429),
(9, '131252030119110013', 0, 0.16, 0.0285714),
(10, '131252030119130016', 0, 0, 0.142857),
(11, '131252030119140010', 0, 0.4, 0),
(12, '131252030119150017', 0, 0.6, 0),
(13, '131252030119170011', 0, 0.8, 0),
(14, '131252030119180008', 0, 0.28, 0),
(15, '131252030119190012', 0, 0.52, 0),
(16, '131252030119210015', 0, 0.52, 0),
(17, '131252030119210020', 0, 0, 0.142857),
(18, '131252030119270004', 0, 0.4, 0),
(19, '131252030119280021', 0, 0.4, 0),
(20, '131252030119280022', 0, 0.2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bobotkinerja`
--

CREATE TABLE `tbl_bobotkinerja` (
  `id` int(11) NOT NULL,
  `nip` varchar(24) NOT NULL,
  `rendah` float NOT NULL,
  `sedang` float NOT NULL,
  `tinggi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bobotkinerja`
--

INSERT INTO `tbl_bobotkinerja` (`id`, `nip`, `rendah`, `sedang`, `tinggi`) VALUES
(1, '131252030119020006', 0, 0, 0.371429),
(2, '131252030119030005', 0, 0.48, 0),
(3, '131252030119040003', 0, 0, 0.285714),
(4, '131252030119060018', 0, 0, 0.371429),
(5, '131252030119070009', 0, 0.16, 0.0285714),
(6, '131252030119090019', 0, 0.6, 0),
(7, '131252030119100014', 0, 0.2, 1),
(8, '131252030119110001', 0, 0, 0.142857),
(9, '131252030119110013', 0, 0, 0.485714),
(10, '131252030119130016', 0, 0, 0.285714),
(11, '131252030119140010', 0, 0, 0.228571),
(12, '131252030119150017', 0, 0.08, 0.0857143),
(13, '131252030119170011', 0, 0.6, 0),
(14, '131252030119180008', 0, 0, 0.142857),
(15, '131252030119190012', 0, 0.16, 0.0285714),
(16, '131252030119210015', 0, 0, 0.342857),
(17, '131252030119210020', 0, 0, 0.428571),
(18, '131252030119270004', 0, 0.08, 0.0857143),
(19, '131252030119280021', 0, 0, 0.285714),
(20, '131252030119280022', 0, 0, 0.314286);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bobotpengembangan`
--

CREATE TABLE `tbl_bobotpengembangan` (
  `id` int(11) NOT NULL,
  `nip` varchar(24) NOT NULL,
  `kategori1` float NOT NULL,
  `kategori2` float NOT NULL,
  `kategori3` float NOT NULL,
  `kategori4` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_bobotpeng_materi`
--

CREATE TABLE `tbl_bobotpeng_materi` (
  `id` int(11) NOT NULL,
  `nip` varchar(24) NOT NULL,
  `rendah` float NOT NULL,
  `sedang` float NOT NULL,
  `tinggi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_bobotpeng_materi`
--

INSERT INTO `tbl_bobotpeng_materi` (`id`, `nip`, `rendah`, `sedang`, `tinggi`) VALUES
(1, '131252030119020006', 0, 0, 0.571429),
(2, '131252030119030005', 0, 0.1, 0.0857143),
(3, '131252030119040003', 0, 0, 0.428571),
(4, '131252030119060018', 0, 0, 0.571429),
(5, '131252030119070009', 0, 0, 0.342857),
(6, '131252030119090019', 0, 0.25, 1),
(7, '131252030119100014', 0, 0, 0.142857),
(8, '131252030119110001', 0, 0, 0.285714),
(9, '131252030119110013', 0, 0.5, 0),
(10, '131252030119130016', 0, 0, 0.571429),
(11, '131252030119140010', 0, 0, 0.2),
(12, '131252030119150017', 0, 0.4, 0),
(13, '131252030119170011', 0, 0.25, 1),
(14, '131252030119180008', 0, 0, 0.285714),
(15, '131252030119190012', 0, 0, 0.428571),
(16, '131252030119210015', 0, 0.25, 1),
(17, '131252030119210020', 0, 0, 0.571429),
(18, '131252030119270004', 0, 0, 0.314286),
(19, '131252030119280021', 0, 0.1, 0.0857143),
(20, '131252030119280022', 0, 0, 0.342857);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `nip` varchar(24) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `ttl` date NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `jk` varchar(12) NOT NULL,
  `jenjang` varchar(40) NOT NULL,
  `program_studi` varchar(15) NOT NULL,
  `status` varchar(30) NOT NULL,
  `kehadiran` float NOT NULL,
  `pengembangan` int(11) NOT NULL,
  `kinerja` int(11) NOT NULL,
  `evaluasi` int(11) NOT NULL,
  `peng_materi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_guru`
--

INSERT INTO `tbl_guru` (`nip`, `nama`, `ttl`, `alamat`, `jk`, `jenjang`, `program_studi`, `status`, `kehadiran`, `pengembangan`, `kinerja`, `evaluasi`, `peng_materi`) VALUES
('131252030119020006', 'Moh. Juandi, S.PD.I', '1982-09-24', 'Kabar', 'L', 'S1', 'Hukum', 'NON PNS', 70, 0, 78, 60, 85),
('131252030119030005', 'Muh. Khairi S.PD.I', '1981-07-18', 'Rumbuk', 'L', 'S1', 'Geografi', 'NON PNS', 50, 0, 58, 66, 68),
('131252030119040003', 'Rafii S.PD.I', '1968-12-31', 'Aikmel', 'L', 'S1', 'Hukum', 'PNS', 65, 0, 75, 77, 80),
('131252030119060018', 'samsul basri S.PD', '1985-09-24', 'peneda gandor', 'L', 'S1', 'Geografi', 'NON PNS', 70, 0, 78, 80, 85),
('131252030119070009', 'Hudiana Susanti S.PD', '1988-09-10', 'Dasan Baru', 'P', 'S1', 'Bahasa Indonesi', 'NON PNS', 55, 0, 66, 57, 77),
('131252030119090019', 'Rina Yuliana, S.PD', '1986-07-02', 'Rumbuk', 'P', 'S1', 'Bahasa Inggris', 'NON PNS', 60, 0, 55, 75, 65),
('131252030119100014', 'Lasmarhadi Zuhrianto', '1979-03-19', 'Presak', 'L', 'S1', 'Ekonomi', 'NON PNS', 60, 0, 65, 58, 70),
('131252030119110001', 'Ahmad Yani S.PD', '1986-03-04', 'montong maji', 'L', 'S1', 'Matematika', 'NON PNS', 85, 0, 70, 60, 75),
('131252030119110013', 'Nila Fitriana, S.PD', '1985-04-12', 'Kuang Berora', 'P', 'S1', 'Matematika', 'NON PNS', 66, 0, 82, 55, 60),
('131252030119130016', 'siti salmiati S.PD', '1987-02-21', 'kabar', 'P', 'S1', 'Ipa', 'NON PNS', 70, 0, 75, 80, 85),
('131252030119140010', 'Rini Apriliani Susan', '1991-04-10', 'Selong', 'P', 'S1', 'Sosiologi', 'NON PNS', 60, 0, 73, 66, 72),
('131252030119150017', 'Muh. Wildan Wj, S.PD', '1988-09-12', 'Rensing', 'L', 'S1', 'PKN', 'NON PNS', 55, 0, 68, 70, 62),
('131252030119170011', 'Ahyar Rosyidi S.PD', '1986-12-31', 'moyot', 'L', 'S1', 'Sejarah', 'NON PNS', 50, 0, 55, 60, 65),
('131252030119180008', 'Sri Endang Wahyuni S', '1982-08-10', 'Kabar', 'P', 'S1', 'Geografi', 'NON PNS', 63, 0, 70, 73, 75),
('131252030119190012', 'Hamdiah, SE', '1979-03-19', 'Kabar', 'P', 'S1', 'Ekonomi', 'NON PNS', 57, 0, 66, 78, 80),
('131252030119210015', 'Agus Yanto S.PD', '1990-08-08', 'Sakra', 'L', 'S1', 'Sosiologi', 'NON PNS', 57, 0, 77, 70, 65),
('131252030119210020', 'Fitriatun masdiana S', '1989-12-13', 'moyot', 'P', 'S1', 'Seni Budaya', 'NON PNS', 70, 0, 80, 80, 85),
('131252030119270004', 'Sahmad, S.PD', '1984-11-04', 'setanggor', 'L', 'S1', 'Penjaskes', 'NON PNS', 60, 0, 68, 57, 76),
('131252030119280021', 'B. Zakiah, A.MD', '1980-04-01', 'Sakra', 'P', 'D2', 'Sistem Informas', 'NON PNS', 60, 0, 75, 70, 68),
('131252030119280022', 'Muh. Nasir Akbar, A.', '1992-12-31', 'Rumbuk', 'L', 'S1', 'Sastra Bahasa', 'NON PNS', 65, 0, 76, 68, 77);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_konfigurasi`
--

CREATE TABLE `tbl_konfigurasi` (
  `id_kategori` varchar(50) NOT NULL,
  `rendah` varchar(100) NOT NULL,
  `sedang` varchar(100) NOT NULL,
  `tinggi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_konfigurasi`
--

INSERT INTO `tbl_konfigurasi` (`id_kategori`, `rendah`, `sedang`, `tinggi`) VALUES
('Evaluasi', '0-50', '45-70', '65-100'),
('KEHADIRAN', '0-45', '40-70', '65-100'),
('Kinerja', '0-45', '40-70', '65-100'),
('Peng_materi', '0-50', '45-70', '65-100');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ppa`
--

CREATE TABLE `tbl_ppa` (
  `nip` varchar(24) NOT NULL,
  `nama` varchar(70) NOT NULL,
  `kehadiran` float NOT NULL,
  `kinerja` float NOT NULL,
  `evaluasi` float NOT NULL,
  `peng_materi` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ppa`
--

INSERT INTO `tbl_ppa` (`nip`, `nama`, `kehadiran`, `kinerja`, `evaluasi`, `peng_materi`) VALUES
('131252030119040003', 'Rafii S.PD.I', 1, 0.285714, 0.342857, 0.428571),
('131252030119060018', 'samsul basri S.PD', 0.142857, 0.371429, 0.428571, 0.571429),
('131252030119130016', 'siti salmiati S.PD', 0.142857, 0.285714, 0.428571, 0.571429),
('131252030119210020', 'Fitriatun masdiana S', 0.142857, 0.428571, 0.428571, 0.571429),
('131252030119280022', 'Muh. Nasir Akbar, A.', 1, 0.314286, 0.0857143, 0.342857);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `jenis_akun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `nama`, `username`, `password`, `jenis_akun`) VALUES
(1, 'Rodi', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator');

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vderajat`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vderajat` (
`nip` varchar(24)
,`nama` varchar(70)
,`kehadiran` float
,`evaluasi` float
,`kinerja` float
,`peng_materi` float
,`RataBobot` double
,`Derajat` double
);

-- --------------------------------------------------------

--
-- Stand-in struktur untuk tampilan `vratabobot`
-- (Lihat di bawah untuk tampilan aktual)
--
CREATE TABLE `vratabobot` (
`nip` varchar(24)
,`nama` varchar(70)
,`kehadiran` float
,`evaluasi` float
,`kinerja` float
,`peng_materi` float
,`RataBobot` double
);

-- --------------------------------------------------------

--
-- Struktur untuk view `vderajat`
--
DROP TABLE IF EXISTS `vderajat`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vderajat`  AS  select `vratabobot`.`nip` AS `nip`,`vratabobot`.`nama` AS `nama`,`vratabobot`.`kehadiran` AS `kehadiran`,`vratabobot`.`evaluasi` AS `evaluasi`,`vratabobot`.`kinerja` AS `kinerja`,`vratabobot`.`peng_materi` AS `peng_materi`,`vratabobot`.`RataBobot` AS `RataBobot`,(`vratabobot`.`RataBobot` * 100) AS `Derajat` from `vratabobot` order by (`vratabobot`.`RataBobot` * 100) desc ;

-- --------------------------------------------------------

--
-- Struktur untuk view `vratabobot`
--
DROP TABLE IF EXISTS `vratabobot`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `vratabobot`  AS  select `tbl_ppa`.`nip` AS `nip`,`tbl_ppa`.`nama` AS `nama`,`tbl_ppa`.`kehadiran` AS `kehadiran`,`tbl_ppa`.`evaluasi` AS `evaluasi`,`tbl_ppa`.`kinerja` AS `kinerja`,`tbl_ppa`.`peng_materi` AS `peng_materi`,((((`tbl_ppa`.`kehadiran` + `tbl_ppa`.`kinerja`) + `tbl_ppa`.`evaluasi`) + `tbl_ppa`.`peng_materi`) / 4) AS `RataBobot` from `tbl_ppa` order by ((((`tbl_ppa`.`kehadiran` + `tbl_ppa`.`kinerja`) + `tbl_ppa`.`evaluasi`) + `tbl_ppa`.`peng_materi`) / 4) desc ;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_bobotevaluasi`
--
ALTER TABLE `tbl_bobotevaluasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npm` (`nip`);

--
-- Indeks untuk tabel `tbl_bobotkehadiran`
--
ALTER TABLE `tbl_bobotkehadiran`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npm` (`nip`);

--
-- Indeks untuk tabel `tbl_bobotkinerja`
--
ALTER TABLE `tbl_bobotkinerja`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npm` (`nip`);

--
-- Indeks untuk tabel `tbl_bobotpengembangan`
--
ALTER TABLE `tbl_bobotpengembangan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npm` (`nip`);

--
-- Indeks untuk tabel `tbl_bobotpeng_materi`
--
ALTER TABLE `tbl_bobotpeng_materi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `npm` (`nip`);

--
-- Indeks untuk tabel `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `tbl_konfigurasi`
--
ALTER TABLE `tbl_konfigurasi`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `tbl_ppa`
--
ALTER TABLE `tbl_ppa`
  ADD PRIMARY KEY (`nip`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_bobotevaluasi`
--
ALTER TABLE `tbl_bobotevaluasi`
  ADD CONSTRAINT `tbl_bobotevaluasi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tbl_guru` (`nip`);

--
-- Ketidakleluasaan untuk tabel `tbl_bobotkehadiran`
--
ALTER TABLE `tbl_bobotkehadiran`
  ADD CONSTRAINT `tbl_bobotkehadiran_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tbl_guru` (`nip`);

--
-- Ketidakleluasaan untuk tabel `tbl_bobotkinerja`
--
ALTER TABLE `tbl_bobotkinerja`
  ADD CONSTRAINT `tbl_bobotkinerja_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tbl_guru` (`nip`);

--
-- Ketidakleluasaan untuk tabel `tbl_bobotpengembangan`
--
ALTER TABLE `tbl_bobotpengembangan`
  ADD CONSTRAINT `tbl_bobotpengembangan_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tbl_guru` (`nip`);

--
-- Ketidakleluasaan untuk tabel `tbl_bobotpeng_materi`
--
ALTER TABLE `tbl_bobotpeng_materi`
  ADD CONSTRAINT `tbl_bobotpeng_materi_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `tbl_guru` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
