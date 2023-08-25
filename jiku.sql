-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Jul 2023 pada 14.19
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jiku`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kredit_asnaktif`
--

CREATE TABLE `data_kredit_asnaktif` (
  `id_pengajuan` int(11) NOT NULL,
  `tipe_kredit` varchar(255) NOT NULL,
  `kode_marketing` varchar(11) NOT NULL,
  `nama_marketing` varchar(255) NOT NULL,
  `nik_marketing` varchar(255) NOT NULL,
  `cabang_pembantu` varchar(255) NOT NULL,
  `no_hp_marketing` varchar(255) NOT NULL,
  `waktu_pengajuan` datetime NOT NULL,
  `tanggal_syarat_ketentuan` datetime NOT NULL,
  `nama_debitur` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik_debitur` varchar(255) NOT NULL,
  `nip_debitur` varchar(255) NOT NULL,
  `nomor_pensiun` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `nomor_npwp` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `gaji_debitur` int(255) NOT NULL,
  `jumlah_pinjaman` int(255) NOT NULL,
  `waktu_pinjaman` int(255) NOT NULL,
  `umur_pengajuan` int(11) NOT NULL,
  `pembayaran_bulanan` varchar(255) NOT NULL,
  `suku_bunga` varchar(255) NOT NULL,
  `total_premi` varchar(255) NOT NULL,
  `biaya_provisi` varchar(255) NOT NULL,
  `kredit_file_1` text NOT NULL,
  `kredit_file_2` text NOT NULL,
  `kredit_file_3` text NOT NULL,
  `kredit_file_4` text NOT NULL,
  `kredit_file_5` text NOT NULL,
  `kredit_file_6` text NOT NULL,
  `kredit_file_7` text NOT NULL,
  `kredit_file_8` text NOT NULL,
  `kredit_file_9` text NOT NULL,
  `kredit_file_10` text NOT NULL,
  `kredit_file_11` text NOT NULL,
  `kredit_file_12` text NOT NULL,
  `kredit_file_13` text NOT NULL,
  `kredit_file_14` text NOT NULL,
  `kredit_file_15` text NOT NULL,
  `kredit_file_16` text NOT NULL,
  `kredit_file_17` text NOT NULL,
  `kredit_file_18` text NOT NULL,
  `kredit_file_19` text NOT NULL,
  `catatan_file_1` varchar(255) NOT NULL,
  `catatan_file_2` varchar(255) NOT NULL,
  `catatan_file_3` varchar(255) NOT NULL,
  `catatan_file_4` varchar(255) NOT NULL,
  `catatan_file_5` varchar(255) NOT NULL,
  `catatan_file_6` varchar(255) NOT NULL,
  `catatan_file_7` varchar(255) NOT NULL,
  `catatan_file_8` varchar(255) NOT NULL,
  `catatan_file_9` varchar(255) NOT NULL,
  `catatan_file_10` varchar(255) NOT NULL,
  `catatan_file_11` varchar(255) NOT NULL,
  `catatan_file_12` varchar(255) NOT NULL,
  `catatan_file_13` varchar(255) NOT NULL,
  `catatan_file_14` varchar(255) NOT NULL,
  `catatan_file_15` varchar(255) NOT NULL,
  `catatan_file_16` varchar(255) NOT NULL,
  `catatan_file_17` varchar(255) NOT NULL,
  `catatan_file_18` varchar(255) NOT NULL,
  `catatan_file_19` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kredit_asnaktif`
--

INSERT INTO `data_kredit_asnaktif` (`id_pengajuan`, `tipe_kredit`, `kode_marketing`, `nama_marketing`, `nik_marketing`, `cabang_pembantu`, `no_hp_marketing`, `waktu_pengajuan`, `tanggal_syarat_ketentuan`, `nama_debitur`, `tempat_lahir`, `tanggal_lahir`, `nik_debitur`, `nip_debitur`, `nomor_pensiun`, `alamat_rumah`, `nama_ibu`, `nama_instansi`, `pangkat_golongan`, `nomor_rekening`, `nomor_npwp`, `nomor_telepon`, `gaji_debitur`, `jumlah_pinjaman`, `waktu_pinjaman`, `umur_pengajuan`, `pembayaran_bulanan`, `suku_bunga`, `total_premi`, `biaya_provisi`, `kredit_file_1`, `kredit_file_2`, `kredit_file_3`, `kredit_file_4`, `kredit_file_5`, `kredit_file_6`, `kredit_file_7`, `kredit_file_8`, `kredit_file_9`, `kredit_file_10`, `kredit_file_11`, `kredit_file_12`, `kredit_file_13`, `kredit_file_14`, `kredit_file_15`, `kredit_file_16`, `kredit_file_17`, `kredit_file_18`, `kredit_file_19`, `catatan_file_1`, `catatan_file_2`, `catatan_file_3`, `catatan_file_4`, `catatan_file_5`, `catatan_file_6`, `catatan_file_7`, `catatan_file_8`, `catatan_file_9`, `catatan_file_10`, `catatan_file_11`, `catatan_file_12`, `catatan_file_13`, `catatan_file_14`, `catatan_file_15`, `catatan_file_16`, `catatan_file_17`, `catatan_file_18`, `catatan_file_19`) VALUES
(1, 'ASN AKTIF', 'marcel', '222', '222', 'CAPEM UNAND', '222', '2023-07-14 02:06:49', '2023-07-14 02:06:49', '222', '222', '2002-06-06', '222', '222', '222', '222', '222', '2222', 'Golongan IV B Pembina Tingkat 1', '22', '22', '22', 22222222, 20000000, 11, 21, '334848.48484848', '11', '825000', '', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'ASN AKTIF', 'marcel', '222', '222', 'CAPEM UNAND', '222', '2023-07-14 02:06:49', '2023-07-14 02:06:49', '222', '222', '2002-06-06', '222', '222', '222', '222', '222', '2222', 'Golongan IV B Pembina Tingkat 1', '22', '22', '22', 22222222, 20000000, 11, 21, '334848.48484848', '11', '825000', '', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'ASN AKTIF', 'marcel', 'marcel', '222', 'CAPEM AROSUKA', '444', '2023-07-27 17:35:13', '2023-07-27 17:35:13', 'sss', 'asd', '1999-07-13', '123', '123', '123', '1312', '123wef', 'sdf234', 'Golongan III D Penata Tingkat 1', '123123', '123123', '123123', 123456789, 200000000, 10, 24, '', '', '', '', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kredit_pensiun`
--

CREATE TABLE `data_kredit_pensiun` (
  `id_pengajuan` int(11) NOT NULL,
  `tipe_kredit` varchar(255) NOT NULL,
  `kode_marketing` varchar(11) NOT NULL,
  `nama_marketing` varchar(255) NOT NULL,
  `nik_marketing` varchar(255) NOT NULL,
  `cabang_pembantu` varchar(255) NOT NULL,
  `no_hp_marketing` varchar(255) NOT NULL,
  `waktu_pengajuan` datetime NOT NULL,
  `tanggal_syarat_ketentuan` datetime NOT NULL,
  `nama_debitur` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik_debitur` varchar(255) NOT NULL,
  `nip_debitur` varchar(255) NOT NULL,
  `nomor_pensiun` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `nomor_npwp` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `gaji_debitur` int(255) NOT NULL,
  `jumlah_pinjaman` int(255) NOT NULL,
  `waktu_pinjaman` int(255) NOT NULL,
  `umur_pengajuan` int(11) NOT NULL,
  `pembayaran_bulanan` varchar(255) NOT NULL,
  `suku_bunga` varchar(255) NOT NULL,
  `total_premi` varchar(255) NOT NULL,
  `biaya_provisi` varchar(255) NOT NULL,
  `kredit_file_1` text NOT NULL,
  `kredit_file_2` text NOT NULL,
  `kredit_file_3` text NOT NULL,
  `kredit_file_4` text NOT NULL,
  `kredit_file_5` text NOT NULL,
  `kredit_file_6` text NOT NULL,
  `kredit_file_7` text NOT NULL,
  `kredit_file_8` text NOT NULL,
  `kredit_file_9` text NOT NULL,
  `kredit_file_10` text NOT NULL,
  `kredit_file_11` text NOT NULL,
  `kredit_file_12` text NOT NULL,
  `kredit_file_13` text NOT NULL,
  `kredit_file_14` text NOT NULL,
  `kredit_file_15` text NOT NULL,
  `kredit_file_16` text NOT NULL,
  `kredit_file_17` text NOT NULL,
  `kredit_file_18` text NOT NULL,
  `kredit_file_19` text NOT NULL,
  `catatan_file_1` varchar(255) NOT NULL,
  `catatan_file_2` varchar(255) NOT NULL,
  `catatan_file_3` varchar(255) NOT NULL,
  `catatan_file_4` varchar(255) NOT NULL,
  `catatan_file_5` varchar(255) NOT NULL,
  `catatan_file_6` varchar(255) NOT NULL,
  `catatan_file_7` varchar(255) NOT NULL,
  `catatan_file_8` varchar(255) NOT NULL,
  `catatan_file_9` varchar(255) NOT NULL,
  `catatan_file_10` varchar(255) NOT NULL,
  `catatan_file_11` varchar(255) NOT NULL,
  `catatan_file_12` varchar(255) NOT NULL,
  `catatan_file_13` varchar(255) NOT NULL,
  `catatan_file_14` varchar(255) NOT NULL,
  `catatan_file_15` varchar(255) NOT NULL,
  `catatan_file_16` varchar(255) NOT NULL,
  `catatan_file_17` varchar(255) NOT NULL,
  `catatan_file_18` varchar(255) NOT NULL,
  `catatan_file_19` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kredit_pensiun`
--

INSERT INTO `data_kredit_pensiun` (`id_pengajuan`, `tipe_kredit`, `kode_marketing`, `nama_marketing`, `nik_marketing`, `cabang_pembantu`, `no_hp_marketing`, `waktu_pengajuan`, `tanggal_syarat_ketentuan`, `nama_debitur`, `tempat_lahir`, `tanggal_lahir`, `nik_debitur`, `nip_debitur`, `nomor_pensiun`, `alamat_rumah`, `nama_ibu`, `nama_instansi`, `pangkat_golongan`, `nomor_rekening`, `nomor_npwp`, `nomor_telepon`, `gaji_debitur`, `jumlah_pinjaman`, `waktu_pinjaman`, `umur_pengajuan`, `pembayaran_bulanan`, `suku_bunga`, `total_premi`, `biaya_provisi`, `kredit_file_1`, `kredit_file_2`, `kredit_file_3`, `kredit_file_4`, `kredit_file_5`, `kredit_file_6`, `kredit_file_7`, `kredit_file_8`, `kredit_file_9`, `kredit_file_10`, `kredit_file_11`, `kredit_file_12`, `kredit_file_13`, `kredit_file_14`, `kredit_file_15`, `kredit_file_16`, `kredit_file_17`, `kredit_file_18`, `kredit_file_19`, `catatan_file_1`, `catatan_file_2`, `catatan_file_3`, `catatan_file_4`, `catatan_file_5`, `catatan_file_6`, `catatan_file_7`, `catatan_file_8`, `catatan_file_9`, `catatan_file_10`, `catatan_file_11`, `catatan_file_12`, `catatan_file_13`, `catatan_file_14`, `catatan_file_15`, `catatan_file_16`, `catatan_file_17`, `catatan_file_18`, `catatan_file_19`) VALUES
(1, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '2023-07-13 21:49:32', '2023-07-13 21:49:32', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '2023-07-13 21:49:32', '2023-07-13 21:49:32', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '2023-07-13 21:49:32', '2023-07-13 21:49:32', 'Novia safitri', 'Air bangis', '1994-11-10', '1312015010940001', '199410112020122007', '', '', 'Sumarni', 'SMPN 1 Koto Balingka', 'Golongan III A Penata Muda', '15020210032730', '638230953202000', '082385159940', 2660700, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '2023-07-13 21:49:32', '2023-07-13 21:49:32', 'Novia safitri', 'Air bangis', '1994-11-10', '1312015010940001', '199410112020122007', '123', 'adw', 'Sumarni', 'SMPN 1 Koto Balingka', 'Golongan III A Penata Muda', '15020210032730', '638230953202000', '082385159940', 2660700, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '2023-07-13 21:49:32', '2023-07-13 21:49:32', 'Novia safitri', 'Air bangis', '1994-11-10', '1312015010940001', '199410112020122007', '111', 'rew', 'Sumarni', 'SMPN 1 Koto Balingka', 'Golongan III A Penata Muda', '15020210032730', '638230953202000', '082385159940', 2660700, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '2023-07-13 21:49:32', '2023-07-13 21:49:32', 'Novia safitri', 'Air bangis', '1994-11-10', '1312015010940001', '199410112020122007', '', '', 'Sumarni', 'SMPN 1 Koto Balingka', 'Golongan III A Penata Muda', '15020210032730', '638230953202000', '082385159940', 2660700, 80000000, 6, 28, '1744444.4444444', '9.5', '1800000', '800000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '2023-07-13 21:49:32', '2023-07-13 21:49:32', 'Novia safitri', 'Air bangis', '1994-11-10', '1312015010940001', '199410112020122007', '33', '33', 'Sumarni', 'SMPN 1 Koto Balingka', 'Golongan III A Penata Muda', '15020210032730', '638230953202000', '082385159940', 2660700, 80000000, 6, 28, '1744444.4444444', '9.5', '1800000', '800000', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', '', '', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, '', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '2023-07-13 21:49:32', '2023-07-13 21:49:32', 'Novia safitri', 'Air bangis', '1994-11-10', '1312015010940001', '199410112020122007', '32', '32', 'Sumarni', 'SMPN 1 Koto Balingka', 'Golongan III A Penata Muda', '15020210032730', '638230953202000', '082385159940', 2660700, 80000000, 6, 28, '1744444.4444444', '9.5', '1800000', '800000', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(11, 'ASN PENSIUN', 'marketing1', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '2023-07-13 21:49:32', '2023-07-13 21:49:32', 'Novia safitri', 'Air bangis', '1994-11-10', '1312015010940001', '199410112020122007', '31', '31', 'Sumarni', 'SMPN 1 Koto Balingka', 'Golongan III A Penata Muda', '15020210032730', '638230953202000', '082385159940', 2660700, 80000000, 6, 28, '1744444.4444444', '9.5', '1800000', '800000', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(12, 'ASN PENSIUN', '', 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Novia safitri', 'Air bangis', '1994-11-10', '1312015010940001', '199410112020122007', '31', '31', 'Sumarni', 'SMPN 1 Koto Balingka', 'Golongan III A Penata Muda', '15020210032730', '638230953202000', '082385159940', 2660700, 0, 0, 0, '200075.07', '9.5', '461711.7', '123123.12', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(13, 'ASN PENSIUN', 'marcel', '222', '222', 'CAPEM UNAND', '222', '2023-07-14 02:06:49', '2023-07-14 02:06:49', '222', '222', '2002-06-06', '', '222', '222', '222', '222', '2222', 'Golongan IV B Pembina Tingkat 1', '22', '22', '22', 22222222, 20000000, 11, 21, '334848.48484848', '11', '825000', '', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_kredit_prapensiun`
--

CREATE TABLE `data_kredit_prapensiun` (
  `id_pengajuan` int(11) NOT NULL,
  `tipe_kredit` varchar(255) NOT NULL,
  `kode_marketing` varchar(11) NOT NULL,
  `nama_marketing` varchar(255) NOT NULL,
  `nik_marketing` varchar(255) NOT NULL,
  `cabang_pembantu` varchar(255) NOT NULL,
  `no_hp_marketing` varchar(255) NOT NULL,
  `waktu_pengajuan` datetime NOT NULL,
  `tanggal_syarat_ketentuan` datetime NOT NULL,
  `nama_debitur` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik_debitur` varchar(255) NOT NULL,
  `nip_debitur` varchar(255) NOT NULL,
  `nomor_pensiun` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `nomor_npwp` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `gaji_debitur` int(255) NOT NULL,
  `jumlah_pinjaman` int(255) NOT NULL,
  `waktu_pinjaman` int(255) NOT NULL,
  `umur_pengajuan` int(11) NOT NULL,
  `pembayaran_bulanan` varchar(255) NOT NULL,
  `suku_bunga` varchar(255) NOT NULL,
  `total_premi` varchar(255) NOT NULL,
  `biaya_provisi` varchar(255) NOT NULL,
  `kredit_file_1` text NOT NULL,
  `kredit_file_2` text NOT NULL,
  `kredit_file_3` text NOT NULL,
  `kredit_file_4` text NOT NULL,
  `kredit_file_5` text NOT NULL,
  `kredit_file_6` text NOT NULL,
  `kredit_file_7` text NOT NULL,
  `kredit_file_8` text NOT NULL,
  `kredit_file_9` text NOT NULL,
  `kredit_file_10` text NOT NULL,
  `kredit_file_11` text NOT NULL,
  `kredit_file_12` text NOT NULL,
  `kredit_file_13` text NOT NULL,
  `kredit_file_14` text NOT NULL,
  `kredit_file_15` text NOT NULL,
  `kredit_file_16` text NOT NULL,
  `kredit_file_17` text NOT NULL,
  `kredit_file_18` text NOT NULL,
  `kredit_file_19` text NOT NULL,
  `catatan_file_1` varchar(255) NOT NULL,
  `catatan_file_2` varchar(255) NOT NULL,
  `catatan_file_3` varchar(255) NOT NULL,
  `catatan_file_4` varchar(255) NOT NULL,
  `catatan_file_5` varchar(255) NOT NULL,
  `catatan_file_6` varchar(255) NOT NULL,
  `catatan_file_7` varchar(255) NOT NULL,
  `catatan_file_8` varchar(255) NOT NULL,
  `catatan_file_9` varchar(255) NOT NULL,
  `catatan_file_10` varchar(255) NOT NULL,
  `catatan_file_11` varchar(255) NOT NULL,
  `catatan_file_12` varchar(255) NOT NULL,
  `catatan_file_13` varchar(255) NOT NULL,
  `catatan_file_14` varchar(255) NOT NULL,
  `catatan_file_15` varchar(255) NOT NULL,
  `catatan_file_16` varchar(255) NOT NULL,
  `catatan_file_17` varchar(255) NOT NULL,
  `catatan_file_18` varchar(255) NOT NULL,
  `catatan_file_19` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_kredit_prapensiun`
--

INSERT INTO `data_kredit_prapensiun` (`id_pengajuan`, `tipe_kredit`, `kode_marketing`, `nama_marketing`, `nik_marketing`, `cabang_pembantu`, `no_hp_marketing`, `waktu_pengajuan`, `tanggal_syarat_ketentuan`, `nama_debitur`, `tempat_lahir`, `tanggal_lahir`, `nik_debitur`, `nip_debitur`, `nomor_pensiun`, `alamat_rumah`, `nama_ibu`, `nama_instansi`, `pangkat_golongan`, `nomor_rekening`, `nomor_npwp`, `nomor_telepon`, `gaji_debitur`, `jumlah_pinjaman`, `waktu_pinjaman`, `umur_pengajuan`, `pembayaran_bulanan`, `suku_bunga`, `total_premi`, `biaya_provisi`, `kredit_file_1`, `kredit_file_2`, `kredit_file_3`, `kredit_file_4`, `kredit_file_5`, `kredit_file_6`, `kredit_file_7`, `kredit_file_8`, `kredit_file_9`, `kredit_file_10`, `kredit_file_11`, `kredit_file_12`, `kredit_file_13`, `kredit_file_14`, `kredit_file_15`, `kredit_file_16`, `kredit_file_17`, `kredit_file_18`, `kredit_file_19`, `catatan_file_1`, `catatan_file_2`, `catatan_file_3`, `catatan_file_4`, `catatan_file_5`, `catatan_file_6`, `catatan_file_7`, `catatan_file_8`, `catatan_file_9`, `catatan_file_10`, `catatan_file_11`, `catatan_file_12`, `catatan_file_13`, `catatan_file_14`, `catatan_file_15`, `catatan_file_16`, `catatan_file_17`, `catatan_file_18`, `catatan_file_19`) VALUES
(1, 'ASN AKTIF', 'marcel', '222', '222', 'CAPEM UNAND', '222', '2023-07-14 02:06:49', '2023-07-14 02:06:49', '222', '222', '2002-06-06', '222', '222', '222', '222', '222', '2222', 'Golongan IV B Pembina Tingkat 1', '22', '22', '22', 22222222, 20000000, 11, 21, '334848.48484848', '11', '825000', '', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'ASN AKTIF', 'marcel', '222', '222', 'CAPEM UNAND', '222', '2023-07-14 02:06:49', '2023-07-14 02:06:49', '222', '222', '2002-06-06', '222', '222', '222', '222', '222', '2222', 'Golongan IV B Pembina Tingkat 1', '22', '22', '22', 22222222, 20000000, 11, 21, '334848.48484848', '11', '825000', '', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'PRAPENSIUN', 'marcel', '111', '111', 'CABANG SOLOK', '111', '2023-07-14 02:30:06', '2023-07-14 02:30:06', '111', '111', '2000-06-02', '111', '111', '111', '111', '111', '111', 'Golongan I C Juru', '111', '111', '111', 11111111, 11111111, 11, 23, '186026.93416667', '11', '458333.32875', '', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form1`
--

CREATE TABLE `temp_form1` (
  `id_pengajuan` int(255) NOT NULL,
  `nama_marketing` varchar(255) NOT NULL,
  `nik_marketing` varchar(255) NOT NULL,
  `cabang_pembantu` varchar(255) NOT NULL,
  `no_hp_marketing` varchar(255) NOT NULL,
  `kode_marketing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form1`
--

INSERT INTO `temp_form1` (`id_pengajuan`, `nama_marketing`, `nik_marketing`, `cabang_pembantu`, `no_hp_marketing`, `kode_marketing`) VALUES
(1, 'marce', '123', 'CABANG BUKIT TINGGI', '123', 'marcel'),
(2, '', '0', 'CABANG ALAHAN PANJANG', '0', 'marcel'),
(3, 'mar', '12345', 'CABANG SYARIAH PADANG', '2312312', 'marcel'),
(4, '', '0', 'CABANG ALAHAN PANJANG', '0', 'marcel'),
(5, '', '0', 'CABANG ALAHAN PANJANG', '0', 'marcel'),
(6, 'EDO VIO NANDA', '2147483647', 'CABANG BATU SANGKAR', '2147483647', 'marketing1'),
(7, 'mar', '123', 'CAPEM UNAND', '123', 'marcel'),
(8, 'mar', '123', 'CABANG SITEBA', '123', 'marcel'),
(9, '222', '222', 'CAPEM UNAND', '222', 'marcel'),
(10, '110', '111', 'CABANG SOLOK', '112', 'marcel'),
(11, 'marcel', '2147483647', 'CABANG TAPUS', '2147483647', 'marcel'),
(12, 'marcel', '2147483647', 'CABANG TAPUS', '2147483647', 'marcel'),
(13, 'marcel', '3201012406010011', 'CABANG TAPUS', '81220112821', 'marcel'),
(14, '', '0', 'CABANG ALAHAN PANJANG', '0', 'marcel'),
(15, 'mar', '123', 'CAPEM UNAND', '444', 'marcel'),
(16, 'mar', '24', 'CABANG SITEBA', '2312312', 'marcel'),
(17, 'mar', '24', 'CABANG SITEBA', '222', 'marcel'),
(18, 'marcel', '222', 'CAPEM AROSUKA', '444', 'marcel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form2`
--

CREATE TABLE `temp_form2` (
  `id_pengajuan` int(255) NOT NULL,
  `waktu_pengajuan` datetime NOT NULL,
  `tanggal_syarat_ketentuan` datetime NOT NULL,
  `kode_marketing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form2`
--

INSERT INTO `temp_form2` (`id_pengajuan`, `waktu_pengajuan`, `tanggal_syarat_ketentuan`, `kode_marketing`) VALUES
(1, '2023-07-13 11:07:54', '2023-07-13 11:07:54', 'marcel'),
(2, '2023-07-13 16:12:13', '2023-07-13 16:12:13', 'marcel'),
(3, '2023-07-13 17:59:00', '2023-07-13 17:59:00', 'marcel'),
(4, '2023-07-13 18:08:36', '2023-07-13 18:08:36', 'marcel'),
(5, '2023-07-13 21:49:32', '2023-07-13 21:49:32', 'marketing1'),
(6, '2023-07-14 01:28:11', '2023-07-14 01:28:11', 'marcel'),
(7, '2023-07-14 01:42:12', '2023-07-14 01:42:12', 'marcel'),
(8, '2023-07-14 02:06:49', '2023-07-14 02:06:49', 'marcel'),
(9, '2023-07-14 02:30:06', '2023-07-14 02:30:06', 'marcel'),
(10, '2023-07-18 19:20:41', '2023-07-18 19:20:41', 'marcel'),
(11, '2023-07-21 16:02:52', '2023-07-21 16:02:52', 'marcel'),
(12, '2023-07-21 16:49:33', '2023-07-21 16:49:33', 'marcel'),
(13, '2023-07-21 16:51:59', '2023-07-21 16:51:59', 'marcel'),
(14, '2023-07-27 17:35:13', '2023-07-27 17:35:13', 'marcel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form3`
--

CREATE TABLE `temp_form3` (
  `id_pengajuan` int(255) NOT NULL,
  `nama_debitur` varchar(255) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nik_debitur` varchar(255) NOT NULL,
  `nip_debitur` varchar(255) NOT NULL,
  `nomor_pensiun` varchar(255) NOT NULL,
  `alamat_rumah` varchar(255) NOT NULL,
  `nama_ibu` varchar(255) NOT NULL,
  `nama_instansi` varchar(255) NOT NULL,
  `pangkat_golongan` varchar(255) NOT NULL,
  `nomor_rekening` varchar(255) NOT NULL,
  `nomor_npwp` varchar(255) NOT NULL,
  `nomor_telepon` varchar(255) NOT NULL,
  `gaji_debitur` int(255) NOT NULL,
  `kode_marketing` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form3`
--

INSERT INTO `temp_form3` (`id_pengajuan`, `nama_debitur`, `tempat_lahir`, `tanggal_lahir`, `nik_debitur`, `nip_debitur`, `nomor_pensiun`, `alamat_rumah`, `nama_ibu`, `nama_instansi`, `pangkat_golongan`, `nomor_rekening`, `nomor_npwp`, `nomor_telepon`, `gaji_debitur`, `kode_marketing`) VALUES
(1, 'marce', 'bogoe', '2005-06-15', '123', '123', '123', '123asdasd', 'asdasd', 'aswdf12', 'Golongan III A Penata Muda', '123', '123', '123', 4000000, 'marcel'),
(2, 'xxx', 'bogoe', '2004-05-11', '222', '22222', '222', '22', '22', '22', 'Golongan II C Pengatur', '2222', '22222', '2222', 22222222, 'marcel'),
(3, 'xxx', 'bogoe', '2004-05-11', '222', '22222', '222', '22', '22', '22', 'Golongan II C Pengatur', '2222', '22222', '2222', 22222222, 'marcel'),
(4, 'xxx', 'bogoe', '2004-05-11', '222', '22222', '222', '22', '22', '22', 'Golongan II C Pengatur', '2222', '22222', '2222', 22222222, 'marcel'),
(5, '', '', '0000-00-00', '', '', '', '', '', '', 'Golongan IV A Pembina', '', '', '', 222222, 'marcel'),
(6, '', '', '0000-00-00', '', '', '', '', '', '', 'Golongan IV A Pembina', '', '', '', 0, 'marcel'),
(7, 'Novia safitri', 'Air bangis', '1994-11-10', '1312015010940001', '199410112020122007', '', '', 'Sumarni', 'SMPN 1 Koto Balingka', 'Golongan III A Penata Muda', '15020210032730', '638230953202000', '082385159940', 2660700, 'marketing1'),
(8, 'mar', 'mar', '2010-06-03', '123', '123', '123', 'mar', 'mar', '123', 'Golongan III A Penata Muda', '123', '123', '123', 123123123, 'marcel'),
(9, 'mar', 'mar', '2013-06-04', '123', '123', '123', '123', 'mar', '123mar', 'Golongan III C Penata', '123', '123', '123', 12312312, 'marcel'),
(10, '222', '222', '2002-06-06', '222', '222', '222', '222', '222', '2222', 'Golongan IV B Pembina Tingkat 1', '22', '22', '22', 22222222, 'marcel'),
(11, '111', '111', '2000-06-02', '111', '111', '111', '111', '111', '111', 'Golongan I C Juru', '111', '111', '111', 11111111, 'marcel'),
(12, '', '', '0000-00-00', '', '', '', '', '', '', 'Golongan IV A Pembina', '', '', '', 123456789, 'marcel'),
(13, 'xxx', 'bogoe', '2001-07-21', '222', '222', '222', '2221asd', 'asdasd', 'asasdaw', 'Golongan III D Penata Tingkat 1', '123', '123', '0123', 100000000, 'marcel'),
(14, 'xxx', 'asd', '2001-07-11', '222', '123', '1234', '123asdasd', 'asdasd', 'asdasd', 'Golongan III C Penata', '1234', '124', '123', 124, 'marcel'),
(15, 'xxx', 'bogoe', '1999-07-06', '123', '123', '123', '123asd', 'asdweg', 'sdf', 'Golongan II C Pengatur', '124123', '123123', '2323', 123456789, 'marcel'),
(16, 'sss', 'asd', '1999-07-13', '123', '123', '123', '1312', '123wef', 'sdf234', 'Golongan III D Penata Tingkat 1', '123123', '123123', '123123', 123456789, 'marcel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form4`
--

CREATE TABLE `temp_form4` (
  `id_pengajuan` int(255) NOT NULL,
  `jumlah_pinjaman` int(255) NOT NULL,
  `waktu_pinjaman` int(255) NOT NULL,
  `umur_pengajuan` int(11) NOT NULL,
  `pembayaran_bulanan` varchar(255) NOT NULL,
  `gaji_debitur` varchar(255) NOT NULL,
  `suku_bunga` varchar(255) NOT NULL,
  `total_premi` varchar(255) NOT NULL,
  `biaya_provisi` varchar(255) NOT NULL,
  `kode_marketing` varchar(255) NOT NULL,
  `jenis_payroll` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form4`
--

INSERT INTO `temp_form4` (`id_pengajuan`, `jumlah_pinjaman`, `waktu_pinjaman`, `umur_pengajuan`, `pembayaran_bulanan`, `gaji_debitur`, `suku_bunga`, `total_premi`, `biaya_provisi`, `kode_marketing`, `jenis_payroll`) VALUES
(1, 23000000, 10, 13, '', '', '', '', '', 'marcel', 'Bank Nagari'),
(2, 23000000, 10, 13, '', '', '', '', '', 'marcel', ''),
(3, 22222222, 10, 10, '', '', '', '', '', 'marcel', ''),
(4, 22222222, 10, 10, '361111.1075', '12312312', '9.5', '833333.325', '222222.22', 'marcel', ''),
(5, 22222222, 10, 10, '361111.1075', '12312312', '9.5', '833333.325', '222222.22', 'marcel', ''),
(6, 22222222, 10, 10, '361111.1075', '12312312', '9.5', '833333.325', '222222.22', 'marcel', ''),
(7, 22222222, 10, 10, '361111.1075', '12312312', '9.5', '833333.325', '222222.22', 'marcel', ''),
(8, 22222222, 10, 10, '361111.1075', '12312312', '9.5', '833333.325', '222222.22', 'marcel', ''),
(9, 22222222, 10, 10, '', '', '', '', '', 'marcel', 'marcel'),
(10, 22222222, 10, 10, '361111.1075', '12312312', '9.5', '833333.325', '222222.22', 'marcel', ''),
(11, 22222222, 10, 10, '', '', '', '', '', 'marcel', 'Bank Nagari'),
(12, 22222222, 10, 10, '361111.1075', '12312312', '9.5', '833333.325', '222222.22', 'marcel', 'Bank Nagari'),
(13, 20000000, 6, 10, '', '', '', '', '', 'marcel', 'Bank Nagari'),
(14, 20000000, 6, 10, '', '', '', '', '', 'marcel', 'Non Nagari'),
(15, 20000000, 11, 21, '', '', '', '', '', 'marcel', 'Non Nagari'),
(16, 20000000, 11, 21, '326515.15151515', '22222222', '10.5', '825000', '', 'marcel', 'Non Nagari'),
(17, 20000000, 11, 21, '', '', '', '', '', 'marcel', 'Non Nagari'),
(18, 20000000, 11, 21, '334848.48484848', '22222222', '11', '825000', '', 'marcel', 'Non Nagari'),
(19, 11111111, 11, 23, '', '', '', '', '', 'marcel', 'Non Nagari'),
(20, 11111111, 11, 23, '186026.93416667', '11111111', '11', '458333.32875', '', 'marcel', 'Non Nagari'),
(21, 0, 0, 2023, '', '', '', '', '', 'marcel', ''),
(22, 200000000, 10, 23, '', '', '', '', '', 'marcel', 'Bank Nagari'),
(23, 200000000, 10, 22, '', '', '', '', '', 'marcel', 'Bank Nagari'),
(24, 200000000, 10, 22, '', '', '', '', '', 'marcel', 'Non Nagari'),
(25, 200000000, 10, 22, '', '', '', '', '', 'marcel', 'Bank Nagari'),
(26, 200000000, 10, 22, '', '', '', '', '', 'marcel', 'Bank Nagari'),
(27, 200000000, 10, 24, '', '', '', '', '', 'marcel', 'Bank Nagari'),
(28, 200000000, 10, 24, '', '', '', '', '', 'marcel', 'Bank Nagari'),
(29, 200000000, 10, 24, '', '', '', '', '', 'marcel', 'Non Nagari');

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_form6`
--

CREATE TABLE `temp_form6` (
  `id_pengajuan` int(11) NOT NULL,
  `kode_marketing` varchar(255) NOT NULL,
  `kredit_file_1` text NOT NULL,
  `kredit_file_2` text NOT NULL,
  `kredit_file_3` text NOT NULL,
  `kredit_file_4` text NOT NULL,
  `kredit_file_5` text NOT NULL,
  `kredit_file_6` text NOT NULL,
  `kredit_file_7` text NOT NULL,
  `kredit_file_8` text NOT NULL,
  `kredit_file_9` text NOT NULL,
  `kredit_file_10` text NOT NULL,
  `kredit_file_11` text NOT NULL,
  `kredit_file_12` text NOT NULL,
  `kredit_file_13` text NOT NULL,
  `kredit_file_14` text NOT NULL,
  `kredit_file_15` text NOT NULL,
  `kredit_file_16` text NOT NULL,
  `kredit_file_17` text NOT NULL,
  `kredit_file_18` text NOT NULL,
  `kredit_file_19` text NOT NULL,
  `catatan_file_1` varchar(255) NOT NULL,
  `catatan_file_2` varchar(255) NOT NULL,
  `catatan_file_3` varchar(255) NOT NULL,
  `catatan_file_4` varchar(255) NOT NULL,
  `catatan_file_5` varchar(255) NOT NULL,
  `catatan_file_6` varchar(255) NOT NULL,
  `catatan_file_7` varchar(255) NOT NULL,
  `catatan_file_8` varchar(255) NOT NULL,
  `catatan_file_9` varchar(255) NOT NULL,
  `catatan_file_10` varchar(255) NOT NULL,
  `catatan_file_11` varchar(255) NOT NULL,
  `catatan_file_12` varchar(255) NOT NULL,
  `catatan_file_13` varchar(255) NOT NULL,
  `catatan_file_14` varchar(255) NOT NULL,
  `catatan_file_15` varchar(255) NOT NULL,
  `catatan_file_16` varchar(255) NOT NULL,
  `catatan_file_17` varchar(255) NOT NULL,
  `catatan_file_18` varchar(255) NOT NULL,
  `catatan_file_19` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `temp_form6`
--

INSERT INTO `temp_form6` (`id_pengajuan`, `kode_marketing`, `kredit_file_1`, `kredit_file_2`, `kredit_file_3`, `kredit_file_4`, `kredit_file_5`, `kredit_file_6`, `kredit_file_7`, `kredit_file_8`, `kredit_file_9`, `kredit_file_10`, `kredit_file_11`, `kredit_file_12`, `kredit_file_13`, `kredit_file_14`, `kredit_file_15`, `kredit_file_16`, `kredit_file_17`, `kredit_file_18`, `kredit_file_19`, `catatan_file_1`, `catatan_file_2`, `catatan_file_3`, `catatan_file_4`, `catatan_file_5`, `catatan_file_6`, `catatan_file_7`, `catatan_file_8`, `catatan_file_9`, `catatan_file_10`, `catatan_file_11`, `catatan_file_12`, `catatan_file_13`, `catatan_file_14`, `catatan_file_15`, `catatan_file_16`, `catatan_file_17`, `catatan_file_18`, `catatan_file_19`) VALUES
(1, 'marcel', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, 'marcel', '', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'marketing1', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', '', '', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Tidak', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(4, 'marcel', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'marcel', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 'marcel', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', 'Tidak', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, 'marcel', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', 'Ada', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(8, 'marcel', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(9, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 'marcel', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '1', '1', '1', '1', '2', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user',
  `kode_marketing` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`, `kode_marketing`) VALUES
(1, 'marcel', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm321'),
(2, 'admin123', 'admin123@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', 'm322'),
(3, 'Adam', 'testing@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm323'),
(4, 'Testing admin', 'testingadmin@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin', 'm324'),
(5, 'user', 'user@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm325'),
(6, 'marketing', 'marketing@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm326'),
(7, 'marketing1', 'marketing1@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm327'),
(8, 'marketing2', 'marketing2@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm328'),
(9, 'marketing3', 'marketing3@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm329'),
(10, 'marketing4', 'marketing4@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm330'),
(11, 'marketing5', 'marketing5@gmail.com', '202cb962ac59075b964b07152d234b70', 'user', 'm331'),
(12, 'superadmin', 'superadmin@gmail.com', '202cb962ac59075b964b07152d234b70', 'superadmin', 'super1');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_kredit_asnaktif`
--
ALTER TABLE `data_kredit_asnaktif`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `data_kredit_pensiun`
--
ALTER TABLE `data_kredit_pensiun`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `data_kredit_prapensiun`
--
ALTER TABLE `data_kredit_prapensiun`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form1`
--
ALTER TABLE `temp_form1`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form2`
--
ALTER TABLE `temp_form2`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form3`
--
ALTER TABLE `temp_form3`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form4`
--
ALTER TABLE `temp_form4`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `temp_form6`
--
ALTER TABLE `temp_form6`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indeks untuk tabel `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_kredit_asnaktif`
--
ALTER TABLE `data_kredit_asnaktif`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `data_kredit_pensiun`
--
ALTER TABLE `data_kredit_pensiun`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `data_kredit_prapensiun`
--
ALTER TABLE `data_kredit_prapensiun`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `temp_form1`
--
ALTER TABLE `temp_form1`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `temp_form2`
--
ALTER TABLE `temp_form2`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `temp_form3`
--
ALTER TABLE `temp_form3`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `temp_form4`
--
ALTER TABLE `temp_form4`
  MODIFY `id_pengajuan` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `temp_form6`
--
ALTER TABLE `temp_form6`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
