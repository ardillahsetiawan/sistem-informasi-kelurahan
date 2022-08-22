-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 05:42 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farid`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `id_admin` varchar(20) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `pass` varchar(11) DEFAULT NULL,
  `nama_admin` varchar(50) DEFAULT NULL,
  `nip` varchar(20) DEFAULT NULL,
  `jabatan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`id_admin`, `username`, `pass`, `nama_admin`, `nip`, `jabatan`) VALUES
('', 'lurah', 'lurah', 'Pimpinan', '1234', 'Lurah'),
('1', 'farid', '123', 'Miftah', '123', 'Petugas');

-- --------------------------------------------------------

--
-- Table structure for table `bm`
--

CREATE TABLE `bm` (
  `id_bm` int(11) NOT NULL,
  `id_pelayanan` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `keperluan_surat_bm` varchar(255) DEFAULT NULL,
  `pengantar_rt_rw` varchar(255) DEFAULT NULL,
  `tanggal_bm` date DEFAULT NULL,
  `ktp_saksi_1` varchar(255) DEFAULT NULL,
  `ktp_saksi_2` varchar(255) DEFAULT NULL,
  `surat_pernyataan_rt_rw` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(100) DEFAULT NULL,
  `kewarganegaraan` varchar(100) DEFAULT NULL,
  `status_bm` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bm`
--

INSERT INTO `bm` (`id_bm`, `id_pelayanan`, `id_user`, `keperluan_surat_bm`, `pengantar_rt_rw`, `tanggal_bm`, `ktp_saksi_1`, `ktp_saksi_2`, `surat_pernyataan_rt_rw`, `pekerjaan`, `kewarganegaraan`, `status_bm`) VALUES
(7, 'bm-fQzqY', '6203012303000007', 'MENDAFTAR CPNS', 'suratpengantar RT,RW.webp', '2022-07-04', 'ktp-.jpg', 'ktpindex.jpg', 'surat pernyataan materai 6000.jpg', 'PELAJAR/MAHASISWA', 'INDONESIA', 'Verifikasi'),
(8, 'bm-FYccM', '1801070310930005', 'MENDAFTAR CPNS', 'suratpengantar RT,RW.webp', '2022-07-05', 'ktp-.jpg', 'ktpindex.jpg', 'surat pernyataan materai 6000.jpg', 'BELUM BEKERJA', 'INDONESIA', 'Verifikasi'),
(9, 'bm-5lWey', '3525036108010001', 'MENDAFTAR CPNS', 'suratpengantar RT,RW.webp', '2022-07-06', 'ktp-.jpg', 'ktpindex.jpg', 'surat pernyataan materai 6000.jpg', 'BELUM BEKERJA', 'INDONESIA', 'Verifikasi'),
(10, 'bm-87ED2', '3471144307880001', 'MENDAFTAR CPNS', 'suratpengantar RT,RW.webp', '2022-07-01', 'KTPno2.webp', 'ktpno3.webp', 'surat pernyataan materai 6000.jpg', 'PELAJAR/MAHASISWA', 'INDONESIA', 'Verifikasi'),
(11, 'bm-Jrbxb', '6106161808950001', 'MENDAFTAR CPNS', NULL, '2022-07-18', NULL, NULL, NULL, 'BELUM BEKERJA', 'INDONESIA', 'Berkas Tidak Lengkap'),
(12, 'bm-ysO24', '371085802780015', 'MENIKAH', NULL, '2022-07-25', NULL, NULL, NULL, 'BELUM BEKERJA', 'INDONESIA', 'Berkas Tidak Lengkap'),
(13, 'bm-UE7Zs', '1205160402900001', 'MENDAFTAR PEKERJAAN', NULL, '2022-06-06', NULL, NULL, NULL, 'PELAJAR/MAHASISWA', 'INDONESIA', NULL),
(14, 'bm-5AkWd', '1771016011990003', 'MENDAFTAR CPNS', NULL, '2022-07-27', NULL, NULL, NULL, 'PELAJAR/MAHASISWA', 'INDONESIA', 'Berkas Tidak Lengkap'),
(15, 'bm-JB62W', '3512084102000002', 'MENDAFTAR CPNS', NULL, '2022-06-23', NULL, NULL, NULL, 'PELAJAR/MAHASISWA', 'INDONESIA', NULL),
(16, 'bm-Jjcdb', '3173011707830027', 'KETERANGAN BELUM MENIKAH', NULL, '2022-07-28', NULL, NULL, NULL, 'WIRASWASTA', 'INDONESIA', 'Berkas Tidak Lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `bmr`
--

CREATE TABLE `bmr` (
  `id_bmr` int(11) NOT NULL,
  `id_pelayanan` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `keperluan_surat_bmr` varchar(100) DEFAULT NULL,
  `pengantar_rt_rw` varchar(100) DEFAULT NULL,
  `tanggal_bmr` date DEFAULT NULL,
  `surat_pernyataan_bmr` varchar(100) DEFAULT NULL,
  `ktp` varchar(100) DEFAULT NULL,
  `kk` varchar(100) DEFAULT NULL,
  `status_bmr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bmr`
--

INSERT INTO `bmr` (`id_bmr`, `id_pelayanan`, `id_user`, `keperluan_surat_bmr`, `pengantar_rt_rw`, `tanggal_bmr`, `surat_pernyataan_bmr`, `ktp`, `kk`, `status_bmr`) VALUES
(101, 'skbmr-rXJ6Q', '6203012303000007', 'MENGAMBIL KPR', 'suratpengantar RT,RW materi 6000.webp', '2022-07-04', 'Surat Pernyataan Belum Memiliki Rumah.pdf', 'KTP_.jpg', 'KK.jpg', 'Verifikasi'),
(102, 'skbmr-UxCMa', '1801070310930005', 'MENGAMBIL KPR', 'suratpengantar RT,RW.webp', '2022-07-05', 'Surat Pernyataan Belum Memiliki Rumah.pdf', 'KTPno2.webp', 'KK.jpg', 'Verifikasi'),
(103, 'skbmr-mYId1', '3525036108010001', 'MENGAMBIL KPR', 'suratpengantar RT,RW.webp', '2022-07-06', 'Surat Pernyataan Belum Memiliki Rumah.pdf', 'ktpno3.webp', 'KK.jpg', 'Verifikasi'),
(104, 'skbmr-ujzW4', '3471144307880001', 'MENGAMBIL KPR', 'suratpengantar RT,RW.webp', '2022-07-01', 'Surat Pernyataan Belum Memiliki Rumah.pdf', '-KTP4.jpg', 'KK.jpg', 'Verifikasi'),
(105, 'skbmr-rjxda', '6106161808950001', 'MENGAMBIL KPR', NULL, '2022-07-18', NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(106, 'skbmr-86u69', '371085802780015', 'MENGAMBIL KPR', NULL, '2022-07-26', NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(107, 'skbmr-TzK5F', '1205160402900001', 'MENGAMBIL KPR', NULL, '2022-06-06', NULL, NULL, NULL, ''),
(108, 'skbmr-r3b7i', '1771016011990003', 'MENGAMBIL KPR', NULL, '2022-07-27', NULL, NULL, NULL, 'Belum Terverifikasi'),
(109, 'skbmr-4JDR9', '3512084102000002', 'MENGAMBIL KPR', NULL, '2022-07-28', NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(110, 'skbmr-BHfJo', '3173011707830027', 'MENGAMBIL KPR', NULL, '2022-07-29', NULL, NULL, NULL, 'Berkas Tidak Lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `imb`
--

CREATE TABLE `imb` (
  `id_imb` int(11) NOT NULL,
  `id_pelayanan` varchar(100) NOT NULL,
  `id_user` varchar(100) NOT NULL,
  `checklis_imb` varchar(255) DEFAULT NULL,
  `tanggal_imb` date DEFAULT NULL,
  `jenis_bangunan` varchar(255) DEFAULT NULL,
  `nama_usaha` varchar(255) DEFAULT NULL,
  `ukuran` varchar(255) DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL,
  `bangunan_untuk` varchar(255) DEFAULT NULL,
  `blanko_imb` varchar(255) DEFAULT NULL,
  `sp_pemilik` varchar(255) DEFAULT NULL,
  `sp_garis` varchar(255) DEFAULT NULL,
  `sp_tidaksengketa` varchar(255) DEFAULT NULL,
  `ba_pengecekan` varchar(255) DEFAULT NULL,
  `surat_kuasa` varchar(255) DEFAULT NULL,
  `pengantar_rt` varchar(255) DEFAULT NULL,
  `sertifikat` varchar(255) DEFAULT NULL,
  `lunas_pbb` varchar(255) DEFAULT NULL,
  `status_imb` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imb`
--

INSERT INTO `imb` (`id_imb`, `id_pelayanan`, `id_user`, `checklis_imb`, `tanggal_imb`, `jenis_bangunan`, `nama_usaha`, `ukuran`, `lokasi`, `bangunan_untuk`, `blanko_imb`, `sp_pemilik`, `sp_garis`, `sp_tidaksengketa`, `ba_pengecekan`, `surat_kuasa`, `pengantar_rt`, `sertifikat`, `lunas_pbb`, `status_imb`) VALUES
(8, 'imb-abP4J', '6203012303000007', 'check list kelengkapan persyaratan.jpg', '2022-07-04', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.24', NULL, 'BLANGKO IMB.webp', '', 'SURAT PERNYATAAN GARIS SEMPADAN.webp', 'surat pernyataan tanah tidak dalam sengketa dan seperbatasan.webp', 'Berita acara pengecekan lapangan.webp', '', 'suratpengantar RT,RW.webp', 'sertifikat tanah.webp', 'TANDALUNAS.jpg', 'Verifikasi'),
(9, 'imb-OokYt', '1801070310930005', 'check list kelengkapan persyaratan.jpg', '2022-07-05', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.32', NULL, 'BLANGKO IMB.webp', '', 'SURAT PERNYATAAN GARIS SEMPADAN.webp', 'surat pernyataan tanah tidak dalam sengketa dan seperbatasan.webp', 'Berita acara pengecekan lapangan.webp', '', 'suratpengantar RT,RW.webp', 'sertifikat tanah.webp', 'TANDALUNAS.jpg', 'Verifikasi'),
(10, 'imb-IKCgE', '3525036108010001', 'check list kelengkapan persyaratan.jpg', '2022-07-06', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.33', NULL, 'BLANGKO IMB.webp', '', 'SURAT PERNYATAAN GARIS SEMPADAN.webp', 'surat pernyataan tanah tidak dalam sengketa dan seperbatasan.webp', 'Berita acara pengecekan lapangan.webp', '', 'suratpengantar RT,RW.webp', 'sertifikat tanah.webp', 'TANDALUNAS.jpg', 'Verifikasi'),
(11, 'imb-1NzA8', '3471144307880001', 'check list kelengkapan persyaratan.jpg', '2022-07-01', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.34', NULL, 'BLANGKO IMB.webp', '', 'SURAT PERNYATAAN GARIS SEMPADAN.webp', 'surat pernyataan tanah tidak dalam sengketa dan seperbatasan.webp', 'Berita acara pengecekan lapangan.webp', '', 'suratpengantar RT,RW.webp', 'sertifikat tanah.webp', 'TANDALUNAS.jpg', 'Verifikasi'),
(12, 'imb-d2pMt', '6106161808950001', NULL, '2022-07-18', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.35', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'imb-yhnFh', '371085802780015', NULL, '2022-07-25', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.36', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(14, 'imb-RoaTu', '1205160402900001', NULL, '2022-06-06', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.37', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'imb-5NNaM', '1771016011990003', NULL, '2022-07-27', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.38', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(16, 'imb-yG83Z', '3512084102000002', NULL, '2022-07-28', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.39', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(17, 'imb-vYwz8', '3173011707830027', NULL, '2022-07-29', 'BANGUNAN USAHA', NULL, '20', 'JL.MELATI NO.10', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `kaw`
--

CREATE TABLE `kaw` (
  `id_kaw` int(11) NOT NULL,
  `id_pelayanan` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `yg_meninggal` varchar(255) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `umur` int(11) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `keperluan_surat_kaw` varchar(255) DEFAULT NULL,
  `pengantar_rt_rw` varchar(255) DEFAULT NULL,
  `tanggal_kaw` date DEFAULT NULL,
  `akta_kematian` varchar(255) DEFAULT NULL,
  `fc_akta_nikah` varchar(255) DEFAULT NULL,
  `fc_akta_cerai` varchar(255) DEFAULT NULL,
  `fc_akta_kelahiran_ahli_waris` varchar(255) NOT NULL,
  `ktp_ahli_waris` varchar(255) DEFAULT NULL,
  `surat_pernyataan_6000` varchar(255) DEFAULT NULL,
  `status_kaw` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kaw`
--

INSERT INTO `kaw` (`id_kaw`, `id_pelayanan`, `id_user`, `yg_meninggal`, `jk`, `umur`, `tanggal_meninggal`, `keperluan_surat_kaw`, `pengantar_rt_rw`, `tanggal_kaw`, `akta_kematian`, `fc_akta_nikah`, `fc_akta_cerai`, `fc_akta_kelahiran_ahli_waris`, `ktp_ahli_waris`, `surat_pernyataan_6000`, `status_kaw`) VALUES
(4, 'kaw-9mbJW', '6203012303000007', 'ABDUL', 'Laki-Laki', 70, '2022-07-06', 'KETERANGAN AHLI WARIS', 'suratpengantar RT,RW.webp', '2022-07-07', 'surat kematian.jpg', 'AKTA NIKAH LEGALISIR.jpg', '', 'aktalahirbaru.jpg', 'KTP_.jpg', 'surat pernyataan materai 6000.jpg', 'Verifikasi'),
(5, 'kaw-HARjN', '1801070310930005', 'ABDUL', 'Laki-Laki', 68, '2022-07-11', 'AHLI WARIS', 'suratpengantar RT,RW.webp', '2022-07-13', 'surat kematian.jpg', 'AKTA NIKAH LEGALISIR.jpg', '', 'aktalahirbaru.jpg', 'KTPno2.webp', 'surat pernyataan materai 6000.jpg', 'Verifikasi'),
(6, 'kaw-5JMna', '3525036108010001', 'RISA', 'Perempuan', 68, '2022-07-19', 'SURAT KETERANGAN AHLI WARIS', 'suratpengantar RT,RW.webp', '2022-07-21', 'surat kematian.jpg', 'AKTA NIKAH LEGALISIR.jpg', '', 'aktalahirbaru.jpg', 'ktpno3.webp', 'surat pernyataan materai 6000.jpg', 'Verifikasi'),
(7, 'kaw-z94wi', '3471144307880001', 'RISA', 'Perempuan', 55, '2022-07-20', 'SURAT KETERANGAN AHLI WARIS', 'suratpengantar RT,RW.webp', '2022-07-22', 'surat kematian.jpg', 'AKTA NIKAH LEGALISIR.jpg', '', 'aktalahirbaru.jpg', '-KTP4.jpg', 'surat pernyataan materai 6000.jpg', 'Verifikasi'),
(8, 'kaw-iPQid', '6106161808950001', 'HANES', 'Laki-Laki', 71, '2022-07-19', 'SURAT KETERANGAN AHLI WARIS', NULL, '2022-07-21', NULL, NULL, NULL, '', NULL, NULL, 'Berkas Tidak Lengkap'),
(9, 'kaw-5pUWJ', '371085802780015', 'HANES', 'Laki-Laki', 55, '2022-06-01', 'KETERANGAN AHLI WARIS', NULL, '2022-06-02', NULL, NULL, NULL, '', NULL, NULL, NULL),
(10, 'kaw-rmzR7', '1205160402900001', 'ATA', 'Laki-Laki', 46, '2022-07-11', 'SURAT KETERANGAN AHLI WARIS', NULL, '2022-07-13', NULL, NULL, NULL, '', NULL, NULL, 'Berkas Tidak Lengkap'),
(11, 'kaw-oX6No', '1771016011990003', 'AYA', 'Perempuan', 66, '2022-07-16', 'SURAT KETERANGAN AHLI WARIS', NULL, '2022-07-19', NULL, NULL, NULL, '', NULL, NULL, 'Berkas Tidak Lengkap'),
(12, 'kaw-ZA8An', '3512084102000002', 'ZARA', 'Laki-Laki', 70, '2022-07-11', 'KETERANGAN AHLI WARIS', NULL, '2022-07-14', NULL, NULL, NULL, '', NULL, NULL, 'Berkas Tidak Lengkap'),
(13, 'kaw-WLsMS', '3171234567890123', 'WATI', 'Perempuan', 67, '2022-07-30', 'SURAT KETERANGAN AHLI WARIS', 'suratpengantar RT,RW.webp', '2022-08-01', 'surat kematian.jpg', 'AKTA NIKAH LEGALISIR.jpg', '', 'aktalahirbaru.jpg', 'ktp11M.jpg', 'surat pernyataan materai 6000.jpg', 'Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `kd`
--

CREATE TABLE `kd` (
  `id_kd` int(11) NOT NULL,
  `id_pelayanan` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `keperluan_surat_kd` varchar(255) DEFAULT NULL,
  `pengantar_rt_rw` varchar(255) DEFAULT NULL,
  `tanggal_kd` date DEFAULT NULL,
  `status_kd` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kd`
--

INSERT INTO `kd` (`id_kd`, `id_pelayanan`, `id_user`, `keperluan_surat_kd`, `pengantar_rt_rw`, `tanggal_kd`, `status_kd`) VALUES
(5, 'kd-Y6SkT', '6203012303000007', 'MENDAFTAR CPNS', 'suratpengantar RT,RW.webp', '2022-07-04', 'Verifikasi'),
(6, 'kd-AfBy6', '1801070310930005', 'DAFTAR CPNS', 'suratpengantar RT,RW.webp', '2022-07-05', 'Verifikasi'),
(7, 'kd-dPgoK', '3525036108010001', 'MENDAFTAR CPNS', 'suratpengantar RT,RW.webp', '2022-07-06', 'Verifikasi'),
(8, 'kd-nk5Lv', '3471144307880001', 'MENDAFTAR CPNS', 'suratpengantar RT,RW.webp', '2022-07-01', 'Verifikasi'),
(9, 'kd-ZgejB', '6106161808950001', 'MENDAFTAR CPNS', NULL, '2022-07-18', 'Berkas Tidak Lengkap'),
(10, 'kd-lEMzf', '371085802780015', 'MENGURUS PERBANKAN', NULL, '2022-07-25', 'Berkas Tidak Lengkap'),
(11, 'kd-2LKyB', '1205160402900001', 'MENDAFTAR PEKERJAAN', NULL, '2022-06-06', NULL),
(12, 'kd-gyHcn', '1771016011990003', 'MENDAFTAR CPNS\r\n', NULL, '2022-07-27', 'Berkas Tidak Lengkap'),
(13, 'kd-rBUPL', '3512084102000002', 'MENDAFTAR CPNS', NULL, '2022-07-28', 'Berkas Tidak Lengkap'),
(14, 'kd-SOluz', '3171234567890123', 'PEKERJAAN', 'suratpengantar RT,RW.webp', '2022-08-01', 'Verifikasi'),
(16, 'kd-8uLbX', '6203012303000007', 'Mendaftar Pekerjaan', 'suratpengantar RT,RW.webp', '2022-08-09', 'Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `kk`
--

CREATE TABLE `kk` (
  `id_kk` int(11) NOT NULL,
  `id_pelayanan` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `yg_meninggal` varchar(255) NOT NULL,
  `jk` enum('Laki-Laki','Perempuan') NOT NULL,
  `umur` int(11) NOT NULL,
  `tanggal_meninggal` date NOT NULL,
  `keperluan_surat_kk` varchar(255) DEFAULT NULL,
  `pengantar_rt_rw` varchar(255) DEFAULT NULL,
  `tanggal_kk` date DEFAULT NULL,
  `ktp_saksi_1` varchar(255) DEFAULT NULL,
  `ktp_saksi_2` varchar(255) DEFAULT NULL,
  `surat_kematian_rs` varchar(255) DEFAULT NULL,
  `status_kk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kk`
--

INSERT INTO `kk` (`id_kk`, `id_pelayanan`, `id_user`, `yg_meninggal`, `jk`, `umur`, `tanggal_meninggal`, `keperluan_surat_kk`, `pengantar_rt_rw`, `tanggal_kk`, `ktp_saksi_1`, `ktp_saksi_2`, `surat_kematian_rs`, `status_kk`) VALUES
(4, 'kk-WVzGO', '6203012303000007', 'ABDUL', 'Laki-Laki', 70, '2022-07-06', 'KETERANGAN KEMATIAN', 'suratpengantar RT,RW.webp', '2022-07-12', 'ktp-.jpg', 'ktpindex.jpg', 'meninggal dirumah sakit.webp', 'Verifikasi'),
(5, 'kk-Av4kX', '1801070310930005', 'ABDUL', 'Laki-Laki', 68, '2022-07-11', 'KETERANGAN KEMATIAN', 'suratpengantar RT,RW.webp', '2022-07-12', 'ktp-.jpg', 'ktpindex.jpg', 'meninggal dirumah sakit.webp', 'Verifikasi'),
(6, 'kk-iMc6y', '3525036108010001', 'RISA', 'Perempuan', 68, '2022-07-19', 'SURAT KEMATIAN', 'suratpengantar RT,RW.webp', '2022-07-21', 'KTP_.jpg', 'KTPno2.webp', 'meninggal dirumah sakit.webp', 'Verifikasi'),
(7, 'kk-vBSPw', '3471144307880001', 'RISA', 'Perempuan', 55, '2022-07-20', 'KETERANGAN KEMATIAN', 'suratpengantar RT,RW.webp', '2022-07-22', 'KTPno2.webp', 'ktpno3.webp', 'meninggal dirumah sakit.webp', 'Verifikasi'),
(8, 'kk-IqBu7', '6106161808950001', 'HANES', 'Laki-Laki', 71, '2022-07-19', 'SURAT KETERANGAN KEMATIAN', NULL, '2022-07-21', NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(9, 'kk-cDzuL', '371085802780015', 'HANES', 'Laki-Laki', 55, '2022-06-01', 'SURAT KETERANGAN KEMATIAN', NULL, '2022-06-02', NULL, NULL, NULL, NULL),
(10, 'kk-PRHpg', '1205160402900001', 'ATA', 'Laki-Laki', 46, '2022-07-11', 'SURAT KETERANGAN KEMATIAN', NULL, '2022-07-13', NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(11, 'kk-wZXp2', '1771016011990003', 'AYA', 'Perempuan', 66, '2022-07-16', 'SURAT KETERANGAN KEMATIAN', NULL, '2022-07-19', NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(12, 'kk-XtGSi', '3512084102000002', 'ZARA', 'Laki-Laki', 70, '2022-07-11', 'SURAT KETERANGAN KEMATIAN', NULL, '2022-07-14', NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(13, 'kk-sKvXl', '3171234567890123', 'WATI', 'Perempuan', 67, '2022-07-30', 'KETERANGAN KEMATIAN', 'suratpengantar RT,RW.webp', '2022-08-01', 'KTPno2.webp', 'ktp7.webp', 'meninggal dirumah sakit.webp', 'Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `km`
--

CREATE TABLE `km` (
  `id_km` int(11) NOT NULL,
  `id_pelayanan` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `keperluan_surat_km` varchar(255) DEFAULT NULL,
  `ktp_pemohon_1` varchar(255) DEFAULT NULL,
  `ktp_pemohon_2` varchar(255) DEFAULT NULL,
  `ktp_ortu` varchar(255) DEFAULT NULL,
  `ktp_saksi_1` varchar(255) DEFAULT NULL,
  `ktp_saksi_2` varchar(255) DEFAULT NULL,
  `surat_pernyataan_6000` varchar(255) DEFAULT NULL,
  `akta_cerai` varchar(255) DEFAULT NULL,
  `surat_jaminan_nikah` varchar(255) DEFAULT NULL,
  `surat_izin_ortu` varchar(255) DEFAULT NULL,
  `pas_foto_1` varchar(255) DEFAULT NULL,
  `pas_foto_2` varchar(255) DEFAULT NULL,
  `status_km` varchar(20) DEFAULT NULL,
  `tanggal_km` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `km`
--

INSERT INTO `km` (`id_km`, `id_pelayanan`, `id_user`, `keperluan_surat_km`, `ktp_pemohon_1`, `ktp_pemohon_2`, `ktp_ortu`, `ktp_saksi_1`, `ktp_saksi_2`, `surat_pernyataan_6000`, `akta_cerai`, `surat_jaminan_nikah`, `surat_izin_ortu`, `pas_foto_1`, `pas_foto_2`, `status_km`, `tanggal_km`) VALUES
(3, 'km-pz3Q7', '6203012303000007', 'KETERANGAN MENIKAH', 'ktp1.jpg', '-KTP-2.jpg', 'ktp orang tua.jpg', 'SAKSI 1.jpg', 'SAKSI 2.jpg', 'suratpernyataanbelummenikah.webp', '', 'surat izin,jaminan.webp', 'surat izin,jaminan.webp', 'FotoUniska_.jpg', '05_PHOTO_Depi_1311.jpg', 'Verifikasi', '2022-07-11'),
(4, 'km-bwxa6', '3471144307880001', 'KETERANGAN MENIKAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-07-01'),
(5, 'km-s4p5r', '1801070310930005', 'KETERANGAN MENIKAH', 'ktp1.jpg', '-KTP-2.jpg', 'ktp orang tua.jpg', 'SAKSI 1.jpg', 'SAKSI 2.jpg', 'suratpernyataanbelummenikah.webp', '', 'surat izin,jaminan.webp', 'surat izin,jaminan.webp', 'FotoUniska_.jpg', '05_PHOTO_Depi_1311.jpg', 'Verifikasi', '2022-07-05'),
(6, 'km-mcsdY', '6106161808950001', 'SURAT KETERANGAN MENIKAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap', '2022-07-18'),
(7, 'km-6siaS', '371085802780015', 'MENIKAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap', '2022-07-25'),
(8, 'km-ormQv', '1205160402900001', 'KETERANGAN MENIKAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-06-23'),
(9, 'km-RGxr8', '1771016011990003', 'KETERANGAN MENIKAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap', '2022-07-27'),
(10, 'km-IS7VW', '3512084102000002', 'MENIKAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap', '2022-07-28'),
(11, 'km-yCEYb', '3173011707830027', 'MENIKAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap', '2022-07-29'),
(12, 'km-sIzW7', '3525036108010001', 'KETERANGAN MENIKAH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap', '2022-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `kp`
--

CREATE TABLE `kp` (
  `id_kp` int(11) NOT NULL,
  `id_pelayanan` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `keperluan_surat_kp` varchar(255) DEFAULT NULL,
  `pengantar_rt_rw` varchar(255) DEFAULT NULL,
  `tanggal_kp` date DEFAULT NULL,
  `pas_foto_1` varchar(255) DEFAULT NULL,
  `pas_foto_2` varchar(255) DEFAULT NULL,
  `status_kp` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kp`
--

INSERT INTO `kp` (`id_kp`, `id_pelayanan`, `id_user`, `keperluan_surat_kp`, `pengantar_rt_rw`, `tanggal_kp`, `pas_foto_1`, `pas_foto_2`, `status_kp`) VALUES
(4, 'kp-vtTAZ', '6203012303000007', 'PINDAH RUMAH', 'suratpengantar RT,RW.webp', '2022-07-04', 'FotoUniska_.jpg', 'FotoUniska_.jpg', 'Verifikasi'),
(5, 'kp-u5NVU', '1801070310930005', 'PINDAH TEMPAT', 'suratpengantar RT,RW.webp', '2022-07-05', 'FotoUniska_.jpg', 'FotoUniska_.jpg', 'Verifikasi'),
(6, 'kp-xdOQw', '3525036108010001', 'PINDAH TEMPAT', 'suratpengantar RT,RW.webp', '2022-07-06', 'FotoUniska_.jpg', 'FotoUniska_.jpg', 'Verifikasi'),
(7, 'kp-T8Sl4', '3471144307880001', 'DAFTAR CPNS', 'suratpengantar RT,RW.webp', '2022-07-01', 'FotoUniska_.jpg', 'FotoUniska_.jpg', 'Verifikasi'),
(8, 'kp-RDlfA', '6106161808950001', 'PINDAH RUMAH', NULL, '2022-07-18', NULL, NULL, 'Berkas Tidak Lengkap'),
(9, 'kp-AO7de', '371085802780015', 'PINDAH RUMAH', NULL, '2022-07-25', NULL, NULL, 'Berkas Tidak Lengkap'),
(10, 'kp-zS5cU', '1205160402900001', 'PINDAH RUMAH', NULL, '2022-06-06', NULL, NULL, NULL),
(11, 'kp-HnFOp', '1771016011990003', 'PINDAH RUMAH', NULL, '2022-07-27', NULL, NULL, 'Berkas Tidak Lengkap'),
(12, 'kp-l394L', '3512084102000002', 'PINDAH RUMAH', NULL, '2022-07-28', NULL, NULL, 'Berkas Tidak Lengkap'),
(13, 'kp-1gsUG', '3171234567890123', 'PINDAH RUMAH', 'suratpengantar RT,RW.webp', '2022-08-01', 'FotoUniska_.jpg', 'FotoUniska_.jpg', 'Verifikasi'),
(15, 'kp-EGbco', '6203012303000005', 'PINDAH RUMAH ', 'suratpengantar RT,RW.webp', '2022-08-09', 'FotoUniska_.jpg', 'FotoUniska_.jpg', 'Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `nama_pelayanan`
--

CREATE TABLE `nama_pelayanan` (
  `id_nama_pelayanan` int(11) NOT NULL,
  `nama_layanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nama_pelayanan`
--

INSERT INTO `nama_pelayanan` (`id_nama_pelayanan`, `nama_layanan`) VALUES
(1, 'Surat Keterangan Belum Memiliki Rumah'),
(2, 'Surat Keterangan Usaha'),
(3, 'Izin Mendirikan Bangunan'),
(4, 'Surat Keterangan Tidak Mampu'),
(5, 'Surat Keterangan Belum Menikah'),
(6, 'Surat Keterangan Menikah'),
(7, 'Surat Keterangan Domisili'),
(8, 'Surat Keterangan Pindah'),
(9, 'Surat Keterangan Kematian'),
(10, 'Surat Keterangan Ahli Waris');

-- --------------------------------------------------------

--
-- Table structure for table `pelayanan`
--

CREATE TABLE `pelayanan` (
  `id_pelayanan` varchar(25) NOT NULL,
  `id_nama_pelayanan` int(11) NOT NULL,
  `id_user` varchar(20) CHARACTER SET latin1 NOT NULL,
  `tanggal_layanan` date DEFAULT NULL,
  `status_layanan` varchar(20) NOT NULL,
  `id_admin` varchar(20) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelayanan`
--

INSERT INTO `pelayanan` (`id_pelayanan`, `id_nama_pelayanan`, `id_user`, `tanggal_layanan`, `status_layanan`, `id_admin`) VALUES
('bm-5AkWd', 5, '1771016011990003', '2022-07-27', 'Berkas Tidak Lengkap', '1'),
('bm-5lWey', 5, '3525036108010001', '2022-07-06', 'Verifikasi', '1'),
('bm-87ED2', 5, '3471144307880001', '2022-07-01', 'Verifikasi', '1'),
('bm-fQzqY', 5, '6203012303000007', '2022-07-04', 'Verifikasi', '1'),
('bm-FYccM', 5, '1801070310930005', '2022-07-05', 'Verifikasi', '1'),
('bm-JB62W', 5, '3512084102000002', '2022-06-23', '', NULL),
('bm-Jjcdb', 5, '3173011707830027', '2022-07-28', 'Berkas Tidak Lengkap', '1'),
('bm-Jrbxb', 5, '6106161808950001', '2022-07-18', 'Berkas Tidak Lengkap', '1'),
('bm-UE7Zs', 5, '1205160402900001', '2022-06-06', '', NULL),
('bm-ysO24', 5, '371085802780015', '2022-07-25', 'Berkas Tidak Lengkap', '1'),
('imb-1NzA8', 3, '3471144307880001', '2022-07-01', 'Verifikasi', '1'),
('imb-5NNaM', 3, '1771016011990003', '2022-07-27', 'Berkas Tidak Lengkap', '1'),
('imb-abP4J', 3, '6203012303000007', '2022-07-04', 'Verifikasi', '1'),
('imb-d2pMt', 3, '6106161808950001', '2022-07-18', '', NULL),
('imb-IKCgE', 3, '3525036108010001', '2022-07-06', 'Verifikasi', '1'),
('imb-OokYt', 3, '1801070310930005', '2022-07-05', 'Verifikasi', '1'),
('imb-RoaTu', 3, '1205160402900001', '2022-06-06', '', NULL),
('imb-vYwz8', 3, '3173011707830027', '2022-07-29', 'Berkas Tidak Lengkap', '1'),
('imb-yG83Z', 3, '3512084102000002', '2022-07-28', 'Berkas Tidak Lengkap', '1'),
('imb-yhnFh', 3, '371085802780015', '2022-07-25', 'Berkas Tidak Lengkap', '1'),
('kaw-5JMna', 10, '3525036108010001', '2022-07-21', 'Verifikasi', '1'),
('kaw-5pUWJ', 10, '371085802780015', '2022-06-02', '', NULL),
('kaw-9mbJW', 10, '6203012303000007', '2022-07-07', 'Verifikasi', '1'),
('kaw-HARjN', 10, '1801070310930005', '2022-07-13', 'Verifikasi', '1'),
('kaw-iPQid', 10, '6106161808950001', '2022-07-21', 'Berkas Tidak Lengkap', '1'),
('kaw-oX6No', 10, '1771016011990003', '2022-07-19', 'Berkas Tidak Lengkap', '1'),
('kaw-rmzR7', 10, '1205160402900001', '2022-07-13', 'Berkas Tidak Lengkap', '1'),
('kaw-WLsMS', 10, '3171234567890123', '2022-08-01', 'Verifikasi', '1'),
('kaw-z94wi', 10, '3471144307880001', '2022-07-22', 'Verifikasi', '1'),
('kaw-ZA8An', 10, '3512084102000002', '2022-07-14', 'Berkas Tidak Lengkap', '1'),
('kd-2LKyB', 7, '1205160402900001', '2022-06-06', '', NULL),
('kd-8uLbX', 7, '6203012303000007', '2022-08-09', 'Verifikasi', '1'),
('kd-AfBy6', 7, '1801070310930005', '2022-07-05', 'Verifikasi', '1'),
('kd-dPgoK', 7, '3525036108010001', '2022-07-06', 'Verifikasi', '1'),
('kd-gyHcn', 7, '1771016011990003', '2022-07-27', 'Berkas Tidak Lengkap', '1'),
('kd-lEMzf', 7, '371085802780015', '2022-07-25', 'Berkas Tidak Lengkap', '1'),
('kd-nk5Lv', 7, '3471144307880001', '2022-07-01', 'Verifikasi', '1'),
('kd-rBUPL', 7, '3512084102000002', '2022-07-28', 'Berkas Tidak Lengkap', '1'),
('kd-SOluz', 7, '3171234567890123', '2022-08-01', 'Verifikasi', '1'),
('kd-Y6SkT', 7, '6203012303000007', '2022-07-04', 'Verifikasi', '1'),
('kd-ZgejB', 7, '6106161808950001', '2022-07-18', 'Berkas Tidak Lengkap', '1'),
('kk-Av4kX', 9, '1801070310930005', '2022-07-12', 'Verifikasi', '1'),
('kk-cDzuL', 9, '371085802780015', '2022-06-02', '', NULL),
('kk-iMc6y', 9, '3525036108010001', '2022-07-21', 'Verifikasi', '1'),
('kk-IqBu7', 9, '6106161808950001', '2022-07-21', 'Berkas Tidak Lengkap', '1'),
('kk-PRHpg', 9, '1205160402900001', '2022-07-13', 'Berkas Tidak Lengkap', '1'),
('kk-sKvXl', 9, '3171234567890123', '2022-08-01', 'Verifikasi', '1'),
('kk-vBSPw', 9, '3471144307880001', '2022-07-22', 'Verifikasi', '1'),
('kk-WVzGO', 9, '6203012303000007', '2022-07-12', 'Verifikasi', '1'),
('kk-wZXp2', 9, '1771016011990003', '2022-07-19', 'Berkas Tidak Lengkap', '1'),
('kk-XtGSi', 9, '3512084102000002', '2022-07-14', 'Berkas Tidak Lengkap', '1'),
('km-6siaS', 6, '371085802780015', '2022-07-25', 'Berkas Tidak Lengkap', '1'),
('km-bwxa6', 6, '3471144307880001', '2022-07-01', '', NULL),
('km-IS7VW', 6, '3512084102000002', '2022-07-28', 'Berkas Tidak Lengkap', '1'),
('km-mcsdY', 6, '6106161808950001', '2022-07-18', 'Berkas Tidak Lengkap', '1'),
('km-ormQv', 6, '1205160402900001', '2022-06-23', '', NULL),
('km-pz3Q7', 6, '6203012303000007', '2022-07-11', 'Verifikasi', '1'),
('km-RGxr8', 6, '1771016011990003', '2022-07-27', 'Berkas Tidak Lengkap', '1'),
('km-s4p5r', 6, '1801070310930005', '2022-07-05', 'Verifikasi', '1'),
('km-sIzW7', 6, '3525036108010001', '2022-07-13', 'Berkas Tidak Lengkap', '1'),
('km-yCEYb', 6, '3173011707830027', '2022-07-29', 'Berkas Tidak Lengkap', '1'),
('kp-1gsUG', 8, '3171234567890123', '2022-08-01', 'Verifikasi', '1'),
('kp-AO7de', 8, '371085802780015', '2022-07-25', 'Berkas Tidak Lengkap', '1'),
('kp-EGbco', 8, '6203012303000005', '2022-08-09', 'Verifikasi', '1'),
('kp-HnFOp', 8, '1771016011990003', '2022-07-27', 'Berkas Tidak Lengkap', '1'),
('kp-l394L', 8, '3512084102000002', '2022-07-28', 'Berkas Tidak Lengkap', '1'),
('kp-RDlfA', 8, '6106161808950001', '2022-07-18', 'Berkas Tidak Lengkap', '1'),
('kp-T8Sl4', 8, '3471144307880001', '2022-07-01', 'Verifikasi', '1'),
('kp-u5NVU', 8, '1801070310930005', '2022-07-05', 'Verifikasi', '1'),
('kp-vtTAZ', 8, '6203012303000007', '2022-07-04', 'Verifikasi', '1'),
('kp-xdOQw', 8, '3525036108010001', '2022-07-06', 'Verifikasi', '1'),
('kp-zS5cU', 8, '1205160402900001', '2022-06-06', '', NULL),
('skbmr-4JDR9', 1, '3512084102000002', '2022-07-28', 'Berkas Tidak Lengkap', '1'),
('skbmr-86u69', 1, '371085802780015', '2022-07-26', 'Berkas Tidak Lengkap', '1'),
('skbmr-BHfJo', 1, '3173011707830027', '2022-07-29', 'Berkas Tidak Lengkap', '1'),
('skbmr-mYId1', 1, '3525036108010001', '2022-07-06', 'Verifikasi', '1'),
('skbmr-r3b7i', 1, '1771016011990003', '2022-07-27', 'Belum Terverifikasi', '1'),
('skbmr-rjxda', 1, '6106161808950001', '2022-07-18', 'Berkas Tidak Lengkap', '1'),
('skbmr-rXJ6Q', 1, '6203012303000007', '2022-07-04', 'Verifikasi', '1'),
('skbmr-TzK5F', 1, '1205160402900001', '2022-06-06', '', NULL),
('skbmr-ujzW4', 1, '3471144307880001', '2022-07-01', 'Verifikasi', '1'),
('skbmr-UxCMa', 1, '1801070310930005', '2022-07-05', 'Verifikasi', '1'),
('sku-1n5sB', 2, '3512084102000002', '2022-07-28', 'Berkas Tidak Lengkap', '1'),
('sku-44QmC', 2, '3173011707830027', '2022-07-29', 'Berkas Tidak Lengkap', '1'),
('sku-B6GhH', 2, '6106161808950001', '2022-07-18', 'Berkas Tidak Lengkap', '1'),
('sku-cuoUC', 2, '6203012303000007', '2022-07-04', 'Verifikasi', '1'),
('sku-d3HfQ', 2, '6203012303000005', '2022-08-09', 'Verifikasi', '1'),
('sku-isPMY', 2, '1801070310930005', '2022-07-05', 'Verifikasi', '1'),
('sku-ksSfC', 2, '371085802780015', '2022-07-25', 'Berkas Tidak Lengkap', '1'),
('sku-TVuhk', 2, '1771016011990003', '2022-07-27', 'Berkas Tidak Lengkap', '1'),
('sku-vnFiH', 2, '1205160402900001', '2022-06-06', 'Belum Terverifikasi', '1'),
('sku-x9KkF', 2, '3525036108010001', '2022-07-06', 'Verifikasi', '1'),
('sku-ZP9VT', 2, '3471144307880001', '2022-07-01', 'Verifikasi', '1'),
('tm-9UbWP', 4, '1771016011990003', '2022-07-27', 'Berkas Tidak Lengkap', '1'),
('tm-dZN8d', 4, '6106161808950001', '2022-07-18', 'Berkas Tidak Lengkap', '1'),
('tm-gkRkf', 4, '3525036108010001', '2022-07-06', 'Verifikasi', '1'),
('tm-l9fwN', 4, '1801070310930005', '2022-07-05', 'Verifikasi', '1'),
('tm-MLRTq', 4, '3471144307880001', '2022-07-01', 'Verifikasi', '1'),
('tm-s2Qyf', 4, '3173011707830027', '2022-07-29', 'Berkas Tidak Lengkap', '1'),
('tm-yoaHG', 4, '371085802780015', '2022-07-25', 'Berkas Tidak Lengkap', '1'),
('tm-yPuLC', 4, '1205160402900001', '2022-06-06', '', NULL),
('tm-zkUiP', 4, '6203012303000007', '2022-07-04', 'Verifikasi', '1'),
('tm-ZuzQ9', 4, '3512084102000002', '2022-07-28', 'Berkas Tidak Lengkap', '1');

-- --------------------------------------------------------

--
-- Table structure for table `sku`
--

CREATE TABLE `sku` (
  `id_sku` int(11) NOT NULL,
  `id_pelayanan` varchar(25) NOT NULL,
  `id_user` varchar(20) DEFAULT NULL,
  `tanggal_sku` date DEFAULT NULL,
  `nama_usaha` varchar(50) DEFAULT NULL,
  `jenis_usaha` varchar(50) DEFAULT NULL,
  `luas_tempat` varchar(20) DEFAULT NULL,
  `status_tempat` varchar(50) DEFAULT NULL,
  `alamat_usaha` text DEFAULT NULL,
  `keperluan_surat_sku` varchar(50) DEFAULT NULL,
  `foto_lunas_pbb` varchar(255) DEFAULT NULL,
  `blanko_sku` varchar(255) DEFAULT NULL,
  `surat_pernyataan_sku` varchar(255) DEFAULT NULL,
  `foto_perjanjian_sewa` varchar(255) DEFAULT NULL,
  `foto_sp_rtrw` varchar(255) DEFAULT NULL,
  `status_sku` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sku`
--

INSERT INTO `sku` (`id_sku`, `id_pelayanan`, `id_user`, `tanggal_sku`, `nama_usaha`, `jenis_usaha`, `luas_tempat`, `status_tempat`, `alamat_usaha`, `keperluan_surat_sku`, `foto_lunas_pbb`, `blanko_sku`, `surat_pernyataan_sku`, `foto_perjanjian_sewa`, `foto_sp_rtrw`, `status_sku`) VALUES
(58, 'sku-cuoUC', '6203012303000007', '2022-07-04', 'RUMAH MAKAN FARID', 'KULINER', '20', 'MILIK SENDIRI', 'JL.MELATI NO.28', 'BERJUALAN', 'TANDALUNAS.jpg', 'Blanko SKU.pdf', 'Surat Pernyataan SKU.pdf', '', 'suratpengantar RT,RW.webp', 'Verifikasi'),
(59, 'sku-isPMY', '1801070310930005', '2022-07-05', 'RUMAH MAKAN SATRIA', 'KULINER', '20', 'MILIK SENDIRI', 'JL.MELATI NO.2', 'BERJUALAN', 'TANDALUNAS.jpg', 'Blanko SKU.pdf', 'Surat Pernyataan SKU.pdf', '', 'suratpengantar RT,RW.webp', 'Verifikasi'),
(60, 'sku-x9KkF', '3525036108010001', '2022-07-06', 'RUMAH MAKAN LISA', 'KULINER', '20', 'MILIK SENDIRI', 'JL.MELATI NO.3', 'BERJUALAN', 'TANDALUNAS.jpg', 'Blanko SKU.pdf', 'Surat Pernyataan SKU.pdf', '', 'suratpengantar RT,RW.webp', 'Verifikasi'),
(61, 'sku-ZP9VT', '3471144307880001', '2022-07-01', 'RUMAH MAKAN LISTA', 'KULINER', '20', 'MILIK SENDIRI', 'JL.MELATI NO.4', 'BERJUALAN', 'TANDALUNAS.jpg', 'Blanko SKU.pdf', 'Surat Pernyataan SKU.pdf', '', 'suratpengantar RT,RW.webp', 'Verifikasi'),
(62, 'sku-B6GhH', '6106161808950001', '2022-07-18', 'ELEKTRONIK DELMAS', 'TOKO', '20', 'MILIK SENDIRI', 'JL.MELATI NO.5', 'BERJUALAN', NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(63, 'sku-ksSfC', '371085802780015', '2022-07-25', 'WARTEG SARCE', 'KULINER', '20', 'MILIK SENDIRI', 'JL.MELATI NO.6', 'MEMBUKA USAHA KULINER', NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(64, 'sku-vnFiH', '1205160402900001', '2022-06-06', 'ELEKTRONIK HATTA', 'TOKO', '20', 'MILIK SENDIRI', 'JL.MELATI NO.7', 'IZIN USAHA', NULL, NULL, NULL, NULL, NULL, 'Belum Terverifikasi'),
(65, 'sku-TVuhk', '1771016011990003', '2022-07-27', 'ROTI ANNA', 'TOKO', '20', 'MILIK SENDIRI', 'JL.MELATI NO.8', 'MENDAPATKAN IZIN USAHA', NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(66, 'sku-1n5sB', '3512084102000002', '2022-07-28', 'TOKO HIJAB', 'TOKO', '20', 'MILIK SENDIRI', 'JL.MELATI NO.9', 'MEMBUKA USAHA', NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(67, 'sku-44QmC', '3173011707830027', '2022-07-29', 'ELEKTRONIK JEKY', 'TOKO', '20', 'MILIK SENDIRI', 'JL.MELATI NO.10', 'IZIN USAHA\r\n', NULL, NULL, NULL, NULL, NULL, 'Berkas Tidak Lengkap'),
(70, 'sku-d3HfQ', '6203012303000005', '2022-08-09', 'TOKO MIFTAH', 'TOKO ELEKTRONIK', '50', 'MILIK PRIBADI', 'JL.MELATI NO. 28', 'IZIN MEMBUKA USAHA TOKO ELEKTRONIK', 'TANDALUNAS.jpg', 'Blanko SKU.pdf', 'Surat Pernyataan SKU.pdf', '', 'suratpengantar RT,RW.webp', 'Verifikasi');

-- --------------------------------------------------------

--
-- Table structure for table `tm`
--

CREATE TABLE `tm` (
  `id_tm` int(11) NOT NULL,
  `id_pelayanan` varchar(20) NOT NULL,
  `id_user` varchar(20) NOT NULL,
  `keperluan_surat_tm` varchar(255) DEFAULT NULL,
  `pengantar_rt_rw` varchar(255) DEFAULT NULL,
  `tanggal_tm` date DEFAULT NULL,
  `ktp_saksi_1` varchar(255) DEFAULT NULL,
  `ktp_saksi_2` varchar(255) DEFAULT NULL,
  `surat_pernyataan_rt_rw` varchar(255) NOT NULL,
  `tanda_lunas_pbb` varchar(255) DEFAULT NULL,
  `foto_rumah_depan` varchar(255) DEFAULT NULL,
  `foto_rumah_samping` varchar(255) DEFAULT NULL,
  `pekerjaan` varchar(255) DEFAULT NULL,
  `status_tm` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tm`
--

INSERT INTO `tm` (`id_tm`, `id_pelayanan`, `id_user`, `keperluan_surat_tm`, `pengantar_rt_rw`, `tanggal_tm`, `ktp_saksi_1`, `ktp_saksi_2`, `surat_pernyataan_rt_rw`, `tanda_lunas_pbb`, `foto_rumah_depan`, `foto_rumah_samping`, `pekerjaan`, `status_tm`) VALUES
(7, 'tm-zkUiP', '6203012303000007', 'UNTUK KERINGANAN BIAYA PERAWATAN MEDIS', 'suratpengantar RT,RW.webp', '2022-07-04', 'ktp-.jpg', 'ktpindex.jpg', 'surat pernyataan 2 orang saksi.webp', 'TANDALUNAS.jpg', 'Rumah-Gubuk.jpeg', 'Rumah-Gubuk.jpeg', 'PELAJAR/MAHASISWA', 'Verifikasi'),
(8, 'tm-l9fwN', '1801070310930005', 'BEROBAT', 'suratpengantar RT,RW.webp', '2022-07-05', 'ktp-.jpg', 'ktpindex.jpg', 'surat pernyataan 2 orang saksi.webp', 'TANDALUNAS.jpg', 'Rumah-Gubuk.jpeg', 'Rumah-Gubuk.jpeg', 'BELUM BEKERJA', 'Verifikasi'),
(9, 'tm-gkRkf', '3525036108010001', 'BEROBAT', 'suratpengantar RT,RW.webp', '2022-07-06', 'ktp-.jpg', 'ktpindex.jpg', 'surat pernyataan 2 orang saksi.webp', 'TANDALUNAS.jpg', 'Rumah-Gubuk.jpeg', 'Rumah-Gubuk.jpeg', 'BELUM BEKERJA', 'Verifikasi'),
(10, 'tm-MLRTq', '3471144307880001', 'BEROBAT', 'suratpengantar RT,RW.webp', '2022-07-01', 'ktpindex.jpg', 'ktp-.jpg', 'surat pernyataan 2 orang saksi.webp', 'TANDALUNAS.jpg', 'Rumah-Gubuk.jpeg', 'Rumah-Gubuk.jpeg', 'PELAJAR/MAHASISWA', 'Verifikasi'),
(11, 'tm-dZN8d', '6106161808950001', 'MENDAPATKAN DANA BANTUAN PEMERINTAH', NULL, '2022-07-18', NULL, NULL, '', NULL, NULL, NULL, 'BELUM BEKERJA', 'Berkas Tidak Lengkap'),
(12, 'tm-yoaHG', '371085802780015', 'MENDAPATKAN DANA BANTUAN PEMERINTAH', NULL, '2022-07-25', NULL, NULL, '', NULL, NULL, NULL, 'BELUM BEKERJA', 'Berkas Tidak Lengkap'),
(13, 'tm-yPuLC', '1205160402900001', 'MENDAPATKAN BANTUAN PEMERINTAH', NULL, '2022-06-06', NULL, NULL, '', NULL, NULL, NULL, 'PELAJAR/MAHASISWA', NULL),
(14, 'tm-9UbWP', '1771016011990003', 'BEROBAT', NULL, '2022-07-27', NULL, NULL, '', NULL, NULL, NULL, 'PELAJAR/MAHASISWA', 'Berkas Tidak Lengkap'),
(15, 'tm-ZuzQ9', '3512084102000002', 'BEROBAT', NULL, '2022-07-28', NULL, NULL, '', NULL, NULL, NULL, 'PELAJAR/MAHASISWA', 'Berkas Tidak Lengkap'),
(16, 'tm-s2Qyf', '3173011707830027', 'BEROBAT', NULL, '2022-07-29', NULL, NULL, '', NULL, NULL, NULL, 'WIRASWASTA', 'Berkas Tidak Lengkap');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(20) NOT NULL DEFAULT '',
  `pass` varchar(50) NOT NULL DEFAULT '',
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `rt` varchar(20) NOT NULL,
  `rw` varchar(20) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(60) DEFAULT NULL,
  `kelurahan_domisili` text DEFAULT NULL,
  `kecamatan_domisili` text DEFAULT NULL,
  `kabupatenkota_domisili` text DEFAULT NULL,
  `jenis_kelamin` varchar(20) DEFAULT NULL,
  `pendidikan` varchar(20) DEFAULT NULL,
  `agama` varchar(20) DEFAULT NULL,
  `status_perkawinan` enum('Belum Kawin','Kawin','Cerai Hidup','Cerai Mati') NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  `foto_ktp` varchar(50) NOT NULL,
  `foto_kk` varchar(50) NOT NULL,
  `id_nama_pelayanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `pass`, `email`, `nama`, `telepon`, `alamat`, `rt`, `rw`, `pekerjaan`, `tanggal_lahir`, `tempat_lahir`, `kelurahan_domisili`, `kecamatan_domisili`, `kabupatenkota_domisili`, `jenis_kelamin`, `pendidikan`, `agama`, `status_perkawinan`, `no_ktp`, `foto_ktp`, `foto_kk`, `id_nama_pelayanan`) VALUES
('1205160402900001', 'b62dd0d843cb3f9c6784a34ce6b0b103', 'hatta@gmail.com', 'MUHAMMAD HATTA SIREGAR', '085247396666', 'JL.MELATI NO.7', '027', '003', 'PELAJAR/MAHASISWA', '1990-02-04', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Laki-laki', 'SMK/SMA/MA', 'Islam', 'Belum Kawin', '1205160402900001', 'ktp7.webp', 'KK.jpg', NULL),
('1771016011990003', '8f7452d5336df17194aae7e5bd7746ce', 'anna@gmail.com', 'SHALSA ANNALIATI', '085247397777', 'JL.MELATI NO.8', '027', '003', 'PELAJAR/MAHASISWA', '1999-11-20', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Perempuan', 'SMK/SMA/MA', 'Islam', 'Belum Kawin', '1771016011990003', 'ktp8.webp', 'KK.jpg', NULL),
('1801070310930005', '58ba8b5cc46516e7676bcd056ad3e422', 'satria@gmail.com', 'SATRIA BAJA HITAM', '085247391111', 'JL.MELATI NO.2', '027', '003', 'BELUM BEKERJA', '1993-07-03', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Laki-laki', 'SMK/SMA/MA', 'Islam', 'Belum Kawin', '1801070310930005', 'KTPno2.webp', 'KK.jpg', NULL),
('3171234567890123', 'c47f31eb5a6bd9db9a18f2dc99f4eeb6', 'mira@gmail.com', 'MIRA SETIAWAN', '085247390123', 'JL.MELATI NO.11', '027', '003', 'PEGAWAI SWASTA', '1986-02-18', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Perempuan', 'S1', 'Islam', 'Kawin', '3171234567890123', 'ktp11M.jpg', 'KK.jpg', NULL),
('3173011707830027', 'dc17f10105c14aac4af9e7915e9c788f', 'jeky@gmail.com', 'JEKY ARGANA', '085247399999', 'JL.MELATI NO.10', '027', '003', 'WIRASWASTA', '1983-07-17', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Laki-laki', 'SMK/SMA/MA', 'Islam', 'Belum Kawin', '3173011707830027', 'KTP10.jpg', 'KK.jpg', NULL),
('3471144307880001', '3d7e98516f51f1df3530c22ffecba6a4', 'lista@gmail.com', 'LISTA RANTIKA', '085247393333', 'JL.MELATI NO.4', '027', '003', 'PELAJAR/MAHASISWA', '1988-03-03', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Perempuan', 'S1', 'Islam', 'Belum Kawin', '3471144307880001', '-KTP4.jpg', 'KK.jpg', NULL),
('3512084102000002', 'c7328385634f2939f1690cac77f9377b', 'zahro@gmail.com', 'FATIMATUS ZAHRO', '085247398888', 'JL.MELATI NO.9', '027', '003', 'PELAJAR/MAHASISWA', '2000-02-05', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Perempuan', 'SMK/SMA/MA', 'Islam', 'Belum Kawin', '3512084102000002', 'KTP9.jpg', 'KK.jpg', NULL),
('3525036108010001', '8347e575a35001f42fe0347a0956aae1', 'lisatul@gmail.com', 'KHOLISATUL ILMIYAH', '085247392222', 'JL.MELATI NO.3', '027', '003', 'BELUM BEKERJA', '2001-08-21', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Perempuan', 'SMK/SMA/MA', 'Islam', 'Belum Kawin', '3525036108010001', 'ktpno3.webp', 'KK.jpg', NULL),
('371085802780015', '6436bf90ee9ff4e162dfcaa441f33b19', 'seleng@gmail.com', 'SARCE SELENG', '085247395555', 'JL.MELATI NO.6', '027', '003', 'BELUM BEKERJA', '1978-02-19', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Perempuan', 'SMK/SMA/MA', 'Protestan', 'Belum Kawin', '371085802780015', '6ktpindex.jpg', 'KK.jpg', NULL),
('6106161808950001', '31e9c3571a39df1ea1d76154a7b4ddb2', 'delma@gmail.com', 'YOHANES FRANKY DELMAS', '085247394444', 'JL.MELATI NO.5', '027', '003', 'BELUM BEKERJA', '1995-08-18', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Laki-laki', 'SMK/SMA/MA', 'Katolik', 'Belum Kawin', '6106161808950001', 'ktp-.jpg', 'ktpindex.jpg', NULL),
('6203012303000005', '348754fd3e60f02ad49a5d8789fe8c23', 'miftah@gmail.com', 'miftah', '0852473922290', 'jl.melati no.15', '27', '28', 'PELAJAR/MAHASISWA', '2000-03-09', 'Kuala Kapuas', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Laki-laki', 'SMK/SMA/MA', 'Islam', 'Belum Kawin', '6203012303000005', 'WhatsApp Image 2022-07-24 at 20.55.22.jpeg', 'KK.jpg', NULL),
('6203012303000007', '53843af322e5797730405c592157a0f0', 'mifarid23@gmail.com', 'MIFTAH FARID', '085247392229', 'JL.MELATI NO.28', '027', '003', 'PELAJAR/MAHASISWA', '2000-03-23', 'KUALA KAPUAS', 'SELAT HULU', 'SELAT', 'KAPUAS', 'Laki-laki', 'SMK/SMA/MA', 'Islam', 'Belum Kawin', '6203012303000007', 'KTP_.jpg', 'KK.jpg', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `bm`
--
ALTER TABLE `bm`
  ADD PRIMARY KEY (`id_bm`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `bmr`
--
ALTER TABLE `bmr`
  ADD PRIMARY KEY (`id_bmr`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_pelayanan` (`id_pelayanan`);

--
-- Indexes for table `imb`
--
ALTER TABLE `imb`
  ADD PRIMARY KEY (`id_imb`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kaw`
--
ALTER TABLE `kaw`
  ADD PRIMARY KEY (`id_kaw`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kd`
--
ALTER TABLE `kd`
  ADD PRIMARY KEY (`id_kd`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kk`
--
ALTER TABLE `kk`
  ADD PRIMARY KEY (`id_kk`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `km`
--
ALTER TABLE `km`
  ADD PRIMARY KEY (`id_km`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `kp`
--
ALTER TABLE `kp`
  ADD PRIMARY KEY (`id_kp`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `nama_pelayanan`
--
ALTER TABLE `nama_pelayanan`
  ADD PRIMARY KEY (`id_nama_pelayanan`) USING BTREE;

--
-- Indexes for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD PRIMARY KEY (`id_pelayanan`),
  ADD KEY `FK_pelayanan_nama_pelayanan` (`id_nama_pelayanan`),
  ADD KEY `FK_pelayanan_user` (`id_user`),
  ADD KEY `FK_pelayanan_admin` (`id_admin`);

--
-- Indexes for table `sku`
--
ALTER TABLE `sku`
  ADD PRIMARY KEY (`id_sku`),
  ADD KEY `FK_sku_pelayanan` (`id_pelayanan`),
  ADD KEY `FK_sku_user` (`id_user`);

--
-- Indexes for table `tm`
--
ALTER TABLE `tm`
  ADD PRIMARY KEY (`id_tm`),
  ADD KEY `id_pelayanan` (`id_pelayanan`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_nama_pelayanan` (`id_nama_pelayanan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bm`
--
ALTER TABLE `bm`
  MODIFY `id_bm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `bmr`
--
ALTER TABLE `bmr`
  MODIFY `id_bmr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `imb`
--
ALTER TABLE `imb`
  MODIFY `id_imb` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kaw`
--
ALTER TABLE `kaw`
  MODIFY `id_kaw` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `kd`
--
ALTER TABLE `kd`
  MODIFY `id_kd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `kk`
--
ALTER TABLE `kk`
  MODIFY `id_kk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `km`
--
ALTER TABLE `km`
  MODIFY `id_km` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `kp`
--
ALTER TABLE `kp`
  MODIFY `id_kp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sku`
--
ALTER TABLE `sku`
  MODIFY `id_sku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tm`
--
ALTER TABLE `tm`
  MODIFY `id_tm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bmr`
--
ALTER TABLE `bmr`
  ADD CONSTRAINT `FK_bmr_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `pelayanan`
--
ALTER TABLE `pelayanan`
  ADD CONSTRAINT `FK_pelayanan_admin` FOREIGN KEY (`id_admin`) REFERENCES `adm` (`id_admin`),
  ADD CONSTRAINT `FK_pelayanan_nama_pelayanan` FOREIGN KEY (`id_nama_pelayanan`) REFERENCES `nama_pelayanan` (`id_nama_pelayanan`),
  ADD CONSTRAINT `FK_pelayanan_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `sku`
--
ALTER TABLE `sku`
  ADD CONSTRAINT `FK_sku_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id_user`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_nama_pelayanan`) REFERENCES `nama_pelayanan` (`id_nama_pelayanan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
