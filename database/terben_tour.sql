-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 18 Mei 2020 pada 10.35
-- Versi Server: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `terben_tour`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_hint` varchar(255) NOT NULL,
  `is_active` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `email`, `nama_admin`, `password`, `password_hint`, `is_active`) VALUES
(1, 'admin', 'admin@admin.com', 'Admin Terben Tour', '$2y$10$BBiqN0SR.PCIDl3gJPZ3v.YFty9uYBiR6PV6jMqQYGp583B3a44ei', 'admin', 1),
(3, 'idham', 'idham@admin.com', 'Mohammad Idham', '$2y$10$XWyC4vgGe49biXFkqk71E.XWXldzwT7RC23HRgg84.ByeZdLnouC2', '5461213', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `checkout`
--

CREATE TABLE `checkout` (
  `checkout_id` varchar(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `google_id` int(11) DEFAULT NULL,
  `paket_id` varchar(20) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `nama_pengirim` varchar(50) NOT NULL,
  `img_transfer` varchar(50) NOT NULL,
  `total_harga` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `is_pay` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `checkout`
--

INSERT INTO `checkout` (`checkout_id`, `user_id`, `google_id`, `paket_id`, `bank`, `nama_pengirim`, `img_transfer`, `total_harga`, `email`, `is_pay`) VALUES
('5ec24231e7eca', NULL, 1, '5ebfd6979bbea', 'BRI', 'Mohammad Idham Fachrurrozi', 'Mohammad_5ec24231e7eca.jpg', 1375388, 'king.idham@gmail.com', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `kategori_id` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`kategori_id`, `nama_kategori`) VALUES
(1, 'Exclusive'),
(2, 'Business'),
(3, 'Economic');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `paket_id` varchar(20) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `img_paket` varchar(100) DEFAULT NULL,
  `judul` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL,
  `max_person` int(10) NOT NULL,
  `durasi` varchar(50) NOT NULL,
  `harga` int(15) NOT NULL,
  `fas_bedroom` int(15) NOT NULL,
  `fas_bathroom` int(15) NOT NULL,
  `fas_tv` int(15) NOT NULL,
  `fas_inet` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`paket_id`, `admin_id`, `kategori_id`, `img_paket`, `judul`, `deskripsi`, `max_person`, `durasi`, `harga`, `fas_bedroom`, `fas_bathroom`, `fas_tv`, `fas_inet`) VALUES
('5ebfbeb0021b7', 1, 2, 'admin_5ebfbeb0021b7.jpg', 'Bali kuy !', 'Nikmati libur istimewa dengan orang yang paling istimewa di Bali. Sudah termasuk akomodasi Hotel bintang 4 dan transportasi berupa mobil honda Brio.', 2, '3', 500000, 1, 1, 1, 0),
('5ebfcf7b83ab0', 1, 3, 'admin_5ebfcf7b83ab0.png', '3D 2N in Nusa Dua', ' Termasuk penginapan mewah dan mobil ', 2, '2', 750000, 1, 1, 1, 10),
('5ebfd6979bbea', 1, 1, 'admin_5ebfd6979bbea.jpeg', '3D 2N in Bali', '  Sekilas pikiran menerawang dan sebuah lukisan elok pun muncul terbayang. Lautan lepas dengan pulau-pulau karang yang tersusun rapih menyambut beberapa ekor lumba-lumba yang berloncatan ceria. Langit yang biru berpadu dengan indahnya ombak menyisir setia   ', 4, '3', 1250000, 1, 1, 1, 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `temp_transaksi`
--

CREATE TABLE `temp_transaksi` (
  `temp_id` varchar(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `google_id` int(11) DEFAULT NULL,
  `paket_id` varchar(20) NOT NULL,
  `harga` int(15) NOT NULL,
  `tgl_pesan` varchar(50) NOT NULL,
  `tgl_berangkat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `testimoni_id` varchar(20) NOT NULL,
  `checkout_id` varchar(20) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `google_id` int(11) DEFAULT NULL,
  `paket_id` varchar(20) NOT NULL,
  `testimoni` text NOT NULL,
  `rating` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `password_hint` varchar(255) NOT NULL,
  `img_profile` varchar(255) DEFAULT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `username`, `email`, `password`, `password_hint`, `img_profile`, `is_active`, `date_created`) VALUES
(13, 'Mohammad', 'Idham', 'idhamozi', 'muh_idham85@yahoo.com', '$2y$10$coZXfZvpnepoB1dPGQs48u0LbAUaFYb8kgwRKhdJi0qvSzQ7eMx5W', '12345', 'profile_idhamozi.JPEG', 1, 2020);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_token`
--

CREATE TABLE `users_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_google`
--

CREATE TABLE `user_google` (
  `google_id` int(11) NOT NULL,
  `login_oauth_uid` varchar(100) CHARACTER SET utf8 NOT NULL,
  `first_name` varchar(250) NOT NULL,
  `last_name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `img_profile` varchar(250) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_google`
--

INSERT INTO `user_google` (`google_id`, `login_oauth_uid`, `first_name`, `last_name`, `email`, `img_profile`, `created_at`, `updated_at`) VALUES
(1, '114781404881733521580', 'Mohammad', 'Idham Fachrurrozi', 'king.idham@gmail.com', 'https://lh3.googleusercontent.com/a-/AOh14GjrH75sKbZS8ngA-FJCiKraCKa5UeF2YXfVPYlCcg', 2020, 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`checkout_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `google_id` (`google_id`),
  ADD KEY `paket_id` (`paket_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`kategori_id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`paket_id`),
  ADD KEY `kategori_id` (`kategori_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `temp_transaksi`
--
ALTER TABLE `temp_transaksi`
  ADD PRIMARY KEY (`temp_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `google_id` (`google_id`),
  ADD KEY `paket_id` (`paket_id`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`testimoni_id`),
  ADD KEY `checkout_id` (`checkout_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `google_id` (`google_id`),
  ADD KEY `paket_id` (`paket_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_token`
--
ALTER TABLE `users_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_google`
--
ALTER TABLE `user_google`
  ADD PRIMARY KEY (`google_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `kategori_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users_token`
--
ALTER TABLE `users_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_google`
--
ALTER TABLE `user_google`
  MODIFY `google_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`google_id`) REFERENCES `user_google` (`google_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `checkout_ibfk_3` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`paket_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD CONSTRAINT `paket_ibfk_1` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`kategori_id`),
  ADD CONSTRAINT `paket_ibfk_2` FOREIGN KEY (`admin_id`) REFERENCES `admin` (`admin_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `temp_transaksi`
--
ALTER TABLE `temp_transaksi`
  ADD CONSTRAINT `temp_transaksi_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`),
  ADD CONSTRAINT `temp_transaksi_ibfk_2` FOREIGN KEY (`google_id`) REFERENCES `user_google` (`google_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `temp_transaksi_ibfk_3` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`paket_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD CONSTRAINT `testimoni_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_3` FOREIGN KEY (`google_id`) REFERENCES `user_google` (`google_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_4` FOREIGN KEY (`paket_id`) REFERENCES `paket` (`paket_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `testimoni_ibfk_5` FOREIGN KEY (`checkout_id`) REFERENCES `checkout` (`checkout_id`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
