-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jan 2022 pada 14.45
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

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
-- Struktur dari tabel `beranda`
--

CREATE TABLE `beranda` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `beranda`
--

INSERT INTO `beranda` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'nama_sekolah', 'SMK NEGERI 1 BUKATEJA', '2022-01-20 07:37:38', '2022-01-20 07:37:38'),
(2, 'slogan', 'SMK Negeri 1 Bukateja merupakan salah satu Sekolah Menengah Kejuruan di Kecamatan Bukateja, Kabupaten Purbalingga, Jawa Tengah. SMK ini merupakan SMK rujukan yang menawakan 7 program kompetensi keahlian.', '2022-01-20 07:38:10', '2022-01-20 07:38:10'),
(3, 'visi', 'Menjadikan SMK yang memiliki kompetensi, berkualitas, berdaya saing, berwawasan lingkungan dan berakhlak mulia.', '2022-01-20 12:57:12', '2022-01-20 12:57:12'),
(4, 'misi', '	<ul style=\"text-align: justify;\"> <li> Melaksanakan pendidikan dan latihan secara optimal dalam iklim pembelajaran yang kondusif berorientasi pada kompetensi pendidikan nasional. </li> <li> Menyiapkan tenaga terampil, professional sesuai kompetensi keahlian dan mampu bersaing di dunia kerja. </li> <li> Mengembangkan kultur sekolah sesuai dengan norma, kaidah, dan nilai budaya Indonesia dan berwawasan lingkungan sekolah. </li> </ul>', '2022-01-20 12:57:58', '2022-01-20 12:57:58');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `gurudankaryawans`
--

CREATE TABLE `gurudankaryawans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sambutan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `gurudankaryawans`
--

INSERT INTO `gurudankaryawans` (`id`, `nama`, `jabatan`, `foto`, `sambutan`, `created_at`, `updated_at`) VALUES
(1, 'Rifqi Alfinnur', 'kepala_sekolah ', '1642653261_rifqiAlfinnur.png', 'Musuh kejahatan kekasih kebenaran. Merdeka!', '2022-01-19 21:34:21', '2022-01-19 21:34:21'),
(2, 'Fauziyah', 'wakil_kepala_sekolah ', '1642653614_Ya.jpg', NULL, '2022-01-19 21:40:14', '2022-01-19 21:40:14'),
(3, 'Petter Parker Ramadhan', 'kepala_tata_usaha ', '1642653966_profil1.jpeg', NULL, '2022-01-19 21:46:06', '2022-01-19 21:46:06'),
(4, 'Tony Stark Sunarman', 'guru Olahraga', '1642654130_profil2.jpg', NULL, '2022-01-19 21:48:50', '2022-01-19 21:48:50'),
(5, 'Bambang Suparman', 'guru Tata Boga', '1642654161_profil2.jpg', NULL, '2022-01-19 21:49:21', '2022-01-19 21:49:21'),
(6, 'Bejo', 'karyawan ', '1642654423_man.png', NULL, '2022-01-19 21:53:43', '2022-01-19 21:53:43'),
(7, 'Iqbal Ramadhan', 'karyawan', '1642655438_man.png', NULL, '2022-01-19 21:55:50', '2022-01-19 22:14:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `informasi`
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
-- Dumping data untuk tabel `informasi`
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
(15, 'Pengambilan Gambar Sinematografi', 'pengambilan-gambar-sinematografi', 'ns6oPW2eNph522xJnWC0zuco56ctsyHubVvaxrqR.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper ipsum eget vehicula mollis. Donec pharetra eu sem a ornare. Nulla facilisi. Nunc tristique, neque bibendum fringilla laoreet, quam elit ultrices erat, ut lobortis ante metus nec dolor. Cras elementum suscipit augue quis malesuada. Quisque lacus libero, tristique id suscipit id, congue ut nibh. Vivamus auctor ornare posuere. Morbi non scelerisque tortor, non volutpat ante. Vivamus vitae semper leo, sed mattis lacus. Donec et turpis quis dolor viverra pulvinar non ut lectus.\r\n\r\nEtiam ultrices sollicitudin diam, a congue odio cursus id. Quisque bibendum metus at placerat interdum. Pellentesque feugiat mattis ligula, molestie accumsan lacus congue sit amet. Proin sodales scelerisque neque, nec laoreet augue ultricies ac. Nulla facilisi. Maecenas commodo, nunc quis interdum auctor, lorem velit consectetur libero, sed sodales felis tellus in tortor. Mauris ullamcorper diam porttitor ultrices finibus.', '2021-12-30 20:29:07', '2021-12-30 20:29:07'),
(16, 'Juara 1 Artikel Tingkat Provinsi', 'juara-1-artikel-tingkat-provinsi', 'ObLYkykiEdfWchpZ0xv995i8L0qNCIxGg8NimiuF.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis ullamcorper ipsum eget vehicula mollis. Donec pharetra eu sem a ornare. Nulla facilisi. Nunc tristique, neque bibendum fringilla laoreet, quam elit ultrices erat, ut lobortis ante metus nec dolor. Cras elementum suscipit augue quis malesuada. Quisque lacus libero, tristique id suscipit id, congue ut nibh. Vivamus auctor ornare posuere. Morbi non scelerisque tortor, non volutpat ante. Vivamus vitae semper leo, sed mattis lacus. Donec et turpis quis dolor viverra pulvinar non ut lectus.\r\n\r\nEtiam ultrices sollicitudin diam, a congue odio cursus id. Quisque bibendum metus at placerat interdum. Pellentesque feugiat mattis ligula, molestie accumsan lacus congue sit amet. Proin sodales scelerisque neque, nec laoreet augue ultricies ac. Nulla facilisi. Maecenas commodo, nunc quis interdum auctor, lorem velit consectetur libero, sed sodales felis tellus in tortor. Mauris ullamcorper diam porttitor ultrices finibus.', '2021-12-30 20:29:30', '2021-12-30 20:29:30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_12_23_085402_informasi', 2),
(6, '2021_12_31_063010_create_prestasis_table', 3),
(7, '2022_01_19_055816_create_gurudankaryawans_table', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
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
-- Struktur dari tabel `prestasis`
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
-- Dumping data untuk tabel `prestasis`
--

INSERT INTO `prestasis` (`id`, `judul`, `gambar`, `isi`, `created_at`, `updated_at`) VALUES
(1, 'Juara 1 Artikel Provinsi Jawa Tengah', 'yku9E4Bch2WqZZXVwM6Kv0btGnvsAkk7KJBHEUik.jpeg', 'Juara 1 Artikel Perlombaan Tingkat Provinsi Jawa Tengah SMK Negeri 1 Bukateja', '2021-12-30 23:52:18', '2021-12-31 00:07:21');

-- --------------------------------------------------------

--
-- Struktur dari tabel `profilsekolah`
--

CREATE TABLE `profilsekolah` (
  `id` int(11) NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `profilsekolah`
--

INSERT INTO `profilsekolah` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'sejarah_singkat', 'SMK Negeri 1 Bukateja berdiri pada bulan maret pada tahun 2004 berdasar pada Keputusan Bupati Purbalingga No. 36 Tahun 2004 Tentang penyelenggaraan SMK dan Program SMK Kelas Jauh di Purbalingga dengan Program Keahlian Teknik Perkayuan, Kemudian dikeluarkan Peraturan Bupati N0. 24 Tahun 2007 pada tanggal 21 April 2007 tentang pembentukan Sekolah Menengah Kejuruan Negeri 1 Bukateja dengan perubahan dan Penambahan Program Keahlian Teknik Gambar Bangunan dan Tata Busana. Pada Tahun 2008 pada bulan April dibuka kembali Program Keahlian Teknik Mekanik Otomotif.', '2022-01-20 07:22:54', '2022-01-20 05:28:18'),
(2, 'visi', 'Menjadikan SMK yang memiliki kompetensi, berkualitas, berdaya saing, berwawasan lingkungan dan berakhlak mulia.', '2022-01-20 07:23:33', '2022-01-20 07:23:33'),
(3, 'misi', '<ul style=\"text-align: justify;\">\r\n                    <li>\r\n                        Melaksanakan pendidikan dan latihan secara optimal dalam iklim pembelajaran yang kondusif\r\n                        berorientasi pada kompetensi pendidikan nasional.\r\n                    </li>\r\n                    <li>\r\n                        Menyiapkan tenaga terampil, professional sesuai kompetensi keahlian dan mampu bersaing di dunia\r\n                        kerja.\r\n                    </li>\r\n                    <li>\r\n                        Mengembangkan kultur sekolah sesuai dengan norma, kaidah, dan nilai budaya Indonesia dan\r\n                        berwawasan lingkungan sekolah.\r\n                    </li>\r\n                </ul>', '2022-01-20 07:24:16', '2022-01-20 07:24:16'),
(4, 'struktur_organisasi', 'struktur-organisasi.png', '2022-01-20 07:24:47', '2022-01-20 07:24:47'),
(5, 'peta_sekolah', '<iframe\r\n            src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15825.39092970486!2d109.42302!3d-7.426716!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x578f1a3d93c545f6!2sSMK%20Negeri%201%20Bukateja!5e0!3m2!1sid!2sid!4v1637673631032!5m2!1sid!2sid\"\r\n            width=\"100%\" height=\"500px\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\"></iframe>', '2022-01-20 07:25:12', '2022-01-20 07:25:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `testimoni`
--

CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `posisi` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `teks` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `testimoni`
--

INSERT INTO `testimoni` (`id`, `nama`, `posisi`, `foto`, `teks`, `created_at`, `updated_at`) VALUES
(1, 'Fauziyah', 'Kuliah di Universitas Telkom', 'Ya.jpg', 'Saya menemukan banyak pengalaman disini. Guru-guru yang menyenangkan, teman-teman yang seru, fasilitas lab yang lengkap.', '2022-01-20 07:41:47', '2022-01-20 07:41:47');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `nowa`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin User', '089137253896', 'admin@admin.com', NULL, '$2b$10$Qjq4Uli3kWMhsPQkATD8h.ZH3pohGeUpwemBBkbuNSSxziF6vd8hS', NULL, NULL, NULL),
(3, 'Teguh Rijanandi', '089655541804', 'teguhrijanandi02@gmail.com', NULL, '$2y$10$F8e4wfQvdjmxYoc/ILGBE.iGTDZvapEgVoIQlt4h28i/Fmr/ykhee', NULL, '2022-01-09 06:18:56', '2022-01-09 06:27:12');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `beranda`
--
ALTER TABLE `beranda`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `gurudankaryawans`
--
ALTER TABLE `gurudankaryawans`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profilsekolah`
--
ALTER TABLE `profilsekolah`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `beranda`
--
ALTER TABLE `beranda`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `gurudankaryawans`
--
ALTER TABLE `gurudankaryawans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prestasis`
--
ALTER TABLE `prestasis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `profilsekolah`
--
ALTER TABLE `profilsekolah`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
