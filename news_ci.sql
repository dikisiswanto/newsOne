-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2018 pada 10.14
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `cat_title` varchar(300) NOT NULL,
  `cat_slug` varchar(300) NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `cat_slug`, `is_delete`) VALUES
(1, 'Warta Kota', 'warta-kota', 0),
(2, 'Teknologi', 'teknologi', 0),
(3, 'Fokus', 'fokus', 0),
(4, 'Entertainment', 'entertainment', 0),
(5, 'Breaking News', 'breaking-news', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `post_title` varchar(250) NOT NULL,
  `post_cat_id` int(11) NOT NULL,
  `post_content` text NOT NULL,
  `post_slug` varchar(300) NOT NULL,
  `created_at` datetime NOT NULL,
  `is_delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_cat_id`, `post_content`, `post_slug`, `created_at`, `is_delete`) VALUES
(1, 'Gojek-Grab Perang Tarif, Pengemudi Mati di Tengah-Tengah', 2, '<p>Menjelang Ramadan 2015, Go-Jek, aplikasi ride-sharing yang baru berumur sekitar enam bulan, meluncurkan program “Ceban Menjelang Ramadhan”. Melalui program itu, pengguna Go-Ride dapat diantarkan ke tujuannya masing-masing —tak lebih dari 25 kilometer— hanya dengan ongkos Rp10 ribu. Strategi promosi tersebut sukses. </p><p><br></p><p>\"Saking banyaknya orang yang menggunakan promo itu, Go-Jek meledak jadi layanan aplikasi no. 1 di Jakarta. Kami ikut kaget,” ujar pendiri Go-Jek, Nadiem Makarim. </p><p><br></p><p>Secara umum, komponen tarif Go-Ride terdiri dari tarif dasar dan tarif per kilometer. Tarif dasar adalah tarif rata berbatas jarak tertentu. Pada 2015, jarak 0-6 kilometer dihargai Rp15 ribu. Kini, berdasarkan ujicoba aplikasi Go-Ride untuk bepergian dari kawasan Kemang Timur Raya ke berbagai variasi lokasi, tarif 0-5 kilometer dipatok Rp8 ribu. Sementara tarif per kilometer ialah tarif tambahan yang diberlakukan jika pengguna melebihi ketentuan jarak dari tarif dasar.</p><p><br></p><p>Naik-turun tarif Go-Jek merentang jauh hingga awal kemunculan aplikasi yang kini bertitel Unicorn. Tiga bulan selepas promo “Ceban Menjelang Ramadhan” digulirkan, Go-Ride mengubah tarifnya. Tepat pada September 2015, Go-Ride memberlakukan tarif sebesar Rp15 ribu untuk 6 kilometer pertama di jam-jam sibuk. Lebih dari 6 kilometer, pengguna dibebankan biaya sebesar Rp2.500 tiap tambahan kilometer. Di luar jam-jam sibuk, pengguna Go-Ride kena tarif rata sebesar Rp15 ribu untuk jarak maksimal 25 kilometer.</p><p><br></p><p>Di awal kemunculannya, Go-Ride mematok tarif per kilometer sebesar Rp4.000. Namun, seiring waktu, tarif Go-Ride per kilometer itu terus mengalami perubahan. Pada 2018, tarif per kilometer Go-Ride mengalami beberapa kali perubahan. Pada Juni 2018, tarif per kilometernya dipatok Rp2.200 hingga Rp3.300. Sejak November, tarifnya Rp1.200 per kilometer.</p><p><br></p>', 'gojek-grab-perang-tarif-pengemudi-mati-di-tengah-tengah', '2018-12-15 12:07:16', 0),
(4, 'Gojek-Grab Perang Tarif, Pengemudi Mati di Tengah-Tengah', 2, '<p>Menjelang Ramadan 2015, Go-Jek, aplikasi ride-sharing yang baru berumur sekitar enam bulan, meluncurkan program “Ceban Menjelang Ramadhan”. Melalui program itu, pengguna Go-Ride dapat diantarkan ke tujuannya masing-masing —tak lebih dari 25 kilometer— hanya dengan ongkos Rp10 ribu. Strategi promosi tersebut sukses. </p><p><br></p><p>\"Saking banyaknya orang yang menggunakan promo itu, Go-Jek meledak jadi layanan aplikasi no. 1 di Jakarta. Kami ikut kaget,” ujar pendiri Go-Jek, Nadiem Makarim. </p><p><br></p><p>Secara umum, komponen tarif Go-Ride terdiri dari tarif dasar dan tarif per kilometer. Tarif dasar adalah tarif rata berbatas jarak tertentu. Pada 2015, jarak 0-6 kilometer dihargai Rp15 ribu. Kini, berdasarkan ujicoba aplikasi Go-Ride untuk bepergian dari kawasan Kemang Timur Raya ke berbagai variasi lokasi, tarif 0-5 kilometer dipatok Rp8 ribu. Sementara tarif per kilometer ialah tarif tambahan yang diberlakukan jika pengguna melebihi ketentuan jarak dari tarif dasar.</p><p><br></p><p>Naik-turun tarif Go-Jek merentang jauh hingga awal kemunculan aplikasi yang kini bertitel Unicorn. Tiga bulan selepas promo “Ceban Menjelang Ramadhan” digulirkan, Go-Ride mengubah tarifnya. Tepat pada September 2015, Go-Ride memberlakukan tarif sebesar Rp15 ribu untuk 6 kilometer pertama di jam-jam sibuk. Lebih dari 6 kilometer, pengguna dibebankan biaya sebesar Rp2.500 tiap tambahan kilometer. Di luar jam-jam sibuk, pengguna Go-Ride kena tarif rata sebesar Rp15 ribu untuk jarak maksimal 25 kilometer.</p><p><br></p><p>Di awal kemunculannya, Go-Ride mematok tarif per kilometer sebesar Rp4.000. Namun, seiring waktu, tarif Go-Ride per kilometer itu terus mengalami perubahan. Pada 2018, tarif per kilometer Go-Ride mengalami beberapa kali perubahan. Pada Juni 2018, tarif per kilometernya dipatok Rp2.200 hingga Rp3.300. Sejak November, tarifnya Rp1.200 per kilometer.</p><p><br></p>', 'gojek-grab-perang-tarif-pengemudi-mati-di-tengah-tengah', '2018-12-15 13:07:37', 1),
(5, 'Google, Raksasa Teknologi dari Negeri Paman Sam', 2, '<p>Google adalah salah satu perusahaan multinasional yang berfokus pada pengembangan teknologi untuk kebutuhan bisnis dan korporasi. </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo odit voluptates non at sunt molestias doloremque praesentium dolore sapiente tempore, possimus, quis tenetur accusamus. Deserunt dolore soluta eum architecto blanditiis.</p>', 'google-raksasa-teknologi-dari-negeri-paman-sam', '2018-12-15 13:08:32', 0),
(6, 'Sample Post 2', 1, '<p>Just for sample</p>', 'sample-post-2', '2018-12-15 13:10:20', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(150) NOT NULL,
  `full_name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`) VALUES
(1, 'administrator', '$2y$10$zAi8hRalzyb.TrFLNCVs1.p/jU2eFATOldpWK2SFyAYg8aylF2Yqm', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
