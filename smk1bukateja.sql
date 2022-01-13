-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 09, 2022 at 02:29 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smk1bukateja`
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
-- Table structure for table `informasi`
--

CREATE TABLE `informasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `slug`, `gambar`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Artikel satu', 'artikel-satu', 'IGOpzphgWgRQsNmLDKQishvhKfg49IHzXGE0TesS.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum quis odio sit amet lorem finibus lobortis. Duis accumsan vitae felis et maximus. Suspendisse vehicula, massa eget imperdiet sollicitudin, massa sapien tristique libero, a efficitur lacus elit eget elit. Aliquam tortor tellus, condimentum eget mattis sit amet, blandit a nunc. Vestibulum congue ac diam quis vulputate. Morbi dapibus purus turpis, quis tempus tortor pharetra et. Sed ac ornare nisi, eu iaculis quam. Aliquam vel bibendum nunc. Nulla luctus, est in eleifend mollis, odio urna fringilla velit, sed cursus sapien dolor non odio. Donec varius aliquam lectus. Donec congue sagittis nunc sed lobortis. Cras varius interdum imperdiet.\r\n\r\nInteger efficitur accumsan est, sit amet porta sem auctor eu. Sed at pretium metus. Donec nibh nisi, dictum in molestie in, volutpat sit amet odio. Pellentesque vestibulum eros quis urna convallis lobortis. Curabitur et bibendum lacus. Vivamus in lacus aliquet, porttitor tellus ut, tincidunt quam. Pellentesque finibus, diam eget placerat rhoncus, diam lectus sodales dolor, et tempor massa nulla at mauris. Pellentesque at dignissim nisi. Nam felis tellus, dictum at orci eget, ornare consequat tellus.', '2021-12-30 19:59:27', '2021-12-30 19:59:27'),
(2, 'Odit iure vel culpa in tenetur nostrum.', 'odit-iure-vel-culpa-in-tenetur-nostrum', 'gerbang sekolah.jpg', 'Omnis aspernatur corporis officiis cum autem molestiae. Reiciendis ullam qui qui dicta magni dolor ipsum. Id placeat eos sint fugiat maiores quibusdam quisquam. Perspiciatis harum hic odit veniam officiis. Recusandae nihil molestias eos omnis omnis.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(3, 'Minima aut dolores nam aut.', 'minima-aut-dolores-nam-aut', 'gerbang sekolah.jpg', 'Optio nostrum laboriosam labore sit et nobis. Dolor placeat esse temporibus eveniet est. Et optio inventore rerum eaque. Accusamus quaerat dolorem dolores quidem reprehenderit consequatur quia.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(4, 'Sint consequatur voluptas hic non.', 'sint-consequatur-voluptas-hic-non', 'gerbang sekolah.jpg', 'Vitae praesentium illum est perspiciatis exercitationem. Fuga harum minima ut voluptas ratione debitis. Ipsam fugiat est esse ex. Odit accusamus natus omnis facilis voluptas possimus ut tempora. Sed dolorem placeat aut ab aut eligendi. Totam nulla modi facilis.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(5, 'Autem aliquam et dicta sequi perferendis.', 'autem-aliquam-et-dicta-sequi-perferendis', 'gerbang sekolah.jpg', 'Sit impedit esse illum quo est minus. Repellat neque iste animi ratione tenetur laboriosam ea soluta. Odit sed qui dolor. Excepturi reprehenderit quia sed quia qui. Natus dolores omnis aut ipsa et. Id sapiente voluptas sint dolor expedita.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(6, 'Aut itaque consequatur accusantium eum consequatur.', 'aut-itaque-consequatur-accusantium-eum-consequatur', 'gerbang sekolah.jpg', 'Cupiditate numquam voluptas non eos dolorem voluptatem consequatur. Ullam quo facilis corporis atque nemo voluptas dolore nemo. Rerum molestiae fugit similique quo quia quas laboriosam ex. Beatae ad vel blanditiis fuga est. Non odit eum eveniet eos sequi sint explicabo. Rerum distinctio molestiae sint totam illo et omnis.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(7, 'Aut amet ea odio maiores sapiente.', 'aut-amet-ea-odio-maiores-sapiente', 'gerbang sekolah.jpg', 'Esse accusantium quia nostrum. Asperiores doloremque fugiat perspiciatis illo est itaque enim. Nulla repellat et qui amet. Autem et rerum minima ut doloremque consequatur quis.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(8, 'Ab doloribus neque illo ut.', 'ab-doloribus-neque-illo-ut', 'gerbang sekolah.jpg', 'Laudantium dolorem maiores sit aspernatur minus consequatur. Culpa enim illum natus modi voluptatem at. Voluptatem sunt eligendi tempore deleniti adipisci dolorem sint. Explicabo dolorem dolores et maiores ut. Voluptas tempora quia quas aspernatur fuga earum. Quia molestias inventore quae sed amet nihil nostrum. Praesentium eius in distinctio assumenda necessitatibus minima.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(9, 'Similique omnis autem dicta nulla.', 'similique-omnis-autem-dicta-nulla', 'gerbang sekolah.jpg', 'Quia error delectus aperiam impedit sunt sit. Eaque laudantium dolor deserunt corporis tempore doloribus. Velit unde velit minima nostrum laboriosam ex eius. Dolores neque voluptatem in voluptates odio eligendi culpa. Voluptatum molestias at ratione reiciendis. Voluptatem repellendus aliquam atque saepe non nam numquam.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(10, 'Dolore ratione dolorem ut itaque.', 'dolore-ratione-dolorem-ut-itaque', 'gerbang sekolah.jpg', 'Omnis qui sit at ea consequatur ipsa. Numquam fuga voluptatibus voluptatum. Qui beatae incidunt optio molestiae. Quod est nemo fugit beatae et harum cumque. Id velit consequuntur sapiente quia autem placeat. Dolores vel et quisquam nemo. Ratione nihil id vel sapiente odit est.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(11, 'Totam vero aperiam ut.', 'totam-vero-aperiam-ut', 'gerbang sekolah.jpg', 'Consequatur aspernatur eaque officia distinctio ut. Deserunt quos consectetur optio. Optio qui temporibus quae dicta laborum quo vel. In soluta commodi doloremque dolorem. Suscipit libero voluptatum sit amet quibusdam qui. Distinctio atque sunt dolore assumenda et ad.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(12, 'Artikel Voluptatibus iste aut iste mollitia corporis et.', 'artikel-voluptatibus-iste-aut-iste-mollitia-corporis-et', 'gerbang sekolah.jpg', 'Aliquam excepturi delectus neque nulla ipsam deleniti. Hic rem vel quia. Et nobis eius ipsa est nam non. Qui nostrum omnis rerum ut quisquam repellendus aut. Labore asperiores saepe est facere. Voluptate corrupti inventore excepturi hic.', '2021-12-30 20:12:13', '2021-12-30 20:26:19'),
(13, 'Est officia deserunt delectus ut.', 'est-officia-deserunt-delectus-ut', 'gerbang sekolah.jpg', 'Exercitationem asperiores dolorem iusto quis quibusdam nisi et. Quidem ab quis et doloremque deserunt est. Eos aut ducimus non eveniet ullam dicta. Deleniti rerum beatae corporis harum. Aut accusantium modi minus adipisci.', '2021-12-30 20:12:13', '2021-12-30 20:12:13'),
(15, 'Pengambilan Gambar Sinematografi', 'pengambilan-gambar-sinematografi', 'ns6oPW2eNph522xJnWC0zuco56ctsyHubVvaxrqR.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper ipsum eget vehicula mollis. Donec pharetra eu sem a ornare. Nulla facilisi. Nunc tristique, neque bibendum fringilla laoreet, quam elit ultrices erat, ut lobortis ante metus nec dolor. Cras elementum suscipit augue quis malesuada. Quisque lacus libero, tristique id suscipit id, congue ut nibh. Vivamus auctor ornare posuere. Morbi non scelerisque tortor, non volutpat ante. Vivamus vitae semper leo, sed mattis lacus. Donec et turpis quis dolor viverra pulvinar non ut lectus.\r\n\r\nEtiam ultrices sollicitudin diam, a congue odio cursus id. Quisque bibendum metus at placerat interdum. Pellentesque feugiat mattis ligula, molestie accumsan lacus congue sit amet. Proin sodales scelerisque neque, nec laoreet augue ultricies ac. Nulla facilisi. Maecenas commodo, nunc quis interdum auctor, lorem velit consectetur libero, sed sodales felis tellus in tortor. Mauris ullamcorper diam porttitor ultrices finibus.', '2021-12-30 20:29:07', '2021-12-30 20:29:07'),
(16, 'Juara 1 Artikel Tingkat Provinsi', 'juara-1-artikel-tingkat-provinsi', 'ObLYkykiEdfWchpZ0xv995i8L0qNCIxGg8NimiuF.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper ipsum eget vehicula mollis. Donec pharetra eu sem a ornare. Nulla facilisi. Nunc tristique, neque bibendum fringilla laoreet, quam elit ultrices erat, ut lobortis ante metus nec dolor. Cras elementum suscipit augue quis malesuada. Quisque lacus libero, tristique id suscipit id, congue ut nibh. Vivamus auctor ornare posuere. Morbi non scelerisque tortor, non volutpat ante. Vivamus vitae semper leo, sed mattis lacus. Donec et turpis quis dolor viverra pulvinar non ut lectus.\r\n\r\nEtiam ultrices sollicitudin diam, a congue odio cursus id. Quisque bibendum metus at placerat interdum. Pellentesque feugiat mattis ligula, molestie accumsan lacus congue sit amet. Proin sodales scelerisque neque, nec laoreet augue ultricies ac. Nulla facilisi. Maecenas commodo, nunc quis interdum auctor, lorem velit consectetur libero, sed sodales felis tellus in tortor. Mauris ullamcorper diam porttitor ultrices finibus.', '2021-12-30 20:29:30', '2021-12-30 20:29:30');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_23_085402_informasi', 2),
(6, '2021_12_31_063010_create_prestasis_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prestasis`
--

CREATE TABLE `prestasis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prestasis`
--

INSERT INTO `prestasis` (`id`, `judul`, `gambar`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Juara 1 Artikel Provinsi Jawa Tengah', 'yku9E4Bch2WqZZXVwM6Kv0btGnvsAkk7KJBHEUik.jpeg', 'Juara 1 Artikel Perlombaan Tingkat Provinsi Jawa Tengah SMK Negeri 1 Bukateja', '2021-12-30 23:52:18', '2021-12-31 00:07:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nowa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `nowa`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', '089137253896', 'admin@admin.com', NULL, '$2b$10$Qjq4Uli3kWMhsPQkATD8h.ZH3pohGeUpwemBBkbuNSSxziF6vd8hS', NULL, NULL, NULL),
(3, 'Teguh Rijanandi', '089655541804', 'teguhrijanandi02@gmail.com', NULL, '$2y$10$F8e4wfQvdjmxYoc/ILGBE.iGTDZvapEgVoIQlt4h28i/Fmr/ykhee', NULL, '2022-01-09 06:18:56', '2022-01-09 06:27:12');

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
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
