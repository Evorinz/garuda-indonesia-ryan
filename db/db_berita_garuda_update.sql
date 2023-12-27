-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Des 2023 pada 18.08
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_berita_garuda`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_login_admin`
--

CREATE TABLE `tbl_login_admin` (
  `id` int(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tbl_login_admin`
--

INSERT INTO `tbl_login_admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_news_event`
--

CREATE TABLE `tbl_news_event` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `location` varchar(50) NOT NULL,
  `date_publish` date NOT NULL,
  `published` tinyint(1) NOT NULL,
  `desc_event` text NOT NULL,
  `cap_image` text NOT NULL,
  `image_events` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_news_event`
--

INSERT INTO `tbl_news_event` (`id`, `title`, `location`, `date_publish`, `published`, `desc_event`, `cap_image`, `image_events`) VALUES
(1, 'GARUDA INDONESIA LOYALTY PROGRAM \"GARUDAMILES\" WIN AN AWARD FOR \"BEST AIRLINE CUSTOMER SERVICE\" IN FREDDIE AWARDS 2023', 'Jakarta', '2023-05-03', 1, 'Garuda Indonesia loyalty program, GarudaMiles, last Friday (28/05) succeeded in accepting an award in Freddie Awards 2023 which was held in Washington DC, United States of America, as \"Best Airline Customer Service\" in Southeast Asia with the rates of 9.31.\n\nNThe achievement of the \"Best Airline Customer Service\" category complements several other predicates obtained by Garuda Indonesia at the event, namely the Best Elite Program: (Rank 3), Best Promotion (Rank 3), Best Redemption Ability (Rank 2), Best Loyalty Credit Card (Rank 2), and Program of the Year (Rank 3). Furthermore, the award recognition of GarudaMiles is based on the final results of a survey opened on February 15 to March 31, 2023, for all global frequent flyers. The Freddie Awards itself is an annual award event for world loyalty programs in the travel loyalty industry that has been held since 1988.\n\nThe CEO of Garuda Indonesia, Irfan Setiaputra, has said, \"The achievement of GarudaMiles in Freddie Awards 2023 has been an honor itself as well as an encouragement for us to keep doing changes as our Garuda Indonesia\'s loyal customers especially as the benefit continued for GarudaMiles members.\n\n\"The appreciation is given for two consecutive years in the Freddie Awards, where in the previous year GarudaMiles received the title \"The 210 Awards: Best Up and Coming Program\" in the Middle East & Asia/Oceania region is proof of the support and trust of the people in Indonesia, especially those who always choose Garuda Indonesia flight services about the convenience of mobility by air transportation,\" added Irfan.\n\n\"We hope that this award can also reflect Garuda Indonesia\'s continuous commitment as a national flag carrier to always provide the best flight services as a whole, amid various conditions and situations in line with the vision to always put forward the perspective of service users in all lines of our services including the GarudaMiles customer loyalty program,\" concluded Irfan.', '', 'freddieawards-2023.png'),
(2, 'GARUDA INDONESIA OPERASIKAN PENERBANGAN EVAKUASI BAGI 385 WNI DI SUDAN', 'Jakarta', '2023-04-28', 0, 'Maskapai penerbangan nasional Garuda Indonesia mengoperasikan penerbangan evakuasi bagi Warga Negara Indonesia (WNI) yang berada di Sudan imbas situasi konflik yang terjadi sejak beberapa waktu lalu. Penerbangan evakuasi WNI yang merupakan komitmen penuh Kementerian Luar Negeri (Kemlu) RI tersebut, tiba di Bandara Internasional Soekarno Hatta pada pukul 05.46 WIB melalui pemberangkatan Jeddah pada pukul 16.24 local time di mana sebelumnya secara bertahap para WNI tersebut mulai dievakuasi melalui jalan darat dari ibukota Sudan, Khartoum ke Port Sudan kemudian dilanjutkan perjalanan ke Jeddah baik melalui jalur laut dan udara.\r\n\r\nDirektur Utama Garuda Indonesia Irfan Setiaputra mengungkapkan bahwa \"Sebanyak 385 Warga Negara Indonesia telah tiba dengan selamat di tanah air pada pagi hari ini setelah melalui perjalanan panjang dari Khartoum, ibukota Sudan menuju Jeddah yang kemudian melanjutkan perjalanan jalur udara menuju tanah air. Penerbangan evakuasi ini menjadi wujud kolaborasi yang dinamis antara Pemerintah serta seluruh stakeholder terkait dalam memastikan upaya pemulangan WNI berjalan dengan aman dan lancar.\"\r\n\r\nWNI Turun dari pesawat.\r\nProses pemulangan WNI ini dioperasikan dengan penerbangan GA 991 yang diterbangkan dari Jeddah dengan armada B777-300ER. Adapun penerbangan evakuasi tersebut terdapat 15 awak pesawat yang bertugas dan terdiri dari 3 cockpit crew, 1 FSM dan 13 awak kabin.\r\n\r\nIrfan menambahkan, \"Penerbangan evakuasi ini merupakan bagian dari komitmen berkelanjutan Garuda Indonesia dalam menjalankan mandat sebagai national flag carrier yang salah satunya diwujudkan melalui penyediaan aksesibilitas layanan penerbangan bagi masyarakat Indonesia yang akan kembali ke tanah di tengah situasi konflik yang terjadi saat ini di Sudan.\"\r\n\r\n\"Memiliki arti tersendiri bagi kami kembali dipercaya mengemban misi kemanusiaan dalam mendukung evakuasi 385 WNI ini. Lebih lanjut, merupakan sebuah keniscayaan bagi Garuda Indonesia sebagai maskapai pembawa bendera bangsa untuk turut ambil bagian dalam peran aktif negara dalam memberikan perlindungan bagi warganya, salah satunya melalui misi pemulangan WNI dari Sudan yang tentunya perlu didukung oleh aksesibilitas transportasi udara yang siap setiap saat dalam menjalankan tugas tersebut. Prosedur evakuasi WNI tersebut ini telah melalui koordinasi intensif bersama pemangku kepentingan terkait dengan memperhatikan aspek keselamatan dan keamanan mobilitas antarnegara utamanya proses pemulangan WNI untuk kemudian dapat diterbangkan kembali ke tanah air melalui Jeddah,\" tutup Irfan.', '', 'sudan-1.jpeg'),
(3, 'Optimalkan Kesiapan Operasional Penerbangan Jelang Musim Haji 1444h, Garuda Indonesia Siapkan 14 Armada Pesawat Berbadan Lebar', 'Jakarta', '2023-04-27', 1, 'Maskapai penerbangan nasional Garuda Indonesia terus memperkuat kesiapan operasional penerbangannya jelang musim haji 1444 H/2023 M, salah satunya dengan menyiapkan sedikitnya 14 armada untuk melayani calon jemaah haji asal Indonesia.\n\nAdapun ke-14 armada tersebut nantinya akan melayani calon jemaah haji asal Indonesia dari dan menuju Tanah Suci mulai tanggal 24 Mei - 2 Agustus 2023, di mana pada tahun ini Garuda Indonesia mendapatkan kepercayaan untuk menghadirkan layanan penerbangan haji bagi sedikitnya 104.172 calon jemaah haji.\n\nKesiapan operasional penerbangan haji tersebut ditandai dengan penandatanganan kerjasama pengangkutan udara jemaah haji reguler dan petugas penyelenggara ibadah haji kelompok terbang tahun 1444 Hijriah/2023 Masehi yang dilaksanakan langsung oleh Direktur Utama Garuda Indonesia Irfan Setiaputra dan Direktur Jenderal Penyelenggaraan Haji & Umrah Kementerian Agama RI Hilman Latief di Kantor Pusat Kementerian Agama RI, Jakarta Pusat.\n\nDirektur Utama Garuda Indonesia Irfan Setiaputra mengatakan bahwa sebagai national flag carrier, dengan pengalaman melayani haji selama hampir 7 dekade, Garuda Indonesia terus mengoptimalkan komitmennya untuk menjalankan tugas penting melayani jemaah haji asal Indonesia ke Tanah Suci dengan menghadirkan penerbangan yang aman dan nyaman.\n\"Komitmen tersebut salah satunya kami laksanakan dengan memastikan ketersediaan armada dimana pada tahun ini Garuda Indonesia akan mengoperasikan 14 pesawat yang 7 di antaranya disediakan melalui skema wet lease dengan pihak lessor. Kami juga memastikan bahwa seluruh pesawat berbadan lebar (wide body) yang akan digunakan untuk melayani calon jemaah haji dalam keadaan prima dan layak terbang melalui serangkaian inspeksi berlapis, termasuk perawatan menyeluruh terhadap mesin pesawat serta keseluruhan komponen vital pesawat lainnya,\" jelas Irfan.\nIrfan melanjutkan bahwa dipercayanya Garuda Indonesia sejak tahun 1955 lalu untuk terus melayani penerbangan haji tentunya menjadi manifestasi tersendiri dalam upaya kami untuk senantiasa berada di garda terdepan untuk menyediakan aksesibilitas penerbangan yang optimal bagi masyarakat Indonesia sebagai negara dengan penduduk muslim terbesar di Indonesia.\n\"Kami memahami bahwa pelaksanaan ibadah haji merupakan momen yang telah dinantikan oleh sebagian besar masyarakat Indonesia, karena itu kami berupaya untuk menghadirkan seamless experience bagi seluruh calon jemaah haji baik dari sebelum penerbangan hingga setelah penerbangan dengan Garuda Indonesia,\" papar Irfan.\nSeluruh 104.172 calon jemaah Haji tahun ini akan dibagi ke dalam 287 kelompok terbang (kloter) dan akan diberangkatkan dari 9 (sembilan) embarkasi yaitu Aceh, Medan, Padang, Jakarta, Solo, Balikpapan, Banjarmasin, Makassar, dan Lombok. Dalam musim haji ini Garuda Indonesia akan mengoperasikan 7 (tujuh) Boeing B777-300, 4 (empat) Airbus A330-300, 3 (tiga) Airbus A330-900.\nLebih lanjut, sebagai upaya untuk memberikan nilai tambah layanan bagi para jemaah, Garuda Indonesia akan menghadirkan berbagai pilihan hiburan In-flight Entertainment bernuansa islami selama penerbangan. Tak hanya itu, para jemaah juga akan mendapatkan inflight catering sesuai menu khas daerah embarkasi.\nPada kesempatan tersebut, Direktur Jenderal Penyelenggaraan Haji & Umrah Kementerian Agama RI Hilman Latief turut mengungkapkan bahwa, \"Kami mengucapkan apresiasi kepada Garuda Indonesia yang terus berdiskusi intensif dalam mempersiapkan kesiapan operasional penerbangan haji tahun ini. Insya Allah, Garuda Indonesia akan memberangkatkan haji reguler sebanyak 104.172 yang terdiri dari 9 embarkasi.\nHilman menambahkan, \"Dapat kami sampaikan, 30 persen jemaah Indonesia tahun ini berusia di atas usia 65 tahun. Untuk itu, kebijakan pendampingan lansia harus terus ditingkatkan termasuk dukungan dari penyedia layanan penerbangan termasuk Garuda Indonesia untuk menghadirkan kemudahaan bagi kebutuhan jemaah lansia selaras dengan visi kita bersama memberikan layanan yang inklusif bagi seluruh jamaah haji.\"\n\n\"Kerja sama yang telah terjalin bertahun tahun ini tentunya perlu terus dioptimalkan khususnya dalam memaksimalkan kesiapan operasional penerbangan haji dengan memastikan berbagai hal krusial dalam aspek operasional dapat termitigasi dengan baik utamanya terkait kenyamanan calon jamaah haji,\" ungkap Hilman.\n\n\"Kami akan terus memaksimalkan kesiapan operasional penerbangan haji ini melalui koordinasi intensif dengan berbagai pemangku kepentingan, untuk memastikan penerbangan Haji tahun ini dapat berjalan lancar, tepat waktu, dan tentunya mampu memberikan kenyamanan kepada seluruh jemaah. Kami juga mengimbau para jemaah untuk senantiasa menerapkan protokol kesehatan secara konsisten untuk memastikan seluruh jemaah dalam keadaan sehat hingga tiba kembali di Tanah Air,\" tutup Direktur Utama Garuda Indonesia Irfan Setiaputra.', 'Direktur Utama Garuda Indonesia Irfan Setiaputra,Best Airline Award to Garuda Indonesia,WNI Turun dari pesawat', 'ga-kemenag.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_news_event`
--
ALTER TABLE `tbl_news_event`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_news_event`
--
ALTER TABLE `tbl_news_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
