-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2017 at 02:13 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `androidcommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `username` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `password` varchar(50) COLLATE latin1_general_ci NOT NULL,
  `nama_lengkap` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `email` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `no_telp` varchar(20) COLLATE latin1_general_ci NOT NULL,
  `level` varchar(20) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`username`, `password`, `nama_lengkap`, `email`, `no_telp`, `level`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', 'admin@admin.com', '085691638906', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
`id_produk` int(5) NOT NULL,
  `nama_produk` varchar(100) COLLATE latin1_general_ci NOT NULL,
  `deskripsi` text COLLATE latin1_general_ci NOT NULL,
  `gambar` varchar(100) COLLATE latin1_general_ci NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `deskripsi`, `gambar`) VALUES
(1, 'Kolaborasi Code Igniter & Bootsrap - Membangun Aplikasi PSB Sekolah', 'Cara terbaik mempelajari pemrograman Codeigniter adalah dengan langsung membuat sebuah aplikasi secara step by step. Dengan caranya yang khas, penulis menjelaskan cara pembuatan aplikasi secara sistematis dan detail. Pada buku ini dibahas cara pembuatan sebuah aplikasi imajinatif, yaitu Aplikasi Penerimaan Siswa Baru (PSB) Sekolah Online. Dimulai dengan penjelasan mengenai Alur PSB Online, Perancangan dan Pembuatan Database, Pembuatan Modul-Modul, hingga Pembuatan Laporan (Report) Berformat PDF.\r\nMenariknya lagi, dibahas juga Cara Mengkolaborasikan Codeigniter dengan Bootstrap. Saat ini, Bootstrap merupakan User Interface Framework yang paling hot dan paling banyak digunakan. Menguasai Bootstrap bisa jadi asset berharga dan nilai tambah bagi Programmer. Karena aplikasi yang dibuatnya tidak hanya berfungsi dengan baik, namun juga tampak bagus tampilannya dan professional.\r\nSebagai bonus, buku ini juga disertai CD Video Tutorial, sehingga bagi pengguna yang ingin langsung menggunakan Aplikasi PSB Sekolah Online bisa melihatnya secara live melalui Video yang meliputi Cara Instalasi Aplikasi, Setting Aplikasi, Cara Penggunaan Modul-Modul.', 'small_codeigniter.jpg'),
(2, 'Program Absensi Siswa Realtime dengan PHP dan SMS Gateway', 'Program Absensi Siswa digunakan untuk memantau para siswa terkait dengan tingkat kedisiplinan dalam proses belajar di sekolah, dimana tingkat kedisipilinan kehadiran siswa menjadi salah satu tolok ukur dalam proses penilaian.\r\nBeberapa program absensi yang penulis amati saat ini, ternyata dirasakan masih kurang efektif menurut para orang tua siswa, dimana mereka tidak bisa mengetahui apakah anak mereka  benar-benar masuk sekolah atau tidak. Untuk itulah, dibuat sebuah Sistem Absensi Realtime, dimana  apabila para siswa tidak mengikuti salah satu mata pelajaran saja, maka sistem secara otomatis akan memberikan informasi via SMS langsung ke nomor HP orang tua siswa.\r\nHal ini dimungkinkan, karena Program Absensi Siswa Realtime menggunakan teknologi SMS Gateway yang digabungkan dengan pemrograman web PHP dan MySQL. Selain itu, interface program dibuat Responsive menggunakan Bootstrap, sehingga tampilannya tetap bagus meskipun diakses melalui Smartphone.', 'small_smsgateway.jpg'),
(3, 'Membuat Web Profil Sekolah + PPDB Online', 'Saat ini, Website Profil Sekolah menjadi tren di dunia pendidikan, tanggapan yang bagus datang dari tenaga kependidikan, siswa, dan juga masyarakat. Dengan adanya website tersebut, pihak sekolah dapat memberikan informasi sekolah yang terbaru, akurat, dan cepat.\r\nMenariknya lagi, Website Profil Sekolah di integrasikan dengan PPDB (Penerimaan Peserta Didik Baru) Online yang digunakan untuk mengolah data calon siswa baru, sehingga mempermudah pengelolaan administrasi dan transparansi dari proses penerimaan peserta didik baru tersebut. Tidak hanya itu, dibahas juga pembuatan Blog Siswa untuk mengasah kreativitas mereka, dimana Blog tersebut juga di integrasikan ke Website Profil Sekolah.\r\nWebsite dibangun menggunakan PHP, MySQL, AJAX/jQuery & Bootstrap. Dan website juga menerapkan RESPONSIVE, sehingga Website Profil Sekolah juga dapat tampil dengan bagus saat diakses melalui handphone, baik Halaman Pengunjung maupun Halaman Administrator.', 'small_ppdb.jpg'),
(4, 'Membuat Sendiri Website Pertemanan dengan PHP dan jQuery', 'Website Pertemanan atau Jejaring Sosial saat ini semakin populer saja, tengok saja Facebook dan Twitter yang sudah menjadi aktifitas rutin sehari-hari banyak orang. Melalui buku ini, penulis ingin berbagi tentang bagaimana membuat Website Pertemanan dari Nol dengan pemrograman PHP dan jQuery. Mulai dari Perancangan Database, Login dan Registrasi Member, Update Status, Update Komentar, Upload dan Galeri Foto, List/Daftar Teman, Permintaan Teman, Notifikasi di Header, sampai dengan Pengiriman Pesan Pribadi (Private Message) serta Halaman Administratornya. \r\n\r\nSebelumnya dibahas dulu Teknik Dasar Pemrograman Jejaring Sosial seperti pembuatan Posting Status di Wall, Posting Komentar pada Status, Embed Konten Video dan Foto, Upload dan Cropping Image, Paging Bergaya Facebook, Auto Suggest pada Pencarian Member, serta Sistem Jejaring dalam Website Pertemanan.Dan menariknya, semua teknik dikombinasikan dengan Ajax jQuery, sehingga  aplikasinya responsif dalam satu halaman tanpa harus me-refresh ataupun berpindah halaman.', 'small_websitepertemanan.jpg'),
(5, 'Kolaborasi Dahsyat ANDROID dengan PHP dan MySQL\r\n', 'Siapapun mungkin tidak menyangkal bahwa saat ini Android menjadi Sistem Operasi yang sangat populer di ranah mobile, mengingat sifat Android yang Open Source membuat semua orang dapat dengan bebas mengembangkan maupun menciptakan berbagai aplikasi yang berjalan dalam platform Android.\r\nUntuk itu, buku ini dirancang untuk orang yang berminat menjadi pengembang aplikasi berbasis Sistem Operasi Android. Dalam buku ini akan dibahas mengenai Instalasi dan Dasar-Dasar Pemrograman Android seperti Pengenalan Konsep Pemrograman Android, UI (User Interface), Layout, Widget, Activity, Intent dan Asyncronous Task.\r\nDisamping itu, buku ini juga secara khusus membahas mengenai Kolaborasi Android dengan PHP dan MySQL yang mengupas bagaimana Aplikasi Android memanfaatkan Web Service yang dihasilkan oleh PHP dan database MySQL dalam format pertukaran data berupa XML dan JSON. Dan terakhir, sebagai bonus akan dibahas pembuatan Proyek Aplikasi Android dengan Studi Kasus Aplikasi Portal Berita CMS Lokomedia Versi Android.', 'small_kolaborasi.jpg'),
(6, 'Trik Mudah Menguasai OOP dengan PHP', 'Saat ini, Pemrograman Berorientasi Objek atau OOP menjadi begitu populer dan banyak digunakan oleh Programmer. Buktinya, CMS Joomla!, Wordpress, Drupal, Prestashop, semuanya dibuat dengan teknik OOP. Apalagi trend penggunaan Framework PHP seperti Codeigniter, CakePHP, Yii, Zend, yang notabene semuanya juga dibuat dgn teknik OOP.\r\nGaya pemrograman OOP masih menjadi momok menakutkan bagi Programmer pemula, terutama yang terbiasa dengan gaya pemrograman Prosedural. Itu dikarenakan OOP banyak dibahas dari sisi teoritisnya saja, belum menyentuh pada contoh studi kasus nyata yang konkrit dan detail.\r\nDalam buku ini, OOP akan dibahas secara praktis menggunakan pemrograman PHP. Dimulai dari Konsep Dasar OOP, Penerapan OOP dalam PHP, Pengolahan Database dengan OOP, sampai dengan Studi Kasus tentang pembuatan Aplikasi Pembayaran Angsuran Bank utuh dengan gaya OOP yang dibahas secara langkah demi langkah.', 'small_oop.jpg'),
(7, 'Responsive Web Design dengan PHP dan Bootstrap', 'Saat ini, pengaksesan Internet melalui Smartphone dan Tablet meningkat tajam, bahkan di beberapa negara seperti China dan Korea mengalahkan akses Internet melalui PC dan Laptop. Ini tantangan bagi pengembang website agar dapat membuat web tampil dengan baik dan cantik pada berbagai ukuran layar, baik PC maupun Mobile Phone. "Solusi terbaik untuk mengatasi hal tersebut adalah Responsive Web" kata Google.\r\nBuku ini membahas Framework paling populer untuk membuat Responsive Web, yaitu Bootstrap (Twitter Bootstrap). Dengan Bootstrap, Anda bisa membuat Responsive dalam waktu singkat, tanpa perlu pusing kepala dengan segala macam teknik CSS3, HTML5 ataupun JavaScript untuk merespon ukuran layar dari mobile device.\r\nDidalam buku ini dibahas Dasar-Dasar Bootstrap serta Fitur-Fitur yang terdapat didalamnya, seperti Layout, Grid, Tipografi, Tabel, Form, Tombol, Image, Ikon, Menu, Navigasi, JavaScript Plugin, dan Komponen-Komponen Lainnya disertai Contoh-Contoh Penggunaannya. Dan di bagian akhir akan dibahas Proyek Pembuatan Web Template yang Responsive, baik yang berdiri sendiri maupun penerapan Template tersebut pada suatu CMS, dalam kasus ini CMS Lokomedia.', '34bootsrap.jpg'),
(8, 'Membuat Sistem Monitoring Pelanggaran Siswa Berbasis Web dan Android', 'Sesuai dengan namanya, pembuatan Sistem Monitoring Pelanggaran Siswa bertujuan untuk mencatat setiap pelanggaran yang dilakukan oleh siswa, dimana dengan adanya sistem ini, maka setiap guru (tidak hanya bagian kesiswaan saja) bisa menginput pelanggaran yang dilakukan oleh siswanya sendiri, dan secara otomatis pada setiap akhir tahun ajaran, data-data pelanggaran tersebut bisa di rekap secara cepat menjadi sebuah laporan dan statistik yang nyaman untuk dibaca dan dilihat.\r\nProgram atau sistemnya akan diberi nama CHaPSA. Didalam buku ini akan dibahas tuntas cara pembuatannya, diawali dari desain sistem, interface program dan alur sistem, dilanjutkan dengan implementasi coding dengan PHP dan AJAX, dan terakhir implementasi coding dengan Android. Untuk CHaPSA yang berbasis Android juga dibuat versi Siswa, dimana nantinya siswa bisa memonitor pelanggaran yang sudah pernah mereka lakukan.', '9553membuat-sistem-monitoring-pelanggaran-siswa-berbasis-web-dan-android.jpg'),
(26, 'resep', 'masakan', '31images (1).jpg'),
(29, 'aku', 'kamu', '22e-ktp mmh.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
 ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
MODIFY `id_produk` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
