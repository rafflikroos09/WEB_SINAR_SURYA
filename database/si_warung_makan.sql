-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Apr 2024 pada 05.36
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `si_warung_makan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_pemesanan`
--

CREATE TABLE `detail_pemesanan` (
  `id_pemesanan_detail` int(10) UNSIGNED NOT NULL,
  `id_pemesanan` int(10) UNSIGNED NOT NULL,
  `id_menu` int(10) UNSIGNED NOT NULL,
  `kuantitas` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `detail_pemesanan`
--

INSERT INTO `detail_pemesanan` (`id_pemesanan_detail`, `id_pemesanan`, `id_menu`, `kuantitas`) VALUES
(6, 9, 5, 4),
(7, 10, 6, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_menu`
--

CREATE TABLE `kategori_menu` (
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kategori_menu`
--

INSERT INTO `kategori_menu` (`id_kategori`, `kategori`) VALUES
(1, 'Gas'),
(2, 'Air Mineral');

-- --------------------------------------------------------

--
-- Struktur dari tabel `menu_list`
--

CREATE TABLE `menu_list` (
  `id_menu` int(10) UNSIGNED NOT NULL,
  `menu` text NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `harga` varchar(200) NOT NULL,
  `id_kategori` int(10) UNSIGNED NOT NULL,
  `img` text NOT NULL,
  `status` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `menu_list`
--

INSERT INTO `menu_list` (`id_menu`, `menu`, `deskripsi`, `harga`, `id_kategori`, `img`, `status`) VALUES
(5, 'Gas 3Kg', 'Isi berat 3 Kg', '19000', 1, 'images/frontend/menu/ZRwrdhL3w8QtRuPA5ZFKNi08PBhJ64yHHAVQ76sJ.jpg', 0),
(6, 'Gas 5,5 Kg', 'Isi Berat 5.5 Kg', '90000', 1, 'images/frontend/menu/pIKtNx27YmXcIDYuz4k0lTUj6rDOxdUI2LdIdXll.jpg', 0),
(7, 'Gas 12 Kg', 'Isi Berat 12 Kg', '190000', 1, 'images/frontend/menu/bNEQ4dvWuPwO2Kyuwonhlv9NlCHlu8eGcCvpZsVr.jpg', 0),
(8, 'Gas 50 Kg', 'Isi Berat 50 Kg', '950000', 1, 'images/frontend/menu/NTO5AfKCmX1w5CRXTC82Fvt1kBaYzvnWcgsUna8P.jpg', 0),
(9, 'Aqua Galon', 'isi bersih 19 Liter', '19000', 2, 'images/frontend/menu/iL9ztzh7K7zqEv7iUx30PkghBHgQcFBmJpOZIsII.jpg', 0),
(10, 'Lemineral Galon', 'Isi Bersih 15 Liter', '17000', 2, 'images/frontend/menu/tWq9Cejm6OHqWQkA7T2KT87gtK517E9Yf35M9Zd9.png', 0),
(11, 'Aqua 1,5 liter', 'Isi 12 Botol', '42000', 2, 'images/frontend/menu/tg9yupb1UT42mKD5DkB1DCLP1jUij6RA9neHAs4z.jpg', 0),
(12, 'Aqua 600ml', 'Isi 24 Botol', '36000', 2, 'images/frontend/menu/Mztwhl3BUS1sAuyNDXJmFrlGetDoLYr4pCX7UsBB.jpg', 0),
(13, 'Aqua 330ml', 'Isi 24 Botol', '32000', 2, 'images/frontend/menu/WMa88aFxCuZUSWgpPY3AkCg0wLXJNmTR4yWf1CzW.jpg', 0),
(14, 'Aqua Gelas', 'Isi 48 Gelas', '22000', 2, 'images/frontend/menu/kWpKkrexOpKRKEKHt79GZt64ia1pgyrdrLPl7HzX.webp', 0),
(15, 'Lemineral 600 ml', 'Isi 24 botol', '28000', 2, 'images/frontend/menu/sAwXtJup3ygp9upk1FmA3jgfAB3iL6x9YlgPYKx0.jpg', 0),
(16, 'Lemineral 330 ml', 'Isi 24 Botol', '24000', 2, 'images/frontend/menu/GqmeWwlqXdowkhFiHul1vV9fWBFuZpyl1Ix8Xf95.jpg', 0),
(17, 'Vit Gelas', 'Isi 48 Gelas', '20000', 2, 'images/frontend/menu/dPWQuggKV3yKzMO9563XtbPBY19JGjS8rYWWidys.jpg', 0),
(18, 'Sui Gelas', 'Isi 48 Botol', '17000', 2, 'images/frontend/menu/UXr9KmpLOUlPlMZ56k60haHaEWudnxEazLJaUKAe.jpg', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama`, `email`) VALUES
(144843543, 'zidar', 'zidar@gmail.com'),
(718997893, 'agung', 'agung2@gmail.com'),
(755143511, 'nisa', 'nisa@gmail.com'),
(760705783, 'aaa', 'a2aa@gmail.com'),
(805033729, 'agung', 'agung@gmail.com'),
(894987293, 'alwi', 'alwi@gmail.com'),
(959410826, 'rafli', 'aaa@gmail.com');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(10) UNSIGNED NOT NULL,
  `id_pemesanan` int(10) UNSIGNED NOT NULL,
  `total_bayar` varchar(255) NOT NULL,
  `tgl_pembayaran` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pemesanan`, `total_bayar`, `tgl_pembayaran`) VALUES
(2, 2, '60000', '2022-09-25 16:06:10'),
(3, 4, '36000', '2022-09-30 14:25:06'),
(4, 3, '24000', '2023-01-07 14:26:22'),
(5, 7, '24000', '2023-01-12 02:28:29'),
(6, 9, '76000', '2023-12-01 13:22:59'),
(7, 10, '90000', '2024-04-02 04:34:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` int(10) UNSIGNED NOT NULL,
  `id_pelanggan` int(10) UNSIGNED NOT NULL,
  `tgl_pemesanan` timestamp NOT NULL DEFAULT current_timestamp(),
  `id_status` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id_pelanggan`, `tgl_pemesanan`, `id_status`) VALUES
(2, 959410826, '2022-09-25 16:05:47', 6),
(3, 959410826, '2022-10-06 05:23:27', 6),
(4, 805033729, '2022-09-30 14:22:59', 6),
(5, 760705783, '2022-10-08 08:06:09', 1),
(6, 718997893, '2023-01-07 14:35:18', 1),
(7, 755143511, '2023-01-12 02:27:45', 6),
(8, 755143511, '2023-01-13 08:41:06', 1),
(9, 144843543, '2023-12-01 13:19:02', 6),
(10, 144843543, '2024-04-02 04:34:00', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `status_list`
--

CREATE TABLE `status_list` (
  `id_status` int(10) UNSIGNED NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `status_list`
--

INSERT INTO `status_list` (`id_status`, `status`) VALUES
(1, 'Dibuat'),
(2, 'Dipesan'),
(3, 'Menunggu Pembayaran'),
(4, 'Menunggu Antrian'),
(5, 'Diproses'),
(6, 'Selesai'),
(7, 'Dibatalkan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id_user` int(10) UNSIGNED NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `nama` text NOT NULL,
  `level` int(1) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`, `level`, `created_at`, `updated_at`) VALUES
(1, 'superadmin', '$2y$12$gwgOpMdE8iEjlKrVoSUA5OUTgJif9zjfK7R8.i9/4rkUJSCfmnmdy', 'Assyifa Sayyidina Ali', 0, '2021-06-02 13:54:31', '2022-09-25 15:43:20'),
(2, 'Tiaraa', '$2y$10$c3XRRbrRKC57sDrGRhGFQeLhAW1//kVJ3nqmKVM6Opm38jH/pE3Va', 'raa', 1, '2022-09-25 15:48:08', '2022-09-25 15:48:08'),
(3, 'agung', '$2y$10$eeCxYF.x9ZtZKmuyYus93eqH8fEuawP45TmHmISojjsTFWPwqq9D.', 'agung', 1, '2023-01-07 14:25:14', '2023-01-07 14:25:14'),
(4, 'zidar', '$2y$10$5.NWbHtkhg/ZD9FXaaKm3.tLYsYwz3DFqyNPSCM77ObpTVdLcWG4K', 'zidar', 1, '2023-01-12 02:25:57', '2023-01-12 02:25:57'),
(5, 'rafli', '$2y$10$4FdTf1HxD2mxUw9T4FobienceChbZ8mWu6CuqYyN2gzAaTxSm.cQm', 'raffli', 1, '2023-12-01 13:20:07', '2023-12-01 13:20:07');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan_detail`),
  ADD KEY `warung_detail_pemesanan_id_pemesanan_foreign` (`id_pemesanan`),
  ADD KEY `warung_detail_pemesanan_id_menu_foreign` (`id_menu`);

--
-- Indeks untuk tabel `kategori_menu`
--
ALTER TABLE `kategori_menu`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indeks untuk tabel `menu_list`
--
ALTER TABLE `menu_list`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `warung_menu_list_id_kategori_foreign` (`id_kategori`);

--
-- Indeks untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- Indeks untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `warung_bayar_id_pemesanan_foreign` (`id_pemesanan`);

--
-- Indeks untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `warung_pemesanan_id_pelanggan_foreign` (`id_pelanggan`),
  ADD KEY `warung_pemesanan_id_status_foreign` (`id_status`);

--
-- Indeks untuk tabel `status_list`
--
ALTER TABLE `status_list`
  ADD PRIMARY KEY (`id_status`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  MODIFY `id_pemesanan_detail` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `kategori_menu`
--
ALTER TABLE `kategori_menu`
  MODIFY `id_kategori` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `menu_list`
--
ALTER TABLE `menu_list`
  MODIFY `id_menu` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id_pelanggan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=959410827;

--
-- AUTO_INCREMENT untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  MODIFY `id_pemesanan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `status_list`
--
ALTER TABLE `status_list`
  MODIFY `id_status` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `detail_pemesanan`
--
ALTER TABLE `detail_pemesanan`
  ADD CONSTRAINT `warung_detail_pemesanan_id_menu_foreign` FOREIGN KEY (`id_menu`) REFERENCES `menu_list` (`id_menu`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warung_detail_pemesanan_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `menu_list`
--
ALTER TABLE `menu_list`
  ADD CONSTRAINT `warung_menu_list_id_kategori_foreign` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_menu` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `warung_bayar_id_pemesanan_foreign` FOREIGN KEY (`id_pemesanan`) REFERENCES `pemesanan` (`id_pemesanan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD CONSTRAINT `warung_pemesanan_id_pelanggan_foreign` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `warung_pemesanan_id_status_foreign` FOREIGN KEY (`id_status`) REFERENCES `status_list` (`id_status`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
