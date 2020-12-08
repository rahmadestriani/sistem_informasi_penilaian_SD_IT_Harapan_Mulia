-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 10 Apr 2020 pada 07.46
-- Versi server: 10.3.16-MariaDB
-- Versi PHP: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_penilaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `NIP` varchar(10) NOT NULL,
  `nama_guru` varchar(35) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`NIP`, `nama_guru`, `alamat`) VALUES
('G001', 'Endang Lestari', 'Jalan Soekarno Hatta No.15'),
('G002', 'Apriansyah Firdaus', 'Jalan Bukit Kecil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` varchar(5) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `jumlah_siswa` int(11) NOT NULL,
  `NIP` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `jumlah_siswa`, `NIP`) VALUES
('K001', 'Satu A', 35, 'G001'),
('K002', 'Satu B', 38, 'G002');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mata_pelajaran`
--

CREATE TABLE `mata_pelajaran` (
  `id_mapel` varchar(5) NOT NULL,
  `nama_mapel` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mata_pelajaran`
--

INSERT INTO `mata_pelajaran` (`id_mapel`, `nama_mapel`) VALUES
('M001', 'Agama'),
('M002', 'PKN'),
('M003', 'B. Indonesia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai1`
--

CREATE TABLE `nilai1` (
  `id_nilai` varchar(5) NOT NULL,
  `id_mapel` varchar(5) NOT NULL,
  `NIS` varchar(5) NOT NULL,
  `uh1` double NOT NULL,
  `uh2` double NOT NULL,
  `uh3` double NOT NULL,
  `uh4` double NOT NULL,
  `uts` double NOT NULL,
  `uas` double NOT NULL,
  `jumlah_nilai` double NOT NULL,
  `rata_rata` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nilai1`
--

INSERT INTO `nilai1` (`id_nilai`, `id_mapel`, `NIS`, `uh1`, `uh2`, `uh3`, `uh4`, `uts`, `uas`, `jumlah_nilai`, `rata_rata`) VALUES
('N001', 'M001', 'S001', 80, 80, 70, 80, 70, 70, 450, 75),
('N002', 'M002', 'S001', 80, 75, 70, 78, 88, 80, 471, 78.5),
('N003', 'M003', 'S001', 80, 69, 90, 90, 88, 80, 497, 82.833333333333);

-- --------------------------------------------------------

--
-- Struktur dari tabel `rapor1`
--

CREATE TABLE `rapor1` (
  `id_rapor` varchar(5) NOT NULL,
  `NIS` varchar(5) NOT NULL,
  `id_kelas` varchar(5) NOT NULL,
  `id_semester` varchar(5) NOT NULL,
  `tahun_pelajaran` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `rapor1`
--

INSERT INTO `rapor1` (`id_rapor`, `NIS`, `id_kelas`, `id_semester`, `tahun_pelajaran`) VALUES
('R001', 'S001', 'K001', 'S001', '2019/2020');

-- --------------------------------------------------------

--
-- Struktur dari tabel `semester`
--

CREATE TABLE `semester` (
  `id_semester` varchar(5) NOT NULL,
  `nama_semester` varchar(10) NOT NULL,
  `jenis_semester` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `semester`
--

INSERT INTO `semester` (`id_semester`, `nama_semester`, `jenis_semester`) VALUES
('S001', 'Satu', 'Ganjil'),
('S002', 'Dua', 'Genap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE `siswa` (
  `NIS` varchar(5) NOT NULL,
  `nama_siswa` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`NIS`, `nama_siswa`, `jenis_kelamin`, `tgl_lahir`) VALUES
('S001', 'Rahma Destriani', 'Perempuan', '2013-12-01'),
('S002', 'Novita Sari', 'Perempuan', '2013-01-04'),
('S003', 'Putri Ayu Maysuroh', 'Perempuan', '2014-10-18'),
('S004', 'Kharunisa Adabbia', 'Perempuan', '2014-05-08');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`NIP`);

--
-- Indeks untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`),
  ADD KEY `idx_guru` (`NIP`);

--
-- Indeks untuk tabel `mata_pelajaran`
--
ALTER TABLE `mata_pelajaran`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `nilai1`
--
ALTER TABLE `nilai1`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `NIS` (`NIS`);

--
-- Indeks untuk tabel `rapor1`
--
ALTER TABLE `rapor1`
  ADD PRIMARY KEY (`id_rapor`),
  ADD KEY `NIS` (`NIS`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_semester` (`id_semester`);

--
-- Indeks untuk tabel `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indeks untuk tabel `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kelas`
--
ALTER TABLE `kelas`
  ADD CONSTRAINT `kelas_ibfk_1` FOREIGN KEY (`NIP`) REFERENCES `guru` (`NIP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `nilai1`
--
ALTER TABLE `nilai1`
  ADD CONSTRAINT `dua` FOREIGN KEY (`id_mapel`) REFERENCES `mata_pelajaran` (`id_mapel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `satu` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `rapor1`
--
ALTER TABLE `rapor1`
  ADD CONSTRAINT `rapor1_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rapor1_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rapor1_ibfk_3` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
