-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2023 at 02:35 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projekpdi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `email`, `pass`) VALUES
(1, 'admin1', 'adm1@gmail.com', 'admin1');

-- --------------------------------------------------------

--
-- Table structure for table `desa_wisata`
--

CREATE TABLE `desa_wisata` (
  `ID` int(11) NOT NULL,
  `Judul_Desawisata` varchar(255) DEFAULT NULL,
  `kategori` varchar(255) DEFAULT NULL,
  `Foto_Desawisata` varchar(255) DEFAULT NULL,
  `Deskripsi_Singkat` varchar(255) NOT NULL,
  `Deskripsi_Desawisata` varchar(10000) DEFAULT NULL,
  `Foto_Lokasi_maps` varchar(255) DEFAULT NULL,
  `Alamat_Desawisata` varchar(200) DEFAULT NULL,
  `Link_Google_Maps` varchar(255) DEFAULT NULL,
  `Ringkasan_Desawisata` varchar(900) DEFAULT NULL,
  `Fasilitas_Desawisata` varchar(500) DEFAULT NULL,
  `Syarat_dan_Ketentuan` varchar(200) DEFAULT NULL,
  `Informasi_Tambahan` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `desa_wisata`
--

INSERT INTO `desa_wisata` (`ID`, `Judul_Desawisata`, `kategori`, `Foto_Desawisata`, `Deskripsi_Singkat`, `Deskripsi_Desawisata`, `Foto_Lokasi_maps`, `Alamat_Desawisata`, `Link_Google_Maps`, `Ringkasan_Desawisata`, `Fasilitas_Desawisata`, `Syarat_dan_Ketentuan`, `Informasi_Tambahan`) VALUES
(1, 'Desa Wisata Kasongan', 'Edukasi-dan-Kesenian', 'Kasongan.jpg', 'Desa Wisata Kasongan: Pusat Kerajinan Tanah Liat, Showroom Kreatif, dan Keindahan Tradisional Yogyakarta yang Menarik.', 'Desa wisata Kasongan merupakan daerah pemukiman para kundi, atau buyung yang artinya orang yang membuat sejenis buyung, gendi, kuali, dan lainnya yang tergolong peralatan dapur, juga barang hiasan yang terbuat dari tembikar atau tanah liat. Hingga saat ini Desa Kasongan menjadi salah satu tujuan desa wisata di Yogyakarta yang banyak diminati oleh wisatawan. Deretan show room atau rumah-rumah galeri di desa wisata Kasongan ini menawarkan barang-barang kerajinan dari gerabah serta dari bahan lainnya seperti guci, pot bunga, lampu hias, miniatur alat transportasi (becak, sepeda), aneka tas, patung, souvenir untuk pengantin, serta hiasan lainnya yang menarik untuk dipajang di rumah. Salah satu patung yang legendaris di Desa Kasongan adalah patung Loro Blonyo. Loro Blonyo adalah patung sepasang pengantin yang dipercaya akan memberikan keberuntungan jika ditaruh di dalam rumah. Kita bisa menjumpai patung ini dalam berbagai pose. Patung ini pertama kali dikenalkan oleh Galeri Loro Blonyo yang diadopsi dari patung pengantin milikKraton Yogyakarta.</td>\r\n                                                            ', 'KasonganMaps.png', 'Jl. Kasongan No.3, Kajen, Bangunjiwo, Kec. Kasihan, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55184', 'https://www.google.com/maps/place/Pesona+Desa+Wisata+Gerabah+Kasongan+Yogyakarta/@-7.8455358,110.3357681,17z/data=!4m10!1m2!2m1!1sdesa+wisata+kasongan!3m6!1s0x2e7a562ec443e609:0xdd8f6df4e1b97dfc!8m2!3d-7.8455358!4d110.3379568!15sChRkZXNhIHdpc2F0YSBrYXNvbm', '-Menjadi tempat untuk edukasi dengan berbagai demonstrasi dan kerajinan yang dijual\r\n-Menjadi tempat berekreasi dengan tempat yang luas dikelilingi dengan rumah rumah galeri kerajinan\r\n-Menjadi tempat berswafoto dengan keindahan kerajinan estetik yang ada                                                ', '-Rest Area-Penginapan-Tempat Edukasi-Toilet-Mushalla-Food Court', '-Tiket masuk untuk parkir seharga Rp.10.000,00-Tiket hanya berlaku 1 kali masuk ke Desa Wisata-Tiket untuk belajar membuat kerajinan sendiri seharga Rp.50.000,00-Pembayaran tiket dengan cash tid', 'Buka setiap hari mulai pukul 09.00 WIB - 16.00 WIB'),
(2, 'Desa Wisata Jagalan', 'Agrowisata', 'Jagalan.jpg', 'Desa Wisata Jagalan: Pariwisata Bersejarah, Keindahan Kebudayaan, dan Kerajinan Perak yang Mempesona di Mataram Islam.', 'Desa wisata Jagalan merupakan salah satu destinasi wisata yang menawarkan pariwisata berbasis sejarah dan kebudayaan. Masyarakat yang berkunjung akan disuguhkan dengan peninggalan sejarah kerajaan Mataram Islam seperti komplek yang terdiri dari Masjid Gede Mataram, Makam pendiri pendiri Kerajaan Mataram Islam, area Sendang dan perkampungan. Perkampungan yang saat ini masih dapat dinikmati keberadaannya oleh masyarakat.Sebagai Desa wisata, Desa Jagalan mempunyai bermacam-macam paket kunjungan wisata diantaranya paket wisata sejarah, pendidikan, religi, rumah tradisional, kuliner, kerajinan dan pertunjukan. Desa Jagalan juga terkenal dengan industry kerajinan perak, para pengrajin perak yang ada sejak zaman kerajaan mataram islam yang hingga saat ini masih dapat ditemui, Masyakarat yang berkunjung ke Desa Jagalan dapat melihat secara langsung para pengrajin membuat produk kerajinan perak, dan juga dapat praktik membuat sendiri karya kerajinan perak.\r\n              ', 'JagalanMaps.png', 'Bodon, Jagalan, Kec. Banguntapan, Kabupaten Bantul, Daerah Istimewa Yogyakarta', 'https://www.google.com/maps/place/7%C2%B049\'47.8%22S+110%C2%B023\'44.4%22E/@-7.8304658,110.3947613,16.75z/data=!4m4!3m3!8m2!3d-7.8299405!4d110.3956731?entry=ttu&hl=id', '-Menjadi tempat untuk syuting film dengan keindahan sejarah dan budaya.\r\n-Menjadi tempat berekreasi dengan tempat yang luas dikelilingi dengan banyak bangunan dengan kekayaan arsitektur         \r\n-Menjadi tempat berswafoto dengan keindahan bangunan estetik yang ada\r\n-Memiliki berbagai kuliner khas jajanan tradisional', '-Balai Pertemuan\r\n-Photo Spot\r\n-Toko Cendera Mata    \r\n-Kamar Mnadi Umum\r\n-Mushalla\r\n-ATMs\r\n-Food Court', '-Tiket masuk seharga Rp.15.000,00/orang\r\n-Tiket hanya berlaku 1 kali masuk ke masing-masing wahana\r\n-Pembayaran tiket dengan cash tidak ada cashless\r\n-Tidak ada e-ticket, jadi harus membeli tiket dite', 'Buka setiap hari mulai pukul 08.00 WIB - 16.00 WIB'),
(3, 'Desa Wisata Wukirsari', 'Edukasi-dan-Kesenian', 'wukisari.jpeg', 'Desa Wisata Wukirsari: Edu-Wisata, Eco-Wisata, batik, alam, religi, dan ekonomi budaya. Pemberdayaan masyarakat, atraksi beragam.', 'Desa Wisata Wukirsari ini berfokus pada pengembangan Edu-Wisata dan Eco-wisata sejak tahun 2007. Secara resmi telah dikukuhkan melalui SK Pemerintah Desa dan SK Pemerintah Kabupaten Bantul sebagai Desa Wisata yang dikelola secara pemberdayaan masyarakat dengan melibatkan seluruh unsur kemasyarakatan dan di koordinasi oleh Pengelola Desa Wisata Wukirsari. Berbagai atraski wisata tersedia di kawasan Desa Wukirsari yang meliputi wisata budaya dan edukasi belajar batik di Kawasan Giriloyo, wisata alam di kawasan pesisir Sungai Opak, Wisata religi di kawasan Makam Raja-raja Pajimatan dan Makam Sunan Giriloyo, serta wisata ekonomi budaya di Kawasan Pasar Tradisional Sor Jati. Selain itu, Dusun Pucung difokuskan pada pengembangan edu-wisata satwa burung berbasis penangkaran burung, serta memaksimalkan potensi kerajinan tatah sungging wayang.\r\n\r\nBelajar membatik menjadi ajang bagi Wukirsari untuk mengenalkan warisan budaya dunia milik Indonesia yang telah ada di Kawasan ini sejak tahun 1634 silam. Bukan hanya sekedar ajang wisata, kegiatan ini menitik beratkan pada keterlibatan lebih dari 600 orang perajin batik sebagai pemandu wisata belajar batik, sehingga setiap perkembangan dalam atraksi ini akan berimbas pada meningkatnya taraf hidup masyarakat yang berprofesi sebagai perajin batik.', 'WukisariMaps.png', 'Jl. Nogosari, Nogosari II, Wukirsari, Kec. Imogiri, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55782', 'https://www.google.com/maps/place/Wisata+Wayang+Wukirsari/@-7.9055031,110.3841391,14z/data=!4m10!1m2!2m1!1sdesa+wisata+wukirsari!3m6!1s0x2e7a5467cde8834f:0xe8bcc556faa332d6!8m2!3d-7.9053578!4d110.4088208!15sChVkZXNhIHdpc2F0YSB3dWtpcnNhcmlaFyIVZGVzYSB3aXNh', '-Menjadi tempat edukasi mempelajari warisan budaya dunia milik Indonesia\r\n\r\n-Menjadi tempat berekreasi dengan tempat yang dikelilingi dengan berbagai kerajinan yang estetik\r\n\r\n-Menjadi tempat berswafoto dengan keindahan budaya yang ada', '-Toko Cendera Mata  -Photo Spot  -Cafetaria  -Balai Pertemuan  -Toilet  -Mushalla  -Food Court', '-Tiket masuk seharga Rp.15.000,00  -Paket untuk memahat wayang seharga Rp.95.000,00/ orang  -Paket untuk Kelas Filosofi Wayang seharga Rp.30.000,00/ orang  -Paket untuk Membatik seharga Rp.30.000,00/ ', '-Buka setiap hari mulai pukul 09.00 WIB - 16.00 WIB'),
(4, 'Desa Wisata Gamplong', 'Sejarah-dan-Budaya', 'gamplong.jpg', 'Desa Wisata Gamplong juga dikenal dengan panggilan studio Gamplong, object wisata satu ini termasuk baru dan benar-benar pas jadi tujuan berlibur seruk.', 'Desa Wisata Gamplong juga dikenal dengan panggilan studio Gamplong, object wisata satu ini termasuk baru dan benar-benar pas jadi tujuan berlibur seruk, terutamanya kamu yang suka memburu photo instagramable. Desa Wisata Gamplong ini berada di Kecamatan Moyudan, Sleman, persisnya di Desa Sumberahayu.Berkaitan industri, tipe industri yang menguasai di Desa Wisata Gamplong ada industri tenun, kerajinan bambu, dan makanan.\r\n\r\nDesa Wisata Gamplong sebagai salah satunya desa yang ada di desa Sumberrahayu yang populer dengan kerajinan tenun ATB (Alat tenun Bukan Mesin). Industri tenun itu telah ada semenjak 1950-an dalam jumlah perajin yang alami pengurangan semenjak tahun 2008. Terhitung, cuman ada perajin tenun yang melakukan aktivitas. Hasil kerajinan yang dibuat sudah alami beberapa peralihan dengan sesuaikan perubahan jaman.', 'GamplongMaps.png', 'Gamplong Moyudan, Dukuh, Sumberrahayu, Kec. Moyudan, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55563', 'https://www.google.com/maps/place/Desa+Wisata+Gamplong/@-7.809897,110.2321584,17z/data=!3m1!4b1!4m6!3m5!1s0x2e7af9ff0e7b2051:0x5f140fe81056e3f0!8m2!3d-7.809897!4d110.2347333!16s%2Fg%2F11bx1cnydv?hl=id&entry=ttu', '-Menjadi tempat untuk syuting film-film baik untuk produser film besar maupun para konten kreator\r\n\r\n-Menjadi tempat berekreasi dengan tempat yang luas dikelilingi dengan bangunan bernuansa Eropa yang Estetik\r\n\r\n-Menjadi tempat berswafoto dengan keindahan bangunan bergaya klasik yang ada', '-Rest Area  -Photo Spot  -Toilet  -Mushalla  -Food Court', '-Tiket masuk untuk 1 properti seharga Rp.10.000,00 dan jika dipaketkan untuk 4 properti yang ada menjadi Rp.35.000,00  -Tiket hanya berlaku 1 kali masuk ke masing-masing properti  -Pembayaran tiket de', '-Buka setiap hari mulai pukul 09.00 WIB - 17.00 WIB'),
(5, 'Desa Wisata Blue Lagoon', 'Alam', 'bluelagoon.jpg', 'Desa wisata Blue Lagoon Jogja memiliki sebuah wisata pemandian di alam terbuka mirip kolam untuk para raja.', 'Desa wisata Blue Lagoon Jogja memiliki sebuah wisata pemandian di alam terbuka mirip kolam untuk para raja. Anda bisa berkunjung ke tempat ini untuk melengkapi koleksi foto pribadi untuk diunggah di media sosial.Bagaimana tidak, sungai dengan air jernih dan tenang ini sangat Instagramable.\r\n\r\nSelain berenang, ada banyak aktivitas luar ruang yang bisa dilakukan di sekitar Blue Lagoon. Salah satunya adalah bersepeda. Daerah sekitar Blue Lagoon adalah pedesaan asri yang cocok untuk bersepeda.\r\n\r\n', 'BlueLagoonMaps.png', 'Area Sawah, Widodomartani, Kec. Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584', 'https://www.google.com/maps/place/Blue+Lagoon+Jogja/@-7.6928037,110.4276057,14z/data=!4m20!1m13!4m12!1m4!2m2!1d110.4142924!2d-7.6805583!4e1!1m6!1m2!1s0x2e7a5c75eba9da15:0xd4d6063b3b163462!2sblue+lagoon+jogja!2m2!1d110.4491103!2d-7.7028328!3m5!1s0x2e7a5c75', '-Menjadi tempat berenang populer dikolam dengan mata air alami  -Menjadi tempat berekreasi dengan tempat yang dikelilingi pepohonan dan bebatuan  -Menjadi tempat berswafoto dengan keindahan alam yang ada', '-Toko Cendera Mata  -Photo Spot  -Toilet  -Mushalla  -Food Court', '-Tiket masuk seharga Rp.15.000,00  -Tiket masuk sudah termasuk voucher untuk mengambil minuman dan makanan  -Voucher berlaku hanya di hari pembelian tiket saja  -Pembayaran tiket dengan cash tidak ada', '-Buka setiap hari mulai pukul 06.00 WIB - 17.00 WIB'),
(6, 'Desa Wisata Sermo', 'Alam', 'Sermo.jpg', 'Desa Wisata Sermo merupakan salah satu wisata yang berada di Perbukitan Menoreh yang ada ada di Kulon Progo, Daerah Istimewa Yogyakarta. ', 'Desa Wisata Sermo merupakan salah satu wisata yang berada di Perbukitan Menoreh yang ada ada di Kulon Progo, Daerah Istimewa Yogyakarta. Untuk sampai disana, wisatawan membutuhkan waktu sekitar 35 menit perjalanan menggunakan kendaraan bermotor dari Kota Wates, Kulon Progo. Daya tarik utama dari desa ini adalah Waduk Sermo yang merupakan satu-satunya waduk yang ada di Provinsi Yogyakarta. Keberadaan waduk ini tidak hanya penting bagi pengairan di sekitar waduk, tetapi juga menjadi salah satu wisata yang cukup diperhatikan di Kabupaten Kulon Progo. Banyak sekali aktivitas yang bisa dilakukan para pengunjung di area Waduk Sermo ini. Tidak hanya menikmati keindahan waduk dengan mengelilingi waduk menggunakan perahu, wisatawan bisa menikmati asrinya alam Waduk Sermo dengan menyusuri jalan setapak yang ada di sekeliling Waduk Sermo baik dengan berjalan kaki maupun bersepeda. Selain itu, saat pada musim kemarau, pengunjung juga bisa memanfaatkan area Waduk Sermo untuk berkemah maupun untuk outbound. Apalagi dengan lokasinya yang jauh dari hiruk pikuk kebisingan perkotaan dan udaranya yang masih sejuk dan bersih tentu membuat Waduk Sermo menjadi pilihan pas untuk berlibur dari kepenatan sehari-hari. Bagi wisatawan yang ingin menikmati keindahan alam Waduk Sermo lebih lama, pengelola menyediakan homestay-homestay yang terletak di sekitar waduk. Disini wisatawan akan diajak berinteraksi langsung dengan masyarakat sekitar sembari belajar membuat berbagai kuliner khas Kulon Progo seperti membuat gula jawa, ikan crispy, serta makanan tradisional seperti geblek, tape, dan apem.', 'SermoMaps.png', 'Sermo Lor, Hargowilis, Kec. Kokap, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta 55653', 'https://www.google.com/maps/place/Desa+Wisata+Sermo+Hargowilis/@-7.8204987,110.1224976,15.9z/data=!4m6!3m5!1s0x2e7ae5daee89653d:0x6227ae093fefa3ab!8m2!3d-7.8201354!4d110.1225848!16s%2Fg%2F11kpqfkpd1?hl=id&entry=ttu', 'Waduk Sermo\r\n\r\nTempat rekreasi', '-Tempat olahraga, tempat wisata', 'Tiket masuk retribusi Waduk Sermo Rp 6.000 Tiket camping disekitar Waduk Sermo Rp 15.000-Rp 20.000 Tiket parkir motor Rp 2.000 Tiket parkir mobil Rp 5.000  Artikel ini telah tayang di Kompas.com denga', 'Area parkir kendaraan yang sempit · Mushola · Warung wisata · Toilet · Spot Foto · Wahana wisata'),
(30, 'Desa Wisata  Sambi', 'Alam', 'LedokSambi.jpg', 'Ledok Sambi adalah sebuah tempat wisata dengan suguhan aliran sungai. Sebuah warung kopi denngan konsep piknik di tepian aliran sungai.', 'Digadang-gadang sebagai hidden place-nya Yogyakarta, tempat ini berada di lereng Gunung Merapi Sisi Selatan. Atau di sebelah Utara-nya Kota Yogyakarta.\r\nBerjarak sekitar 18 kilometer dari pusat kota Jogja. Bisa ditempuh dalam waktu sekitar 45 menit.\r\nBerada di dekat perkampungan, namun suasana sekitarnya masih begitu asri. Banyak pepohonan tinggi dan rindang.', 'LedokSambiMaps.png', 'No.KM. 19, Jl. Kaliurang No.2, Area Sawah, Pakembinangun, Kec. Pakem, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55582', 'https://www.google.com/maps/place/Ledok+Sambi/@-7.6470943,110.4280998,15z/data=!4m6!3m5!1s0x2e7a5de21c5696bb:0x1c946f8d6d01946!8m2!3d-7.6470943!4d110.4280998!16s%2Fg%2F1ptyk0y39?hl=id&entry=ttu', 'Masuk dan menikmati suasana di destinasi wisata ini tidak ada dikenakan biaya. Kamu bisa menikmati keindahan dan keseruan di sini secara gratis.\r\n\r\nNamun pengelola desa wisata Ledok Sambi memberikan kesempatan kepada pengunjung untuk berkontribusi seikhlasnya.', 'Flying fox, cafe dan aneka masakan, serta parkiran yang luas', 'Adapun biaya kegiatan-kegiatan tersebut antara lain:  Tubing / Kayak / Flying Fox : Rp20.000 – Rp25.000 per orang Paintball (min. 30/50 orang) : Rp85.000 – Rp115.000 perorang Batik painting (min. 30 o', 'Ledok Sambi buka dari pagi hingga sore. Yaitu dari pukul 09.00 hingga 17.00 WIB.  Namun bisa flexibl');

-- --------------------------------------------------------

--
-- Table structure for table `kuliner`
--

CREATE TABLE `kuliner` (
  `ID_Kuliner` int(11) NOT NULL,
  `Judul_Makanan` varchar(255) DEFAULT NULL,
  `Kategori` varchar(64) NOT NULL,
  `Foto_Makanan` varchar(255) DEFAULT NULL,
  `Deskripsi_Makanan` text DEFAULT NULL,
  `alamat` varchar(255) NOT NULL,
  `Link_Google_Maps` varchar(255) DEFAULT NULL,
  `Kisaran_Harga` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kuliner`
--

INSERT INTO `kuliner` (`ID_Kuliner`, `Judul_Makanan`, `Kategori`, `Foto_Makanan`, `Deskripsi_Makanan`, `alamat`, `Link_Google_Maps`, `Kisaran_Harga`) VALUES
(7, 'Gudeg Yu Djum', 'Gudeg', 'gudegyudjum.jpg', 'Nasi Gudeg yang disajikan lengkap dengan nasi dicampur dengan kuah santan kental (areh), ayam kampung, telur, tempe, tahu dan sambal goreng krecek.', 'Jl. A.M. Sangaji No.93, RT.027/RW.07, Karangwaru, Kec. Tegalrejo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55241', 'https://maps.app.goo.gl/uLJ9fJ8o9noXSmd2A', 'Rp 25,000 - Rp 35,000'),
(8, 'Gudeg Bu Hj.Ahmad', 'Gudeg', 'gudegHjAhmad.jpg', 'Gudeg Legendaris telah berdiri sejak tahun 1965 gudeg yang dijual adalah gudeg kering yang dapat tahan selama beberapa hari sehingga dapat digunakan sebagai oleh-oleh.', 'Jalan Kaliurang KM.4,5 Blok CT3 No.5, Jl. Kaliurang No.2, Kocoran, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55281', 'https://maps.app.goo.gl/iBvmc6TaL3qJaeDS6', 'Rp 30,000 - Rp 65,000'),
(9, 'Sate Klathak Pak Pong', 'Sate-Klathak', 'satePakPong.png', 'kuliner legendaris asal Jogja yang terkenal dengan dagingnya yang ditusuk menggunakan jeruji sepeda dan rasanya yang gurih.', 'Jl. Imogiri Tim. No.10, Ketongo, Wonokromo, Kec. Pleret, Kabupaten Bantul, Daerah Istimewa Yogyakarta 55791', 'https://g.co/kgs/B4WSy9', 'Rp 24,000 - Rp 39,000'),
(10, 'Bakmi Jowo Mbah Gito', 'Bakmi-Jawa', 'BakmiJawaMasTimbul.JPG', 'Warung ini dikenal karena menyajikan bakmi Jawa dengan cita rasa khas racikan keluarga Mbah Gito.', 'Jl. Nyi Ageng Nis No.9, Rejowinangun, Kec. Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55171', 'https://maps.app.goo.gl/baSnDaHceHNDLg3C6', 'Rp 20,000 - Rp 40,000'),
(11, 'Mangut Lele Mak Badar', 'Mungut-Lele', 'Mangut lele mak badar.JPG', 'Terbuat dari ikan lele yang dimasak dengan bumbu khas Jawa dan kuah santan.', 'Glagah uh4 no.107 rt05/rw01, Warungboto, Kec. Umbulharjo, Kota Yogyakarta, Daerah Istimewa Yogyakarta 55164', 'https://maps.app.goo.gl/6U4tN7AjK2v1E2Jf8', 'Rp 20,000 - Rp 25,000');

-- --------------------------------------------------------

--
-- Table structure for table `pengunjung`
--

CREATE TABLE `pengunjung` (
  `id_pengunjung` int(11) NOT NULL,
  `nama` varchar(64) NOT NULL,
  `tanggal` date NOT NULL,
  `email` varchar(64) NOT NULL,
  `pass` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengunjung`
--

INSERT INTO `pengunjung` (`id_pengunjung`, `nama`, `tanggal`, `email`, `pass`) VALUES
(1, 'rakha', '2023-11-14', 'rakha@12', '1234'),
(5, 'Rakha', '2023-11-15', 'Rakha@gmail.com', '$2y$10$SANhvXdbgvxBQeZKXbnrJuRtnpmHCUQGTNWZBokwE0I5Su643QbFO'),
(6, 'Handini Fatma', '2004-06-24', 'Handini@gmail.com', '$2y$10$dDgNLXAZiIP4XBKKX.WpVeUKrBTy5gk32F8PxPZY5pAAGAre28SFe'),
(7, 'Naufal Aristyo', '2021-11-17', 'Naufal@gmail.com', '$2y$10$LswyuvM522nwjE47.48S4eMU1J9u.8M/7aCB0d1HKcyzAjmpYZkdK'),
(8, 'Sakti Chandra', '2022-05-12', 'Sakti@gmail.com', '$2y$10$Y0escwWZb1Nu0NsJaU5fyOKNUW/hsFp2omMbYh/1iEx2aPNAeDRJW'),
(9, 'Sakti', '2023-12-01', 'sakti@gmail.com', '$2y$10$okKpb0kVUTzYBrtaRc6qV.ABkCV25hyO1FYN0sguU0MyXUsxSAll6');

-- --------------------------------------------------------

--
-- Table structure for table `ulasan`
--

CREATE TABLE `ulasan` (
  `ID_Ulasan` int(11) NOT NULL,
  `ID_Pengunjung` int(11) NOT NULL,
  `ID_Desawisata` int(11) NOT NULL,
  `Ulasan` text DEFAULT NULL,
  `Penilaian` int(11) DEFAULT NULL,
  `Tanggal_Ulasan` date DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ulasan`
--

INSERT INTO `ulasan` (`ID_Ulasan`, `ID_Pengunjung`, `ID_Desawisata`, `Ulasan`, `Penilaian`, `Tanggal_Ulasan`, `email`) VALUES
(18, 5, 1, 'desa ini lumayan', 3, NULL, 'Rakha@gmail.com'),
(19, 5, 2, 'Sangat baik', 5, NULL, 'Rakha@gmail.com'),
(21, 5, 6, 'Tempat terbaik untuk healing dan menenangkan pikiran setelah EXPO 2023', 5, NULL, 'Rakha@gmail.com'),
(22, 8, 6, 'Tempat yang bagus, tapi saya datangnya waktu musim hujan, jadi gak bisa menikmati sunsetnya\r\n', 2, NULL, 'Sakti@gmail.com'),
(23, 7, 4, 'Cukup puas dengan semua wahana yang ada, berasa seperti di eropa, lain kali kesini lagii :)', 4, NULL, 'Naufal@gmail.com'),
(24, 7, 3, 'lain kali kesini lagii, tempatnya sangat edukatif', 2, NULL, 'Naufal@gmail.com'),
(25, 6, 6, 'Tempat yang seru berlibur bersama teman teman', 4, NULL, 'Handini@gmail.com'),
(26, 6, 1, 'Tempat yang sangat fotogenis sekali, gak sabar untuk mengunjunginya lagi\r\n', 5, NULL, 'Handini@gmail.com'),
(27, 8, 1, 'Saya sangat senang berkunjung ke Desa Wisata ini karena saya mendapat ilmu banyak', 4, NULL, 'Sakti@gmail.com'),
(28, 8, 1, 'Kritik dan Saran', 5, NULL, 'sakti@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `desa_wisata`
--
ALTER TABLE `desa_wisata`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `kuliner`
--
ALTER TABLE `kuliner`
  ADD PRIMARY KEY (`ID_Kuliner`);

--
-- Indexes for table `pengunjung`
--
ALTER TABLE `pengunjung`
  ADD PRIMARY KEY (`id_pengunjung`);

--
-- Indexes for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD PRIMARY KEY (`ID_Ulasan`),
  ADD KEY `ulasan_ibfk_1` (`ID_Pengunjung`),
  ADD KEY `ulasan_ibfk_2` (`ID_Desawisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `desa_wisata`
--
ALTER TABLE `desa_wisata`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `kuliner`
--
ALTER TABLE `kuliner`
  MODIFY `ID_Kuliner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pengunjung`
--
ALTER TABLE `pengunjung`
  MODIFY `id_pengunjung` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ulasan`
--
ALTER TABLE `ulasan`
  MODIFY `ID_Ulasan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ulasan`
--
ALTER TABLE `ulasan`
  ADD CONSTRAINT `ulasan_ibfk_1` FOREIGN KEY (`ID_Pengunjung`) REFERENCES `pengunjung` (`id_pengunjung`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ulasan_ibfk_2` FOREIGN KEY (`ID_Desawisata`) REFERENCES `desa_wisata` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
