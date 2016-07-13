-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 13 Jul 2016 pada 19.55
-- Versi Server: 10.1.8-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vocer`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `address`
--

CREATE TABLE `address` (
  `id` int(11) NOT NULL,
  `address` int(225) NOT NULL,
  `city` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchants`
--

CREATE TABLE `merchants` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hp` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `merchants`
--

INSERT INTO `merchants` (`id`, `name`, `address`, `hp`) VALUES
(15, 'Country Heritage Hotel', 'Jl. Nginden Intan Utara No. 7 Nginden Jangkungan, Sukolilo, Jawa Timur', '0315949494'),
(16, 'Pizza en Bier', 'Surabaya Town Square Level P No 25', '0315610222'),
(17, 'Jade Imperial Surabaya', 'Galaxy Mall Extension Lantai 3', '089672400820');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `hash` varchar(225) NOT NULL,
  `paid` int(1) NOT NULL,
  `user_id` int(10) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `hash`, `paid`, `user_id`, `total`, `created_at`, `updated_at`) VALUES
(1, '20161307063651', 1, 21, 345000, '2016-07-13 17:12:15', '2016-07-13 12:12:15'),
(2, '20161307071115', 1, 21, 230000, '2016-07-13 17:12:09', '2016-07-13 12:12:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders_products`
--

CREATE TABLE `orders_products` (
  `id` int(11) NOT NULL,
  `order_id` int(10) NOT NULL,
  `product_id` int(10) NOT NULL,
  `qty` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `orders_products`
--

INSERT INTO `orders_products` (`id`, `order_id`, `product_id`, `qty`) VALUES
(1, 1, 2, 1),
(2, 1, 5, 1),
(3, 1, 6, 2),
(4, 2, 5, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `evidence` varchar(225) NOT NULL,
  `date` date NOT NULL,
  `confirmed` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `name`, `evidence`, `date`, `confirmed`, `created_at`, `updated_at`) VALUES
(1, 1, 'Dicky Eka Satria', 'exp2.JPG', '2016-07-14', 1, '2016-07-13 17:12:15', '2016-07-13 12:12:15'),
(2, 2, 'demo', 'exp2.JPG', '2016-07-14', 1, '2016-07-13 17:12:09', '2016-07-13 12:12:09');

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `merchant_id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(225) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `merchant_id`, `title`, `description`, `price`, `image`, `stok`) VALUES
(1, 15, 'Promo Paket Makan Berdua " Nasi Kenduri " at Country Heritage Resort Hotel Surabaya.', 'Nasi Kenduri merupakan nasi campur yang terdiri dengan berbagai jenis sayuran, sambal, telur, ikan asin dan lain sebagainya. Nasi Kenduri ini hanya bisa di dapatkan apabila sedangan mengadakan syukuran namun kamu pecinta Nasi Kenduri jangan khawatir karena Country Heritage Hotel memberikan promo khusus buat kamu!!\r\n\r\nPelayanan yang bagus.\r\nHarga yang ekonomis.\r\nLokasi di Jl. Nginden Intan Utara No. 7.', 65000, 'deal_heritageresort_3576.jpg', 10),
(2, 15, 'Halal Bihalal at Country Heritage Resort Hotel Surabaya.', 'Bulan suci ramadhan telah kita lewati dengan penuh suka cita maka sambutlah Hari kemenangan dengan tali silaturrahmi bersama sanak saudara.\r\n\r\nAcara Halal Bihalal merupakan tradisi yang tidak pernah terlewatkan begitu saja, yuk rayakan di Country Heritage Hotel. Karena sedang ada promo All You Can Eat buat kamu.\r\n\r\nPelayanan yang bagus.\r\nLokasi di Jl. Nginden Intan Utara No. 7.', 65000, 'deal_thepavilion_3561.jpg', 20),
(3, 15, 'Special Promo Dine-in Package for 4 Person from Jade Imperial Surabaya.', '• Voucher seharga Rp. 230.000?,- nett untuk Paket Makan Berempat - 1 Sup + 3 Main Course + 1 Sayur. \r\nHarga Normal: Rp. 470.000,-\r\n\r\nPilihan Menu Jade Imperial Galaxy Mall :\r\nSup (pilih 1)\r\n- Sup Labu Aneka Seafood\r\n- Sup Bibir Ikan \r\n- Sup Asam Pedan ala Sichuan\r\n- Sup Tom Yum ala Jade Imperial\r\n\r\nMain Course (pilih 3)\r\n- Cumi-cumi Oven Garam\r\n- Cumi-cumi Goreng Mentega\r\n- Lumpia Seafood dengan Mayonaise\r\n- Udang Goreng Saos Mayonaise\r\n- Udang Goreng Gurih Mentega\r\n- Ayam Ca Cabe Kering\r\n- Tumis Ayam Kuan Tung\r\n- Sapo Tahu Seafood Ala Jade Imperial\r\n- Fillet Gurami Goreng Asam Manis\r\n- Fillet Gurami Goreng Saos Thailand\r\n- Muen Tahu ala Jia Xiang\r\n- Mapo Tahu ala Sichuan\r\n- Koloke\r\n\r\nSayur (pilih 1)\r\n- Buncis Goreng Gurih Oven Garam\r\n- Jamur Shimeji Oven Garam\r\n- Sapo Terong Pedas\r\n- Tumis Buncis Pedas', 230000, 'deal_heritageresort_3578.jpg', 20),
(4, 16, 'Get Hot Deals for Rivera Pizza / Omnio Pizza Promo From Pizza en Bier Surabaya.', 'Pizza merupakan makanan yang sangat begitu digemari oleh semua usia, mulai dari anak - anak hingga orang dewasa pastii uda tahu!! Makanan yang bahan utamanya tepung ini sangat banyak akan manfaatnya.\r\n\r\nNah, untuk itu Pizza en Bier hadir memerikan promo pizza yang dijamin gak bakal rugii deh! yuk buruan diorder vouchernya.\r\n\r\nMenggunakan tepung kualitas terbaik.\r\nSuasana tempat makan yang begitu nyaman.\r\nLokasi di Surabaya Town Square Level P No 25', 59000, 'deal_pizzaen_3548.jpg', 10),
(5, 17, 'Special Promo Dine-in Package for 4 Person from Jade Imperial Surabaya.', 'Hallo warga surabaya, Jade Imperial hadir kembali buat kamu yang suka berwisata kuliner. Makanan khas yang diolah oleh para chef profesional dengan bahan-bahan pilihan dan citarasa yang authentic\r\n\r\nPilihan menu yang sangat variatif dan dapat dipilih sesuai selera', 230000, 'deal_varnaculture_3559.jpg', 20),
(6, 17, 'Get Promo Remarkable 5 Choice of Favourite Dim Sum, Special Dine in for 6 Person from Jade Imperial Surabaya Kupang Indah', 'Hallo warga surabaya, Jade Imperial hadir kembali buat kamu yang suka berwisata kuliner. Makanan khas yang diolah oleh para chef profesional dengan bahan-bahan pilihan dengan citarasa khas Jade Imperial yang authentic.\r\n\r\nLahan parkir luas dengan tempat yang nyaman.\r\nCocok dinikmati saat makan bersama/acara keluarga.\r\nBerbagai paket yang dapat dipilih sesuai selera', 25000, 'deal_JadeImperial_3554.jpg', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(4, 'dicky', 'bgst@gmail.com', '123456'),
(7, 'aku iki dicky', 'email@gmail.com', 'rahasia'),
(11, 'ambon', 'amb@gmail.com', 'asukerek'),
(21, 'demo', 'demo@gmail.com', '$2y$10$myhzwkwNgjBoptxv.9i8TumMNzyvLXb/nwIpFbzLZh6YjOIeNd8TS'),
(22, 'Dicky', 'dicky@gmail.com', '$2y$10$mTwVBPjfZBCHtA8BRHUgS.c.MOtQHs6YNQB7DPOCrY.WqR3rJ7wm.'),
(23, 'admin', 'admin@gmail.com', '$2y$10$F3RcUocamv2ZbAUy5jAeIuDd4xpqM74i4j.BrFCTxu82ZsFKVilxy'),
(24, 'asu', 'asu@gmail.com', '$2y$10$vipCupNOMWQ6LVPXoOnWLO9rydZqkXLKGAF5ZYXALy7Ndib1H0Yn.'),
(25, 'fadil', 'fadil@gmail.com', '$2y$10$wWgKCH4GS7NIj9/dZcOQquYyG/4aHkIPq5ewzHKZZq0OMLnm0azli');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `merchants`
--
ALTER TABLE `merchants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hash` (`hash`);

--
-- Indexes for table `orders_products`
--
ALTER TABLE `orders_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `merchants`
--
ALTER TABLE `merchants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `orders_products`
--
ALTER TABLE `orders_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
