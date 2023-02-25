-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Feb 2023 pada 07.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simple_note`
--
CREATE DATABASE IF NOT EXISTS `simple_note` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `simple_note`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `aoc876`
--

CREATE TABLE `aoc876` (
  `noteid` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `az_778b`
--

CREATE TABLE `az_778b` (
  `noteid` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `az_778b`
--

INSERT INTO `az_778b` (`noteid`, `judul`, `catatan`) VALUES
(4, 'Ide-Ide Pendiri Bangsa tentang Negara Merdeka', 'BPUPK ini \r\nmelaksanakan 2 kali sidang; 1) 29 Mei-1 Juni 1945 membahas tentang Dasar\r\nNegara, 2) 10-17 Juli 1945 membahas tentang Rancangan Undang-Undang Dasar.\r\npokok - pokok pikiran 3 tokoh pendiri bangsa pada sidang bpupk yg pertama'),
(5, 'Mohammad Yamin', 'sidang pertama BPUPK (29 Mei-1 Juni)\r\npidato pada 29 Mei\r\nI Peri Kebangsaan\r\nII Peri Kemanusiaan\r\nIII Peri Ketuhanan\r\nIV Peri Kerakyatan\r\nV Kesejahteraan Rakyat\r\n\r\nteks tertulis\r\na. Ketuhanan Yang Maha Esa\r\nb. Kebangsaan persatuan Indonesia\r\nc. Rasa kemanusiaan yang adil dan beradab\r\nd. Kerakyatan yang dipimpin oleh hikmat kebijaksanaan dalam permusyawaratan/perwakilan\r\ne. Keadilan sosial bagi seluruh rakyat Indonesia'),
(6, 'Soepomo', 'pidato pada 31 Mei 45\r\n(1) Persatuan\r\n(2) Kekeluargaan\r\n(3) Keseimbangan lahir dan batin\r\n(4) Musyawarah\r\n(5) Keadilan rakyat'),
(9, 'Ide-Ide Pendiri Bangsa', 'BPUPK ini \r\nmelaksanakan 2 kali sidang:\r\n1) 29 Mei-1 Juni 1945 membahas tentang Dasar\r\nNegara, \r\n2) 10-17 Juli 1945 membahas tentang Rancangan Undang-Undang Dasar.\r\npokok - pokok pikiran 3 tokoh pendiri bangsa pada sidang bpupk yg pertama');

-- --------------------------------------------------------

--
-- Struktur dari tabel `az_778b1`
--

CREATE TABLE `az_778b1` (
  `noteid` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `az_778b12`
--

CREATE TABLE `az_778b12` (
  `noteid` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `az_778bcd`
--

CREATE TABLE `az_778bcd` (
  `noteid` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `eel1`
--

CREATE TABLE `eel1` (
  `noteid` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `eel1`
--

INSERT INTO `eel1` (`noteid`, `judul`, `catatan`) VALUES
(1, 'AJR - Worlds Smallest Violin', 'My grandpa fought in World War Two\r\nHe was such a noble dude\r\nI can’t even finish school\r\nMissed my mom and left too soon \r\nHis dad was a fireman \r\nWho fought fires so violent \r\nI think I bored my therapist \r\nWhile playing him my violin\r\nOh my god that‘s so insane\r\nOh my god that’s such a shame\r\nNext to them, my shit don’t feel so grand\r\nBut I can’t help myself from feeling bad\r\nI kinda feel like 2 things can be sad\r\nThe world’s smallest violin\r\nReally needs an audience\r\nSo if I do not find somebody soon\r\nI’ll blow up into smithereens \r\nAnd spew my tiny symphony\r\nJust let me play my violin for you\r\nMy grandpa fought in World War Two\r\nHe was such a noble dude\r\nMan I feel like such a fool\r\nI got so much left to prove\r\nAll my friends have vaping friends\r\nThey’re so good at making friends\r\nI’m so scared of caving in \r\nIs that entertaining yet?\r\nOh my god that‘s so insane\r\nOh my god that’s such a shame\r\nNext to them, my shit don’t feel so grand\r\nBut I can’t help myself from feeling bad\r\nI kinda feel like 2 things can be sad\r\nThe world’s smallest violin\r\nReally needs an audience\r\nSo if I do not find somebody soon\r\nI’ll blow up into smithereens \r\nAnd spew my tiny symphony\r\n\r\nJust let me play my violin for you\r\nSomewhere in the universe\r\nSomewhere someone’s got it worse\r\nWish that made it easier\r\nWish I didn’t feel the hurt\r\nThe world’s smallest violin\r\nReally needs an audience\r\nSo if I do not find somebody soon\r\nI’ll blow up into smithereens\r\nAnd spew my tiny symphony\r\nAll up and down a city street\r\nWhile tryna put my mind at ease\r\nLike finishing this melody\r\nThis feels like a necessity\r\nSo this could be the death of me\r\nOr maybe just a better me\r\nNow come in with the timpanis\r\nAnd take a shot of Hennessy\r\nI know I’m not there mentally\r\nBut you could be the remedy\r\nSo let me play my violin for you');

-- --------------------------------------------------------

--
-- Struktur dari tabel `eel1945`
--

CREATE TABLE `eel1945` (
  `noteid` int(11) NOT NULL,
  `judul` text NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `eel1945`
--

INSERT INTO `eel1945` (`noteid`, `judul`, `catatan`) VALUES
(1, 'AJR - Worlds Smallest Violin (Lyrics)', 'My grandpa fought in World War Two\r\nHe was such a noble dude\r\nI can’t even finish school\r\nMissed my mom and left too soon \r\nHis dad was a fireman \r\nWho fought fires so violent \r\nI think I bored my therapist \r\nWhile playing him my violin\r\nOh my god that‘s so insane\r\nOh my god that’s such a shame\r\nNext to them, my shit don’t feel so grand\r\nBut I can’t help myself from feeling bad\r\nI kinda feel like 2 things can be sad\r\nThe world’s smallest violin\r\nReally needs an audience\r\nSo if I do not find somebody soon\r\nI’ll blow up into smithereens \r\nAnd spew my tiny symphony\r\nJust let me play my violin for you\r\nMy grandpa fought in World War Two\r\nHe was such a noble dude\r\nMan I feel like such a fool\r\nI got so much left to prove\r\nAll my friends have vaping friends\r\nThey’re so good at making friends\r\nI’m so scared of caving in \r\nIs that entertaining yet?\r\nOh my god that‘s so insane\r\nOh my god that’s such a shame\r\nNext to them, my shit don’t feel so grand\r\nBut I can’t help myself from feeling bad\r\nI kinda feel like 2 things can be sad\r\nThe world’s smallest violin\r\nReally needs an audience\r\nSo if I do not find somebody soon\r\nI’ll blow up into smithereens \r\nAnd spew my tiny symphony\r\n\r\nJust let me play my violin for you\r\nSomewhere in the universe\r\nSomewhere someone’s got it worse\r\nWish that made it easier\r\nWish I didn’t feel the hurt\r\nThe world’s smallest violin\r\nReally needs an audience\r\nSo if I do not find somebody soon\r\nI’ll blow up into smithereens\r\nAnd spew my tiny symphony\r\nAll up and down a city street\r\nWhile tryna put my mind at ease\r\nLike finishing this melody\r\nThis feels like a necessity\r\nSo this could be the death of me\r\nOr maybe just a better me\r\nNow come in with the timpanis\r\nAnd take a shot of Hennessy\r\nI know I’m not there mentally\r\nBut you could be the remedy\r\nSo let me play my violin for you');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasir`
--

CREATE TABLE `kasir` (
  `noteid` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `username` varchar(60) NOT NULL,
  `sandi` varchar(24) NOT NULL,
  `nama` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `usia` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`userid`, `username`, `sandi`, `nama`, `email`, `usia`) VALUES
(1, 'admin', 'caart998', 'Administrator', NULL, NULL),
(2, 'AZ_778B', 'qwerty', 'abcdefghijklbbcf', 'ghof@yahoo.com', '< 20 Tahun'),
(3, 'AZ_778BCD', '12345678', 'abcdefghijklmno', 'azaid7492@gmail.com', '< 20 Tahun'),
(4, 'eel1', '1440p', 'azsxdc', 'anywho1234@gmail.com', 'Masukkan Umur'),
(5, 'eel1945', '17081945', 'azsxdc 8080 port', 'anywho1234@yahoo.com', '20-29 Tahun'),
(6, 'AOC876', '1998-2002', 'azsxdc 8080', 'anything1234@gmail.com', '< 20 Tahun'),
(7, 'AZ_778B1', '12345678', 'azsxdc 8080f_arm', 'anything1234@yahoo.com', '< 20 Tahun'),
(8, 'AZ_778B12', '1234abcd', 'nama saya', 'aeroxxgen@gmail.com', '30-39 Tahun'),
(13, 'kasir', 'asw123', 'dgfgg', 'bardyramutu@gmail.com', '30-39 Tahun');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `aoc876`
--
ALTER TABLE `aoc876`
  ADD PRIMARY KEY (`noteid`);

--
-- Indeks untuk tabel `az_778b`
--
ALTER TABLE `az_778b`
  ADD PRIMARY KEY (`noteid`);

--
-- Indeks untuk tabel `az_778b1`
--
ALTER TABLE `az_778b1`
  ADD PRIMARY KEY (`noteid`);

--
-- Indeks untuk tabel `az_778b12`
--
ALTER TABLE `az_778b12`
  ADD PRIMARY KEY (`noteid`);

--
-- Indeks untuk tabel `az_778bcd`
--
ALTER TABLE `az_778bcd`
  ADD PRIMARY KEY (`noteid`);

--
-- Indeks untuk tabel `eel1`
--
ALTER TABLE `eel1`
  ADD PRIMARY KEY (`noteid`);

--
-- Indeks untuk tabel `eel1945`
--
ALTER TABLE `eel1945`
  ADD PRIMARY KEY (`noteid`);

--
-- Indeks untuk tabel `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`noteid`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `aoc876`
--
ALTER TABLE `aoc876`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `az_778b`
--
ALTER TABLE `az_778b`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `az_778b1`
--
ALTER TABLE `az_778b1`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `az_778b12`
--
ALTER TABLE `az_778b12`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `az_778bcd`
--
ALTER TABLE `az_778bcd`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `eel1`
--
ALTER TABLE `eel1`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `eel1945`
--
ALTER TABLE `eel1945`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `kasir`
--
ALTER TABLE `kasir`
  MODIFY `noteid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
