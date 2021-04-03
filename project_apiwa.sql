-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Waktu pembuatan: 03 Apr 2021 pada 15.38
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
-- Database: `project_apiwa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `counter`
--

CREATE TABLE `counter` (
  `id` int(11) NOT NULL,
  `code` varchar(20) DEFAULT NULL,
  `counter` int(11) DEFAULT '0',
  `bulan` varchar(20) DEFAULT NULL,
  `tahun` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `counter`
--

INSERT INTO `counter` (`id`, `code`, `counter`, `bulan`, `tahun`) VALUES
(1, 'TPL', 2, '03', '2021'),
(2, 'PLG', 27, '03', '2021');

-- --------------------------------------------------------

--
-- Struktur dari tabel `log_trx_wa`
--

CREATE TABLE `log_trx_wa` (
  `id` int(11) NOT NULL,
  `uid` varchar(100) DEFAULT NULL,
  `wa` varchar(20) DEFAULT NULL,
  `message` text,
  `response` text,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_level`
--

CREATE TABLE `ms_level` (
  `id` int(11) NOT NULL,
  `level` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_level`
--

INSERT INTO `ms_level` (`id`, `level`, `status`) VALUES
(1, 'Admin', 1),
(2, 'Member', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_paket`
--

CREATE TABLE `ms_paket` (
  `id` int(11) NOT NULL,
  `kode_paket` int(11) DEFAULT NULL,
  `paket` varchar(100) DEFAULT NULL,
  `max_send` int(11) DEFAULT NULL,
  `multi_device` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ms_template`
--

CREATE TABLE `ms_template` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `kode_template` varchar(50) DEFAULT NULL,
  `template` varchar(100) DEFAULT NULL,
  `insert_at` datetime DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `status` int(11) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ms_template`
--

INSERT INTO `ms_template` (`id`, `uid`, `kode_template`, `template`, `insert_at`, `user_insert`, `update_at`, `user_update`, `status`) VALUES
(1, '9sE7J0INXwRAOe6y0dCk54kAf0udhj', '000010321', 'Mranggen Karangawen', '2021-03-29 10:07:54', '2021-03-29 10:15:09', NULL, 'admin', 1),
(2, '9sE7J0INXwRAOe6y0dCk54kAf0udhj', '000020321', 'Mranggen Karangawen', '2021-03-29 10:12:49', 'admin', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_member`
--

CREATE TABLE `tb_member` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `kode_paket` varchar(40) DEFAULT NULL,
  `nama` varchar(70) DEFAULT NULL,
  `no_hp` varchar(60) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `foto_profil` varchar(50) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `user_insert` varchar(20) DEFAULT NULL,
  `insert_at` datetime DEFAULT NULL,
  `user_update` varchar(30) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `api_key` varchar(50) DEFAULT NULL,
  `max_wa` int(11) DEFAULT '100',
  `is_verified` int(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_member`
--

INSERT INTO `tb_member` (`id`, `uid`, `kode_paket`, `nama`, `no_hp`, `email`, `foto_profil`, `status`, `user_insert`, `insert_at`, `user_update`, `update_at`, `api_key`, `max_wa`, `is_verified`) VALUES
(1, '9sE7J0INXwRAOe6y0dCk54kAf0udhj', NULL, 'Muhammad Kenza Farqo', '02093284', NULL, NULL, 1, 'admin', '2021-03-29 09:31:20', NULL, NULL, NULL, 100, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_menu`
--

CREATE TABLE `tb_menu` (
  `id` int(20) NOT NULL,
  `label` varchar(50) DEFAULT '',
  `url` varchar(50) DEFAULT '',
  `fungsi` varchar(20) DEFAULT '',
  `method` varchar(20) DEFAULT '',
  `icon` varchar(30) DEFAULT '',
  `urutan` int(5) DEFAULT NULL,
  `keterangan` varchar(100) DEFAULT NULL,
  `parent` int(20) DEFAULT NULL,
  `level` int(5) DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_menu`
--

INSERT INTO `tb_menu` (`id`, `label`, `url`, `fungsi`, `method`, `icon`, `urutan`, `keterangan`, `parent`, `level`, `status`) VALUES
(1, 'Dashboard', 'main/index', 'main', 'index', 'fa-home', 1, NULL, 0, 2, 1),
(2, 'Template', 'master/template', 'master', 'template', 'fa-columns', 2, NULL, 0, 2, 1),
(3, 'Pelanggan', 'pelanggan/index', 'pelanggan', 'index', 'fa-users', 3, NULL, 0, 2, 1),
(4, 'Integrasi Api', 'docs/integrasi_api', 'docs', 'integrasi_wa', 'fa-plug', 5, NULL, 0, 2, 0),
(5, 'Upgrade', 'docs/upgrade', 'docs', 'upgrade', 'fa-refresh', 4, NULL, 0, 2, 0),
(6, 'Kirim WA', 'kirim/wa', 'kirim', 'wa', 'fa-share-square', 5, NULL, 0, 2, 1),
(9, 'Ubah Profil', 'profil/ubah_profil', 'profil', 'ubah_profil', '', 1, NULL, 11, 2, 0),
(10, 'Ubah Password', 'profil/ubah_password', 'profil', 'ubah_password', '', 2, NULL, 11, 2, 0),
(11, 'Profil', 'profil/index', 'profil', 'index', 'fa-user', 6, NULL, 0, 2, 0),
(12, 'Management User', 'user/index', 'user', 'index', 'fa-user', 6, NULL, 0, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_message`
--

CREATE TABLE `tb_message` (
  `id` int(11) NOT NULL,
  `uid` varchar(50) DEFAULT NULL,
  `nomor` varchar(50) DEFAULT NULL,
  `message` text,
  `flag` int(1) DEFAULT '1' COMMENT '1 = member / 2 = user',
  `insert_at` datetime DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pelanggan`
--

CREATE TABLE `tb_pelanggan` (
  `id` int(11) NOT NULL,
  `kode_template` varchar(20) DEFAULT NULL,
  `kode_pelanggan` varchar(30) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_hp` varchar(30) DEFAULT NULL,
  `alamat` text,
  `insert_at` datetime DEFAULT NULL,
  `user_insert` varchar(50) DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_pelanggan`
--

INSERT INTO `tb_pelanggan` (`id`, `kode_template`, `kode_pelanggan`, `nama`, `no_hp`, `alamat`, `insert_at`, `user_insert`, `user_update`, `update_at`, `status`) VALUES
(1, '000010321', '10321', 'Testingg', '012901091023', 'lasd alksdjalks akadasdadm,,', NULL, NULL, NULL, NULL, 1),
(2, '000010321', '000240321', 'Nur rohim', '089668714552', 'asdasd', NULL, NULL, NULL, NULL, 0),
(3, '000010321', '000250321', 'Kenza', '089668714552', 'asdasd', NULL, NULL, NULL, NULL, 0),
(4, '000010321', '000260321', 'Nur rohim', '089668714552', 'asdasd', NULL, NULL, NULL, NULL, 0),
(5, '000010321', '000270321', 'Kenza', '089668714552', 'asdasd', NULL, NULL, NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `uid` varchar(60) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `key` varchar(50) DEFAULT NULL,
  `no_hp` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `insert_at` datetime DEFAULT NULL,
  `user_insert` varchar(20) DEFAULT NULL,
  `update_at` datetime DEFAULT NULL,
  `user_update` varchar(20) DEFAULT NULL,
  `session` varchar(100) DEFAULT NULL,
  `post_login` varchar(50) DEFAULT NULL,
  `last_login` date DEFAULT NULL,
  `last_ip` varchar(50) DEFAULT NULL,
  `level` int(11) DEFAULT '1',
  `status` int(1) DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_user`
--

INSERT INTO `tb_user` (`id`, `uid`, `nama`, `username`, `password`, `key`, `no_hp`, `email`, `insert_at`, `user_insert`, `update_at`, `user_update`, `session`, `post_login`, `last_login`, `last_ip`, `level`, `status`) VALUES
(1, 'WPypYpvaYyGL0orWsb9CCOj9TPPSPx', 'admin', 'admin', '1ªà„IÖ¯7F]	¢ºªG', 'ohkW', NULL, NULL, NULL, NULL, NULL, NULL, '160d726f740077ae1b0d90014056c7c9', NULL, '2021-03-30', '::1', 1, 1),
(4, '9sE7J0INXwRAOe6y0dCk54kAf0udhj', 'Muhammad Kenza Farqo', 'kenza', 'ÕëUå7O‚-ñ‘O°Û', 'pmF6', '02093284', NULL, '2021-03-29 09:31:20', 'admin', '2021-03-29 09:32:45', 'admin', '31837b22743ea2a32b3b0a49a35c85c9', NULL, '2021-03-30', '::1', 2, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_authentication`
--

CREATE TABLE `users_authentication` (
  `id` int(20) NOT NULL,
  `user_id` varchar(60) DEFAULT '',
  `token` text,
  `expired_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `log_trx_wa`
--
ALTER TABLE `log_trx_wa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ms_level`
--
ALTER TABLE `ms_level`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ms_paket`
--
ALTER TABLE `ms_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `ms_template`
--
ALTER TABLE `ms_template`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_message`
--
ALTER TABLE `tb_message`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_idx` (`id`) USING BTREE;

--
-- Indeks untuk tabel `users_authentication`
--
ALTER TABLE `users_authentication`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `log_trx_wa`
--
ALTER TABLE `log_trx_wa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ms_level`
--
ALTER TABLE `ms_level`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `ms_paket`
--
ALTER TABLE `ms_paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ms_template`
--
ALTER TABLE `ms_template`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tb_member`
--
ALTER TABLE `tb_member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_menu`
--
ALTER TABLE `tb_menu`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `tb_message`
--
ALTER TABLE `tb_message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tb_pelanggan`
--
ALTER TABLE `tb_pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users_authentication`
--
ALTER TABLE `users_authentication`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
