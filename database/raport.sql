-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 29 Jan 2018 pada 01.47
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `raport`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ekstra`
--

CREATE TABLE IF NOT EXISTS `ekstra` (
  `id_ekstra` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` varchar(30) NOT NULL,
  `nama_ekstra` varchar(30) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id_ekstra`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `ekstra`
--

INSERT INTO `ekstra` (`id_ekstra`, `id_siswa`, `nama_ekstra`, `ket`) VALUES
(1, '1', 'Patroli Keamanan Sekolah (PKS)', 'Baik dan aktif'),
(2, '2', 'Pramuka', 'sangat baik'),
(3, '10', 'Bola Volly', 'sangat baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(11) NOT NULL AUTO_INCREMENT,
  `nip` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tempat_lhr` varchar(20) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kd_mapel` varchar(20) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`id_guru`, `nip`, `nama`, `tempat_lhr`, `tanggal_lhr`, `jk`, `agama`, `alamat`, `kd_mapel`) VALUES
(1, '111227930383', 'Haryati,S.Si.', 'Tegal', '2018-01-06', 'Perempuan', 'Islam', 'Perumahan', 'MP04'),
(3, '238479', 'Hanif Fuadi Nurdin', 'tegal', '2018-01-03', 'Laki-laki', 'Islam', 'Slawi', 'MP15'),
(4, '7235024', 'Wahidin S.Kom', 'tegal', '2018-01-03', 'Laki-laki', 'Islam', 'Slawi', 'MP17'),
(5, '974863', 'Ila Rahmawati S.Pd', 'tegal', '2018-01-26', 'Perempuan', 'Islam', 'Slawi', 'MP10'),
(6, '0839247', 'Drs. Sugeng.S', 'tegal', '2018-01-26', 'Laki-laki', 'Islam', 'Slawi', 'MP09'),
(7, '65214', 'Sri Daryanti S.Pd', 'tegal', '2018-01-26', 'Perempuan', 'Islam', 'Slawi', 'MP03'),
(8, '4623452', 'Novi Hidayati S.Kom', 'tegal', '2018-01-26', 'Perempuan', 'Islam', 'Slawi', 'MP16'),
(9, '6735672', 'Suci Erningsih S.Pd', 'Tegal', '2018-01-26', 'Perempuan', 'Islam', 'Slawi', 'MP06'),
(10, '8757856', 'Tri Rindarmani S.Pd', 'tegal', '2018-01-26', 'Perempuan', 'Islam', 'Slawi', 'MP08'),
(11, '658235678', 'M. Biqih Arzaq S.Kom', 'tegal', '2018-01-26', 'Laki-laki', 'Islam', 'Slawi', 'MP14'),
(12, '887482356', 'Dra. Noor Hayati ', 'tegal', '2018-01-26', 'Perempuan', 'Islam', 'Slawi', 'MP02'),
(13, '673572921', 'Kaniah S.Ag', 'Tegal', '2018-01-26', 'Perempuan', 'Islam', 'Slawi', 'MP01'),
(14, '3423562', 'Rizki Giska S.Pd', 'tegal', '2018-01-26', 'Perempuan', 'Islam', 'Slawi', 'MP07'),
(15, '456345714', 'Novi Hidayati S.Kom', 'tegal', '2018-01-26', 'Perempuan', 'Islam', 'slawi', 'MP12'),
(16, '572354', 'Hanif Fuadi Nurdin S.Pd', 'tegal', '2018-01-26', 'Laki-laki', 'Islam', 'Slawi', 'MP11'),
(17, '5463527', 'Wahidin S.Kom', 'tegal', '2018-01-26', 'Laki-laki', 'Islam', 'Slawi', 'MP13'),
(18, '46234518', 'Dra. Ningsih', 'tegal', '2018-01-19', 'Perempuan', 'Islam', 'Slawi', 'MP05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketidakhadiran`
--

CREATE TABLE IF NOT EXISTS `ketidakhadiran` (
  `id_hadir` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` varchar(20) NOT NULL,
  `sakit` varchar(3) NOT NULL,
  `izin` varchar(3) NOT NULL,
  `tnp_ket` varchar(3) NOT NULL,
  PRIMARY KEY (`id_hadir`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `ketidakhadiran`
--

INSERT INTO `ketidakhadiran` (`id_hadir`, `id_siswa`, `sakit`, `izin`, `tnp_ket`) VALUES
(1, '1', '4', '1', '0'),
(2, '2', '2', '4', '1'),
(3, '10', '1', '0', '3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE IF NOT EXISTS `mapel` (
  `kd_mapel` varchar(5) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  PRIMARY KEY (`kd_mapel`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`kd_mapel`, `mapel`) VALUES
('MP01', 'Pendidikan Agama dan BP'),
('MP02', 'Bahasa Inggris'),
('MP03', 'Bahasa Indonesia'),
('MP04', 'Matematika'),
('MP05', 'PPKN'),
('MP06', 'Sejarah Indonesia'),
('MP07', 'Seni Budaya'),
('MP08', 'Prakarya dan KWU'),
('MP09', 'Penjas dan Orkes'),
('MP10', 'Bahasa Jawa'),
('MP11', 'Pemrograman Berorientasi Objek'),
('MP12', 'Basis Data'),
('MP13', 'Pemrograman Web Dinamis'),
('MP14', 'Pemrograman Grafik'),
('MP15', 'Pemrograman Perangkat Bergerak'),
('MP16', 'Administrasi Basis Data'),
('MP17', 'Kerja Proyek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL AUTO_INCREMENT,
  `id_siswa` varchar(20) NOT NULL,
  `kd_mapel` varchar(20) NOT NULL,
  `id_guru` varchar(20) NOT NULL,
  `semester` varchar(2) NOT NULL,
  `kb` varchar(2) NOT NULL,
  `nh` varchar(4) NOT NULL,
  `nh2` varchar(4) NOT NULL,
  `nh3` varchar(4) NOT NULL,
  `nh4` varchar(4) NOT NULL,
  `uts` varchar(4) NOT NULL,
  `uas` varchar(4) NOT NULL,
  `n_peng` varchar(4) NOT NULL,
  `predikat` varchar(2) NOT NULL,
  `deskrip` text NOT NULL,
  `np` varchar(3) NOT NULL,
  `np2` varchar(3) NOT NULL,
  `np3` varchar(3) NOT NULL,
  `np4` varchar(3) NOT NULL,
  `nketram` varchar(3) NOT NULL,
  `pred` varchar(2) NOT NULL,
  `deskripsi` text NOT NULL,
  `n_raport` varchar(3) NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data untuk tabel `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `id_siswa`, `kd_mapel`, `id_guru`, `semester`, `kb`, `nh`, `nh2`, `nh3`, `nh4`, `uts`, `uas`, `n_peng`, `predikat`, `deskrip`, `np`, `np2`, `np3`, `np4`, `nketram`, `pred`, `deskripsi`, `n_raport`) VALUES
(1, '1', 'Matematika', 'Haryati ,S.Si', '1', '60', '90', '90', '90', '90', '90', '90', '90', 'A', 'Sangat Baik', '80', '80', '80', '80', '80', 'A-', 'baik', '85'),
(2, '1', 'Bahasa Inggris', 'Dra.Noor hayati', '1', '60', '80', '80', '80', '80', '80', '80', '80', 'A-', 'baik', '90', '90', '90', '90', '90', 'A', 'sangat baik', '85'),
(3, '2', 'Bahasa Inggris', 'Dra.Noor hayati', '1', '60', '90', '90', '90', '90', '90', '90', '90', 'A', 'baik', '80', '80', '80', '80', '80', 'A-', 'sangat baik', '85'),
(4, '2', 'Matematika', 'Haryati ,S.Si', '1', '60', '90', '90', '90', '90', '90', '90', '90', 'A', 'baik', '80', '80', '80', '80', '80', 'A-', 'baik', '85'),
(5, '3', 'Matematika', 'Haryati ,S.Si', '1', '60', '89', '80', '90', '87', '90', '90', '88.6', 'A', 'baik', '97', '95', '92', '90', '93.', 'A', 'baik', '90.'),
(6, '10', 'Bahasa Inggris', 'Dra.Noor hayati', '1', '60', '40', '30', '30', '30', '30', '20', '28', 'E', 'belajar lagi', '20', '20', '20', '20', '20', 'E', 'KURANG BAIK', '24'),
(7, '10', 'Matematika', 'Haryati ,S.Si', '1', '60', '40', '30', '20', '30', '40', '90', '51', 'C-', 'kurang baik', '40', '30', '20', '30', '30', 'E', 'tingkatkan lagi', '40.');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `id_siswa` int(11) NOT NULL AUTO_INCREMENT,
  `nis` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `tempat_lhr` varchar(30) NOT NULL,
  `tanggal_lhr` date NOT NULL,
  `jk` varchar(15) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`id_siswa`, `nis`, `nama`, `kelas`, `tempat_lhr`, `tanggal_lhr`, `jk`, `agama`, `alamat`) VALUES
(1, '11955', 'Afihfa tunnisa', 'XII RPL 2', 'Tegal', '2018-02-08', 'Perempuan', 'Islam', 'Kedungbanteng'),
(2, '11956', 'Ali Akbar Alfani', 'XII RPL 2', 'Tegal', '2018-01-03', 'Laki-laki', 'Islam', 'Kambangan'),
(3, '11957', 'Aprilia Ayu Puspita Sari', 'XII RPL 2', 'tegal', '0000-00-00', 'Perempuan', 'Islam', 'penusupan'),
(4, '11958', 'Aulia Rahma Annisa', 'XII RPL 2', 'Tegal', '2018-01-03', 'Perempuan', 'Islam', 'Pangkah'),
(5, '11959', 'Ayu Safitri', 'XII RPL 2', 'Tegal', '2018-01-02', 'Perempuan', 'Islam', 'Talang'),
(6, '11960', 'Desi Hakimatul Fahmi', 'XII RPL 2', 'tegal', '2018-01-10', 'Perempuan', 'Islam', 'Pegirikan'),
(7, '11961', 'Fany Khusnun ni mah', 'XII RPL 2', 'tegal', '2018-01-03', 'Perempuan', 'Islam', 'Kedungbanteng'),
(8, '11962', 'Farahdinda Salsabila L', 'XII RPL 2', 'Palembang', '2018-01-02', 'Perempuan', 'Islam', 'Tembok Luwung'),
(9, '11963', 'Fika Nurfadilah', 'XII RPL 2', 'Jakarta', '2018-01-09', 'Perempuan', 'Islam', 'Margasari'),
(10, '11964', 'Hari Wicahya', 'XII RPL 2', 'tegal', '2018-01-08', 'Laki-laki', 'Islam', 'Margasari'),
(11, '11965', 'Indi Nur Hidayah', 'XII RPL 2', 'Tegal', '2000-04-15', 'Perempuan', 'Islam', 'Slawi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `hak_akses` varchar(20) NOT NULL,
  `kd_mapel` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `id_guru`, `nama_lengkap`, `username`, `password`, `hak_akses`, `kd_mapel`) VALUES
(3, '1', 'Haryati ,S.Si', 'walas', 'walas', 'walikelas', 'MP04'),
(4, '2', 'Dra.Noor hayati', 'hayat', '123', 'guru', 'MP02'),
(5, '1', 'Haryati ,S.Si', 'admin', 'admin', 'admin', 'MP04'),
(6, '1', 'Haryati ,S.Si', 'har', '123', 'guru', 'MP04');

-- --------------------------------------------------------

--
-- Struktur dari tabel `walas`
--

CREATE TABLE IF NOT EXISTS `walas` (
  `id_walas` int(11) NOT NULL AUTO_INCREMENT,
  `id_guru` varchar(20) NOT NULL,
  `kd_mapel` varchar(30) NOT NULL,
  `walas` varchar(20) NOT NULL,
  PRIMARY KEY (`id_walas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `walas`
--

INSERT INTO `walas` (`id_walas`, `id_guru`, `kd_mapel`, `walas`) VALUES
(1, '1', 'MP04', 'XII RPL 2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
