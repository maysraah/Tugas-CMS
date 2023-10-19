-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2023 at 07:35 PM
-- Server version: 10.9.2-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cms_news`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `healths`
--

CREATE TABLE `healths` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `healths`
--

INSERT INTO `healths` (`id`, `header`, `author`, `image`, `description`) VALUES
(3, '5 Minuman yang Bisa Meningkatkan Imun Tubuh, Sehat Saat Cuaca Ekstrem', 'Maysarah', 'post-images/unotdWZX7FiaVMmKzEFv7KMYn1n0uzX3ztWrE8C1.jpg', 'Saat cuaca panas ekstrem kita perlu upaya ekstra untuk menjaga daya tahan tubuh agar tetap sehat. Anda bisa mengonsumsi minuman berikut ini untuk meningkatkan imun tubuh di kala cuaca panas dan musim kemarau. Banyak cara untuk bisa meningkatkan sistem kekebalan tubuh. Selain dengan makanan bergizi seimbang, beberapa minuman juga disebut bisa menjaga sistem imunitas tubuh agar berfungsi tidak mudah sakit.  Mengutip Eating Well, minuman yang kaya nutrisi seperti protein, vitamin A, C, dan E, serta zinc dibutuhkan untuk membuat sistem kekebalan tubuh berfungsi dengan baik. Melansir berbagai sumber, berikut ini minuman yang bisa meningkatkan imun tubuh...'),
(5, 'Singapura Jadi \'Negara Panjang Umur\', Apa Rahasianya?', 'Iif Alifah', 'post-images/dGdLJNZaNKcu0L0VUXptHYOXy9vyEOVzEKFyg1e2.jpg', 'Jakarta, CNN Indonesia -- Singapura baru-baru ini dinobatkan sebagai salah satu bagian dari \'Blue Zone\'. Masyarakat Singapura dinilai berumur panjang dan menjalani hidup yang sehat. Namun, tak seperti wilayah Blue Zone lainnya, di mana cara hidup tradisional berkontribusi pada umur panjang masyarakatnya. Singapura adalah Blue Zone yang \'direkayasa\'.  Dalam serial Netflix terbaru berjudul Live to 100: Secrets of the Blue Zones, Singapura termasuk di antara enam tempat yang mayoritas masyarakatnya memiliki umur panjang.');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `politicals`
--

CREATE TABLE `politicals` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `politicals`
--

INSERT INTO `politicals` (`id`, `header`, `author`, `image`, `description`) VALUES
(1, 'Ma\'ruf Amin: Jangan Benturkan Agama dan Kebangsaan', 'CNN Indonesia', 'post-images/nYrfBzWvRTzpzzPv8rA3llNhWy1MsFR9sLcmWha7.jpg', 'Medan, CNN Indonesia -- Wakil Presiden RI (Wapres) Ma\'ruf Amin mengingatkan keberagaman harus dijaga dan dihormati oleh seluruh rakyat Indonesia. Ia pun mengingatkan agar tak goyah pada pihak yang berupaya membenturkan Keagamaan dengan Kebangsaan. Hal itu dikatakan Maruf saat menghadiri Ikrar Merajut Keberagaman Nusantara dari Sumatera Utara, Kamis (19/10).  Ia pun berpesan kepada salah satu organisasi Muslim terbesar di Sumut, Jam\'iyah Batak Muslim Indonesia (JBMI), untuk terus berperan proaktif menjadi penjaga terdepan nilai-nilai luhur Pancasila, NKRI, serta persatuan dan kesatuan nasional.');

-- --------------------------------------------------------

--
-- Table structure for table `sports`
--

CREATE TABLE `sports` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sports`
--

INSERT INTO `sports` (`id`, `header`, `author`, `image`, `description`) VALUES
(1, 'Hasil Denmark Open 2023: Febri/Tiwi ke Perempatfinal', 'Randy Prasatya', 'post-images/mBvvXHMKp9HaGBMAfy8jNY2WGlVWUCnEr6dZskWG.jpg', 'Odense - Febriana Dwipuji Kusuma/Amalia Cahaya Pratiwi mengalahkan Rui Hirokami/Yuna Kato di 16 besar Denmark Open 2023. Febri/Tiwi cukup dapat perlawanan di fase ini. Bertanding di Arena Fyn, Odense, Kamis (19/10/2023) malam WIB, Febri/Tiwi tidak gampang-gampang amat meraih kemenangan. Satu-satunya ganda putri Indonesia yang tersisa di ajang ini menang dengan skor 21-17, 21-17.  Febri/Tiwi memulai pertandingan dengan sangat sip. Pasangan tersebut mampu lari kencang dengan memimpin 7-0 atas Rui/Yuna.');

-- --------------------------------------------------------

--
-- Table structure for table `travels`
--

CREATE TABLE `travels` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `travels`
--

INSERT INTO `travels` (`id`, `header`, `author`, `image`, `description`) VALUES
(1, 'Pilihan Resor untuk \"Meeting\" di Tengah Alam Ubud, Tarif Promo Mulai Rp 900.000', 'Nabilla Tashandra', 'post-images/vlszGuxjM2B9pmyunbsJBFCjnKjJELbUGpRA4FOb.jpg', 'KOMPAS.com - The Westin Resort & Spa Ubud Bali menawarkan promo akhir tahun untuk para tamu yang mencari tempat menggelar pertemuan atau tempat Meetings, Incentives, Conferences, and Exhibitions (MICE) di tengah suasana alam Ubud, Bali. Terdapat ballroom berkapasitas 100 tamu dengan pengaturan theater class dan ruang pertemuan intim yang dapat menampung 25 tamu dalam pengaturan classroom dengan pemandangan hutan. Promo akhir tahun ini dibanderol mulai dari Rp 900.000++/pax untuk periode terbatas hingga akhir tahun. \"Dengan lokasi strategis, The Westin Resort & Spa Ubud Bali memberikan akses mudah ke beberapa destinasi ikonik Ubud, seperti Monkey Forest, Ubud Central, Campuhan Ridge Walk, Tegalalang Rice Fields, dan banyak lagi.\" \"Tamu dapat menjelajahi kekayaan budaya dan alam Ubud sambil menikmati kenyamanan resor The Westin Resort & Spa Ubud Bali,\" ujar Marketing Communicaton Manager at Westin Resort & SPA Ubud, Nadya Chendana dalam keterangan tertulis yang diterima Kompas.com, Kamis (19/10/2023).');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$4xqK.Cbl/XpUi.wSw9hdpuhCJMJRqsibpmvKBYN/wePcbTm1s7VTy', NULL, '2023-10-18 04:19:38', '2023-10-18 04:19:38', 1),
(2, 'user', 'user@gmail.com', NULL, '$2y$10$mPRl9y2likQ9j/B/kgfXiuGUNP2FcUEpJn0glDRlKiMuy91LYD4AC', NULL, '2023-10-18 04:19:38', '2023-10-18 04:19:38', 0);

-- --------------------------------------------------------

--
-- Table structure for table `worlds`
--

CREATE TABLE `worlds` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `worlds`
--

INSERT INTO `worlds` (`id`, `header`, `author`, `image`, `description`) VALUES
(1, 'Ukraina Desak Pasukan Rusia di Selatan, Maju 400 Meter di Zaporizhzhia', 'Yudono Yanuar', 'post-images/JoSqebfoDNanDHqoRsRb1q7Olq7VwCQvmwgj1xgR.jpg', 'TEMPO.CO, Jakarta - Pasukan Ukraina mencapai kemajuan dalam melawan pasukan Rusia di wilayah selatan, namun menghadapi serangan baru Rusia di sekitar kota Avdiivka di wilayah timur, kata militer Ukraina pada Kamis, 19 Oktober 2023.  Dalam informasi terkini mengenai serangan balasan Kyiv yang telah berlangsung lebih dari empat bulan di selatan dan timur, juru bicara militer Oleksandr Stupun melaporkan kemajuan sejauh 400 meter ke barat daya Verbove di wilayah Zaporizhzhia. Verbove adalah sebuah desa beberapa kilometer di sebelah timur Robotyne, sebuah desa yang direbut kembali oleh Ukraina bulan lalu ketika mencoba untuk bergerak ke selatan menuju Laut Azov. Stupun mengatakan kepada televisi Ukraina bahwa pergerakan ke selatan masih sulit karena ladang ranjau Rusia dan pertahanan yang dijaga ketat.'),
(2, 'Kepala Polisi Israel Ancam Warganya yang Dukung Palestina Dikirim ke Jalur Gaza', 'Dewi Rina Cahyani', 'post-images/NsKYdBUlSNPAeHzU9uzyfQP7QEM7Sc1qONhYD0KZ.jpg', 'TEMPO.CO, Jakarta - Kepala polisi Israel, Kobi Shabtai, mengatakan tidak akan ada toleransi sama sekali terhadap warganya yang menyatakan dukungan untuk Hamas di Jalur Gaza. Dia mengancam akan mengirim demonstran anti-perang ke daerah kantong Palestina yang terkepung yang telah dibombardir Israel setiap hari selama hampir dua minggu. Komentar Shabtai muncul dalam video yang diunggah di saluran TikTok polisi Israel pada Selasa, 17 Oktober 2023. Media Israel mengulas komentar Shabtai pada Rabu setelah polisi membubarkan unjuk rasa di Haifa untuk mendukung Gaza. Polisi telah menangkap enam orang. “Siapapun yang ingin menjadi warga negara Israel, selamat datang,” kata Shabtai. “Siapa pun yang ingin mengidentifikasi diri dengan Gaza dipersilakan. Saya akan memasukkannya ke dalam bus menuju ke sana sekarang.”   Dalam video pendek itu Shabtai mengatakan, “tidak ada toleransi terhadap hasutan apa pun. Tidak akan ada izin untuk melakukan protes.\"');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `healths`
--
ALTER TABLE `healths`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `politicals`
--
ALTER TABLE `politicals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sports`
--
ALTER TABLE `sports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travels`
--
ALTER TABLE `travels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `worlds`
--
ALTER TABLE `worlds`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `healths`
--
ALTER TABLE `healths`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `politicals`
--
ALTER TABLE `politicals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sports`
--
ALTER TABLE `sports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `travels`
--
ALTER TABLE `travels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `worlds`
--
ALTER TABLE `worlds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
