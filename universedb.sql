-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2019 pada 14.05
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `universedb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `alamat-pembeli`
--

CREATE TABLE `alamat-pembeli` (
  `id-alamat-pembeli` int(11) NOT NULL,
  `provinsi-pembeli` varchar(20) NOT NULL,
  `kab-pembeli` varchar(20) NOT NULL,
  `kec-pembeli` varchar(20) NOT NULL,
  `kode-pos-pembeli` varchar(5) NOT NULL,
  `keterangan-alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jeniskelamin`
--

CREATE TABLE `jeniskelamin` (
  `idJenisKelamin` int(11) NOT NULL,
  `jenisKelamin` varchar(15) NOT NULL,
  `kelas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jeniskelamin`
--

INSERT INTO `jeniskelamin` (`idJenisKelamin`, `jenisKelamin`, `kelas`) VALUES
(1, 'Laki - Laki', 'fa-mars'),
(2, 'Perempuan', 'fa-venus');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `idKategoriBaju` int(11) NOT NULL,
  `idJenisKelamin` int(11) NOT NULL,
  `kategoriBaju` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`idKategoriBaju`, `idJenisKelamin`, `kategoriBaju`) VALUES
(36, 1, 'Kemeja'),
(51, 1, 'Kaos'),
(52, 2, 'Kaos'),
(53, 2, 'Kemeja');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(40) NOT NULL,
  `email` varchar(128) NOT NULL,
  `alamat` varchar(128) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `id-alamat-pembeli` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `produk`
--

CREATE TABLE `produk` (
  `idBaju` int(11) NOT NULL,
  `namaBaju` varchar(30) NOT NULL,
  `idUkuran` int(11) NOT NULL,
  `idWarna` int(11) NOT NULL,
  `idKategori` int(11) NOT NULL,
  `hargaBaju` int(11) NOT NULL,
  `stokBaju` int(11) NOT NULL,
  `gambarBaju` varchar(30) NOT NULL,
  `deskripsiBaju` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `produk`
--

INSERT INTO `produk` (`idBaju`, `namaBaju`, `idUkuran`, `idWarna`, `idKategori`, `hargaBaju`, `stokBaju`, `gambarBaju`, `deskripsiBaju`) VALUES
(1, 'Traveller Geographic', 3, 1, 36, 80000, 200, '4.png', 'Baju dengan gambar Traveller dari National Geographic'),
(2, 'Off Road 4x4', 3, 1, 36, 90000, 0, '1.png', 'Baju dengan gambar Off Road 4x4'),
(3, 'Professional Photographer', 3, 1, 36, 80000, 0, '3.jpg', 'Baju dengan gambar Professional Photographer'),
(4, 'Kaos Monster Face (SB2TU)', 3, 6, 51, 96000, 3, '219103_l.JPG', 'Kaos O-Neck Unisex, Cotton Combed 24s, kualitas premium standar Distro Bandung.\r\nGambar disablon menggunakan teknologi Direct To Garment (DTG) terbaru.\r\nPesanan dikirim antara 1-3 hari setelah pembayaran diterima.\r\nPengiriman cepat ke seluruh daerah di Indonesia lewat JNE atau PT.Pos.'),
(5, 'Becky Loose Shirt White', 2, 1, 36, 249000, 4, '279214_becky-loose-shirt-white', 'Tampil gaya dengan mengenakan atasan kemeja lengan panjang ini! Memiliki model simpel. Padankan dengan celana panjang slim fit dan loafers favoritmu!'),
(6, 'Kaos Screaming Panda (SB8D)', 3, 6, 51, 99000, 2, '17885_l.JPG', 'Kaos O-Neck Unisex, Cotton Combed 24s, kualitas premium standar Distro Bandung.\r\nGambar disablon menggunakan teknologi Direct To Garment (DTG) terbaru.\r\nPesanan dikirim antara 1-3 hari setelah pembayaran diterima.\r\nPengiriman cepat ke seluruh daerah di Indonesia lewat JNE atau PT.Pos.'),
(7, 'Alev Twotone Shirt Black', 2, 6, 36, 179000, 3, '278657_alev-twotone-shirt-blac', 'Miliki atasan dengan motif menarik yang cocok dipadankan dengan celana slim fit serta chungky heels dan tas favoritmu! '),
(8, 'Kaos A Good Day (SBH4Q)', 2, 1, 51, 95000, 5, '3834009_l.JPG', 'Kaos O-Neck Unisex, Cotton Combed 24s, kualitas premium standar Distro Bandung.\r\nGambar disablon menggunakan teknologi Direct To Garment (DTG) terbaru.\r\nPesanan dikirim antara 1-3 hari setelah pembayaran diterima.\r\nPengiriman cepat ke seluruh daerah di Indonesia lewat JNE atau PT.Pos.'),
(9, 'Kaos Japan Gate (SB3ER)', 4, 1, 51, 95000, 3, '3834009_l.JPG', 'Kaos O-Neck Unisex, Cotton Combed 24s, kualitas premium standar Distro Bandung.\r\nGambar disablon menggunakan teknologi Direct To Garment (DTG) terbaru.\r\nPesanan dikirim antara 1-3 hari setelah pembayaran diterima.\r\nPengiriman cepat ke seluruh daerah di Indonesia lewat JNE atau PT.Pos'),
(10, 'Aliona Checkered Wool Outer Sh', 1, 6, 36, 209000, 1, '278640_aliona-checkered-wool-o', 'Tampil stylish dengan luaran yang memiliki motif menarik. Padankan dengan dalaman tank top serta celana slim fit dan'),
(11, 'Kaos Cat Eyes (SB9M)', 3, 6, 51, 96000, 2, '20099_l.JPG', 'Kaos O-Neck Unisex, Cotton Combed 24s, kualitas premium standar Distro Bandung.\r\nGambar disablon menggunakan teknologi Direct To Garment (DTG) terbaru.\r\nPesanan dikirim antara 1-3 hari setelah pembayaran diterima.\r\nPengiriman cepat ke seluruh daerah di Indonesia lewat JNE atau PT.Pos.'),
(12, 'Tally Cropped Shirt White', 1, 1, 36, 179000, 4, '277592_tally-cropped-shirt-whi', 'Atasan kemeja lengan pendek untuk tampilan casual chic kamu! Memiliki motif prints dengan detail kancing. Padankan dengan celana panjang slim fit dan loafers favoritmu!'),
(13, 'Sasha Jaquard Pants Cream', 2, 1, 52, 219000, 5, '276820_sasha-jaquard-pants-cre', 'Tampil chic dengan mengenakan celana panjang ini! Memiliki model simpel dari bahan jaquard. Padankan dengan atasan tanpa lengan dan heels favoritmu!'),
(14, 'Marla Collar Shirt White', 1, 1, 51, 179000, 3, '277013_marla-collar-shirt-whit', 'Tampil cantik dengan atasan ini! Padankan dengan celana palazzo serta heels dan sling bag!'),
(15, 'Kaos Riding My Bike (SB5A2)', 4, 1, 51, 95000, 4, '1134096_l.JPG', 'Kaos O-Neck Unisex, Cotton Combed 24s, kualitas premium standar Distro Bandung.\r\nGambar disablon menggunakan teknologi Direct To Garment (DTG) terbaru.\r\nPesanan dikirim antara 1-3 hari setelah pembayaran diterima.\r\nPengiriman cepat ke seluruh daerah di Indonesia lewat JNE atau PT.Pos.'),
(16, 'Stacy Button Pants Olive', 2, 1, 51, 209000, 4, '277013_marla-collar-shirt-whit', 'Stacy Button Pants Olive\r\nTampil chic dengan mengenakan celana 7/8 ini! Memiliki model simpel dengan detail menarik. Padankan dengan atasan crop dan strap sandal favoritmu!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_detail_transaksi`
--

CREATE TABLE `tbl_detail_transaksi` (
  `id` int(10) NOT NULL,
  `id_transaksi` int(10) NOT NULL,
  `id_produk` int(10) NOT NULL,
  `qty` varchar(5) NOT NULL,
  `harga` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_detail_transaksi`
--

INSERT INTO `tbl_detail_transaksi` (`id`, `id_transaksi`, `id_produk`, `qty`, `harga`) VALUES
(1, 0, 2, '1', 90000),
(2, 0, 2, '1', 90000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pembeli`
--

CREATE TABLE `tbl_pembeli` (
  `id` int(10) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `telpon` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pembeli`
--

INSERT INTO `tbl_pembeli` (`id`, `nama`, `email`, `alamat`, `telpon`) VALUES
(1, 'awdaw', 'ridwanbader54@gmail.comrwa', 'jl.kaum rt05/  rw07 kec.cililin kab.bandung barat ', '7516851'),
(2, 'awdaw', 'ridwanbader54@gmail.com', 'jl.kaum', '7516851');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE `tbl_transaksi` (
  `id` int(10) NOT NULL,
  `tanggal_transaksi` date NOT NULL,
  `pembeli` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `tanggal_transaksi`, `pembeli`) VALUES
(1, '2019-12-25', 0),
(2, '2019-12-25', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi-baju`
--

CREATE TABLE `transaksi-baju` (
  `id_transaksi` int(11) NOT NULL,
  `id_baju` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `total_harga` int(11) NOT NULL,
  `tanggal_transaksi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ukuran`
--

CREATE TABLE `ukuran` (
  `idUkuran` int(11) NOT NULL,
  `ukuranBaju` varchar(10) NOT NULL,
  `lebarBaju` varchar(3) NOT NULL,
  `panjangBaju` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ukuran`
--

INSERT INTO `ukuran` (`idUkuran`, `ukuranBaju`, `lebarBaju`, `panjangBaju`) VALUES
(1, 'S', '46', '65'),
(2, 'M', '48', '67'),
(3, 'L', '50', '69'),
(4, 'XL', '52', '71');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `is_active`, `date_created`) VALUES
(5, 'Ichlasul Al', 'm.ichal7749@mail.unpas.ac.id', 'default.jpg', '$2y$10$F4Q1mGAAG0R.LwoBzXn2Zek9zOQxE3WC8Ef2GjAxZDrmrfhmAIGmi', 1, 1574256946),
(6, 'Zikri Alhaq', 'zikriAl@gmail.com', 'default.jpg', '$2y$10$7CeuYa9uIncr1hOBkyl/pOx7HUhCr0ZQr8Xv1Lh0MY56PUluUG3Lu', 1, 1574260973),
(7, 'Adam Alfarizi', 'adamalfal@mail.unpas.ac.id', 'default.png', '$2y$10$9N/PmKE5lSJdzd/CY5fnd.e1a4cGU7CwKFhtDxouecJoP41cccRcS', 1, 1576351221),
(8, 'Muhammad Sidiq', 'sidiq@gmail.com', 'default.png', '$2y$10$i7yGnrI9n7RIBj4ylQ/AH.cLOJl2LY/kFUVx89PmGHeFAug0.kY2u', 1, 1576386271),
(9, 'a', 'sidiqmuhamad99@yahoo.com', 'kartunama.png', '$2y$10$CHIxKYj3VauxT1.2j3IND.ozEvWMONManvLAEq3JQGbN5G/wFeUDS', 1, 1577345654);

-- --------------------------------------------------------

--
-- Struktur dari tabel `warna`
--

CREATE TABLE `warna` (
  `idWarnaBaju` int(11) NOT NULL,
  `warnaBaju` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `warna`
--

INSERT INTO `warna` (`idWarnaBaju`, `warnaBaju`) VALUES
(1, 'White'),
(6, 'Black');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `alamat-pembeli`
--
ALTER TABLE `alamat-pembeli`
  ADD PRIMARY KEY (`id-alamat-pembeli`);

--
-- Indeks untuk tabel `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  ADD PRIMARY KEY (`idJenisKelamin`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idKategoriBaju`),
  ADD KEY `idJenisKelamin` (`idJenisKelamin`);

--
-- Indeks untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`),
  ADD KEY `id-alamat-pembeli` (`id-alamat-pembeli`);

--
-- Indeks untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idBaju`),
  ADD KEY `id-ukuran` (`idUkuran`),
  ADD KEY `id-kategori` (`idKategori`),
  ADD KEY `id-kategori_2` (`idKategori`),
  ADD KEY `id-warna` (`idWarna`);

--
-- Indeks untuk tabel `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaksi-baju`
--
ALTER TABLE `transaksi-baju`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id-baju` (`id_baju`),
  ADD KEY `id-pembeli` (`id_pembeli`);

--
-- Indeks untuk tabel `ukuran`
--
ALTER TABLE `ukuran`
  ADD PRIMARY KEY (`idUkuran`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `warna`
--
ALTER TABLE `warna`
  ADD PRIMARY KEY (`idWarnaBaju`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `alamat-pembeli`
--
ALTER TABLE `alamat-pembeli`
  MODIFY `id-alamat-pembeli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jeniskelamin`
--
ALTER TABLE `jeniskelamin`
  MODIFY `idJenisKelamin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idKategoriBaju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `produk`
--
ALTER TABLE `produk`
  MODIFY `idBaju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `tbl_detail_transaksi`
--
ALTER TABLE `tbl_detail_transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_pembeli`
--
ALTER TABLE `tbl_pembeli`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `transaksi-baju`
--
ALTER TABLE `transaksi-baju`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `ukuran`
--
ALTER TABLE `ukuran`
  MODIFY `idUkuran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `warna`
--
ALTER TABLE `warna`
  MODIFY `idWarnaBaju` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD CONSTRAINT `kategori_ibfk_1` FOREIGN KEY (`idJenisKelamin`) REFERENCES `jeniskelamin` (`idJenisKelamin`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `pembeli`
--
ALTER TABLE `pembeli`
  ADD CONSTRAINT `pembeli_ibfk_1` FOREIGN KEY (`id-alamat-pembeli`) REFERENCES `alamat-pembeli` (`id-alamat-pembeli`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`idKategori`) REFERENCES `kategori` (`idKategoriBaju`) ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_2` FOREIGN KEY (`idUkuran`) REFERENCES `ukuran` (`idUkuran`) ON UPDATE CASCADE,
  ADD CONSTRAINT `produk_ibfk_3` FOREIGN KEY (`idWarna`) REFERENCES `warna` (`idWarnaBaju`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `transaksi-baju`
--
ALTER TABLE `transaksi-baju`
  ADD CONSTRAINT `transaksi-baju_ibfk_1` FOREIGN KEY (`id_pembeli`) REFERENCES `pembeli` (`id_pembeli`) ON UPDATE CASCADE,
  ADD CONSTRAINT `transaksi-baju_ibfk_2` FOREIGN KEY (`id_baju`) REFERENCES `produk` (`idBaju`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
